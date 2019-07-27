<?php
/**
 * The template part for displaying results in search pages.
 *
 * @link Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aaron
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'aaron-border' ); ?>>
	<header class="entry-header">
		<?php
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		if ( 'post' === get_post_type() ) {
			aaron_posted_on();
		}
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php
	if ( ! get_theme_mod( 'aaron_hide_meta_search' ) ) {
		aaron_entry_footer();
	}
	?>
</article><!-- #post-## -->
