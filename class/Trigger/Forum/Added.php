<?php
/**
 * Forum added trigger
 *
 * @package notification
 */

namespace underDEV\Notification\bbPress\Trigger\Forum;

use underDEV\Notification\bbPress\Trigger\Forum as ForumTrigger;
use underDEV\Notification\Defaults\MergeTag;

/**
 * Forum added trigger class
 */
class Added extends ForumTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug'      => 'bbpress/forum/new',
			'name'      => __( 'New forum added', 'notification-bbpress' ),
		) );

		$this->add_action( 'transition_post_status', 10, 3 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @return mixed void or false if no notifications should be sent
	 */
	public function action() {

		$new_status = $this->callback_args[0];
		$old_status = $this->callback_args[1];
		// WP_Post object.
		$this->forum = $this->callback_args[2];

		if ( $this->forum->post_type != bbp_get_forum_post_type() ) {
			return false;
		}

		if ( $new_status == $old_status ) {
			return false;
		}

		if ( $new_status != 'publish' ) {
			return false;
		}

		$this->meta                      = get_post_meta( $this->forum->ID );
		$this->forum_creation_datetime   = strtotime( $this->forum->post_date );
		$this->forum_mofication_datetime = strtotime( $this->forum->post_modified );
		$this->author                    = get_userdata( $this->forum->post_author );

		if ( isset( $this->meta['_bbp_last_active_time'] ) ) {
			$this->forum_last_active_datetime = strtotime( $this->meta['_bbp_last_active_time'][0] );
		} else {
			$this->forum_last_active_datetime = 0;
		}

		$this->postpone_action( 'bbp_forum_attributes_metabox_save', 1000 );

	}

	/**
	 * Postponed action callback
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @return mixed void or false if no notifications should be sent
	 */
	public function postponed_action() {

		// fix for the action being called recursively.
		if ( did_action( 'bbp_forum_attributes_metabox_save' ) ) {
			return false;
		}

	}

}
