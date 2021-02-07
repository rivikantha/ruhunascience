<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
      <?php bloginfo( 'name'); ?>
  </title>
  <?php wp_head(); ?>
</head>
<body>
	<div class="container-fluid">	

  		<!--Retrieve Site logo if set -->
  		<?php
      	$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?>

		<!--Display Header Navigation set in admin pannel -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

		  <a class="navbar-brand" href="#">

		  	<?php if (has_custom_logo()): ?>

				  <img src="<?php echo $logo[0]; ?>" class="mr-3" width="80" alt="<?php  echo get_bloginfo( 'name' ) ?>">
				  <?php echo get_bloginfo( 'name' ) ?>

				<?php else: ?>

					<?php  echo get_bloginfo( 'name' ) ?>	

				<?php endif; ?>

		  </a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		  
			<?php
			   wp_nav_menu( array(
			   'menu'              => 'Header Menu',
			   'theme_location'    => 'header-menu',
			   'depth'             => 2,
			   'container'         => '<div>',
			   'container_class'   => 'collapse navbar-collapse',
			   'container_id'      => 'navbarSupportedConten',
			   'menu_class'        => 'navbar-nav ml-auto',
			   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			   'walker'            => new wp_bootstrap_navwalker())
			   );
			?>
		</nav>

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



				

				
	   