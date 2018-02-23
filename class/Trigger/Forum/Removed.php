<?php
/**
 * Forum removed trigger
 *
 * @package notification
 */

namespace underDEV\Notification\bbPress\Trigger\Forum;

use underDEV\Notification\bbPress\Trigger\Forum as ForumTrigger;
use underDEV\Notification\Defaults\MergeTag;

/**
 * Forum removed trigger class
 */
class Removed extends ForumTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug'      => 'bbpress/forum/removed',
			'name'      => __( 'Forum removed', 'notification-bbpress' ),
		) );

		$this->add_action( 'trash_' . bbp_get_forum_post_type(), 10, 2 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @return mixed void or false if no notifications should be sent
	 */
	public function action() {

		// WP_Post object.
		$this->forum  = $this->callback_args[1];

		$this->meta                      = get_post_meta( $this->forum->ID );
		$this->forum_creation_datetime   = strtotime( $this->forum->post_date );
		$this->forum_mofication_datetime = strtotime( $this->forum->post_modified );
		$this->author                    = get_userdata( $this->forum->post_author );

		if ( isset( $this->meta['_bbp_last_active_time'] ) ) {
			$this->forum_last_active_datetime = strtotime( $this->meta['_bbp_last_active_time'][0] );
		} else {
			$this->forum_last_active_datetime = 0;
		}

	}

}
