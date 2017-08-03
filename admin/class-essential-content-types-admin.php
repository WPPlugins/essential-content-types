<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://catchthemes.com
 * @since      1.0.0
 *
 * @package    Essential_Content_Types
 * @subpackage Essential_Content_Types/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Essential_Content_Types
 * @subpackage Essential_Content_Types/admin
 * @author     Catch Themes <info@catchthemes.com>
 */
class Essential_Content_Types_Admin {

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

		$this->load_dependencies();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Essential_Content_Types_Loader. Orchestrates the hooks of the plugin.
	 * - Essential_Content_Types_i18n. Defines internationalization functionality.
	 * - Essential_Content_Types_Admin. Defines all hooks for the admin area.
	 * - Essential_Content_Types_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		$portfolio_options = get_option( 'ect_portfolio' );
		if ( $portfolio_options['status'] ) {
			/**
			 * Load Portfolio Content Type
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-portfolio.php';
		}

		$testimonial_options = get_option( 'ect_testimonial' );
		if ( $testimonial_options['status'] ) {
			/**
			 * Load Testimonial Content Type
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-testimonial.php';
		}

		$featured_content_options = get_option( 'ect_featured_content' );
		if ( $featured_content_options['status'] ) {
			/**
			 * Load Featured Content Type
			 */
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-featured-content.php';
		}

	}


	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles( $hook_suffix ) {
		$allowed_pages = array(
			'toplevel_page_essential-content-types'             => 1,
			'essential-content-types_page_ect-portfolio'        => 1,
			'essential-content-types_page_ect-testimonial'      => 1,
			'essential-content-types_page_ect-featured-content' => 1,
		);
		
		if ( ! isset( $allowed_pages[ $hook_suffix ] ) ){
			return;
		}
		
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/essential-content-types-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts( $hook_suffix ) {
		$allowed_pages = array(
			'toplevel_page_essential-content-types'             => 1,
			'essential-content-types_page_ect-portfolio'        => 1,
			'essential-content-types_page_ect-testimonial'      => 1,
			'essential-content-types_page_ect-featured-content' => 1,
		);
		
		if ( ! isset( $allowed_pages[ $hook_suffix ] ) ){
			return;
		}

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/essential-content-types-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add settings menu
	 */
	function settings_menu() {
		// Add Main Menu
		add_menu_page( 
			esc_html__( 'Essential Content Types', 'essential-content-types' ), //$page_title
			esc_html__( 'Essential Content Types', 'essential-content-types' ), //$menu_title
			'manage_options', //$capability
			'essential-content-types', //$menu_slug
			array( $this, 'main_settings_display' ), //$function
			'dashicons-layout', //$icon_url
			'99.01564' //$position 
		);
	}

	/**
	 * Dashboard Page include
	 */
	function main_settings_display() {
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/dashboard-display.php';
	}

	function dashboard_switch() {
		$value = ( 'true' == $_POST['value'] ) ? 1 : 0;

		$option_name = $_POST['option_name'];

		$option_value = get_option( $option_name );

		$option_value['status'] = $value;

		if( update_option( $option_name, $option_value ) ) {
	    	echo $value;
	    } else {
	    	esc_html_e( 'Connection Error. Please try again.', 'essential-content-types' );
	    }

		wp_die(); // this is required to terminate immediately and return a proper response
	}

}
