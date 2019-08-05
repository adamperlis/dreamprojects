<?php
/**
 * Template Name: Privacy policy Page Template
 *
 * Template for displaying a Privacy policy Template.
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



						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10 mt-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

									<div class="row">

										<div class="col-12 col-sm-12 col-md-12 col-lg-6 padding-bottom padding-top">
											<h2 class="display-2 pb-5">Privacy Policy</h2>
											<?php the_content(); ?>
										</div>
									</div>

							</div>
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>




				<?php endwhile; // end of the loop. ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

<?php get_footer(); ?>
