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

	<div class="row">

		<div class="col p-5">

			<?php

			// Start the Loop.
			while ( have_posts() ) :

				the_post();

				the_title( '<h1 class="entry-title">', '</h1>' );

				the_content();
				

			endwhile; // End the loop.
			?>

		<//><!-- col -->
	</div><!-- row -->

<?php
get_footer();
