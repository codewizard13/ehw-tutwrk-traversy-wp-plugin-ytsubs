<?php
/*
Plugin Name: YouTube Subs
Plugin URI: https://erichepperle.com
Description: Display YouTube sub button and count
Version: 1.1.0
Author: Eric Hepperle
Author URI: https://erichepperle.com
Date Created: 02/02/22
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
   exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs.class.php');

// Register Widget
function register_youtubesubs() {
    register_widget('YouTube_Subs_Widget');
}

// Hook in function
add_action ('widgets_init', 'register_youtubesubs');

/* FINAL VERSION -- WORKS PERFECT */