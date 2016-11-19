=== Aaron ===
Contributors: Poena
Tags: threaded-comments, custom-menu, sticky-post, editor-style, translation-ready, rtl-language-support, two-columns, one-column, right-sidebar, featured-images, featured-image-header, accessibility-ready, custom-header, custom-logo
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2015-2016 Carolina Nymark

= Description ==

Description: Aaron is a responsive, accessibility-ready multi-purpose theme.
Features include Call to action and front page Highlights that will grab your visitors attention and help you feature different parts of your website. T
The theme has two optional menus (including a social menu), logo upload, six page templates and three widget areas that will hold any number of widgets. 
Want to run Aaron on a company website rather than a blog? No problem, just hide the meta, the sidebars, and turn off your comments. 
I recommend that you install the Jetpack plugin to make full use of supported features like Testimonials and social sharing. 
To create a portfolio, install Jetpack and create your projects, all the templates are already shipped with the theme.
Aaron also works well with Woocommerce and bbPress. 
If you have any questions, accessibility issues or feature requests for this theme, please visit http://wptema.se/Aaron.

== Installation ==
1. Unzip `aaron.zip` to the `/wp-content/themes/` directory
2. Activate the theme through the 'Appearance' menu in WordPress

Please note that changing the colors of the theme can affect accessibility.

== Change log ==
Version 2.8, 2016-11-14
Removed the minified stylesheet, as requested by users.
Added support for selective refresh.
Added an option where you can remove the footer credit texts. This option is found under the Advanced Settings in the customizer.

Added the ability to create new pages when the Front page Sections are selected.
Moved the front page section code from index.php to their own functions in functions.php:
aaron_top_sections() and aaron_bottom_sections().
Two new files where added for the front page sections, content-top.php and content-bottom.php.

Added an additional class to the highlights (hl+ the number).
HTML is now allowed in the highlights, this makes it possible to break the text into separate lines. 
(I encourage you to only place short texts here, and I have decided to keep the text field instead of adding a text area.)



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
Underscores http://underscores.me/, (C) 2012-2015 Automattic, Inc. License: GNU General Public License v2 or later
Universal http://themes.joedolson.com/universal/ (C) Joseph C Dolson. License: GNU General Public License v2 or later
Sela https://wordpress.com/themes/sela/, based on Underscores http://underscores.me/, (C) 2012-2015 Automattic, Inc. License: GNU General Public License v2 or later

Header image by Ian Prince. Source: https://tookapic.com/ianprince/5613-les-dents-du-midi, License: CC0.
Image used in the documentation: Karolina Grabowska. Source: https://tookapic.com/kaboompics/3311-dead-flower, License: CC0.

Fonts
Font Awesome by @davegandy - http://fontawesome.io - @fontawesome
License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)

Montserrat
Julieta Ulanovsky, SIL Open Font License, 1.1

JavaScript
Keyboard Accessible Dropdown Menus
Copyright 2013 Amy Hendrix (email : amy@amyhendrix.net), Graham Armfield (email : graham.armfield@coolfields.co.uk)
License: MIT