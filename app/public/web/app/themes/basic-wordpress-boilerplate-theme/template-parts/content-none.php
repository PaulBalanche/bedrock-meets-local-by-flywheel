<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package basic-theme-boilerplate
 */

esc_html_e( 'Nothing Found', THEME_TEXT_DOMAIN );

if ( is_search() ) :

	esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', THEME_TEXT_DOMAIN );
	get_search_form();

else :

	esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', THEME_TEXT_DOMAIN );
	get_search_form();
	
endif;