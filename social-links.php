<?php
/**
* Plugin Name: Another Social Links Widget
* Description: Add social icons/links to sidebar
* Ver 1.0
* Author: Tim Spencer
*/

// Exit if direct access
if (!defined('ABSPATH')) {
	exit;
}

// Load scripts
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-scripts.php');
// Load class
require_once(plugin_dir_path(__FILE__) . '/includes/social-links-class.php');
// Register widget
function register_social_links() {
	register_widget('Social_Links_Widget');
}

add_action('widgets_init', 'register_social_links');