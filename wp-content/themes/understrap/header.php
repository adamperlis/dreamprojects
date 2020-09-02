<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- TradeDoubler site verification 3120510 -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/mcq4oew.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.min.css"></link>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.9.1/rellax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<main class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light fixed-top">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0 mr-auto"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/img/dream-projects-logo-black.svg" /></a></h1>
						<?php endif; ?>

					<?php } else {
						echo '<div class="navbar-brand mb-0 mr-auto">';
						the_custom_logo();
						echo '</div>';
					} ?><!-- end custom logo -->


						<div class="d-md-none d-lg-none hamburger">
							<a class="link d-inline-block d-md-none black display-6 sign-up" href="/sign-up"><button class="btn-sm btn-tertiary">Sign Up</button></a>

							<button class="menu-button">
							  <div class="menu-bar"></div>
							  <div class="menu-bar"></div>
							</button>
						</div>


				<!-- The Menu goes here -->

					<!-- <a class="link p-2 d-none d-sm-block" href="/about"><p class="display-6">About</p></a> -->
					<a class="link p-2 d-none d-md-block black display-6 nav" href="/#how-it-works">How It Works</a>
					<a class="link p-2 d-none d-md-block black display-6 nav" href="/projects">Projects</a>
					<a class="link p-2 d-none d-md-block black display-6 nav" href="/submissions">Submissions</a>
					<a class="link p-2 d-none d-md-block orange display-6 nav" href="/career-coaching">Career Coaching</a>
					<a class="link p-2 d-none d-md-block black display-6 nav" href="/sign-up"><button class="btn-sm btn-tertiary">Sign Up</button></a>


			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

	<div class="hamburger-menu d-block d-md-none d-lg-none">

	<nav id="menu">
		<ul class="menu-nav">
			<!-- <li><a class="link" href="/about"><p class="display-6 white">About</p></a></li> -->
			<a class="link white display-6" href="/#how-it-works">How It Works</a>
			<li><a class="link white display-6" href="/projects">Projects</a></li>
			<li><a class="link white display-6" href="/submissions">Submissions</a></li>
			<li><a class="link white display-6" href="/career-coaching">Career Coaching</a></li>
			<!-- <li><a class="link white display-6" href="/sponsors">Sponsors</a></li> -->
			<li><a class="link white display-6" href="/contact-us">Contact Us</a></li>
			<!-- <li><a class="link" href="/rules"><p class="display-6 white">Rules</p></a></li> -->
		</ul>
	</nav>

	</div>
