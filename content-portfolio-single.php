<?php
/**
 * Template for showing single portfolio items.
 *
 * @package aaron
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'aaron-border' );  ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aaron' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<?php
aaron_portfolio_footer();
