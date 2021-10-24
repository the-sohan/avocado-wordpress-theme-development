<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Avocado
 */

?>



	</div><!-- #content -->

	<div class="subscription">
		<div class="container">
			<div class="row">
				<div class="col my-auto text-center">
					<h1>Subscribe</h1>
					<p>Know first about our promotions and discounts</p>
					<input type="email" name="" id="">
					<input class="boxed-btn" type="submit" value="SEND">
				</div>
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<?php if(is_active_sidebar( 'footer' )) : ?>
			<div class="row">
				<?php dynamic_sidebar('footer'); ?>
			</div>
			<?php endif; ?>

			<div class="row">
				<div class="col text-center">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'avocado' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'avocado' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'avocado' ), 'avocado', '<a href="http://iamsohan.com">Sohan Chowdhury</a>' );
							?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
