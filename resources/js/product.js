// jquery-zoom
import "../../node_modules/jquery/dist/jquery.min";
import "jquery-zoom";

// swiper
import Swiper from "swiper";
// import Swiper and modules styles
import { Navigation, Thumbs } from "swiper/modules";
import "swiper/css";

// gLightbox
import GLightbox from "glightbox";
import "../../node_modules/glightbox/dist/css/glightbox.css";

// filepond
import * as FilePond from "filepond";
import "../../node_modules/filepond/dist/filepond.min.css";

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
        slidesPerView: 5,
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

// zoom product image on hover
$(".zoom").zoom();

// init gLightbox
new GLightbox();

// filepond init
FilePond.create(document.querySelector('input[type="file"]'), {
    maxFiles: 2,
});
