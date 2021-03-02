<?php
/**
 * The template for displaying all single posts
 *
 * @link https://www.rk-soft.com/wp-themes/
 *
 * @package RK Themes
 * @subpackage RK WP Alumina
 * @since RK WP Alumina 1.0
 */

get_header();
?>

	<div class="members-directory-container">

		<div class="row">

			<div class="col p-5">

				<?php

				// Start the Loop.
				while ( have_posts() ) :

					the_post();

					the_title( '<h3 class="members-heading">', '</h3>' );

					the_content();
					

				endwhile; // End the loop.

				?>

			</div><!-- col -->

		</div><!-- row -->

	</div>

<?php
get_footer();
