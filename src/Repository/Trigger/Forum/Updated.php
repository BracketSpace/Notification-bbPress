<?php
/**
 * Forum updated trigger
 *
 * @package notification-bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Forum;

use BracketSpace\Notification\bbPress\Repository\Trigger\Forum as ForumTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Forum updated trigger class
 */
class Updated extends ForumTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/forum/updated',
			'name' => __( 'Forum updated', 'notification-bbpress' ),
		) );

		$this->add_action( 'post_updated', 10, 3 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param  int    $forum_id     Forum ID.
	 * @param  object $forum        Forum object.
	 * @param  object $forum_before Forum object.
	 * @return mixed void or false if no notifications should be sent
	 */
	public function context( $forum_id, $forum, $forum_before ) {

		// WP_Post object.
		$this->forum = $forum;

		if ( bbp_get_forum_post_type() !== $this->forum->post_type ) {
			return false;
		}

		if ( empty( $this->forum->post_name ) ) {
			return false;
		}

		if ( ! in_array( $forum_before->post_status, [ 'publish', 'private' ], true ) || 'trash' === $this->forum->post_status ) {
			return false;
		}

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
