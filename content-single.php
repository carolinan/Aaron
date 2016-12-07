<?php
/**
 * Display single posts.
 *
 * @package aaron
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'aaron-border' ); ?>>
	<header class="entry-header">
		<?php
		if ( ! aaron_get_meta( 'aaron_replace_title' ) ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		}
		aaron_posted_on();
		?>
	</header><!-- .entry-header -->

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
	<?php aaron_entry_footer(); ?>
</article><!-- #post-## -->
