<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aanv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aanv' ); ?></a>

	<header id="masthead" class="site-header container">
		<div class="site-branding">
			
			<?php  the_custom_logo(); ?>

		</div><!-- .site-branding -->

		<div class="extra-nav-wrapper">
			<p>Click here to access other sections</p>
			<div class="extra-nav">
				<a href="<?php echo esc_url( site_url( '/art-gallery-home/' ) ); ?>"><img src="<?php site_url(); ?>/wp-content/uploads/2019/06/AGNV-Logo-FINAL.png" alt=""></a>
				<a href="<?php echo esc_url( site_url( '/art-center-home/' ) ); ?>"><img src="<?php site_url(); ?>/wp-content/uploads/2019/06/ACNV-Logo-FINAL.png" alt=""></a>
				<a href="<?php echo esc_url( site_url( '/open-studios-home/' ) ); ?>"><img src="<?php site_url(); ?>/wp-content/uploads/2020/01/OSNV-Logo-FINAL2-CMYK-Transparent-bkgd-300.png" alt=""></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'aanv' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
