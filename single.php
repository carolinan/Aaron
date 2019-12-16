<?php
/**
 * The template for displaying all single posts.
 *
 * @package Aaron
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content', 'single' );
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
get_sidebar();
get_footer();
