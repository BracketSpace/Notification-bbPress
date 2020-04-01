<?php
/**
 * Reply created trigger
 *
 * @package notification
 */

namespace BracketSpace\Notification\bbPress\Components\Trigger\Reply;

use BracketSpace\Notification\bbPress\Components\Trigger\Reply as ReplyTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Reply created trigger class
 */
class Created extends ReplyTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/reply/created',
			'name' => __( 'New reply created', 'notification-bbpress' ),
		) );

		$this->add_action( 'bbp_new_reply_post_extras', 1000, 1 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @return mixed void or false if no notifications should be sent
	 */
	public function action() {

		$reply_id = $this->callback_args[0];

		$this->meta = get_post_meta( $reply_id );

		$this->reply = get_post( $reply_id );
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
