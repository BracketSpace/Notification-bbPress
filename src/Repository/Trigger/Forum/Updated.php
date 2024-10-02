<?php
/**
 * Forum updated trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Forum;

use BracketSpace\Notification\bbPress\Repository\Trigger\Forum as ForumTrigger;

/**
 * Forum updated trigger class
 */
class Updated extends ForumTrigger
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct(
			[
				'slug' => 'bbpress/forum/updated',
				'name' => __('Forum updated', 'notification-bbpress'),
			]
		);

		$this->addAction('post_updated', 10, 3);
	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param  int      $forumId     Forum ID.
	 * @param  \WP_Post $forum        Forum object.
	 * @param  \WP_Post $forumBefore Forum object.
	 * @return mixed void or false if no notifications should be sent
	 */
	public function context($forumId, $forum, $forumBefore)
	{
		// phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps
		if (bbp_get_forum_post_type() !== $forum->post_type) {
			return false;
		}

		if (empty($forum->post_name)) {
			return false;
		}

		if (
			! in_array($forumBefore->post_status, ['publish', 'private'], true) ||
			$forum->post_status === 'trash'
		) {
			return false;
		}
		// phpcs:enable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps

		$this->setProperties($forum);
	}
}
