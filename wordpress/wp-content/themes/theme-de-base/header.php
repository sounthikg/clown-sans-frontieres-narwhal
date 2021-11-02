<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
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
    <!-- BOOTSTRAP CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />


	 <!-- SWIPER CSS -->
	 <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
  	/>



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

<header>
	<nav class="menu" id='menu'>		
		<div class="menu__wrapper">
			<div class="menu__logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>">
				<picture>
				<source
					srcset="<?php echo get_template_directory_uri(); ?>/images/logo_horizontalcsf.png "
					media="(min-width: 768px)"
				/>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_verticalcsf.png" />
				</picture>
			</a>
			</div>

			<!-- MENU HAMBURGER -->
			<label class="menu__icon" for="menu__btn"><span class="navicon"></span></label>
			<div class="menu__hamburger">
			<?php 
				wp_nav_menu(array('theme_location' => 'main-menu',
								'container' => 'ul',
								'menu_class' => 'menu__options',
							));
			?>
			<script>
				var donButton = document.querySelector('.menu__don__button');
				var parentButton = document.querySelector('.menu__hamburger');
				var lang = document.querySelector('.menu__lang');

				var divButton = document.createElement('div');
				divButton.className = 'menu__don';
				
				parentButton.appendChild(divButton);
				divButton.appendChild(donButton);

				function insertBefore(referenceNode, button) {
  					referenceNode.parentNode.insertBefore(button, referenceNode.nextSibling);
				}

				insertBefore(lang, divButton);

				//doit faire un if pour en français//
				let child = lang.lastChild;
				let spanLang = child.lastChild;
				spanLang.innerText = 'EN';

			</script>
		</div>
		</nav>



	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
