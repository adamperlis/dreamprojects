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

<!-- ******************* Shows on all other breakpoints ******************* -->


	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
			test
		</div>
		<div class="col-1"></div>
	</div>


	<?php dynamic_sidebar( 'herocanvas' ); ?>

<?php endif; ?>
