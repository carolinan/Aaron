<?php
/**
 * The template used for displaying page content in sections.
 *
 * @package Aaron
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( ! aaron_get_meta( 'aaron_replace_title' ) ) {
		echo '<header class="entry-header">';
			the_title( '<h2 class="entry-title">', '</h2>' );
		echo '</header><!-- .entry-header -->';
	}
	?>
	<div class="entry-content">
		<?php
		if ( ! aaron_get_meta( 'aaron_show_header' ) || ! aaron_get_meta( 'aaron_featured_image_header' ) ) {
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
		}

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aaron' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
		<?php
		/* Display jetpack's share if it's active*/
		if ( function_exists( 'sharing_display' ) ) {
			sharing_display( '', true );
		}
		?>
</article><!-- #post-## -->
