<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu' ) ); ?>
				</nav><!-- #site-navigation -->
				  <div id= "nav-icon">
					  <div class= "icon-container">
					<div class="hamburger">
						<div class= "bars top-bread"> 
							<div class= "seed-container">
							<p class="seed"></p> 
							<p class="seed"></p> 
							<p class=" seed"></p>
							</div>
						</div>
						<div class= "bars meat-cheese"> </div>
						<div class = "bars bread"> </div>
					</div>
					<div class= "menu-tag">
						<p class= "menu-text"> menu </p>
						</div>
					</div>
					<div class= "logo-container">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class= "home-nav-link">
						<img class= "logo" alt= "my logo" src= "<?php echo get_template_directory_uri() . '/resources/images/logo.png'; ?>">
						</a>
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">