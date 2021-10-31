<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

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
              Ce que les médecins font pour le corps, <br />les clowns le font
              pour l'âme.
            </p>
          </div>
          <a href="don.html"
            ><button class="pied-page__btnDon">Donnez !</button></a
          >
        </div>
        <div class="pied-page__droit">
          <div class="pied-page__coordonnes">
            <p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/address.png" /><a
                href="https://goo.gl/maps/JbPGfpbce26Mf4Zs8"
                >105 rue Ontario Est, bureau 203 <br />
                Montréal, Québec, H2X 1G9</a
              >
            </p>
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/email.png" />contact@clownssansfrontieres.ca</p>
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" />(514) 450-1287</p>

            <div class="pied-page__reseaux">
              <a
                href="https://www.facebook.com/Clowns-Sans-Fronti%C3%A8res-Canada-174316817738/"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"
              /></a>
              <a href="https://twitter.com/csf_canada"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"
              /></a>
              <a href="https://www.instagram.com/clownssansfrontieres/?hl=fr-ca"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png"
              /></a>
              <a href="https://www.youtube.com/channel/UCQWUO8JZx69GPWRInazRPMw"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png"
              /></a>
              <a href="https://vimeo.com/user2650793"
                ><img src="<?php echo get_template_directory_uri(); ?>/images/vimeo.png"
              /></a>
            </div>

            <div class="pied-page__partenaires">
              <div class="pied-page__swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/desjardins.png" class="img-horizontal" />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/images/Relations-internationales-et-francophonie.png"
                    />
                  </div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/tohu.png" /></div>
                  <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/telus.png" /></div>
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

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
