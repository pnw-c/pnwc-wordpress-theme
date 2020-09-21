<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PNWC
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-logo">
			<a href="<?php echo esc_url( home_url ('/' ) ); ?>">
				<img class="footer-logo-image" src="<?php echo get_header_image(); ?>"/>
			</a>
		</div><!-- .footer-logo -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
