=== P2 Header Ad ===
Contributors: versluis
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=34B76TPRWMWAE
Tags: p2, advert, ad, header, code
Requires at least: 3.3
Tested up to: 4.0
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Places a 468x80 pixel advert inside the header of Automattic's wonderful P2 Theme.

== Description ==

Places a 468x80 pixel advert inside the header of Automattic's wonderful P2 Theme. Other sizes will work but may require CSS tweaking. 

== Installation ==

1. Either: Upload the entire folder to `/wp-content/plugins/` directory
1. Or: download the ZIP file, then head over to Plugins - Add New - Install, then browse to your file
1. Or: from Plugins - Add New, search for this plugin and hit "install"
1. Then: Activate it through the 'Plugins' menu in WordPress
1. Under Appearance - P2 Header Ad you'll find an admin interface to paste your HTML code


== Frequently Asked Questions ==

= I'm not using a 468x80 pixel advert. How do I tweak the CSS? =
 
P2 Header Ad will wrap your code inside a DIV tag with the ID "p2HeaderAd". Simply re-position by targeting this ID.
You can do this either in your Theme's styles.css file, or tweak p2-header-ad-styles.css inside the plugin's main directory.

= Will this plugin work with a custom header graphic? =

Yes, it sits on top of your custom header graphic. It will adjust its height automatically so it should always look nice.


== Screenshots ==

1. see your ad displayed on the P2 front page
1. the Admin Interface let's you paste HTML code quickly and easily (under Appearance - P2 Header ad)


== Changelog ==

= 1.5 =
1. added option to display the same ad at the end of single posts
1. added option to hide ads at the end of front-page/blog-page posts

= 1.4 =
1. added the option to hide ad when users are logged into eMember (plugin by Tips and Tricks HQ)

= 1.3 =
1. added translation readiness
1. added German Translation
1. added Spanish Translation (thanks to Andrew Kurtis)

= 1.2 =
1. tweaked placement of advert: now it's fixed to the header
1. added funky fade-in effect when the site loads

= 1.1 =
1. added option to remove the ad for logged-in users

= 1.0 =
1. initial Release
