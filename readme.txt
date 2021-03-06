# Silverclean Lite

**Contributors:** iceable
**Requires at least:** WordPress 4.7
**Stable tag:** 1.2.18
**Version:** 1.2.18
**Tested up to:** 5.5
**Requires PHP:** 5.6
**License:** GPLv2 or later
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html
**Tags:** one-column, two-columns, right-sidebar, custom-header, custom-menu, featured-images, footer-widgets, full-width-template, sticky-post, theme-options, threaded-comments, translation-ready, blog, entertainment, news

A clean, elegant and reponsive WordPress Theme by Iceable Themes.


## Description

Silverclean Lite is a clean, elegant and responsive theme for WordPress. Perfect for various uses from personal blogging to small business website.

It features two widgetizable areas (sidebar and optional footer), a custom menu location for the navbar, custom logo and favicon and custom header image.

Silverclean Lite is the lite version of Silverclean Pro, which comes with many additional features and access to premium class pro support forum and can be found at https://www.iceablethemes.com

### Getting started with Silverclean Lite

* Once you activate the theme from your WordPress admin panel, you can visit the customizer (Appearance > Customize) to set your own logo, header image, background, menus etc.
* If you will be using a custom header image, you will find options to enable or disable it on your homepage, blog index pages, single post pages and individual pages.
* It is highly recommended to set a menu yourself, instead of relying on the default menu. Doing so will automatically activate the dropdown version of your menu in responsive mode.
* Footer widgets: The widgetizable footer is disabled by default. To activate it, simply go to Appearance > Widgets and drop some widgets in the "Footer" area, just like you would do for the sidebar. It is recommended to use 4 widgets in the footer, or no widgets at all to disable it.
* Additional documentation and free support forums can be found at https://www.iceablethemes.com under "support".

### Translation

Bundled translations (GPL Licensed):
* French (fr_FR) translation: Copyright 2013-2020, Iceable Themes - https://www.iceablethemes.com

Translating this theme into your own language is quick and easy, you will find a .POT file in the /languages folder to get you started. It contains about 80 strings only.
If you don't have a .po file editor yet, you can download Poedit from https://www.poedit.net/download.php - Poedit is free and available for Windows, Mac OS and Linux.

If you have translated this theme into your own language and are willing to share your translation with the community, please feel free to do so on the forums at https://www.iceablethemes.com
Your translation files will be added to the next update. Don't forget to leave your name, email address and/or website link so credits can be given to you!


## Copyright

Silverclean Lite WordPress Theme, Copyright 2013-2020 Iceable Themes - https://www.iceablethemes.com
Silverclean Lite is distributed under the terms of the GNU GPL

Silverclean Lite bundles the following third-party resources:

superfish, Copyright 2013 Joel Birch.
**License:** MIT and GPL
Source: http://users.tpg.com.au/j_birch/plugins/superfish/

HTML5 Shiv v3.6, Copyright @afarkas @jdalton @jon_neal @rem
**License:** MIT/GPL2
Source: https://github.com/aFarkas/html5shiv


## Changelog

### 1.2.18
August 29th, 2020
* Added "Tested up to" and "Requires PHP" headers in style.css
* Added wp_body_open()
* Updated copyright

### 1.2.17
February 28th, 2019
* Updated copyright

### 1.2.16
January 31th, 2018
* Updated copyright

### 1.2.15
November 18th, 2017
* Fixed missing text-domain in index.php
* Updated Readme.txt file to the new format for WordPress.org
* Updated Tags list
* Tested with WordPress 4.9
* Removed support for WordPress lesser than 4.7

### 1.2.14
October 10th, 2017
* Refactored all PHP code to conform to the WordPress coding standards

### 1.2.13
August 25th, 2017
* Removed metadata for pages in search results
* Wrapped pingback url in appropriate conditionals in header.php
* HTML5Shiv is now properly enqueued
* Prefixed theme constants names
* Using the_archive_title() for archive page titles
* Ordered placeholders for printf() in footer.php
* Removed additional support for child themes for WP<4.7 (was relying on file_exists() which emits a PHP E_WARNING upon failure)
* Fixed singular placeholder in gettext function in comments.php

### 1.2.12
June 21th, 2017
* Removed function_exists('wp_site_icon') checks and related functions (deprecated since WP 4.3)

### 1.2.11
May 8th, 2017
* Added theme constants
* Load CSS and JS file with theme version to prevent potential issue after updates

### 1.2.10
Mars 8th, 2017
* Fixed silverclean_remove_rel_cat() to only remove "category" (but not "tag") value from the rel attribute
* Added php tags in footer.php, making it less confusing for users who want to modify the footer note

### 1.2.9
January 9th, 2017
* Updated copyright to 2017

### 1.2.8
December 12th, 2016
* Now using get_theme_file_uri() to register stylesheets and javascripts for WordPress 4.7
* Fixed display glitch in main navbar's submenu
* Tested with WordPress 4.7

### 1.2.7
November 14th, 2016
* Updated searchforms to HTML5 markup

### 1.2.6
August 29th, 2016
* Removed function silverclean_render_title() used as a fallback for title tag support
* Dropped support for WordPress lesser than 4.1
* Tested with WordPress 4.6

### 1.2.5
June 16th, 2016
* Tested with WordPress 4.5.2
* Updated external links to wordpress.org and iceablethemes.com to https
* Removed php closing tags from end of files to prevent potential issues
* Updated theme tags for WordPress.org

### 1.2.4
January 13th, 2016
* Enhanced support for <!--more--> quicktag
* Updated copyright to 2016
* Tested with WordPress 4.4.1

### 1.2.3
November 23rd, 2015
* Fixed issue with sidebar in WordPress 4.4
* Tested with WordPress 4.4 (beta 4)

### 1.2.2
November 5th, 2015
* Fixed silverclean.min.css which wasn't minified in release 1.2.1

### 1.2.1
November 4th, 2015
* Disabled the "favicon" theme setting for WordPress 4.3+ (no longer useful since WP 4.3+ includes wp_site_icon)
* Added screen-reader-text CSS support
* Changed textdomain to theme slug: 'silverclean-lite'
* Tested with WordPress 4.3

### 1.2.0
July 22th, 2015
* Replaced theme options panel with Customizer implementation
* Added "title-tag" support
* Added editor-style
* Changed site title markup to H1
* Updated fr_FR translation file

### 1.1.15
May 8th, 2015
* Tested with WP 4.2.1
* Enhanced menu items: the whole "button area" is now clickable, not just the text
* Added option to display tagline
* Added option to chose between "excerpt" or "full content" for the blog index page
* Added option to switch off responsiveness
* Made all strings translatable, including the backend
* Updated POT file
* Added french (fr_FR) translation
* Added admin notice when menu is not set (on theme option page only)
* Merged header image code conditionals and moved to header.php
* Various PHP/HTML optimizations
* Removed obsolete code from comments.php
* Added extra user permission check in icefit-options
* Enhanced validation and sanitation in icefit-options
* Prefixed hook (silverclean-style) to enqueue style.css
* Now using core version of hoverintent
* Merged all front-end javascripts in silverclean.dev.js and minified in silverclean.min.js
* Merged all front-end css in silverclean.dev.css and minified in silverclean.min.css
* Removed content filters
* Appropriately use the_title_attribute() to escape title attributes in index.php
* Updated copyright date
* Updated description
* Updated credits

### 1.1.14
September 24th, 2014
* Tested with WP 4.0
* Fixed hAtom structured data (Errors like Missing required field "entry-title" / "updated" / hCard "author" in Google Webmaster tools)
* Removed hentry class from pages (hentry is irrelevant for static content)

### 1.1.13
September 1st, 2014
* Added ellipsis (...) to the end of truncated excerpts when displaying the "read more" button (based on user feedback).
* Fixed W3C validator error caused by the "X-UA-Compatible" meta tag. The theme now fully validates as HTML5.
* Replaced (has_post_thumbnail()) with ('' != get_the_post_thumbnail()) in single.php (as per codex recommendation - fixes an occasional issue)
* Removed some unused CSS code
* Fixed an odd glitch with footer widgets columns
* Fixed CSS glitch in Firefox with large logo and featured images

### 1.1.12
June 16th, 2014
* Removed unused function silverclean_get_settings()
* Fixed: Using sane defaults (No setting is saved in the database without explicit user action)

### 1.1.11
May 19th, 2014
* Moved $content_width definition into a callback function (hooked to after_setup_theme)
* Updated copyright (2013-2014)
* Tested with WordPress 3.9.1

### 1.1.10
March 31th, 2014
* Added paginated pages support

### 1.1.9
February 4th, 2014
* Added "Support and Feedback" in theme options
* Tested with WordPress 3.8.1

### 1.1.8
January 2nd, 2014
* Updated tags for WordPress 3.8: fixed-layout and responsive-layout
* Updated screenshot to 880x660px for WordPress 3.8

### 1.1.7
November 18th, 2013
* Bugfix: Appropriately use 'wp_enqueue_scripts' to enqueue CSS stylesheet
* Changed comment about removing credit link in footer.php (compliance)

### 1.1.6
November 6th, 2013
* Changed title attribute in footer credit link (WPTRT compliance)

### 1.1.5
November 5th, 2013
* Tested with WordPress 3.7.1
* Improved child-theme support
* Fixed: multi-level sub-menu display and positionning

### 1.1.4
October 21st, 2013
* Translation information in readme.txt
* Added: Option to use a text-based site title instead of a logo
* Fixed: inconsistent logo padding

### 1.1.3
October 14th, 2013
* Updated: sticky posts styling
* Updated: minor enhancements to some HTML tags formattings
* Updated: now enqueuing style.css, allowing users to easily add their own CSS rules
* Fixed: default sidebar display (when no widgets are set) in page.php
* Fixed: only display category icon in postmeta when a category is set (fix for attachment pages)
* Added: image navigation links on attachment pages
* Updated POT file
* Added: esc_url() used with home_url() in header.php
* Added: tracking tag on link to Silverclean Pro for statistics
* Tested with WP 3.6.1

### 1.1.2
July 1st, 2013
* Fixed: issues with image alignments.
* Tested with WP 3.5.2

### 1.1.1
May 31, 2013
* Patched a little glitch in option framework (causing minor issues on new installations)
* Patched an issue with custom header display setting on new installations and homepage

### 1.1
May 24th, 2013
* Revision, enhancement and clean up of the whole code, in accordance with WP best practices
* Removed the slider which was using CPT (considered plugin territory by the WPTRT)
* Replaced the slider with WP custom header implementation
* Ability to show/hide custom header on front page, blog index, single posts and individual pages

### 1.0.5
May 2nd, 2013
* Fixed: Changed license to GPLv2 for improved compatibility
* Fixed: Escaping user-entered data before printing
* Fixed: Appropriately prefixed all custom functions
* Removed: Unnecessary enqueuing of jQuery
* Removed: Unnecessary use of function_exist() conditional
* Removed: Unnecessary use of dynamic css
* Removed: Unused images files from the option framework
* Updated: Author URI

### 1.0.4
April 18th, 2013
* Fixed: PHP notice upon first activation on a new instalation.

### 1.0.3
April 18th, 2013
* Fixed: PHP notice upon activation when upgrading from 1.0.1
* Fixed: Further enhancement to Icefit Improved Excerpt to preserve styling tag without breaking the markup

### 1.0.2
April 16th, 2013
* Added: Option to choose what content to display on blog index pages (Full content, WP default excerpt or Icefit improved excerpt)
* Added: Option to activate the slideshow on blog index pages
* Added: Support for optional captions for slides
* Added: /languages folder with default po and mo files and POT file for localization
* Fixed: Icefit Improved Excerpt processing was breaking the markup in some situations
* Changed: Updated Theme URI to Silverclean Lite demo site

### 1.0.1
March 14th, 2013
* Added: No-JavaScript fallback for theme options.
* Changed: default logo is more generic, with no text.
* Changed: Updated Theme and Author URI
* Changed: Updated readme.txt

### 1.0
March 6th, 2013
* Initial release
