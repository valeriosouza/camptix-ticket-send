<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Camptix_Ticket_Send
 * @subpackage Camptix_Ticket_Send/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <?php screen_icon( 'options-general' ); ?>
    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
    <?php echo '<p>' . __( 'This plugin sends tickets to the participants of WordCamp.', '' ) . '</p>' ?>
    <?php
     	global $wpdb;
     	$table_name = $wpdb->prefix . 'camptix_send';
     	$ticket_count = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name" );
		echo "<p>Tickets will be sent to <strong>".$ticket_count."</strong> users.</p>";

		$screen = $_GET["send"];

		if ($screen == 'true') {
			$active_rows = $wpdb->get_results(
				"SELECT * FROM $table_name"
			);
			foreach ($active_rows as $active_row){
				//echo $active_row->the_title;
				print_r($active_row);
				wp_mail( $active_row->email, 'Titulo teste', 'corpo teste' );
			}
		}
    ?>








    <form method="post" action="options.php">
        <?php
            settings_fields( 'notify_users_email' );
            do_settings_sections( 'notify_users_email' );
            submit_button();
        ?>
    </form>

</div>