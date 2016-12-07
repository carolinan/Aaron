<?php
/**
 * Documentation for the Aaron Wordpress theme.
 *
 * @package aaron
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
<?php printf( __( 'If you like the theme, please review it on <a href="%s">WordPress.org</a>', 'aaron' ), esc_url( 'https://wordpress.org/support/view/theme-reviews/aaron' ) );?>
<br>
<b><?php printf( __( 'If you have any questions, accessibility issues or feature requests for this theme, please visit <a href="%s">http://wptema.se/Aaron</a>.', 'aaron' ), esc_url( 'http://wptema.se/Aaron' ) ); ?>
</b><br>
	<?php  esc_html_e( 'Thank you everyone who has contributed with ideas and bug reports so far! Your feedback is essential for the future development of the theme.', 'aaron' ); ?>
</div>

	<ul class="doc-menu">
		<li><a href="#aaron-menus"><?php esc_html_e( 'Menus','aaron' ); ?></a></li>
		<li><a href="#aaron-widgets"><?php esc_html_e( 'Widget areas','aaron' ); ?></a></li>
		<li><a href="#aaron-front"><?php esc_html_e( 'Front page and page templates','aaron' ); ?></a></li>
		<li><a href="#aaron-advanced"><?php esc_html_e( 'Advanced settings','aaron' ); ?></a></li>
		<li><a href="#aaron-access"><?php esc_html_e( 'Accessibility','aaron' ); ?></a></li>
		<li><a href="#aaron-fonts"><?php esc_html_e( 'Fonts','aaron' ); ?></a></li>
		<li><a href="#aaron-plugins"><?php esc_html_e( 'Plugins','aaron' ); ?></a></li>
		<li><a href="#aaron-change"><?php esc_html_e( 'Changelog','aaron' ); ?></a></li>
	</ul>

	<div class="doc-box" id="aaron-menus">
		<h3><?php esc_html_e( 'Menus','aaron' ); ?></h3>
		<?php esc_html_e( 'This theme has two optional menu locations, the Primary menu and the Social menu.','aaron' ); ?><br>

<img src="<?php echo get_template_directory_uri() . '/images/doc-menu.jpg';?>" alt="<?php esc_attr_e( 'An image describing how a submenu drops down from the Primary menu','aaron' ); ?>">
		<br>
		<b><?php esc_html_e( 'The Primary menu','aaron' ); ?></b> <?php _ex( 'is fixed at the top of the website and shows two menu levels.', 'The Primary menu', 'aaron' )?>
		<?php esc_html_e( 'This menu will collapse on smaller screens, and can then be opened and closed by a menu button. It can also be closed with the Esc key.','aaron' ); ?><br>
		<?php esc_html_e( 'A one line menu is recommended, or the menu will overlap your content. Use sub menus instead.','aaron' ); ?><br>

		<img src="<?php echo get_template_directory_uri() . '/images/doc-social.jpg';?>" alt="<?php esc_attr_e( 'An image describing how social icons are lined up next to each other in the Social menu','aaron' ); ?>"><br>

		<b><?php esc_html_e( 'The Social menu','aaron' );?></b> <?php _ex( 'is at the bottom of the page and shows logos of the social networks of your choice. It does not display any text, but has additional information for screen readers.','The Social menu', 'aaron' ); ?><br>
		<?php esc_html_e( 'The icon will be added automatically, all you need to do is add a link to your menu.','aaron' ); ?><br><br>
		<?php esc_html_e( 'Create a new menu, then click on Custom links and add your URL.','aaron' ); ?> <?php esc_html_e( 'The Link Text that you provide is used as screen reader text.','aaron' ); ?><br>
		<img src="<?php echo get_template_directory_uri() . '/images/doc-social2.jpg';?>" alt="<?php esc_attr_e( 'An image describing where to add URLS for the social menu.','aaron' ); ?>"><br>
		<?php esc_html_e( 'Choose the theme location named Social Menu, and save.','aaron' ); ?><br>
		<img src="<?php echo get_template_directory_uri() . '/images/doc-social3.jpg';?>" alt="<?php esc_attr_e( 'An image describing what the social menu will look like when a theme location has been picked.','aaron' ); ?>"><br><br>
		<?php esc_html_e( 'Troubleshooting: If your link or icon is not showing up, try using lower case letters.','aaron' ); ?><br>
		<?php esc_html_e( 'Available icons:','aaron' ); ?><br>
		<?php echo '<i> dribbble, facebook, flickr, foursquare, github, google plus, instagram, jsfiddle, linkedin, pinterest, reddit, soundcloud, stackoverflow,
		tumblr, twitter, vimeo, vine<br> yelp, youtube, wordpress, paypal, lastfm, behance, deviantart, spotify, skype, slack, amazon, steam, xing, medium, qq, codepen.</i>'; ?>
		<br><br>
		<b><?php esc_html_e( 'Advanced','aaron' ); ?></b><br>
		<?php esc_html_e( 'By default, the primary menu also shows the site title and a search form. The search form is not visible on screens smaller than 800 pixels.	You can edit these features under the Advanced settings tab in the Customizer.','aaron' ); ?>
	</div>

	<div class="doc-box" id="aaron-widgets">
		<h3><?php esc_html_e( 'Widget areas','aaron' ); ?></h3>
		<?php esc_html_e( 'The theme now has two different sidebars: one for the front page and blog index, and one for other pages.','aaron' ); ?><br>
		<?php esc_html_e( 'To show either sidebar, all you need to do is place your widgets inside them.','aaron' ); ?><br>
		<?php esc_html_e( 'To hide either sidebar, remove the widgets. The content of the page will expand when the sidebar is hidden.','aaron' ); ?><br><br>
		<?php esc_html_e( 'Both sidebars and the header and footer widget areas can hold any number of widgets. The footer widget area is shown on all pages.','aaron' ); ?><br>
		<?php esc_html_e( 'There is also one additional widget area in the footer below the social menu, where you can place a text widget and add your copyright text.','aaron' );?> <br>
	</div>

	<div class="doc-box" id="aaron-front">
		<h3><?php  esc_html_e( 'Front page','aaron' ); ?></h3>
		<?php esc_html_e( 'The standard front page has the following features:','aaron' ); ?><br>
		<b><?php esc_html_e( 'Logo:','aaron' );?></b> 
		<?php esc_html_e( 'The logo is positioned above the site title, and links to the front page. There are no size limitations.','aaron' ); ?><br>
		<b><?php esc_html_e( 'Site title:','aaron' )?></b> <?php esc_html_e( 'You will find an option to hide or change the color of your site title in the customizer.','aaron' ); ?><br>
		<b><?php esc_html_e( 'Call to action:','aaron' );?></b> 
		<?php esc_html_e( 'The Call to Action is a great way to get your visitors attention. In the customizer you can:','aaron' ); ?>
			<ul>
				<li><?php esc_html_e( 'Add your own text','aaron' ); ?></li>
				<li><?php esc_html_e( 'Add a link','aaron' ); ?></li>		
				<li><?php esc_html_e( 'Change colors','aaron' ); ?></li>
				<li><?php esc_html_e( 'Hide the button','aaron' ); ?></li>		
			</ul>
			<b><?php esc_html_e( 'Highlights:','aaron' );?></b>  
			<?php esc_html_e( 'This is a flexible way for you to feature different sections of your website. You can add upp to nine highlights.','aaron' );?><br>
			
			<?php esc_html_e( 'In the customizer you can:','aaron' ); ?>
			<ul>
				<li><?php esc_html_e( 'Add your own text','aaron' ); ?></li>
				<li><?php esc_html_e( 'Add a link','aaron' ); ?></li>	
				<li><?php esc_html_e( 'Add an icon or upload an image','aaron' ); ?></li>
				<li><?php esc_html_e( 'Change colors','aaron' ); ?></li>	
				<li><?php esc_html_e( 'Hide the individual highlights or all of them','aaron' ); ?></li>
			</ul>
			<b><?php esc_html_e( 'Tagline:','aaron' );?></b> <?php esc_html_e( 'You will find an option to hide your tagline in the customizer.','aaron' ); ?><br>
			<b><?php esc_html_e( 'Header Background:','aaron' );?></b> <?php esc_html_e( 'You can change the background image or background color in the customizer.','aaron' ); ?><br><br>

			<h3><?php esc_html_e( 'Custom front page','aaron' ); ?></h3>
			<?php esc_html_e( 'To use a custom page template for the front page, create a new page and select the template under Page Attributes.','aaron' );?><br>
			<img src="<?php echo get_template_directory_uri() . '/images/doc-page-template.jpg';?>" alt="<?php esc_attr_e( 'An image describing how to set a page template.','aaron' ); ?>">
			<br>
			<?php esc_html_e( 'Then set your new page as your static front page in the customizer or under Settings > Reading.','aaron' ); ?><br>
			<img src="<?php echo get_template_directory_uri() . '/images/doc-static.jpg';?>" alt="<?php esc_attr_e( 'An image describing how to set a static front page.','aaron' ); ?>">
			<br>

			<h3><?php esc_html_e( 'Templates','aaron' ); ?></h3>
			<?php esc_html_e( 'The Landing page template only shows your header, it does not display your footer, your featured content, post content or page content. Your header image will display as a fullscreen image.','aaron' ); ?><br>
			<?php esc_html_e( 'The Header & Footer page template only shows your header and footer, it does not display your featured content, post content or page content.','aaron' ); ?>  
			<?php esc_html_e( 'It will display the footer widget area, but not the sidebar.','aaron' ); ?><br>
			<?php esc_html_e( 'The Static and Featured page template will display the content of the selected page together with your featured content. You also need to active the Jetpack module for Featured Content.','aaron' ); ?><br>
			<?php esc_html_e( 'The Grid page template shows your posts in a responsive masonry grid. It does not display the sidebar.','aaron' ); ?><br>
			<?php esc_html_e( 'The No sidebar page template shows your page content, but it does not display the sidebar.','aaron' ); ?><br><br>

			<b><?php esc_html_e( 'Page sections','aaron' ); ?></b><br>
			<?php esc_html_e( 'Page sections are a great way to display your shortcodes, testimonials, pricing tables, contact information and similar.', 'aaron' ); ?><br>
			<?php esc_html_e( 'The two page sections can display up to 3 pages each. Pages in the top section are displayed above the blog content, and pages in the bottom section are displayed below.','aaron' ); ?><br>
			<?php esc_html_e( 'You can also show your page sections without your blog content by setting a static front page, using the Sections page template.','aaron' ); ?><br>
	</div>

	<div class="doc-box" id="aaron-advanced">
		<h3><?php esc_html_e( 'Advanced settings','aaron' ); ?></h3>
		<?php esc_html_e( 'Under the Advanced settings tab in the customizer you will find the following options:','aaron' ); ?><br>
		<ul>
			<li><?php esc_html_e( 'Show the excerpt instead of the full content on the front page, blog listing and archives.','aaron' ); ?> 
			<?php esc_html_e( 'Note: Search results show excerpts by default.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the meta information. -This will hide the category and tags.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the author and post date information.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Show the breadcrumb navigation. -Breadcrumbs are shown below the post title. ','aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the search form in the header menu.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Show the search form in the header menu on all screen sizes.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the Site title in the header menu.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Unstick the fixed header menu.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Move the meta below the post content. By default, this is shown to the right of the post content.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Hide the theme author credit text in the footer.','aaron' ); ?></li>
		</ul>
		<br>
			<b><?php esc_html_e( 'Header settings for individual posts and pages','aaron' ); ?></b><br>
<?php esc_html_e( 'To display the header together with an individual post or page, go to Edit mode and activate the Header settings that are located below your post content.','aaron' ); ?><br>
			<?php esc_html_e( 'Your post view will inherit the settings from the front page.','aaron' ); ?><br>
			<?php esc_html_e( 'Options:','aaron' ); ?><br>
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

	<div class="doc-box" id="aaron-access">
		<h3><?php esc_html_e( 'Accessibility','aaron' ); ?></h3>
		<?php esc_html_e( "Note: In version 2.0, the accessibility settings were moved from the Advanced Settings to it's own setting in the customizer.","aaron" ); ?>
		<?php esc_html_e( 'Changing the colors of the theme can affect accessibility.','aaron' ); ?>

		<ul>
			<li><?php esc_html_e( 'Skip link: the theme has one skip link at the very top that lets you skip to the content.','aaron' ); ?></li>
			<li><?php esc_html_e( 'In the customizer you can add personalized screen reader texts for your sidebar and footer.','aaron' ); ?></li>
			<li><?php esc_html_e( 'Known issues:','aaron' ); ?>
				<ul>
					<li><?php esc_html_e( 'Some widgets that uses forms (category dropdown) are missing form labels. This is a known issue with WordPress.','aaron' ); ?></li>
					<li><?php esc_html_e( 'Menus have a visible focus and can be tabbed through, but you can not navigate them using the arrow keys.','aaron' ); ?></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="doc-box" id="aaron-fonts">
		<h3><?php esc_html_e( 'Fonts','aaron' ); ?></h3>
		<?php esc_html_e( 'Aaron uses Open Sans for body, and defaults to Montserrat for headings, menus and footer texts.','aaron' ); ?>
		<?php esc_html_e( 'You will find an option to change Montserrat to a different font in the customizer.','aaron' ); ?><br><br>
	</div>

	<div class="doc-box" id="aaron-plugins">
		<h3><?php esc_html_e( 'Plugins','aaron' ); ?></h3>
		<?php esc_html_e( 'Aaron has been tested with and style has been added for the following plugins:', 'aaron' ); ?>
		<ul>
			<li><b><?php esc_html_e( 'Woocommerce','aaron' ); ?></b></li>
			<li><b><?php esc_html_e( 'bbPress','aaron' ); ?></b></li>
			<li><b><?php esc_html_e( 'Jetpack','aaron' ); ?></b><br><?php esc_html_e( 'Note: Not all of Jetpacks modules are accessibe, and some uses iframes. I have increased the contrast of some of the modules.','aaron' ); ?></li>
				<?php esc_html_e( 'Recommended modules:','aaron' ); ?><br>
				<ul>
					<li><b><?php esc_html_e( 'Featured content','aaron' ); ?></b><br>
					<?php esc_html_e( '-Once Jetpack has been activated, you can select up to six posts or pages as a front page feature. Chose a tag and add it to your posts to separate them from the rest.','aaron' );?><br>
				<?php esc_html_e( 'You can also choose a headline for your featured section. Featured images are optional and the recommended image size is 360x300 pixels.','aaron' ); ?>
					<br>
<img src="<?php echo get_template_directory_uri() . '/images/doc-featured.jpg';?>" alt="<?php esc_attr_e( 'An image describing three featured posts on the front page, two with featured images and one that only displays the post title.', 'aaron' ) ?>"><br>
					</li>
					<li><b><?php esc_html_e( 'Custom Content Type: Portfolio','aaron' ); ?></b><br>
						<?php esc_html_e( 'Aaron also supports Jetpack','aaron' ); ?> 
						<b><?php esc_html_e( 'Portfolios','aaron' ); ?></b>.
						<?php printf( __( '<a href="%s">Read more about how to setup your Portfolio on Jetpacks support site.</a>', 'aaron' ), esc_url( 'http://en.support.wordpress.com/portfolios/' ) );?>
						 <br><br>
				<img src="<?php echo get_template_directory_uri() . '/images/doc-portfolio.jpg';?>" alt="<?php esc_attr_e( 'An image describing two portfolio items.','aaron' ); ?>"><br>
					</li>
					<li><b><?php esc_html_e( 'Custom Content Type: Testimonials','aaron' ); ?></b><br>
						<?php esc_html_e( 'Aaron also supports Jetpack','aaron' ); ?> <b><?php esc_html_e( 'Testimonials','aaron' ); ?></b>. <br>
						<b><?php esc_html_e( 'Tip:','aaron' ); ?></b> <?php esc_html_e( 'I recommend creating a page and adding this shortcode, and then including the page as a front page section.','aaron' ); ?> <br> &nbsp; [testimonials columns=3 showposts=3]<br>
						<?php printf( __( '<a href="%s">Read more about how to setup your Testimonials on Jetpacks support site.</a>', 'aaron' ), esc_url( 'https://en.support.wordpress.com/testimonials-shortcode/' ) );?>
						<br><br>		
					</li>
					<li><b><?php esc_html_e( 'Sharing','aaron' ); ?></b><br>
						<?php esc_html_e( '-If you activate Jetpack sharing, your buttons will be displayed below the meta information, to the right of your post content.','aaron' ); ?>
						<br>
						<img src="<?php echo get_template_directory_uri() . '/images/doc-share.jpg';?>" alt="<?php esc_attr_e( 'An image describing how sharing buttons are added to the post footer below Tags and Categories.','aaron' ); ?>"><br>
					</li>
					<li><b><?php esc_html_e( 'Contact Form','aaron' ); ?></b></li>
				</ul>
		</ul>
		</ul>
	</div>

	<div class="doc-box" id="aaron-change">
		<h3><?php esc_html_e( 'Changelog','aaron' ); ?></h3>
		<?php esc_html_e( 'The changelog is available in the readme.txt file in your theme folder.','aaron' ); ?><br><br>
	</div>
<?php
}
