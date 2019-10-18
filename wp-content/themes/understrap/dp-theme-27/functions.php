<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

function generate_post_from_form_submission() {

 // Set up a form using the values for post title and content
 // Replace post_type with whatever type of post you want to generate
 $post_data = array(
	 'post_type' => 'winner_nominee',
	 'post_status' => 'publish',

 );

 // Create post with the previously retrieved values
 $post_id = wp_insert_post( $post_data );

 // Save extra_information field directly to custom field on post
 af_save_field('project_id', $post_id );
 af_save_field('award_designation', $post_id );
 af_save_field('first_name', $post_id );
 af_save_field('last_name', $post_id );
 af_save_field('email', $post_id );
 af_save_field('skill', $post_id );
 af_save_field('instagram', $post_id );
 af_save_field('linkedin', $post_id );
 af_save_field('dribbble', $post_id );
 af_save_field('behance', $post_id );
 af_save_field('portfolio_url', $post_id );
 af_save_field('hero_image', $post_id );
 af_save_field('problem', $post_id );
 af_save_field('insight', $post_id );
 af_save_field('solution', $post_id );
 af_save_field('process_image', $post_id );
 af_save_field('process', $post_id );
 af_save_field('design_system_image', $post_id );
 af_save_field('design_system', $post_id );
 af_save_field('design_grid_image', $post_id );

 $url = get_permalink( $post_id );
 wp_redirect($url);
 exit();

}

add_action( 'af/form/submission/key=form_5cffc572cf4d7', 'generate_post_from_form_submission', 10 );

add_filter('remove_hube2_nag', '__return_true');

add_filter('acf/validate_value/name=skill', 'only_allow_4', 20, 5);
function only_allow_4($valid, $value, $field, $input) {
if (count($value) > 4) {
	$valid = 'Only Select 4';
}
return $valid;
};
