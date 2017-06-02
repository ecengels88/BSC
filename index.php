<?php
/*
Plugin Name: Title Update
Plugin URI: https://wpshout.com/wordpress-hooks-actions-filters-work/
Description: This plugin changes all titles to read "Foo Bar"
Version: 0.0.1
Author: Evan Engels
Author URI: http://evanengels.surge.sh
 */


 add_filter('the_title', 'fooBar');
 function fooBar($title) {
 	return 'Foo Bar';
 }

 ?>
