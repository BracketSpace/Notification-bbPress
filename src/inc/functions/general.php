<?php
/**
 * General functions
 *
 * @package notification/bbpress
 */

/**
 * Creates new View object.
 *
 * @since  [Next]
 * @return View
 */
function notification_bbpress_create_view() {
	return notification_bbpress_runtime()->view();
}
