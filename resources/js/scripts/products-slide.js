import Swiper, { Navigation, Pagination } from 'swiper';
  import 'swiper/css';
  import 'swiper/css/pagination';

  
 const swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 2,
    freeMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  