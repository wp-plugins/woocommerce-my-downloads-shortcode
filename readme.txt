=== WooCommerce My Downloads Shortcode ===
Contributors: mattpramschufer
Tags: woocommerce, downloads, shortcode
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mattpram%40gmail%2ecom
Requires at least: 4.0
Tested up to: 4.3.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Creates a shortcode which can be displayed on any page to show users WooCommerce available downloads.

== Description ==
This plugin requires WooCommerce.

When developing a WooCommerce site I realized there was not a shortcode for displaying the logged in users available downloads outside of the My Account page.  So I developed this simple plugin which adds the short code [woocommerce-my-downloads].  It is simple and effective.  It displays the Date of the order and the file name in an unordered list.

** Note: WooCommerce 2.4.8 Compatible


###Usage

= Shortcode for displaying all downloads =
`[woocommerce-my-downloads]`

= Shortcode for single product download button =
`[woocommerce-my-downloads-button id=PRODUCT_ID]`

== Installation ==
1. Search for plugin and install it
1. Activate the plugin through the \"Plugins\" menu in WordPress.
1. Place the shortcode [woocommerce-my-downloads] on any page you would like.

== Frequently Asked Questions ==
= Can I change the template? =
For right now, you can change the template by editing the /tpl/my-downloads.php file.
= How do I put my downloads shortcode in my template with PHP? =
Open your template file and the put in `<?php do_shortcode('[woocommerce-my-downloads]'); ?>`


== Changelog ==
= 1.3 =
* Added in new shortcode for single download button
* Options Include:
** Toggle Show Date on Template
** Ability to specify label on button
** Ability to add specific classes to button
= 1.2 =
* Confirmed working with Wordpress 4.3 and WooCommerce 2.4.5
* Added in a setting panel.  Go into Admin->Settings->WooCommerce My Downloads
* Options Include:
** Available Downloads Heading
** Content if user has no downloads.
** Show Downloads Remaining on Template
** Show Available Download Count on Template
= 1.1 =
* Wordpress 3.9 Compatible
* WooCommerce 2.1 Compatible
= 1.0 =
* Initial release.

