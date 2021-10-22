<?php
/**
 * Reply removed trigger
 *
 * @package notification-bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Reply;

use BracketSpace\Notification\bbPress\Repository\Trigger\Reply as ReplyTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Reply removed trigger class
 */
class Removed extends ReplyTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/reply/removed',
			'name' => __( 'Reply removed', 'notification-bbpress' ),
		) );

		$this->add_action( 'trash_' . bbp_get_reply_post_type(), 10, 2 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @return mixed void or false if no notifications should be sent
	 */
	public function context() {

		$reply_id = $this->callback_args[0];

		$this->meta = get_post_meta( $reply_id );

		$this->reply = $this->callback_args[1];
		$this->topic = get_post( $this->meta['_bbp_topic_id'][0] );
		$this->forum = get_post( $this->meta['_bbp_forum_id'][0] );

		$this->topic_meta = get_post_meta( $this->topic->ID );

		$this->reply_author = get_userdata( $this->reply->post_author );
		$this->topic_author = get_userdata( $this->topic->post_author );

		$this->reply_creation_datetime   = strtotime( $this->topic->post_date_gmt );
		$this->reply_mofication_datetime = strtotime( $this->topic->post_modified_gmt );

		$this->topic_creation_datetime   = strtotime( $this->topic->post_date_gmt );
		$this->topic_mofication_datetime = strtotime( $this->topic->post_modified_gmt );

		if ( isset( $this->meta['_bbp_last_active_time'] ) ) {
			$this->topic_last_active_datetime = strtotime( $this->meta['_bbp_last_active_time'][0] );
		} else {
			$this->topic_last_active_datetime = 0;
		}

	}

}
