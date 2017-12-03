<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<main id="main" class="site-main col-md-9" role="main">
		<div class="wrap">
			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page' );

				endwhile;
			endif;
			?>
		</div><!-- .wrap -->
	</main>
<?php get_sidebar(); ?>
</div><!-- .content -->

<?php get_footer();
