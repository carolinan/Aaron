<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Aaron
 */

?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
	<h2 class="screen-reader-text"><?php echo esc_html( get_theme_mod( 'aaron_footer_screen_reader', __( 'Footer Content', 'aaron' ) ) ); ?></h2>
	<?php
	if ( is_active_sidebar( 'sidebar-2' ) ) {
		?>
		<div class="widget-area" role="complementary" itemscope="itemscope" itemtype="https://schema.org/WPSideBar"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
		<?php
	}

	if ( has_nav_menu( 'social' ) ) {
		?>
		<nav class="social-menu" role="navigation" aria-label="<?php esc_attr_e( 'Social links', 'aaron' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'social',
				'fallback_cb'    => false,
				'depth'          => 1,
				'link_before'    => '<span class="screen-reader-text">',
				'link_after'     => '</span><i class="fas fa-link"></i>',
			)
		);
		?>
		</nav><!-- #social-menu -->
		<?php
	}
	?>
	<div class="site-info">
	<?php
	if ( is_active_sidebar( 'sidebar-copyright' ) ) {
		?>
		<div class="widget-area" role="complementary"><?php dynamic_sidebar( 'sidebar-copyright' ); ?></div>
		<?php
	}

	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span class="sep"> | </span>' );
	}

	if ( ! get_theme_mod( 'aaron_hide_credits' ) ) {
		?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'aaron' ) ); ?>" class="credit">
		<?php printf( esc_html__( 'Proudly powered by %s', 'aaron' ), 'WordPress' ); ?></a>
		<span class="sep"> | </span>
		<a href="<?php echo esc_url( 'https://aaron.theme.tips' ); ?>" rel="nofollow">
		<?php
		/* translators: %1$s: Theme name */
		printf( esc_html__( 'Theme: %1$s by Carolina', 'aaron' ), 'Aaron' );
		?>
		</a>
		<?php
	}
	?>
	</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
