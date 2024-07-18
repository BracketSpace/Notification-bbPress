<?php
/**
 * Forum removed trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Forum;

use BracketSpace\Notification\bbPress\Repository\Trigger\Forum as ForumTrigger;

/**
 * Forum removed trigger class
 */
class Removed extends ForumTrigger
{
	/**
	 * Constructor
	 */
	public function __construct()
	{

		parent::__construct(
			[
				'slug' => 'bbpress/forum/removed',
				'name' => __('Forum removed', 'notification-bbpress'),
			]
		);

		$this->addAction('trash_' . bbp_get_forum_post_type(), 10, 2);
	}

	/**
	 * Assigns action callback args to object
	 *
	 * @param int      $forumId Forum ID.
	 * @param \WP_Post $forum    Forum object.
	 * @return void|false
	 */
	public function context($forumId, $forum)
	{
		$this->setProperties($forum);
	}
}
