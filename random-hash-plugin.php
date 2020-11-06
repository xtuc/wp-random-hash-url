<?php

/**
* Plugin Name: Random Hash Plugin
**/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function custom_rewrite_rule() {
    add_rewrite_rule('^h\/(.*)','index.php?p=1','top');
}
add_action('init', 'custom_rewrite_rule');
