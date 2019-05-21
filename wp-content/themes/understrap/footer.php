<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

		<footer class="footer d-flex flex-wrap">
			<div class="mr-auto p-2">
				<div class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="/wp-content/themes/understrap/img/dream-projects-logo-black.svg" /></a></div>
				<p class="display-5">Copyright © 2019 Academy. All Rights Reserved</p>
			</div>

			<a class="link p-2" href="#"><p class="display-6">Privacy Policy</p></a>
			<a class="link p-2" href="#"><p class="display-6">Contact Us</p></a>
			<a class="link p-2" href="#"><p class="display-6">Rules</p></a>
			<div class="p-2">
				<p class="display-5 link">Sponsored By:</p>
				<a href="https://academyux.com"><img class="sponsor-footer" src="/wp-content/themes/understrap/img/academy-logo-black.svg" /></a>
			</div>

		</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>
//start AOS CSS Animation Lib
AOS.init();
</script>

</body>

</html>
