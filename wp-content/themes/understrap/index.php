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

<!-- <script>
	//Modal toggle
	$(document).ready(function() {
		$('#myModal').modal('show');
	});
</script> -->

<!-- ******************* TAKEOVER MODAL ******************* -->

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-body p-4">
				<h3 class="display-2 black pb-5 pt-5">Thank You</h3>
				<p>Dream Projects has completed it's first Beta program. Thank you to all those who participated. We are in the process of launching our second Beta program in Febraury. Please feel free to take a look at our latest brief. Submissions will open the second week of February.
				</p>
			</div>
			<div class="container-fluid p-3">
				<div class="row center-block text-center mx-auto">

						<div class="col-6 nopadding">
							<button data-dismiss="modal" aria-label="Close" style="min-width:90%;" type="button" class="btn btn-quaternary mb-3">Explore</button>
						</div>
						<div class="col-6 nopadding">
							<a href="/sign-up"><button style="min-width:90%;" type="button" class="btn btn-tertiary white">Sign Up</button></a>
						</div>

				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- ******************* TAKEOVER MODAL END ******************* -->

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
									<a href="https://academyux.com"><img class="sponsor" src="<?php echo get_template_directory_uri() ?>/img/academy-logo-black.svg" /></a>
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
											<a href="https://academyux.com"><img class="sponsor" src="<?php echo get_template_directory_uri() ?>/img/academy-logo-black.svg" /></a>
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
									<p>Even the best designers struggle to create great portfolios. Dream Projects’ free monthly challenges give you the inspiration you need to build the portfolio you deserve. Reimagine digital experiences for the brands you’ve always dreamed of working on. Gain recognition, learn new skills, and get amazing career coaching, all while creating a portfolio that blows employers away.</p>
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
											Learn from experts.
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



					<div id="how-it-works" class="row about--section text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

						<div class="container">
							<div class="row">
								<div class="col-10 col-sm-8 d-block center-block text-center mx-auto pb-3">
									<h3 class="display-3 black">How It Works</h3>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-6 d-block center-block text-center mx-auto">
									<p class="black pb-3">With Dream Projects’ free challenges, you’ll be honing your skills and creating an array of compelling designs that will become centerpieces of your portfolio and bring you closer to landing your next big job.</p>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-10 d-block center-block mx-auto pt-5">
									<ul class="how-grid">

										<li class="pb-5 col-12 col-sm-3" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/storage.svg" /><h2 class="display-4 black">New challenge every month</h2>
										Each month we create a fictional brief based around the design needs of a major real world company or organization.</li>
										<li class="col-12 col-sm-1"></li>
										<li class="pb-5 col-12 col-sm-3" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/skills.svg" /><h2 class="display-4 black">Portfolio-building guides</h2>
										Along with our brief, we give you a guide to help you develop a design that you’ll be proud to show to potential employers.</li>
										<li class="col-12 col-sm-1"></li>
										<li class="pb-5 col-12 col-sm-3" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="200"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/judges.svg" /><h2 class="display-4 black">Expert coaches</h2>
										Sign up for a free consultation with one of our career coaches to get guidance, feedback or mentorship.</li>
									</ul>
							</div>
						</div>

					</div>
					</div>

					<div id="projects" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
						<!-- Swiper -->
						<div class="container-fluid projects--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">



							<div class="row">
								<div class="col-1 col-sm-1"></div>
								<div class="col-10 col-sm-10">

									<div class="container-fluid d-flex align-items-center">

										<div class="col-6 p-0 d-flex align-items-center">
											<h4 class="black display-4 m-0 text-sm-left">Projects</h4>
										</div>
										<div class="col-6 p-0 d-flex justify-content-end">
												<a href="/projects"><button class="btn-sm btn-tertiary">See All</button></a>
									</div>
									</div>
									<hr style="border-top:1px solid black; padding-bottom: 80px; padding-top: 40px;"></hr>

									<div class="swiper-one">
										 <ul class="swiper-wrapper">


								<?php
									$args = array(
									'post_type'=> 'brief',
									'posts_per_page'=> 5,
									'orderby' => 'publish_date',
									);
									$my_query = new WP_Query($args);
									$i = 1;
									if( $my_query->have_posts() ) :
									while ($my_query->have_posts()) : $my_query->the_post();
									?>


									<li class="swiper-slide text-left align-items-start">

										<div class="container-fluid d-flex flex-column justify-content-start align-items-stretch" style="height: 100%;" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100">
										<div class="row" style="flex-grow: 1;">
											<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6">
													<a href="<?php the_permalink(); ?>" class="blue-btn ca-btn">
														<span class="display-2 d-block pb-5"><?php the_title(); ?></span>
														<p class="display-4">See Project Brief</p>
														<svg xmlns="http://www.w3.org/2000/svg" class="arrow_btn" width="25.5" height="5" viewBox="0 0 25.5 4.62"><g data-name="Calque 2"><path d="M0 1.83v1h23.48l-1.06 1.02.77.77 2.31-2.31L23.19 0l-.77.77 1.06 1.06z" fill-rule="evenodd" data-name="Calque 1"></path></g></svg>
												</a>
											</div>
										</div>

										</div>

								</li>

									<?php
									$i++;
									endwhile; echo '</ul>';
									endif; wp_reset_query(); ?>

									</div>

									<!-- Add Arrows -->
									<div class="arrows">
									 <div class="d-none d-sm-block swiper-button-next"></div>
									 <div class="d-none d-sm-block swiper-button-prev"></div>
								 </div>
									<!-- Add Scrollbar -->
									<div class="swiper-scrollbar"></div>
								</div>

							</div>

					    </div>

						</div>
						<div class="col-1 col-sm-1"></div>

					  </div>

					</div>
						</div>




					</div>


					<div class="container-fluid career-coaching--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100">


						<div class="row">

							<div class="col-1"></div>
							<div class="col-10">
								<div class="row justify-content-center justify-content-sm-start">


										<div class="col-10 col-sm-6 d-flex pb-3 flex-column">
											<h2 class="display-2 white text-sm-left text-center pb-4">Hire a coach. <br>Find a mentor.<br>Realize dreams.</h2>
											<div class="container-fluid">
												<div class="row">
													<div class="col-12 col-sm-12 col-lg-6">
														<p class="white pb-3 text-sm-left text-center">Our trained coaches will help you navigate your career, build a best-in-class portfolio, prep you for an interview and match you with an amazing mentor who will help you stand out in your desired field.</p>
													</div>
												</div>
											</div>
											<div class="container-fluid d-sm-inline-flex d-flex flex-wrap align-items-center justify-content-center justify-content-sm-start">
												<a class="mr-0 mr-sm-5 pb-4 pb-md-0" href="/career-coaching"><button class="btn btn-tertiary" style="background:#F1542B">Free Consultation</button></a>
												<a class="link white display-6 nav" href="/career-coaching"><p>See Details <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></p></a>
											</div>
										</div>




										<div class="col-10 col-sm-6 d-flex pt-5 pt-sm-0 justify-content-center">
											<div class="justify-content-center align-items-start d-flex">
													<img style="max-width:50%; height:auto; align-items:flex-start" src="<?php echo get_template_directory_uri() ?>/img/interview-prep.png" />
											</div>
									</div>


							</div>
						</div>
						<div class="col-1"></div>
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


			<script>
			var swiper = new Swiper('.swiper-one', {
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
