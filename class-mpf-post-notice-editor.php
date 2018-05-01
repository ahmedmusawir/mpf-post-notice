<?php 

/**
* MPF Post Notice Editor Class
*/

//If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die("Cannot Access Directly");
}

require_once( plugin_dir_path( __FILE__ ) . 'class-enqueue.php' );

class MPFPostNoticeEditor
{
	
	function __construct()
	{

	}

	public function initialize() {

		// echo "Running from the Editor";
		
	}
}