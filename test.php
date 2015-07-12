<?php
/*
Plugin Name: test
Plugin URI: http://www.baidu.com
Description: test a new plugins
Version: 0.0.1
Author: zzh
Author URI: http://www.baidu.com
License: test
Text Domain: test
*/
function add_css(){
	echo "<style>
	#a{
	position:absolute;
	left: 0;
	top:  0;
	color: red;
}
	</style>";
}
function add_string(){
	echo "<p id='a'>test is funny</p>";
}
function findname($name){
	$name();
}
function test(){
	findname('add_string');
}
add_action('admin_footer','test');
add_action('admin_footer','add_css');
//add_action('wp_uploaded','addstring');
//add_action('admin_head','add_string');
?>