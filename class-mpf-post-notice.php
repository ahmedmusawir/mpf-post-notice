<?php 

/**
* MPF Post Notice Class
*/

//If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die("Cannot Access Directly");
}

require_once( plugin_dir_path( __FILE__ ) . 'class-enqueue.php' );

class MPFPostNotice
{
	
	public function __construct( $editor )
	{
		$editor->initialize();
	}

	public function loadScripts() {

		$scripts = new Enqueue();
		$scripts->initialize();
	}
}