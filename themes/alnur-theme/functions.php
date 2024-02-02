<?php

// Add script and stylesheets
function alnur_scripts() {
    $file_ver = date("ymdGis", filemtime( get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style('alnur_style', get_stylesheet_uri(), array(), $file_ver);
    wp_enqueue_script('alnur_js', get_template_directory_uri().'/js/alnur.js', array('jquery'), 1.0, true);
}

add_action('wp_enqueue_scripts', 'alnur_scripts');

// Add theme support
function inhabitent_features() {
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'primary_menu'  => __('Primary Menu', 'text_domain'),
            'footer_menu'   => __('Footer Menu', 'text_domain')
        )
    );
}

add_action ('after_setup_theme', 'inhabitent_features');

// Navigation Bar logo colour changes 

function nav_bar_color() {
    if ( !is_page('home')) {?>
        <style>
            .nav-bar-left__logo--green {
                display: none;
            }
        </style>
    <?php } else { ;?> 
        <style>
            .nav-bar-left__logo--white {
                display: none;
            }
        </style>
    <?php }
}

add_action( 'init', 'nav_bar_color' );

//Custom post type

function inhabitent_post_type() {
    register_post_type( 'products', array(
        'public' => true,
        'hierarchical' => true,
        'has_archive'   => true,
        // 'show_in_rest'  => true,
        'menu_icon' => 'dashicons-products',
        'supports'   => array('title', 'editor', 'excerpt', 'thumbnail'),
        'labels' => array(
            'name' => __('Products', 'textdomain'),
            'singular_name' => __('Product', 'textdomain'),
            'all_items' => 'All Products',
            'add_new'   => 'Add New Product',
            'add_new_item'  => 'New Product',
            'edit_item' => 'Edit Product',
            'search_items'  => 'Search Products',
            'not_found' => 'No products found',
            'update_items'  => 'Update Product',
            'featured_image'    => 'Featured Product Image',
            'item_trashed'  => 'Product trashed'
        )
    ));
}

add_action ('init', 'inhabitent_post_type');

//Custom category for products - taxonomy for Products post type

function inhabitent_product_types() {
    $slug = 'product-type';
    $name = 'Product Types';
    $singular_name = 'Product Type';

    register_taxonomy($slug, 'products',array(
        'public'    => true,
        'hierarchical'  => true,
        'query_var' => true,
        'show_ui'   => true,
        'show_in_nav_menu'  => true,
        'show_admin_column' => true,
        'show_in_rest'  => true,
        'labels'    => array(
            'name'  => $name,
            'singular_name' => $singular_name,
            'menu_name' => $name,
            'all_items' => 'All ' . $name,
            'parent_item'   => 'Parent ' . $singular_name,
            'parent_item_colon' => sprintf( 'Parent %s: ', $singular_name),
            'new_item_name' => sprintf( 'New %s Name ', $singular_name),
            'add_new_item'  => 'Add New ' . $singular_name,
            'edit_item' => 'Edit ' . $singular_name,
            'update_item'   => 'Update ' .  $singular_name,
            'search_items'  => 'Search ' . strtolower( $name),
            'add_or_remove_items'   => 'Add or remove ' . strtolower($name),
        )
    ));
}  

add_action( 'init', 'inhabitent_product_types');

?>