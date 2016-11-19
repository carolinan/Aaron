<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package aaron
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('frontpage-top'); ?>>
	<?php
	if ( ! aaron_get_meta( 'aaron_replace_title' ) ) {
		if ( is_page_template( 'templates/sections.php' ) ) {
			echo '<header class="entry-header">';
			the_title( '<h2 class="entry-title">', '</h2>' );
			echo '</header><!-- .entry-header -->';
		} else {
			echo '<header class="entry-header">';
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo '</header><!-- .entry-header -->';
		}
	}
	?>
	<div class="entry-content">
		<?php
		if ( ! aaron_get_meta( 'aaron_featured_image_header' ) ) {
			if ( has_post_thumbnail() && ! aaron_get_meta( 'aaron_hide_image' ) ) {
				the_post_thumbnail();
			}
		}

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aaron' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
		<?php
		/* Display jetpack's share if it's active*/
		if ( function_exists( 'sharing_display' ) ) {
			echo sharing_display();
		}
		?>
</article><!-- #post-## -->
