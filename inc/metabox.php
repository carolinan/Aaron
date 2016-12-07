<?php
/**
 * Aaron Post Meta
 *
 * @package aaron
 */

/**
 * Allows the user to display the header on individual posts or pages.
 * Thanks to http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */
function aaron_get_meta( $value ) {
	if ( is_home() ) {
		$postid = get_option( 'page_for_posts' );
	} else {
		$postid = get_the_ID();
	}

	$field = get_post_meta( $postid, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function aaron_add_meta_boxes() {
	$screens = array( 'post', 'page' );

	foreach ( $screens as $screen ) {
		add_meta_box(
			'header_settings',
			__( 'Individual header and image settings', 'aaron' ),
			'aaron_meta_form',
			$screen
		);
	}
}
add_action( 'add_meta_boxes', 'aaron_add_meta_boxes' );

/**
 * The form in the post meta section.
*/
function aaron_meta_form( $post ) {
	wp_nonce_field( '_header_settings_nonce', 'aaaron_meta_nonce' ); ?>
	<p>
		<input type="checkbox" name="aaron_show_header" id="aaron_show_header" value="show-header" <?php echo ( aaron_get_meta( 'aaron_show_header' ) === 'show-header' ) ? 'checked' : ''; ?>>
		<label for="aaron_show_header"><?php esc_html_e( 'Show the header.', 'aaron' ); ?></label>
	</p>
	<p>
		<input type="checkbox" name="aaron_featured_image_header" id="aaron_featured_image_header" value="featured-image-header" <?php echo ( aaron_get_meta( 'aaron_featured_image_header' ) === 'featured-image-header' ) ? 'checked' : ''; ?>>
		<label for="aaron_featured_image_header"><?php esc_html_e( 'Use the featured image as header image. This requires the header to be active, and a featured image to be set. The image will inherit the background position from the default header.', 'aaron' ); ?></label>	
	</p>
	<p>
		<input type="checkbox" name="aaron_hide_action_meta" id="aaron_hide_action_meta" value="hide_action" <?php echo ( aaron_get_meta( 'aaron_hide_action_meta' ) === 'hide_action' ) ? 'checked' : ''; ?>>
		<label for="aaron_hide_action_meta"><?php esc_html_e( 'Hide the Call to Action button.', 'aaron' ); ?></label>	
	</p>
	<p>
		<input type="checkbox" name="aaron_hide_highlights_meta" id="aaron_hide_highlights_meta" value="hide_highlights" <?php echo ( aaron_get_meta( 'aaron_hide_highlights_meta' ) === 'hide_highlights' ) ? 'checked' : ''; ?>>
		<label for="aaron_hide_highlights_meta"><?php esc_html_e( 'Hide the Highlights.', 'aaron' ); ?></label>	
	</p>
	<p>
		<input type="checkbox" name="aaron_hide_tagline" id="aaron_hide_tagline" value="hide_tagline" <?php echo ( aaron_get_meta( 'aaron_hide_tagline' ) === 'hide_tagline' ) ? 'checked' : ''; ?>>
		<label for="aaron_hide_tagline"><?php esc_html_e( 'Hide the site Tag line (Description).', 'aaron' ); ?></label>	
	</p>
	<p>
		<input type="checkbox" name="aaron_replace_title" id="aaron_replace_title" value="replace_title" <?php echo ( aaron_get_meta( 'aaron_replace_title' ) === 'replace_title' ) ? 'checked' : ''; ?>>
		<label for="aaron_replace_title"><?php esc_html_e( 'Replace the site title in the header with your post or page title.', 'aaron' ); ?></label>	
	</p>
	<br>
	<p>
		<input type="checkbox" name="aaron_hide_image" id="aaron_hide_image" value="hide_image" <?php echo ( aaron_get_meta( 'aaron_hide_image' ) === 'hide_image' ) ? 'checked' : ''; ?>>
		<label for="aaron_hide_image"><?php esc_html_e( 'Do not show the featured image in single post view, only on the blog listings and archives.', 'aaron' ); ?></label>	
	</p>
	<?php
}


function aaron_header_settings_save( $post_id ) {
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// Check if our nonce is set and verify that the nonce is valid.
	if ( ! isset( $_POST['aaaron_meta_nonce'] ) || ! wp_verify_nonce( $_POST['aaaron_meta_nonce'], '_header_settings_nonce' ) ) return;

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	// Show header.
	if ( isset( $_POST['aaron_show_header'] ) ) {
		update_post_meta( $post_id, 'aaron_show_header', esc_attr( $_POST['aaron_show_header'] ) );
	} else {
		update_post_meta( $post_id, 'aaron_show_header', null );
	}
	// Use featured Image.
	if ( isset( $_POST['aaron_featured_image_header'] ) ) {
		update_post_meta( $post_id, 'aaron_featured_image_header', esc_attr( $_POST['aaron_featured_image_header'] ) );
	} else {
		update_post_meta( $post_id, 'aaron_featured_image_header', null );
	}
	// Hide Call to Action.
	if ( isset( $_POST['aaron_hide_action_meta'] ) ) {
		update_post_meta( $post_id, 'aaron_hide_action_meta', esc_attr( $_POST['aaron_hide_action_meta'] ) );
	} else {
		update_post_meta( $post_id, 'aaron_hide_action_meta', null );
	}

	// Hide Highlights.
	if ( isset( $_POST['aaron_hide_highlights_meta'] ) ) {
		update_post_meta( $post_id, 'aaron_hide_highlights_meta', esc_attr( $_POST['aaron_hide_highlights_meta'] ) );
	} else {
		update_post_meta( $post_id, 'aaron_hide_highlights_meta', null );
	}

	// Hide Tagline.
	if ( isset( $_POST['aaron_hide_tagline'] ) ) {
		update_post_meta( $post_id, 'aaron_hide_tagline', esc_attr( $_POST['aaron_hide_tagline'] ) );
	} else {
		update_post_meta( $post_id, 'aaron_hide_tagline', null );
	}

	// Replace Site title.
	if ( isset( $_POST['aaron_replace_title'] ) ) {
		update_post_meta( $post_id, 'aaron_replace_title', esc_attr( $_POST['aaron_replace_title'] ) );
	} else {
		update_post_meta( $post_id, 'aaron_replace_title', null );
	}

	// Hide the featured image.
	if ( isset( $_POST['aaron_hide_image'] ) ) {
		update_post_meta( $post_id, 'aaron_hide_image', esc_attr( $_POST['aaron_hide_image'] ) );
	} else {
		update_post_meta( $post_id, 'aaron_hide_image', null );
	}

}
add_action( 'save_post', 'aaron_header_settings_save' );
