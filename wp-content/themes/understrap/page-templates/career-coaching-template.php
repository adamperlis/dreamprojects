<?php
/**
 * Template Name: Career Coaching Template
 *
 * Template for displaying a Career Coaching Template.
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
          <div class="coaching"	 style="background:black">
					<div class="hero--coaching">

						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

									<div class="row">

										<div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-sm-0 pt-0 pb-0 pb-sm-0">
											<h1 class="display-1 white">Make your dream. <br>Your reality.</h1>
										</div>
									</div>

									<div class="row">

										<div class="col-11 col-sm-11 col-md-11 col-lg-11 mt-5 mt-sm-5">

												<div class="text-grid">
													<p class="white">When it comes to landing your Dream Job, the right coach or mentor can make all the difference. You want a professional you can trust, feedback you can use, and expert advice from someone who's been there. <br><br> At Dream Projects, we take the time to understand your unique needs and goals, and connect you with someone who can help you develop the skills to achieve the career you’ve been dreaming of.</p>
												</div>

									</div>
								</div>
              <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-0 pt-sm-5 pb-5 pb-sm-0 d-flex d-sm-inline-flex d-block flex-wrap align-items-center">
                    <a class="mr-5 pt-3" href="#pricing"><button class="btn btn-tertiary" style="background:#F1542B">Free Consultation</button></a>
                    <a class="link white display-6 nav pt-4" href="#pricing"><p>See Pricing <img src="<?php echo get_template_directory_uri() ?>/img/arrow-down.svg"/></p></a>
                </div>

              </div>

							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>
						</div>


						</div>

						<div class="mission--coaching row d-flex align-items-center" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="d-flex col-10">
									<h2 class="display-2 white">Our trained coaches will help you navigate your career, build a best -in-class portfolio, prep you for an interview and match you with an amazing mentor.</h2>
							</div>
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>

						<div class="clients--coaching row d-flex align-items-center" style="padding-top:200px; padding-bottom:200px" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="d-flex col-10 mt-5 mb-5">
								<div class="container">
								<div class="row">
									<div class="col-1 col-sm-1 col-md-2 col-lg-2"></div>
									<div class="col-12 col-sm-8">
										<div class="display-4 white text-center" style="font-size:1.2em">Where our coaches and mentors work, and where our cleints have gone on to work</div>
									</div>
									<div class="col-1 col-sm-1 col-md-2 col-lg-2"></div>
								</div>

									<div class="row pt-5">
										<div class="col-12 d-block center-block text-center mx-auto justify-content-center">
											<ul class="d-inline-flex align-items-start justify-content-center flex-wrap justify-content-around">
												<li class="mr-0 mr-sm-5 mb-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0"><img style="height:30px; filter: invert(1) saturate(0);" src="<?php echo get_template_directory_uri() ?>/img/squarespace-logo-horizontal-black-new.svg" /></li>
												<li class="mr-0 mr-sm-5 mb-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100"><img style="height:30px; filter: invert(1) saturate(0);" src="<?php echo get_template_directory_uri() ?>/img/Google_2015_logo.svg" /></li>
												<li class="mr-0 mr-sm-5 mb-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="200"><img style="height:30px; filter: invert(1) saturate(0);" src="<?php echo get_template_directory_uri() ?>/img/invision-logo-vector-1.svg" /></li>
												<li class="mr-0 mr-sm-5 mb-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300"><img style="height:30px; filter: invert(1) saturate(0);" src="<?php echo get_template_directory_uri() ?>/img/Philips_logo_new.svg" /></li>
												<li class="mr-0 mr-sm-5 mb-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="400"><img style="height:30px; filter: invert(1) saturate(0);" src="<?php echo get_template_directory_uri() ?>/img/Logo_NIKE.svg" /></li>
												<li class="mr-0 mr-sm-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="500"><img style="height:30px; filter: invert(1) saturate(0);" src="<?php echo get_template_directory_uri() ?>/img/Airbnb_Logo.svg" /></li>
											</ul>
										</div>
										</div>

								</div>
						</div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>

						<div class="row white services--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10">
							<div class="container mb-5">
								<div class="row">

									<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

									<div class="col-12 col-sm-6 d-block center-block mx-auto">
										<h3 class="display-3 white text-center">Services</h3>
									</div>
									<div class="col-12 col-lg-6 d-block center-block text-center mx-auto mt-5">
										<p class="white text-center ">These are some of the services we can offer to help shape you into a rockstar candidate.</p>
									</div>


								</div>
							</div>
							</div>

							<div class="container services--features" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
									<div class="row flex-wrap-reverse">

									<div class="col-12 col-lg-6 text-center judges-grid d-flex">
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
											<div class="placeholder-profile center-block text-center mx-auto"><img src="<?php echo get_template_directory_uri() ?>/img/kelly.png" /></div>
											<p class="pb-0 mb-0">Kelly Milner</p>
											<div><small><strong>BASIC</strong></small></div>
											<div><small>Head of Recruiting</small></div>
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
									<div class="col-12 col-sm-2 col-md-2 col-lg-2"></div>
									<div class="col-12 col-lg-4 d-flex mb-5 flex-column justify-content-center text-center text-md-left">
										<h4 class="display-4 d-block">Feedback from the Pros</h4>
										<p class="d-block">We will provide direct unfiltered feedback to shape you into a stand out candidate.</p>
									</div>
							</div>
						</div>


					<div class="container services--features" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="row">
								<div class="col-12 col-lg-4 d-flex mb-5 flex-column justify-content-center text-center text-md-left">
									<h4 class="display-4 d-block">Portfolio Reviews</h4>
									<p class="d-block">We will go into the nitty gritty details of your portfolio helping you shape your case studies, provide design guidance, and advise on what platforms to build on.</p>
								</div>

							<div class="col-12 col-sm-2 col-md-2 col-lg-2"></div>
							<div class="col-12 col-lg-6 text-center d-flex align-items-start">
									<img src="<?php echo get_template_directory_uri() ?>/img/portfolio-reviews.png" />
							</div>
					</div>
					</div>

					<div class="container services--features" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="row flex-wrap-reverse">

							<div class="col-12 col-lg-6 text-center justify-content-center align-items-start d-flex">
									<img style="max-width:50%; height:auto; align-items:flex-start" src="<?php echo get_template_directory_uri() ?>/img/interview-prep.png" />
							</div>
							<div class="col-12 col-sm-2 col-md-2 col-lg-2"></div>
							<div class="col-12 col-lg-4 d-flex mb-5 flex-column justify-content-center text-center text-md-left">
								<h4 class="display-4 d-block">Interview Prep</h4>
								<p class="d-block">We will prepare you for your next interview. Our expert team will utilize our collective industry knowledge to generate questions and help you develop answers so that you can expect the unexpected.</p>
							</div>
						</div>
					</div>
					<div class="container services--features" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="row">
								<div class="col-12 col-lg-4 d-flex mb-5 flex-column justify-content-center text-center text-md-left">
									<h4 class="display-4 d-block">Career Advice</h4>
									<p class="d-block">Learn how to write a great LinkedIn introduction or cover letter, the proper etiquette for introducing yourself in any scenario, techniques to boost your personal brand, how to make the most of networking opportunities, how to build an amazing freelance career or how to negotiate the salary you deserve.</p>
								</div>

							<div class="col-12 col-sm-2 col-md-2 col-lg-2"></div>
							<div class="col-12 col-lg-6 text-center d-flex align-items-start">
									<img src="<?php echo get_template_directory_uri() ?>/img/career-advice.svg" />
							</div>
					</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
					</div>
					</div>

						<div class="whothisisfor--coaching row" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

						<div class="container mb-5">
								<div class="row">
									<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
									<div class="col-10 col-sm-10 col-md-10 col-lg-10">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

									<div class="col-12 col-sm-6 d-block center-block mx-auto">
										<h3 class="display-3 white text-center">Who this is for</h3>
									</div>
									<div class="col-12 col-lg-6 d-block center-block text-center mx-auto mt-5">
										<p class="white text-center ">Our coaches and mentors are trained to help jobseekers at every level.</p>
									</div>


								</div>
							</div>
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							</div>
							</div>

						<div class="container">
							<div class="row">
								<div class="col-10 col-lg-10 d-block center-block mx-auto pt-5">
									<ul class="how-grid">

										<li class="pb-5 col-12 col-sm-6 white" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/career-switcher.svg" /><h2 class="display-4 white">Career Switchers</h2>
										Are you debating between what programs to choose from? What skills to learn? Where your passions lie or what career path you should take? We can help with all of that.</li>
										<li class="pb-5 col-12 col-sm-6 white" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/recent-grad.svg" /><h2 class="display-4 white">Recent Graduates</h2>
										Did you just graduate from a program and are now struggling to find your first job? We can help you standout from a crowded marketplace.</li>
										<li class="pb-5 col-12 col-sm-6 white" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="200"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/experienced-practicioner.svg" /><h2 class="display-4 white">Experienced Practicioners</h2>
										Have you been in the field for a while and are now thinking about your next move or how to get a promotion? Our team can help you learn how to position yourself for your next big move.</li>
										<li class="pb-5 col-12 col-sm-6 white" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300"><img class="pb-3" src="<?php echo get_template_directory_uri() ?>/img/managers.svg" /><h2 class="display-4 white">Managers</h2>
										Are you managing a team and ready for your next challenge at the director level? We can help you prep for your interviews, advise on how to build your personal brand and provide insider tips on specifc roles.</li>
									</ul>
							</div>
						</div>
					</div>
					</div>

						<div class="howitworks--coaching row" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="container mb-5">
								<div class="row">
									<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
									<div class="col-10 col-sm-10 col-md-10 col-lg-10">
									<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

									<div class="col-12 col-sm-6 d-block center-block mx-auto">
										<h3 class="display-3 white text-center">How it works</h3>
									</div>
									<div class="col-12 col-lg-6 d-block center-block text-center mx-auto mt-5">
										<p class="white text-center ">Our trained staff will work with you to create a custom program to get you help get you to your next career milestone.</p>
									</div>


								</div>
							</div>
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							</div>
							</div>

								<div class="col-12 col-sm-12 col-md-12 col-lg-12">
									<div class="swiper-container swiper-one">
										<div class="swiper-wrapper d-flex justify-content-start justify-content-lg-end">
											<div class="swiper-slide align-items-start p-4 p-md-5">
												<div class="container-fluid" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100">
												<div class="row d-flex">
													<div class="col-8 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<img class="mb-4 d-block" style="width:64px" src="<?php echo get_template_directory_uri() ?>/img/assesment.svg"/>
														<span class="display-3 d-block" style="font-size:24px">Assessment & Planning</p>
													</div>
												</div>
												<div class="row">
													<div class="col-12 d-flex flex-column">
														<p>Our coaches will assess your career goals, passions, skillset, and experience. Then, we'll work together to formulate a clear, customized plan of action designed to get you closer to your dream job.</p>
														<span class="display-5 text-muted d-flex align-items-end">20 Min Session</span>
													</div>
												</div>

											</div>
											</div>

												<div class="swiper-slide align-items-start p-4 p-md-5">
													<div class="container-fluid" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="200">
													<div class="row d-flex">
														<div class="col-8 col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<img class="mb-4 d-block" style="width:64px" src="<?php echo get_template_directory_uri() ?>/img/focus.svg"/>
															<span class="display-3 d-block" style="font-size:24px">Focus & Execution</p>
														</div>
													</div>
													<div class="row">
														<div class="col-12 d-flex flex-column">
															<p>We help you identify and address the biggest roadblocks standing in the way of the career you want. From perfecting your portfolio to writing a killer LinkedIn bio, to learning how to approach hiring managers, our coaches will give you the uniquely tailored attention, feedback, and support you need to stand out in a crowded field.</p>
															<span class="display-5 text-muted d-flex align-items-end">50 Min Session(s)</span>
														</div>
													</div>

												</div>

											</div>

												<div class="swiper-slide align-items-start p-4 p-md-5">
													<div class="container-fluid" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="500">
													<div class="row d-flex">
														<div class="col-8 col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<img class="mb-4 d-block" style="width:64px" src="<?php echo get_template_directory_uri() ?>/img/mentor-matching.svg"/>
															<span class="display-3 d-block" style="font-size:24px">Mentor Matching</p>
														</div>
													</div>
													<div class="row">
														<div class="col-12 d-flex flex-column">
															<p>Our coaches will match you with a mentor with specific expertise that aligns with your skillset and style. Our mentors come from the top companies in the world and will advise you on the specifics of what to expect in an interview and how to tell a great story.</p>
														</div>
													</div>
												</div>

											</div>

											<div class="swiper-slide align-items-start p-4 p-md-5">
												<div class="container-fluid" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="300">
												<div class="row d-flex">
													<div class="col-8 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<img class="mb-4 d-block" style="width:64px" src="<?php echo get_template_directory_uri() ?>/img/interview-prep.svg"/>
														<span class="display-3 d-block" style="font-size:24px">Interview Prep</p>
													</div>
												</div>
												<div class="row">
													<div class="col-12 d-flex flex-column">
														<p>Coaches will help you prep for an interview by grilling with you questions. Our expert coaches will work with you to formulate strong responses and how to expect the unexepcted. In some cases we will provide insider tips on what a particular company’s interview process is like.</p>
														<span class="display-5 text-muted d-flex align-items-end">50 Min Session(s)</span>
													</div>
												</div>

											</div>
										</div>


											<div class="swiper-slide align-items-start p-4 p-md-5">
												<div class="container-fluid" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="500">
												<div class="row d-flex">
													<div class="col-8 col-sm-12 col-md-12 col-lg-12 col-xl-12">
														<img class="mb-4 d-block" style="width:64px" src="<?php echo get_template_directory_uri() ?>/img/finance-person.svg"/>
														<span class="display-3 d-block" style="font-size:24px">Salary Negotiations</p>
													</div>
												</div>
												<div class="row">
													<div class="col-12 d-flex flex-column">
														<p>Our expert coaches have negotiated salaries from the other side of the table at some of the biggest companies in the world. They will teach you how to navigate complex negotations and get what you deserve.</p>
														<span class="display-5 text-muted d-flex align-items-end">50 Min Session</span>
													</div>
												</div>
											</div>

										</div>
										</div>
									</div>
									<div class="swiper-pagination"></div>

								</div>

								<div class="container pt-5">
									<div class="row justify-content-center flex-wrap pt-5 ">
										<div class="col-1 col-sm-12 col-md-12 col-lg-12"></div>
										<div class="col-10 col-sm-12 d-flex justify-content-center flex-wrap">


												<div class="pb-5 col-12 col-sm-4 white" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0">
												<h2 class="display-4 white">Coach</h2>
												Coaches follow a structured and formal approach to help you achieve your career goals. They will be your guide throughout the process and help you understand your passions, identify your strengths and weaknesses, give you ideas of different careers paths to follow and provide you with a clear plan of actionable steps to improve your chances of getting a job. Your coach will help match you with a mentor who fits perfectly with your career goals and learning style.</div>
												<div class="pb-5 col-12 col-sm-2 white justify-content-center align-items-center d-flex" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="50"><span class="display-4">VS</span></div>
												<div class="pb-5 col-12 col-sm-4 white" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="100">
												<h2 class="display-4 white">Mentor</h2>
												Mentors are experienced industry professionals who are focused on providing you with specific, individually-tailored guidance, motivation, and emotional support. They will provide clear and direct feedback with actionable next steps based on their own personal, real-life experiences in your desired field.  </div>

									</div>
									<div class="col-1 col-sm-12 col-md-12 col-lg-12"></div>
								</div>
							</div>

						</div>

						<div class="row white success-stories--coaching" style="padding-bottom:10rem; padding-top:10rem" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10">
							<div class="container-fluid mb-5">
								<div class="row">

									<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

									<div class="col-12 col-sm-12 d-block center-block justify-content-center d-flex mx-auto">
											<img src="<?php echo get_template_directory_uri() ?>/img/success-stories.svg" />
									</div>

									<div class="swiper-container swiper-two pt-5">
										<div class="swiper-wrapper d-flex">
											<div class="swiper-slide mt-4">
												<div class="container-fluid">
												<div class="row d-flex">
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<h2 class="display-3 white d-block w-100 text-left"  style="margin-left:.75em; padding-right:.75em;"><em style="margin-left:-.75em; position:absolute;">“</em>Coming out of a UX Bootcamp, I knew there would be gaps in my skill and career development. The Dream Projects Team has helped me fill in those gaps and improve as a designer, recognizing areas of weakness, and providing actionable steps I could take to turn them into strengths.”</h2>
													</div>
												</div>

											</div>
											</div>
											<div class="swiper-slide p-4 p-md-5">
												<div class="container-fluid">
												<div class="row d-flex">
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<h2 class="display-3 white d-block w-100 text-left" style="margin-left:.75em; padding-right:.75em;"><em style="margin-left:-.75em; position:absolute;">“</em>The Dream Projects Team gave me a wonderful guide on how to not only solve a design problem but also explore my creativity in building something I hoped people would enjoy. They challenged me as a designer and as someone pursuing a career transition into UX/UI design and provided me with great, advice, guidance and tasks to hone my skills and represent myself in the most attractive manner possible.”</h2>
													</div>
												</div>

											</div>
											</div>
											<div class="swiper-slide p-4 p-md-5">
												<div class="container-fluid">
												<div class="row d-flex">
													<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<h2 class="display-3 white d-block w-100 text-left" style="margin-left:.75em; padding-right:.75em;"><em style="margin-left:-.75em; position:absolute;">“</em>The Dream Projects Team provided me with direction in my career and how best to pair skills from my previous career with my new UX skillset. Together, we have refined my portfolio and my job search, allowing me to feel more confident moving forward. They have been available for me whenever I needed them and are always thorough and thoughtful with their feedback.”</h2>
													</div>
												</div>

											</div>
											</div>
										</div>
									</div>
									<div class="swiper-pagination-two"></div>
								</div>
								</div>


										</div>
									</div>




							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							</div>



					<div class="row white pricing--section" id="pricing" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
						<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						<div class="col-10 col-sm-10 col-md-10 col-lg-10">
						<div class="container mb-5">
							<div class="row">

								<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

								<div class="col-12 col-sm-6 d-block center-block mx-auto">
									<h3 class="display-3 white text-center">Pricing</h3>
								</div>
								<div class="col-12 col-lg-6 d-block center-block text-center mx-auto mt-5">
									<p class="white text-center ">Coming Soon. We are currently testing this in Beta. If you are interested in our service please:</p>
									<a class="white" href="/contact-us"><p class="display-5 job-post">Contact Us</p></a>
								</div>


							</div>
						</div>
						</div>

						<div class="container d-none d-md-block mx-auto" style="padding-bottom:200px; width:100%; opacity:.45;">
							<div class="card-deck text-center mx-auto">
				        <div class="card box-shadow mx-auto" style="border-radius: 4px 0px 0px 4px;">
				          <div>
				            <h4 class="my-0 display-4">Consultation</h4>
										<div class="card-title display-3 ">Free</div>
				          </div>

				          <div class="card-body justify-content-center">

				            <ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
				              <li>1 session (20 Min)</li>
				              <li>Career Stage Assessment</li>
											<li>Career Advice</li>
				              <li>Customized Plan of Action</li>
				            </ul>
				          </div>

									<div class="card-button"><a target="_blank" class="btn btn-tertiary disabled" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
									</a>
								</div>
								</div>

				        <div class="card box-shadow" style="border:1px solid white; margin-top:-25px; margin-bottom:-25px;">
				          <div>
										<!-- <div class="badge badge-light mb-4">Recommended</div> -->
				            <h4 class="my-0 display-4">Session</h4>
										<div class="card-title display-3"><span class="display-4" style="padding-right:.2em; vertical-align: middle;">$</span>150</div>
				          </div>

				          <div class="card-body">
				            <ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
				              <li>1 session (50 Min)</li>
											<span class="text-muted display-5" style="padding:10px;">Choose:</span>
											<li class="circle">Career Advice</li>
				              <li class="circle">High-Level Portfolio Review</li>
											<li class="circle">Single Project Porfolio Review</li>
											<li class="circle">Interview Prep</li>
				            </ul>

				          </div>
									<div class="card-button"><a target="_blank" class="btn btn-tertiary disabled" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
									</a>
								</div>
							</div>
						</div>

						</div>


						<div class="container d-block d-md-none mx-auto" style="padding-bottom:200px; width:100%; opacity:.45;">
							<div class="card-deck text-center mx-auto">
								<div class="card box-shadow mb-4" style="border-radius: 4px;">
									<div>
										<h4 class="my-0 display-4">Consultation</h4>
										<div class="card-title display-3 ">Free</div>
									</div>

									<div class="card-body justify-content-center">

										<ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
											<li>1 session (20 Min)</li>
											<li>Career Stage Assessment</li>
											<li>Career Advice</li>
											<li>Customized Plan of Action</li>
										</ul>
									</div>
									<div class="card-button"><a target="_blank" class="btn btn-tertiary disabled" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
 								 </a>
 								 </div>
								 </div>

								<div class="card box-shadow mb-4 mt-2" style="border:1px solid white; border-radius:4px; margin-top:-25px; margin-bottom:-25px;">
									<div>
										<!-- <div class="badge badge-light mb-4">Recommended</div> -->
										<h4 class="my-0 display-4">Session</h4>
										<div class="card-title display-3"><span class="display-4" style="padding-right:.2em; vertical-align: middle;">$</span>150</div>
									</div>

									<div class="card-body">
										<ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
											<li>1 session (50 Min)</li>
											<span class="text-muted display-5" style="padding:10px;">Choose:</span>
											<li class="circle">Career Advice</li>
											<li class="circle">High Level Portfolio Review</li>
											<li class="circle">Single Project Porfolio Review</li>
											<li class="circle">Interview Prep</li>
										</ul>

									</div>
									<div class="card-button"><a target="_blank" class="btn btn-tertiary disabled" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
									</a>
									</div>
									</div>

						</div>
						</div>


<!-- Old pricing template -->

						<!-- <div class="container d-none d-md-block" style="padding-bottom:200px">
							<div class="card-deck text-center">
				        <div class="card box-shadow" style="border-radius: 4px 0px 0px 4px;">
				          <div>
				            <h4 class="my-0 display-4">Consultation</h4>
										<div class="card-title display-3 ">Free</div>
				          </div>

				          <div class="card-body justify-content-center">

				            <ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
				              <li>1 session (20 Min)</li>
				              <li>Career Stage Assessment</li>
				              <li>Career Advice</li>
				            </ul>
				          </div>

									<div class="card-button"><a target="_blank" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
									</a>
								</div>
								</div>

				        <div class="card box-shadow" style="border-radius: 0px 0px 0px 0px;">
				          <div>
				            <h4 class="my-0 display-4">Starter</h4>
										<div class="card-title display-3"><span class="display-4" style="padding-right:.2em; vertical-align: middle;">$</span>150</div>
				          </div>

				          <div class="card-body">
				            <ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
				              <li>1 session (50 Min)</li>
											<span class="text-muted display-5" style="padding:10px;">Choose:</span>
											<li class="circle">Career Advice</li>
				              <li class="circle">High Level Portfolio Review</li>
											<li class="circle">Single Project Porfolio Review</li>
											<li class="circle">Interview Prep</li>
				            </ul>

				          </div>
									<div class="card-button"><a target="_blank" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
									</a>
								</div>
								</div>

								<div class="card box-shadow align-items-center" style="border:1px solid white; margin-top:-25px; margin-bottom:-25px;">
								 <div>
									 <div class="badge badge-light mb-4">Recommended</div>
									 <h4 class="my-0 display-4">Pro</h4>
									 <div class="card-title display-3"><span class="display-4" style="padding-right:.2em; vertical-align: middle;">$</span>405</div>
									 <h5 class="my-0 text-muted display-5">10% Discount</h5>
								 </div>

								 <div class="card-body">


									 <ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
										 <li>3 sessions (50 min each)</li>
										 <li>Career Advice</li>
										 <li>High Level Portfolio Review</li>
										 <li>Interview Prep</li>
									 </ul>

								 </div>
								 <div class="card-button" style="margin-bottom: 44px;"><a target="_blank" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
								 </a>
								 </div>
								 </div>

								<div class="card box-shadow" style="border-radius: 0px 4px 4px 0px;">
								 <div>
									 <h4 class="my-0 display-4">Expert</h4>
									 <div class="card-title display-3"><span class="display-4" style="padding-right:.2em; vertical-align: middle;">$</span>780</div>
									 <h5 class="my-0 text-muted display-5">20% Discount</h5>
								 </div>

								 <div class="card-body">

									 <ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
										 <li>6 sessions (50 min each)</li>
										 <li>Career Advice</li>
										 <li>Detailed Portfolio Review</li>
										 <li>Interview Prep</li>
									 </ul>

								 </div>
								 <div class="card-button"><a target="_blank" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
								 </a>
								 </div>
				      </div>
						</div>
						</div>

						<div class="container d-block d-md-none" style="padding-bottom:200px">
							<div class="card-deck text-center">
								<div class="card box-shadow mb-4" style="border-radius: 4px;">
									<div>
										<h4 class="my-0 display-4">Consultation</h4>
										<div class="card-title display-3 ">Free</div>
									</div>

									<div class="card-body justify-content-center">

										<ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
											<li>1 session (20 Min)</li>
											<li>Career Stage Assessment</li>
											<li>Career Advice</li>
										</ul>
									</div>
									<div class="card-button"><a target="_blank" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
 								 </a>
 								 </div>
								 </div>

								<div class="card box-shadow mb-4" style="border-radius: 4px;">
									<div>
										<h4 class="my-0 display-4">Starter</h4>
										<div class="card-title display-3"><span class="display-4" style="padding-right:.2em; vertical-align: middle;">$</span>150</div>
									</div>

									<div class="card-body">
										<ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
											<li>1 session (50 Min)</li>
											<span class="text-muted display-5" style="padding:10px;">Choose:</span>
											<li class="circle">Career Advice</li>
											<li class="circle">High Level Portfolio Review</li>
											<li class="circle">Single Project Porfolio Review</li>
											<li class="circle">Interview Prep</li>
										</ul>

									</div>
									<div class="card-button"><a target="_blank" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
									</a>
									</div>
									</div>

								<div class="card box-shadow mb-4 mt-2 align-items-center" style="border:1px solid white; border-radius:4px; margin-top:-25px; margin-bottom:-25px;">
								 <div>
									 <div class="badge badge-light mb-4">Recommended</div>
									 <h4 class="my-0 display-4">Pro</h4>
									 <div class="card-title display-3"><span class="display-4" style="padding-right:.2em; vertical-align: middle;">$</span>405</div>
									 <h5 class="my-0 text-muted display-5">10% Discount</h5>
								 </div>

								 <div class="card-body">


									 <ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
										 <li>3 sessions (50 min each)</li>
										 <li>Career Advice</li>
										 <li>High Level Portfolio Review</li>
										 <li>Interview Prep</li>
									 </ul>

								 </div>
								 <div class="card-button"><a target="_blank" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
								 </a>
								 </div>
								 </div>

								<div class="card box-shadow mb-4" style="border-radius: 0px 4px 4px 0px;">
								 <div>
									 <h4 class="my-0 display-4">Expert</h4>
									 <div class="card-title display-3"><span class="display-4" style="padding-right:.2em; border-radius:4px; vertical-align: middle;">$</span>780</div>
								 </div>

								 <div class="card-body">

									 <ul class="list-unstyled text-left align-items-center d-flex flex-column mt-3 mb-4">
										 <li>6 sessions (50 min each)</li>
										 <li>Career Advice</li>
										 <li>Detailed Portfolio Review</li>
										 <li>Interview Prep</li>
									 </ul>

								 </div>
								 <div class="card-button"><a target="_blank" style="min-width:150px; width:150px; border:2px solid white; border-radius:100px !important; text-decoration: none; padding: 5px !important; background-color: transparent; color: white; height: 50px; text-transform: none; font-family: 'aktiv-grotesk', 'helvetica neue', helvetica, arial, sans-serif; letter-spacing: 0px; line-height: 38px; padding: 0 28px; border-radius: 3px; font-weight: 500; font-size: 14px; cursor: pointer; display: inline-block; " href="https://square.site/book/XZ3JWP3QQPMJ3/dream-projects-brooklyn-ny" rel="nofollow">Sign Up
								 </a>
								 </div>
							</div>
						</div>
						</div> -->
						<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
					</div>
				</div>

				<div class="row white refunds--coaching" id="refund" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
					<div class="col-10 col-sm-10 col-md-10 col-lg-10">
					<div class="container mb-5">
						<div class="row">

							<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

							<div class="col-12 col-sm-6 d-block center-block mx-auto">
								<h3 class="display-3 white text-center">Refunds</h3>
							</div>
							<div class="col-12 col-lg-6 d-block center-block text-center mx-auto mt-5">
								<p class="white text-center ">Unhappy with our service? We will give you a full refund.</p>
								<a class="white" href="/contact-us"><p class="display-5 job-post">Contact Us</p></a>
							</div>


						</div>
					</div>
				</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				</div>

				<div class="row white mentor--coaching" id="refund" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
					<div class="col-10 col-sm-10 col-md-10 col-lg-10">
					<div class="container mb-5">
						<div class="row">

							<div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 mt-sm-0" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-1000">

							<div class="col-12 col-sm-8 d-block center-block mx-auto">
								<h3 class="display-3 white text-center black">Want to become a coach or mentor?</h3>
							</div>
							<div class="col-12 col-lg-4 d-block center-block text-center mx-auto mt-5">
								<p class="black text-center">We are always looking for talented coaches and mentors. Click the link below to apply.</p>
								<a class="pt-3" target="_blank" href="https://forms.gle/j6Zud5H85759iSTx9"><button class="btn btn-tertiary">Apply</button></a>
							</div>


						</div>
					</div>
				</div>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				</div>
				</div>


			<script>
		    var swiper = new Swiper('.swiper-one', {
					slidesPerView:4,
					breakpoints: {
				    // when window width is >= 320px
				    320: {
				      slidesPerView: 1,
				      spaceBetween: 10,
				    },
				    // when window width is >= 480px
				    480: {
				      slidesPerView: 2,
				      spaceBetween: 10
				    },
				    // when window width is >= 640px
				    640: {
				      slidesPerView: 2,
				      spaceBetween: 10
				    },
						900: {
						 slidesPerView: 4,
						 spaceBetween: 10
					 },
						1200: {
						 slidesPerView: 4,
						 spaceBetween: 10
					 },
				  },
					centeredSlides:true,
					spaceBetween:10,
					pagination: {
        		el: '.swiper-pagination',
						clickable:true,
      		},
					initialSlide: 0,
		    });

				var swiper2 = new Swiper('.swiper-two', {
				 pagination: {
					 el: '.swiper-pagination-two',
					 clickable:true,
				 },
			 });


		  </script>







				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

<?php get_footer(); ?>
