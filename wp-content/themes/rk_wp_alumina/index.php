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
	<div class="col text-center font-weight-bold p-5">

		
		
		
	</div>

	<div class="col p-5">

		
		
	</div>

</div>







    


<?php get_footer(); ?>