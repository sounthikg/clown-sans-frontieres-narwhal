

		
import{g as a,S as c,a as r,N as d,P as f,A as y}from"./vendor.3019e036.js";const g=function(){const n=document.createElement("link").relList;if(n&&n.supsports&&n.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))s(e);new MutationObserver(e=>{for(const t of e)if(t.type==="childList")for(const i of t.addedNodes)i.tagName==="LINK"&&i.rel==="modulepreload"&&s(i)}).observe(document,{childList:!0,subtree:!0});function p(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerpolicy&&(t.referrerPolicy=e.referrerpolicy),e.crossorigin==="use-credentials"?t.credentials="include":e.crossorigin==="anonymous"?t.credentials="omit":t.credentials="same-origin",t}function s(e){if(e.ep)return;e.ep=!0;const t=p(e);fetch(e.href,t)}};g();a.registerPlugin(c);console.log(c);r.use([d,f,y]);var u=document.querySelector(".navicon"),o=document.querySelector(".menu__hamburger");u.addEventListener("click",function(){var l=o.style.display;l!=="flex"?(o.style.display="flex",o.style.height="100vh"):(o.style.display="none",o.style.height="")});new r(".acc__heros__swiper",{direction:"horizontal",loop:!0,speed:600,autoplay:{delay:5e3,disableOnInteraction:!1},pagination:{el:".pagination-heros"},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});new r(".pied-page__swiper",{direction:"horizontal",loop:!0,speed:600,autoplay:{delay:4e3,disableOnInteraction:!1},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},scrollbar:{el:".swiper-scrollbar"}});new r(".swiper02",{direction:"horizontal",loop:!0,effect:"coverflow",coverflowEffect:{rotate:30,slideShadows:!1},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});u.addEventListener("mouseover",function(){a.timeline().to(".navicon",{rotationZ:-10}).to(".navicon",{rotationZ:20}).to(".navicon",{rotationZ:0},"-=0.1")});a.timeline({scrollTrigger:{markers:false,start:"top 75%",end:"bottom 25%",toggleActions:"restart complete reverse reset",trigger:".don--img"}}).fromTo(".ballon--rouge",{y:"-200%",opacity:"0%"},{y:"0%",opacity:"100%",ease:"back",duration:.4,rotation:"360"}).fromTo(".ballon--orange",{y:"-200%",opacity:"0%"},{y:"0%",opacity:"100%",ease:"back",duration:.5,rotation:"-360"}).fromTo(".ballon--bleu",{y:"-200%",opacity:"0%"},{y:"0%",opacity:"100%",ease:"back",duration:.4,rotation:"360"}).to(".ballon",{rotation:"360",duration:2,y:"-400vh",delay:.4});


//FETCH LES MEMBRES DE L'ÉQUIPE 

fetch("https://clownssansfrontieres.qc.lu/wp-json/wp/v2/membres?_embed&orderby=date&order=asc&per_page=13")
.then(response => response.json())
.then(data => { 
	console.log(data);
	let htmlModal = '';
	let htmlGrid1 = "";
  	let htmlGrid2 = "";
	let grid1 = document.querySelector('#grid1');
  	let grid2 = document.querySelector('#grid2');
	let modals = document.querySelector('#modals');

	//MODALS

	for (let i = 0; i < data.length; i++) {
		
		let memberName = data[i].title.rendered;
		let role = data[i].acf.role_membre;
		let quote = data[i].acf.quote;
	  	let description = data[i].acf.description_membre;
	  	let shortName = data[i]._embedded['wp:featuredmedia'][0].slug;

		htmlModal += `

		<div class="modal fade" id="${shortName}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header text-center">
					<h5 class="modal-title w-100" id="exampleModalLabel">À propos de ${memberName}</h5>
					</div>
					<div class="modal-body">
					<div class="row align-items-center">
						<div class="col-5 center-photo">
						<img class="icone-photo" src="https://clownssansfrontieres.qc.lu/wp-content/uploads/2021/11/${shortName}-couleur.jpg" alt="">
						</div>
						<div class="col-7">
						<div class="modal-italique">${quote}</div>
						<div class="modal-texte">${description}</div>
						</div>
					</div>
					</div>
				</div>
			</div>
	  	</div>
	  `

	  modals.innerHTML = htmlModal;
	}

	//GRID 1

	for (let i = 0; i < 6; i++) {
		
		let memberName = data[i].title.rendered;
		let role = data[i].acf.role_membre;
		let quote = data[i].acf.quote;
	  	let description = data[i].acf.description_membre;
		let membreImage = data[i]._embedded['wp:featuredmedia'][0].source_url;
	  	let shortName = data[i]._embedded['wp:featuredmedia'][0].slug;
	

	  	console.log(memberName, role, quote, description, membreImage, shortName)

		  htmlGrid1 += `
		  
		  <div class="membre">
			  <div class="image">
				  <img src="${membreImage}" alt="${shortName}">
				  <div class="doodle"><img src="https://clownssansfrontieres.qc.lu/wp-content/uploads/2021/11/${shortName}-doodle.png" alt="${shortName}"></div>
			  </div>

			  <h2>${memberName}</h2>
			  <div class="desc">${role}</div>
			  <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#${shortName}">
			  En savoir plus</button>
		  </div>
		  `

		

		  grid1.innerHTML = htmlGrid1;	
	  

	}

	//GRID 2

	for (let i = 6; i < 15; i++) {
		
		let memberName = data[i].title.rendered;
		let role = data[i].acf.role_membre;
		let quote = data[i].acf.quote;
	  	let description = data[i].acf.description_membre;
		let membreImage = data[i]._embedded['wp:featuredmedia'][0].source_url;
	  	let shortName = data[i]._embedded['wp:featuredmedia'][0].slug;
	

	  	console.log(memberName, role, quote, description, membreImage, shortName)

		  htmlGrid2 += `
		  
		  <div class="membre">
			  <div class="image">
				  <img src="${membreImage}" alt="${shortName}">
				  <div class="doodle"><img src="https://clownssansfrontieres.qc.lu/wp-content/uploads/2021/11/${shortName}-doodle.png" alt="${shortName}"></div>
			  </div>

			  <h2>${memberName}</h2>
			  <div class="desc">${role}</div>
			  <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#${shortName}">
			  En savoir plus</button>
		  </div>
		  `

		

		  grid2.innerHTML = htmlGrid2;	  


	}
	
});




			//FOOTER PARTENAIRES FETCH
			fetch("./wp-json/wp/v2/partenaires?_embed")
              .then(response => response.json())
              .then(data => {

					let htmlPartenaire = "";
					let partenairesList = document.querySelector('#partenaires-api')

					for (let i = 0; i < data.length; i++) {

						let linkPartenaire = data[i].acf.lien_partenaire;				
					let imagePartenaire = data[i]._embedded['wp:featuredmedia'][0].source_url;

					
						htmlPartenaire += `

						<div class="swiper-slide">
						<a href='${linkPartenaire}'><img src="${imagePartenaire}" class="img-horizontal" /></a>
						</div>

						`;

						partenairesList.innerHTML = htmlPartenaire;
		

					}
           		});





			//MENU DON STYLE
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



			//FETCH SERVICES POUR ACCUEIL

			fetch("./wp-json/wp/v2/servicess")
              .then(response => response.json())
              .then(data => {

              	let htmlService= "";
            	let servicesList = document.querySelector('#services_api')

              	for (let i = 0; i < 3; i++) {
					  
					let linkService = data[i].link;
              		let titleService = data[i].title.rendered;
              		let resumeService = data[i].acf.resume_du_service;
					let iconService = data[i].acf.icon_service;

				  
					htmlService += `
					
					 <div class="col-xl-6 col-md-6">
					 <div class="card border border-2 mb-3 p-3" style="max-width: 600px">
					   <div class="row align-items-center">
						 <div class="col-xl-3">
						   <img class="card-img" src="${iconService}" alt="" />
						 </div>
						 <div class="col-xl-9">
						   <div class="card-body">
							 <h4 class="card-title">${titleService}</h4>
							 <p class="card-text">
							   ${resumeService}
							 </p>
							 <a href='${linkService}'>
							   <button type="button" class="btn btn-outline-info border-2">
							   En savoir plus
							 </button>
							 </a>
						   </div>
						 </div>
					   </div>
					 </div>
				   </div>

              		`;

					servicesList.innerHTML = htmlService;
	

              	}
            });





			//FETCH NOUVELLES POUR ACCUEIL
      
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

					//texte se coupe si trop long pour les cartes nouvelles

					if (resume.length > 200) {
					resume = resume.substr(0, resume.lastIndexOf(' ', 200)) + ' [...]';
				  }

				  if (title.length > 50) {
					title = title.substr(0, title.lastIndexOf(' ', 50)) + '...';
				  } 
				  ///

				  
             		html += `
					 
					<a class='nouvelles__link' href='${link}'>
              		<div class="nouvelles__card">
               			<img src="${image}" class="card-img-top">
              			<div class="card-body">
              				<h3 class="card-title">${title}</h3>
              				<p class='nouvelles__type'>${type}</p>
              					${resume}
             			</div>
              			<div class="card-footer">
              			<img src='https://clownssansfrontieres.qc.lu/wp-content/themes/theme-de-base/images/user.png'/> Par ${author}</div>
                  	</div>
					</a>


              		`;

               		cardList.innerHTML = html;
	

              	}
            });


			//FETCH POUR HUB NOUVELLES	
      
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

				  //texte se coupe si trop long pour les cartes nouvelles

				  if (resume.length > 200) {
				  resume = resume.substr(0, resume.lastIndexOf(' ', 200)) + ' [...]';
				}

				if (title.length > 50) {
				  title = title.substr(0, title.lastIndexOf(' ', 50)) + '...';
				} 
				///

				
				   html += `
				   
				  <a class='nouvelles__link' href='${link}'>
					<div class="nouvelles__card">
						 <img src="${image}" class="card-img-top">
						<div class="card-body">
							<h3 class="card-title">${title}</h3>
							<p class='nouvelles__type'>${type}</p>
								${resume}
					   </div>
						<div class="card-footer">
						<img src='https://clownssansfrontieres.qc.lu/wp-content/themes/theme-de-base/images/user.png'/> Par ${author}</div>
					</div>
				  </a>


					`;

					 cardList.innerHTML = html;
  

				}
		  });


			//APERCU NOUVELLE SUIVANTE

			let boutonapercu = 
			document.querySelector(".bouton-detail-nouvelle");
			let apercu = 
			document.querySelector(".apercu-bigger-box");


			boutonapercu.addEventListener('click', ()=> {
			apercu.classList.add('apercu-bigger-box-visible');
			apercu.classList.remove('apercu-bigger-box')
			});









			

