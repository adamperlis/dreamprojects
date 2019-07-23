<?php
/**
 * Template Name: Rules Page Template
 *
 * Template for displaying a Rules Page Template.
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

					<div class="hero--rules">

						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

									<div class="row">

										<div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-sm-0 pt-5 pb-5 pb-sm-0">
											<h2 class="display-2">Rules</h2>
										</div>
									</div>

									<div class="row">

										<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

												<div class="text-grid">
													<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills—even win interviews at top companies—all while creating a portfolio that blows employers away.</p>
												</div>

									</div>

							</div>

							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>
						</div>


						</div>

						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-5 mb-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

							<hr></hr>

							</div>

							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>

						<div class="row text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="container">
								<div class="row">
									<div class="col-10 col-sm-8 d-block center-block text-center mx-auto">
										<h2 class="display-2 black">Criteria</h2>
									</div>
								</div>
							</div>
							<div class="container pb-3">
								<div class="row">
									<div class="col-10 col-lg-4 d-block center-block text-center mx-auto">
										<p class="black">Dream Projects is meant to prepare you for your next role. Winners will receive an interview with a top tier company.</p>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
									<div class="col-10 col-sm-10 col-md-10 col-lg-10" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-1 mb-1 mb-sm-5 p-5 text-center">
												<h3 class="display-3">25%</h3><span class="pb-5"><h2 class="display-4 black">Visual Design</h2></span>
												<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills—even win interviews at top companies—all while creating a portfolio that blows employers away.</p>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-1 mb-1 mb-sm-5 p-5 text-center">
												<h3 class="display-3">25%</h3><span class="pb-5"><h2 class="display-4 black">Visual Design</h2></span>
												<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills—even win interviews at top companies—all while creating a portfolio that blows employers away.</p>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-1 mb-1 mb-sm-5 p-5 text-center">
												<h3 class="display-3">25%</h3><span class="pb-5"><h2 class="display-4 black">Visual Design</h2></span>
												<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills—even win interviews at top companies—all while creating a portfolio that blows employers away.</p>
											</div>


									</div>
									</div>

									<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
								</div>

						</div>
						</div>

						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-5 mb-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

							<hr></hr>

							</div>

							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>

						<div class="row text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="container">
								<div class="row">
									<div class="col-10 col-sm-8 d-block center-block text-center mx-auto">
										<h2 class="display-2 black">Prizes</h2>
									</div>
								</div>
							</div>
							<div class="container pb-3">
								<div class="row">
									<div class="col-10 col-lg-4 d-block center-block text-center mx-auto">
										<p class="black">Dream Projects is meant to prepare you for your next role. Winners will receive an interview with a top tier company.</p>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
									<div class="col-10 col-sm-10 col-md-10 col-lg-10" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-1 mb-1 mb-sm-5 p-5 text-center">
													<span class="pb-5"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/winner.svg" /><h2 class="display-4 black">Winner</h2></span>
													<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills—even win interviews at top companies—all while creating a portfolio that blows employers away.</p>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-1 mb-1 mb-sm-5 p-5 text-center">
													<span class="pb-5"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/runner-up.svg" /><h2 class="display-4 black">Runner Up</h2></span>
													<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills—even win interviews at top companies—all while creating a portfolio that blows employers away.</p>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-1 mb-1 mb-sm-5 p-5 text-center">
													<span class="pb-5"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/nominee.svg" /><h2 class="display-4 black">Nominee</h2></span>
													<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills—even win interviews at top companies—all while creating a portfolio that blows employers away.</p>
											</div>


									</div>
									</div>

									<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
								</div>

						</div>
						</div>

						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-5 mb-5 d-flex mx-auto justify-content-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

								<a href="/#projects"><button class="btn btn-tertiary">See Projects <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a>


							</div>

							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>








				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

<?php get_footer(); ?>
