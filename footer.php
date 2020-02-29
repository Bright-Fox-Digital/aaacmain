<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AAAC
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-darkgray p-20 text-lightgray">
		<div class="site-info section container mx-auto">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'aaac' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'aaac' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'aaac' ), 'aaac', '<a href="https://pixeldevs.io">PixelDevs</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
