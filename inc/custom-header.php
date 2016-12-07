<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package aaron
 */

/**
 * Set up the WordPress core custom header feature.
 */
function aaron_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'aaron_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/images/header.jpg',
		'default-text-color'     => 'ffffff',
		'uploads'                => true,
		'flex-height'            => true,
		'flex-width'             => true,
		'width'                  => 1920,
		'height'                 => 1200,
		'wp-head-callback'       => 'aaron_customize_css',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
		)
	) );

	register_default_headers( array(
		'mountain' => array(
		'url'           => '%s/images/header.jpg',
		'thumbnail_url' => '%s/images/header.jpg',
		'description'   => __( 'Mountain', 'aaron' ),
		),
		)
	);
}
add_action( 'after_setup_theme', 'aaron_custom_header_setup' );


function aaron_featured_image_header_css() {
	/* Are we displaying the featured image or the regular background? */
	if ( is_home() ) {
		$postid = get_option( 'page_for_posts' );
	} else {
		$postid = get_the_ID();
	}

	$header_image = get_header_image();
	$featured_header = wp_get_attachment_image_src( get_post_thumbnail_id( $postid ), 'aaron-featured-image-header' );

	if ( is_page_template( 'templates/landingpage.php' ) ) {
		if ( $featured_header ) {
			?>
			html { 
				  background: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgcolor', '#4777a6' ) ) ?> url(<?php echo esc_url( $featured_header[0] ); ?>) no-repeat center center fixed; 
				  -webkit-background-size: cover;
				  -moz-background-size: cover;
				  -o-background-size: cover;
				  background-size: cover;
				}
		<?php
		} elseif ( ! empty( $header_image ) ) { ?>
				html { 
				  background: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgcolor', '#4777a6' ) ) ?> url(<?php header_image(); ?>) no-repeat center center fixed; 
				  -webkit-background-size: cover;
				  -moz-background-size: cover;
				  -o-background-size: cover;
				  background-size: cover;
				}
		<?php
		} else {
		?>
			html { background: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgcolor', '#4777a6' ) ) ?>; }
		<?php
		}
		?>
			body {background:none;}
	<?php
	} else {
		// Single view.
		if ( is_singular() && aaron_get_meta( 'aaron_show_header' ) && aaron_get_meta( 'aaron_featured_image_header' ) && $featured_header
			&& ! is_page_template( 'templates/landingpage.php' )  || is_page_template( 'templates/header-and-footer.php' ) && aaron_get_meta( 'aaron_show_header' )
			&& aaron_get_meta( 'aaron_featured_image_header' ) && $featured_header ) {
			?>
			.site-header {
			background: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgcolor', '#4777a6' ) ) ?> url(<?php echo esc_url( $featured_header[0] ); ?>) 
			<?php echo esc_attr( get_theme_mod( 'aaron_header_bgrepeat', 'no-repeat' ) ); ?> <?php echo esc_attr( get_theme_mod( 'aaron_header_bgpos', 'center center' ) ); ?>;
			background-size: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgsize', 'cover' ) ); ?>;
			}
		<?php
		// Posts page (blog listing).
		} elseif ( is_home() && aaron_get_meta( 'aaron_show_header' ) && aaron_get_meta( 'aaron_featured_image_header' ) && ! is_front_page() && $featured_header
			&& ! is_page_template( 'templates/landingpage.php' ) ) {
			?>
			.site-header {
			background: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgcolor', '#4777a6' ) ) ?> url(<?php echo esc_url( $featured_header[0] ); ?>) 
			<?php echo esc_attr( get_theme_mod( 'aaron_header_bgrepeat', 'no-repeat' ) ); ?> <?php echo esc_attr( get_theme_mod( 'aaron_header_bgpos', 'center center' ) ); ?>;
			background-size: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgsize', 'cover' ) ); ?>;
			}
		<?php
		// Front page, or if no featured image is chosen.
		} else {
			if ( ! empty( $header_image ) ) {
			?>
				.site-header {
				background: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgcolor', '#4777a6' ) ) ?> url(<?php header_image(); ?>) 
				<?php echo esc_attr( get_theme_mod( 'aaron_header_bgrepeat', 'no-repeat' ) ); ?> <?php echo esc_attr( get_theme_mod( 'aaron_header_bgpos', 'center center' ) ); ?>;
				background-size: <?php echo esc_attr( get_theme_mod( 'aaron_header_bgsize', 'cover' ) ); ?>;
				}

			<?php
			/* No header image has been chosen, check for background color: */
			} else {
				echo '.site-header { background:' . esc_attr( get_theme_mod( 'aaron_header_bgcolor', '#4777a6' ) ) . ';}';
			}
		}
	} // End if().
}

/**
 *  Call to action.
 */
function aaron_action() {
	if ( ! get_theme_mod( 'aaron_hide_action' ) ) {?>
			<?php
			if ( get_theme_mod( 'aaron_action_text' ) ) {
				echo '<div id="action">';
				if ( get_theme_mod( 'aaron_action_link' ) ) {
					echo '<a href="' . esc_url( get_theme_mod( 'aaron_action_link' ) ) . '">';
				}
				echo esc_html( get_theme_mod( 'aaron_action_text' ) );
				if ( get_theme_mod( 'aaron_action_link' ) ) {
					echo '</a>';
				}
				echo '</div>';
			} else {
				if ( is_user_logged_in() ) {
					echo '<div id="action">';
					echo '<a href="' . esc_url( home_url( '/wp-admin/customize.php' ) ) . '">' . esc_html__( 'Click here to setup your Call to Action', 'aaron' ) . '</a>';
					echo '</div>';
				}
			}
			?>
	<?php
	}
}
