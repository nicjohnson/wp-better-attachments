<?php
/**
 * @package WP_Better_Attachments
 * @version 1.0.0
 */
/*
Plugin Name: WP Better Attachments
Plugin URI:
Description: Better Wordpress Attachments
Author: Dan Holloran
Version: 1.0.0
Author URI: http://danholloran.com/
*/

define( 'WPBA_VERSION', '1.0.0' );
define( 'WPBA_LANG', 'wpba' );

function wp_test(){
	global $post;
// pp($post);
}
add_action('admin_enqueue_scripts', 'wp_test');

/**
* Handles Activation/Deactivation/Install
*/
require_once "classes/class.wpba-init.php";
register_activation_hook( __FILE__, array( 'WPBA_Init', 'on_activate' ) );
register_deactivation_hook( __FILE__, array( 'WPBA_Init', 'on_deactivate' ) );
register_uninstall_hook( __FILE__, array( 'WPBA_Init', 'on_uninstall' ) );


/**
* Required Classes
*/
require_once "classes/class.wp-better-attachments.php";

// var_dump($wpbg->attach_image( array(
// 	'media'     =>  87,
// 	'parent_id' =>  1
// ) ) );
// var_dump( $wpbg->unattach_image( array( 'attachment_id' => 87 ) ) );

/**
* Required Libs
*/
// require_once "libs/wpba-meta-box.php";