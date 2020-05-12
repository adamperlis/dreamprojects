<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>


				<?php while ( have_posts() ) : the_post(); ?>


					<?php
						 if( get_post_type() === 'brief' ) {
									get_template_part( 'loop-templates/content', 'brief' );
						 }else{
							 		get_template_part( 'loop-templates/content', 'winner-nominee' );
						 }
				 	?>




					<?php understrap_post_nav(); ?>



				<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
