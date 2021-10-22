<?php
/**
 * Register Triggers.
 *
 * @package notification/bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository;

use BracketSpace\Notification\bbPress\Repository\Trigger;
use BracketSpace\Notification\Register;

/**
 * Trigger Repository.
 */
class TriggerRepository {

	/**
	 * @return void
	 */
	public static function register() {
		if ( notification_get_setting( 'triggers/bbpress/forum_enable' ) ) {
			Register::trigger( new Trigger\Forum\Added() );
			Register::trigger( new Trigger\Forum\Updated() );
			Register::trigger( new Trigger\Forum\Removed() );
		}

		if ( notification_get_setting( 'triggers/bbpress/topic_enable' ) ) {
			Register::trigger( new Trigger\Topic\Created() );
			Register::trigger( new Trigger\Topic\Merged() );
			Register::trigger( new Trigger\Topic\Updated() );
			Register::trigger( new Trigger\Topic\Removed() );
		}

		if ( notification_get_setting( 'triggers/bbpress/reply_enable' ) ) {
			Register::trigger( new Trigger\Reply\Created() );
			Register::trigger( new Trigger\Reply\Updated() );
			Register::trigger( new Trigger\Reply\Removed() );
		}
	}

}
