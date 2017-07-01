<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s_makerspace
 */

?>

	</div><!-- #content -->

        <?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

 		<nav class="social-links">
                    <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
		</nav>

		<div class="site-info">
			<?php printf( esc_html__( 'Custom WordPress Theme Using Underscore Starter: %1$s by %2$s.', '_s_makerspace' ), '_s_makerspace', '<a href="http://lakenney.com/" rel="designer">Lucille Kenney</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
