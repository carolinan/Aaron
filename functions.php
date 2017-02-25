<?php
/**
 * Aaron functions and definitions
 *
 * @package aaron
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'aaron_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aaron_setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'aaron' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'woocommerce' );

		add_editor_style();

		add_theme_support( 'custom-logo' );

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'aaron-featured-posts-thumb', 360, 300 );
		add_image_size( 'aaron-featured-image-header', 1920, 1200 );

		add_theme_support( 'title-tag' );

		register_nav_menus( array(
			'header' => __( 'Primary Menu', 'aaron' ),
			'social' => __( 'Social Menu', 'aaron' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		$aaron_bg_args = array(
			'default-color' => '#fafafa',
		);
		add_theme_support( 'custom-background', $aaron_bg_args );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'starter-content', array(
			'posts' => array(
				'about',
				'contact',
			),
			'nav_menus' => array(
				'social' => array(
					'name' 	=> __( 'Social Menu', 'aaron' ),
					'items' => array(
						'link_facebook',
						'link_twitter',
						'link_instagram',
						'link_email',
					),
				),
				'header' => array(
					'name' 	=> __( 'Primary Menu', 'aaron' ),
					'items' => array(
						'page_about',
						'page_contact',
					),
				),
			),
			'options' => array(
				'show_on_front' => 'posts',
			),
			'widgets' => array(
				'sidebar-front' => array(
					'search',
					'recent-posts',
					'recent-comments',
				),
				// This sidebar is visible in the footer.
				'sidebar-2' => array(
					'text_about',
					'text_business_info',
				),
			),
		) );
	}
}  // End if().
add_action( 'after_setup_theme', 'aaron_setup' );


/**
* Aaron_hide_search
*
* Unless the option is hidden in the customizer, display a search form in the primary menu.
*/
if ( ! get_theme_mod( 'aaron_hide_search' ) ) {
	function aaron_menu_search( $items, $args ) {
	    if ( 'header' === $args->theme_location ) {
	    	 $items = $items . '<li class="topsearch">' . get_search_form( false ) . '</li>';
	    }
	    return $items;
	}
	add_filter( 'wp_nav_menu_items','aaron_menu_search', 10, 2 );
}

/**
* Aaron_hide_title
*
* Unless the option is hidden in the customizer, display the site title (with link) in the primary menu.
*/
if ( ! get_theme_mod( 'aaron_hide_title' ) ) {
	function aaron_menu_title( $items, $args ) {
	    if ( 'header' === $args->theme_location ) {
	    	$new_item       = array( '<li class="toptitle"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a></li>' );
	        $items          = preg_replace( '/<\/li>\s<li/', '</li>,<li',  $items );
	        $array_items    = explode( ',', $items );
	        array_splice( $array_items, 0, 0, $new_item );
	        $items          = implode( '', $array_items );
	    }
	    return $items;
	}
	add_filter( 'wp_nav_menu_items','aaron_menu_title', 10, 2 );
}

/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function aaron_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'aaron' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Front page sidebar', 'aaron' ),
		'id'            => 'sidebar-front',
		'description'   => __( 'This sidebar will only be visible on the front page and the blog index', 'aaron' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer widget area', 'aaron' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Header widget area', 'aaron' ),
				'id'            => 'sidebar-header',
		'description'   => __( 'Widgets in this area are displayed in the header, below the highlights.', 'aaron' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer copyright area', 'aaron' ),
		'id'            => 'sidebar-copyright',
		'description'   => __( 'Place a text widget in this area and add your copyright text', 'aaron' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'aaron_widgets_init' );


if ( ! function_exists( 'aaron_fonts_url' ) ) {
	function aaron_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';

		$fonts[] = get_theme_mod( 'aaron_font', 'Montserrat' );

		/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'aaron' );

		if ( 'cyrillic' === $subset ) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ( 'greek' === $subset ) {
			$subsets .= ',greek,greek-ext';
		} elseif ( 'devanagari' === $subset ) {
			$subsets .= ',devanagari';
		} elseif ( 'vietnamese' === $subset ) {
			$subsets .= ',vietnamese';
		}

		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), '//fonts.googleapis.com/css' );
		}
		return $fonts_url;
	}
}

/**
 * Enqueue scripts and styles.
 */
function aaron_scripts() {
	 /* If using a child theme, auto-load the parent theme style. */
	if ( is_child_theme() ) {
		wp_enqueue_style( 'parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
	}

	wp_enqueue_style( 'aaron-style', get_stylesheet_uri(), array( 'dashicons' ) );
	wp_enqueue_style( 'aaron-fonts', aaron_fonts_url(), array(), null );
	wp_enqueue_style( 'open-sans' );

	wp_enqueue_script( 'aaron-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'aaron-navigation', get_template_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_page_template( 'templates/grid.php' ) ) {
		wp_enqueue_script( 'masonry' );
		wp_enqueue_script( 'aaron-grid', get_template_directory_uri() . '/js/grid.js', array(), true );
	}

}
add_action( 'wp_enqueue_scripts', 'aaron_scripts' );

/**
 * Enqueue styles for the setup help page.
 */
function aaron_admin_scripts( $hook ) {
	if ( 'appearance_page_aaron-theme' !== $hook ) {
		return;
	}
	wp_enqueue_style( 'aaron-admin-style', get_template_directory_uri() . '/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'aaron_admin_scripts' );


/**
 * Custom header for this theme.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Highlights
 */
require get_template_directory() . '/inc/highlights.php';

/**
 * Meta boxes for the header settings.
 */
require get_template_directory() . '/inc/metabox.php';

/**
 * Setup help
 */
require get_template_directory() . '/documentation.php';

/* Add a title to posts that are missing titles */
add_filter( 'the_title', 'aaron_post_title' );
function aaron_post_title( $title ) {
	if ( '' === $title ) {
		return __( '(Untitled)', 'aaron' );
	} else {
		return $title;
	}
}

add_filter( 'body_class', 'aaron_classes' );
function aaron_classes( $classes ) {
	 /*
	 *		Is the sidebar inactive? Add 'no-sidebar' to the $classes array
	 *		Is the meta turned off in the customizer?  Add 'no-meta' to the $classes array
	 */

	if ( is_front_page() && ! is_active_sidebar( 'sidebar-front' ) || is_home() && ! is_active_sidebar( 'sidebar-front' ) ) {
		$classes[] = 'no-sidebar';
	} else {
		if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_front_page() && ! is_home() ) {
			$classes[] = 'no-sidebar';
		}
	}

	if ( get_theme_mod( 'aaron_hide_meta' ) ) {
		$classes[] = 'no-meta';
	}

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}

function aaron_customize_css() {
	echo '<style type="text/css">';
	if ( is_admin_bar_showing() ) {
	 	?>
	 	.main-navigation{top:32px;}

	 	@media screen and ( max-width: 782px ) {
			.main-navigation{top:46px;}
		}

		@media screen and ( max-width: 600px ) {
			.main-navigation{top:0px;}
		}

	<?php
	}

	echo '.site-title,
		.site-title a {	color:#' . esc_attr( get_header_textcolor() ) . "; }\n";

	// If the site title text color is black, turn off the text shadow, or the text will be too blurry.
	if ( get_header_textcolor() === '000000' ) {
		echo ".site-title, .site.title a{text-shadow:none;} \n";
	}

	// Call to Action text color.
	if ( get_theme_mod( 'aaron_action_color' ) ) {
		echo '#action, #action a { color:' . esc_attr( get_theme_mod( 'aaron_action_color', '#ffffff' ) ) . "; }\n";
	}

	// If the Call to action text color is black, turn off the text shadow, or the text will be too blurry.
	if ( get_theme_mod( 'aaron_action_color' ) === '#000000' ) {
		echo "#action, #action a{text-shadow:none;} \n";
	}

	// Call to Action background color.
	if ( get_theme_mod( 'aaron_action_bgcolor' ) ) {
		echo '#action, #action a { background:#' . esc_attr( get_theme_mod( 'aaron_action_bgcolor', 'none' ) ) . "; }\n";
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
			.featured-post h2 { text-transform:' . esc_attr( get_theme_mod( 'aaron_caps' ) ) . "; }\n";
	}

	// Font setting.
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
		echo ".comment-metadata{
			margin-left:70px;
			display:block;
			margin-top:-25px;
		}\n";
	}

	// Show the search on all screen sizes.
	if ( get_theme_mod( 'aaron_show_search' ) ) {
	?>
		@media screen and (max-width: 800px) {	
			.topsearch { display:initial; } 
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
		echo '.site-content {width: ' . esc_attr( get_theme_mod( 'aaron_width' ) ) . "%; margin-left: auto; margin-right: auto;}\n";
	}

	if ( get_theme_mod( 'aaron_unstick' ) ) {
		echo ".main-navigation {position: initial; }\n";
	}

	if ( get_theme_mod( 'aaron_meta_below' ) ) {
		echo ".entry-footer {width: 100%; clear: both;}\n";
		echo ".entry-content {width: 100%;}\n";
	}

	echo '</style>';
}
add_action( 'wp_head', 'aaron_customize_css' );


if ( ! function_exists( 'aaron_top_sections' ) ) {

	function aaron_top_sections() {
		/* The front page sections should not display on the blog listing page. */
		if ( is_front_page() && is_home() ) {
			if ( get_theme_mod( 'aaron_top_section1' ) || get_theme_mod( 'aaron_top_section2' ) || get_theme_mod( 'aaron_top_section3' ) ) {
				$args = array(
					'post_type' => 'page',
					'orderby' => 'post__in',
					'post__in' => array(
						get_theme_mod( 'aaron_top_section1' ),
						get_theme_mod( 'aaron_top_section2' ),
						get_theme_mod( 'aaron_top_section3' ),
					),
				);

				$top_section_query = new WP_Query( $args );

		     	if ( $top_section_query->have_posts() ) {
		     		while ( $top_section_query->have_posts() ) : $top_section_query->the_post();
						get_template_part( 'content', 'top' );
					endwhile;
					wp_reset_postdata();
				}
			}
		}
	}
}

if ( ! function_exists( 'aaron_bottom_sections' ) ) {
	function aaron_bottom_sections() {
		/*
		* We have finished printing the latest posts. Check if there are bottom section pages to show:
		* The front page sections should not display on the blog listing page.
		*/
		if ( is_front_page() && is_home() ) {
			if ( get_theme_mod( 'aaron_bottom_section1' ) or get_theme_mod( 'aaron_bottom_section2' ) or get_theme_mod( 'aaron_bottom_section3' ) ) {

				$args = array(
					'post_type' => 'page',
					'orderby' => 'post__in',
					'post__in' => array(
						get_theme_mod( 'aaron_bottom_section1' ),
						get_theme_mod( 'aaron_bottom_section2' ),
						get_theme_mod( 'aaron_bottom_section3' ),
						),
				);

	     		$bottom_section_query = new WP_Query( $args );

	     		if ( $bottom_section_query->have_posts() ) {
		     		while ( $bottom_section_query->have_posts() ) : $bottom_section_query->the_post();
						get_template_part( 'content', 'bottom' );
					endwhile;
					wp_reset_postdata();
				}
			}
		}
	}
}
