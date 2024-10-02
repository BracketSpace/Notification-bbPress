<?php
/**
 * Reply trigger abstract
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger;

use BracketSpace\Notification\Repository\Trigger\BaseTrigger;
use BracketSpace\Notification\Repository\MergeTag;

/**
 * Reply trigger class
 */
abstract class Reply extends BaseTrigger
{
	/**
	 * Reply instance.
	 *
	 * @var  \WP_Post
	 */
	public $reply;

	/**
	 * Topic instance.
	 *
	 * @var  \WP_Post
	 */
	public $topic;

	/**
	 * Forum instance.
	 *
	 * @var  \WP_Post
	 */
	public $forum;

	/**
	 * List of reply metadata.
	 *
	 * @var  array<string, mixed>
	 */
	public $meta;

	/**
	 * List of topic metadata.
	 *
	 * @var  array<string, mixed>
	 */
	public $topicMeta;

	/**
	 * Instance of reply author.
	 *
	 * @var  \WP_User
	 */
	public $replyAuthor;

	/**
	 * Instance of topic author.
	 *
	 * @var  \WP_User
	 */
	public $topicAuthor;

	/**
	 * List of available topic statuses.
	 *
	 * @var  array<string>
	 */
	public $statuses;

	/**
	 * List of available topic types.
	 *
	 * @var  array<string>
	 */
	public $types;

	/**
	 * Constructor
	 *
	 * @param array<string, mixed> $params trigger configuration params.
	 */
	public function __construct($params = [])
	{
		if (
			!isset($params['slug'], $params['name']) ||
			!is_string($params['slug']) ||
			!is_string($params['name'])
		) {
			trigger_error('Reply trigger requires slug and name params.', E_USER_ERROR);
		}

		parent::__construct($params['slug'], $params['name']);

		$this->setGroup(__('bbPress : Reply', 'notification-bbpress'));
	}

	/**
	 * Sets the properties of the trigger.
	 *
	 * @param  \WP_Post  $reply
	 * @return void
	 */
	protected function setProperties($reply)
	{
		$this->statuses = bbp_get_topic_statuses();
		$this->types = bbp_get_topic_types();

		$meta = get_post_meta($reply->ID);
		/** @var \WP_User */
		// phpcs:ignore Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
		$replyAuthor = get_userdata((int)$reply->post_author);
		$this->reply = $reply;
		$this->replyAuthor = $replyAuthor;
		$this->meta = is_array($meta) ? $meta : [];

		/** @var \WP_Post */
		$topic = get_post($this->meta['_bbp_topic_id'][0]);
		/** @var \WP_User */
		// phpcs:ignore Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
		$topicAuthor = get_userdata((int)$topic->post_author);
		$topicMeta = get_post_meta($topic->ID);
		$this->topic = $topic;
		$this->topicAuthor = $topicAuthor;
		$this->topicMeta = is_array($topicMeta) ? $topicMeta : [];

		/** @var \WP_Post */
		$forum = get_post($this->meta['_bbp_forum_id'][0]);
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
					'post_type' => 'reply',
					'name' => __('Reply ID', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostPermalink(
				[
					'post_type' => 'reply',
					'name' => __('Reply URL', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostContent(
				[
					'post_type' => 'reply',
					'name' => __('Reply description', 'notification-bbpress'),
					'description' => __('Hello, I just wanted to ask about...', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\UrlTag(
				[
					'slug' => 'reply_in_topic_url',
					'name' => __('Reply URL in Topic', 'notification-bbpress'),
					'group' => __('Reply', 'notification-bbpress'),
					'resolver' => static function (Reply $trigger) {
						return bbp_get_reply_url($trigger->reply->ID);
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserID(
				[
					'slug' => 'reply_author_ID',
					'name' => __('Reply author user ID', 'notification-bbpress'),
					'property_name' => 'replyAuthor',
					'group' => __('Reply author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLogin(
				[
					'slug' => 'reply_author_login',
					'name' => __('Reply author user login', 'notification-bbpress'),
					'property_name' => 'replyAuthor',
					'group' => __('Reply author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserEmail(
				[
					'slug' => 'reply_author_email',
					'name' => __('Reply author user email', 'notification-bbpress'),
					'property_name' => 'replyAuthor',
					'group' => __('Reply author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserNicename(
				[
					'slug' => 'reply_author_nicename',
					'name' => __('Reply author user nicename', 'notification-bbpress'),
					'property_name' => 'replyAuthor',
					'group' => __('Reply author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserFirstName(
				[
					'slug' => 'reply_author_firstname',
					'name' => __('Reply author user first name', 'notification-bbpress'),
					'property_name' => 'replyAuthor',
					'group' => __('Reply author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLastName(
				[
					'slug' => 'reply_author_lastname',
					'name' => __('Reply author user last name', 'notification-bbpress'),
					'property_name' => 'replyAuthor',
					'group' => __('Reply author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'reply_creation_datetime',
					'name' => __('Reply creation date and time', 'notification-bbpress'),
					'timestamp' => static function (Reply $trigger) {
						return strtotime($trigger->reply->post_date_gmt);
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'reply_modification_datetime',
					'name' => __('Reply modification date and time', 'notification-bbpress'),
					'timestamp' => static function (Reply $trigger) {
						return strtotime($trigger->reply->post_modified_gmt);
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostID(
				[
					'post_type' => 'topic',
					'name' => __('Topic ID', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostPermalink(
				[
					'post_type' => 'topic',
					'name' => __('Topic URL', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostTitle(
				[
					'post_type' => 'topic',
					'name' => __('Topic title', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostSlug(
				[
					'post_type' => 'topic',
					'name' => __('Topic slug', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostContent(
				[
					'post_type' => 'topic',
					'name' => __('Topic description', 'notification-bbpress'),
					'description' => __('I think this might be helpful...', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserID(
				[
					'slug' => 'topic_author_ID',
					'name' => __('Topic author user ID', 'notification-bbpress'),
					'property_name' => 'topicAuthor',
					'group' => __('Topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLogin(
				[
					'slug' => 'topic_author_login',
					'name' => __('Topic author user login', 'notification-bbpress'),
					'property_name' => 'topicAuthor',
					'group' => __('Topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserEmail(
				[
					'slug' => 'topic_author_email',
					'name' => __('Topic author user email', 'notification-bbpress'),
					'property_name' => 'topicAuthor',
					'group' => __('Topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserNicename(
				[
					'slug' => 'topic_author_nicename',
					'name' => __('Topic author user nicename', 'notification-bbpress'),
					'property_name' => 'topicAuthor',
					'group' => __('Topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserFirstName(
				[
					'slug' => 'topic_author_firstname',
					'name' => __('Topic author user first name', 'notification-bbpress'),
					'property_name' => 'topicAuthor',
					'group' => __('Topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLastName(
				[
					'slug' => 'topic_author_lastname',
					'name' => __('Topic author user last name', 'notification-bbpress'),
					'property_name' => 'topicAuthor',
					'group' => __('Topic author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'topic_creation_datetime',
					'name' => __('Topic creation date and time', 'notification-bbpress'),
					'timestamp' => static function (Reply $trigger) {
						return strtotime($trigger->topic->post_date_gmt);
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'topic_modification_datetime',
					'name' => __('Topic modification date and time', 'notification-bbpress'),
					'timestamp' => static function (Reply $trigger) {
						return strtotime($trigger->topic->post_modified_gmt);
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'topic_last_active_datetime',
					'name' => __('Topic last active date and time', 'notification-bbpress'),
					'timestamp' => static function (Reply $trigger) {
						return is_array($trigger->meta['_bbp_last_active_time'] ?? null)
							? strtotime($trigger->meta['_bbp_last_active_time'][0])
							: 0;
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\IntegerTag(
				[
					'slug' => 'topic_reply_count',
					'name' => __('Topic reply count', 'notification-bbpress'),
					'group' => __('Topic', 'notification-bbpress'),
					'resolver' => static function (Reply $trigger) {
						return is_array($trigger->topicMeta['_bbp_reply_count'] ?? null)
							? $trigger->topicMeta['_bbp_reply_count'][0]
							: 0;
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\IntegerTag(
				[
					'slug' => 'topic_voice_count',
					'name' => __('Topic voice count', 'notification-bbpress'),
					'group' => __('Topic', 'notification-bbpress'),
					'resolver' => static function (Reply $trigger) {
						return is_array($trigger->topicMeta['_bbp_voice_count'] ?? null)
							? $trigger->topicMeta['_bbp_voice_count'][0]
							: 0;
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\StringTag(
				[
					'slug' => 'topic_tags',
					'name' => __('Topic tags', 'notification-bbpress'),
					'group' => __('Topic', 'notification-bbpress'),
					'resolver' => static function (Reply $trigger) {
						return $trigger->getTopicTags($trigger->topic->ID);
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\StringTag(
				[
					'slug' => 'topic_status',
					'name' => __('Topic status', 'notification-bbpress'),
					'group' => __('Topic', 'notification-bbpress'),
					'resolver' => static function (Reply $trigger) {
						return $trigger->statuses[$trigger->topic->post_status] ?? $trigger->statuses['publish'];
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\StringTag(
				[
					'slug' => 'topic_type',
					'name' => __('Topic type', 'notification-bbpress'),
					'group' => __('Topic', 'notification-bbpress'),
					'resolver' => static function (Reply $trigger) {
						return $trigger->getTopicType($trigger->topic->ID);
					},
				]
			)
		);

		if (function_exists('bbp_get_topic_subscribers')) {
			$this->addMergeTag(
				new MergeTag\StringTag(
					[
						'slug' => 'topic_subscriber_IDs',
						'name' => __('Topic subscriber IDs', 'notification-bbpress'),
						'description' => __('Comma-separated list.', 'notification-bbpress'),
						'group' => __('Topic', 'notification-bbpress'),
						'resolver' => static function (Reply $trigger) {
							$subscribers = bbp_get_topic_subscribers($trigger->topic->ID);

							return implode(', ', is_array($subscribers) ? $subscribers : []);
						},
					]
				)
			);
		}

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

		// phpcs:ignore SlevomatCodingStandard.ControlStructures.EarlyExit.EarlyExitNotUsed
		if (function_exists('bbp_get_forum_subscribers')) {
			$this->addMergeTag(
				new MergeTag\StringTag(
					[
						'slug' => 'forum_subscriber_IDs',
						'name' => __('Forum subscriber IDs', 'notification-bbpress'),
						'description' => __('Comma-separated list.', 'notification-bbpress'),
						'group' => __('Forum', 'notification-bbpress'),
						'resolver' => static function (Reply $trigger) {
							$subscribers = bbp_get_forum_subscribers($trigger->forum->ID);

							return implode(', ', is_array($subscribers) ? $subscribers : []);
						},
					]
				)
			);
		}
	}

	/**
	 * Gets topic tags
	 *
	 * @param int $topicId Topic ID.
	 * @return string            Comma separated names.
	 */
	public function getTopicTags($topicId)
	{
		$tags = wp_get_post_terms($topicId, 'topic-tag', ['fields' => 'names']);

		return implode(', ', is_array($tags) ? $tags : []);
	}

	/**
	 * Gets topic type
	 *
	 * @param int $topicId Topic ID.
	 * @return string            Topic type.
	 */
	public function getTopicType($topicId)
	{
		if (bbp_is_topic_super_sticky($topicId)) {
			$type = $this->types['super'];
		} elseif (bbp_is_topic_sticky($topicId)) {
			$type = $this->types['stick'];
		} else {
			$type = $this->types['unstick'];
		}

		return $type;
	}
}
