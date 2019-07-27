<?php
/**
 *  The template used for displaying the Highlights.
 *
 * @package Aaron
 */

/**
 * Frontpage Highlights
 */
function aaron_highlights() {
	if ( ! get_theme_mod( 'aaron_hide_highlight' ) ) {
		for ( $i = 1; $i < 10; $i++ ) {
			// Is this highlight visisble?
			if ( ! get_theme_mod( 'aaron_highlight' . $i . '_hide' ) ) {
				// Now check if there is any actual content to show.
				if ( get_theme_mod( 'aaron_highlight' . $i . '_headline' ) || get_theme_mod( 'aaron_highlight' . $i . '_text' ) || get_theme_mod( 'aaron_highlight' . $i . '_icon' ) && get_theme_mod( 'aaron_highlight' . $i . '_icon' ) !== 'no-icon' || get_theme_mod( 'aaron_highlight' . $i . '_image' ) ) {

					echo '<div class="highlights hl' . $i . '" style="background:' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_bgcolor', '#fafafa' ) ) . ';">';
					// Lets make the whole area clickable if there is a link.
					if ( get_theme_mod( 'aaron_highlight' . $i . '_link' ) ) {
						echo '<a href="' . esc_url( get_theme_mod( 'aaron_highlight' . $i . '_link' ) ) . '"';
						if ( get_theme_mod( 'aaron_highlight' . $i . '_target' ) ) {
							echo 'target="_blank" ';
						}
						echo '>';
					}

					// If there is an icon, show it unless there is also an image, then the image will replace the icon.
					if ( get_theme_mod( 'aaron_highlight' . $i . '_icon' ) && get_theme_mod( 'aaron_highlight' . $i . '_icon' ) !== 'no-icon' && ! get_theme_mod( 'aaron_highlight' . $i . '_image' ) ) {
						echo '<i aria-hidden="true" class="dashicons ' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_icon' ) ) . '" style="color:' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_textcolor', '#333333' ) ) . ';"></i>';
					}

					// If there is an image, show it.
					if ( get_theme_mod( 'aaron_highlight' . $i . '_image' ) ) {

						echo '<img src="' . esc_url( get_theme_mod( 'aaron_highlight' . $i . '_image' ) ) . '" class="highlight-img"';
						// Display the image alt text.
						$image_id  = attachment_url_to_postid( esc_url( get_theme_mod( 'aaron_highlight' . $i . '_image' ) ) );
						$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );

						if ( $image_alt ) {
							echo ' alt="' . esc_attr( $image_alt ) . '"';
						}
						echo '>';
					}

					if ( get_theme_mod( 'aaron_highlight' . $i . '_headline' ) ) {
						echo '<h2 style="color:' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_textcolor', '#333333' ) ) . ';">' .
						wp_kses_post( get_theme_mod( 'aaron_highlight' . $i . '_headline' ) ) . '</h2>';
					}
					if ( get_theme_mod( 'aaron_highlight' . $i . '_text' ) ) {
						echo '<p style="color:' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_textcolor', '#333333' ) ) . ';">' .
						wp_kses_post( get_theme_mod( 'aaron_highlight' . $i . '_text' ) ) . '</p>';
					}

					// Close the link.
					if ( get_theme_mod( 'aaron_highlight' . $i . '_link' ) ) {
						// Add a link text for screen readers if there is no link text.
						if ( ! get_theme_mod( 'aaron_highlight' . $i . '_headline' ) && ! get_theme_mod( 'aaron_highlight' . $i . '_text' ) ) {
							echo '<span class="screen-reader-text">' . esc_html__( 'Follow the link to learn more about this featured content.', 'aaron' ) . '</span>';
						}
						if ( get_theme_mod( 'aron_highlight' . $i . '_target' ) ) {
							echo '<span class="screen-reader-text">' . esc_html__( 'This link will open in a new tab.', 'aaron' ) . '</span>';
						}
						echo '</a>';
					}
					echo '</div>';
				}
			}
		}
	}
}
