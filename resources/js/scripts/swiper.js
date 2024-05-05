import Swiper from 'swiper/bundle';
// import Swiper styles
import 'swiper/css/bundle';

// const swiper = new Swiper('.swiper', {
//     // Optional parameters
//     direction: 'horizontal',
//     loop: true,
//     slidesPerView: 4,
//     spaceBetween: 30,
  
//   });

  var swiper_thumbs = new Swiper(".nav-for-slider", {
    loop: true,
    spaceBetween: 30,
    slidesPerView: 5,
  });
  var swiper = new Swiper(".main-slide-carousel", {
    slidesPerView: 1,
    thumbs: {
      swiper: swiper_thumbs,
    },
  });
  


  
  