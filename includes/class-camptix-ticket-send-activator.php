<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Camptix_Ticket_Send
 * @subpackage Camptix_Ticket_Send/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Camptix_Ticket_Send
 * @subpackage Camptix_Ticket_Send/includes
 * @author     Your Name <email@example.com>
 */
class Camptix_Ticket_Send_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $cts_db_version;
		$cts_db_version = '1.0';
		global $wpdb;

   		$table_name = $wpdb->prefix . "camptix_send"; 
   		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
		  id mediumint(9) NOT NULL AUTO_INCREMENT,
		  ticket_type varchar(255) DEFAULT '' NOT NULL,
		  first_name varchar(255) DEFAULT '' NOT NULL,
		  last_name varchar(255) DEFAULT '' NOT NULL,
		  email varchar(255) DEFAULT '' NOT NULL,
		  date_buy datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		  situation varchar(255) DEFAULT '' NOT NULL,
		  sended INT NOT NULL,
		  UNIQUE KEY id (id)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
		add_option( 'cts_db_version', $cts_db_version );
	}

}
