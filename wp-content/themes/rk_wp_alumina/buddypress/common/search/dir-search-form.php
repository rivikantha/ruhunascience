<?php
/**
 * Output the search form markup.
 *
 * @since 2.7.0
 * @version 3.0.0
 */
?>

<div id="<?php echo esc_attr( bp_current_component() ); ?>-dir-search" class="dir-search float-left" role="search">	

	<form action="" method="get" id="search-<?php echo esc_attr( bp_current_component() ); ?>-form" class="form-inline">
		<div class="form-group mx-sm-3 mb-2">
			<label for="<?php bp_search_input_name(); ?>" class="sr-only"><?php bp_search_placeholder(); ?></label>
			<input type="text" class="form-control"  name="<?php echo esc_attr( bp_core_get_component_search_query_arg() ); ?>" id="<?php bp_search_input_name(); ?>" placeholder="<?php bp_search_placeholder(); ?>" />
		</div>

		<button type="submit" id="<?php echo esc_attr( bp_get_search_input_name() ); ?>_submit" name="<?php bp_search_input_name(); ?>_submit" class="btn btn-primary mb-2"> <?php esc_attr_e( 'Search', 'buddypress' ); ?> </button>
	</form>


	<!--<form action="" method="get" id="search-<?php echo esc_attr( bp_current_component() ); ?>-form" class="form-inline">
		<label for="<?php bp_search_input_name(); ?>" class="bp-screen-reader-text"><?php bp_search_placeholder(); ?></label>
		<input type="text" name="<?php echo esc_attr( bp_core_get_component_search_query_arg() ); ?>" id="<?php bp_search_input_name(); ?>" placeholder="<?php bp_search_placeholder(); ?>" />

		<input type="submit" id="<?php echo esc_attr( bp_get_search_input_name() ); ?>_submit" name="<?php bp_search_input_name(); ?>_submit" value="<?php esc_attr_e( 'Search', 'buddypress' ); ?>" />
	</form>-->
</div><!-- #<?php echo esc_attr( bp_current_component() ); ?>-dir-search -->
