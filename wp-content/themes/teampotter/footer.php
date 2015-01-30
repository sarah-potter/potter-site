<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package teampotter
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="footer-widgets">
		<?php if ( ! is_active_sidebar( 'footer-widgets' ) ) {
			return; } ?>
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</div>
	
	
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'teampotter' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'teampotter' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'teampotter' ), 'teampotter', '<a href="#" rel="designer">Sarah & Taylor Potter, of course.</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
