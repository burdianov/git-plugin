<?php

/*
	* Plugin Name: Git Plugin
 	* Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 	* Description: Plugin for testing version control via Git
	* Version: 1.0.0
	* Author: Lilian Burdianov
	* Author URI: http://URI_Of_The_Plugin_Author
	* License: MIT
*/

require 'plugin-updates/plugin-update-checker.php';
$MyUpdateChecker = PucFactory::buildUpdateChecker(
    //'http://example.com/path/to/info.json',
    'info.json',
    __FILE__
);

function showMessage() {
	echo "<script>alert('Noroc Vasea');</script>";
}

add_action('get_header', 'showMessage');