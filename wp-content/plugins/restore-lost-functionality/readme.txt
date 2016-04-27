=== Restore Lost Functionality ===
Contributors: dartiss
Donate link: http://artiss.co.uk/donate
Tags: blogroll, comment, image, link, shortlink, srcset, title
Requires at least: 3.3
Tested up to: 4.5
Stable tag: 2.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add or remove features to restore previous WordPress functionality.

== Description ==

This plugin allows you to add/remove features to restore previous WordPress functionality. Where this function change requires more than a few lines of code, and an existing plugin exists to do this, a link will be provided so that this plugin can be installed instead and it's installation status will be shown on this screen.

Features are often removed simply due to streamlining the UI but sometimes there can be a more serious reason for the change. Please ensure you read all the details in this README before proceeding.

The following features are available for adding/removing...

* Move comment text field to the bottom (removed in WordPress 4.4)
* Re-enable Get Shortlink button (removed in WordPress 4.4)
* Re-add advanced image properties (removed in WordPress 3.9)
* Add Links Manager to the administration menu (removed in WordPress 3.5)
* Once Links Manager is back you can also add the "Link This" bookmarketlet (removed in WordPress 2.5)
* Option to display Shortlink in admin toolbar (removed in WordPress 3.3)
* Remove SRCSET parameter from images (added in WordPress 4.4)
* Add the ability to specify a title for links (removed in WordPress 4.2)

Once the plugin is installed head to Settings => Restore Functionality menu in the administration screen and switch on the functionality that you require. Only the functions available for your version of WordPress will be displayed. Further information is available via the Help tab at the top of the screen.

Please see 'Other Notes' for full details on the functions that this plugin covers, as well as full details on why they were changed in the first place.

== Comment Text Field ==

In WordPress 4.4 the comment text field was moved to after the other comment fields (name, etc). This was because, when users clicked on the reply button, they were taken to the comment text area. If a user was on mobile, they may not even see the comment name and email fields and may write and submit a comment only to return back with an error. Therefore this change addressed usability and accessibility issues.

By activating this option within this plugin, the comment text field will be moved to the bottom of the comment section again.

== Get Shortlink Button ==

The Get Shortlink button, available in the post editor, was removed in WordPress 4.4 in an effort to clean the interface. Activating this option within this plugin will cause it to re-appear.

== Image Properties ==

In WordPress 3.9 the ability to easily add a border, vertical, and horizontal padding to images was removed. This was done to simply clean the UI as these changes can be easily made via CSS.

To re-add these properties you must install the [Advanced Image Styles plugin](https://wordpress.org/plugins/advanced-image-styles/ "Advanced Image Styles"), written by Gregory Cornelius. An installation link to this plugin can be found in the Restore Lost Functionality options screen.

== Link Manager ==

Removed in WordPress 3.5, the Link Manager (which some use to build blogrolls) is disabled by default. It was removed because it was hardly used and not felt necessary to be part of the standard WordPress installation.

Activating this option with this plugin will cause the Links administration menu option to appear.

== Link This Bookmarklet ==

Removed in WordPress 2.5 this bookmarklet, once saved to your browser favourites, will make it easy to add any site you're visiting to your Link Manager.

== Shortlink in Admin Toolbar ==

When viewing posts with the admin toolbar switched on, there was an option to get a shortlink. This was removed in version 3.3 because it was felt it was no longer required.

Activating this option with this plugin will cause the shortlink option to be dsplayed in the admin. toolbar when viewing posts.

== SRCSET Attribute ==

This parameter was added in WordPress 4.4 to improve responsive image output. However, it's known to cause issues with some plugins and themes (particularly when images are served via a CDN).

Activating this option with this plugin will mean that the SRCSET parameter will no longer be added to images, although this may have a detrimental effect on responsive image output.

== Title for Links ==

Removed in version 4.2, WordPress actively discourages the use of title attributes in links as they are largely useless outside of providing the "hover tooltip" many visual users enjoy, and more importantly, they don't promote good accessibility. You can read more about the accessibility issues that it causes here.

To re-add the link title option you must install the [Restore Link Title Field plugin](https://wordpress.org/plugins/restore-link-title-field/ "Restore Link Title Field"), written by Samuel Wood (Otto) and Sergey Biryukov. An installation link to this plugin can be found in the Restore Lost Functionality options screen.

== Installation ==

Restore Lost Functionality can be found and installed via the Plugin menu within WordPress administration. Alternatively, it can be downloaded and installed manually...

1. Upload the entire `restore-lost-functionality` folder to your wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it, you're done!

Once installed, head to Settings -> Restore Functionality to switch on the WordPress functions that you'd like to bring back to life!

== Frequently Asked Questions ==

= Not all the functionality appears in the options screen =

Only those functions which are currently disabled in your WordPress installation will appear.

== Screenshots ==

1. The options screen with help tab open

== Changelog ==

= 2.1.1 =
* Maintenance: Updated branding, inc. adding donation links

= 2.1 =
* Enhancement: Added the 'Link This' bookmarklet, as removed in WordPress 2.5.

= 2.0 =
* Enhancement: To keep code size down and to prevent the repetition of code already available in the plugin directory, where a solution involves quite a bit of code and it's already been done via another plugin, I now simply link to that plugin but show the current status of it - i.e. whether it's installed, etc.
* Enhancement: New option to re-enable shortlink in admin toolbar
* Enhancement: New option to put the comment text field back at the bottom, rather than above the name, email, etc.
* Enhancement: New option to enable SRCSET on images
* Enhancement: New option to re-add advanced image properties
* Enhancement: Re-written help and the text on the admin screen - in particular, put some context around why the features were removed in the same place
* Bug: Eliminated some PHP errors

= 1.0 =
* Initial release

== Upgrade Notice ==

= 2.1.1 =
* Minor update to change branding

= 2.1 =
* Added 'Link This' bookmarklet for the quick saving of sites to the Link Manager

= 2.0 =
* Rewrite of initial release and loads of new functions!

= 1.0 =
* Initial release