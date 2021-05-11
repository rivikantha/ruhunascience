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

<!-- <div class="stats">
	<div class="row h-100 align-items-center">

		<div class="col text-center font-weight-bold py-3">

			<h3><i class="far fa-user"></i> Members: <span class="counter">150</span>+</h3>
			
			
		</div>

		<div class="col text-center font-weight-bold py-3">

			<h3><i class="far fa-folder-open"></i> Projects: <span class="counter">10</span>+</h3>
			
		</div>

		<div class="col text-center font-weight-bold py-3">

			<h3><i class="far fa-calendar-check"></i> Get Togethers: <span class="counter">20</span>+</h3>
			
		</div>
	</div>

</div> -->

<!--Sidebar beneath the carausal display-->


<div class="row border-bottom pb-5">

	<!--Sidebar Left Wideget area Upcomming Events widget Event Calendar plugin -->

	<div class="col-lg-4 col-sm-12 pt-3 pl-5 pb-0">		

		<?php dynamic_sidebar('Front Page Widget Area');?>		
		
	</div>

	<!--Main Content Recent News-->

	<div class="col-lg-8 col-sm-12 pt-3 pl-5 pb-0">

		<div class="title-dashboard">
			<h3 class="heading-light">Latest News</h3>
		</div>


		<?php $the_query = new WP_Query( 'posts_per_page=5&category_name=News' ); ?>

		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

			<h3 class="heading-regular">			
				
				<?php the_title(); ?>
			
			</h3>

			<div class="text-content"><?php the_excerpt(); ?></div>

			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">	Read More 				
				</a>			
			
		<?php endwhile;?>

		<?php wp_reset_query(); ?>

				
		
	</div>

</div>

<div class="image-gallary-container mt-5">

	<div class="row text-center">

		<div class="col">

			<div class="galary-icon-container mb-4">

				<h1><i class="far fa-images"></i></h1>

			</div>
			
			<?php dynamic_sidebar('RK WP Alumina Photo Gallary'); ?>

		</div>
		

	</div> 

</div>   


<?php get_footer(); ?>

