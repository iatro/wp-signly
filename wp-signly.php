<?php

/*
Plugin Name: Signly
Plugin URI:  https://www.signly.co
Description: BSL for Websites
Version:     1.6.7
Author:      Texthelp
Author URI:  https://www.iatro.heath
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function signlyScript() {

    wp_print_script_tag(array(
        
        'src' => esc_url('https://cdn.signly.co/release/latest/signly.umd.min.js')
    ));
}

add_action('wp_footer', 'signlyScript');