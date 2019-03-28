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

				<div class="container-fluid about--section">
					<div class="row">
						<div class="col-lg-1"></div>
						<div class="col-lg-11">
							<h3 class="display-3 section-title white">About /</h3>
						</div>
					</div>

					<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-6">
								<h2 class="display-2 white">Build your book. Grow your career.</h2>
								<div class="container-fluid">
									<div class="col-lg-8 p-0">
										<p class="white">As aspiring designers, we are often faced with the problem of lacking enough work on our portfolios to present our design skills and process.</p>
										<p class="white">We created Dream Projects to help change that. We want to empower Product Designers to grow their portfolios by working on meaningful design challenges on a global platform, earning them recognition along the way.</p>
									</div>
								</div>
								<div class="container-fluid about--buttons">
									<a href="#"><button class="btn btn-primary">See the winners <img src="/wp-content/themes/understrap/img/Arrow-black.svg" /></button></a>
									<a href="#"><button class="btn btn-secondary">See the nominees <img src="/wp-content/themes/understrap/img/Arrow-white.svg" /></button></a>
								</div>
							</div>
							<div class="col-lg-5 about--image">
								<img src="/wp-content/themes/understrap/img/Bitmap.png" />
							</div>
					</div>
				</div>

			<div class="container-fluid projects--section">

						<!-- Swiper -->
		  <div class="swiper-container">
		    <div class="swiper-wrapper">
		      <div class="swiper-slide">
						<div class="container-fluid about--section">
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-11">
									<h3 class="display-3 section-title white">About /</h3>
								</div>
							</div>

							<div class="row">
									<div class="col-lg-1"></div>
									<div class="col-lg-6">
										<h2 class="display-2 white">Build your book. Grow your career.</h2>
										<div class="container-fluid">
											<div class="col-lg-8 p-0">
												<p class="white">As aspiring designers, we are often faced with the problem of lacking enough work on our portfolios to present our design skills and process.</p>
												<p class="white">We created Dream Projects to help change that. We want to empower Product Designers to grow their portfolios by working on meaningful design challenges on a global platform, earning them recognition along the way.</p>
											</div>
										</div>
										<div class="container-fluid about--buttons">
											<a href="#"><button class="btn btn-primary">See the winners <img src="/wp-content/themes/understrap/img/Arrow-black.svg" /></button></a>
											<a href="#"><button class="btn btn-secondary">See the nominees <img src="/wp-content/themes/understrap/img/Arrow-white.svg" /></button></a>
										</div>
									</div>
									<div class="col-lg-5 about--image">
										<img src="/wp-content/themes/understrap/img/Bitmap.png" />
									</div>
							</div>
						</div>
					</div>
		      <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/2)"></div>
		    </div>
		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>
		  </div>

				<div class="row">

				<div class="col-lg-12 projects--list">

				<?php
					$args = array(
					'numberposts'=> 2,
					'post_type'=> 'brief',
					'orderby' => 'publish_date',
					);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) :
					echo '<ul>';
					while ($my_query->have_posts()) : $my_query->the_post();
					?>

					<li class="projects--project" style="background-image:url(<?php the_field('brief_featured_image'); ?>)">
						<!-- <img class="brief_featured_image" src="<?php the_field('brief_featured_image'); ?>" /> -->
						<div class="row">

						<div class="col-lg-6 p-0">
							<h1 class="display-1 section-title white project"><?php the_field('month'); ?> /</h1>
						</div>
						<div class="col-lg-5 project text-right">

									<h2 class="display-2 white"><?php the_title(); ?></h2>
									<div class="container-fluid">
										<div class="row">
										<div class="col-lg-6"></div>
										<div class="col-lg-6">
											<div class="project--description"><?php the_content(); ?></div>
										</div>
										</div>
									</div>
									<a href="#"><button class="btn btn-primary">Submit your project <img src="/wp-content/themes/understrap/img/Arrow-black.svg" /></button></a>
									<h4 class="display-4 white project--deadline">Submission Deadline <?php the_field('submission_deadline'); ?></p>
						</div>
						</div>

					</li>


					<?php
					endwhile; echo '</ul>';
					endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>

					<div class="container-fluid submission--section">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-11">
								<h3 class="display-3 section-title black">Submission /</h3>
							</div>
						</div>

						<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-6">
									<h2 class="display-2 black">How to produce best-in-class work</h2>
									<div class="container-fluid submission--buttons">
										<a href="#"><button class="btn btn-tertiary">Submission Guide <img src="/wp-content/themes/understrap/img/Arrow-white.svg" /></button></a>
									</div>
								</div>
								<div class="col-lg-5 submission--image">
									<img src="/wp-content/themes/understrap/img/Bitmap.png" />
								</div>
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
