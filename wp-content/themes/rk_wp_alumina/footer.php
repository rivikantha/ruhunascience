	</div><!--end of container div-->

<div class="footer-wrapper">

	<footer class="foooter-container">

		<div class="container">

			<div class="footer-middle">
		
				<div class="row">
					
					<div class="col-md-4 col-sm-12 col-xs-12">
						
						<div class="footer-logo">

							<!--Retrieve Site logo if set -->
					  		<?php
					      		$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							?>
							
							<?php if (has_custom_logo()): ?>

							  <a href="https://www.ruhunascience.local/"><img src="<?php echo $logo[0]; ?>" class="mr-3" width="80" alt="<?php  echo get_bloginfo( 'name' ) ?>"></a>					  

							<?php else: ?>

								<?php  echo get_bloginfo( 'name' ) ?>	

							<?php endif; ?>
						</div>

					</div>


					<div class="col-md-5 col-sm-12 col-xs-12">
                        
                        <div class="links-footer">
                            
                            <div class="row">
                                
								<div class="col-sm-4 col-xs-12 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2146 current_page_item menu-item-has-children">

									<h6 class="heading-bold">University</h6>
									<ul class="list-unstyled no-margin sub-menu menu-odd  menu-depth-1">
										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/student-directory/" class="menu-link sub-menu-link">Students</a>

										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/program-events/" class="menu-link sub-menu-link">Events</a>	
										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/university-gallery/" class="menu-link sub-menu-link">Gallery</a>

										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/news-builder/" class="menu-link sub-menu-link">News</a>
										</li>

									</ul>
								</div>

								<div class="col-sm-4 col-xs-12 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">

									<h6 class="heading-bold">Alumni</h6>
									
									<ul class="list-unstyled no-margin sub-menu menu-odd  menu-depth-1">
										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/contact-us/" class="menu-link sub-menu-link">Contacts</a>

										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/career-opportunity/" class="menu-link sub-menu-link">Career</a>

										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/about-us/" class="menu-link sub-menu-link">About us</a>

										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/apply-to-job/" class="menu-link sub-menu-link">Apply to Job</a>
										</li>
									</ul>
								</div>

								<div class="col-sm-4 col-xs-12 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">

									<h6 class="heading-bold">Account</h6>
									
									<ul class="list-unstyled no-margin sub-menu menu-odd  menu-depth-1">
										<li class="menu-item menu-item-type-custom menu-item-object-custom">

											<a href="/member-profile/alinaradionova/" class="menu-link sub-menu-link">Profile</a>

										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/alumni-stories/" class="menu-link sub-menu-link">Stories</a>

										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/password-reset/" class="menu-link sub-menu-link">Password</a>
										</li>

										<li class="menu-item menu-item-type-post_type menu-item-object-page">

											<a href="http://sayidan.kenzap.com/alumni-materials/" class="menu-link sub-menu-link">Downloads</a>
										</li>
									</ul>
								</div>
                            </div>
                        </div>
                    </div>

				</div>

			</div>

			<div class="footer-bottom text-center">
                <p class="copyright">©2021 Designed and Developed by Rivikantha rivikantha@gmail.com</p>
            </div>

		</div>

	</footer>

</div>

<?php wp_footer(); ?>

<?php $css_version = rand(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?version=<?php echo $css_version ?>" type="text/css" />







<script>


	$('.counter').counterUp();



</script>



</body>
</html>