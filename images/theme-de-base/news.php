<?php 
/**
 * 	Template Name: Nouvelle
 * Template Post Type: nouvelles

 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<div class='nouvelle__type <?php the_field("type")?>'> <?php the_field("type") ?></div>

      
      <div class='nouvelle__heros'>
        <div class='nouvelle__heros__bg'> <img src='<?php echo get_the_post_thumbnail_url();?>'> </div>
        <div class='nouvelle__heros__title'>
          <div class='nouvelle__heros__title-text'><?php the_title()?><p class='nouvelle__heros__title-date'><?php the_field("date")?></p></div>
        </div>
    </div>
    <div class='nouvelle__description'>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fef1e2" fill-opacity="1" d="M0,128L80,112C160,96,320,64,480,69.3C640,75,800,117,960,133.3C1120,149,1280,139,1360,133.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
      </svg>
      <div class='nouvelle__description__wrapper'>
        <div class='nouvelle__description__text'>

          <!---description-->
          <div class='nouvelle__description__text__source'>
            <img class='text--image' src='<?php echo get_template_directory_uri(); ?>/assets/katel-couleur.jpg'/>
            <div class='text--wrapper'>
              <p class='text--nom'><?php the_field("auteur")?></p>
              <p class='text--type'><?php the_field("type_auteur")?></p>
            </div>            
          </div>

          <div class='nouvelle__description__text__wrapper'>

            <p class='nouvelle__description--synopsis'>
				<?php the_field('synopsis')?>
            </p>

            <p class='nouvelle__description--headliner'>
              <span class='nouvelle__description--lieu'><?php the_field('lieu')?></span> - 
              <?php the_field('headliner')?>
            </p>

            <?php the_content();?>

        </div>

          

        </div>
      </div>

      <!--PROCHAINE NOUVELLE--->
      <div class="div-detail-nouvelle">
        <a><button class='bouton-detail-nouvelle'><?php the_field('voir_plus_nouvelle')?></button></a>
      </div>
      
      <div class="apercu-bigger-box">
      <div class="apercu-box"> 
        <div class="nouvelles__card">
          <img src="assets/nouvelles.jpg" class="card-img-top">
          <div class="card-body">
            <h3 class="card-title">Titre de la nouvelle</h3>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti quos
                dolores et quas.
          </div>
          <div class="card-footer"><img src='assets/user.png'/> Par Anonyme Ipsum</div>
        </div>
      </div>
    </div>


	  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">  
        <path fill="#fef1e2" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,256C480,256,600,224,720,192C840,160,960,128,1080,138.7C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
        ></path>
      </svg>
    </div>



	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); 
?>