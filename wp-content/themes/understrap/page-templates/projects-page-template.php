<?php
/**
 * Template Name: Projects Page Template
 *
 * Template for displaying a Projects Page Template.
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

					<div class="hero--projects">
						<div id="projects" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
							<!-- Swiper -->
							<div class="container-fluid projects--page" style="background:#FFFDFA;" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">



								<div class="row">
									<div class="col-1 col-sm-1"></div>
									<div class="col-10 col-sm-10">

										<div class="container-fluid d-flex">

											<div class="col-6 p-0 d-flex align-items-center">
												<h4 class="black display-4 m-0 text-sm-left">Projects</h4>
											</div>

										</div>
										<hr style="border-top:1px solid black; padding-bottom: 80px; padding-top: 40px;"></hr>

										<div class="project-grid-wrapper">

									<?php
										$args = array(
										'post_type'=> 'brief',
										'posts_per_page'=> -1,
										'orderby' => 'publish_date',
										);
										$my_query = new WP_Query($args);
										$i = 1;
										if( $my_query->have_posts() ) :
										while ($my_query->have_posts()) : $my_query->the_post();
										?>


										<li class="row p-0 m-0 text-left">
											<a href="<?php the_permalink(); ?>" style="text-decoration:none; width: 100%;">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 m-0 d-flex flex-column justify-content-center align-items-spaceBetween" style="height: 100%;" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100">

												<div class="container p-4" style="background:#F8F8F8; height: 392px;">
													<hr style="border-top:4px solid black; padding-bottom: 40px;"></hr>
													<div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">

													<span class="display-3 d-block pb-5"><?php the_title(); ?></span>
													<p class="display-4">See Project Brief</p>
													<div class="blue-btn ca-btn">
													  <svg xmlns="http://www.w3.org/2000/svg" class="arrow_btn" width="25.5" height="5" viewBox="0 0 25.5 4.62"><g data-name="Calque 2"><path d="M0 1.83v1h23.48l-1.06 1.02.77.77 2.31-2.31L23.19 0l-.77.77 1.06 1.06z" fill-rule="evenodd" data-name="Calque 1"></path></g></svg>
													</div>
													</div>
												</div>
												<div class="col-1 col-sm-1"></div>

											</div>
											</a>

									</li>



										<?php
										$i++;
										endwhile; echo '</ul>';
										endif; wp_reset_query(); ?>
										</div>
									</div>
						    </div>

							</div>
							<div class="col-1 col-sm-1"></div>

						  </div>

						</div>
							</div>

					</div>








				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

<?php get_footer(); ?>
