<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://nitin247.com/
 * @since             1.0.0
 * @package           Wc_Place_Order_Without_Payment
 *
 * @wordpress-plugin
 * Plugin Name:       Place Order Without Payment for WooCommerce
 * Plugin URI:        https://wordpress.org/plugins/wc-place-order-without-payment/
 * Description:       Place Order Without Payment for WooCommerce will allow users to place orders directly.This plugin will customize checkout page and offers to direct place order without payment.
 * Version:           2.2
 * Author:            Nitin Prakash
 * Author URI:        https://nitin247.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt 
 * WC requires at least: 4.0.0
 * WC tested up to: 6.3
 */

// If this file is called directly, abort.

if ( ! function_exists( 'wpowp_fs' ) ) {
    // Create a helper function for easy SDK access.
    function wpowp_fs() {
        global $wpowp_fs;

        if ( ! isset( $wpowp_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $wpowp_fs = fs_dynamic_init( array(
                'id'                  => '4030',
                'slug'                => 'wc-place-order-without-payment',
                'type'                => 'plugin',
                'public_key'          => 'pk_11c5a507e23c860c7e456326363ba',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'menu'                => array(
                    'first-path'     => 'plugins.php',
                    'account'        => false,
                ),
            ) );
        }

        return $wpowp_fs;
    }

    // Init Freemius.
    wpowp_fs();
    // Signal that SDK was initiated.
    do_action( 'wpowp_fs_loaded' );
}

if ( ! defined( 'WPINC' ) ) {
	die;
}

//wc default hook to disable payment functionality on checkout.

// Create the plugins folder and file variables
	$plugin_folder = get_plugins( '/' . 'woocommerce' );
	$plugin_file = 'woocommerce.php';
	
	// If the plugin version number is set, return it 
	if ( isset( $plugin_folder[$plugin_file]['Version'] ) ) {
		$wpowp_wc_version =  $plugin_folder[$plugin_file]['Version'];

	}

if ( version_compare( $wpowp_wc_version, '4.7.0', '<' ) ) {
	add_filter('woocommerce_cart_needs_payment', '__return_false');
}else{

	add_filter('woocommerce_cart_needs_payment', '__return_false');
	add_filter('woocommerce_order_needs_payment', '__return_false');
	
	function wpowp_all_payment_gateway_disable( $available_gateways ) {
		global $woocommerce;
		return [];
	}
	add_filter( 'woocommerce_available_payment_gateways', 'wpowp_all_payment_gateway_disable' );
	
	add_action( 'woocommerce_thankyou', 'wpowp_update_order_status_pending');
  
	function wpowp_update_order_status_pending( $order_id ){		
		$order = new WC_Order($order_id);
		$order->update_status('processing');
	}
	
}

function wpowp_action_links( $links ) {
	$links = array_merge( array(
		'<a href="' . esc_url( 'https://nitin247.com/buy-me-a-coffe' ) . '">' . __( 'Donate', 'wc_thanks_redirect' ) . '</a>'
	), $links );
	return $links;
}
add_action( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpowp_action_links' );
