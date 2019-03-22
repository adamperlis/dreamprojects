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
	<div class="container-fluid hero">
		<div class="row hero-component-title">
			<div class="col-sm-1 col-md-1 col-lg-1 p-0"></div>
			<div class="col-sm-4 col-md-4 col-lg-4 p-0">
							<span class="display-4">Sponsored by:</span><br>
							<img class="sponsor" src="/wp-content/themes/understrap/img/academy-logo-black.svg" />
			</div>

			<div class="col-sm-4 col-md-7 col-lg-7 p-0">
				<!-- <svg id="title" width="100%" height="600px">

					<filter id="filter" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">

						<feTurbulence x="-10%" y="-10%" width="120%" height="120%" baseFrequency="0.05 0.06" result="NOISE" numOctaves="1"/>

		  			<feDisplacementMap x="-10%" y="-10%" width="120%" height="120%" in="SourceGraphic" in2="NOISE" scale="20" xChannelSelector="R" yChannelSelector="R"></feDisplacementMap>

					</filter>

					 <defs>
					<clipPath id="clipping">
						<text x="0" y="0" id="title-one"  transform="matrix(1,0,0,1,0,0)" text-align="right" letter-spacing="-12px" line-height=".8" font-weight="700" font-family="'aktiv-grotesk',sans-serif,'Helvetica Neue',Helvetica,Arial,sans-serif" text-anchor="start" class="svgText" fill="#000">
							<tspan x="0" dy=".75em">Dream</tspan>
							<tspan x="0" dy=".75em">Projects</tspan>
						</text>
					</clipPath>
					</defs>

					 <g filter="url(#filter)">
						 <text x="0" y="0" id="title-two" transform="matrix(1,0,0,1,0,0)" text-align="right" letter-spacing="-12px" line-height=".8" font-weight="700" font-family="'aktiv-grotesk',sans-serif,'Helvetica Neue',Helvetica,Arial,sans-serif" text-anchor="start" class="svgText" fill="none" stroke="#000" stroke-width="2">
							 <tspan x="0" dy=".75em">Dream</tspan>
							 <tspan x="0" dy=".75em">Projects</tspan>
						 </text>
						<rect y="100%" width="100%" height="100%" fill="#000" id="svgRect" clip-path="url(#clipping)"/>
					</g>
				</svg> -->
					<h1 id="projects" class="display-1">Dream Projects</h1>
			</div>

		</div>

		<div class="row hero-component-description">
			<div class="col-sm-1 col-md-1 col-lg-1 hero-component-two"></div>
			<div class="col-sm-2 col-md-2 col-lg-2 hero-component-two">
				<h3 class="display-3">Monthly<br /> Portfolio Building Challenge</h3>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-3 hero-component-two"></div>
			<div class="col-sm-2 col-md-8 col-lg-5 hero-component-two">
					<div class="grid">
						<p>Dream Projects is a screen design, portfolio-building challenge. Every month you’ll have the chance to dream big and re-design digital experiences from a futuristic app for the Hyperloop One to the interface for Amazon’s autonomous drone delivery service. Learn how to build your portfolio and gain recognition as you take the next leap in your product design career.</p>
					</div>
			</div>
			<div class="col-sm-1 col-md-1 hero-component-two"></div>
		</div>
	</div>


	<?php dynamic_sidebar( 'herocanvas' ); ?>

<?php endif; ?>
