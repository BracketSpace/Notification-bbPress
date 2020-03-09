<?php
/**
 * Triggers
 *
 * @package notification-bbpress
 */

use BracketSpace\Notification\bbPress\Components\Trigger;

if ( notification_get_setting( 'triggers/bbpress/forum_enable' ) ) {
	notification_register_trigger( new Trigger\Forum\Added() );
	notification_register_trigger( new Trigger\Forum\Updated() );
	notification_register_trigger( new Trigger\Forum\Removed() );
}

if ( notification_get_setting( 'triggers/bbpress/topic_enable' ) ) {
	notification_register_trigger( new Trigger\Topic\Created() );
	notification_register_trigger( new Trigger\Topic\Merged() );
	notification_register_trigger( new Trigger\Topic\Updated() );
	notification_register_trigger( new Trigger\Topic\Removed() );
}

if ( notification_get_setting( 'triggers/bbpress/reply_enable' ) ) {
	notification_register_trigger( new Trigger\Reply\Created() );
	notification_register_trigger( new Trigger\Reply\Updated() );
	notification_register_trigger( new Trigger\Reply\Removed() );
}
