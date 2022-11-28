<?php 



add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'index', get_template_directory_uri() . '/vendor/index.css' );
});


add_action('after_setup_theme', 'theme_support');

function theme_support() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
};

add_action('carbon_fields_register_fields', function () {
	require_once('carbon_fields/carbon-fields-theme.php');
});

?>