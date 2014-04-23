=== WooCommerce My Downloads Shortcode ===
Contributors: mattpramschufer
Tags: woocommerce, downloads, shortcode
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mattpram%40gmail%2ecom
Requires at least: 3.7
Tested up to: 3.9
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Creates a shortcode which can be displayed on any page to show users WooCommerce available downloads.

== Description ==
This plugin requires WooCommerce.

When developing a WooCommerce site I realized there was not a shortcode for displaying the logged in users available downloads outside of the My Account page.  So I developed this simple plugin which adds the short code [woocommerce-my-downloads].  It is simple and effective.  It displays the Date of the order and the file name in an unordered list.

** Note: WooCommerce 2.1 Compatible


###Usage

= Shortcode = 
`[woocommerce-my-downloads]`


== Installation ==
1. Upload \"test-plugin.php\" to the \"/wp-content/plugins/\" directory.
1. Activate the plugin through the \"Plugins\" menu in WordPress.
1. Place the shortcode [woocommerce-my-downloads] on any page you would like.

== Frequently Asked Questions ==
= Can I change the template? =
For right now, you can change the template by editing the /tpl/my-downloads.php file.  In the next release I will have it so you can simply place new template file in your theme directory and modify there.
= How do I put my downloads shortcode in my template with PHP? =
Open your template file and the put in `<?php do_shortcode('[woocommerce-my-downloads]'); ?>`


== Changelog ==
= 1.0 =
* Initial release.
= 1.1 =
* Wordpress 3.9 Compatible
* WooCommerce 2.1 Compatible