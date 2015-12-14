<?php
/*

Plugin Name: OAF Create Sub-menu
Plugin URI: http://oscarabadfolgueira.com/
Description: This plugin creates an admin sub-menu in existing menu
Version: 1.0
Author: Oscar Abad Folgueira
Author URI: http://www.oscarabadfolgueira.com
License: GPLv2
License URL: http://www.gnu.org/licenses/gpl-2.0.html

*/

add_action( 'admin_menu', 'oaf_create_submenu');

function oaf_create_submenu() {

	add_dashboard_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

	add_posts_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

	add_media_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

	add_pages_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

	add_comments_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

	add_theme_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

	add_users_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

	add_management_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

	add_options_page ( 'OAF Settings', 'OAF Settings', 'manage_options', 'oaf_create_submenu_plugin', 'oaf_create_submenu_function' );

}

function oaf_create_submenu_function () {

}

?>