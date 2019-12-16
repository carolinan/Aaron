<?php
/**
 * The template for displaying search results pages.
 *
 * @package Aaron
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) {
			?>

			<header class="page-header">
				<h1 class="page-title">
				<?php
				/* translators: %s: search terms */
				printf( esc_html__( 'Search Results for: %s', 'aaron' ), '<span>' . get_search_query() . '</span>' );
				?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) {
				the_post();
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
			}

			the_posts_navigation(
				array(
					'prev_text' => __( 'Previous page', 'aaron' ),
					'next_text' => __( 'Next page', 'aaron' ),
				)
			);

			/* If the search is not visible in the menu, and there is only one page of search results, display a search form on the search page. */
			if ( $GLOBALS['wp_query']->max_num_pages < 2 && get_theme_mod( 'aaron_hide_search' ) ) {
				echo '<span class="screen-reader-text">' . esc_html__( 'Would you like to search again?', 'aaron' ) . '</span><br/>';
				get_search_form();
			}
		} else {
			get_template_part( 'content', 'none' );
		}
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
