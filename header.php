<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package WordPress
 * @subpackage MyTheme
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	
	<header id="masthead" class="site-header row" role="banner">
		<div class="wrap">
			<a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/wp1.jpg';?>" alt="logo" /></a>
		</div>
	</header><!-- #masthead -->
	<nav class="row">
		<?php 
			if ( has_nav_menu( 'top' ) ) :
				wp_nav_menu( array( 'menu' => 'top', 'container' => '' ) );
			endif; 
		?>
	</nav>
	<div id="content" class="site-content row">
