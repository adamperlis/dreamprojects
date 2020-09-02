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


	<div class="row hero--brief pt-5 pt-sm-5 pb-sm-4" <?php post_class(); ?> id="post-<?php the_ID(); ?>" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

			<div class="container-fluid d-flex">
				<div class="col-1 col-sm-1"></div>
				<div class="col-10 col-sm-10">

					<div class="container-fluid d-flex">

						<div class="col-6 p-0 d-flex align-items-center">
							<h4 class="black display-4 m-0 text-sm-left">Brief</h4>
						</div>

						<div class="col-6 p-0 d-flex align-items-center justify-content-end">
								<a class="link black display-6 nav" href="javascript:javascript:history.go(-1)"><p><img style="transform: rotate(180deg);" src="<?php echo get_template_directory_uri() ?>/img/Arrow-black.svg"/> Back</p></a>
						</div>

					</div>
					<hr style="border-top:1px solid black; padding-bottom: 80px; padding-top: 40px;"></hr>


				<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 pb-4">
					<h2 class="display-3"><?php the_title(); ?></h2>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-8 pb-4">
					<h4 class="display-4">Project Brief</h4>
					<?php the_field('project_brief'); ?>
				</div>
			</div>

		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

	</div>
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
					<p class="pb-4">Whether you’re an experienced designer or simply trying to break into the field, your portfolio matters. Your goal is to create a lasting impression on a potential employer with a simple glimpse into your work and brand. Each project has a different story and your portfolio is the place to demonstrate your credibility and understanding of the design process.
					<br></br>
					The following <strong>  Template</strong> will serve as a blueprint for how to submit your project. Read through the file carefully as it will give you tips to submitting a successful project. <a class="black" href="https://dreamprojects.co/winner_nominee/sample-dream-project/"><span class="display-6 job-post"><strong>Here</strong></span></a> is a sample of what your project might look like.</p>
					<a class="display-4" style="text-decoration:none; margin-right:20px; display:inline-block" href="<?php echo get_template_directory_uri() ?>/img/DreamProjects_Template.sketch"><img style="padding-right:10px;" src="<?php echo get_template_directory_uri() ?>/img/Sketch_logo_frame.svg"/> Sketch Template</a>
					<a class="display-4" style="text-decoration:none; margin-bottom:20px, display:inline-block" href="https://www.figma.com/file/ML7mzjMIQAHgr18qlpaarW/DreamProjects_Template/duplicate"><img style="padding-right:10px;" width="26px" src="<?php echo get_template_directory_uri() ?>/img/Figma-logo.svg"/> Figma Template</a>
					<!-- <a href="/sign-up"><button class="btn btn-tertiary">Submit Project <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a> -->
				</div>
				<div class="container-fluid" style="padding-top:20px">
					<a href="/project-submission-form"><button class="btn btn-tertiary">Submit Project <img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a>
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
						<img class="pb-2" style="height:45px" src="<?php echo get_template_directory_uri() ?>/img/flowkit.svg"/>
						<p class="display-5 m-0"><strong>Flowkit | User Flow Plugin</strong></p>
						<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
						<a target="_blank" href="https://transactions.sendowl.com/stores/8285/149712"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<div class="col-6 col-lg-3 pt-4 pt-lg-0">
					<img class="pb-2" style="height:45px" src="<?php echo get_template_directory_uri() ?>/img/ui8.svg"/>
					<p class="display-5 m-0"><strong>UI8 | Icons, UI Kits, Fonts, etc</strong></p>
					<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
					<a target="_blank" href="https://www.ui8.net/?rel=dream"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<div class="col-6 col-lg-3 pt-4 pt-lg-0">
					<img class="pb-2" style="height:45px" src="<?php echo get_template_directory_uri() ?>/img/istock-logo-2015.svg"/>
					<p class="display-5 m-0"><strong>Stock Imagery</strong></p>
					<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
					<a target="_blank" href="https://iStockphoto.6q33.net/zmbyr"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<?php if( get_field('sponsor_resource_image') ): ?>
				<div class="col-6 col-lg-3 pt-4 pt-lg-0">
					<img class="pb-2" style="height:45px" src="<?php the_field('sponsor_resource_image'); ?>"/>
					<p class="display-5 m-0"><strong><?php the_field('sponsor_resource_title'); ?></strong></p>
					<p class="display-5 m-0"><span class="display-5"><?php the_field('sponsor_resource_link_title'); ?></span></p>
					<a target="_blank" href="<?php the_field('sponsor_resource_link'); ?>"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<?php endif; ?>

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
