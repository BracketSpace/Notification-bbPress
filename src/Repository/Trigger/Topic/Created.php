<?php
/**
 * Topic created trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Topic;

use BracketSpace\Notification\bbPress\Repository\Trigger\Topic as TopicTrigger;

/**
 * Topic created trigger class
 */
class Created extends TopicTrigger
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct(
			[
				'slug' => 'bbpress/topic/created',
				'name' => __('New topic created', 'notification-bbpress'),
			]
		);

		$this->addAction('bbp_new_topic_post_extras', 1000, 1);
	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param int $topicId Topic ID.
	 * @return void|false
	 */
	public function context($topicId)
	{
		$topic = get_post($topicId);

		if (!$topic instanceof \WP_Post) {
			return false;
		}

		$this->setProperties($topic);
	}
}
