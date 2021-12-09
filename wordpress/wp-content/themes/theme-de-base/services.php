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



      <div class='wrapper-vague'>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
        <pattern id="img" x="0" y="0" width="1" height="1">
        <image
                width="100%"
                height="297.5%"
                xlink:href="<?php echo get_template_directory_uri().'/images/texture-grain.png'; ?>"
        />
        </pattern>
        </defs>
        <path class="grain__path" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,96C384,75,480,53,576,69.3C672,85,768,139,864,165.3C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

        <div class='services__contenu page-service'>

                <div class="container-services">
                <div class="row">
                <div class="col-xl-5 col-md-6">
                <img class="img-services" src='<?php the_field("image_services")?>'>
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

        <div class="plus-service">
        <div class="div-detail-nouvelle">
                <a><button class='bouton-detail-nouvelle' id='btn_next_service'><?php the_field('voir_plus')?></button></a>
        </div>

        <div class="apercu-bigger-box">
        <div class="apercu-box box-service">

        <div class='hub_services_fetch' id='fetchNextService'>
				</div>
   
        
        </div>
        </div>

        </div>
        </div>
        </div>




        <svg class="grain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
          <pattern id="img" x="0" y="0" width="1" height="1">
            <image width="100%" height="297.5%" xlink:href="<?php echo get_template_directory_uri().'/images/texture-grain.png'; ?>"/>
          </pattern>
        </defs>

        <path class="grain__path" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,256C480,256,600,224,720,192C840,160,960,128,1080,138.7C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
      </svg>      


        <script>

            let boutonapercu = 
            document.querySelector("#btn_next_service");
            let apercu = 
            document.querySelector(".apercu-bigger-box");


            boutonapercu.addEventListener('click', ()=> {
            apercu.classList.add('apercu-bigger-box-visible');
            apercu.classList.remove('apercu-bigger-box')
            });

         <?php 
         //this post
          $post = get_the_id();
         //next post
          $other_post = get_next_post();

          $nextID = get_the_id($other_post);         
          $next_link = get_permalink($other_post);
          $next_img = get_the_post_thumbnail_url($other_post);
          

          
          ?>
          
          let divNext = document.querySelector('#fetchNextService');

        

          let html = `

        <div class="col-12">
		<div class="card border border-2 mb-3 p-3">
			<div class="row align-items-center">
				<div class="col-xl-6">
					<div class="card-img">
					        <img class='services-img' src="<?php echo $next_img?>" alt=""/>
					</div>
				</div>
			<div class="col-xl-6">
				<div class="card-body">
					<h4 class="card-title"><?php echo get_the_title($other_post)?></h4>
					<p class="card-text">
					<?php the_field('resume_du_service', get_the_id($other_post))?>
					</p>
					<a href='<?php echo $next_link?>'>
					<button
					type="button"
					class="btn btn-outline-info border-2"
					>
					<?php the_field('plus-service1') ?>
					</button>
					</a>
				</div>
			</div>
		</div>
		</div>
	</div>

          
                
          `
          
          /*

          let html = `

          <a class='nouvelles__link' href='<?php echo $next_link?>'>
            <div class="nouvelles__card">
              <div class='row'>
                <img src="<?php echo $next_img?>" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title"><?php echo get_the_title($next)?></h3>
                    <p class='nouvelles__type'><?php the_field('type', get_the_id($next))?></p>
                    <?php the_field('resume', get_the_id($next))?>
              </div>
            </div>
                <div class="card-footer">
                <img src='https://clownssansfrontieres.qc.lu/wp-content/themes/theme-de-base/images/user.png'/> Par <?php the_field('auteur', get_the_id($next))?></div>
                     
          </a>          
          ` */

          divNext.innerHTML = html;
      </script>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>