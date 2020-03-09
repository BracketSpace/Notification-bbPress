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

if ( ! class_exists( 'NotificationbbPress' ) ) :

	/**
	 * NotificationbbPress class
	 */
	class NotificationbbPress {

		/**
		 * Runtime object
		 *
		 * @var BracketSpace\Notification\bbPress\Runtime
		 */
		protected static $runtime;

		/**
		 * Initializes the plugin runtime
		 *
		 * @since  [Next]
		 * @param  string $plugin_file Main plugin file.
		 * @return BracketSpace\Notification\bbPress\Runtime
		 */
		public static function init( $plugin_file ) {
			if ( ! isset( self::$runtime ) ) {
				require_once dirname( $plugin_file ) . '/src/classes/Runtime.php';
				self::$runtime = new BracketSpace\Notification\bbPress\Runtime( $plugin_file );
			}

			return self::$runtime;
		}

		/**
		 * Gets runtime component
		 *
		 * @since  [Next]
		 * @param  string $component_name Component name.
		 * @return mixed
		 */
		public static function component( $component_name ) {
			if ( isset( self::$runtime, self::$runtime->{ $component_name } ) ) {
				return self::$runtime->{ $component_name };
			}
		}

		/**
		 * Gets runtime object
		 *
		 * @since  [Next]
		 * @return BracketSpace\Notification\Runtime
		 */
		public static function runtime() {
			return self::$runtime;
		}

	}

endif;

add_action( 'notification/init', function() {
	NotificationbbPress::init( __FILE__ )->init();
}, 2 );
