<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// get the current taxonomy term
$term = get_queried_object();

// vars
$skill = get_field('skill', $term);

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>


	<div class="row hero--brief pt-5 pt-sm-5 pb-4 pb-sm-4 mb-5" <?php post_class(); ?> id="post-<?php the_ID(); ?>" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10">

			<div class="row pb-sm-5">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 pb-4">
					<h2 class="display-1"><?php the_title(); ?></h2>
				</div>
			</div>

			<div class="row pb-5">
				<div class="col-12 col-sm-5 col-md-3 col-lg-4 pb-2 pb-sm-4">
					<h4 class="display-4">Submmission Deadline</h4>
					<p><?php the_field('submission_deadline'); ?></p>
					<br>
					<h4 class="display-4 pb-3">Prize</h4>
					<span data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-100" data-aos-delay="0"><img width="100px" src="<?php echo get_template_directory_uri() ?>/img/Google_2015_logo.svg" /></span><a class="black" href="/sign-up"><p class="display-5 job-post">View Job</p></a>
				</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-7">
						<div class="container-fluid project-brief--section pt-4 pt-sm-0">
							<h4 class="display-4">Project Brief</h4>
							<p class="pb-4"><?php the_field('project_brief'); ?></p>
						</div>
					</div>

			</div>

		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

	</div> <!-- end of Hero Content-->

	<div class="row" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10">
			<hr></hr>
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>



	<div class="row project-requirements--section pt-5 pt-sm-5 pb-5 pb-sm-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	<div class="col-10 col-sm-10 col-md-10 col-lg-10">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4">
				<div class="container-fluid">
					<h4 class="display-4 pb-3">Requirements</h4>
					<div class="container-fluid">
						<div class="row">
							<div class="col-6">
									<img class="pb-2" src="<?php echo get_template_directory_uri() ?>/img/image-icon.svg"/>
									<p class="display-5 m-0"><strong>Image Formats</strong></p>
									<p class="display-5">PNG, JPG, GIF</p>
							</div>
							<div class="col-6">
								<img class="pb-1" src="<?php echo get_template_directory_uri() ?>/img/crop-icon.svg"/>
								<p class="display-5 m-0"><strong>Dimensions</strong></p>
								<p class="display-5">2400px × 1800px</p>
							</div>
							<div class="col-6">
								<img height="28" width="28" class="pb-2" src="<?php echo get_template_directory_uri() ?>/img/folder-icon.svg"/>
								<p class="display-5 m-0"><strong>File Size</strong></p>
								<p class="display-5">less than 5MB</p>
							</div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-8 pt-4 pt-lg-0">
				<h4 class="display-4">Submission Guide</h4>
				<div class="container-fluid">
					<p class="pb-4">Whether you’re an experienced designer or simply trying to break into the field, your portfolio matters. Your goal is to create a lasting impression on a potential employer with a simple glimpse into your work and brand. Each project has a different story and your portfolio is the place to demonstrate your credibility and understanding of the design process. Express your style, their are <strong>no brand guidelines here.</strong>
					<br></br>
					The following <strong>  Template</strong> will serve as a blueprint for how to submit your project. Read through the file carefully as it will give you tips to submitting a successful project.</p>
					<a href="<?php echo get_template_directory_uri() ?>/img/DreamProjects_Template.sketch"><button class="btn btn-quaternary sketch mb-2 mb-lg-0"><img src="<?php echo get_template_directory_uri() ?>/img/Sketch_logo_frame.svg"/> Sketch Template</button></a>
					<a href="/sign-up"><button class="btn btn-tertiary">Submit Project <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a>
					<!-- <a href="/project-submission-form"><button class="btn btn-tertiary">Submit Project <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a> -->
				</div>
			</div>
			<div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>


	<div class="row" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10">
			<hr></hr>
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>



	<div class="row project-requirements--section pt-5 pt-sm-5 pb-5 pb-sm-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	<div class="col-10 col-sm-10 col-md-10 col-lg-10">
		<div class="row">

			<div class="col-12 col-sm-12 col-md-12 col-lg-12 pt-4 pt-lg-0">
				<h4 class="display-4">Resources</h4>
				<div class="container-fluid">
				<div class="row">
				<div class="col-6 col-lg-3 pt-4 pt-lg-0">
						<img class="pb-2" src="<?php echo get_template_directory_uri() ?>/img/flowkit.svg"/>
						<p class="display-5 m-0"><strong>Flowkit | User Flow Plugin</strong></p>
						<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
						<a target="_blank" href="https://transactions.sendowl.com/stores/8285/149712"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<div class="col-6 col-lg-3 pt-4 pt-lg-0">
					<img class="pb-2" src="<?php echo get_template_directory_uri() ?>/img/ui8.svg"/>
					<p class="display-5 m-0"><strong>UI8 | Icons, UI Kits, Fonts, etc</strong></p>
					<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
					<a target="_blank" href="https://transactions.sendowl.com/stores/8285/149712"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<div class="col-6 col-lg-3 pt-4 pt-lg-0">
					<img class="pb-2" src="<?php echo get_template_directory_uri() ?>/img/ui8.svg"/>
					<p class="display-5 m-0"><strong>UI8 | Icons, UI Kits, Fonts, etc</strong></p>
					<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
					<a target="_blank" href="https://transactions.sendowl.com/stores/8285/149712"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<div class="col-6 col-lg-3 pt-4 pt-lg-0">
					<img class="pb-2" src="<?php echo get_template_directory_uri() ?>/img/ui8.svg"/>
					<p class="display-5 m-0"><strong>UI8 | Icons, UI Kits, Fonts, etc</strong></p>
					<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
					<a target="_blank" href="https://transactions.sendowl.com/stores/8285/149712"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
			</div>
			</div>
			</div>
			<div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>



	<div class="row back--section pt-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10">
			<a href="/#projects" class="display-6 black"><img src="<?php echo get_template_directory_uri() ?>/img/Arrow-black.svg"/> Back to Projects</a>
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>
