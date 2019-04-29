<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article class="container-fluid hero--winners-nominees" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row <?php echo get_field('award_designation') == 'winner' ? 'winner' : 'nominee' ?>">

			<div class="container">

			<div class="row">
				<div class="col-7 col-sm-7 col-md-7 col-lg-7"></div>
				<div class="col-4 col-sm-4 col-md-4 col-lg-4">
						<h4 class="display-4"><?php echo get_the_date( 'F, Y' );?></h4>
				</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row">
				<div class="col-sm-1 col-md-1 col-lg-1"></div>
				<div class="col-12 col-sm-4 col-md-7 col-lg-7">
						<h1 class="display-1"><?php echo get_field('award_designation') == 'winner' ? 'Winner' : 'Nominee' ?></h1>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
			</div>

			<div class="row">
				<div class="col-7 col-sm-7 col-md-7 col-lg-7"></div>
				<div class="col-4 col-sm-4 col-md-4 col-lg-4">
						<h7 class="display-7"><?php the_title(); ?></h7>
				</div>
				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			<div class="row">
				<div class="col-7 col-sm-7 col-md-7 col-lg-7"></div>
				<div class="col-2 col-sm-2 col-md-2 col-lg-2">
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

				<div class="col-2 col-sm-2 col-md-2 col-lg-2">
					<div class="container-fluid">
						<h4 class="display-4">Skills</h4>
						<p class="display-5"><?php the_field('skill'); ?></p>
					</div>
				</div>

				<div class="col-1 col-sm-1 col-md-1 col-lg-1"></div>
			</div>

			</div>




			<div class="row scroll-text">
				<div class="col-sm-1 col-md-1"><span class="display-5">Scroll</span></div>
			</div>

		</div>

	</header><!-- .entry-header -->

</article><!-- #post-## -->
