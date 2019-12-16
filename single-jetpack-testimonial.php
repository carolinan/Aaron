<?php
/**
 * The Template for displaying jetpack testimonials.
 *
 * @link Learn more: https://jetpack.com/support/custom-content-types/
 *
 * @package Aaron
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content', 'testimonial-single' );
		}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
