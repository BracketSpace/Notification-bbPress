<?php
/**
 * Forum trigger abstract
 *
 * @package notification
 */

namespace underDEV\Notification\bbPress\Trigger;

use underDEV\Notification\Abstracts;
use underDEV\Notification\Defaults\MergeTag;

/**
 * Forum trigger class
 */
abstract class Forum extends Abstracts\Trigger {

	/**
	 * Constructor
	 *
	 * @param array $params trigger configuration params.
	 */
	public function __construct( $params = array() ) {

		if ( ! isset( $params['slug'], $params['name'] ) ) {
			trigger_error( 'Forum trigger requires slug and name params.', E_USER_ERROR );
		}

		parent::__construct( $params['slug'], $params['name'] );

		$this->set_group( __( 'bbPress : Forum', 'notification-bbpress' ) );

		$this->statuses     = bbp_get_forum_statuses();
		$this->types        = bbp_get_forum_types();
		$this->visibilities = bbp_get_forum_visibilities();

	}

	/**
	 * Registers attached merge tags
	 *
	 * @return void
	 */
	public function merge_tags() {

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

		$this->add_merge_tag( new MergeTag\Post\PostSlug( array(
			'post_type' => 'forum',
			'name'      => __( 'Forum slug', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostContent( array(
			'post_type'   => 'forum',
			'name'        => __( 'Forum description', 'notification-bbpress' ),
			'description' => __( 'Offtopic forum when you can post anything you want', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\DateTime\DateTime( array(
			'slug' => 'forum_creation_datetime',
			'name' => __( 'Forum creation date and time', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\DateTime\DateTime( array(
			'slug' => 'forum_modification_datetime',
			'name' => __( 'Forum modification date and time', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\DateTime\DateTime( array(
			'slug' => 'forum_last_active_datetime',
			'name' => __( 'Forum last active date and time', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\IntegerTag( array(
			'slug'     => 'subforum_count',
			'name'     => __( 'Subforum count', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_forum_subforum_count'] ) ? $this->meta['_bbp_forum_subforum_count'][0] : 0;
			},
		) ) );

		$this->add_merge_tag( new MergeTag\IntegerTag( array(
			'slug'     => 'reply_count',
			'name'     => __( 'Reply count', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_reply_count'] ) ? $this->meta['_bbp_reply_count'][0] : 0;
			},
		) ) );

		$this->add_merge_tag( new MergeTag\IntegerTag( array(
			'slug'     => 'total_reply_count',
			'name'     => __( 'Total reply count', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_total_reply_count'] ) ? $this->meta['_bbp_total_reply_count'][0] : 0;
			},
		) ) );

		$this->add_merge_tag( new MergeTag\IntegerTag( array(
			'slug'     => 'topic_count',
			'name'     => __( 'Topic count', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_topic_count'] ) ? $this->meta['_bbp_topic_count'][0] : 0;
			},
		) ) );

		$this->add_merge_tag( new MergeTag\IntegerTag( array(
			'slug'     => 'total_topic_count',
			'name'     => __( 'Total topic count', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_total_topic_count'] ) ? $this->meta['_bbp_total_topic_count'][0] : 0;
			},
		) ) );

		$this->add_merge_tag( new MergeTag\StringTag( array(
			'slug'     => 'forum_status',
			'name'     => __( 'Forum status', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_status'] ) ? $this->statuses[ $this->meta['_bbp_total_topic_count'][0] ] : $this->statuses['open'];
			},
		) ) );

		$this->add_merge_tag( new MergeTag\StringTag( array(
			'slug'     => 'forum_type',
			'name'     => __( 'Forum type', 'notification-bbpress' ),
			'resolver' => function() {
				return isset( $this->meta['_bbp_forum_type'] ) ? $this->types[ $this->meta['_bbp_forum_type'][0] ] : $this->types['open'];
			},
		) ) );

		$this->add_merge_tag( new MergeTag\StringTag( array(
			'slug'     => 'forum_visibility',
			'name'     => __( 'Forum visibility', 'notification-bbpress' ),
			'resolver' => function() {
				return $this->visibilities[ bbp_get_forum_visibility( $this->forum->ID ) ];
			},
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserID( array(
			'slug'          => 'forum_author_ID',
			'name'          => __( 'Forum author user ID' ),
			'property_name' => 'author',
		) ) );

    	$this->add_merge_tag( new MergeTag\User\UserLogin( array(
			'slug'          => 'forum_author_login',
			'name'          => __( 'Forum author user login'  ),
			'property_name' => 'author',
		) ) );

        $this->add_merge_tag( new MergeTag\User\UserEmail( array(
			'slug'          => 'forum_author_email',
			'name'          => __( 'Forum author user email' ),
			'property_name' => 'author',
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserNicename( array(
			'slug'          => 'forum_author_nicename',
			'name'          => __( 'Forum author user nicename' ),
			'property_name' => 'author',
		) ) );

        $this->add_merge_tag( new MergeTag\User\UserFirstName( array(
			'slug'          => 'forum_author_firstname',
			'name'          => __( 'Forum author user first name' ),
			'property_name' => 'author',
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserLastName( array(
			'slug'          => 'forum_author_lastname',
			'name'          => __( 'Forum author user last name' ),
			'property_name' => 'author',
		) ) );

    }


}
