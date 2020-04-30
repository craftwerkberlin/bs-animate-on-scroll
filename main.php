<?php
/*Plugin Name: Animate On Scroll WP
Plugin URI: https://bootscore.me/plugins/animate-on-scroll-wp/
Description: This plugin registers and initializes AOS library https://michalsnik.github.io/aos/ in your WordPress. You can then use the animations by writing them into your HTML code like &lt;div data-aos="zoom-in-down"&gt;&lt;/div&gt;.
Version: 1.0.0
Author: Bastian Kreiter
Author URI: https://crftwrk.de
License: GPLv2
*/

// Register Styles and Scripts
function aos_scripts() {

    wp_enqueue_script( 'aos-js', plugins_url( '/js/aos.js', __FILE__ ));
    
    wp_enqueue_script( 'initialize', plugins_url( '/js/initialize.js', __FILE__ ));
    
    wp_register_style( 'aos-css', plugins_url('css/aos.css', __FILE__) );
        wp_enqueue_style( 'aos-css' );
        
        }
    
add_action('wp_enqueue_scripts','aos_scripts');
