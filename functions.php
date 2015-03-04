<?php 

include 'autocracy/autocracy.php';

function Aquai_scripts() {
	//Stylesheets
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'normalize' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'responsive' );
	wp_register_style( 'twentytwenty', get_template_directory_uri() . '/js/twentytwenty/css/twentytwenty.css' );
	wp_enqueue_style( 'twentytwenty' );
	wp_register_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'font-awesome' );

	//Scripts
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'eventmove', get_template_directory_uri() . '/js/twentytwenty/jquery.event.move.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'twentytwenty', get_template_directory_uri() . '/js/twentytwenty/jquery.twentytwenty.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/js/function.js', array('jquery', 'eventmove', 'twentytwenty'), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'Aquai_scripts' );

function Aquai_title( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | '. get_bloginfo( 'name' ). ' | '. get_bloginfo( 'description' );
	}
	return $title;
}
add_filter( 'wp_title', 'Aquai_title' );

?>