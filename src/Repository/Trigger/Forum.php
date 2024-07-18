<?php
/**
 * Forum trigger abstract
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger;

use BracketSpace\Notification\Repository\Trigger\BaseTrigger;
use BracketSpace\Notification\Repository\MergeTag;

/**
 * Forum trigger class
 */
abstract class Forum extends BaseTrigger
{
	/**
	 * Forum instance.
	 *
	 * @var  \WP_Post
	 */
	public $forum;

	/**
	 * List of forum metadata.
	 *
	 * @var  array<string, mixed>
	 */
	public $meta;

	/**
	 * Author instance.
	 *
	 * @var  \WP_User
	 */
	public $author;

	/**
	 * List of available forum statuses.
	 *
	 * @var  array<string>
	 */
	public $statuses;

	/**
	 * List of available forum types.
	 *
	 * @var  array<string>
	 */
	public $types;

	/**
	 * List of available forum visibilities.
	 *
	 * @var  array<string>
	 */
	public $visibilities;

	/**
	 * Constructor.
	 *
	 * @param array<string, mixed> $params Trigger configuration params.
	 */
	public function __construct($params = [])
	{
		if (
			!isset($params['slug'], $params['name']) ||
			!is_string($params['slug']) ||
			!is_string($params['name'])
		) {
			trigger_error('Forum trigger requires slug and name params.', E_USER_ERROR);
		}

		parent::__construct($params['slug'], $params['name']);

		$this->setGroup(__('bbPress : Forum', 'notification-bbpress'));
	}

	/**
	 * Sets trigger properties.
	 *
	 * @param  \WP_Post  $forum Forum instance.
	 * @return void
	 */
	protected function setProperties($forum)
	{
		$meta = get_post_meta($forum->ID);
		/** @var \WP_User */
		// phpcs:ignore Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
		$author = get_userdata((int)$forum->post_author);
		$this->statuses = bbp_get_forum_statuses();
		$this->types = bbp_get_forum_types();
		$this->visibilities = bbp_get_forum_visibilities();
		$this->forum = $forum;
		$this->meta = is_array($meta) ? $meta : [];
		$this->author = $author;
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

		$this->addMergeTag(
			new MergeTag\Post\PostSlug(
				[
					'post_type' => 'forum',
					'name' => __('Forum slug', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\Post\PostContent(
				[
					'post_type' => 'forum',
					'name' => __('Forum description', 'notification-bbpress'),
					'description' => __('Offtopic forum when you can post anything you want', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'forum_creation_datetime',
					'name' => __('Forum creation date and time', 'notification-bbpress'),
					'timestamp' => static function (Forum $trigger) {
						return strtotime($trigger->forum->post_date_gmt);
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'forum_modification_datetime',
					'name' => __('Forum modification date and time', 'notification-bbpress'),
					'timestamp' => static function (Forum $trigger) {
						return strtotime($trigger->forum->post_modified_gmt);
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\DateTime\DateTime(
				[
					'slug' => 'forum_last_active_datetime',
					'name' => __('Forum last active date and time', 'notification-bbpress'),
					'timestamp' => static function (Forum $trigger) {
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
					'slug' => 'subforum_count',
					'name' => __('Subforum count', 'notification-bbpress'),
					'group' => __('Forum', 'notification-bbpress'),
					'resolver' => static function (Forum $trigger) {
						return is_array($trigger->meta['_bbp_forum_subforum_count'] ?? null)
							? $trigger->meta['_bbp_forum_subforum_count'][0]
							: 0;
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\IntegerTag(
				[
					'slug' => 'reply_count',
					'name' => __('Reply count', 'notification-bbpress'),
					'group' => __('Forum', 'notification-bbpress'),
					'resolver' => static function (Forum $trigger) {
						return is_array($trigger->meta['_bbp_reply_count'] ?? null)
							? $trigger->meta['_bbp_reply_count'][0]
							: 0;
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\IntegerTag(
				[
					'slug' => 'total_reply_count',
					'name' => __('Total reply count', 'notification-bbpress'),
					'group' => __('Forum', 'notification-bbpress'),
					'resolver' => static function (Forum $trigger) {
						return is_array($trigger->meta['_bbp_total_reply_count'] ?? null)
							? $trigger->meta['_bbp_total_reply_count'][0]
							: 0;
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\IntegerTag(
				[
					'slug' => 'topic_count',
					'name' => __('Topic count', 'notification-bbpress'),
					'group' => __('Forum', 'notification-bbpress'),
					'resolver' => static function (Forum $trigger) {
						return is_array($trigger->meta['_bbp_topic_count'] ?? null)
							? $trigger->meta['_bbp_topic_count'][0]
							: 0;
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\IntegerTag(
				[
					'slug' => 'total_topic_count',
					'name' => __('Total topic count', 'notification-bbpress'),
					'group' => __('Forum', 'notification-bbpress'),
					'resolver' => static function (Forum $trigger) {
						return is_array($trigger->meta['_bbp_total_topic_count'] ?? null)
							? $trigger->meta['_bbp_total_topic_count'][0]
							: 0;
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\StringTag(
				[
					'slug' => 'forum_status',
					'name' => __('Forum status', 'notification-bbpress'),
					'group' => __('Forum', 'notification-bbpress'),
					'resolver' => static function (Forum $trigger) {
						return $trigger->statuses[bbp_get_forum_status($trigger->forum->ID)];
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\StringTag(
				[
					'slug' => 'forum_type',
					'name' => __('Forum type', 'notification-bbpress'),
					'group' => __('Forum', 'notification-bbpress'),
					'resolver' => static function (Forum $trigger) {
						return $trigger->types[bbp_get_forum_type($trigger->forum->ID)];
					},
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\StringTag(
				[
					'slug' => 'forum_visibility',
					'name' => __('Forum visibility', 'notification-bbpress'),
					'group' => __('Forum', 'notification-bbpress'),
					'resolver' => static function (Forum $trigger) {
						return $trigger->visibilities[bbp_get_forum_visibility($trigger->forum->ID)];
					},
				]
			)
		);

		if (function_exists('bbp_get_forum_subscribers')) {
			$this->addMergeTag(
				new MergeTag\StringTag(
					[
						'slug' => 'forum_subscriber_IDs',
						'name' => __('Forum subscriber IDs', 'notification-bbpress'),
						'description' => __('Comma-separated list.', 'notification-bbpress'),
						'group' => __('Forum', 'notification-bbpress'),
						'resolver' => static function (Forum $trigger) {
							$subscribers = bbp_get_forum_subscribers($trigger->forum->ID);

							return implode(', ', is_array($subscribers) ? $subscribers : []);
						},
					]
				)
			);
		}

		$this->addMergeTag(
			new MergeTag\User\UserID(
				[
					'slug' => 'forum_author_ID',
					'name' => __('Forum author user ID', 'notification-bbpress'),
					'property_name' => 'author',
					'group' => __('Forum author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLogin(
				[
					'slug' => 'forum_author_login',
					'name' => __('Forum author user login', 'notification-bbpress'),
					'property_name' => 'author',
					'group' => __('Forum author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserEmail(
				[
					'slug' => 'forum_author_email',
					'name' => __('Forum author user email', 'notification-bbpress'),
					'property_name' => 'author',
					'group' => __('Forum author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserNicename(
				[
					'slug' => 'forum_author_nicename',
					'name' => __('Forum author user nicename', 'notification-bbpress'),
					'property_name' => 'author',
					'group' => __('Forum author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserFirstName(
				[
					'slug' => 'forum_author_firstname',
					'name' => __('Forum author user first name', 'notification-bbpress'),
					'property_name' => 'author',
					'group' => __('Forum author', 'notification-bbpress'),
				]
			)
		);

		$this->addMergeTag(
			new MergeTag\User\UserLastName(
				[
					'slug' => 'forum_author_lastname',
					'name' => __('Forum author user last name', 'notification-bbpress'),
					'property_name' => 'author',
					'group' => __('Forum author', 'notification-bbpress'),
				]
			)
		);
	}
}
