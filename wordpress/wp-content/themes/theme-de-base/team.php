<?php 
/**
 * 	Template Name: team
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<div class='equipe__heros'>
        <div class='equipe__heros__title'>
          <div class='equipe__heros__title-text'>Équipe</div>
        </div>
    </div>
    <div class='equipe__contenu block'>
        <div class='equipe__contenu__title'>Direction et bénévoles</div>

        <div class="grid">

            <div class="membre">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/katel.jpg" alt="Katel">
                <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/katel-doodle.png" alt="katel"></div>
            </div>
            <h2>Katel Le Fustec</h2>
            <div class="desc">Directrice générale et artistique</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/michele.jpg" alt="michele">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/michele-doodle.png" alt="michele"></div>
                </div>
            <h2>Michèle D'Argenio</h2>
            <div class="desc">Adjointe à la direction</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/marie-eve.jpg" alt="marie-eve">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/marie-eve-doodle.png" alt="marie-eve"></div>
                </div>
            <h2>Marie-Eve Aubry</h2>
            <div class="desc">Administratrice et responsable du Comité du Réseau International</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hadrien.jpg" alt="hadrien">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/hadrien-doodle.png" alt="hadrien"></div>
                </div>
            <h2>Hadrien Collin</h2>
            <div class="desc">Administrateur du site web</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/jean-francois.jpg" alt="jean-francois">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/jean-francois-doodle.png" alt="jean-francois"></div>
                </div>
            <h2>Jean-François Paré</h2>
            <div class="desc">Soutien technique, informatique</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="images/billy.jpg" alt="billy">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/billy-doodle.png" alt="billy"></div>
                </div>
            <h2>Billy Maude</h2>
            <div class="desc">Soutien technique, graphisme</div>
            </div>
        
        </div>

        <div class='equipe__contenu__title'>Conseil d'administration</div>

        <div class="grid">

            <div class="membre">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/francois.jpg" alt="francois">
                <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/francois-doodle.png" alt="francois"></div>
            </div>
            <h2>François Ferland</h2>
            <div class="desc">Président</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/jean.jpg" alt="jean">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/jean-doodle.png" alt="jean"></div>
                </div>
            <h2>Jean Crevier</h2>
            <div class="desc">Secrétaire-trésorier</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/frantz.jpg" alt="frantz">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/frantz-doodle.png" alt="frantz"></div>
                </div>
            <h2>Frantz Voltaire</h2>
            <div class="desc">Administrateur</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/jolicoeur.jpg" alt="jolicoeur">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/jolicoeur-doodle.png" alt="jolicoeur"></div>
                </div>
            <h2>Jolicoeur Lacasse</h2>
            <div class="desc">Avocat et médiateur</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/jean-francois.jpg" alt="jean-francois">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/jean-francois-doodle.png" alt="jean-francois"></div>
                </div>
            <h2>Jean-François Paré</h2>
            <div class="desc">Soutien technique, informatique</div>
            </div>
            
            <div class="membre">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/heroux.jpg" alt="heroux">
                    <div class="doodle"><img src="<?php echo get_template_directory_uri(); ?>/images/heroux-doodle.png" alt="heroux"></div>
                </div>
            <h2>Héroux Devtek</h2>
            <div class="desc">Technicien</div>
            </div>

            <div class='equipe__contenu__title'>Merci à nos précieux partenaires</div>
            <p class="equipe-texte">
              Nos partenaires sont précieux pour la réussite de nos activités ici et ailleurs.
              Vous avez l volonté de nous appuyer dans nos actions? Contactez-nous!
            </p>

        
        </div>


    </div>
        
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>