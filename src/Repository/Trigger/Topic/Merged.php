<?php
/**
 * Topic merged trigger
 *
 * @package notification-bbpress
 */

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Topic;

use BracketSpace\Notification\bbPress\Repository\Trigger\Topic as TopicTrigger;
use BracketSpace\Notification\Defaults\MergeTag;

/**
 * Topic merged trigger class
 */
class Merged extends TopicTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( array(
			'slug' => 'bbpress/topic/merged',
			'name' => __( 'Topic merged', 'notification-bbpress' ),
		) );

		$this->add_action( 'bbp_merged_topic', 10, 1 );

	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @return mixed void or false if no notifications should be sent
	 */
	public function context() {

		$this->dest_topic   = get_post( $this->callback_args[0] );
		$this->source_topic = get_post( $this->callback_args[1] );

		$forum_id    = get_post_meta( $this->dest_topic->ID, '_bbp_forum_id', true );
		$this->forum = get_post( $forum_id );

		$this->dest_topic_author   = get_userdata( $this->dest_topic->post_author );
		$this->source_topic_author = get_userdata( $this->source_topic->post_author );

		$this->topic_merge_datetime = time();

	}

	/**
	 * Registers attached merge tags
	 *
	 * @return void
	 */
	public function merge_tags() {

		$this->add_merge_tag( new MergeTag\Post\PostID( array(
			'post_type' => 'dest_topic',
			'name'      => __( 'Destination topic ID', 'notification-bbpress' ),
			'group'     => __( 'Destination topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostPermalink( array(
			'post_type' => 'dest_topic',
			'name'      => __( 'Destination topic URL', 'notification-bbpress' ),
			'group'     => __( 'Destination topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostTitle( array(
			'post_type' => 'dest_topic',
			'name'      => __( 'Destination topic title', 'notification-bbpress' ),
			'group'     => __( 'Destination topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostSlug( array(
			'post_type' => 'dest_topic',
			'name'      => __( 'Destination topic slug', 'notification-bbpress' ),
			'group'     => __( 'Destination topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostContent( array(
			'post_type'   => 'dest_topic',
			'name'        => __( 'Destination topic description', 'notification-bbpress' ),
			'description' => __( 'Hello, I just wanted to ask about...', 'notification-bbpress' ),
			'group'       => __( 'Destination topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserID( array(
			'slug'          => 'dest_topic_author_ID',
			'name'          => __( 'Destination topic author user ID', 'notification-bbpress' ),
			'property_name' => 'dest_topic_author',
			'group'         => __( 'Destination topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserLogin( array(
			'slug'          => 'dest_topic_author_login',
			'name'          => __( 'Destination topic author user login', 'notification-bbpress' ),
			'property_name' => 'dest_topic_author',
			'group'         => __( 'Destination topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserEmail( array(
			'slug'          => 'dest_topic_author_email',
			'name'          => __( 'Destination topic author user email', 'notification-bbpress' ),
			'property_name' => 'dest_topic_author',
			'group'         => __( 'Destination topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserNicename( array(
			'slug'          => 'dest_topic_author_nicename',
			'name'          => __( 'Destination topic author user nicename', 'notification-bbpress' ),
			'property_name' => 'dest_topic_author',
			'group'         => __( 'Destination topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserFirstName( array(
			'slug'          => 'dest_topic_author_firstname',
			'name'          => __( 'Destination topic author user first name', 'notification-bbpress' ),
			'property_name' => 'dest_topic_author',
			'group'         => __( 'Destination topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserLastName( array(
			'slug'          => 'dest_topic_author_lastname',
			'name'          => __( 'Destination topic author user last name', 'notification-bbpress' ),
			'property_name' => 'dest_topic_author',
			'group'         => __( 'Destination topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostID( array(
			'post_type' => 'source_topic',
			'name'      => __( 'Source topic ID', 'notification-bbpress' ),
			'group'     => __( 'Source topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostPermalink( array(
			'post_type' => 'source_topic',
			'name'      => __( 'Source topic URL', 'notification-bbpress' ),
			'group'     => __( 'Source topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostTitle( array(
			'post_type' => 'source_topic',
			'name'      => __( 'Source topic title', 'notification-bbpress' ),
			'group'     => __( 'Source topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostSlug( array(
			'post_type' => 'source_topic',
			'name'      => __( 'Source topic slug', 'notification-bbpress' ),
			'group'     => __( 'Source topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\Post\PostContent( array(
			'post_type'   => 'source_topic',
			'name'        => __( 'Source topic description', 'notification-bbpress' ),
			'description' => __( 'Hello, I just wanted to ask about...', 'notification-bbpress' ),
			'group'       => __( 'Source topic', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserID( array(
			'slug'          => 'source_topic_author_ID',
			'name'          => __( 'Source topic author user ID', 'notification-bbpress' ),
			'property_name' => 'source_topic_author',
			'group'         => __( 'Source topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserLogin( array(
			'slug'          => 'source_topic_author_login',
			'name'          => __( 'Source topic author user login', 'notification-bbpress' ),
			'property_name' => 'source_topic_author',
			'group'         => __( 'Source topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserEmail( array(
			'slug'          => 'source_topic_author_email',
			'name'          => __( 'Source topic author user email', 'notification-bbpress' ),
			'property_name' => 'source_topic_author',
			'group'         => __( 'Source topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserNicename( array(
			'slug'          => 'source_topic_author_nicename',
			'name'          => __( 'Source topic author user nicename', 'notification-bbpress' ),
			'property_name' => 'source_topic_author',
			'group'         => __( 'Source topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserFirstName( array(
			'slug'          => 'source_topic_author_firstname',
			'name'          => __( 'Source topic author user first name', 'notification-bbpress' ),
			'property_name' => 'source_topic_author',
			'group'         => __( 'Source topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\User\UserLastName( array(
			'slug'          => 'source_topic_author_lastname',
			'name'          => __( 'Source topic author user last name', 'notification-bbpress' ),
			'property_name' => 'source_topic_author',
			'group'         => __( 'Source topic author', 'notification-bbpress' ),
		) ) );

		$this->add_merge_tag( new MergeTag\DateTime\DateTime( array(
			'slug' => 'topic_merge_datetime',
			'name' => __( 'Topic merge date and time', 'notification-bbpress' ),
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

}
