<?php

function index_assets() {
    wp_enqueue_style( 'inter1', "https://fonts.googleapis.com" );
    wp_enqueue_style( 'inter2', "https://fonts.gstatic.com");
    wp_enqueue_style( 'inter3', "https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap");
    wp_enqueue_style( 'aos.css', "https://unpkg.com/aos@2.3.1/dist/aos.css" );
    wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/assets/slick/slick.css' );
    wp_enqueue_style( 'slick-theme.css', get_template_directory_uri() . '/assets/slick/slick-theme.css' );
    wp_enqueue_style( 'main.css', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), '20151215', true );
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
    // wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
}
//index_assets();
add_action( 'wp_enqueue_scripts', 'index_assets' );
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
show_admin_bar(false);

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