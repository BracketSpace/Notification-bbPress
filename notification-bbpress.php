<?php
/**
 * Plugin Name: Notification : bbPress
 * Description: bbPress triggers for Notification plugin
 * Plugin URI: https://notification.underdev.it
 * Author: BracketSpace
 * Author URI: https://bracketspace.com
 * Version: 2.0.1
 * License: GPL3
 * Text Domain: notification-bbpress
 * Domain Path: /languages
 *
 * @package notification/bbpress
 */

/**
 * Plugin's autoload function
 *
 * @param  string $class class name.
 * @return mixed         false if not plugin's class or void
 */
function notification_bbpress_autoload( $class ) {

	$parts = explode( '\\', $class );

	if ( array_shift( $parts ) !== 'BracketSpace' ) {
		return false;
	}

	if ( array_shift( $parts ) !== 'Notification' ) {
		return false;
	}

	if ( array_shift( $parts ) !== 'bbPress' ) {
		return false;
	}

	$file = trailingslashit( dirname( __FILE__ ) ) . trailingslashit( 'class' ) . implode( '/', $parts ) . '.php';

	if ( file_exists( $file ) ) {
		require_once $file;
	}

}
spl_autoload_register( 'notification_bbpress_autoload' );

/**
 * Boot up the plugin in theme's action just in case the Notification
 * is used as a bundle.
 */
add_action( 'after_setup_theme', function() {

	/**
	 * Requirements check
	 */
	$requirements = new BracketSpace\Notification\bbPress\Utils\Requirements( __( 'Notification : bbPress', 'notification-bbpress' ), array(
		'php'          => '5.3',
		'wp'           => '4.6',
		'notification' => true,
		'plugins'      => array(
			'bbpress/bbpress.php' => array(
				'name'    => 'bbPress',
				'version' => '0',
			),
		),
	) );

	/**
	 * Tests if Notification plugin is active
	 * We have to do it like this in case the plugin
	 * is loaded as a bundle.
	 *
	 * @param string $comparsion value to test.
	 * @param object $r          requirements.
	 * @return void
	 */
	function notification_bbpress_check_base_plugin( $comparsion, $r ) {
		if ( true === $comparsion && ! function_exists( 'notification_runtime' ) ) {
			$r->add_error( __( 'Notification plugin active', 'notification-bbpress' ) );
		}
	}

	$requirements->add_check( 'notification', 'notification_bbpress_check_base_plugin' );

	if ( ! $requirements->satisfied() ) {
		add_action( 'admin_notices', array( $requirements, 'notice' ) );
		return;
	}

	/**
	 * Remove bbPress Post Types from Post Types select in Notification Settings
	 */
	add_filter( 'notification/settings/triggers/valid_post_types', function( $post_types ) {

		if ( isset( $post_types[ bbp_get_forum_post_type() ] ) ) {
			unset( $post_types[ bbp_get_forum_post_type() ] );
		}

		if ( isset( $post_types[ bbp_get_topic_post_type() ] ) ) {
			unset( $post_types[ bbp_get_topic_post_type() ] );
		}

		if ( isset( $post_types[ bbp_get_reply_post_type() ] ) ) {
			unset( $post_types[ bbp_get_reply_post_type() ] );
		}

		return $post_types;

	} );

	/**
	 * Add bbPress Triggers checkboxes to Trigger Settings
	 */
	notification_register_settings( function( $settings ) {

		$triggers = $settings->add_section( __( 'Triggers', 'notification' ), 'triggers' );

		$triggers->add_group( __( 'bbPress', 'notification-bbpress' ), 'bbpress' )
			->add_field( array(
				'name'     => __( 'Forum', 'notification-bbpress' ),
				'slug'     => 'forum_enable',
				'default'  => true,
				'addons'   => array(
					'label' => __( 'Enable Forum triggers', 'notification-bbpress' ),
				),
				'render'   => array( new BracketSpace\Notification\Utils\Settings\CoreFields\Checkbox(), 'input' ),
				'sanitize' => array( new BracketSpace\Notification\Utils\Settings\CoreFields\Checkbox(), 'sanitize' ),
			) )
			->add_field( array(
				'name'     => __( 'Topic', 'notification-bbpress' ),
				'slug'     => 'topic_enable',
				'default'  => true,
				'addons'   => array(
					'label' => __( 'Enable Topic triggers', 'notification-bbpress' ),
				),
				'render'   => array( new BracketSpace\Notification\Utils\Settings\CoreFields\Checkbox(), 'input' ),
				'sanitize' => array( new BracketSpace\Notification\Utils\Settings\CoreFields\Checkbox(), 'sanitize' ),
			) )
			->add_field( array(
				'name'     => __( 'Reply', 'notification-bbpress' ),
				'slug'     => 'reply_enable',
				'default'  => true,
				'addons'   => array(
					'label' => __( 'Enable Reply triggers', 'notification-bbpress' ),
				),
				'render'   => array( new BracketSpace\Notification\Utils\Settings\CoreFields\Checkbox(), 'input' ),
				'sanitize' => array( new BracketSpace\Notification\Utils\Settings\CoreFields\Checkbox(), 'sanitize' ),
			) );

	}, 1000 );

	/**
	 * Register triggers
	 */

	if ( notification_get_setting( 'triggers/bbpress/forum_enable' ) ) {
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Forum\Added() );
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Forum\Updated() );
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Forum\Removed() );
	}

	if ( notification_get_setting( 'triggers/bbpress/topic_enable' ) ) {
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Topic\Created() );
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Topic\Merged() );
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Topic\Updated() );
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Topic\Removed() );
	}

	if ( notification_get_setting( 'triggers/bbpress/reply_enable' ) ) {
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Reply\Created() );
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Reply\Updated() );
		register_trigger( new BracketSpace\Notification\bbPress\Trigger\Reply\Removed() );
	}

} );
