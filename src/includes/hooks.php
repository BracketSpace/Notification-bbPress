<?php
/**
 * Hooks compatibilty file.
 *
 * Automatically generated with bin/dump-hooks.php file.
 *
 * @package notification/bbpress
 */

// phpcs:disable
add_filter( 'notification/settings/triggers/valid_post_types', [ $this->component( 'admin_settings' ), 'filter_post_types' ], 10, 1 );
