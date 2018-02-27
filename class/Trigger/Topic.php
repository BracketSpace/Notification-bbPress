<?php
/**
 * Topic trigger abstract
 *
 * @package notification
 */

namespace underDEV\Notification\bbPress\Trigger;

use underDEV\Notification\Abstracts;
use underDEV\Notification\Defaults\MergeTag;

/**
 * Topic trigger class
 */
abstract class Topic extends Abstracts\Trigger {

	/**
	 * Constructor
	 *
	 * @param array $params trigger configuration params.
	 */
	public function __construct( $params = array() ) {

		if ( ! isset( $params['slug'], $params['name'] ) ) {
			trigger_error( 'Topic trigger requires slug and name params.', E_USER_ERROR );
		}

		parent::__construct( $params['slug'], $params['name'] );

		$this->set_group( __( 'bbPress : Topic', 'notification-bbpress' ) );

		$this->statuses = bbp_get_topic_statuses();
		$this->types    = bbp_get_topic_types();

	}

	/**
	 * Registers attached merge tags
	 *
	 * @return void
	 */
	public function merge_tags() {

		$this->add_merge_tag( new MergeTag\Post\PostID( array(
			'post_type' => 'topic',
			'name'      => __( 'Topic ID', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostPermalink( array(
			'post_type' => 'topic',
			'name'      => __( 'Topic URL', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostTitle( array(
			'post_type' => 'topic',
			'name'      => __( 'Topic title', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostSlug( array(
			'post_type' => 'topic',
			'name'      => __( 'Topic slug', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostContent( array(
			'post_type'   => 'topic',
			'name'        => __( 'Topic description', 'notification-bbpress' ),
			'description' => __( 'Hello, I just wanted to ask about...', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserID( array(
			'slug'          => 'topic_author_ID',
			'name'          => __( 'Topic author user ID', 'notification-bbpress' ),
			'property_name' => 'author',
		) ) );

    	$this->add_merge_tag( new MergeTag\User\UserLogin( array(
			'slug'          => 'topic_author_login',
			'name'          => __( 'Topic author user login' , 'notification-bbpress' ),
			'property_name' => 'author',
		) ) );

        $this->add_merge_tag( new MergeTag\User\UserEmail( array(
			'slug'          => 'topic_author_email',
			'name'          => __( 'Topic author user email', 'notification-bbpress' ),
			'property_name' => 'author',
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserNicename( array(
			'slug'          => 'topic_author_nicename',
			'name'          => __( 'Topic author user nicename', 'notification-bbpress' ),
			'property_name' => 'author',
		) ) );

        $this->add_merge_tag( new MergeTag\User\UserFirstName( array(
			'slug'          => 'topic_author_firstname',
			'name'          => __( 'Topic author user first name', 'notification-bbpress' ),
			'property_name' => 'author',
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserLastName( array(
			'slug'          => 'topic_author_lastname',
			'name'          => __( 'Topic author user last name', 'notification-bbpress' ),
			'property_name' => 'author',
		) ) );

		$this->add_merge_tag( new MergeTag\DateTime\DateTime( array(
			'slug' => 'topic_creation_datetime',
			'name' => __( 'Topic creation date and time', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\DateTime\DateTime( array(
			'slug' => 'topic_modification_datetime',
			'name' => __( 'Topic modification date and time', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\DateTime\DateTime( array(
			'slug' => 'topic_last_active_datetime',
			'name' => __( 'Topic last active date and time', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\IntegerTag( array(
			'slug'     => 'topic_reply_count',
			'name'     => __( 'Topic reply count', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_reply_count'] ) ? $this->meta['_bbp_reply_count'][0] : 0;
			},
		) ) );

		$this->add_merge_tag( new MergeTag\IntegerTag( array(
			'slug'     => 'topic_voice_count',
			'name'     => __( 'Topic voice count', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_voice_count'] ) ? $this->meta['_bbp_voice_count'][0] : 0;
			},
		) ) );

		$this->add_merge_tag( new MergeTag\StringTag( array(
			'slug'     => 'topic_tags',
			'name'     => __( 'Topic tags', 'notification-bbpress' ),
			'resolver' => function() {
				return $this->get_topic_tags( $this->topic->ID );
			},
		) ) );

		$this->add_merge_tag( new MergeTag\StringTag( array(
			'slug'     => 'topic_status',
			'name'     => __( 'Topic status', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->statuses[ $this->topic->post_status ] ) ? $this->statuses[ $this->topic->post_status ] : $this->statuses['publish'];
			},
		) ) );

		$this->add_merge_tag( new MergeTag\StringTag( array(
			'slug'     => 'topic_type',
			'name'     => __( 'Topic type', 'notification-bbpress' ),
			'resolver' => function() {
				return $this->get_topic_type( $this->topic->ID );
			},
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostID( array(
			'post_type' => 'forum',
			'name'      => __( 'Forum ID', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostPermalink( array(
			'post_type' => 'forum',
			'name'      => __( 'Forum URL', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostTitle( array(
			'post_type' => 'forum',
			'name'      => __( 'Forum title', 'notification-bbpress' ),
		) ) );

    }

    /**
	 * Gets topic tags
	 *
	 * @param  integer $topic_id Topic ID.
	 * @return string            Comma separated names.
	 */
	public function get_topic_tags( $topic_id ) {
		return implode( ', ', wp_get_post_terms( $topic_id, 'topic-tag', array( 'fields' => 'names' ) ) );
	}

    /**
	 * Gets topic type
	 *
	 * @param  integer $topic_id Topic ID.
	 * @return string            Topic type.
	 */
	public function get_topic_type( $topic_id ) {

		if ( bbp_is_topic_super_sticky( $topic_id ) ) {
			$type = $this->types['super'];
		} else if ( bbp_is_topic_sticky( $topic_id ) ) {
			$type = $this->types['stick'];
		} else {
			$type = $this->types['unstick'];
		}

		return $type;

	}

}
