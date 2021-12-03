import 'bootstrap';

import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import './styles.scss'

gsap.registerPlugin(ScrollTrigger);


// init Swiper:
//const swiper = new Swiper(...);
gsap.timeline({
  defaults: {
      repeat: -1,
      delay: 1
  }
})
  .fromTo('.larme01',
      { scale: 0.5, opacity: 0.5 },
      { scale: 1, opacity: 1, duration: 2, y: '400%' }, { scale: 0.5, opacity: 0, duration: 2, ease: 'sine', })

  .fromTo('.larme02',
      { scale: 0.5, opacity: 0.5 },
      { scale: 1, opacity: 1, duration: 2, y: '400%' }, { scale: 0.5, opacity: 0, duration: 2, ease: 'sine', })

gsap.fromTo(
  '.ballon-404',
  { rotate: "2deg" },
  {
      rotate: "-2deg", duration: 2.5, ease: "slow", repeat: -1, yoyo: true,
  }
)

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
  gsap.timeline()
  .to('.navicon', { rotationZ: -10 })
  .to('.navicon', { rotationZ: 20 })
  .to('.navicon', { rotationZ: 0 },
  '-=0.1');
});

const playDon = document.querySelector('.playDon');

playDon.addEventListener('click', function() {
gsap.timeline()
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
    rotation: '360', duration: 2, y: '-400vh',  opacity: '0%', delay: 0.4,
  })
});

//apercu suivante nouvelle

let boutonapercu = 
document.querySelector(".bouton-detail-nouvelle");
let apercu = 
document.querySelector(".apercu-bigger-box");


boutonapercu.addEventListener('click', ()=> {
apercu.classList.add('apercu-bigger-box-visible');
apercu.classList.remove('apercu-bigger-box')
});


//apercu suivante service

let boutonapercu2 = 
document.querySelector(".bouton-detail-service");
let apercu2 = 
document.querySelector(".apercu-bigger-box-service");


boutonapercu2.addEventListener('click', ()=> {
apercu2.classList.add('apercu-bigger-box-service-visible');
apercu2.classList.remove('apercu-bigger-box-service')
});






