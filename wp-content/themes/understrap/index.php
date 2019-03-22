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
								<div class="container-fluid">
									<button class="btn btn-primary">button</button>
									<button class="btn btn-secondary">button</button>
								</div>
							</div>
							<div class="col-lg-5 about--image">
								<img src="/wp-content/themes/understrap/img/Bitmap.png" />
							</div>
					</div>
				</div>


				<?php
					$args = array(
					'numberposts'=> 2,           // Fetch all posts...
					'post_type'=> 'brief',      // from the 'release' CPT...
					);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) :
					echo '<ul>';
					while ($my_query->have_posts()) : $my_query->the_post();
					?>
					<li>
						<img class="brief_featured_image" src="<?php the_field('brief_featured_image'); ?>" />
						<div class="container">
							<div class="row">
								<div class="col-xs">
									<p><?php the_field('month'); ?></p>
									<p><?php the_field('submission_deadline'); ?></p>
									<h1><?php the_title(); ?></h1>
									<br />
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</li>

					<?php
					endwhile; echo '</ul>';
					endif; wp_reset_query(); ?>


			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>
