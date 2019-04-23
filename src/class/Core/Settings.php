<?php
/**
 * Settings class
 *
 * @package notification/bbpress
 */

namespace BracketSpace\Notification\bbPress\Core;

use BracketSpace\Notification\Utils\Settings\CoreFields;

/**
 * Settings class
 */
class Settings {

	/**
	 * Registers settings
	 *
	 * @param object $settings Settings API object.
	 * @return void
	 */
	public function register_settings( $settings ) {

		$triggers = $settings->add_section( __( 'Triggers', 'notification' ), 'triggers' );

		$triggers->add_group( __( 'bbPress', 'notification-bbpress' ), 'bbpress' )
			->add_field( [
				'name'     => __( 'Forum', 'notification-bbpress' ),
				'slug'     => 'forum_enable',
				'default'  => true,
				'addons'   => [
					'label' => __( 'Enable Forum triggers', 'notification-bbpress' ),
				],
				'render'   => [ new CoreFields\Checkbox(), 'input' ],
				'sanitize' => [ new CoreFields\Checkbox(), 'sanitize' ],
			] )
			->add_field( [
				'name'     => __( 'Topic', 'notification-bbpress' ),
				'slug'     => 'topic_enable',
				'default'  => true,
				'addons'   => [
					'label' => __( 'Enable Topic triggers', 'notification-bbpress' ),
				],
				'render'   => [ new CoreFields\Checkbox(), 'input' ],
				'sanitize' => [ new CoreFields\Checkbox(), 'sanitize' ],
			] )
			->add_field( [
				'name'     => __( 'Reply', 'notification-bbpress' ),
				'slug'     => 'reply_enable',
				'default'  => true,
				'addons'   => [
					'label' => __( 'Enable Reply triggers', 'notification-bbpress' ),
				],
				'render'   => [ new CoreFields\Checkbox(), 'input' ],
				'sanitize' => [ new CoreFields\Checkbox(), 'sanitize' ],
			] );

	}

	/**
	 * Filters post types in core settings
	 *
	 * @filter notification/settings/triggers/valid_post_types
	 *
	 * @param  array $post_types Array of post types.
	 * @return array
	 */
	public function filter_post_types( $post_types ) {

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

	}

}
