<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Camptix_Ticket_Send
 * @subpackage Camptix_Ticket_Send/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Camptix_Ticket_Send
 * @subpackage Camptix_Ticket_Send/admin
 * @author     Your Name <email@example.com>
 */
class Camptix_Ticket_Send_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $camptix_ticket_send    The ID of this plugin.
	 */
	private $camptix_ticket_send;

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
	 * @param      string    $camptix_ticket_send       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $camptix_ticket_send, $version ) {

		$this->camptix_ticket_send = $camptix_ticket_send;
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
		 * defined in Camptix_Ticket_Send_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Camptix_Ticket_Send_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->camptix_ticket_send, plugin_dir_url( __FILE__ ) . 'css/camptix-ticket-send-admin.css', array(), $this->version, 'all' );

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
		 * defined in Camptix_Ticket_Send_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Camptix_Ticket_Send_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->camptix_ticket_send, plugin_dir_url( __FILE__ ) . 'js/camptix-ticket-send-admin.js', array( 'jquery' ), $this->version, false );

	}

}
