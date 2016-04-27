<?php
/**
* Uninstaller
*
* Uninstall the plugin by removing any options from the database
*
* @package	Restore-WordPress-Functionality
* @since	1.0
*/

// If the uninstall was not called by WordPress, exit

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) { exit(); }

// Now remove any data created by the plugin

delete_site_option( 'restore_wp_options' );
?>