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
function add_string(){
	echo "test is funny";
}

add_action('admin_footer','add_string');
//add_action('wp_uploaded','addstring');
//add_action('admin_head','add_string');
?>