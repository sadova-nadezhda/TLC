<?php

add_action( 'wp_enqueue_scripts', 'tlc_style' );
add_action( 'wp_enqueue_scripts', 'tlc_scripts' );
add_action('after_setup_theme', function(){
	// add_theme_support('menus');
	register_nav_menus ([
		'header' => 'Верхняя область',
		'footer' => 'Нижняя область'
	]);
  // add_theme_support( 'title-tag' );
  // add_theme_support( 'post-thumbnails' );
});

function tlc_style() {
	wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
	wp_enqueue_style( 'aos-style', get_template_directory_uri() . 'https://unpkg.com/aos@next/dist/aos.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
}



function tlc_scripts(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '/assets/js/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'mask-script', get_template_directory_uri() . '/assets/js/jquery.maskedinput.js', array('jquery'), null, true);

	wp_enqueue_script( 'aos-script', get_template_directory_uri() . 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), null, true);

	wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), null, true);

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/app.js', array('jquery','mask-script','aos-script','swiper-script' ), null, true);
}

show_admin_bar(false);

?>
