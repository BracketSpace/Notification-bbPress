<?php

/**
 * Loads Forums Component
 *
 * @since 2.1.0 bbPress (r3552)
 *
 * @package bbPress
 * @subpackage BuddyPress
 */
class BBP_Forums_Component extends \BP_Component
{
    /**
     * Start the forums component creation process
     *
     * @since 2.1.0 bbPress (r3552)
     */
    public function __construct()
    {
    }
    /**
     * Include BuddyPress classes and functions
     */
    public function includes($includes = array())
    {
    }
    /**
     * Setup globals
     *
     * The BP_FORUMS_SLUG constant is deprecated, and only used here for
     * backwards compatibility.
     *
     * @since 2.1.0 bbPress (r3552)
     */
    public function setup_globals($args = array())
    {
    }
    /**
     * Setup the actions
     *
     * @since 2.0.0 bbPress (r3395)
     *
     * @access private
     * @link https://bbpress.trac.wordpress.org/ticket/2176
     */
    public function setup_actions()
    {
    }
    /**
     * Instantiate classes for BuddyPress integration
     *
     * @since 2.0.0 bbPress (r3395)
     */
    public function setup_components()
    {
    }
    /**
     * Allow the variables, actions, and filters to be modified by third party
     * plugins and themes.
     *
     * @since 2.1.0 bbPress (r3902)
     */
    private function fully_loaded()
    {
    }
    /**
     * Setup BuddyBar navigation
     *
     * @since 2.1.0 bbPress (r3552)
     */
    public function setup_nav($main_nav = array(), $sub_nav = array())
    {
    }
    /**
     * Set up the admin bar
     *
     * @since 2.1.0 bbPress (r3552)
     */
    public function setup_admin_bar($wp_admin_nav = array())
    {
    }
    /**
     * Sets up the title for pages and <title>
     *
     * @since 2.1.0 bbPress (r3552)
     */
    public function setup_title()
    {
    }
}
/**
 * Member profile modifications
 *
 * @since 2.2.0 bbPress (r4395)
 * @since 2.6.0 bbPress (r6320) Add engagements support
 *
 * @package bbPress
 * @subpackage BuddyPress
 */
class BBP_BuddyPress_Members
{
    /**
     * Main constructor for modifying bbPress profile links
     *
     * @since 2.2.0 bbPress (r4395)
     */
    public function __construct()
    {
    }
    /**
     * Setup the actions
     *
     * @since 2.2.0 bbPress (r4395)
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Setup the filters
     *
     * @since 2.2.0 bbPress (r4395)
     * @since 2.6.0 bbPress (r6320) Add engagements support
     *
     * @access private
     */
    private function setup_filters()
    {
    }
    /**
     * Allow the variables, actions, and filters to be modified by third party
     * plugins and themes.
     *
     * @since 2.6.0 bbPress (r6808)
     */
    private function fully_loaded()
    {
    }
    /** Filters ***************************************************************/
    /**
     * Override bbPress profile URL with BuddyPress profile URL
     *
     * @since 2.0.0 bbPress (r3401)
     * @since 2.6.0 bbPress (r6320) Add engagements support
     *
     * @param int $user_id
     * @return string
     */
    public function get_user_profile_url($user_id = 0)
    {
    }
    /**
     * Override bbPress topics created URL with BuddyPress profile URL
     *
     * @since 2.6.0 bbPress (r3721)
     * @since 2.6.0 bbPress (r6803) Use private method
     *
     * @param int $user_id
     * @return string
     */
    public function get_topics_created_url($user_id = 0)
    {
    }
    /**
     * Override bbPress replies created URL with BuddyPress profile URL
     *
     * @since 2.6.0 bbPress (r3721)
     * @since 2.6.0 bbPress (r6803) Use private method
     *
     * @param int $user_id
     * @return string
     */
    public function get_replies_created_url($user_id = 0)
    {
    }
    /**
     * Override bbPress favorites URL with BuddyPress profile URL
     *
     * @since 2.1.0 bbPress (r3721)
     * @since 2.6.0 bbPress (r6803) Use private method
     *
     * @param int $user_id
     * @return string
     */
    public function get_favorites_permalink($user_id = 0)
    {
    }
    /**
     * Override bbPress subscriptions URL with BuddyPress profile URL
     *
     * @since 2.1.0 bbPress (r3721)
     * @since 2.6.0 bbPress (r6803) Use private method
     *
     * @param int $user_id
     * @return string
     */
    public function get_subscriptions_permalink($user_id = 0)
    {
    }
    /**
     * Override bbPress engagements URL with BuddyPress profile URL
     *
     * @since 2.6.0 bbPress (r6320)
     *
     * @param int $user_id
     * @return string
     */
    public function get_engagements_permalink($user_id = 0)
    {
    }
    /**
     * Set favorites and subscriptions query variables if viewing member profile
     * pages.
     *
     * @since 2.3.0 bbPress (r4615)
     * @since 2.6.0 bbPress (r6320) Support all profile sections
     *
     * @global WP_Query $wp_query
     * @return If not viewing your own profile
     */
    public function set_member_forum_query_vars()
    {
    }
    /** Private Methods *******************************************************/
    /**
     * Private method used to concatenate user IDs and slugs into URLs
     *
     * @since 2.6.0 bbPress (r6803)
     *
     * @param int    $user_id
     * @param string $slug
     *
     * @return string
     */
    private function get_profile_url($user_id = 0, $slug = '')
    {
    }
}
/**
 * Loads BuddyPress Activity extension
 *
 * @since 2.0.0 bbPress (r3395)
 *
 * @package bbPress
 * @subpackage BuddyPress
 */
class BBP_BuddyPress_Activity
{
    /** Variables *************************************************************/
    /**
     * The name of the BuddyPress component, used in activity streams
     *
     * @var string
     */
    private $component = '';
    /**
     * Forum Create Activity Action
     *
     * @var string
     */
    private $forum_create = '';
    /**
     * Topic Create Activity Action
     *
     * @var string
     */
    private $topic_create = '';
    /**
     * Topic Close Activity Action
     *
     * @var string
     */
    private $topic_close = '';
    /**
     * Topic Edit Activity Action
     *
     * @var string
     */
    private $topic_edit = '';
    /**
     * Topic Open Activity Action
     *
     * @var string
     */
    private $topic_open = '';
    /**
     * Reply Create Activity Action
     *
     * @var string
     */
    private $reply_create = '';
    /**
     * Reply Edit Activity Action
     *
     * @var string
     */
    private $reply_edit = '';
    /** Setup Methods *********************************************************/
    /**
     * The bbPress BuddyPress Activity loader
     *
     * @since 2.0.0 bbPress (r3395)
     */
    public function __construct()
    {
    }
    /**
     * Extension variables
     *
     * @since 2.0.0 bbPress (r3395)
     *
     * @access private
     */
    private function setup_globals()
    {
    }
    /**
     * Setup the actions
     *
     * @since 2.0.0 bbPress (r3395)
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Setup the filters
     *
     * @since 2.0.0 bbPress (r3395)
     *
     * @access private
     */
    private function setup_filters()
    {
    }
    /**
     * Allow the variables, actions, and filters to be modified by third party
     * plugins and themes.
     *
     * @since 2.1.0 bbPress (r3902)
     */
    private function fully_loaded()
    {
    }
    /** Methods ***************************************************************/
    /**
     * Register our activity actions with BuddyPress
     *
     * @since 2.0.0 bbPress (r3395)
     */
    public function register_activity_actions()
    {
    }
    /**
     * Wrapper for recoding bbPress actions to the BuddyPress activity stream
     *
     * @since 2.0.0 bbPress (r3395)
     *
     * @param  array $args Array of arguments for bp_activity_add()
     *
     * @return int   Activity ID if successful, false if not
     */
    private function record_activity($args = array())
    {
    }
    /**
     * Wrapper for deleting bbPress actions from BuddyPress activity stream
     *
     * @since 2.0.0 bbPress (r3395)
     *
     * @param  array $args Array of arguments for bp_activity_add()
     *
     * @return int   Activity ID if successful, false if not
     */
    public function delete_activity($args = array())
    {
    }
    /**
     * Check for an existing activity stream entry for a given post_id
     *
     * @param int $post_id ID of the topic or reply
     * @return int if an activity id is verified, false if not
     */
    private static function get_activity_id($post_id = 0)
    {
    }
    /**
     * Maybe disable activity stream comments on select actions
     *
     * @since 2.0.0 bbPress (r3399)
     *
     * @global BP_Activity_Template $activities_template
     * @param boolean $can_comment
     * @return boolean
     */
    public function activity_can_comment($can_comment = \true)
    {
    }
    /**
     * Maybe link directly to topics and replies in activity stream entries
     *
     * @since 2.0.0 bbPress (r3399)
     *
     * @param string $link
     * @param mixed $activity_object
     * @return string The link to the activity stream item
     */
    public function activity_get_permalink($link = '', $activity_object = \false)
    {
    }
    /** Topics ****************************************************************/
    /**
     * Record an activity stream entry when a topic is created or updated
     *
     * @since 2.0.0 bbPress (r3395)
     *
     * @param int $topic_id
     * @param int $forum_id
     * @param array $anonymous_data
     * @param int $topic_author_id
     * @return Bail early if topic is by anonymous user
     */
    public function topic_create($topic_id = 0, $forum_id = 0, $anonymous_data = array(), $topic_author_id = 0)
    {
    }
    /**
     * Delete the activity stream entry when a topic is spammed, trashed, or deleted
     *
     * @param int $topic_id
     */
    public function topic_delete($topic_id = 0)
    {
    }
    /**
     * Update the activity stream entry when a topic status changes
     *
     * @param int $topic_id
     * @param obj $post
     * @return Bail early if not a topic, or topic is by anonymous user
     */
    public function topic_update($topic_id = 0, $post = \null)
    {
    }
    /** Replies ***************************************************************/
    /**
     * Record an activity stream entry when a reply is created
     *
     * @since 2.0.0 bbPress (r3395)
     *
     * @param int $topic_id
     * @param int $forum_id
     * @param array $anonymous_data
     * @param int $topic_author_id
     * @return Bail early if topic is by anonymous user
     */
    public function reply_create($reply_id = 0, $topic_id = 0, $forum_id = 0, $anonymous_data = array(), $reply_author_id = 0)
    {
    }
    /**
     * Delete the activity stream entry when a reply is spammed, trashed, or deleted
     *
     * @param int $reply_id
     */
    public function reply_delete($reply_id)
    {
    }
    /**
     * Update the activity stream entry when a reply status changes
     *
     * @param int $reply_id
     * @param obj $post
     * @return Bail early if not a reply, or reply is by anonymous user
     */
    public function reply_update($reply_id, $post)
    {
    }
}
/**
 * Loads Group Extension for Forums Component
 *
 * @since 2.1.0 bbPress (r3552)
 *
 * @package bbPress
 * @subpackage BuddyPress
 */
class BBP_Forums_Group_Extension extends \BP_Group_Extension
{
    /** Methods ***************************************************************/
    /**
     * Setup bbPress group extension variables
     *
     * @since 2.1.0 bbPress (r3552)
     */
    public function __construct()
    {
    }
    /**
     * Setup the group forums class variables
     *
     * @since 2.1.0 bbPress (r3552)
     */
    private function setup_variables()
    {
    }
    /**
     * Setup the group forums class actions
     *
     * @since 2.3.0 bbPress (r4552)
     */
    private function setup_actions()
    {
    }
    /**
     * Setup the group forums class filters
     *
     * @since 2.3.0 bbPress (r4552)
     */
    private function setup_filters()
    {
    }
    /**
     * Allow the variables, actions, and filters to be modified by third party
     * plugins and themes.
     *
     * @since 2.6.0 bbPress (r6808)
     */
    private function fully_loaded()
    {
    }
    /**
     * Ensure that bbp_is_single_forum() returns true on group forum pages.
     *
     * @see https://bbpress.trac.wordpress.org/ticket/2974
     *
     * @since 2.6.0 bbPress (r6366)
     *
     * @param  bool $retval Current boolean.
     * @return bool
     */
    public function is_single_forum($retval = \false)
    {
    }
    /**
     * Ensure that bbp_is_single_topic() returns true on group forum topic pages.
     *
     * @see https://bbpress.trac.wordpress.org/ticket/2974
     *
     * @since 2.6.0 bbPress (r6220)
     *
     * @param  bool $retval Current boolean.
     * @return bool
     */
    public function is_single_topic($retval = \false)
    {
    }
    /**
     * The primary display function for group forums
     *
     * @since 2.1.0 bbPress (r3746)
     *
     * @param int $group_id ID of the current group. Available only on BP 2.2+.
     */
    public function display($group_id = \null)
    {
    }
    /**
     * Maybe unset the group forum nav item if group does not have a forum
     *
     * @since 2.3.0 bbPress (r4552)
     *
     * @return If not viewing a single group
     */
    public function maybe_unset_forum_menu()
    {
    }
    /**
     * Allow group members to have advanced privileges in group forum topics.
     *
     * @since 2.2.0 bbPress (r4434)
     *
     * @param array $caps
     * @param string $cap
     * @param int $user_id
     * @param array $args
     * @return array
     */
    public function map_group_forum_meta_caps($caps = array(), $cap = '', $user_id = 0, $args = array())
    {
    }
    /**
     * Remove the topic meta cap map, so it doesn't interfere with sidebars.
     *
     * @since 2.2.0 bbPress (r4434)
     */
    public function remove_group_forum_meta_cap_map()
    {
    }
    /**
     * Validate the forum ID for a topic in a group forum.
     *
     * This method ensures that when a topic is saved, it is only allowed to be
     * saved to a forum that is either:
     *
     * - A forum in the current group
     * - A forum the current user can moderate outside of this group
     *
     * If all checks fail, an error gets added to prevent the topic from saving.
     *
     * @since 2.6.14
     *
     * @param int $topic_id
     */
    public function validate_topic_forum_id($topic_id = 0)
    {
    }
    /**
     * Validate the reply to for a reply in a group forum.
     *
     * This method ensures that when a reply to is saved, it is only allowed to
     * be saved to the current topic.
     *
     * If all checks fail, an error gets added to prevent the reply from saving.
     *
     * @since 2.6.14
     *
     * @param int $reply_id
     */
    public function validate_reply_to_id($reply_id = 0)
    {
    }
    /** Edit ******************************************************************/
    /**
     * Show forums and new forum form when editing a group
     *
     * @since 2.1.0 bbPress (r3563)
     *
     * @param object $group (the group to edit if in Group Admin UI)
     */
    public function edit_screen($group = \false)
    {
    }
    /**
     * Save the Group Forum data on edit
     *
     * @since 2.0.0 bbPress (r3465)
     *
     * @param int $group_id (to handle Group Admin UI hook bp_group_admin_edit_after )
     */
    public function edit_screen_save($group_id = 0)
    {
    }
    /**
     * Adds a meta-box to BuddyPress Group Admin UI
     *
     * @since 2.3.0 bbPress (r4814)
     */
    public function group_admin_ui_edit_screen()
    {
    }
    /**
     * Displays the bbPress meta-box in BuddyPress Group Admin UI
     *
     * @since 2.3.0 bbPress (r4814)
     *
     * @param object $item (group object)
     */
    public function group_admin_ui_display_metabox($item)
    {
    }
    /** Create ****************************************************************/
    /**
     * Show forums and new forum form when creating a group
     *
     * @since 2.0.0 bbPress (r3465)
     */
    public function create_screen($group_id = 0)
    {
    }
    /**
     * Save the Group Forum data on create
     *
     * @since 2.0.0 bbPress (r3465)
     */
    public function create_screen_save($group_id = 0)
    {
    }
    /**
     * Used to start an output buffer
     *
     * @since 2.1.0 bbPress (r3746)
     */
    public function ob_start()
    {
    }
    /**
     * Used to end an output buffer
     *
     * @since 2.1.0 bbPress (r3746)
     */
    public function ob_end_clean()
    {
    }
    /**
     * Creating a group forum or category (including root for group)
     *
     * @since 2.1.0 bbPress (r3653)
     *
     * @param array $forum_args
     *
     * @return void if no forum_id is available
     */
    public function new_forum($forum_args = array())
    {
    }
    /**
     * Removing a group forum or category (including root for group)
     *
     * @since 2.1.0 bbPress (r3653)
     *
     * @param array $forum_args
     *
     * @return void if no forum_id is available
     */
    public function remove_forum($forum_args = array())
    {
    }
    /**
     * Listening to BuddyPress Group deletion to remove the forum
     *
     * @since 2.3.0 bbPress (r4815)
     *
     * @param int $group_id The group ID
     */
    public function disconnect_forum_from_group($group_id = 0)
    {
    }
    /**
     * Update forum attributes to match those of the associated group.
     *
     * Fired whenever a group is saved
     *
     * @since 2.6.7 bbPress (r7208)
     *
     * @param BP_Groups_Group $group Group object.
     */
    public static function update_group_forum(\BP_Groups_Group $group)
    {
    }
    /**
     * Toggle the enable_forum group setting on or off
     *
     * @since 2.3.0 bbPress (r4612)
     *
     * @param int $group_id The group to toggle
     * @param bool $enabled True for on, false for off
     * @return False if group is not found, otherwise return the group
     */
    public function toggle_group_forum($group_id = 0, $enabled = \false)
    {
    }
    /** Display Methods *******************************************************/
    /**
     * Output the forums for a group in the edit screens
     *
     * As of right now, bbPress only supports 1-to-1 group forum relationships.
     * In the future, many-to-many should be allowed.
     *
     * @since 2.1.0 bbPress (r3653)
     */
    public function display_forums($offset = 0)
    {
    }
    /** Super sticky filters ***************************************************/
    /**
     * Strip super stickies from the topic query
     *
     * @since 2.3.0 bbPress (r4810)
     *
     * @access private
     * @param array $super the super sticky post ID's
     * @return array (empty)
     */
    public function no_super_stickies($super = array())
    {
    }
    /**
     * Unset the type super sticky from topic type
     *
     * @since 2.3.0 bbPress (r4810)
     *
     * @access private
     * @param array $args
     * @return array $args without the to-front link
     */
    public function unset_super_sticky($args = array())
    {
    }
    /**
     * Ugly preg_replace to hide the to front admin link
     *
     * @since 2.3.0 bbPress (r4810)
     *
     * @access private
     * @param string $retval
     * @param array $args
     * @return string $retval without the to-front link
     */
    public function hide_super_sticky_admin_link($retval = '', $args = array())
    {
    }
    /** Redirect Helpers ******************************************************/
    /**
     * Redirect to the group forum screen
     *
     * @since 2.1.0 bbPress (r3653)
     *
     * @param str $redirect_url
     * @param str $redirect_to
     */
    public function new_topic_redirect_to($redirect_url = '', $redirect_to = '', $topic_id = 0)
    {
    }
    /**
     * Redirect to the group forum screen
     *
     * @since 2.1.0 bbPress (r3653)
     */
    public function new_reply_redirect_to($redirect_url = '', $redirect_to = '', $reply_id = 0)
    {
    }
    /**
     * Redirect to the group admin forum edit screen
     *
     * @since 2.1.0 bbPress (r3653)
     */
    public function edit_redirect_to($redirect_url = '')
    {
    }
    /** Form Helpers **********************************************************/
    /**
     * Make Forum Parent a hidden field instead of a selectable one.
     *
     * @since 2.1.0 bbPress (r3746)
     */
    public function forum_parent()
    {
    }
    /**
     * Output a dropdown for picking which group forum this topic is for.
     *
     * @since 2.1.0 bbPress (r3746)
     */
    public function topic_parent()
    {
    }
    /**
     * Permissions to view the 'New Topic'/'Reply To' form in a BuddyPress group.
     *
     * @since 2.3.0 bbPress (r4608)
     *
     * @param bool $retval Are we allowed to view the reply form?
     *
     * @return bool
     */
    public function form_permissions($retval = \false)
    {
    }
    /**
     * Add a hidden input field on the group settings page if the group forum is
     * enabled.
     *
     * Due to the way BuddyPress' group admin settings page saves its settings,
     * we need to let BP know that bbPress added a forum.
     *
     * @since 2.4.0 bbPress (r5026)
     *
     * @link https://bbpress.trac.wordpress.org/ticket/2339/
     * @see groups_screen_group_admin_settings()
     */
    public function group_settings_hidden_field()
    {
    }
    /** Permalink Mappers *****************************************************/
    /**
     * Maybe map a bbPress forum/topic/reply permalink to the corresponding group
     *
     * @since 2.2.0 bbPress (r4266)
     *
     * @param int $post_id
     * @return Bail early if not a group forum post
     * @return string
     */
    private function maybe_map_permalink_to_group($post_id = 0, $url = \false)
    {
    }
    /**
     * Map a forum permalink to its corresponding group
     *
     * @since 2.1.0 bbPress (r3802)
     *
     * @param string $url
     * @param int $forum_id
     * @return string
     */
    public function map_forum_permalink_to_group($url, $forum_id)
    {
    }
    /**
     * Map a topic permalink to its group forum
     *
     * @since 2.1.0 bbPress (r3802)
     *
     * @param string $url
     * @param int $topic_id
     * @return string
     */
    public function map_topic_permalink_to_group($url, $topic_id)
    {
    }
    /**
     * Map a reply permalink to its group forum
     *
     * @since 2.1.0 bbPress (r3802)
     *
     * @param string $url
     * @param int $reply_id
     * @return string
     */
    public function map_reply_permalink_to_group($url, $reply_id)
    {
    }
    /**
     * Map a reply edit link to its group forum
     *
     * @since 2.2.0 bbPress (r4266)
     *
     * @param string $url
     * @param int $reply_id
     * @return string
     */
    public function map_reply_edit_url_to_group($url, $reply_id)
    {
    }
    /**
     * Map a post link to its group forum
     *
     * @since 2.2.0 bbPress (r4266)
     *
     * @param string $url
     * @param obj $post
     * @param boolean $leavename
     * @return string
     */
    public function post_link($url, $post)
    {
    }
    /**
     * Map a page link to its group forum
     *
     * @since 2.2.0 bbPress (r4266)
     *
     * @param string $url
     * @param int $post_id
     * @param $sample
     * @return string
     */
    public function page_link($url, $post_id)
    {
    }
    /**
     * Map a custom post type link to its group forum
     *
     * @since 2.2.0 bbPress (r4266)
     *
     * @param string $url
     * @param obj $post
     * @param $leavename
     * @param $sample
     * @return string
     */
    public function post_type_link($url, $post)
    {
    }
    /**
     * Fix pagination of topics on forum view
     *
     * @since 2.2.0 bbPress (r4266)
     *
     * @param array $args
     * @return array
     */
    public function topic_pagination($args)
    {
    }
    /**
     * Fix pagination of replies on topic view
     *
     * @since 2.2.0 bbPress (r4266)
     *
     * @param array $args
     * @return array
     */
    public function replies_pagination($args)
    {
    }
    /**
     * Ensure that forum content associated with a BuddyPress group can only be
     * viewed via the group URL.
     *
     * @since 2.1.0 bbPress (r3802)
     */
    public function redirect_canonical()
    {
    }
    /** Activity **************************************************************/
    /**
     * Map a forum post to its corresponding group in the group activity stream.
     *
     * @since 2.2.0 bbPress (r4396)
     *
     * @param array $args Arguments from BBP_BuddyPress_Activity::record_activity()
     *
     * @return array
     */
    public function map_activity_to_group($args = array())
    {
    }
}
/**
 * Loads Akismet extension
 *
 * @since 2.0.0 bbPress (r3277)
 *
 * @package bbPress
 * @subpackage Akismet
 */
class BBP_Akismet
{
    /**
     * The last post checked by Akismet.
     *
     * @since 2.0.0 bbPress (r3277)
     *
     * @var array $last_post Default empty array.
     */
    protected $last_post = array();
    /**
     * The main bbPress Akismet loader
     *
     * @since 2.0.0 bbPress (r3277)
     */
    public function __construct()
    {
    }
    /**
     * Setup the admin hooks
     *
     * @since 2.0.0 bbPress (r3277)
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Converts topic/reply data into Akismet comment checking format
     *
     * @since 2.0.0 bbPress (r3277)
     *
     * @param array $post_data
     *
     * @return array Array of post data
     */
    public function check_post($post_data = array())
    {
    }
    /**
     * Parse the response from the Akismet service, and alter the post data as
     * necessary. For example, switch the status to `spam` if spammy.
     *
     * Note: this method also is responsible for allowing users who can moderate to
     * never have their posts marked as spam. This is because they are "trusted"
     * users. However, their posts are still sent to Akismet to be checked.
     *
     * @since 2.6.0 bbPress (r6873)
     *
     * @param array $post_data
     *
     * @return array
     */
    private function parse_response($post_data = array())
    {
    }
    /**
     * Submit a post for spamming or hamming
     *
     * @since 2.0.0 bbPress (r3277)
     *
     * @param int $post_id
     *
     * @global string $akismet_api_host
     * @global string $akismet_api_port
     * @global object $current_user
     * @global object $current_site
     *
     * @return array Array of existing topic terms
     */
    public function submit_post($post_id = 0)
    {
    }
    /**
     * Ping Akismet service and check for spam/ham response
     *
     * @since 2.0.0 bbPress (r3277)
     *
     * @param array $post_data
     * @param string $check Accepts check|submit
     * @param string $spam Accepts spam|ham
     *
     * @global string $akismet_api_host
     * @global string $akismet_api_port
     *
     * @return array Array of post data
     */
    private function maybe_spam($post_data = array(), $check = 'check', $spam = 'spam')
    {
    }
    /**
     * Update post meta after a spam check
     *
     * @since 2.0.0 bbPress (r3308)
     *
     * @param int $post_id
     * @param object $_post
     *
     * @global object $this->last_post
     */
    public function update_post_meta($post_id = 0, $_post = \false)
    {
    }
    /**
     * Update Akismet history of a Post
     *
     * @since 2.0.0 bbPress (r3308)
     *
     * @param int $post_id
     * @param string $message
     * @param string $event
     */
    private function update_post_history($post_id = 0, $message = \null, $event = \null)
    {
    }
    /**
     * Get the Akismet history of a Post
     *
     * @since 2.0.0 bbPress (r3308)
     *
     * @param int $post_id
     *
     * @return array Array of Akismet history
     */
    public function get_post_history($post_id = 0)
    {
    }
    /**
     * Handle any terms submitted with a post flagged as spam
     *
     * @since 2.0.0 bbPress (r3308)
     *
     * @param string $terms Comma-separated list of terms
     * @param int $topic_id
     * @param int $reply_id
     *
     * @return array Array of existing topic terms
     */
    public function filter_post_terms($terms = '', $topic_id = 0, $reply_id = 0)
    {
    }
    /**
     * Submit data to Akismet service with unique bbPress User Agent
     *
     * This code is directly taken from the akismet_http_post() function and
     * documented to bbPress 2.0 standard.
     *
     * @since 2.0.0 bbPress (r3466)
     *
     * @param string $request The request we are sending
     * @param string $host The host to send our request to
     * @param string $path The path from the host
     * @param string $port The port to use
     * @param string $ip Optional Override $host with an IP address
     * @return mixed WP_Error on error, array on success, empty on failure
     */
    private function http_post($request, $host, $path, $port = 80, $ip = '')
    {
    }
    /**
     * Handles the repeated calls to wp_remote_post(), including SSL support.
     *
     * @since 2.6.7 (bbPress r7194)
     *
     * @param string $host_and_path Scheme-less URL
     * @param array  $http_args     Array of arguments for wp_remote_post()
     * @return array
     */
    private function get_response($host_and_path = '', $http_args = array())
    {
    }
    /**
     * Return a user's roles on this site (including super_admin)
     *
     * @since 2.3.0 bbPress (r4812)
     *
     * @param int $user_id
     *
     * @return boolean
     */
    private function get_user_roles($user_id = 0)
    {
    }
    /** Admin *****************************************************************/
    /**
     * Add Aksimet History meta-boxes to topics and replies
     *
     * @since 2.4.0 bbPress (r5049)
     */
    public function add_metaboxes()
    {
    }
    /**
     * Output for Akismet History meta-box
     *
     * @since 2.4.0 bbPress (r5049)
     */
    public function history_metabox()
    {
    }
    /**
     * Get the number of rows to delete in a single clean-up query.
     *
     * @since 2.6.9 bbPress (r7225)
     *
     * @param string $filter The name of the filter to run.
     * @return int
     */
    public function get_delete_limit($filter = '')
    {
    }
    /**
     * Get the interval (in days) for spam to remain in the queue.
     *
     * @since 2.6.9 bbPress (r7225)
     *
     * @param string $filter The name of the filter to run.
     * @return int
     */
    public function get_delete_interval($filter = '')
    {
    }
    /**
     * Deletes old spam topics & replies from the queue after 15 days
     * (determined by `_bbp_akismet_delete_spam_interval` filter)
     * since they are not useful in the long term.
     *
     * @since 2.6.7 bbPress (r7203)
     *
     * @global wpdb $wpdb
     */
    public function delete_old_spam()
    {
    }
    /**
     * Deletes `_bbp_akismet_as_submitted` meta keys after 15 days
     * (determined by `_bbp_akismet_delete_spam_meta_interval` filter)
     * since they are large and not useful in the long term.
     *
     * @since 2.6.7 bbPress (r7203)
     *
     * @global wpdb $wpdb
     */
    public function delete_old_spam_meta()
    {
    }
    /**
     * Clears post meta that no longer has corresponding posts in the database
     * (determined by `_bbp_akismet_delete_spam_orphaned_limit` filter)
     * since it is not useful in the long term.
     *
     * @since 2.6.7 bbPress (r7203)
     *
     * @global wpdb $wpdb
     */
    public function delete_orphaned_spam_meta()
    {
    }
    /**
     * Maybe OPTIMIZE the _postmeta database table.
     *
     * @since 2.7.0 bbPress (r7203)
     *
     * @global wpdb $wpdb
     */
    private function maybe_optimize_postmeta()
    {
    }
}
/** Helpers *******************************************************************/
/**
 * Skip invalidation of child post content when editing a parent.
 *
 * This prevents invalidating caches for topics and replies when editing a forum
 * or a topic. Without this in place, WordPress will attempt to invalidate all
 * child posts whenever a parent post is modified. This can cause thousands of
 * cache invalidations to occur on a single edit, which is no good for anyone.
 *
 * @since 2.1.0 bbPress (r4011)
 *
 * @package bbPress
 * @subpackage Cache
 */
class BBP_Skip_Children
{
    /**
     * @var int Post ID being updated
     */
    private $updating_post = 0;
    /**
     * @var bool The original value of $_wp_suspend_cache_invalidation global
     */
    private $original_cache_invalidation = \false;
    /** Methods ***************************************************************/
    /**
     * Hook into the 'pre_post_update' action.
     *
     * @since 2.1.0 bbPress (r4011)
     */
    public function __construct()
    {
    }
    /**
     * Only clean post caches for main bbPress posts.
     *
     * Check that the post being updated is a bbPress post type, saves the
     * post ID to be used later, and adds an action to 'clean_post_cache' that
     * prevents child post caches from being cleared.
     *
     * @since 2.1.0 bbPress (r4011)
     *
     * @param int $post_id The post ID being updated
     * @return If invalid post data
     */
    public function pre_post_update($post_id = 0)
    {
    }
    /**
     * Skip cache invalidation of related posts if the post ID being invalidated
     * is not the one that was just updated.
     *
     * @since 2.1.0 bbPress (r4011)
     *
     * @param int $post_id The post ID of the cache being invalidated
     * @return If invalid post data
     */
    public function skip_related_posts($post_id = 0)
    {
    }
    /**
     * Restore the cache invalidation to its previous value.
     *
     * @since 2.1.0 bbPress (r4011)
     */
    public function restore_cache_invalidation()
    {
    }
}
/** Theme Compat **************************************************************/
/**
 * What follows is an attempt at intercepting the natural page load process
 * to replace the_content() with the appropriate bbPress content.
 *
 * To do this, bbPress does several direct manipulations of global variables
 * and forces them to do what they are not supposed to be doing.
 *
 * Don't try anything you're about to witness here, at home. Ever.
 */
/** Base Class ****************************************************************/
/**
 * Theme Compatibility base class
 *
 * This is only intended to be extended, and is included here as a basic guide
 * for future Template Packs to use. @link bbp_setup_theme_compat()
 *
 * @since 2.0.0 bbPress (r3506)
 */
class BBP_Theme_Compat
{
    /**
     * Should be like:
     *
     * array(
     *     'id'      => ID of the theme (should be unique)
     *     'name'    => Name of the theme (should match style.css)
     *     'version' => Theme version for cache busting scripts and styling
     *     'dir'     => Path to theme
     *     'url'     => URL to theme
     * );
     * @var array
     */
    private $_data = array();
    /**
     * Pass the $properties to the object on creation.
     *
     * @since 2.1.0 bbPress (r3926)
     *
     * @param array $properties
     */
    public function __construct(array $properties = array())
    {
    }
    /**
     * Set a theme's property.
     *
     * @since 2.1.0 bbPress (r3926)
     *
     * @param string $property
     * @param mixed $value
     * @return mixed
     */
    public function __set($property, $value)
    {
    }
    /**
     * Get a theme's property.
     *
     * @since 2.1.0 bbPress (r3926)
     *
     * @param string $property
     * @param mixed $value
     * @return mixed
     */
    public function __get($property)
    {
    }
    /**
     * Return the template directory.
     *
     * @since 2.6.0 bbPress (r6548)
     *
     * @return string
     */
    public function get_dir()
    {
    }
}
/**
 * Loads bbPress replies admin area
 *
 * @package bbPress
 * @subpackage Administration
 * @since 2.0.0 bbPress (r2464)
 */
class BBP_Replies_Admin
{
    /** Variables *************************************************************/
    /**
     * @var The post type of this admin component
     */
    private $post_type = '';
    /** Functions *************************************************************/
    /**
     * The main bbPress admin loader
     *
     * @since 2.0.0 bbPress (r2515)
     */
    public function __construct()
    {
    }
    /**
     * Setup the admin hooks, actions and filters
     *
     * @since 2.0.0 bbPress (r2646)
     * @since 2.6.0 bbPress (r6101) Added bulk actions
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Admin globals
     *
     * @since 2.0.0 bbPress (r2646)
     *
     * @access private
     */
    private function setup_globals()
    {
    }
    /** Contextual Help *******************************************************/
    /**
     * Contextual help for bbPress reply edit page
     *
     * @since 2.0.0 bbPress (r3119)
     */
    public function edit_help()
    {
    }
    /**
     * Contextual help for bbPress reply edit page
     *
     * @since 2.0.0 bbPress (r3119)
     */
    public function new_help()
    {
    }
    /**
     * Add spam/unspam bulk actions to the bulk action dropdown.
     *
     * @since 2.6.0 bbPress (r6101)
     *
     * @param array $actions The list of bulk actions.
     * @return array The filtered list of bulk actions.
     */
    public function bulk_actions($actions)
    {
    }
    /**
     * Add custom bulk action updated messages for replies.
     *
     * @since 2.6.0 bbPress (r6101)
     *
     * @param array $bulk_messages Arrays of messages, each keyed by the corresponding post type.
     * @param array $bulk_counts   Array of item counts for each message, used to build internationalized strings.
     */
    public function bulk_post_updated_messages($bulk_messages, $bulk_counts)
    {
    }
    /**
     * Handle spam/unspam bulk actions.
     *
     * @since 2.6.0 bbPress (r6101)
     *
     * @param string $sendback The sendback URL.
     * @param string $doaction The action to be taken.
     * @param array  $post_ids The post IDS to take the action on.
     * @return string The sendback URL.
     */
    public function handle_bulk_actions($sendback, $doaction, $post_ids)
    {
    }
    /**
     * Add the reply attributes meta-box
     *
     * @since 2.0.0 bbPress (r2746)
     */
    public function attributes_metabox()
    {
    }
    /**
     * Add the author info meta-box
     *
     * Allows editing of information about an author
     *
     * @since 2.0.0 bbPress (r2828)
     */
    public function author_metabox()
    {
    }
    /**
     * Remove comments & discussion meta-boxes if comments are not supported
     *
     * @since 2.6.0 bbPress (r6186)
     */
    public function comments_metabox()
    {
    }
    /**
     * Pass the reply attributes for processing
     *
     * @since 2.0.0 bbPress (r2746)
     *
     * @param int $reply_id Reply id
     * @return int Parent id
     */
    public function save_meta_boxes($reply_id)
    {
    }
    /**
     * Toggle reply
     *
     * Handles the admin-side spamming/unspamming of replies
     *
     * @since 2.0.0 bbPress (r2740)
     */
    public function toggle_reply()
    {
    }
    /**
     * Toggle reply notices
     *
     * Display the success/error notices from
     * {@link BBP_Admin::toggle_reply()}
     *
     * @since 2.0.0 bbPress (r2740)
     */
    public function toggle_reply_notice()
    {
    }
    /**
     * Returns an array of keys used to sort row actions
     *
     * @since 2.6.0 bbPress (r6771)
     *
     * @return array
     */
    private function get_row_action_sort_order()
    {
    }
    /**
     * Returns an array of notice toggles
     *
     * @since 2.6.0 bbPress (r6396)
     *
     * @return array
     */
    private function get_allowed_notice_toggles()
    {
    }
    /**
     * Returns an array of notice toggles
     *
     * @since 2.6.0 bbPress (r6396)
     *
     * @return array
     */
    private function get_allowed_action_toggles()
    {
    }
    /**
     * Manage the column headers for the replies page
     *
     * @since 2.0.0 bbPress (r2577)
     *
     * @param array $columns The columns
     *
     * @return array $columns bbPress reply columns
     */
    public function column_headers($columns)
    {
    }
    /**
     * Print extra columns for the replies page
     *
     * @since 2.0.0 bbPress (r2577)
     *
     * @param string $column Column
     * @param int $reply_id reply id
     */
    public function column_data($column, $reply_id)
    {
    }
    /**
     * Reply Row actions
     *
     * Remove the quick-edit action link under the reply title and add the
     * content and spam link
     *
     * @since 2.0.0 bbPress (r2577)
     *
     * @param array  $actions Actions
     * @param object $reply   Reply object
     *
     * @return array $actions Actions
     */
    public function row_actions($actions = array(), $reply = \false)
    {
    }
    /**
     * Sort row actions by key
     *
     * @since 2.6.0
     *
     * @param array $actions
     *
     * @return array
     */
    private function sort_row_actions($actions = array())
    {
    }
    /**
     * Add forum dropdown to topic and reply list table filters
     *
     * @since 2.0.0 bbPress (r2991)
     *
     * @return bool False. If post type is not topic or reply
     */
    public function filter_dropdown()
    {
    }
    /**
     * Add "Empty Spam" button for moderators
     *
     * @since 2.6.0 bbPress (r6791)
     */
    public function filter_empty_spam()
    {
    }
    /**
     * Adjust the request query and include the forum id
     *
     * @since 2.0.0 bbPress (r2991)
     *
     * @param array $query_vars Query variables from {@link WP_Query}
     * @return array Processed Query Vars
     */
    public function filter_post_rows($query_vars)
    {
    }
    /**
     * Custom user feedback messages for reply post type
     *
     * @since 2.0.0 bbPress (r3080)
     *
     * @global int $post_ID
     *
     * @param array $messages
     *
     * @return array
     */
    public function updated_messages($messages)
    {
    }
}
class BBCodeLexer
{
    var $token;
    var $text;
    var $tag;
    var $state;
    var $input;
    var $ptr;
    var $unget;
    var $verbatim;
    var $debug;
    var $tagmarker;
    var $end_tagmarker;
    var $pat_main;
    var $pat_comment;
    var $pat_comment2;
    var $pat_wiki;
    function __construct($string, $tagmarker = '[')
    {
    }
    function BBCodeLexer($string, $tagmarker = '[')
    {
    }
    function GuessTextLength()
    {
    }
    function NextToken()
    {
    }
    function UngetToken()
    {
    }
    function PeekToken()
    {
    }
    function SaveState()
    {
    }
    function RestoreState($state)
    {
    }
    function Internal_StripQuotes($string)
    {
    }
    function Internal_ClassifyPiece($ptr, $pieces)
    {
    }
    function Internal_DecodeTag($tag)
    {
    }
}
class BBCodeLibrary
{
    var $default_smileys = array(':)' => 'smile.gif', ':-)' => 'smile.gif', '=)' => 'smile.gif', '=-)' => 'smile.gif', ':(' => 'frown.gif', ':-(' => 'frown.gif', '=(' => 'frown.gif', '=-(' => 'frown.gif', ':D' => 'bigsmile.gif', ':-D' => 'bigsmile.gif', '=D' => 'bigsmile.gif', '=-D' => 'bigsmile.gif', '>:(' => 'angry.gif', '>:-(' => 'angry.gif', '>=(' => 'angry.gif', '>=-(' => 'angry.gif', 'D:' => 'angry.gif', 'D-:' => 'angry.gif', 'D=' => 'angry.gif', 'D-=' => 'angry.gif', '>:)' => 'evil.gif', '>:-)' => 'evil.gif', '>=)' => 'evil.gif', '>=-)' => 'evil.gif', '>:D' => 'evil.gif', '>:-D' => 'evil.gif', '>=D' => 'evil.gif', '>=-D' => 'evil.gif', '>;)' => 'sneaky.gif', '>;-)' => 'sneaky.gif', '>;D' => 'sneaky.gif', '>;-D' => 'sneaky.gif', 'O:)' => 'saint.gif', 'O:-)' => 'saint.gif', 'O=)' => 'saint.gif', 'O=-)' => 'saint.gif', ':O' => 'surprise.gif', ':-O' => 'surprise.gif', '=O' => 'surprise.gif', '=-O' => 'surprise.gif', ':?' => 'confuse.gif', ':-?' => 'confuse.gif', '=?' => 'confuse.gif', '=-?' => 'confuse.gif', ':s' => 'worry.gif', ':-S' => 'worry.gif', '=s' => 'worry.gif', '=-S' => 'worry.gif', ':|' => 'neutral.gif', ':-|' => 'neutral.gif', '=|' => 'neutral.gif', '=-|' => 'neutral.gif', ':I' => 'neutral.gif', ':-I' => 'neutral.gif', '=I' => 'neutral.gif', '=-I' => 'neutral.gif', ':/' => 'irritated.gif', ':-/' => 'irritated.gif', '=/' => 'irritated.gif', '=-/' => 'irritated.gif', ':\\' => 'irritated.gif', ':-\\' => 'irritated.gif', '=\\' => 'irritated.gif', '=-\\' => 'irritated.gif', ':P' => 'tongue.gif', ':-P' => 'tongue.gif', '=P' => 'tongue.gif', '=-P' => 'tongue.gif', 'X-P' => 'tongue.gif', '8)' => 'bigeyes.gif', '8-)' => 'bigeyes.gif', 'B)' => 'cool.gif', 'B-)' => 'cool.gif', ';)' => 'wink.gif', ';-)' => 'wink.gif', ';D' => 'bigwink.gif', ';-D' => 'bigwink.gif', '^_^' => 'anime.gif', '^^;' => 'sweatdrop.gif', '>_>' => 'lookright.gif', '>.>' => 'lookright.gif', '<_<' => 'lookleft.gif', '<.<' => 'lookleft.gif', 'XD' => 'laugh.gif', 'X-D' => 'laugh.gif', ';D' => 'bigwink.gif', ';-D' => 'bigwink.gif', ':3' => 'smile3.gif', ':-3' => 'smile3.gif', '=3' => 'smile3.gif', '=-3' => 'smile3.gif', ';3' => 'wink3.gif', ';-3' => 'wink3.gif', '<g>' => 'teeth.gif', '<G>' => 'teeth.gif', 'o.O' => 'boggle.gif', 'O.o' => 'boggle.gif', ':blue:' => 'blue.gif', ':zzz:' => 'sleepy.gif', '<3' => 'heart.gif', ':star:' => 'star.gif');
    var $default_tag_rules = array('b' => array('simple_start' => "<b>", 'simple_end' => "</b>", 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link'), 'plain_start' => "<b>", 'plain_end' => "</b>"), 'i' => array('simple_start' => "<i>", 'simple_end' => "</i>", 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link'), 'plain_start' => "<i>", 'plain_end' => "</i>"), 'u' => array('simple_start' => "<u>", 'simple_end' => "</u>", 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link'), 'plain_start' => "<u>", 'plain_end' => "</u>"), 's' => array('simple_start' => "<strike>", 'simple_end' => "</strike>", 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link'), 'plain_start' => "<i>", 'plain_end' => "</i>"), 'font' => array('mode' => \BBCODE_MODE_LIBRARY, 'allow' => array('_default' => '/^[a-zA-Z0-9._ -]+$/'), 'method' => 'DoFont', 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link')), 'color' => array('mode' => \BBCODE_MODE_ENHANCED, 'allow' => array('_default' => '/^#?[a-zA-Z0-9._ -]+$/'), 'template' => '<span style="color:{$_default/tw}">{$_content/v}</span>', 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link')), 'size' => array('mode' => \BBCODE_MODE_LIBRARY, 'allow' => array('_default' => '/^[0-9.]+$/D'), 'method' => 'DoSize', 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link')), 'sup' => array('simple_start' => "<sup>", 'simple_end' => "</sup>", 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link')), 'sub' => array('simple_start' => "<sub>", 'simple_end' => "</sub>", 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link')), 'spoiler' => array('simple_start' => "<span class=\"bbcode_spoiler\">", 'simple_end' => "</span>", 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link')), 'acronym' => array('mode' => \BBCODE_MODE_ENHANCED, 'template' => '<span class="bbcode_acronym" title="{$_default/e}">{$_content/v}</span>', 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link')), 'url' => array('mode' => \BBCODE_MODE_LIBRARY, 'method' => 'DoURL', 'class' => 'link', 'allow_in' => array('listitem', 'block', 'columns', 'inline'), 'content' => \BBCODE_REQUIRED, 'plain_start' => "<a href=\"{\$link}\">", 'plain_end' => "</a>", 'plain_content' => array('_content', '_default'), 'plain_link' => array('_default', '_content')), 'email' => array('mode' => \BBCODE_MODE_LIBRARY, 'method' => 'DoEmail', 'class' => 'link', 'allow_in' => array('listitem', 'block', 'columns', 'inline'), 'content' => \BBCODE_REQUIRED, 'plain_start' => "<a href=\"mailto:{\$link}\">", 'plain_end' => "</a>", 'plain_content' => array('_content', '_default'), 'plain_link' => array('_default', '_content')), 'wiki' => array('mode' => \BBCODE_MODE_LIBRARY, 'method' => "DoWiki", 'class' => 'link', 'allow_in' => array('listitem', 'block', 'columns', 'inline'), 'end_tag' => \BBCODE_PROHIBIT, 'content' => \BBCODE_PROHIBIT, 'plain_start' => "<b>[", 'plain_end' => "]</b>", 'plain_content' => array('title', '_default'), 'plain_link' => array('_default', '_content')), 'img' => array('mode' => \BBCODE_MODE_LIBRARY, 'method' => "DoImage", 'class' => 'image', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link'), 'end_tag' => \BBCODE_REQUIRED, 'content' => \BBCODE_REQUIRED, 'plain_start' => "[image]", 'plain_content' => array()), 'rule' => array('mode' => \BBCODE_MODE_LIBRARY, 'method' => "DoRule", 'class' => 'block', 'allow_in' => array('listitem', 'block', 'columns'), 'end_tag' => \BBCODE_PROHIBIT, 'content' => \BBCODE_PROHIBIT, 'before_tag' => "sns", 'after_tag' => "sns", 'plain_start' => "\n-----\n", 'plain_end' => "", 'plain_content' => array()), 'br' => array('mode' => \BBCODE_MODE_SIMPLE, 'simple_start' => "<br />\n", 'simple_end' => "", 'class' => 'inline', 'allow_in' => array('listitem', 'block', 'columns', 'inline', 'link'), 'end_tag' => \BBCODE_PROHIBIT, 'content' => \BBCODE_PROHIBIT, 'before_tag' => "s", 'after_tag' => "s", 'plain_start' => "\n", 'plain_end' => "", 'plain_content' => array()), 'left' => array('simple_start' => "\n<div class=\"bbcode_left\" style=\"text-align:left\">\n", 'simple_end' => "\n</div>\n", 'allow_in' => array('listitem', 'block', 'columns'), 'before_tag' => "sns", 'after_tag' => "sns", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n", 'plain_end' => "\n"), 'right' => array('simple_start' => "\n<div class=\"bbcode_right\" style=\"text-align:right\">\n", 'simple_end' => "\n</div>\n", 'allow_in' => array('listitem', 'block', 'columns'), 'before_tag' => "sns", 'after_tag' => "sns", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n", 'plain_end' => "\n"), 'center' => array('simple_start' => "\n<div class=\"bbcode_center\" style=\"text-align:center\">\n", 'simple_end' => "\n</div>\n", 'allow_in' => array('listitem', 'block', 'columns'), 'before_tag' => "sns", 'after_tag' => "sns", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n", 'plain_end' => "\n"), 'indent' => array('simple_start' => "\n<div class=\"bbcode_indent\" style=\"margin-left:4em\">\n", 'simple_end' => "\n</div>\n", 'allow_in' => array('listitem', 'block', 'columns'), 'before_tag' => "sns", 'after_tag' => "sns", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n", 'plain_end' => "\n"), 'columns' => array('simple_start' => "\n<table class=\"bbcode_columns\"><tbody><tr><td class=\"bbcode_column bbcode_firstcolumn\">\n", 'simple_end' => "\n</td></tr></tbody></table>\n", 'class' => 'columns', 'allow_in' => array('listitem', 'block', 'columns'), 'end_tag' => \BBCODE_REQUIRED, 'content' => \BBCODE_REQUIRED, 'before_tag' => "sns", 'after_tag' => "sns", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n", 'plain_end' => "\n"), 'nextcol' => array('simple_start' => "\n</td><td class=\"bbcode_column\">\n", 'class' => 'nextcol', 'allow_in' => array('columns'), 'end_tag' => \BBCODE_PROHIBIT, 'content' => \BBCODE_PROHIBIT, 'before_tag' => "sns", 'after_tag' => "sns", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n", 'plain_end' => ""), 'code' => array('mode' => \BBCODE_MODE_ENHANCED, 'template' => "\n<div class=\"bbcode_code\">\n<div class=\"bbcode_code_head\">Code:</div>\n<div class=\"bbcode_code_body\" style=\"white-space:pre\">{\$_content/v}</div>\n</div>\n", 'class' => 'code', 'allow_in' => array('listitem', 'block', 'columns'), 'content' => \BBCODE_VERBATIM, 'before_tag' => "sns", 'after_tag' => "sn", 'before_endtag' => "sn", 'after_endtag' => "sns", 'plain_start' => "\n<b>Code:</b>\n", 'plain_end' => "\n"), 'quote' => array('mode' => \BBCODE_MODE_LIBRARY, 'method' => "DoQuote", 'allow_in' => array('listitem', 'block', 'columns'), 'before_tag' => "sns", 'after_tag' => "sns", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n<b>Quote:</b>\n", 'plain_end' => "\n"), 'list' => array('mode' => \BBCODE_MODE_LIBRARY, 'method' => 'DoList', 'class' => 'list', 'allow_in' => array('listitem', 'block', 'columns'), 'before_tag' => "sns", 'after_tag' => "sns", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n", 'plain_end' => "\n"), '*' => array('simple_start' => "<li>", 'simple_end' => "</li>\n", 'class' => 'listitem', 'allow_in' => array('list'), 'end_tag' => \BBCODE_OPTIONAL, 'before_tag' => "s", 'after_tag' => "s", 'before_endtag' => "sns", 'after_endtag' => "sns", 'plain_start' => "\n * ", 'plain_end' => "\n"));
    function DoURL($bbcode, $action, $name, $default, $params, $content)
    {
    }
    function DoEmail($bbcode, $action, $name, $default, $params, $content)
    {
    }
    function DoSize($bbcode, $action, $name, $default, $params, $content)
    {
    }
    function DoFont($bbcode, $action, $name, $default, $params, $content)
    {
    }
    function DoWiki($bbcode, $action, $name, $default, $params, $content)
    {
    }
    function DoImage($bbcode, $action, $name, $default, $params, $content)
    {
    }
    function DoRule($bbcode, $action, $name, $default, $params, $content)
    {
    }
    function DoQuote($bbcode, $action, $name, $default, $params, $content)
    {
    }
    function DoList($bbcode, $action, $name, $default, $params, $content)
    {
    }
}
class BBCodeEmailAddressValidator
{
    function check_email_address($strEmailAddress)
    {
    }
    function check_local_portion($strLocalPortion)
    {
    }
    function check_domain_portion($strDomainPortion)
    {
    }
    function check_text_length($strText, $intMinimum, $intMaximum)
    {
    }
}
class BBCode
{
    var $tag_rules;
    var $defaults;
    var $current_class;
    var $root_class;
    var $lost_start_tags;
    var $start_tags;
    var $allow_ampersand;
    var $tag_marker;
    var $ignore_newlines;
    var $plain_mode;
    var $detect_urls;
    var $url_pattern;
    var $output_limit;
    var $text_length;
    var $was_limited;
    var $limit_tail;
    var $limit_precision;
    var $smiley_dir;
    var $smiley_url;
    var $smileys;
    var $smiley_regex;
    var $enable_smileys;
    var $wiki_url;
    var $local_img_dir;
    var $local_img_url;
    var $url_targetable;
    var $url_target;
    var $rule_html;
    var $pre_trim;
    var $post_trim;
    var $debug;
    /* ADDED */
    // singleton instance
    private static $instance;
    // private constructor function
    // to prevent external instantiation
    private function __construct()
    {
    }
    // getInstance method
    public static function getInstance()
    {
    }
    /* ADDED */
    function SetPreTrim($trim = "a")
    {
    }
    function GetPreTrim()
    {
    }
    function SetPostTrim($trim = "a")
    {
    }
    function GetPostTrim()
    {
    }
    function SetRoot($class = 'block')
    {
    }
    function SetRootInline()
    {
    }
    function SetRootBlock()
    {
    }
    function GetRoot()
    {
    }
    function SetDebug($enable = \true)
    {
    }
    function GetDebug()
    {
    }
    function SetAllowAmpersand($enable = \true)
    {
    }
    function GetAllowAmpersand()
    {
    }
    function SetTagMarker($marker = '[')
    {
    }
    function GetTagMarker()
    {
    }
    function SetIgnoreNewlines($ignore = \true)
    {
    }
    function GetIgnoreNewlines()
    {
    }
    function SetLimit($limit = 0)
    {
    }
    function GetLimit()
    {
    }
    function SetLimitTail($tail = "...")
    {
    }
    function GetLimitTail()
    {
    }
    function SetLimitPrecision($prec = 0.15)
    {
    }
    function GetLimitPrecision()
    {
    }
    function WasLimited()
    {
    }
    function SetPlainMode($enable = \true)
    {
    }
    function GetPlainMode()
    {
    }
    function SetDetectURLs($enable = \true)
    {
    }
    function GetDetectURLs()
    {
    }
    function SetURLPattern($pattern)
    {
    }
    function GetURLPattern()
    {
    }
    function SetURLTargetable($enable)
    {
    }
    function GetURLTargetable()
    {
    }
    function SetURLTarget($target)
    {
    }
    function GetURLTarget()
    {
    }
    function AddRule($name, $rule)
    {
    }
    function RemoveRule($name)
    {
    }
    function GetRule($name)
    {
    }
    function ClearRules()
    {
    }
    function GetDefaultRule($name)
    {
    }
    function SetDefaultRule($name)
    {
    }
    function GetDefaultRules()
    {
    }
    function SetDefaultRules()
    {
    }
    function SetWikiURL($url)
    {
    }
    function GetWikiURL($url)
    {
    }
    function GetDefaultWikiURL()
    {
    }
    function SetLocalImgDir($path)
    {
    }
    function GetLocalImgDir()
    {
    }
    function GetDefaultLocalImgDir()
    {
    }
    function SetLocalImgURL($path)
    {
    }
    function GetLocalImgURL()
    {
    }
    function GetDefaultLocalImgURL()
    {
    }
    function SetRuleHTML($html)
    {
    }
    function GetRuleHTML()
    {
    }
    function GetDefaultRuleHTML()
    {
    }
    function AddSmiley($code, $image)
    {
    }
    function RemoveSmiley($code)
    {
    }
    function GetSmiley($code)
    {
    }
    function ClearSmileys()
    {
    }
    function GetDefaultSmiley($code)
    {
    }
    function SetDefaultSmiley($code)
    {
    }
    function GetDefaultSmileys()
    {
    }
    function SetDefaultSmileys()
    {
    }
    function SetSmileyDir($path)
    {
    }
    function GetSmileyDir()
    {
    }
    function GetDefaultSmileyDir()
    {
    }
    function SetSmileyURL($path)
    {
    }
    function GetSmileyURL()
    {
    }
    function GetDefaultSmileyURL()
    {
    }
    function SetEnableSmileys($enable = \true)
    {
    }
    function GetEnableSmileys()
    {
    }
    function nl2br($string)
    {
    }
    function UnHTMLEncode($string)
    {
    }
    function _UnHTMLEncode_chr_callback($match)
    {
    }
    function _UnHTMLEncode_chr_hexdec_callback($match)
    {
    }
    function Wikify($string)
    {
    }
    function IsValidURL($string, $email_too = \true)
    {
    }
    function IsValidEmail($string)
    {
    }
    function HTMLEncode($string)
    {
    }
    function FixupOutput($string)
    {
    }
    function Internal_ProcessSmileys($string)
    {
    }
    function Internal_RebuildSmileys()
    {
    }
    function Internal_AutoDetectURLs($string)
    {
    }
    function FillTemplate($template, $insert_array, $default_array = array())
    {
    }
    function Internal_CollectText($array, $start = 0)
    {
    }
    function Internal_CollectTextReverse($array, $start = 0, $end = 0)
    {
    }
    function Internal_GenerateOutput($pos)
    {
    }
    function Internal_RewindToClass($class_list)
    {
    }
    function Internal_FinishTag($tag_name)
    {
    }
    function Internal_ComputeCurrentClass()
    {
    }
    function Internal_DumpStack($array = \false, $raw = \false)
    {
    }
    function Internal_CleanupWSByPoppingStack($pattern, &$array)
    {
    }
    function Internal_CleanupWSByEatingInput($pattern)
    {
    }
    function Internal_CleanupWSByIteratingPointer($pattern, $pos, $array)
    {
    }
    function Internal_LimitText($string, $limit)
    {
    }
    function Internal_DoLimit()
    {
    }
    function DoTag($action, $tag_name, $default_value, $params, $contents)
    {
    }
    function Internal_DoEnhancedTag($tag_rule, $params, $contents)
    {
    }
    function Internal_UpdateParamsForMissingEndTag($params)
    {
    }
    function Internal_ProcessIsolatedTag($tag_name, $tag_params, $tag_rule)
    {
    }
    function Internal_ProcessVerbatimTag($tag_name, $tag_params, $tag_rule)
    {
    }
    function Internal_ParseStartTagToken()
    {
    }
    function Internal_ParseEndTagToken()
    {
    }
    function Parse($string)
    {
    }
}
/**
 * Main BBP_Converter Class
 */
class BBP_Converter
{
    /**
     * @var int Number of rows
     */
    public $max = 0;
    /**
     * @var int Start
     */
    public $start = 0;
    /**
     * @var int Step in converter process
     */
    public $step = 0;
    /**
     * @var int Number of rows
     */
    public $rows = 0;
    /**
     * @var int Maximum number of converter steps
     */
    public $max_steps = 17;
    /**
     * @var int Number of rows in the current step
     */
    public $rows_in_step = 0;
    /**
     * @var int Percent complete of current step
     */
    public $step_percentage = 0;
    /**
     * @var int Percent complete of all step
     */
    public $total_percentage = 0;
    /**
     * @var int Name of source forum platform
     */
    public $platform = '';
    /**
     * @var BBP_Converter_Base Type of converter to use
     */
    public $converter = \null;
    /**
     * @var string Path to included platforms
     */
    public $converters_dir = '';
    /**
     * @var array Map of steps to methods
     */
    private $steps = array(1 => 'sync_table', 2 => 'users', 3 => 'passwords', 4 => 'forums', 5 => 'forum_hierarchy', 6 => 'forum_subscriptions', 7 => 'topics', 8 => 'topics_authors', 9 => 'stickies', 10 => 'super_stickies', 11 => 'closed_topics', 12 => 'topic_tags', 13 => 'topic_subscriptions', 14 => 'topic_favorites', 15 => 'replies', 16 => 'reply_authors', 17 => 'reply_hierarchy');
    /**
     * The main bbPress Converter loader
     *
     * @since 2.1.0 bbPress (r3813)
     */
    public function __construct()
    {
    }
    /**
     * Admin globals
     *
     * @since 2.6.0 bbPress (r6598)
     */
    public function setup_globals()
    {
    }
    /**
     * Setup the default actions
     *
     * @since 2.1.0 bbPress (r3813)
     */
    public function setup_actions()
    {
    }
    /**
     * Admin scripts
     *
     * @since 2.1.0 bbPress (r3813)
     */
    public function admin_head()
    {
    }
    /**
     * Callback processor
     *
     * @since 2.1.0 bbPress (r3813)
     */
    public function process_callback()
    {
    }
    /**
     * Wrap the converter output in HTML, so styling can be applied
     *
     * @since 2.1.0 bbPress (r4052)
     *
     * @param string $output
     */
    private function converter_response($output = '')
    {
    }
    /**
     * Attempt to increase memory and set other system settings
     *
     * @since 2.6.0 bbPress (r6460)
     */
    private function maybe_set_memory()
    {
    }
    /**
     * Maybe restart the converter
     *
     * @since 2.6.0 bbPress (r6460)
     */
    private function maybe_restart()
    {
    }
    /**
     * Maybe update options
     *
     * @since 2.6.0 bbPress (r6637)
     */
    private function maybe_update_options()
    {
    }
    /**
     * Setup converter options
     *
     * @since 2.6.0 bbPress (r6460)
     */
    private function setup_options()
    {
    }
    /**
     * Check that user can access the converter
     *
     * @since 2.6.0 bbPress (r6460)
     */
    private function check_access()
    {
    }
    /**
     * Reset the converter
     *
     * @since 2.6.0 bbPress (r6460)
     */
    private function reset()
    {
    }
    /**
     * Bump the step and reset the start
     *
     * @since 2.6.0 bbPress (r6460)
     */
    private function bump_step()
    {
    }
    /**
     * Bump the start within the current step
     *
     * @since 2.6.0 bbPress (r6460)
     */
    private function bump_start()
    {
    }
    /**
     * Do the converter step
     *
     * @since 2.6.0 bbPress (r6460)
     */
    private function do_steps()
    {
    }
    /** Steps *****************************************************************/
    /**
     * Maybe clean the sync table
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_sync_table()
    {
    }
    /**
     * Maybe convert users
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_users()
    {
    }
    /**
     * Maybe clean up passwords
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_passwords()
    {
    }
    /**
     * Maybe convert forums
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_forums()
    {
    }
    /**
     * Maybe walk the forum hierarchy
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_forum_hierarchy()
    {
    }
    /**
     * Maybe convert forum subscriptions
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_forum_subscriptions()
    {
    }
    /**
     * Maybe convert topics
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_topics()
    {
    }
    /**
     * Maybe convert topic authors (anonymous)
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_topics_authors()
    {
    }
    /**
     * Maybe convert sticky topics (not super stickies)
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_stickies()
    {
    }
    /**
     * Maybe convert super-sticky topics (not per-forum)
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_super_stickies()
    {
    }
    /**
     * Maybe close converted topics
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_closed_topics()
    {
    }
    /**
     * Maybe convert topic tags
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_topic_tags()
    {
    }
    /**
     * Maybe convert topic subscriptions
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_topic_subscriptions()
    {
    }
    /**
     * Maybe convert topic favorites
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_topic_favorites()
    {
    }
    /**
     * Maybe convert replies
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_replies()
    {
    }
    /**
     * Maybe convert reply authors (anonymous)
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_reply_authors()
    {
    }
    /**
     * Maybe convert the threaded reply hierarchy
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_reply_hierarchy()
    {
    }
    /**
     * Done!
     *
     * @since 2.6.0 bbPress (r6513)
     */
    private function step_done()
    {
    }
    /** Helper Table **********************************************************/
    /**
     * Create Tables for fast syncing
     *
     * @since 2.1.0 bbPress (r3813)
     */
    public static function sync_table($drop = \false)
    {
    }
}
/**
 * Topic replies list table
 *
 * This list table is responsible for showing the replies to a topic in a
 * meta-box, similar to comments in posts and pages.
 *
 * @since 2.6.0 bbPress (r5886)
 */
class BBP_Topic_Replies_List_Table extends \WP_List_Table
{
    /**
     * The main constructor method
     *
     * @since 2.6.0 bbPress (r5886)
     */
    public function __construct($args = array())
    {
    }
    /**
     * Setup the list-table columns
     *
     * @since 2.6.0 bbPress (r5886)
     *
     * @see WP_List_Table::::single_row_columns()
     *
     * @return array An associative array containing column information
     */
    public function get_columns()
    {
    }
    /**
     * Allow `bbp_reply_created` to be sortable
     *
     * @since 2.6.0 bbPress (r5886)
     *
     * @return array An associative array containing the `bbp_reply_created` column
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Setup the bulk actions
     *
     * @since 2.6.0 bbPress (r5886)
     *
     * @return array An associative array containing all the bulk actions
     */
    public function get_bulk_actions()
    {
    }
    /**
     * Output the check-box column for bulk actions (if we implement them)
     *
     * @since 2.6.0 bbPress (r5886)
     */
    public function column_cb($item = '')
    {
    }
    /**
     * Output the contents of the `bbp_topic_reply_author` column
     *
     * @since 2.6.0 bbPress (r5886)
     */
    public function column_bbp_topic_reply_author($item = '')
    {
    }
    /**
     * Output the contents of the `bbp_reply_created` column
     *
     * @since 2.6.0 bbPress (r5886)
     */
    public function column_bbp_reply_created($item = '')
    {
    }
    /**
     * Output the contents of the `bbp_reply_content` column
     *
     * @since 2.6.0 bbPress (r5886)
     */
    public function column_bbp_reply_content($item = '')
    {
    }
    /**
     * Handle bulk action requests
     *
     * @since 2.6.0 bbPress (r5886)
     */
    public function process_bulk_action()
    {
    }
    /**
     * Prepare the list-table items for display
     *
     * @since 2.6.0 bbPress (r5886)
     */
    public function prepare_items($topic_id = 0)
    {
    }
    /**
     * Message to be displayed when there are no items
     *
     * @since 2.6.0 bbPress (r5930)
     */
    public function no_items()
    {
    }
    /**
     * Display the list table
     *
     * This custom method is necessary because the one in `WP_List_Table` comes
     * with a nonce and check that we do not need.
     *
     * @since 2.6.0 bbPress (r5930)
     */
    public function display()
    {
    }
    /**
     * Generate the table navigation above or below the table
     *
     * This custom method is necessary because the one in `WP_List_Table` comes
     * with a nonce and check that we do not need.
     *
     * @since 2.6.0 bbPress (r5930)
     *
     * @param string $which
     */
    protected function display_tablenav($which = '')
    {
    }
    /**
     * Generates content for a single row of the table
     *
     * @since 2.6.0
     * @access public
     *
     * @param object $item The current item
     */
    public function single_row($item)
    {
    }
}
/**
 * bbPress Converter Database Access Abstraction Object
 *
 * @since 2.6.0 bbPress (r6784)
 */
class BBP_Converter_DB extends \wpdb
{
    /**
     * Sets up the credentials used to connect to the database server, but does
     * not actually connect to the database on construct.
     *
     * @since 2.6.0 bbPress (r6784)
     *
     * @param string $dbuser     MySQL database user
     * @param string $dbpassword MySQL database password
     * @param string $dbname     MySQL database name
     * @param string $dbhost     MySQL database host
     */
    public function __construct($dbuser, $dbpassword, $dbname, $dbhost)
    {
    }
}
/**
 * Base class to be extended by specific individual importers
 *
 * @since 2.1.0 bbPress (r3813)
 */
abstract class BBP_Converter_Base
{
    /**
     * @var array() This is the field mapping array to process.
     */
    protected $field_map = array();
    /**
     * @var object This is the connection to the WordPress database.
     */
    protected $wpdb;
    /**
     * @var object This is the connection to the other platforms database.
     */
    protected $opdb;
    /**
     * @var int Maximum number of rows to convert at 1 time. Default 100.
     */
    protected $max_rows = 100;
    /**
     * @var array() Map of topic to forum.  It is for optimization.
     */
    protected $map_topicid_to_forumid = array();
    /**
     * @var array() Map of from old forum ids to new forum ids.  It is for optimization.
     */
    protected $map_forumid = array();
    /**
     * @var array() Map of from old topic ids to new topic ids.  It is for optimization.
     */
    protected $map_topicid = array();
    /**
     * @var array() Map of from old reply_to ids to new reply_to ids.  It is for optimization.
     */
    protected $map_reply_to = array();
    /**
     * @var array() Map of from old user ids to new user ids.  It is for optimization.
     */
    protected $map_userid = array();
    /**
     * @var str This is the charset for your wp database.
     */
    public $charset = '';
    /**
     * @var boolean Sync table available.
     */
    public $sync_table = \false;
    /**
     * @var str Sync table name.
     */
    public $sync_table_name = '';
    /**
     * @var bool Whether users should be converted or not. Default false.
     */
    public $convert_users = \false;
    /**
     * @var bool Whether to clean up any old converter data. Default false.
     */
    public $clean = \false;
    /**
     * @var array Custom BBCode class properties in a key => value format
     */
    public $bbcode_parser_properties = array();
    /** Methods ***************************************************************/
    /**
     * This is the constructor and it connects to the platform databases.
     */
    public function __construct()
    {
    }
    /**
     * Initialize the converter
     *
     * @since 2.1.0
     */
    private function init()
    {
    }
    /**
     * Setup global values
     */
    public function setup_globals()
    {
    }
    /**
     * Convert Forums
     */
    public function convert_forums($start = 1)
    {
    }
    /**
     * Convert Topics / Threads
     */
    public function convert_topics($start = 1)
    {
    }
    /**
     * Convert Posts
     */
    public function convert_replies($start = 1)
    {
    }
    /**
     * Convert Users
     */
    public function convert_users($start = 1)
    {
    }
    /**
     * Convert Topic Tags
     */
    public function convert_tags($start = 1)
    {
    }
    /**
     * Convert Forum Subscriptions
     */
    public function convert_forum_subscriptions($start = 1)
    {
    }
    /**
     * Convert Topic Subscriptions
     */
    public function convert_topic_subscriptions($start = 1)
    {
    }
    /**
     * Convert Favorites
     */
    public function convert_favorites($start = 1)
    {
    }
    /**
     * Convert Table
     *
     * @param string to type
     * @param int Start row
     */
    public function convert_table($to_type, $start)
    {
    }
    /**
     * This method converts old forum hierarchy to new bbPress hierarchy.
     */
    public function convert_forum_parents($start = 1)
    {
    }
    /**
     * This method converts old topic stickies to new bbPress stickies.
     *
     * @since 2.5.0 bbPress (r5170)
     */
    public function convert_topic_stickies($start = 1)
    {
    }
    /**
     * This method converts old topic super stickies to new bbPress super stickies.
     *
     * @since 2.5.0 bbPress (r5170)
     */
    public function convert_topic_super_stickies($start = 1)
    {
    }
    /**
     * This method converts old closed topics to bbPress closed topics.
     *
     * @since 2.6.0 bbPress (r5425)
     */
    public function convert_topic_closed_topics($start = 1)
    {
    }
    /**
     * This method converts old reply_to post id to new bbPress reply_to post id.
     *
     * @since 2.4.0 bbPress (r5093)
     */
    public function convert_reply_to_parents($start = 1)
    {
    }
    /**
     * This method converts anonymous topics.
     *
     * @since 2.6.0 bbPress (r5538)
     */
    public function convert_anonymous_topic_authors($start = 1)
    {
    }
    /**
     * This method converts anonymous replies.
     *
     * @since 2.6.0 bbPress (r5538)
     */
    public function convert_anonymous_reply_authors($start = 1)
    {
    }
    /**
     * This method deletes data from the wp database.
     *
     * @since 2.6.0 bbPress (r6456)
     */
    public function clean()
    {
    }
    /**
     * This method deletes passwords from the wp database.
     *
     * @param int Start row
     */
    public function clean_passwords($start = 1)
    {
    }
    /**
     * This method implements the authentication for the different forums.
     *
     * @param string Un-encoded password.
     */
    protected abstract function authenticate_pass($password, $hash);
    /**
     * Info
     */
    protected abstract function info();
    /**
     * This method grabs appropriate fields from the table specified
     *
     * @param string The table name to grab fields from
     */
    private function get_fields($tablename = '')
    {
    }
    /** Database Wrappers *****************************************************/
    /**
     * Update the last query option and return results
     *
     * @param string $query
     * @param string $output
     */
    private function get_row($query = '')
    {
    }
    /**
     * Update the last query option and return results
     *
     * @param string $query
     * @param string $output
     */
    private function get_results($query = '', $output = \OBJECT)
    {
    }
    /**
     * Update the last query option and do a general query
     *
     * @param string $query
     */
    private function query($query = '')
    {
    }
    /**
     * Update the last query ran
     *
     * @since 2.6.0 bbPress (r6637)
     *
     * @param string $query The literal MySQL query
     * @return bool
     */
    private function update_query($query = '')
    {
    }
    /**
     * Update the number of rows in the current step
     *
     * @since 2.6.0 bbPress (r6637)
     *
     * @param string $query The literal MySQL query
     * @return bool
     */
    private function count_rows_by_results($query = '')
    {
    }
    /**
     * Update the number of rows in the current step
     *
     * @since 2.6.0 bbPress (r6637)
     *
     * @param string $table_name The literal MySQL query
     * @return bool
     */
    private function count_rows_by_table($table_name = '')
    {
    }
    /** Callbacks *************************************************************/
    /**
     * Run password through wp_hash_password()
     *
     * @param string $username
     * @param string $password
     */
    public function callback_pass($username = '', $password = '')
    {
    }
    /**
     * A mini cache system to reduce database calls to forum ID's
     *
     * @param string $field
     * @return string
     */
    private function callback_forumid($field)
    {
    }
    /**
     * A mini cache system to reduce database calls to topic ID's
     *
     * @param string $field
     * @return string
     */
    private function callback_topicid($field)
    {
    }
    /**
     * A mini cache system to reduce database calls to reply_to post id.
     *
     * @since 2.4.0 bbPress (r5093)
     *
     * @param string $field
     * @return string
     */
    private function callback_reply_to($field)
    {
    }
    /**
     * A mini cache system to reduce database calls to user ID's
     *
     * @param string $field
     * @return string
     */
    private function callback_userid($field)
    {
    }
    /**
     * Check if the topic or reply author is anonymous
     *
     * @since 2.6.0 bbPress (r5544)
     *
     * @param  string $field
     * @return string
     */
    private function callback_check_anonymous($field)
    {
    }
    /**
     * A mini cache system to reduce database calls map topics ID's to forum ID's
     *
     * @param string $field
     * @return string
     */
    private function callback_topicid_to_forumid($field)
    {
    }
    protected function callback_slug($field)
    {
    }
    protected function callback_negative($field)
    {
    }
    protected function callback_html($field)
    {
    }
    protected function callback_null($field)
    {
    }
    protected function callback_datetime($field)
    {
    }
}
/**
 * Loads bbPress plugin admin area
 *
 * @package bbPress
 * @subpackage Administration
 * @since 2.0.0 bbPress (r2464)
 */
class BBP_Admin
{
    /** Directory *************************************************************/
    /**
     * @var string Path to the bbPress admin directory
     */
    public $admin_dir = '';
    /** URLs ******************************************************************/
    /**
     * @var string URL to the bbPress admin directory
     */
    public $admin_url = '';
    /**
     * @var string URL to the bbPress images directory
     */
    public $images_url = '';
    /**
     * @var string URL to the bbPress admin styles directory
     */
    public $styles_url = '';
    /**
     * @var string URL to the bbPress admin css directory
     */
    public $css_url = '';
    /**
     * @var string URL to the bbPress admin js directory
     */
    public $js_url = '';
    /** Capability ************************************************************/
    /**
     * @var bool Minimum capability to access Tools and Settings
     */
    public $minimum_capability = 'keep_gate';
    /** Separator *************************************************************/
    /**
     * @var bool Whether or not to add an extra top level menu separator
     */
    public $show_separator = \false;
    /** Tools *****************************************************************/
    /**
     * @var array Array of available repair tools
     */
    public $tools = array();
    /** Notices ***************************************************************/
    /**
     * @var array Array of notices to output to the current user
     */
    public $notices = array();
    /** Components ************************************************************/
    /**
     * @var BBP_Forums_Admin Forums admin
     */
    public $forums = \null;
    /**
     * @var BBP_Topics_Admin Topics admin
     */
    public $topics = \null;
    /**
     * @var BBP_Replies_Admin Replies admin
     */
    public $replies = \null;
    /**
     * @var BBP_Converter Converter admin
     */
    public $converter = \null;
    /** Functions *************************************************************/
    /**
     * The main bbPress admin loader
     *
     * @since 2.0.0 bbPress (r2515)
     */
    public function __construct()
    {
    }
    /**
     * Admin globals
     *
     * @since 2.0.0 bbPress (r2646)
     *
     * @access private
     */
    private function setup_globals()
    {
    }
    /**
     * Include required files
     *
     * @since 2.0.0 bbPress (r2646)
     *
     * @access private
     */
    private function includes()
    {
    }
    /**
     * Setup the admin hooks, actions and filters
     *
     * @since 2.0.0 bbPress (r2646)
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Setup general admin area notices.
     *
     * @since 2.6.0 bbPress (r6701)
     */
    public function setup_notices()
    {
    }
    /**
     * Handle hiding of general admin area notices.
     *
     * @since 2.6.0 bbPress (r6701)
     */
    public function hide_notices()
    {
    }
    /**
     * Output all admin area notices
     *
     * @since 2.6.0 bbPress (r6771)
     */
    public function output_notices()
    {
    }
    /**
     * Add a notice to the notices array
     *
     * @since 2.6.0 bbPress (r6771)
     *
     * @param string|WP_Error $message        A message to be displayed or {@link WP_Error}
     * @param string          $class          Optional. A class to be added to the message div
     * @param bool            $is_dismissible Optional. True to dismiss, false to persist
     *
     * @return void
     */
    public function add_notice($message, $class = \false, $is_dismissible = \true)
    {
    }
    /**
     * Escape message string output
     *
     * @since 2.6.0 bbPress (r6775)
     *
     * @param string $message
     *
     * @return string
     */
    private function esc_notice($message = '')
    {
    }
    /**
     * Maybe append the pending upgrade count to the "Tools" menu.
     *
     * @since 2.6.0 bbPress (r6896)
     *
     * @global menu $menu
     */
    public function add_upgrade_count()
    {
    }
    /**
     * Add the admin menus
     *
     * @since 2.0.0 bbPress (r2646)
     */
    public function admin_menus()
    {
    }
    /**
     * Add the network admin menus
     *
     * @since 2.1.0 bbPress (r3689)
     */
    public function network_admin_menus()
    {
    }
    /**
     * Register the settings
     *
     * @since 2.0.0 bbPress (r2737)
     *
     * @todo Put fields into multidimensional array
     */
    public static function register_admin_settings()
    {
    }
    /**
     * Maps settings capabilities
     *
     * @since 2.2.0 bbPress (r4242)
     *
     * @param array $caps Capabilities for meta capability
     * @param string $cap Capability name
     * @param int $user_id User id
     * @param array $args Arguments
     *
     * @return array Actual capabilities for meta capability
     */
    public static function map_settings_meta_caps($caps = array(), $cap = '', $user_id = 0, $args = array())
    {
    }
    /**
     * Register the importers
     *
     * @since 2.0.0 bbPress (r2737)
     */
    public function register_importers()
    {
    }
    /**
     * Add Settings link to plugins area
     *
     * @since 2.0.0 bbPress (r2737)
     *
     * @param array $links Links array in which we would prepend our link
     * @param string $file Current plugin basename
     * @return array Processed links
     */
    public static function modify_plugin_action_links($links, $file)
    {
    }
    /**
     * Enqueue any admin scripts we might need
     *
     * @since 2.2.0 bbPress (r4260)
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Enqueue any admin scripts we might need
     *
     * @since 2.6.0 bbPress (r5224)
     */
    public function enqueue_styles()
    {
    }
    /**
     * Remove the individual recount and converter menus.
     * They are grouped together by h2 tabs
     *
     * @since 2.0.0 bbPress (r2464)
     */
    public function admin_head()
    {
    }
    /**
     * Registers the bbPress admin styling and color schemes
     *
     * Because wp-content can exist outside of the WordPress root, there is no
     * way to be certain what the relative path of admin images is.
     *
     * @since 2.6.0 bbPress (r2521)
     */
    public function register_admin_styles()
    {
    }
    /**
     * Registers the bbPress admin color schemes
     *
     * Because wp-content can exist outside of the WordPress root there is no
     * way to be certain what the relative path of the admin images is.
     * We are including the two most common configurations here, just in case.
     *
     * @since 2.6.0 bbPress (r2521)
     */
    public function register_admin_scripts()
    {
    }
    /**
     * Allow keymaster role to save Forums settings
     *
     * @since 2.3.0 bbPress (r4678)
     *
     * @param string $capability
     * @return string Return minimum capability
     */
    public function option_page_capability_bbpress($capability = 'manage_options')
    {
    }
    /** Ajax ******************************************************************/
    /**
     * Ajax action for facilitating the forum auto-suggest
     *
     * @since 2.2.0 bbPress (r4261)
     */
    public function suggest_topic()
    {
    }
    /**
     * Ajax action for facilitating the topic and reply author auto-suggest
     *
     * @since 2.4.0 bbPress (r5014)
     */
    public function suggest_user()
    {
    }
    /** About *****************************************************************/
    /**
     * Output the shared screen header for about_screen() & credits_screen()
     *
     * Contains title, subtitle, and badge area
     *
     * @since 2.6.0 bbPress (r6604)
     */
    private function screen_header()
    {
    }
    /**
     * Output the about screen
     *
     * @since 2.2.0 bbPress (r4159)
     *
     * @todo Host this remotely.
     */
    public function about_screen()
    {
    }
    /**
     * Output the credits screen
     *
     * @since 2.2.0 bbPress (r4159)
     *
     * @todo Host this remotely.
     */
    public function credits_screen()
    {
    }
    /** Updaters **************************************************************/
    /**
     * Update all bbPress forums across all sites
     *
     * @since 2.1.0 bbPress (r3689)
     */
    public static function update_screen()
    {
    }
    /**
     * Update all bbPress forums across all sites
     *
     * @since 2.1.0 bbPress (r3689)
     */
    public static function network_update_screen()
    {
    }
}
/**
 * Loads bbPress topics admin area
 *
 * @package bbPress
 * @subpackage Administration
 * @since 2.0.0 bbPress (r2464)
 */
class BBP_Topics_Admin
{
    /** Variables *************************************************************/
    /**
     * @var The post type of this admin component
     */
    private $post_type = '';
    /** Functions *************************************************************/
    /**
     * The main bbPress topics admin loader
     *
     * @since 2.0.0 bbPress (r2515)
     */
    public function __construct()
    {
    }
    /**
     * Setup the admin hooks, actions and filters
     *
     * @since 2.0.0 bbPress (r2646)
     * @since 2.6.0 bbPress (r6101) Added bulk actions
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Admin globals
     *
     * @since 2.0.0 bbPress (r2646)
     *
     * @access private
     */
    private function setup_globals()
    {
    }
    /** Contextual Help *******************************************************/
    /**
     * Contextual help for bbPress topic edit page
     *
     * @since 2.0.0 bbPress (r3119)
     */
    public function edit_help()
    {
    }
    /**
     * Contextual help for bbPress topic edit page
     *
     * @since 2.0.0 bbPress (r3119)
     */
    public function new_help()
    {
    }
    /**
     * Add spam/unspam bulk actions to the bulk action dropdown.
     *
     * @since 2.6.0 bbPress (r6101)
     *
     * @param array $actions The list of bulk actions.
     * @return array The filtered list of bulk actions.
     */
    public function bulk_actions($actions)
    {
    }
    /**
     * Add custom bulk action updated messages for topics.
     *
     * @since 2.6.0 bbPress (r6101)
     *
     * @param array $bulk_messages Arrays of messages, each keyed by the corresponding post type.
     * @param array $bulk_counts   Array of item counts for each message, used to build internationalized strings.
     */
    public function bulk_post_updated_messages($bulk_messages, $bulk_counts)
    {
    }
    /**
     * Handle spam/unspam bulk actions.
     *
     * @since 2.6.0 bbPress (r6101)
     *
     * @param string $sendback The sendback URL.
     * @param string $doaction The action to be taken.
     * @param array  $post_ids The post IDS to take the action on.
     * @return string The sendback URL.
     */
    public function handle_bulk_actions($sendback, $doaction, $post_ids)
    {
    }
    /**
     * Add the topic attributes meta-box
     *
     * @since 2.0.0 bbPress (r2744)
     */
    public function attributes_metabox()
    {
    }
    /**
     * Add the author info meta-box
     *
     * @since 2.0.0 bbPress (r2828)
     */
    public function author_metabox()
    {
    }
    /**
     * Add the replies meta-box
     *
     * Allows viewing & moderating of replies to a topic, based on the way
     * comments are visible on a blog post.
     *
     * @since 2.6.0 bbPress (r5886)
     */
    public function replies_metabox()
    {
    }
    /**
     * Add the engagements meta-box
     *
     * Allows viewing of users who have engaged in a topic.
     *
     * @since 2.6.0 bbPress (r6333)
     */
    public function engagements_metabox()
    {
    }
    /**
     * Add the favorites meta-box
     *
     * Allows viewing of users who have favorited a topic.
     *
     * @since 2.6.0 bbPress (r6197)
     */
    public function favorites_metabox()
    {
    }
    /**
     * Add the subscriptions meta-box
     *
     * Allows viewing of users who have subscribed to a topic.
     *
     * @since 2.6.0 bbPress (r6197)
     */
    public function subscriptions_metabox()
    {
    }
    /**
     * Remove comments & discussion meta-boxes if comments are not supported
     *
     * @since 2.6.0 bbPress (r6186)
     */
    public function comments_metabox()
    {
    }
    /**
     * Pass the topic attributes for processing
     *
     * @since 2.0.0 bbPress (r2746)
     *
     * @param int $topic_id Topic id
     * @return int Parent id
     */
    public function save_meta_boxes($topic_id)
    {
    }
    /**
     * Toggle topic
     *
     * Handles the admin-side opening/closing, sticking/unsticking and
     * spamming/unspamming of topics
     *
     * @since 2.0.0 bbPress (r2727)
     */
    public function toggle_topic()
    {
    }
    /**
     * Toggle topic notices
     *
     * Display the success/error notices from
     * {@link BBP_Admin::toggle_topic()}
     *
     * @since 2.0.0 bbPress (r2727)
     */
    public function toggle_topic_notice()
    {
    }
    /**
     * Returns an array of keys used to sort row actions
     *
     * @since 2.6.0 bbPress (r6771)
     *
     * @return array
     */
    private function get_row_action_sort_order()
    {
    }
    /**
     * Returns an array of notice toggles
     *
     * @since 2.6.0 bbPress (r6396)
     *
     * @return array
     */
    private function get_allowed_notice_toggles()
    {
    }
    /**
     * Returns an array of notice toggles
     *
     * @since 2.6.0 bbPress (r6396)
     *
     * @return array
     */
    private function get_allowed_action_toggles()
    {
    }
    /**
     * Manage the column headers for the topics page
     *
     * @since 2.0.0 bbPress (r2485)
     *
     * @param array $columns The columns
     *
     * @return array $columns bbPress topic columns
     */
    public function column_headers($columns)
    {
    }
    /**
     * Print extra columns for the topics page
     *
     * @since 2.0.0 bbPress (r2485)
     *
     * @param string $column Column
     * @param int $topic_id Topic id
     */
    public function column_data($column, $topic_id)
    {
    }
    /**
     * Topic Row actions
     *
     * Remove the quick-edit action link under the topic title and add the
     * content and close/stick/spam links
     *
     * @since 2.0.0 bbPress (r2485)
     *
     * @param array  $actions Actions
     * @param object $topic   Topic object
     *
     * @return array $actions Actions
     */
    public function row_actions($actions = array(), $topic = \false)
    {
    }
    /**
     * Sort row actions by key
     *
     * @since 2.6.0
     *
     * @param array $actions
     *
     * @return array
     */
    private function sort_row_actions($actions = array())
    {
    }
    /**
     * Add forum dropdown to topic and reply list table filters
     *
     * @since 2.0.0 bbPress (r2991)
     *
     * @return bool False. If post type is not topic or reply
     */
    public function filter_dropdown()
    {
    }
    /**
     * Add "Empty Spam" button for moderators
     *
     * @since 2.6.0 bbPress (r6791)
     */
    public function filter_empty_spam()
    {
    }
    /**
     * Adjust the request query and include the forum id
     *
     * @since 2.0.0 bbPress (r2991)
     *
     * @param array $query_vars Query variables from {@link WP_Query}
     * @return array Processed Query Vars
     */
    function filter_post_rows($query_vars)
    {
    }
    /**
     * Custom user feedback messages for topic post type
     *
     * @since 2.0.0 bbPress (r3080)
     *
     * @global int $post_ID
     *
     * @param array $messages
     *
     * @return array
     */
    public function updated_messages($messages)
    {
    }
}
/**
 * bbPress Invision Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of Invision Power Board v3.x converter.
 *
 * @since 2.3.0 bbPress (r4713)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/invision
 */
class Invision extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * Translate the forum type from Invision numerics to WordPress's strings.
     *
     * @param int $status Invision numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from Invision numerics to WordPress's strings.
     *
     * @param int $status Invision numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic reply count.
     *
     * @param int $count Invision reply count
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    private function to_char($input)
    {
    }
    /**
     * This callback processes any custom BBCodes with parser.php
     */
    protected function callback_html($field)
    {
    }
}
/**
 * bbPress PHPFox3 Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of PHPFox v3.x Forum converter.
 *
 * @since 2.5.0 bbPress (r5146)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/phpfox
 */
class PHPFox3 extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from PHPFox v3.5.x numerics to WordPress's strings.
     *
     * @param int $status PHPFox v3.5.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the forum status from PHPFox v3.5.x numerics to WordPress's strings.
     *
     * @param int $status PHPFox v3.5.x numeric forum status
     * @return string WordPress safe
     */
    public function callback_forum_status($status = 0)
    {
    }
    /**
     * Translate the post status from PHPFox v3.5.x numerics to WordPress's strings.
     *
     * @param int $status PHPFox v3.5.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from PHPFox v3.5.x numerics to WordPress's strings.
     *
     * @param int $status PHPFox v3.5.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count PHPFox v3.5.x topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress Vanilla Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of Vanilla 2.0.18.1 Converter
 *
 * @since 2.3.0 bbPress (r4717)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/vanilla
 */
class Vanilla extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * Translate the topic status from Vanilla v2.x numerics to WordPress's strings.
     *
     * @param int $status Vanilla v2.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from Vanilla v2.x numerics to WordPress's strings.
     *
     * @param int $status Vanilla v2.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Clean Root Parent ID -1 to 0
     *
     * @param int $parent Vanilla v2.x Parent ID
     * @return int
     */
    public function callback_forum_parent($parent = 0)
    {
    }
    /**
     * Verify the topic reply count.
     *
     * @param int $count Vanilla v2.x reply count
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * This method is to save the salt and password together. That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
}
/**
 * bbPress AEF Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of AEF Forum converter.
 *
 * @since 2.5.0 bbPress (r5139)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/aef
 */
class AEF extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum status from AEF v1.0.9 numerics to WordPress's strings.
     *
     * @param int $status AEF v1.0.9 numeric forum status
     * @return string WordPress safe
     */
    public function callback_forum_status($status = 1)
    {
    }
    /**
     * Translate the post status from AEF v1.0.9 numerics to WordPress's strings.
     *
     * @param int $status AEF v1.0.9 numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 1)
    {
    }
    /**
     * Translate the topic sticky status type from AEF 1.x numerics to WordPress's strings.
     *
     * @param int $status AEF 1.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count AEF v1.0.9 topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress PHPWind Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of PHPWind Forum converter.
 *
 * @since 2.5.0 bbPress (r5142)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/phpwind
 */
class PHPWind extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from PHPWind v9.x Capitalised case to WordPress's non-capatilise case strings.
     *
     * @param int $status PHPWind v9.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 1)
    {
    }
    /**
     * Translate the post status from PHPWind v9.x numerics to WordPress's strings.
     *
     * @param int $status PHPWind v9.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 2)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count PHPWind v9.x topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress e107 1.x Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of e107 v1.x Forum converter.
 *
 * @since 2.6.0 bbPress (r5352)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/e107
 */
class e107v1 extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together. That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from e107 v1.x numerics to WordPress's strings.
     *
     * @param int $status e107 v1.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the post status from e107 v1.x numerics to WordPress's strings.
     *
     * @param int $status e107 v1.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 1)
    {
    }
    /**
     * Translate the topic sticky status type from e107 v1.x numerics to WordPress's strings.
     *
     * @param int $status e107 v1.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count e107 v1.x topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * Override the `callback_user` function in 'converter.php' for custom e107v1 imports
     *
     * A mini cache system to reduce database calls to user ID's
     *
     * @param string $field
     * @return string
     */
    protected function callback_e107v1_userid($field)
    {
    }
    /**
     * This callback processes any custom parser.php attributes and custom code with preg_replace
     */
    protected function callback_html($field)
    {
    }
}
/**
 * bbPress PunBB Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of PunBB v1.4.2 Forum converter.
 *
 * @since 2.5.0 bbPress (r5153)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/punbb
 */
class PunBB extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the post status from PunBB v1.4.2 numerics to WordPress's strings.
     *
     * @param int $status PunBB v1.4.2 numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from PunBB v1.4.2 numerics to WordPress's strings.
     *
     * @param int $status PunBB v1.4.2 numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count PunBB v1.4.2 topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress SMF Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of SMF Forum converter.
 *
 * @since 2.5.0 bbPress (r5189)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/smf
 */
class SMF extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the post status from SMF v2.0.4 numerics to WordPress's strings.
     *
     * @param int $status SMF v2.0.4 numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from SMF v2.0.4 numerics to WordPress's strings.
     *
     * @param int $status SMF v2.0.4 numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count SMF v2.0.4 topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * This callback processes any custom parser.php attributes and custom code with preg_replace
     */
    protected function callback_html($field)
    {
    }
}
/**
 * bbPress XenForo Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 *  Implementation of XenForo converter.
 *
 * @since 2.5.0 bbPress (r5145)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/xenforo
 */
class XenForo extends \BBP_Converter_Base
{
    /**
     * Main constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function translate_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from XenForo Capitalised case to WordPress's non-capatilise case strings.
     *
     * @param int $status XenForo numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 1)
    {
    }
    /**
     * Translate the forum status from XenForo numerics to WordPress's strings.
     *
     * @param int $status XenForo numeric forum status
     * @return string WordPress safe
     */
    public function callback_forum_status($status = 1)
    {
    }
    /**
     * Translate the post status from XenForo to WordPress' strings.
     *
     * @param int $status XenForo post status
     * @return string WordPress safe
     */
    public function callback_status($status = 1)
    {
    }
    /**
     * Translate the topic status from XenForo numerics to WordPress's strings.
     *
     * @param int $status XenForo numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 1)
    {
    }
    /**
     * Translate the topic sticky status type from XenForo numerics to WordPress's strings.
     *
     * @param int $status XenForo numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic reply count.
     *
     * @param int $count XenForo reply count
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * This callback processes any custom parser.php attributes and custom code with preg_replace
     */
    protected function callback_html($field)
    {
    }
}
/**
 * bbPress 1.x Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * bbPress 1.1 Converter
 *
 * @since 2.1.0 bbPress (r3816)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/bbpress-1-x-buddypress-group-forums
 */
class bbPress1 extends \BBP_Converter_Base
{
    /**
     * Main constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * Translate the post status from bbPress 1's numerics to WordPress's
     * strings.
     *
     * @param int $status bbPress 1.x numeric post status
     * @return string WordPress safe
     */
    public function callback_status($status = 0)
    {
    }
    /**
     * Translate the forum type from bbPress 1.x numerics to WordPress's strings.
     *
     * @param int $status bbPress 1.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the topic status from bbPress 1's numerics to WordPress's
     * strings.
     *
     * @param int $topic_status bbPress 1.x numeric status
     * @return string WordPress safe
     */
    public function callback_topic_status($topic_status = 1)
    {
    }
    /**
     * Translate the topic sticky status type from bbPress 1.x numerics to WordPress's strings.
     *
     * @param int $status bbPress 1.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic reply count.
     *
     * @param int $count bbPress 1.x topic and reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * This method is to save the salt and password together. That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * This callback strips `topic-` from topic subscriptions taxonomy
     *
     * @since 2.6.0 bbPress (r5572)
     *
     * @param string $field Topic ID
     * @return integer WordPress safe
     */
    protected function callback_topic_subscriptions($field)
    {
    }
}
/**
 * bbPress FluxBB Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of FluxBB Forum converter.
 *
 * @since 2.5.0 bbPress (r5138)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/fluxbb
 */
class FluxBB extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the post status from FluxBB v1.5.3 numerics to WordPress's strings.
     *
     * @param int $status FluxBB v1.5.3 numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from FluxBB v1.5.3 numerics to WordPress's strings.
     *
     * @param int $status FluxBB v1.5.3 numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count FluxBB v1.5.3 topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress Drupal7 Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of Drupal v7.x Forum converter.
 *
 * @since 2.5.0 bbPress (r5138)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/drupal
 */
class Drupal7 extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the post status from Drupal v7.x numerics to WordPress's
     * strings.
     *
     * @param int $status Drupal v7.x numeric post status
     * @return string WordPress safe
     */
    public function callback_status($status = 1)
    {
    }
    /**
     * Translate the post status from Drupal v7.x numerics to WordPress's strings.
     *
     * @param int $status Drupal v7.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 2)
    {
    }
    /**
     * Translate the topic sticky status type from Drupal v7.x numerics to WordPress's strings.
     *
     * @param int $status Drupal v7.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count Drupal v7.x topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress XMB Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of XMB Forum converter.
 *
 * @since 2.5.0 bbPress (r5143)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/xmb
 */
class XMB extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from XMB v1.9.11.13 Capitalised case to WordPress's non-capatilise case strings.
     *
     * @param int $status XMB v1.9.11.13 numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 1)
    {
    }
    /**
     * Translate the post status from XMB v1.9.11.13 numerics to WordPress's strings.
     *
     * @param int $status XMB v1.9.11.13 numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = '')
    {
    }
    /**
     * Translate the topic sticky status type from XMB v1.9.11.13 numerics to WordPress's strings.
     *
     * @param int $status XMB v1.9.11.13 numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count XMB v1.9.11.13 topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress vBulletin 4.x Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of vBulletin v4.x Converter.
 *
 * @since 2.3.0 bbPress (r4724)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/vbulletin
 */
class vBulletin extends \BBP_Converter_Base
{
    /**
     * Main constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     *
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from vBulletin v4.x numerics to WordPress's strings.
     *
     * @param int $status vBulletin v4.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from vBulletin v4.x numerics to WordPress's strings.
     *
     * @param int $status vBulletin v4.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic reply count.
     *
     * @param int $count vBulletin v4.x reply count
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * Translate the post status from vBulletin numerics to WordPress's strings.
     *
     * @param int $status vBulletin v4.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 1)
    {
    }
    /**
     * This callback processes any custom parser.php attributes and custom code with preg_replace
     */
    protected function callback_html($field)
    {
    }
}
/**
 * bbPress vBulletin 3.x Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of vBulletin v3.x Converter.
 *
 * @since 2.5.0 bbPress (r5151)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/vbulletin
 */
class vBulletin3 extends \BBP_Converter_Base
{
    /**
     * Main constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     *
     * vBulletin passwords do not work. Maybe use the below plugin's approach?
     *
     * @link https://wordpress.org/extend/plugins/vb-user-copy/
     * @link https://plugins.trac.wordpress.org/browser/vb-user-copy/trunk/vb_user_copy.php
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from vBulletin v3.x numerics to WordPress's strings.
     *
     * @param int $status vBulletin v3.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from vBulletin v3.x numerics to WordPress's strings.
     *
     * @param int $status vBulletin v3.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic reply count.
     *
     * @param int $count vBulletin v3.x reply count
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * Translate the post status from vBulletin v3.x numerics to WordPress's strings.
     *
     * @param int $status vBulletin v3.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 1)
    {
    }
    /**
     * This callback processes any custom parser.php attributes and custom code with preg_replace
     */
    protected function callback_html($field)
    {
    }
}
/**
 * bbPress phpBB 3.x Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of phpBB v3 Converter.
 *
 * @since 2.3.0 bbPress (r4689)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/phpbb
 */
class phpBB extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * Check for correct password
     *
     * @param string $password The password in plain text
     * @param string $hash The stored password hash
     *
     * @link Original source for password functions http://openwall.com/phpass/
     * @link phpass is now included in WP Core https://core.trac.wordpress.org/browser/trunk/wp-includes/class-phpass.php
     *
     * @return bool Returns true if the password is correct, false if not.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * The crypt function/replacement
     */
    private function _hash_crypt_private($password, $setting, &$itoa64)
    {
    }
    /**
     * Encode hash
     */
    private function _hash_encode64($input, $count, &$itoa64)
    {
    }
    /**
     * Translate the forum type from phpBB v3.x numerics to WordPress's strings.
     *
     * @param int $status phpBB v3.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 1)
    {
    }
    /**
     * Translate the forum status from phpBB v3.x numerics to WordPress's strings.
     *
     * @param int $status phpBB v3.x numeric forum status
     * @return string WordPress safe
     */
    public function callback_forum_status($status = 0)
    {
    }
    /**
     * Translate the topic status from phpBB v3.x numerics to WordPress's strings.
     *
     * @param int $status phpBB v3.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from phpBB 3.x numerics to WordPress's strings.
     *
     * @param int $status phpBB 3.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic reply count.
     *
     * @param int $count phpBB v3.x reply count
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * This callback processes any custom parser.php attributes and custom code with preg_replace
     */
    protected function callback_html($field)
    {
    }
}
/**
 * bbPress SimplePress5 Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of SimplePress v5 converter.
 *
 * @since 2.3.0 bbPress (r4638)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/simplepress/
 */
class SimplePress5 extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together. That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the post status from Simple:Press v5.x numerics to WordPress's strings.
     *
     * @param int $status Simple:Press numeric status
     * @return string WordPress safe
     */
    public function callback_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from Simple:Press v5.x numerics to WordPress's strings.
     *
     * @param int $status Simple:Press v5.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic reply count.
     *
     * @param int $count Simple:Press v5.x reply count
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
    /**
     * This callback processes any custom parser.php attributes and custom HTML code with preg_replace
     */
    protected function callback_html($field)
    {
    }
}
/**
 * bbPress Kunena 3.x Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of Kunena v3.x Forums for Joomla Forum converter.
 *
 * @since 2.5.0 bbPress (r5144)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/kunena/
 */
class Kunena3 extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from Kunena v3.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v3.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the forum status from Kunena v3.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v3.x numeric forum status
     * @return string WordPress safe
     */
    public function callback_forum_status($status = 0)
    {
    }
    /**
     * Translate the post status from Kunena v3.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v3.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count Kunena v3.x topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress Kunena 2.x Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of Kunena v2.x Forums for Joomla Forum converter.
 *
 * @since 2.5.0 bbPress (r5144)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/kunena/
 */
class Kunena2 extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from Kunena v2.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v2.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the forum status from Kunena v2.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v2.x numeric forum status
     * @return string WordPress safe
     */
    public function callback_forum_status($status = 0)
    {
    }
    /**
     * Translate the post status from Kunena v2.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v2.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count Kunena v2.x topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress Kunena 1.x Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of Kunena v1.x Forums for Joomla Forum converter.
 *
 * @since 2.5.0 bbPress (r5144)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/kunena/
 */
class Kunena1 extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from Kunena v1.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v1.x numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the forum status from Kunena v1.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v1.x numeric forum status
     * @return string WordPress safe
     */
    public function callback_forum_status($status = 0)
    {
    }
    /**
     * Translate the post status from Kunena v1.x numerics to WordPress's strings.
     *
     * @param int $status Kunena v1.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
}
/**
 * bbPress Phorum Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of Phorum Forum converter.
 *
 * @since 2.5.0 bbPress (r5141)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/phorum
 */
class Phorum extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the forum type from Phorum v5.2.19 numerics to WordPress's strings.
     *
     * @param int $status Phorum v5.2.19 numeric forum type
     * @return string WordPress safe
     */
    public function callback_forum_type($status = 0)
    {
    }
    /**
     * Translate the post status from Phorum v5.2.19 numerics to WordPress's strings.
     *
     * @param int $status Phorum v5.2.19 numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count Phorum v5.2.19 topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress MyBB Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of MyBB Forum converter.
 *
 * @since 2.5.0 bbPress (r5140)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/mybb
 */
class MyBB extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the post status from MyBB v1.6.10 numerics to WordPress's strings.
     *
     * @param int $status MyBB v1.6.10 numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from MyBB v1.6.10 numerics to WordPress's strings.
     *
     * @param int $status MyBB v1.6.10 numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
    /**
     * Verify the topic/reply count.
     *
     * @param int $count MyBB v1.6.10 topic/reply counts
     * @return string WordPress safe
     */
    public function callback_topic_reply_count($count = 1)
    {
    }
}
/**
 * bbPress Mingle Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Implementation of Mingle Forums converter.
 *
 * @since 2.3.0 bbPress (r4691)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/mingle
 */
class Mingle extends \BBP_Converter_Base
{
    /**
     * Main constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together. That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
    /**
     * Translate the topic status from Mingle numerics to WordPress's strings.
     *
     * @param int $status Mingle v1.x numeric topic status
     * @return string WordPress safe
     */
    public function callback_topic_status($status = 0)
    {
    }
    /**
     * Translate the topic sticky status type from Mingle numerics to WordPress's strings.
     *
     * @param int $status Mingle numeric forum type
     * @return string WordPress safe
     */
    public function callback_sticky_status($status = 0)
    {
    }
}
/**
 * bbPress Example Converter
 *
 * @package bbPress
 * @subpackage Converters
 */
/**
 * Example converter base impoprter template for bbPress
 *
 * @since 2.3.0 bbPress (r4689)
 *
 * @link Codex Docs https://codex.bbpress.org/import-forums/custom-import
 */
class Example extends \BBP_Converter_Base
{
    /**
     * Main Constructor
     */
    public function __construct()
    {
    }
    /**
     * Sets up the field mappings
     */
    public function setup_globals()
    {
    }
    /**
     * This method allows us to indicates what is or is not converted for each
     * converter.
     */
    public function info()
    {
    }
    /**
     * This method is to save the salt and password together.  That
     * way when we authenticate it we can get it out of the database
     * as one value. Array values are auto sanitized by WordPress.
     */
    public function callback_savepass($field, $row)
    {
    }
    /**
     * This method is to take the pass out of the database and compare
     * to a pass the user has typed in.
     */
    public function authenticate_pass($password, $serialized_pass)
    {
    }
}
/**
 * Loads bbPress forums admin area
 *
 * @package bbPress
 * @subpackage Administration
 * @since 2.0.0 bbPress (r2464)
 */
class BBP_Forums_Admin
{
    /** Variables *************************************************************/
    /**
     * @var string The post type of this admin component
     */
    private $post_type = '';
    /** Functions *************************************************************/
    /**
     * The main bbPress forums admin loader
     *
     * @since 2.0.0 bbPress (r2515)
     */
    public function __construct()
    {
    }
    /**
     * Setup the admin hooks, actions and filters
     *
     * @since 2.0.0 bbPress (r2646)
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Admin globals
     *
     * @since 2.0.0 bbPress (r2646)
     *
     * @access private
     */
    private function setup_globals()
    {
    }
    /** Contextual Help *******************************************************/
    /**
     * Contextual help for bbPress forum edit page
     *
     * @since 2.0.0 bbPress (r3119)
     */
    public function edit_help()
    {
    }
    /**
     * Contextual help for bbPress forum edit page
     *
     * @since 2.0.0 bbPress (r3119)
     */
    public function new_help()
    {
    }
    /**
     * Add the forum attributes meta-box
     *
     * @since 2.0.0 bbPress (r2746)
     */
    public function attributes_metabox()
    {
    }
    /**
     * Add the forum moderators meta-box
     *
     * @since 2.6.0 bbPress
     */
    public function moderators_metabox()
    {
    }
    /**
     * Add the subscriptions meta-box
     *
     * Allows viewing of users who have subscribed to a forum.
     *
     * @since 2.6.0 bbPress (r6197)
     */
    public function subscriptions_metabox()
    {
    }
    /**
     * Remove comments & discussion meta-boxes if comments are not supported
     *
     * @since 2.6.0 bbPress (r6186)
     */
    public function comments_metabox()
    {
    }
    /**
     * Pass the forum attributes for processing
     *
     * @since 2.0.0 bbPress (r2746)
     *
     * @param int $forum_id Forum id
     * @return int Forum id
     */
    public function save_meta_boxes($forum_id)
    {
    }
    /**
     * Toggle forum
     *
     * Handles the admin-side opening/closing of forums
     *
     * @since 2.6.0 bbPress (r5254)
     */
    public function toggle_forum()
    {
    }
    /**
     * Toggle forum notices
     *
     * Display the success/error notices from
     * {@link BBP_Admin::toggle_forum()}
     *
     * @since 2.6.0 bbPress (r5254)
     */
    public function toggle_forum_notice()
    {
    }
    /**
     * Returns an array of keys used to sort row actions
     *
     * @since 2.6.0 bbPress (r6771)
     *
     * @return array
     */
    private function get_row_action_sort_order()
    {
    }
    /**
     * Returns an array of notice toggles
     *
     * @since 2.6.0 bbPress (r6396)
     *
     * @return array
     */
    private function get_allowed_notice_toggles()
    {
    }
    /**
     * Returns an array of notice toggles
     *
     * @since 2.6.0 bbPress (r6396)
     *
     * @return array
     */
    private function get_allowed_action_toggles()
    {
    }
    /**
     * Manage the column headers for the forums page
     *
     * @since 2.0.0 bbPress (r2485)
     *
     * @param array $columns The columns
     *
     * @return array $columns bbPress forum columns
     */
    public function column_headers($columns)
    {
    }
    /**
     * Print extra columns for the forums page
     *
     * @since 2.0.0 bbPress (r2485)
     *
     * @param string $column Column
     * @param int $forum_id Forum id
     */
    public function column_data($column, $forum_id)
    {
    }
    /**
     * Forum Row actions
     *
     * Remove the quick-edit action link and display the description under
     * the forum title and add the open/close links
     *
     * @since 2.0.0 bbPress (r2577)
     *
     * @param array  $actions Actions
     * @param object $forum   Forum object
     *
     * @return array $actions Actions
     */
    public function row_actions($actions = array(), $forum = \false)
    {
    }
    /**
     * Sort row actions by key
     *
     * @since 2.6.0
     *
     * @param array $actions
     *
     * @return array
     */
    private function sort_row_actions($actions = array())
    {
    }
    /**
     * Custom user feedback messages for forum post type
     *
     * @since 2.0.0 bbPress (r3080)
     *
     * @global int $post_ID
     *
     * @param array $messages
     *
     * @return array
     */
    public function updated_messages($messages)
    {
    }
}
/**
 * Loads bbPress users admin area
 *
 * @package bbPress
 * @subpackage Administration
 * @since 2.0.0 bbPress (r2464)
 */
class BBP_Users_Admin
{
    /**
     * The bbPress users admin loader
     *
     * @since 2.0.0 bbPress (r2515)
     */
    public function __construct()
    {
    }
    /**
     * Setup the admin hooks, actions and filters
     *
     * @since 2.0.0 bbPress (r2646)
     *
     * @access private
     */
    function setup_actions()
    {
    }
    /**
     * Default interface for setting a forum role
     *
     * @since 2.2.0 bbPress (r4285)
     *
     * @param WP_User $profileuser User data
     * @return bool Always false
     */
    public static function secondary_role_display($profileuser)
    {
    }
    /**
     * Add bulk forums role dropdown to the WordPress users table
     *
     * @since 2.2.0 bbPress (r4360)
     * @since 2.6.0 bbPress (r6055) Introduced the `$which` parameter.
     *
     * @param string $which The location of the extra table nav markup: 'top' or 'bottom'.
     */
    public static function user_role_bulk_dropdown($which)
    {
    }
    /**
     * Process bulk dropdown form submission from the WordPress Users
     * Table
     *
     * @since 2.2.0 bbPress (r4365)
     *
     * @return bool Always false
     */
    public function user_role_bulk_change()
    {
    }
    /**
     * Add a "View" link for each user
     *
     * @since 2.6.0 bbPress (r6502)
     *
     * @param array   $actions
     * @param WP_User $user
     *
     * @return array Actions with 'view' link added to them
     */
    public function user_row_actions($actions = array(), $user = \false)
    {
    }
    /**
     * Add Forum Role column to the WordPress Users table, and change the
     * core role title to "Site Role"
     *
     * @since 2.2.0 bbPress (r4337)
     *
     * @param array $columns Users table columns
     * @return array $columns
     */
    public static function user_role_column($columns = array())
    {
    }
    /**
     * Return user's forums role for display in the WordPress Users list table
     *
     * @since 2.2.0 bbPress (r4337)
     *
     * @param string $retval
     * @param string $column_name
     * @param int $user_id
     *
     * @return string Displayable bbPress user role
     */
    public static function user_role_row($retval = '', $column_name = '', $user_id = 0)
    {
    }
    /**
     * Filter the list of roles included in the WordPress site role list
     *
     * Ensures forum roles are only displayed under the Forum Role list in the
     * WordPress Users list table
     *
     * @since 2.6.0 bbPress (r6051)
     *
     * @return array $roles
     */
    public static function user_role_list_filter($roles, $user)
    {
    }
}
/**
 * bbPress Shortcode Class
 *
 * @since 2.0.0 bbPress (r3031)
 */
class BBP_Shortcodes
{
    /** Vars ******************************************************************/
    /**
     * @var array Shortcode => function
     */
    public $codes = array();
    /** Functions *************************************************************/
    /**
     * Add the register_shortcodes action to bbp_init
     *
     * @since 2.0.0 bbPress (r3031)
     *
     */
    public function __construct()
    {
    }
    /**
     * Shortcode globals
     *
     * @since 2.0.0 bbPress (r3143)
     *
     * @access private
     */
    private function setup_globals()
    {
    }
    /**
     * Register the bbPress shortcodes
     *
     * @since 2.0.0 bbPress (r3031)
     */
    private function add_shortcodes()
    {
    }
    /**
     * Unset some globals in the $bbp object that hold query related info
     *
     * @since 2.0.0 bbPress (r3034)
     */
    private function unset_globals()
    {
    }
    /** Output Buffers ********************************************************/
    /**
     * Start an output buffer.
     *
     * This is used to put the contents of the shortcode into a variable rather
     * than outputting the HTML at run-time. This allows shortcodes to appear
     * in the correct location in the_content() instead of when it's created.
     *
     * @since 2.0.0 bbPress (r3079)
     *
     * @param string $query_name
     */
    private function start($query_name = '')
    {
    }
    /**
     * Return the contents of the output buffer and flush its contents.
     *
     * @since 2.0.0 bbPress (r3079)
     *
     * @return string Contents of output buffer.
     */
    private function end()
    {
    }
    /** Forum shortcodes ******************************************************/
    /**
     * Display an index of all visible root level forums in an output buffer
     * and return to ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3031)
     *
     * @return string
     */
    public function display_forum_index()
    {
    }
    /**
     * Display the contents of a specific forum ID in an output buffer
     * and return to ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3031)
     *
     * @param array $attr
     * @param string $content
     * @return string
     */
    public function display_forum($attr, $content = '')
    {
    }
    /**
     * Display the forum form in an output buffer and return to ensure
     * post/page contents are displayed first.
     *
     * @since 2.1.0 bbPress (r3566)
     */
    public function display_forum_form()
    {
    }
    /** Topic shortcodes ******************************************************/
    /**
     * Display an index of all visible root level topics in an output buffer
     * and return to ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3031)
     *
     * @return string
     */
    public function display_topic_index()
    {
    }
    /**
     * Display the contents of a specific topic ID in an output buffer
     * and return to ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3031)
     *
     * @param array $attr
     * @param string $content
     * @return string
     */
    public function display_topic($attr, $content = '')
    {
    }
    /**
     * Display the topic form in an output buffer and return to ensure
     * post/page contents are displayed first.
     *
     * Supports 'forum_id' attribute to display the topic form for a particular
     * forum. This currently has styling issues from not being wrapped in
     * <div id="bbpress-forums" class="bbpress-wrapper"></div> which will need to be sorted out later.
     *
     * @since 2.0.0 bbPress (r3031)
     *
     * @param array $attr
     * @param string $content
     * @return string
     */
    public function display_topic_form($attr = array(), $content = '')
    {
    }
    /** Replies ***************************************************************/
    /**
     * Display the contents of a specific reply ID in an output buffer
     * and return to ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3031)
     *
     * @param array $attr
     * @param string $content
     * @return string
     */
    public function display_reply($attr, $content = '')
    {
    }
    /**
     * Display the reply form in an output buffer and return to ensure
     * post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3031)
     */
    public function display_reply_form()
    {
    }
    /** Topic Tags ************************************************************/
    /**
     * Display a tag cloud of all topic tags in an output buffer and return to
     * ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3110)
     *
     * @return string
     */
    public function display_topic_tags()
    {
    }
    /**
     * Display the contents of a specific topic tag in an output buffer
     * and return to ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3110)
     *
     * @param array $attr
     * @param string $content
     * @return string
     */
    public function display_topics_of_tag($attr, $content = '')
    {
    }
    /**
     * Display the contents of a specific topic tag in an output buffer
     * and return to ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3346)
     *
     * @return string
     */
    public function display_topic_tag_form()
    {
    }
    /** Views *****************************************************************/
    /**
     * Display the contents of a specific view in an output buffer and return to
     * ensure that post/page contents are displayed first.
     *
     * @since 2.0.0 bbPress (r3031)
     *
     * @param array $attr
     * @param string $content
     * @return string
     */
    public function display_view($attr, $content = '')
    {
    }
    /** Search ****************************************************************/
    /**
     * Display the search form in an output buffer and return to ensure
     * post/page contents are displayed first.
     *
     * @since 2.3.0 bbPress (r4585)
     */
    public function display_search_form()
    {
    }
    /**
     * Display the contents of search results in an output buffer and return to
     * ensure that post/page contents are displayed first.
     *
     * @since 2.3.0 bbPress (r4579)
     *
     * @param array $attr
     * @param string $content
     */
    public function display_search($attr, $content = '')
    {
    }
    /** Account ***************************************************************/
    /**
     * Display a login form
     *
     * @since 2.0.0 bbPress (r3302)
     *
     * @return string
     */
    public function display_login()
    {
    }
    /**
     * Display a register form
     *
     * @since 2.0.0 bbPress (r3302)
     *
     * @return string
     */
    public function display_register()
    {
    }
    /**
     * Display a lost password form
     *
     * @since 2.0.0 bbPress (r3302)
     *
     * @return string
     */
    public function display_lost_pass()
    {
    }
    /** Other *****************************************************************/
    /**
     * Display forum statistics
     *
     * @since 2.3.0 bbPress (r4509)
     *
     * @return string
     */
    public function display_stats()
    {
    }
    /**
     * Display a breadcrumb
     *
     * @since 2.0.0 bbPress (r3302)
     *
     * @return string
     */
    public function display_breadcrumb()
    {
    }
    /** Query Filters *********************************************************/
    /**
     * Filter the query for the topic index
     *
     * @since 2.1.0 bbPress (r3637)
     *
     * @param array $args
     * @return array
     */
    public function display_topic_index_query($args = array())
    {
    }
    /**
     * Filter the query for topic tags
     *
     * @since 2.1.0 bbPress (r3637)
     *
     * @param array $args
     * @return array
     */
    public function display_topics_of_tag_query($args = array())
    {
    }
}
/**
 * bbPress Login Widget
 *
 * Adds a widget which displays the login form
 *
 * @since 2.0.0 bbPress (r2827)
 */
class BBP_Login_Widget extends \WP_Widget
{
    /**
     * bbPress Login Widget
     *
     * Registers the login widget
     *
     * @since 2.0.0 bbPress (r2827)
     */
    public function __construct()
    {
    }
    /**
     * Register the widget
     *
     * @since 2.0.0 bbPress (r3389)
     */
    public static function register_widget()
    {
    }
    /**
     * Displays the output, the login form
     *
     * @since 2.0.0 bbPress (r2827)
     *
     * @param array $args Arguments
     * @param array $instance Instance
     */
    public function widget($args = array(), $instance = array())
    {
    }
    /**
     * Update the login widget options
     *
     * @since 2.0.0 bbPress (r2827)
     *
     * @param array $new_instance The new instance options
     * @param array $old_instance The old instance options
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Output the login widget options form
     *
     * @since 2.0.0 bbPress (r2827)
     *
     * @param $instance Instance
     */
    public function form($instance = array())
    {
    }
    /**
     * Merge the widget settings into defaults array.
     *
     * @since 2.3.0 bbPress (r4802)
     *
     * @param $instance Instance
     */
    public function parse_settings($instance = array())
    {
    }
}
/**
 * bbPress Views Widget
 *
 * Adds a widget which displays the view list
 *
 * @since 2.0.0 bbPress (r3020)
 */
class BBP_Views_Widget extends \WP_Widget
{
    /**
     * bbPress View Widget
     *
     * Registers the view widget
     *
     * @since 2.0.0 bbPress (r3020)
     */
    public function __construct()
    {
    }
    /**
     * Register the widget
     *
     * @since 2.0.0 bbPress (r3389)
     */
    public static function register_widget()
    {
    }
    /**
     * Displays the output, the view list
     *
     * @since 2.0.0 bbPress (r3020)
     *
     * @param array $args Arguments
     * @param array $instance Instance
     */
    public function widget($args = array(), $instance = array())
    {
    }
    /**
     * Update the view widget options
     *
     * @since 2.0.0 bbPress (r3020)
     *
     * @param array $new_instance The new instance options
     * @param array $old_instance The old instance options
     */
    public function update($new_instance = array(), $old_instance = array())
    {
    }
    /**
     * Output the view widget options form
     *
     * @since 2.0.0 bbPress (r3020)
     *
     * @param $instance Instance
     */
    public function form($instance = array())
    {
    }
    /**
     * Merge the widget settings into defaults array.
     *
     * @since 2.3.0 bbPress (r4802)
     *
     * @param $instance Instance
     */
    public function parse_settings($instance = array())
    {
    }
}
/**
 * bbPress Search Widget
 *
 * Adds a widget which displays the forum search form
 *
 * @since 2.3.0 bbPress (r4579)
 */
class BBP_Search_Widget extends \WP_Widget
{
    /**
     * bbPress Search Widget
     *
     * Registers the search widget
     *
     * @since 2.3.0 bbPress (r4579)
     */
    public function __construct()
    {
    }
    /**
     * Register the widget
     *
     * @since 2.3.0 bbPress (r4579)
     */
    public static function register_widget()
    {
    }
    /**
     * Displays the output, the search form
     *
     * @since 2.3.0 bbPress (r4579)
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Update the widget options
     *
     * @since 2.3.0 bbPress (r4579)
     *
     * @param array $new_instance The new instance options
     * @param array $old_instance The old instance options
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Output the search widget options form
     *
     * @since 2.3.0 bbPress (r4579)
     *
     * @param $instance Instance
     */
    public function form($instance)
    {
    }
    /**
     * Merge the widget settings into defaults array.
     *
     * @since 2.3.0 bbPress (r4802)
     *
     * @param $instance Instance
     */
    public function parse_settings($instance = array())
    {
    }
}
/**
 * bbPress Forum Widget
 *
 * Adds a widget which displays the forum list
 *
 * @since 2.0.0 bbPress (r2653)
 */
class BBP_Forums_Widget extends \WP_Widget
{
    /**
     * bbPress Forum Widget
     *
     * Registers the forum widget
     *
     * @since 2.0.0 bbPress (r2653)
     */
    public function __construct()
    {
    }
    /**
     * Register the widget
     *
     * @since 2.0.0 bbPress (r3389)
     */
    public static function register_widget()
    {
    }
    /**
     * Displays the output, the forum list
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param array $args Arguments
     * @param array $instance Instance
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Update the forum widget options
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param array $new_instance The new instance options
     * @param array $old_instance The old instance options
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Output the forum widget options form
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param $instance Instance
     */
    public function form($instance)
    {
    }
    /**
     * Merge the widget settings into defaults array.
     *
     * @since 2.3.0 bbPress (r4802)
     *
     * @param $instance Instance
     */
    public function parse_settings($instance = array())
    {
    }
}
/**
 * bbPress Topic Widget
 *
 * Adds a widget which displays the topic list
 *
 * @since 2.0.0 bbPress (r2653)
 */
class BBP_Topics_Widget extends \WP_Widget
{
    /**
     * bbPress Topic Widget
     *
     * Registers the topic widget
     *
     * @since 2.0.0 bbPress (r2653)
     */
    public function __construct()
    {
    }
    /**
     * Register the widget
     *
     * @since 2.0.0 bbPress (r3389)
     */
    public static function register_widget()
    {
    }
    /**
     * Displays the output, the topic list
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args = array(), $instance = array())
    {
    }
    /**
     * Update the topic widget options
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param array $new_instance The new instance options
     * @param array $old_instance The old instance options
     */
    public function update($new_instance = array(), $old_instance = array())
    {
    }
    /**
     * Output the topic widget options form
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param $instance Instance
     */
    public function form($instance = array())
    {
    }
    /**
     * Merge the widget settings into defaults array.
     *
     * @since 2.3.0 bbPress (r4802)
     *
     * @param $instance Instance
     */
    public function parse_settings($instance = array())
    {
    }
}
/**
 * bbPress Statistics Widget
 *
 * Adds a widget which displays the forum statistics
 *
 * @since 2.3.0 bbPress (r4509)
 */
class BBP_Stats_Widget extends \WP_Widget
{
    /**
     * bbPress Statistics Widget
     *
     * Registers the statistics widget
     *
     * @since 2.3.0 bbPress (r4509)
     */
    public function __construct()
    {
    }
    /**
     * Register the widget
     *
     * @since 2.3.0 bbPress (r4509)
     */
    public static function register_widget()
    {
    }
    /**
     * Displays the output, the statistics
     *
     * @since 2.3.0 bbPress (r4509)
     *
     * @param array $args     Arguments
     * @param array $instance Instance
     */
    public function widget($args = array(), $instance = array())
    {
    }
    /**
     * Update the statistics widget options
     *
     * @since 2.3.0 bbPress (r4509)
     *
     * @param array $new_instance The new instance options
     * @param array $old_instance The old instance options
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Output the statistics widget options form
     *
     * @since 2.3.0 bbPress (r4509)
     *
     * @param $instance
     *
     * @return string|void
     */
    public function form($instance)
    {
    }
    /**
     * Merge the widget settings into defaults array.
     *
     * @since 2.3.0 bbPress (r4802)
     *
     * @param $instance Instance
     */
    public function parse_settings($instance = array())
    {
    }
}
/**
 * bbPress Replies Widget
 *
 * Adds a widget which displays the replies list
 *
 * @since 2.0.0 bbPress (r2653)
 */
class BBP_Replies_Widget extends \WP_Widget
{
    /**
     * bbPress Replies Widget
     *
     * Registers the replies widget
     *
     * @since 2.0.0 bbPress (r2653)
     */
    public function __construct()
    {
    }
    /**
     * Register the widget
     *
     * @since 2.0.0 bbPress (r3389)
     */
    public static function register_widget()
    {
    }
    /**
     * Displays the output, the replies list
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Update the reply widget options
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param array $new_instance The new instance options
     * @param array $old_instance The old instance options
     */
    public function update($new_instance = array(), $old_instance = array())
    {
    }
    /**
     * Output the reply widget options form
     *
     * @since 2.0.0 bbPress (r2653)
     *
     * @param $instance Instance
     */
    public function form($instance = array())
    {
    }
    /**
     * Merge the widget settings into defaults array.
     *
     * @since 2.3.0 bbPress (r4802)
     *
     * @param $instance Instance
     */
    public function parse_settings($instance = array())
    {
    }
}
/**
 * Base strategy class for interfacing with User Engagements, which other
 * classes will extend.
 *
 * @since 2.6.0 bbPress (r6722)
 */
class BBP_User_Engagements_Base
{
    /**
     * Type of strategy being used.
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @var string
     */
    public $type = '';
    /**
     * Add a user id to an object
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     * @param bool   $unique    Whether meta key should be unique to the object
     *
     * @return bool Returns true on success, false on failure
     */
    public function add_user_to_object($object_id = 0, $user_id = 0, $meta_key = '', $meta_type = 'post', $unique = \false)
    {
    }
    /**
     * Remove a user id from an object
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_user_from_object($object_id = 0, $user_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove a user id from all objects
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_user_from_all_objects($user_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove an object from all users
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_object_from_all_users($object_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove all users from all objects
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_all_users_from_all_objects($meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Get users of an object
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $object_id The object id
     * @param string $meta_key  The key used to index this relationship
     * @param string $meta_type The type of meta to look in
     *
     * @return array Returns ids of users
     */
    public function get_users_for_object($object_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Get the part of the query responsible for JOINing objects to relationships.
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param array  $args
     * @param string $meta_key
     * @param string $meta_type
     *
     * @return array
     */
    public function get_query($args = array(), $context_key = '', $meta_key = '', $meta_type = 'post')
    {
    }
}
/**
 * Meta strategy for interfacing with User Engagements
 *
 * @since 2.6.0 bbPress (r6722)
 */
class BBP_User_Engagements_Meta extends \BBP_User_Engagements_Base
{
    /**
     * Type of strategy being used.
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @var string
     */
    public $type = 'meta';
    /**
     * Add a user id to an object
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     * @param bool   $unique    Whether meta key should be unique to the object
     *
     * @return bool Returns true on success, false on failure
     */
    public function add_user_to_object($object_id = 0, $user_id = 0, $meta_key = '', $meta_type = 'post', $unique = \false)
    {
    }
    /**
     * Remove a user id from an object
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_user_from_object($object_id = 0, $user_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove a user id from all objects
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_user_from_all_objects($user_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove an object from all users
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_object_from_all_users($object_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove all users from all objects
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_all_users_from_all_objects($meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Get users of an object
     *
     * @since 2.6.0 bbPress (r6722)
     *
     * @param int    $object_id The object id
     * @param string $meta_key  The key used to index this relationship
     * @param string $meta_type The type of meta to look in
     *
     * @return array Returns ids of users
     */
    public function get_users_for_object($object_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Get the part of the query responsible for JOINing objects to relationships.
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param array  $args
     * @param string $meta_key
     * @param string $meta_type
     *
     * @return array
     */
    public function get_query($args = array(), $context_key = '', $meta_key = '', $meta_type = 'post')
    {
    }
}
/**
 * Term strategy for interfacing with User Engagements
 *
 * @since 2.6.0 bbPress (r6737)
 */
class BBP_User_Engagements_Term extends \BBP_User_Engagements_Base
{
    /**
     * Type of strategy being used.
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @var string
     */
    public $type = 'term';
    /**
     * Register an engagement taxonomy just-in-time for immediate use
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param string $tax_key
     * @param string $object_type
     */
    private function jit_taxonomy($tax_key = '', $object_type = 'user')
    {
    }
    /**
     * Add a user id to an object
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     * @param bool   $unique    Whether meta key should be unique to the object
     *
     * @return bool Returns true on success, false on failure
     */
    public function add_user_to_object($object_id = 0, $user_id = 0, $meta_key = '', $meta_type = 'post', $unique = \false)
    {
    }
    /**
     * Remove a user id from an object
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_user_from_object($object_id = 0, $user_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove a user id from all objects
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_user_from_all_objects($user_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove an object from all users
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_object_from_all_users($object_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove all users from all objects
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_all_users_from_all_objects($meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Get users of an object
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param int    $object_id The object id
     * @param string $meta_key  The key used to index this relationship
     * @param string $meta_type The type of meta to look in
     *
     * @return array Returns ids of users
     */
    public function get_users_for_object($object_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Get the part of the query responsible for JOINing objects to relationships.
     *
     * @since 2.6.0 bbPress (r6737)
     *
     * @param array  $args
     * @param string $meta_key
     * @param string $meta_type
     *
     * @return array
     */
    public function get_query($args = array(), $context_key = '', $meta_key = '', $meta_type = 'post')
    {
    }
}
/**
 * User strategy for interfacing with User Engagements
 *
 * This strategy largely exists for backwards compatibility with bbPress 2.5,
 * or installations that have not upgraded their databases to 2.6 or above.
 *
 * Note: this strategy is going to be a bit less tidy than the others, because
 * it needs to do weird things to maintain the 2.5 status-quo. Do not use this
 * strategy as an example when building your own.
 *
 * @since 2.6.0 bbPress (r6844)
 */
class BBP_User_Engagements_User extends \BBP_User_Engagements_Base
{
    /**
     * Type of strategy being used.
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @var string
     */
    public $type = 'user';
    /**
     * Private function to map 2.6 meta keys to 2.5 user-option keys.
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param string $meta_key
     * @param int    $object_id
     * @param bool   $prefix
     *
     * @return string
     */
    private function get_user_option_key($meta_key = '', $object_id = 0, $prefix = \false)
    {
    }
    /**
     * Private function to get a 2.5 compatible cache key.
     *
     * This method exists to provide backwards compatibility with bbPress 2.5,
     * which had caching surrounding the FIND_IN_SET usermeta queries.
     *
     * @since 2.6.3 bbPress (r6991)
     *
     * @param string $meta_key
     * @param int    $object_id
     *
     * @return string
     */
    private function get_cache_key($meta_key = '', $object_id = 0)
    {
    }
    /**
     * Get the user engagement cache for a given meta key and object ID.
     *
     * This method exists to provide backwards compatibility with bbPress 2.5,
     * which had caching surrounding the FIND_IN_SET queries in usermeta.
     *
     * @since 2.6.3 bbPress (r6991)
     *
     * @param string $meta_key
     * @param int    $object_id
     *
     * @return mixed Results from cache get
     */
    private function cache_get($meta_key = '', $object_id = 0)
    {
    }
    /**
     * Set the user engagement cache for a given meta key and object ID.
     *
     * This method exists to provide backwards compatibility with bbPress 2.5,
     * which had caching surrounding the FIND_IN_SET queries in usermeta.
     *
     * @since 2.6.3 bbPress (r6991)
     *
     * @param string $meta_key
     * @param int    $object_id
     *
     * @return mixed Results from cache set
     */
    private function cache_set($meta_key = '', $object_id = 0, $user_ids = array())
    {
    }
    /**
     * Delete the user engagement cache for a given meta key and object ID.
     *
     * This method exists to provide backwards compatibility with bbPress 2.5,
     * which had caching surrounding the FIND_IN_SET queries in usermeta.
     *
     * @since 2.6.3 bbPress (r6991)
     *
     * @param string $meta_key
     * @param int    $object_id
     *
     * @return mixed Results from cache delete
     */
    private function cache_delete($meta_key = '', $object_id = 0)
    {
    }
    /**
     * Turn a comma-separated string into an array of integers
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param string $results
     * @return array
     */
    private function parse_comma_list($results = '')
    {
    }
    /**
     * Add a user id to an object
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     * @param bool   $unique    Whether meta key should be unique to the object
     *
     * @return bool Returns true on success, false on failure
     */
    public function add_user_to_object($object_id = 0, $user_id = 0, $meta_key = '', $meta_type = 'post', $unique = \false)
    {
    }
    /**
     * Remove a user id from an object
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_user_from_object($object_id = 0, $user_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove a user id from all objects
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_user_from_all_objects($user_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove an object from all users
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param int    $object_id The object id
     * @param int    $user_id   The user id
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_object_from_all_users($object_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Remove all users from all objects
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param string $meta_key  The relationship key
     * @param string $meta_type The relationship type (usually 'post')
     *
     * @return bool Returns true on success, false on failure
     */
    public function remove_all_users_from_all_objects($meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Get users of an object
     *
     * The database queries in this function were cached in bbPress versions
     * older than 2.6, but no longer are to avoid cache pollution.
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param int    $object_id The object id
     * @param string $meta_key  The key used to index this relationship
     * @param string $meta_type The type of meta to look in
     *
     * @return array Returns ids of users
     */
    public function get_users_for_object($object_id = 0, $meta_key = '', $meta_type = 'post')
    {
    }
    /**
     * Get the part of the query responsible for JOINing objects to relationships.
     *
     * @since 2.6.0 bbPress (r6844)
     *
     * @param array  $args
     * @param string $meta_key
     * @param string $meta_type
     *
     * @return array
     */
    public function get_query($args = array(), $context_key = '', $meta_key = '', $meta_type = 'post')
    {
    }
}
/**
 * bbPress Component Class
 *
 * The bbPress component class is responsible for simplifying the creation
 * of components that share similar behaviors and routines. It is used
 * internally by bbPress to create forums, topics and replies, but can be
 * extended to create other really neat things.
 *
 * @package bbPress
 * @subpackage Classes
 *
 * @since 2.0.0 bbPress (r2688)
 */
class BBP_Component
{
    /**
     * @var string Unique name (for internal identification)
     * @internal
     */
    var $name;
    /**
     * @var Unique ID (normally for custom post type)
     */
    var $id;
    /**
     * @var string Unique slug (used in query string and permalinks)
     */
    var $slug;
    /**
     * @var WP_Query The loop for this component
     */
    var $query;
    /**
     * @var string The current ID of the queried object
     */
    var $current_id;
    /** Methods ***************************************************************/
    /**
     * bbPress Component loader
     *
     * @since 2.0.0 bbPress (r2700)
     *
     * @param array $args Required. Supports these args:
     *  - name: Unique name (for internal identification)
     *  - id: Unique ID (normally for custom post type)
     *  - slug: Unique slug (used in query string and permalinks)
     *  - query: The loop for this component (WP_Query)
     *  - current_id: The current ID of the queried object
     */
    public function __construct($args = array())
    {
    }
    /**
     * Component global variables
     *
     * @since 2.0.0 bbPress (r2700)
     *
     * @access private
     */
    private function setup_globals($args = array())
    {
    }
    /**
     * Include required files
     *
     * @since 2.0.0 bbPress (r2700)
     *
     * @access private
     */
    private function includes()
    {
    }
    /**
     * Setup the actions
     *
     * @since 2.0.0 bbPress (r2700)
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Setup the component post types
     *
     * @since 2.0.0 bbPress (r2700)
     */
    public function register_post_types()
    {
    }
    /**
     * Register component specific taxonomies
     *
     * @since 2.0.0 bbPress (r2700)
     */
    public function register_taxonomies()
    {
    }
    /**
     * Add any additional rewrite tags
     *
     * @since 2.0.0 bbPress (r2700)
     */
    public function add_rewrite_tags()
    {
    }
    /**
     * Generate any additional rewrite rules
     *
     * @since 2.0.0 bbPress (r2700)
     */
    public function generate_rewrite_rules($wp_rewrite)
    {
    }
}
/**
 * Create HTML dropdown list of bbPress forums/topics.
 *
 * @package bbPress
 * @subpackage Classes
 *
 * @since 2.0.0 bbPress (r2746)
 */
class BBP_Walker_Dropdown extends \Walker
{
    /**
     * @see Walker::$tree_type
     *
     * @since 2.0.0 bbPress (r2746)
     *
     * @var string
     */
    public $tree_type = 'forum';
    /**
     * @see Walker::$db_fields
     *
     * @since 2.0.0 bbPress (r2746)
     *
     * @var array
     */
    public $db_fields = array('parent' => 'post_parent', 'id' => 'ID');
    /** Methods ***************************************************************/
    /**
     * Set the tree_type
     *
     * @since 2.0.0 bbPress (r2746)
     */
    public function __construct()
    {
    }
    /**
     * @see Walker::start_el()
     *
     * @since 2.0.0 bbPress (r2746)
     *
     * @param string $output Passed by reference. Used to append additional
     *                       content.
     * @param object $object Post data object.
     * @param int    $depth  Depth of post in reference to parent posts. Used
     *                       for padding.
     * @param array  $args   Uses 'selected' argument for selected post to set
     *                       selected HTML attribute for option element.
     * @param int    $current_object_id
     */
    public function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
}
/**
 * Create hierarchical list of bbPress replies.
 *
 * @package bbPress
 * @subpackage Classes
 *
 * @since 2.4.0 bbPress (r4944)
 */
class BBP_Walker_Reply extends \Walker
{
    /**
     * @see Walker::$tree_type
     *
     * @since 2.4.0 bbPress (r4944)
     *
     * @var string
     */
    public $tree_type = 'reply';
    /**
     * @see Walker::$db_fields
     *
     * @since 2.4.0 bbPress (r4944)
     *
     * @var array
     */
    public $db_fields = array('parent' => 'reply_to', 'id' => 'ID');
    /**
     * Confirm the tree_type
     *
     * @since 2.6.0 bbPress (r5389)
     */
    public function __construct()
    {
    }
    /**
     * @see Walker::start_lvl()
     *
     * @since 2.4.0 bbPress (r4944)
     *
     * @param string $output Passed by reference. Used to append additional content
     * @param int $depth Depth of reply
     * @param array $args Uses 'style' argument for type of HTML list
     */
    public function start_lvl(&$output = '', $depth = 0, $args = array())
    {
    }
    /**
     * @see Walker::end_lvl()
     *
     * @since 2.4.0 bbPress (r4944)
     *
     * @param string $output Passed by reference. Used to append additional content
     * @param int $depth Depth of reply
     * @param array $args Will only append content if style argument value is 'ol' or 'ul'
     */
    public function end_lvl(&$output = '', $depth = 0, $args = array())
    {
    }
    /**
     * @since 2.4.0 bbPress (r4944)
     */
    public function display_element($element = \false, &$children_elements = array(), $max_depth = 0, $depth = 0, $args = array(), &$output = '')
    {
    }
    /**
     * @see Walker:start_el()
     *
     * @since 2.4.0 bbPress (r4944)
     */
    public function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * @since 2.4.0 bbPress (r4944)
     */
    public function end_el(&$output = '', $object = \false, $depth = 0, $args = array())
    {
    }
}
/**
 * Create HTML dropdown list of bbPress replies.
 *
 * @package bbPress
 * @subpackage Classes
 *
 * @since 2.6.0 bbPress (r5389)
 */
class BBP_Walker_Reply_Dropdown extends \Walker
{
    /**
     * @see Walker::$tree_type
     *
     * @since 2.6.0 bbPress (r5389)
     *
     * @var string
     */
    public $tree_type = 'reply';
    /**
     * @see Walker::$db_fields
     *
     * @since 2.6.0 bbPress (r5389)
     *
     * @var array
     */
    public $db_fields = array('parent' => 'reply_to', 'id' => 'ID');
    /** Methods ***************************************************************/
    /**
     * Confirm the tree_type
     *
     * @since 2.6.0 bbPress (r5389)
     */
    public function __construct()
    {
    }
    /**
     * @see Walker::start_el()
     *
     * @since 2.6.0 bbPress (r5389)
     *
     * @param string $output Passed by reference. Used to append additional
     *                       content.
     *
     * @param object $object Post data object.
     *
     * @param int    $depth  Depth of post in reference to parent posts. Used
     *                       for padding.
     *
     * @param array  $args   Uses 'selected' argument for selected post to set
     *                       selected HTML attribute for option element.
     *
     * @param int    $current_object_id Not Used
     */
    public function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
}
/** User Loop *****************************************************************/
/**
 * Extension of WP_User_Query to allow easy looping
 *
 * @since 2.6.0 bbPress (r6330)
 */
class BBP_User_Query extends \WP_User_Query
{
    /**
     * The amount of users for the current query.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     * @var int
     */
    public $user_count = 0;
    /**
     * Index of the current item in the loop.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     * @var int
     */
    public $current_user = -1;
    /**
     * Whether the loop has started and the caller is in the loop.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     * @var bool
     */
    public $in_the_loop = \false;
    /**
     * The current user.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     * @var WP_User
     */
    public $user;
    /**
     * PHP5 constructor.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     *
     * @param null|string|array $query Optional. The query variables.
     */
    public function __construct($query = \null)
    {
    }
    /**
     * Set up the next user and iterate current user index.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     *
     * @return WP_User Next user.
     */
    public function next_user()
    {
    }
    /**
     * Sets up the current user.
     *
     * Retrieves the next user, sets up the user, sets the 'in the loop'
     * property to true.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     *
     * @global WP_User $user
     */
    public function the_user()
    {
    }
    /**
     * Determines whether there are more users available in the loop.
     *
     * Calls the {@see 'loop_end'} action when the loop is complete.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     *
     * @return bool True if users are available, false if end of loop.
     */
    public function have_users()
    {
    }
    /**
     * Rewind the users and reset user index.
     *
     * @since 2.6.0 bbPress (r6330)
     * @access public
     */
    public function rewind_users()
    {
    }
}
/**
 * Loads bbPress Default Theme functionality
 *
 * This is not a real theme by WordPress standards, and is instead used as the
 * fallback for any WordPress theme that does not have bbPress templates in it.
 *
 * To make your custom theme bbPress compatible and customize the templates, you
 * can copy these files into your theme without needing to merge anything
 * together; bbPress should safely handle the rest.
 *
 * See @link BBP_Theme_Compat() for more.
 *
 * @since 2.1.0 bbPress (r3732)
 *
 * @package bbPress
 * @subpackage BBP_Theme_Compat
 */
class BBP_Default extends \BBP_Theme_Compat
{
    /** Functions *************************************************************/
    /**
     * The main bbPress (Default) Loader
     *
     * @since 2.1.0 bbPress (r3732)
     */
    public function __construct($properties = array())
    {
    }
    /**
     * Setup the theme hooks
     *
     * @since 2.1.0 bbPress (r3732)
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /**
     * Inserts HTML at the top of the main content area to be compatible with
     * the Twenty Twelve theme.
     *
     * @since 2.1.0 bbPress (r3732)
     */
    public function before_main_content()
    {
    }
    /**
     * Inserts HTML at the bottom of the main content area to be compatible with
     * the Twenty Twelve theme.
     *
     * @since 2.1.0 bbPress (r3732)
     */
    public function after_main_content()
    {
    }
    /**
     * Load the theme CSS
     *
     * @since 2.1.0 bbPress (r3732)
     */
    public function enqueue_styles()
    {
    }
    /**
     * Enqueue the required JavaScript files
     *
     * @since 2.1.0 bbPress (r3732)
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Load localizations for topic script
     *
     * These localizations require information that may not be loaded even by init.
     *
     * @since 2.1.0 bbPress (r3732)
     */
    public function localize_topic_script()
    {
    }
    /**
     * AJAX handler to add or remove a topic from a user's favorites
     *
     * @since 2.1.0 bbPress (r3732)
     */
    public function ajax_favorite()
    {
    }
    /**
     * AJAX handler to Subscribe/Unsubscribe a user from a topic
     *
     * @since 2.1.0 bbPress (r3732)
     */
    public function ajax_subscription()
    {
    }
}
/**
 * Main bbPress Class
 *
 * "Word hard. Stay bumble."
 *
 * @since 2.0.0 bbPress (r2464)
 */
final class bbPress
{
    /** Magic *****************************************************************/
    /**
     * bbPress uses many variables, several of which can be filtered to
     * customize the way it operates. Most of these variables are stored in a
     * private array that gets updated with the help of PHP magic methods.
     *
     * This is a precautionary measure, to avoid potential errors produced by
     * unanticipated direct manipulation of run-time data.
     *
     * @see bbPress::setup_globals()
     * @var array
     */
    private $data;
    /** Not Magic *************************************************************/
    /**
     * @var mixed False when not logged in; WP_User object when logged in
     */
    public $current_user = \false;
    /**
     * @var stdClass Add-ons append to this (Akismet, BuddyPress, etc...)
     */
    public $extend;
    /**
     * @var array Topic views
     */
    public $views = array();
    /**
     * @var array Overloads get_option()
     */
    public $options = array();
    /**
     * @var array Storage of options not in the database
     */
    public $not_options = array();
    /**
     * @var array Overloads get_user_meta()
     */
    public $user_options = array();
    /**
     * @var array Dynamically initialized user roles
     */
    public $roles = array();
    /** Singleton *************************************************************/
    /**
     * Main bbPress Instance
     *
     * bbPress is fun
     * Please load it only one time
     * For this, we thank you
     *
     * Insures that only one instance of bbPress exists in memory at any one
     * time. Also prevents needing to define globals all over the place.
     *
     * @since 2.1.0 bbPress (r3757)
     *
     * @staticvar object $instance
     * @see bbpress()
     * @return bbPress The one true bbPress
     */
    public static function instance()
    {
    }
    /** Magic Methods *********************************************************/
    /**
     * A dummy constructor to prevent bbPress from being loaded more than once.
     *
     * @since 2.0.0 bbPress (r2464)
     *
     * @see bbPress::instance()
     * @see bbpress();
     */
    private function __construct()
    {
    }
    /**
     * A dummy magic method to prevent bbPress from being cloned
     *
     * @since 2.0.0 bbPress (r2464)
     */
    public function __clone()
    {
    }
    /**
     * A dummy magic method to prevent bbPress from being unserialized
     *
     * @since 2.0.0 bbPress (r2464)
     */
    public function __wakeup()
    {
    }
    /**
     * Magic method for checking the existence of a certain custom field
     *
     * @since 2.1.0 bbPress (r3951)
     */
    public function __isset($key)
    {
    }
    /**
     * Magic method for getting bbPress variables
     *
     * @since 2.1.0 bbPress (r3951)
     */
    public function __get($key)
    {
    }
    /**
     * Magic method for setting bbPress variables
     *
     * @since 2.1.0 bbPress (r3951)
     */
    public function __set($key, $value)
    {
    }
    /**
     * Magic method for unsetting bbPress variables
     *
     * @since 2.3.0 bbPress (r4628)
     */
    public function __unset($key)
    {
    }
    /**
     * Magic method to prevent notices and errors from invalid method calls
     *
     * @since 2.2.0 bbPress (r4252)
     */
    public function __call($name = '', $args = array())
    {
    }
    /** Private Methods *******************************************************/
    /**
     * Setup the environment variables to allow the rest of bbPress to function
     * more easily.
     *
     * @since 2.0.0 bbPress (r2626)
     *
     * @access private
     */
    private function setup_environment()
    {
    }
    /**
     * Smart defaults to many bbPress specific class variables.
     *
     * @since 2.6.0 bbPress (r6330)
     */
    private function setup_variables()
    {
    }
    /**
     * Include required files
     *
     * @since 2.0.0 bbPress (r2626)
     *
     * @access private
     */
    private function includes()
    {
    }
    /**
     * Setup the default hooks and actions
     *
     * @since 2.0.0 bbPress (r2644)
     *
     * @access private
     */
    private function setup_actions()
    {
    }
    /** Public Methods ********************************************************/
    /**
     * Register bundled theme packages
     *
     * Note that since we currently have complete control over bbp-themes and
     * the bbp-theme-compat folders, it's fine to hardcode these here. If at a
     * later date we need to automate this, and API will need to be built.
     *
     * @since 2.1.0 bbPress (r3829)
     */
    public function register_theme_packages()
    {
    }
    /**
     * Setup the default bbPress theme compatibility location.
     *
     * @since 2.1.0 bbPress (r3778)
     */
    public function setup_theme()
    {
    }
    /**
     * Load the translation file for current language. Checks the deprecated
     * languages folder inside the bbPress plugin first, and then the default
     * WordPress languages folder.
     *
     * Note that custom translation files inside the bbPress plugin folder
     * will be removed on bbPress updates. If you're creating custom
     * translation files, please use the global language folder.
     *
     * @since 2.0.0 bbPress (r2596)
     */
    public function load_textdomain()
    {
    }
    /**
     * Setup the post types for forums, topics and replies
     *
     * @since 2.0.0 bbPress (r2597)
     */
    public static function register_post_types()
    {
    }
    /**
     * Register the post statuses used by bbPress
     *
     * We do some manipulation of the 'trash' status so trashed topics and
     * replies can be viewed from within the theme.
     *
     * @since 2.0.0 bbPress (r2727)
     */
    public static function register_post_statuses()
    {
    }
    /**
     * Register the topic tag and forum moderator taxonomies
     *
     * @since 2.0.0 bbPress (r2464) Added bbp_get_topic_tag_tax_id() taxonomy
     */
    public static function register_taxonomies()
    {
    }
    /**
     * Register the bbPress views
     *
     * @since 2.0.0 bbPress (r2789)
     */
    public static function register_views()
    {
    }
    /**
     * Register the bbPress shortcodes
     *
     * @since 2.0.0 bbPress (r3031)
     */
    public function register_shortcodes()
    {
    }
    /**
     * Register bbPress meta-data
     *
     * Counts added in 2.6.0 to avoid negative values
     *
     * @since 2.6.0 bbPress (r6300)
     */
    public function register_meta()
    {
    }
    /**
     * Setup the currently logged-in user
     *
     * @since 2.0.0 bbPress (r2697)
     */
    public function setup_current_user()
    {
    }
    /**
     * Setup the user engagements strategy
     *
     * @since 2.6.0 bbPress (r6875)
     */
    public function setup_engagements()
    {
    }
    /**
     * Initialize forum-specific roles
     *
     * @since 2.6.0
     */
    public function roles_init()
    {
    }
    /** Custom Rewrite Rules **************************************************/
    /**
     * Add the bbPress-specific rewrite tags
     *
     * @since 2.0.0 bbPress (r2753)
     */
    public static function add_rewrite_tags()
    {
    }
    /**
     * Add bbPress-specific rewrite rules for uri's that are not
     * setup for us by way of custom post types or taxonomies. This includes:
     * - Front-end editing
     * - Topic views
     * - User profiles
     *
     * @since 2.0.0 bbPress (r2688)
     *
     * @todo Extract into an API
     */
    public static function add_rewrite_rules()
    {
    }
    /**
     * Add permalink structures for new archive-style destinations.
     *
     * - Users
     * - Topic Views
     * - Search
     *
     * @since 2.4.0 bbPress (r4930)
     */
    public static function add_permastructs()
    {
    }
}
/** Insert ********************************************************************/
/**
 * A wrapper for wp_insert_post() that also includes the necessary meta values
 * for the forum to function properly.
 *
 * @since 2.0.0 bbPress (r3349)
 *
 * @param array $forum_data Forum post data
 * @param array $forum_meta Forum meta data
 */
function bbp_insert_forum($forum_data = array(), $forum_meta = array())
{
}
/** Post Form Handlers ********************************************************/
/**
 * Handles the front end forum submission
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_new_forum_handler($action = '')
{
}
/**
 * Handles the front end edit forum submission
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_edit_forum_handler($action = '')
{
}
/**
 * Handle the saving of core forum metadata (Status, Visibility, and Type)
 *
 * @since 2.1.0 bbPress (r3678)
 *
 * @param int $forum_id
 * @return If forum ID is empty
 */
function bbp_save_forum_extras($forum_id = 0)
{
}
/** Forum Open/Close **********************************************************/
/**
 * Closes a forum
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id forum id
 * @return mixed False or {@link WP_Error} on failure, forum id on success
 */
function bbp_close_forum($forum_id = 0)
{
}
/**
 * Opens a forum
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id forum id
 * @return mixed False or {@link WP_Error} on failure, forum id on success
 */
function bbp_open_forum($forum_id = 0)
{
}
/** Forum Type ****************************************************************/
/**
 * Make the forum a category
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id Optional. Forum id
 * @return bool False on failure, true on success
 */
function bbp_categorize_forum($forum_id = 0)
{
}
/**
 * Remove the category status from a forum
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id Optional. Forum id
 * @return bool False on failure, true on success
 */
function bbp_normalize_forum($forum_id = 0)
{
}
/** Forum Visibility **********************************************************/
/**
 * Mark the forum as public
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id Optional. Forum id
 * @return bool False on failure, true on success
 */
function bbp_publicize_forum($forum_id = 0, $current_visibility = '')
{
}
/**
 * Mark the forum as private
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id Optional. Forum id
 * @return bool False on failure, true on success
 */
function bbp_privatize_forum($forum_id = 0, $current_visibility = '')
{
}
/**
 * Mark the forum as hidden
 *
 * @since 2.0.0 bbPress (r2996)
 *
 * @param int $forum_id Optional. Forum id
 * @return bool False on failure, true on success
 */
function bbp_hide_forum($forum_id = 0, $current_visibility = '')
{
}
/**
 * Recaches the private and hidden forums
 *
 * @since 2.4.0 bbPress (r5017)
 *
 * @return array An array of the status code and the message
 */
function bbp_repair_forum_visibility()
{
}
/** Subscriptions *************************************************************/
/**
 * Remove a deleted forum from all user subscriptions
 *
 * @since 2.5.0 bbPress (r5156)
 *
 * @param int $forum_id Get the forum ID to remove
 */
function bbp_remove_forum_from_all_subscriptions($forum_id = 0)
{
}
/** Count Bumpers *************************************************************/
/**
 * Bump the total topic count of a forum
 *
 * @since 2.1.0 bbPress (r3825)
 *
 * @param int $forum_id Optional. Forum id.
 * @param int $difference Optional. Default 1
 * @param bool $update_ancestors Optional. Default true
 *
 * @return int Forum topic count
 */
function bbp_bump_forum_topic_count($forum_id = 0, $difference = 1, $update_ancestors = \true)
{
}
/**
 * Increase the total topic count of a forum by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $forum_id The forum id.
 * @return void
 */
function bbp_increase_forum_topic_count($forum_id = 0)
{
}
/**
 * Decrease the total topic count of a forum by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_decrease_forum_topic_count($forum_id = 0)
{
}
/**
 * Bump the total topic count of a forum
 *
 * @since 2.1.0 bbPress (r3825)
 *
 * @param int $forum_id Optional. Forum id.
 * @param int $difference Optional. Default 1
 * @param bool $update_ancestors Optional. Default true
 *
 * @return int Forum topic count
 */
function bbp_bump_forum_topic_count_hidden($forum_id = 0, $difference = 1, $update_ancestors = \true)
{
}
/**
 * Increase the total hidden topic count of a forum by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_increase_forum_topic_count_hidden($forum_id = 0)
{
}
/**
 * Decrease the total hidden topic count of a forum by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_decrease_forum_topic_count_hidden($forum_id = 0)
{
}
/**
 * Bump the total topic count of a forum
 *
 * @since 2.1.0 bbPress (r3825)
 *
 * @param int $forum_id Optional. Forum id.
 * @param int $difference Optional. Default 1
 * @param bool $update_ancestors Optional. Default true
 *
 * @return int Forum topic count
 */
function bbp_bump_forum_reply_count($forum_id = 0, $difference = 1, $update_ancestors = \true)
{
}
/**
 * Bump the total topic count of a forum
 *
 * @since 2.6.0 bbPress (r6922)
 *
 * @param int $forum_id Optional. Forum id.
 * @param int $difference Optional. Default 1
 * @param bool $update_ancestors Optional. Default true
 *
 * @return int Forum topic count
 */
function bbp_bump_forum_reply_count_hidden($forum_id = 0, $difference = 1, $update_ancestors = \true)
{
}
/**
 * Increase the total reply count of a forum by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_increase_forum_reply_count($forum_id = 0)
{
}
/**
 * Decrease the total reply count of a forum by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_decrease_forum_reply_count($forum_id = 0)
{
}
/**
 * Increase the total hidden reply count of a forum by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_increase_forum_reply_count_hidden($forum_id = 0)
{
}
/**
 * Decrease the total hidden reply count of a forum by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_decrease_forum_reply_count_hidden($forum_id = 0)
{
}
/**
 * Update forum reply counts when a topic is approved or unapproved.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $topic_id The topic id.
 *
 * @return void
 */
function bbp_approved_unapproved_topic_update_forum_reply_count($topic_id = 0)
{
}
/** Forum Updaters ************************************************************/
/**
 * Update the forum last topic id
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id.
 * @param int $topic_id Optional. Topic id.
 * @return int Id of the forums most recent topic
 */
function bbp_update_forum_last_topic_id($forum_id = 0, $topic_id = 0)
{
}
/**
 * Update the forum last reply id
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id.
 * @param int $reply_id Optional. Reply id.
 * @return int Id of the forums most recent reply
 */
function bbp_update_forum_last_reply_id($forum_id = 0, $reply_id = 0)
{
}
/**
 * Update the forum last active post id
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param int $forum_id Optional. Forum id.
 * @param int $active_id Optional. Active post id.
 * @return int Id of the forums last active post
 */
function bbp_update_forum_last_active_id($forum_id = 0, $active_id = 0)
{
}
/**
 * Update the forums last active date/time (aka freshness)
 *
 * @since 2.0.0 bbPress (r2680)
 *
 * @param int    $forum_id Optional. Topic id.
 * @param string $new_time Optional. New time in mysql format.
 *
 * @return string MySQL timestamp of last active topic or reply
 */
function bbp_update_forum_last_active_time($forum_id = 0, $new_time = '')
{
}
/**
 * Update the forum sub-forum count
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 * @param int $subforums Optional. Number of subforums
 * @return bool True on success, false on failure
 */
function bbp_update_forum_subforum_count($forum_id = 0, $subforums = \false)
{
}
/**
 * Adjust the total topic count of a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id or topic id. It is checked whether it
 *                       is a topic or a forum. If it's a topic, its parent,
 *                       i.e. the forum is automatically retrieved.
 * @param bool $total_count Optional. To return the total count or normal count?
 * @return int Forum topic count
 */
function bbp_update_forum_topic_count($forum_id = 0)
{
}
/**
 * Adjust the total hidden topic count of a forum (hidden includes trashed,
 * spammed and pending topics)
 *
 * @since 2.0.0 bbPress (r2888)
 * @since 2.6.0 bbPress (r5954) Replace direct queries with WP_Query() objects
 *
 * @param int $forum_id Optional. Topic id to update.
 * @param int $topic_count Optional. Set the topic count manually.
 *
 * @return int Topic hidden topic count
 */
function bbp_update_forum_topic_count_hidden($forum_id = 0, $topic_count = \false)
{
}
/**
 * Adjust the total reply count of a forum
 *
 * @since 2.0.0 bbPress (r2464)
 * @since 2.6.0 bbPress (r5954) Replace direct queries with WP_Query() objects
 *
 * @param int  $forum_id Optional. Forum id or topic id. It is checked whether it
 *                       is a topic or a forum. If it's a topic, its parent,
 *                       i.e. the forum is automatically retrieved.
 *
 * @return int Forum reply count
 */
function bbp_update_forum_reply_count($forum_id = 0)
{
}
/**
 * Adjust the total hidden reply count of a forum
 *
 * @since 2.6.0 bbPress (r6922)
 *
 * @param int  $forum_id Optional. Forum id or topic id. It is checked whether it
 *                       is a topic or a forum. If it's a topic, its parent,
 *                       i.e. the forum is automatically retrieved.
 *
 * @return int Forum reply count
 */
function bbp_update_forum_reply_count_hidden($forum_id = 0)
{
}
/**
 * Updates the counts of a forum.
 *
 * This calls a few internal functions that all run manual queries against the
 * database to get their results. As such, this function can be costly to run
 * but is necessary to keep everything accurate.
 *
 * @since 2.0.0 bbPress (r2908)
 *
 * @param array $args Supports these arguments:
 *  - forum_id: Forum id
 *  - last_topic_id: Last topic id
 *  - last_reply_id: Last reply id
 *  - last_active_id: Last active post id
 *  - last_active_time: last active time
 */
function bbp_update_forum($args = array())
{
}
/** Helpers *******************************************************************/
/**
 * Return an associative array of available topic statuses
 *
 * Developers note: these statuses are actually stored as meta data, and
 * Visibilities are stored in post_status.
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param int $forum_id   Optional. Forum id.
 *
 * @return array
 */
function bbp_get_forum_statuses($forum_id = 0)
{
}
/**
 * Return an associative array of forum types
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param int $forum_id   Optional. Forum id.
 *
 * @return array
 */
function bbp_get_forum_types($forum_id = 0)
{
}
/**
 * Return an associative array of forum visibility
 *
 * Developers note: these visibilities are actually stored in post_status, and
 * Statuses are stored in meta data.
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param int $forum_id   Optional. Forum id.
 *
 * @return array
 */
function bbp_get_forum_visibilities($forum_id = 0)
{
}
/**
 * Return array of public forum statuses.
 *
 * @since 2.6.0 bbPress (r6921)
 *
 * @return array
 */
function bbp_get_public_forum_statuses()
{
}
/**
 * Return array of non-public forum statuses.
 *
 * @since 2.6.0 bbPress (r6921)
 *
 * @return array
 */
function bbp_get_non_public_forum_statuses()
{
}
/** Queries *******************************************************************/
/**
 * Returns the hidden forum ids
 *
 * Only hidden forum ids are returned. Public and private ids are not.
 *
 * @since 2.0.0 bbPress (r3007)
 */
function bbp_get_hidden_forum_ids()
{
}
/**
 * Returns the private forum ids
 *
 * Only private forum ids are returned. Public and hidden ids are not.
 *
 * @since 2.0.0 bbPress (r3007)
 */
function bbp_get_private_forum_ids()
{
}
/**
 * Returns the forum IDs that should be excluded from various views & queries,
 * based on the current user's capabilities.
 *
 * These results are automatically filtered by bbp_allow_forums_of_user(), to
 * allow per-forum moderators to see forums that would otherwise be private or
 * hidden to them.
 *
 * If you have a need to filter these results based on your own custom
 * engagements API usages, please see: bbp_allow_forums_of_user()
 *
 * @since 2.6.0 bbPress (r6425)
 *
 * @return array Forum IDs to exclude, or an empty array
 */
function bbp_get_excluded_forum_ids()
{
}
/**
 * Returns a meta_query that either includes or excludes hidden forum IDs
 * from a query.
 *
 * @since 2.0.0 bbPress (r3291)
 *
 * @param string Optional. The type of value to return. (string|array|meta_query)
 */
function bbp_exclude_forum_ids($type = 'string')
{
}
/**
 * Adjusts forum, topic, and reply queries to exclude items that might be
 * contained inside hidden or private forums that the user does not have the
 * capability to view.
 *
 * Doing it with an action allows us to trap all WP_Query's rather than needing
 * to hardcode this logic into each query. It also protects forum content for
 * plugins that might be doing their own queries.
 *
 * @since 2.0.0 bbPress (r3291)
 *
 * @param WP_Query $posts_query
 *
 * @return WP_Query
 */
function bbp_pre_get_posts_normalize_forum_visibility($posts_query = \null)
{
}
/**
 * Returns the forum's topic ids
 *
 * Only topics with published and closed statuses are returned
 *
 * @since 2.0.0 bbPress (r2908)
 *
 * @param int $forum_id Forum id
 */
function bbp_forum_query_topic_ids($forum_id)
{
}
/**
 * Returns the forum's subforum ids
 *
 * Only forums with published status are returned
 *
 * @since 2.0.0 bbPress (r2908)
 *
 * @param int $forum_id Forum id
 */
function bbp_forum_query_subforum_ids($forum_id)
{
}
/**
 * Returns the forum's last reply id
 *
 * @since 2.0.0 bbPress (r2908)
 * @since 2.6.0 bbPress (r5954) Replace direct queries with WP_Query() objects
 *
 * @param int $forum_id Forum id.
 * @param int $topic_ids Optional. Topic ids.
 */
function bbp_forum_query_last_reply_id($forum_id = 0, $topic_ids = 0)
{
}
/** Listeners *****************************************************************/
/**
 * Check if it's a hidden forum or a topic or reply of a hidden forum and if
 * the user can't view it, then sets a 404
 *
 * @since 2.0.0 bbPress (r2996)
 */
function bbp_forum_enforce_hidden()
{
}
/**
 * Check if it's a private forum or a topic or reply of a private forum and if
 * the user can't view it, then sets a 404
 *
 * @since 2.0.0 bbPress (r2996)
 */
function bbp_forum_enforce_private()
{
}
/** Permissions ***************************************************************/
/**
 * Redirect if unauthorized user is attempting to edit a forum
 *
 * @since 2.1.0 bbPress (r3607)
 */
function bbp_check_forum_edit()
{
}
/**
 * Delete all topics (and their replies) for a specific forum ID
 *
 * @since 2.1.0 bbPress (r3668)
 *
 * @param int $forum_id
 * @return If forum is not valid
 */
function bbp_delete_forum_topics($forum_id = 0)
{
}
/**
 * Trash all topics inside a forum
 *
 * @since 2.1.0 bbPress (r3668)
 *
 * @param int $forum_id
 * @return If forum is not valid
 */
function bbp_trash_forum_topics($forum_id = 0)
{
}
/**
 * Untrash all topics inside a forum
 *
 * @since 2.1.0 bbPress (r3668)
 *
 * @param int $forum_id
 * @return If forum is not valid
 */
function bbp_untrash_forum_topics($forum_id = 0)
{
}
/** Before Delete/Trash/Untrash ***********************************************/
/**
 * Called before deleting a forum.
 *
 * This function is supplemental to the actual forum deletion which is
 * handled by WordPress core API functions. It is used to clean up after
 * a forum that is being deleted.
 *
 * @since 2.1.0 bbPress (r3668)
 */
function bbp_delete_forum($forum_id = 0)
{
}
/**
 * Called before trashing a forum
 *
 * This function is supplemental to the actual forum being trashed which is
 * handled by WordPress core API functions. It is used to clean up after
 * a forum that is being trashed.
 *
 * @since 2.1.0 bbPress (r3668)
 */
function bbp_trash_forum($forum_id = 0)
{
}
/**
 * Called before untrashing a forum
 *
 * @since 2.1.0 bbPress (r3668)
 */
function bbp_untrash_forum($forum_id = 0)
{
}
/** After Delete/Trash/Untrash ************************************************/
/**
 * Called after deleting a forum
 *
 * Try not to use this action. All meta & taxonomy terms have already been
 * deleted, making them impossible to use.
 *
 * @since 2.1.0 bbPress (r3668)
 * @since 2.6.0 bbPress (r6526) Not recommend for usage
 */
function bbp_deleted_forum($forum_id = 0)
{
}
/**
 * Called after trashing a forum
 *
 * @since 2.1.0 bbPress (r3668)
 */
function bbp_trashed_forum($forum_id = 0)
{
}
/**
 * Called after untrashing a forum
 *
 * @since 2.1.0 bbPress (r3668)
 */
function bbp_untrashed_forum($forum_id = 0)
{
}
/**
 * bbPress Forum Capabilites
 *
 * Used to map forum capabilities to WordPress's existing capabilities.
 *
 * @package bbPress
 * @subpackage Capabilities
 */
/**
 * Return forum capabilities
 *
 * @since 2.0.0 bbPress (r2593)
 *
 * @return array Forum capabilities
 */
function bbp_get_forum_caps()
{
}
/**
 * Maps forum capabilities
 *
 * @since 2.2.0 bbPress (r4242)
 *
 * @param array $caps Capabilities for meta capability
 * @param string $cap Capability name
 * @param int $user_id User id
 * @param array $args Arguments
 * @return array Actual capabilities for meta capability
 */
function bbp_map_forum_meta_caps($caps = array(), $cap = '', $user_id = 0, $args = array())
{
}
/**
 * Can a user moderate a forum?
 *
 * @since 2.6.0 bbPress (r5834)
 *
 * @param int $user_id User id.
 * @param int $forum_id Forum id.
 *
 * @return bool Return true if user is moderator of forum
 */
function bbp_is_user_forum_moderator($user_id = 0, $forum_id = 0)
{
}
/**
 * Filter an array of forum IDs that are being excluded, and remove any forum
 * IDs a user explicitly has access to.
 *
 * This typically means private or hidden forums the user has moderation rights
 * to, but it can be filtered to mean just about anything.
 *
 * This function filters the return values of the following functions:
 * - `bbp_get_private_forum_ids()`
 * - `bbp_get_hidden_forum_ids()`
 *
 * @since 2.6.0 bbPress (r6426)
 *
 * @param array $forum_ids Forum IDs to check if the user ID is a moderator of
 * @param int   $user_id   User ID to check if is a moderator of forums
 *
 * @return array
 */
function bbp_allow_forums_of_user($forum_ids = array(), $user_id = 0)
{
}
/** Post Type *****************************************************************/
/**
 * Output the unique id of the custom post type for forums
 *
 * @since 2.0.0 bbPress (r2857)
 */
function bbp_forum_post_type()
{
}
/**
 * Return the unique id of the custom post type for forums
 *
 * @since 2.0.0 bbPress (r2857)
 *
 * @return string The unique forum post type id
 */
function bbp_get_forum_post_type()
{
}
/**
 * Return array of labels used by the forum post type
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_forum_post_type_labels()
{
}
/**
 * Return array of forum post type rewrite settings
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_forum_post_type_rewrite()
{
}
/**
 * Return array of features the forum post type supports
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_forum_post_type_supports()
{
}
/** Forum Loop ****************************************************************/
/**
 * The main forum loop.
 *
 * WordPress makes this easy for us.
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param array $args All the arguments supported by {@link WP_Query}
 *
 * @return object Multidimensional array of forum information
 */
function bbp_has_forums($args = array())
{
}
/**
 * Whether there are more forums available in the loop
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @return object Forum information
 */
function bbp_forums()
{
}
/**
 * Loads up the current forum in the loop
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @return object Forum information
 */
function bbp_the_forum()
{
}
/** Forum *********************************************************************/
/**
 * Output forum id
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param $forum_id Optional. Used to check emptiness
 */
function bbp_forum_id($forum_id = 0)
{
}
/**
 * Return the forum id
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param $forum_id Optional. Used to check emptiness
 * @return int The forum id
 */
function bbp_get_forum_id($forum_id = 0)
{
}
/**
 * Gets a forum
 *
 * @since 2.0.0 bbPress (r2787)
 *
 * @param int|object $forum forum id or forum object
 * @param string $output Optional. OBJECT, ARRAY_A, or ARRAY_N. Default = OBJECT
 * @param string $filter Optional Sanitation filter. See {@link sanitize_post()}
 *
 * @return mixed Null if error or forum (in specified form) if success
 */
function bbp_get_forum($forum, $output = \OBJECT, $filter = 'raw')
{
}
/**
 * Output the link to the forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @param string $redirect_to Optional. Pass a redirect value for use with
 *                              shortcodes and other fun things.
 */
function bbp_forum_permalink($forum_id = 0, $redirect_to = '')
{
}
/**
 * Return the link to the forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @param string $redirect_to Optional. Pass a redirect value for use with
 *                              shortcodes and other fun things.
 *
 * @return string Permanent link to forum
 */
function bbp_get_forum_permalink($forum_id = 0, $redirect_to = '')
{
}
/**
 * Output the title of the forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_title($forum_id = 0)
{
}
/**
 * Return the title of the forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Title of forum
 */
function bbp_get_forum_title($forum_id = 0)
{
}
/**
 * Output the forum archive title
 *
 * @since 2.0.0 bbPress (r3249)
 *
 * @param string $title Default text to use as title
 */
function bbp_forum_archive_title($title = '')
{
}
/**
 * Return the forum archive title
 *
 * @since 2.0.0 bbPress (r3249)
 *
 * @param string $title Default text to use as title
 *
 * @return string The forum archive title
 */
function bbp_get_forum_archive_title($title = '')
{
}
/**
 * Output the content of the forum
 *
 * @since 2.0.0 bbPress (r2780)
 *
 * @param int $forum_id Optional. Topic id
 */
function bbp_forum_content($forum_id = 0)
{
}
/**
 * Return the content of the forum
 *
 * @since 2.0.0 bbPress (r2780)
 *
 * @param int $forum_id Optional. Topic id
 *
 * @return string Content of the forum
 */
function bbp_get_forum_content($forum_id = 0)
{
}
/**
 * Allow forum rows to have administrative actions
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @todo Links and filter
 */
function bbp_forum_row_actions()
{
}
/**
 * Output the forums last active ID
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_active_id($forum_id = 0)
{
}
/**
 * Return the forums last active ID
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param int $forum_id Optional. Forum id
 *                        the last active id and forum id
 * @return int Forum's last active id
 */
function bbp_get_forum_last_active_id($forum_id = 0)
{
}
/**
 * Output the forums last update date/time (aka freshness)
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_active_time($forum_id = 0)
{
}
/**
 * Return the forums last update date/time (aka freshness)
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Forum last update date/time (freshness)
 */
function bbp_get_forum_last_active_time($forum_id = 0)
{
}
/**
 * Output link to the most recent activity inside a forum.
 *
 * Outputs a complete link with attributes and content.
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_freshness_link($forum_id = 0)
{
}
/**
 * Returns link to the most recent activity inside a forum.
 *
 * Returns a complete link with attributes and content.
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_get_forum_freshness_link($forum_id = 0)
{
}
/**
 * Output parent ID of a forum, if exists
 *
 * @since 2.1.0 bbPress (r3675)
 *
 * @param int $forum_id Forum ID
 */
function bbp_forum_parent_id($forum_id = 0)
{
}
/**
 * Return ID of forum parent, if exists
 *
 * @since 2.1.0 bbPress (r3675)
 *
 * @param int $forum_id Optional. Forum id
 * @return int Forum parent
 */
function bbp_get_forum_parent_id($forum_id = 0)
{
}
/**
 * Return array of parent forums
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 * @return array Forum ancestors
 */
function bbp_get_forum_ancestors($forum_id = 0)
{
}
/**
 * Return subforums of given forum
 *
 * @since 2.0.0 bbPress (r2747)
 *
 * @param array $args All the arguments supported by {@link WP_Query}
 * @return mixed false if none, array of subs if yes
 */
function bbp_forum_get_subforums($args = array())
{
}
/**
 * Output a list of forums (can be used to list subforums)
 *
 * @since 2.0.0 bbPress (r2708)
 *
 * @param array $args The function supports these args:
 *  - before: To put before the output. Defaults to '<ul class="bbp-forums-list">'
 *  - after: To put after the output. Defaults to '</ul>'
 *  - link_before: To put before every link. Defaults to '<li class="bbp-forum">'
 *  - link_after: To put after every link. Defaults to '</li>'
 *  - sep: Separator. Defaults to ''. Make sure your markup is valid!
 *  - count_before: String before each count Defaults to ' ('
 *  - count_after: String before each count Defaults to ')'
 *  - count_sep: Count separator. Defaults to ', '
 *  - forum_id: Forum id. Defaults to ''
 *  - show_topic_count - To show forum topic count or not. Defaults to true
 *  - show_reply_count - To show forum reply count or not. Defaults to true
 */
function bbp_list_forums($args = array())
{
}
/** Forum Subscriptions *******************************************************/
/**
 * Output the forum subscription link
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 */
function bbp_forum_subscription_link($args = array())
{
}
/**
 * Get the forum subscription link
 *
 * A custom wrapper for bbp_get_user_subscribe_link()
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 */
function bbp_get_forum_subscription_link($args = array())
{
}
/** Forum Last Topic **********************************************************/
/**
 * Output the forum's last topic id
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_topic_id($forum_id = 0)
{
}
/**
 * Return the forum's last topic id
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @return int Forum's last topic id
 */
function bbp_get_forum_last_topic_id($forum_id = 0)
{
}
/**
 * Output the title of the last topic inside a forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_topic_title($forum_id = 0)
{
}
/**
 * Return the title of the last topic inside a forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Forum's last topic's title
 */
function bbp_get_forum_last_topic_title($forum_id = 0)
{
}
/**
 * Output the link to the last topic in a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_topic_permalink($forum_id = 0)
{
}
/**
 * Return the link to the last topic in a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Permanent link to topic
 */
function bbp_get_forum_last_topic_permalink($forum_id = 0)
{
}
/**
 * Return the author ID of the last topic of a forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 * @return int Forum's last topic's author id
 */
function bbp_get_forum_last_topic_author_id($forum_id = 0)
{
}
/**
 * Output link to author of last topic of forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_topic_author_link($forum_id = 0)
{
}
/**
 * Return link to author of last topic of forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Forum's last topic's author link
 */
function bbp_get_forum_last_topic_author_link($forum_id = 0)
{
}
/** Forum Last Reply **********************************************************/
/**
 * Output the forums last reply id
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_reply_id($forum_id = 0)
{
}
/**
 * Return the forums last reply id
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @return int Forum's last reply id
 */
function bbp_get_forum_last_reply_id($forum_id = 0)
{
}
/**
 * Output the title of the last reply inside a forum
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_reply_title($forum_id = 0)
{
}
/**
 * Return the title of the last reply inside a forum
 *
 * @param int $forum_id Optional. Forum id
 * @return string
 */
function bbp_get_forum_last_reply_title($forum_id = 0)
{
}
/**
 * Output the link to the last reply in a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_reply_permalink($forum_id = 0)
{
}
/**
 * Return the link to the last reply in a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 *
 * @return string Permanent link to the forum's last reply
 */
function bbp_get_forum_last_reply_permalink($forum_id = 0)
{
}
/**
 * Output the url to the last reply in a forum
 *
 * @since 2.0.0 bbPress (r2683)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_reply_url($forum_id = 0)
{
}
/**
 * Return the url to the last reply in a forum
 *
 * @since 2.0.0 bbPress (r2683)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Paginated URL to latest reply
 */
function bbp_get_forum_last_reply_url($forum_id = 0)
{
}
/**
 * Output author ID of last reply of forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_reply_author_id($forum_id = 0)
{
}
/**
 * Return author ID of last reply of forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 * @return int Forum's last reply author id
 */
function bbp_get_forum_last_reply_author_id($forum_id = 0)
{
}
/**
 * Output link to author of last reply of forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_last_reply_author_link($forum_id = 0)
{
}
/**
 * Return link to author of last reply of forum
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Link to author of last reply of forum
 */
function bbp_get_forum_last_reply_author_link($forum_id = 0)
{
}
/** Forum Counts **************************************************************/
/**
 * Output the topics link of the forum
 *
 * @since 2.0.0 bbPress (r2883)
 *
 * @param int $forum_id Optional. Topic id
 */
function bbp_forum_topics_link($forum_id = 0)
{
}
/**
 * Return the topics link of the forum
 *
 * @since 2.0.0 bbPress (r2883)
 *
 * @param int $forum_id Optional. Topic id
 */
function bbp_get_forum_topics_link($forum_id = 0)
{
}
/**
 * Output total sub-forum count of a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id to check
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_forum_subforum_count($forum_id = 0, $integer = \false)
{
}
/**
 * Return total subforum count of a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Forum's subforum count
 */
function bbp_get_forum_subforum_count($forum_id = 0, $integer = \false)
{
}
/**
 * Output total topic count of a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal count?
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_forum_topic_count($forum_id = 0, $total_count = \true, $integer = \false)
{
}
/**
 * Return total topic count of a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal
 *                           count? Defaults to total.
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Forum topic count
 */
function bbp_get_forum_topic_count($forum_id = 0, $total_count = \true, $integer = \false)
{
}
/**
 * Output total reply count of a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal count?
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_forum_reply_count($forum_id = 0, $total_count = \true, $integer = \false)
{
}
/**
 * Return total post count of a forum
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal
 *                           count?
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Forum reply count
 */
function bbp_get_forum_reply_count($forum_id = 0, $total_count = \true, $integer = \false)
{
}
/**
 * Output total post count of a forum
 *
 * @since 2.0.0 bbPress (r2954)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal count?
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_forum_post_count($forum_id = 0, $total_count = \true, $integer = \false)
{
}
/**
 * Return total post count of a forum
 *
 * @since 2.0.0 bbPress (r2954)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal
 *                           count?
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Forum post count
 */
function bbp_get_forum_post_count($forum_id = 0, $total_count = \true, $integer = \false)
{
}
/**
 * Output total hidden topic count of a forum (hidden includes trashed, spammed,
 * and pending topics)
 *
 * @since 2.0.0 bbPress (r2883)
 * @since 2.6.0 bbPress (r6922) Changed function signature to add total counts
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal count?
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_forum_topic_count_hidden($forum_id = 0, $total_count = \true, $integer = \null)
{
}
/**
 * Return total hidden topic count of a forum (hidden includes trashed,
 * spammed and pending topics)
 *
 * @since 2.0.0 bbPress (r2883)
 * @since 2.6.0 bbPress (r6922) Changed function signature to add total counts
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal count?
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Topic hidden topic count
 */
function bbp_get_forum_topic_count_hidden($forum_id = 0, $total_count = \true, $integer = \null)
{
}
/**
 * Output total hidden reply count of a forum (hidden includes trashed, spammed,
 * and pending replies)
 *
 * @since 2.6.0 bbPress (r6922)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal count?
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_forum_reply_count_hidden($forum_id = 0, $total_count = \true, $integer = \false)
{
}
/**
 * Return total hidden reply count of a forum (hidden includes trashed,
 * spammed and pending replies)
 *
 * @since 2.6.0 bbPress (r6922)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $total_count Optional. To get the total count or normal
 *                           count?
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Forum reply count
 */
function bbp_get_forum_reply_count_hidden($forum_id = 0, $total_count = \true, $integer = \false)
{
}
/**
 * Output the status of the forum
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_status($forum_id = 0)
{
}
/**
 * Return the status of the forum
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Status of forum
 */
function bbp_get_forum_status($forum_id = 0)
{
}
/**
 * Output the visibility of the forum
 *
 * @since 2.0.0 bbPress (r2997)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_visibility($forum_id = 0)
{
}
/**
 * Return the visibility of the forum
 *
 * @since 2.0.0 bbPress (r2997)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Status of forum
 */
function bbp_get_forum_visibility($forum_id = 0)
{
}
/**
 * Output the type of the forum
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_type($forum_id = 0)
{
}
/**
 * Return the type of forum (category/forum/etc...)
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @param int $forum_id Optional. Forum id
 * @return bool Whether the forum is a category or not
 */
function bbp_get_forum_type($forum_id = 0)
{
}
/**
 * Is the forum a category?
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id Optional. Forum id
 * @return bool Whether the forum is a category or not
 */
function bbp_is_forum_category($forum_id = 0)
{
}
/**
 * Is the forum open?
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $check_ancestors Check if the ancestors are open (only
 *                               if they're a category)
 * @return bool Whether the forum is open or not
 */
function bbp_is_forum_open($forum_id = 0, $check_ancestors = \true)
{
}
/**
* Is the forum closed?
*
* @since 2.0.0 bbPress (r2746)
*
* @param int $forum_id Optional. Forum id
* @param bool $check_ancestors Check if the ancestors are closed (only
*                               if they're a category)
* @return bool True if closed, false if not
*/
function bbp_is_forum_closed($forum_id = 0, $check_ancestors = \true)
{
}
/**
 * Check if the forum status is a specific one, also maybe checking ancestors
 *
 * @since 2.6.0 bbPress (r5499)
 *
 * @param bool $status_name The forum status name to check
 * @param bool $check_ancestors Check the forum ancestors
 * @param string $operator The logical operation to perform.
 *      'OR' means only one forum from the tree needs to match;
 *      'AND' means all forums must match. The default is 'AND'.
 * @return bool True if match, false if not
 */
function bbp_is_forum_status($forum_id, $status_name, $check_ancestors = \true, $operator = 'AND')
{
}
/**
 * Is the forum public?
 *
 * @since 2.0.0 bbPress (r2997)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $check_ancestors Check if the ancestors are public
 * @return bool True if closed, false if not
 */
function bbp_is_forum_public($forum_id = 0, $check_ancestors = \true)
{
}
/**
 * Is the forum private?
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $check_ancestors Check if the ancestors are private
 * @return bool True if private, false if not
 */
function bbp_is_forum_private($forum_id = 0, $check_ancestors = \true)
{
}
/**
 * Is the forum hidden?
 *
 * @since 2.0.0 bbPress (r2997)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $check_ancestors Check if the ancestors are private (only if
 *                               they're a category)
 * @return bool True if hidden, false if not
 */
function bbp_is_forum_hidden($forum_id = 0, $check_ancestors = \true)
{
}
/**
 * Check the forum visibility ID
 *
 * @since 2.6.0 bbPress (r5499)
 *
 * @param int $forum_id Optional. Forum id
 * @param bool $status_name The post status name to check
 * @param bool $check_ancestors Check the forum ancestors
 * @param string $operator The logical operation to perform.
 *      'OR' means only one forum from the tree needs to match;
 *      'AND' means all forums must match. The default is 'AND'.
 * @return bool True if match, false if not
 */
function bbp_is_forum_visibility($forum_id, $status_name, $check_ancestors = \true, $operator = 'AND')
{
}
/**
 * Output the author ID of the forum
 *
 * @since 2.1.0 bbPress (r3675)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_author_id($forum_id = 0)
{
}
/**
 * Return the author ID of the forum
 *
 * @since 2.1.0 bbPress (r3675)
 *
 * @param int $forum_id Optional. Forum id
 *
 * @return string Author of forum
 */
function bbp_get_forum_author_id($forum_id = 0)
{
}
/**
 * Output the author of the forum
 *
 * @since 2.1.0 bbPress (r3675)
 *
 * @param int $forum_id Optional. Forum id
 */
function bbp_forum_author_display_name($forum_id = 0)
{
}
/**
 * Return the author of the forum
 *
 * @since 2.1.0 bbPress (r3675)
 *
 * @param int $forum_id Optional. Forum id
 * @return string Author of forum
 */
function bbp_get_forum_author_display_name($forum_id = 0)
{
}
/**
 * Replace forum meta details for users that cannot view them.
 *
 * @since 2.0.0 bbPress (r3162)
 *
 * @param string $retval
 * @param int $forum_id
 *
 * @return string
 */
function bbp_suppress_private_forum_meta($retval, $forum_id)
{
}
/**
 * Replace forum author details for users that cannot view them.
 *
 * @since 2.0.0 bbPress (r3162)
 *
 * @param string $author_link
 * @param array $args
 *
 * @return string
 */
function bbp_suppress_private_author_link($author_link = '', $args = array())
{
}
/**
 * Output the row class of a forum
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $forum_id Optional. Forum ID.
 * @param array Extra classes you can pass when calling this function
 */
function bbp_forum_class($forum_id = 0, $classes = array())
{
}
/**
 * Return the row class of a forum
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $forum_id Optional. Forum ID
 * @param array Extra classes you can pass when calling this function
 * @return string Row class of the forum
 */
function bbp_get_forum_class($forum_id = 0, $classes = array())
{
}
/** Single Forum **************************************************************/
/**
 * Output a fancy description of the current forum, including total topics,
 * total replies, and last activity.
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param array $args Arguments passed to alter output
 */
function bbp_single_forum_description($args = array())
{
}
/**
 * Return a fancy description of the current forum, including total
 * topics, total replies, and last activity.
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param array $args This function supports these arguments:
 *  - forum_id: Forum id
 *  - before: Before the text
 *  - after: After the text
 *  - size: Size of the avatar
 * @return string Filtered forum description
 */
function bbp_get_single_forum_description($args = array())
{
}
/** Forms *********************************************************************/
/**
 * Output the value of forum title field
 *
 * @since 2.1.0 bbPress (r3551)
 */
function bbp_form_forum_title()
{
}
/**
 * Return the value of forum title field
 *
 * @since 2.1.0 bbPress (r3551)
 *
 * @return string Value of forum title field
 */
function bbp_get_form_forum_title()
{
}
/**
 * Output the value of forum content field
 *
 * @since 2.1.0 bbPress (r3551)
 */
function bbp_form_forum_content()
{
}
/**
 * Return the value of forum content field
 *
 * @since 2.1.0 bbPress (r3551)
 *
 * @return string Value of forum content field
 */
function bbp_get_form_forum_content()
{
}
/**
 * Output value of forum moderators field
 *
 * @since 2.6.0 bbPress (r5837)
 */
function bbp_form_forum_moderators()
{
}
/**
 * Return value of forum moderators field
 *
 * @since 2.6.0 bbPress (r5837)
 *
 * @return string Value of forum mods field
 */
function bbp_get_form_forum_moderators()
{
}
/**
 * Output value of forum parent
 *
 * @since 2.1.0 bbPress (r3551)
 */
function bbp_form_forum_parent()
{
}
/**
 * Return value of forum parent
 *
 * @since 2.1.0 bbPress (r3551)
 *
 * @return string Value of topic content field
 */
function bbp_get_form_forum_parent()
{
}
/**
 * Output value of forum type
 *
 * @since 2.1.0 bbPress (r3563)
 */
function bbp_form_forum_type()
{
}
/**
 * Return value of forum type
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @return string Value of topic content field
 */
function bbp_get_form_forum_type()
{
}
/**
 * Output value of forum visibility
 *
 * @since 2.1.0 bbPress (r3563)
 */
function bbp_form_forum_visibility()
{
}
/**
 * Return value of forum visibility
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @return string Value of topic content field
 */
function bbp_get_form_forum_visibility()
{
}
/**
 * Output checked value of forum subscription
 *
 * @since 2.5.0 bbPress (r5156)
 */
function bbp_form_forum_subscribed()
{
}
/**
 * Return checked value of forum subscription
 *
 * @since 2.5.0 bbPress (r5156)
 *
 * @return string Checked value of forum subscription
 */
function bbp_get_form_forum_subscribed()
{
}
/** Form Dropdowns ************************************************************/
/**
 * Output value forum type dropdown
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_forum_type
 *  - tab: Deprecated. Tabindex
 *  - forum_id: Forum id
 *  - selected: Override the selected option
 */
function bbp_form_forum_type_dropdown($args = array())
{
}
/**
 * Return the forum type dropdown
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_forum_type
 *  - tab: Deprecated. Tabindex
 *  - forum_id: Forum id
 *  - selected: Override the selected option
 * @return string HTML select list for selecting forum type
 */
function bbp_get_form_forum_type_dropdown($args = array())
{
}
/**
 * Output value forum status dropdown
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_forum_status
 *  - tab: Deprecated. Tabindex
 *  - forum_id: Forum id
 *  - selected: Override the selected option
 */
function bbp_form_forum_status_dropdown($args = array())
{
}
/**
 * Return the forum status dropdown
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_forum_status
 *  - tab: Deprecated. Tabindex
 *  - forum_id: Forum id
 *  - selected: Override the selected option
 * @return string HTML select list for selecting forum status
 */
function bbp_get_form_forum_status_dropdown($args = array())
{
}
/**
 * Output value forum visibility dropdown
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_forum_visibility
 *  - tab: Deprecated. Tabindex
 *  - forum_id: Forum id
 *  - selected: Override the selected option
 */
function bbp_form_forum_visibility_dropdown($args = array())
{
}
/**
 * Return the forum visibility dropdown
 *
 * @since 2.1.0 bbPress (r3563)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_forum_visibility
 *  - tab: Deprecated. Tabindex
 *  - forum_id: Forum id
 *  - selected: Override the selected option
 * @return string HTML select list for selecting forum visibility
 */
function bbp_get_form_forum_visibility_dropdown($args = array())
{
}
/**
 * Verify if a POST request came from a failed forum attempt.
 *
 * Used to avoid cross-site request forgeries when checking posted forum form
 * content.
 *
 * @see bbp_forum_form_fields()
 *
 * @since 2.6.0 bbPress (r5558)
 *
 * @return boolean True if is a post request with valid nonce
 */
function bbp_is_forum_form_post_request()
{
}
/** Feeds *********************************************************************/
/**
 * Output the link for the forum feed
 *
 * @since 2.0.0 bbPress (r3172)
 *
 * @param int $forum_id Optional. Forum ID.
 */
function bbp_forum_topics_feed_link($forum_id = 0)
{
}
/**
 * Retrieve the link for the forum feed
 *
 * @since 2.0.0 bbPress (r3172)
 *
 * @param int $forum_id Optional. Forum ID.
 *
 * @return string
 */
function bbp_get_forum_topics_feed_link($forum_id = 0)
{
}
/**
 * Output the link for the forum replies feed
 *
 * @since 2.0.0 bbPress (r3172)
 *
 * @param int $forum_id Optional. Forum ID.
 */
function bbp_forum_replies_feed_link($forum_id = 0)
{
}
/**
 * Retrieve the link for the forum replies feed
 *
 * @since 2.0.0 bbPress (r3172)
 *
 * @param int $forum_id Optional. Forum ID.
 *
 * @return string
 */
function bbp_get_forum_replies_feed_link($forum_id = 0)
{
}
/** BuddyPress Helpers ********************************************************/
/**
 * Return component name/ID ('forums' by default)
 *
 * This is used primarily for Notifications integration.
 *
 * @since 2.6.0 bbPress (r5232)
 *
 * @return string
 */
function bbp_get_component_name()
{
}
/**
 * Filter the current bbPress user ID with the current BuddyPress user ID
 *
 * @since 2.1.0 bbPress (r3552)
 *
 * @param int $user_id
 * @param bool $displayed_user_fallback
 * @param bool $current_user_fallback
 *
 * @return int User ID
 */
function bbp_filter_user_id($user_id = 0, $displayed_user_fallback = \true, $current_user_fallback = \false)
{
}
/**
 * Filter the bbPress is_single_user function with BuddyPress equivalent
 *
 * @since 2.1.0 bbPress (r3552)
 *
 * @param bool $is Optional. Default false
 * @return bool True if viewing single user, false if not
 */
function bbp_filter_is_single_user($is = \false)
{
}
/**
 * Filter the bbPress is_user_home function with BuddyPress equivalent
 *
 * @since 2.1.0 bbPress (r3552)
 *
 * @param bool $is Optional. Default false
 * @return bool True if viewing single user, false if not
 */
function bbp_filter_is_user_home($is = \false)
{
}
/**
 * Add the topic title to the <title> if viewing a single group forum topic
 *
 * @since 2.5.0 bbPress (r5161)
 *
 * @param string $new_title The title to filter
 * @param string $old_title (Not used)
 * @param string $sep The separator to use
 * @return string The possibly modified title
 */
function bbp_filter_modify_page_title($new_title = '', $old_title = '', $sep = '')
{
}
/** BuddyPress Screens ********************************************************/
/**
 * Hook bbPress topics template into plugins template
 *
 * @since 2.1.0 bbPress (r3552)
 */
function bbp_member_forums_screen_topics()
{
}
/**
 * Hook bbPress replies template into plugins template
 *
 * @since 2.1.0 bbPress (r3552)
 */
function bbp_member_forums_screen_replies()
{
}
/**
 * Hook bbPress engagements template into plugins template
 *
 * @since 2.6.0 bbPress (r6320)
 */
function bbp_member_forums_screen_engagements()
{
}
/**
 * Hook bbPress favorites template into plugins template
 *
 * @since 2.1.0 bbPress (r3552)
 */
function bbp_member_forums_screen_favorites()
{
}
/**
 * Hook bbPress subscriptions template into plugins template
 *
 * @since 2.1.0 bbPress (r3552)
 */
function bbp_member_forums_screen_subscriptions()
{
}
/** BuddyPress Templates ******************************************************/
/**
 * Get the topics created template part
 *
 * @since 2.1.0 bbPress (r3552)
 */
function bbp_member_forums_topics_content()
{
}
/**
 * Get the topics replied to template part
 *
 * @since 2.1.0 bbPress (r3552)
 */
function bbp_member_forums_replies_content()
{
}
/**
 * Get the topic engagements template part
 *
 * @since 2.6.0 bbPress (r6320)
 */
function bbp_member_forums_engagements_content()
{
}
/**
 * Get the topics favorited template part
 *
 * @since 2.1.0 bbPress (r3552)
 */
function bbp_member_forums_favorites_content()
{
}
/**
 * Get the topics subscribed template part
 *
 * @since 2.1.0 bbPress (r3552)
 */
function bbp_member_forums_subscriptions_content()
{
}
/** Forum Group Root **********************************************************/
/**
 * Clean up the group root setting if the forum is being deleted
 *
 * @since 2.6.0 bbPress (r6479)
 *
 * @param int $forum_id The forum ID being deleted
 */
function bbp_maybe_delete_group_forum_root($forum_id = 0)
{
}
/**
 * Handle the new group forum root creation
 *
 * @since 2.6.0 bbPress (r6479)
 *
 * @return
 */
function bbp_maybe_create_group_forum_root()
{
}
/** Forum/Group Sync **********************************************************/
/**
 * These functions are used to keep the many-to-many relationships between
 * groups and forums synchronized. Each forum and group stores pointers to each
 * other in their respective meta. This way if a group or forum is deleted
 * their associations can be updated without much effort.
 */
/**
 * Get forum ID's for a group
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $group_id
 */
function bbp_get_group_forum_ids($group_id = 0)
{
}
/**
 * Get group ID's for a forum
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $forum_id
 */
function bbp_get_forum_group_ids($forum_id = 0)
{
}
/**
 * Get forum ID's for a group
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $group_id
 */
function bbp_update_group_forum_ids($group_id = 0, $forum_ids = array())
{
}
/**
 * Update group ID's for a forum
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $forum_id
 */
function bbp_update_forum_group_ids($forum_id = 0, $group_ids = array())
{
}
/**
 * Add a group to a forum
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $group_id
 */
function bbp_add_group_id_to_forum($forum_id = 0, $group_id = 0)
{
}
/**
 * Remove a forum from a group
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $group_id
 */
function bbp_add_forum_id_to_group($group_id = 0, $forum_id = 0)
{
}
/**
 * Remove a group from a forum
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $group_id
 */
function bbp_remove_group_id_from_forum($forum_id = 0, $group_id = 0)
{
}
/**
 * Remove a forum from a group
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $group_id
 */
function bbp_remove_forum_id_from_group($group_id = 0, $forum_id = 0)
{
}
/**
 * Remove a group from all forums
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $group_id
 */
function bbp_remove_group_id_from_all_forums($group_id = 0)
{
}
/**
 * Remove a forum from all groups
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @param int $forum_id
 */
function bbp_remove_forum_id_from_all_groups($forum_id = 0)
{
}
/**
 * Return true if a forum is a group forum
 *
 * @since 2.3.0 bbPress (r4571)
 *
 * @param int $forum_id
 * @return bool True if it is a group forum, false if not
 */
function bbp_is_forum_group_forum($forum_id = 0)
{
}
/*** Group Member Status ******************************************************/
/**
 * Is the current user an admin of the current group
 *
 * @since 2.3.0 bbPress (r4632)
 *
 * @return bool If current user is an admin of the current group
 */
function bbp_group_is_admin()
{
}
/**
 * Is the current user a moderator of the current group
 *
 * @since 2.3.0 bbPress (r4632)
 *
 * @return bool If current user is a moderator of the current group
 */
function bbp_group_is_mod()
{
}
/**
 * Is the current user a member of the current group
 *
 * @since 2.3.0 bbPress (r4632)
 *
 * @return bool If current user is a member of the current group
 */
function bbp_group_is_member()
{
}
/**
 * Is the current user banned from the current group
 *
 * @since 2.3.0 bbPress (r4632)
 *
 * @return bool If current user is banned from the current group
 */
function bbp_group_is_banned()
{
}
/**
 * Is the current user the creator of the current group
 *
 * @since 2.3.0 bbPress (r4632)
 *
 * @return bool If current user the creator of the current group
 */
function bbp_group_is_creator()
{
}
/* BuddyPress Activity Action Callbacks ***************************************/
/**
 * Return an array of allowed activity actions
 *
 * @since 2.6.0 bbPress (r6370)
 *
 * @return array
 */
function bbp_get_activity_actions()
{
}
/**
 * Generic function to format the dynamic BuddyPress activity action for new
 * topics/replies.
 *
 * @since 2.6.0 bbPress (r6370)
 *
 * @param string               $type     The type of post. Expects `topic` or `reply`.
 * @param string               $action   The current action string.
 * @param BP_Activity_Activity $activity The BuddyPress activity object.
 *
 * @return string The formatted activity action.
 */
function bbp_format_activity_action_new_post($type = '', $action = '', $activity = \false)
{
}
/**
 * Formats the dynamic BuddyPress activity action for new topics.
 *
 * @since 2.6.0 bbPress (r6370)
 *
 * @param string $action   The current action string
 * @param object $activity The BuddyPress activity object
 *
 * @return string The formatted activity action.
 */
function bbp_format_activity_action_new_topic($action, $activity)
{
}
/**
 * Formats the dynamic BuddyPress activity action for new replies.
 *
 * @since 2.6.0 bbPress (r6370)
 *
 * @param string $action   The current action string
 * @param object $activity The BuddyPress activity object
 *
 * @return string The formatted activity action
 */
function bbp_format_activity_action_new_reply($action, $activity)
{
}
/** BuddyPress Helpers ********************************************************/
/**
 * Filter registered notifications components, and add 'forums' to the queried
 * 'component_name' array.
 *
 * @since 2.6.0 bbPress (r5232)
 *
 * @see BP_Notifications_Notification::get()
 * @param array $component_names
 * @return array
 */
function bbp_filter_notifications_get_registered_components($component_names = array())
{
}
/**
 * Format the BuddyBar/Toolbar notifications
 *
 * @since 2.5.0 bbPress (r5155)
 *
 * @package bbPress
 *
 * @param string $content               Component action. Deprecated. Do not do checks against this! Use
 *                                      the 6th parameter instead - $component_action_name.
 * @param int    $item_id               Notification item ID.
 * @param int    $secondary_item_id     Notification secondary item ID.
 * @param int    $action_item_count     Number of notifications with the same action.
 * @param string $format                Format of return. Either 'string' or 'object'.
 * @param string $component_action_name Canonical notification action.
 * @param string $component_name        Notification component ID.
 * @param int    $id                    Notification ID.
 */
function bbp_format_buddypress_notifications($content, $item_id, $secondary_item_id, $action_item_count, $format, $component_action_name, $component_name, $id)
{
}
/**
 * Hooked into the new reply function, this notification action is responsible
 * for notifying topic and hierarchical reply authors of topic replies.
 *
 * @since 2.5.0 bbPress (r5156)
 *
 * @param int $reply_id
 * @param int $topic_id
 * @param int $forum_id (not used)
 * @param array $anonymous_data (not used)
 * @param int $author_id
 * @param bool $is_edit Used to bail if this gets hooked to an edit action
 * @param int $reply_to
 */
function bbp_buddypress_add_notification($reply_id = 0, $topic_id = 0, $forum_id = 0, $anonymous_data = array(), $author_id = 0, $is_edit = \false, $reply_to = 0)
{
}
/**
 * Mark notifications as read when reading a topic
 *
 * @since 2.5.0 bbPress (r5155)
 *
 * @return If not trying to mark a notification as read
 */
function bbp_buddypress_mark_notifications($action = '')
{
}
/** Versions ******************************************************************/
/**
 * Output the bbPress version
 *
 * @since 2.0.0 bbPress (r3468)
 */
function bbp_version()
{
}
/**
 * Return the bbPress version
 *
 * @since 2.0.0 bbPress (r3468)
 *
 * @retrun string The bbPress version
 */
function bbp_get_version()
{
}
/**
 * Output the bbPress asset version
 *
 * @since 2.6.7 bbPress (r7188)
 */
function bbp_asset_version()
{
}
/**
 * Return the bbPress asset version
 *
 * @since 2.6.7 bbPress (r7188)
 *
 * @retrun string The bbPress asset version
 */
function bbp_get_asset_version()
{
}
/**
 * Output the bbPress database version
 *
 * @since 2.0.0 bbPress (r3468)
 */
function bbp_db_version()
{
}
/**
 * Return the bbPress database version
 *
 * @since 2.0.0 bbPress (r3468)
 *
 * @retrun string The bbPress version
 */
function bbp_get_db_version()
{
}
/**
 * Output the bbPress database version directly from the database
 *
 * @since 2.0.0 bbPress (r3468)
 */
function bbp_db_version_raw()
{
}
/**
 * Return the bbPress database version directly from the database
 *
 * @since 2.0.0 bbPress (r3468)
 *
 * @retrun string The current bbPress version
 */
function bbp_get_db_version_raw()
{
}
/** Post Meta *****************************************************************/
/**
 * Update the forum meta ID of a post
 *
 * @since 2.0.0 bbPress (r3181)
 *
 * @param int $post_id  The post to update
 * @param int $forum_id The forum
 */
function bbp_update_forum_id($post_id = 0, $forum_id = 0)
{
}
/**
 * Update the topic meta ID of a post
 *
 * @since 2.0.0 bbPress (r3181)
 *
 * @param int $post_id  The post to update
 * @param int $topic_id The topic
 */
function bbp_update_topic_id($post_id = 0, $topic_id = 0)
{
}
/**
 * Update the reply meta ID of a post
 *
 * @since 2.0.0 bbPress (r3181)
 *
 * @param int $post_id  The post to update
 * @param int $reply_id The reply
 */
function bbp_update_reply_id($post_id = 0, $reply_id = 0)
{
}
/**
 * Update the reply-to meta ID of a post
 *
 * @since 2.6.0 bbPress (r5735)
 *
 * @param int $post_id  The post to update
 * @param int $reply_id The reply ID
 */
function bbp_update_reply_to_id($post_id = 0, $reply_id = 0)
{
}
/** Views *********************************************************************/
/**
 * Get the registered views
 *
 * Does nothing much other than return the {@link $bbp->views} variable
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @return array Views
 */
function bbp_get_views()
{
}
/**
 * Register a bbPress view
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view View name
 * @param string $title View title
 * @param mixed $query_args {@link bbp_has_topics()} arguments.
 * @param bool $feed Have a feed for the view? Defaults to true.
 * @param string $capability Capability that the current user must have
 *
 * @return array The just registered (but processed) view
 */
function bbp_register_view($view, $title, $query_args = '', $feed = \true, $capability = '')
{
}
/**
 * Deregister a bbPress view
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view View name
 * @return bool False if the view doesn't exist, true on success
 */
function bbp_deregister_view($view)
{
}
/**
 * Run the query of a topic-view
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view Optional. View id
 * @param mixed $new_args New arguments. See {@link bbp_has_topics()}
 * @return bool False if the view doesn't exist, otherwise if topics are there
 */
function bbp_view_query($view = '', $new_args = '')
{
}
/**
 * Return the query arguments of a topic-view
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view View name
 * @return array Query arguments
 */
function bbp_get_view_query_args($view = '')
{
}
/** Errors ********************************************************************/
/**
 * Adds an error message to later be output in the theme
 *
 * @since 2.0.0 bbPress (r3381)
 *
 * @see WP_Error()
 *
 * @param string $code Unique code for the error message
 * @param string $message Translated error message
 * @param string $data Any additional data passed with the error message
 */
function bbp_add_error($code = '', $message = '', $data = '')
{
}
/**
 * Check if error messages exist in queue
 *
 * @since 2.0.0 bbPress (r3381)
 *
 * @see WP_Error()
 */
function bbp_has_errors()
{
}
/** Mentions ******************************************************************/
/**
 * Set the pattern used for matching usernames for mentions.
 *
 * Moved into its own function to allow filtering of the regex pattern
 * anywhere mentions might be used.
 *
 * @since 2.4.0 bbPress (r4997)
 * @deprecated 2.6.0 bbp_make_clickable()
 *
 * @return string Pattern to match usernames with
 */
function bbp_find_mentions_pattern()
{
}
/**
 * Searches through the content to locate usernames, designated by an @ sign.
 *
 * @since 2.2.0 bbPress (r4323)
 * @deprecated 2.6.0 bbp_make_clickable()
 *
 * @param string $content The content
 * @return bool|array $usernames Existing usernames. False if no matches.
 */
function bbp_find_mentions($content = '')
{
}
/**
 * Finds and links @-mentioned users in the content
 *
 * @since 2.2.0 bbPress (r4323)
 * @deprecated 2.6.0 bbp_make_clickable()
 *
 * @return string $content Content filtered for mentions
 */
function bbp_mention_filter($content = '')
{
}
/** Post Statuses *************************************************************/
/**
 * Return the public post status ID
 *
 * @since 2.0.0 bbPress (r3504)
 *
 * @return string
 */
function bbp_get_public_status_id()
{
}
/**
 * Return the pending post status ID
 *
 * @since 2.1.0 bbPress (r3581)
 *
 * @return string
 */
function bbp_get_pending_status_id()
{
}
/**
 * Return the private post status ID
 *
 * @since 2.0.0 bbPress (r3504)
 *
 * @return string
 */
function bbp_get_private_status_id()
{
}
/**
 * Return the hidden post status ID
 *
 * @since 2.0.0 bbPress (r3504)
 *
 * @return string
 */
function bbp_get_hidden_status_id()
{
}
/**
 * Return the closed post status ID
 *
 * @since 2.0.0 bbPress (r3504)
 *
 * @return string
 */
function bbp_get_closed_status_id()
{
}
/**
 * Return the spam post status ID
 *
 * @since 2.0.0 bbPress (r3504)
 *
 * @return string
 */
function bbp_get_spam_status_id()
{
}
/**
 * Return the trash post status ID
 *
 * @since 2.0.0 bbPress (r3504)
 *
 * @return string
 */
function bbp_get_trash_status_id()
{
}
/**
 * Return the orphan post status ID
 *
 * @since 2.0.0 bbPress (r3504)
 *
 * @return string
 */
function bbp_get_orphan_status_id()
{
}
/** Rewrite IDs ***************************************************************/
/**
 * Return the unique ID for user profile rewrite rules
 *
 * @since 2.1.0 bbPress (r3762)
 *
 * @return string
 */
function bbp_get_user_rewrite_id()
{
}
/**
 * Return the unique ID for all edit rewrite rules (forum|topic|reply|tag|user)
 *
 * @since 2.1.0 bbPress (r3762)
 *
 * @return string
 */
function bbp_get_edit_rewrite_id()
{
}
/**
 * Return the unique ID for all search rewrite rules
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @return string
 */
function bbp_get_search_rewrite_id()
{
}
/**
 * Return the unique ID for user topics rewrite rules
 *
 * @since 2.2.0 bbPress (r4321)
 *
 * @return string
 */
function bbp_get_user_topics_rewrite_id()
{
}
/**
 * Return the unique ID for user replies rewrite rules
 *
 * @since 2.2.0 bbPress (r4321)
 *
 * @return string
 */
function bbp_get_user_replies_rewrite_id()
{
}
/**
 * Return the unique ID for user favorites rewrite rules
 *
 * @since 2.2.0 bbPress (r4181)
 *
 * @return string
 */
function bbp_get_user_favorites_rewrite_id()
{
}
/**
 * Return the unique ID for user subscriptions rewrite rules
 *
 * @since 2.2.0 bbPress (r4181)
 *
 * @return string
 */
function bbp_get_user_subscriptions_rewrite_id()
{
}
/**
 * Return the unique ID for user engagement rewrite rules
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @return string
 */
function bbp_get_user_engagements_rewrite_id()
{
}
/**
 * Return the unique ID for topic view rewrite rules
 *
 * @since 2.1.0 bbPress (r3762)
 *
 * @return string
 */
function bbp_get_view_rewrite_id()
{
}
/** Rewrite Extras ************************************************************/
/**
 * Get the id used for paginated requests
 *
 * @since 2.4.0 bbPress (r4926)
 *
 * @return string
 */
function bbp_get_paged_rewrite_id()
{
}
/**
 * Delete a blogs rewrite rules, so that they are automatically rebuilt on
 * the subsequent page load.
 *
 * @since 2.2.0 bbPress (r4198)
 */
function bbp_delete_rewrite_rules()
{
}
/** Requests ******************************************************************/
/**
 * Return true|false if this is a POST request
 *
 * @since 2.3.0 bbPress (r4790)
 *
 * @return bool
 */
function bbp_is_post_request()
{
}
/**
 * Return true|false if this is a GET request
 *
 * @since 2.3.0 bbPress (r4790)
 *
 * @return bool
 */
function bbp_is_get_request()
{
}
/** Redirection ***************************************************************/
/**
 * Perform a safe, local redirect somewhere inside the current site
 *
 * On some setups, passing the value of wp_get_referer() may result in an empty
 * value for $location, which results in an error on redirection. If $location
 * is empty, we can safely redirect back to the forum root. This might change
 * in a future version, possibly to the site root.
 *
 * @since 2.6.0 bbPress (r5658)
 *
 * @see  bbp_redirect_to_field()
 *
 * @param string $location The URL to redirect the user to.
 * @param int    $status   Optional. The numeric code to give in the redirect
 *                         headers. Default: 302.
 */
function bbp_redirect($location = '', $status = 302)
{
}
/** Global Helpers ************************************************************/
/**
 * Return if debugging scripts or not
 *
 * @since 2.6.7 (r7188)
 *
 * @return bool True if debugging scripts. False if not debugging scripts.
 */
function bbp_doing_script_debug()
{
}
/**
 * Return if auto-saving or not
 *
 * @since 2.6.7 (r7188)
 *
 * @return bool True if mid auto-save. False if not mid auto-save.
 */
function bbp_doing_autosave()
{
}
/**
 * If there is no raw DB version, this is the first installation
 *
 * @since 2.1.0 bbPress (r3764)
 *
 * @return bool True if update, False if not
 */
function bbp_is_install()
{
}
/**
 * Compare the bbPress version to the DB version to determine if updating
 *
 * @since 2.0.0 bbPress (r3421)
 *
 * @return bool True if update, False if not
 */
function bbp_is_update()
{
}
/**
 * Determine if bbPress is being activated
 *
 * Note that this function currently is not used in bbPress core and is here
 * for third party plugins to use to check for bbPress activation.
 *
 * @since 2.0.0 bbPress (r3421)
 *
 * @return bool True if activating bbPress, false if not
 */
function bbp_is_activation($basename = '')
{
}
/**
 * Determine if bbPress is being deactivated
 *
 * @since 2.0.0 bbPress (r3421)
 *
 * @return bool True if deactivating bbPress, false if not
 */
function bbp_is_deactivation($basename = '')
{
}
/**
 * Update the DB to the latest version
 *
 * @since 2.0.0 bbPress (r3421)
 */
function bbp_version_bump()
{
}
/**
 * Setup the bbPress updater
 *
 * @since 2.0.0 bbPress (r3419)
 */
function bbp_setup_updater()
{
}
/**
 * Runs when a new site is created in a multisite network, and bbPress is active
 * on that site (hooked to `bbp_new_site`)
 *
 * @since 2.6.0 bbPress (r6779)
 */
function bbp_setup_new_site($site_id = 0)
{
}
/**
 * Create a default forum, topic, and reply
 *
 * @since 2.1.0 bbPress (r3767)
 *
 * @param array $args Array of arguments to override default values
 */
function bbp_create_initial_content($args = array())
{
}
/**
 * The version updater looks at what the current database version is, and
 * runs whatever other code is needed.
 *
 * This is most-often used when the data schema changes, but should also be used
 * to correct issues with bbPress meta-data silently on software update.
 *
 * @since 2.2.0 bbPress (r4104)
 */
function bbp_version_updater()
{
}
/**
 * Redirect user to the "What's New" page on activation
 *
 * @since 2.2.0 bbPress (r4389)
 *
 * @internal Used internally to redirect bbPress to the about page on activation
 *
 * @return If network admin or bulk activation
 */
function bbp_add_activation_redirect()
{
}
/**
 * Redirect user to "What's New" page on activation
 *
 * @since 2.2.0 bbPress (r4389)
 *
 * @internal Used internally to redirect bbPress to the about page on activation
 *
 * @return If no transient, or in network admin, or is bulk activation
 */
function bbp_do_activation_redirect()
{
}
/**
 * Hooked to the 'bbp_activate' action, this helper function automatically makes
 * the current user a Key Master in the forums if they just activated bbPress,
 * regardless of the bbp_allow_global_access() setting.
 *
 * @since 2.4.0 bbPress (r4910)
 *
 * @internal Used to internally make the current user a keymaster on activation
 *
 * @return If user can't activate plugins or is already a keymaster
 */
function bbp_make_current_user_keymaster()
{
}
/** Pending Upgrades **********************************************************/
/**
 * Return the number of pending upgrades
 *
 * @since 2.6.0 bbPress (r6895)
 *
 * @param string $type Type of pending upgrades (upgrade|repair|empty)
 *
 * @return int
 */
function bbp_get_pending_upgrade_count($type = '')
{
}
/**
 * Return an array of pending upgrades
 *
 * @since 2.6.0 bbPress (r6895)
 *
 * @param string $type Type of pending upgrades (upgrade|repair|empty)
 *
 * @return array
 */
function bbp_get_pending_upgrades($type = '')
{
}
/**
 * Add an upgrade ID to pending upgrades array
 *
 * @since 2.6.0 bbPress (r6895)
 *
 * @param string $upgrade_id
 */
function bbp_add_pending_upgrade($upgrade_id = '')
{
}
/**
 * Add an upgrade ID to pending upgrades array
 *
 * @since 2.6.0 bbPress (r6895)
 *
 * @param string $upgrade_id
 */
function bbp_remove_pending_upgrade($upgrade_id = '')
{
}
/**
 * Delete all pending upgrades
 *
 * @since 2.6.0 bbPress (r6895)
 */
function bbp_clear_pending_upgrades()
{
}
/**
 * Maybe append an upgrade count to a string
 *
 * @since 2.6.0 bbPress (r6896)
 *
 * @param string $string Text to append count to
 * @param string $type   Type of pending upgrades (upgrade|repair|empty)
 *
 * @return string
 */
function bbp_maybe_append_pending_upgrade_count($string = '', $type = '')
{
}
// @jjj
/** Deprecated ****************************************************************/
/**
 * The following filters are deprecated.
 *
 * These filters were most likely replaced by bbp_parse_args(), which includes
 * both passive and aggressive filters anywhere parse_args is used to compare
 * default arguments to passed arguments, without sprinkling the project with
 * _before_ and _after_ filters everywhere.
 */
/**
 * Deprecated locale filter
 *
 * @since 2.2.0 bbPress (r4213)
 *
 * @param string $locale
 * @return string  $domain
 */
function _bbp_filter_locale($locale = '', $domain = '')
{
}
/**
 * Deprecated forums query filter
 *
 * @since 2.1.0 bbPress (r3961)
 *
 * @param array $args
 * @return array
 */
function _bbp_has_forums_query($args = array())
{
}
/**
 * Deprecated topics query filter
 *
 * @since 2.1.0 bbPress (r3961)
 *
 * @param array $args
 * @return array
 */
function _bbp_has_topics_query($args = array())
{
}
/**
 * Deprecated replies query filter
 *
 * @since 2.1.0 bbPress (r3961)
 *
 * @param array $args
 * @return array
 */
function _bbp_has_replies_query($args = array())
{
}
/**
 * Plugin Dependency
 *
 * The purpose of the following hooks is to mimic the behavior of something
 * called 'plugin dependency' which enables a plugin to have plugins of their
 * own in a safe and reliable way.
 *
 * We do this in bbPress by mirroring existing WordPress hooks in many places
 * allowing dependant plugins to hook into the bbPress specific ones, thus
 * guaranteeing proper code execution only when bbPress is active.
 *
 * The following functions are wrappers for hooks, allowing them to be
 * manually called and/or piggy-backed on top of other hooks if needed.
 *
 * @package bbPress
 * @subpackage Core
 *
 * @todo use anonymous functions when PHP minimum requirement allows (5.3)
 */
/** Activation Actions ********************************************************/
/**
 * Runs on bbPress activation
 *
 * @since 2.0.0 bbPress (r2509)
 */
function bbp_activation()
{
}
/**
 * Runs on bbPress deactivation
 *
 * @since 2.0.0 bbPress (r2509)
 */
function bbp_deactivation()
{
}
/**
 * Runs when uninstalling bbPress
 *
 * @since 2.0.0 bbPress (r2509)
 */
function bbp_uninstall()
{
}
/** Main Actions **************************************************************/
/**
 * Main action responsible for constants, globals, and includes
 *
 * @since 2.0.0 bbPress (r2599)
 */
function bbp_loaded()
{
}
/**
 * Setup constants
 *
 * @since 2.0.0 bbPress (r2599)
 */
function bbp_constants()
{
}
/**
 * Setup globals BEFORE includes
 *
 * @since 2.0.0 bbPress (r2599)
 */
function bbp_boot_strap_globals()
{
}
/**
 * Include files
 *
 * @since 2.0.0 bbPress (r2599)
 */
function bbp_includes()
{
}
/**
 * Setup globals AFTER includes
 *
 * @since 2.0.0 bbPress (r2599)
 */
function bbp_setup_globals()
{
}
/**
 * Register any objects before anything is initialized
 *
 * @since 2.2.0 bbPress (r4180)
 */
function bbp_register()
{
}
/**
 * Initialize any code after everything has been loaded
 *
 * @since 2.0.0 bbPress (r2599)
 */
function bbp_init()
{
}
/**
 * Initialize roles
 *
 * @since 2.6.0 bbPress (r6106)
 *
 * @param WP_Roles $wp_roles The array of WP_Role objects that was initialized
 */
function bbp_roles_init($wp_roles)
{
}
/**
 * Initialize widgets
 *
 * @since 2.0.0 bbPress (r3389)
 */
function bbp_widgets_init()
{
}
/**
 * Setup the currently logged-in user
 *
 * @link https://bbpress.trac.wordpress.org/ticket/2309
 * @link https://core.trac.wordpress.org/ticket/24169
 *
 * @since 2.0.0 bbPress (r2695)
 */
function bbp_setup_current_user()
{
}
/**
 * Setup the user engagements strategy
 *
 * @since 2.6.0 bbPress (r6875)
 */
function bbp_setup_engagements()
{
}
/** Supplemental Actions ******************************************************/
/**
 * Load translations for current language
 *
 * @since 2.0.0 bbPress (r2599)
 */
function bbp_load_textdomain()
{
}
/**
 * Setup the post types
 *
 * @since 2.0.0 bbPress (r2464)
 */
function bbp_register_post_types()
{
}
/**
 * Setup the post statuses
 *
 * @since 2.0.0 bbPress (r2727)
 */
function bbp_register_post_statuses()
{
}
/**
 * Register the built in bbPress taxonomies
 *
 * @since 2.0.0 bbPress (r2464)
 */
function bbp_register_taxonomies()
{
}
/**
 * Register the default bbPress views
 *
 * @since 2.0.0 bbPress (r2789)
 */
function bbp_register_views()
{
}
/**
 * Register the default bbPress shortcodes
 *
 * @since 2.2.0 bbPress (r4211)
 */
function bbp_register_shortcodes()
{
}
/**
 * Register the default bbPress meta-data
 *
 * @since 2.6.0 bbPress (r46300)
 */
function bbp_register_meta()
{
}
/**
 * Enqueue bbPress specific CSS and JS
 *
 * @since 2.0.0 bbPress (r3373)
 */
function bbp_enqueue_scripts()
{
}
/**
 * Add the bbPress-specific rewrite tags
 *
 * @since 2.0.0 bbPress (r2753)
 */
function bbp_add_rewrite_tags()
{
}
/**
 * Add the bbPress-specific rewrite rules
 *
 * @since 2.4.0 bbPress (r4918)
 */
function bbp_add_rewrite_rules()
{
}
/**
 * Add the bbPress-specific permalink structures
 *
 * @since 2.4.0 bbPress (r4918)
 */
function bbp_add_permastructs()
{
}
/**
 * Add the bbPress-specific login forum action
 *
 * @since 2.0.0 bbPress (r2753)
 */
function bbp_login_form_login()
{
}
/**
 * Add the bbPress-specific post status transition action
 *
 * @since 2.6.0 bbPress (r6792)
 *
 * @param string  $new_status New post status
 * @param string  $old_status Old post status
 * @param WP_Post $post       Post object
 */
function bbp_transition_post_status($new_status = '', $old_status = '', $post = \false)
{
}
/** User Actions **************************************************************/
/**
 * The main action for hooking into when a user account is updated
 *
 * @since 2.2.0 bbPress (r4304)
 *
 * @param int $user_id ID of user being edited
 * @param array $old_user_data The old, unmodified user data
 */
function bbp_profile_update($user_id = 0, $old_user_data = array())
{
}
/**
 * The main action for hooking into a user being registered
 *
 * @since 2.2.0 bbPress (r4304)
 *
 * @param int $user_id ID of user being edited
 */
function bbp_user_register($user_id = 0)
{
}
/** Final Action **************************************************************/
/**
 * bbPress has loaded and initialized everything, and is okay to go
 *
 * @since 2.0.0 bbPress (r2618)
 */
function bbp_ready()
{
}
/** Theme Permissions *********************************************************/
/**
 * The main action used for redirecting bbPress theme actions that are not
 * permitted by the current_user
 *
 * @since 2.1.0 bbPress (r3605)
 */
function bbp_template_redirect()
{
}
/** Theme Helpers *************************************************************/
/**
 * The main action used for executing code before the theme has been setup
 *
 * @since 2.1.0 bbPress (r3829)
 */
function bbp_register_theme_packages()
{
}
/**
 * The main action used for executing code before the theme has been setup
 *
 * @since 2.1.0 bbPress (r3732)
 */
function bbp_setup_theme()
{
}
/**
 * The main action used for executing code after the theme has been setup
 *
 * @since 2.1.0 bbPress (r3732)
 */
function bbp_after_setup_theme()
{
}
/**
 * The main action used for handling theme-side POST requests
 *
 * @since 2.3.0 bbPress (r4550)
 */
function bbp_post_request()
{
}
/**
 * The main action used for handling theme-side GET requests
 *
 * @since 2.3.0 bbPress (r4550)
 */
function bbp_get_request()
{
}
/** Filters *******************************************************************/
/**
 * Filter the plugin locale and domain.
 *
 * @since 2.2.0 bbPress (r4213)
 *
 * @param string $locale
 * @param string $domain
 */
function bbp_plugin_locale($locale = '', $domain = '')
{
}
/**
 * Piggy back filter for WordPress's 'request' filter
 *
 * @since 2.1.0 bbPress (r3758)
 *
 * @param array $query_vars
 * @return array
 */
function bbp_request($query_vars = array())
{
}
/**
 * The main filter used for theme compatibility and displaying custom bbPress
 * theme files.
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @param string $template
 * @return string Template file to use
 */
function bbp_template_include($template = '')
{
}
/**
 * Generate bbPress-specific rewrite rules
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @deprecated 2.4.0 bbPress (r4918)
 *
 * @param WP_Rewrite $wp_rewrite
 */
function bbp_generate_rewrite_rules($wp_rewrite)
{
}
/**
 * Filter the allowed themes list for bbPress specific themes
 *
 * @since 2.0.0 bbPress (r2944)
 *
 * @param array $themes
 *
 * @return array Array of allowed themes
 */
function bbp_allowed_themes($themes)
{
}
/**
 * Maps forum/topic/reply caps to built in WordPress caps
 *
 * @since 2.0.0 bbPress (r2593)
 *
 * @param array $caps Capabilities for meta capability
 * @param string $cap Capability name
 * @param int $user_id User id
 * @param array $args Arguments
 *
 * @return array Array of capabilities
 */
function bbp_map_meta_caps($caps = array(), $cap = '', $user_id = 0, $args = array())
{
}
/**
 * Filter the arguments used by wp_mail for bbPress specific emails
 *
 * @since 2.6.0 bbPress (r6918)
 *
 * @param array $args A compacted array of wp_mail() arguments, including the "to" email,
 *                    subject, message, headers, and attachments values.
 *
 * @return array Array of capabilities
 */
function bbp_mail($args = array())
{
}
/** General *******************************************************************/
/**
 * Will clean a post in the cache.
 *
 * Will call to clean the term object cache associated with the post ID.
 *
 * @since 2.1.0 bbPress (r4040)
 * @since 2.6.0 bbPress (r6053) Introduced the `$post_id` parameter.
 *
 * @param int     $post_id The post id.
 * @param WP_Post $post    The WP_Post object.
 */
function bbp_clean_post_cache($post_id = \null, $post = \null)
{
}
/**
 * Loads Akismet inside the bbPress global class
 *
 * @since 2.0.0 bbPress (r3277)
 *
 * @return If bbPress is not active
 */
function bbp_setup_akismet()
{
}
/**
 * Requires and creates the BuddyPress extension, and adds component creation
 * action to bp_init hook. @see bbp_setup_buddypress_component()
 *
 * @since 2.0.0 bbPress (r3395)
 *
 * @return If BuddyPress is not active
 */
function bbp_setup_buddypress()
{
}
/** Mapping *******************************************************************/
/**
 * Returns an array of capabilities based on the role that is being requested.
 *
 * @since 2.0.0 bbPress (r2994)
 *
 * @todo Map all of these and deprecate
 *
 * @param string $role Optional. Defaults to The role to load caps for
 *
 * @return array Capabilities for $role
 */
function bbp_get_caps_for_role($role = '')
{
}
/**
 * Adds capabilities to WordPress user roles.
 *
 * @since 2.0.0 bbPress (r2608)
 */
function bbp_add_caps()
{
}
/**
 * Removes capabilities from WordPress user roles.
 *
 * @since 2.0.0 bbPress (r2608)
 */
function bbp_remove_caps()
{
}
/**
 * Get the available roles, minus the dynamic roles that come with bbPress
 *
 * @since 2.4.0 bbPress (r5064)
 *
 * @return array
 */
function bbp_get_blog_roles()
{
}
/** Forum Roles ***************************************************************/
/**
 * Add the bbPress roles to the $wp_roles global.
 *
 * We do this to avoid adding these values to the database.
 *
 * Note: bbPress is purposely assertive here, overwriting any keys & values
 * that may already exist in the $wp_roles array.
 *
 * @since 2.2.0 bbPress (r4290)
 *
 * @param WP_Roles $wp_roles The array of WP_Role objects that was initialized
 *
 * @return WP_Roles The main $wp_roles global
 */
function bbp_add_forums_roles($wp_roles = \null)
{
}
/**
 * Helper function to add filter to option_wp_user_roles
 *
 * @since 2.2.0 bbPress (r4363)
 * @deprecated 2.6.0 bbPress (r6105)
 *
 * @see _bbp_reinit_dynamic_roles()
 */
function bbp_filter_user_roles_option()
{
}
/**
 * This is necessary because in a few places (noted below) WordPress initializes
 * a blog's roles directly from the database option. When this happens, the
 * $wp_roles global gets flushed, causing a user to magically lose any
 * dynamically assigned roles or capabilities when $current_user in refreshed.
 *
 * Because dynamic multiple roles is a new concept in WordPress, we work around
 * it here for now, knowing that improvements will come to WordPress core later.
 *
 * Also note that if using the $wp_user_roles global non-database approach,
 * bbPress does not have an intercept point to add its dynamic roles.
 *
 * @see bbp_switch_to_site()
 * @see bbp_restore_current_site()
 * @see WP_Roles::_init()
 *
 * @since 2.2.0 bbPress (r4363)
 * @deprecated 2.6.0 bbPress (r6105)
 *
 * @internal Used by bbPress to reinitialize dynamic roles on blog switch
 *
 * @param array $roles
 * @return array Combined array of database roles and dynamic bbPress roles
 */
function _bbp_reinit_dynamic_roles($roles = array())
{
}
/**
 * Fetch a filtered list of forum roles that the current user is
 * allowed to have.
 *
 * Simple function who's main purpose is to allow filtering of the
 * list of forum roles so that plugins can remove inappropriate ones depending
 * on the situation or user making edits.
 *
 * Specifically because without filtering, anyone with the edit_users
 * capability can edit others to be administrators, even if they are
 * only editors or authors. This filter allows admins to delegate
 * user management.
 *
 * @since 2.2.0 bbPress (r4284)
 * @since 2.6.0 bbPress (r6117) Use bbpress()->roles
 *
 * @return array
 */
function bbp_get_dynamic_roles()
{
}
/**
 * Gets a translated role name from a role ID
 *
 * @since 2.3.0 bbPress (r4792)
 * @since 2.6.0 bbPress (r6117) Use bbp_translate_user_role()
 *
 * @param string $role_id
 * @return string Translated role name
 */
function bbp_get_dynamic_role_name($role_id = '')
{
}
/**
 * Removes the bbPress roles from the editable roles array
 *
 * This used to use array_diff_assoc() but it randomly broke before 2.2 release.
 * Need to research what happened, and if there's a way to speed this up.
 *
 * @since 2.2.0 bbPress (r4303)
 *
 * @param array $all_roles All registered roles
 * @return array
 */
function bbp_filter_blog_editable_roles($all_roles = array())
{
}
/**
 * The keymaster role for bbPress users
 *
 * @since 2.2.0 bbPress (r4284)
 *
 * @return string
 */
function bbp_get_keymaster_role()
{
}
/**
 * The moderator role for bbPress users
 *
 * @since 2.0.0 bbPress (r3410)
 *
 * @return string
 */
function bbp_get_moderator_role()
{
}
/**
 * The participant role for registered user that can participate in forums
 *
 * @since 2.0.0 bbPress (r3410)
 *
 * @return string
 */
function bbp_get_participant_role()
{
}
/**
 * The spectator role is for registered users without any capabilities
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @return string
 */
function bbp_get_spectator_role()
{
}
/**
 * The blocked role is for registered users that cannot spectate or participate
 *
 * @since 2.2.0 bbPress (r4284)
 *
 * @return string
 */
function bbp_get_blocked_role()
{
}
/**
 * Adds bbPress-specific user roles.
 *
 * @since 2.0.0 bbPress (r2741)
 *
 * @deprecated 2.2.0 bbPress (r4164)
 */
function bbp_add_roles()
{
}
/**
 * Removes bbPress-specific user roles from the `wp_user_roles` array.
 *
 * This is currently only used when updating, uninstalling, or resetting bbPress.
 *
 * @see	bbp_admin_reset_handler()
 * @see bbp_do_uninstall()
 * @see bbp_version_updater()
 *
 * @since 2.0.0 bbPress (r2741)
 */
function bbp_remove_roles()
{
}
/**
 * Possibly intercept the template being loaded
 *
 * Listens to the 'template_include' filter and waits for any bbPress specific
 * template condition to be met. If one is met and the template file exists,
 * it will be used; otherwise
 *
 * Note that the _edit() checks are ahead of their counterparts, to prevent them
 * from being stomped on accident.
 *
 * @since 2.0.0 bbPress (r3032)
 *
 * @param string $template
 *
 * @return string The path to the template file that is being used
 */
function bbp_template_include_theme_supports($template = '')
{
}
/**
 * Set the included template
 *
 * @since 2.4.0 bbPress (r4975)
 *
 * @param mixed $template Default false
 * @return mixed False if empty. Template name if template included
 */
function bbp_set_template_included($template = \false)
{
}
/**
 * Is a bbPress template being included?
 *
 * @since 2.4.0 bbPress (r4975)
 *
 * @return bool True if yes, false if no
 */
function bbp_is_template_included()
{
}
/** Custom Functions **********************************************************/
/**
 * Attempt to load a custom bbPress functions file, similar to each themes
 * functions.php file.
 *
 * @since 2.1.0 bbPress (r3732)
 *
 * @global string $pagenow
 */
function bbp_load_theme_functions()
{
}
/** Individual Templates ******************************************************/
/**
 * Get the user profile template
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return string Path to template file
 */
function bbp_get_single_user_template()
{
}
/**
 * Get the user profile edit template
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return string Path to template file
 */
function bbp_get_single_user_edit_template()
{
}
/**
 * Get the user favorites template
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @return string Path to template file
 */
function bbp_get_favorites_template()
{
}
/**
 * Get the user subscriptions template
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @return string Path to template file
 */
function bbp_get_subscriptions_template()
{
}
/**
 * Get the view template
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return string Path to template file
 */
function bbp_get_single_view_template()
{
}
/**
 * Get the search template
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @return string Path to template file
 */
function bbp_get_search_template()
{
}
/**
 * Get the single forum template
 *
 * @since 2.1.0 bbPress (r3922)
 *
 * @return string Path to template file
 */
function bbp_get_single_forum_template()
{
}
/**
 * Get the forum archive template
 *
 * @since 2.1.0 bbPress (r3922)
 *
 * @return string Path to template file
 */
function bbp_get_forum_archive_template()
{
}
/**
 * Get the forum edit template
 *
 * @since 2.1.0 bbPress (r3566)
 *
 * @return string Path to template file
 */
function bbp_get_forum_edit_template()
{
}
/**
 * Get the single topic template
 *
 * @since 2.1.0 bbPress (r3922)
 *
 * @return string Path to template file
 */
function bbp_get_single_topic_template()
{
}
/**
 * Get the topic archive template
 *
 * @since 2.1.0 bbPress (r3922)
 *
 * @return string Path to template file
 */
function bbp_get_topic_archive_template()
{
}
/**
 * Get the topic edit template
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return string Path to template file
 */
function bbp_get_topic_edit_template()
{
}
/**
 * Get the topic split template
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return string Path to template file
 */
function bbp_get_topic_split_template()
{
}
/**
 * Get the topic merge template
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return string Path to template file
 */
function bbp_get_topic_merge_template()
{
}
/**
 * Get the single reply template
 *
 * @since 2.1.0 bbPress (r3922)
 *
 * @return string Path to template file
 */
function bbp_get_single_reply_template()
{
}
/**
* Get the reply edit template
*
* @since 2.0.0 bbPress (r3311)
*
* @return string Path to template file
*/
function bbp_get_reply_edit_template()
{
}
/**
 * Get the reply move template
 *
 * @since 2.3.0 bbPress (r4521)
 *
 * @return string Path to template file
 */
function bbp_get_reply_move_template()
{
}
/**
 * Get the topic template
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return string Path to template file
 */
function bbp_get_topic_tag_template()
{
}
/**
 * Get the topic edit template
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return string Path to template file
 */
function bbp_get_topic_tag_edit_template()
{
}
/**
 * Get the templates to use as the endpoint for bbPress template parts
 *
 * @since 2.0.0 bbPress (r3311)
 * @since 2.6.0 bbPress (r5950) Added `singular.php` to template stack
 *
 * @return string Path to template file
 */
function bbp_get_theme_compat_templates()
{
}
/**
 * Get the default site options and their values.
 *
 * These option
 *
 * @since 2.0.0 bbPress (r3421)
 *
 * @return array Filtered option names and values
 */
function bbp_get_default_options()
{
}
/**
 * Add default options
 *
 * Hooked to bbp_activate, it is only called once when bbPress is activated.
 * This is non-destructive, so existing settings will not be overridden.
 *
 * @since 2.0.0 bbPress (r3421)
 */
function bbp_add_options()
{
}
/**
 * Delete default options
 *
 * Hooked to bbp_uninstall, it is only called once when bbPress is uninstalled.
 * This is destructive, so existing settings will be destroyed.
 *
 * @since 2.0.0 bbPress (r3421)
 */
function bbp_delete_options()
{
}
/**
 * Add filters to each bbPress option and allow them to be overloaded from
 * inside the $bbp->options array.
 *
 * @since 2.0.0 bbPress (r3451)
 */
function bbp_setup_option_filters()
{
}
/**
 * Filter pre options and maybe overloaded from the $bbp->options array.
 *
 * This function should not be called directly.
 *
 * @since 2.0.0 bbPress (r3451)
 * @access private
 *
 * @param bool   $value  Default value false
 * @param string $option Name of the option
 *
 * @return mixed false if not overloaded, mixed if set
 */
function bbp_filter_pre_get_option($value = \false, $option = '')
{
}
/**
 * Filter default_options set them from inside the $bbp->options array.
 *
 * This function should not be called directly.
 *
 * @since 2.6.0 bbPress (r3451)
 * @access private
 *
 * @param bool $value Optional. Default value false
 * @return mixed false if not overloaded, mixed if set
 */
function bbp_filter_default_option($default = \false, $option = '', $passed_default = \false)
{
}
/**
 * Loads & caches bbPress options if a persistent cache is not being used.
 *
 * @since 2.6.0
 */
function bbp_pre_load_options()
{
}
/** Active? *******************************************************************/
/**
 * Checks if favorites feature is enabled.
 *
 * @since 2.0.0 bbPress (r2658)
 *
 * @param bool $default Optional.Default value true
 * @return bool Is favorites enabled or not
 */
function bbp_is_favorites_active($default = 1)
{
}
/**
 * Checks if subscription feature is enabled.
 *
 * @since 2.0.0 bbPress (r2658)
 *
 * @param bool $default Optional.Default value true
 * @return bool Is subscription enabled or not
 */
function bbp_is_subscriptions_active($default = 1)
{
}
/**
 * Checks if engagements feature is enabled.
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param bool $default Optional.Default value true
 * @return bool Is engagements enabled or not
 */
function bbp_is_engagements_active($default = 1)
{
}
/**
 * Is content editing available when posting new topics & replies?
 *
 * @since 2.6.0 bbPress (r6441)
 *
 * @param bool $default Optional. Default value false
 * @return bool Is content editing allowed?
 */
function bbp_allow_content_edit($default = 1)
{
}
/**
 * Is content throttling engaged when posting new topics & replies?
 *
 * @since 2.6.0 bbPress (r6441)
 *
 * @param bool $default Optional. Default value false
 * @return bool Is content throttling allowed?
 */
function bbp_allow_content_throttle($default = 1)
{
}
/**
 * Are topic tags allowed
 *
 * @since 2.2.0 bbPress (r4097)
 *
 * @param bool $default Optional. Default value true
 * @return bool Are tags allowed?
 */
function bbp_allow_topic_tags($default = 1)
{
}
/**
 * Are per-forum moderators allowed
 *
 * @since 2.6.0 bbPress (r5834)
 *
 * @param bool $default Optional. Default value true.
 *
 * @return bool Are per-forum moderators allowed?
 */
function bbp_allow_forum_mods($default = 1)
{
}
/**
 * Are moderators allowed to edit users
 *
 * @since 2.6.0 bbPress (r6562)
 *
 * @param bool $default Optional. Default value true.
 *
 * @return bool Are moderators allowed to edit users?
 */
function bbp_allow_super_mods($default = 0)
{
}
/**
 * Is forum-wide searching allowed
 *
 * @since 2.4.0 bbPress (r4970)
 *
 * @param bool $default Optional. Default value true
 * @return bool Is forum-wide searching allowed?
 */
function bbp_allow_search($default = 1)
{
}
/**
 * Are threaded replies allowed
 *
 * @since 2.4.0 bbPress (r4964)
 *
 * @param bool $default Optional. Default value false
 * @return bool Are threaded replies allowed?
 */
function bbp_allow_threaded_replies($default = 0)
{
}
/**
 * Maximum reply thread depth
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param int $default Thread replies depth
 * @return int Thread replies depth
 */
function bbp_thread_replies_depth($default = 2)
{
}
/**
 * Are topic and reply revisions allowed
 *
 * @since 2.0.0 bbPress (r3412)
 *
 * @param bool $default Optional. Default value true
 * @return bool Are revisions allowed?
 */
function bbp_allow_revisions($default = 1)
{
}
/**
 * Is the anonymous posting allowed?
 *
 * @since 2.0.0 bbPress (r2659)
 *
 * @param bool $default Optional. Default value
 * @return bool Is anonymous posting allowed?
 */
function bbp_allow_anonymous($default = 0)
{
}
/**
 * Is this forum available to all users on all sites in this installation?
 *
 * @since 2.0.0 bbPress (r3378)
 *
 * @param bool $default Optional. Default value false
 * @return bool Is global access allowed?
 */
function bbp_allow_global_access($default = 1)
{
}
/**
 * Get the default forums role (issued to users on their first visit to the
 * forums) by bbp_set_current_user_default_role() and repair tools
 *
 * @since 2.2.0 bbPress (r4294)
 *
 * @param string $default Optional. Default value empty
 * @return string The default forums user role
 */
function bbp_get_default_role($default = 'bbp_participant')
{
}
/**
 * Use the WordPress editor if available
 *
 * @since 2.0.0 bbPress (r3386)
 *
 * @param bool $default Optional. Default value true
 * @return bool Use WP editor?
 */
function bbp_use_wp_editor($default = 1)
{
}
/**
 * Use WordPress's oEmbed API
 *
 * @since 2.1.0 bbPress (r3752)
 *
 * @param bool $default Optional. Default value true
 * @return bool Use oEmbed?
 */
function bbp_use_autoembed($default = 1)
{
}
/**
 * Get the current theme package ID
 *
 * @since 2.1.0 bbPress (r3829)
 *
 * @param string $default Optional. Default value 'default'
 * @return string ID of the theme-package
 */
function bbp_get_theme_package_id($default = 'default')
{
}
/**
 * Output the maximum length of a title
 *
 * @since 2.0.0 bbPress (r3246)
 *
 * @param bool $default Optional. Default value 80
 */
function bbp_title_max_length($default = 80)
{
}
/**
 * Return the maximum length of a title
 *
 * @since 2.0.0 bbPress (r3246)
 *
 * @param bool $default Optional. Default value 80
 * @return int Is anonymous posting allowed?
 */
function bbp_get_title_max_length($default = 80)
{
}
/**
 * Output the number of minutes a topic or reply can be edited after it's
 * published. Used by `bbp_past_edit_lock()`.
 *
 * @since 2.6.0 bbPress (r6868)
 *
 * @param bool $default Optional. Default value 5
 */
function bbp_edit_lock($default = 5)
{
}
/**
 * Return the number of minutes a topic or reply can be edited after it's
 * published. Used by `bbp_past_edit_lock()`.
 *
 * @since 2.6.0 bbPress (r6868)
 *
 * @param bool $default Optional. Default value 5
 * @return int Is anonymous posting allowed?
 */
function bbp_get_edit_lock($default = 5)
{
}
/**
 * Output the group forums root parent forum id
 *
 * @since 2.1.0 bbPress (r3575)
 *
 * @param int $default Optional. Default value
 */
function bbp_group_forums_root_id($default = 0)
{
}
/**
 * Return the group forums root parent forum id
 *
 * @since 2.1.0 bbPress (r3575)
 *
 * @param bool $default Optional. Default value 0
 * @return int The post ID for the root forum
 */
function bbp_get_group_forums_root_id($default = 0)
{
}
/**
 * Checks if BuddyPress Group Forums are enabled
 *
 * @since 2.1.0 bbPress (r3575)
 *
 * @param bool $default Optional. Default value true
 * @return bool Is group forums enabled or not
 */
function bbp_is_group_forums_active($default = 1)
{
}
/**
 * Checks if Akismet is enabled
 *
 * @since 2.1.0 bbPress (r3575)
 *
 * @param bool $default Optional. Default value true
 * @return bool Is Akismet enabled or not
 */
function bbp_is_akismet_active($default = 1)
{
}
/**
 * Integrate settings into existing WordPress pages
 *
 * There are 3 possible modes:
 * - 'basic'   Traditional admin integration
 * - 'compact' One "bbPress" top-level admin menu
 * - 'deep'    Deeply integrate with the WordPress admin interface
 *
 * @since 2.4.0 bbPress (r4932)
 *
 * @param bool $default Optional. Default value false
 * @return string How to integrate settings
 */
function bbp_settings_integration($default = 'basic')
{
}
/**
 * How to interact with engagements
 *
 * There are 3 possible strategies:
 * - 'meta' 2.6 and higher. Uses multiple postmeta keys.
 * - 'user' Pre-2.6. Uses comma-separated string of IDs in usermeta.
 * - 'term' Alternate. Uses taxonomy term relationships.
 *
 * @since 2.6.0 bbPress (r6875)
 *
 * @param bool $default Optional. Default value false
 * @return string How to interact with engagements
 */
function bbp_engagements_strategy($default = 'meta')
{
}
/** Slugs *********************************************************************/
/**
 * Return the root slug
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'forums'
 * @return string
 */
function bbp_get_root_slug($default = 'forums')
{
}
/**
 * Are we including the root slug in front of forum pages?
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param bool $default Optional. Default value true
 * @return bool
 */
function bbp_include_root_slug($default = 1)
{
}
/**
 * What to show on root, forums or topics?
 *
 * @since 2.4.0 bbPress (r4932)
 *
 * @param string $default Optional. Default value 'forums'
 * @return string
 */
function bbp_show_on_root($default = 'forums')
{
}
/**
 * Maybe return the root slug, based on whether or not it's included in the url
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'forums'
 * @return string
 */
function bbp_maybe_get_root_slug()
{
}
/**
 * Return the single forum slug
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'forum'
 * @return string
 */
function bbp_get_forum_slug($default = 'forum')
{
}
/**
 * Return the topic archive slug
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'topics'
 * @return string
 */
function bbp_get_topic_archive_slug($default = 'topics')
{
}
/**
 * Return the reply archive slug
 *
 * @since 2.4.0 bbPress (r4925)
 *
 * @param string $default Optional. Default value 'replies'
 * @return string
 */
function bbp_get_reply_archive_slug($default = 'replies')
{
}
/**
 * Return the single topic slug
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'topic'
 * @return string
 */
function bbp_get_topic_slug($default = 'topic')
{
}
/**
 * Return the topic-tag taxonomy slug
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'topic-tag'
 * @return string
 */
function bbp_get_topic_tag_tax_slug($default = 'topic-tag')
{
}
/**
 * Return the single reply slug (used mostly for editing)
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'reply'
 * @return string
 */
function bbp_get_reply_slug($default = 'reply')
{
}
/**
 * Return the single user slug
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'users'
 * @return string
 */
function bbp_get_user_slug($default = 'users')
{
}
/**
 * Return the single user favorites slug
 *
 * @since 2.2.0 bbPress (r4187)
 *
 * @param string $default Optional. Default value 'favorites'
 * @return string
 */
function bbp_get_user_favorites_slug($default = 'favorites')
{
}
/**
 * Return the single user subscriptions slug
 *
 * @since 2.2.0 bbPress (r4187)
 *
 * @param string $default Optional. Default value 'subscriptions'
 * @return string
 */
function bbp_get_user_subscriptions_slug($default = 'subscriptions')
{
}
/**
 * Return the single user engagements slug
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param string $default Optional. Default value 'engagements'
 * @return string
 */
function bbp_get_user_engagements_slug($default = 'engagements')
{
}
/**
 * Return the topic view slug
 *
 * @since 2.1.0 bbPress (r3759)
 *
 * @param string $default Optional. Default value 'view'
 * @return string
 */
function bbp_get_view_slug($default = 'view')
{
}
/**
 * Return the search slug
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @param string $default Optional. Default value 'search'
 * @return string
 */
function bbp_get_search_slug($default = 'search')
{
}
/**
 * Return the edit slug
 *
 * @since 2.6.2 bbPress (r6965)
 *
 * @param string $default Optional. Default value 'edit'
 * @return string
 */
function bbp_get_edit_slug($default = 'edit')
{
}
/** Legacy ********************************************************************/
/**
 * Checks if there is a previous BuddyPress Forum configuration
 *
 * @since 2.1.0 bbPress (r3790)
 *
 * @param string $default Optional. Default empty string
 * @return string The location of the bb-config.php file, if any
 */
function bbp_get_config_location($default = '')
{
}
/**
 * Setup Admin
 *
 * This exists outside of "/includes/admin/" because the converter may need to
 * be setup to convert the passwords of users that were migrated from another
 * forum platform.
 *
 * @since 2.6.0 bbPress (r2596)
 */
function bbp_setup_admin()
{
}
/**
 * Setup Converter
 *
 * This exists outside of "/includes/admin/" because the converter may need to
 * be setup to convert the passwords of users that were migrated from another
 * forum platform.
 *
 * @since 2.6.0 bbPress (r2596)
 */
function bbp_setup_converter()
{
}
/** Globals *******************************************************************/
/**
 * Lookup and return a global variable
 *
 * @since 2.5.8 bbPress (r5814)
 *
 * @param  string  $name     Name of global variable
 * @param  string  $type     Type of variable to check with `is_a()`
 * @param  mixed   $default  Default value to return if no global found
 *
 * @return mixed   Verified object if valid, Default or null if invalid
 */
function bbp_get_global_object($name = '', $type = '', $default = \null)
{
}
/**
 * Get the `$wp_query` global without needing to declare it everywhere
 *
 * @since 2.6.0 bbPress (r6582)
 *
 * @return WP_Roles
 */
function bbp_get_wp_query()
{
}
/**
 * Get the `$wp_roles` global without needing to declare it everywhere
 *
 * @since 2.2.0 bbPress (r4293)
 *
 * @return WP_Roles
 */
function bbp_get_wp_roles()
{
}
/**
 * Return the database class being used to interface with the environment.
 *
 * This function is abstracted to avoid global touches to the primary database
 * class. bbPress supports WordPress's `$wpdb` global by default, and can be
 * filtered to support other configurations if needed.
 *
 * @since 2.5.8 bbPress (r5814)
 *
 * @return object
 */
function bbp_db()
{
}
/** Pagination ****************************************************************/
/**
 * Return the rewrite rules class being used to interact with URLs.
 *
 * This function is abstracted to avoid global touches to the primary rewrite
 * rules class. bbPress supports WordPress's `$wp_rewrite` by default, but can
 * be filtered to support other configurations if needed.
 *
 * @since 2.5.8 bbPress (r5814)
 *
 * @return object
 */
function bbp_rewrite()
{
}
/**
 * Get the root URL
 *
 * @since 2.5.8 bbPress (r5814)
 *
 * @return string
 */
function bbp_get_root_url()
{
}
/**
 * Get the slug used for paginated requests
 *
 * @since 2.4.0 bbPress (r4926)
 *
 * @return string
 */
function bbp_get_paged_slug()
{
}
/**
 * Is the environment using pretty URLs?
 *
 * @since 2.5.8 bbPress (r5814)
 *
 * @global object $wp_rewrite The WP_Rewrite object
 *
 * @return bool
 */
function bbp_use_pretty_urls()
{
}
/**
 * Remove the first-page from a pagination links result set, ensuring that it
 * points to the canonical first page URL.
 *
 * This is a bit of an SEO hack, to guarantee that the first page in a loop will
 * never have pagination appended to the end of it, regardless of what the other
 * functions have decided for us.
 *
 * @since 2.6.0 bbPress (r6678)
 *
 * @param string $pagination_links The HTML links used for pagination
 *
 * @return string
 */
function bbp_make_first_page_canonical($pagination_links = '')
{
}
/**
 * A convenient wrapper for common calls to paginate_links(), complete with
 * support for parameters that aren't used internally by bbPress.
 *
 * @since 2.6.0 bbPress (r6679)
 *
 * @param array $args
 *
 * @return string
 */
function bbp_paginate_links($args = array())
{
}
/**
 * Parse the WordPress core version number
 *
 * @since 2.6.0 bbPress (r6051)
 *
 * @global string $wp_version
 *
 * @return string $wp_version
 */
function bbp_get_major_wp_version()
{
}
/** Multisite *****************************************************************/
/**
 * Is this a large bbPress installation?
 *
 * @since 2.6.0 bbPress (r6242)
 *
 * @return bool True if more than 10000 users, false not
 */
function bbp_is_large_install()
{
}
/**
 * Get the total number of users on the forums
 *
 * @since 2.0.0 bbPress (r2769)
 *
 * @return int Total number of users
 */
function bbp_get_total_users()
{
}
/**
 * Switch to a site in a multisite installation.
 *
 * If not a multisite installation, no switching will occur.
 *
 * @since 2.6.0 bbPress (r6733)
 *
 * @param int $site_id
 */
function bbp_switch_to_site($site_id = 0)
{
}
/**
 * Switch back to the original site in a multisite installation.
 *
 * If not a multisite installation, no switching will occur.
 *
 * @since 2.6.0 bbPress (r6733)
 */
function bbp_restore_current_site()
{
}
/** Interception **************************************************************/
/**
 * Generate a default intercept value.
 *
 * @since 2.6.0
 *
 * @staticvar mixed $rand Null by default, random string on first call
 *
 * @return string
 */
function bbp_default_intercept()
{
}
/**
 * Whether a value has been intercepted
 *
 * @since 2.6.0
 *
 * @param bool $value
 */
function bbp_is_intercepted($value = '')
{
}
/**
 * Allow interception of a method or function call.
 *
 * @since 2.6.0
 *
 * @param string $action Typically the name of the caller function
 * @param array  $args   Typically the results of caller function func_get_args()
 *
 * @return mixed         Intercept results. Default bbp_default_intercept().
 */
function bbp_maybe_intercept($action = '', $args = array())
{
}
/** Date/Time *****************************************************************/
/**
 * Get an empty datetime value.
 *
 * @since 2.6.6 bbPress (r7094)
 *
 * @return string
 */
function bbp_get_empty_datetime()
{
}
/** Functions *****************************************************************/
/**
 * Setup the active template pack and register it's directory in the stack.
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @param BBP_Theme_Compat $theme
 */
function bbp_setup_theme_compat($theme = 'default')
{
}
/**
 * Get the current template pack package.
 *
 * @since 2.6.0 bbPress (r6548)
 *
 * @return BBP_Theme_Compat
 */
function bbp_get_current_template_pack()
{
}
/**
 * Gets the id of the bbPress compatible theme used, in the event the
 * currently active WordPress theme does not explicitly support bbPress.
 * This can be filtered or set manually. Tricky theme authors can override the
 * default and include their own bbPress compatibility layers for their themes.
 *
 * @since 2.0.0 bbPress (r3506)
 *
 * @return string
 */
function bbp_get_theme_compat_id()
{
}
/**
 * Gets the name of the bbPress compatible theme used, in the event the
 * currently active WordPress theme does not explicitly support bbPress.
 * This can be filtered or set manually. Tricky theme authors can override the
 * default and include their own bbPress compatibility layers for their themes.
 *
 * @since 2.0.0 bbPress (r3506)
 *
 * @return string
 */
function bbp_get_theme_compat_name()
{
}
/**
 * Gets the version of the bbPress compatible theme used, in the event the
 * currently active WordPress theme does not explicitly support bbPress.
 * This can be filtered or set manually. Tricky theme authors can override the
 * default and include their own bbPress compatibility layers for their themes.
 *
 * @since 2.0.0 bbPress (r3506)
 *
 * @return string
 */
function bbp_get_theme_compat_version()
{
}
/**
 * Gets the bbPress compatible theme used in the event the currently active
 * WordPress theme does not explicitly support bbPress. This can be filtered,
 * or set manually. Tricky theme authors can override the default and include
 * their own bbPress compatibility layers for their themes.
 *
 * @since 2.0.0 bbPress (r3032)
 *
 * @return string
 */
function bbp_get_theme_compat_dir()
{
}
/**
 * Gets the bbPress compatible theme used in the event the currently active
 * WordPress theme does not explicitly support bbPress. This can be filtered,
 * or set manually. Tricky theme authors can override the default and include
 * their own bbPress compatibility layers for their themes.
 *
 * @since 2.0.0 bbPress (r3032)
 *
 * @return string
 */
function bbp_get_theme_compat_url()
{
}
/**
 * Gets true/false if page is currently inside theme compatibility
 *
 * @since 2.0.0 bbPress (r3265)
 *
 * @return bool
 */
function bbp_is_theme_compat_active()
{
}
/**
 * Sets true/false if page is currently inside theme compatibility
 *
 * @since 2.0.0 bbPress (r3265)
 *
 * @param bool $set
 * @return bool
 */
function bbp_set_theme_compat_active($set = \true)
{
}
/**
 * Set the theme compat templates global
 *
 * Stash possible template files for the current query. Useful if plugins want
 * to override them, or see what files are being scanned for inclusion.
 *
 * @since 2.0.0 bbPress (r3311)
 */
function bbp_set_theme_compat_templates($templates = array())
{
}
/**
 * Set the theme compat template global
 *
 * Stash the template file for the current query. Useful if plugins want
 * to override it, or see what file is being included.
 *
 * @since 2.0.0 bbPress (r3311)
 */
function bbp_set_theme_compat_template($template = '')
{
}
/**
 * Set the theme compat original_template global
 *
 * Stash the original template file for the current query. Useful for checking
 * if bbPress was able to find a more appropriate template.
 *
 * @since 2.1.0 bbPress (r3926)
 */
function bbp_set_theme_compat_original_template($template = '')
{
}
/**
 * Is a template the original_template global
 *
 * Stash the original template file for the current query. Useful for checking
 * if bbPress was able to find a more appropriate template.
 *
 * @since 2.1.0 bbPress (r3926)
 */
function bbp_is_theme_compat_original_template($template = '')
{
}
/**
 * Register a new bbPress theme package to the active theme packages array
 *
 * @since 2.1.0 bbPress (r3829)
 *
 * @param array $theme
 */
function bbp_register_theme_package($theme = array(), $override = \true)
{
}
/**
 * This fun little function fills up some WordPress globals with dummy data to
 * stop your average page template from complaining about it missing.
 *
 * @since 2.0.0 bbPress (r3108)
 *
 * @global WP_Query $wp_query
 * @global object $post
 * @param array $args
 */
function bbp_theme_compat_reset_post($args = array())
{
}
/**
 * Reset main query vars and filter 'the_content' to output a bbPress
 * template part as needed.
 *
 * @since 2.0.0 bbPress (r3032)
 *
 * @param string $template
 */
function bbp_template_include_theme_compat($template = '')
{
}
/** Helpers *******************************************************************/
/**
 * Remove the canonical redirect to allow pretty pagination
 *
 * @since 2.0.0 bbPress (r2628)
 *
 * @param string $redirect_url Redirect url
 *
 * @return bool|string False if it's a topic/forum and their first page,
 *                      otherwise the redirect url
 */
function bbp_redirect_canonical($redirect_url)
{
}
/** Filters *******************************************************************/
/**
 * Removes all filters from a WordPress filter, and stashes them in the $bbp
 * global in the event they need to be restored later.
 *
 * @since 2.0.0 bbPress (r3251)
 *
 * @global WP_filter $wp_filter
 * @global array $merged_filters
 * @param string $tag
 * @param int $priority
 * @return bool
 */
function bbp_remove_all_filters($tag, $priority = \false)
{
}
/**
 * Restores filters from the $bbp global that were removed using
 * bbp_remove_all_filters()
 *
 * @since 2.0.0 bbPress (r3251)
 *
 * @global WP_filter $wp_filter
 * @global array $merged_filters
 * @param string $tag
 * @param int $priority
 * @return bool
 */
function bbp_restore_all_filters($tag, $priority = \false)
{
}
/**
 * Force comments_status to 'closed' for bbPress post types
 *
 * @since 2.1.0 bbPress (r3589)
 *
 * @param bool $open True if open, false if closed
 * @param int $post_id ID of the post to check
 * @return bool True if open, false if closed
 */
function bbp_force_comment_status($open = \false, $post_id = 0)
{
}
/**
 * Remove "prev" and "next" relational links from <head> on bbPress pages.
 *
 * WordPress automatically generates these relational links to the current
 * page, but bbPress does not use these links, nor would they work the same.
 *
 * In this function, we remove these links when on a bbPress page. This also
 * prevents additional, unnecessary queries from running.
 *
 * @since 2.6.0 bbPress (r7071)
 */
function bbp_remove_adjacent_posts()
{
}
/**
 * Adds bbPress theme support to any active WordPress theme
 *
 * @since 2.0.0 bbPress (r3032)
 *
 * @param string $slug
 * @param string $name Optional. Default null
 */
function bbp_get_template_part($slug, $name = \null)
{
}
/**
 * Retrieve the name of the highest priority template file that exists.
 *
 * Searches in the child theme before parent theme so that themes which
 * inherit from a parent theme can just overload one file. If the template is
 * not found in either of those, it looks in the theme-compat folder last.
 *
 * @since 2.1.0 bbPress (r3618)
 *
 * @param string|array $template_names Template file(s) to search for, in order.
 * @param bool $load If true the template file will be loaded if it is found.
 * @param bool $require_once Whether to require_once or require. Default true.
 *                            Has no effect if $load is false.
 * @return string The template filename if one is located.
 */
function bbp_locate_template($template_names, $load = \false, $require_once = \true)
{
}
/**
 * Locate an enqueueable file on the server. Used before being enqueued.
 *
 * If SCRIPT_DEBUG is set and the file includes a .min suffix, this function
 * will automatically attempt to locate a non-minified version of that file.
 *
 * If SCRIPT_DEBUG is not set and the file exclude a .min suffix, this function
 * will automatically attempt to locate a minified version of that file.
 *
 * See: https://bbpress.trac.wordpress.org/ticket/3218
 *
 * @since 2.6.0
 *
 * @param string $file
 *
 * @return boolean
 */
function bbp_locate_enqueueable($file = '')
{
}
/**
 * Convert an enqueueable file path to a URL
 *
 * @since 2.6.0
 * @param string $file
 *
 * @return string
 */
function bbp_urlize_enqueueable($file = '')
{
}
/**
 * Enqueue a script from the highest priority location in the template stack.
 *
 * Registers the style if file provided (does NOT overwrite) and enqueues.
 *
 * @since 2.5.0 bbPress (r5180)
 *
 * @param string      $handle Name of the stylesheet.
 * @param string|bool $file   Relative path to stylesheet. Example: '/css/mystyle.css'.
 * @param array       $deps   An array of registered style handles this stylesheet depends on. Default empty array.
 * @param string|bool $ver    String specifying the stylesheet version number, if it has one. This parameter is used
 *                            to ensure that the correct version is sent to the client regardless of caching, and so
 *                            should be included if a version number is available and makes sense for the stylesheet.
 * @param string      $media  Optional. The media for which this stylesheet has been defined.
 *                            Default 'all'. Accepts 'all', 'aural', 'braille', 'handheld', 'projection', 'print',
 *                            'screen', 'tty', or 'tv'.
 *
 * @return mixed The style filename if one is located. False if not.
 */
function bbp_enqueue_style($handle = '', $file = '', $deps = array(), $ver = \false, $media = 'all')
{
}
/**
 * Enqueue a script from the highest priority location in the template stack.
 *
 * Registers the style if file provided (does NOT overwrite) and enqueues.
 *
 * @since 2.5.0 bbPress (r5180)
 *
 * @param string      $handle    Name of the script.
 * @param string|bool $file      Relative path to the script. Example: '/js/myscript.js'.
 * @param array       $deps      An array of registered handles this script depends on. Default empty array.
 * @param string|bool $ver       Optional. String specifying the script version number, if it has one. This parameter
 *                               is used to ensure that the correct version is sent to the client regardless of caching,
 *                               and so should be included if a version number is available and makes sense for the script.
 * @param bool        $in_footer Optional. Whether to enqueue the script before </head> or before </body>.
 *                               Default 'false'. Accepts 'false' or 'true'.
 *
 * @return mixed The script filename if one is located. False if not.
 */
function bbp_enqueue_script($handle = '', $file = '', $deps = array(), $ver = \false, $in_footer = \false)
{
}
/**
 * This is really cool. This function registers a new template stack location,
 * using WordPress's built in filters API.
 *
 * This allows for templates to live in places beyond just the parent/child
 * relationship, to allow for custom template locations. Used in conjunction
 * with bbp_locate_template(), this allows for easy template overrides.
 *
 * @since 2.2.0 bbPress (r4323)
 *
 * @param string $location_callback Callback function that returns the
 * @param int $priority
 */
function bbp_register_template_stack($location_callback = '', $priority = 10)
{
}
/**
 * Deregisters a previously registered template stack location.
 *
 * @since 2.3.0 bbPress (r4652)
 *
 * @param string $location_callback Callback function that returns the
 * @param int $priority
 * @return bool Whether stack was removed
 */
function bbp_deregister_template_stack($location_callback = '', $priority = 10)
{
}
/**
 * Call the functions added to the 'bbp_template_stack' filter hook, and return
 * an array of the template locations.
 *
 * @since 2.2.0 bbPress (r4323)
 * @since 2.6.0 bbPress (r5944) Added support for `WP_Hook`
 *
 * @global array $wp_filter Stores all of the filters
 * @global array $merged_filters Merges the filter hooks using this function.
 * @global array $wp_current_filter stores the list of current filters with the current one last
 *
 * @return array The filtered value after all hooked functions are applied to it.
 */
function bbp_get_template_stack()
{
}
/**
 * Get a template part in an output buffer, and return it
 *
 * @since 2.4.0 bbPress (r5043)
 *
 * @param string $slug
 * @param string $name
 * @return string
 */
function bbp_buffer_template_part($slug, $name = \null, $echo = \true)
{
}
/**
 * Retrieve path to a template
 *
 * Used to quickly retrieve the path of a template without including the file
 * extension. It will also check the parent theme and theme-compat theme with
 * the use of {@link bbp_locate_template()}. Allows for more generic template
 * locations without the use of the other get_*_template() functions.
 *
 * @since 2.1.0 bbPress (r3629)
 *
 * @param string $type Filename without extension.
 * @param array $templates An optional list of template candidates
 * @return string Full path to file.
 */
function bbp_get_query_template($type, $templates = array())
{
}
/**
 * Get the possible subdirectories to check for templates in
 *
 * @since 2.1.0 bbPress (r3738)
 *
 * @param array $templates Templates we are looking for
 * @return array Possible subdirectories to look in
 */
function bbp_get_template_locations($templates = array())
{
}
/**
 * Add template locations to template files being searched for
 *
 * @since 2.1.0 bbPress (r3738)
 *
 * @param array $stacks
 * @return array()
 */
function bbp_add_template_stack_locations($stacks = array())
{
}
/**
 * Add checks for bbPress conditions to parse_query action
 *
 * If it's a user page, WP_Query::bbp_is_single_user is set to true.
 *
 * If it's a user edit page, WP_Query::bbp_is_single_user_edit is set to true
 * and the the 'wp-admin/includes/user.php' file is included.
 *
 * In addition, on user/user edit pages, WP_Query::home is set to false & query
 * vars 'bbp_user_id' with the displayed user id is added.
 *
 * In 2.6.0, the 'author_name' variable is no longer set when viewing a single
 * user, because of is_author() weirdness. If this removal causes problems, it
 * may come back in a future release.
 *
 * If it's a forum edit, WP_Query::bbp_is_forum_edit is set to true
 * If it's a topic edit, WP_Query::bbp_is_topic_edit is set to true
 * If it's a reply edit, WP_Query::bbp_is_reply_edit is set to true.
 *
 * If it's a view page, WP_Query::bbp_is_view is set to true
 * If it's a search page, WP_Query::bbp_is_search is set to true
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param WP_Query $posts_query
 */
function bbp_parse_query($posts_query)
{
}
/** Insert ********************************************************************/
/**
 * A wrapper for wp_insert_post() that also includes the necessary meta values
 * for the reply to function properly.
 *
 * @since 2.0.0 bbPress (r3349)
 *
 * @param array $reply_data Forum post data
 * @param array $reply_meta Forum meta data
 */
function bbp_insert_reply($reply_data = array(), $reply_meta = array())
{
}
/**
 * Update counts after a reply is inserted via `bbp_insert_reply`.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $reply_id The reply id.
 * @param int $topic_id The topic id.
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_insert_reply_update_counts($reply_id = 0, $topic_id = 0, $forum_id = 0)
{
}
/** Post Form Handlers ********************************************************/
/**
 * Handles the front end reply submission
 *
 * @since 2.0.0 bbPress (r2574)
 *
 * @param string $action The requested action to compare this function to
 *                    id, anonymous data, reply author, edit (false), and
 *                    the reply to id
 */
function bbp_new_reply_handler($action = '')
{
}
/**
 * Handles the front end edit reply submission
 *
 * @param string $action The requested action to compare this function to
 *                    id, anonymous data, reply author, bool true (for edit),
 *                    and the reply to id
 */
function bbp_edit_reply_handler($action = '')
{
}
/**
 * Handle all the extra meta stuff from posting a new reply or editing a reply
 *
 * @param int $reply_id Optional. Reply id
 * @param int $topic_id Optional. Topic id
 * @param int $forum_id Optional. Forum id
 * @param array $anonymous_data Optional - if it's an anonymous post. Do not
 *                              supply if supplying $author_id. Should be
 *                              sanitized (see {@link bbp_filter_anonymous_post_data()}
 * @param int $author_id Author id
 * @param bool $is_edit Optional. Is the post being edited? Defaults to false.
 * @param int $reply_to Optional. Reply to id
 */
function bbp_update_reply($reply_id = 0, $topic_id = 0, $forum_id = 0, $anonymous_data = array(), $author_id = 0, $is_edit = \false, $reply_to = 0)
{
}
/**
 * Walk up the ancestor tree from the current reply, and update all the counts
 *
 * @since 2.0.0 bbPress (r2884)
 *
 * @param int $reply_id Optional. Reply id
 * @param string $last_active_time Optional. Last active time
 * @param int $forum_id Optional. Forum id
 * @param int $topic_id Optional. Topic id
 * @param bool $refresh If set to true, unsets all the previous parameters.
 *                       Defaults to true
 */
function bbp_update_reply_walker($reply_id, $last_active_time = '', $forum_id = 0, $topic_id = 0, $refresh = \true)
{
}
/** Reply Updaters ************************************************************/
/**
 * Update the reply with its forum id it is in
 *
 * @since 2.0.0 bbPress (r2855)
 *
 * @param int $reply_id Optional. Reply id to update
 * @param int $forum_id Optional. Forum id
 * @return bool The forum id of the reply
 */
function bbp_update_reply_forum_id($reply_id = 0, $forum_id = 0)
{
}
/**
 * Update the reply with its topic id it is in
 *
 * @since 2.0.0 bbPress (r2855)
 *
 * @param int $reply_id Optional. Reply id to update
 * @param int $topic_id Optional. Topic id
 * @return bool The topic id of the reply
 */
function bbp_update_reply_topic_id($reply_id = 0, $topic_id = 0)
{
}
/*
 * Update the meta data with its parent reply-to id, of a reply
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param int $reply_id Reply id to update
 * @param int $reply_to Optional. Reply to id
 * @return bool The parent reply id of the reply
 */
function bbp_update_reply_to($reply_id = 0, $reply_to = 0)
{
}
/**
 * Get all ancestors to a reply
 *
 * Because settings can be changed, this function does not care if hierarchical
 * replies are active or to what depth.
 *
 * @since 2.6.0 bbPress (r5390)
 *
 * @param int $reply_id
 * @return array
 */
function bbp_get_reply_ancestors($reply_id = 0)
{
}
/**
 * Update the revision log of the reply
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param array $args Supports these args:
 *  - reply_id: reply id
 *  - author_id: Author id
 *  - reason: Reason for editing
 *  - revision_id: Revision id
 * @return mixed False on failure, true on success
 */
function bbp_update_reply_revision_log($args = array())
{
}
/**
 * Move reply handler
 *
 * Handles the front end move reply submission
 *
 * @since 2.3.0 bbPress (r4521)
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_move_reply_handler($action = '')
{
}
/**
 * Fix counts on reply move
 *
 * When a reply is moved, update the counts of source and destination topic
 * and their forums.
 *
 * @since 2.3.0 bbPress (r4521)
 *
 * @param int $move_reply_id Move reply id
 * @param int $source_topic_id Source topic id
 * @param int $destination_topic_id Destination topic id
 */
function bbp_move_reply_count($move_reply_id, $source_topic_id, $destination_topic_id)
{
}
/** Reply Actions *************************************************************/
/**
 * Handles the front end spamming/unspamming and trashing/untrashing/deleting of
 * replies
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_toggle_reply_handler($action = '')
{
}
/**
 * Do the actual reply toggling
 *
 * This function is used by `bbp_toggle_reply_handler()` to do the actual heavy
 * lifting when it comes to toggling replies. It only really makes sense to call
 * within that context, so if you need to call this function directly, make sure
 * you're also doing what the handler does too.
 *
 * @since 2.6.0 bbPress (r6133)
 * @access private
 *
 * @param array $args
 */
function bbp_toggle_reply($args = array())
{
}
/** Helpers *******************************************************************/
/**
 * Return an associative array of available reply statuses
 *
 * @since 2.6.0 bbPress (r5399)
 *
 * @param int $reply_id   Optional. Reply id.
 *
 * @return array
 */
function bbp_get_reply_statuses($reply_id = 0)
{
}
/**
 * Return array of available reply toggle actions
 *
 * @since 2.6.0 bbPress (r6133)
 *
 * @param int $reply_id   Optional. Reply id.
 *
 * @return array
 */
function bbp_get_reply_toggles($reply_id = 0)
{
}
/**
 * Return array of public reply statuses.
 *
 * @since 2.6.0 bbPress (r6705)
 *
 * @return array
 */
function bbp_get_public_reply_statuses()
{
}
/**
 * Return array of non-public reply statuses.
 *
 * @since 2.6.0 bbPress (r6791)
 *
 * @return array
 */
function bbp_get_non_public_reply_statuses()
{
}
/** Reply Actions *************************************************************/
/**
 * Marks a reply as spam
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $reply_id Reply id
 * @return mixed False or {@link WP_Error} on failure, reply id on success
 */
function bbp_spam_reply($reply_id = 0)
{
}
/**
 * Unspams a reply
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $reply_id Reply id
 * @return mixed False or {@link WP_Error} on failure, reply id on success
 */
function bbp_unspam_reply($reply_id = 0)
{
}
/**
 * Approves a reply
 *
 * @since 2.6.0 bbPress (r5506)
 *
 * @param int $reply_id Reply id
 * @return mixed False or {@link WP_Error} on failure, reply id on success
 */
function bbp_approve_reply($reply_id = 0)
{
}
/**
 * Unapproves a reply
 *
 * @since 2.6.0 bbPress (r5506)
 *
 * @param int $reply_id Reply id
 * @return mixed False or {@link WP_Error} on failure, reply id on success
 */
function bbp_unapprove_reply($reply_id = 0)
{
}
/** Before Delete/Trash/Untrash ***********************************************/
/**
 * Called before deleting a reply
 */
function bbp_delete_reply($reply_id = 0)
{
}
/**
 * Called before trashing a reply
 */
function bbp_trash_reply($reply_id = 0)
{
}
/**
 * Called before untrashing (restoring) a reply
 */
function bbp_untrash_reply($reply_id = 0)
{
}
/** After Delete/Trash/Untrash ************************************************/
/**
 * Called after deleting a reply
 *
 * @since 2.0.0 bbPress (r2993)
 */
function bbp_deleted_reply($reply_id = 0)
{
}
/**
 * Called after trashing a reply
 *
 * @since 2.0.0 bbPress (r2993)
 */
function bbp_trashed_reply($reply_id = 0)
{
}
/**
 * Called after untrashing (restoring) a reply
 *
 * @since 2.0.0 bbPress (r2993)
 */
function bbp_untrashed_reply($reply_id = 0)
{
}
/** Settings ******************************************************************/
/**
 * Return the replies per page setting
 *
 * @since 2.0.0 bbPress (r3540)
 *
 * @param int $default Default replies per page (15)
 * @return int
 */
function bbp_get_replies_per_page($default = 15)
{
}
/**
 * Return the replies per RSS page setting
 *
 * @since 2.0.0 bbPress (r3540)
 *
 * @param int $default Default replies per page (25)
 * @return int
 */
function bbp_get_replies_per_rss_page($default = 25)
{
}
/** Autoembed *****************************************************************/
/**
 * Check if autoembeds are enabled and hook them in if so
 *
 * @since 2.1.0 bbPress (r3752)
 *
 * @global WP_Embed $wp_embed
 */
function bbp_reply_content_autoembed()
{
}
/** Filters *******************************************************************/
/**
 * Used by bbp_has_replies() to add the lead topic post to the posts loop
 *
 * This function filters the 'post_where' of the WP_Query, and changes the query
 * to include both the topic AND its children in the same loop.
 *
 * @since 2.1.0 bbPress (r4058)
 *
 * @param string $where
 * @param WP_Query $query
 * @return string
 */
function _bbp_has_replies_where($where = '', $query = \false)
{
}
/** Feeds *********************************************************************/
/**
 * Output an RSS2 feed of replies, based on the query passed.
 *
 * @since 2.0.0 bbPress (r3171)
 *
 * @param array $replies_query
 */
function bbp_display_replies_feed_rss2($replies_query = array())
{
}
/** Permissions ***************************************************************/
/**
 * Redirect if unauthorized user is attempting to edit a reply
 *
 * @since 2.1.0 bbPress (r3605)
 */
function bbp_check_reply_edit()
{
}
/** Reply Position ************************************************************/
/**
 * Update the position of the reply.
 *
 * The reply position is stored in the menu_order column of the posts table.
 * This is done to prevent using a meta_query to retrieve posts in the proper
 * freshness order. By updating the menu_order accordingly, we're able to
 * leverage core WordPress query ordering much more effectively.
 *
 * @since 2.1.0 bbPress (r3933)
 *
 * @param int $reply_id
 * @param int $reply_position
 *
 * @return mixed
 */
function bbp_update_reply_position($reply_id = 0, $reply_position = \false)
{
}
/**
 * Get the position of a reply by querying the DB directly for the replies
 * of a given topic.
 *
 * @since 2.1.0 bbPress (r3933)
 *
 * @param int $reply_id
 * @param int $topic_id
 */
function bbp_get_reply_position_raw($reply_id = 0, $topic_id = 0)
{
}
/** Hierarchical Replies ******************************************************/
/**
 * Are replies threaded?
 *
 * @since 2.4.0 bbPress (r4944)
 * @since 2.6.0 bbPress (r6245) Always false on user profile reply pages
 *
 * @param bool $default Optional. Default value true
 *
 * @return bool Are replies threaded?
 */
function bbp_thread_replies()
{
}
/**
 * List threaded replies
 *
 * @since 2.4.0 bbPress (r4944)
 */
function bbp_list_replies($args = array())
{
}
/**
 * Validate a `reply_to` field for hierarchical replies
 *
 * Checks for 2 scenarios:
 * -- The reply to ID is actually a reply
 * -- The reply to ID does not match the current reply
 *
 * @see https://bbpress.trac.wordpress.org/ticket/2588
 * @see https://bbpress.trac.wordpress.org/ticket/2586
 *
 * @since 2.5.4 bbPress (r5377)
 *
 * @param int $reply_to
 * @param int $reply_id
 *
 * @return int $reply_to
 */
function bbp_validate_reply_to($reply_to = 0, $reply_id = 0)
{
}
/**
 * bbPress Reply Capabilites
 *
 * Used to map reply capabilities to WordPress's existing capabilities.
 *
 * @package bbPress
 * @subpackage Capabilities
 */
/**
 * Return reply capabilities
 *
 * @since 2.0.0 bbPress (r2593)
 *
 * @return array Reply capabilities
 */
function bbp_get_reply_caps()
{
}
/**
 * Maps topic capabilities
 *
 * @since 2.2.0 bbPress (r4242)
 *
 * @param array  $caps    Capabilities for meta capability.
 * @param string $cap     Capability name.
 * @param int    $user_id User id.
 * @param array  $args    Arguments.
 *
 * @return array Actual capabilities for meta capability
 */
function bbp_map_reply_meta_caps($caps = array(), $cap = '', $user_id = 0, $args = array())
{
}
/** Post Type *****************************************************************/
/**
 * Return the unique id of the custom post type for replies
 *
 * @since 2.0.0 bbPress (r2857)
 *
 */
function bbp_reply_post_type()
{
}
/**
 * Return the unique id of the custom post type for replies
 *
 * @since 2.0.0 bbPress (r2857)
 *
 *                        post type id
 * @return string The unique reply post type id
 */
function bbp_get_reply_post_type()
{
}
/**
 * Return array of labels used by the reply post type
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_reply_post_type_labels()
{
}
/**
 * Return array of reply post type rewrite settings
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_reply_post_type_rewrite()
{
}
/**
 * Return array of features the reply post type supports
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_reply_post_type_supports()
{
}
/** Reply Loop Functions ******************************************************/
/**
 * The main reply loop. WordPress makes this easy for us
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param array $args All the arguments supported by {@link WP_Query}
 * @return object Multidimensional array of reply information
 */
function bbp_has_replies($args = array())
{
}
/**
 * Whether there are more replies available in the loop
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @return object Replies information
 */
function bbp_replies()
{
}
/**
 * Loads up the current reply in the loop
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @return object Reply information
 */
function bbp_the_reply()
{
}
/**
 * Output reply id
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param $reply_id Optional. Used to check emptiness
 */
function bbp_reply_id($reply_id = 0)
{
}
/**
 * Return the id of the reply in a replies loop
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param $reply_id Optional. Used to check emptiness
 * @return int The reply id
 */
function bbp_get_reply_id($reply_id = 0)
{
}
/**
 * Gets a reply
 *
 * @since 2.0.0 bbPress (r2787)
 *
 * @param int|object $reply reply id or reply object
 * @param string $output Optional. OBJECT, ARRAY_A, or ARRAY_N. Default = OBJECT
 * @param string $filter Optional Sanitation filter. See {@link sanitize_post()}
 * @return mixed Null if error or reply (in specified form) if success
 */
function bbp_get_reply($reply, $output = \OBJECT, $filter = 'raw')
{
}
/**
 * Output the link to the reply in the reply loop
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_permalink($reply_id = 0)
{
}
/**
 * Return the link to the reply
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. Reply id
 *
 * @return string Permanent link to reply
 */
function bbp_get_reply_permalink($reply_id = 0)
{
}
/**
 * Output the paginated url to the reply in the reply loop
 *
 * @since 2.0.0 bbPress (r2679)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_url($reply_id = 0)
{
}
/**
 * Return the paginated url to the reply in the reply loop
 *
 * @since 2.0.0 bbPress (r2679)
 *
 * @param int $reply_id Optional. Reply id
 * @param string $redirect_to Optional. Pass a redirect value for use with
 *                              shortcodes and other fun things.
 * @return string Link to reply relative to paginated topic
 */
function bbp_get_reply_url($reply_id = 0, $redirect_to = '')
{
}
/**
 * Output the title of the reply
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_title($reply_id = 0)
{
}
/**
 * Return the title of the reply
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Title of reply
 */
function bbp_get_reply_title($reply_id = 0)
{
}
/**
 * Get empty reply title fallback.
 *
 * @since 2.5.0 bbPress (r5177)
 *
 * @param string $post_title Required. Reply Title
 * @param int $post_id Required. Reply ID
 * @return string Title of reply
 */
function bbp_get_reply_title_fallback($post_title = '', $post_id = 0)
{
}
/**
 * Output the content of the reply
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. reply id
 */
function bbp_reply_content($reply_id = 0)
{
}
/**
 * Return the content of the reply
 *
 * @since 2.0.0 bbPress (r2780)
 *
 * @param int $reply_id Optional. reply id
 * @return string Content of the reply
 */
function bbp_get_reply_content($reply_id = 0)
{
}
/**
 * Output the excerpt of the reply
 *
 * @since 2.0.0 bbPress (r2751)
 *
 * @param int $reply_id Optional. Reply id
 * @param int $length Optional. Length of the excerpt. Defaults to 100 letters
 */
function bbp_reply_excerpt($reply_id = 0, $length = 100)
{
}
/**
 * Return the excerpt of the reply
 *
 * @since 2.0.0 bbPress (r2751)
 *
 * @param int $reply_id Optional. Reply id
 * @param int $length Optional. Length of the excerpt. Defaults to 100
 *                     letters
 * @return string Reply Excerpt
 */
function bbp_get_reply_excerpt($reply_id = 0, $length = 100)
{
}
/**
 * Output the post date and time of a reply
 *
 * @since 2.2.0 bbPress (r4155)
 *
 * @param int $reply_id Optional. Reply id.
 * @param bool $humanize Optional. Humanize output using time_since
 * @param bool $gmt Optional. Use GMT
 */
function bbp_reply_post_date($reply_id = 0, $humanize = \false, $gmt = \false)
{
}
/**
 * Return the post date and time of a reply
 *
 * @since 2.2.0 bbPress (r4155)
 *
 * @param int $reply_id Optional. Reply id.
 * @param bool $humanize Optional. Humanize output using time_since
 * @param bool $gmt Optional. Use GMT
 * @return string
 */
function bbp_get_reply_post_date($reply_id = 0, $humanize = \false, $gmt = \false)
{
}
/**
 * Append revisions to the reply content
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param string $content Optional. Content to which we need to append the revisions to
 * @param int $reply_id Optional. Reply id
 * @return string Content with the revisions appended
 */
function bbp_reply_content_append_revisions($content = '', $reply_id = 0)
{
}
/**
 * Output the revision log of the reply
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_revision_log($reply_id = 0)
{
}
/**
 * Return the formatted revision log of the reply
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Revision log of the reply
 */
function bbp_get_reply_revision_log($reply_id = 0)
{
}
/**
 * Return the raw revision log of the reply
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Raw revision log of the reply
 */
function bbp_get_reply_raw_revision_log($reply_id = 0)
{
}
/**
 * Return the revisions of the reply
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $reply_id Optional. Reply id
 * @return WP_Post[]|int[] reply revisions
 */
function bbp_get_reply_revisions($reply_id = 0)
{
}
/**
 * Return the revision count of the reply
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $reply_id Optional. Reply id
 * @param boolean $integer Optional. Whether or not to format the result
 * @return string reply revision count
 */
function bbp_get_reply_revision_count($reply_id = 0, $integer = \false)
{
}
/**
 * Output the status of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_status($reply_id = 0)
{
}
/**
 * Return the status of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Status of reply
 */
function bbp_get_reply_status($reply_id = 0)
{
}
/**
 * Is the reply publicly viewable?
 *
 * See bbp_get_public_reply_statuses() for public statuses.
 *
 * @since 2.6.0 bbPress (r6391)
 *
 * @param int $reply_id Optional. Reply id
 * @return bool True if public, false if not.
 */
function bbp_is_reply_public($reply_id = 0)
{
}
/**
 * Is the reply not spam or deleted?
 *
 * @since 2.0.0 bbPress (r3496)
 * @since 2.6.0 bbPress (r6922) Returns false if topic is also not published
 *
 * @param int $reply_id Optional. Topic id
 * @return bool True if published, false if not.
 */
function bbp_is_reply_published($reply_id = 0)
{
}
/**
 * Is the reply marked as spam?
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $reply_id Optional. Reply id
 * @return bool True if spam, false if not.
 */
function bbp_is_reply_spam($reply_id = 0)
{
}
/**
 * Is the reply trashed?
 *
 * @since 2.0.0 bbPress (r2884)
 *
 * @param int $reply_id Optional. Topic id
 * @return bool True if spam, false if not.
 */
function bbp_is_reply_trash($reply_id = 0)
{
}
/**
 * Is the reply pending?
 *
 * @since 2.6.0 bbPress (r5507)
 *
 * @param int $reply_id Optional. Topic id
 * @return bool True if pending, false if not.
 */
function bbp_is_reply_pending($reply_id = 0)
{
}
/**
 * Is the reply private?
 *
 * @since 2.6.0 bbPress (r5507)
 *
 * @param int $reply_id Optional. Topic id
 * @return bool True if private, false if not.
 */
function bbp_is_reply_private($reply_id = 0)
{
}
/**
 * Is the reply by an anonymous user?
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @param int $reply_id Optional. Reply id
 * @return bool True if the post is by an anonymous user, false if not.
 */
function bbp_is_reply_anonymous($reply_id = 0)
{
}
/**
 * Deprecated. Use bbp_reply_author_display_name() instead.
 *
 * Output the author of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @deprecated 2.5.0 bbPress (r5119)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_author($reply_id = 0)
{
}
/**
 * Deprecated. Use bbp_get_reply_author_display_name() instead.
 *
 * Return the author of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @deprecated 2.5.0 bbPress (r5119)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Author of reply
 */
function bbp_get_reply_author($reply_id = 0)
{
}
/**
 * Output the author ID of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_author_id($reply_id = 0)
{
}
/**
 * Return the author ID of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Author id of reply
 */
function bbp_get_reply_author_id($reply_id = 0)
{
}
/**
 * Output the author display_name of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_author_display_name($reply_id = 0)
{
}
/**
 * Return the author display_name of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 * @return string The display name of the author of the reply
 */
function bbp_get_reply_author_display_name($reply_id = 0)
{
}
/**
 * Output the author avatar of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 * @param int $size Optional. Size of the avatar. Defaults to 40
 */
function bbp_reply_author_avatar($reply_id = 0, $size = 40)
{
}
/**
 * Return the author avatar of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 * @param int $size Optional. Size of the avatar. Defaults to 40
 * @return string Avatar of author of the reply
 */
function bbp_get_reply_author_avatar($reply_id = 0, $size = 40)
{
}
/**
 * Output the author link of the reply
 *
 * @since 2.0.0 bbPress (r2717)
 *
 * @param array $args Optional. If it is an integer, it is used as reply id.
 */
function bbp_reply_author_link($args = array())
{
}
/**
 * Return the author link of the reply
 *
 * @since 2.0.0 bbPress (r2717)
 *
 * @param array $args Optional. If an integer, it is used as reply id.
 * @return string Author link of reply
 */
function bbp_get_reply_author_link($args = array())
{
}
/**
 * Output the author url of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_author_url($reply_id = 0)
{
}
/**
 * Return the author url of the reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Author URL of the reply
 */
function bbp_get_reply_author_url($reply_id = 0)
{
}
/**
 * Output the reply author email address
 *
 * @since 2.0.0 bbPress (r3445)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_author_email($reply_id = 0)
{
}
/**
 * Return the reply author email address
 *
 * @since 2.0.0 bbPress (r3445)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Reply author email address
 */
function bbp_get_reply_author_email($reply_id = 0)
{
}
/**
 * Output the reply author role
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @param array $args Optional.
 */
function bbp_reply_author_role($args = array())
{
}
/**
 * Return the reply author role
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @param array $args Optional.
 * @return string Reply author role
 */
function bbp_get_reply_author_role($args = array())
{
}
/**
 * Output the topic title a reply belongs to
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_topic_title($reply_id = 0)
{
}
/**
 * Return the topic title a reply belongs to
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. Reply id
 * @return string The topic title of the reply
 */
function bbp_get_reply_topic_title($reply_id = 0)
{
}
/**
 * Output the topic id a reply belongs to
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_topic_id($reply_id = 0)
{
}
/**
 * Return the topic id a reply belongs to
 *
 * @since 2.0.0 bbPress (r2553)
 *
 * @param int $reply_id Optional. Reply id
 * @return int The topic id of the reply
 */
function bbp_get_reply_topic_id($reply_id = 0)
{
}
/**
 * Output the forum id a reply belongs to
 *
 * @since 2.0.0 bbPress (r2679)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_forum_id($reply_id = 0)
{
}
/**
 * Return the forum id a reply belongs to
 *
 * @since 2.0.0 bbPress (r2679)
 *
 * @param int $reply_id Optional. Reply id
 *
 * @return int The forum id of the reply
 */
function bbp_get_reply_forum_id($reply_id = 0)
{
}
/**
 * Output the ancestor reply id of a reply
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_ancestor_id($reply_id = 0)
{
}
/**
 * Return the ancestor reply id of a reply
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param in $reply_id Reply id
 */
function bbp_get_reply_ancestor_id($reply_id = 0)
{
}
/**
 * Output the reply to id of a reply
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_to($reply_id = 0)
{
}
/**
 * Return the reply to id of a reply
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param int $reply_id Optional. Reply id
 * @return int The parent reply id of the reply
 */
function bbp_get_reply_to($reply_id = 0)
{
}
/**
 * Output the link for the reply to
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param array $args
 */
function bbp_reply_to_link($args = array())
{
}
/**
 * Return the link for a reply to a reply
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param array $args Arguments
 * @return string Link for a reply to a reply
 */
function bbp_get_reply_to_link($args = array())
{
}
/**
 * Output the reply to a reply cancellation link
 *
 * @since 2.4.0 bbPress (r4944)
 */
function bbp_cancel_reply_to_link($text = '')
{
}
/**
 * Return the cancellation link for a reply to a reply
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @param string $text The cancel text
 * @return string The cancellation link
 */
function bbp_get_cancel_reply_to_link($text = '')
{
}
/**
 * Output the numeric position of a reply within a topic
 *
 * @since 2.0.0 bbPress (r2984)
 *
 * @param int $reply_id Optional. Reply id
 * @param int $topic_id Optional. Topic id
 */
function bbp_reply_position($reply_id = 0, $topic_id = 0)
{
}
/**
 * Return the numeric position of a reply within a topic
 *
 * @since 2.0.0 bbPress (r2984)
 *
 * @param int $reply_id Optional. Reply id
 * @param int $topic_id Optional. Topic id
 * @return int Reply position
 */
function bbp_get_reply_position($reply_id = 0, $topic_id = 0)
{
}
/** Reply Admin Links *********************************************************/
/**
 * Output admin links for reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param array $args See {@link bbp_get_reply_admin_links()}
 */
function bbp_reply_admin_links($args = array())
{
}
/**
 * Return admin links for reply
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param array $args This function supports these arguments:
 *  - id: Optional. Reply id
 *  - before: HTML before the links. Defaults to
 *             '<span class="bbp-admin-links">'
 *  - after: HTML after the links. Defaults to '</span>'
 *  - sep: Separator. Defaults to ' | '
 *  - links: Array of the links to display. By default, edit, trash,
 *            spam, reply move, and topic split links are displayed
 * @return string Reply admin links
 */
function bbp_get_reply_admin_links($args = array())
{
}
/**
 * Output the edit link of the reply
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param array $args See {@link bbp_get_reply_edit_link()}
 */
function bbp_reply_edit_link($args = array())
{
}
/**
 * Return the edit link of the reply
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param array $args This function supports these arguments:
 *  - id: Reply id
 *  - link_before: HTML before the link
 *  - link_after: HTML after the link
 *  - edit_text: Edit text. Defaults to 'Edit'
 * @return string Reply edit link
 */
function bbp_get_reply_edit_link($args = array())
{
}
/**
 * Output URL to the reply edit page
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @param int $reply_id Optional. Reply id
 */
function bbp_reply_edit_url($reply_id = 0)
{
}
/**
 * Return URL to the reply edit page
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @param int $reply_id Optional. Reply id
 * @return string Reply edit url
 */
function bbp_get_reply_edit_url($reply_id = 0)
{
}
/**
 * Output the trash link of the reply
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param array $args See {@link bbp_get_reply_trash_link()}
 */
function bbp_reply_trash_link($args = array())
{
}
/**
 * Return the trash link of the reply
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param array $args This function supports these arguments:
 *  - id: Reply id
 *  - link_before: HTML before the link
 *  - link_after: HTML after the link
 *  - sep: Separator
 *  - trash_text: Trash text
 *  - restore_text: Restore text
 *  - delete_text: Delete text
 * @return string Reply trash link
 */
function bbp_get_reply_trash_link($args = array())
{
}
/**
 * Output the spam link of the reply
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param array $args See {@link bbp_get_reply_spam_link()}
 */
function bbp_reply_spam_link($args = array())
{
}
/**
 * Return the spam link of the reply
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param array $args This function supports these arguments:
 *  - id: Reply id
 *  - link_before: HTML before the link
 *  - link_after: HTML after the link
 *  - spam_text: Spam text
 *  - unspam_text: Unspam text
 * @return string Reply spam link
 */
function bbp_get_reply_spam_link($args = array())
{
}
/**
 * Move reply link
 *
 * Output the move link of the reply
 *
 * @since 2.3.0 bbPress (r4521)
 *
 * @param array $args See {@link bbp_get_reply_move_link()}
 */
function bbp_reply_move_link($args = array())
{
}
/**
 * Get move reply link
 *
 * Return the move link of the reply
 *
 * @since 2.3.0 bbPress (r4521)
 *
 * @param array $args This function supports these arguments:
 *  - id: Reply id
 *  - link_before: HTML before the link
 *  - link_after: HTML after the link
 *  - move_text: Move text
 *  - move_title: Move title attribute
 * @return string Reply move link
 */
function bbp_get_reply_move_link($args = array())
{
}
/**
 * Split topic link
 *
 * Output the split link of the topic (but is bundled with each reply)
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @param array $args See {@link bbp_get_topic_split_link()}
 */
function bbp_topic_split_link($args = array())
{
}
/**
 * Get split topic link
 *
 * Return the split link of the topic (but is bundled with each reply)
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @param array $args This function supports these arguments:
 *  - id: Reply id
 *  - link_before: HTML before the link
 *  - link_after: HTML after the link
 *  - split_text: Split text
 *  - split_title: Split title attribute
 * @return string Topic split link
 */
function bbp_get_topic_split_link($args = array())
{
}
/**
 * Output the approve link of the reply
 *
 * @since 2.6.0 bbPress (r5507)
 *
 * @param array $args See {@link bbp_get_reply_approve_link()}
 */
function bbp_reply_approve_link($args = array())
{
}
/**
 * Return the approve link of the reply
 *
 * @since 2.6.0 bbPress (r5507)
 *
 * @param array $args This function supports these args:
 *  - id: Optional. Reply id
 *  - link_before: Before the link
 *  - link_after: After the link
 *  - sep: Separator between links
 *  - approve_text: Approve text
 *  - unapprove_text: Unapprove text
 * @return string Reply approve link
 */
function bbp_get_reply_approve_link($args = array())
{
}
/**
 * Output the row class of a reply
 *
 * @since 2.0.0 bbPress (r2678)
 *
 * @param int $reply_id Optional. Reply ID
 * @param array Extra classes you can pass when calling this function
 */
function bbp_reply_class($reply_id = 0, $classes = array())
{
}
/**
 * Return the row class of a reply
 *
 * @since 2.0.0 bbPress (r2678)
 *
 * @param int $reply_id Optional. Reply ID
 * @param array Extra classes you can pass when calling this function
 * @return string Row class of the reply
 */
function bbp_get_reply_class($reply_id = 0, $classes = array())
{
}
/** Pagination ****************************************************************/
/**
 * Return the base URL used inside of pagination links
 *
 * @since 2.6.0 bbPress (r6679)
 *
 * @param int $topic_id
 * @return string
 */
function bbp_get_replies_pagination_base($topic_id = 0)
{
}
/**
 * Output the topic pagination count
 *
 * The results are unescaped by design, to allow them to be filtered freely via
 * the 'bbp_get_topic_pagination_count' filter.
 *
 * @since 2.0.0 bbPress (r2519)
 *
 */
function bbp_topic_pagination_count()
{
}
/**
 * Return the topic pagination count
 *
 * @since 2.0.0 bbPress (r2519)
 *
 * @return string Topic pagination count
 */
function bbp_get_topic_pagination_count()
{
}
/**
 * Output topic pagination links
 *
 * @since 2.0.0 bbPress (r2519)
 */
function bbp_topic_pagination_links()
{
}
/**
 * Return topic pagination links
 *
 * @since 2.0.0 bbPress (r2519)
 *
 * @return string Topic pagination links
 */
function bbp_get_topic_pagination_links()
{
}
/** Forms *********************************************************************/
/**
 * Output the value of reply content field
 *
 * @since 2.0.0 bbPress (r3130)
 */
function bbp_form_reply_content()
{
}
/**
 * Return the value of reply content field
 *
 * @since 2.0.0 bbPress (r3130)
 *
 * @return string Value of reply content field
 */
function bbp_get_form_reply_content()
{
}
/**
 * Output the value of the reply to field
 *
 * @since 2.4.0 bbPress (r4944)
 */
function bbp_form_reply_to()
{
}
/**
 * Return the value of reply to field
 *
 * @since 2.4.0 bbPress (r4944)
 *
 * @return string Value of reply to field
 */
function bbp_get_form_reply_to()
{
}
/**
 * Output a select box allowing to pick which reply an existing hierarchical
 * reply belongs to.
 *
 * @since 2.6.0 bbPress (r5387)
 *
 * @param int $reply_id
 */
function bbp_reply_to_dropdown($reply_id = 0)
{
}
/**
 * Return a select box allowing to pick which topic/reply a reply belongs.
 *
 * @since 2.6.0 bbPress (r5387)
 *
 * @param int $reply_id
 *
 * @return string The dropdown
 */
function bbp_get_reply_to_dropdown($reply_id = 0)
{
}
/**
 * Output checked value of reply log edit field
 *
 * @since 2.0.0 bbPress (r3130)
 */
function bbp_form_reply_log_edit()
{
}
/**
 * Return checked value of reply log edit field
 *
 * @since 2.0.0 bbPress (r3130)
 *
 * @return string Reply log edit checked value
 */
function bbp_get_form_reply_log_edit()
{
}
/**
 * Output the value of the reply edit reason
 *
 * @since 2.0.0 bbPress (r3130)
 */
function bbp_form_reply_edit_reason()
{
}
/**
 * Return the value of the reply edit reason
 *
 * @since 2.0.0 bbPress (r3130)
 *
 * @return string Reply edit reason value
 */
function bbp_get_form_reply_edit_reason()
{
}
/**
 * Output value reply status dropdown
 *
 * @since 2.6.0 bbPress (r5399)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_reply_status
 *  - tab: Deprecated. Tabindex
 *  - reply_id: Reply id
 *  - selected: Override the selected option
 */
function bbp_form_reply_status_dropdown($args = array())
{
}
/**
 * Returns reply status dropdown
 *
 * This dropdown is only intended to be seen by users with the 'moderate'
 * capability. Because of this, no additional capability checks are performed
 * within this function to check available reply statuses.
 *
 * @since 2.6.0 bbPress (r5399)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_reply_status
 *  - tab: Deprecated. Tabindex
 *  - reply_id: Reply id
 *  - selected: Override the selected option
 */
function bbp_get_form_reply_status_dropdown($args = array())
{
}
/**
 * Verify if a POST request came from a failed reply attempt.
 *
 * Used to avoid cross-site request forgeries when checking posted reply form
 * content.
 *
 * @see bbp_reply_form_fields()
 *
 * @since 2.6.0 bbPress (r5558)
 *
 * @return boolean True if is a post request with valid nonce
 */
function bbp_is_reply_form_post_request()
{
}
// class_exists check
/**
 * Setup bbPress Replies Admin
 *
 * This is currently here to make hooking and unhooking of the admin UI easy.
 * It could use dependency injection in the future, but for now this is easier.
 *
 * @since 2.0.0 bbPress (r2596)
 *
 * @param WP_Screen $current_screen Current screen object
 */
function bbp_admin_replies($current_screen)
{
}
/**
 * Admin reset page
 *
 * @since 2.0.0 bbPress (r2613)
 *
 */
function bbp_admin_reset_page()
{
}
/**
 * Handle a bbPress admin area reset request.
 *
 * @since 2.0.0 bbPress (r2613)
 */
function bbp_admin_reset_handler()
{
}
/**
 * Wrapper for determining admin reset query feedback presented to a user.
 *
 * @since 2.6.0 bbPress (r6758)
 *
 * @param array $args Array of query, message, and possible responses
 *
 * @return string
 */
function bbp_admin_reset_query_feedback($args = array())
{
}
/**
 * Perform a bbPress database reset.
 *
 * @since 2.6.0 bbPress
 */
function bbp_admin_reset_database()
{
}
/**
 * Admin repair page
 *
 * @since 2.6.0 bbPress (r6278)
 *
 */
function bbp_admin_upgrade_page()
{
}
/**
 * Upgrade user engagements for bbPress 2.6 and higher
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_upgrade_user_engagements()
{
}
/**
 * Upgrade group forum ID mappings after a bbPress 1.x to bbPress 2.x conversion
 *
 * Previously named: bbp_admin_repair_group_forum_relationships()
 *
 * @since 2.6.0 bbPress (r4395)
 *
 * @return If a wp_error() occurs and no converted forums are found
 */
function bbp_admin_upgrade_group_forum_relationships()
{
}
/**
 * Upgrade user favorites for bbPress 2.6 and higher
 *
 * @since 2.6.0 bbPress (r6174)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_upgrade_user_favorites()
{
}
/**
 * Upgrade user topic subscriptions for bbPress 2.6 and higher
 *
 * @since 2.6.0 bbPress (r6174)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_upgrade_user_topic_subscriptions()
{
}
/**
 * Upgrade user forum subscriptions for bbPress 2.6 and higher
 *
 * @since 2.6.0 bbPress (r6193)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_upgrade_user_forum_subscriptions()
{
}
/**
 * Remove favorites data from user meta for bbPress 2.6 and higher
 *
 * @since 2.6.0 bbPress (r6281)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_upgrade_remove_favorites_from_usermeta()
{
}
/**
 * Remove topic subscriptions data from user meta for bbPress 2.6 and higher
 *
 * @since 2.6.0 bbPress (r6281)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_upgrade_remove_topic_subscriptions_from_usermeta()
{
}
/**
 * Remove topic subscriptions data from user meta for bbPress 2.6 and higher
 *
 * @since 2.6.0 bbPress (r6281)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_upgrade_remove_forum_subscriptions_from_usermeta()
{
}
/**
 * Return an array of available converters
 *
 * @since 2.6.0 bbPress (r6447)
 *
 * @return array
 */
function bbp_get_converters()
{
}
/**
 * This is a function that is purposely written to look like a "new" statement.
 * It is basically a dynamic loader that will load in the platform conversion
 * of your choice.
 *
 * @since 2.0.0
 *
 * @param string $platform Name of valid platform class.
 *
 * @return mixed Object if converter exists, null if not
 */
function bbp_new_converter($platform = '')
{
}
/**
 * Contextual help for Repair Forums tools page
 *
 * @since 2.6.0 bbPress (r5314)
 */
function bbp_admin_tools_repair_help()
{
}
/**
 * Contextual help for Reset Forums tools page
 *
 * @since 2.6.0 bbPress (r5314)
 */
function bbp_admin_tools_reset_help()
{
}
/**
 * Contextual help for Import Forums tools page
 *
 * @since 2.6.0 bbPress (r5314)
 */
function bbp_admin_tools_converter_help()
{
}
/**
 * Return the current admin repair tool page
 *
 * @since 2.6.0 bbPress (r6894)
 *
 * @return string
 */
function bbp_get_admin_repair_tool_page()
{
}
/**
 * Return the current admin repair tool page ID
 *
 * @since 2.6.0 bbPress (r6894)
 *
 * @return string
 */
function bbp_get_admin_repair_tool_page_id()
{
}
/**
 * Return a URL to the repair tool page
 *
 * @since 2.6.0 bbPress (r6894)
 *
 * @param array $args
 *
 * @return string
 */
function bbp_get_admin_repair_tool_page_url($args = array())
{
}
/**
 * Output the URL to run a specific repair tool
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param string $component
 */
function bbp_admin_repair_tool_run_url($component = array())
{
}
/**
 * Return the URL to run a specific repair tool
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param string $component
 */
function bbp_get_admin_repair_tool_run_url($component = array())
{
}
/**
 * Assemble the admin notices
 *
 * @since 2.0.0 bbPress (r2613)
 *
 * @param string|WP_Error $message        A message to be displayed or {@link WP_Error}
 * @param string          $class          Optional. A class to be added to the message div
 * @param bool            $is_dismissible Optional. True to dismiss, false to persist
 *
 * @return string The message HTML
 */
function bbp_admin_tools_feedback($message, $class = \false, $is_dismissible = \true)
{
}
/**
 * Handle the processing and feedback of the admin tools page
 *
 * @since 2.0.0 bbPress (r2613)
 *
 */
function bbp_admin_repair_handler()
{
}
/**
 * Get the array of available repair tools
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param string $type repair|upgrade The type of tools to get. Default empty for all tools.
 * @return array
 */
function bbp_get_admin_repair_tools($type = '')
{
}
/**
 * Return array of components from the array of registered tools
 *
 * @since 2.5.0 bbPress (r5885)
 *
 * @return array
 */
function bbp_get_admin_repair_tool_registered_components()
{
}
/**
 * Output the repair list search form
 *
 * @since 2.6.0 bbPress (r5885)
 */
function bbp_admin_repair_list_search_form()
{
}
/**
 * Output a select drop-down of components to filter by
 *
 * @since 2.5.0 bbPress (r5885)
 */
function bbp_admin_repair_list_components_filter()
{
}
/**
 * Return array of versions from the array of registered tools
 *
 * @since 2.6.0 bbPress (r6894)
 *
 * @return array
 */
function bbp_get_admin_repair_tool_registered_versions()
{
}
/**
 * Output a select drop-down of versions to filter by
 *
 * @since 2.5.0 bbPress (r6894)
 */
function bbp_admin_repair_list_versions_filter()
{
}
/** Translations **************************************************************/
/**
 * Maybe translate a repair tool overhead name
 *
 * @since 2.6.0 bbPress (r6177)
 *
 * @param string $overhead
 * @return string
 */
function bbp_admin_repair_tool_translate_overhead($overhead = '')
{
}
/**
 * Maybe translate a repair tool component name
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param string $component
 * @return string
 */
function bbp_admin_repair_tool_translate_component($component = '')
{
}
/**
 * Maybe translate a repair tool overhead name
 *
 * @since 2.6.0 bbPress (r6894)
 *
 * @param string $version
 * @return string
 */
function bbp_admin_repair_tool_translate_version($version = '')
{
}
/** Lists *********************************************************************/
/**
 * Get the array of the repairs to show in a list table.
 *
 * Uses known filters to reduce the registered results down to the most finite
 * set of tools.
 *
 * @since 2.0.0 bbPress (r2613)
 *
 * @return array Repair list of options
 */
function bbp_admin_repair_list($type = 'repair')
{
}
/**
 * Get filter links for components for a specific admin repair tool
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param array $item
 * @return array
 */
function bbp_get_admin_repair_tool_components($item = array())
{
}
/**
 * Get filter links for versions for a specific admin repair tool
 *
 * @since 2.6.0 bbPress (r6894)
 *
 * @param array $item
 * @return array
 */
function bbp_get_admin_repair_tool_version($item = array())
{
}
/**
 * Get filter links for overhead for a specific admin repair tool
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param array $item
 * @return array
 */
function bbp_get_admin_repair_tool_overhead($item = array())
{
}
/** Overhead ******************************************************************/
/**
 * Output filter links for overheads for a specific admin repair tool
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param array $args
 */
function bbp_admin_repair_tool_overhead_filters($args = array())
{
}
/**
 * Get filter links for overheads for a specific admin repair tool
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param array $args
 * @return array
 */
function bbp_get_admin_repair_tool_overhead_filters($args = array())
{
}
/** Pending ******************************************************************/
/**
 * Output filter links for statuses
 *
 * @since 2.6.0 bbPress (r6925)
 *
 * @param array $args
 */
function bbp_admin_repair_tool_status_filters($args = array())
{
}
/**
 * Get filter links for statuses
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param array $args
 * @return array
 */
function bbp_get_admin_repair_tool_status_filters($args = array())
{
}
/**
 * Admin repair page
 *
 * @since 2.0.0 bbPress (r2613) Converted from bbPress 1.2
 * @since 2.6.0 bbPress (r5885) Upgraded to list-table UI
 *
 * @todo Use a real list table
 *
 */
function bbp_admin_repair_page()
{
}
/**
 * Recount topic replies
 *
 * @since 2.0.0 bbPress (r2613)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_topic_reply_count()
{
}
/**
 * Recount topic voices
 *
 * @since 2.0.0 bbPress (r2613)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_topic_voice_count()
{
}
/**
 * Recount non-public replies per topic (pending/spammed/trashed)
 *
 * @since 2.0.0 bbPress (r2747)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_topic_hidden_reply_count()
{
}
/**
 * Recount forum topics
 *
 * @since 2.0.0 bbPress (r2613)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_forum_topic_count()
{
}
/**
 * Recount topic in each topic-tag
 *
 * @since 2.6.0 bbPress (r6256)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_topic_tag_count()
{
}
/**
 * Recount forum replies
 *
 * @since 2.0.0 bbPress (r2613)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_forum_reply_count()
{
}
/**
 * Recount non-public forum replies
 *
 * @since 2.6.0 bbPress (r6922)
 * @since 2.6.0 bbPress (r6932) Rename to match the topic reply recount function
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_forum_hidden_reply_count()
{
}
/**
 * Recount topics by the users
 *
 * @since 2.1.0 bbPress (r3889)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_user_topic_count()
{
}
/**
 * Recount topic replied by the users
 *
 * @since 2.0.0 bbPress (r2613)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_user_reply_count()
{
}
/**
 * Repair user favorites
 *
 * @since 2.0.0 bbPress (r2613)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_user_favorites()
{
}
/**
 * Clean the user topic subscriptions
 *
 * @since 2.0.0 bbPress (r2668)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_user_topic_subscriptions()
{
}
/**
 * Clean the user forum subscriptions
 *
 * @since 2.5.0 bbPress (r5155)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_user_forum_subscriptions()
{
}
/**
 * This repair tool will map each user of the current site to their respective
 * forums role. By default, Admins will be Key Masters, and every other role
 * will be the default role defined in Settings > Forums (Participant).
 *
 * @since 2.2.0 bbPress (r4340)
 */
function bbp_admin_repair_user_roles()
{
}
/**
 * Repair the last post in every topic and forum
 *
 * @since 2.0.0 bbPress (r3040)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_freshness()
{
}
/**
 * Repair the relationship of sticky topics to the actual parent forum
 *
 * @since 2.3.0 bbPress (r4695)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_sticky()
{
}
/**
 * Repair closed topics
 *
 * Closed topics that are missing the post-meta "_bbp_status" key value "publish"
 * result in unexpected behavior, primarily this would have only occurred if you
 * had imported forums from another forum package previous to bbPress v2.6,
 * https://bbpress.trac.wordpress.org/ticket/2577
 *
 * @since 2.6.0 bbPress (r5668)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_closed_topics()
{
}
/**
 * Repair the private and hidden forums
 *
 * @since 2.2.0 bbPress (r4104)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_forum_visibility()
{
}
/**
 * Repair the parent forum meta for each topic and reply
 *
 * @since 2.1.0 bbPress (r3876)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_forum_meta()
{
}
/**
 * Repair the topic for each post
 *
 * @since 2.1.0 bbPress (r3876)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_topic_meta()
{
}
/**
 * Recalculate reply menu order
 *
 * @since 2.5.4 bbPress (r5367)
 *
 * @return array An array of the status code and the message
 */
function bbp_admin_repair_reply_menu_order()
{
}
/**
 * Setup bbPress admin
 *
 * @since 2.0.0 bbPress (r1000)
 * @since 2.6.0 bbPress (r6598) Moved to actions.php
 */
function bbp_admin()
{
}
/**
 * When a new site is created in a multisite installation, run the activation
 * routine on that site
 *
 * @since 2.0.0 bbPress (r3283)
 *
 * @param int $blog_id
 * @param int $user_id
 * @param string $domain
 * @param string $path
 * @param int $site_id
 * @param array() $meta
 */
function bbp_new_site($blog_id, $user_id, $domain, $path, $site_id, $meta)
{
}
/**
 * Show icons in list-table column headers instead of strings
 *
 * @since 2.6.0 bbPress (r5833)
 *
 * @param  array $columns Column headers fed into list-table objects
 *
 * @return array Possibly altered column headers
 */
function bbp_filter_column_headers($columns = array())
{
}
/**
 * Filter sample permalinks so that certain languages display properly.
 *
 * @since 2.0.0 bbPress (r3336)
 *
 * @param string $post_link Custom post type permalink
 * @param object $_post Post data object
 * @param bool $leavename Optional, defaults to false. Whether to keep post name or page name.
 * @param bool $sample Optional, defaults to false. Is it a sample permalink.
 *
 * @return string The custom post type permalink
 */
function bbp_filter_sample_permalink($post_link, $_post, $leavename = \false, $sample = \false)
{
}
/** Sub-Actions ***************************************************************/
/**
 * Piggy back admin_init action
 *
 * @since 2.1.0 bbPress (r3766)
 */
function bbp_admin_init()
{
}
/**
 * Piggy back admin_menu action
 *
 * @since 2.1.0 bbPress (r3766)
 */
function bbp_admin_menu()
{
}
/**
 * Piggy back admin_head action
 *
 * @since 2.1.0 bbPress (r3766)
 */
function bbp_admin_head()
{
}
/**
 * Piggy back admin_notices action
 *
 * @since 2.1.0 bbPress (r3766)
 */
function bbp_admin_notices()
{
}
/**
 * Dedicated action to register bbPress importers
 *
 * @since 2.1.0 bbPress (r3766)
 */
function bbp_register_importers()
{
}
/**
 * Dedicated action to register admin styles
 *
 * @since 2.6.0 bbPress (r6912)
 */
function bbp_register_admin_styles()
{
}
/**
 * Dedicated action to register admin scripts
 *
 * @since 2.6.0 bbPress (r6912)
 */
function bbp_register_admin_scripts()
{
}
/**
 * Dedicated action to register admin settings
 *
 * @since 2.1.0 bbPress (r3766)
 */
function bbp_register_admin_settings()
{
}
/**
 * Dedicated action to output admin tools.php sections
 *
 * @since 2.6.0 bbPress (r6273)
 */
function bbp_admin_tool_box()
{
}
/**
 * Dedicated action to hook into the current screen
 *
 * @since 2.6.0 bbPress (r6185)
 *
 * @param WP_Screen $current_screen
 */
function bbp_current_screen($current_screen = '')
{
}
/** Sections ******************************************************************/
/**
 * Get the Forums settings sections.
 *
 * @since 2.1.0 bbPress (r4001)
 *
 * @return array
 */
function bbp_admin_get_settings_sections()
{
}
/**
 * Get all of the settings fields.
 *
 * @since 2.1.0 bbPress (r4001)
 *
 * @return array
 */
function bbp_admin_get_settings_fields()
{
}
/**
 * Get settings fields by section.
 *
 * @since 2.1.0 bbPress (r4001)
 *
 * @param string $section_id ID of the section to get fields for
 * @staticvar array $fields All of the available fields
 * @return mixed False if section is invalid, array of fields otherwise.
 */
function bbp_admin_get_settings_fields_for_section($section_id = '')
{
}
/** User Section **************************************************************/
/**
 * User settings section description for the settings page
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_user_section()
{
}
/**
 * Edit lock setting field
 *
 * @since 2.0.0 bbPress (r2737)
 */
function bbp_admin_setting_callback_editlock()
{
}
/**
 * Throttle setting field
 *
 * @since 2.0.0 bbPress (r2737)
 */
function bbp_admin_setting_callback_throttle()
{
}
/**
 * Allow anonymous posting setting field
 *
 * @since 2.0.0 bbPress (r2737)
 */
function bbp_admin_setting_callback_anonymous()
{
}
/**
 * Allow global access setting field
 *
 * @since 2.0.0 bbPress (r3378)
 */
function bbp_admin_setting_callback_global_access()
{
}
/** Features Section **********************************************************/
/**
 * Features settings section description for the settings page
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_features_section()
{
}
/**
 * Allow favorites setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_favorites()
{
}
/**
 * Allow subscriptions setting field
 *
 * @since 2.0.0 bbPress (r2737)
 */
function bbp_admin_setting_callback_subscriptions()
{
}
/**
 * Allow engagements setting field
 *
 * @since 2.0.0 bbPress (r2737)
 */
function bbp_admin_setting_callback_engagements()
{
}
/**
 * Allow topic tags setting field
 *
 * @since 2.4.0 bbPress (r4944)
 */
function bbp_admin_setting_callback_topic_tags()
{
}
/**
 * Allow forum-mods setting field
 *
 * @since 2.6.0 bbPress (r5834)
 */
function bbp_admin_setting_callback_forum_mods()
{
}
/**
 * Allow super-mods setting field
 *
 * @since 2.6.0 bbPress (r6562)
 */
function bbp_admin_setting_callback_super_mods()
{
}
/**
 * Allow forum wide search
 *
 * @since 2.4.0 bbPress (r4970)
 */
function bbp_admin_setting_callback_search()
{
}
/**
 * Hierarchical reply maximum depth level setting field
 *
 * Replies will be threaded if depth is 2 or greater
 *
 * @since 2.4.0 bbPress (r4944)
 */
function bbp_admin_setting_callback_thread_replies_depth()
{
}
/**
 * Allow topic and reply revisions
 *
 * @since 2.0.0 bbPress (r3412)
 */
function bbp_admin_setting_callback_revisions()
{
}
/**
 * Use the WordPress editor setting field
 *
 * @since 2.1.0 bbPress (r3586)
 */
function bbp_admin_setting_callback_use_wp_editor()
{
}
/**
 * Main subtheme section
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_subtheme_section()
{
}
/**
 * Use the WordPress editor setting field
 *
 * @since 2.1.0 bbPress (r3586)
 */
function bbp_admin_setting_callback_subtheme_id()
{
}
/**
 * Allow oEmbed in replies
 *
 * @since 2.1.0 bbPress (r3752)
 */
function bbp_admin_setting_callback_use_autoembed()
{
}
/** Per Page Section **********************************************************/
/**
 * Per page settings section description for the settings page
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_per_page_section()
{
}
/**
 * Topics per page setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_topics_per_page()
{
}
/**
 * Replies per page setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_replies_per_page()
{
}
/** Per RSS Page Section ******************************************************/
/**
 * Per page settings section description for the settings page
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_per_rss_page_section()
{
}
/**
 * Topics per RSS page setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_topics_per_rss_page()
{
}
/**
 * Replies per RSS page setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_replies_per_rss_page()
{
}
/** Slug Section **************************************************************/
/**
 * Slugs settings section description for the settings page
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_root_slug_section()
{
}
/**
 * Root slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_root_slug()
{
}
/**
 * Include root slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_include_root()
{
}
/**
 * Include root slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_show_on_root()
{
}
/** User Slug Section *********************************************************/
/**
 * Slugs settings section description for the settings page
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_user_slug_section()
{
}
/**
 * User slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_user_slug()
{
}
/**
 * Topic archive slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_topic_archive_slug()
{
}
/**
 * Reply archive slug setting field
 *
 * @since 2.4.0 bbPress (r4932)
 */
function bbp_admin_setting_callback_reply_archive_slug()
{
}
/**
 * Favorites slug setting field
 *
 * @since 2.4.0 bbPress (r4932)
 */
function bbp_admin_setting_callback_user_favs_slug()
{
}
/**
 * Subscriptions slug setting field
 *
 * @since 2.4.0 bbPress (r4932)
 */
function bbp_admin_setting_callback_user_subs_slug()
{
}
/**
 * Engagements slug setting field
 *
 * @since 2.6.0 bbPress (r6320)
 */
function bbp_admin_setting_callback_user_engagements_slug()
{
}
/** Single Slugs **************************************************************/
/**
 * Slugs settings section description for the settings page
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_single_slug_section()
{
}
/**
 * Forum slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_forum_slug()
{
}
/**
 * Topic slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_topic_slug()
{
}
/**
 * Reply slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_reply_slug()
{
}
/**
 * Topic tag slug setting field
 *
 * @since 2.0.0 bbPress (r2786)
 */
function bbp_admin_setting_callback_topic_tag_slug()
{
}
/**
 * View slug setting field
 *
 * @since 2.0.0 bbPress (r2789)
 */
function bbp_admin_setting_callback_view_slug()
{
}
/**
 * Search slug setting field
 *
 * @since 2.3.0 bbPress (r4579)
 */
function bbp_admin_setting_callback_search_slug()
{
}
/**
 * Edit slug setting field
 *
 * @since 2.6.2 bbPress (r6965)
 */
function bbp_admin_setting_callback_edit_slug()
{
}
/** BuddyPress ****************************************************************/
/**
 * Extension settings section description for the settings page
 *
 * @since 2.1.0 bbPress (r3575)
 */
function bbp_admin_setting_callback_buddypress_section()
{
}
/**
 * Allow BuddyPress group forums setting field
 *
 * @since 2.1.0 bbPress (r3575)
 */
function bbp_admin_setting_callback_group_forums()
{
}
/**
 * Replies per page setting field
 *
 * @since 2.1.0 bbPress (r3575)
 */
function bbp_admin_setting_callback_group_forums_root_id()
{
}
/** Akismet *******************************************************************/
/**
 * Extension settings section description for the settings page
 *
 * @since 2.1.0 bbPress (r3575)
 */
function bbp_admin_setting_callback_akismet_section()
{
}
/**
 * Allow Akismet setting field
 *
 * @since 2.1.0 bbPress (r3575)
 */
function bbp_admin_setting_callback_akismet()
{
}
/** Settings Page *************************************************************/
/**
 * The main settings page
 *
 * @since 2.0.0 bbPress (r2643)
 */
function bbp_admin_settings()
{
}
/** Converter Section *********************************************************/
/**
 * Main settings section description for the settings page
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_main_section()
{
}
/**
 * Edit Platform setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_platform()
{
}
/**
 * Edit Database Server setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_dbserver()
{
}
/**
 * Edit Database Server Port setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_dbport()
{
}
/**
 * Edit Database User setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_dbuser()
{
}
/**
 * Edit Database Pass setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_dbpass()
{
}
/**
 * Edit Database Name setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_dbname()
{
}
/**
 * Main settings section description for the settings page
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_options_section()
{
}
/**
 * Edit Table Prefix setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_dbprefix()
{
}
/**
 * Edit Rows Limit setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_rows()
{
}
/**
 * Edit Delay Time setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_delay_time()
{
}
/**
 * Edit Halt setting field
 *
 * @since 2.6.0 bbPress (r6599)
 */
function bbp_converter_setting_callback_halt()
{
}
/**
 * Edit Restart setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_restart()
{
}
/**
 * Edit Clean setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_clean()
{
}
/**
 * Edit Convert Users setting field
 *
 * @since 2.1.0 bbPress (r3813)
 */
function bbp_converter_setting_callback_convert_users()
{
}
/** Converter Page ************************************************************/
/**
 * The main settings page
 *
 * @since 2.1.0 bbPress (r3186)
 */
function bbp_converter_settings_page()
{
}
/** Helpers *******************************************************************/
/**
 * Contextual help for Forums settings page
 *
 * @since 2.0.0 bbPress (r3119)
 */
function bbp_admin_settings_help()
{
}
/**
 * Disable a settings field if it is forcibly set in the global options array.
 *
 * @since 2.2.0 bbPress (r4347)
 *
 * @param string $option_key
 */
function bbp_maybe_admin_setting_disabled($option_key = '')
{
}
/**
 * Output settings API option
 *
 * @since 2.0.0 bbPress (r3203)
 *
 * @param string $option
 * @param string $default
 * @param bool $slug
 */
function bbp_form_option($option, $default = '', $slug = \false)
{
}
/**
 * Return settings API option
 *
 * @since 2.0.0 bbPress (r3203)
 *
 * @param string $option
 * @param string $default
 * @param bool   $is_slug
 *
 * @return mixed
 */
function bbp_get_form_option($option, $default = '', $is_slug = \false)
{
}
/**
 * Used to check if a bbPress slug conflicts with an existing known slug.
 *
 * @since 2.0.0 bbPress (r3306)
 *
 * @param string $slug
 * @param string $default
 */
function bbp_form_slug_conflict_check($slug, $default)
{
}
/**
 * bbPress BBCode Parser
 *
 * @package bbPress
 * @subpackage Administration
 */
/*
This is a compressed copy of NBBC. Do not edit!

Copyright (c) 2008-9, the Phantom Inker.  All rights reserved.
Portions Copyright (c) 2004-2008 AddedBytes.com

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions
are met:

* Redistributions of source code must retain the above copyright
  notice, this list of conditions and the following disclaimer.

* Redistributions in binary form must reproduce the above copyright
  notice, this list of conditions and the following disclaimer in
  the documentation and/or other materials provided with the
  distribution.

THIS SOFTWARE IS PROVIDED BY THE PHANTOM INKER "AS IS" AND ANY EXPRESS
OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR
BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE
OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN
IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/
\define("BBCODE_VERSION", "1.4.5");
\define("BBCODE_RELEASE", "2010-09-17");
\define("BBCODE_VERBATIM", 2);
\define("BBCODE_REQUIRED", 1);
\define("BBCODE_OPTIONAL", 0);
\define("BBCODE_PROHIBIT", -1);
\define("BBCODE_CHECK", 1);
\define("BBCODE_OUTPUT", 2);
\define("BBCODE_ENDTAG", 5);
\define("BBCODE_TAG", 4);
\define("BBCODE_TEXT", 3);
\define("BBCODE_NL", 2);
\define("BBCODE_WS", 1);
\define("BBCODE_EOI", 0);
\define("BBCODE_LEXSTATE_TEXT", 0);
\define("BBCODE_LEXSTATE_TAG", 1);
\define("BBCODE_MODE_SIMPLE", 0);
\define("BBCODE_MODE_CALLBACK", 1);
\define("BBCODE_MODE_INTERNAL", 2);
\define("BBCODE_MODE_LIBRARY", 3);
\define("BBCODE_MODE_ENHANCED", 4);
\define("BBCODE_STACK_TOKEN", 0);
\define("BBCODE_STACK_TEXT", 1);
\define("BBCODE_STACK_TAG", 2);
\define("BBCODE_STACK_CLASS", 3);
// class_exists check
/**
 * Setup bbPress Topics Admin
 *
 * This is currently here to make hooking and unhooking of the admin UI easy.
 * It could use dependency injection in the future, but for now this is easier.
 *
 * @since 2.0.0 bbPress (r2596)
 *
 * @param WP_Screen $current_screen Current screen object
 */
function bbp_admin_topics($current_screen)
{
}
/**
 * Output a bbPress specific tools box
 *
 * @since 2.6.0 bbPress (r6273)
 */
function bbp_admin_tools_box()
{
}
/**
 * Register an admin area repair tool
 *
 * @since 2.6.0 bbPress (r5885)
 *
 * @param array $args
 * @return
 */
function bbp_register_repair_tool($args = array())
{
}
/**
 * Register the default repair tools
 *
 * @since 2.6.0 bbPress (r5885)
 */
function bbp_register_default_repair_tools()
{
}
/**
 * Output the tabs in the admin area
 *
 * @since 2.1.0 bbPress (r3872)
 *
 * @param string $active_tab Name of the tab that is active
 */
function bbp_tools_admin_tabs($active_tab = '')
{
}
/**
 * Output the tabs in the admin area
 *
 * @since 2.1.0 bbPress (r3872)
 *
 * @param string $active_tab Name of the tab that is active
 */
function bbp_get_tools_admin_tabs($active_tab = '')
{
}
/**
 * Return possible tools pages
 *
 * @since 2.6.0 bbPress (r6273)
 *
 * @return array
 */
function bbp_get_tools_admin_pages()
{
}
// class_exists check
/**
 * Setup bbPress Forums Admin
 *
 * This is currently here to make hooking and unhooking of the admin UI easy.
 * It could use dependency injection in the future, but for now this is easier.
 *
 * @since 2.0.0 bbPress (r2596)
 *
 * @param WP_Screen $current_screen Current screen object
 */
function bbp_admin_forums($current_screen)
{
}
/**
 * bbPress Admin Metaboxes
 *
 * @package bbPress
 * @subpackage Administration
 */
/** Dashboard *****************************************************************/
/**
 * Filter the Dashboard "at a glance" items and append bbPress elements to it.
 *
 * @since 2.6.0 bbPress (r5268)
 *
 * @param array $elements
 * @return array
 */
function bbp_filter_dashboard_glance_items($elements = array())
{
}
/**
 * bbPress Dashboard Right Now Widget
 *
 * Adds a dashboard widget with forum statistics
 *
 * @since 2.0.0 bbPress (r2770)
 *
 * @deprecated 2.6.0 bbPress (r5268)
 */
function bbp_dashboard_widget_right_now()
{
}
/** Forums ********************************************************************/
/**
 * Forum meta-box
 *
 * The meta-box that holds all of the additional forum information
 *
 * @since 2.0.0 bbPress (r2744)
 */
function bbp_forum_metabox($post)
{
}
/** Topics ********************************************************************/
/**
 * Topic meta-box
 *
 * The meta-box that holds all of the additional topic information
 *
 * @since 2.0.0 bbPress (r2464)
 */
function bbp_topic_metabox($post)
{
}
/** Replies *******************************************************************/
/**
 * Reply meta-box
 *
 * The meta-box that holds all of the additional reply information
 *
 * @since 2.0.0 bbPress (r2464)
 */
function bbp_reply_metabox($post)
{
}
/**
 * Output the topic replies meta-box
 *
 * @since 2.6.0 bbPress (r5886)
 *
 * @param object $topic
 *
 * @return void
 */
function bbp_topic_replies_metabox($topic = \false)
{
}
/** Users *********************************************************************/
/**
 * Anonymous user information meta-box
 *
 * @since 2.0.0 bbPress (r2828)
 *
 * @param WP_Post $post The current post object
 */
function bbp_author_metabox($post)
{
}
/**
 * Moderator assignment meta-box
 *
 * @since 2.6.0 bbPress (r2828)
 */
function bbp_moderator_assignment_metabox($post)
{
}
/**
 * See who engaged with a topic
 *
 * @since 2.6.0 bbPress (r6333)
 */
function bbp_topic_engagements_metabox($post)
{
}
/**
 * See who marked a topic as a favorite
 *
 * @since 2.6.0 bbPress (r6197)
 * @since 2.6.0 bbPress (r6333) Updated to use BBP_User_Query
 */
function bbp_topic_favorites_metabox($post)
{
}
/**
 * See who is subscribed to a topic
 *
 * @since 2.6.0 bbPress (r6197)
 * @since 2.6.0 bbPress (r6333) Updated to use BBP_User_Query
 */
function bbp_topic_subscriptions_metabox($post)
{
}
/**
 * See who is subscribed to a forum
 *
 * @since 2.6.0 bbPress (r6197)
 * @since 2.6.0 bbPress (r6333) Updated to use BBP_User_Query
 */
function bbp_forum_subscriptions_metabox($post)
{
}
/**
 * Loop through queried metabox users, and output links to their avatars
 *
 * Developers Note: This function may change in a future release to include
 * additional actions, so do not use this function in any third party plugin.
 *
 * @since 2.6.0 bbPress (r6913)
 */
function bbp_metabox_user_links()
{
}
/** Admin Menus ***************************************************************/
/**
 * Add a separator to the WordPress admin menus
 *
 * @since 2.0.0 bbPress (r2957)
 */
function bbp_admin_separator()
{
}
/**
 * Tell WordPress we have a custom menu order
 *
 * @since 2.0.0 bbPress (r2957)
 *
 * @param bool $menu_order Menu order
 * @return mixed True if separator, false if not
 */
function bbp_admin_custom_menu_order($menu_order = \false)
{
}
/**
 * Move our custom separator above our custom post types
 *
 * @since 2.0.0 bbPress (r2957)
 *
 * @param array $menu_order Menu Order
 * @return array Modified menu order
 */
function bbp_admin_menu_order($menu_order)
{
}
/**
 * Sanitize permalink slugs when saving the settings page.
 *
 * @since 2.6.0 bbPress (r5364)
 *
 * @param string $slug
 * @return string
 */
function bbp_sanitize_slug($slug = '')
{
}
/**
 * Uninstall all bbPress options and capabilities from a specific site.
 *
 * @since 2.1.0 bbPress (r3765)
 *
 * @param int $site_id
 */
function bbp_do_uninstall($site_id = 0)
{
}
/**
 * This tells WP to highlight the Tools > Forums menu item,
 * regardless of which actual bbPress Tools screen we are on.
 *
 * The conditional prevents the override when the user is viewing settings or
 * any third-party plugins.
 *
 * @since 2.1.0 bbPress (r3888)
 *
 * @global string $plugin_page
 * @global array $submenu_file
 */
function bbp_tools_modify_menu_highlight()
{
}
/** Query *********************************************************************/
/**
 * Run the search query
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @param mixed $new_args New arguments
 * @return bool False if no results, otherwise if search results are there
 */
function bbp_search_query($new_args = array())
{
}
/**
 * Return the search query args
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @return array Query arguments
 */
function bbp_get_search_query_args()
{
}
/**
 * Redirect to search results page if needed
 *
 * @since 2.4.0 bbPress (r4928)
 *
 * @return If a redirect is not needed
 */
function bbp_search_results_redirect()
{
}
/**
 * Return an array of search types
 *
 * @since 2.6.0 bbPress (r6903)
 *
 * @return array
 */
function bbp_get_search_type_ids()
{
}
/**
 * Sanitize a query argument used to pass some search terms.
 *
 * Accepts a single parameter to be used for forums, topics, or replies.
 *
 * @since 2.6.0 bbPress (r6903)
 *
 * @param string $query_arg s|fs|ts|rs
 *
 * @return mixed
 */
function bbp_sanitize_search_request($query_arg = 's')
{
}
/** Search Loop Functions *****************************************************/
/**
 * The main search loop. WordPress does the heavy lifting.
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @param array $args All the arguments supported by {@link WP_Query}
 * @return object Multidimensional array of search information
 */
function bbp_has_search_results($args = array())
{
}
/**
 * Whether there are more search results available in the loop
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @return object Search information
 */
function bbp_search_results()
{
}
/**
 * Loads up the current search result in the loop
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @return object Search information
 */
function bbp_the_search_result()
{
}
/**
 * Output the search page title
 *
 * @since 2.3.0 bbPress (r4579)
 */
function bbp_search_title()
{
}
/**
 * Get the search page title
 *
 * @since 2.3.0 bbPress (r4579)
 */
function bbp_get_search_title()
{
}
/**
 * Output the search url
 *
 * @since 2.3.0 bbPress (r4579)
 */
function bbp_search_url()
{
}
/**
 * Return the search url
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @return string Search url
 */
function bbp_get_search_url()
{
}
/**
 * Output the search results url
 *
 * @since 2.4.0 bbPress (r4928)
 */
function bbp_search_results_url()
{
}
/**
 * Return the search url
 *
 * @since 2.4.0 bbPress (r4928)
 *
 * @return string Search url
 */
function bbp_get_search_results_url()
{
}
/**
 * Output the search terms
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @param string $search_terms Optional. Search terms
 */
function bbp_search_terms($search_terms = '')
{
}
/**
 * Get the search terms
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * If search terms are supplied, those are used. Otherwise check the
 * search rewrite id query var.
 *
 * @param string $passed_terms Optional. Search terms
 * @return bool|string Search terms on success, false on failure
 */
function bbp_get_search_terms($passed_terms = '')
{
}
/** Pagination ****************************************************************/
/**
 * Return the base URL used inside of pagination links
 *
 * @since 2.6.0 bbPress (r6679)
 *
 * @return string
 */
function bbp_get_search_pagination_base()
{
}
/**
 * Output the search result pagination count
 *
 * @since 2.3.0 bbPress (r4579)
 */
function bbp_search_pagination_count()
{
}
/**
 * Return the search results pagination count
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @return string Search pagination count
 */
function bbp_get_search_pagination_count()
{
}
/**
 * Output search pagination links
 *
 * @since 2.3.0 bbPress (r4579)
 */
function bbp_search_pagination_links()
{
}
/**
 * Return search pagination links
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @return string Search pagination links
 */
function bbp_get_search_pagination_links()
{
}
/**
 * Return array of bbPress registered post types
 *
 * @since 2.6.0 bbPress (r6813)
 *
 * @param array $args Array of arguments to pass into `get_post_types()`
 *
 * @return array
 */
function bbp_get_post_types($args = array())
{
}
/** URLs **********************************************************************/
/**
 * Return the unescaped redirect_to request value
 *
 * @bbPress (r4655)
 *
 * @return string The URL to redirect to, if set
 */
function bbp_get_redirect_to()
{
}
/**
 * Append 'view=all' to query string if it's already there from referer
 *
 * @since 2.0.0 bbPress (r3325)
 *
 * @param string $original_link Original Link to be modified
 * @param bool $force Override bbp_get_view_all() check
 * @return string The link with 'view=all' appended if necessary
 */
function bbp_add_view_all($original_link = '', $force = \false)
{
}
/**
 * Remove 'view=all' from query string
 *
 * @since 2.0.0 bbPress (r3325)
 *
 * @param string $original_link Original Link to be modified
 * @return string The link with 'view=all' appended if necessary
 */
function bbp_remove_view_all($original_link = '')
{
}
/**
 * If current user can and is viewing all topics/replies
 *
 * @since 2.0.0 bbPress (r3325)
 *
 * @param string $cap Capability used to ensure user can view all
 *
 * @return bool Whether current user can and is viewing all
 */
function bbp_get_view_all($cap = 'moderate')
{
}
/**
 * Assist pagination by returning correct page number
 *
 * @since 2.0.0 bbPress (r2628)
 *
 * @return int Current page number
 */
function bbp_get_paged()
{
}
/** Misc **********************************************************************/
/**
 * Return the unique non-empty values of an array.
 *
 * @since 2.6.0 bbPress (r6481)
 *
 * @param array $array Array to get values of
 *
 * @return array
 */
function bbp_get_unique_array_values($array = array())
{
}
/**
 * Fix post author id on post save
 *
 * When a logged in user changes the status of an anonymous reply or topic, or
 * edits it, the post_author field is set to the logged in user's id. This
 * function fixes that.
 *
 * @since 2.0.0 bbPress (r2734)
 *
 * @param array $data Post data
 * @param array $postarr Original post array (includes post id)
 * @return array Data
 */
function bbp_fix_post_author($data = array(), $postarr = array())
{
}
/**
 * Use the previous status when restoring a topic or reply.
 *
 * Fixes an issue since WordPress 5.6.0. See
 * {@link https://bbpress.trac.wordpress.org/ticket/3433}.
 *
 * @since 2.6.10 bbPress (r7233)
 *
 * @param string $new_status      New status to use when untrashing. Default: 'draft'
 * @param int    $post_id         Post ID
 * @param string $previous_status Previous post status from '_wp_trash_meta_status' meta key. Default: 'pending'
 */
function bbp_fix_untrash_post_status($new_status = 'draft', $post_id = 0, $previous_status = 'pending')
{
}
/**
 * Check a date against the length of time something can be edited.
 *
 * It is recommended to leave $utc set to true and to work with UTC/GMT dates.
 * Turning this off will use the WordPress offset which is likely undesirable.
 *
 * @since 2.0.0 bbPress (r3133)
 * @since 2.6.0 bbPress (r6868) Inverted some logic and added unit tests
 *
 * @param string  $datetime Gets run through strtotime()
 * @param boolean $utc      Default true. Is the timestamp in UTC?
 *
 * @return bool True by default, if date is past, or editing is disabled.
 */
function bbp_past_edit_lock($datetime = '', $utc = \true)
{
}
/**
 * Get number of days something should remain trashed for before it is cleaned
 * up by WordPress Cron. If set to 0, items will skip trash and be deleted
 * immediately.
 *
 * @since 2.6.0 bbPress (r6424)
 *
 * @param string $context Provide context for additional filtering
 * @return int Number of days items remain in trash
 */
function bbp_get_trash_days($context = 'forum')
{
}
/** Statistics ****************************************************************/
/**
 * Get the forum statistics
 *
 * @since 2.0.0 bbPress (r2769)
 * @since 2.6.0 bbPress (r6055)  Added:
 *                               `count_pending_topics`
 *                               `count_pending_replies`
 * @since 2.6.10 bbPress (r7235) Renamed:
 *                                `count_trashed_topics`  to `count_trash_topics`
 *                                `count_trashed_replies` to `count_trash_replies`
 *                                `count_spammed_topics`  to `count_spam_topics`
 *                                `count_spammed_replies` to `count_spam_replies`
 *                               Added:
 *                                `count_hidden_topics`
 *                                `count_hidden_replies`
 *
 * @param array $args Optional. The function supports these arguments (all
 *                    default to true):
 *
 *  - count_users:           Count users?
 *  - count_forums:          Count forums?
 *  - count_topics:          Count topics? If set to false, private, spam and
 *                           trash topics are also not counted.
 *  - count_pending_topics:  Count pending topics? (only counted if the current
 *                           user has edit_others_topics cap)
 *  - count_private_topics:  Count private topics? (only counted if the current
 *                           user has read_private_topics cap)
 *  - count_hidden_topics:   Count hidden topics? (only counted if the current
 *                           user has read_hidden_topics cap)
 *  - count_spam_topics:     Count spam topics? (only counted if the current
 *                           user has edit_others_topics cap)
 *  - count_trash_topics:    Count trash topics? (only counted if the current
 *                           user has view_trash cap)
 *  - count_replies:         Count replies? If set to false, private, spam and
 *                           trash replies are also not counted.
 *  - count_pending_replies: Count pending replies? (only counted if the current
 *                           user has edit_others_replies cap)
 *  - count_private_replies: Count private replies? (only counted if the current
 *                           user has read_private_replies cap)
 *  - count_hidden_replies:  Count hidden replies? (only counted if the current
 *                           user has read_hidden_replies cap)
 *  - count_spam_replies:    Count spam replies? (only counted if the current
 *                           user has edit_others_replies cap)
 *  - count_trash_replies:   Count trash replies? (only counted if the current
 *                           user has view_trash cap)
 *  - count_tags:            Count tags? If set to false, empty tags are also
 *                           not counted
 *  - count_empty_tags:      Count empty tags?
 *
 * @return array Array of statistics
 */
function bbp_get_statistics($args = array())
{
}
/** New/edit topic/reply helpers **********************************************/
/**
 * Filter anonymous post data
 *
 * We use REMOTE_ADDR here directly. If you are behind a proxy, you should
 * ensure that it is properly set, such as in wp-config.php, for your
 * environment. See {@link https://core.trac.wordpress.org/ticket/9235}
 *
 * Note that bbp_pre_anonymous_filters() is responsible for sanitizing each
 * of the filtered core anonymous values here.
 *
 * If there are any errors, those are directly added to {@link bbPress:errors}
 *
 * @since 2.0.0 bbPress (r2734)
 *
 * @param array $args Optional. If no args are there, then $_POST values are
 * @return bool|array False on errors, values in an array on success
 */
function bbp_filter_anonymous_post_data($args = array())
{
}
/**
 * Sanitize an array of anonymous post author data
 *
 * @since 2.6.0 bbPress (r6400)
 *
 * @param array $anonymous_data
 * @return array
 */
function bbp_sanitize_anonymous_post_author($anonymous_data = array())
{
}
/**
 * Update the relevant meta-data for an anonymous post author
 *
 * @since 2.6.0 bbPress (r6400)
 *
 * @param int    $post_id
 * @param array  $anonymous_data
 * @param string $post_type
 */
function bbp_update_anonymous_post_author($post_id = 0, $anonymous_data = array(), $post_type = '')
{
}
/**
 * Check for duplicate topics/replies
 *
 * Check to make sure that a user is not making a duplicate post
 *
 * @since 2.0.0 bbPress (r2763)
 *
 * @param array $post_data Contains information about the comment
 * @return bool True if it is not a duplicate, false if it is
 */
function bbp_check_for_duplicate($post_data = array())
{
}
/**
 * Check for flooding
 *
 * Check to make sure that a user is not making too many posts in a short amount
 * of time.
 *
 * @since 2.0.0 bbPress (r2734)
 *
 * @param array $anonymous_data Optional - if it's an anonymous post. Do not
 *                              supply if supplying $author_id. Should be
 *                              sanitized (see {@link bbp_filter_anonymous_post_data()}
 * @param int $author_id Optional. Supply if it's a post by a logged in user.
 *                        Do not supply if supplying $anonymous_data.
 * @return bool True if there is no flooding, false if there is
 */
function bbp_check_for_flood($anonymous_data = array(), $author_id = 0)
{
}
/**
 * Checks topics and replies against the discussion moderation of blocked keys
 *
 * @since 2.1.0 bbPress (r3581)
 *
 * @param array $anonymous_data Optional - if it's an anonymous post. Do not
 *                              supply if supplying $author_id. Should be
 *                              sanitized (see {@link bbp_filter_anonymous_post_data()}
 * @param int $author_id Topic or reply author ID
 * @param string $title The title of the content
 * @param string $content The content being posted
 * @param mixed  $strict  False for moderation_keys. True for disallow_keys.
 *                        String for custom keys.
 * @return bool True if test is passed, false if fail
 */
function bbp_check_for_moderation($anonymous_data = array(), $author_id = 0, $title = '', $content = '', $strict = \false)
{
}
/**
 * Deprecated. Use bbp_check_for_moderation() with strict flag set.
 *
 * @since 2.0.0 bbPress (r3446)
 * @since 2.6.0 bbPress (r6854)
 * @deprecated 2.6.0 Use bbp_check_for_moderation() with strict flag set
 */
function bbp_check_for_blacklist($anonymous_data = array(), $author_id = 0, $title = '', $content = '')
{
}
/** Subscriptions *************************************************************/
/**
 * Get the "Do Not Reply" email address to use when sending subscription emails.
 *
 * We make some educated guesses here based on the home URL. Filters are
 * available to customize this address further. In the future, we may consider
 * using `admin_email` instead, though this is not normally publicized.
 *
 * We use `$_SERVER['SERVER_NAME']` here to mimic similar functionality in
 * WordPress core. Previously, we used `get_home_url()` to use already validated
 * user input, but it was causing issues in some installations.
 *
 * @since 2.6.0 bbPress (r5409)
 *
 * @see  wp_mail
 * @see  wp_notify_postauthor
 * @link https://bbpress.trac.wordpress.org/ticket/2618
 *
 * @return string
 */
function bbp_get_do_not_reply_address()
{
}
/**
 * Sends notification emails for new replies to subscribed topics
 *
 * Gets new post ID and check if there are subscribed users to that topic, and
 * if there are, send notifications
 *
 * Note: in bbPress 2.6, we've moved away from 1 email per subscriber to 1 email
 * with everyone BCC'd. This may have negative repercussions for email services
 * that limit the number of addresses in a BCC field (often to around 500.) In
 * those cases, we recommend unhooking this function and creating your own
 * custom email script.
 *
 * @since 2.6.0 bbPress (r5413)
 *
 * @param int $reply_id ID of the newly made reply
 * @param int $topic_id ID of the topic of the reply
 * @param int $forum_id ID of the forum of the reply
 * @param array $anonymous_data Optional - if it's an anonymous post. Do not
 *                              supply if supplying $author_id. Should be
 *                              sanitized (see {@link bbp_filter_anonymous_post_data()}
 * @param int $reply_author ID of the topic author ID
 * @return bool True on success, false on failure
 */
function bbp_notify_topic_subscribers($reply_id = 0, $topic_id = 0, $forum_id = 0, $anonymous_data = array(), $reply_author = 0)
{
}
/**
 * Sends notification emails for new topics to subscribed forums
 *
 * Gets new post ID and check if there are subscribed users to that forum, and
 * if there are, send notifications
 *
 * Note: in bbPress 2.6, we've moved away from 1 email per subscriber to 1 email
 * with everyone BCC'd. This may have negative repercussions for email services
 * that limit the number of addresses in a BCC field (often to around 500.) In
 * those cases, we recommend unhooking this function and creating your own
 * custom email script.
 *
 * @since 2.5.0 bbPress (r5156)
 *
 * @param int $topic_id ID of the newly made reply
 * @param int $forum_id ID of the forum for the topic
 * @param array $anonymous_data Optional - if it's an anonymous post. Do not
 *                              supply if supplying $author_id. Should be
 *                              sanitized (see {@link bbp_filter_anonymous_post_data()}
 * @param int $topic_author ID of the topic author ID
 * @return bool True on success, false on failure
 */
function bbp_notify_forum_subscribers($topic_id = 0, $forum_id = 0, $anonymous_data = array(), $topic_author = 0)
{
}
/**
 * Sends notification emails for new replies to subscribed topics
 *
 * This function is deprecated. Please use: bbp_notify_topic_subscribers()
 *
 * @since 2.0.0 bbPress (r2668)
 *
 * @deprecated 2.6.0 bbPress (r5412)
 *
 * @param int $reply_id ID of the newly made reply
 * @param int $topic_id ID of the topic of the reply
 * @param int $forum_id ID of the forum of the reply
 * @param array $anonymous_data Optional - if it's an anonymous post. Do not
 *                              supply if supplying $author_id. Should be
 *                              sanitized (see {@link bbp_filter_anonymous_post_data()}
 * @param int $reply_author ID of the topic author ID
 *
 * @return bool True on success, false on failure
 */
function bbp_notify_subscribers($reply_id = 0, $topic_id = 0, $forum_id = 0, $anonymous_data = array(), $reply_author = 0)
{
}
/**
 * Return an array of user email addresses from an array of user IDs
 *
 * @since 2.6.0 bbPress (r6722)
 *
 * @param array $user_ids
 * @return array
 */
function bbp_get_email_addresses_from_user_ids($user_ids = array())
{
}
/**
 * Automatically splits bbPress emails with many Bcc recipients into chunks.
 *
 * This middleware is useful because topics and forums with many subscribers
 * run into problems with Bcc limits, and many hosting companies & third-party
 * services limit the size of a Bcc audience to prevent spamming.
 *
 * The default "chunk" size is 40 users per iteration, and can be filtered if
 * desired. A future version of bbPress will introduce a setting to more easily
 * tune this.
 *
 * @since 2.6.0 bbPress (r6918)
 *
 * @param array $args Original arguments passed to wp_mail().
 * @return array
 */
function bbp_chunk_emails($args = array())
{
}
/**
 * Return the string used for the bbPress specific X-header.
 *
 * @since 2.6.0 bbPress (r6919)
 *
 * @return string
 */
function bbp_get_email_header()
{
}
/** Login *********************************************************************/
/**
 * Return a clean and reliable logout URL
 *
 * This function is used to filter `logout_url`. If no $redirect_to value is
 * passed, it will default to the request uri, then the forum root.
 *
 * See: `wp_logout_url()`
 *
 * @since 2.1.0 bbPress (2815)
 *
 * @param string $url URL used to log out
 * @param string $redirect_to Where to redirect to?
 *
 * @return string The url
 */
function bbp_logout_url($url = '', $redirect_to = '')
{
}
/** Queries *******************************************************************/
/**
 * Merge user defined arguments into defaults array.
 *
 * This function is used throughout bbPress to allow for either a string or array
 * to be merged into another array. It is identical to wp_parse_args() except
 * it allows for arguments to be passively or aggressively filtered using the
 * optional $filter_key parameter.
 *
 * @since 2.1.0 bbPress (r3839)
 *
 * @param string|array $args Value to merge with $defaults
 * @param array $defaults Array that serves as the defaults.
 * @param string $filter_key String to key the filters from
 * @return array Merged user defined values with defaults.
 */
function bbp_parse_args($args, $defaults = array(), $filter_key = '')
{
}
/**
 * Adds ability to include or exclude specific post_parent ID's
 *
 * @since 2.0.0 bbPress (r2996)
 *
 * @deprecated 2.5.8 bbPress (r5814)
 *
 * @global WP $wp
 * @param string $where
 * @param WP_Query $object
 * @return string
 */
function bbp_query_post_parent__in($where, $object = '')
{
}
/**
 * Query the DB and get the last public post_id that has parent_id as post_parent
 *
 * @since 2.0.0 bbPress (r2868)
 * @since 2.6.0 bbPress (r5954) Replace direct queries with WP_Query() objects
 *
 * @param int    $parent_id Parent id.
 * @param string $post_type Post type. Defaults to 'post'.
 * @return int The last active post_id
 */
function bbp_get_public_child_last_id($parent_id = 0, $post_type = 'post')
{
}
/**
 * Query the database for child counts, grouped by type & status
 *
 * @since 2.6.0 bbPress (r6826)
 *
 * @param int $parent_id
 */
function bbp_get_child_counts($parent_id = 0)
{
}
/**
 * Filter a list of child counts, from `bbp_get_child_counts()`
 *
 * @since 2.6.0 bbPress (r6826)
 *
 * @param int    $parent_id  ID of post to get child counts from
 * @param array  $types      Optional. An array of post types to filter by
 * @param array  $statuses   Optional. An array of post statuses to filter by
 *
 * @return array A list of objects or object fields.
 */
function bbp_filter_child_counts_list($parent_id = 0, $types = array('post'), $statuses = array())
{
}
/**
 * Query the DB and get a count of public children
 *
 * @since 2.0.0 bbPress (r2868)
 * @since 2.6.0 bbPress (r5954) Replace direct queries with WP_Query() objects
 *
 * @param int    $parent_id Parent id.
 * @param string $post_type Post type. Defaults to 'post'.
 * @return int The number of children
 */
function bbp_get_public_child_count($parent_id = 0, $post_type = 'post')
{
}
/**
 * Query the DB and get a count of public children
 *
 * @since 2.0.0 bbPress (r2868)
 * @since 2.6.0 bbPress (r5954) Replace direct queries with WP_Query() objects
 *
 * @param int    $parent_id Parent id.
 * @param string $post_type Post type. Defaults to 'post'.
 * @return int The number of children
 */
function bbp_get_non_public_child_count($parent_id = 0, $post_type = 'post')
{
}
/**
 * Query the DB and get the child id's of public children
 *
 * @since 2.0.0 bbPress (r2868)
 * @since 2.6.0 bbPress (r5954) Replace direct queries with WP_Query() objects
 *
 * @param int    $parent_id Parent id.
 * @param string $post_type Post type. Defaults to 'post'.
 *
 * @return array The array of children
 */
function bbp_get_public_child_ids($parent_id = 0, $post_type = 'post')
{
}
/**
 * Query the DB and get the child id's of all children
 *
 * @since 2.0.0 bbPress (r3325)
 *
 * @param int $parent_id  Parent id
 * @param string $post_type Post type. Defaults to 'post'
 *
 * @return array The array of children
 */
function bbp_get_all_child_ids($parent_id = 0, $post_type = 'post')
{
}
/**
 * Prime familial post caches.
 *
 * This function uses _prime_post_caches() to prepare the object cache for
 * imminent requests to post objects that aren't naturally cached by the primary
 * WP_Query calls themselves. Post author caches are also primed.
 *
 * This is triggered when a `update_post_family_cache` argument is set to true.
 *
 * Also see: bbp_update_post_author_caches()
 *
 * @since 2.6.0 bbPress (r6699)
 *
 * @param array $objects Array of objects, fresh from a query
 *
 * @return bool True if some IDs were cached
 */
function bbp_update_post_family_caches($objects = array())
{
}
/**
 * Prime post author caches.
 *
 * This function uses cache_users() to prepare the object cache for
 * imminent requests to user objects that aren't naturally cached by the primary
 * WP_Query calls themselves.
 *
 * This is triggered when a `update_post_author_cache` argument is set to true.
 *
 * @since 2.6.0 bbPress (r6699)
 *
 * @param array $objects Array of objects, fresh from a query
 *
 * @return bool True if some IDs were cached
 */
function bbp_update_post_author_caches($objects = array())
{
}
/** Globals *******************************************************************/
/**
 * Get the unfiltered value of a global $post's key
 *
 * Used most frequently when editing a forum/topic/reply
 *
 * @since 2.1.0 bbPress (r3694)
 *
 * @param string $field Name of the key
 * @param string $context How to sanitize - raw|edit|db|display|attribute|js
 * @return string Field value
 */
function bbp_get_global_post_field($field = 'ID', $context = 'edit')
{
}
/** Nonces ********************************************************************/
/**
 * Makes sure the user requested an action from another page on this site.
 *
 * To avoid security exploits within the theme.
 *
 * @since 2.1.0 bbPress (r4022)
 *
 * @param string $action Action nonce
 * @param string $query_arg where to look for nonce in $_REQUEST
 */
function bbp_verify_nonce_request($action = '', $query_arg = '_wpnonce')
{
}
/** Feeds *********************************************************************/
/**
 * This function is hooked into the WordPress 'request' action and is
 * responsible for sniffing out the query vars and serving up RSS2 feeds if
 * the stars align and the user has requested a feed of any bbPress type.
 *
 * @since 2.0.0 bbPress (r3171)
 *
 * @param array $query_vars
 * @return array
 */
function bbp_request_feed_trap($query_vars = array())
{
}
/** Templates ******************************************************************/
/**
 * Used to guess if page exists at requested path
 *
 * @since 2.0.0 bbPress (r3304)
 *
 * @param string $path
 * @return mixed False if no page, Page object if true
 */
function bbp_get_page_by_path($path = '')
{
}
/**
 * Sets the 404 status.
 *
 * Used primarily with topics/replies inside hidden forums.
 *
 * @since 2.0.0 bbPress (r3051)
 * @since 2.6.0 bbPress (r6583) Use status_header() & nocache_headers()
 *
 * @param WP_Query $query  The query being checked
 *
 * @return bool Always returns true
 */
function bbp_set_404($query = \null)
{
}
/**
 * Sets the 200 status header.
 *
 * @since 2.6.0 bbPress (r6583)
 */
function bbp_set_200()
{
}
/**
 * Maybe handle the default 404 handling for some bbPress conditions
 *
 * Some conditions (like private/hidden forums and edits) have their own checks
 * on `bbp_template_redirect` and are not currently 404s.
 *
 * @since 2.6.0 bbPress (r6555)
 *
 * @param bool $override Whether to override the default handler
 * @param WP_Query $wp_query The posts query being referenced
 *
 * @return bool False to leave alone, true to override
 */
function bbp_pre_handle_404($override = \false, $wp_query = \false)
{
}
/**
 * Maybe pre-assign the posts that are returned from a WP_Query.
 *
 * This effectively short-circuits the default query for posts, which is
 * currently only used to avoid calling the main query when it's not necessary.
 *
 * @since 2.6.0 bbPress (r6580)
 *
 * @param mixed $posts Default null. Array of posts (possibly empty)
 * @param WP_Query $wp_query
 *
 * @return mixed Null if no override. Array if overridden.
 */
function bbp_posts_pre_query($posts = \null, $wp_query = \false)
{
}
/**
 * Get scheme for a URL based on is_ssl() results.
 *
 * @since 2.6.0 bbPress (r6759)
 *
 * @return string https:// if is_ssl(), otherwise http://
 */
function bbp_get_url_scheme()
{
}
/** Titles ********************************************************************/
/**
 * Is a title longer that the maximum title length?
 *
 * Uses mb_strlen() in `8bit` mode to treat strings as raw. This matches the
 * behavior present in Comments, PHPMailer, RandomCompat, and others.
 *
 * @since 2.6.0 bbPress (r6783)
 *
 * @param string $title
 * @return bool
 */
function bbp_is_title_too_long($title = '')
{
}
/** Kses **********************************************************************/
/**
 * Custom allowed tags for forum topics and replies
 *
 * Allows all users to post links, quotes, code, formatting, lists, and images
 *
 * @since 2.3.0 bbPress (r4603)
 *
 * @return array Associative array of allowed tags and attributes
 */
function bbp_kses_allowed_tags()
{
}
/**
 * Custom kses filter for forum topics and replies, for filtering incoming data
 *
 * @since 2.3.0 bbPress (r4603)
 *
 * @param string $data Content to filter, expected to be escaped with slashes
 * @return string Filtered content
 */
function bbp_filter_kses($data = '')
{
}
/**
 * Custom kses filter for forum topics and replies, for raw data
 *
 * @since 2.3.0 bbPress (r4603)
 *
 * @param string $data Content to filter, expected to not be escaped
 * @return string Filtered content
 */
function bbp_kses_data($data = '')
{
}
/** Formatting ****************************************************************/
/**
 * Filter the topic or reply content and output code and pre tags
 *
 * @since 2.3.0 bbPress (r4641)
 *
 * @param string $content Topic and reply content
 * @return string Partially encoded content
 */
function bbp_code_trick($content = '')
{
}
/**
 * When editing a topic or reply, reverse the code trick so the textarea
 * contains the correct editable content.
 *
 * @since 2.3.0 bbPress (r4641)
 *
 * @param string $content Topic and reply content
 * @return string Partially encoded content
 */
function bbp_code_trick_reverse($content = '')
{
}
/**
 * Filter the content and encode any bad HTML tags
 *
 * @since 2.3.0 bbPress (r4641)
 *
 * @param string $content Topic and reply content
 * @return string Partially encoded content
 */
function bbp_encode_bad($content = '')
{
}
/** Code Callbacks ************************************************************/
/**
 * Callback to encode the tags in topic or reply content
 *
 * @since 2.3.0 bbPress (r4641)
 *
 * @param array $matches
 * @return string
 */
function bbp_encode_callback($matches = array())
{
}
/**
 * Callback to decode the tags in topic or reply content
 *
 * @since 2.3.0 bbPress (r4641)
 *
 * @param array $matches
 * @todo Experiment with _wp_specialchars()
 * @return string
 */
function bbp_decode_callback($matches = array())
{
}
/**
 * Callback to replace empty HTML tags in a content string
 *
 * @since 2.3.0 bbPress (r4641)
 *
 * @internal Used by bbp_encode_bad()
 * @param string $content
 * @param string $key Not used
 * @param string $preg
 */
function bbp_encode_empty_callback(&$content = '', $key = '', $preg = '')
{
}
/**
 * Callback to replace normal HTML tags in a content string
 *
 * @since 2.3.0 bbPress (r4641)
 *
 * @internal Used by bbp_encode_bad()
 *
 * @param string $content
 * @param string $key
 * @param string $preg
 */
function bbp_encode_normal_callback(&$content = '', $key = '', $preg = '')
{
}
/** No Follow *****************************************************************/
/**
 * Catches links so rel=nofollow can be added (on output, not save)
 *
 * @since 2.3.0 bbPress (r4865)
 *
 * @param string $text Post text
 * @return string $text Text with rel=nofollow added to any links
 */
function bbp_rel_nofollow($text = '')
{
}
/**
 * Adds rel=nofollow to a link
 *
 * @since 2.3.0 bbPress (r4865)
 *
 * @param array $matches
 * @return string $text Link with rel=nofollow added
 */
function bbp_rel_nofollow_callback($matches = array())
{
}
/** Make Clickable ************************************************************/
/**
 * Convert plaintext URI to HTML links.
 *
 * Converts URI, www and ftp, and email addresses. Finishes by fixing links
 * within links.
 *
 * This custom version of WordPress's make_clickable() skips links inside of
 * pre and code tags.
 *
 * @since 2.4.0 bbPress (r4941)
 *
 * @param string $text Content to convert URIs.
 * @return string Content with converted URIs.
 */
function bbp_make_clickable($text = '')
{
}
/**
 * Make URLs clickable in content areas
 *
 * @since 2.6.0 bbPress (r6014)
 *
 * @param  string $text
 * @return string
 */
function bbp_make_urls_clickable($text = '')
{
}
/**
 * Make FTP clickable in content areas
 *
 * @since 2.6.0 bbPress (r6014)
 *
 * @see make_clickable()
 *
 * @param  string $text
 * @return string
 */
function bbp_make_ftps_clickable($text = '')
{
}
/**
 * Make emails clickable in content areas
 *
 * @since 2.6.0 bbPress (r6014)
 *
 * @see make_clickable()
 *
 * @param  string $text
 * @return string
 */
function bbp_make_emails_clickable($text = '')
{
}
/**
 * Make mentions clickable in content areas
 *
 * @since 2.6.0 bbPress (r6014)
 *
 * @see make_clickable()
 *
 * @param  string $text
 * @return string
 */
function bbp_make_mentions_clickable($text = '')
{
}
/**
 * Callback to convert mention matches to HTML A tag.
 *
 * @since 2.6.0 bbPress (r6014)
 *
 * @param array $matches Regular expression matches in the current text blob.
 *
 * @return string Original text if no user exists, or link to user profile.
 */
function bbp_make_mentions_clickable_callback($matches = array())
{
}
/** Numbers *******************************************************************/
/**
 * Never let a numeric value be less than zero.
 *
 * @since 2.6.0 bbPress (r6300)
 *
 * @param int $number
 */
function bbp_number_not_negative($number = 0)
{
}
/**
 * A bbPress specific method of formatting numeric values
 *
 * @since 2.0.0 bbPress (r2486)
 *
 * @param string $number Number to format
 * @param string $decimals Optional. Display decimals
 *
 * @return string Formatted string
 */
function bbp_number_format($number = 0, $decimals = \false, $dec_point = '.', $thousands_sep = ',')
{
}
/**
 * A bbPress specific method of formatting numeric values
 *
 * @since 2.1.0 bbPress (r3857)
 *
 * @param string $number Number to format
 * @param string $decimals Optional. Display decimals
 *
 * @return string Formatted string
 */
function bbp_number_format_i18n($number = 0, $decimals = \false)
{
}
/** Dates *********************************************************************/
/**
 * Convert time supplied from database query into specified date format.
 *
 * @since 2.0.0 bbPress (r2544)
 *
 * @param string $time Time to convert
 * @param string $d Optional. Default is 'U'. Either 'G', 'U', or php date
 *                             format
 * @param bool $translate Optional. Default is false. Whether to translate the
 *
 * @return string Returns timestamp
 */
function bbp_convert_date($time, $d = 'U', $translate = \false)
{
}
/**
 * Output formatted time to display human readable time difference.
 *
 * @since 2.0.0 bbPress (r2544)
 *
 * @param string $older_date Unix timestamp from which the difference begins.
 * @param string $newer_date Optional. Unix timestamp from which the
 *                            difference ends. False for current time.
 * @param int $gmt Optional. Whether to use GMT timezone. Default is false.
 */
function bbp_time_since($older_date, $newer_date = \false, $gmt = \false)
{
}
/**
 * Return formatted time to display human readable time difference.
 *
 * @since 2.0.0 bbPress (r2544)
 *
 * @param string $older_date Unix timestamp from which the difference begins.
 * @param string $newer_date Optional. Unix timestamp from which the
 *                            difference ends. False for current time.
 * @param int $gmt Optional. Whether to use GMT timezone. Default is false.
 *
 * @return string Formatted time
 */
function bbp_get_time_since($older_date, $newer_date = \false, $gmt = \false)
{
}
/** Revisions *****************************************************************/
/**
 * Formats the reason for editing the topic/reply.
 *
 * Does these things:
 *  - Trimming
 *  - Removing periods from the end of the string
 *  - Trimming again
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param string $reason Optional. User submitted reason for editing.
 * @return string Status of topic
 */
function bbp_format_revision_reason($reason = '')
{
}
/**
 * Output the URL to use for theme-side bbPress AJAX requests
 *
 * @since 2.3.0 bbPress (r4543)
 */
function bbp_ajax_url()
{
}
/**
 * Return the URL to use for theme-side bbPress AJAX requests
 *
 * @since 2.3.0 bbPress (r4543)
 *
 * @global WP $wp
 * @return string
 */
function bbp_get_ajax_url()
{
}
/**
 * Is this a bbPress AJAX request?
 *
 * @since 2.3.0 bbPress (r4543)
 *
 * @return bool Looking for bbp-ajax
 */
function bbp_is_ajax()
{
}
/**
 * Hooked to the 'bbp_template_redirect' action, this is also the custom
 * theme-side AJAX handler.
 *
 * This is largely taken from admin-ajax.php, but adapted specifically for
 * theme-side bbPress-only AJAX requests.
 *
 * @since 2.3.0 bbPress (r4543)
 *
 * @param string $action Sanitized action from bbp_post_request/bbp_get_request
 *
 * @return If not a bbPress AJAX request
 */
function bbp_do_ajax($action = '')
{
}
/**
 * Send headers for AJAX specific requests
 *
 * This was abstracted from bbp_do_ajax() for use in custom theme-side AJAX
 * implementations.
 *
 * @since 2.6.0 bbPress (r6757)
 */
function bbp_ajax_headers()
{
}
/**
 * Helper method to return JSON response for bbPress AJAX calls
 *
 * @since 2.3.0 bbPress (r4542)
 *
 * @param bool $success
 * @param string $content
 * @param array $extras
 */
function bbp_ajax_response($success = \false, $content = '', $status = -1, $extras = array())
{
}
/**
 * Check to see if the post is currently being edited by another user.
 *
 * @see wp_check_post_lock()
 *
 * @since 2.6.0 bbPress (r6340)
 *
 * @param int $post_id ID of the post to check for editing
 * @return integer False: not locked or locked by current user. Int: user ID of user with lock.
 */
function bbp_check_post_lock($post_id = 0)
{
}
/**
 * Mark the post as currently being edited by the current user
 *
 * @since 2.6.0 bbPress (r6340)
 *
 * @param int $post_id ID of the post to being edited
 * @return bool|array Returns false if the post doesn't exist of there is no current user, or
 * 	an array of the lock time and the user ID.
 */
function bbp_set_post_lock($post_id = 0)
{
}
/**
 * Return the strategy used for storing user engagements
 *
 * @since 2.6.0 bbPress (r6722)
 *
 * @param string $rel_key  The key used to index this relationship
 * @param string $rel_type The type of meta to look in
 *
 * @return string
 */
function bbp_user_engagements_interface($rel_key = '', $rel_type = 'post')
{
}
/** URLs **********************************************************************/
/**
 * Output the forum URL
 *
 * @since 2.1.0 bbPress (r3979)
 *
 * @param string $path Additional path with leading slash
 */
function bbp_forums_url($path = '/')
{
}
/**
 * Return the forum URL
 *
 * @since 2.1.0 bbPress (r3979)
 *
 * @param string $path Additional path with leading slash
 */
function bbp_get_forums_url($path = '/')
{
}
/**
 * Output the forum URL
 *
 * @since 2.1.0 bbPress (r3979)
 *
 * @param string $path Additional path with leading slash
 */
function bbp_topics_url($path = '/')
{
}
/**
 * Return the forum URL
 *
 * @since 2.1.0 bbPress (r3979)
 *
 * @param string $path Additional path with leading slash
 * @return The URL to the topics archive
 */
function bbp_get_topics_url($path = '/')
{
}
/** Add-on Actions ************************************************************/
/**
 * Add our custom head action to wp_head
 *
 * @since 2.0.0 bbPress (r2464)
 */
function bbp_head()
{
}
/**
 * Add our custom footer action to wp_footer
 *
 * @since 2.0.0 bbPress (r2464)
 */
function bbp_footer()
{
}
/** is_ ***********************************************************************/
/**
 * Check if current site is public
 *
 * @since 2.0.0 bbPress (r3398)
 *
 * @param int $site_id
 * @return bool True if site is public, false if private
 */
function bbp_is_site_public($site_id = 0)
{
}
/**
 * Check if current page is a bbPress forum
 *
 * @since 2.0.0 bbPress (r2549)
 *
 * @param int $post_id Possible post_id to check
 * @return bool True if it's a forum page, false if not
 */
function bbp_is_forum($post_id = 0)
{
}
/**
 * Check if we are viewing a forum archive.
 *
 * @since 2.0.0 bbPress (r3251)
 *
 * @return bool
 */
function bbp_is_forum_archive()
{
}
/**
 * Viewing a single forum
 *
 * @since 2.0.0 bbPress (r3338)
 *
 * @return bool
 */
function bbp_is_single_forum()
{
}
/**
 * Check if current page is a forum edit page
 *
 * @since 2.1.0 bbPress (r3553)
 *
 * @return bool True if it's the forum edit page, false if not
 */
function bbp_is_forum_edit()
{
}
/**
 * Check if current page is a bbPress topic
 *
 * @since 2.0.0 bbPress (r2549)
 *
 * @param int $post_id Possible post_id to check
 * @return bool True if it's a topic page, false if not
 */
function bbp_is_topic($post_id = 0)
{
}
/**
 * Viewing a single topic
 *
 * @since 2.0.0 bbPress (r3338)
 *
 * @return bool
 */
function bbp_is_single_topic()
{
}
/**
 * Check if we are viewing a topic archive.
 *
 * @since 2.0.0 bbPress (r3251)
 *
 * @return bool
 */
function bbp_is_topic_archive()
{
}
/**
 * Check if current page is a topic edit page
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @return bool True if it's the topic edit page, false if not
 */
function bbp_is_topic_edit()
{
}
/**
 * Check if current page is a topic merge page
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @return bool True if it's the topic merge page, false if not
 */
function bbp_is_topic_merge()
{
}
/**
 * Check if current page is a topic split page
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @return bool True if it's the topic split page, false if not
 */
function bbp_is_topic_split()
{
}
/**
 * Check if the current page is a topic tag
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @return bool True if it's a topic tag, false if not
 */
function bbp_is_topic_tag()
{
}
/**
 * Check if the current page is editing a topic tag
 *
 * @since 2.0.0 bbPress (r3346)
 *
 * @return bool True if editing a topic tag, false if not
 */
function bbp_is_topic_tag_edit()
{
}
/**
 * Check if the current post type is one that comes with bbPress
 *
 * @since 2.0.0 bbPress (r3311)
 *
 * @param mixed $the_post Optional. Post object or post ID.
 *
 * @return bool
 */
function bbp_is_custom_post_type($the_post = \false)
{
}
/**
 * Check if current page is a bbPress reply
 *
 * @since 2.0.0 bbPress (r2549)
 *
 * @param int $post_id Possible post_id to check
 * @return bool True if it's a reply page, false if not
 */
function bbp_is_reply($post_id = 0)
{
}
/**
 * Check if current page is a reply edit page
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @return bool True if it's the reply edit page, false if not
 */
function bbp_is_reply_edit()
{
}
/**
 * Check if current page is a reply move page
 *
 * @return bool True if it's the reply move page, false if not
 */
function bbp_is_reply_move()
{
}
/**
 * Viewing a single reply
 *
 * @since 2.0.0 bbPress (r3344)
 *
 * @return bool
 */
function bbp_is_single_reply()
{
}
/**
 * Check if current page is a bbPress user's favorites page (profile page)
 *
 * @since 2.0.0 bbPress (r2652)
 *
 * @return bool True if it's the favorites page, false if not
 */
function bbp_is_favorites()
{
}
/**
 * Check if current page is a bbPress user's subscriptions page (profile page)
 *
 * @since 2.0.0 bbPress (r2652)
 *
 * @return bool True if it's the subscriptions page, false if not
 */
function bbp_is_subscriptions()
{
}
/**
 * Check if current page shows the topics created by a bbPress user (profile
 * page)
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @return bool True if it's the topics created page, false if not
 */
function bbp_is_topics_created()
{
}
/**
 * Check if current page shows the replies created by a bbPress user (profile
 * page)
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @return bool True if it's the replies created page, false if not
 */
function bbp_is_replies_created()
{
}
/**
 * Check if current page is the currently logged in users author page
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @return bool True if it's the user's home, false if not
 */
function bbp_is_user_home()
{
}
/**
 * Check if current page is the currently logged in users author edit page
 *
 * @since 2.1.0 bbPress (r3918)
 *
 * @return bool True if it's the user's home, false if not
 */
function bbp_is_user_home_edit()
{
}
/**
 * Check if current page is a user profile page
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @return bool True if it's a user's profile page, false if not
 */
function bbp_is_single_user()
{
}
/**
 * Check if current page is a user profile edit page
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @return bool True if it's a user's profile edit page, false if not
 */
function bbp_is_single_user_edit()
{
}
/**
 * Check if current page is a user profile page
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @return bool True if it's a user's profile page, false if not
 */
function bbp_is_single_user_profile()
{
}
/**
 * Check if current page is a user topics created page
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @return bool True if it's a user's topics page, false if not
 */
function bbp_is_single_user_topics()
{
}
/**
 * Check if current page is a user replies created page
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @return bool True if it's a user's replies page, false if not
 */
function bbp_is_single_user_replies()
{
}
/**
 * Check if current page is a user engagements page
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @return bool True if it's a user's replies page, false if not
 */
function bbp_is_single_user_engagements()
{
}
/**
 * Check if current page is a view page
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @global WP_Query $wp_query To check if WP_Query::bbp_is_view is true
 * @return bool Is it a view page?
 */
function bbp_is_single_view()
{
}
/**
 * Check if current page is a search page
 *
 * @since 2.3.0 bbPress (r4579)
 *
 * @global WP_Query $wp_query To check if WP_Query::bbp_is_search is true
 * @return bool Is it a search page?
 */
function bbp_is_search()
{
}
/**
 * Check if current page is a search results page
 *
 * @since 2.4.0 bbPress (r4919)
 *
 * @global WP_Query $wp_query To check if WP_Query::bbp_is_search is true
 * @return bool Is it a search page?
 */
function bbp_is_search_results()
{
}
/**
 * Check if current page is an edit page
 *
 * @since 2.1.0 bbPress (r3585)
 *
 * @return bool True if it's the edit page, false if not
 */
function bbp_is_edit()
{
}
/**
 * Use the above is_() functions to output a body class for each scenario
 *
 * @since 2.0.0 bbPress (r2926)
 *
 * @param array $wp_classes
 * @param array $custom_classes
 * @return array Body Classes
 */
function bbp_body_class($wp_classes = array(), $custom_classes = \false)
{
}
/**
 * Output a small piece of JavaScript to replace the "bbp-no-js" body class
 * with "bbp-js" to allow interactive & dynamic elements to work as intended.
 *
 * @since 2.6.10 bbPress (r7229)
 */
function bbp_swap_no_js_body_class()
{
}
/**
 * Check if text contains a bbPress shortcode.
 *
 * Loops through registered bbPress shortcodes and keeps track of which ones
 * were used in a blob of text. If no text is passed, the current global post
 * content is assumed.
 *
 * A preliminary strpos() is performed before looping through each shortcode, to
 * prevent unnecessarily processing.
 *
 * @since 2.6.0
 *
 * @param string $text
 * @return bool
 */
function bbp_has_shortcode($text = '')
{
}
/**
 * Use the above is_() functions to return if in any bbPress page
 *
 * @since 2.0.0 bbPress (r3344)
 *
 * @return bool In a bbPress page
 */
function is_bbpress()
{
}
/** Forms *********************************************************************/
/**
 * Output the login form action url
 *
 * @since 2.0.0 bbPress (r2815)
 *
 * @param array $args This function supports these arguments:
 *  - action: The action being taken
 *  - context: The context the action is being taken from
 */
function bbp_wp_login_action($args = array())
{
}
/**
 * Return the login form action url
 *
 * @since 2.6.0 bbPress (r5684)
 *
 * @param array $args This function supports these arguments:
 *  - action: The action being taken
 *  - context: The context the action is being taken from
 */
function bbp_get_wp_login_action($args = array())
{
}
/**
 * Output hidden request URI field for user forms.
 *
 * The referer link is the current Request URI from the server super global. To
 * check the field manually, use bbp_get_redirect_to().
 *
 * @since 2.0.0 bbPress (r2815)
 *
 * @param string $redirect_to Pass a URL to redirect to
 */
function bbp_redirect_to_field($redirect_to = '')
{
}
/**
 * Echo sanitized $_REQUEST value.
 *
 * Use the $input_type parameter to properly process the value. This
 * ensures correct sanitization of the value for the receiving input.
 *
 * @since 2.0.0 bbPress (r2815)
 *
 * @param string $request Name of $_REQUEST to look for
 * @param string $input_type Type of input. Default: text. Accepts:
 *                            textarea|password|select|radio|checkbox
 */
function bbp_sanitize_val($request = '', $input_type = 'text')
{
}
/**
 * Return sanitized $_REQUEST value.
 *
 * Use the $input_type parameter to properly process the value. This
 * ensures correct sanitization of the value for the receiving input.
 *
 * @since 2.0.0 bbPress (r2815)
 *
 * @param string $request Name of $_REQUEST to look for
 * @param string $input_type Type of input. Default: text. Accepts:
 *                            textarea|password|select|radio|checkbox
 *
 * @return string Sanitized value ready for screen display
 */
function bbp_get_sanitize_val($request = '', $input_type = 'text')
{
}
/**
 * Output the current tab index of a given form
 *
 * Use this function to handle the tab indexing of user facing forms within a
 * template file. Calling this function will automatically increment the global
 * tab index by default.
 *
 * @since 2.0.0 bbPress (r2810)
 *
 * @deprecated 2.6.0 bbPress (r5561)
 *
 * @link https://bbpress.trac.wordpress.org/attachment/ticket/2714 Trac Ticket
 * @param int $auto_increment Optional. Default true. Set to false to prevent
 *                             increment
 */
function bbp_tab_index($auto_increment = \true)
{
}
/**
 * Return the current tab index of a given form
 *
 * Use this function to handle the tab indexing of user facing forms
 * within a template file. Calling this function will automatically
 * increment the global tab index by default.
 *
 * @since 2.0.0 bbPress (r2810)
 *
 * @deprecated 2.6.0 bbPress (r5561)
 *
 * @link https://bbpress.trac.wordpress.org/attachment/ticket/2714 Trac Ticket
 * @param int $auto_increment Optional. Default true. Set to false to
 *                             prevent the increment
 * @return int $bbp->tab_index The global tab index
 */
function bbp_get_tab_index($auto_increment = \true)
{
}
/**
 * Output a "tabindex" attribute for an element, if an index was passed.
 *
 * This helper function is in use, but it is generally considered impolite to
 * override the "tabindex" attribute beyond what the browser naturally assigns.
 *
 * Most internal usages pass `false` which results in no attribute being used.
 *
 * @since 2.6.0 bbPress (r6424)
 *
 * @param mixed $tab False to skip, any integer to use
 */
function bbp_tab_index_attribute($tab = \false)
{
}
/**
 * Return a "tabindex" attribute for an element, if an index was passed.
 *
 * This helper function is in use, but it is generally considered impolite to
 * override the "tabindex" attribute beyond what the browser naturally assigns.
 *
 * Most internal usages pass `false` which results in no attribute being used.
 *
 * @since 2.6.0 bbPress (r6424)
 *
 * @param mixed $tab False to skip, any integer to use
 *
 * @return string
 */
function bbp_get_tab_index_attribute($tab = \false)
{
}
/**
 * Output a select box allowing to pick which forum/topic a new topic/reply
 * belongs in.
 *
 * Can be used for any post type, but is mostly used for topics and forums.
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param array $args See {@link bbp_get_dropdown()} for arguments
 */
function bbp_dropdown($args = array())
{
}
/**
 * Return a select box allowing to pick which forum/topic a new
 * topic/reply belongs in.
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param array $args The function supports these args:
 *  - post_type: Post type, defaults to bbp_get_forum_post_type() (bbp_forum)
 *  - selected: Selected ID, to not have any value as selected, pass
 *               anything smaller than 0 (due to the nature of select
 *               box, the first value would of course be selected -
 *               though you can have that as none (pass 'show_none' arg))
 *  - orderby: Defaults to 'menu_order title'
 *  - post_parent: Post parent. Defaults to 0
 *  - post_status: Which all post_statuses to find in? Can be an array
 *                  or CSV of publish, category, closed, private, spam,
 *                  trash (based on post type) - if not set, these are
 *                  automatically determined based on the post_type
 *  - posts_per_page: Retrieve all forums/topics. Defaults to -1 to get
 *                     all posts
 *  - walker: Which walker to use? Defaults to
 *             {@link BBP_Walker_Dropdown}
 *  - select_id: ID of the select box. Defaults to 'bbp_forum_id'
 *  - tab: Deprecated. Tabindex value. False or integer
 *  - options_only: Show only <options>? No <select>?
 *  - show_none: Boolean or String __( '&mdash; No Forum &mdash;', 'bbpress' )
 *  - disable_categories: Disable forum categories and closed forums?
 *                         Defaults to true. Only for forums and when
 * @return string The dropdown
 */
function bbp_get_dropdown($args = array())
{
}
/**
 * Output the required hidden fields when creating/editing a forum
 *
 * @since 2.1.0 bbPress (r3553)
 */
function bbp_forum_form_fields()
{
}
/**
 * Output the required hidden fields when creating/editing a topic
 *
 * @since 2.0.0 bbPress (r2753)
 */
function bbp_topic_form_fields()
{
}
/**
 * Output the required hidden fields when creating/editing a reply
 *
 * @since 2.0.0 bbPress (r2753)
 */
function bbp_reply_form_fields()
{
}
/**
 * Output the required hidden fields when editing a user
 *
 * @since 2.0.0 bbPress (r2690)
 */
function bbp_edit_user_form_fields()
{
}
/**
 * Merge topic form fields
 *
 * Output the required hidden fields when merging a topic
 *
 * @since 2.0.0 bbPress (r2756)
 */
function bbp_merge_topic_form_fields()
{
}
/**
 * Split topic form fields
 *
 * Output the required hidden fields when splitting a topic
 *
 * @since 2.0.0 bbPress (r2756)
 */
function bbp_split_topic_form_fields()
{
}
/**
 * Move reply form fields
 *
 * Output the required hidden fields when moving a reply
 */
function bbp_move_reply_form_fields()
{
}
/**
 * Output a textarea or TinyMCE if enabled
 *
 * @since 2.1.0 bbPress (r3586)
 *
 * @param array $args
 */
function bbp_the_content($args = array())
{
}
/**
 * Return a textarea or TinyMCE if enabled
 *
 * @since 2.1.0 bbPress (r3586)
 *
 * @param array $args
 *
 * @return string HTML from output buffer
 */
function bbp_get_the_content($args = array())
{
}
/**
 * Edit TinyMCE plugins to match core behaviour
 *
 * @since 2.3.0 bbPress (r4574)
 *
 * @param array $plugins
 * @see tiny_mce_plugins, teeny_mce_plugins
 * @return array
 */
function bbp_get_tiny_mce_plugins($plugins = array())
{
}
/**
 * Edit TeenyMCE buttons to match allowedtags
 *
 * @since 2.3.0 bbPress (r4605)
 *
 * @param array $buttons
 * @see teeny_mce_buttons
 * @return array
 */
function bbp_get_teeny_mce_buttons($buttons = array())
{
}
/**
 * Edit TinyMCE quicktags buttons to match allowedtags
 *
 * @since 2.3.0 bbPress (r4606)
 *
 * @param array $settings
 * @see quicktags_settings
 * @return array Quicktags settings
 */
function bbp_get_quicktags_settings($settings = array())
{
}
/** Views *********************************************************************/
/**
 * Output the view id
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view Optional. View id
 */
function bbp_view_id($view = '')
{
}
/**
 * Get the view id
 *
 * Use view id if supplied, otherwise bbp_get_view_rewrite_id() query var.
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view Optional. View id.
 * @return bool|string ID on success, false on failure
 */
function bbp_get_view_id($view = '')
{
}
/**
 * Output the view name aka title
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view Optional. View id
 */
function bbp_view_title($view = '')
{
}
/**
 * Get the view name aka title
 *
 * If a view id is supplied, that is used. Otherwise the bbp_view
 * query var is checked for.
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view Optional. View id
 * @return bool|string Title on success, false on failure
 */
function bbp_get_view_title($view = '')
{
}
/**
 * Output the view url
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view Optional. View id
 */
function bbp_view_url($view = \false)
{
}
/**
 * Return the view url
 *
 * @since 2.0.0 bbPress (r2789)
 *
 * @param string $view Optional. View id
 *                        used view id
 * @return string View url (or home url if the view was not found)
 */
function bbp_get_view_url($view = \false)
{
}
/** Query *********************************************************************/
/**
 * Check the passed parameter against the current _bbp_query_name
 *
 * @since 2.0.0 bbPress (r2980)
 *
 * @return bool True if match, false if not
 */
function bbp_is_query_name($name = '')
{
}
/**
 * Get the '_bbp_query_name' setting
 *
 * @since 2.0.0 bbPress (r2695)
 *
 * @return string To return the query var value
 */
function bbp_get_query_name()
{
}
/**
 * Set the '_bbp_query_name' setting to $name
 *
 * @since 2.0.0 bbPress (r2692)
 *
 * @param string $name What to set the query var to
 */
function bbp_set_query_name($name = '')
{
}
/**
 * Used to clear the '_bbp_query_name' setting
 *
 * @since 2.0.0 bbPress (r2692)
 *
 */
function bbp_reset_query_name()
{
}
/** Breadcrumbs ***************************************************************/
/**
 * Output the page title as a breadcrumb
 *
 * @since 2.0.0 bbPress (r2589)
 *
 * @param string $sep Separator. Defaults to '&larr;'
 * @param bool $current_page Include the current item
 * @param bool $root Include the root page if one exists
 */
function bbp_title_breadcrumb($args = array())
{
}
/**
 * Output a breadcrumb
 *
 * @since 2.0.0 bbPress (r2589)
 *
 * @param string $sep Separator. Defaults to '&larr;'
 * @param bool $current_page Include the current item
 * @param bool $root Include the root page if one exists
 */
function bbp_breadcrumb($args = array())
{
}
/**
 * Return a breadcrumb ( forum -> topic -> reply )
 *
 * @since 2.0.0 bbPress (r2589)
 *
 * @param string $sep Separator. Defaults to '&larr;'
 * @param bool $current_page Include the current item
 * @param bool $root Include the root page if one exists
 *
 * @return string Breadcrumbs
 */
function bbp_get_breadcrumb($args = array())
{
}
/** Topic Tags ***************************************************************/
/**
 * Output all of the allowed tags in HTML format with attributes.
 *
 * This is useful for displaying in the post area, which elements and
 * attributes are supported. As well as any plugins which want to display it.
 *
 * @since 2.0.0 bbPress (r2780)
 */
function bbp_allowed_tags()
{
}
/**
 * Display all of the allowed tags in HTML format with attributes.
 *
 * This is useful for displaying in the post area, which elements and
 * attributes are supported. As well as any plugins which want to display it.
 *
 * @since 2.0.0 bbPress (r2780)
 *
 * @return string HTML allowed tags entity encoded.
 */
function bbp_get_allowed_tags()
{
}
/** Errors & Messages *********************************************************/
/**
 * Display possible errors & messages inside a template file
 *
 * @since 2.0.0 bbPress (r2688)
 */
function bbp_template_notices()
{
}
/** Login/logout/register/lost pass *******************************************/
/**
 * Output the logout link
 *
 * @since 2.0.0 bbPress (r2827)
 *
 * @param string $redirect_to Redirect to url
 */
function bbp_logout_link($redirect_to = '')
{
}
/**
 * Return the logout link
 *
 * @since 2.0.0 bbPress (r2827)
 *
 * @param string $redirect_to Redirect to url
 *                        redirect to url
 * @return string The logout link
 */
function bbp_get_logout_link($redirect_to = '')
{
}
/** Title *********************************************************************/
/**
 * Custom page title for bbPress pages
 *
 * @since 2.0.0 bbPress (r2788)
 *
 * @param string $title Optional. The title (not used).
 * @param string $sep Optional, default is '&raquo;'. How to separate the
 *                     various items within the page title.
 * @param string $seplocation Optional. Direction to display title, 'right'.
 *                        separator and separator location
 * @return string The title
 */
function bbp_title($title = '', $sep = '&raquo;', $seplocation = '')
{
}
/**
 * Translates role name.
 *
 * Since the role names are in the database and not in the source there
 * are dummy gettext calls to get them into the POT file and this function
 * properly translates them back.
 *
 * The before_last_bar() call is needed, because older installs keep the roles
 * using the old context format: 'Role name|User role' and just skipping the
 * content after the last bar is easier than fixing them in the DB. New installs
 * won't suffer from that problem.
 *
 * @see translate_user_role()
 *
 * @since 2.6.0 bbPress
 *
 * @param string $name The role name.
 * @return string Translated role name on success, original name on failure.
 */
function bbp_translate_user_role($name)
{
}
/**
 * Dummy gettext calls to get strings in the catalog.
 *
 * @since 2.6.0 bbPress
 */
function bbp_dummy_role_names()
{
}
/**
 * Redirect back to $url when attempting to use the login page
 *
 * @since 2.0.0 bbPress (r2815)
 *
 * @param string $url The url
 * @param string $raw_url Raw url
 * @param object $user User object
 */
function bbp_redirect_login($url = '', $raw_url = '', $user = '')
{
}
/**
 * Is an anonymous topic/reply being made?
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @return bool True if anonymous is allowed and user is not logged in, false if
 *               anonymous is not allowed or user is logged in
 */
function bbp_is_anonymous()
{
}
/**
 * Echoes the values for current poster (uses WP comment cookies)
 *
 * @since 2.0.0 bbPress (r2734)
 *
 * @param string $key Which value to echo?
 */
function bbp_current_anonymous_user_data($key = '')
{
}
/**
 * Get the cookies for current poster (uses WP comment cookies).
 *
 * @since 2.0.0 bbPress (r2734)
 *
 * @param string $key Optional. Which value to get? If not given, then
 *                     an array is returned.
 * @return string|array Cookie(s) for current poster
 */
function bbp_get_current_anonymous_user_data($key = '')
{
}
/**
 * Set the cookies for current poster (uses WP comment cookies)
 *
 * @since 2.0.0 bbPress (r2734)
 *
 * @param array $anonymous_data Optional - if it's an anonymous post. Do not
 *                              supply if supplying $author_id. Should be
 *                              sanitized (see {@link bbp_filter_anonymous_post_data()}
 */
function bbp_set_current_anonymous_user_data($anonymous_data = array())
{
}
/**
 * Get the poster IP address
 *
 * @since 2.0.0 bbPress (r3120)
 * @since 2.6.0 bbPress (r5609) Added `empty()` check for unit tests
 *
 * @return string
 */
function bbp_current_author_ip()
{
}
/**
 * Get the poster user agent
 *
 * @since 2.0.0 bbPress (r3446)
 *
 * @return string
 */
function bbp_current_author_ua()
{
}
/** Edit **********************************************************************/
/**
 * Handles the front end user editing from POST requests
 *
 * @since 2.0.0 bbPress (r2790)
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_edit_user_handler($action = '')
{
}
/**
 * Handles user email address updating from GET requests
 *
 * @since 2.6.0 bbPress (r5660)
 *
 * @param string $action
 */
function bbp_user_email_change_handler($action = '')
{
}
/**
 * Sends an email when an email address change occurs on POST requests
 *
 * @since 2.6.0 bbPress (r5660)
 *
 * @see send_confirmation_on_profile_email()
 */
function bbp_edit_user_email_send_notification($user_id = 0, $args = array())
{
}
/**
 * Conditionally hook the core WordPress output actions to the end of the
 * default user's edit profile template
 *
 * This allows clever plugin authors to conditionally unhook the WordPress core
 * output actions if they don't want any unexpected junk to appear there, and
 * also avoids needing to pollute the templates with additional logic and actions.
 *
 * @since 2.2.0 bbPress (r4273)
 */
function bbp_user_edit_after()
{
}
/** User Queries **************************************************************/
/**
 * Get the topics that a user created
 *
 * @since 2.0.0 bbPress (r2660)
 * @since 2.6.0 bbPress (r6618) Signature changed to accept an array of arguments
 *
 * @param array $args    Optional. Arguments to pass into bbp_has_topics()
 *
 * @return bool True if user has started topics, otherwise false
 */
function bbp_get_user_topics_started($args = array())
{
}
/**
 * Get the replies that a user created
 *
 * @since 2.2.0 bbPress (r4225)
 * @since 2.6.0 bbPress (r6618) Signature changed to accept an array of arguments
 *
 * @param array $args Optional. Arguments to pass into bbp_has_replies()
 *
 * @return bool True if user has created replies, otherwise false
 */
function bbp_get_user_replies_created($args = array())
{
}
/**
 * Get user IDs from nicenames
 *
 * This function is primarily used when saving object moderators
 *
 * @since 2.6.0 bbPress
 *
 * @param mixed $user_nicenames
 * @return array
 */
function bbp_get_user_ids_from_nicenames($user_nicenames = array())
{
}
/**
 * Get user nicenames from IDs
 *
 * This function is primarily used when saving object moderators
 *
 * @since 2.6.0 bbPress
 *
 * @param mixed $user_ids
 * @return array
 */
function bbp_get_user_nicenames_from_ids($user_ids = array())
{
}
/** Post Counts ***************************************************************/
/**
 * Return the raw database count of topics by a user
 *
 * @since 2.1.0 bbPress (r3633)
 *
 * @param int $user_id User ID to get count for
 *
 * @return int Raw DB count of topics
 */
function bbp_get_user_topic_count_raw($user_id = 0)
{
}
/**
 * Return the raw database count of replies by a user
 *
 * @since 2.1.0 bbPress (r3633)
 *
 * @param int $user_id User ID to get count for
 *
 * @return int Raw DB count of replies
 */
function bbp_get_user_reply_count_raw($user_id = 0)
{
}
/**
 * Bump the topic count for a user by a certain amount.
 *
 * @since 2.6.0 bbPress (r5309)
 *
 * @param int $user_id
 * @param int $difference
 */
function bbp_bump_user_topic_count($user_id = 0, $difference = 1)
{
}
/**
 * Bump the reply count for a user by a certain amount.
 *
 * @since 2.6.0 bbPress (r5309)
 *
 * @param int $user_id
 * @param int $difference
 */
function bbp_bump_user_reply_count($user_id = 0, $difference = 1)
{
}
/**
 * Helper function used to increase (by one) the count of topics for a user when
 * a topic is published.
 *
 * @since 2.6.0 bbPress (r5309)
 *
 * @access
 * @param $topic_id
 * @param $forum_id
 * @param $anonymous_data
 * @param $topic_author
 */
function bbp_increase_user_topic_count($topic_id = 0)
{
}
/**
 * Helper function used to increase (by one) the count of replies for a user when
 * a reply is published.
 *
 * This is a helper function, hooked to `bbp_new_reply`
 *
 * @since 2.6.0 bbPress (r5309)
 *
 * @param $topic_id
 * @param $forum_id
 * @param $anonymous_data
 * @param $topic_author
 */
function bbp_increase_user_reply_count($reply_id = 0)
{
}
/**
 * Helper function used to decrease (by one) the count of topics for a user when
 * a topic is unpublished.
 *
 * @since 2.6.0 bbPress (r5309)
 *
 * @param $topic_id
 */
function bbp_decrease_user_topic_count($topic_id = 0)
{
}
/**
 * Helper function used to increase (by one) the count of replies for a user when
 * a topic is unpublished.
 *
 * @since 2.6.0 bbPress (r5309)
 *
 * @param $reply_id
 */
function bbp_decrease_user_reply_count($reply_id = 0)
{
}
/** Permissions ***************************************************************/
/**
 * Redirect if unauthorized user is attempting to edit another user
 *
 * This is hooked to 'bbp_template_redirect' and controls the conditions under
 * which a user can edit another user (or themselves.) If these conditions are
 * met, we assume a user cannot perform this task, and look for ways they can
 * earn the ability to access this template.
 *
 * @since 2.1.0 bbPress (r3605)
 */
function bbp_check_user_edit()
{
}
/**
 * Check if a user is blocked, or cannot spectate the forums.
 *
 * @since 2.0.0 bbPress (r2996)
 */
function bbp_forum_enforce_blocked()
{
}
/** Sanitization **************************************************************/
/**
 * Sanitize displayed user data, when viewing and editing any user.
 *
 * This somewhat monolithic function handles the escaping and sanitization of
 * user data for a bbPress profile. There are two reasons this all happens here:
 *
 * 1. bbPress took a similar approach to WordPress, and funnels all user profile
 *    data through a central helper. This eventually calls sanitize_user_field()
 *    which applies a few context based filters, which some third party plugins
 *    might be relying on bbPress to play nicely with.
 *
 * 2. Early versions of bbPress 2.x templates did not escape this data meaning
 *    a backwards compatible approach like this one was necessary to protect
 *    existing installations that may have custom template parts.
 *
 * @since 2.6.0 bbPress (r5368)
 *
 * @param string $value
 * @param string $field
 * @param string $context
 * @return string
 */
function bbp_sanitize_displayed_user_field($value = '', $field = '', $context = 'display')
{
}
/** Converter *****************************************************************/
/**
 * Convert passwords from previous platform encryption to WordPress encryption.
 *
 * @since 2.1.0 bbPress (r3813)
 * @since 2.6.10 bbPress (r7244) Switched from direct query to get_user_by()
 */
function bbp_user_maybe_convert_pass()
{
}
/**
 * Output the forum-role field when adding a new user
 *
 * @since 2.6.0 bbPress (r6674)
 */
function bbp_add_user_form_role_field()
{
}
/**
 * Maybe add forum role to signup meta array
 *
 * @since 2.6.0 bbPress (r6674)
 *
 * @param array $meta
 *
 * @return array
 */
function bbp_user_add_role_to_signup_meta($meta = array())
{
}
/**
 * Add forum meta data when inviting a user to a site
 *
 * @since 2.6.0 bbPress (r6674)
 *
 * @param int    $user_id     The invited user's ID.
 * @param array  $role        The role of invited user.
 * @param string $newuser_key The key of the invitation.
 */
function bbp_user_add_role_on_invite($user_id = '', $role = '', $newuser_key = '')
{
}
/**
 * Single-site handler for adding a new user
 *
 * @since 2.6.0 bbPress (r6674)
 *
 * @param int $user_id
 */
function bbp_user_add_role_on_register($user_id = '')
{
}
/**
 * Multi-site handler for adding a new user
 *
 * @since 2.6.0 bbPress (r6674)
 *
 * @param int $user_id User ID.
 */
function bbp_user_add_role_on_activate($user_id = 0, $password = '', $meta = array())
{
}
/** Validators ****************************************************************/
/**
 * Validate the Forum role during signup
 *
 * This helper function performs a number of generic checks, and encapsulates
 * the logic used to validate if a Forum Role is valid, typically during new
 * user registration, but also when adding an existing user to a site in
 * Multisite installations.
 *
 * @since 2.6.5
 *
 * @param string $to_validate A role ID to validate
 * @return string A valid role ID, or empty string on error
 */
function bbp_validate_signup_role($to_validate = '')
{
}
/**
 * Validate the Forum role during the registration process
 *
 * @since 2.6.5
 *
 * @param string $to_validate A well-formed (string) role ID to validate
 * @return string A valid role ID, or empty string on error
 */
function bbp_validate_registration_role($to_validate = '')
{
}
/**
 * Validate the Forum role during activation
 *
 * This function exists simply for parity with registrations, and to maintain an
 * intentional layer of abstraction from the more generic function it uses.
 *
 * @since 2.6.5
 *
 * @param string $to_validate A well-formed (string) role ID to validate
 * @return string A valid role ID, or empty string on error
 */
function bbp_validate_activation_role($to_validate = '')
{
}
/** User Relationships ********************************************************/
/**
 * Add a user id to an object
 *
 * @since 2.6.0 bbPress (r6109)
 *
 * @param int    $object_id The object id
 * @param int    $user_id   The user id
 * @param string $rel_key   The relationship key
 * @param string $rel_type  The relationship type (usually 'post')
 * @param bool   $unique    Whether meta key should be unique to the object
 *
 * @return bool Returns true on success, false on failure
 */
function bbp_add_user_to_object($object_id = 0, $user_id = 0, $rel_key = '', $rel_type = 'post', $unique = \false)
{
}
/**
 * Remove a user id from an object
 *
 * @since 2.6.0 bbPress (r6109)
 *
 * @param int    $object_id The object id
 * @param int    $user_id   The user id
 * @param string $rel_key   The relationship key
 * @param string $rel_type  The relationship type (usually 'post')
 *
 * @return bool Returns true on success, false on failure
 */
function bbp_remove_user_from_object($object_id = 0, $user_id = 0, $rel_key = '', $rel_type = 'post')
{
}
/**
 * Remove a user id from all objects
 *
 * @since 2.6.0 bbPress (r6109)
 *
 * @param int    $user_id  The user id
 * @param string $rel_key  The relationship key
 * @param string $rel_type The relationship type (usually 'post')
 *
 * @return bool Returns true on success, false on failure
 */
function bbp_remove_user_from_all_objects($user_id = 0, $rel_key = '', $rel_type = 'post')
{
}
/**
 * Remove an object from all users
 *
 * @since 2.6.0 bbPress (r6109)
 *
 * @param int    $object_id The object id
 * @param int    $user_id   The user id
 * @param string $rel_key   The relationship key
 * @param string $rel_type  The relationship type (usually 'post')
 *
 * @return bool Returns true on success, false on failure
 */
function bbp_remove_object_from_all_users($object_id = 0, $rel_key = '', $rel_type = 'post')
{
}
/**
 * Remove all users from all objects
 *
 * @since 2.6.0 bbPress (r6109)
 *
 * @param string $rel_key  The relationship key
 * @param string $rel_type The relationship type (usually 'post')
 *
 * @return bool Returns true on success, false on failure
 */
function bbp_remove_all_users_from_all_objects($rel_key = '', $rel_type = 'post')
{
}
/**
 * Get users of an object
 *
 * @since 2.6.0 bbPress (r6109)
 *
 * @param int    $object_id The object id
 * @param string $rel_key   The key used to index this relationship
 * @param string $rel_type  The type of meta to look in
 *
 * @return array Returns ids of users
 */
function bbp_get_users_for_object($object_id = 0, $rel_key = '', $rel_type = 'post')
{
}
/**
 * Check if an object has a specific user
 *
 * @since 2.6.0 bbPress (r6109)
 *
 * @param int    $object_id The object id
 * @param int    $user_id   The user id
 * @param string $rel_key   The relationship key
 * @param string $rel_type  The relationship type (usually 'post')
 *
 * @return bool Returns true if object has a user, false if not
 */
function bbp_is_object_of_user($object_id = 0, $user_id = 0, $rel_key = '', $rel_type = 'post')
{
}
/**
 * Get the query part responsible for JOINing objects to user IDs
 *
 * @since 2.6.0 bbPress (r6747)
 *
 * @param array  $args      Default query arguments
 * @param string $context   Additional context
 * @param string $rel_key   The relationship key
 * @param string $rel_type  The relationship type (usually 'post')
 *
 * @return array
 */
function bbp_get_user_object_query($args = array(), $context = '', $rel_key = '', $rel_type = 'post')
{
}
/** Engagements ***************************************************************/
/**
 * Get the users who have engaged in a topic
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param int $topic_id Optional. Topic id
 *
 * @return array|bool Results if the topic has any engagements, otherwise false
 */
function bbp_get_topic_engagements($topic_id = 0)
{
}
/**
 * Return the users who have engaged in a topic, directly with a database query
 *
 * See: https://bbpress.trac.wordpress.org/ticket/3083
 *
 * @since 2.6.0 bbPress (r6522)
 *
 * @param int $topic_id
 *
 * @return array
 */
function bbp_get_topic_engagements_raw($topic_id = 0)
{
}
/**
 * Get a user's topic engagements
 *
 * @since 2.6.0 bbPress (r6320)
 * @since 2.6.0 bbPress (r6618) Signature changed to accept an array of arguments
 *
 * @param array $args Optional. Arguments to pass into bbp_has_replies()
 *
 * @return bool True if user has engaged, otherwise false
 */
function bbp_get_user_engagements($args = array())
{
}
/**
 * Check if a user is engaged in a topic or not
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 *
 * @return bool True if the topic is in user's engagements, otherwise false
 */
function bbp_is_user_engaged($user_id = 0, $topic_id = 0)
{
}
/**
 * Add a topic to user's engagements
 *
 * Note that both the User and Topic should be verified to exist before using
 * this function. Originally both were validated, but because this function is
 * frequently used within a loop, those verifications were moved upstream to
 * improve performance on topics with many engaged users.
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 *
 * @return bool Always true
 */
function bbp_add_user_engagement($user_id = 0, $topic_id = 0)
{
}
/**
 * Remove a topic from user's engagements
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 *
 * @return bool True if the topic was removed from user's engagements, otherwise
 *               false
 */
function bbp_remove_user_engagement($user_id = 0, $topic_id = 0)
{
}
/**
 * Recalculate all of the users who have engaged in a topic.
 *
 * This happens when permanently deleting a reply, because that reply author may
 * have authored other replies to that same topic, or the topic itself.
 *
 * You may need to do this manually on heavily active forums where engagement
 * count accuracy is important.
 *
 * @since 2.6.0 bbPress (r6522)
 *
 * @param int  $topic_id
 * @param bool $force
 *
 * @return boolean True if any engagements are added, false otherwise
 */
function bbp_recalculate_topic_engagements($topic_id = 0, $force = \false)
{
}
/**
 * Update the engagements of a topic.
 *
 * Hooked to 'bbp_new_topic' and 'bbp_new_reply', this gets the post author and
 * if not anonymous, passes it into bbp_add_user_engagement().
 *
 * @since 2.6.0 bbPress (r6526)
 *
 * @param int $topic_id
 */
function bbp_update_topic_engagements($topic_id = 0)
{
}
/** Favorites *****************************************************************/
/**
 * Get the users who have made the topic favorite
 *
 * @since 2.0.0 bbPress (r2658)
 *
 * @param int $topic_id Optional. Topic id
 *
 * @return array|bool Results if the topic has any favoriters, otherwise false
 */
function bbp_get_topic_favoriters($topic_id = 0)
{
}
/**
 * Get a user's favorite topics
 *
 * @since 2.0.0 bbPress (r2652)
 * @since 2.6.0 bbPress (r6618) Signature changed to accept an array of arguments
 *
 * @param array $args Optional. Arguments to pass into bbp_has_topics()
 *
 * @return array Array of topics if user has favorites, otherwise empty array
 */
function bbp_get_user_favorites($args = array())
{
}
/**
 * Check if a topic is in user's favorites or not
 *
 * @since 2.0.0 bbPress (r2652)
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 *
 * @return bool True if the topic is in user's favorites, otherwise false
 */
function bbp_is_user_favorite($user_id = 0, $topic_id = 0)
{
}
/**
 * Add a topic to user's favorites
 *
 * Note that both the User and Topic should be verified to exist before using
 * this function. Originally both were validated, but because this function is
 * frequently used within a loop, those verifications were moved upstream to
 * improve performance on topics with many engaged users.
 *
 * @since 2.0.0 bbPress (r2652)
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 *
 * @return bool True if the topic was added to user's favorites, otherwise false
 */
function bbp_add_user_favorite($user_id = 0, $topic_id = 0)
{
}
/**
 * Remove a topic from user's favorites
 *
 * @since 2.0.0 bbPress (r2652)
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 *
 * @return bool True if the topic was removed from user's favorites, otherwise false
 */
function bbp_remove_user_favorite($user_id, $topic_id)
{
}
/**
 * Handles the front end adding and removing of favorite topics
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_favorites_handler($action = '')
{
}
/** Subscriptions *************************************************************/
/**
 * Get the users who have subscribed
 *
 * @since 2.6.0 bbPress (r5156)
 *
 * @param int $object_id Optional. ID of object (forum, topic, or something else)
 */
function bbp_get_subscribers($object_id = 0, $type = 'post')
{
}
/**
 * Get a user's subscribed topics
 *
 * @since 2.0.0 bbPress (r2668)
 * @since 2.6.0 bbPress (r6618) Signature changed to accept an array of arguments
 *
 * @param array $args Optional. Arguments to pass into bbp_has_topics()
 *
 * @return array Array of topics if user has topic subscriptions, otherwise empty array
 */
function bbp_get_user_topic_subscriptions($args = array())
{
}
/**
 * Get a user's subscribed forums
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6618) Signature changed to accept an array of arguments
 *
 * @param array $args Optional. Arguments to pass into bbp_has_forums()
 *
 * @return array Array of forums if user has forum subscriptions, otherwise empty array
 */
function bbp_get_user_forum_subscriptions($args = array())
{
}
/**
 * Check if an object (forum or topic) is in user's subscription list or not
 *
 * @since 2.5.0 bbPress (r5156)
 *
 * @param int $user_id Optional. User id
 * @param int $object_id Optional. Object id
 *
 * @return bool True if the object (forum or topic) is in user's subscriptions, otherwise false
 */
function bbp_is_user_subscribed($user_id = 0, $object_id = 0, $type = 'post')
{
}
/**
 * Add a user subscription
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6544) Added $type parameter
 *
 * @param int    $user_id   Optional. User id
 * @param int    $object_id Optional. Object id
 * @param string $type      Optional. Type of object being subscribed to
 *
 * @return bool True if the object was added to user subscriptions, otherwise false
 */
function bbp_add_user_subscription($user_id = 0, $object_id = 0, $type = 'post')
{
}
/**
 * Remove a user subscription
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6544) Added $type parameter
 *
 * @param int    $user_id   Optional. User id
 * @param int    $object_id Optional. Object id
 * @param string $type      Optional. Type of object being subscribed to
 *
 * @return bool True if the object was removed from user subscriptions, otherwise false
 */
function bbp_remove_user_subscription($user_id = 0, $object_id = 0, $type = 'post')
{
}
/**
 * Handles the front end toggling of user subscriptions
 *
 * @since 2.0.0 bbPress (r2790)
 * @since 2.6.l bbPress (r6543)
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_subscriptions_handler($action = '')
{
}
/** Query Helpers *************************************************************/
/**
 * These functions are no longer used in bbPress due to general performance
 * concerns on large installations. They are provided here for convenience and
 * backwards compatibility only.
 */
/**
 * Get a user's object IDs
 *
 * For the most part, you should not need to use this function, and may even
 * want to come up with a more efficient way to get IDs on your own. Nevertheless,
 * it is available here for your convenience, using the most efficient query
 * parameters available inside of the various query APIs.
 *
 * @since 2.6.0 bbPress (r6606)
 *
 * @param int    $user_id   The user id
 * @param string $rel_key   The relationship key
 * @param string $rel_type  The relationship type (usually 'post')
 * @param array  $args      The arguments to override defaults
 *
 * @return array|bool Results if user has objects, otherwise null
 */
function bbp_get_user_object_ids($args = array())
{
}
/**
 * Get array of forum IDs that a user can moderate
 *
 * @since 2.6.0 bbPress (r5834)
 *
 * @param int $user_id User id.
 *
 * @return array Return array of forum ids, or empty array
 */
function bbp_get_moderator_forum_ids($user_id = 0)
{
}
/**
 * Get a user's engaged topic ids
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param int $user_id Optional. User id
 *
 * @return array Return array of topic ids, or empty array
 */
function bbp_get_user_engaged_topic_ids($user_id = 0)
{
}
/**
 * Get a user's favorite topic ids
 *
 * @since 2.0.0 bbPress (r2652)
 *
 * @param int $user_id Optional. User id
 *
 * @return array Return array of favorite topic ids, or empty array
 */
function bbp_get_user_favorites_topic_ids($user_id = 0)
{
}
/**
 * Get a user's subscribed forum ids
 *
 * @since 2.5.0 bbPress (r5156)
 *
 * @param int $user_id Optional. User id
 *
 * @return array Return array of subscribed forum ids, or empty array
 */
function bbp_get_user_subscribed_forum_ids($user_id = 0)
{
}
/**
 * Get a user's subscribed topic ids
 *
 * @since 2.0.0 bbPress (r2668)
 *
 * @param int $user_id Optional. User id
 *
 * @return array Return array of subscribed topic ids, or empty array
 */
function bbp_get_user_subscribed_topic_ids($user_id = 0)
{
}
/** Deprecated ****************************************************************/
/**
 * Get a user's subscribed topics
 *
 * @since 2.0.0 bbPress (r2668)
 * @deprecated 2.5.0 bbPress (r5156)
 *
 * @param int $user_id Optional. User id
 *
 * @return array|bool Results if user has subscriptions, otherwise false
 */
function bbp_get_user_subscriptions($user_id = 0)
{
}
/**
 * Get the users who have subscribed to the forum
 *
 * @since 2.5.0 bbPress (r5156)
 * @deprecated 2.6.0 bbPress (r6543)
 *
 * @param int $forum_id Optional. forum id
 *
 * @return array|bool Results if the forum has any subscribers, otherwise false
 */
function bbp_get_forum_subscribers($forum_id = 0)
{
}
/**
 * Get the users who have subscribed to the topic
 *
 * @since 2.0.0 bbPress (r2668)
 * @deprecated 2.6.0 bbPress (r6543)
 *
 * @param int $topic_id Optional. Topic id
 *
 * @return array|bool Results if the topic has any subscribers, otherwise false
 */
function bbp_get_topic_subscribers($topic_id = 0)
{
}
/**
 * Check if a forum is in user's subscription list or not
 *
 * @since 2.5.0 bbPress (r5156)
 * @deprecated 2.6.0 bbPress (r6543)
 *
 * @param int $user_id  Optional. User id
 * @param int $forum_id Optional. Forum id
 *
 * @return bool True if the forum is in user's subscriptions, otherwise false
 */
function bbp_is_user_subscribed_to_forum($user_id = 0, $forum_id = 0)
{
}
/**
 * Check if a topic is in user's subscription list or not
 *
 * @since 2.5.0 bbPress (r5156)
 * @deprecated 2.6.0 bbPress (r6543) Use bbp_is_user_subscribed()
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 * @return bool True if the topic is in user's subscriptions, otherwise false
 */
function bbp_is_user_subscribed_to_topic($user_id = 0, $topic_id = 0)
{
}
/**
 * Remove a forum from user's subscriptions
 *
 * @since 2.5.0 bbPress (r5156)
 * @deprecated 2.6.0 bbPress (r6543)
 *
 * @param int $user_id Optional. User id
 * @param int $forum_id Optional. forum id
 * @return bool True if the forum was removed from user's subscriptions,
 *               otherwise false
 */
function bbp_remove_user_forum_subscription($user_id = 0, $forum_id = 0)
{
}
/**
 * Remove a topic from user's subscriptions
 *
 * @since 2.5.0 bbPress (r5156)
 * @deprecated 2.6.0 bbPress (r6543)
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 * @return bool True if the topic was removed from user's subscriptions,
 *               otherwise false
 */
function bbp_remove_user_topic_subscription($user_id = 0, $topic_id = 0)
{
}
/**
 * Add a forum to user's subscriptions
 *
 * @since 2.5.0 bbPress (r5156)
 * @deprecated 2.6.0 bbPress (r6543)
 *
 * @param int $user_id Optional. User id
 * @param int $forum_id Optional. forum id
 * @return bool Always true
 */
function bbp_add_user_forum_subscription($user_id = 0, $forum_id = 0)
{
}
/**
 * Add a topic to user's subscriptions
 *
 * Note that both the User and Topic should be verified to exist before using
 * this function. Originally both were validated, but because this function is
 * frequently used within a loop, those verifications were moved upstream to
 * improve performance on topics with many engaged users.
 *
 * @since 2.0.0 bbPress (r2668)
 * @deprecated 2.6.0 bbPress (r6543)
 *
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 * @return bool Always true
 */
function bbp_add_user_topic_subscription($user_id = 0, $topic_id = 0)
{
}
/**
 * Handles the front end toggling of forum subscriptions
 *
 * @since 2.5.0 bbPress (r5156)
 * @deprecated 2.6.0 bbPress (r6543)
 */
function bbp_forum_subscriptions_handler($action = '')
{
}
/**
 * bbPress User Capabilites
 *
 * Used to map user capabilities to WordPress's existing capabilities.
 *
 * @package bbPress
 * @subpackage Capabilities
 */
/**
 * Maps primary capabilities
 *
 * @since 2.2.0 bbPress (r4242)
 *
 * @param array  $caps Capabilities for meta capability.
 * @param string $cap Capability name.
 * @param int    $user_id User id.
 * @param array  $args Arguments.
 *
 * @return array Actual capabilities for meta capability
 */
function bbp_map_primary_meta_caps($caps = array(), $cap = '', $user_id = 0, $args = array())
{
}
/**
 * Set a user's role in the forums
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @param int $user_id
 *
 * @return mixed False if no change. String of new role if changed.
 */
function bbp_set_user_role($user_id = 0, $new_role = '')
{
}
/**
 * Return a user's forums role
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @param int $user_id
 *
 * @return string
 */
function bbp_get_user_role($user_id = 0)
{
}
/**
 * Return a user's blog role
 *
 * @since 2.3.0 bbPress (r4446)
 *
 * @param int $user_id
 *
 * @return string
 */
function bbp_get_user_blog_role($user_id = 0)
{
}
/**
 * Helper function hooked to 'bbp_profile_update' action to save or
 * update user roles and capabilities.
 *
 * @since 2.2.0 bbPress (r4235)
 *
 * @param int $user_id
 */
function bbp_profile_update_role($user_id = 0)
{
}
/**
 * Check if a role string is valid
 *
 * @since 2.6.5
 *
 * @param string $role
 *
 * @return bool True if role is valid. False if role is not valid.
 */
function bbp_is_valid_role($role = '')
{
}
/**
 * Add the default role to the current user if needed
 *
 * This function will bail if the forum is not global in a multisite
 * installation of WordPress, or if the user is marked as spam or deleted.
 *
 * @since 2.0.0 bbPress (r3380)
 *
 * @return If not multisite, not global, or user is deleted/spammed
 */
function bbp_set_current_user_default_role()
{
}
/**
 * Return a map of WordPress roles to bbPress roles. Used to automatically grant
 * appropriate bbPress roles to WordPress users that wouldn't already have a
 * role in the forums. Also guarantees WordPress admins get the Keymaster role.
 *
 * @since 2.2.0 bbPress (r4334)
 *
 * @return array Filtered array of WordPress roles to bbPress roles
 */
function bbp_get_user_role_map()
{
}
/** User Status ***************************************************************/
/**
 * Checks if the user has been marked as a spammer.
 *
 * @since 2.0.0 bbPress (r3355)
 *
 * @param int $user_id int The ID for the user.
 * @return bool True if spammer, False if not.
 */
function bbp_is_user_spammer($user_id = 0)
{
}
/**
 * Mark a users topics and replies as spam when the user is marked as spam
 *
 * @since 2.0.0 bbPress (r3405)
 *
 * @param int $user_id Optional. User ID to spam. Defaults to displayed user.
 *
 * @return bool If no user ID passed.
 */
function bbp_make_spam_user($user_id = 0)
{
}
/**
 * Mark a users topics and replies as spam when the user is marked as spam
 *
 * @since 2.0.0 bbPress (r3405)
 *
 * @param int $user_id Optional. User ID to unspam. Defaults to displayed user.
 *
 * @return bool If no user ID passed.
 */
function bbp_make_ham_user($user_id = 0)
{
}
/**
 * Checks if the user has been marked as deleted.
 *
 * @since 2.0.0 bbPress (r3355)
 *
 * @param int $user_id int The ID for the user.
 * @return bool True if deleted, False if not.
 */
function bbp_is_user_deleted($user_id = 0)
{
}
/**
 * Checks if user is active
 *
 * @since 2.0.0 bbPress (r3502)
 *
 * @param int $user_id The user ID to check
 * @return bool True if public, false if not
 */
function bbp_is_user_active($user_id = 0)
{
}
/**
 * Checks if user is not active.
 *
 * @since 2.0.0 bbPress (r3502)
 *
 * @param int $user_id The user ID to check. Defaults to current user ID
 * @return bool True if inactive, false if active
 */
function bbp_is_user_inactive($user_id = 0)
{
}
/**
 * Checks if user is a keymaster
 *
 * @since 2.3.0 bbPress (r4783)
 *
 * @param int $user_id
 * @return bool True if keymaster, false if not
 */
function bbp_is_user_keymaster($user_id = 0)
{
}
/**
 * Does a user have a profile for the current site
 *
 * @since 2.2.0 bbPress (r4362)
 *
 * @param int $user_id User ID to check
 *
 * @return bool Whether or not the user has a profile on this blog_id.
 */
function bbp_user_has_profile($user_id = 0)
{
}
/** Moderators ****************************************************************/
/**
 * Add a moderator to an object
 *
 * @since 2.6.0 bbPress (r6056)
 *
 * @param int    $object_id   Traditionally a post ID
 * @param int    $user_id     User ID
 * @param string $object_type Type of meta (post,term,user,comment)
 *
 * @return bool
 */
function bbp_add_moderator($object_id = 0, $user_id = 0, $object_type = 'post')
{
}
/**
 * Remove a moderator user ID from an object
 *
 * @since 2.6.0 bbPress (r6056)
 *
 * @param int    $object_id   Traditionally a post ID
 * @param int    $user_id     User ID
 * @param string $object_type Type of meta (post,term,user,comment)
 *
 * @return bool
 */
function bbp_remove_moderator($object_id = 0, $user_id = 0, $object_type = 'post')
{
}
/**
 * Get user IDs of moderators for an object
 *
 * @since 2.6.0 bbPress (r6056)
 *
 * @param int    $object_id   Traditionally a post ID
 * @param string $object_type Type of meta (post,term,user,comment)
 *
 * @return array
 */
function bbp_get_moderator_ids($object_id = 0, $object_type = 'post')
{
}
/**
 * Get moderators for a specific object ID. Will return global moderators when
 * object ID is empty.
 *
 * @since 2.6.0 bbPress (r6056)
 *
 * @param int    $object_id   Traditionally a post ID
 * @param string $object_type Type of meta (post,term,user,comment)
 *
 * @return array
 */
function bbp_get_moderators($object_id = 0, $object_type = 'post')
{
}
/**
 * Get the default user options and their values
 *
 * @since 2.1.0 bbPress (r3910)
 *
 * @return array Filtered user option names and values
 */
function bbp_get_default_user_options()
{
}
/**
 * Add default user options
 *
 * This is destructive, so existing bbPress user options will be overridden.
 *
 * @since 2.1.0 bbPress (r3910)
 */
function bbp_add_user_options($user_id = 0)
{
}
/**
 * Delete default user options
 *
 * Hooked to bbp_uninstall, it is only called once when bbPress is uninstalled.
 * This is destructive, so existing bbPress user options will be destroyed.
 *
 * @since 2.1.0 bbPress (r3910)
 */
function bbp_delete_user_options($user_id = 0)
{
}
/**
 * Add filters to each bbPress option and allow them to be overloaded from
 * inside the $bbp->options array.
 *
 * @since 2.1.0 bbPress (r3910)
 */
function bbp_setup_user_option_filters()
{
}
/**
 * Filter default options and allow them to be overloaded from inside the
 * $bbp->user_options array.
 *
 * @since 2.1.0 bbPress (r3910)
 *
 * @param bool $value Optional. Default value false
 * @return mixed false if not overloaded, mixed if set
 */
function bbp_filter_get_user_option($value = \false, $option = '', $user = 0)
{
}
/** Post Counts ***************************************************************/
/**
 * Update the topic count for a user
 *
 * @since 2.6.0 bbPress (r5309)
 *
 * @param int $user_id
 * @param mixed $count
 * @return boolean
 */
function bbp_update_user_topic_count($user_id = 0, $count = \false)
{
}
/**
 * Update the reply count for a user
 *
 * @since 2.6.0 bbPress (r5309)
 *
 * @param int $user_id
 * @param mixed $count
 * @return boolean
 */
function bbp_update_user_reply_count($user_id = 0, $count = \false)
{
}
/**
 * Output a users topic count
 *
 * @since 2.1.0 bbPress (r3632)
 *
 * @param int $user_id
 * @param boolean $integer Optional. Whether or not to format the result
 *
 * @return string
 */
function bbp_user_topic_count($user_id = 0, $integer = \false)
{
}
/**
 * Return a users reply count
 *
 * @since 2.1.0 bbPress (r3632)
 *
 * @param int $user_id
 * @param boolean $integer Optional. Whether or not to format the result
 *
 * @return string
 */
function bbp_get_user_topic_count($user_id = 0, $integer = \false)
{
}
/**
 * Output a users reply count
 *
 * @since 2.1.0 bbPress (r3632)
 *
 * @param int $user_id
 * @param boolean $integer Optional. Whether or not to format the result
 *
 * @return string
 */
function bbp_user_reply_count($user_id = 0, $integer = \false)
{
}
/**
 * Return a users reply count
 *
 * @since 2.1.0 bbPress (r3632)
 *
 * @param int $user_id
 * @param boolean $integer Optional. Whether or not to format the result
 *
 * @return string
 */
function bbp_get_user_reply_count($user_id = 0, $integer = \false)
{
}
/**
 * Output a users total post count
 *
 * @since 2.1.0 bbPress (r3632)
 *
 * @param int $user_id
 * @param boolean $integer Optional. Whether or not to format the result
 *
 * @return string
 */
function bbp_user_post_count($user_id = 0, $integer = \false)
{
}
/**
 * Return a users total post count
 *
 * @since 2.1.0 bbPress (r3632)
 *
 * @param int $user_id
 * @param boolean $integer Optional. Whether or not to format the result
 *
 * @return string
 */
function bbp_get_user_post_count($user_id = 0, $integer = \false)
{
}
/** Last Posted ***************************************************************/
/**
 * Update a users last posted time, for use with post throttling
 *
 * @since 2.1.0 bbPress (r3910)
 *
 * @param int $user_id User ID to update
 * @param int $time Time in time() format
 * @return bool False if no user or failure, true if successful
 */
function bbp_update_user_last_posted($user_id = 0, $time = 0)
{
}
/**
 * Output the raw value of the last posted time.
 *
 * @since 2.1.0 bbPress (r3910)
 *
 * @param int $user_id User ID to retrieve value for
 */
function bbp_user_last_posted($user_id = 0)
{
}
/**
 * Return the raw value of the last posted time.
 *
 * @since 2.1.0 bbPress (r3910)
 *
 * @param int $user_id User ID to retrieve value for
 * @return mixed False if no user, time() format if exists
 */
function bbp_get_user_last_posted($user_id = 0)
{
}
/**
 * The main user loop.
 *
 * @since 2.6.0 bbPress (r6330)
 *
 * @param array $args All the arguments supported by {@link WP_User_Query}
 * @return object Multidimensional array of user information
 */
function bbp_has_users($args = array())
{
}
/**
 * Whether there are more users available in the loop
 *
 * @since 2.6.0 bbPress (r2464)
 *
 * @return object User information
 */
function bbp_users()
{
}
/**
 * Loads up the current user in the loop
 *
 * @since 2.6.0 bbPress (r2464)
 *
 * @return object User information
 */
function bbp_the_user()
{
}
/** Users *********************************************************************/
/**
 * Output a validated user id
 *
 * @since 2.0.0 bbPress (r2729)
 *
 * @param int $user_id Optional. User id
 * @param bool $displayed_user_fallback Fallback on displayed user?
 * @param bool $current_user_fallback Fallback on current user?
 */
function bbp_user_id($user_id = 0, $displayed_user_fallback = \true, $current_user_fallback = \false)
{
}
/**
 * Return a validated user id
 *
 * @since 2.0.0 bbPress (r2729)
 *
 * @param int $user_id Optional. User id
 * @param bool $displayed_user_fallback Fallback on displayed user?
 * @param bool $current_user_fallback Fallback on current user?
 * @return int Validated user id
 */
function bbp_get_user_id($user_id = 0, $displayed_user_fallback = \true, $current_user_fallback = \false)
{
}
/**
 * Output ID of current user
 *
 * @since 2.0.0 bbPress (r2574)
 */
function bbp_current_user_id()
{
}
/**
 * Return ID of current user
 *
 * @since 2.0.0 bbPress (r2574)
 *
 * @return int Current user id
 */
function bbp_get_current_user_id()
{
}
/**
 * Output ID of displayed user
 *
 * @since 2.0.0 bbPress (r2688)
 */
function bbp_displayed_user_id()
{
}
/**
 * Return ID of displayed user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @return int Displayed user id
 */
function bbp_get_displayed_user_id()
{
}
/**
 * Output a sanitized user field value
 *
 * This function relies on the $filter parameter to decide how to sanitize
 * the field value that it finds. Since it uses the WP_User object's magic
 * __get() method, it can also be used to get user_meta values.
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param string $field Field to get
 * @param string $filter How to filter the field value (null|raw|db|display|edit)
 */
function bbp_displayed_user_field($field = '', $filter = 'display')
{
}
/**
 * Return a sanitized user field value
 *
 * This function relies on the $filter parameter to decide how to sanitize
 * the field value that it finds. Since it uses the WP_User object's magic
 * __get() method, it can also be used to get user_meta values.
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param string $field Field to get
 * @param string $filter How to filter the field value (null|raw|db|display|edit)
 * @see WP_User::__get() for more on how the value is retrieved
 * @see sanitize_user_field() for more on how the value is sanitized
 * @return string|bool Value of the field if it exists, else false
 */
function bbp_get_displayed_user_field($field = '', $filter = 'display')
{
}
/**
 * Output name of current user
 *
 * @since 2.0.0 bbPress (r2574)
 */
function bbp_current_user_name()
{
}
/**
 * Return name of current user
 *
 * @since 2.0.0 bbPress (r2574)
 *
 * @return string
 */
function bbp_get_current_user_name()
{
}
/**
 * Output avatar of current user
 *
 * @since 2.0.0 bbPress (r2574)
 *
 * @param int $size Size of the avatar. Defaults to 40
 */
function bbp_current_user_avatar($size = 40)
{
}
/**
 * Return avatar of current user
 *
 * @since 2.0.0 bbPress (r2574)
 *
 * @param int $size Size of the avatar. Defaults to 40
 * @return string Current user avatar
 */
function bbp_get_current_user_avatar($size = 40)
{
}
/**
 * Output link to the profile page of a user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $user_id Optional. User id
 */
function bbp_user_profile_link($user_id = 0)
{
}
/**
 * Return link to the profile page of a user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $user_id Optional. User id
 * @return string User profile link
 */
function bbp_get_user_profile_link($user_id = 0)
{
}
/**
 * Output a users nicename to the screen
 *
 * @since 2.3.0 bbPress (r4671)
 *
 * @param int $user_id User ID whose nicename to get
 * @param array $args before|after|user_id|force
 */
function bbp_user_nicename($user_id = 0, $args = array())
{
}
/**
 * Return a users nicename to the screen
 *
 * @since 2.3.0 bbPress (r4671)
 *
 * @param int $user_id User ID whose nicename to get
 * @param array $args before|after|user_id|force
 * @return string User nicename, maybe wrapped in before/after strings
 */
function bbp_get_user_nicename($user_id = 0, $args = array())
{
}
/**
 * Output URL to the profile page of a user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $user_id Optional. User id
 * @param string $user_nicename Optional. User nicename
 */
function bbp_user_profile_url($user_id = 0, $user_nicename = '')
{
}
/**
 * Return URL to the profile page of a user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $user_id Optional. User id
 * @param string $user_nicename Optional. User nicename
 * @return string User profile url
 */
function bbp_get_user_profile_url($user_id = 0, $user_nicename = '')
{
}
/**
 * Output link to the profile edit page of a user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $user_id Optional. User id
 */
function bbp_user_profile_edit_link($user_id = 0)
{
}
/**
 * Return link to the profile edit page of a user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $user_id Optional. User id
 * @return string User profile edit link
 */
function bbp_get_user_profile_edit_link($user_id = 0)
{
}
/**
 * Output URL to the profile edit page of a user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $user_id Optional. User id
 * @param string $user_nicename Optional. User nicename
 */
function bbp_user_profile_edit_url($user_id = 0, $user_nicename = '')
{
}
/**
 * Return URL to the profile edit page of a user
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $user_id Optional. User id
 * @param string $user_nicename Optional. User nicename
 * @return string
 */
function bbp_get_user_profile_edit_url($user_id = 0, $user_nicename = '')
{
}
/**
 * Output a user's main role for display
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @param int $user_id
 */
function bbp_user_display_role($user_id = 0)
{
}
/**
 * Return a user's main role for display
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @param int $user_id
 * @return string
 */
function bbp_get_user_display_role($user_id = 0)
{
}
/**
 * Output the link to the admin section
 *
 * @since 2.0.0 bbPress (r2827)
 *
 * @param array $args Optional. See {@link bbp_get_admin_link()}
 */
function bbp_admin_link($args = array())
{
}
/**
 * Return the link to the admin section
 *
 * @since 2.0.0 bbPress (r2827)
 *
 * @param array $args Optional. This function supports these arguments:
 *  - text: The text
 *  - before: Before the lnk
 *  - after: After the link
 * @return The link
 */
function bbp_get_admin_link($args = array())
{
}
/** User IP *******************************************************************/
/**
 * Output the author IP address of a post
 *
 * @since 2.0.0 bbPress (r3120)
 *
 * @param array $args Optional. If it is an integer, it is used as post id.
 */
function bbp_author_ip($args = array())
{
}
/**
 * Return the author IP address of a post
 *
 * @since 2.0.0 bbPress (r3120)
 *
 * @param array $args Optional. If an integer, it is used as reply id.
 * @return string Author link of reply
 */
function bbp_get_author_ip($args = array())
{
}
/** Anonymous Fields **********************************************************/
/**
 * Get the default name that's displayed when a user cannot be identified.
 *
 * This might happen if a user was deleted but their content was retained, or
 * if something went wrong during saving anonymous user data to the database.
 *
 * @since 2.6.0 bbPress (r6561)
 *
 * @param int $object_id For additional context only, usually a post ID
 *
 * @return string
 */
function bbp_get_fallback_display_name($object_id = 0)
{
}
/**
 * Output the author display-name of a topic or reply.
 *
 * Convenience function to ensure proper template functions are called
 * and correct filters are executed. Used primarily to display topic
 * and reply author information in the anonymous form template-part.
 *
 * @since 2.5.0 bbPress (r5119)
 *
 * @param int $post_id
 */
function bbp_author_display_name($post_id = 0)
{
}
/**
 * Return the author display-name of a topic or reply.
 *
 * Convenience function to ensure proper template functions are called
 * and correct filters are executed. Used primarily to display topic
 * and reply author information in the anonymous form template-part.
 *
 * @since 2.5.0 bbPress (r5119)
 *
 * @param int $post_id
 *
 * @return string The name of the author
 */
function bbp_get_author_display_name($post_id = 0)
{
}
/**
 * Output the author email of a topic or reply.
 *
 * Convenience function to ensure proper template functions are called
 * and correct filters are executed. Used primarily to display topic
 * and reply author information in the anonymous user form template-part.
 *
 * @since 2.5.0 bbPress (r5119)
 *
 * @param int $post_id
 */
function bbp_author_email($post_id = 0)
{
}
/**
 * Return the author email of a topic or reply.
 *
 * Convenience function to ensure proper template functions are called
 * and correct filters are executed. Used primarily to display topic
 * and reply author information in the anonymous user form template-part.
 *
 * @since 2.5.0 bbPress (r5119)
 *
 * @param int $post_id
 *
 * @return string The email of the author
 */
function bbp_get_author_email($post_id = 0)
{
}
/**
 * Output the author url of a topic or reply.
 *
 * Convenience function to ensure proper template functions are called
 * and correct filters are executed. Used primarily to display topic
 * and reply author information in the anonymous user form template-part.
 *
 * @since 2.5.0 bbPress (r5119)
 *
 * @param int $post_id
 */
function bbp_author_url($post_id = 0)
{
}
/**
 * Return the author url of a topic or reply.
 *
 * Convenience function to ensure proper template functions are called
 * and correct filters are executed. Used primarily to display topic
 * and reply author information in the anonymous user form template-part.
 *
 * @since 2.5.0 bbPress (r5119)
 *
 * @param int $post_id
 *
 * @return string The url of the author
 */
function bbp_get_author_url($post_id = 0)
{
}
/** Favorites *****************************************************************/
/**
 * Output the link to the user's favorites page (profile page)
 *
 * @since 2.0.0 bbPress (r2652)
 * @since 2.6.0 bbPress (r6308) Add pagination if in the loop
 *
 * @param int $user_id Optional. User id
 */
function bbp_favorites_permalink($user_id = 0)
{
}
/**
 * Return the link to the user's favorites page (profile page)
 *
 * @since 2.0.0 bbPress (r2652)
 * @since 2.6.0 bbPress (r6308) Add pagination if in the loop
 *
 * @param int $user_id Optional. User id
 * @return string Permanent link to user profile page
 */
function bbp_get_favorites_permalink($user_id = 0)
{
}
/**
 * Output the link to make a topic favorite/remove a topic from favorites
 *
 * @since 2.0.0 bbPress (r2652)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 *
 * @param array $args See {@link bbp_get_user_favorites_link()}
 * @param int $user_id Optional. User id
 * @param bool $wrap Optional. If you want to wrap the link in <span id="favorite-toggle">.
 */
function bbp_user_favorites_link($args = array(), $user_id = 0, $wrap = \true)
{
}
/**
 * User favorites link
 *
 * Return the link to make a topic favorite/remove a topic from
 * favorites
 *
 * @since 2.0.0 bbPress (r2652)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 *
 * @param array $args This function supports these arguments:
 *  - subscribe: Favorite text
 *  - unsubscribe: Unfavorite text
 *  - user_id: User id
 *  - topic_id: Topic id
 *  - before: Before the link
 *  - after: After the link
 * @param int $user_id Optional. User id
 * @param int $topic_id Optional. Topic id
 * @param bool $wrap Optional. If you want to wrap the link in <span id="favorite-toggle">. See ajax_favorite()
 * @return string User favorites link
 */
function bbp_get_user_favorites_link($args = array(), $user_id = 0, $wrap = \true)
{
}
/** Subscriptions *************************************************************/
/**
 * Output the link to the user's subscriptions page (profile page)
 *
 * @since 2.0.0 bbPress (r2688)
 * @since 2.6.0 bbPress (r6308) Add pagination if in the loop
 *
 * @param int $user_id Optional. User id
 */
function bbp_subscriptions_permalink($user_id = 0)
{
}
/**
 * Return the link to the user's subscriptions page (profile page)
 *
 * @since 2.0.0 bbPress (r2688)
 * @since 2.6.0 bbPress (r6308) Add pagination if in the loop
 *
 * @param int $user_id Optional. User id
 * @return string Permanent link to user subscriptions page
 */
function bbp_get_subscriptions_permalink($user_id = 0)
{
}
/**
 * Output the link to subscribe/unsubscribe from a topic
 *
 * @since 2.0.0 bbPress (r2668)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 *
 * @param array $args See {@link bbp_get_user_subscribe_link()}
 * @param int $user_id Optional. User id
 * @param bool $wrap Optional. If you want to wrap the link in <span id="subscription-toggle">.
 */
function bbp_user_subscribe_link($args = array(), $user_id = 0, $wrap = \true)
{
}
/**
 * Return the link to subscribe/unsubscribe from a forum or topic
 *
 * @since 2.0.0 bbPress (r2668)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 *
 * @param array $args This function supports these arguments:
 *  - subscribe: Subscribe text
 *  - unsubscribe: Unsubscribe text
 *  - user_id: User id
 *  - topic_id: Topic id
 *  - forum_id: Forum id
 *  - before: Before the link
 *  - after: After the link
 * @param int $user_id Optional. User id
 * @param bool $wrap Optional. If you want to wrap the link in <span id="subscription-toggle">.
 * @return string Permanent link to topic
 */
function bbp_get_user_subscribe_link($args = array(), $user_id = 0, $wrap = \true)
{
}
/** Edit User *****************************************************************/
/**
 * Display profile edit success notice on user edit page
 *
 * @since 2.0.0 bbPress (r2688)
 */
function bbp_notice_edit_user_success()
{
}
/**
 * Display pending email change notice on user edit page
 *
 * @since 2.6.0 bbPress (r5660)
 */
function bbp_notice_edit_user_pending_email()
{
}
/**
 * Super admin privileges notice
 *
 * @since 2.0.0 bbPress (r2688)
 */
function bbp_notice_edit_user_is_super_admin()
{
}
/**
 * Drop down for selecting the user's display name
 *
 * @since 2.0.0 bbPress (r2688)
 */
function bbp_edit_user_display_name()
{
}
/**
 * Output blog role selector (for user edit)
 *
 * @since 2.0.0 bbPress (r2688)
 */
function bbp_edit_user_blog_role()
{
}
/**
 * Output forum role selector (for user edit)
 *
 * @since 2.2.0 bbPress (r4284)
 */
function bbp_edit_user_forums_role()
{
}
/**
 * Return user contact methods select box
 *
 * @since 2.0.0 bbPress (r2688)
 * @return string User contact methods
 */
function bbp_edit_user_contact_methods()
{
}
/**
 * Output the language chooser (for user edit)
 *
 * @since 2.6.0 bbPress (r6488)
 *
 * @param array $args See wp_dropdown_languages()
 * @return string
 */
function bbp_edit_user_language($args = array())
{
}
/** Topics Created ************************************************************/
/**
 * Output the link to the user's topics
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @param int $user_id Optional. User id
 */
function bbp_user_topics_created_url($user_id = 0)
{
}
/**
 * Return the link to the user's topics
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @param int $user_id Optional. User id
 * @return string Permanent link to user profile page
 */
function bbp_get_user_topics_created_url($user_id = 0)
{
}
/** Replies Created ************************************************************/
/**
 * Output the link to the user's replies
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @param int $user_id Optional. User id
 */
function bbp_user_replies_created_url($user_id = 0)
{
}
/**
 * Return the link to the user's replies
 *
 * @since 2.2.0 bbPress (r4225)
 *
 * @param int $user_id Optional. User id
 * @return string Permanent link to user profile page
 */
function bbp_get_user_replies_created_url($user_id = 0)
{
}
/** Engagements ***************************************************************/
/**
 * Output the link to the user's engagements
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param int $user_id Optional. User id
 */
function bbp_user_engagements_url($user_id = 0)
{
}
/**
 * Return the link to the user's engagements
 *
 * @since 2.6.0 bbPress (r6320)
 *
 * @param int $user_id Optional. User id
 * @return string Permanent link to user profile page
 */
function bbp_get_user_engagements_url($user_id = 0)
{
}
/** Language ******************************************************************/
/**
 * Output the select element used to save a user's language
 *
 * @since 2.6.0 bbPress (r6488)
 *
 * @param array $args See wp_dropdown_languages()
 */
function bbp_user_languages_dropdown($args = array())
{
}
/**
 * Return the select element used to save a user's language.
 *
 * @since 2.6.0 bbPress (r6488)
 *
 * @param array $args See wp_dropdown_languages()
 * @return string
 */
function bbp_get_user_languages_dropdown($args = array())
{
}
/** Login *********************************************************************/
/**
 * Handle the login and registration template notices
 *
 * @since 2.0.0 bbPress (r2970)
 */
function bbp_login_notices()
{
}
/**
 * Redirect a user back to their profile if they are already logged in.
 *
 * This should be used before {@link get_header()} is called in template files
 * where the user should never have access to the contents of that file.
 *
 * @since 2.0.0 bbPress (r2815)
 *
 * @param string $url The URL to redirect to
 */
function bbp_logged_in_redirect($url = '')
{
}
/**
 * Output the required hidden fields when logging in
 *
 * @since 2.0.0 bbPress (r2815)
 */
function bbp_user_login_fields()
{
}
/** Register ******************************************************************/
/**
 * Output the required hidden fields when registering
 *
 * @since 2.0.0 bbPress (r2815)
 */
function bbp_user_register_fields()
{
}
/** Lost Password *************************************************************/
/**
 * Output the required hidden fields when user lost password
 *
 * @since 2.0.0 bbPress (r2815)
 */
function bbp_user_lost_pass_fields()
{
}
/** Author Avatar *************************************************************/
/**
 * Output the author link of a post
 *
 * @since 2.0.0 bbPress (r2875)
 *
 * @param array $args Optional. If it is an integer, it is used as post id.
 */
function bbp_author_link($args = array())
{
}
/**
 * Return the author link of the post
 *
 * @since 2.0.0 bbPress (r2875)
 *
 * @param array $args Optional. If an integer, it is used as reply id.
 * @return string Author link of reply
 */
function bbp_get_author_link($args = array())
{
}
/** Capabilities **************************************************************/
/**
 * Check if the user can access a specific forum
 *
 * @since 2.0.0 bbPress (r3127)
 *
 * @return bool
 */
function bbp_user_can_view_forum($args = array())
{
}
/**
 * Check if the current user can publish topics
 *
 * @since 2.0.0 bbPress (r3127)
 *
 * @return bool
 */
function bbp_current_user_can_publish_topics()
{
}
/**
 * Check if the current user can publish forums
 *
 * @since 2.1.0 bbPress (r3549)
 *
 * @return bool
 */
function bbp_current_user_can_publish_forums()
{
}
/**
 * Check if the current user can publish replies
 *
 * @since 2.0.0 bbPress (r3127)
 *
 * @return bool
 */
function bbp_current_user_can_publish_replies()
{
}
/** Forms *********************************************************************/
/**
 * The following functions should be turned into mapped meta capabilities in a
 * future version. They exist only to remove complex logistical capability
 * checks from within template parts.
 */
/**
 * Get the forums the current user has the ability to see and post to
 *
 * @since 2.0.0 bbPress (r3127)
 *
 * @param array $args
 *
 * @return array
 */
function bbp_get_forums_for_current_user($args = array())
{
}
/**
 * Performs a series of checks to ensure the current user can create forums.
 *
 * @since 2.1.0 bbPress (r3549)
 *
 * @return bool
 */
function bbp_current_user_can_access_create_forum_form()
{
}
/**
 * Performs a series of checks to ensure the current user can create topics.
 *
 * @since 2.0.0 bbPress (r3127)
 *
 * @return bool
 */
function bbp_current_user_can_access_create_topic_form()
{
}
/**
 * Performs a series of checks to ensure the current user can create replies.
 *
 * @since 2.0.0 bbPress (r3127)
 *
 * @return bool
 */
function bbp_current_user_can_access_create_reply_form()
{
}
/**
 * Performs a series of checks to ensure the current user should see the
 * anonymous user form fields.
 *
 * @since 2.5.0 bbPress (r5119)
 *
 * @return bool
 */
function bbp_current_user_can_access_anonymous_user_form()
{
}
/** Moderators ****************************************************************/
/**
 * Output the moderators of a forum
 *
 * @since 2.6.0 bbPress
 *
 * @param int   $forum_id Optional. Topic id
 * @param array $args     See {@link bbp_get_moderator_list()}
 */
function bbp_moderator_list($forum_id = 0, $args = array())
{
}
/**
 * Return the moderators for an object
 *
 * @since 2.6.0 bbPress
 *
 * @param int   $object_id Optional. Object id
 * @param array $args     This function supports these arguments:
 *  - before: Before the tag list
 *  - sep: Tag separator
 *  - after: After the tag list
 *
 * @return string Moderator list of the object
 */
function bbp_get_moderator_list($object_id = 0, $args = array())
{
}
/** Insert ********************************************************************/
/**
 * A wrapper for wp_insert_post() that also includes the necessary meta values
 * for the topic to function properly.
 *
 * @since 2.0.0 bbPress (r3349)
 *
 * @param array $topic_data Forum post data
 * @param array $topic_meta Forum meta data
 */
function bbp_insert_topic($topic_data = array(), $topic_meta = array())
{
}
/** Post Form Handlers ********************************************************/
/**
 * Handles the front end topic submission
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_new_topic_handler($action = '')
{
}
/**
 * Handles the front end edit topic submission
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_edit_topic_handler($action = '')
{
}
/**
 * Handle all the extra meta stuff from posting a new topic
 *
 * @param int $topic_id Optional. Topic id
 * @param int $forum_id Optional. Forum id
 * @param array $anonymous_data Optional - if it's an anonymous post. Do not
 *                              supply if supplying $author_id. Should be
 *                              sanitized (see {@link bbp_filter_anonymous_post_data()}
 * @param int $author_id Author id
 * @param bool $is_edit Optional. Is the post being edited? Defaults to false.
 */
function bbp_update_topic($topic_id = 0, $forum_id = 0, $anonymous_data = array(), $author_id = 0, $is_edit = \false)
{
}
/**
 * Walks up the post_parent tree from the current topic_id, and updates the
 * meta data of forums above it. This calls several functions that all run
 * manual queries against the database to get their results. As such, this
 * function can be costly to run but is necessary to keep everything accurate.
 *
 * @since 2.0.0 bbPress (r2800)
 *
 * @param int $topic_id Topic id
 * @param string $last_active_time Optional. Last active time
 * @param int $forum_id Optional. Forum id
 * @param int $reply_id Optional. Reply id
 * @param bool $refresh Reset all the previous parameters? Defaults to true.
 */
function bbp_update_topic_walker($topic_id, $last_active_time = '', $forum_id = 0, $reply_id = 0, $refresh = \true)
{
}
/**
 * Handle the moving of a topic from one forum to another. This includes walking
 * up the old and new branches and updating the counts.
 *
 * @since 2.0.0 bbPress (r2907)
 *
 * @param int $topic_id     The topic id.
 * @param int $old_forum_id Old forum id.
 * @param int $new_forum_id New forum id.
 */
function bbp_move_topic_handler($topic_id, $old_forum_id, $new_forum_id)
{
}
/**
 * Merge topic handler
 *
 * Handles the front end merge topic submission
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_merge_topic_handler($action = '')
{
}
/**
 * Fix counts on topic merge
 *
 * When a topic is merged, update the counts of source and destination topic
 * and their forums.
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @param int $destination_topic_id Destination topic id
 * @param int $source_topic_id Source topic id
 * @param int $source_topic_forum_id Source topic's forum id
 */
function bbp_merge_topic_count($destination_topic_id, $source_topic_id, $source_topic_forum_id)
{
}
/**
 * Split topic handler
 *
 * Handles the front end split topic submission
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_split_topic_handler($action = '')
{
}
/**
 * Fix counts on topic split
 *
 * When a topic is split, update the counts of source and destination topic
 * and their forums.
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @param int $from_reply_id From reply id
 * @param int $source_topic_id Source topic id
 * @param int $destination_topic_id Destination topic id
 */
function bbp_split_topic_count($from_reply_id, $source_topic_id, $destination_topic_id)
{
}
/**
 * Handles the front end tag management (renaming, merging, destroying)
 *
 * @since 2.0.0 bbPress (r2768)
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_edit_topic_tag_handler($action = '')
{
}
/** Helpers *******************************************************************/
/**
 * Return an associative array of available topic statuses
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param int $topic_id   Optional. Topic id.
 *
 * @return array
 */
function bbp_get_topic_statuses($topic_id = 0)
{
}
/**
 * Return an associative array of topic sticky types
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param int $topic_id   Optional. Topic id.
 *
 * @return array
 */
function bbp_get_topic_types($topic_id = 0)
{
}
/**
 * Return array of available topic toggle actions
 *
 * @since 2.6.0 bbPress (r6133)
 *
 * @param int $topic_id   Optional. Topic id.
 *
 * @return array
 */
function bbp_get_topic_toggles($topic_id = 0)
{
}
/**
 * Return array of public topic statuses.
 *
 * @since 2.6.0 bbPress (r6383)
 *
 * @return array
 */
function bbp_get_public_topic_statuses()
{
}
/**
 * Return array of non-public topic statuses.
 *
 * @since 2.6.0 bbPress (r6642)
 *
 * @return array
 */
function bbp_get_non_public_topic_statuses()
{
}
/** Stickies ******************************************************************/
/**
 * Return sticky topics of a forum
 *
 * @since 2.0.0 bbPress (r2592)
 *
 * @param int $forum_id Optional. If not passed, super stickies are returned.
 * @return array IDs of sticky topics of a forum or super stickies
 */
function bbp_get_stickies($forum_id = 0)
{
}
/**
 * Return topics stuck to front page of the forums
 *
 * @since 2.0.0 bbPress (r2592)
 *
 * @return array IDs of super sticky topics
 */
function bbp_get_super_stickies()
{
}
/** Topics Actions ************************************************************/
/**
 * Handles the front end opening/closing, spamming/unspamming,
 * sticking/unsticking and trashing/untrashing/deleting of topics
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param string $action The requested action to compare this function to
 */
function bbp_toggle_topic_handler($action = '')
{
}
/**
 * Do the actual topic toggling
 *
 * This function is used by `bbp_toggle_topic_handler()` to do the actual heavy
 * lifting when it comes to toggling topic. It only really makes sense to call
 * within that context, so if you need to call this function directly, make sure
 * you're also doing what the handler does too.
 *
 * @since 2.6.0  bbPress (r6133)
 * @access private
 *
 * @param array $args
 */
function bbp_toggle_topic($args = array())
{
}
/** Favorites & Subscriptions *************************************************/
/**
 * Remove a deleted topic from all user favorites
 *
 * @since 2.0.0 bbPress (r2652)
 *
 * @param int $topic_id Get the topic id to remove
 */
function bbp_remove_topic_from_all_favorites($topic_id = 0)
{
}
/**
 * Remove a deleted topic from all user subscriptions
 *
 * @since 2.0.0 bbPress (r2652)
 *
 * @param int $topic_id Get the topic id to remove
 */
function bbp_remove_topic_from_all_subscriptions($topic_id = 0)
{
}
/** Count Bumpers *************************************************************/
/**
 * Bump the total reply count of a topic
 *
 * @since 2.1.0 bbPress (r3825)
 *
 * @param int $topic_id   Optional. Topic id.
 * @param int $difference Optional. Default 1
 * @return int Topic reply count
 */
function bbp_bump_topic_reply_count($topic_id = 0, $difference = 1)
{
}
/**
 * Increase the total reply count of a topic by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $topic_id The topic id.
 *
 * @return void
 */
function bbp_increase_topic_reply_count($topic_id = 0)
{
}
/**
 * Decrease the total reply count of a topic by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $topic_id The topic id.
 *
 * @return void
 */
function bbp_decrease_topic_reply_count($topic_id = 0)
{
}
/**
 * Bump the total hidden reply count of a topic
 *
 * @since 2.1.0 bbPress (r3825)
 *
 * @param int $topic_id   Optional. Topic id.
 * @param int $difference Optional. Default 1
 * @return int Topic hidden reply count
 */
function bbp_bump_topic_reply_count_hidden($topic_id = 0, $difference = 1)
{
}
/**
 * Increase the total hidden reply count of a topic by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $topic_id The topic id.
 *
 * @return void
 */
function bbp_increase_topic_reply_count_hidden($topic_id = 0)
{
}
/**
 * Decrease the total hidden reply count of a topic by one.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $topic_id The topic id.
 *
 * @return void
 */
function bbp_decrease_topic_reply_count_hidden($topic_id = 0)
{
}
/**
 * Update counts after a topic is inserted via `bbp_insert_topic`.
 *
 * @since 2.6.0 bbPress (r6036)
 *
 * @param int $topic_id The topic id.
 * @param int $forum_id The forum id.
 *
 * @return void
 */
function bbp_insert_topic_update_counts($topic_id = 0, $forum_id = 0)
{
}
/** Topic Updaters ************************************************************/
/**
 * Update the topic's forum id
 *
 * @since 2.0.0 bbPress (r2855)
 *
 * @param int $topic_id Optional. Topic id to update
 * @param int $forum_id Optional. Forum id
 * @return int Forum id
 */
function bbp_update_topic_forum_id($topic_id = 0, $forum_id = 0)
{
}
/**
 * Update the topic's topic id
 *
 * @since 2.0.0 bbPress (r2954)
 *
 * @param int $topic_id Optional. Topic id to update
 * @return int Topic id
 */
function bbp_update_topic_topic_id($topic_id = 0)
{
}
/**
 * Adjust the total reply count of a topic
 *
 * @since 2.0.0 bbPress (r2467)
 *
 * @param int $topic_id Optional. Topic id to update
 * @param int $reply_count Optional. Set the reply count manually.
 * @return int Topic reply count
 */
function bbp_update_topic_reply_count($topic_id = 0, $reply_count = \false)
{
}
/**
 * Adjust the total hidden reply count of a topic (hidden includes trashed,
 * spammed and pending replies)
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Optional. Topic id to update
 * @param int $reply_count Optional. Set the reply count manually
 * @return int Topic hidden reply count
 */
function bbp_update_topic_reply_count_hidden($topic_id = 0, $reply_count = \false)
{
}
/**
 * Update the topic with the last active post ID
 *
 * @since 2.0.0 bbPress (r2888)
 *
 * @param int $topic_id Optional. Topic id to update
 * @param int $active_id Optional. active id
 * @return int Active id
 */
function bbp_update_topic_last_active_id($topic_id = 0, $active_id = 0)
{
}
/**
 * Update the topics last active date/time (aka freshness)
 *
 * @since 2.0.0 bbPress (r2680)
 *
 * @param int    $topic_id Optional. Topic id.
 * @param string $new_time Optional. New time in mysql format.
 * @return string MySQL timestamp of last active reply
 */
function bbp_update_topic_last_active_time($topic_id = 0, $new_time = '')
{
}
/**
 * Update the topic with the most recent reply ID
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $topic_id Optional. Topic id to update
 * @param int $reply_id Optional. Reply id
 * @return int Reply id
 */
function bbp_update_topic_last_reply_id($topic_id = 0, $reply_id = 0)
{
}
/**
 * Adjust the total voice count of a topic
 *
 * @since 2.0.0 bbPress (r2567)
 * @since 2.6.0 bbPress (r6515) This must be called after any engagement changes
 *
 * @param int $topic_id Optional. Topic id to update
 * @return int Voice count
 */
function bbp_update_topic_voice_count($topic_id = 0)
{
}
/**
 * Adjust the total anonymous reply count of a topic
 *
 * @since 2.0.0 bbPress (r2567)
 *
 * @param int $topic_id Optional. Topic id to update
 * @return int Anonymous reply count
 */
function bbp_update_topic_anonymous_reply_count($topic_id = 0)
{
}
/**
 * Update the revision log of the topic
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param array $args Supports these args:
 *  - topic_id: Topic id
 *  - author_id: Author id
 *  - reason: Reason for editing
 *  - revision_id: Revision id
 * @return mixed False on failure, true on success
 */
function bbp_update_topic_revision_log($args = array())
{
}
/** Topic Actions *************************************************************/
/**
 * Closes a topic
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Topic id
 * @return mixed False or {@link WP_Error} on failure, topic id on success
 */
function bbp_close_topic($topic_id = 0)
{
}
/**
 * Opens a topic
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Topic id
 * @return mixed False or {@link WP_Error} on failure, topic id on success
 */
function bbp_open_topic($topic_id = 0)
{
}
/**
 * Marks a topic as spam
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Topic id
 * @return mixed False or {@link WP_Error} on failure, topic id on success
 */
function bbp_spam_topic($topic_id = 0)
{
}
/**
 * Trash replies to a topic when it's marked as spam
 *
 * Usually you'll want to do this before the topic itself is marked as spam.
 *
 * @since 2.6.0 bbPress (r5405)
 *
 * @param int $topic_id
 */
function bbp_spam_topic_replies($topic_id = 0)
{
}
/**
 * Store the tags to a topic in post meta before it's marked as spam so they
 * can be retrieved and unspammed later.
 *
 * Usually you'll want to do this before the topic itself is marked as spam.
 *
 * @since 2.6.0 bbPress (r5405)
 *
 * @param int $topic_id
 */
function bbp_spam_topic_tags($topic_id = 0)
{
}
/**
 * Unspams a topic
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Topic id
 * @return mixed False or {@link WP_Error} on failure, topic id on success
 */
function bbp_unspam_topic($topic_id = 0)
{
}
/**
 * Untrash replies to a topic previously marked as spam.
 *
 * Usually you'll want to do this after the topic is unspammed.
 *
 * @since 2.6.0 bbPress (r5405)
 *
 * @param int $topic_id
 */
function bbp_unspam_topic_replies($topic_id = 0)
{
}
/**
 * Retrieve tags to a topic from post meta before it's unmarked as spam so they.
 *
 * Usually you'll want to do this before the topic itself is unmarked as spam.
 *
 * @since 2.6.0 bbPress (r5405)
 *
 * @param int $topic_id
 */
function bbp_unspam_topic_tags($topic_id = 0)
{
}
/**
 * Sticks a topic to a forum or front
 *
 * @since 2.0.0 bbPress (r2754)
 *
 * @param int $topic_id Optional. Topic id
 * @param int $super Should we make the topic a super sticky?
 * @return bool True on success, false on failure
 */
function bbp_stick_topic($topic_id = 0, $super = \false)
{
}
/**
 * Approves a pending topic
 *
 * @since 2.6.0 bbPress (r5503)
 *
 * @param int $topic_id Topic id
 * @return mixed False or {@link WP_Error} on failure, topic id on success
 */
function bbp_approve_topic($topic_id = 0)
{
}
/**
 * Unapproves a topic
 *
 * @since 2.6.0 bbPress (r5503)
 *
 * @param int $topic_id Topic id
 * @return mixed False or {@link WP_Error} on failure, topic id on success
 */
function bbp_unapprove_topic($topic_id = 0)
{
}
/**
 * Unsticks a topic both from front and it's forum
 *
 * @since 2.0.0 bbPress (r2754)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool Always true.
 */
function bbp_unstick_topic($topic_id = 0)
{
}
/** Before Delete/Trash/Untrash ***********************************************/
/**
 * Called before deleting a topic.
 *
 * This function is supplemental to the actual topic deletion which is
 * handled by WordPress core API functions. It is used to clean up after
 * a topic that is being deleted.
 */
function bbp_delete_topic($topic_id = 0)
{
}
/**
 * Delete replies to a topic when it's deleted
 *
 * Usually you'll want to do this before the topic itself is deleted.
 *
 * @since 2.6.0 bbPress (r5405)
 *
 * @param int $topic_id
 */
function bbp_delete_topic_replies($topic_id = 0)
{
}
/**
 * Called before trashing a topic
 *
 * This function is supplemental to the actual topic being trashed which is
 * handled by WordPress core API functions. It is used to clean up after
 * a topic that is being trashed.
 */
function bbp_trash_topic($topic_id = 0)
{
}
/**
 * Trash replies to a topic when it's trashed.
 *
 * Usually you'll want to do this before the topic itself is marked as spam.
 *
 * @since 2.6.0 bbPress (r5405)
 *
 * @param int $topic_id
 */
function bbp_trash_topic_replies($topic_id = 0)
{
}
/**
 * Called before untrashing a topic
 */
function bbp_untrash_topic($topic_id = 0)
{
}
/**
 * Untrash replies to a topic previously trashed.
 *
 * Usually you'll want to do this after the topic is unspammed.
 *
 * @since 2.6.0 bbPress (r5405)
 *
 * @param int $topic_id
 */
function bbp_untrash_topic_replies($topic_id = 0)
{
}
/** After Delete/Trash/Untrash ************************************************/
/**
 * Called after deleting a topic
 *
 * @since 2.0.0 bbPress (r2993)
 */
function bbp_deleted_topic($topic_id = 0)
{
}
/**
 * Called after trashing a topic
 *
 * @since 2.0.0 bbPress (r2993)
 */
function bbp_trashed_topic($topic_id = 0)
{
}
/**
 * Called after untrashing a topic
 *
 * @since 2.0.0 bbPress (r2993)
 */
function bbp_untrashed_topic($topic_id = 0)
{
}
/** Settings ******************************************************************/
/**
 * Return the topics per page setting
 *
 * @since 2.0.0 bbPress (r3540)
 * @return int
 */
function bbp_get_topics_per_page($default = 15)
{
}
/**
 * Return the topics per RSS page setting
 *
 * @since 2.0.0 bbPress (r3540)
 *
 * @param int $default Default replies per page (25)
 * @return int
 */
function bbp_get_topics_per_rss_page($default = 25)
{
}
/** Topic Tags ****************************************************************/
/**
 * Get topic tags for a specific topic ID
 *
 * @since 2.6.0 bbPress (r5836)
 *
 * @param int $topic_id
 *
 * @return string
 */
function bbp_get_topic_tags($topic_id = 0)
{
}
/**
 * Get topic tags for a specific topic ID
 *
 * @since 2.2.0 bbPress (r4165)
 *
 * @param int    $topic_id
 * @param string $sep
 *
 * @return string
 */
function bbp_get_topic_tag_names($topic_id = 0, $sep = ', ')
{
}
/**
 * Will update topic-tag count based on object type.
 *
 * Function for the default callback for topic-tag taxonomies.
 *
 * @see https://bbpress.trac.wordpress.org/ticket/3043
 * @access private
 *
 * @since 2.6.0 bbPress (r6253)
 *
 * @param array  $terms    List of Term taxonomy IDs.
 * @param object $taxonomy Current taxonomy object of terms.
 */
function bbp_update_topic_tag_count($terms, $taxonomy)
{
}
/** Autoembed *****************************************************************/
/**
 * Check if autoembeds are enabled and hook them in if so
 *
 * @since 2.1.0 bbPress (r3752)
 *
 * @global WP_Embed $wp_embed
 */
function bbp_topic_content_autoembed()
{
}
/** Feeds *********************************************************************/
/**
 * Output an RSS2 feed of topics, based on the query passed.
 *
 * @since 2.0.0 bbPress (r3171)
 *
 * @param array $topics_query
 */
function bbp_display_topics_feed_rss2($topics_query = array())
{
}
/** Permissions ***************************************************************/
/**
 * Redirect if unauthorized user is attempting to edit a topic
 *
 * @since 2.1.0 bbPress (r3605)
 */
function bbp_check_topic_edit()
{
}
/**
 * Redirect if unauthorized user is attempting to edit a topic tag
 *
 * @since 2.1.0 bbPress (r3605)
 */
function bbp_check_topic_tag_edit()
{
}
/**
 * bbPress Topic Capabilites
 *
 * Used to map topic capabilities to WordPress's existing capabilities.
 *
 * @package bbPress
 * @subpackage Capabilities
 */
/**
 * Return topic capabilities
 *
 * @since 2.0.0 bbPress (r2593)
 *
 * @return array Topic capabilities
 */
function bbp_get_topic_caps()
{
}
/**
 * Return topic tag capabilities
 *
 * @since 2.0.0 bbPress (r2593)
 *
 *
 * @return array Topic tag capabilities
 */
function bbp_get_topic_tag_caps()
{
}
/**
 * Maps topic capabilities
 *
 * @since 2.2.0 bbPress (r4242)
 *
 * @param array  $caps    Capabilities for meta capability.
 * @param string $cap     Capability name.
 * @param int    $user_id User id.
 * @param array  $args    Arguments.
 *
 * @return array Actual capabilities for meta capability
 */
function bbp_map_topic_meta_caps($caps = array(), $cap = '', $user_id = 0, $args = array())
{
}
/**
 * Maps topic tag capabilities
 *
 * @since 2.2.0 bbPress (r4242)
 *
 * @param array $caps Capabilities for meta capability
 * @param string $cap Capability name
 * @param int $user_id User id
 * @param array $args Arguments
 *
 * @return array Actual capabilities for meta capability
 */
function bbp_map_topic_tag_meta_caps($caps, $cap, $user_id, $args)
{
}
/** Post Type *****************************************************************/
/**
 * Output the unique id of the custom post type for topics
 *
 * @since 2.0.0 bbPress (r2857)
 */
function bbp_topic_post_type()
{
}
/**
 * Return the unique id of the custom post type for topics
 *
 * @since 2.0.0 bbPress (r2857)
 *
 * @return string The unique topic post type id
 */
function bbp_get_topic_post_type()
{
}
/**
 * Return array of labels used by the topic post type
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_topic_post_type_labels()
{
}
/**
 * Return array of topic post type rewrite settings
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_topic_post_type_rewrite()
{
}
/**
 * Return array of features the topic post type supports
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_topic_post_type_supports()
{
}
/**
 * The plugin version of bbPress comes with two topic display options:
 * - Traditional: Topics are included in the reply loop (default)
 * - New Style: Topics appear as "lead" posts, ahead of replies
 *
 * @since 2.0.0 bbPress (r2954)
 *
 * @param $show_lead Optional. Default false
 * @return bool Yes if the topic appears as a lead, otherwise false
 */
function bbp_show_lead_topic($show_lead = \false)
{
}
/** Topic Loop ****************************************************************/
/**
 * The main topic loop. WordPress makes this easy for us
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param array $args All the arguments supported by {@link WP_Query}
 * @return object Multidimensional array of topic information
 */
function bbp_has_topics($args = array())
{
}
/**
 * Whether there are more topics available in the loop
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @return object Topic information
 */
function bbp_topics()
{
}
/**
 * Loads up the current topic in the loop
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @return object Topic information
 */
function bbp_the_topic()
{
}
/**
 * Add sticky topics to a topics query object
 *
 * @since 2.6.0 bbPress (r6402)
 *
 * @param WP_Query $query
 * @param array    $args
 */
function bbp_add_sticky_topics(&$query, $args = array())
{
}
/**
 * Output the topic id
 *
 * @since 2.0.0 bbPress (r2485)
 */
function bbp_topic_id($topic_id = 0)
{
}
/**
 * Return the topic id
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param $topic_id Optional. Used to check emptiness
 * @return int The topic id
 */
function bbp_get_topic_id($topic_id = 0)
{
}
/**
 * Gets a topic
 *
 * @since 2.0.0 bbPress (r2787)
 *
 * @return mixed Null if error or topic (in specified form) if success
 */
function bbp_get_topic($topic, $output = \OBJECT, $filter = 'raw')
{
}
/**
 * Output the link to the topic in the topic loop
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 * @param string $redirect_to Optional. Pass a redirect value for use with
 *                              shortcodes and other fun things.
 */
function bbp_topic_permalink($topic_id = 0, $redirect_to = '')
{
}
/**
 * Return the link to the topic
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 * @param string $redirect_to Optional. Pass a redirect value for use with
 *                              shortcodes and other fun things.
 * @return string Permanent link to topic
 */
function bbp_get_topic_permalink($topic_id = 0, $redirect_to = '')
{
}
/**
 * Output the title of the topic
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_title($topic_id = 0)
{
}
/**
 * Return the title of the topic
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Title of topic
 */
function bbp_get_topic_title($topic_id = 0)
{
}
/**
 * Output the topic archive title
 *
 * @since 2.0.0 bbPress (r3249)
 *
 * @param string $title Default text to use as title
 */
function bbp_topic_archive_title($title = '')
{
}
/**
 * Return the topic archive title
 *
 * @since 2.0.0 bbPress (r3249)
 *
 * @param string $title Default text to use as title
 *
 * @return string The topic archive title
 */
function bbp_get_topic_archive_title($title = '')
{
}
/**
 * Output the content of the topic
 *
 * @since 2.0.0 bbPress (r2780)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_content($topic_id = 0)
{
}
/**
 * Return the content of the topic
 *
 * @since 2.0.0 bbPress (r2780)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Content of the topic
 */
function bbp_get_topic_content($topic_id = 0)
{
}
/**
 * Output the excerpt of the topic
 *
 * @since 2.0.0 bbPress (r2780)
 *
 * @param int $topic_id Optional. Topic id
 * @param int $length Optional. Length of the excerpt. Defaults to 100 letters
 */
function bbp_topic_excerpt($topic_id = 0, $length = 100)
{
}
/**
 * Return the excerpt of the topic
 *
 * @since 2.0.0 bbPress (r2780)
 *
 * @param int $topic_id Optional. topic id
 * @param int $length Optional. Length of the excerpt. Defaults to 100
 *                     letters
 * @return string topic Excerpt
 */
function bbp_get_topic_excerpt($topic_id = 0, $length = 100)
{
}
/**
 * Output the post date and time of a topic
 *
 * @since 2.2.0 bbPress (r4155)
 *
 * @param int $topic_id Optional. Topic id.
 * @param bool $humanize Optional. Humanize output using time_since
 * @param bool $gmt Optional. Use GMT
 */
function bbp_topic_post_date($topic_id = 0, $humanize = \false, $gmt = \false)
{
}
/**
 * Return the post date and time of a topic
 *
 * @since 2.2.0 bbPress (r4155)
 *
 * @param int $topic_id Optional. Topic id.
 * @param bool $humanize Optional. Humanize output using time_since
 * @param bool $gmt Optional. Use GMT
 * @return string
 */
function bbp_get_topic_post_date($topic_id = 0, $humanize = \false, $gmt = \false)
{
}
/**
 * Output pagination links of a topic within the topic loop
 *
 * @since 2.0.0 bbPress (r2966)
 *
 * @param array $args See {@link bbp_get_topic_pagination()}
 */
function bbp_topic_pagination($args = array())
{
}
/**
 * Returns pagination links of a topic within the topic loop
 *
 * @since 2.0.0 bbPress (r2966)
 *
 * @param array $args This function supports these arguments:
 *  - topic_id: Topic id
 *  - before: Before the links
 *  - after: After the links
 * @return string Pagination links
 */
function bbp_get_topic_pagination($args = array())
{
}
/**
 * Append revisions to the topic content
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param string $content Optional. Content to which we need to append the revisions to
 * @param int $topic_id Optional. Topic id
 * @return string Content with the revisions appended
 */
function bbp_topic_content_append_revisions($content = '', $topic_id = 0)
{
}
/**
 * Output the revision log of the topic
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_revision_log($topic_id = 0)
{
}
/**
 * Return the formatted revision log of the topic
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Revision log of the topic
 */
function bbp_get_topic_revision_log($topic_id = 0)
{
}
/**
 * Return the raw revision log of the topic
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Raw revision log of the topic
 */
function bbp_get_topic_raw_revision_log($topic_id = 0)
{
}
/**
 * Return the revisions of the topic
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $topic_id Optional. Topic id
 * @return WP_Post[]|int[] Topic revisions
 */
function bbp_get_topic_revisions($topic_id = 0)
{
}
/**
 * Return the revision count of the topic
 *
 * @since 2.0.0 bbPress (r2782)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Topic revision count
 */
function bbp_get_topic_revision_count($topic_id = 0, $integer = \false)
{
}
/**
 * Is the topic a sticky or super sticky?
 *
 * @since 2.0.0 bbPress (r2754)
 *
 * @param int $topic_id Optional. Topic id
 * @param int $check_super Optional. If set to true and if the topic is not a
 *                           normal sticky, it is checked if it is a super
 *                           sticky or not. Defaults to true.
 * @return bool True if sticky or super sticky, false if not.
 */
function bbp_is_topic_sticky($topic_id = 0, $check_super = \true)
{
}
/**
 * Is the topic a super sticky?
 *
 * @since 2.0.0 bbPress (r2754)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool True if super sticky, false if not.
 */
function bbp_is_topic_super_sticky($topic_id = 0)
{
}
/**
 * Output the status of the topic
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_status($topic_id = 0)
{
}
/**
 * Return the status of the topic
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Status of topic
 */
function bbp_get_topic_status($topic_id = 0)
{
}
/**
 * Is the topic closed to new replies?
 *
 * @since 2.0.0 bbPress (r2746)
 *
 * @param int $topic_id Optional. Topic id
 *
 * @return bool True if closed, false if not.
 */
function bbp_is_topic_closed($topic_id = 0)
{
}
/**
 * Is the topic open to new replies?
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param int $topic_id Optional. Topic id
 *
 * @return bool True if open, false if closed.
 */
function bbp_is_topic_open($topic_id = 0)
{
}
/**
 * Is the topic publicly viewable?
 *
 * See bbp_get_public_topic_statuses() for public statuses.
 *
 * @since 2.6.0 bbPress (r6383)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool True if public, false if not.
 */
function bbp_is_topic_public($topic_id = 0)
{
}
/**
 * Does the topic have a published status?
 *
 * @since 2.0.0 bbPress (r3496)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool True if published, false if not.
 */
function bbp_is_topic_published($topic_id = 0)
{
}
/**
 * Is the topic marked as spam?
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool True if spam, false if not.
 */
function bbp_is_topic_spam($topic_id = 0)
{
}
/**
 * Is the topic trashed?
 *
 * @since 2.0.0 bbPress (r2888)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool True if trashed, false if not.
 */
function bbp_is_topic_trash($topic_id = 0)
{
}
/**
 * Is the topic pending?
 *
 * @since 2.6.0 bbPress (r5504)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool True if pending, false if not.
 */
function bbp_is_topic_pending($topic_id = 0)
{
}
/**
 * Is the topic private?
 *
 * @since 2.6.0 bbPress (r5504)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool True if private, false if not.
 */
function bbp_is_topic_private($topic_id = 0)
{
}
/**
 * Is the posted by an anonymous user?
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @param int $topic_id Optional. Topic id
 * @return bool True if the post is by an anonymous user, false if not.
 */
function bbp_is_topic_anonymous($topic_id = 0)
{
}
/**
 * Deprecated. Use bbp_topic_author_display_name() instead.
 *
 * Output the author of the topic.
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @deprecated 2.5.0 bbPress (r5119)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_author($topic_id = 0)
{
}
/**
 * Deprecated. Use bbp_get_topic_author_display_name() instead.
 *
 * Return the author of the topic
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @deprecated 2.5.0 bbPress (r5119)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Author of topic
 */
function bbp_get_topic_author($topic_id = 0)
{
}
/**
 * Output the author ID of the topic
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_author_id($topic_id = 0)
{
}
/**
 * Return the author ID of the topic
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Author of topic
 */
function bbp_get_topic_author_id($topic_id = 0)
{
}
/**
 * Output the author display_name of the topic
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_author_display_name($topic_id = 0)
{
}
/**
 * Return the author display_name of the topic
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Topic's author's display name
 */
function bbp_get_topic_author_display_name($topic_id = 0)
{
}
/**
 * Output the author avatar of the topic
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @param int $topic_id Optional. Topic id
 * @param int $size Optional. Avatar size. Defaults to 40
 */
function bbp_topic_author_avatar($topic_id = 0, $size = 40)
{
}
/**
 * Return the author avatar of the topic
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @param int $topic_id Optional. Topic id
 * @param int $size Optional. Avatar size. Defaults to 40
 * @return string Avatar of the author of the topic
 */
function bbp_get_topic_author_avatar($topic_id = 0, $size = 40)
{
}
/**
 * Output the author link of the topic
 *
 * @since 2.0.0 bbPress (r2717)
 *
 * @param mixed|int $args If it is an integer, it is used as topic_id. Optional.
 */
function bbp_topic_author_link($args = array())
{
}
/**
 * Return the author link of the topic
 *
 * @since 2.0.0 bbPress (r2717)
 *
 * @param mixed|int $args If it is an integer, it is used as topic id.
 *                         Optional.
 * @return string Author link of topic
 */
function bbp_get_topic_author_link($args = array())
{
}
/**
 * Output the author url of the topic
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_author_url($topic_id = 0)
{
}
/**
 * Return the author url of the topic
 *
 * @since 2.0.0 bbPress (r2590)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Author URL of topic
 */
function bbp_get_topic_author_url($topic_id = 0)
{
}
/**
 * Output the topic author email address
 *
 * @since 2.0.0 bbPress (r3445)
 *
 * @param int $topic_id Optional. Reply id
 */
function bbp_topic_author_email($topic_id = 0)
{
}
/**
 * Return the topic author email address
 *
 * @since 2.0.0 bbPress (r3445)
 *
 * @param int $topic_id Optional. Reply id
 * @return string Topic author email address
 */
function bbp_get_topic_author_email($topic_id = 0)
{
}
/**
 * Output the topic author role
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @param array $args Optional.
 */
function bbp_topic_author_role($args = array())
{
}
/**
 * Return the topic author role
 *
 * @since 2.1.0 bbPress (r3860)
 *
 * @param array $args Optional.
 * @return string topic author role
 */
function bbp_get_topic_author_role($args = array())
{
}
/**
 * Output the title of the forum a topic belongs to
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_forum_title($topic_id = 0)
{
}
/**
 * Return the title of the forum a topic belongs to
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Topic forum title
 */
function bbp_get_topic_forum_title($topic_id = 0)
{
}
/**
 * Output the forum id a topic belongs to
 *
 * @since 2.0.0 bbPress (r2491)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_forum_id($topic_id = 0)
{
}
/**
 * Return the forum id a topic belongs to
 *
 * @since 2.0.0 bbPress (r2491)
 *
 * @param int $topic_id Optional. Topic id
 * @return int Topic forum id
 */
function bbp_get_topic_forum_id($topic_id = 0)
{
}
/**
 * Output the topics last active ID
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param int $topic_id Optional. Forum id
 */
function bbp_topic_last_active_id($topic_id = 0)
{
}
/**
 * Return the topics last active ID
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param int $topic_id Optional. Forum id
 * @return int Forum's last active id
 */
function bbp_get_topic_last_active_id($topic_id = 0)
{
}
/**
 * Output the topics last update date/time (aka freshness)
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_last_active_time($topic_id = 0)
{
}
/**
 * Return the topics last update date/time (aka freshness)
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Topic freshness
 */
function bbp_get_topic_last_active_time($topic_id = 0)
{
}
/** Topic Subscriptions *******************************************************/
/**
 * Output the topic subscription link
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 */
function bbp_topic_subscription_link($args = array())
{
}
/**
 * Get the topic subscription link
 *
 * A custom wrapper for bbp_get_user_subscribe_link()
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 */
function bbp_get_topic_subscription_link($args = array())
{
}
/** Topic Favorites ***********************************************************/
/**
 * Output the topic favorite link
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 */
function bbp_topic_favorite_link($args = array())
{
}
/**
 * Get the forum favorite link
 *
 * A custom wrapper for bbp_get_user_favorites_link()
 *
 * @since 2.5.0 bbPress (r5156)
 * @since 2.6.0 bbPress (r6308) Add 'redirect_to' support
 */
function bbp_get_topic_favorite_link($args = array())
{
}
/** Topic Last Reply **********************************************************/
/**
 * Output the id of the topics last reply
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_last_reply_id($topic_id = 0)
{
}
/**
 * Return the id of the topics last reply
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $topic_id Optional. Topic id
 * @return int Topic last reply id
 */
function bbp_get_topic_last_reply_id($topic_id = 0)
{
}
/**
 * Output the title of the last reply inside a topic
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_last_reply_title($topic_id = 0)
{
}
/**
 * Return the title of the last reply inside a topic
 *
 * @since 2.0.0 bbPress (r2753)
 * @since 2.6.0 bbPress https://bbpress.trac.wordpress.org/ticket/3039
 *
 * @param int $topic_id Optional. Topic id
 * @return string Topic last reply title
 */
function bbp_get_topic_last_reply_title($topic_id = 0)
{
}
/**
 * Output the link to the last reply in a topic
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_last_reply_permalink($topic_id = 0)
{
}
/**
 * Return the link to the last reply in a topic
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Permanent link to the reply
 */
function bbp_get_topic_last_reply_permalink($topic_id = 0)
{
}
/**
 * Output the link to the last reply in a topic
 *
 * @since 2.0.0 bbPress (r2683)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_last_reply_url($topic_id = 0)
{
}
/**
 * Return the link to the last reply in a topic
 *
 * @since 2.0.0 bbPress (r2683)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Topic last reply url
 */
function bbp_get_topic_last_reply_url($topic_id = 0)
{
}
/**
 * Output link to the most recent activity inside a topic, complete with link
 * attributes and content.
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_freshness_link($topic_id = 0)
{
}
/**
 * Returns link to the most recent activity inside a topic, complete
 * with link attributes and content.
 *
 * @since 2.0.0 bbPress (r2625)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Topic freshness link
 */
function bbp_get_topic_freshness_link($topic_id = 0)
{
}
/**
 * Output the replies link of the topic
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_replies_link($topic_id = 0)
{
}
/**
 * Return the replies link of the topic
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_get_topic_replies_link($topic_id = 0)
{
}
/**
 * Output total reply count of a topic
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_topic_reply_count($topic_id = 0, $integer = \false)
{
}
/**
 * Return total reply count of a topic
 *
 * @since 2.0.0 bbPress (r2485)
 *
 * @param int $topic_id Optional. Topic id
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Reply count
 */
function bbp_get_topic_reply_count($topic_id = 0, $integer = \false)
{
}
/**
 * Output total post count of a topic
 *
 * @since 2.0.0 bbPress (r2954)
 *
 * @param int $topic_id Optional. Topic id
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_topic_post_count($topic_id = 0, $integer = \false)
{
}
/**
 * Return total post count of a topic
 *
 * @since 2.0.0 bbPress (r2954)
 *
 * @param int $topic_id Optional. Topic id
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Post count
 */
function bbp_get_topic_post_count($topic_id = 0, $integer = \false)
{
}
/**
 * Output total hidden reply count of a topic (hidden includes trashed and
 * spammed replies)
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Optional. Topic id
 * @param boolean $integer Optional. Whether or not to format the result
 */
function bbp_topic_reply_count_hidden($topic_id = 0, $integer = \false)
{
}
/**
 * Return total hidden reply count of a topic (hidden includes trashed
 * and spammed replies)
 *
 * @since 2.0.0 bbPress (r2740)
 *
 * @param int $topic_id Optional. Topic id
 * @param boolean $integer Optional. Whether or not to format the result
 * @return int Topic hidden reply count
 */
function bbp_get_topic_reply_count_hidden($topic_id = 0, $integer = \false)
{
}
/**
 * Output total voice count of a topic
 *
 * @since 2.0.0 bbPress (r2567)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_voice_count($topic_id = 0, $integer = \false)
{
}
/**
 * Return total voice count of a topic
 *
 * @since 2.0.0 bbPress (r2567)
 *
 * @param int $topic_id Optional. Topic id
 * @return int Voice count of the topic
 */
function bbp_get_topic_voice_count($topic_id = 0, $integer = \false)
{
}
/**
 * Output a the tags of a topic
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $topic_id Optional. Topic id
 * @param array $args See {@link bbp_get_topic_tag_list()}
 */
function bbp_topic_tag_list($topic_id = 0, $args = array())
{
}
/**
 * Return the tags of a topic
 *
 * @since 2.0.0 bbPress (r2688)
 *
 * @param int $topic_id Optional. Topic id
 * @param array $args This function supports these arguments:
 *  - before: Before the tag list
 *  - sep: Tag separator
 *  - after: After the tag list
 * @return string Tag list of the topic
 */
function bbp_get_topic_tag_list($topic_id = 0, $args = array())
{
}
/**
 * Output the row class of a topic
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $topic_id Optional. Topic id
 * @param array Extra classes you can pass when calling this function
 */
function bbp_topic_class($topic_id = 0, $classes = array())
{
}
/**
 * Return the row class of a topic
 *
 * @since 2.0.0 bbPress (r2667)
 *
 * @param int $topic_id Optional. Topic id
 * @param array Extra classes you can pass when calling this function
 * @return string Row class of a topic
 */
function bbp_get_topic_class($topic_id = 0, $classes = array())
{
}
/** Topic Admin Links *********************************************************/
/**
 * Output admin links for topic
 *
 * @param array $args See {@link bbp_get_topic_admin_links()}
 */
function bbp_topic_admin_links($args = array())
{
}
/**
 * Return admin links for topic.
 *
 * Move topic functionality is handled by the edit topic page.
 *
 * @param array $args This function supports these arguments:
 *  - id: Optional. Topic id
 *  - before: Before the links
 *  - after: After the links
 *  - sep: Links separator
 *  - links: Topic admin links array
 * @return string Topic admin links
 */
function bbp_get_topic_admin_links($args = array())
{
}
/**
 * Output the edit link of the topic
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param array $args See {@link bbp_get_topic_edit_link()}
 */
function bbp_topic_edit_link($args = array())
{
}
/**
 * Return the edit link of the topic
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param array $args This function supports these args:
 *  - id: Optional. Topic id
 *  - link_before: Before the link
 *  - link_after: After the link
 *  - edit_text: Edit text
 * @return string Topic edit link
 */
function bbp_get_topic_edit_link($args = array())
{
}
/**
 * Output URL to the topic edit page
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_edit_url($topic_id = 0)
{
}
/**
 * Return URL to the topic edit page
 *
 * @since 2.0.0 bbPress (r2753)
 *
 * @param int $topic_id Optional. Topic id
 * @return string Topic edit url
 */
function bbp_get_topic_edit_url($topic_id = 0)
{
}
/**
 * Output the trash link of the topic
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param array $args See {@link bbp_get_topic_trash_link()}
 */
function bbp_topic_trash_link($args = array())
{
}
/**
 * Return the trash link of the topic
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param array $args This function supports these args:
 *  - id: Optional. Topic id
 *  - link_before: Before the link
 *  - link_after: After the link
 *  - sep: Links separator
 *  - trash_text: Trash text
 *  - restore_text: Restore text
 *  - delete_text: Delete text
 * @return string Topic trash link
 */
function bbp_get_topic_trash_link($args = array())
{
}
/**
 * Output the close link of the topic
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param array $args See {@link bbp_get_topic_close_link()}
 */
function bbp_topic_close_link($args = array())
{
}
/**
 * Return the close link of the topic
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param array $args This function supports these args:
 *  - id: Optional. Topic id
 *  - link_before: Before the link
 *  - link_after: After the link
 *  - close_text: Close text
 *  - open_text: Open text
 * @return string Topic close link
 */
function bbp_get_topic_close_link($args = array())
{
}
/**
 * Output the approve link of the topic
 *
 * @since 2.6.0 bbPress (r5504)
 *
 * @param array $args See {@link bbp_get_topic_approve_link()}
 */
function bbp_topic_approve_link($args = array())
{
}
/**
 * Return the approve link of the topic
 *
 * @since 2.6.0 bbPress (r5504)
 *
 * @param array $args This function supports these args:
 *  - id: Optional. Topic id
 *  - link_before: Before the link
 *  - link_after: After the link
 *  - sep: Separator between links
 *  - approve_text: Approve text
 *  - unapprove_text: Unapprove text
 * @return string Topic approve link
 */
function bbp_get_topic_approve_link($args = array())
{
}
/**
 * Output the stick link of the topic
 *
 * @since 2.0.0 bbPress (r2754)
 *
 * @param array $args See {@link bbp_get_topic_stick_link()}
 */
function bbp_topic_stick_link($args = array())
{
}
/**
 * Return the stick link of the topic
 *
 * @since 2.0.0 bbPress (r2754)
 *
 * @param array $args This function supports these args:
 *  - id: Optional. Topic id
 *  - link_before: Before the link
 *  - link_after: After the link
 *  - stick_text: Stick text
 *  - unstick_text: Unstick text
 *  - super_text: Stick to front text
 *
 * @return string Topic stick link
 */
function bbp_get_topic_stick_link($args = array())
{
}
/**
 * Output the merge link of the topic
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @param array $args
 */
function bbp_topic_merge_link($args = array())
{
}
/**
 * Return the merge link of the topic
 *
 * @since 2.0.0 bbPress (r2756)
 *
 * @param array $args This function supports these args:
 *  - id: Optional. Topic id
 *  - link_before: Before the link
 *  - link_after: After the link
 *  - merge_text: Merge text
 *
 * @return string Topic merge link
 */
function bbp_get_topic_merge_link($args = array())
{
}
/**
 * Output the spam link of the topic
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param array $args See {@link bbp_get_topic_spam_link()}
 */
function bbp_topic_spam_link($args = array())
{
}
/**
 * Return the spam link of the topic
 *
 * @since 2.0.0 bbPress (r2727)
 *
 * @param array $args This function supports these args:
 *  - id: Optional. Topic id
 *  - link_before: Before the link
 *  - link_after: After the link
 *  - spam_text: Spam text
 *  - unspam_text: Unspam text
 *
 * @return string Topic spam link
 */
function bbp_get_topic_spam_link($args = array())
{
}
/**
 * Output the link to go directly to the reply form
 *
 * @since 2.4.0 bbPress (r4966)
 *
 * @param array $args
 */
function bbp_topic_reply_link($args = array())
{
}
/**
 * Return the link to go directly to the reply form
 *
 * @since 2.4.0 bbPress (r4966)
 *
 * @param array $args Arguments
 *
 * @return string Link for a reply to a topic
 */
function bbp_get_topic_reply_link($args = array())
{
}
/** Topic Pagination **********************************************************/
/**
 * Return the base URL used inside of pagination links
 *
 * @since 2.6.0 bbPress (r6402)
 *
 * @param int $forum_id
 * @return string
 */
function bbp_get_topics_pagination_base($forum_id = 0)
{
}
/**
 * Output the pagination count
 *
 * The results are unescaped by design, to allow them to be filtered freely via
 * the 'bbp_get_forum_pagination_count' filter.
 *
 * @since 2.0.0 bbPress (r2519)
 */
function bbp_forum_pagination_count()
{
}
/**
 * Return the pagination count
 *
 * @since 2.0.0 bbPress (r2519)
 *
 * @return string Forum Pagination count
 */
function bbp_get_forum_pagination_count()
{
}
/**
 * Output pagination links
 *
 * @since 2.0.0 bbPress (r2519)
 */
function bbp_forum_pagination_links()
{
}
/**
 * Return pagination links
 *
 * @since 2.0.0 bbPress (r2519)
 *
 * @return string Pagination links
 */
function bbp_get_forum_pagination_links()
{
}
/**
 * Displays topic notices
 *
 * @since 2.0.0 bbPress (r2744)
 */
function bbp_topic_notices()
{
}
/**
 * Displays topic type select box (normal/sticky/super sticky)
 *
 * @since 2.0.0 bbPress (r2784)
 *
 * @deprecated 2.4.0 bbPress (r5059)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_stick_topic
 *  - tab: Deprecated. Tabindex
 *  - topic_id: Topic id
 *  - selected: Override the selected option
 */
function bbp_topic_type_select($args = array())
{
}
/**
 * Displays topic type select box (normal/sticky/super sticky)
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_stick_topic
 *  - tab: Deprecated. Tabindex
 *  - topic_id: Topic id
 *  - selected: Override the selected option
 */
function bbp_form_topic_type_dropdown($args = array())
{
}
/**
 * Returns topic type select box (normal/sticky/super sticky)
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_stick_topic
 *  - tab: Deprecated. Tabindex
 *  - topic_id: Topic id
 *  - selected: Override the selected option
 */
function bbp_get_form_topic_type_dropdown($args = array())
{
}
/**
 * Output value topic status dropdown
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_topic_status
 *  - tab: Deprecated. Tabindex
 *  - topic_id: Topic id
 *  - selected: Override the selected option
 */
function bbp_form_topic_status_dropdown($args = array())
{
}
/**
 * Returns topic status dropdown
 *
 * This dropdown is only intended to be seen by users with the 'moderate'
 * capability. Because of this, no additional capability checks are performed
 * within this function to check available topic statuses.
 *
 * @since 2.4.0 bbPress (r5059)
 *
 * @param $args This function supports these arguments:
 *  - select_id: Select id. Defaults to bbp_topic_status
 *  - tab: Deprecated. Tabindex
 *  - topic_id: Topic id
 *  - selected: Override the selected option
 */
function bbp_get_form_topic_status_dropdown($args = array())
{
}
/** Single Topic **************************************************************/
/**
 * Output a fancy description of the current topic, including total topics,
 * total replies, and last activity.
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param array $args See {@link bbp_get_single_topic_description()}
 */
function bbp_single_topic_description($args = array())
{
}
/**
 * Return a fancy description of the current topic, including total topics,
 * total replies, and last activity.
 *
 * @since 2.0.0 bbPress (r2860)
 *
 * @param array $args This function supports these arguments:
 *  - topic_id: Topic id
 *  - before: Before the text
 *  - after: After the text
 *  - size: Size of the avatar
 * @return string Filtered topic description
 */
function bbp_get_single_topic_description($args = array())
{
}
/** Topic Tags ****************************************************************/
/**
 * Output the unique id of the topic tag taxonomy
 *
 * @since 2.0.0 bbPress (r3348)
 */
function bbp_topic_tag_tax_id()
{
}
/**
 * Return the unique id of the topic tag taxonomy
 *
 * @since 2.0.0 bbPress (r3348)
 *
 * @return string The unique topic tag taxonomy
 */
function bbp_get_topic_tag_tax_id()
{
}
/**
 * Return array of labels used by the topic-tag taxonomy
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_topic_tag_tax_labels()
{
}
/**
 * Return an array of topic-tag taxonomy rewrite settings
 *
 * @since 2.5.0 bbPress (r5129)
 *
 * @return array
 */
function bbp_get_topic_tag_tax_rewrite()
{
}
/**
 * Output the id of the current tag
 *
 * @since 2.0.0 bbPress (r3109)
 *
 */
function bbp_topic_tag_id($tag = '')
{
}
/**
 * Return the id of the current tag
 *
 * @since 2.0.0 bbPress (r3109)
 *
 * @return string Term Name
 */
function bbp_get_topic_tag_id($tag = '')
{
}
/**
 * Output the name of the current tag
 *
 * @since 2.0.0 bbPress (r3109)
 */
function bbp_topic_tag_name($tag = '')
{
}
/**
 * Return the name of the current tag
 *
 * @since 2.0.0 bbPress (r3109)
 *
 * @return string Term Name
 */
function bbp_get_topic_tag_name($tag = '')
{
}
/**
 * Output the slug of the current tag
 *
 * @since 2.0.0 bbPress (r3109)
 */
function bbp_topic_tag_slug($tag = '')
{
}
/**
 * Return the slug of the current tag
 *
 * @since 2.0.0 bbPress (r3109)
 *
 * @return string Term Name
 */
function bbp_get_topic_tag_slug($tag = '')
{
}
/**
 * Output the link of the current tag
 *
 * @since 2.0.0 bbPress (r3348)
 */
function bbp_topic_tag_link($tag = '')
{
}
/**
 * Return the link of the current tag
 *
 * @since 2.0.0 bbPress (r3348)
 *
 * @return string Term Name
 */
function bbp_get_topic_tag_link($tag = '')
{
}
/**
 * Output the link of the current tag
 *
 * @since 2.0.0 bbPress (r3348)
 */
function bbp_topic_tag_edit_link($tag = '')
{
}
/**
 * Return the link of the current tag
 *
 * @since 2.0.0 bbPress (r3348)
 *
 * @return string Term Name
 */
function bbp_get_topic_tag_edit_link($tag = '')
{
}
/**
 * Output the description of the current tag
 *
 * @since 2.0.0 bbPress (r3109)
 */
function bbp_topic_tag_description($args = array())
{
}
/**
 * Return the description of the current tag
 *
 * @since 2.0.0 bbPress (r3109)
 *
 * @param array $args before|after|tag
 *
 * @return string Term Name
 */
function bbp_get_topic_tag_description($args = array())
{
}
/** Forms *********************************************************************/
/**
 * Output the value of topic title field
 *
 * @since 2.0.0 bbPress (r2976)
 */
function bbp_form_topic_title()
{
}
/**
 * Return the value of topic title field
 *
 * @since 2.0.0 bbPress (r2976)
 *
 * @return string Value of topic title field
 */
function bbp_get_form_topic_title()
{
}
/**
 * Output the value of topic content field
 *
 * @since 2.0.0 bbPress (r2976)
 */
function bbp_form_topic_content()
{
}
/**
 * Return the value of topic content field
 *
 * @since 2.0.0 bbPress (r2976)
 *
 * @return string Value of topic content field
 */
function bbp_get_form_topic_content()
{
}
/**
 * Allow topic rows to have administrative actions
 *
 * @since 2.1.0 bbPress (r3653)
 *
 * @todo Links and filter
 */
function bbp_topic_row_actions()
{
}
/**
 * Output value of topic tags field
 *
 * @since 2.0.0 bbPress (r2976)
 */
function bbp_form_topic_tags()
{
}
/**
 * Return value of topic tags field
 *
 * @since 2.0.0 bbPress (r2976)
 *
 * @return string Value of topic tags field
 */
function bbp_get_form_topic_tags()
{
}
/**
 * Output value of topic forum
 *
 * @since 2.0.0 bbPress (r2976)
 */
function bbp_form_topic_forum()
{
}
/**
 * Return value of topic forum
 *
 * @since 2.0.0 bbPress (r2976)
 *
 * @return string Value of topic content field
 */
function bbp_get_form_topic_forum()
{
}
/**
 * Output checked value of topic subscription
 *
 * @since 2.0.0 bbPress (r2976)
 */
function bbp_form_topic_subscribed()
{
}
/**
 * Return checked value of topic subscription
 *
 * @since 2.0.0 bbPress (r2976)
 *
 * @return string Checked value of topic subscription
 */
function bbp_get_form_topic_subscribed()
{
}
/**
 * Output checked value of topic log edit field
 *
 * @since 2.0.0 bbPress (r2976)
 */
function bbp_form_topic_log_edit()
{
}
/**
 * Return checked value of topic log edit field
 *
 * @since 2.0.0 bbPress (r2976)
 *
 * @return string Topic log edit checked value
 */
function bbp_get_form_topic_log_edit()
{
}
/**
 * Output the value of the topic edit reason
 *
 * @since 2.0.0 bbPress (r2976)
 */
function bbp_form_topic_edit_reason()
{
}
/**
 * Return the value of the topic edit reason
 *
 * @since 2.0.0 bbPress (r2976)
 *
 * @return string Topic edit reason value
 */
function bbp_get_form_topic_edit_reason()
{
}
/**
 * Verify if a POST request came from a failed topic attempt.
 *
 * Used to avoid cross-site request forgeries when checking posted topic form
 * content.
 *
 * @see bbp_topic_form_fields()
 *
 * @since 2.6.0 bbPress (r5558)
 *
 * @return boolean True if is a post request with valid nonce
 */
function bbp_is_topic_form_post_request()
{
}
/** Warning *******************************************************************/
/**
 * Should the topic-lock alert appear?
 *
 * @since 2.6.0 bbPress (r6342)
 *
 * @return bool
 */
function bbp_show_topic_lock_alert()
{
}
/**
 * Output the topic lock description
 *
 * @since 2.6.0 bbPress (r6343)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_topic_lock_description($topic_id = 0)
{
}
/**
 * Return the topic lock description
 *
 * @since 2.6.0 bbPress (r6343)
 *
 * @param int $topic_id Optional. Topic id
 */
function bbp_get_topic_lock_description($topic_id = 0)
{
}
/**
 * The main function responsible for returning the one true bbPress Instance
 * to functions everywhere.
 *
 * Use this function like you would a global variable, except without needing
 * to declare the global.
 *
 * Example: <?php $bbp = bbpress(); ?>
 *
 * @since 2.0.0 bbPress (r2464)
 *
 * @return bbPress The one true bbPress Instance
 */
function bbpress()
{
}
