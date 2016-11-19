<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package aaron
 */

get_header();

if ( have_posts() && is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
	if ( have_posts() ) : ?>
		<section class="featured-wrap">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Portfolio','aaron' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="featured-post aaron-border">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'aaron-featured-posts-thumb' );
						}
						the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
						echo get_the_term_list( $post->ID, 'jetpack-portfolio-type', '<span class="portfolio-type-links">',', ','</span>' );
					?>
					</div>
				<?php endwhile; ?>
		</section>
		<?php
	endif;
	get_footer();

} else { ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	get_sidebar();
	get_footer();
}
