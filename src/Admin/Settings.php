<?php
/**
 * Settings
 *
 * @package notification/bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Admin;

use BracketSpace\Notification\Utils\Settings\CoreFields;

/**
 * Settings class
 */
class Settings
{
	/**
	 * Registers trigger settings
	 *
	 * @action notification/settings/register 20
	 *
	 * @since  2.2.0
	 * @param  \BracketSpace\Notification\Utils\Settings $settings Settings API object.
	 * @return void
	 */
	public function registerTriggerSettings($settings)
	{
		$triggers = $settings->addSection(__('Triggers', 'notification-bbpress'), 'triggers');

		$triggers->addGroup(__('bbPress', 'notification-bbpress'), 'bbpress')
			->addField(
				[
					'name' => __('Forum', 'notification-bbpress'),
					'slug' => 'forum_enable',
					'default' => true,
					'addons' => [
						'label' => __('Enable Forum triggers', 'notification-bbpress'),
					],
					'render' => [new CoreFields\Checkbox(), 'input'],
					'sanitize' => [new CoreFields\Checkbox(), 'sanitize'],
				]
			)
			->addField(
				[
					'name' => __('Topic', 'notification-bbpress'),
					'slug' => 'topic_enable',
					'default' => true,
					'addons' => [
						'label' => __('Enable Topic triggers', 'notification-bbpress'),
					],
					'render' => [new CoreFields\Checkbox(), 'input'],
					'sanitize' => [new CoreFields\Checkbox(), 'sanitize'],
				]
			)
			->addField(
				[
					'name' => __('Reply', 'notification-bbpress'),
					'slug' => 'reply_enable',
					'default' => true,
					'addons' => [
						'label' => __('Enable Reply triggers', 'notification-bbpress'),
					],
					'render' => [new CoreFields\Checkbox(), 'input'],
					'sanitize' => [new CoreFields\Checkbox(), 'sanitize'],
				]
			);
	}

	/**
	 * Filters post types in core settings
	 *
	 * @filter notification/settings/triggers/valid_post_types
	 *
	 * @param  array<string, string> $postTypes Array of post types.
	 * @return array<string, string>
	 */
	public function filterPostTypes( $postTypes )
	{
		if (isset($postTypes[bbp_get_forum_post_type()])) {
			unset($postTypes[bbp_get_forum_post_type()]);
		}

		if (isset($postTypes[bbp_get_topic_post_type()])) {
			unset($postTypes[bbp_get_topic_post_type()]);
		}

		if (isset($postTypes[bbp_get_reply_post_type()])) {
			unset($postTypes[bbp_get_reply_post_type()]);
		}

		return $postTypes;
	}
}
