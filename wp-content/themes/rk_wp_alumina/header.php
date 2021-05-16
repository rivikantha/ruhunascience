<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rk_wp_alumina
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site container-fluid no-padding">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rk_wp_alumina' ); ?></a>

	<div class="row">
		
		<div class="col p-0">
			
			<div class="rk-wp-alumina-top-menu-wrapper">
				
				<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_class' => 'rk-wp-alumina-top-menu' ) ); ?>

			</div><!--rk-wp-alumina-top-menu-wrapper-->

		</div>

	</div><!--top menue row-->

	<header id="masthead" class="site-header">

		<!--Retrieve Site logo if set -->
  		<?php
      		$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?>


		<nav id="main-menu" class="navbar navbar-expand-lg navbar-light bg-transparent">

		  <a class="navbar-brand" href="#">

		  	<?php if (has_custom_logo()): ?>

				  <a href="https://www.ruhunascience.local/"><img src="<?php echo $logo[0]; ?>" class="mr-3" width="240" alt="<?php  echo get_bloginfo( 'name' ) ?>"></a>	  

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
			   'theme_location'    => 'menu-1',
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
		</nav> <!--Main Navigation and Site Branding -->
		
	</header><!-- #masthead -->
