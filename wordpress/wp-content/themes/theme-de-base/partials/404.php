
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/clown_logo.png" />

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap"
      rel="stylesheet"
    />

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>
<?php
  $traduction = new WP_Query('post_type=traduction');
  while ($traduction->have_posts()) : $traduction->the_post(); 
?>
<div class="page404">
        <div class="page404__contenu">
            <div class="animation-clown">
            <img class="forme"  src="<?php echo get_template_directory_uri(); ?>/images/bulle_404.png" alt="forme">
                <img class="ballon-404" property="og:image" src="<?php echo get_template_directory_uri(); ?>/images/ballon_404.png" alt="ballon_404">
                <img class="clown" src="<?php echo get_template_directory_uri(); ?>/images/clown_404.png"
               alt="clown_404">
                <img class="larme01" src="<?php echo get_template_directory_uri(); ?>/images/larme_01.png" alt="larme01">
                <img class="larme02" src="<?php echo get_template_directory_uri(); ?>/images/larme_01.png" alt="larme02">
            </div>
            <div class="message404">
                <h1 class="message404"> <?php the_field('oups_404') ?> </h1>
                <p class="message404"> <?php the_field('description_404') ?> </p>
                <p class="goback"><a class='404_link' href='<?php echo esc_url( home_url( '/' ) ); ?>'><?php the_field('revenir_accueil') ?></a></p>
            </div>
        </div>
</div>
<?php
  endwhile; 
  wp_reset_postdata(); 
?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/animation.js'></script>




</body>
</html>