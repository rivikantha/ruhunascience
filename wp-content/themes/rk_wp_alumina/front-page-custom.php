<?php
/*
* Template Name: Custom Front Page
*/
get_header(); ?>

<!-- slider is a custom post type used to add slides to be displayed in the carausal -->
		
<?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 5)); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">

		<?php $count = 0; ?>

		<?php foreach($slider as $slide): ?>				

			<div class="carousel-item <?php echo ($count==0)?'active':''; ?> ">
				<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="d-block w-100" alt="" />
				<div class="carousel-caption d-none d-md-block">
					<h5><?php echo $slide->post_title ?></h5>
					<p><?php echo $slide->post_content ?></p>
				</div>
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


<div class="row">

	<!--Sidebar Left Wideget area Upcomming Events widget Event Calendar plugin -->

	<div class="col-lg-4 col-sm-12 pt-3 pl-5 pb-0">		

		<?php dynamic_sidebar('Front Page Widget Area');?>		
		
	</div>

	<!--Main Content Recent News-->

	<div class="col-lg-8 col-sm-12 pt-3 pl-5 pb-0 rk-alum-news-col">

		<div class="rk-alum-latest-news-container">

			<div class="rk-alumina-news-title-wrapper">

				<h3>Latest News</h3>

			</div>

			<?php $the_query = new WP_Query( 'posts_per_page=5&category_name=News' ); ?>		

			<div class="rk-alum-news-items-container">

				<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				
				<div class="rk-alum-news-item-wrapper">

					<div class="rk-alum-news-thumbnail">
						
						<?php  $image = get_the_post_thumbnail($post->ID,$size = array(123,123),$attr=array("class"=>"rk-alum-news-thumbna")); ?>

						<?php echo $image ?>
					</div>

					<div class="rk-alum-news-text-content-wrapper">

						<h3 class="rk-alum-news-item-title">			
				
						<?php the_title(); ?>
					
						</h3>

						<div class="rk-alum-news-excerpt"><p><?php the_excerpt(); ?></p></div>

						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" class="rk-alum-news-item-read-more-link">Read More <i class="fa fa-caret-right" aria-hidden="true"></i>				
						</a>
						


					</div><!--rk-alum-news-text-content-wrapper-->


					

				</div><!--rk-alum-news-item-wrapper-->

				<?php endwhile;?>

			</div><!--rk-alum-news-items-container-->
		

			<?php wp_reset_query(); ?>


		</div><!--rk-alumina-latest-news-container-->
		
	</div>

</div>

<div class="row">

	<div class="col">

		<div class="rk-alum-gallery-container">
			
			<div class="galary-icon-container mb-4">

				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>

			</div>
			
			<?php //dynamic_sidebar('image-gallery-1'); 

			

			?>	

		</div><!--rk-alum-gallery-container-->

		

	</div>
	

</div>   


<?php get_footer(); ?>

