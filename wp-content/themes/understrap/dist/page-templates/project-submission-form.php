<?php
/**
 * Template Name: Project Submission Form Template
 *
 * Template for displaying a Project Submission Form Template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

acf_form_head();
get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>


				<?php while ( have_posts() ) : the_post(); ?>

					<div class="hero--project-submission">

						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

									<div class="row">

										<div class="col-12 col-sm-12 col-md-12 col-lg-6 padding-bottom padding-top">
											<?php get_template_part( 'loop-templates/content', 'page' ); ?>


											<?php
											$args = array(
										    // Whether the title should be displayed or not (true/false)
										    'display_title' => false,

										    // Whether the description should be displayed or not (true/false)
										    'display_description' => false,

										    // Text used for the submit button
										    'submit_text' => 'Submit',

										    // The URL to which the form points. Defaults to the current URL which will redirect and automatically display a success message after submission
										    // If this is overriden you may use af_has_submission to check for a form submission
										    // 'target' => CURRENT_URL,

										    // Whether the form output should be echoed or returned
										    'echo' => true,

										    // Field values to pre-fill. Should be an array with format: $field_name_or_key => $field_prefill_value
										    'values' => array(),

										    // Array of field keys or names to exclude from form rendering
										    'exclude_fields' => array(),

										    // Either 'wp' or 'basic'. Whether to use the Wordpress media uploader or a regular file input for file/image fields.
										    'uploader' => 'basic',

										    // // The URL to redirect to after a successful submission. Defaults to the current URL which will display a success message after submission.
										    // 'redirect' => CURRENT_URL,
												//
										    // // ID to use for form element. Defaults to form key.
										    // 'id' => FORM_KEY,

										    // Filter mode disables the success message after submission and instead displays all fields again with their submitted values.
										    'filter_mode' => false,

										    // 'label' to place instructions right below label or 'field' to place them after the field.
										    'instruction_placement' => 'label',

										    // Add a honeypot to prevent spam submissions. Enabled by default.
										    'honeypot' => true,
										);

											advanced_form( 'form_5cffc572cf4d7', $args );

											?>
										</div>

									</div>

							</div>
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
						</div>
						</div>



				<?php endwhile; // end of the loop. ?>

				<div class="row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
					<div class="col-10 col-sm-10 col-md-10 col-lg-6">

				<?php

				?>

		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		</div>


			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

<?php get_footer(); ?>
