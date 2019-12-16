<?php
/**
 * Template Name: Static and Featured
 *
 * Description: A Page Template that displays your static frontpage and featured content.
 *
 * @package Aaron
 */

get_header();
aaron_jetpack_featured_posts();
?>
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
get_sidebar();
get_footer();
