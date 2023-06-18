import Swiper from 'swiper/bundle';
import Alpine from 'alpinejs'
import mask from '@alpinejs/mask'

window.Alpine = Alpine
 
Alpine.plugin(mask)
Alpine.start()

// import styles bundle
import 'swiper/css/bundle';

var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
});



  