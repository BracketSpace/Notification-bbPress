<?php
/**
 * Reply updated trigger
 *
 * @package notification
 */

namespace underDEV\Notification\bbPress\Trigger\Reply;

use underDEV\Notification\bbPress\Trigger\Reply as ReplyTrigger;
use underDEV\Notification\Defaults\MergeTag;

/**
 * Reply updated trigger class
 */
class Updated extends ReplyTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug'      => 'bbpress/reply/updated',
			'name'      => __( 'Reply updated', 'notification-bbpress' ),
		) );

		$this->add_action( 'bbp_edit_reply_post_extras', 10, 1 );

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

		$this->reply  = get_post( $reply_id );
		$this->topic  = get_post( $this->meta['_bbp_topic_id'][0] );
		$this->forum  = get_post( $this->meta['_bbp_forum_id'][0] );

		$this->topic_meta = get_post_meta( $this->topic->ID );

		$this->reply_author = get_userdata( $this->reply->post_author );
		$this->topic_author = get_userdata( $this->topic->post_author );

		$this->reply_creation_datetime   = strtotime( $this->topic->post_date );
		$this->reply_mofication_datetime = strtotime( $this->topic->post_modified );

		$this->topic_creation_datetime   = strtotime( $this->topic->post_date );
		$this->topic_mofication_datetime = strtotime( $this->topic->post_modified );

		if ( isset( $this->meta['_bbp_last_active_time'] ) ) {
			$this->topic_last_active_datetime = strtotime( $this->meta['_bbp_last_active_time'][0] );
		} else {
			$this->topic_last_active_datetime = 0;
		}

	}

}
