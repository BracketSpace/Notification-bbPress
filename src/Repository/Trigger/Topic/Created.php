<?php
/**
 * Topic created trigger
 *
 * @package notification-bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Topic;

use BracketSpace\Notification\bbPress\Repository\Trigger\Topic as TopicTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Topic created trigger class
 */
class Created extends TopicTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/topic/created',
			'name' => __( 'New topic created', 'notification-bbpress' ),
		) );

		$this->add_action( 'bbp_new_topic_post_extras', 1000, 1 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param int $topic_id Topic ID.
	 * @return void|false
	 */
	public function context( $topic_id ) {
		$this->meta   = get_post_meta( $topic_id );
		$this->topic  = get_post( $topic_id );
		$this->forum  = get_post( $this->meta['_bbp_forum_id'][0] );
		$this->author = get_userdata( $this->topic->post_author );

		$this->topic_creation_datetime   = strtotime( $this->topic->post_date_gmt );
		$this->topic_mofication_datetime = strtotime( $this->topic->post_modified_gmt );

		if ( isset( $this->meta['_bbp_last_active_time'] ) ) {
			$this->topic_last_active_datetime = strtotime( $this->meta['_bbp_last_active_time'][0] );
		} else {
			$this->topic_last_active_datetime = 0;
		}
	}

}
