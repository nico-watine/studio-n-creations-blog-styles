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

// Version CSS file in a theme
wp_enqueue_style(
	'theme-styles',
	get_stylesheet_directory_uri() . '/style.css',
	array(),
	filemtime( get_stylesheet_directory() . '/style.css' )
);

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
	if (!is_admin() && isset($scripts->registered['jquery'])) {
			$script = $scripts->registered['jquery'];

			if ($script->deps) { // Check whether the script has any dependencies
					$script->deps = array_diff($script->deps, array(
							'jquery-migrate'
					));
			}
	}
}

add_action('wp_default_scripts', 'remove_jquery_migrate');
