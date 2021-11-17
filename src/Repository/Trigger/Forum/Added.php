<?php
/**
 * Forum added trigger
 *
 * @package notification-bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Forum;

use BracketSpace\Notification\bbPress\Repository\Trigger\Forum as ForumTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Forum added trigger class
 */
class Added extends ForumTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/forum/new',
			'name' => __( 'New forum added', 'notification-bbpress' ),
		) );

		$this->add_action( 'transition_post_status', 10, 3 );

	}

	/**
	 * Assigns action callback args to object
	 *
	 * @param string   $new_status New status.
	 * @param string   $old_status Old status.
	 * @param \WP_Post $forum Forum object.
	 * @return void|false
	 */
	public function context( $new_status, $old_status, $forum ) {
		$this->forum = $forum;

		if ( bbp_get_forum_post_type() !== $this->forum->post_type ) {
			return false;
		}

		if ( $new_status === $old_status ) {
			return false;
		}

		if ( 'publish' !== $new_status ) {
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
