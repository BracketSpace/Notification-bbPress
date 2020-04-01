<?php
/**
 * Load file
 *
 * @package notification/bbpress
 */

/**
 * Load the main plugin file.
 */
require_once __DIR__ . '/notification-bbpress.php';

/**
 * Initialize early.
 */
add_action( 'notification/init', function() {
	NotificationbbPress::init( __FILE__ )->init();
}, 1 );
