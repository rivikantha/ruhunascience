<?php
/**
 * Template part for displaying posts
 *
 * @link https://www.rk-soft.com/wp_themes/rk_wp_alumina/
 *
 * @package RK Themes
 * @subpackage RK WP Alumina
 * @since RK WP Alumina 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		/*wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);*/
		?>
	</div><!-- .entry-content -->

	

</article><!-- #post-<?php the_ID(); ?> -->
