<?php
/**
 * Template Name: Sections
 *
 * Description: A Page Template that displays your chosen section pages and your static frontpage, without listing your blog content.
 *
 * @package aaron
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			if ( get_theme_mod( 'aaron_top_section1' ) || get_theme_mod( 'aaron_top_section2' ) || get_theme_mod( 'aaron_top_section3' ) ) {
				$args = array(
					'post_type' => 'page',
					'orderby' => 'post__in',
					'post__in' => array(
						get_theme_mod( 'aaron_top_section1' ),
						get_theme_mod( 'aaron_top_section2' ),
						get_theme_mod( 'aaron_top_section3' ),
					),
				);

				$top_section_query = new WP_Query( $args );

		     	if ( $top_section_query->have_posts() ) {
		     		while ( $top_section_query->have_posts() ) : $top_section_query->the_post();
						get_template_part( 'content', 'page' );
					endwhile;
					wp_reset_postdata();
				}
			}
			/* This is the end of our top page section. Now lets show the latest posts: */
			while ( have_posts() ) : the_post();
				 get_template_part( 'content', 'section' );
			endwhile;

			/*
			* We have finished printing the latest posts. Check if there are bottom section pages to show:
			*/
			if ( get_theme_mod( 'aaron_bottom_section1' ) or get_theme_mod( 'aaron_bottom_section2' ) or get_theme_mod( 'aaron_bottom_section3' ) ) {

				$args = array(
					'post_type' => 'page',
					'orderby' => 'post__in',
					'post__in' => array(
						get_theme_mod( 'aaron_bottom_section1' ),
						get_theme_mod( 'aaron_bottom_section2' ),
						get_theme_mod( 'aaron_bottom_section3' ),
						),
				);

		     	$bottom_section_query = new WP_Query( $args );

		     	if ( $bottom_section_query->have_posts() ) {
			     	while ( $bottom_section_query->have_posts() ) : $bottom_section_query->the_post();
						get_template_part( 'content', 'page' );
					endwhile;
					wp_reset_postdata();
				}
			}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
