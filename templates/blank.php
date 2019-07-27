<?php
/**
 * Template Name: Blank
 * Template Post Type: post, page
 * Description: Use this template if you only want to show your Gutenberg blocks. This template does not show the header, footer or the footer widget area.
 *
 * @package Aaron
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="https://schema.org/WebPage">
<div id="page" class="hfeed site">
<div id="content" class="site-content">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'content-page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

	endwhile; // End of the loop.
	?>
</div><!-- #content -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
