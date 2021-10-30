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
		</div>
		</nav>



	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
