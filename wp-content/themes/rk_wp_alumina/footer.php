<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rk_wp_alumina
 */

?>

	<footer  class="site-footer">	
	
		<div class="row rk-wp-allum-footer-container p-5">

			<div class="col rk-wp-alum-footer-col">

				<div class="rk-wp-alum-footer-logo-wrapper">
					
					<?php echo wp_get_attachment_image( 191, Array(640, 480) ); ?>

				</div>

				<p>
					
					We are legend Lorem ipsum dolor sitmet, nsecte ipisicing eit, sed do eiusmod tempor incidunt ut et domaga aliqua enim ad minim.

				</p>

			</div>
			<div class="col rk-wp-alum-footer-col">
				
				<div class="rk-wp-alum-footer-quick-links-wrapper">
					
					<h3>Quick Links</h3>

					<?php wp_nav_menu( array( 'theme_location' => 'rk-wp-footer-menu', 'menu_class' => 'rk-wp-alumina-footer-menu' ) ); ?>


				</div>


			</div>
			
			<div class="col rk-wp-alum-footer-col">
				
				<h3>We Are Social</h3>

				<p>Check us on our social media portals...</p>

				<div class="rk-wp-alum-social-media-icons-footer-wrapper">
					
					<div class="rk-wp-alum-social-icons rk-wp-alum-fb-icon"><i class="fab fa-facebook-f"></i></div>

					<div class="rk-wp-alum-social-icons rk-wp-alum-twitter-icon"><i class="fab fa-twitter"></i></div>

					<div class="rk-wp-alum-social-icons rk-wp-alum-insta-icon"><i class="fab fa-instagram"></i></i></div>
					
				</div>

			</div>

		</div><!--row rk-wp-allum-footer-container-->

		<div class="row rk-wp-alum-copyright-container p-4">			
				
			<div class="col text-center align-middle">

				<p class="align-middle">© 2021 RK-Soft, Rivikantha Herath, All Rights Reserved.</p>			

			</div>			

		</div>


	</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
