<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<div class="container-fluid">
						<div class="row not-found">
							<div class="col-3"></div>

							<div class="col-6">
								<h3 class="page-title display-3 text-center pt-5 pb-2 white" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100"><?php esc_html_e( 'Oops! Your dreams can&rsquo;t be found.', 'understrap' ); ?></h3>
								<a href="/" class="display-6 white pt-2" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="200"><img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/> Back to Home</a>
								<video class="img-fluid" playsinline autoplay loop muted/>
									<source type="video/mp4" src="https://media.giphy.com/media/HC0qBnDAaOpAk/giphy.mp4">
								</video>

								</div>
								<div class="col-3"></div>

							</div>
						</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
