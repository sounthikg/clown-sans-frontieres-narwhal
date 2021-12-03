<?php 
/**
 * 	Template Name: news-hub
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

	<div class='hub-nouvelles'>
        <div class='input-text'>
		<?php the_field('nouvelles_trier') ?> :
            <select id="trier">
                <option value="asc"> <?php the_field('nouvelles_recentes') ?></option>
                <option value="desc"> <?php the_field('nouvelles_anciennes') ?></option>
        </select>
	</div>
			<div class='nouvelles-list'>		
			</div>
			<div>
            	<button id='plusNouvelles' class='bouton-hub-nouvelles'> <?php the_field('nouvelles_charger') ?>...</button>
          </div>
	</div>

	

	<svg xmlns="http://www.w3.org/2000/svg" class='z-index' viewBox="0 0 1440 320">  
			<path fill="#fef1e2" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,256C480,256,600,224,720,192C840,160,960,128,1080,138.7C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
			></path>
	</svg>

	<script>

		let nbrNouvelles = 6;
		let btnPlus = document.querySelector('#plusNouvelles');
		var trier = document.querySelector('#trier');
		let ordreNouvelles = 'asc';			

		trier.addEventListener("change", function() {
			var tri = this.value;
			ordreNouvelles = this.value;
			changerOrdre(tri);
			
		});


		//fetch depart et si ordre change

		changerOrdre("asc");
		function changerOrdre(ordre) {

			fetch(`<?php the_field('newsLink')?>/wp-json/wp/v2/nouvelles?_embed&orderby=date&order=${ordre}&per_page=13`)
			.then(response => response.json())
			.then(data  => {

				let htmlNouvelles = "";
				let nouvellesList = document.querySelector('.nouvelles-list');

				

				for (let i = 0; i < nbrNouvelles; i++) {
					
					let link = data[i].link;
					let title = data[i].title.rendered;
					let author = data[i].acf.auteur;
					let type = data[i].acf.type;
					let date = data[i].acf.date;
					let resume = data[i].acf.resume;
					let image = data[i]._embedded['wp:featuredmedia'][0].source_url;


					if (resume.length > 60) {
					resume = resume.substr(0, resume.lastIndexOf(' ', 100)) + ' [...]';
					}

					if (title.length > 50) {
					title = title.substr(0, title.lastIndexOf(' ', 50)) + '...';
					} 

					if (i == 0) {

						htmlNouvelles += `
					
							<a class='nouvelles__link first-new' href='${link}'>
								<div class="nouvelles__card">
									<img src="${image}" class="card-img-top first-new-img">
									<div class="card-body first-new-body">
										<h3 class="card-title first-new-title">${title}</h3>
										<p class='nouvelles__type'>${type}</p>
											${resume}
								</div>
									<div class="card-footer">
									<img src='https://clownssansfrontieres.qc.lu/wp-content/themes/theme-de-base/images/user.png'/> <?php the_field('nouvelles_par') ?> ${author}</div>
								</div>
							</a>


								`;

						nouvellesList.innerHTML = htmlNouvelles;


						
					}else {
						htmlNouvelles += `
					
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

						nouvellesList.innerHTML = htmlNouvelles;

					}						
				}
			});

		}


		//fetch au clic plus de nouvelles
		btnPlus.addEventListener('click', function() {
			
			nbrNouvelles += 6;

			fetch(`<?php the_field('newsLink')?>/wp-json/wp/v2/nouvelles?_embed&orderby=date&order=${ordreNouvelles}&per_page=13`)
			.then(response => response.json())
			.then(data  => {

				let htmlNouvelles = "";
				let nouvellesList = document.querySelector('.nouvelles-list')
				
				console.log(nbrNouvelles);

				if (nbrNouvelles > 13) {
					btnPlus.style.display = "none";
					nbrNouvelles = 13;
				}

				for (let i = 0; i < nbrNouvelles; i++) {
					
				let link = data[i].link;
				let title = data[i].title.rendered;
				let author = data[i].acf.auteur;
				let type = data[i].acf.type;
				let date = data[i].acf.date;
				let resume = data[i].acf.resume;
				let image = data[i]._embedded['wp:featuredmedia'][0].source_url;

				//texte se coupe si trop long pour les cartes nouvelles

				if (resume.length > 60) {
				resume = resume.substr(0, resume.lastIndexOf(' ', 100)) + ' [...]';
				}

				if (title.length > 50) {
				title = title.substr(0, title.lastIndexOf(' ', 50)) + '...';
				} 
				///

				
				htmlNouvelles += `
				
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

					nouvellesList.innerHTML = htmlNouvelles;


				}
			});

			
		})
	</script>

	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>