<?php
/**
 * The Template for displaying Jetpack portfolio projects.
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
			get_template_part( 'content', 'portfolio-single' );
			the_post_navigation();
			// If comments are open, load up the comment template.
			if ( comments_open() ) {
				comments_template();
			}
		}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
