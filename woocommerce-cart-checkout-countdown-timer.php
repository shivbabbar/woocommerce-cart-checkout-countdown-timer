<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://shivbabbar.com
 * @since             1.0.0
 * @package           Woocommerce_Cart_Checkout_Countdown_Timer
 *
 * @wordpress-plugin
 * Plugin Name:       woocommerce cart checkout countdown timer
 * Plugin URI:        https://shivbabbar.com
 * Description:       woocommerce cart checkout countdown timer
 * Version:           1.0.0
 * Author:            shiv babbar
 * Author URI:        https://shivbabbar.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-cart-checkout-countdown-timer
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WOOCOMMERCE_CART_CHECKOUT_COUNTDOWN_TIMER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-cart-checkout-countdown-timer-activator.php
 */
function activate_woocommerce_cart_checkout_countdown_timer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-cart-checkout-countdown-timer-activator.php';
	Woocommerce_Cart_Checkout_Countdown_Timer_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-cart-checkout-countdown-timer-deactivator.php
 */
function deactivate_woocommerce_cart_checkout_countdown_timer() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-cart-checkout-countdown-timer-deactivator.php';
	Woocommerce_Cart_Checkout_Countdown_Timer_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_cart_checkout_countdown_timer' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_cart_checkout_countdown_timer' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-cart-checkout-countdown-timer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_cart_checkout_countdown_timer() {

	$plugin = new Woocommerce_Cart_Checkout_Countdown_Timer();
	$plugin->run();

}
run_woocommerce_cart_checkout_countdown_timer();
