<?php
/**
 * Forums triggers class
 */

namespace Notification\bbPress\Triggers;

use Notification\bbPress\Trigger;

class Forums extends Trigger {

	public function __construct() {

		parent::__construct();

	}

	/**
	 * New forum has been added
	 * @return void
	 */
	public function trigger_new() {

		register_trigger( array(
			'slug'     => 'bbpress/forum/new',
			'name'     => __( 'New forum added', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Forum', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_new' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'ID'                   => 'integer',
				'forum_title'          => 'string',
				'forum_url'            => 'url',
				'forum_description'    => 'string',
				'last_active_datetime' => 'string',
				'subforum_count'       => 'integer',
				'reply_count'          => 'integer',
				'total_reply_count'    => 'integer',
				'topic_count'          => 'integer',
				'total_topic_count'    => 'integer',
				'forum_status'         => 'string',
				'forum_type'           => 'string',
				'forum_visibility'     => 'string'
			)
		) );

	}

	/**
	 * Forum has been updated
	 * @return void
	 */
	public function trigger_updated() {

		register_trigger( array(
			'slug'     => 'bbpress/forum/updated',
			'name'     => __( 'Forum updated', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Forum', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_updated' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'ID'                   => 'integer',
				'forum_title'          => 'string',
				'forum_url'            => 'url',
				'forum_description'    => 'string',
				'last_active_datetime' => 'string',
				'subforum_count'       => 'integer',
				'reply_count'          => 'integer',
				'total_reply_count'    => 'integer',
				'topic_count'          => 'integer',
				'total_topic_count'    => 'integer',
				'forum_status'         => 'string',
				'forum_type'           => 'string',
				'forum_visibility'     => 'string'
			)
		) );

	}

	/**
	 * Forum has been removed
	 * @return void
	 */
	public function trigger_removed() {

		register_trigger( array(
			'slug'     => 'bbpress/forum/removed',
			'name'     => __( 'Forum removed', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Forum', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_removed' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'ID'                   => 'integer',
				'forum_title'          => 'string',
				'forum_url'            => 'url',
				'forum_description'    => 'string',
				'last_active_datetime' => 'string',
				'subforum_count'       => 'integer',
				'reply_count'          => 'integer',
				'total_reply_count'    => 'integer',
				'topic_count'          => 'integer',
				'total_topic_count'    => 'integer',
				'forum_status'         => 'string',
				'forum_type'           => 'string'
			)
		) );

	}

	/**
	 * Notifications actions
	 * @return void
	 */
	public function notifications() {

		if ( is_notification_defined( 'bbpress/forum/new' ) ) {

			add_action( 'transition_post_status', function( $new_status, $old_status, $post ) {

				if ( $post->post_type != bbp_get_forum_post_type() ) {
					return;
				}

				if ( $new_status == $old_status ) {
					return;
				}

				if ( $new_status != 'publish' ) {
					return;
				}

				add_action( 'bbp_forum_attributes_metabox_save', array( $this, 'notification_new' ), 10, 1 );

			}, 10, 3 );

		}

		if ( is_notification_defined( 'bbpress/forum/updated' ) ) {
			add_action( 'post_updated', array( $this, 'notification_updated' ), 10, 3 );
		}

		if ( is_notification_defined( 'bbpress/forum/removed' ) ) {
			add_action( 'trash_' . bbp_get_forum_post_type(), array( $this, 'notification_removed' ), 10, 2 );
		}

	}

	/**
	 * Email default template for trigger `new`
	 * @return string html template
	 */
	public function template_new() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'New forum "{forum_title}" has been added.', 'notification-bbpress' ) . '</p>';

		$html .= '<p>' . __( 'Visit it now at {forum_url}.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * Email default template for trigger `updated`
	 * @return string html template
	 */
	public function template_updated() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'Forum "{forum_title}" has been updated.', 'notification-bbpress' ) . '</p>';

		$html .= '<p>' . __( 'Check what\'s new at {forum_url}.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * Email default template for trigger `removed`
	 * @return string html template
	 */
	public function template_removed() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'Forum "{forum_title}" has been removed.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * New forum has been published action
	 * @param  integer $forum_id forum id
	 * @return void
	 */
	public function notification_new( $forum_id ) {

		$meta         = get_post_meta( $forum_id );
		$statuses     = bbp_get_forum_statuses();
		$types        = bbp_get_forum_types();
		$visibilities = bbp_get_forum_visibilities();

		notification( 'bbpress/forum/new', array(
			'ID'                   => $forum_id,
			'forum_title'          => get_post_field( 'post_title', $forum_id ),
			'forum_url'            => get_permalink( $forum_id ),
			'forum_description'    => get_post_field( 'post_content', $forum_id ),
			'last_active_datetime' => $meta['_bbp_last_active_time'][0],
			'subforum_count'       => $meta['_bbp_forum_subforum_count'][0],
			'reply_count'          => $meta['_bbp_reply_count'][0],
			'total_reply_count'    => $meta['_bbp_total_reply_count'][0],
			'topic_count'          => $meta['_bbp_topic_count'][0],
			'total_topic_count'    => $meta['_bbp_total_topic_count'][0],
			'forum_status'         => isset( $meta['_bbp_status'] ) ? $statuses[ $meta['_bbp_status'][0] ] : $statuses['open'],
			'forum_type'           => isset( $meta['_bbp_forum_type'] ) ? $types[ $meta['_bbp_forum_type'][0] ] : $types['forum'],
			'forum_visibility'     => $visibilities[ bbp_get_forum_visibility( $forum_id ) ]
		), array(
			'post' => $forum_id,
			'user' => array(
				get_post_field( 'post_author', $forum_id ),
				get_current_user_id()
			)
		) );

	}

	/**
	 * Forum has been updated action
	 * @param  integer $forum_id   forum id
	 * @param  object $post        WP_Post object
	 * @param  object $post_before WP_Post object
	 * @return void
	 */
	public function notification_updated( $forum_id, $post, $post_before ) {

		if ( get_post_type( $post ) != bbp_get_forum_post_type() || empty( $post->post_name ) || $post_before->post_status != 'publish' || $post->post_status == 'trash' ) {
			return;
		}

		$meta         = get_post_meta( $forum_id );
		$statuses     = bbp_get_forum_statuses();
		$types        = bbp_get_forum_types();
		$visibilities = bbp_get_forum_visibilities();

		notification( 'bbpress/forum/updated', array(
			'ID'                   => $forum_id,
			'forum_title'          => $post->post_title,
			'forum_url'            => get_permalink( $forum_id ),
			'forum_description'    => $post->post_content,
			'last_active_datetime' => $meta['_bbp_last_active_time'][0],
			'subforum_count'       => $meta['_bbp_forum_subforum_count'][0],
			'reply_count'          => $meta['_bbp_reply_count'][0],
			'total_reply_count'    => $meta['_bbp_total_reply_count'][0],
			'topic_count'          => $meta['_bbp_topic_count'][0],
			'total_topic_count'    => $meta['_bbp_total_topic_count'][0],
			'forum_status'         => isset( $meta['_bbp_status'] ) ? $statuses[ $meta['_bbp_status'][0] ] : $statuses['open'],
			'forum_type'           => isset( $meta['_bbp_forum_type'] ) ? $types[ $meta['_bbp_forum_type'][0] ] : $types['forum'],
			'forum_visibility'     => $visibilities[ bbp_get_forum_visibility( $forum_id ) ]
		), array(
			'post' => $forum_id,
			'user' => array(
				$post->post_author,
				get_current_user_id()
			)
		) );

	}

	/**
	 * Forum has been removed action
	 * @param  integer $forum_id   forum id
	 * @param  object $post        WP_Post object
	 * @return void
	 */
	public function notification_removed( $forum_id, $post ) {

		$meta         = get_post_meta( $forum_id );
		$statuses     = bbp_get_forum_statuses();
		$types        = bbp_get_forum_types();

		notification( 'bbpress/forum/removed', array(
			'ID'                   => $forum_id,
			'forum_title'          => $post->post_title,
			'forum_url'            => get_permalink( $forum_id ),
			'forum_description'    => $post->post_content,
			'last_active_datetime' => $meta['_bbp_last_active_time'][0],
			'subforum_count'       => $meta['_bbp_forum_subforum_count'][0],
			'reply_count'          => $meta['_bbp_reply_count'][0],
			'total_reply_count'    => $meta['_bbp_total_reply_count'][0],
			'topic_count'          => $meta['_bbp_topic_count'][0],
			'total_topic_count'    => $meta['_bbp_total_topic_count'][0],
			'forum_status'         => isset( $meta['_bbp_status'] ) ? $statuses[ $meta['_bbp_status'][0] ] : $statuses['open'],
			'forum_type'           => isset( $meta['_bbp_forum_type'] ) ? $types[ $meta['_bbp_forum_type'][0] ] : $types['forum']
		), array(
			'post' => $forum_id,
			'user' => array(
				$post->post_author,
				get_current_user_id()
			)
		) );

	}

}
