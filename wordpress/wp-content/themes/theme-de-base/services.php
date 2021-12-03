<?php 
/**
 * 	Template Name: services
 * Template Post Type: servicess
 * 
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php
get_template_part( 'partials/heros_generique' );

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<?php
get_template_part( 'partials/heros_generique' );
?>

<svg class="grain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fef1e2" d="M0,192L80,202.7C160,213,320,235,480,213.3C640,192,800,128,960,112C1120,96,1280,128,1360,144L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
      </svg>

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
        <path class="grain__path" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,96C384,75,480,53,576,69.3C672,85,768,139,864,165.3C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

        <div class='services__contenu'>

        <div class="container-services">
        <div class="row">
        <div class="col-xl-5 col-md-6">
        <img src='<?php echo get_the_post_thumbnail_url();?>'>
        </div>
        <div class="col-xl-7 col-md-6">
                <div class="services-texte">
                <div class='services-titre'><?php the_title()?></div>
                <div class="services-explication">
                <?php the_content();?>
                </div>
                </div>
        </div>
        </div>

        </div>
        </div>


        <div class="plus-service">
        <div class="div-detail-nouvelle">
        <a><button class='bouton-detail-nouvelle'><?php the_field('voir_plus')?></button></a>
        </div>

        <div class="apercu-bigger-box">
        <div class="apercu-box"> 
        <div
        class="card border border-2 mb-3 p-3 card-service"
        style="max-width: 700px">
        <div class="row align-items-center">
        <div class="col-xl-3 col-md-3">
        <img class="card-img-services" src="images/photographyvf.png" alt=""/>
        </div>
        <div class="col-xl-9 col-md-9">
        <div class="card-body">
                <h4 class="card-title-service">Exposition de photographies</h4>
                <p class="card-text-service">
                Clowns Sans Frontières présente le photoreportage grand format en Haïti <i>«Le nez de clown? Un soleil en
                plein visage?»</i> accompagnés d’outils de discussions et d’échanges.
                </p>
                <a href="services.html"><button
                type="button"
                class="btn btn-page-service btn-outline-info border-2">
                En savoir plus
                </button></a>
        </div>
        </div>

        </div>
        </div>
        
        </div>
        </div>

        </div>



<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">  
        <path fill="#fef1e2" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,256C480,256,600,224,720,192C840,160,960,128,1080,138.7C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
</svg>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>