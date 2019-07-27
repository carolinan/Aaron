<?php
/**
 * The template for showing single testimonials.
 * Testimonials reqires jetpack to be installed.
 * https://jetpack.com/support/custom-content-types/
 *
 * @package Aaron
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<?php
	the_title( '<h2 class="entry-title">-', '</h2>' );

	if ( ! aaron_get_meta( 'aaron_featured_image_header' ) ) {
		if ( has_post_thumbnail() && ! aaron_get_meta( 'aaron_hide_image' ) ) {
			the_post_thumbnail();
		}
	}
	?>
</article><!-- #post-## -->
