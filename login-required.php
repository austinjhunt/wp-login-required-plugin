<?php 
/*
 * Plugin Name: Login Required Simple Plugin
 * Plugin URI: https://github.com/austinjhunt/wp-login-required-plugin
 * Description: Enable this plugin to allow use of a [login_required] shortcode on pages that require a login in order to view them
 */
add_shortcode('login_required', 'shortcode_loginRequired');
function shortcode_loginRequired() {
    if (!is_user_logged_in()) {
        auth_redirect();
    }
}