<?php
/**
 * Replies triggers class
 */

namespace underDEV\Notification\bbPress\Triggers;

use underDEV\Notification\bbPress\Trigger;

class Replies extends Trigger {

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
	 * New reply has been added
	 * @return void
	 */
	public function trigger_added() {

		register_trigger( array(
			'slug'     => 'bbpress/reply/added',
			'name'     => __( 'New reply added', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Reply', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_added' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'reply_id'           => 'integer',
				'reply_content'      => 'string',
				'reply_permalink'    => 'url',
				'reply_in_topic_url' => 'url',
				'reply_author_id'    => 'integer',
				'reply_author_name'  => 'string',
				'reply_author_email' => 'email',
				'reply_author_login' => 'string',
				'topic_title'        => 'string',
				'topic_url'          => 'url',
				'topic_author_id'    => 'integer',
				'topic_author_name'  => 'string',
				'topic_author_email' => 'email',
				'topic_author_login' => 'string',
				'forum_id'           => 'integer',
				'forum_title'        => 'string',
				'forum_url'          => 'url'
			)
		) );

	}

	/**
	 * Reply has been updated
	 * @return void
	 */
	public function trigger_updated() {

		register_trigger( array(
			'slug'     => 'bbpress/reply/updated',
			'name'     => __( 'Reply updated', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Reply', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_updated' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'reply_id'           => 'integer',
				'reply_content'      => 'string',
				'reply_permalink'    => 'url',
				'reply_in_topic_url' => 'url',
				'reply_author_id'    => 'integer',
				'reply_author_name'  => 'string',
				'reply_author_email' => 'email',
				'reply_author_login' => 'string',
				'topic_title'        => 'string',
				'topic_url'          => 'url',
				'topic_author_id'    => 'integer',
				'topic_author_name'  => 'string',
				'topic_author_email' => 'email',
				'topic_author_login' => 'string',
				'forum_id'           => 'integer',
				'forum_title'        => 'string',
				'forum_url'          => 'url'
			)
		) );

	}

	/**
	 * Reply has been removed
	 * @return void
	 */
	public function trigger_removed() {

		register_trigger( array(
			'slug'     => 'bbpress/reply/removed',
			'name'     => __( 'Reply removed', 'notification-bbpress' ),
			'group'    => __( 'bbPress : Reply', 'notification-bbpress' ),
			'template' => call_user_func( array( $this, 'template_removed' ) ),
			'disable'  => array( 'user', 'post' ),
			'tags'     => array(
				'reply_id'           => 'integer',
				'reply_content'      => 'string',
				'reply_permalink'    => 'url',
				'reply_in_topic_url' => 'url',
				'reply_author_id'    => 'integer',
				'reply_author_name'  => 'string',
				'reply_author_email' => 'email',
				'reply_author_login' => 'string',
				'topic_title'        => 'string',
				'topic_url'          => 'url',
				'topic_author_id'    => 'integer',
				'topic_author_name'  => 'string',
				'topic_author_email' => 'email',
				'topic_author_login' => 'string',
				'forum_id'           => 'integer',
				'forum_title'        => 'string',
				'forum_url'          => 'url'
			)
		) );

	}

	/**
	 * Notifications actions
	 * @return void
	 */
	public function notifications() {

		if ( is_notification_defined( 'bbpress/reply/added' ) ) {
			add_action( 'bbp_new_reply_post_extras', array( $this, 'notification_added' ), 1000, 1 );
		}

		if ( is_notification_defined( 'bbpress/reply/updated' ) ) {
			add_action( 'bbp_edit_reply_post_extras', array( $this, 'notification_updated' ), 10, 1 );
		}

		if ( is_notification_defined( 'bbpress/reply/removed' ) ) {
			add_action( 'trash_' . bbp_get_reply_post_type(), array( $this, 'notification_removed' ), 10, 2 );
		}

	}

	/**
	 * Email default template for trigger `added`
	 * @return string html template
	 */
	public function template_added() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'New reply in "{topic_title}" topic has been published.', 'notification-bbpress' ) . '</p>';

		$html .= '<p>' . __( 'See the reply at {reply_in_topic_url}.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * Email default template for trigger `updated`
	 * @return string html template
	 */
	public function template_updated() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'Reply in "{topic_title}" topic has been updated.', 'notification-bbpress' ) . '</p>';

		$html .= '<p>' . __( 'See the reply at {reply_in_topic_url}.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * Email default template for trigger `removed`
	 * @return string html template
	 */
	public function template_removed() {

		$html = '<p>' . __( 'Howdy!', 'notification-bbpress' ) . '</p>';

		/* translators: please do not translate strings in { } */
		$html .= '<p>' . __( 'Reply in "{topic_title}" topic has been removed.', 'notification-bbpress' ) . '</p>';

		$html .= '<p>' . __( 'See the topic at {topic_url}.', 'notification-bbpress' ) . '</p>';

		return $html;

	}

	/**
	 * New reply has been added action
	 * @param  integer $reply_id reply id
	 * @return void
	 */
	public function notification_added( $reply_id ) {

		$reply = get_post( $reply_id );
		$meta  = get_post_meta( $reply_id );
		$topic = get_post( $meta['_bbp_topic_id'][0] );
		$forum = get_post( $meta['_bbp_forum_id'][0] );

		notification( 'bbpress/reply/added', array(
			'reply_id'           => $reply_id,
			'reply_content'      => $reply->post_content,
			'reply_permalink'    => get_permalink( $reply->ID ),
			'reply_in_topic_url' => bbp_get_reply_url( $reply_id ),
			'reply_author_id'    => $reply->post_author,
			'reply_author_name'  => get_the_author_meta( 'display_name', $reply->post_author ),
			'reply_author_email' => get_the_author_meta( 'user_email', $reply->post_author ),
			'reply_author_login' => get_the_author_meta( 'user_login', $reply->post_author ),
			'topic_title'        => $topic->post_title,
			'topic_url'          => get_permalink( $topic->ID ),
			'topic_author_id'    => $topic->post_author,
			'topic_author_name'  => get_the_author_meta( 'display_name', $topic->post_author ),
			'topic_author_email' => get_the_author_meta( 'user_email', $topic->post_author ),
			'topic_author_login' => get_the_author_meta( 'user_login', $topic->post_author ),
			'forum_id'           => $forum->ID,
			'forum_title'        => $forum->post_title,
			'forum_url'          => get_permalink( $forum->ID )
		), array(
			'post' => array(
				$reply_id,
				$topic->ID,
				$forum->ID
			),
			'user' => array(
				$reply->post_author,
				$topic->post_author,
				$forum->post_author,
				get_current_user_id()
			)
		) );

	}

	/**
	 * Reply has been updated action
	 * @param  integer $reply_id reply id
	 * @return void
	 */
	public function notification_updated( $reply_id ) {

		$reply = get_post( $reply_id );
		$meta  = get_post_meta( $reply_id );
		$topic = get_post( $meta['_bbp_topic_id'][0] );
		$forum = get_post( $meta['_bbp_forum_id'][0] );

		notification( 'bbpress/reply/updated', array(
			'reply_id'           => $reply_id,
			'reply_content'      => $reply->post_content,
			'reply_permalink'    => get_permalink( $reply->ID ),
			'reply_in_topic_url' => bbp_get_reply_url( $reply_id ),
			'reply_author_id'    => $reply->post_author,
			'reply_author_name'  => get_the_author_meta( 'display_name', $reply->post_author ),
			'reply_author_email' => get_the_author_meta( 'user_email', $reply->post_author ),
			'reply_author_login' => get_the_author_meta( 'user_login', $reply->post_author ),
			'topic_title'        => $topic->post_title,
			'topic_url'          => get_permalink( $topic->ID ),
			'topic_author_id'    => $topic->post_author,
			'topic_author_name'  => get_the_author_meta( 'display_name', $topic->post_author ),
			'topic_author_email' => get_the_author_meta( 'user_email', $topic->post_author ),
			'topic_author_login' => get_the_author_meta( 'user_login', $topic->post_author ),
			'forum_id'           => $forum->ID,
			'forum_title'        => $forum->post_title,
			'forum_url'          => get_permalink( $forum->ID )
		), array(
			'post' => array(
				$reply_id,
				$topic->ID,
				$forum->ID
			),
			'user' => array(
				$reply->post_author,
				$topic->post_author,
				$forum->post_author,
				get_current_user_id()
			)
		) );

	}

	/**
	 * Reply has been removed action
	 * @param  integer $reply_id reply id
	 * @param  object  $reply    WP_Post object
	 * @return void
	 */
	public function notification_removed( $reply_id, $reply ) {

		$meta  = get_post_meta( $reply_id );
		$topic = get_post( $meta['_bbp_topic_id'][0] );
		$forum = get_post( $meta['_bbp_forum_id'][0] );

		notification( 'bbpress/reply/removed', array(
			'reply_id'           => $reply_id,
			'reply_content'      => $reply->post_content,
			'reply_permalink'    => get_permalink( $reply->ID ),
			'reply_in_topic_url' => bbp_get_reply_url( $reply_id ),
			'reply_author_id'    => $reply->post_author,
			'reply_author_name'  => get_the_author_meta( 'display_name', $reply->post_author ),
			'reply_author_email' => get_the_author_meta( 'user_email', $reply->post_author ),
			'reply_author_login' => get_the_author_meta( 'user_login', $reply->post_author ),
			'topic_title'        => $topic->post_title,
			'topic_url'          => get_permalink( $topic->ID ),
			'topic_author_id'    => $topic->post_author,
			'topic_author_name'  => get_the_author_meta( 'display_name', $topic->post_author ),
			'topic_author_email' => get_the_author_meta( 'user_email', $topic->post_author ),
			'topic_author_login' => get_the_author_meta( 'user_login', $topic->post_author ),
			'forum_id'           => $forum->ID,
			'forum_title'        => $forum->post_title,
			'forum_url'          => get_permalink( $forum->ID )
		), array(
			'post' => array(
				$reply_id,
				$topic->ID,
				$forum->ID
			),
			'user' => array(
				$reply->post_author,
				$topic->post_author,
				$forum->post_author,
				get_current_user_id()
			)
		) );

	}

}
