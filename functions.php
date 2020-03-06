<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'yourtheme_enqueue_scripts' );
function yourtheme_enqueue_scripts() {

        wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css' );
}


function products_register_post_types() {
    // CPT Portfolio
    $labels = array(
        'name' => 'Products',
        'all_items' => 'All products',  // affiché dans le sous menu
        'singular_name' => 'Product',
        'add_new_item' => 'Add a product',
        'edit_item' => 'Edit product',
        'menu_name' => 'Products'
    );
	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
	);
	register_post_type( 'products', $args );
	    // Déclaration de la Taxonomie
		$labels = array(
			'name' => 'Type de Products',
			'new_item_name' => 'Nom du nouveau Projet',
			'parent_item' => 'Type de projet parent',
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_in_rest' => true,
			'hierarchical' => true,
		);
		register_taxonomy( 'type-projet', 'products', $args );
}
function images_register_post_types() {
    // CPT Portfolio
    $labels = array(
        'name' => 'Image',
        'all_items' => 'All images',  // affiché dans le sous menu
        'singular_name' => 'Image',
        'add_new_item' => 'Add a image',
        'edit_item' => 'Edit image',
        'menu_name' => 'Gallery'
    );
	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'thumbnail' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
	);
	register_post_type( 'images', $args );
	    // Déclaration de la Taxonomie
		$labels = array(
			'name' => 'Type pictures',
			'new_item_name' => 'Nom du nouveau Projet',
			'parent_item' => 'Type de projet parent',
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'show_in_rest' => true,
			'hierarchical' => true,
		);
		register_taxonomy( 'type-images', 'images', $args );
}


add_action( 'init', 'products_register_post_types' );
add_action( 'init', 'images_register_post_types' );
wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/node_modules/popper.js/dist/popper.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), null, true );
wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );