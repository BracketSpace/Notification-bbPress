<?php
/**
 * Forum added trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Forum;

use BracketSpace\Notification\bbPress\Repository\Trigger\Forum as ForumTrigger;

/**
 * Forum added trigger class
 */
class Added extends ForumTrigger
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct(
			[
				'slug' => 'bbpress/forum/new',
				'name' => __('New forum added', 'notification-bbpress'),
			]
		);

		$this->addAction('transition_post_status', 10, 3);
	}

	/**
	 * Assigns action callback args to object
	 *
	 * @param string   $newStatus New status.
	 * @param string   $oldStatus Old status.
	 * @param \WP_Post $forum Forum object.
	 * @return void|false
	 */
	public function context($newStatus, $oldStatus, $forum)
	{
		// phpcs:ignore Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
		if (bbp_get_forum_post_type() !== $forum->post_type) {
			return false;
		}

		if ($newStatus === $oldStatus) {
			return false;
		}

		if ($newStatus !== 'publish') {
			return false;
		}

		$this->setProperties($forum);
	}
}
