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


