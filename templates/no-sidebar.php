<?php
/**
 * Template Name: No sidebar
 *
 * Description: A Page Template that displays your page content but not the sidebar.
 *
 * @package Aaron
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'content', 'page' );
			// If comments are open , load up the comment template.
			if ( comments_open() ) {
				comments_template();
			}
		}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
