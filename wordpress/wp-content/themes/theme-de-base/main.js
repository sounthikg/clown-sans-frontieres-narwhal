import{g as a,S as c,a as r,N as d,P as f,A as y}from"./vendor.3019e036.js";const g=function(){const n=document.createElement("link").relList;if(n&&n.supports&&n.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))s(e);new MutationObserver(e=>{for(const t of e)if(t.type==="childList")for(const i of t.addedNodes)i.tagName==="LINK"&&i.rel==="modulepreload"&&s(i)}).observe(document,{childList:!0,subtree:!0});function p(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerpolicy&&(t.referrerPolicy=e.referrerpolicy),e.crossorigin==="use-credentials"?t.credentials="include":e.crossorigin==="anonymous"?t.credentials="omit":t.credentials="same-origin",t}function s(e){if(e.ep)return;e.ep=!0;const t=p(e);fetch(e.href,t)}};g();a.registerPlugin(c);console.log(c);r.use([d,f,y]);var u=document.querySelector(".navicon"),o=document.querySelector(".menu__hamburger");u.addEventListener("click",function(){var l=o.style.display;l!=="flex"?(o.style.display="flex",o.style.height="100vh"):(o.style.display="none",o.style.height="")});new r(".acc__heros__swiper",{direction:"horizontal",loop:!0,speed:600,autoplay:{delay:5e3,disableOnInteraction:!1},pagination:{el:".pagination-heros"},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});new r(".pied-page__swiper",{direction:"horizontal",loop:!0,speed:600,autoplay:{delay:4e3,disableOnInteraction:!1},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},scrollbar:{el:".swiper-scrollbar"}});new r(".swiper02",{direction:"horizontal",loop:!0,effect:"coverflow",coverflowEffect:{rotate:30,slideShadows:!1},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});u.addEventListener("mouseover",function(){a.timeline().to(".navicon",{rotationZ:-10}).to(".navicon",{rotationZ:20}).to(".navicon",{rotationZ:0},"-=0.1")});a.timeline({scrollTrigger:{markers:false,start:"top 75%",end:"bottom 25%",toggleActions:"restart complete reverse reset",trigger:".don--img"}}).fromTo(".ballon--rouge",{y:"-200%",opacity:"0%"},{y:"0%",opacity:"100%",ease:"back",duration:.4,rotation:"360"}).fromTo(".ballon--orange",{y:"-200%",opacity:"0%"},{y:"0%",opacity:"100%",ease:"back",duration:.5,rotation:"-360"}).fromTo(".ballon--bleu",{y:"-200%",opacity:"0%"},{y:"0%",opacity:"100%",ease:"back",duration:.4,rotation:"360"}).to(".ballon",{rotation:"360",duration:2,y:"-400vh",delay:.4});

			var donButton = document.querySelector('.menu__don__button');
			var parentButton = document.querySelector('.menu__hamburger');
			var lang = document.querySelector('.menu__lang');

			var divButton = document.createElement('div');
			divButton.className = 'menu__don';
				
			parentButton.appendChild(divButton);
			divButton.appendChild(donButton);

			function insertBefore(referenceNode, button) {
  				referenceNode.parentNode.insertBefore(button, referenceNode.nextSibling);
			 }

	        insertBefore(lang, divButton);

      
              fetch("./wp-json/wp/v2/nouvelles?_embed")
              .then(response => response.json())
              .then(data => {

              	let html = "";
               		let cardList = document.querySelector('.nouvelles__cards__list')

              	for (let i = 0; i < 3; i++) {
					  
					let link = data[i].link;
              		let title = data[i].title.rendered;
              		let author = data[i].acf.auteur;
               		let type = data[i].acf.type;
              		let date = data[i].acf.date;
              		let resume = data[i].acf.resume;
                   let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

             		html += `
					<a href='${link}'>
              		<div class="nouvelles__card">
               			<img src="${image}" class="card-img-top">
              			<div class="card-body">
              				<h3 class="card-title">${title}</h3>
              				<p class='nouvelles__type'>${type}</p>
              					${resume}
             			</div>
              			<div class="card-footer">
              			<img src='<?php echo get_template_directory_uri(); ?>/images/user.png'/> Par ${author}</div>
                  	</div>
					</a>


              		`;

               		cardList.innerHTML = html;

              	} 


               });
            
