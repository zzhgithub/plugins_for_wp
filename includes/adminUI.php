<?php
add_action('admin_menu','create_admin_page');
function create_admin_page(){
	add_options_page('test','test Setting','testSetting','option_page');
}
function option_page(){
	
}
?>