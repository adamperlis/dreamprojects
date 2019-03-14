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
	<div class="container">
		<div class="row hero">
			<div class="col-sm-4 col-md-4 hero-component">
				<div class="container">
					<div class="row">
						<div class="col-xs">
							<span class="display-4">Sponsored by:</span>
							<img class="sponsor" src="/wp-content/themes/understrap/img/academy-logo-black.svg" />
						</div>
					</div>
					<div class="row">
						<div class="col-xs">
							<h4 class="display-2">Monthly<br /> Portfolio Building Challenge</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm hero-component"></div>

			<div class="col-sm hero-component">

				<div class="container">
					<div class="row">
						<div class="col-xs">
							<!-- <div class="display-1" data-blotter><span class="content__text-inner">Dream</span></div> -->
							<h1 id="projects" class="display-1">Dream Projects</h1>
						</div>
					</div>


					<div class="row">
						<div class="col-6">
							<p>Dream Projects is a screen design, portfolio-building challenge. Every month you’ll have the chance to dream big and re-design digital experiences from a futuristic app for the Hyperloop One to the interface for Amazon’s autonomous drone delivery service.</p>
						</div>
						<div class="col-6">
							<p>Learn how to build your portfolio and gain recognition as you take the next leap in your product design career.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php dynamic_sidebar( 'herocanvas' ); ?>

<?php endif; ?>
