<?php
/**
 * Plugin Name: Notification : bbPress
 * Description: bbPress triggers for Notification plugin
 * Plugin URI: https://wordpress.org/plugins/notification-bbpress/
 * Author: BracketSpace
 * Author URI: https://bracketspace.com
 * Version: 2.1.0
 * License: GPL3
 * Text Domain: notification-bbpress
 * Domain Path: /languages
 *
 * @package notification/bbpress
 */

/**
 * Load Composer dependencies.
 */
require_once dirname( __FILE__ ) . '/vendor/autoload.php';

/**
 * Gets plugin runtime object.
 *
 * @since  2.1.0
 * @return BracketSpace\Notification\bbPress\Runtime
 */
function notification_bbpress_runtime() {

	global $notification_bbpress_runtime;

	if ( empty( $notification_bbpress_runtime ) ) {
		$notification_bbpress_runtime = new BracketSpace\Notification\bbPress\Runtime( __FILE__ );
	}

	return $notification_bbpress_runtime;

}

/**
 * Boot up the plugin
 */
add_action( 'notification/boot/initial', function() {

	/**
	 * Requirements check
	 */
	$requirements = new BracketSpace\Notification\bbPress\Utils\Requirements( __( 'Notification : bbPress', 'notification-bbpress' ), [
		'php'          => '5.6',
		'wp'           => '4.9',
		'notification' => '6.0.0',
		'plugins'      => [
			'bbpress/bbpress.php' => [
				'name'    => 'bbPress',
				'version' => '0',
			],
		],
	] );

	$requirements->add_check( 'notification', require 'src/inc/requirements/notification.php' );

	if ( ! $requirements->satisfied() ) {
		add_action( 'admin_notices', [ $requirements, 'notice' ] );
		return;
	}

	$runtime = notification_bbpress_runtime();
	$runtime->boot();

} );
