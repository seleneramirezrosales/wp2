=== Text Snipper ===
Contributors: Jordan Carter
Tags: text, snip, text snipper, ellipses, ellipsis, truncate, multi-line, overflow, trim, ...
Tested up to: 4.7
Stable tag: 1.0
Author URI: https://jordanwebdev.com
License: GPLv3 or later

An easy to use text truncator that trims down multi-line overflowing text and adds an ellipses("...") to it.

== Description ==

This plugin allows you to specify in the settings page a CSS class, and then looks for any elements that contain it and trims the text down so that it does not overflow its container's height. This is for vertical trimming of multi-line text, and also works if the element has direct children.

= HOW TO USE =

Once you install and activate the plugin, there will be a new tab for it under the "settings" admin menu. Go to this page, and enter the name of the CSS class you are using in your HTML to specifiy which elements should be truncated. Click save, and that's it!

== Installation ==

1. Download from plugins repository
2. Activate plugin

== Frequently Asked Questions ==

* What if my HTML class has children?

Currently, the plugin handles direct children, as well as elements with no children. Just provide the HTML class of the parent element, and the plugin will do the rest!

== Changelog ==

1.0 - 18/Dec/2016

* Fixed issues with handling direct children of the element with the specified HTML class.

== Upgrade Notice ==

= 1.0 =
Launch!

== Screenshots ==

1. Settings page with an HTML class entered.
2. Truncation in action.

== License ==

    Copyright 2016 Jordan Carter

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA