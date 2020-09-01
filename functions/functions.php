<?php

// Removing unnecessary <head> tags to increase performance
remove_action('wp_head', 'rsd_link'); // Remove "Really Simple Discovery" link (required if publishing posts via a third party tool)
remove_action('wp_head', 'wp_generator'); // Remove WordPress Generator version number
remove_action('wp_head', 'wlwmanifest_link'); // Remove Windows Live Writer Manifest Link
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove shortlink

// Remove emoji scripts and styles
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles' );
// ----

// Optional
// remove_action('wp_head', 'rel_canonical'); // Remove canonical tag
