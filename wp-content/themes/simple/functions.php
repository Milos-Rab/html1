<?php
/**
 * Регистрация стилей
 */
function register_styles(){

	wp_register_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style');

    wp_register_style('fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style('fonts');

	wp_register_style('mobile', get_template_directory_uri() . '/css/mobile.css');
	wp_enqueue_style('mobile');

	wp_register_style('fm.revealator', get_template_directory_uri() . '/css/fm.revealator.jquery.css');
	wp_enqueue_style('fm.revealator');

	wp_register_style('slicknav', get_template_directory_uri() . '/css/slicknav.min.css');
	wp_enqueue_style('slicknav');

    wp_register_style('jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css');
    wp_enqueue_style('jquery-ui');

}

add_action( 'wp_enqueue_scripts', 'register_styles' );

/**
 * Регистрация скриптов
 */
function load_my_scripts(){

    wp_deregister_script( 'jquery' );    
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.0.min.js');
    wp_enqueue_script('jquery');

    wp_deregister_script('bootstrap');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');

	wp_deregister_script('jquery.slicknav.min');
	wp_register_script('jquery.slicknav.min', get_template_directory_uri() . '/js/jquery.slicknav.min.js');
	wp_enqueue_script('jquery.slicknav.min');

	wp_deregister_script('revealator');
	wp_register_script('revealator', get_template_directory_uri() . '/js/fm.revealator.jquery.js');
	wp_enqueue_script('revealator');

	wp_deregister_script('jquery.validate.min.js');
	wp_register_script('jquery.validate.min.js', get_template_directory_uri() . '/js/jquery.validate.min.js');
	wp_enqueue_script('jquery.validate.min.js');

	wp_deregister_script('jquery.steps.min.js"');
	wp_register_script('jquery.steps.min.js"', get_template_directory_uri() . '/js/jquery.steps.js"');
	wp_enqueue_script('jquery.steps.min.js"');
	

}

add_action( 'wp_enqueue_scripts', 'load_my_scripts' );

function bootstrap_script_init() {
		
	wp_register_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array( 'jquery' ), '1.12.3', true);
	wp_enqueue_script('popper');

	wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css', '', '3.3.7', 'all' );
	wp_enqueue_style( 'bootstrap' );
	}

/**
 * Регистрация меню
 */

register_nav_menus( array(
    'MainMenu' => 'Main menu',
    'PageMenu' => 'Page menu',
));

/**
 * Добавляем миниатюру
 */

add_theme_support('post-thumbnails');
set_post_thumbnail_size ('360', '360', true);

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150 ); // размер миниатюры поста по умолчанию
}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'category-thumb', 300, 9999 ); // 300 в ширину и без ограничения в высоту
	add_image_size( 'homepage-thumb', 360, 200 ); // Кадрирование изображения
}

function true_register_wp_sidebars() {
 
    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        array(
            'id' => 'true_side', // уникальный id
            'name' => 'Sidebar Phone', // название сайдбара
            'description' => 'Drag and drop widgets here.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'id' => 'true_side1', // уникальный id
            'name' => 'Sidebar phone mobile', // название сайдбара
            'description' => 'Drag and drop widgets here.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
        array(
            'id' => 'true_side2', // уникальный id
            'name' => 'Sidebar contact', // название сайдбара
            'description' => 'Drag and drop widgets here.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );

}
 
add_action( 'widgets_init', 'true_register_wp_sidebars' );

/**
 * Новая таксономия
 */

// регистрация пользовательского типа записей под названием 'animals'
function wptp_create_post_type() {
    $labels = array( 
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' ),
        'add_new' => __( 'New service' ),
        'add_new_item' => __( 'Add service' ),
        'edit_item' => __( 'Edit service' ),
        'new_item' => __( 'New service' ),
        'view_item' => __( 'View service' ),
        'search_items' => __( 'Search service' ),
        'not_found' =>  __( 'Not found service' ),
        'not_found_in_trash' => __( 'No contact found in Trash' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-media-document', 
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            'custom-fields', 
            'thumbnail',
            'page-attributes'
        ),
        'taxonomies' => array( 'post_tag', 'category'), 
    );
    register_post_type( 'services', $args );

    $labels = array( 
        'name' => __( 'Rates' ),
        'singular_name' => __( 'Rates' ),
        'add_new' => __( 'New rate' ),
        'add_new_item' => __( 'Add rate' ),
        'edit_item' => __( 'Edit rate' ),
        'new_item' => __( 'New rate' ),
        'view_item' => __( 'View rate' ),
        'search_items' => __( 'Search rate' ),
        'not_found' =>  __( 'Not found rate' ),
        'not_found_in_trash' => __( 'No contact found in Trash' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-megaphone', 
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            'custom-fields', 
            'thumbnail',
            'page-attributes'
        ),
        'taxonomies' => array( 'post_tag', 'category'), 
    );
    register_post_type( 'rate', $args );

    $labels = array( 
        'name' => __( 'Blog' ),
        'singular_name' => __( 'Blog' ),
        'add_new' => __( 'New post' ),
        'add_new_item' => __( 'Add post' ),
        'edit_item' => __( 'Edit post' ),
        'new_item' => __( 'New post' ),
        'view_item' => __( 'View post' ),
        'search_items' => __( 'Search post' ),
        'not_found' =>  __( 'Not found post' ),
        'not_found_in_trash' => __( 'No contact found in Trash' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-admin-page', 
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            'custom-fields', 
            'thumbnail',
            'page-attributes'
        ),
        'taxonomies' => array( 'post_tag', 'category'), 
    );
    register_post_type( 'blog', $args );

    $labels = array( 
        'name' => __( 'locations' ),
        'singular_name' => __( 'Location' ),
        'add_new' => __( 'New location' ),
        'add_new_item' => __( 'Add location' ),
        'edit_item' => __( 'Edit location' ),
        'new_item' => __( 'New location' ),
        'view_item' => __( 'View location' ),
        'search_items' => __( 'Search location' ),
        'not_found' =>  __( 'Not found location' ),
        'not_found_in_trash' => __( 'No contact found in Trash' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-admin-page', 
        'supports' => array(
            'title', 
            'editor', 
            'excerpt', 
            'custom-fields', 
            'thumbnail',
            'page-attributes'
        ),
        'taxonomies' => array( 'post_tag', 'category'), 
    );
    register_post_type( 'location', $args );

    } 
add_action( 'init', 'wptp_create_post_type' );

function new_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_filter('excerpt_more', function($more) {
    return '...';
});

function my_acf_init() {
    
    acf_update_setting('google_api_key', 'AIzaSyBtSboaQ6FTKukkcY0KGGZisYcscYl3Aok');
}

add_action('acf/init', 'my_acf_init');

