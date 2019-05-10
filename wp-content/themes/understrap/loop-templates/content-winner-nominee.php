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

<article class="container-fluid hero--winners-nominees" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row <?php echo get_field('award_designation') == 'winner' ? 'winner' : 'nominee' ?>">
		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-10">
			<div class="container-fluid">

				<div class="row">
					<div class="col-1 col-sm-7 col-md-7 col-lg-7"></div>
					<div class="col-11 col-sm-4 col-md-4 col-lg-4">
						<h4 class="display-4"><?php echo get_the_date( 'F, Y' );?></h4>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				</div>

				<div class="row">
					<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
					<div class="col-11 col-sm-4 col-md-7 col-lg-7 padding-bottom padding-top">
						<h1 class="display-1"><?php echo get_field('award_designation') == 'winner' ? 'Winner' : 'Nominee' ?></h1>
					</div>
					<div class="col-1 col-sm-4 col-md-4 col-lg-3"></div>
				</div>

				<div class="row">
					<div class="col-1 col-sm-7 col-md-7 col-lg-7"></div>
					<div class="col-11 col-sm-4 col-md-4 col-lg-4 padding-bottom">
						<h7 class="display-7"><?php the_title(); ?></h7>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				</div>

				<div class="row">
					<div class="col-1 col-sm-7 col-md-7 col-lg-7"></div>
					<div class="col-5 col-sm-2 col-md-2 col-lg-2">
						<div class="container-fluid">
							<h4 class="display-4">Designer</h4>
							<p class="display-5"><?php the_field('designer_name'); ?></p>
							<ul class="social">
								<?php if( get_field('linkedin') ): ?>
									<li><a href="<?php echo the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a></li>
								<?php endif; ?>
								<?php if( get_field('instagram') ): ?>
									<li><a href="<?php echo the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a></li>
								<?php endif; ?>
								<?php if( get_field('dribbble') ): ?>
									<li><a href="<?php echo the_field('dribbble'); ?>"><i class="fa fa-dribbble"></i></a></li>
								<?php endif; ?>
								<?php if( get_field('behance') ): ?>
									<li><a href="<?php echo the_field('behance'); ?>"><i class="fa fa-behance"></i></a></li>
								<?php endif; ?>
								<?php if( get_field('portfolio_url') ): ?>
									<li><a href="<?php echo the_field('portfolio_url'); ?>"><i class="fa fa-link"></i></a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>

					<div class="col-5 col-sm-2 col-md-2 col-lg-2">
						<div class="container-fluid">
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
					</div>

					<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
				</div>

				<div class="container-fluid">
					<div class="row scroll-text">
						<div class="col-12 col-sm-1 col-md-1 col-lg-1"><span class="display-5 scroll-text-alignment">Scroll</span></div>
					</div>
				</div>

			</div>
		</div>
		</div>

		<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>

	</div> <!-- end of Hero Content-->

</article><!-- #post-## -->


<div class="container-fluid">
	<div class="row hero-image--section">

		<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-8">
						<img class='hero-image'src='<?php the_field('hero_image'); ?>' />
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>

	</div>
</div>


<div class="container-fluid">
	<div class="row p-i-s--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="2000" data-aos-offset="600">
		<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
		<div class="col-4 col-sm-4 col-md-4 col-lg-4">
			<h2 class="display-2">Challenge</h2>
		</div>
		<div class="col-12 col-sm-5 col-md-5 col-lg-4">
			<div class="container-fluid">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<h4 class="display-4">Problem</h4>
						<p><?php the_field('problem'); ?></p>
						<h4 class="display-4">Insight</h4>
						<p><?php the_field('insight'); ?></p>
						<h4 class="display-4">Solution</h4>
						<p><?php the_field('solution'); ?></p>
					</div>
				</div>
			</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
	</div>
	</div>

	<div class="container-fluid">
	<div class="row process-image--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="2000" data-aos-offset="300">

		<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
		<div class="col-10 col-sm-10 col-md-10 col-lg-8">
						<img src='<?php the_field('process_image'); ?>' />
		</div>
		<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>

	</div>
	</div>

	<div class="container-fluid">
		<div class="row process--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="2000" data-aos-offset="100">
			<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
			<div class="col-3 col-sm-3 col-md-3 col-lg-3">
				<h3 class="display-3">Process</h3>
			</div>
			<div class="col-12 col-sm-7 col-md-7 col-lg-5">
				<div class="container-fluid">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12">
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
		<div class="row design-system-image--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="2000" data-aos-offset="300">

			<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
			<div class="col-10 col-sm-10 col-md-10 col-lg-8">
							<img src='<?php the_field('design_system_image'); ?>' />
			</div>
			<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>

		</div>
		</div>

		<div class="container-fluid">
			<div class="row design-system--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="2000" data-aos-offset="100">
				<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
				<div class="col-3 col-sm-3 col-md-3 col-lg-3">
					<h3 class="display-3">Design System</h3>
				</div>
				<div class="col-12 col-sm-7 col-md-7 col-lg-5">
					<div class="container-fluid">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="text-grid">
									<p><?php the_field('design_system'); ?></p>
								</div>
							</div>
						</div>
					</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
			</div>
			</div>

			<div class="container-fluid">
			<div class="row design-grid-image--section" data-aos="fade-up" data-aos-easing="ease" data-aos-mirror="true" data-aos-duration="2000" data-aos-offset="300">

				<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
				<div class="col-10 col-sm-10 col-md-10 col-lg-8">
								<img src='<?php the_field('design_grid_image'); ?>' />
				</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>

			</div>
			</div>

			<div class="container-fluid">
				<div class="row back--section">
					<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
					<div class="col-3 col-sm-1 col-md-1 col-lg-1"><img src="/wp-content/themes/understrap/img/Arrow-black.svg" /></div>
					<div class="col-5 col-sm-4 col-md-4 col-lg-4">
						<a class="link" href="/<?php echo get_field('award_designation') == 'winner' ? 'winners' : 'nominees' ?>"><span class="display-2 black">Back to <?php echo get_field('award_designation') == 'winner' ? 'Winners' : 'Nominees' ?></span></a>
					</div>
					<div class="col-1 col-sm-1 col-md-1 col-lg-2"></div>
				</div>
			</div>
