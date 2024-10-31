// swiper
// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";

class SwiperSlider {
    constructor(selector) {
        this.sliders = document.querySelectorAll(selector);
        this.baseConfig = {
            // configure Swiper to use modules
            modules: [Navigation, Pagination],

            // Optional parameters
            loop: true,

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-navigation-next",
                prevEl: ".swiper-navigation-prev",
            },
        };
        this.initSlider();
    }

    initSlider() {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const slider = entry.target;
                    const config = this.getConfig(slider);
                    new Swiper(slider, config);
                    observer.unobserve(slider);
                }
            });
        });

        this.sliders.forEach((slider) => observer.observe(slider));
    }

    getConfig(slider) {
        const configString = slider.dataset.config;
        let config = {};

        try {
            config = JSON.parse(configString);
        } catch (e) {
            console.error("Invalid JSON configuration for Swiper:", e);
        }

        return Object.assign({}, this.baseConfig, config);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    new SwiperSlider(".swiper");
});
