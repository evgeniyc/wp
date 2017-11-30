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

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;
			endif;
			?>
		</div><!-- .wrap -->
	</main>
<?php get_sidebar(); ?>
</div><!-- .content -->

<?php get_footer();
