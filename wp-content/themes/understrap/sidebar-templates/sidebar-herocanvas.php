<?php
/**
 * Sidebar - hero canvas setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if ( is_active_sidebar( 'herocanvas' ) ) : ?>

	<!-- ******************* The Hero Canvas Widget Area ******************* -->
<div class="container hero--section">
		<div class="row hero">
			<div class="col-12 d-block d-sm-none">
				<div class="container-fluid">
					<div class="row flex-row">
						<div class="col-6">
							<h3 class="display-3">Monthly Portfolio <br> Building Challenge</h3>
						</div>
						<div class="col-6">
							<div class="container-fluid d-flex flex-column align-items-end">
								<span class="display-5">Sponsored by:</span>
								<a href="https://academyux.com"><img class="sponsor" src="/wp-content/themes/understrap/img/academy-logo-black.svg" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-12 col-sm-4 col-md-7 col-lg-7">
					<h1 id="projects" class="display-1">Dream Projects</h1>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4"></div>
		</div>

		<div class="row hero-subtitle flex-wrap">

			<div class="col-sm-1 col-md-1 col-lg-1 hero-component-two"></div>
			<div class="col-12 col-sm-4 col-md-4 col-lg-3 hero-component-two flex-row flex-sm-column flex-md-column flex-lg-column">
				<div class="container-fluid">
					<div class="row d-none d-sm-block">
						<div class="col-6 col-md-12 col-lg-12">
							<div class="container-fluid d-flex align-items-center sponsor--section">
								<span class="display-5">Sponsored by:</span>
								<a href="https://academyux.com"><img class="sponsor" src="/wp-content/themes/understrap/img/academy-logo-black.svg" /></a>
							</div>
						</div>
						<div class="col-6 col-md-12 col-lg-12">
							<h3 class="display-3">Monthly Portfolio <br> Building Challenge</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-1 hero-component-two"></div>
			<div class="col-12 col-sm-2 col-md-8 col-lg-6 hero-component-three">
					<div class="grid">
						<p>Dream Projects is a screen design, portfolio-building challenge. Every month you’ll have the chance to dream big and re-design digital experiences, from a futuristic app for the Hyperloop One to the interface for Amazon’s autonomous drone delivery service. Learn how to build your portfolio and gain recognition as you take the next leap in your product design career.</p>
					</div>
			</div>
			<div class="col-sm-1 col-md-1 hero-component-two"></div>
		</div>
		<div class="row scroll-text">
			<div class="col-sm-1 col-md-1"><span class="display-5">Scroll</span></div>
		</div>

	</div>


	<?php dynamic_sidebar( 'herocanvas' ); ?>

<?php endif; ?>
