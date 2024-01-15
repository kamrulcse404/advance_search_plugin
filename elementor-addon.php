<?php

/**
 * Plugin Name: Elementor Addon By Tanvir 1
 * Description: Simple widget for road map project.
 * Version:     1.0.0
 * Author:      Tanvirul Karim
 * Author URI:  www.bengalcoder.com
 * Text Domain: elementor-addon
 */

function widget_styles() {
    wp_enqueue_style('swiper-css', plugins_url('assets/css/swiper-bundle.min.css', __FILE__));
    wp_enqueue_style('style-css', plugins_url('assets/css/style.css', __FILE__));

    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper-js', plugins_url('assets/js/swiper.js', __FILE__), array('jquery'), null, true);
    wp_enqueue_script('swiper-bundle-js', plugins_url('assets/js/swiper-bundle.min.js', __FILE__), array('jquery', 'swiper-js'), null, true);
    wp_enqueue_script('switchmode-js', plugins_url('assets/js/switchmode.js', __FILE__), array('jquery'), null, true);
}

add_action('elementor/frontend/after_enqueue_styles', 'widget_styles');









// the function for register wodgets 

function register_hello_world_widget($widgets_manager)
{
	require_once(__DIR__ . '/widgets/road_map.php');




	$widgets_manager->register(new \Road_Map());
}
add_action('elementor/widgets/register', 'register_hello_world_widget');





// register new categories                
function add_elementor_widget_categories($elements_manager)
{


	$elements_manager->add_category(
		'custom-theme-agency',
		[
			'title' => esc_html__('Theme Section', 'textdomain'),
			'icon' => 'fa fa-plug',
		]
	);

	$elements_manager->add_category(
		'custom-theme-category',
		[
			'title' => esc_html__('Custom Theme', 'textdomain'),
			'icon' => 'fa fa-plug',
		]
	);
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');
