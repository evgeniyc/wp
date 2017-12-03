<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
			the_content();
		?>
	</div><!-- .entry-content -->
	<div id="post-info">
		<?php	
			echo 'Дата публикации: '.get_the_date();
			echo ' Автор: '.get_the_author();
		?>
	</div>
</article><!-- #post-## -->
