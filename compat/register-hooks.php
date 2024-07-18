<?php
/**
 * Hooks compatibilty file.
 *
 * Automatically generated with `wp notification-bbpress dump-hooks`.
 *
 * @package notification/bbpress
 */

/** @var \BracketSpace\Notification\bbPress\Runtime $this */

// phpcs:disable
add_action('notification/init', [$this, 'elements'], 10, 0);
add_action('notification/settings/register', [$this->component('BracketSpace\Notification\bbPress\Admin\Settings'), 'registerTriggerSettings'], 20, 1);
add_filter('notification/settings/triggers/valid_post_types', [$this->component('BracketSpace\Notification\bbPress\Admin\Settings'), 'filterPostTypes'], 10, 1);
