<?php
/**
 * Topic removed trigger
 *
 * @package notification
 */

namespace underDEV\Notification\bbPress\Trigger\Topic;

use underDEV\Notification\bbPress\Trigger\Topic as TopicTrigger;
use underDEV\Notification\Defaults\MergeTag;

/**
 * Topic removed trigger class
 */
class Removed extends TopicTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug'      => 'bbpress/topic/removed',
			'name'      => __( 'Topic removed', 'notification-bbpress' ),
		) );

		$this->add_action( 'trash_' . bbp_get_topic_post_type(), 10, 2 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @return mixed void or false if no notifications should be sent
	 */
	public function action() {

		$topic_id = $this->callback_args[0];

		$this->meta   = get_post_meta( $topic_id );
		$this->topic  = $this->callback_args[1];
		$this->forum  = get_post( $this->meta['_bbp_forum_id'][0] );
		$this->author = get_userdata( $this->topic->post_author );

		$this->topic_creation_datetime   = strtotime( $this->topic->post_date );
		$this->topic_mofication_datetime = strtotime( $this->topic->post_modified );

		if ( isset( $this->meta['_bbp_last_active_time'] ) ) {
			$this->topic_last_active_datetime = strtotime( $this->meta['_bbp_last_active_time'][0] );
		} else {
			$this->topic_last_active_datetime = 0;
		}

	}

}
