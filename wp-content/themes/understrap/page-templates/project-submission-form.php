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

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>


				<?php while ( have_posts() ) : the_post(); ?>

					<div class="container-fluid hero--project-submission">

						<div class="row">
							<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
							<div class="col-10 col-sm-10 col-md-10 col-lg-10">

									<div class="row">

										<div class="col-12 col-sm-12 col-md-12 col-lg-6 padding-bottom padding-top">
											<h2 class="display-1"><?php get_template_part( 'loop-templates/content', 'page' ); ?></h2>
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
				$fields = array(
					'field_5cdd9e525c9ec',	// project_id
					'field_5cc6a8e69e101',	// first_name
					'field_5ce330fd34034',	// last_name
					'field_5ce3310bd92d0',	// email
					'field_5cc6a8e69e10b',	// skills
					'field_5cc6aae5dd701',	// instagram
					'field_5cc6abb893afb',	// linkedin
					'field_5cc74f44b05a0',	// dribbbble
					'field_5cc74f56eb8d3',  // behance
					'field_5cc6abcbc9dfa',	// portfolio_url
					'field_5cc6a8e69e0f8',	// hero_image
					'field_5cd4c54f1beb0',	// the_brief
					'field_5cc6ad8e215e5',	// problem
					'field_5cc6ade56b32a',	// insight
					'field_5cc6ae2580427',	// solution
					'field_5cc6a95ace3fc',	// process_image
					'field_5cc6ae44a35f2',	// process
					'field_5cc6a96000ac7',	// design_system_image
					'field_5cc6ae93bab23',	// design_system
					'field_5cc6a982ecf89'	// design_grid_image
				);

				acf_register_form(array(
					'id'		    	=> 'new-project-nominee',
					'post_id'	    	=> 'new_post',
					'new_post'			=> array(
						'post_type'		=> 'winner_nominee',
						'post_status'	=> 'publish'
					),
					'post_title'		=> true,
					'post_content'  	=> false,
					'uploader'      	=> 'basic',
					'return' 					=> '%post_url%',
					'fields'				=> $fields,
					'submit_value'		=> 'Submit',
					'html_submit_button'	=> '<input type="submit" class="btn btn-tertiary" value="%s" />',
					'updated_message' => __("Post updated", 'acf'),
					'html_updated_message'	=> '<div id="message" class="updated"><p>%s</p></div>',
		    	));

				// Load the form
				acf_form('new-project-nominee');
			?>

		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		</div>


			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
