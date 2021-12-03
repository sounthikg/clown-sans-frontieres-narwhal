<?php

/**
 * 	Template Name: Home
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if (have_posts()) : // Est-ce que nous avons des pages à afficher ? 
  // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
  while (have_posts()) : the_post();
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil 
    ?>
			<h2>
				<?php the_title(); // Titre de la page 
        ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>

    <div class="acc__heros">
      <div class="acc__heros__swiper">
        <div class="swiper-wrapper acc__heros__swiper--wrapper">
          <!-- Slide 01 -->
          <div class="swiper-slide acc__heros__slide">
            <div class="acc__heros__description">
              <div class="acc__heros__description__title">
                <?php the_field('slider1') ?>
              </div>
              <div class="acc__heros__description__button">
                <div class="feature" id="featureAnimation">
                  <div id="featureBackground"></div>
                  <a href='https://www.clownssansfrontieres.ca/donner/'><button id="button" class="button"><?php the_field('btn_don2') ?></button></a>
                </div>
              </div>
            </div>
            <div class="acc__heros__image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/dessin.png" />
            </div>
          </div>
          <!-- Slide 02 -->
          <div class="swiper-slide acc__heros__slide">
            <div class="acc__heros__description">
              <div class="acc__heros__description__title">
                <?php the_field('slider2') ?>
              </div>
              <div class="acc__heros__description__button">
                <div class="feature" id="featureAnimation">
                  <div id="featureBackground"></div>
                  <a href='https://www.clownssansfrontieres.ca/donner/'><button id="button" class="button"><?php the_field('btn_don2') ?></button></a>
                </div>
              </div>
            </div>
            <div class="acc__heros__image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clown2_cropped.png" />
            </div>
          </div>
          <!-- Slide 03 -->
          <div class="swiper-slide acc__heros__slide">
            <div class="acc__heros__description">
              <div class="acc__heros__description__title">
                <?php the_field('slider3') ?>
              </div>
              <div class="acc__heros__description__button">
                <div class="feature" id="featureAnimation">
                  <div id="featureBackground"></div>
                  <a href='https://www.clownssansfrontieres.ca/donner/'><button id="button" class="button"><?php the_field('btn_don2') ?></button></a>
                </div>
              </div>
            </div>
            <div class="acc__heros__image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clown3_cropped.png" />
            </div>
          </div>
          <!-- Slide 04 -->
          <div class="swiper-slide acc__heros__slide">
            <div class="acc__heros__description">
              <div class="acc__heros__description__title">
                <?php the_field('slider4') ?>
              </div>
              <div class="acc__heros__description__button">
                <div class="feature" id="featureAnimation">
                  <div id="featureBackground"></div>
                  <a href='https://www.clownssansfrontieres.ca/donner/'><button id="button" class="button"><?php the_field('btn_don2') ?></button></a>
                </div>
              </div>
            </div>
            <div class="acc__heros__image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/clown4_cropped.png" />
            </div>
          </div>
        </div>

        <div class="swiper-pagination pagination-heros"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>


    <!---- BLOC SERVICES ---->

    <div class="services">
      <svg class="grain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
          <pattern id="img" x="0" y="0" width="1" height="1">
            <image width="100%" height="297.5%" xlink:href="<?php echo get_template_directory_uri(); ?>/images/texture-grain.png" />
          </pattern>
        </defs>

        <path class="grain__path" fill-opacity="1" d="M0,192L80,202.7C160,213,320,235,480,213.3C640,192,800,128,960,112C1120,96,1280,128,1360,144L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
      </svg>

      <div class="services__contenu">
        <h1 class="services-title"><?php the_field('titre_services') ?></h1>

        <div class="container">
          <div class="row justify-content-evenly" id='services_api'>

            
          </div>
        </div>
      </div>
    </div>

    <!---- BLOC TÉMOIGNAGES ---->

    <div class="temoignages">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,133.3C384,128,480,160,576,181.3C672,203,768,213,864,197.3C960,181,1056,139,1152,112C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>

      <div class="temoignages__contenu">
        <h1><?php the_field('titre_temoignages') ?></h1>
        <!-- Slider main container -->
        <div class="swiper02">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper" id='swiper-temoignage'>
            <!-- Slides -->
            <div class="swiper-slide">
              <img class="guillemets guillemets--up" src="<?php echo get_template_directory_uri(); ?>/images/guillemetsvf.png" />
              <div class="bloc">
                <?php the_field('temoignage1') ?>
              </div>
              <img class="guillemets guillemets--down" src="<?php echo get_template_directory_uri(); ?>/images/guillemetsvf.png" />
              <div class="temoin">
                <img class="temoin--img" src="<?php echo get_template_directory_uri(); ?>/images/personne.jpg" />
              </div>
              <span class="personne">Sylvie Julliot</span>
            </div>

            <div class="swiper-slide">
              <img class="guillemets guillemets--up" src="<?php echo get_template_directory_uri(); ?>/images/guillemetsvf.png" />
              <div class="bloc">
              <?php the_field('temoignage2') ?>
              </div>
              <img class="guillemets guillemets--down" src="<?php echo get_template_directory_uri(); ?>/images/guillemetsvf.png" />
              <div class="temoin">
                <img class="temoin--img" src="<?php echo get_template_directory_uri(); ?>/images/personne2.png" />
              </div>
              <span class="personne">Bethy Chambers</span>
            </div>
            <div class="swiper-slide">
              <img class="guillemets guillemets--up" src="<?php echo get_template_directory_uri(); ?>/images/guillemetsvf.png" />
              <div class="bloc">
                <?php the_field('temoignage3') ?>
              </div>
              <img class="guillemets guillemets--down" src="<?php echo get_template_directory_uri(); ?>/images/guillemetsvf.png" />
              <div class="temoin">
                <img class="temoin--img" src="<?php echo get_template_directory_uri(); ?>/images/personne3.jpg" />
              </div>
              <span class="personne">Éliott Hubert</span>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>

    <!---- BLOC NOUVELLES ---->

    <div class="nouvelles">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path class="nouvelles__path" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,229.3C384,245,480,235,576,229.3C672,224,768,224,864,208C960,192,1056,160,1152,154.7C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>

      <div class='nouvelles__wrapper'>

        <div class="nouvelles__contenu">
          <h1><?php the_field('titre_nouvelle') ?></h1>
          <div class='nouvelles__cards__list'>

            

            <?php

            ?>

            <div class="nouvelles__card">
              <img src="<?php echo get_template_directory_uri(); ?>/images/nouvelles.jpg" class="card-img-top">
              <div class="card-body">
                <h3 class="card-title">Titre de la nouvelle</h3>
				<p class='nouvelles__type'>Type de nouvelle</p>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                    blanditiis praesentium voluptatum deleniti atque corrupti quos
                    dolores et quas.
              </div>
              <div class="card-footer"><img src="<?php echo get_template_directory_uri(); ?>/images/user.png"> Par Anonyme Ipsum</div>
            </div>

          </div>

          <div class='nouvelles__bouton'>
            <a href='nouvelles.html'><button><?php the_field('btn_nouvelles')?></button></a>
          </div>
        </div>
      </div>
    </div>

    <!---- BLOC DONATIONS ---->

    <div class="donation">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
          <pattern id="img" x="0" y="0" width="1" height="1">
            <image width="100%" height="297.5%" xlink:href="<?php echo get_template_directory_uri(); ?>/images/texture-grain.png" />
          </pattern>
        </defs>

        <path class="grain__path" fill-opacity="1" d="M0,192L60,170.7C120,149,240,107,360,112C480,117,600,171,720,176C840,181,960,139,1080,112C1200,85,1320,75,1380,69.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
      </svg>
      <div class="donation__contenu">
        <div class="don--contenu">
          <div class="don--img"> </div>
          <div class="don--texte">
            <h4><?php the_field('don_securitaire') ?></h4>
            <h2 class="playDon"><?php the_field('don_motto') ?></h2>
            <span><?php the_field('don_description') ?></span>
            <div class="acc__heros__description__button">
              <div class="feature" id="featureAnimation">
                <div id="featureBackground"></div>
                <a href='https://www.clownssansfrontieres.ca/donner/'><button id="button" class="button"><?php the_field('btn_don1') ?></button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="animation--centered">
        <div class="animation--don">
          <div class="ballon ballon--rouge">✦</div>
          <div class="ballon ballon--orange">⬪</div>
          <div class="ballon ballon--bleu">★</div>

          <div class="ballon ballon--rouge">✦</div>
          <div class="ballon ballon--orange">⬪</div>
          <div class="ballon ballon--bleu">★</div>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
          <pattern id="img" x="0" y="0" width="1" height="1">
            <image width="100%" height="297.5%" xlink:href="<?php echo get_template_directory_uri(); ?>/images/texture-grain.png" />
          </pattern>
        </defs>

        <path class="grain__path" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,256C480,256,600,224,720,192C840,160,960,128,1080,138.7C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
      </svg>
    </div>





<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
  get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>