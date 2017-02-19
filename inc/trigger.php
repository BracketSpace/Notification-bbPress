<?php
/**
 * Trigger class
 * This class registers all the triggers automatically
 */

namespace Notification\bbPress;

abstract class Trigger {

	public function __construct() {

		// register triggers from child class
		$this->register_triggers();

		// add notification actions
		$this->notifications();

	}

	/**
	 * Used to register a notification action
	 * Must be defined in a child class
	 */
	abstract protected function notifications();

	/**
	 * Register triggers
	 * Each method which starts with trigger_ is automatically called
	 * @return void
	 */
	public function register_triggers() {

		$methods = get_class_methods( $this );

		foreach ( $methods as $method ) {

			// not a method we are looking for
			if ( strpos( $method, 'trigger_' ) === false ) {
				continue;
			}

			$trigger = str_replace( 'trigger_', '', $method );

			if ( apply_filters( 'notification/triggers/bbpress/' . $trigger, true ) ) {
				call_user_func( array( $this, $method ) );
			}

		}

	}

}
