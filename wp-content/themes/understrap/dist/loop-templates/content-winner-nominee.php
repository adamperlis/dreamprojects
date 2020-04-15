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
$project_id = get_field('project_id');
$award = get_field('award_designation');

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="container-fluid hero--winners-nominees" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row <?php echo $award['value']; ?>">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="400">

				<div class="row">

					<div class="col-11 col-sm-11 col-md-12 col-lg-12 pb-5">
						<h1 class="display-0"><?php echo $award['label']; ?></h1>
					</div>

				</div>

				<div class="container-fluid pt-5">

						<div class="row">
							<div class="col-12 col-sm-12 col-md-4 col-lg-4 pb-5">
								<div class="pb-1"><h4 class="display-4"><?php echo get_the_date( 'F Y' );?></h4></div>
								<div><h8 class="display-8"><?php echo $project_id->post_title ?></h8></div>
							</div>
							<div class="col-12 col-sm-12 col-md col-lg-2"></div>
							<div class="col-5 col-sm-5 col-md-2 col-lg-2">
								<h4 class="display-4">Designer</h4>
								<p class="display-5"><?php the_field('first_name'); echo '&nbsp;'; the_field('last_name'); ?></p>
								<ul class="social">
									<?php if( get_field('linkedin') ): ?>
										<li><a href="https://www.linkedin.com/in/<?php echo the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
									<?php endif; ?>
									<?php if( get_field('instagram') ): ?>
										<li><a href="https://www.instagram.com/<?php echo the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
									<?php endif; ?>
									<?php if( get_field('dribbble') ): ?>
										<li><a href="https://dribbble.com/<?php echo the_field('dribbble'); ?>"><i class="fa fa-dribbble"></i></a></li>
									<?php endif; ?>
									<?php if( get_field('behance') ): ?>
										<li><a href="https://www.behance.net/<?php echo the_field('behance'); ?>"><i class="fa fa-behance"></i></a></li>
									<?php endif; ?>
									<?php if( get_field('portfolio_url') ): ?>
										<li><a href="<?php echo the_field('portfolio_url'); ?>"><i class="fa fa-link"></i></a></li>
									<?php endif; ?>
								</ul>
							</div>

							<div class="col-5 col-sm-5 col-md-2 col-lg-2">
								<h4 class="display-4">Skills</h4>

								<?php

								if( $skill ) {
									foreach($skill as $t) {
										$t = get_category($t);
										echo '<ul>';
										echo '<li><span class="display-5">';
										echo $t->name;
										echo '</span></li>';
										echo '</ul>';
									}
								}
								?>
							</div>

							<div class="col-1 col-sm-1 col-md-1 col-lg-1">
								<div class="scroll-text">
									<span class="display-5 scroll-text-alignment">Scroll</span>
								</div>
							</div>
						</div>
				</div>

				<div class="row">
					<div class="col-12 col-sm-1 col-md-5 col-lg-7"></div>


					<div class="col-12 col-sm-1 col-md-1 col-lg-1"></div>
				</div>

		</div>
		</div>

		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

	</div> <!-- end of Hero Content-->

</div><!-- #post-## -->


<div class="container-fluid">
	<div class="row hero-image--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="-400" data-aos-delay="100">

		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10">
						<img class='hero-image'src='<?php the_field('hero_image'); ?>' />
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

	</div>
</div>


<div class="container-fluid">
	<div class="row p-i-s--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10">
			<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 pb-5 pb-md-0">
				<h2 class="display-2">Challenge</h2>
			</div>
				<div class="col-12 col-sm-12 col-md-5 col-lg-4">
					<h4 class="display-4">Problem</h4>
					<p><?php the_field('problem'); ?></p>
					<h4 class="display-4">Insight</h4>
					<p><?php the_field('insight'); ?></p>
					<h4 class="display-4">Solution</h4>
					<p><?php the_field('solution'); ?></p>
					<a target="_blank" href="<?php the_field('prototype_link'); ?>"><button class="btn btn-tertiary">View Prototype<img src="<?php echo get_template_directory_uri() ?>/img/Arrow-white.svg"/></button></a>
				</div>
			</div>
			</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
	</div>
	</div>

	<div class="container-fluid">
	<div class="row process-image--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">

		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10">
						<img src='<?php the_field('process_image'); ?>' />
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

	</div>
	</div>

	<div class="container-fluid">
		<div class="row process--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
			<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-10 col-lg-10">
				<div class="row">
				<div class="col-12 col-sm-3 col-md-3 col-lg-3">
					<h3 class="display-3">Process</h3>
				</div>
				<div class="col-12 col-sm-9 col-md-9 col-lg-9">
					<div class="text-grid">
						<p><?php the_field('process'); ?></p>
					</div>
					</div>
				</div>
			</div>
			<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
		</div>
		</div>

		<div class="container-fluid">
		<div class="row design-system-image--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">

			<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			<div class="col-10 col-sm-10 col-md-10 col-lg-10">
							<img src='<?php the_field('design_system_image'); ?>' />
			</div>
			<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

		</div>
		</div>

		<div class="container-fluid">
			<div class="row design-system--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-10 col-lg-10">
					<div class="row">
					<div class="col-12 col-sm-3 col-md-3 col-lg-3">
						<h3 class="display-3">Design System</h3>
					</div>
					<div class="col-12 col-sm-9 col-md-9 col-lg-9">
						<div class="text-grid">
							<p><?php the_field('design_system'); ?></p>
						</div>
						</div>
					</div>
				</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			</div>
			</div>

			<div class="container-fluid">
			<div class="row design-grid-image--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">

				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-10 col-sm-10 col-md-10 col-lg-10">
								<img src='<?php the_field('design_grid_image'); ?>' />
				</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

			</div>
			</div>

			<div class="container-fluid pt-5" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="1500" data-aos-offset="100">
				<div class="row back--section">
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
					<div class="col-10 col-sm-10 col-md-10 col-lg-10">
						<a href="javascript:history.go(-1)" class="display-6 black"><img src="<?php echo get_template_directory_uri() ?>/img/Arrow-black.svg"/> Go Back</a>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				</div>
			</div>
