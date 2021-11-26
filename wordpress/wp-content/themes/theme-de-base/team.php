<?php 
/**
 * 	Template Name: team
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
get_template_part( 'partials/heros_generique' );


if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<div class='wrapper-vague'>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#fef1e2" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,96C384,75,480,53,576,69.3C672,85,768,139,864,165.3C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
		</svg>

	</div>



    <div class='equipe__contenu block'>

        <div class='equipe-titre'>Direction et bénévoles</div>

        <div class="grid" id='grid1'>
          

          <!--  <div class="membre">
            <div class="image">
                <img src="images/katel.jpg" alt="Katel">
                <div class="doodle"><img src="images/katel-doodle.png" alt="katel"></div>
            </div>
            <h2>Katel Le Fustec</h2>
            <div class="desc">Directrice générale et artistique</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#katel">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/michele.jpg" alt="michele">
                    <div class="doodle"><img src="images/michele-doodle.png" alt="michele"></div>
                </div>
            <h2>Michèle D'Argenio</h2>
            <div class="desc">Adjointe à la direction</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#michele">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/marie-eve.jpg" alt="marie-eve">
                    <div class="doodle"><img src="images/marie-eve-doodle.png" alt="marie-eve"></div>
                </div>

            <h2>Marie-Eve Aubry</h2>
            <div class="desc">Responsable du CRI</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#marie-eve">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/hadrien.jpg" alt="hadrien">
                    <div class="doodle"><img src="images/hadrien-doodle.png" alt="hadrien"></div>
                </div>
            <h2>Hadrien Collin</h2>
            <div class="desc">Administrateur du site web</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#hadrien">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/jean-francois.jpg" alt="jean-francois">
                    <div class="doodle"><img src="images/jean-francois-doodle.png" alt="jean-francois"></div>
                </div>
            <h2>Jean-François Paré</h2>
            <div class="desc">Soutien technique, informatique</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#jean-francois">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/billy.jpg" alt="billy">
                    <div class="doodle"><img src="images/billy-doodle.png" alt="billy"></div>
                </div>
            <h2>Billy Maude</h2>
            <div class="desc">Soutien technique, graphisme</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#billy">
              En savoir plus</button>
            </div>
        -->
        </div> 

        <div class='equipe-titre'>Conseil d'administration</div>

        <div class="grid" id='grid2'>

            <!--<div class="membre">
            <div class="image">
                <img src="images/francois.jpg" alt="francois">
                <div class="doodle"><img src="images/francois-doodle.png" alt="francois"></div>
            </div>
            <h2>François Ferland</h2>
            <div class="desc">Président</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#francois">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/jean.jpg" alt="jean">
                    <div class="doodle"><img src="images/jean-doodle.png" alt="jean"></div>
                </div>
            <h2>Jean Crevier</h2>
            <div class="desc">Secrétaire-trésorier</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#jean">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/frantz.jpg" alt="frantz">
                    <div class="doodle"><img src="images/frantz-doodle.png" alt="frantz"></div>
                </div>
            <h2>Frantz Voltaire</h2>
            <div class="desc">Administrateur</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#frantz">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/jolicoeur.jpg" alt="jolicoeur">
                    <div class="doodle"><img src="images/jolicoeur-doodle.png" alt="jolicoeur"></div>
                </div>
            <h2>Jolicoeur Lacasse</h2>
            <div class="desc">Avocat et médiateur</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#jolicoeur">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/richard.jpg" alt="richard">
                    <div class="doodle"><img src="images/richard-doodle.png" alt="richard"></div>
                </div>
            <h2>Richard Leclerc</h2>
            <div class="desc">Administrateur-trésorier</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#richard">
              En savoir plus</button>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/heroux.jpg" alt="heroux">
                    <div class="doodle"><img src="images/heroux-doodle.png" alt="heroux"></div>
                </div>
            <h2>Héroux Devtek</h2>
            <div class="desc">Technicien</div>
            <button type="button" class="btn btn-outline-info border-2 equipe-btn" data-bs-toggle="modal" data-bs-target="#heroux">
              En savoir plus</button>
            </div>    
			
-->
        </div>
        <div class='equipe-titre'>Merci à nos précieux partenaires</div>
        <br>
        <p class="equipe-texte">
          Nos partenaires sont précieux pour la réussite de nos activités ici et ailleurs.
          Vous avez la volonté de nous appuyer dans nos actions? Contactez-nous!
        </p>
        <div class="images-partenaires">
          <img class="partenaire" src="<?php echo get_template_directory_uri(); ?>/assets/logo-desjardins-couleur.png" alt=""> 
          <img class="partenaire" src="<?php echo get_template_directory_uri(); ?>/assets/logo-canada-couleur.png" alt="">
          <img class="partenaire" src="<?php echo get_template_directory_uri(); ?>/assets/logo-relationquebec-couleur.png" alt="">
          <img class="partenaire" src="<?php echo get_template_directory_uri(); ?>/assets/logo-telus-couleur.png" alt="">
          <img class="partenaire" src="<?php echo get_template_directory_uri(); ?>/assets/logo-tohu-couleur.png" alt="">
        </div> 

    </div>

<div id='modals'>	
</div>

    <div class='wrapper-vague'>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
          <pattern id="img" x="0" y="0" width="1" height="1">
            <image
              width="100%"
              height="297.5%"
              xlink:href="images/texture-grain.png"
            />
          </pattern>
        </defs>

        <path fill="#fef1e2"
          d="M0,192L60,208C120,224,240,256,360,256C480,256,600,224,720,192C840,160,960,128,1080,138.7C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
      </svg>
    </div>


	

    <script>
      fetch("<?php echo get_site_url(); ?>/wp-json/wp/v2/membres?_embed&orderby=date&order=asc&per_page=13")
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

    </script>
    


        
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>