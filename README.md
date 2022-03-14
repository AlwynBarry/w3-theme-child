# w3-theme-child
A child theme to w3-theme.  Use this as your active theme, and add any customisations in here.  They will not be lost when the parent theme is updated.

w3-theme is a ready-to-use Wordpress Gutenberg theme using the w3.css micro-framework, grid-based for fully responsive websites, with added built-in support for the GetWid Gutenberg blocks collection.

# Author
Alwyn Barry

## Copyright
(c) Alwyn Barry, 2021

## License
GPLv2 or later (https://www.gnu.org/licenses/gpl-2.0.html)

## Written
Version 0.1: 9/4/2021

## Version
1.0

## Date Published
2022-03-14

# Technologies
The parent theme, w3-theme, is based on `_s` (Underscores) Theme by Automattic, heavily modified to replace base CSS with w3.css

* Uses w3.css (see https://www.w3schools.com/w3css/)
* Uses w3m-navbar (see https://github.com/AlwynBarry/w3m-navbar)
* Uses BreadcrumbTrail (see http://themehybrid.com/plugins/breadcrumb-trail)
* Enables use of the GetWid Blocks Collection (see https://wordpress.org/plugins/getwid/)

# Installation
1. Ensure you have already installed w3-theme (https://github.com/AlwynBarry/w3-theme)
2. In your Wordpress Admin panel, go to Appearance > Themes and click the Add New button
3. Click Upload Theme and Choose File, then select this theme's .zip file. Click Install Now
4. (Optional) Install the GetWid Gutenberg Block Collection (see https://wordpress.org/plugins/getwid/), activate it, and set it up via the plugin's Settings
5. In the Wordpress Theme Admin panel, click Activate on w3-theme-child to use your new theme right away
6. The theme has some basic Customizer options to set the site title, sub-title, icon, menus etc
7. Edit the w3-theme-child style.css file to modify default colors, typography, etc.

Because the theme is designed to work with Gutenberg Blocks, there are only a few base Page and Post Layouts.  You should use Block layouts to layout the pages and posts as you wish.

# Credits
* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., GPLv2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
* Using w3.css https://www.w3schools.com/w3css/, (C) Jan Egil and Borge Refsnes., Free to use without license.
* Using BreadcrumbTrail v0.6.1, (C) Justin Tadlock <justin@justintadlock.com>, 2008 - 2013 (http://themehybrid.com/plugins/breadcrumb-trail, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

# Frequently Asked Questions

## Does this theme support any plugins?

W3Theme includes support for Gutenberg Blocks, WooCommerce and for Infinite Scroll in Jetpack, as well as support for the GetWid Blocks Collection.

## What features are built in?

* There is built-in support for styles for the GetWid Gutenberg blocks collection, though you will need to install and activate the GetWid plugin
* There is built-in support for responsive mobile-ready main menu, responsive header, footers and content.
* There is also built in support for 'scroll to top', shrinking and sicky headers.
* There is built in support for JT, Yoast and NavXT Breadcrumbs or it will generate a native breadcrumb trail, depending on what plugins are active.  There is also Breadcrumb support for BBPress features.
