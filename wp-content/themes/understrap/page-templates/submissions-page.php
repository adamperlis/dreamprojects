<?php
/**
 * Template Name: Submissions Page Template
 *
 * Template for displaying a Project Submission Form Template.
 *
 * @package understrap
 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
	}


	acf_form_head();
	get_header();


	$container = get_theme_mod( 'understrap_container_type' );

	?>

	<?php if ( is_front_page() ) : ?>
		<?php get_template_part( 'global-templates/hero', 'none' ); ?>
	<?php endif; ?>


				<!-- Do the left sidebar check -->
				<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>


					<?php while ( have_posts() ) : the_post(); ?>
					<?php echo $project_id ?>

					<div class="row m-0 submissions-page">

							<!-- Swiper -->
							<div class="container-fluid submissions--hero" style="background:#FFFDFA;" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">

					<div class="row">
							<div class="col-1 col-sm-1"></div>
							<div class="col-10 col-sm-10 p-0">

						<div class="container-fluid d-flex">

							<div class="col-6 p-0 d-flex align-items-center">
								<h4 class="black display-4 m-0 text-sm-left">Submissions</h4>
							</div>

						</div>
						<hr class="divider"></hr>

												<div class="swiper-three">
													 <ul class="swiper-wrapper">

												<?php



												// args
												$args = array(
													'posts_per_page' => 5,
													'post_type'		=> 'winner_nominee',
													'meta_key'		=> 'award_designation',
													'meta_value'	=> 'winner'
												);


												// query
												$the_query = new WP_Query( $args );

												?>
												<?php if( $the_query->have_posts() ): ?>

													<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
														<?php $project_id = get_field('project_id'); ?>


																<li class="swiper-slide text-left align-items-start">

																	<div class="container-fluid">

																	<a style="text-decoration:none" href="<?php the_permalink(); ?>">
																	<div class="row">
																	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 blue-btn ca-btn" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="50">

																			<h2 class="display-2 black"><?php the_field('first_name'); echo '&nbsp;'; the_field('last_name'); ?></h2>
																			<div class="row">
																				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
																					<p class="display-5 black"><span><?php echo $project_id->post_title ?></span></p>
																						<p class="display-4">See Project</p>
																						<svg xmlns="http://www.w3.org/2000/svg" class="arrow_btn" width="25.5" height="5" viewBox="0 0 25.5 4.62"><g data-name="Calque 2"><path d="M0 1.83v1h23.48l-1.06 1.02.77.77 2.31-2.31L23.19 0l-.77.77 1.06 1.06z" fill-rule="evenodd" data-name="Calque 1"></path></g></svg>
																				</div>
																			</div>


																	</div>

																	<div class="col-xs-12 col-sm-1 col-md-1 col-lg-1"></div>

																	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-end">
																			<div class="reveal pb-3" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="0"><img class="img-fluid" src="<?php the_field('hero_image'); ?>" /></div>
																	</div>


																</div>
																</a>
																</div>

														</li>
													<?php endwhile; ?>
													</ul>

												<?php endif; ?>

												<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
												<!-- Add Arrows -->
												<div class="arrows">
												 <div class="d-none d-sm-block swiper-button-next"></div>
												 <div class="d-none d-sm-block swiper-button-prev"></div>
											 </div>
												<!-- Add Scrollbar -->
												<div class="swiper-scrollbar"></div>
											</div>

									</div>
										<div class="col-1 col-sm-1"></div>
									</div>
								</div>

							<div class="container-fluid">
								<div class="row">
									<div class="col-1 col-sm-1"></div>
									<div class="col-10 col-sm-10 col-md-10 col-lg-10 p-0">
										<div class="container-fluid">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 p-0" style="margin-bottom: 100%;">

												<?php

												// args
												$args = array(
													'posts_per_page' => -1,
													'post_type'		=> 'winner_nominee',

													'meta_compare' => 'EXISTS' // make sure the post have this acf value
												);


												// query
												$the_query = new WP_Query( $args );

												?>
												<?php if( $the_query->have_posts() ): ?>

															<ul class="nominees--section">

													<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
														<?php $project_id = get_field('project_id'); ?>



																	<li>
																		<div class="col-12 nominees--project">
																			<a style="text-decoration:none" href="<?php the_permalink(); ?>">
																				<div class="reveal pb-3" data-aos="fade-up"  data-aos-offset="0" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="0"><div style="background-image:url(<?php the_field('hero_image'); ?>); background-size: cover; height: 288px; width: 100%; margin-bottom: 20px; background-position: center center; background-repeat: no-repeat;"></div></div>
																				<h2 class="display-4 black" data-aos="fade-up"  data-aos-offset="0" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="50"><span><?php the_field('first_name'); echo '&nbsp;'; the_field('last_name'); ?></span></h2>
																				<p class="display-5 black" data-aos="fade-up"  data-aos-offset="0" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="100"><?php echo $project_id->post_title ?></p>
																			</a>
																		</div>
																	</li>




													<?php endwhile; ?>
													</ul>


												<?php endif; ?>

													<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

											</div>
											</div>
											</div>
									</div>
									<div class="col-1 col-sm-1"></div>

								</div>
							</div>




				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>



	</div><!-- #content -->

</div><!-- #page-wrapper -->


<script>
var swiper = new Swiper('.swiper-three', {
	slidesPerView: 'auto',
	centeredSlides: true,
	centeredSlidesBounds: true,
	speed:500,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	scrollbar: {
 el: '.swiper-scrollbar',
 hide: false,
},


});
</script>

<?php get_footer(); ?>
