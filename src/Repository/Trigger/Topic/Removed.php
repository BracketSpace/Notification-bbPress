<?php
/**
 * Topic removed trigger
 *
 * @package notification-bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Topic;

use BracketSpace\Notification\bbPress\Repository\Trigger\Topic as TopicTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Topic removed trigger class
 */
class Removed extends TopicTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/topic/removed',
			'name' => __( 'Topic removed', 'notification-bbpress' ),
		) );

		$this->add_action( 'trash_' . bbp_get_topic_post_type(), 10, 2 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param int      $topic_id Topic ID.
	 * @param \WP_Post $topic    Topic object.
	 * @return void|false
	 */
	public function context( $topic_id, $topic ) {
		$this->meta   = get_post_meta( $topic_id );
		$this->topic  = $topic;
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
