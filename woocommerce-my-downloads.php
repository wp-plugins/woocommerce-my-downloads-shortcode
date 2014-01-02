<?php

/*
 * Plugin Name: WooCommerce My Downloads Shortcode
 * Plugin URI: http://wordpress.emoxie.com/woocommerce-my-downloads/
 * Description: Creates a shortcode which can be displayed on any page to show users available downloads.
 * Author: Matt Pramschufer
 * Version: 1.0
 * Author URI: http://www.emoxie.com/
 */
if (!class_exists('Woocommerce_My_Downloads')) :

    class Woocommerce_My_Downloads {

        public static function init() {
            add_shortcode('woocommerce-my-downloads', __CLASS__ . '::my_downloads_shortcode');
        }

        /**
         * Shortcode to display my downloads
         *
         * [woocommerce-my-downloads]
         */
        public static function my_downloads_shortcode() {
            if (is_user_logged_in()) {
                global $woocommerce;

                ob_start();
                require dirname(__FILE__) . '/tpl/my-downloads.php';
                return ob_get_clean();
            }
        }

    }

    Woocommerce_My_Downloads::init();
    
endif;