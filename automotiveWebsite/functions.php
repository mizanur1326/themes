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

