<?php
/**
 * Documentation for the Aaron WordPress theme.
 *
 * @package Aaron
 */

/**
 * Add the menu item under Appearance, themes.
 */
function aaron_docs_menu() {
	add_theme_page( __( 'Aaron Setup Help', 'aaron' ), __( 'Aaron Setup Help', 'aaron' ), 'edit_theme_options', 'aaron-theme', 'aaron_docs' );
}
add_action( 'admin_menu', 'aaron_docs_menu' );

/**
 * Create the doucmentation page.
 */
function aaron_docs() {
	?>
	<h1 class="doc-title"><?php esc_html_e( 'Aaron Setup Help', 'aaron' ); ?></h1>
	<div class="doc-thanks">
	<b><?php esc_html_e( 'Thank you for downloading and trying out Aaron!', 'aaron' ); ?></b><br><br>
	<?php
	printf(
		/* translators: %s: A link to the themes support page on WordPress.org  */
		__( 'If you like the theme, please review it on <a href="%s">WordPress.org</a>', 'aaron' ),
		esc_url( 'https://wordpress.org/support/view/theme-reviews/aaron' )
	);
	?>
	<br>
	<?php esc_html_e( 'Thank you everyone who has contributed with ideas and bug reports so far! Your feedback is essential for the future development of the theme.', 'aaron' ); ?>
	</div>
	<br><br>
	<div class="doc-box">
		<h2><?php esc_html_e( 'Personalize your theme:', 'aaron' ); ?></h2>
		<a class="button button-primary button-hero load-customize" style="margin:5px;"
		href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>">
		<?php esc_html_e( 'Add a logo', 'aaron' ); ?></a>

		<a class="button button-primary button-hero load-customize" style="margin:5px;"
		href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=aaron_highlight1_icon' ) ); ?>">
		<?php esc_html_e( 'Add your first frontpage Highlight', 'aaron' ); ?></a>

		<a class="button button-primary button-hero load-customize" style="margin:5px;"
		href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=aaron_body_font' ) ); ?>">
		<?php esc_html_e( 'Choose a font', 'aaron' ); ?></a>

		<a class="button button-primary button-hero load-customize"style="margin:5px;"
		href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=control-title' ) ); ?>">
		<?php esc_html_e( 'Mix your favorite colors', 'aaron' ); ?></a>

		<br><br>
		<a class="button button-medium button-hero load-customize" style="margin:15px 5px;"
		href="<?php echo esc_url( '#aaron-support' ); ?>">
		<?php esc_html_e( 'Ask for Support', 'aaron' ); ?>
		</a>

		<a class="button button-medium button-hero load-customize" style="margin:15px 5px;"
		href="<?php echo esc_url( '#aaron-custom' ); ?>">
		<?php esc_html_e( 'Or find out how to order customizations', 'aaron' ); ?></a>
	</div>

	<ul class="doc-menu">
		<li><a href="#aaron-menus"><?php esc_html_e( 'Menus', 'aaron' ); ?></a></li>
		<li><a href="#aaron-widgets"><?php esc_html_e( 'Widget areas', 'aaron' ); ?></a></li>
		<li><a href="#aaron-front"><?php esc_html_e( 'Frontpage and page templates', 'aaron' ); ?></a></li>
		<li><a href="#aaron-colors"><?php esc_html_e( 'Colors', 'aaron' ); ?></a></li>
		<li><a href="#aaron-fonts"><?php esc_html_e( 'Fonts', 'aaron' ); ?></a></li>
		<li><a href="#aaron-access"><?php esc_html_e( 'Accessibility', 'aaron' ); ?></a></li>
		<li><a href="#aaron-advanced"><?php esc_html_e( 'Advanced settings', 'aaron' ); ?></a></li>
		<li><a href="#aaron-plugins"><?php esc_html_e( 'Plugins', 'aaron' ); ?></a></li>
		<li><a href="#aaron-support"><?php esc_html_e( 'Support', 'aaron' ); ?></a></li>
		<li><a href="#aaron-change"><?php esc_html_e( 'Changelog', 'aaron' ); ?></a></li>
		<li><a href="#aaron-custom"><?php esc_html_e( 'Customizations', 'aaron' ); ?></a></li>
	</ul>

	<div class="doc-box" id="aaron-menus">
		<h3><?php esc_html_e( 'Menus', 'aaron' ); ?></h3>
		<?php esc_html_e( 'This theme has two optional menu locations, the Primary menu and the Social menu.', 'aaron' ); ?><br>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-menu.jpg' ); ?>" 
		alt="<?php esc_attr_e( 'An image describing how a submenu drops down from the Primary menu', 'aaron' ); ?>
		width="501px" height="91px">
		<br>
		<b><?php esc_html_e( 'The Primary menu', 'aaron' ); ?></b>
		<?php echo esc_html_x( 'is fixed at the top of the website and shows two menu levels.', 'The Primary menu', 'aaron' ); ?>
		<?php esc_html_e( 'This menu will collapse on smaller screens, and can then be opened and closed by a menu button. It can also be closed with the Esc key.', 'aaron' ); ?><br>
		<?php esc_html_e( 'A one line menu is recommended, or the menu will overlap your content. Use sub menus instead.', 'aaron' ); ?><br>

		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-social.jpg' ); ?>" 
		alt="<?php esc_attr_e( 'An image describing how social icons are lined up next to each other in the Social menu', 'aaron' ); ?>"><br>

		<b><?php esc_html_e( 'The Social menu', 'aaron' ); ?></b>
		<?php echo esc_html_x( 'is at the bottom of the page and shows logos of the social networks of your choice. It does not display any text, but has additional information for screen readers.', 'The Social menu', 'aaron' ); ?><br>
		<?php esc_html_e( 'The icon will be added automatically, all you need to do is add a link to your menu.', 'aaron' ); ?><br><br>
		<a class="button button-medium load-customize" style="margin-bottom:5px;" 
		href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>"><?php esc_html_e( 'Manage menus', 'aaron' ); ?></a>
		<br>
		<?php esc_html_e( 'Create a new menu, then click on Custom links and add your URL.', 'aaron' ); ?>
		<?php esc_html_e( 'The Link Text that you provide is used as screen reader text.', 'aaron' ); ?><br>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-social2.jpg' ); ?>" 
		alt="<?php esc_attr_e( 'An image describing where to add URLS for the social menu.', 'aaron' ); ?>"><br>
		<?php esc_html_e( 'Choose the theme location named Social Menu, and save.', 'aaron' ); ?><br>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-social3.jpg' ); ?>" 
		alt="<?php esc_attr_e( 'An image describing what the social menu will look like when a theme location has been picked.', 'aaron' ); ?>"><br><br>
		<?php esc_html_e( 'Troubleshooting: If your link or icon is not showing up, try using lower case letters.', 'aaron' ); ?><br>
		<?php esc_html_e( 'Available icons:', 'aaron' ); ?><br>
		<i>
		<?php
		esc_html_e(
			'dribbble, dropbox, facebook, flickr, foursquare, github, goodreads, google plus, instagram, jsfiddle, linkedin, meetup, pinterest, reddit, soundcloud, stackoverflow,
			tumblr, twitter, twitch, vimeo, vine, vk, yelp, youtube, WordPress, paypal, lastfm, behance, deviantart, spotify, skype, slack, slideshare, amazon, steam, xing, medium, qq, codepen, 500px.',
			'aaron'
		);
		?>
		</i>
		<br><br>
		<b><?php esc_html_e( 'Advanced', 'aaron' ); ?></b><br>
		<?php esc_html_e( 'By default, the primary menu also shows the site title and a search form. The search form is not visible on screens smaller than 800 pixels.	You can edit these features under the Advanced settings tab in the Customizer.', 'aaron' ); ?>
	</div>

	<div class="doc-box" id="aaron-widgets">
		<h3><?php esc_html_e( 'Widget areas', 'aaron' ); ?></h3>
		<?php esc_html_e( 'The theme has one widget area in the header (below the Highlights), and two footer widget areas.	The widget area in the footer below the social menu, is intended for your copyright text.', 'aaron' ); ?>
		<br>
		<?php esc_html_e( 'The theme has two different sidebars: one for the frontpage and blog index, and one for other pages.', 'aaron' ); ?><br>
		<?php esc_html_e( 'To show either sidebar, all you need to do is place your widgets inside them.', 'aaron' ); ?><br>
		<?php esc_html_e( 'To hide either sidebar, remove the widgets. The content of the page will expand when the sidebar is hidden.', 'aaron' ); ?><br>
		<?php esc_html_e( 'Both sidebars and the header and footer widget areas can hold any number of widgets. The footer widget area is shown on all pages.', 'aaron' ); ?><br>
		<?php esc_html_e( 'A custom testimonial widget is available if you choose to activate Jetpack testimonials.', 'aaron' ); ?>
		<br><br>
		<a class="button button-medium load-customize" href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?> ">
		<?php esc_html_e( 'Add widgets', 'aaron' ); ?></a>

	</div>

	<div class="doc-box" id="aaron-front">
		<h3><?php esc_html_e( 'Frontpage', 'aaron' ); ?></h3>
		<?php esc_html_e( 'The standard frontpage has the following features:', 'aaron' ); ?><br>
		<b><?php esc_html_e( 'Logo:', 'aaron' ); ?></b> 
		<?php esc_html_e( 'The logo is positioned above the site title, and links to the frontpage. There are no size limitations.', 'aaron' ); ?><br>
		<a class="button button-medium load-customize" 
		href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=custom_logo' ) ); ?>">
		<?php esc_html_e( 'Add a logo', 'aaron' ); ?></a>
		<br><br>
		<b><?php esc_html_e( 'Site title:', 'aaron' ); ?></b> <?php esc_html_e( 'You will find an option to hide or change the color of your site title in the customizer.', 'aaron' ); ?><br>
		<b><?php esc_html_e( 'Tagline:', 'aaron' ); ?></b> <?php esc_html_e( 'You will find an option to hide your tagline in the customizer.', 'aaron' ); ?><br>
		<a class="button button-medium load-customize" 
		href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=display_header_text' ) ); ?>">
		<?php esc_html_e( 'Display Site Title and Tagline', 'aaron' ); ?></a>
		<br><br>
		<b><?php esc_html_e( 'Call to action:', 'aaron' ); ?></b> 
		<?php esc_html_e( 'The Call to Action is a great way to get your visitors attention. In the customizer you can:', 'aaron' ); ?>
			<ul>
				<li><?php esc_html_e( 'Add your own text', 'aaron' ); ?></li>
				<li><?php esc_html_e( 'Add a link', 'aaron' ); ?></li>		
				<li><?php esc_html_e( 'Change colors', 'aaron' ); ?></li>
				<li><?php esc_html_e( 'Hide the button', 'aaron' ); ?></li>		
			</ul>
			<a class="button button-medium load-customize" 
			href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=aaron_action_text' ) ); ?>">
			<?php esc_html_e( 'Add your Call to Action', 'aaron' ); ?></a>
			<br><br>

			<b><?php esc_html_e( 'Highlights:', 'aaron' ); ?></b>  
			<?php esc_html_e( 'This is a flexible way for you to feature different sections of your website. You can add upp to nine highlights.', 'aaron' ); ?><br>
			<?php esc_html_e( 'In the customizer you can:', 'aaron' ); ?>
			<ul>
				<li><?php esc_html_e( 'Add your own text', 'aaron' ); ?></li>
				<li><?php esc_html_e( 'Add a link', 'aaron' ); ?></li>	
				<li><?php esc_html_e( 'Add an icon or upload an image', 'aaron' ); ?></li>
				<li><?php esc_html_e( 'Change colors', 'aaron' ); ?></li>	
				<li><?php esc_html_e( 'Hide the individual highlights or all of them', 'aaron' ); ?></li>
			</ul>
			<a class="button button-medium load-customize" 
			href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=aaron_highlight1_icon' ) ); ?>">
			<?php esc_html_e( 'Add Highlights', 'aaron' ); ?></a>
			<br><br>
			<h3><?php esc_html_e( 'Custom frontpage', 'aaron' ); ?></h3>
			<?php esc_html_e( 'To use a custom page template for the frontpage, create a new page and select the template under Page Attributes.', 'aaron' ); ?><br>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-page-template.jpg' ); ?>" 
			alt="<?php esc_attr_e( 'An image describing how to set a page template.', 'aaron' ); ?>">
			<br>
			<?php esc_html_e( 'Then set your new page as your static frontpage in the customizer or under Settings > Reading.', 'aaron' ); ?><br>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-static.jpg' ); ?>" 
			alt="<?php esc_attr_e( 'An image describing how to set a static frontpage.', 'aaron' ); ?>">
			<br>

			<h3><?php esc_html_e( 'Templates', 'aaron' ); ?></h3>
			<?php esc_html_e( 'The Landing page template only shows your header, it does not display your footer, your featured content, post content or page content. Your header image will display as a fullscreen image.', 'aaron' ); ?><br>
			<?php esc_html_e( 'The Header & Footer page template only shows your header and footer, it does not display your featured content, post content or page content.', 'aaron' ); ?>  
			<?php esc_html_e( 'It will display the footer widget area, but not the sidebar.', 'aaron' ); ?><br>
			<?php esc_html_e( 'The Static and Featured page template will display the content of the selected page together with your featured content. You also need to active the Jetpack module for Featured Content.', 'aaron' ); ?><br>
			<?php esc_html_e( 'The Grid page template shows your posts in a responsive masonry grid. It does not display the sidebar.', 'aaron' ); ?><br>
			<?php esc_html_e( 'The No sidebar page template shows your page content, but it does not display the sidebar.', 'aaron' ); ?><br><br>

			<b><?php esc_html_e( 'Page sections', 'aaron' ); ?></b><br>
			<?php esc_html_e( 'Page sections are a great way to display your shortcodes, testimonials, pricing tables, contact information and similar.', 'aaron' ); ?><br>
			<?php esc_html_e( 'The two page sections can display up to 3 pages each. Pages in the top section are displayed above the blog content, and pages in the bottom section are displayed below.', 'aaron' ); ?><br>
			<?php esc_html_e( 'You can also show your page sections without your blog content by setting a static frontpage, using the Sections page template.', 'aaron' ); ?><br>
			<br>
			<a class="button button-medium load-customize" 
			href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=aaron_top_section1' ) ); ?>">
			<?php esc_html_e( 'Add pages to the top section', 'aaron' ); ?></a>
			<br><br>
			<a class="button button-medium load-customize" 
			href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=aaron_bottom_section1' ) ); ?>">
			<?php esc_html_e( 'Add pages to the bottom section', 'aaron' ); ?></a>
			<br><br>

	</div>

	<div class="doc-box" id="aaron-colors">
		<h3><?php esc_html_e( 'Colors', 'aaron' ); ?></h3>
		<?php esc_html_e( 'In the colors section in the customizer you can change these colors:', 'aaron' ); ?>
			<ul>
				<li><?php esc_html_e( 'Site title color.', 'aaron' ); ?></li>
				<li><?php esc_html_e( 'Body text and background color.', 'aaron' ); ?></li>
				<li><?php esc_html_e( 'Text and background color for the header menu and site footer.', 'aaron' ); ?></li>
				<li><?php esc_html_e( 'Background color for posts, sidebar widgets and navigation.', 'aaron' ); ?></li>
				<li><?php esc_html_e( 'Header background: This color is used if you choose to not have a header image.', 'aaron' ); ?></li>
			</ul>
			<br>
			<a class="button button-medium load-customize" 
			href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=colors' ) ); ?>">
			<?php esc_html_e( 'Update the color settings', 'aaron' ); ?></a>
			<br><br>
	</div>

	<div class="doc-box" id="aaron-fonts">
		<h3><?php esc_html_e( 'Fonts', 'aaron' ); ?></h3>
		<?php esc_html_e( 'Aaron uses Open Sans for body, and defaults to Montserrat for headings, menus and footer texts.', 'aaron' ); ?>
		<?php esc_html_e( 'You will find an option to change Montserrat to a different font in the customizer.', 'aaron' ); ?><br>
		<?php
		esc_html_e( 'Some of the available fonts are: Montserrat, Open Sans, Oswald, Rambla, Ubuntu Condensed, Fjalla One, Roboto, Lato, Source Sans Pro, Raleway, Lora, Josefin Sans, Taviraj.', 'aaron' );
		?>
		<?php esc_html_e( 'If you select system fonts, the fonts are: BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif.', 'aaron' ); ?>
		<br><br>
		<a class="button button-medium load-customize" 
		href="<?php echo esc_url( admin_url( 'customize.php?autofocus[control]=aaron_body_font' ) ); ?>">
		<?php esc_html_e( 'Select fonts', 'aaron' ); ?></a>
		<br><br>
	</div>

	<div class="doc-box" id="aaron-access">
		<h3><?php esc_html_e( 'Accessibility', 'aaron' ); ?></h3>
		<?php esc_html_e( 'Note: In version 2.0, the accessibility settings were moved from the Advanced Settings to its own setting in the customizer.', 'aaron' ); ?>
		<br><?php esc_html_e( 'Changing the colors of the theme can affect accessibility.', 'aaron' ); ?>
		<br><br>
		<?php
		printf(
			/* translators: %s: a link to the Classic Editor plugin in the WordPress.org plugin directory. */
			__( 'If you are experiencing problems with the new WordPress editor I recommend that you install the <a href="%s">Classic Editor plugin.</a>', 'aaron' ),
			esc_url( 'https://wordpress.org/plugins/classic-editor/' )
		);
		?>
		<br>
		<ul>
			<li><?php esc_html_e( 'Skip link: the theme has one skip link at the very top that lets you skip to the content.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'In the customizer you can add personalized screen reader texts for your sidebar and footer.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Known issues:', 'aaron' ); ?>
				<ul>
					<li><?php esc_html_e( 'Some widgets that uses forms (category dropdown) are missing form labels. This is a known issue with WordPress.', 'aaron' ); ?></li>
					<li><?php esc_html_e( 'Menus have a visible focus and can be tabbed through, but you can not navigate them using the arrow keys.', 'aaron' ); ?></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="doc-box" id="aaron-advanced">
		<h3><?php esc_html_e( 'Advanced settings', 'aaron' ); ?></h3>
		<?php esc_html_e( 'With WordPress 4.7 and newer, Aaron uses visible edit shortcuts in the customizer preview, making it easier to see elements and options on your site that can be edited.', 'aaron' ); ?>
			<?php esc_html_e( 'Look for this symbol and click on it to edit the element.', 'aaron' ); ?><br>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-shortcut.jpg' ); ?>" 
			alt="<?php esc_attr_e( 'An image of the icon used to visualize the edit shortcuts.', 'aaron' ); ?>">
		<br><br>
		<?php esc_html_e( 'Under the Advanced settings tab in the customizer you will find the following options:', 'aaron' ); ?><br>
		<ul>
			<li><?php esc_html_e( 'Show the excerpt instead of the full content on the frontpage, blog listing and archives.', 'aaron' ); ?> 
			<?php esc_html_e( 'Note: Search results show excerpts by default.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the meta information. -This will hide the category and tags.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the author and post date information.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Show the breadcrumb navigation. -Breadcrumbs are shown below the post title.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the search form in the header menu.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Show the search form in the header menu on all screen sizes.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the Site title in the header menu.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Unstick the fixed header menu.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Move the meta below the post content. By default, this is shown to the right of the post content.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the theme author credit text in the footer.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Change the width of the main content.', 'aaron' ); ?></li>
		</ul>
		<br>
			<b><?php esc_html_e( 'Header settings for individual posts and pages', 'aaron' ); ?></b><br>
			<?php esc_html_e( 'To display the header together with an individual post or page, go to Edit mode and activate the Header settings that are located below your post content.', 'aaron' ); ?><br>
			<?php esc_html_e( 'Your post view will inherit the settings from the frontpage.', 'aaron' ); ?><br>
			<?php esc_html_e( 'Options:', 'aaron' ); ?><br>
		<ul>
			<li><?php esc_html_e( 'Show the header.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Use the featured image as header image. This requires the header to be active, and a featured image to be set. The image will inherit the background position from the default header.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the Call to Action button.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the Highlights.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the site Tag line (Description).', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Replace the site title in the header with your post or page title.', 'aaron' ); ?></li>
			<li><?php esc_html_e( 'Do not show the featured image in single post view, only on the blog listings and archives.', 'aaron' ); ?></li>
		</ul>
	</div>

	<div class="doc-box" id="aaron-plugins">
		<h3><?php esc_html_e( 'Plugins', 'aaron' ); ?></h3>
		<?php esc_html_e( 'Aaron has been tested with and style has been added for the following plugins:', 'aaron' ); ?>
		<ul>
			<li><b><?php esc_html_e( 'WooCommerce', 'aaron' ); ?></b></li>
			<li><b><?php esc_html_e( 'bbPress', 'aaron' ); ?></b></li>
			<li><b><?php esc_html_e( 'Jetpack', 'aaron' ); ?></b><br><?php esc_html_e( 'Note: Not all of Jetpacks modules are accessibe, and some uses iframes. I have increased the contrast of some of the modules.', 'aaron' ); ?></li>
				<?php esc_html_e( 'Recommended modules:', 'aaron' ); ?><br>
				<ul>
					<li><b><?php esc_html_e( 'Featured content', 'aaron' ); ?></b><br>
					<?php esc_html_e( '-Once Jetpack has been activated, you can select up to six posts or pages as a frontpage feature. Chose a tag and add it to your posts to separate them from the rest.', 'aaron' ); ?><br>
				<?php esc_html_e( 'You can also choose a headline for your featured section. Featured images are optional and the recommended image size is 360x300 pixels.', 'aaron' ); ?>
						<br>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-featured.jpg' ); ?>" 
			alt="<?php esc_attr_e( 'An image describing three featured posts on the frontpage, two with featured images and one that only displays the post title.', 'aaron' ); ?>">
						<br>
					</li>
					<li><b><?php esc_html_e( 'Custom Content Type: Portfolio', 'aaron' ); ?></b><br>
						<?php esc_html_e( 'Aaron also supports Jetpack', 'aaron' ); ?> 
						<b><?php esc_html_e( 'Portfolios', 'aaron' ); ?></b>.
						<?php
						/* translators: %s: a link to a Jetpack Portfolio support page */
						printf( __( '<a href="%s">Read more about how to setup your Portfolio on Jetpacks support site.</a>', 'aaron' ), esc_url( 'https://en.support.wordpress.com/portfolios/' ) );
						?>
					<br><br>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-portfolio.jpg' ); ?>" 
				alt="<?php esc_attr_e( 'An image describing two portfolio items.', 'aaron' ); ?>"><br>
					</li>
					<li><b><?php esc_html_e( 'Custom Content Type: Testimonials', 'aaron' ); ?></b><br>
						<?php esc_html_e( 'Aaron also supports Jetpack', 'aaron' ); ?> <b><?php esc_html_e( 'Testimonials', 'aaron' ); ?></b>. <br>
						<b><?php esc_html_e( 'Tip:', 'aaron' ); ?></b> <?php esc_html_e( 'I recommend creating a page and adding this shortcode, and then including the page as a frontpage section.', 'aaron' ); ?> <br> &nbsp; [testimonials columns=3 showposts=3]<br>
						<?php
						/* translators: %s: a link to a Jetpack Testimonial support page */
						printf( __( '<a href="%s">Read more about how to setup your Testimonials on Jetpacks support site.</a>', 'aaron' ), esc_url( 'https://en.support.wordpress.com/testimonials-shortcode/' ) );
						?>
						<br>
						<?php esc_html_e( 'You can also try the custom testimonial widget.', 'aaron' ); ?>
						<br><br>		
					</li>
					<li><b><?php esc_html_e( 'Sharing', 'aaron' ); ?></b><br>
						<?php esc_html_e( '-If you activate Jetpack sharing, your buttons will be displayed below the meta information, to the right of your post content.', 'aaron' ); ?>
						<br> 
						<img src="<?php echo esc_url( get_template_directory_uri() . '/images/doc-share.jpg' ); ?>" 
						alt="<?php esc_attr_e( 'An image describing how sharing buttons are added to the post footer below Tags and Categories.', 'aaron' ); ?>"><br>
					</li>
					<li><b><?php esc_html_e( 'Contact Form', 'aaron' ); ?></b></li>
				</ul>
		</ul>
		</ul>
	</div>

	<div class="doc-box" id="aaron-support">
		<h3><?php esc_html_e( 'Support', 'aaron' ); ?></h3>
		<a href="https://wordpress.org/support/theme/aaron"><?php esc_html_e( 'Visit the official support forum', 'aaron' ); ?></a>
		<br>
		<?php
		printf(
			/* translators: %s: A link to the themes author URI */
			__( 'If you need more advanced customizations, <a href="%s">you can also email me to check my availability</a>.', 'aaron' ),
			esc_url( 'mailto:carolina@theme.tips' )
		);
		?>
		<br><br>
	</div>

	<div class="doc-box" id="aaron-change">
		<h3><?php esc_html_e( 'Changelog', 'aaron' ); ?></h3>
		<?php esc_html_e( 'The changelog is available in the readme.txt file in your theme folder.', 'aaron' ); ?><br><br>
	</div>

	<div class="doc-box" id="aaron-custom">
		<h3><?php esc_html_e( 'Customization', 'aaron' ); ?></h3>
		<?php esc_html_e( 'If you need further customizations, I am now offering 5 customizations for only 5$ (USD).', 'aaron' ); ?>
		<br>
		<?php
		esc_html_e( 'I will do five customizations of any of my free themes that are available on WordPress.org.', 'aaron' );
		echo '<br>';
		esc_html_e( 'This is an opportunity for you who have already selected one of my themes to make it yours and personalize it.', 'aaron' );
		echo '<br><br>';
		echo __( 'These customizations can include for example:<br>
		Color changes.<br>
		Typography like font sizes, font family, uppercase / lowercase.<br>
		Changing position of content, sections and any other elements.<br>
		Adding new sections or features, for example extra frontpage templates that you would like.<br>
		Changing texts that are part of the theme.<br>
		Custom login pages.<br>
		Custom 404 pages.', 'aaron' );
		echo '<br><br>';
		esc_html_e( 'If you are not sure if the customization you are wondering about is possible- ask! :)', 'aaron' );
		echo '<br>';
		esc_html_e( 'To future proof your changes, I will add the customizations to a child theme.', 'aaron' );
		echo '<br>';
		esc_html_e( '-If you are already using a child theme, then I will create a new child theme for you that includes any changes that you have already made.', 'aaron' );
		?>
		<br><br>
		<a class="button button-primary button-hero load-customize"
		href="<?php echo esc_url( 'https://www.fiverr.com/carolinapoena/customize-my-themes-for-you' ); ?>">
		<?php esc_html_e( 'Find out more or order customizations', 'aaron' ); ?>
		</a>
		<br><br>
	</div>
	<?php
}
