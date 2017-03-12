<?php
/**
 * Triggers class
 */

namespace Notification\bbPress;

use Notification\bbPress\Triggers;

class Triggers {

	public function __construct() {

		$this->load_triggers();

		add_filter( 'notification/disable/post_types_allowed', array( $this, 'disable_metabox_post_types' ), 10, 1 );

	}

	/**
	 * Load triggers from their directories
	 * @return void
	 */
	public function load_triggers() {

		// Forums
		new Triggers\Forums();

		// Topics
		new Triggers\Topics();

		// Replies
		new Triggers\Replies();

	}

	/**
	 * Allow bbPress post types to disable certain triggers
	 * @param  array $post_types default post types
	 * @return array             post types with bbPress types
	 */
	public function disable_metabox_post_types( $post_types ) {

		$post_types[] = bbp_get_forum_post_type();
		$post_types[] = bbp_get_topic_post_type();
		$post_types[] = bbp_get_reply_post_type();

		return $post_types;

	}

}
