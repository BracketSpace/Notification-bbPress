<?php
/**
 * Forum removed trigger
 *
 * @package notification-bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Forum;

use BracketSpace\Notification\bbPress\Repository\Trigger\Forum as ForumTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Forum removed trigger class
 */
class Removed extends ForumTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/forum/removed',
			'name' => __( 'Forum removed', 'notification-bbpress' ),
		) );

		$this->add_action( 'trash_' . bbp_get_forum_post_type(), 10, 2 );

	}

	/**
	 * Assigns action callback args to object
	 *
	 * @param int      $forum_id Forum ID.
	 * @param \WP_Post $forum    Forum object.
	 * @return void|false
	 */
	public function context( $forum_id, $forum ) {
		$this->forum = $forum;

		$this->meta                      = get_post_meta( $this->forum->ID );
		$this->forum_creation_datetime   = strtotime( $this->forum->post_date_gmt );
		$this->forum_mofication_datetime = strtotime( $this->forum->post_modified_gmt );
		$this->author                    = get_userdata( $this->forum->post_author );

		if ( isset( $this->meta['_bbp_last_active_time'] ) ) {
			$this->forum_last_active_datetime = strtotime( $this->meta['_bbp_last_active_time'][0] );
		} else {
			$this->forum_last_active_datetime = 0;
		}
	}

}
