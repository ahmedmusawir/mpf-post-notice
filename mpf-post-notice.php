<?php 

/**
 *
 * Plugin Name: MPF Post Notice
 * Plugin URI:	https://htmlfivedev.com 
 * Description: Display a short notice above the post content.
 * Version: 	1.0
 * Author URI: 	https://www.linkedin.com/in/ahmedmusawir
 * License: 	GPL-2.0+ 
 *
 */

//If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die("Cannot Access Directly");
}

require_once( plugin_dir_path( __FILE__ ) . 'class-mpf-post-notice.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-mpf-post-notice-editor.php' );

function moosePostNoticeStart() {

	$post_notice_editor = new MPFPostNoticeEditor();

	$post_notice = new MPFPostNotice( $post_notice_editor );	
	$post_notice->loadScripts();

}

moosePostNoticeStart();

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-activate.php';
register_activation_hook( __FILE__, array( 'MooseActivate', 'activate' ) );

// Activation
require_once plugin_dir_path( __FILE__ ) . 'inc/Base/class-deactivate.php';
register_activation_hook( __FILE__, array( 'MooseDeactivate', 'deactivate' ) );