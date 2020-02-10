<?php
/**
 * Template Name: Sponsor Template
 *
 * Template for displaying a Sponsor Template.
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

					<div class="hero--sponsor">

						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

									<div class="row">

										<div class="col-12 col-sm-12 col-md-12 col-lg-5 pt-sm-0 pt-5 pb-5 pb-sm-0">
											<h2 class="display-2">Sponsors</h2>
											<p class="pt-3 black">Become a sponsor and create a customized Dream Project for your applicants.</p>
										</div>
										<div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
										<div class="col-12 col-sm-12 col-md-12 col-lg-5">


											<div class="card-deck text-center">
								        <div class="card mb-4 box-shadow p-2 p-sm-5">

								          <div class="card-body">
														<div class="card-title pricing-card-title pb-2">
															<h1 class="display-3">$99</h1><small class="text-muted"> / per project</small>
														</div>
								            <ul class="list-unstyled mt-3 mb-4">
								              <li>Hand Curated Applicants</li>
															<hr class="mb-0"></hr>
								              <li>Vetted by Industry Experts</li>
															<hr class="mb-0"></hr>
								              <li>Customizable Design Briefs</li>
															<hr class="mb-0"></hr>
								              <li>Specialized Talent Pool</li>
								            </ul>
														<a href="/contact-us"><button class="btn btn-tertiary">Contact Us</button></a>
								          </div>
								        </div>

								      </div>

										</div>
									</div>

							</div>
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>
						</div>



				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

<?php get_footer(); ?>
