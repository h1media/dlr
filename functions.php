<?php

// Theme setup
function theme_setup() {
	load_theme_textdomain( 'wlc' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'theme_setup' );

// Register custom styles and scripts
function wlc_theme_scripts() {

	wp_enqueue_style( 'wlc-style', get_stylesheet_uri() );
	wp_enqueue_style( 'wlc-app', get_template_directory_uri() . '/dist/css/global.min.css', array() );

	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/fontawesome-all.min.js', array(), '20180327' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/jquery/jquery-3.3.1.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'wlc_theme_scripts' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Add theme menus
function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
		)
	);
}

add_action( 'init', 'register_theme_menus' );

//Clean up output of stylesheet <link> tags
function clean_style_tag( $input ) {
	preg_match_all( "!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches );
	if ( empty( $matches[2] ) ) {
		return $input;
	}
	$media = '' !== $matches[3][0] && 'all' !== $matches[3][0] ? ' media="' . $matches[3][0] . '"' : '';

	return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}

add_filter( 'style_loader_tag', 'clean_style_tag' );

// Clean up output of <script> tags
function clean_script_tag( $input ) {
	$input = str_replace( "type='text/javascript' ", '', $input );

	return str_replace( "'", '"', $input );
}

add_filter( 'script_loader_tag', 'clean_script_tag' );
