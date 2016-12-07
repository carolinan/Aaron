<?php
/**
 * Aaron Theme Customizer
 *
 * @package aaron
 */

/**
 * Enqueue the customizer stylesheet for our radio buttons.
 */
function aaron_customizer_stylesheet() {
	wp_enqueue_style( 'aaron-customizer-css', get_template_directory_uri() . '/inc/customizer.css' );
}
add_action( 'customize_controls_print_styles', 'aaron_customizer_stylesheet' );

/**
 * Register our customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aaron_customize_register( $wp_customize ) {
	/**
	 * Custom control for our icons.
	 */
	class Aaron_Icon_Control extends WP_Customize_Control {
		/**
	 	 * Create a fieldset, labels and radio buttons for our dashicons.
		 */
		public function render_content() {
			?>
			<div class="aaron-radio-buttons">
				<fieldset>
				<legend class="customize-control-title"><?php esc_html_e( $this->label ); ?></legend>
				<label>
					<input type="radio" value="dashicons-admin-users" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-admin-users' ); ?> />
						<i class="dashicons dashicons-admin-users"></i> <?php esc_html_e( 'User', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-admin-generic" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-admin-generic' ); ?> />
					<i class="dashicons dashicons-admin-generic"></i> <?php esc_html_e( 'Admin', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-desktop" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-desktop' ); ?> />
					<i class="dashicons dashicons-desktop"></i> <?php esc_html_e( 'Desktop', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-tablet" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-tablet' ); ?> />
					<i class="dashicons dashicons-tablet"></i> <?php esc_html_e( 'Tablet', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-smartphone" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-smartphone' ); ?> />
					<i class="dashicons dashicons-smartphone"></i> <?php esc_html_e( 'Phone', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-heart" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-heart' ); ?> />
					<i class="dashicons dashicons-heart"></i> <?php esc_html_e( 'Heart', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-palmtree" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-palmtree' ); ?> />
					<i class="dashicons dashicons-palmtree"></i> <?php esc_html_e( 'Palmtree', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-wordpress-alt" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-wordpress-alt' ); ?> />
					<i class="dashicons dashicons-wordpress-alt"></i> <?php esc_html_e( 'WordPress', 'aaron' ); ?>
				</label>
				<label>				
					<input type="radio" value="dashicons-admin-plugins" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-admin-plugins' ); ?> />
					<i class="dashicons dashicons-admin-plugins"></i> <?php esc_html_e( 'Plugins', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-visibility" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-visibility' ); ?> />
					<i class="dashicons dashicons-visibility"></i> <?php esc_html_e( 'Visibility', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-format-status" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-format-status' ); ?> />
					<i class="dashicons dashicons-format-status"></i> <?php esc_html_e( 'Status', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-edit" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-edit' ); ?> />
					<i class="dashicons dashicons-edit"></i> <?php esc_html_e( 'Edit', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-cart" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-cart' ); ?> />
					<i class="dashicons dashicons-cart"></i> <?php esc_html_e( 'Cart', 'aaron' );?>
				</label>
				<label>
					<input type="radio" value="dashicons-format-image" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-format-image' ); ?> />
					<i class="dashicons dashicons-format-image"></i> <?php esc_html_e( 'Image','aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-editor-help" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-editor-help' ); ?> />
					<i class="dashicons dashicons-editor-help"></i> <?php esc_html_e( 'Help', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-star-filled" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-star-filled' ); ?> />
					<i class="dashicons dashicons-star-filled"></i> <?php esc_html_e( 'Star', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-admin-links" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-admin-links' ); ?> />
					<i class="dashicons dashicons-admin-links"></i> <?php esc_html_e( 'Links', 'aaron' );?>
				</label>
				<label>
					<input type="radio" value="dashicons-format-audio" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-format-audio' ); ?> />
					<i class="dashicons dashicons-format-audio"></i> <?php esc_html_e( 'Audio', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-location-alt" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-location-alt' ); ?> />
					<i class="dashicons dashicons-location-alt"></i> <?php esc_html_e( 'Location', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-welcome-learn-more" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-welcome-learn-more' ); ?> />
					<i class="dashicons dashicons-welcome-learn-more"></i> <?php esc_html_e( 'Learn more', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-art" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-art' ); ?> />
					<i class="dashicons dashicons-art"></i> <?php esc_html_e( 'Art', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-calendar-alt" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-calendar-alt' ); ?> />
					<i class="dashicons dashicons-calendar-alt"></i> <?php esc_html_e( 'Calendar', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-phone" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-phone' ); ?> />
					<i class="dashicons dashicons-phone"></i> <?php esc_html_e( 'Phone', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="dashicons-email-alt" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'dashicons-email-alt' ); ?> />
					<i class="dashicons dashicons-email-alt"></i> <?php esc_html_e( 'Email', 'aaron' ); ?>
				</label>
				<label>
					<input type="radio" value="no-icon" name="<?php echo esc_attr( $this->id ); ?>" 
					<?php $this->link(); checked( $this->value(), 'no-icon' ); ?> /> 
					<b><?php esc_html_e( 'No icon','aaron' ); ?></b>
				</label>
				</fieldset>
			</div>
			<?php
		}
	}

	/*Add sections and panels to the WordPress customizer*/
	$wp_customize->add_panel( 'aaron_custom_high', array(
		'priority'       => 80,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Front page Highlights', 'aaron' ),
		'description'    => __( 'Front page Highlights are displayed in the lower part of the header.', 'aaron' ),
	) );

	$wp_customize->add_panel( 'aaron_sections_panel', array(
		'priority'       => 70,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Front page sections', 'aaron' ),
		'description'    => __( 'Display pages as different sections of the front page.', 'aaron' ),
	) );

	$wp_customize->add_section('aaron_section_advanced', array(
		'title' => __( 'Advanced settings', 'aaron' ),
		'priority' => 100,
	) );

	$wp_customize->add_section('aaron_section_accessibility', array(
		'title' => __( 'Accessibility settings', 'aaron' ),
		'priority' => 100,
	) );

	/* Change the names of the default settings. */
	$wp_customize->get_section( 'header_image' )->title = __( 'Header background', 'aaron' );
	$wp_customize->get_control( 'header_textcolor' )->label = __( 'Site Title Color', 'aaron' );

	$wp_customize->add_setting( 'aaron_header_bgcolor', array(
		'default'        => '#4777a6',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aaron_header_bgcolor', array(
		'label'	=> __( 'Header background color:', 'aaron' ),
		'section' => 'header_image',
		'settings'  => 'aaron_header_bgcolor',
	) ) );

	$wp_customize->add_setting( 'aaron_header_bgpos', array(
		'sanitize_callback' => 'aaron_sanitize_bgpos',
		'default' => 'center center',
	) );

	$wp_customize->add_control( 'aaron_header_bgpos', array(
		'type' => 'select',
		'label' => __( 'Header background image position:', 'aaron' ),
		'choices' => array(
			'left top'		=> __( 'left top','aaron' ),
			'left center'	=> __( 'left center','aaron' ),
			'left bottom'	=> __( 'left bottom','aaron' ),
			'right top'		=> __( 'right top','aaron' ),
			'right center'	=> __( 'right center','aaron' ),
			'right bottom'	=> __( 'right bottom','aaron' ),
			'center top'	=> __( 'center top','aaron' ),
			'center center'	=> __( 'center center','aaron' ),
			'center bottom'	=> __( 'center bottom','aaron' ),
			),
		'section' => 'header_image',
	) );

	$wp_customize->add_setting( 'aaron_header_bgsize', array(
		'sanitize_callback' => 'aaron_sanitize_bgsize',
		'default' => 'cover',
	) );

	$wp_customize->add_control( 'aaron_header_bgsize', array(
		'type' => 'select',
		'label'	=> __( 'Header background image size:', 'aaron' ),
		'choices' => array(
			'cover'		=> __( 'cover','aaron' ),
			'contain'	=> __( 'contain','aaron' ),
			'auto'		=> __( 'auto','aaron' ),
	        ),
		'section' => 'header_image',
	) );

	$wp_customize->add_setting( 'aaron_header_bgrepeat', array(
		'sanitize_callback' => 'aaron_sanitize_bgrepeat',
		'default' => 'no-repeat',
	) );

	$wp_customize->add_control( 'aaron_header_bgrepeat', array(
		'type'	=> 'select',
		'label'  => __( 'Header background image repeat:', 'aaron' ),
		'choices' => array(
			'repeat'	=> __( 'repeat','aaron' ),
			'repeat-x'	=> __( 'repeated only horizontally','aaron' ),
			'repeat-y'	=> __( 'repeated only vertically','aaron' ),
			'no-repeat'	=> __( 'no repeat','aaron' ),
			),
		'section' => 'header_image',
	) );

	/* Show excerpt instead of full content*/
	$wp_customize->add_setting( 'aaron_show_excerpt', array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control('aaron_show_excerpt', array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to show the excerpt instead of the full content on the front page, blog listing and archives.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	// Hide meta for search results.
	$wp_customize->add_setting( 'aaron_hide_meta_search', array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'aaron_hide_meta_search', array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the meta information on the search results.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	// Hide all the meta information.
	$wp_customize->add_setting( 'aaron_hide_meta', array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'aaron_hide_meta', array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide all the meta information.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->selective_refresh->add_partial( 'aaron_hide_meta', array(
		'selector' => '.entry-footer',
		'container_inclusive' => true,
		'render_callback' => 'aaron_entry_footer',
	)  );

	// Hide author.
	$wp_customize->add_setting( 'aaron_hide_author', array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'aaron_hide_author',	array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the author and post date information.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->selective_refresh->add_partial( 'aaron_hide_author', array(
		'selector' => '.entry-meta',
		'container_inclusive' => true,
		'render_callback' => 'aaron_posted_on',
	)  );

	$wp_customize->add_setting( 'aaron_breadcrumb',	array(
			'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control('aaron_breadcrumb', array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to show the breadcrumb navigation.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->selective_refresh->add_partial( 'aaron_breadcrumb', array(
		'selector' => '.crumbs',
		'container_inclusive' => true,
		'render_callback' => 'aaron_breadcrumbs',
	)  );

	/**
	* Frontpage Highlights.
	* We have 3 highlight areas, so we need to loop the code.
	*/
	$wp_customize->add_section( 'aaron_section_hide', array(
		'title' => __( 'Hide the highlights', 'aaron' ),
		'panel'  => 'aaron_custom_high',
	) );

	$wp_customize->add_setting( 'aaron_hide_highlight',	array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control('aaron_hide_highlight',	array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the highlights.', 'aaron' ),
		'section' => 'aaron_section_hide',
	) );

	for ( $i = 1; $i < 10; $i++ ) {
		$wp_customize->add_section( 'aaron_section_' . $i, array(
			'title' => __( 'Highlight number', 'aaron' ) . ' ' . $i,
			'panel'  => 'aaron_custom_high',
		) );
		$wp_customize->add_setting( 'aaron_highlight' . $i . '_headline', array(
			'sanitize_callback' => 'aaron_sanitize_text',
		) );
		$wp_customize->add_control('aaron_highlight' . $i . '_headline', array(
			'type' => 'text',
			'label' => __( 'Add this headline to your highlight:', 'aaron' ),
			'section' => 'aaron_section_' . $i,
		) );
		$wp_customize->add_setting( 'aaron_highlight' . $i . '_text', array(
			'sanitize_callback' => 'aaron_sanitize_text',
		) );
		$wp_customize->add_control('aaron_highlight' . $i . '_text', array(
			'type' => 'text',
			'label' => __( 'Add this text to your highlight:', 'aaron' ),
			'section' => 'aaron_section_' . $i,
		) );
		$wp_customize->add_setting( 'aaron_highlight' . $i . '_icon', array(
			'sanitize_callback' => 'aaron_sanitize_text',
		) );
		$wp_customize->add_control( new Aaron_Icon_Control( $wp_customize, 'aaron_highlight' . $i . '_icon', array(
			'label' => __( 'Chose an icon for your highlight:', 'aaron' ),
			'section'  => 'aaron_section_' . $i,
			'settings' => 'aaron_highlight' . $i . '_icon',
			'priority' => 1,
		) ) );
		$wp_customize->add_setting( 'aaron_highlight' . $i . '_image', array(
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aaron_highlight' . $i . '_image', array(
			'label' => __( 'Upload an image for your highlight:', 'aaron' ),
			'description'    => __( 'Uploading an image will overwrite your icon settings.', 'aaron' ),
			'section'  => 'aaron_section_' . $i,
		) ) );
		// Add alt="" text for uploaded images in the highlights.
		$wp_customize->add_setting( 'aaron_highlight' . $i . '_alt', array(
			'sanitize_callback' => 'aaron_sanitize_text',
		) );

		$wp_customize->add_control('aaron_highlight' . $i . '_alt',	array(
			'type' => 'text',
			'label' => __( 'If you have chosen an image, please also add an alternative text:', 'aaron' ),
			'section' => 'aaron_section_' . $i,
		) );
		$wp_customize->add_setting( 'aaron_highlight' . $i . '_bgcolor', array(
			'default' => '#fafafa',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aaron_highlight' . $i . '_bgcolor', array(
			'label'        => __( 'Hightlight background color:', 'aaron' ),
			'section'  => 'aaron_section_' . $i,
			'settings' => 'aaron_highlight' . $i . '_bgcolor',
		) ) );

		$wp_customize->add_setting( 'aaron_highlight' . $i . '_textcolor', array(
			'default'        => '#333333',
			'sanitize_callback' => 'sanitize_hex_color',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aaron_highlight' . $i . '_textcolor', array(
			'label'    => __( 'Hightlight text and icon color:', 'aaron' ),
			'section'  => 'aaron_section_' . $i,
			'settings' => 'aaron_highlight' . $i . '_textcolor',
		) ) );
		$wp_customize->add_setting( 'aaron_highlight' . $i . '_link', array(
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control('aaron_highlight' . $i . '_link', array(
			'type' => 'text',
			'label' => __( 'Add a link to your highlight:', 'aaron' ),
			'section' => 'aaron_section_' . $i,
		) );

		// Hide single, individual highlights.
		$wp_customize->add_setting( 'aaron_highlight' . $i . '_hide', array(
			'sanitize_callback' => 'aaron_sanitize_checkbox',
		) );

		$wp_customize->add_control('aaron_highlight' . $i . '_hide', array(
			'type' => 'checkbox',
			'label' => __( 'Check this box to hide this individual highlight.', 'aaron' ),
			'section' => 'aaron_section_' . $i,
		) );

		$wp_customize->selective_refresh->add_partial( 'aaron_highlight' . $i . '_icon', array(
	        'selector' => '.hl' . $i,
	        'container_inclusive' => true,
	        'render_callback' => 'aaron_highlights',
	    ) );
	} // End for().

	$wp_customize->add_section( 'aaron_section_hide', array(
		'title' => __( 'Hide all the highlights', 'aaron' ),
		'panel'  => 'aaron_custom_high',
	) );

	$wp_customize->add_setting( 'aaron_hide_highlight',	array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );

	$wp_customize->add_control('aaron_hide_highlight',	array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide all the highlights.', 'aaron' ),
		'section' => 'aaron_section_hide',
	) );

	/* Call to action text **/
	$wp_customize->selective_refresh->add_partial( 'aaron_action_text', array(
		'selector' => '#action',
		'container_inclusive' => true,
		'render_callback' => 'aaron_action',
	) );

	$wp_customize->add_section('aaron_section_one', array(
		'title' => __( 'Call to Action', 'aaron' ),
		'priority' => 80,
	) );

	$wp_customize->add_setting( 'aaron_action_text', array(
		'sanitize_callback' => 'aaron_sanitize_text',
	) );

	$wp_customize->add_control('aaron_action_text', array(
		'type' => 'text',
		'label' => __( 'Add this text to the Call to Action button on the front page:', 'aaron' ),
		'section' => 'aaron_section_one',
	) );

	/* Call to action link */
	$wp_customize->add_setting( 'aaron_action_link', array(
			'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control('aaron_action_link',	array(
		'type' => 'text',
		'label' => __( 'Add a link to the Call to action button:', 'aaron' ),
		'section' => 'aaron_section_one',
	) );

	$wp_customize->add_setting( 'aaron_hide_action', array(
			'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control('aaron_hide_action',	array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the Call to Action button.', 'aaron' ),
		'section' => 'aaron_section_one',
	) );

	$wp_customize->add_setting( 'aaron_action_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aaron_action_color', array(
		'label'        => __( 'Call to Action text color:', 'aaron' ),
		'section' => 'aaron_section_one',
		'settings'  => 'aaron_action_color',
	) ) );

	$wp_customize->add_setting( 'aaron_action_bgcolor', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color_no_hash',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aaron_action_bgcolor', array(
	    'label'   => __( 'Call to Action background color:','aaron' ),
	    'section' => 'aaron_section_one',
	    'settings'   => 'aaron_action_bgcolor',
	) ) );

	/*Advanced settings*/
	$wp_customize->add_setting( 'aaron_hide_search', array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );

	$wp_customize->add_control('aaron_hide_search',	array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the search form in the header menu.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->add_setting( 'aaron_show_search', array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );

	$wp_customize->add_control('aaron_show_search',	array(
		'type' => 'checkbox',
		'label' => __( 'The search form in the header menu is hidden on smaller screens by default. Check this box to show it on all screen sizes.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->add_setting( 'aaron_hide_title',	array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control('aaron_hide_title', array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the clickable site title in the header menu.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->add_setting( 'aaron_unstick', array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control('aaron_unstick', array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to unstick the fixed header menu.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->add_setting( 'aaron_meta_below',	array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control('aaron_meta_below', array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to move the meta information below the post content.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->add_setting( 'aaron_hide_credits', array(
		'sanitize_callback' => 'aaron_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'aaron_hide_credits', array(
		'type' => 'checkbox',
		'label' => __( 'Check this box to hide the Theme Author credit in the footer =(.', 'aaron' ),
		'section' => 'aaron_section_advanced',
	) );

	$wp_customize->add_setting( 'aaron_width', array(
		'sanitize_callback' => 'aaron_sanitize_page',
		'default' => 100,
	) );
	$wp_customize->add_control('aaron_width', array(
		'type' => 'range',
		'label' => __( 'Change the width of the main content.', 'aaron' ),
		'section' => 'aaron_section_advanced',
		'input_attrs' => array(
			'min'   => 30,
			'max'   => 100,
			'step'  => 4,
			 ),
	) );

	/* if jetpack is installed, add the featured heading to the customizer. */
	$wp_customize->add_setting( 'aaron_featured_headline',	array(
		'sanitize_callback'	=> 'aaron_sanitize_text',
		'default'	=> __( 'Featured', 'aaron' ),
	) );
	$wp_customize->add_control('aaron_featured_headline', array(
		'type' => 'text',
		'label' => __( 'Headline above your featured content:', 'aaron' ),
		'section' => 'featured_content',
	) );

	/**
	 * Frontpage sections
	 * Top Section
	*/

	$wp_customize->add_section( 'aaron_top_section', array(
		'title' => __( 'Top Section', 'aaron' ),
		'panel'  => 'aaron_sections_panel',
		'description' => __( 'Select up to 3 pages that will be displayed above your blog content.', 'aaron' ),
	) );

	for ( $i = 1; $i < 4; $i++ ) {
		$wp_customize->add_setting( 'aaron_top_section' . $i, array(
			'sanitize_callback' => 'aaron_sanitize_page',
		) );

		$wp_customize->add_control( 'aaron_top_section' . $i, array(
			'default' => 0,
			'type' => 'dropdown-pages',
			'label' => __( 'Select a page:','aaron' ),
			'section' => 'aaron_top_section',
			'allow_addition' => true,
		) );
	}

	$wp_customize->selective_refresh->add_partial( 'aaron_top_section1', array(
		'selector' => '.frontpage-top',
		'container_inclusive' => true,
		'render_callback' => 'aaron_top_sections',
	) );

	/* Bottom Section */
	$wp_customize->add_section( 'aaron_bottom_section', array(
		'title' => __( 'Bottom Section', 'aaron' ),
		'panel'  => 'aaron_sections_panel',
		'description' => __( 'Select up to 3 pages that will be displayed below your blog content, but above the footer.', 'aaron' ),
	) );

	for ( $i = 1; $i < 4; $i++ ) {
		$wp_customize->add_setting( 'aaron_bottom_section' . $i, array(
			'sanitize_callback' => 'aaron_sanitize_page',
		) );

		$wp_customize->add_control( 'aaron_bottom_section' . $i, array(
			'default' => 0,
			'type' => 'dropdown-pages',
		    'label' => __( 'Select a page:','aaron' ),
			'section' => 'aaron_bottom_section',
			'allow_addition' => true,
		) );
	}

	$wp_customize->selective_refresh->add_partial( 'aaron_bottom_section1', array(
		'selector' => '.frontpage-bottom',
		'container_inclusive' => true,
		'render_callback' => 'aaron_bottom_sections',
	) );

	/* Add a better screen reader text for the two widget areas depending on your content. */
	$wp_customize->add_setting( 'aaron_footer_screen_reader', array(
		'sanitize_callback' => 'aaron_sanitize_text',
	) );
	$wp_customize->add_control('aaron_footer_screen_reader', array(
		'type' => 'text',
		'label' => __( 'Add a descriptive screen reader text for the footer.', 'aaron' ),
		'section' => 'aaron_section_accessibility',
	) );

	$wp_customize->add_setting( 'aaron_sidebar_screen_reader', array(
		'sanitize_callback' => 'aaron_sanitize_text',
	) );
	$wp_customize->add_control('aaron_sidebar_screen_reader', array(
		'type' => 'text',
		'label' => __( 'Add a descriptive screen reader text for the sidebar.', 'aaron' ),
		'section' => 'aaron_section_accessibility',
	) );

	$wp_customize->add_setting( 'aaron_caps', array(
		'sanitize_callback' => 'aaron_sanitize_cap',
		'default'        => 'uppercase',
	) );
	$wp_customize->add_control( 'aaron_caps', array(
		'type'	=> 'select',
		'label' => __( 'Change the capitalization', 'aaron' ),
		'description' => __( 'By default, Aaron displays the navigation and headings as uppercase. You can use this option to change the capitalization.', 'aaron' ),
		'section' => 'aaron_font',
		'choices' => array(
			'uppercase'	=> __( 'Uppercase (Default, transforms all characters to uppercase).','aaron' ),
			'initial'	=> __( 'Normal','aaron' ),
	        'capitalize'	=> __( 'Capitalized	(Transforms the first character of each word to uppercase).','aaron' ),
		),
	) );

	$wp_customize->add_section( 'aaron_font' , array(
	    'title'      => __( 'Typography', 'aaron' ),
		'description' => __( 'Changing the fonts can affect accessibility.', 'aaron' ),
	    'priority'   => 100,
	) );

	$wp_customize->add_setting( 'aaron_font' , array(
		'default'        => 'Montserrat',
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'aaron_font', array(
		'label'          => __( 'Choose a font for headings, menus and footer texts.', 'aaron' ),
		'section'        => 'aaron_font',
		'settings'       => 'aaron_font',
		'type'           => 'select',
		'choices'		 => array(
		'Montserrat' => 'Montserrat ' . __( '(Default)', 'aaron' ),
		'Open Sans' => 'Open Sans ' . __( '(Same as body)', 'aaron' ),
		'Oswald'	=> 'Oswald',
		'Rambla'	=> 'Rambla',
		'Ubuntu Condensed' => 'Ubuntu Condensed',
		'Fjalla One' => 'Fjalla One',
		),
		)
	) );

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'aaron_hide_search' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'aaron_hide_title' )->transport  = 'postMessage';

	if ( aaron_has_featured_posts( 1 ) ) {
		$wp_customize->get_setting( 'aaron_featured_headline' )->transport  = 'postMessage';
	}

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title',
		'render_callback' => get_bloginfo( 'name' ),
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	    'selector' => '.site-description',
	    'render_callback' => get_bloginfo( 'description' ),
	) );

	$wp_customize->selective_refresh->add_partial( 'the_custom_logo', array(
	    'selector' => '.custom-logo-link',
	    'render_callback' => get_custom_logo(),
	) );
}
add_action( 'customize_register', 'aaron_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function aaron_customize_preview_js() {
	wp_enqueue_script( 'aaron_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'aaron_customize_preview_js' );

function aaron_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Checkbox sanitization callback, from https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function aaron_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

/**
 * Bg position.
 */
function aaron_sanitize_bgpos( $input ) {
	$valid = array(
		'left top'		=> __( 'left top','aaron' ),
		'left center'	=> __( 'left center','aaron' ),
		'left bottom'	=> __( 'left bottom','aaron' ),
		'right top'		=> __( 'right top','aaron' ),
		'right center'	=> __( 'right center','aaron' ),
		'right bottom'	=> __( 'right bottom','aaron' ),
		'center top'	=> __( 'center top','aaron' ),
		'center center'	=> __( 'center center','aaron' ),
		'center bottom'	=> __( 'center bottom','aaron' ),
	);
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Bg size
 */
function aaron_sanitize_bgsize( $input ) {
	$valid = array(
		'cover'		=> __( 'cover','aaron' ),
		'contain'	=> __( 'contain','aaron' ),
		'auto'		=> __( 'auto','aaron' ),
	);
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Bg repeat.
 */
function aaron_sanitize_bgrepeat( $input ) {
	$valid = array(
		'repeat'		=> __( 'repeat','aaron' ),
		'repeat-x'		=> __( 'repeated only horizontally','aaron' ),
		'repeat-y'		=> __( 'repeated only vertically','aaron' ),
		'no-repeat'		=> __( 'no repeat','aaron' ),
	);
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Capitalization of navigation and headings.
 */
function aaron_sanitize_cap( $input ) {
	$valid = array(
	  	'uppercase'	=> __( 'Uppercase (Default, transforms all characters to uppercase).','aaron' ),
		'initial'	=> __( 'Normal.','aaron' ),
	    'capitalize' => __( 'Capitalized	(Transforms the first character of each word to uppercase).','aaron' ),
	);
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

/**
 * Page select lists.
 */
function aaron_sanitize_page( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}

