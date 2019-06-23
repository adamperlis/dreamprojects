<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<div class="row mt-4 data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100"">
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-10 d-block d-sm-none">
					<div class="container-fluid">
						<div class="row flex-row">
							<div class="col-7">
								<h3 class="hero-subtitle-mobile display-4">Monthly Portfolio <br> Building Challenge</h3>
							</div>
							<div class="col-5">
								<div class="container-fluid d-flex flex-column align-items-end">
									<span class="display-5">Sponsored by:</span>
									<a href="https://academyux.com"><img class="sponsor" src="<?php echo get_template_directory_uri() ?>/img/academy-logo-black.svg" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			</div>


			<!-- ******************* Shows on all other breakpoints ******************* -->


				<div class="row hero--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-10 col-sm-10 col-md-10 col-lg-10">
					<div class="row hero pt-4">
							<div class="col-12 col-sm-4 col-md-7 col-lg-7">
									<h1 class="display-0">Dream Projects</h1>
							</div>
					</div>

					<div class="row hero-subtitle flex-wrap">

						<div class="col-12 col-sm-12 col-md-12 col-lg-5 hero-component-two flex-row flex-sm-column flex-md-column flex-lg-column">
							<div class="container-fluid">
								<div class="row d-none d-sm-block">
									<div class="col-6 col-md-12 col-lg-12 pb-4 pb-sm-0">
										<div class="container-fluid d-flex align-items-center sponsor--section">
											<span class="display-5">Sponsored by:</span>
											<a href="https://academyux.com"><img class="sponsor" src="<?php echo get_template_directory_uri() ?>/img/academy-logo-black.svg" /></a>
										</div>
									</div>
									<div class="col-6 col-md-12 col-lg-12 pb-4">
										<h3 class="display-3">Monthly Portfolio <br> Building Challenge</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 hero-component-three">
								<div class="text-grid">
									<p>Dream Projects is a screen design, portfolio-building challenge. Every month you’ll have the chance to re-design digital experiences you have always dreamed of working on. Learn how to build your portfolio and gain recognition as you take the next leap in your product design career.</p>
								</div>
						</div>
						<div class="col-sm-1 col-md-1 hero-component-two">
							<div class="scroll-text">
								<span class="display-5 scroll-text-alignment">Scroll</span>
							</div>
						</div>
					</div>

				</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row mission--section">
					<div class="col-12">
						<div class="container-fluid">
							<div class="trigger1"></div>
							<div data-aos="opacity10" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="2000" data-aos-offset="200" class="row">
								<ul class="grid">
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="600" class="reveal"><img src="https://cdn.dribbble.com/users/877784/screenshots/4220958/xore___solar_system.gif"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300" class="reveal"><img src="https://cdn.dribbble.com/users/4859/screenshots/6238939/car-polling_4x.png"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0" class="reveal"><img src="https://cdn.dribbble.com/users/1240533/screenshots/6212438/confetti_mobile_all2_1600x1200_4x.jpg"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-200" data-aos-delay="600" class="reveal"><img src="https://cdn.dribbble.com/users/84550/screenshots/6248648/svgfilterhover01.2019-03-12_17_25_08.gif"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-200" data-aos-delay="300" class="reveal"><img src="https://cdn.dribbble.com/users/461555/screenshots/6201964/template_-_dribbble_-_shots_copy_77_4x.jpg"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-200" data-aos-delay="0" class="reveal"><img src="https://cdn.dribbble.com/users/466659/screenshots/6158445/starstuff_4x.png"/></li>
								</ul>
					</div>
				</div>
			</div>
		</div>




					<div class="row mission">

								<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
								<div class="col-10 col-sm-10 col-md-10 col-lg-10">

										<h2 data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400" class="display-2 reveal-text black"><span>As aspiring designers, we are often faced with the problem of lacking enough work in our portfolios to present our design skills and process.</span></h2>

								</div>
										<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

					</div>


					<div class="row" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
						<div class="col-12">
							<video id="myvideo" playsinline autoplay loop muted/>
								<source type="video/mp4" src="<?php echo get_template_directory_uri() ?>/img/MASTER.mp4">
							</video>

						</div>
					</div>

					<div class="row about--section text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
						<div class="container">
							<div class="row">
								<div class="col-10 col-sm-8 d-block center-block text-center mx-auto">
									<h2 class="display-2 black">Win an Interview</h2>
								</div>
							</div>
						</div>
						<div class="container pb-5">
							<div class="row">
								<div class="col-10 col-lg-4 d-block center-block text-center mx-auto">
									<p class="black">Dream Projects is meant to prepare you for your next role and those lucky few to be announced as Winner could land an interview with a top tier company.</p>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-4 d-block center-block text-center mx-auto">
									<ul class="logo-grid">
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0"><img src="<?php echo get_template_directory_uri() ?>/img/Google_2015_logo.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100"><img src="<?php echo get_template_directory_uri() ?>/img/Airbnb_Logo.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="200"><img src="<?php echo get_template_directory_uri() ?>/img/invision-logo-vector-1.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300"><img src="<?php echo get_template_directory_uri() ?>/img/Philips_logo_new.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="400"><img src="<?php echo get_template_directory_uri() ?>/img/Logo_NIKE.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="500"><img src="<?php echo get_template_directory_uri() ?>/img/academy-logo-black.svg" /></li>
									</ul>
							</div>
						</div>

					</div>
					</div>



			<div id="projects" class="container projects--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
				<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<div class="row">
						<h4 class="display-4 section-title black">Projects</h4>
					</div>

				<!-- Swiper -->
				<div class="row" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
			  <div class="swiper-container">
			    <ul class="swiper-wrapper">
						<?php
							$args = array(
							'numberposts'=> 2,
							'post_type'=> 'brief',
							'orderby' => 'publish_date',
							);
							$my_query = new WP_Query($args);
							$i = 1;
							if( $my_query->have_posts() ) :
							while ($my_query->have_posts()) : $my_query->the_post();
							?>

							<li class="projects--project swiper-slide">
								<!-- <img class="brief_featured_image" src="<?php the_field('brief_featured_image'); ?>" /> -->
								<div class="row">

								<div class="col-10 col-sm-6 text-left p-0">
									<h2 class="display-2 black"><?php the_title(); ?></h2>
									<div class="container-fluid project-btn">
										<div class="row">
										<div class="col-lg-6"></div>
										<div class="col-lg-6">
											<!-- <div class="project--description"><?php the_content(); ?></div> -->
										</div>
										</div>
									</div>

									<a <?php echo $i == 2 ? 'onclick="return false;"' : '' ?> href="<?php the_permalink(); ?>"><button <?php echo $i == 2 ? 'disabled' : '' ?> class="<?php echo $i == 2 ? 'btn btn-disabled' : 'btn btn-tertiary' ?>"><?php echo $i == 2 ? 'Coming Soon' : 'See Project Brief' ?></button></a>

									<h5 class="display-5 black project--deadline">Submission Deadline <?php the_field('submission_deadline'); ?></h5>
								</div>
								</div>

							</li>


							<?php
							$i++;
							endwhile; echo '</ul>';
							endif; wp_reset_query(); ?>

			    </ul>
					<div class="swiper-scrollbar"></div>
			  </div>

				<!-- Add Scrollbar -->
				<div class="row">
					<div class="col-12">
					<div class="d-none d-sm-block swiper-button-next display-4">Next Month <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-black.svg" /></div>
					<div class="d-none d-sm-block swiper-button-prev display-4"><img src="<?php echo get_template_directory_uri() ?>/img/Arrow-black.svg" /> This Month</div>
					</div>
				</div>

				</div>
			</div>
			<div class="col-1"></div>
			</div>
			</div>




<?php get_footer(); ?>
