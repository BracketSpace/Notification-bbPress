<?php
/**
 * Hooks compatibilty file.
 *
 * Automatically generated with `wp notification dump-hooks`.
 *
 * @package notification/bbpress
 */

/** @var \BracketSpace\Notification\bbPress\Runtime $this */

// phpcs:disable
add_action( 'notification/init', [ $this, 'elements' ], 10, 0 );
add_filter( 'notification/settings/triggers/valid_post_types', [ $this->component( 'admin/settings' ), 'filter_post_types' ], 10, 1 );
