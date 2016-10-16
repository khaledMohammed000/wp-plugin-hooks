<?php

/*
Plugin Name: Hooks
Plugin URI: https://github.com/khaledMohammed000/wp-plugin-hooks
Description: it does a lot
Version: 1.0
Author: Khaled
Author URI: http://mohammedkhaled.me
License: GPL2
*/
//ptfwp_ -> plugin tuts for wp
//removing wp-news and wp-activity
function ptfwp_remove_cluttering_from_dashboard(){
remove_meta_box('dashboard_primary','dashboard','postbox-container-2');
remove_meta_box('dashboard_activity','dashboard','postbox-container-1');
}
add_action('wp_dashboard_setup','ptfwp_remove_cluttering_from_dashboard');
