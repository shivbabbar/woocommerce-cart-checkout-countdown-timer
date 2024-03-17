<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://shivbabbar.com
 * @since      1.0.0
 *
 * @package    Woocommerce_Cart_Checkout_Countdown_Timer
 * @subpackage Woocommerce_Cart_Checkout_Countdown_Timer/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Cart_Checkout_Countdown_Timer
 * @subpackage Woocommerce_Cart_Checkout_Countdown_Timer/includes
 * @author     shiv babbar <shiv.babbar.developer@gmail.com>
 */
class Woocommerce_Cart_Checkout_Countdown_Timer_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-cart-checkout-countdown-timer',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
