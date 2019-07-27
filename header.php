<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
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
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aaron' ); ?></a>
	<?php
	if ( has_nav_menu( 'header' ) ) {
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false">
			<span class="screen-reader-text"><?php esc_html_e( 'Main Menu', 'aaron' ); ?></span></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header',
					'fallback_cb'    => false,
					'depth'          => 2,
					'container'      => false,
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<?php
	}

	if ( is_home() || is_front_page() || is_page_template( array( 'templates/header-and-footer.php', 'templates/landingpage.php', 'templates/landingpage.php', 'templates/sections.php', 'templates/static-and-featured.php' ) ) || is_singular() && aaron_get_meta( 'aaron_show_header' ) ) {
		?>
		<header id="masthead" class="site-header" role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<div class="site-branding">	
				<?php
				if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}
				// If we are viewing a post or page, and we want to combine it with the header section.
				if ( is_singular() && aaron_get_meta( 'aaron_show_header' ) || is_home() && aaron_get_meta( 'aaron_show_header' ) && ! is_front_page() ) {
					// If it is a post or page, and we want to replace the site title, we want it to be a h1.
					if ( aaron_get_meta( 'aaron_replace_title' ) ) {
						if ( is_home() ) {
							echo '<h1 class="site-title" itemprop="headline">' . get_the_title( get_option( 'page_for_posts' ) ) . '</h1>';
						} else {
							the_title( '<h1 class="site-title" itemprop="headline">', '</h1>' );
						}
					} else {
						// But if it is a post or page, and we are keeping the site title, then we want it to be a paragraph. We also want a link back to the home page.
						if ( display_header_text() ) {
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						}
					}

					if ( ! aaron_get_meta( 'aaron_hide_action_meta' ) ) {
						aaron_action();
					}

					if ( ! aaron_get_meta( 'aaron_hide_highlights_meta' ) ) {
						aaron_highlights();
					}

					if ( is_active_sidebar( 'sidebar-header' ) ) {
						?>
						<div class="widget-area" role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar" 
						aria-label="<?php esc_attr_e( 'Complementary widget area', 'aaron' ); ?>">
							<?php dynamic_sidebar( 'sidebar-header' ); ?>
						</div><!-- #header widget -->
						<?php
					}

					if ( ! aaron_get_meta( 'aaron_hide_tagline' ) ) {
						if ( display_header_text() && get_bloginfo( 'description' ) ) {
							?>
							<div class="site-description" itemprop="description"><?php bloginfo( 'description' ); ?></div>
							<?php
						}
					}
				} else {
					// If it's not a post or page combined with a header, show the site title in a h1, without a link.
					if ( display_header_text() ) {
						echo '<h1 class="site-title" itemprop="headline">' . esc_html( get_bloginfo( 'name' ) ) . '</h1>';
					} else {
						// If there is no visible site title, make sure there is still a h1 for screen reader.
						echo '<h1 class="screen-reader-text">' . esc_html( get_bloginfo( 'name' ) ) . '</h1>';
					}

					aaron_action();

					aaron_highlights();

					if ( is_active_sidebar( 'sidebar-header' ) ) {
						?>
						<div class="widget-area" role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar" 
						aria-label="<?php esc_attr_e( 'Complementary widget area', 'aaron' ); ?>">
							<?php dynamic_sidebar( 'sidebar-header' ); ?>
						</div><!-- #header widget -->
						<?php
					}

					if ( display_header_text() && get_bloginfo( 'description' ) ) {
						?>
						<div class="site-description" itemprop="description"><?php bloginfo( 'description' ); ?></div>
						<?php
					}
				}
				?>
				</div><!-- .site-branding -->
			</header><!-- #masthead -->
	<?php } ?>

<div id="content" class="site-content">
