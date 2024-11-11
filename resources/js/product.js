// zoom product image
import "../../node_modules/jquery/dist/jquery.min";
import "jquery-zoom";

$(".zoom").zoom();

// product image slider with thumbs
import Swiper from "swiper";
import { Navigation, Thumbs } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";

const baseConfig = {
    modules: [Navigation, Thumbs],
    loop: true,
    spaceBetween: 16,
};

const getConfig = (obj) => {
    return Object.assign({}, baseConfig, { ...obj });
};

const productThumbSlider = new Swiper(
    ".product-thumb-slider",
    getConfig({
        slidesPerView: 4,
    })
);

const productSlider = new Swiper(
    ".product-slider",
    getConfig({
        navigation: {
            nextEl: ".product-slider .swiper-navigation-next",
            prevEl: ".product-slider .swiper-navigation-prev",
        },
        thumbs: {
            swiper: productThumbSlider,
        },
    })
);
