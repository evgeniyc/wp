<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>">
			<?php
				the_title( '<h3 class="entry-title">', '</h3>' );
			?>
		</a>
	</header><!-- .entry-header -->
	<div class="entry-image">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');
			}
		?>
	</div>
	<div class="entry-content"><br>
		<?php
			the_content('Читать...');
		?>
	</div><!-- .entry-content -->
	<div id="post-info">
		<?php	
			echo 'Дата публикации: '.get_the_date();
			echo ' Автор: '.get_the_author();
		?>
	</div>
	<div class="clearfix"></div>
	<hr>
</article><!-- #post-## -->
