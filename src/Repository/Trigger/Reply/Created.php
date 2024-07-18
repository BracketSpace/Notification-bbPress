<?php
/**
 * Reply created trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Reply;

use BracketSpace\Notification\bbPress\Repository\Trigger\Reply as ReplyTrigger;

/**
 * Reply created trigger class
 */
class Created extends ReplyTrigger
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct(
			[
				'slug' => 'bbpress/reply/created',
				'name' => __('New reply created', 'notification-bbpress'),
			]
		);

		$this->addAction('bbp_new_reply_post_extras', 1000, 1);
	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param int $replyId Reply ID.
	 * @return void|false
	 */
	public function context($replyId)
	{
		$reply = get_post($replyId);

		if (!$reply instanceof \WP_Post) {
			return false;
		}

		$this->setProperties($reply);
	}
}
