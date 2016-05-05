<?php
/**
 * Plugin Name: SW Lorem Ipsum
 * Plugin URI: http://www.beaverlodgehq.com
 * Description: Display dummy content in Beaver Builder.
 * Version: 1.0.1
 * Author: Jon Mather
 * Author URI: http://www.simplewebsiteinaday.com.au
 */

define( 'SW_LOREM_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'SW_LOREM_MODULE_URL', plugins_url( '/', __FILE__ ) );

function sw_lorem_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'includes/bb-sw-lorem-module.php';
    }
}
add_action( 'init', 'sw_lorem_module' );

function sw_lorem_generator() {
    require_once 'includes/LoremIpsum.class.php';
}
add_action( 'init', 'sw_lorem_generator' );