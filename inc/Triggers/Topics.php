<?php
/**
 * Topics triggers class
 */

namespace underDEV\Notification\bbPress\Triggers;

use underDEV\Notification\bbPress\Trigger;

class Topics extends Trigger {

	public function __construct() {

		parent::__construct();

	}

	/**
	 * Get topic tags
	 * @param  integer $topic_id Topic ID
	 * @return string            Comma separated names
	 */
	public function topic_tags( $topic_id ) {

		return implode( ', ', wp_get_post_terms( $topic_id, 'topic-tag', array( 'fields' => 'names' ) ) );

	}

	/**
	 * New topic has been created
	 * @return void
	 */
	public function trigger_created() {

		register_trigger( array(
			'slug'     => 'bbpress/topic/created',
			'name'     => __( 'New topic added', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Topic', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_created' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'topic_id'                   => 'integer',
				'topic_title'                => 'string',
				'topic_message'              => 'string',
				'topic_url'                  => 'url',
				'topic_author_id'            => 'integer',
				'topic_author_name'          => 'string',
				'topic_author_email'         => 'email',
				'topic_author_login'         => 'string',
				'topic_tags'                 => 'string',
				'topic_status'               => 'string',
				'topic_type'                 => 'string',
				'topic_last_active_datetime' => 'string',
				'topic_reply_count'          => 'integer',
				'topic_voice_count'          => 'integer',
				'forum_id'                   => 'integer',
				'forum_title'                => 'string',
				'forum_url'                  => 'url'
			)
		) );

	}

	/**
	 * Topic has been updated
	 * @return void
	 */
	public function trigger_updated() {

		register_trigger( array(
			'slug'     => 'bbpress/topic/updated',
			'name'     => __( 'Topic updated', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Topic', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_updated' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'topic_id'                   => 'integer',
				'topic_title'                => 'string',
				'topic_message'              => 'string',
				'topic_url'                  => 'url',
				'topic_author_id'            => 'integer',
				'topic_author_name'          => 'string',
				'topic_author_email'         => 'email',
				'topic_author_login'         => 'string',
				'topic_tags'                 => 'string',
				'topic_status'               => 'string',
				'topic_type'                 => 'string',
				'topic_last_active_datetime' => 'string',
				'topic_reply_count'          => 'integer',
				'topic_voice_count'          => 'integer',
				'forum_id'                   => 'integer',
				'forum_title'                => 'string',
				'forum_url'                  => 'url'
			)
		) );

	}

	/**
	 * Topic has been merged
	 * @return void
	 */
	public function trigger_merged() {

		register_trigger( array(
			'slug'     => 'bbpress/topic/merged',
			'name'     => __( 'Topic merged', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Topic', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_merged' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'destination_topic_id'           => 'integer',
				'destination_topic_title'        => 'string',
				'destination_topic_url'          => 'url',
				'destination_topic_author_id'    => 'integer',
				'destination_topic_author_name'  => 'string',
				'destination_topic_author_email' => 'email',
				'destination_topic_author_login' => 'string',
				'source_topic_id'                => 'integer',
				'source_topic_title'             => 'string',
				'source_topic_url'               => 'url',
				'source_topic_author_id'         => 'integer',
				'source_topic_author_name'       => 'string',
				'source_topic_author_email'      => 'email',
				'source_topic_author_login'      => 'string'
			)
		) );

	}


	/**
	 * Topic has been removed
	 * @return void
	 */
	public function trigger_removed() {

		register_trigger( array(
			'slug'     => 'bbpress/topic/removed',
			'name'     => __( 'Topic removed', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Topic', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_removed' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'topic_id'                   => 'integer',
				'topic_title'                => 'string',
				'topic_message'              => 'string',
				'topic_url'                  => 'url',
				'topic_author_id'            => 'integer',
				'topic_author_name'          => 'string',
				'topic_author_email'         => 'email',
				'topic_author_login'         => 'string',
				'topic_tags'                 => 'string',
				'topic_status'               => 'string',
				'topic_type'                 => 'string',
				'topic_last_active_datetime' => 'string',
				'topic_reply_count'          => 'integer',
				'topic_voice_count'          => 'integer',
				'forum_id'                   => 'integer',
				'forum_title'                => 'string',
				'forum_url'                  => 'url'
			)
		) );

	}

	/**
	 * Notifications actions
	 * @return void
	 */
	public function notifications() {

		if ( is_notification_defined( 'bbpress/topic/created' ) ) {
			add_action( 'bbp_new_topic_post_extras', array( $this, 'notification_created' ), 1000, 1 );
		}

		if ( is_notification_defined( 'bbpress/topic/updated' ) ) {
			add_action( 'bbp_edit_topic_post_extras', array( $this, 'notification_updated' ), 10, 1 );
		}

		if ( is_notification_defined( 'bbpress/topic/merged' ) ) {
			add_action( 'bbp_merged_topic', array( $this, 'notification_merged' ), 10, 2 );
		}

		if ( is_notification_defined( 'bbpress/topic/removed' ) ) {
			add_action( 'trash_' . bbp_get_topic_post_type(), array( $this, 'notification_removed' ), 10, 2 );
		}

	}

	/**
	 * Email default template for trigger `new`
	 * @return string html template
	 */
	public function template_created() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'New topic "{topic_title}" has been created in "{forum_title}" forum.', 'notification-bbpress' ) . '</p>';

		$html .= '<p>' . __( 'Visit it now at {topic_url}.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * Email default template for trigger `updated`
	 * @return string html template
	 */
	public function template_updated() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'Topic "{topic_title}" has been updated.', 'notification-bbpress' ) . '</p>';

		$html .= '<p>' . __( 'Check what\'s new at {topic_url}.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * Email default template for trigger `merged`
	 * @return string html template
	 */
	public function template_merged() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'Topic "{source_topic_title}" has been merged to "{destination_topic_title}".', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * Email default template for trigger `removed`
	 * @return string html template
	 */
	public function template_removed() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'Topic "{topic_title}" has been removed.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * New topic has been created action
	 * @param  integer $topic_id forum id
	 * @return void
	 */
	public function notification_created( $topic_id ) {

		$meta  = get_post_meta( $topic_id );
		$topic = get_post( $topic_id );
		$forum = get_post( $meta['_bbp_forum_id'][0] );

		$statuses = bbp_get_topic_statuses();
		$types    = bbp_get_topic_types();

		if ( bbp_is_topic_super_sticky( $topic_id ) ) {
			$type = $types['super'];
		} else if ( bbp_is_topic_sticky( $topic_id ) ) {
			$type = $types['stick'];
		} else {
			$type = $types['unstick'];
		}

		notification( 'bbpress/topic/created', array(
			'topic_id'                   => $topic_id,
			'topic_title'                => $topic->post_title,
			'topic_message'              => $topic->post_content,
			'topic_url'                  => get_permalink( $topic_id ),
			'topic_author_id'            => $topic->post_author,
			'topic_author_name'          => get_the_author_meta( 'display_name', $topic->post_author ),
			'topic_author_email'         => get_the_author_meta( 'user_email', $topic->post_author ),
			'topic_author_login'         => get_the_author_meta( 'user_login', $topic->post_author ),
			'topic_tags'                 => $this->topic_tags( $topic_id ),
			'topic_status'               => $statuses[ $topic->post_status ],
			'topic_type'                 => $type,
			'topic_last_active_datetime' => $meta['_bbp_last_active_time'][0],
			'topic_reply_count'          => $meta['_bbp_reply_count'][0],
			'topic_voice_count'          => $meta['_bbp_voice_count'][0],
			'forum_id'                   => $meta['_bbp_forum_id'][0],
			'forum_title'                => $forum->post_title,
			'forum_url'                  => get_permalink( $forum->ID )
		), array(
			'post' => array(
				$topic_id,
				$forum->ID
			),
			'user' => array(
				$topic->post_author,
				$forum->post_author,
				get_current_user_id()
			)
		) );

	}

	/**
	 * Topic has been updated action
	 * @param  integer $topic_id     topic id
	 * @return void
	 */
	public function notification_updated( $topic_id ) {

		$meta  = get_post_meta( $topic_id );
		$topic = get_post( $topic_id );
		$forum = get_post( $meta['_bbp_forum_id'][0] );

		$statuses = bbp_get_topic_statuses();
		$types    = bbp_get_topic_types();

		if ( bbp_is_topic_super_sticky( $topic_id ) ) {
			$type = $types['super'];
		} else if ( bbp_is_topic_sticky( $topic_id ) ) {
			$type = $types['stick'];
		} else {
			$type = $types['unstick'];
		}

		notification( 'bbpress/topic/updated', array(
			'topic_id'                   => $topic_id,
			'topic_title'                => $topic->post_title,
			'topic_message'              => $topic->post_content,
			'topic_url'                  => get_permalink( $topic_id ),
			'topic_author_id'            => $topic->post_author,
			'topic_author_name'          => get_the_author_meta( 'display_name', $topic->post_author ),
			'topic_author_email'         => get_the_author_meta( 'user_email', $topic->post_author ),
			'topic_author_login'         => get_the_author_meta( 'user_login', $topic->post_author ),
			'topic_tags'                 => $this->topic_tags( $topic_id ),
			'topic_status'               => $statuses[ $topic->post_status ],
			'topic_type'                 => $type,
			'topic_last_active_datetime' => $meta['_bbp_last_active_time'][0],
			'topic_reply_count'          => $meta['_bbp_reply_count'][0],
			'topic_voice_count'          => $meta['_bbp_voice_count'][0],
			'forum_id'                   => $meta['_bbp_forum_id'][0],
			'forum_title'                => $forum->post_title,
			'forum_url'                  => get_permalink( $forum->ID )
		), array(
			'post' => array(
				$topic_id,
				$forum->ID
			),
			'user' => array(
				$topic->post_author,
				$forum->post_author,
				get_current_user_id()
			)
		) );

	}

	/**
	 * Topic has been merged action
	 * @param  integer $dest_topic_id topic id
	 * @param  integer $src_topic_id  topic id
	 * @return void
	 */
	public function notification_merged( $dest_topic_id, $src_topic_id ) {

		$dest_topic = get_post( $dest_topic_id );
		$source_topic = get_post( $src_topic_id );

		notification( 'bbpress/topic/merged', array(
			'destination_topic_id'           => $dest_topic_id,
			'destination_topic_title'        => $dest_topic->post_title,
			'destination_topic_url'          => get_permalink( $dest_topic_id ),
			'destination_topic_author_id'    => $dest_topic->post_author,
			'destination_topic_author_name'  => get_the_author_meta( 'display_name', $dest_topic->post_author ),
			'destination_topic_author_email' => get_the_author_meta( 'user_email', $dest_topic->post_author ),
			'destination_topic_author_login' => get_the_author_meta( 'user_login', $dest_topic->post_author ),
			'source_topic_id'                => $src_topic_id,
			'source_topic_title'             => $source_topic->post_title,
			'source_topic_url'               => get_permalink( $src_topic_id ),
			'source_topic_author_id'         => $source_topic->post_author,
			'source_topic_author_name'       => get_the_author_meta( 'display_name', $source_topic->post_author ),
			'source_topic_author_email'      => get_the_author_meta( 'user_email', $source_topic->post_author ),
			'source_topic_author_login'      => get_the_author_meta( 'user_login', $source_topic->post_author )
		), array(
			'post' => array(
				$dest_topic_id,
				$src_topic_id
			),
			'user' => array(
				$dest_topic->post_author,
				$source_topic->post_author,
				get_current_user_id()
			)
		) );

	}

	/**
	 * Topic has been removed action
	 * @param  integer $topic_id forum id
	 * @param  object  $topic    WP_Post object
	 * @return void
	 */
	public function notification_removed( $topic_id, $topic ) {

		$meta  = get_post_meta( $topic_id );
		$forum = get_post( $meta['_bbp_forum_id'][0] );

		$statuses = bbp_get_topic_statuses();
		$types    = bbp_get_topic_types();

		if ( bbp_is_topic_super_sticky( $topic_id ) ) {
			$type = $types['super'];
		} else if ( bbp_is_topic_sticky( $topic_id ) ) {
			$type = $types['stick'];
		} else {
			$type = $types['unstick'];
		}

		notification( 'bbpress/topic/removed', array(
			'topic_id'                   => $topic_id,
			'topic_title'                => $topic->post_title,
			'topic_message'              => $topic->post_content,
			'topic_url'                  => get_permalink( $topic_id ),
			'topic_author_id'            => $topic->post_author,
			'topic_author_name'          => get_the_author_meta( 'display_name', $topic->post_author ),
			'topic_author_email'         => get_the_author_meta( 'user_email', $topic->post_author ),
			'topic_author_login'         => get_the_author_meta( 'user_login', $topic->post_author ),
			'topic_tags'                 => $this->topic_tags( $topic_id ),
			'topic_status'               => $statuses[ $topic->post_status ],
			'topic_type'                 => $type,
			'topic_last_active_datetime' => $meta['_bbp_last_active_time'][0],
			'topic_reply_count'          => $meta['_bbp_reply_count'][0],
			'topic_voice_count'          => $meta['_bbp_voice_count'][0],
			'forum_id'                   => $meta['_bbp_forum_id'][0],
			'forum_title'                => $forum->post_title,
			'forum_url'                  => get_permalink( $forum->ID )
		), array(
			'post' => array(
				$topic_id,
				$forum->ID
			),
			'user' => array(
				$topic->post_author,
				$forum->post_author,
				get_current_user_id()
			)
		) );

	}

}
