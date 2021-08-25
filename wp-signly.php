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

     $on = "window.turnOnSignly()";
    echo wp_get_inline_script_tag( $on );

}


add_action('wp_footer', 'signlyScript');


function signly_style_scripts() {
    wp_enqueue_style( 'signly-style', 'https://cdn.signly.co/release/latest/signly.css' );
}
add_action( 'wp_enqueue_scripts', 'signly_style_scripts' );