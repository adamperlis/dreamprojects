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

<div class="wrapper submissions-page" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php echo $project_id ?>
					<div class="row hero--submissions">

						<div class="container-fluid  mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

								<ul class="d-flex nav nav-pills mb-3 flex-row" id="pills-tab" role="tablist">

									<li class="nav-item">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-bottom padding-top">
												<h2 class="display-1">Winners</h2>
											<!-- <p class="display-6 winners-subtitle" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="50">WHERE DREAMS ARE MADE</p> -->
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-bottom padding-top">
												<h2 class="display-1">Runners Up</h2>
											<!-- <p class="display-6 winners-subtitle" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="50">WHERE DREAMS ARE MADE</p> -->
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-bottom padding-top">
												<h2 class="display-1">Nominees</h2>
											<!-- <p class="display-6 winners-subtitle" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="50">WHERE DREAMS ARE MADE</p> -->
											</div>
										</a>
									</li>
								</ul>

					</div>

						<div class="row">
							<div class="scroll-text-hero-submissions" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="100" >
								<span class="display-5 scroll-text-alignment">Scroll</span>
								<hr></hr>
							</div>
						</div>
						</div>

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12">
										<div class="container-fluid">
										<div class="row overflow-none">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-top">

												<?php

												// args
												$args = array(
													'posts_per_page' => -1,
													'post_type'		=> 'winner_nominee',
													'meta_key'		=> 'award_designation',
													'meta_value'	=> 'winner'
												);


												// query
												$the_query = new WP_Query( $args );

												?>
												<?php if( $the_query->have_posts() ): ?>
													<ul>
													<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
														<?php $project_id = get_field('project_id'); ?>
														<li class="d-flex justify-content-center flex-column winner--project">
															<div class="flex-item align-self-center">
															<div class="container-fluid winners-text-link">
																<div class="row">
																		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
																		<div class="col-10 col-sm-10 col-md-10 col-lg-10" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500">
																			<a style="text-decoration:none" href="<?php the_permalink(); ?>">
																				<h2 class="display-2 black text-center"><?php the_field('first_name'); echo '&nbsp;'; the_field('last_name'); ?></h2>
																				<p class="display-5 black text-center"><span><?php echo $project_id->post_title ?></span></p>

																				<button class="btn btn-quaternary mx-auto d-block mt-5">See Project <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-black.svg" /></button>
																			</a>
																		</div>
																				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
																</div>
															</div>

															<div class="container-fluid winners--section">
																<div class="row">
																	<ul class="grid">

																		<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="900" class="reveal"><img data-rellax-speed="4" data-rellax-percentage="0.1" class="rellax img-fluid images-winner" src="<?php the_field('process_image'); ?>" /></li>
																		<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="600" class="reveal"><img data-rellax-speed="3" data-rellax-percentage="0.1" class="rellax img-fluid images-winner" src="<?php the_field('hero_image'); ?>" /></li>
																		<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="300" class="reveal"><img data-rellax-speed="2" data-rellax-percentage="0.1" class="rellax img-fluid images-winner" src="<?php the_field('design_system_image'); ?>" /></li>
																		<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="0" class="reveal"><img data-rellax-speed="1" data-rellax-percentage="0.1" class="rellax img-fluid images-winner" src="<?php the_field('design_grid_image'); ?>" /></li>
																	</ul>
																</div>

															</div>
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

								</div>
							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12">
										<div class="container-fluid">
										<div class="row overflow-none">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-top">

												<?php

												// args
												$args = array(
													'posts_per_page' => -1,
													'post_type'		=> 'winner_nominee',
													'meta_key'		=> 'award_designation',
													'meta_value'	=> 'runner_up'
												);


												// query
												$the_query = new WP_Query( $args );

												?>
												<?php if( $the_query->have_posts() ): ?>
													<ul>
													<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
														<?php $project_id = get_field('project_id'); ?>
														<li class="d-flex justify-content-center flex-column winner--project">
															<div class="flex-item align-self-center">
															<div class="container-fluid winners-text-link">
																<div class="row">
																		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
																		<div class="col-10 col-sm-10 col-md-10 col-lg-10" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500">
																			<a style="text-decoration:none" href="<?php the_permalink(); ?>">

																				<h2 class="display-2 black text-center"><?php the_field('first_name'); echo '&nbsp;'; the_field('last_name'); ?></h2>
																				<p class="display-5 black text-center"><span><?php echo $project_id->post_title ?></span></p>
																			<button class="btn btn-quaternary mx-auto d-block mt-5">See Project <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-black.svg" /></button>
																			</a>
																		</div>
																				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
																</div>
															</div>

															<div class="container-fluid winners--section">
																<div class="row">
																	<ul class="grid">

																		<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="900" class="reveal"><img data-rellax-speed="4" data-rellax-percentage="0.1" class="rellax img-fluid images-winner" src="<?php the_field('process_image'); ?>" /></li>
																		<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="600" class="reveal"><img data-rellax-speed="3" data-rellax-percentage="0.1" class="rellax img-fluid images-winner" src="<?php the_field('hero_image'); ?>" /></li>
																		<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="300" class="reveal"><img data-rellax-speed="2" data-rellax-percentage="0.1" class="rellax img-fluid images-winner" src="<?php the_field('design_system_image'); ?>" /></li>
																		<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="0" class="reveal"><img data-rellax-speed="1" data-rellax-percentage="0.1" class="rellax img-fluid images-winner" src="<?php the_field('design_grid_image'); ?>" /></li>
																	</ul>
																</div>

															</div>
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

								</div>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12">
										<div class="container-fluid">
										<div class="row overflow-none">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-top">

												<?php

												// args
												$args = array(
													'posts_per_page' => -1,
													'post_type'		=> 'winner_nominee',
													'meta_key'		=> 'award_designation',
													'meta_value'	=> 'nominee',
													'meta_compare' => 'EXISTS' // make sure the post have this acf value
												);


												// query
												$the_query = new WP_Query( $args );

												?>
												<?php if( $the_query->have_posts() ): ?>
													<div class="container-fluid nominees--section">
														<div class="row">
															<div class="col-12 col-lg-1"></div>
															<div class="col-12 col-lg-10">
															<ul class="grid padding-bottom">

													<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
														<?php $project_id = get_field('project_id'); ?>



																	<li class="rellax" data-rellax-speed="1" data-rellax-percentage="0.1">
																		<div class="col-12 nominees--project">
																			<a style="text-decoration:none" href="<?php the_permalink(); ?>">
																				<div class="reveal pb-3" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="0"><img class="img-fluid" src="<?php the_field('hero_image'); ?>" /></div>
																				<h2 class="display-4 black" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="50"><span><?php echo $project_id->post_title ?></span></h2>
																				<p class="display-5 black" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="100"><?php the_field('first_name'); echo '&nbsp;'; the_field('last_name'); ?></p>
																			</a>
																		</div>
																	</li>




													<?php endwhile; ?>
													</ul>
												</div>
												<div class="col-12 col-lg-1"></div>
												</div>

											</div>

												<?php endif; ?>

													<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

											</div>
											</div>
											</div>
									</div>

								</div>
							</div>
						</div>

					</div>

				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>



	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
