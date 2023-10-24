<?php 
function automotive_setup(){
    add_theme_support("post-thumbnails");
    add_theme_support("menus");

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'automotive' ),
        'footer_menu'  => __( 'Footer Menu', 'automotive' ),
    ) );
}
add_action( "after_setup_theme", "automotive_setup" );


//For Widgets
function register_widgets(){
    register_sidebar(array (
        'name' => __('Left Widgets', 'automotive'),
        'id' => 'Left-Widgets',
        'description' => __('This widget loacted to left side of footer' , 'automotive'),
        'before_widget' => '<div class="footer_about">',
        'after_widget' => '</div>',
        'before_title' =>'<div class="heading">',
        'after_title' => '</div>'
    ));

    register_sidebar(array(
        'name' => __('Middle Widgets', 'automotive'),
        'id' => 'Middle-Widgets',
        'description' => __('This widget loacted to middle of footer' , 'automotive'),
        'before_widget' => '<div class="footer_contact_info">',
        'after_widget' => '</div>',
        'before_title' =>'<div class="heading">',
        'after_title' => '</div>'

    ));
    register_sidebar(array(
        'name' => __('Right Widgets', 'automotive'),
        'id' => 'Right-Widget',
        'description' => __('This widget loacted to right dide of footer' , 'automotive'),
        'before_widget' => '<div class="footer_useful_links">',
        'after_widget' => '</div>',
        'before_title' =>'<div class="heading">',
        'after_title' => '</div>'
    ));
}
add_action('widgets_init', 'register_widgets');

function bodySidebar_widgets(){
    register_sidebar(array(
        'name' => __('bodyLeft', 'automotive'),
        'id' => 'bodyLeft',
        'description' => __('This widget loacted to left side of body' , 'automotive'),
        'description' => __('This widget located to the left side of the body', 'automotive'),
        'before_widget' => '<div class="">',
        'after_widget' => '</div>', 
        'before_title' => '<h3 class="sb_widget_title">', 
        'after_title' => '</h3>' 
    ));
}
add_action('widgets_init', 'bodySidebar_widgets');

function create_carousel_post_type() {
    register_post_type('carousel_item',
        array(
            'labels' => array(
                'name' => __('Carousel Items'),
                'singular_name' => __('Carousel Item'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_carousel_post_type');

function register_slider_post_type() {
    $labels = array(
        'name' => 'Sliders',
        'singular_name' => 'Slider',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'slider'),
    );

    register_post_type('slider', $args);
}

add_action('init', 'register_slider_post_type');

function register_vehicle_post_type() {
    $labels = array(
        'name' => 'Vehicles',
        'singular_name' => 'Vehicle',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'vehicle'),
    );

    register_post_type('vehicle', $args);
}

add_action('init', 'register_vehicle_post_type');

function register_testimonial_post_type() {
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new' => 'Add New Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'all_items' => 'All Testimonials',
        'view_item' => 'View Testimonial',
        'search_items' => 'Search Testimonials',
        'not_found' => 'No testimonials found',
        'not_found_in_trash' => 'No testimonials found in trash',
        'menu_name' => 'Testimonials',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('testimonial', $args);
}

add_action('init', 'register_testimonial_post_type');
