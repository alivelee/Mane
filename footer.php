<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mane
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="social-media">
			<i class="fa fa-twitter-square"></i>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'mane' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'mane' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'mane' ), 'Mane', '<a href="http://proswallow.com/" rel="designer">Proswallow</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
