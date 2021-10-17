<?php
/**
 * Plugin Name: Notification : bbPress
 * Description: bbPress triggers for Notification plugin
 * Plugin URI: https://wordpress.org/plugins/notification-bbpress/
 * Author: BracketSpace
 * Author URI: https://bracketspace.com
 * Version: 2.2.0
 * License: GPL3
 * Text Domain: notification-bbpress
 * Domain Path: resources/languages
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
				// Autoloading.
				require_once dirname( $plugin_file ) . '/vendor/autoload.php';
				self::$runtime = new BracketSpace\Notification\bbPress\Runtime( $plugin_file );
			}

			return self::$runtime;
		}

		/**
		 * Gets runtime component
		 *
		 * @since  [Next]
		 * @return array
		 */
		public static function components() {
			return isset( self::$runtime ) ? self::$runtime->components() : [];
		}

		/**
		 * Gets runtime component
		 *
		 * @since  [Next]
		 * @param  string $component_name Component name.
		 * @return mixed
		 */
		public static function component( $component_name ) {
			return isset( self::$runtime ) ? self::$runtime->component( $component_name ) : null;
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

		/**
		 * Gets plugin filesystem
		 *
		 * @since  [Next]
		 * @throws \Exception When runtime wasn't invoked yet.
		 * @return \BracketSpace\Notification\bbPress\Vendor\Micropackage\Filesystem\Filesystem
		 */
		public static function fs() {
			if ( ! isset( self::$runtime ) ) {
				throw new Exception( 'Runtime has not been invoked yet.' );
			}

			return self::$runtime->get_filesystem();
		}

	}

endif;

add_action( 'notification/init', function() {
	NotificationbbPress::init( __FILE__ )->init();
}, 2 );
