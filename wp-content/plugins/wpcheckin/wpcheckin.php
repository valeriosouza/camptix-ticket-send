<?php
/**
 * Plugin Name: WPCheckin
 * Plugin URI: https://github.com/leobaiano/wpcheckin
 * Description: WordCamp checkin, generate and send certificates to the participants
 * Author: Leo Baiano, Valério souza
 * Author URI: http://guwp.org
 * Version: 1.0.0
 * License: GPLv2 or later
 * Text Domain: wp-checkin
 * Domain Path: languages/
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if ( ! class_exists( 'WP_Checkin' ) ) :
/**
 * WP Checkin main class.
 */
class WP_Checkin {
	/**
	 * Plugin version.
	 *
	 * @var string
	 */
	const VERSION = '1.0.0';

	/**
	 * Instance of this class.
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Text Domain.
	 *
	 * @var string
	 */
	private $text_domain = 'wp-checkin';


	/**
	 * Initialize the plugin.
	 */
	private function __construct() {
		// Load plugin text domain.
		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		// If is admin include files admin panel
		if ( is_admin() )
			$this->admin_includes();

		// Include files
		$this->includes();
	}

	/**
	 * Return an instance of this class.
	 *
	 * @return object A single instance of this class.
	 */
	public static function get_instance() {
		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance )
			self::$instance = new self;

		return self::$instance;
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @return void
	 */
	public function load_plugin_textdomain() {
		$text_domain = $this->text_domain;
		$locale = apply_filters( 'plugin_locale', get_locale(), $text_domain );
		load_textdomain( $this->$text_domain, trailingslashit( WP_LANG_DIR ) . 'wp-checkin/wp-checkin-' . $locale . '.mo' );
		load_plugin_textdomain( $this->$text_domain, false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Includes.
	 *
	 * @return void
	 */
	private function includes() {
		// Include the class needed for running the plugin
	}

	/**
	 * Admin includes.
	 *
	 * @return void
	 */
	private function admin_includes() {
		// Include the class needed for the operation of the plugin in admin panel
	}
}

// Creates an instance of the object
add_action( 'plugins_loaded', array( 'WP_Checkin', 'get_instance' ), 0 );
endif;