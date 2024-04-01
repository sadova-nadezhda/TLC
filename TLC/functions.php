<?php

add_action( 'wp_enqueue_scripts', 'tlc_style' );
add_action( 'wp_enqueue_scripts', 'tlc_scripts' );
add_action('after_setup_theme', function(){
	// add_theme_support('menus');
	register_nav_menus ([
		'header' => 'Верхняя область',
		'footer' => 'Нижняя область'
	]);
	add_theme_support( 'custom-logo' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
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

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

show_admin_bar(false);

?>
