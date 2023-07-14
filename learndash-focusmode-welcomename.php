<?php
/*
Plugin Name: LearnDash - Focus Mode Welcome Name
Description: This plugin switches the LearnDash Focus Mode Welcome Name from the user nicename to the user display_name.
Version: 1.0.0
Author: Blaine Moore
Author URI: https://blainemoore.com
License:	GPL v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
GitHub Plugin URI: BlaineMoore/learndash-focusmode-welcomename
*/

add_filter( 'ld_focus_mode_welcome_name', function($name, $user) { return $user->display_name; }, 10, 2 );