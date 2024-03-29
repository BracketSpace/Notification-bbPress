<?php
/**
 * Runtime
 *
 * @package notification/bbpress
 */

namespace BracketSpace\Notification\bbPress;

use BracketSpace\Notification\bbPress\Vendor\Micropackage\Requirements\Requirements as RequirementsEngine;
use BracketSpace\Notification\bbPress\Vendor\Micropackage\DocHooks\HookTrait;
use BracketSpace\Notification\bbPress\Vendor\Micropackage\DocHooks\Helper as DocHooksHelper;
use BracketSpace\Notification\bbPress\Vendor\Micropackage\Filesystem\Filesystem;

/**
 * Runtime class
 */
class Runtime {

	use HookTrait;

	/**
	 * Main plugin file path
	 *
	 * @var string
	 */
	protected $plugin_file;

	/**
	 * Flag for unmet requirements
	 *
	 * @var bool
	 */
	protected $requirements_unmet;

	/**
	 * Filesystems
	 *
	 * @var Filesystem
	 */
	protected $filesystem;

	/**
	 * Components
	 *
	 * @var array<string,mixed>
	 */
	protected $components = [];

	/**
	 * Class constructor
	 *
	 * @since 3.0.0
	 * @param string $plugin_file Plugin main file full path.
	 */
	public function __construct( $plugin_file ) {
		$this->plugin_file = $plugin_file;
	}

	/**
	 * Loads needed files
	 *
	 * @since  3.0.0
	 * @return void
	 */
	public function init() {

		// Plugin has been already initialized.
		if ( did_action( 'notification/bbpress/init' ) || $this->requirements_unmet ) {
			return;
		}

		// Requirements check.
		$requirements = new RequirementsEngine( __( 'Notification : bbPress', 'notification-bbpress' ), [
			'php'          => '7.0',
			'wp'           => '5.3',
			'notification' => '8.0.0',
			'plugins'      => [
				[
					'file'    => 'bbpress/bbpress.php',
					'name'    => 'bbPress',
					'version' => '2.6',
				],
			],
		] );

		$requirements->register_checker( Requirements\BasePlugin::class );

		if ( ! $requirements->satisfied() ) {
			$requirements->print_notice();
			$this->requirements_unmet = true;
			return;
		}

		$this->filesystem = new Filesystem( dirname( $this->plugin_file ) );
		$this->singletons();
		$this->cli_commands();
		$this->actions();

		do_action( 'notification/bbpress/init' );

	}

	/**
	 * Registers WP CLI commands
	 *
	 * @since  3.0.0
	 * @return void
	 */
	public function cli_commands() {
		if ( ! defined( 'WP_CLI' ) || \WP_CLI !== true ) {
			return;
		}

		\WP_CLI::add_command( 'notification-bbpress dump-hooks', Cli\DumpHooks::class );
	}

	/**
	 * Registers all the hooks with DocHooks
	 *
	 * @since  3.0.0
	 * @return void
	 */
	public function register_hooks() {
		// Hook Runtime.
		$this->add_hooks();

		// Hook all the components.
		foreach ( $this->components as $component ) {
			if ( is_object( $component ) ) {
				$this->add_hooks( $component );
			}
		}
	}

	/**
	 * Gets filesystem
	 *
	 * @since  3.0.0
	 * @return Filesystem|null
	 */
	public function get_filesystem() {
		return $this->filesystem;
	}

	/**
	 * Adds runtime component
	 *
	 * @since  3.0.0
	 * @throws \Exception When component is already registered.
	 * @param  string $name      Component name.
	 * @param  mixed  $component Component.
	 * @return $this
	 */
	public function add_component( $name, $component ) {
		if ( isset( $this->components[ $name ] ) ) {
			throw new \Exception( sprintf( 'Component %s is already added.', $name ) );
		}

		$this->components[ $name ] = $component;

		return $this;
	}

	/**
	 * Gets runtime component
	 *
	 * @since  3.0.0
	 * @param  string $name Component name.
	 * @return mixed        Component or null
	 */
	public function component( $name ) {
		return isset( $this->components[ $name ] ) ? $this->components[ $name ] : null;
	}

	/**
	 * Gets runtime components
	 *
	 * @since  3.0.0
	 * @return array
	 */
	public function components() {
		return $this->components;
	}

	/**
	 * Creates needed classes
	 * Singletons are used for a sake of performance
	 *
	 * @since  3.0.0
	 * @return void
	 */
	public function singletons() {
		$this->add_component( 'admin/settings', new Admin\Settings() );
	}

	/**
	 * All WordPress actions this plugin utilizes
	 *
	 * @since  3.0.0
	 * @return void
	 */
	public function actions() {
		$this->register_hooks();

		notification_register_settings( [ $this->component( 'admin/settings' ), 'register_trigger_settings' ], 20 );

		// DocHooks compatibility.
		if ( ! DocHooksHelper::is_enabled() && $this->get_filesystem()->exists( 'compat/register-hooks.php' ) ) {
			include_once $this->get_filesystem()->path( 'compat/register-hooks.php' );
		}
	}

	/**
	 * Loads elements
	 *
	 * @action notification/init
	 *
	 * @since  3.0.0
	 * @return void
	 */
	public function elements() {
		array_map(
			[ $this, 'load_element' ],
			[
				'triggers',
			],
			[
				Repository\TriggerRepository::class,
			]
		);
	}

	/**
	 * Loads element
	 *
	 * @since  3.0.0
	 * @param  string       $element    Element name.
	 * @param  class-string $class_name Element Registerer class name.
	 * @return void
	 */
	public function load_element( $element, $class_name ) {
		if ( apply_filters( 'notification/bbpress/load/element/' . $element, true ) ) {
			if ( is_callable( [ $class_name, 'register' ] ) ) {
				$class_name::register();
			}
		}
	}

}
