<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage My_Theme
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-3" role="complementary">
	<div class="wrap">
		<ul id="sidebar">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</ul>
	</div>
</aside><!-- #secondary -->
