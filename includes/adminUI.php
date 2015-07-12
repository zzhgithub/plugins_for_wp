<?php
add_action('admin_menu','create_admin_page');
register_activation_hook(__FILE__,'set_test_options');
function create_admin_page(){
	add_options_page('test','test Setting','manage_options','testSetting','option_page');
}
function option_page(){
 ?>
<div class="wrap">
	<?php screen_icon() ?>
	<h2>TEST SETING</h2>
	<?php update_test_options(); ?>
	<form method="post">
		<input tpye="text" name="color" value="<?php echo get_option('color'); ?>" />
		<input type="submit" name="submit" value="ok" />
	</form>
</div>
 <?php
}

function set_test_options(){
	add_option('color','red');
}
function update_test_options(){
	if($_POST['submit']){
		$updated = false;
		if($_POST['color']){
			update_option('color',$_POST['color']);
			$updated = true;
		}
	if ($updated) {
		echo "updated success!";
	}else{
		echo "updated is bad!";
	}
}
}
?>