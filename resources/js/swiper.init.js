// swiper
// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";

class SwiperSlider {
    constructor(selector) {
        this.sliders = document.querySelectorAll(selector);
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
        let config = {};
        const configString = slider.dataset.config;
        const baseConfig = {
            modules: [Navigation, Pagination, Autoplay],
            loop: true,
            pagination: {
                el: slider.querySelector(".swiper-pagination"),
                clickable: true,
            },
            navigation: {
                nextEl: slider.querySelector(".swiper-navigation-next"),
                prevEl: slider.querySelector(".swiper-navigation-prev"),
            },
        };

        if (configString) {
            try {
                config = JSON.parse(configString.replace(/'/g, '"'));
            } catch (e) {
                console.error("Invalid JSON configuration for Swiper:", e);
            }
        }

        return Object.assign({}, baseConfig, config);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    new SwiperSlider(".swiper");
});
