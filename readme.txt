=== Aaron ===
Contributors: Poena
Tags: threaded-comments, custom-menu, sticky-post, editor-style, translation-ready, rtl-language-support, two-columns, one-column, right-sidebar, featured-images, featured-image-header, accessibility-ready, custom-header, custom-logo
Requires at least: 5.0
Tested up to: 5.3
Requires PHP: 5.6
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Copyright: 2015-2019 Carolina Nymark

Aaron is a responsive, accessible theme with a call to action, front page highlights, page sections and two menus.

== Description ==

Description: Aaron is a responsive, accessible multi-purpose theme.
Features include Call to action and front page Highlights that will grab your visitors attention and help you feature different parts of your website.
The theme has two optional menus (including a social menu), logo upload, six page templates and three widget areas that will hold any number of widgets. 
Want to run Aaron on a company website rather than a blog? No problem, just hide the meta, the sidebars, and turn off your comments. 
I recommend that you install the Jetpack plugin to make full use of supported features like Testimonials and social sharing. 
To create a portfolio, install Jetpack and create your projects, all the templates are already shipped with the theme.
Aaron also works well with WooCommerce and bbPress. 

Please note that changing the colors of the theme can affect accessibility.

== Installation ==
1. Unzip `aaron.zip` to the `/wp-content/themes/` directory
2. Activate the theme through the 'Appearance' menu in WordPress

== Change log ==

Version 4.3, 2019-12-16
Solved a critical problem with the bottom page section for the front page.
Split the advanced settings panel into several panels because it was becoming too large
and difficult to navigate.
Added an option to include a small version of the logo in the menu.
Updated the default colors of the Call to Action to improve accessibility.

Version 4.2, 2019-07-27
Added wp_body_open to the blank template.
Minor improvements to the color contrast.
Minor changes to the documentation page.
Changed author URI.

Version 4.1, 2019-05-08
Fixed a problem with a broken link to font awesome in style.css and rtl.css
Added support for wp_body_open.
Added a block style for the gallery which hides the image captions.
Updated required WordPress version and PHP version.


Version 4.0, 2019-03-17
Included a license file.
Loaded fonts in the customizer so that you can preview what the fonts look like.
Added more fonts and adjusted the font size slightly depending on which font is used.

Note: the way the post and page title display in the editor is still buggy.


Version 3.9, 2019-01-03
Fixed problems with icons that did not show up correctly after updating Font Awesome.
Updated version numbers for styles and scripts to make sure that the correct files, and not the cached files, are loaded.
Only include the styles for WooCommerce and BBPress if the plugins are active.
Moved WooCommerce and BBPress styles to separate files.
Minor style changes for WooCommerce. Increased color contrast. Added underlines to some links, and made input fields larger.
Moved the script for the skip link, to reduce the number of render blocking scripts.


Version 3.8, 2018-12-31
Updated documentation.
Fixed a problem with the social menu. Now if there is no social media icon available for the link that
has been added, a link symbol will be used instead.
Updated Font Awesome to version 5.6.3. 
Added more social media icons to the list.

Version 3.7, 2018-12-09
Added an option to open the highlight links in a new tab.

Version 3.6, 2018-12-01
Fixed a critical problem with the sanitize callback that prevented some customizer options from saving.

Version 3.5, 2018-11-23
Updated the readme file and the documentation.
Minor code style changes to better comply with WordPress coding standards.
Updated the rtl stylesheet.
Updated the sanitization for the customizer options.
Added a screen reader link text to the highlights, if there is no headline or text.
Menu: Increased the line height, set sub menu width to auto, and reduced the size of the arrow to remove the duplicate underline on hover.
Also increased the line height for the site title.
Added an option for body font family, and added support for more fonts.
Added more color options and moved the header background color option to the colors section.
Moved the custom css from functions.php to a separate file.
Further testing and style improvements in preparation for the new block editor:
	Updated .wp-block-cover-image to the new class: .wp-block-cover.
	Updated .is-large to the new class: .is-style-large.
Fixed a problem with the button block background and made sure that the link is underlined.


Version 3.4, 2018-10-19
Housekeeping: Updated links. Updated credits in the readme file. 
CSS and PHP code style changes according to WordPress coding standards.
Removed the JavaScript in navigation.js that added the screen reader text to the tag cloud 
and the alt text to the featured images, since this has been fixed in WordPress core.
Fixed a problem with a font not loading in the new editor.


Version 3.3, 2018-10-06
Corrected the position of the category and portfolio icons.
Fixed a styling problem with displaying the Jetpack testimonials in the search results.
Made sure that the content width option only affects screens wider than 640 pixels.
Added support for wp-block-styles to better match the Gutenberg editor, and improved the styling of some elements including the button block.
Added a blank template that you can use if you only want to display Gutenberg blocks.


Version 3.2, 2018-09-28
Made sure that the custom templates works for all pages, not only for the front page.
Made sure that the meta box options works with the Jetpack portfolio and testimonial post formats.
Added a testimonial widget. This widget requires the Jetpack testimonial functionality to be activated.
Made sure that the excerpt_more filter returns the default value in the admin.
Included a footer link to the privacy policy page, if one is set up.
Minor updates to the documentation.
Minor code styling updates.
Minor style changes: a left side border was added to the blockquote, a border was removed below the footer widgets. Matched font and styles used in the gutenberg editor.
Updated theme and author URI.
Updated screenshot.


Version 3.1, 2018-01-28
Fixed an issue with the featured content option.
Changed the customizer type from text to url for the link options.
Moved the pingback url from header.php into a separate, conditional function.
Moved the content width global setup inside the aaron_setup function.
Improved sanitization for the metabox options.
Minor code styling updates.


Version 3.0, 2017-02-25
Corrected a missing singular placeholder in comments.php.
Made sure that html can also be used for the Call to Action text.
Improved escaping.
Removed the alt text option for images used in the highlights, to make sure that the theme does not overwrite existing alt text settings.
Added starter content for the header menu.


Version 2.9, 2016-12-08
Corrected a translation problem in customizer.php.
Added an option to change the background color of the body.
  -This option does not affect the background color of the menu, posts, widgets or footer.
Minor updates to the documentation.


Version 2.8, 2016-12-07
Removed the minified stylesheet, as requested by users.
Added support for selective refresh in the customizer.
Added 6 new highlight icons and made the icon names translatable.
Added an additional css class to the highlights (hl+ the number).
HTML is now allowed in the highlights, this makes it possible to break the text into separate lines. (I recommend that you only place short texts here.)
Added an option where you can remove the footer credit texts. This option is found under the Advanced Settings in the customizer.
Added the ability to create new pages when the Front page Sections are selected. This option requires at least WordPress 4.7.
Moved the front page section code from index.php to their own functions in functions.php: aaron_top_sections() and aaron_bottom_sections().
Two new files where added for the front page sections: content-top.php and content-bottom.php.
Fixed a php error in archive-jetpack-testimonial.php.
Minor updates to the documentation.
Removed the reset fuctionality from the customizer.
Updated the checkbox sanitization.
Added some starter content to help users see where to add widgets and a social menu.
Removed an unused function.


Version 2.7, 2016-07-12
Added a page template without a sidebar.
Moved the Call to action from a customizer panel to a customizer section.
Updated the documentation.
Updated the theme tags.
Updated microdata.
General code improvements. Replaced query_posts with WP_Query.
Moved jetpack theme support from functions.php to jetpack.php.
Removed the language files.
Added an option where you can limit the visibility of the featured images.
Added an option to unstick the fixed header menu.
Added an option to display the post meta below the post content.
Added support for WordPress custom logo, removed support for the old jetpack site logo.

Version 2.6, 2016-02-07
Made the image and icons in the Highlights click able if there is a link.
Added an option to the customizer where you can change the width of the main content. 
Renamed the Fonts section to Typography.
Improved the capitalization setting so that you (finally :) ) can display the headings just the way you wrote them, without forcing capitalization.
Moved the capitalization setting from the Accessibility section to Typography.
Improved the css for bbPress.
Added a grid page template.
Improved the landing page template so that the header image displays as a full screen image.
Improved the header and footer page template by removing white space between the sections.


Version 2.5, 2016-01-19
Fixed a critical css bug.
Added support for Jetpack share on pages.
Added a widget area to the header.
Removed the highlight skip link. The remaining skip link now skips directly to the content.

Version 2.4, 2016-01-18
Made sure that the default Call to Action button is only shown if the user is logged in.
Fixed a bug with the highlight icons.

Version 2.3, 2015-12-25
Fixed two issues with the header background:
	-If no image is used, the default background color option should now work properly.
	-Resetting to the default image should now work.
Fixed an issue with displaying the default font in the customizer.
Fixed an issue that caused the front page sidebar to display below the posts.
Added a meta box option to display the header on individual posts or pages. 
Added an option to show the search form in the header menu on all screen sizes.
Added a rtl stylesheet.
Changed the mobile menu so that sub menus are visible.
Made some changes to the css to improve readability.
Updated the comment navigation and reset the comment form to the default.
Removed unnecessary code, reset the search form to the default, and improved escaping.
Updated the documentation and language file.


Version 2.2, 2015-12-10
Added a second sidebar for the front page. Note: this replaces the options to show and hide the sidebar.
Added an alt text option to the highlight images.
Added the css class "highlight-img" to the highlight images (for those who wishes to make changes).
Added an option to hide the meta information on search results.
Added a font option.
Updated the documentation and language file.


Version 2.1, 2015-06-05
Removed the example highlights. (They caused more issues than their worth =) )
Added defaults to the header background image position.
Fixed contrast issues when the header image is not loaded ( Updated default background color and default CTA text color).
Fixed a bug with the Call To Action background color.
Added aria-hidden="true" to decorative icon fonts.
Added a template that combines a static front page with featured posts (Requires Jetpack).


Version 2.0, 2015-05-21
Fixed a bug where the example highlights were showing even if the highlights had been edited. 
Added options to display pages as separate sections of the front page.
Added an additional template that you can use with the new page sections if you want to use a static front page.
Added an option to replace UPPERCASE with Capitalized. This setting can be found under accessibility.
Added support for Jetpack testimonials.
Increased the width of pages and posts (when the meta is hidden).
Added an option to change the Call to Action background color.
The header now has no forced height and will instead fit your content.
Fixed html errors and a bug with comments and avatars.
Updated documentation and language files, and added attribution for Sela WordPress theme by Automattic, for help with testimonials :)


Version 1.9, 2015-05-15
Added new settings to help you position the header background image.
Added a new landing page template that only displays the header ( Note: this template does not display your page content).
Updated the documentation and language files.


Version 1.8, 2015-05-11
Added options to change the text-and background color of the Highlights.


Version 1.7, 2015-05-08
Added an option to change the text color of the Call to Action button.
Added an additional widget area to the footer below the social menu, where you can add a copyright text.

Highlights:
You can now add up to 9 Highlights.
You can also display the Highlights without icons, or upload your own image.
The minimum height of the Highlights have been adjusted.

Only link to to the customizer if the user has access to it.
Only load the admin stylesheet on the specific page.
Minor css improvements.
Escaped some forgotten urls
Updated the documentation and language file.


Version 1.5
Set the minimum height of the header to the viewport height.
Removed the recommended image size for the header.
Removed social icons from the header menu.
Slight increase of font-size on some elements.


== Folders included in this theme ==
images/ -contains header images, borer and images for the setup help.
languages/ -contains language files.
inc/ -contains the template tag and customizer files.
fonts/ -contains Font Awesome files.
js/ -contains javascript
templates/ -contains page templates

== Resources Used In This Theme ==
Aaron is a derivative work of:
Underscores https://underscores.me/, (C) 2012-2018 Automattic, Inc. License: GNU General Public License v2 or later
Universal https://themes.joedolson.com/universal/ (C) Joseph C Dolson. License: GNU General Public License v2 or later
Sela https://wordpress.com/themes/sela/, based on Underscores https://underscores.me/, (C) 2012-2018 Automattic, Inc. License: GNU General Public License v2 or later
Twenty Seventeen https://wordpress.org/themes/twentyseventeen/ Copyright 2016-2018 WordPress.org, GNU General Public License v2 or later
Twenty Nineteen https://wordpress.org/themes/twentynineteen/ Copyright 2018 WordPress.org, GNU General Public License v2 or later
Header image by Ian Prince. Source: https://tookapic.com/ianprince/5613-les-dents-du-midi, License: CC0.
Image used in the documentation: Karolina Grabowska. Source: https://tookapic.com/kaboompics/3311-dead-flower, License: CC0.

Fonts
Font Awesome by @davegandy - https://fontawesome.com - @fontawesome
License - https://fontawesome.com/license/free 
# Icons: CC BY 4.0 License (https://creativecommons.org/licenses/by/4.0/)
In the Font Awesome Free download, the CC BY 4.0 license applies to all icons
packaged as SVG and JS file types.

# Fonts: SIL OFL 1.1 License (https://scripts.sil.org/OFL)
In the Font Awesome Free download, the SIL OLF license applies to all icons
packaged as web and desktop font files.

# Code: MIT License (https://opensource.org/licenses/MIT)
In the Font Awesome Free download, the MIT license applies to all non-font and
non-icon files.

JavaScript
Keyboard Accessible Dropdown Menus
Copyright 2013 Amy Hendrix (email : amy@amyhendrix.net), Graham Armfield (email : graham.armfield@coolfields.co.uk)
License: MIT

Sanitization
Copyright (c) 2015-2018, WordPress Theme Review Team
https://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php


CSS
Blueprint, MIT License, https://github.com/joshuaclayton/blueprint-css/blob/master/LICENSE
https://github.com/joshuaclayton/blueprint-css

Normalize, MIT License, https://github.com/necolas/normalize.css/blob/master/LICENSE.md
https://necolas.github.io/normalize.css/
