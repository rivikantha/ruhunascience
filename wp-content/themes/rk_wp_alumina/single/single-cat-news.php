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

		<div class="col-9 p-5">

			<?php

			// Start the Loop.
			while ( have_posts() ) :

				the_post();

				the_title( '<h1 class="entry-title">', '</h1>' );

				the_content();
				

			endwhile; // End the loop.
			?>

		</div><!-- end col-9 -->

		<div class="col-3 p-5">

			<div class="latest-posts">

				<h2 class="title">Latest post</h2>

				<div class="item">
					<div class="item-thumbnail">
						<a href="https://cmb.ac.lk/online-hsk-test-confucius-institute/" title="Online HSK Test and Registration – Confucius Institute">
							<div class="item-thumbnail">
								<img src="https://cmb.ac.lk/wp-content/uploads/online-hsk-test-confucius-institute-80x80.jpg" class="attachment-thumb_80x80 size-thumb_80x80 wp-post-image" alt="" loading="lazy" srcset="https://cmb.ac.lk/wp-content/uploads/online-hsk-test-confucius-institute-80x80.jpg 80w, https://cmb.ac.lk/wp-content/uploads/online-hsk-test-confucius-institute-50x50.jpg 50w, https://cmb.ac.lk/wp-content/uploads/online-hsk-test-confucius-institute-263x263.jpg 263w, https://cmb.ac.lk/wp-content/uploads/online-hsk-test-confucius-institute-100x100.jpg 100w, https://cmb.ac.lk/wp-content/uploads/online-hsk-test-confucius-institute-255x255.jpg 255w" sizes="(max-width: 80px) 100vw, 80px" width="80" height="80">
								<div class="thumbnail-hoverlay main-color-1-bg"></div>
								<div class="thumbnail-hoverlay-cross"></div>
							</div>
						</a>
					</div>
					<div class="u-details item-content">
						<h5><a href="https://cmb.ac.lk/online-hsk-test-confucius-institute/" title="Online HSK Test and Registration – Confucius Institute" class="main-color-1-hover">Online HSK Test and Registration – Confucius Institute</a></h5>
						<span>February 15, 2021</span>
					</div>
					
					<div class="clearfix"></div>

				</div>

			</div>

		</div><!-- end col-3 -->

	</div><!-- row -->



<?php
get_footer();
