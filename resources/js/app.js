import './bootstrap';
import 'preline';
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

const swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 10,
    loop: true,
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is <= 640px
        0: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        // when window width is <= 768px
        768: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        // when window width is <= 1024px
        1024: {
            slidesPerView: 5,
            spaceBetween: 10
        }
    }
});
