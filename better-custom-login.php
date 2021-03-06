<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://avclark.com
 * @since             1.0.0
 * @package           Better_Custom_Login
 *
 * @wordpress-plugin
 * Plugin Name:       Better Custom Login
 * Plugin URI:        https://github.com/avclark/better-custom-login
 * Description:       Easily create a custom WordPress login experience.
 * Version:           1.0.0
 * Author:            Adam Clark
 * Author URI:        http://avclark.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       better-custom-login
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-better-custom-login-activator.php
 */
function activate_better_custom_login() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-better-custom-login-activator.php';
	Better_Custom_Login_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-better-custom-login-deactivator.php
 */
function deactivate_better_custom_login() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-better-custom-login-deactivator.php';
	Better_Custom_Login_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_better_custom_login' );
register_deactivation_hook( __FILE__, 'deactivate_better_custom_login' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-better-custom-login.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_better_custom_login() {

	$plugin = new Better_Custom_Login();
	$plugin->run();

}
run_better_custom_login();
