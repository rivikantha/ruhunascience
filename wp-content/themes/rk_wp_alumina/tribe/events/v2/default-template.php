<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header();

?>
<!-- Wallpaper for the single page title with title -->

<div class="row rk-wp-alum-single-page-title-container">
	
	<div class="col rk-wp-alum-single-page-title-wrapper text-center">
		
		

		<?php			 

			$wallpaper = wp_get_attachment_image(202,'full','','class=rk-wp-alum-single-page-wallpaper-img'); 

			if($wallpaper){

				echo $wallpaper;

			}else{

				echo '<img src="'.get_template_directory_uri().'/img/events_page_wallpaper.jpg" class="rk-wp-alum-single-page-wallpaper-img"/>'; 
			}

		?>

		<h1>Events</h1>

	</div>

</div>

<!-- End of Wallpaper -->

<?php


echo tribe( Template_Bootstrap::class )->get_view_html();
get_footer();
