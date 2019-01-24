<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package basic-theme-boilerplate
 */

the_title();

the_content();

wp_link_pages( array(
	'before' => '<div class="page-links">' . esc_html__( 'Pages:', THEME_TEXT_DOMAIN ),
	'after'  => '</div>',
) );