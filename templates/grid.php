<?php
/**
 * Template Name: Grid
 *
 * Description: A Page Template that displays your posts in a grid with a similar design to the featured posts.
 *
 * @package Aaron
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="featured-wrap">
			<div class="grid-sizer"></div>
			<?php
			$args = array(
				'post_type'   => 'post',
				'post_status' => 'publish',
			);

			$grid_query = new WP_Query( $args );

			if ( $grid_query->have_posts() ) {
				while ( $grid_query->have_posts() ) :
					$grid_query->the_post();
					echo '<div class="grid-item featured-post aaron-border">';
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'aaron-featured-posts-thumb' );
					}
					the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
					echo '</div>';

				endwhile;
				wp_reset_postdata();
			}
			?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
