<?php
/**
 * BuddyPress - Members Home
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 * @version 3.0.0
 */

?>

<div id="buddypress">

	<?php

	/**
	 * Fires before the display of member home content.
	 *
	 * @since 1.2.0
	 */
	do_action( 'bp_before_member_home_content' ); ?>

	<div id="item-header" role="complementary">

		<?php
		/**
		 * If the cover image feature is enabled, use a specific header
		 */
		if ( bp_displayed_user_use_cover_image_header() ) :
			bp_get_template_part( 'members/single/cover-image-header' );
		else :
			bp_get_template_part( 'members/single/member-header' );
		endif;
		?>

	</div><!-- #item-header -->

	<div class="row rk-wp-alum-buddypress-user-profile-item-nav text-center">

		<div class="col rk-wp-alum-buddypress-user-profile-item-nav-container">

			<div class="rk-wp-alum-buddypress-user-profile-item-nav-wrapper">

				<div id="item-nav">
					<div class="item-list-tabs no-ajax" id="object-nav" aria-label="<?php esc_attr_e( 'Member primary navigation', 'buddypress' ); ?>" role="navigation">
						<ul>

							<?php bp_get_displayed_user_nav(); ?>

							<?php

							/**
							 * Fires after the display of member options navigation.
							 *
							 * @since 1.2.4
							 */
							do_action( 'bp_member_options_nav' ); ?>

						</ul>
					</div>
				</div><!-- #item-nav -->				

			</div><!-- rk-wp-alum-buddypress-user-profile-item-nav-wrapper -->

		</div><!-- rk-wp-alum-buddypress-user-profile-item-nav-container -->

	</div><!-- row rk-wp-alum-buddypress-user-profile-item-nav -->

	<div class="template-notices-wrapper">
					
		<div id="template-notices" role="alert" aria-atomic="true">
			
			<!-- <div id="message" class="bp-template-notice updated">

				<p>Message successfully sent.</p>

			</div> -->


			<?php

			/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
			do_action( 'template_notices' ); 

			?>

		</div>

	</div><!-- template-notices-wrapper -->

	<div class="row rk-wp-alum-buddypress-user-profile-body-container">

		<div class="col-4 rk-wp-alum-buddypress-user-profile-information">

			<div class="user-profile-information-title">
				
				<h1>Information</h1>
			</div>

			<div class="user-profile-information-table-wrapper">
				
				<table class="table">

					<tbody>
					    <tr>					      
					      <td>Joined:</td>
					      <td><?php echo date("M Y", strtotime(get_userdata(bp_displayed_user_id( ))->user_registered)); ?></td>					      
					    </tr>

					    <tr>					      
					      <td>Birth Date:</td>
					      <td><?php bp_profile_field_data( 'field=Date of Birth' ); ?></td>					      
					    </tr>

					    <tr>					      
					      <td>Status:</td>
					      <td><?php bp_profile_field_data( 'field=Marital status' ); ?></td>					      
					    </tr>

					    <tr>					      
					      <td>Location:</td>
					      <td><?php bp_profile_field_data( 'field=Current Location' ); ?></td>					      
					    </tr>
					</tbody>

				</table>

			</div>		
			

		</div><!-- col rk-wp-alum-buddypress-user-profile-information -->

		<div class="col-8 rk-wp-alum-buddypress-user-profile-body">

			<div id="item-body">

				<?php

				/**
				 * Fires before the display of member body content.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_before_member_body' );

				if ( bp_is_user_front() ) :
					bp_displayed_user_front_template_part();

				elseif ( bp_is_user_activity() ) :
					bp_get_template_part( 'members/single/activity' );

				elseif ( bp_is_user_blogs() ) :
					bp_get_template_part( 'members/single/blogs'    );

				elseif ( bp_is_user_friends() ) :
					bp_get_template_part( 'members/single/friends'  );

				elseif ( bp_is_user_groups() ) :
					bp_get_template_part( 'members/single/groups'   );

				elseif ( bp_is_user_messages() ) :
					bp_get_template_part( 'members/single/messages' );

				elseif ( bp_is_user_profile() ) :
					bp_get_template_part( 'members/single/profile'  );

				elseif ( bp_is_user_notifications() ) :
					bp_get_template_part( 'members/single/notifications' );

				elseif ( bp_is_user_settings() ) :
					bp_get_template_part( 'members/single/settings' );

				// If nothing sticks, load a generic template
				else :
					bp_get_template_part( 'members/single/plugins'  );

				endif;

				/**
				 * Fires after the display of member body content.
				 *
				 * @since 1.2.0
				 */
				do_action( 'bp_after_member_body' ); ?>

			</div><!-- #item-body -->

		</div><!-- rk-wp-alum-buddypress-user-profile-body -->

	</div><!-- rk-wp-alum-buddypress-user-profile-body-container -->

	<?php

	/**
	 * Fires after the display of member home content.
	 *
	 * @since 1.2.0
	 */
	do_action( 'bp_after_member_home_content' ); ?>

</div><!-- #buddypress -->
