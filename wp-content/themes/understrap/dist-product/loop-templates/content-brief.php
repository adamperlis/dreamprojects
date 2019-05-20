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

<div class="container-fluid hero--brief" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10">

				<div class="row">

					<div class="col-12 col-sm-12 col-md-12 col-lg-10 padding-bottom padding-top">
						<h2 class="display-1"><?php the_title(); ?></h2>
					</div>

				</div>

				<div class="row project-brief-date">
					<div class="col-12 col-sm-1 col-md-9 col-lg-8"></div>
					<div class="col-11 col-sm-11 col-md-3 col-lg-3">
						<h4 class="display-3"><?php echo get_the_date( 'F, Y' );?></h4>
					</div>
						<div class="col-1 col-sm-1 col-md-1 col-lg-1">
						<div class="scroll-text">
							<span class="display-5 scroll-text-alignment">Scroll</span>
						</div>
					</div>
				</div>

		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

	</div> <!-- end of Hero Content-->

</div><!-- #post-## -->


<div class="container-fluid project-brief--section pb-4" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
	<div class="row">
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	<div class="col-10 col-sm-10 col-md-10 col-lg-10">
		<div class="row">
			<div class="col-12 col-sm-5 col-md-3 col-lg-3 pb-4">
				<div class="container-fluid">
					<h4 class="display-4">Submmission Deadline</h4>
					<p><?php the_field('submission_deadline'); ?></p>
				</div>
			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-6">
				<div class="container-fluid project-brief--section">
					<h4 class="display-4">Project Brief</h4>
						<p class="pb-4"><?php the_field('project_brief'); ?></p>
						<a href="/project-submission-form"><button class="btn btn-tertiary">Submit Project <img src="/wp-content/themes/understrap/img/Arrow-white.svg"/></button></a>
				</div>
			</div>
			<div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>
</div>

<div class="container-fluid" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
	<div class="row">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10">
			<hr></hr>
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>
</div>

<div class="container-fluid project-requirements--section pb-3" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
	<div class="row">
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	<div class="col-10 col-sm-10 col-md-10 col-lg-10">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-3">
				<div class="container-fluid">
					<h4 class="display-4 pb-3">Requirements</h4>
					<div class="container-fluid">
						<div class="row">
							<div class="col-6">
									<img class="pb-2" src="/wp-content/themes/understrap/img/image-icon.svg"/>
									<p class="display-5 m-0"><strong>High resolution images</strong></p>
									<p class="display-5">PNG, JPG, GIF</p>
							</div>
							<div class="col-6">
								<img class="pb-2" src="/wp-content/themes/understrap/img/crop-icon.svg"/>
								<p class="display-5 m-0"><strong>Dimensions</strong></p>
								<p class="display-5">2400px × 1800px</p>
							</div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-4 pt-lg-0">
				<h4 class="display-4">Submission Guide</h4>
				<div class="container-fluid">
					<p class="pb-4">Whether you’re an experienced designer or simply trying to break into the field, your portfolio matters. Your goal is to create a lasting impression on a potential employer with a simple glimpse into your work and brand. Each project has a different story and your portfolio is the place to demonstrate your credibility and understanding of the design process. Express your style, their are <strong>no brand guidelines here.</strong>
					<br></br>
					The following <strong>Sketch Template</strong> will serve as a blueprint for how to submit your project. Read through the file carefully as it will give you tips to submitting a successful project.</p>
					<a href="#"><button class="btn btn-quaternary sketch mb-2 mb-lg-0"><img src="/wp-content/themes/understrap/img/Sketch_logo_frame.svg"/> Sketch Template</button></a>
				</div>
			</div>
			<div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
		</div>
	</div>
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>
</div>

<div class="container-fluid" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
	<div class="row">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10">
			<hr></hr>
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>
</div>

<div class="container-fluid project-requirements--section pb-3" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
	<div class="row">
	<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	<div class="col-10 col-sm-10 col-md-10 col-lg-10">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-3">
				<div class="container-fluid">
					<h4 class="display-4 pb-3">Paid Advertisement</h4>
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
									<img class="pb-2" src="/wp-content/themes/understrap/img/image-icon.svg"/>
							</div>
					</div>
				</div>
			</div>
			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-6 pt-4 pt-lg-0">
				<h4 class="display-4">Resources</h4>
				<div class="container-fluid">
				<div class="row">
				<div class="col-3">
						<img class="pb-2" src="/wp-content/themes/understrap/img/flowkit.svg"/>
						<p class="display-5 m-0"><strong>Flowkit | User Flow Plugin</strong></p>
						<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
						<a target="_blank" href="https://transactions.sendowl.com/stores/8285/149712"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<div class="col-3">
					<img class="pb-2" src="/wp-content/themes/understrap/img/ui8.svg"/>
					<p class="display-5 m-0"><strong>UI8 | Icons, UI Kits, Fonts, etc</strong></p>
					<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
					<a target="_blank" href="https://transactions.sendowl.com/stores/8285/149712"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<div class="col-3">
					<img class="pb-2" src="/wp-content/themes/understrap/img/ui8.svg"/>
					<p class="display-5 m-0"><strong>UI8 | Icons, UI Kits, Fonts, etc</strong></p>
					<p class="display-5 m-0"><span class="display-5">Paid Affiliate Link</span></p>
					<a target="_blank" href="https://transactions.sendowl.com/stores/8285/149712"><button class="btn-sm btn-quaternary mt-2">View</button></a>
				</div>
				<div class="col-3">
					<img class="pb-2" src="/wp-content/themes/understrap/img/ui8.svg"/>
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
</div>

<div class="container-fluid pt-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
	<div class="row back--section">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-5 col-sm-4 col-md-4 col-lg-4">
			<a href="/#projects" class="display-6 black"><img src="/wp-content/themes/understrap/img/Arrow-black.svg"/> Back to Projects</a>
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>
</div>
