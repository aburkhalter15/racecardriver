<?php 


if ( ! function_exists ( 'racecardriver_setup') ) :

	function racecardriver_setup() {
			// let wordpress handle the Titles tags
			add_theme_support( 'title-tag' );
	}
endif;
add_action('after_setup_theme', 'racecardriver_setup');

/* ----- Register Menus -----*/

function register_racecardriver_menus() {
	register_nav_menus(
		array(
				'primary' => __('Primary Menu'),
			)
		);
}
add_action('init', 'register_racecardriver_menus');

/* ----- Add Stylesheets -----*/

function racecardriver_scripts() {

	//Enqueue Main Stylesheet
	wp_enqueue_style('racecardriver_styles', get_stylesheet_uri() );
	//Enqueue Google Fonts
	wp_enqueue_style('racecardriver_google_fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' );
}
add_action('wp_enqueue_scripts', 'racecardriver_scripts');

function bootstrap_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}
 
function bootstrap_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js' );
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', $dependencies );
}
 
add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_scripts' );