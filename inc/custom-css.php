<?php
/**
 * Custom CSS for the color options.
 */
function aaron_customize_css() {
	echo '<style type="text/css">';
	if ( is_admin_bar_showing() ) {
		?>
		.main-navigation {top: 32px;}

		@media screen and ( max-width: 782px ) {
			.main-navigation {top: 46px;}
		}

		@media screen and ( max-width: 600px ) {
			.main-navigation {top: 0px;}
		}

		<?php
	}

	echo '.site-title,
		.site-title a {	color: #' . esc_attr( get_header_textcolor() ) . "; }\n";

	// If the site title text color is black, turn off the text shadow, or the text will be too blurry.
	if ( get_header_textcolor() === '000000' ) {
		echo ".site-title, .site.title a {text-shadow: none;} \n";
	}

	// Header menu and site footer text color.
	if ( get_theme_mod( 'aaron_main_text_color' ) ) {
		echo 'body,
		a,
        a:hover,
        a:focus,
        a:visited,
        a:active{color:' . esc_attr( get_theme_mod( 'aaron_main_text_color', '#333' ) ) . "; }\n";
	}

	// Call to Action text color.
	if ( get_theme_mod( 'aaron_action_color' ) ) {
		echo '#action, #action a { color:' . esc_attr( get_theme_mod( 'aaron_action_color', '#ffffff' ) ) . "; }\n";
	}

	// If the Call to action text color is black, turn off the text shadow, or the text will be too blurry.
	if ( get_theme_mod( 'aaron_action_color' ) === '#000000' ) {
		echo "#action, #action a {text-shadow: none;} \n";
	}

	// Call to Action background color.
	if ( get_theme_mod( 'aaron_action_bgcolor' ) ) {
		echo '#action, #action a { background:#' . esc_attr( get_theme_mod( 'aaron_action_bgcolor', 'none' ) ) . "; }\n";
	}

	// Header menu and site footer background color.
	if ( get_theme_mod( 'aaron_footer_bgcolor' ) ) {
			echo '.main-navigation, .main-navigation ul ul, .site-footer {background:' . esc_attr( get_theme_mod( 'aaron_footer_bgcolor', '#ffffff' ) ) . "; }\n";
			echo '.site-content{ background-image: none; }';
			echo '.main-navigation ul ul {border: 4px solid ' . esc_attr( get_theme_mod( 'aaron_footer_bgcolor' ) ) . "; }\n";
			echo '.site-footer{ border-top: 1px solid transparent;}';
	}

	// Header menu and site footer text color.
	if ( get_theme_mod( 'aaron_footer_text_color' ) ) {
		echo '.main-navigation a, .main-navigation ul ul a, .site-footer, .site-footer a {color:' . esc_attr( get_theme_mod( 'aaron_footer_text_color', '#ffffff' ) ) . "; }\n";
	}

	// Adjust borders if there is a background image.
	if ( get_theme_mod( 'background_color' ) ) {
		echo '.comment-author .avatar{ border: 4px solid #' . esc_attr( get_theme_mod( 'background_color', 'ffffff' ) ) . "; }\n";
		echo '.comment-body {background-image: none; }';
	}

	// Background color for posts, pages, sidebar widgets and navigation.
	if ( get_theme_mod( 'aaron_post_bgcolor' ) ) {
		echo '.type-jetpack-portfolio, .single-jetpack-portfolio .entry-footer, .featured-post, .search-results .type-page, .type-attachment, .event, .post, .widget,
		.comment-navigation .nav-previous, .posts-navigation .nav-previous, .post-navigation .nav-previous,
		.comment-navigation .nav-next, .posts-navigation .nav-next, .post-navigation .nav-next, 
		.woocommerce nav.woocommerce-pagination ul {
		background:' . esc_attr( get_theme_mod( 'aaron_post_bgcolor', '#ffffff' ) ) . "; }\n";
		echo '.entry-meta .avatar, .widget, .post, .search .type-page, .featured-post, .type-jetpack-portfolio {border: 4px solid ' . esc_attr( get_theme_mod( 'aaron_post_bgcolor' ) ) . "; }\n";
		echo '.more-link {border: 1px solid ' . esc_attr( get_theme_mod( 'aaron_post_bgcolor' ) ) . "; }\n";
	}

	// Change UPPERCASE to Capitalized Text Instead.
	if ( get_theme_mod( 'aaron_caps' ) ) {
		echo '.main-navigation,
			.widget-title,
			.widgettitle,
			.entry-title,
			.entry-title a,
			.site-title,
			.site-title a,
			.site-info,
			.site-description,
			.page-links,
			.page-title,
			.comments-title,
			.comment-reply-title,
			.featured-headline,
			.testimonial-entry-title,
			.featured-post h2 { text-transform: ' . esc_attr( get_theme_mod( 'aaron_caps' ) ) . "; }\n";
	}

	// Font setting.
	if ( get_theme_mod( 'aaron_body_font' ) ) {
		echo "body,
		button,
		input,
		select,
		textarea {
			font-family: '" . esc_attr( get_theme_mod( 'aaron_body_font', 'Open sans' ) ) . "', sans-serif;	
		}\n";
	}

		echo ".featured-post h2,
			.featured-headline,
			.comments-title,
			.comment-reply-title,
			.testimonial-entry-title,
			.jetpack-testimonial .entry-title,
			.page-title,
			.entry-title, 
			.entry-title a,
			.main-navigation,
			.widget-title,
			.widgettitle,
			.page-links,
			.site-info,
			.site-description,
			.site-title,
			.site-title a {
				font-family: '" . esc_attr( get_theme_mod( 'aaron_font', 'Montserrat' ) ) . "', sans-serif;	
			}\n";

	// If avatars are enabled, alter the css.
	if ( get_option( 'show_avatars' ) ) {
		echo ".comment-metadata {
			margin-left: 70px;
			display: block;
			margin-top: -25px;
		}\n";
	}

	// Show the search on all screen sizes.
	if ( get_theme_mod( 'aaron_show_search' ) ) {
		?>
		@media screen and (max-width: 800px) {	
			.topsearch { display: initial; } 
		}
		<?php
	}

	// Prints CSS for the featured image header meta box option. See custom-header.php.
	aaron_featured_image_header_css();

	// No tagline or call to action is visible, lets add some padding inside the header.
	if ( is_singular() && aaron_get_meta( 'aaron_show_header' ) && aaron_get_meta( 'aaron_hide_tagline' ) && aaron_get_meta( 'aaron_hide_action_meta' )
		|| is_singular() && aaron_get_meta( 'aaron_show_header' ) && bloginfo( 'description' ) == '' && aaron_get_meta( 'aaron_hide_action_meta' )
		|| is_home() && aaron_get_meta( 'aaron_show_header' ) && aaron_get_meta( 'aaron_hide_tagline' ) && aaron_get_meta( 'aaron_hide_action_meta' )
		&& ! is_front_page() || is_home() && aaron_get_meta( 'aaron_show_header' ) && bloginfo( 'description' ) == '' && aaron_get_meta( 'aaron_hide_action_meta' ) && ! is_front_page() ) {
		echo ".site-branding {padding-bottom: 45px;}\n";
	}

	// When combining a post or page with a header, reduce the space between the header and the content.
	if ( is_singular() && aaron_get_meta( 'aaron_show_header' ) ) {
		echo ".page .site-content,\n
			.single .site-content {margin-top: 45px;}\n";
	}

	if ( get_theme_mod( 'aaron_width' ) ) {
		echo '@media screen and (min-width: 641px) {';
			echo '.site-content {width: ' . esc_attr( get_theme_mod( 'aaron_width' ) ) . "%; margin-left: auto; margin-right: auto;}\n";
		echo '}';
	}

	if ( get_theme_mod( 'aaron_unstick' ) ) {
		echo ".main-navigation {position: initial; }\n";
	}

	if ( get_theme_mod( 'aaron_meta_below' ) ) {
		echo ".entry-footer {width: 100%; clear: both;}\n";
		echo ".entry-content {width: 100%;}\n";
	}

	if ( get_theme_mod( 'aaron_font' ) == 'Grand Hotel' || get_theme_mod( 'aaron_font' ) == 'La Belle Aurore' || get_theme_mod( 'aaron_font' ) == 'Tangerine' || get_theme_mod( 'aaron_font' ) == 'Lobster Two' ) {
		echo ".widget-title, .widgettitle, .comments-title, .comment-reply-title {font-size:3.5rem;}\n";
		echo ".entry-title, .entry-title a, .site-description {font-size:4rem;}\n";
		echo ".featured-post h2 {font-size:2.3rem;}\n";
	}

	echo '</style>';
}
add_action( 'wp_head', 'aaron_customize_css' );
