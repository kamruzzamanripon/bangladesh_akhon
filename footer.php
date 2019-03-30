<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Industry_RRF_Online
 */

?>

	</div><!-- #content -->

	
	<footer id="colophon" class="site-footer">
		
		<!-- Footer Widget Area -->
		<?php if(is_active_sidebar('footer')): ?>
		<div class="footer-to-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php dynamic_sidebar('footer' ); ?>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<!-- Footer Widget Area -->


		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'advance-wordpress' ) ); ?>"><?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'advance-wordpress' ), 'WordPress' );
						?></a>
						<span class="sep"> | </span>
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'advance-wordpress' ), 'advance-wordpress', '<a href="'.esc_html__( 'https://www.bangladeshakhon24.com', 'advance-wordpress' ).'">syed kamruzzaman</a>' );
						?>
					</div>
				</div>
			</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
