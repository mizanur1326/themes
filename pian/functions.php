<?php 
function pian_setup(){
    add_theme_support("post-thumbnails");
    add_theme_support("menus");

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'pian' ),
        'footer_menu'  => __( 'Footer Menu', 'pian' ),
    ) );
}
add_action( "after_setup_theme", "pian_setup" );

?>