<?php
/*
Plugin Name: test
Plugin URI: 
Description: test a new plugins
Version: 0.0.1
Author: zzh
Author URI: 
License: test
Text Domain: test
*/
function addstring(){
	echo "test is funny";
}

add_action('admin_footer','addstring');
