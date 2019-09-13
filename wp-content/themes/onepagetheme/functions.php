<?php

function onePage_styles(){
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
		wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0');
		wp_register_style('typicons', get_template_directory_uri() . '/icons/font/typicons.min.css');
		wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

		wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800,900&display=swap', array(), '1.0.0');

		// llamar los estilos
		wp_enqueue_style('style');
		wp_enqueue_style('bootstrap4');
		wp_enqueue_style('typicons');
		wp_enqueue_style('bootstrap_css');
		wp_enqueue_style('normalize');


		//Llama Spripts
		//wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrapjs', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", array('jquery'), '4.3.1', true);
		wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array(), '1.0.0', true );

		wp_enqueue_script('bootstrapjs');
		wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'onePage_styles');