<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					get_template_part( 'template-parts/post' );
					wp_link_pages( array(
						'before'      => '<div class="page-links">Страницы:',
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
					next_posts_link();
					previous_posts_link();
				endwhile;
			endif;
			?>
		</div><!-- .wrap -->
		
	</main>
<?php get_sidebar(); ?>
</div><!-- .content -->

<?php get_footer();

