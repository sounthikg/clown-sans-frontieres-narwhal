<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>

<?php
  $traduction = new WP_Query('post_type=traduction');
  while ($traduction->have_posts()) : $traduction->the_post(); 
?>
<footer class="pied-page">
	    <!---------------------------- FOOTER À COPIER/COLLER ---------------------------->

      <div class="pied-page__wrapper">
        <div class="pied-page__gauche">
          <a href="index.html"
            ><div class="pied-page__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo_verticalcsf.png" /></div
          ></a>
          <div class="pied-page__description">
            <p>
            <?php the_field('slogan_footer') ?>
            </p>
          </div>
          <a href="https://www.clownssansfrontieres.ca/donner/"
            ><button class="pied-page__btnDon"><?php the_field('donnez_footer') ?></button></a
          >
        </div>
        <div class="pied-page__droit">
          <div class="pied-page__coordonnes">
            <p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/address.png" /><a
                href="https://goo.gl/maps/JbPGfpbce26Mf4Zs8"
                > <?php the_field('adresse_footer') ?> <br />
                <?php the_field('adresse_footer_02') ?></a
              >
            </p>
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/email.png" />contact@clownssansfrontieres.ca</p>
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" />(514) 450-1287</p>

            <div class="pied-page__reseaux">
              <a
                href="https://www.facebook.com/Clowns-Sans-Fronti%C3%A8res-Canada-174316817738/" target="_blank"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"
              /></a>
              <a href="https://twitter.com/csf_canada" target="_blank"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"
              /></a>
              <a href="https://www.instagram.com/clownssansfrontieres/?hl=fr-ca" target="_blank"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png"
              /></a>
              <a href="https://www.youtube.com/channel/UCQWUO8JZx69GPWRInazRPMw" target="_blank"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"
              /></a>
              <a href="https://vimeo.com/user2650793" target="_blank"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/vimeo.png"
              /></a>
            </div>

            <div class="pied-page__partenaires">
              <div class="pied-page__swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper" id='partenaires-api'>
                  <!-- Slides -->

                <?php
                      $partenaires = new WP_Query('post_type=partenaires');
                      while ($partenaires->have_posts()) : $partenaires->the_post(); 
                    ?>
                    
                    <div class="swiper-slide">
                      <a href='<?php the_field('lien_partenaire')?>'><img src="<?php the_post_thumbnail_url(); ?>"  class="img-horizontal" /></a>
                    </div>


                    <?php
                     endwhile; 
                     wp_reset_postdata(); 
                    ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar 
                  <div class="swiper-scrollbar"></div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pied-page__milieu">
        <p>©2021, Clowns Sans Frontières, Narwhals Web</p>
      </div>
    

    <!--------------------- FIN DU FOOTER À COPIER/COLLER ---------------------------->
	
</footer>
<?php
  endwhile; 
  wp_reset_postdata(); 
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.js"></script>
<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>


</body>
</html>
