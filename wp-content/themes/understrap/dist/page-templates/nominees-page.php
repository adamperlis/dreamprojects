<?php
/**
 * Template Name: Nominees Page Template
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

<div class="wrapper nominees-page" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">



			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>


				<?php while ( have_posts() ) : the_post(); ?>
					<?php echo $project_id ?>
					<div class="container-fluid hero--nominee">

						<div class="row">

							<div class="col-12 col-sm-12 col-md-12 col-lg-12 padding-bottom padding-top text-center">
								<h2 class="display-1" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500"><?php the_title(); ?></h2>
								<!-- <p class="display-6 nominees-subtitle" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500">WHERE DREAMS ARE BORN</p> -->
							</div>
							<div class="scroll-text-hero-nominees" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="100" >
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

				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>



	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
