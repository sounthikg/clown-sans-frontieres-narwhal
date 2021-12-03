<?php 
/**
 * 	Template Name: services-hub
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
get_template_part( 'partials/heros_generique' );

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<svg class="grain z-index up-vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#fef1e2" d="M0,192L80,202.7C160,213,320,235,480,213.3C640,192,800,128,960,112C1120,96,1280,128,1360,144L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
	</svg>

	<div class='services-hub'>
		<div id='services_api2'></div>
	</div>

	

	<svg xmlns="http://www.w3.org/2000/svg" class='z-index' viewBox="0 0 1440 320">  
			<path fill="#fef1e2" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,256C480,256,600,224,720,192C840,160,960,128,1080,138.7C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
			></path>
	</svg>

	<script>
		

		fetch("<?php the_field('services_fetch')?>")
              .then(response => response.json())
              .then(data => {

              	let htmlService= "";
            	let servicesList = document.querySelector('#services_api2')

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

	</script>



<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>