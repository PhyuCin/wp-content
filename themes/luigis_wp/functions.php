<?php

function load_stylesheets(){
	//font is just a name and
	//get the location
	//if we have any other script that we require or depend on this script
wp_register_style('font', get_template_directory_uri().'/fonts/beyond_the_mountains-webfont.css', array(),1, 'all');
wp_enqueue_style('font');

wp_register_style('bootstrap', get_template_directory_uri().'/plugin-frameworks/bootstrap.min.css', array(),1, 'all');
wp_enqueue_style('bootstrap');
	
wp_register_style('swiper', get_template_directory_uri().'/plugin-frameworks/swiper.css', array(),1, 'all');
wp_enqueue_style('swiper');
	
wp_register_style('ionicons', get_template_directory_uri().'/fonts/ionicons.css', array(),1, 'all');
wp_enqueue_style('ionicons');
	
wp_register_style('styles', get_template_directory_uri().'/common/styles.css', array(),1, 'all');
wp_enqueue_style('styles');

wp_register_style('custom', get_template_directory_uri().'/custom.css', array(),1, 'all');
wp_enqueue_style('custom');
}


add_action('wp_enqueue_scripts', 'load_stylesheets');
		
		