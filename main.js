import './styles.scss'
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';

Swiper.use([Navigation, Pagination, Autoplay]);

// init Swiper:
//const swiper = new Swiper(...);


var hamburgerBtn = document.querySelector('.navicon');
var hamburgerMenu = document.querySelector('.menu__hamburger');


hamburgerBtn.addEventListener('click', function() {

    var hamDisplay = hamburgerMenu.style.display;

    if (hamDisplay !== 'flex') {

        hamburgerMenu.style.display = 'flex';
        hamburgerMenu.style.height = '100vh';
    }

    else {

        hamburgerMenu.style.display = 'none';
        hamburgerMenu.style.height = '';
    }
    
})

const swiper = new Swiper('.pied-page__swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  speed: 600,

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});