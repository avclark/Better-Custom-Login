<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://avclark.com
 * @since      1.0.0
 *
 * @package    Better_Custom_Login
 * @subpackage Better_Custom_Login/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Better_Custom_Login
 * @subpackage Better_Custom_Login/includes
 * @author     Adam Clark <adam@avclark.com>
 */
class Better_Custom_Login_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'better-custom-login',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
