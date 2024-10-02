<?php
/**
 * Topic merged trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Topic;

use BracketSpace\Notification\bbPress\Repository\Trigger\Topic as TopicTrigger;
use BracketSpace\Notification\Repository\MergeTag;

/**
 * Topic merged trigger class
 */
class Merged extends TopicTrigger
{
	/**
	 * Destination topic instance.
	 *
	 * @var  \WP_Post
	 */
	public $destTopic;

	/**
	 * Destination topic author instance.
	 *
	 * @var  \WP_User
	 */
	public $destTopicAuthor;

	/**
	 * Source topic instance.
	 *
	 * @var  \WP_Post
	 */
	public $sourceTopic;

	/**
	 * Source topic author instance.
	 *
	 * @var  \WP_User
	 */
	public $sourceTopicAuthor;

	/**
	 * Forum instance.
	 *
	 * @var  \WP_Post
	 */
	public $forum;

	/**
	 * Constructor
	 */
	public function __construct()
	{

		parent::__construct(
			[
				'slug' => 'bbpress/topic/merged',
				'name' => __('Topic merged', 'notification-bbpress'),
			]
		);

		$this->addAction('bbp_merged_topic', 10, 1);
	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param int $destTopicId   Destination Topic ID.
	 * @param int $sourceTopicId Source Topic ID.
	 * @return void|false
	 */
	public function context($destTopicId, $sourceTopicId)
	{
		/** @var \WP_Post */
		$destTopic = get_post($destTopicId);
		/** @var \WP_User */
		// phpcs:ignore Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
		$destTopicAuthor =  get_userdata((int)$destTopic->post_author);

		$this->destTopic = $destTopic;
		$this->destTopicAuthor = $destTopicAuthor;

		/** @var \WP_Post */
		$sourceTopic = get_post($sourceTopicId);
		/** @var \WP_User */
		// phpcs:ignore Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
		$sourceTopicAuthor =  get_userdata((int)$sourceTopic->post_author);

		$this->sourceTopic = $sourceTopic;
		$this->sourceTopicAuthor = $sourceTopicAuthor;

		/** @var int */
		$forumId = get_post_meta($destTopic->ID, '_bbp_forum_id', true);
		/** @var \WP_Post */
		$forum = get_post($forumId);
		$this->forum = $forum;
	}

	/**
	 * Registers attached merge tags
	 *
	 * @return void
	 */
	public function mergeTags()
	{
		$this->addMergeTag(
			new MergeTag\Post\PostID(
				[
					'post_type' => 'destTopic',
					'name' => __('Destination topic ID', 'notification-bbpress'),
					'group' => __('Destination topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostPermalink(
				[
					'post_type' => 'destTopic',
					'name' => __('Destination topic URL', 'notification-bbpress'),
					'group' => __('Destination topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostTitle(
				[
					'post_type' => 'destTopic',
					'name' => __('Destination topic title', 'notification-bbpress'),
					'group' => __('Destination topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostSlug(
				[
					'post_type' => 'destTopic',
					'name' => __('Destination topic slug', 'notification-bbpress'),
					'group' => __('Destination topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostContent(
				[
					'post_type' => 'destTopic',
					'name' => __('Destination topic description', 'notification-bbpress'),
					'description' => __('Hello, I just wanted to ask about...', 'notification-bbpress'),
					'group' => __('Destination topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserID(
				[
					'slug' => 'dest_topic_author_ID',
					'name' => __('Destination topic author user ID', 'notification-bbpress'),
					'property_name' => 'destTopicAuthor',
					'group' => __('Destination topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLogin(
				[
					'slug' => 'dest_topic_author_login',
					'name' => __('Destination topic author user login', 'notification-bbpress'),
					'property_name' => 'destTopicAuthor',
					'group' => __('Destination topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserEmail(
				[
					'slug' => 'dest_topic_author_email',
					'name' => __('Destination topic author user email', 'notification-bbpress'),
					'property_name' => 'destTopicAuthor',
					'group' => __('Destination topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserNicename(
				[
					'slug' => 'dest_topic_author_nicename',
					'name' => __('Destination topic author user nicename', 'notification-bbpress'),
					'property_name' => 'destTopicAuthor',
					'group' => __('Destination topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserFirstName(
				[
					'slug' => 'dest_topic_author_firstname',
					'name' => __('Destination topic author user first name', 'notification-bbpress'),
					'property_name' => 'destTopicAuthor',
					'group' => __('Destination topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLastName(
				[
					'slug' => 'dest_topic_author_lastname',
					'name' => __('Destination topic author user last name', 'notification-bbpress'),
					'property_name' => 'destTopicAuthor',
					'group' => __('Destination topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostID(
				[
					'post_type' => 'sourceTopic',
					'name' => __('Source topic ID', 'notification-bbpress'),
					'group' => __('Source topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostPermalink(
				[
					'post_type' => 'sourceTopic',
					'name' => __('Source topic URL', 'notification-bbpress'),
					'group' => __('Source topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostTitle(
				[
					'post_type' => 'sourceTopic',
					'name' => __('Source topic title', 'notification-bbpress'),
					'group' => __('Source topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostSlug(
				[
					'post_type' => 'sourceTopic',
					'name' => __('Source topic slug', 'notification-bbpress'),
					'group' => __('Source topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostContent(
				[
					'post_type' => 'sourceTopic',
					'name' => __('Source topic description', 'notification-bbpress'),
					'description' => __('Hello, I just wanted to ask about...', 'notification-bbpress'),
					'group' => __('Source topic', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserID(
				[
					'slug' => 'source_topic_author_ID',
					'name' => __('Source topic author user ID', 'notification-bbpress'),
					'property_name' => 'sourceTopicAuthor',
					'group' => __('Source topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLogin(
				[
					'slug' => 'source_topic_author_login',
					'name' => __('Source topic author user login', 'notification-bbpress'),
					'property_name' => 'sourceTopicAuthor',
					'group' => __('Source topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserEmail(
				[
					'slug' => 'source_topic_author_email',
					'name' => __('Source topic author user email', 'notification-bbpress'),
					'property_name' => 'sourceTopicAuthor',
					'group' => __('Source topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserNicename(
				[
					'slug' => 'source_topic_author_nicename',
					'name' => __('Source topic author user nicename', 'notification-bbpress'),
					'property_name' => 'sourceTopicAuthor',
					'group' => __('Source topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserFirstName(
				[
					'slug' => 'source_topic_author_firstname',
					'name' => __('Source topic author user first name', 'notification-bbpress'),
					'property_name' => 'sourceTopicAuthor',
					'group' => __('Source topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLastName(
				[
					'slug' => 'source_topic_author_lastname',
					'name' => __('Source topic author user last name', 'notification-bbpress'),
					'property_name' => 'sourceTopicAuthor',
					'group' => __('Source topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'topic_merge_datetime',
					'name' => __('Topic merge date and time', 'notification-bbpress'),
					'timestamp' => static function () {
						return time();
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostID(
				[
					'post_type' => 'forum',
					'name' => __('Forum ID', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostPermalink(
				[
					'post_type' => 'forum',
					'name' => __('Forum URL', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostTitle(
				[
					'post_type' => 'forum',
					'name' => __('Forum title', 'notification-bbpress'),
				]
			)
		);
	}
}
