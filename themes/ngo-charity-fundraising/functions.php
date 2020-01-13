<?php

require get_stylesheet_directory() . '/inc/customizer.php';

add_action( 'wp_enqueue_scripts', 'ngo_charity_fundraising_chld_thm_parent_css' );
function ngo_charity_fundraising_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'ngo_charity_fundraising_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );
    
}

/**
* Changed the blog layout to 3 columns
*/
add_filter( 'bizberg_sidebar_settings', 'ngo_charity_fundraising_sidebar_settings' );
function ngo_charity_fundraising_sidebar_settings(){
	return '4';
}

/**
* Change the theme color
*/
add_filter( 'bizberg_theme_color', 'ngo_charity_fundraising_change_theme_color' );
function ngo_charity_fundraising_change_theme_color(){
    return '#e0be53';
}

/**
* Change the header menu color hover
*/
add_filter( 'bizberg_header_menu_color_hover', 'ngo_charity_fundraising_header_menu_color_hover' );
function ngo_charity_fundraising_header_menu_color_hover(){
    return '#e0be53';
}

/**
* Change the button color of header
*/
add_filter( 'bizberg_header_button_color', 'ngo_charity_fundraising_header_button_color' );
function ngo_charity_fundraising_header_button_color(){
    return '#e0be53';
}

/**
* Change the button hover color of header
*/
add_filter( 'bizberg_header_button_color_hover', 'ngo_charity_fundraising_header_button_color_hover' );
function ngo_charity_fundraising_header_button_color_hover(){
    return '#e0be53';
}