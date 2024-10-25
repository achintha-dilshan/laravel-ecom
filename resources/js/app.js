import "./bootstrap";
// flowbite
import "flowbite";
// swiper
// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";

const swiper = new Swiper(".swiper", {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],

    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return `<div class="group ${className}"><span class="rounded-full cursor-pointer inline-block bg-gray-800/30 size-2 group-[.swiper-pagination-bullet-active]:bg-gray-800/50"></span></div>`;
        },
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-navigation-next",
        prevEl: ".swiper-navigation-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});
