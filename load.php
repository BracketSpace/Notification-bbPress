<?php
/**
 * Load file
 *
 * @package notification/bbpress
 */

declare(strict_types=1);

/**
 * Load the main plugin file.
 */
require_once __DIR__ . '/notification-bbpress.php';

/**
 * Initialize early.
 */
add_action(
	'notification/init',
	static function () {
		NotificationbbPress::init(__FILE__)->init();
	},
	1
);
