<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s_makerspace
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<aside id="footer-widget-area" class="widget-area footer-widgets" role="complementary">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</aside><!-- #secondary -->

