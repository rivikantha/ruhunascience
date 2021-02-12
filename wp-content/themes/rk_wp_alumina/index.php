<?php  get_header(); ?>

<!-- slider is a custom post type used to add slides to be displayed in the carausal -->
		
<?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 5)); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">

		<?php $count = 0; ?>

		<?php foreach($slider as $slide): ?>				

			<div class="carousel-item <?php echo ($count==0)?'active':''; ?> ">
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="d-block w-100" alt="" />
			</div>

			<?php $count++; ?>
			
		<?php endforeach;?>

		<?php wp_reset_query(); ?>

		
		
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="row">
	<div class="col bg-warning text-center font-weight-bold p-5" id="waypoint">

		<h1>Members: <span class="counter">150</span>+</h1>
		
		
	</div>

	<div class="col bg-warning text-center font-weight-bold p-5">

		<h1>Projects: <span class="counter">10</span>+</h1>
		
	</div>

	<div class="col bg-warning text-center font-weight-bold p-5">

		<h1>Get Togethers: <span class="counter">20</span>+</h1>
		
	</div>
</div>


<div class="row">
	<div class="col-4 p-3">

		<?php $posts = get_posts(array('category__and' => 'event', 'posts_per_page' => 20)); ?>

		<?php foreach($posts as $post): ?>				

			<div class="carousel-item <?php echo ($count==0)?'active':''; ?> ">
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="d-block w-100" alt="" />

				<h3>Psycho Parade 2018 9.00 AM at School Premises </h3>
			</div>

			<?php $count++; ?>
			
		<?php endforeach;?>

		<?php wp_reset_query(); ?>

		<h3>Psycho Parade 2018 9.00 AM at School Premises </h3>

		<h3>Psycho Parade 2018 9.00 AM at School Premises </h3>

		<h3>Psycho Parade 2018 9.00 AM at School Premises </h3>

		<h3>Psycho Parade 2018 9.00 AM at School Premises </span>	
		
		
	</div>

	<div class="col-8 p-3">

		<h2>Mini Auditorium Opening Ceremony</h2>

		<p>The 29th of September saw the successful completion and handing over of one of the largest infrastructure development projects in the history of the Old Boys Association of D.S. Senanayake College. This venture was commenced under the leadership of the OBA Senior President Madura Wickramaratne and the President Susantha Dissanayake.</p>

		<br><br>

		

		<h2>Mini Auditorium Opening Ceremony</h2>

		<p>The 29th of September saw the successful completion and handing over of one of the largest infrastructure development projects in the history of the Old Boys Association of D.S. Senanayake College. This venture was commenced under the leadership of the OBA Senior President Madura Wickramaratne and the President Susantha Dissanayake.</p>

		<br><br>

		<h2>Mini Auditorium Opening Ceremony</h2>

		<p>The 29th of September saw the successful completion and handing over of one of the largest infrastructure development projects in the history of the Old Boys Association of D.S. Senanayake College. This venture was commenced under the leadership of the OBA Senior President Madura Wickramaratne and the President Susantha Dissanayake.</p>

		<br><br>

		<h2>Mini Auditorium Opening Ceremony</h2>

		<p>The 29th of September saw the successful completion and handing over of one of the largest infrastructure development projects in the history of the Old Boys Association of D.S. Senanayake College. This venture was commenced under the leadership of the OBA Senior President Madura Wickramaratne and the President Susantha Dissanayake.</p>

		<br><br>		
		
	</div>

</div>







    


<?php get_footer(); ?>