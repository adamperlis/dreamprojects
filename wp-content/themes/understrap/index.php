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

			<div class="row mt-4 subtitle d-sm-none" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-10 d-block">
					<div class="container-fluid">
						<div class="row flex-row">
							<div class="col-7">
								<h3 class="hero-subtitle-mobile display-4">Monthly Portfolio <br> Building Challenge</h3>
							</div>
							<div class="col-5">
								<div class="container-fluid d-flex flex-column align-items-end">
									<span class="display-5">Sponsored by:</span>
									<a href="https://squarespace.com"><img class="sponsor" src="<?php echo get_template_directory_uri() ?>/img/squarespace-logo-horizontal-black-new.svg" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			</div>


			<!-- ******************* Shows on all other breakpoints ******************* -->


				<div class="row hero--section align-items-start align-items-sm-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-10 col-sm-10 col-md-10 col-lg-10">
					<div class="row hero pb-sm-5 pt-sm-4">
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
											<a href="https://academyux.com"><img class="sponsor" src="<?php echo get_template_directory_uri() ?>/img/squarespace-logo-horizontal-black-new.svg" /></a>
										</div>
									</div>
									<div class="col-6 col-md-12 col-lg-12 pb-4 pt-2">
										<h3 class="display-3">Monthly Portfolio <br> Building Challenge</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 hero-component-three">
								<div class="text-grid">
									<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills—even win interviews at top companies—all while creating a portfolio that blows employers away.</p>
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
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="600" class="reveal"><img src="<?php echo get_template_directory_uri() ?>/img/Uber_1.jpg"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300" class="reveal"><img src="<?php echo get_template_directory_uri() ?>/img/Cannabis_2.jpg"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0" class="reveal"><img src="<?php echo get_template_directory_uri() ?>/img/Nike_2.jpg"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-200" data-aos-delay="600" class="reveal"><img src="<?php echo get_template_directory_uri() ?>/img/Amazon_2.jpg"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-200" data-aos-delay="300" class="reveal"><img src="<?php echo get_template_directory_uri() ?>/img/Nike_1.jpg"/></li>
									<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-200" data-aos-delay="0" class="reveal"><img src="<?php echo get_template_directory_uri() ?>/img/Uber_2.jpg"/></li>
								</ul>
					</div>
				</div>
			</div>
		</div>




					<div class="row mission">

								<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
								<div class="col-10 col-sm-10 col-md-10 col-lg-10">

										<h2 data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400" class="display-2 reveal-text black"><span>
											Get inspired.
											<br>
											Flex your skills.
											<br>
											Build your portfolio.
											<br>
											Win amazing interviews.
										</span></h2>

								</div>
										<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

					</div>


					<div class="row d-none d-sm-block" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
						<div class="col-12">
							<video id="myvideo" playsinline autoplay loop muted poster="/img/poster.jpg"/>
								<source type="video/mp4" src="<?php echo get_template_directory_uri() ?>/img/MASTER_WEBSITE.mp4">
							</video>

						</div>
					</div>

					<div class="row d-block d-sm-none" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
						<div class="col-12">
							<video id="myvideo" playsinline autoplay loop muted poster="/img/poster.jpg"/>
								<source type="video/mp4" src="<?php echo get_template_directory_uri() ?>/img/MASTER_WEBSITE_1080x1080.mp4">
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
									<p class="black">Dream Projects is meant to prepare you for your next role. Winners will receive an interview with a top tier company.</p>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-4 d-block center-block text-center mx-auto">
									<ul class="logo-grid">
										<li class="d-flex align-items-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0"><img src="<?php echo get_template_directory_uri() ?>/img/squarespace-logo-horizontal-black-new.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100"><img src="<?php echo get_template_directory_uri() ?>/img/Google_2015_logo.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="200"><img src="<?php echo get_template_directory_uri() ?>/img/invision-logo-vector-1.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300"><img src="<?php echo get_template_directory_uri() ?>/img/Philips_logo_new.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="400"><img src="<?php echo get_template_directory_uri() ?>/img/Logo_NIKE.svg" /></li>
										<li data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="500"><img src="<?php echo get_template_directory_uri() ?>/img/Airbnb_Logo.svg" /></li>
									</ul>
							</div>
						</div>

					</div>
					</div>

					<div class="row about--section text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

						<div class="container">
							<div class="row">
								<div class="col-10 col-sm-8 d-block center-block text-center mx-auto pb-3">
									<h2 class="display-2 black">How It Works</h2>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-6 d-block center-block text-center mx-auto">
									<p class="black pb-3">Win or lose, just by participating in Dream Projects’ free monthly challenges, you’ll be honing your skills and creating an array of compelling designs that will become centerpieces of your portfolio and bring you closer to landing your next big job.</p>
									<a href="/rules"><button class="btn btn-tertiary">See Rules <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-10 d-block center-block mx-auto pt-5">
									<ul class="how-grid">

										<li class="pb-5 col-12 col-sm-6" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/storage.svg" /><h2 class="display-4 black">New challenge every month</h2>
										Each month we create a fictional brief based around the design needs of a major real world company or organization.</li>
										<li class="pb-5 col-12 col-sm-6" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/skills.svg" /><h2 class="display-4 black">Skill-building guides</h2>
										Along with our brief, we give you a guide to help you develop a design that you’ll be proud to show to potential employers.</li>
										<li class="pb-5 col-12 col-sm-6" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="200"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/judges.svg" /><h2 class="display-4 black">Expert judges</h2>
										Every submission is carefully reviewed by our panel of leading professionals from the design and UX fields.</li>
										<li class="pb-5 col-12 col-sm-6" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/interview.svg" /><h2 class="display-4 black">Career-changing prizes</h2>
										Winners can receive a one-on-one meeting with a world class company like Google, AirBnB, Nike, and many others.</li>
									</ul>
							</div>
						</div>

					</div>
					</div>

					<!-- <div class="row about--section text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

						<div class="container">
							<div class="row">
								<div class="col-10 col-sm-8 d-block center-block text-center mx-auto pb-3">
									<h2 class="display-2 black">Sponsor a Dream Project</h2>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-6 d-block center-block text-center mx-auto">
									<p class="black pb-3">Struggling to find the right product design talent? Dream Projects' allows you to find great talent by sponsoring hypothetical design briefs to test designers skills. Your customized brief will be given to our community of product designers who will compete for a chance to interview at your company. Our industry expert panel will thoroughly vet candidates, share a curated list and allow you to choose who to interview.</p>
									<a href="/sponsors"><button class="btn btn-tertiary">See Pricing <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-10 d-block center-block mx-auto pt-5">
									<ul class="how-grid">

										<li class="pb-5 col-12 col-sm-6" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/specialized.svg" /><h2 class="display-4 black">Specialized Talent</h2>
										You will get access to a highly specialized group of talent to help you refine your search and be more targeted.</li>
										<li class="pb-5 col-12 col-sm-6" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/curated-list.svg" /><h2 class="display-4 black">Hand Curated Applicants</h2>
										We will do most of the leg work helping curate your applicants and share them via email.</li>
										<li class="pb-5 col-12 col-sm-6" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="200"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/vetted.svg" /><h2 class="display-4 black">Vetted Candidates</h2>
										Each and every submission is vetted by our industry expert panel of judges ensuring high quality candidates.</li>
										<li class="pb-5 col-12 col-sm-6" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/storage.svg" /><h2 class="display-4 black">Bespoke Project Briefs</h2>
										You will have the opportunity to customize a Dream Project to suit your specific needs.</li>
									</ul>
							</div>
						</div>

					</div>
					</div> -->

			<div id="projects" class="projects--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
				<div class="row">
				<div class="col-1"></div>
				<div class="col-10">


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
									<h5 class="section-title display-5 black">Sponsored by <img class="sponsor-image p-2" src="<?php the_field('sponsor_image'); ?>" /></h5>
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
