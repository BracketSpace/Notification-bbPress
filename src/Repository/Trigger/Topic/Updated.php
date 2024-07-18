<?php
/**
 * Topic updated trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Topic;

use BracketSpace\Notification\bbPress\Repository\Trigger\Topic as TopicTrigger;

/**
 * Topic updated trigger class
 */
class Updated extends TopicTrigger
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct(
			[
				'slug' => 'bbpress/topic/updated',
				'name' => __('Topic updated', 'notification-bbpress'),
			]
		);

		$this->addAction('bbp_edit_topic_post_extras', 10, 1);
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
