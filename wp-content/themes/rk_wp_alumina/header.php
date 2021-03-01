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

		<nav id="main-menu" class="navbar navbar-expand-lg navbar-light bg-transparent">

		  <a class="navbar-brand" href="#">

		  	<?php if (has_custom_logo()): ?>

				  <a href="https://www.ruhunascience.local/"><img src="<?php echo $logo[0]; ?>" class="mr-3" width="80" alt="<?php  echo get_bloginfo( 'name' ) ?>"></a>
				  <?php echo get_bloginfo( 'name' ) ?>

				<?php else: ?>

					<?php  echo get_bloginfo( 'name' ) ?>	

				<?php endif; ?>

		  </a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
		  
			<?php
			   wp_nav_menu( array(
			   'menu'              => 'Header Menu',
			   'theme_location'    => 'header-menu',
			   'depth'             => 2,
			   'container'         => '',
			   'container_class'   => '',
			   'container_id'      => '',
			   'menu_class'        => 'navbar-nav ml-auto',
			   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			   'walker'            => new wp_bootstrap_navwalker())
			   );
			?>

			</div>
		</nav>

		



		



				

				
	   