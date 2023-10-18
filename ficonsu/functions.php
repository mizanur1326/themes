<?php 
    if(! function_exists("ficonsu_setup")){
        function ficonsu_setup(){
    
            add_theme_support("post-thumbnails");
            add_theme_support("menus");
            
            register_nav_menus( array(
                'primary_menu' => __( 'Primary Menu', 'ficonsu' ),
                'footer_menu'  => __( 'Footer Menu', 'ficonsu' ),
            ) );


            // add_theme_support("post-thumbnails");
            // add_theme_support("custom-logo");
            // add_theme_support( "custom-background" );

        }
        // add_action( "after_setup_theme", "zboomMusic_setup" );

        add_action("after_setup_theme", "ficonsu_setup");
    }


?>