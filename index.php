<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aaron
 */

get_header();
aaron_jetpack_featured_posts();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		aaron_top_sections();

		/* This is the end of our top page section. Now lets show the latest posts: */
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			}
			the_posts_navigation();
		} else {
			get_template_part( 'content', 'none' );

		}

		aaron_bottom_sections();
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
