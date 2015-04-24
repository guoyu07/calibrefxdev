<?php

// add_action('init', 'childthemes_register_scripts');
/**
 * This function register our style and script files
 */
function childthemes_register_scripts(){   
    wp_register_script('childthemes-functions', CHILD_JS_URL . '/functions.js', array('jquery'));
}

/**
 * This function load our style and script files
 */
// add_action('calibrefx_meta', 'childthemes_load_script');
function childthemes_load_script(){   
	wp_enqueue_script('childthemes-functions');
    
}