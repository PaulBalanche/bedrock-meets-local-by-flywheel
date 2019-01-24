<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */


 
/**
 * Internationalization text domain
 * 
 */
define( 'THEME_TEXT_DOMAIN', 'wpe-basic-boilerplate-theme' );

add_action( 'after_setup_theme', 'theme_text_domain_setup' );
function theme_text_domain_setup(){
    load_theme_textdomain( THEME_TEXT_DOMAIN, get_template_directory() . '/languages' );
}