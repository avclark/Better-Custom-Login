<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://avclark.com
 * @since      1.0.0
 *
 * @package    Better_Custom_Login
 * @subpackage Better_Custom_Login/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Better_Custom_Login
 * @subpackage Better_Custom_Login/admin
 * @author     Adam Clark <adam@avclark.com>
 */
class Better_Custom_Login_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Better_Custom_Login_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Better_Custom_Login_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/better-custom-login-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Better_Custom_Login_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Better_Custom_Login_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/better-custom-login-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function bcl_settings_path( $path ) {
		return sprintf("%s/libs/acf/", dirname(__FILE__));
	}

	public function bcl_settings_dir( $dir ) {
		return sprintf("%s/libs/acf/", plugin_dir_url(__FILE__));
	}

	public function bcl_add_menu() {

		if( function_exists('acf_add_options_page') ) {
			acf_add_options_sub_page(array(
				'page_title' => __('Better Custom Login', 'better-custom-login'),
		    'menu_title' => __('Better Custom Login', 'better-custom-login'),
		    'menu_slug' => 'better-custom-login',
				'parent_slug'	=> 'options-general.php',
				'capability' => 'manage_options',
		    'redirect' => false
			));
		}

	}

	public function bcl_load_settings_fields() {
		include plugin_dir_path( __FILE__ ) . 'partials/better-custom-login-fields.php';
	}

	public function bcl_remove_acf_admin_menu() {
		remove_menu_page('edit.php?post_type=acf-field-group');
	}

	public function bcl_custom_login() {
		include plugin_dir_path( __FILE__ ) . 'partials/better-custom-login-display.php';
	}

}
