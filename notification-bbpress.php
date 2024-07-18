<?php
/**
 * Plugin Name: Notification : bbPress
 * Description: bbPress triggers for Notification plugin
 * Plugin URI: https://wordpress.org/plugins/notification-bbpress/
 * Author: BracketSpace
 * Author URI: https://bracketspace.com
 * Version: 4.0.0
 * License: GPL3
 * Text Domain: notification-bbpress
 * Requires Plugins: bbpress, notification
 *
 * @package notification/bbpress
 *
 * phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
 * phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * phpcs:disable Squiz.Classes.ClassFileName.NoMatch
 */

declare(strict_types=1);

if (! class_exists('NotificationbbPress')) :

	/**
	 * NotificationbbPress class
	 */
	class NotificationbbPress
	{
		/**
		 * Runtime object
		 *
		 * @var ?BracketSpace\Notification\bbPress\Runtime
		 */
		protected static $runtime;

		/**
		 * Initializes the plugin runtime
		 *
		 * @since  3.0.0
		 * @param  string $pluginFile Main plugin file.
		 * @return BracketSpace\Notification\bbPress\Runtime
		 */
		public static function init($pluginFile)
		{
			if (self::$runtime === null) {
				// Autoloading.
				require_once dirname($pluginFile) . '/vendor/autoload.php';
				self::$runtime = new BracketSpace\Notification\bbPress\Runtime($pluginFile);
			}

			return self::$runtime;
		}

		/**
		 * Gets runtime components
		 *
		 * @since  3.0.0
		 * @return array<class-string, object>
		 */
		public static function components()
		{
			return self::$runtime !== null ? self::$runtime->components() : [];
		}

		/**
		 * Gets runtime component
		 *
		 * @since  3.0.0
		 * @param  class-string $componentName Component name.
		 * @return object|null
		 */
		public static function component($componentName)
		{
			return self::$runtime !== null ? self::$runtime->component($componentName) : null;
		}

		/**
		 * Gets runtime object
		 *
		 * @since  3.0.0
		 * @return ?BracketSpace\Notification\bbPress\Runtime
		 */
		public static function runtime()
		{
			return self::$runtime;
		}

		/**
		 * Gets plugin filesystem
		 *
		 * @since  3.0.0
		 * @throws \Exception When runtime wasn't invoked yet.
		 * @return \BracketSpace\Notification\bbPress\Dependencies\Micropackage\Filesystem\Filesystem
		 */
		public static function fs()
		{
			if (self::$runtime === null) {
				throw new \Exception('Runtime has not been invoked yet.');
			}

			return self::$runtime->getFilesystem();
		}
	}

endif;

add_action(
	'notification/init',
	static function () {
		NotificationbbPress::init(__FILE__)->init();
	},
	2
);
