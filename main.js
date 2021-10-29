import './styles.scss'
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);
console.log(ScrollTrigger);

Swiper.use([Navigation, Pagination, Autoplay]);

// init Swiper:
//const swiper = new Swiper(...);


var hamburgerBtn = document.querySelector('.navicon');
var hamburgerMenu = document.querySelector('.menu__hamburger');


hamburgerBtn.addEventListener('click', function () {

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

const swiperHeros = new Swiper('.acc__heros__swiper', {
  direction: 'horizontal',
  loop: true,
  speed: 600,

  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },

  pagination: {
    el: '.pagination-heros',
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


});

const swiperFooter = new Swiper('.pied-page__swiper', {
  direction: 'horizontal',
  loop: true,
  speed: 600,

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

const swiper = new Swiper('.swiper02', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  effect: 'coverflow',
  coverflowEffect: {
    rotate: 30,
    slideShadows: false,
  },


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

hamburgerBtn.addEventListener('mouseover', function () {
  gsap.to('.navicon', { y: '-10px', rotationY: 180 })
});

hamburgerBtn.addEventListener('mouseout', function () {
  gsap.to('.navicon', { y: '0px', rotationY: -180 })
});


gsap.timeline({ 
  scrollTrigger: {
    markers: true,
    start: 'top 75%',
    end: 'bottom 25%',
    toggleActions: 'restart complete reverse reset',
    trigger: '.don--img',
  }
})
.fromTo('.ballon--rouge', {
    y: '-200%',
    opacity: '0%',
  },
    {
      y: '0%',
      opacity: '100%',
      ease: "back",
      duration: 0.4,
      rotation: '360',
    }
  )
  .fromTo('.ballon--orange', {
    y: '-200%',
    opacity: '0%',
  },
    {
      y: '0%',
      opacity: '100%',
      ease: "back",
      duration: 0.5,
      rotation: '-360'
    }
  )
  .fromTo('.ballon--bleu', {
    y: '-200%',
    opacity: '0%',
  },
    {
      y: '0%',
      opacity: '100%',
      ease: "back",
      duration: 0.4,
      rotation: '360'
    }
  )
  .to('.ballon', {
    rotation: '360', duration: 2, y: '-400vh', delay: 0.4,
  })





