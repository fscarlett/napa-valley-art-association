<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aanv
 */

?>

	</div><!-- #content -->

	<div class="social-widget">
		<div class="soc-wrapper soc-facebook">
			<a href="https://www.facebook.com/ARTNV.org" target="_blank" rel="nofollow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb.png" alt="">
			</a>
		</div>
		<div class="soc-wrapper soc-twitter">
			<a href="https://twitter.com/aovnapa" target="_blank" rel="nofollow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tw.png" alt="">
			</a>
		</div>
		<div class="soc-wrapper soc-pinterest">
			<a href="https://www.pinterest.com/artAssociatioNV/" target="_blank" rel="nofollow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinit.png" alt="">
			</a>
		</div>
		
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo2.png" alt="">
			<p>
				<?php 
				// printf( esc_html__( 'Support provided by the Napa County Board of Supervisors and the Napa County Arts and Culture Committee. Member of the Napa Downtown Merchants Association and Yountville Arts.', 'aanv' ) );
				?>
				Support provided by the Napa County Board of Supervisors and the Napa County Arts and Culture Committee. <br> Member of the Downtown Napa Merchants Association and Yountville Arts.

			</p>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php if ( !is_user_logged_in() ) {  ?>

		<div class="login-button-container">
			<a href="<?php echo site_url(); ?>/login">Members Login Here</a>
		</div>

	<?php } ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
