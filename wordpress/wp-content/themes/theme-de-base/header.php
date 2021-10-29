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
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Affiche le nom du site ?></a>
	</h1>

	<nav class="menu">
		<?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
		?>
		
		<div class="menu__wrapper">
			<div class="menu__logo">
			<a href="index.html">
				<picture>
				<source
					srcset="/assets/logo_horizontalcsf.5f43988e.png "
					media="(min-width: 768px)"
				/>
				<img src="/assets/logo_verticalcsf.74cd4195.png" />
				</picture>
			</a>
			</div>

			<!-- MENU HAMBURGER -->
			<label class="menu__icon" for="menu__btn"><span class="navicon"></span></label>
			<div class="menu__hamburger">
			<ul class="menu__options">
				<li class="menu__options__nouvelles">
				<a href="nouvelles.html">Nouvelles</a>
				</li>
				<li class="menu__options__services">
				<a href="services.html">Services</a>
				</li>
				<li class="menu__options__equipe">
				<a href="equipe.html">Équipe</a>
				</li>
				<li class="menu__options__a_propos nav-item">
				<a href="a_propos.html">À propos</a>
				</li>
				<li class="menu__options__histoire">
				<a href="404.html">Histoire</a>
				</li>
			</ul>
			<div class="menu__don">
				<a href="don.html"><button type="button">Donnez !</button></a>
			</div>
			<div class="menu__lang">EN</div>
			</div>
		</div>
		</nav>



	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
