<?php
/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage MyTheme
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

					get_template_part( 'template-parts/excerpt' );

				endwhile;
			else :
				echo "posts absend";
			endif;
			?>
		</div><!-- .wrap -->
	</main>
<?php get_sidebar(); ?>
</div><!-- .content -->

<?php get_footer();
