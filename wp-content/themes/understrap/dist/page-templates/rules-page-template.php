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
											<h1 class="display-1">Rules</h1>
										</div>
									</div>

									<div class="row">

										<div class="col-11 col-sm-11 col-md-11 col-lg-11 mt-5">

												<div class="text-grid">
													<p>Here you can find the rules and submission criteria for how we select a winning project. New design briefs will be released at the beginning of each month. Submit your designs by the 3rd Friday of the month for your chance to win an interview at an incredible company. Winners and Runners Up will be announced on social media by the end of the month.</p>
												</div>

									</div>
									<div class="col-sm-1 col-md-1 hero-component-two mt-5">
										<div class="scroll-text">
											<span class="display-5 scroll-text-alignment">Scroll</span>
										</div>
									</div>

							</div>

							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>
						</div>


						</div>

						<div class="row text-center judges--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="container">
								<div class="row">
									<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
									<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

									<div class="col-12 col-sm-6 d-block center-block mx-auto">
										<h2 class="display-2 black">Judges</h2>
									</div>
									<div class="col-12 col-lg-6 d-block center-block text-center mx-auto mt-5">
										<p class="black">Dream Projects judges are hand selected from our growing community of Designers, Developers, Researchers and Product Managers. We thoroughly vet each judge and their contribution to the field of Product Design. If you are interested in becoming a judge please contact us <a class="black link" href="/contact-us"><span class="job-post">here</span></a>.</p>
									</div>
									<div class="col-12 col-lg-6 center-block text-center mx-auto judges-grid d-flex mt-5">
										<ul class="row">
											<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
												<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/timmcauliffe.jpeg" /></div>
												<p class="pb-0 mb-0">Timothy McAullife</p>
												<div><small><strong>Google</strong></small></div>
												<div><small>Creative Lead</small></div>
											</li>
											<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
												<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/ErinLeForce_Headshot.jpg" /></div>
												<p class="pb-0 mb-0">Erin LeForce</p>
												<div><small><strong>Work & Co.</strong></small></div>
												<div><small>Design Lead</small></div>
											</li>
											<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/adamperlis.jpeg" /></div>
											<p class="pb-0 mb-0">Adam Perlis</p>
											<div><small><strong>Academy</strong></small></div>
											<div><small>CEO</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/davetupper.jpeg" /></div>
											<p class="pb-0 mb-0">Dave Tupper</p>
											<div><small><strong>Airbnb</strong></small></div>
											<div><small>Design Manager</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/katwong.jpeg" /></div>
											<p class="pb-0 mb-0">Katherine Wong</p>
											<div><small><strong>Fantasy Interactive</strong></small></div>
											<div><small>Sr. UX Designer</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/sergiovilatimo.jpeg" /></div>
											<p class="pb-0 mb-0">Sergio Vilatimo</p>
											<div><small><strong>AKQA</strong></small></div>
											<div><small>Fmr. CD</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/aliya.jpeg" /></div>
											<p class="pb-0 mb-0">Aliya Maria Baptista</p>
											<div><small><strong>Interaction Designer</strong></small></div>
											<div><small>Google</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/joshwilliams.jpeg" /></div>
											<p class="pb-0 mb-0">Joshua Williams</p>
											<div><small><strong>R/GA</strong></small></div>
											<div><small>ACD</small></div>
										</li>



										</ul>

									</div>

									<div class="col-12 col-lg-6 center-block text-center mx-auto judges-grid collapse" id="collapseExample">
										<ul class="row">
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/stuart.jpg" /></div>
											<p class="pb-0 mb-0">Stuart Thursby</p>
											<div><small><strong>Stack Creative</strong></small></div>
											<div><small>Founder</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/lucascoelho.jpeg" /></div>
											<p class="pb-0 mb-0">Lucas Coelho</p>
											<div><small><strong>Roam</strong></small></div>
											<div><small>Head of Design</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/sadhvu.jpeg" /></div>
											<p class="pb-0 mb-0">Sadhvu Sharma</p>
											<div><small><strong>BCG Digital Ventures</strong></small></div>
											<div><small>Experience Designer</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/ryandonahue.jpeg" /></div>
											<p class="pb-0 mb-0">Ryan Donahue</p>
											<div><small><strong>Zendesk</strong></small></div>
											<div><small>VP Design</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/jamesmoriartyjr.jpeg" /></div>
											<p class="pb-0 mb-0">James Moriarty</p>
											<div><small><strong>Draft Kings</strong></small></div>
											<div><small>Dir. UX</small></div>
										</li>
										<li class="p-2 center-block text-center mx-auto col-6 col-sm-3 mb-2">
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/axeljohnston.jpeg" /></div>
											<p class="pb-0 mb-0">Axel Johnston</p>
											<div><small><strong>Air France</strong></small></div>
											<div><small>Head of Design</small></div>
										</li>


										</ul>

									</div>



									<div class="col-12 col-lg-6 center-block text-center mx-auto judges-grid mt-2">
										<a class="btn btn-primary text-center mx-auto" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
											See More
										</a>
									</div>
								</div>


								<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							</div>


						</div>


						</div>

						<div class="row text-center criteria--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="container">
								<div class="row">
									<div class="col-10 col-sm-8 d-block center-block text-center mx-auto">
										<h2 class="display-2 black">Criteria</h2>
									</div>
								</div>
							</div>
							<div class="container pb-3">
								<div class="row">
									<div class="col-10 col-lg-4 d-block center-block text-center mx-auto mt-5">
										<p class="black">Dream Projects judges will review each submission and determine a score on a scale of 1 to 3 based on the following criteria:</p>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="row">

									<div class="col-12 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-3 p-5 card-rules rounded-0 text-center">

												<h3 class="display-1">25<span class="display-4">%</span></h3><span class="pb-5"><h2 class="display-4 black">Usability</h2></span>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-3 p-5 card-rules rounded-0 text-center">
												<h3 class="display-1">25<span class="display-4">%</span></h3><span class="pb-5"><h2 class="display-4 black">Strategy / Process</h2></span>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-3 p-5 card-rules rounded-0 text-center">
												<h3 class="display-1">40<span class="display-4">%</span></h3><span class="pb-5"><h2 class="display-4 black">Visual Design</h2></span>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-3 p-5 card-rules rounded-0 text-center">
												<h3 class="display-1">10<span class="display-4">%</span></h3><span class="pb-5"><h2 class="display-4 black">Originality/Creativity</h2></span>
											</div>


									</div>
									</div>


								</div>

						</div>
						</div>


						<div class="row text-center prizes--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="container">
								<div class="row">
									<div class="col-10 col-sm-8 d-block center-block text-center mx-auto">
										<h2 class="display-2 black">Prizes</h2>
									</div>
								</div>
							</div>
							<div class="container pb-3">
								<div class="row">
									<div class="col-10 col-lg-4 d-block center-block text-center mx-auto mt-5">
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
													<p>As the Winner, you will earn recognition in the community for being among the top level talent in the industry. You will be guaranteed an interview with the listed partnering company. Only one winner will be named for each monthly Dream Project.</p>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-1 mb-1 mb-sm-5 p-5 text-center">
													<span class="pb-5"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/runner-up.svg" /><h2 class="display-4 black">Runner Up</h2></span>
													<p>As a Runner Up, you will earn recognition in the design community for being a rising star in the industry. Your work will be shared with the listed partnering company for consideration for an interview. Only five people will be announced as Runners Up for each monthly Dream Project.</p>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-4 mt-1 mb-1 mb-sm-5 p-5 text-center">
													<span class="pb-5"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/nominee.svg" /><h2 class="display-4 black">Nominee</h2></span>
													<p>As a Nominee, you have taken the first step to building a better body of work and have increased your chances of getting hired exponentially. While Nominees do not receive a guaranteed prize, from time to time the Dream Projects team may proactively share their work with partnering companies.</p>
											</div>

											<div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5 d-flex mx-auto justify-content-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

												<a href="/#projects"><button class="btn btn-tertiary">See Projects <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a>


											</div>


									</div>
									</div>

									<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
								</div>

						</div>
						</div>








				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

<?php get_footer(); ?>
