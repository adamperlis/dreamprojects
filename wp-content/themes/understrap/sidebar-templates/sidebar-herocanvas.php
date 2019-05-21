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

<!-- ******************* Show on Mobile only ******************* -->
<div class="container-fluid mt-2">
<div class="row mt-5">
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	<div class="col-10 d-block d-sm-none">
		<div class="container-fluid mt-5">
			<div class="row flex-row mt-5">
				<div class="col-6">
					<h3 class="hero-subtitle-mobile display-4">Monthly Portfolio <br> Building Challenge</h3>
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
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>
</div>

<!-- ******************* Shows on all other breakpoints ******************* -->

<div class="container-fluid hero--section">
	<div class="row">
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	<div class="col-10 col-sm-10 col-md-10 col-lg-10">
		<div class="row hero">
				<div class="col-12 col-sm-4 col-md-7 col-lg-7">
						<h1 class="display-1">Dream Projects</h1>
				</div>
		</div>

		<div class="row hero-subtitle flex-wrap">

			<div class="col-12 col-sm-12 col-md-12 col-lg-5 hero-component-two flex-row flex-sm-column flex-md-column flex-lg-column">
				<div class="container-fluid">
					<div class="row d-none d-sm-block">
						<div class="col-6 col-md-12 col-lg-12 pb-4 pb-sm-0">
							<div class="container-fluid d-flex align-items-center sponsor--section">
								<span class="display-5">Sponsored by:</span>
								<a href="https://academyux.com"><img class="sponsor" src="/wp-content/themes/understrap/img/academy-logo-black.svg" /></a>
							</div>
						</div>
						<div class="col-6 col-md-12 col-lg-12 pb-4">
							<h3 class="display-3">Monthly Portfolio <br> Building Challenge</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 hero-component-three">
					<div class="text-grid">
						<p>Dream Projects is a screen design, portfolio-building challenge. Every month you’ll have the chance to re-design digital experiences you have always dreamed of working on. Learn how to build your portfolio and gain recognition as you take the next leap in your product design career.</p>
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
	</div>


	<?php dynamic_sidebar( 'herocanvas' ); ?>

<?php endif; ?>
