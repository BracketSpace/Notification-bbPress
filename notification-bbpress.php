<?php
/*
Plugin Name: Notification : bbPress
Description: bbPress triggers for Notification plugin
Plugin URI: https://notification.underdev.it
Author: underDEV
Author URI: https://underdev.it
Version: 1.1.1
License: GPL3
Text Domain: notification-bbpress
Domain Path: /languages
*/

/**
 * Composer autoload
 */
require_once( 'vendor/autoload.php' );

/**
 * Setup plugin
 * @return void
 */
function notification_bbpress_plugin_setup() {

	load_plugin_textdomain( 'notification-bbpress', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

}
add_action( 'plugins_loaded', 'notification_bbpress_plugin_setup' );

/**
 * Initialize plugin
 * @return void
 */
function notification_bbpress_initialize() {

	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	if ( ! is_plugin_active( 'bbpress/bbpress.php' ) ) {
		return;
	}

	/**
	 * Triggers instance
	 */
	new underDEV\Notification\bbPress\Triggers();

}
add_action( 'init', 'notification_bbpress_initialize', 10 );

/**
 * Do some check on plugin activation
 * @return void
 */
function notification_bbpress_activation() {

	if ( version_compare( PHP_VERSION, '5.3', '<' ) || ! is_plugin_active( 'notification/notification.php' ) ) {

		deactivate_plugins( plugin_basename( __FILE__ ) );

		wp_die( __( 'This plugin requires PHP in version at least 5.3 and Notification plugin active. WordPress itself <a href="https://wordpress.org/about/requirements/" target="_blank">requires at least PHP 5.6</a>. Please upgrade your PHP version or contact your Server administrator.', 'notification-bbpress' ) );

	}

}
register_activation_hook( __FILE__, 'notification_bbpress_activation' );
