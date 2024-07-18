<?php
/**
 * Topic removed trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Topic;

use BracketSpace\Notification\bbPress\Repository\Trigger\Topic as TopicTrigger;

/**
 * Topic removed trigger class
 */
class Removed extends TopicTrigger
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct(
			[
				'slug' => 'bbpress/topic/removed',
				'name' => __('Topic removed', 'notification-bbpress'),
			]
		);

		$this->addAction('trash_' . bbp_get_topic_post_type(), 10, 2);
	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param int      $topicId Topic ID.
	 * @param \WP_Post $topic    Topic object.
	 * @return void|false
	 */
	public function context($topicId, $topic)
	{
		$this->setProperties($topic);
	}
}
