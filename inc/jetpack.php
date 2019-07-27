<?php
/**
 * Jetpack Compatibility File
 *
 * @link See: https://jetpack.me/
 *
 * @package Aaron
 */

/**
 * Setup the jetpack support
 */
function aaron_jetpack_setup() {
	/**
	 * Add theme support for Infinite Scroll.
	 *
	 * @link Learn more: https://jetpack.me/support/infinite-scroll/
	 */
	add_theme_support(
		'infinite-scroll',
		array(
			'container' => 'main',
			'footer'    => 'page',
		)
	);
	// Create custom image sizes for the Testimonials.
	add_image_size( 'aaron-jetpack-testimonial', 100, 100 );
	add_theme_support( 'jetpack-responsive-videos' );
	add_theme_support( 'jetpack-testimonial' );
	add_theme_support( 'jetpack-portfolio' );

	/**
	 * Support for Jetpack featured-content.
	 *
	 * @link Learn more: https://jetpack.com/support/featured-content/#theme-support
	 */
	add_theme_support(
		'featured-content',
		array(
			'filter'     => 'aaron_get_featured_posts',
			'max_posts'  => 6,
			'post_types' => array( 'post', 'page' ),
		)
	);
}
add_action( 'after_setup_theme', 'aaron_jetpack_setup' );

/**
 * Getter function for the Jetpack featured content.
 */
function aaron_get_featured_posts() {
	return apply_filters( 'aaron_get_featured_posts', array() );
}

/**
 * Checks if there is at least one featured post.
 *
 * @param int $minimum The minimum number of posts to check for.
 */
function aaron_has_featured_posts( $minimum = 1 ) {
	if ( is_paged() ) {
		return false;
	}

	$minimum        = absint( $minimum );
	$featured_posts = apply_filters( 'aaron_get_featured_posts', array() );

	if ( ! is_array( $featured_posts ) ) {
		return false;
	}

	if ( $minimum > count( $featured_posts ) ) {
		return false;
	}

	return true;
}

/**
 * Print the Jetpack featured posts.
 */
function aaron_jetpack_featured_posts() {
	if ( aaron_has_featured_posts( 1 ) ) {
		global $post;
		?>
		<section class="featured-wrap">
		<h2 class="featured-headline"><?php echo esc_html( get_theme_mod( 'aaron_featured_headline', __( 'Featured', 'aaron' ) ) ); ?></h2>
		<?php
		$featured_posts = aaron_get_featured_posts();
		foreach ( $featured_posts as $post ) :
			setup_postdata( $post );

			echo '<div class="featured-post aaron-border">';
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'aaron-featured-posts-thumb' );
			}

			the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			echo '</div>';
		endforeach;

		wp_reset_postdata();
		echo '</section>';
	}
}

/**
 * Remove the jetpack likes and sharing_display filter so that we can resposition them to our post footer.
 *
 * @link https://jetpack.com/2013/06/10/moving-sharing-icons/
 */
function aaron_move_share() {
	remove_filter( 'the_content', 'sharing_display', 19 );
	remove_filter( 'the_excerpt', 'sharing_display', 19 );

	if ( class_exists( 'Jetpack_Likes' ) ) {
		remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
	}
}
add_action( 'loop_start', 'aaron_move_share' );
