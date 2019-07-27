<?php
/**
 * The sidebars containing the main widget areas.
 *
 * @package Aaron
 */

// If we are viewing the front page or the blog index, and if the front page sidebar is active: show the front page sidebar.
if ( is_front_page() || is_home() ) {
	if ( is_active_sidebar( 'sidebar-front' ) ) {
		?>
		<div id="secondary" class="widget-area" role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">
			<h2 class="screen-reader-text"><?php echo esc_html( get_theme_mod( 'aaron_sidebar_screen_reader', __( 'Sidebar', 'aaron' ) ) ); ?></h2>
			<?php dynamic_sidebar( 'sidebar-front' ); ?>
		</div><!-- #secondary -->
		<?php
	}
} else {
	// If we are viewing any other page, display the regular sidebar, but only if it is active.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
	?>
	<div id="secondary" class="widget-area" role="complementary">
		<h2 class="screen-reader-text"><?php echo esc_html( get_theme_mod( 'aaron_sidebar_screen_reader', __( 'Sidebar', 'aaron' ) ) ); ?></h2>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
	<?php
}
