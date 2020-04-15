<?php
/**
 * Template Name: Runner Up Page Template
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

<div class="wrapper runners-up-page" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">



			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>


				<?php while ( have_posts() ) : the_post(); ?>
					<?php echo $project_id ?>
					<div class="container-fluid hero--runner-up">

						<div class="row">

							<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-bottom padding-top text-center">
								<h2 class="display-1" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="0"><?php the_title(); ?></h2>
								<!-- <p class="display-6 winners-subtitle" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="50">RUNNERS UP</p> -->
							</div>
							<div class="scroll-text-hero-runners-up" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="100" >
								<span class="display-5 scroll-text-alignment">Scroll</span>
								<hr></hr>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
							<div class="container-fluid">
							<div class="row overflow-none">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-top">

									<?php

									// args
									$args = array(
										'numberposts'	=> -1,
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

				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>



	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
