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

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<div class="container-fluid mission--section">

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



					<div class="container-fluid mission">
						<div class="row">
								<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
								<div class="col-10 col-sm-10 col-md-10 col-lg-10">

										<h2 data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="4s00" class="display-2 reveal-text black"><span>As aspiring designers, we are often faced with the problem of lacking enough work in our portfolios to present our design skills and process.</span></h2>

								</div>
										<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>
					</div>


					<div class="row" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="4s00">
						<div class="col-12">
							<video playsinline autoplay loop muted/>
								<source type="video/mp4" src="https://cdn.dribbble.com/users/4859/videos/49/cuberto_showreel_dribbble_3.mp4">
							</video>

						</div>
					</div>

					</div>

					<!-- <div id="about" class="about--section container-fluid" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="4s00">
						<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-10 col-lg-10">
									<h3 class="display-3 section-title black">About /</h3>
									<h2 class="display-2 black">Build your book. <br>Grow your career.</h2>
									<div class="container-fluid">
										<div class="col-12 col-sm-10 p-0">
											<p class="black">We created Dream Projects to empower Product Designers to grow their portfolios by working on meaningful design challenges and earning them recognition along the way.</p>
										</div>
									</div>
									<div class="container-fluid about--buttons">
										<a href="#"><button class="btn btn-tertiary">See the winners <img src="/wp-content/themes/understrap/img/Arrow-white.svg" /></button></a>
										<a href="#"><button class="btn btn-quaternary">See the nominees <img src="/wp-content/themes/understrap/img/Arrow-black.svg" /></button></a>
									</div>
								</div>
								<div class="col-lg-1"></div>
						</div>
					</div> -->

			<div id="projects" class="container-fluid projects--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="4s00">
				<div class="row">
				<div class="col-1"></div>
				<div class="col-10">
					<div class="row">
						<h4 class="display-4 section-title black">Projects /</h4>
					</div>

				<!-- Swiper -->
				<div class="row" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="4s00">
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

								<div class="col-12 col-sm-6 text-left p-0">
									<h2 class="display-2 black"><?php the_title(); ?></h2>
									<div class="container-fluid project-btn">
										<div class="row">
										<div class="col-lg-6"></div>
										<div class="col-lg-6">
											<!-- <div class="project--description"><?php the_content(); ?></div> -->
										</div>
										</div>
									</div>

									<a <?php echo $i == 2 ? 'onclick="return false;"' : '' ?> href="<?php the_permalink(); ?>"><button <?php echo $i == 2 ? 'disabled' : '' ?> class="<?php echo $i == 2 ? 'btn btn-disabled' : 'btn btn-tertiary' ?>"><?php echo $i == 2 ? 'Coming Soon' : 'See Project Brief' ?><?php echo $i == 2 ? '' : '<img src="/wp-content/themes/understrap/img/Arrow-white.svg" />' ?></button></a>

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
					<div class="d-none d-sm-block swiper-button-next display-4">Next Month <img src="/wp-content/themes/understrap/img/Arrow-black.svg" /></div>
					<div class="d-none d-sm-block swiper-button-prev display-4"><img src="/wp-content/themes/understrap/img/Arrow-black.svg" /> This Month</div>
					</div>
				</div>

				</div>
			</div>
			<div class="col-1"></div>
			</div>
			</div>

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>
