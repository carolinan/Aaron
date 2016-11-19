<?php

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

					echo '<div class="highlights hl' . $i .'" style="background:' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_bgcolor', '#fafafa' ) ) . ';">';
					// Lets make the whole area clickable if there is a link.
					if ( get_theme_mod( 'aaron_highlight' . $i . '_link' ) ) {
						echo '<a href="' . esc_url( get_theme_mod( 'aaron_highlight' . $i . '_link' ) ) . '">';
					}

					// If there is an icon, show it unless there is also an image, then the image will replace the icon.
					if ( get_theme_mod( 'aaron_highlight' . $i . '_icon' ) && get_theme_mod( 'aaron_highlight' . $i . '_icon' ) !== 'no-icon' && ! get_theme_mod( 'aaron_highlight' . $i . '_image' ) ) {
						echo '<i aria-hidden="true" class="dashicons ' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_icon' ) ) . '" style="color:' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_textcolor', '#333333' ) ) . ';"></i>';
					}

					// If there is an image, show it.
					if ( get_theme_mod( 'aaron_highlight' . $i . '_image' ) ) {
						echo '<img src="' . esc_url( get_theme_mod( 'aaron_highlight' . $i . '_image' ) ) . '" class="highlight-img"' ;
						// Include the alt attribute.
						if ( get_theme_mod( 'aaron_highlight' . $i . '_alt' ) ) {
							echo ' alt="' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_alt' ) ) . '" >' ;
						} else {
							// The image is decorative, add an empty alt attribute.
							echo ' alt="" >';
						}
					}
					if ( get_theme_mod( 'aaron_highlight' . $i . '_link' ) ) {
						echo '<a href="' . esc_url( get_theme_mod( 'aaron_highlight' . $i . '_link' ) ) . '">';
					}
					if ( get_theme_mod( 'aaron_highlight' . $i . '_headline' ) ) {
						echo '<h2 style="color:' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_textcolor', '#333333' ) ) . ';">' . 
						get_theme_mod( 'aaron_highlight' . $i . '_headline' ) . '</h2>';
					}
					if ( get_theme_mod( 'aaron_highlight' . $i . '_text' ) ) {
						echo '<p style="color:' . esc_attr( get_theme_mod( 'aaron_highlight' . $i . '_textcolor', '#333333' ) ) . ';">' . 
						get_theme_mod( 'aaron_highlight' . $i . '_text' ) . '</p>';
					}
					// Close the link.
					if ( get_theme_mod( 'aaron_highlight' . $i . '_link' ) ) {
						echo '</a>';
					}

					echo '</div>';
				}
			}
		}
	}
}
