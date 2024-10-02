<?php
/**
 * Reply removed trigger
 *
 * @package notification-bbpress
 */

declare(strict_types=1);

namespace BracketSpace\Notification\bbPress\Repository\Trigger\Reply;

use BracketSpace\Notification\bbPress\Repository\Trigger\Reply as ReplyTrigger;

/**
 * Reply removed trigger class
 */
class Removed extends ReplyTrigger
{
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct(
			[
				'slug' => 'bbpress/reply/removed',
				'name' => __('Reply removed', 'notification-bbpress'),
			]
		);

		$this->addAction('trash_' . bbp_get_reply_post_type(), 10, 2);
	}

	/**
	 * Assigns action callback args to object
	 * Return `false` if you want to abort the trigger execution
	 *
	 * @param int      $replyId Reply ID.
	 * @param \WP_Post $reply    Reply object.
	 * @return void|false
	 */
	public function context($replyId, $reply)
	{
		$this->setProperties($reply);
	}
}
