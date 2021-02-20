<?php
/*
  Plugin Name: Hide notice
  Description: Helper plugin that prevents notice from being displayed when the .htaccess file doesn't exist or isn't writeable.
  Version: 1.0
  Author: Tomek Graczyk
  License: GPLv2 or later
  Text Domain: hide-notice
*/

if (!defined('ABSPATH')) {
  die;
}

function stop_display_warning_htaccess_permissions(){
        remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions' );
}

add_action( 'init', 'stop_display_warning_htaccess_permissions');




