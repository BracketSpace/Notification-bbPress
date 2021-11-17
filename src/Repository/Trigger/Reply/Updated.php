<?php
/**
 * Reply updated trigger
 *
 * @package notification-bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Reply;

use BracketSpace\Notification\bbPress\Repository\Trigger\Reply as ReplyTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Reply updated trigger class
 */
class Updated extends ReplyTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/reply/updated',
			'name' => __( 'Reply updated', 'notification-bbpress' ),
		) );

		$this->add_action( 'bbp_edit_reply_post_extras', 10, 1 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param int $reply_id Reply ID.
	 * @return void|false
	 */
	public function context( $reply_id ) {
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
