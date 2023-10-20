<?php 
    function automotiveWebsite_theme_files(){
        wp_enqueue_style("animate", get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), "1.0", "all");
        wp_enqueue_style("fontawesome", get_template_directory_uri() . '/assets/css/fontawesome.css', array(), "1.0", "all");
        wp_enqueue_style("aos", get_template_directory_uri() . '/assets/css/aos.css', array(), "1.0", "all");
        wp_enqueue_style("animate", get_template_directory_uri() . '/assets/css/animate.css', array(), "1.0", "all");
        wp_enqueue_style("slick", get_template_directory_uri() . '/assets/css/slick.css', array(), "1.0", "all");
        wp_enqueue_style("slick-theme", get_template_directory_uri() . '/assets/css/slick-theme.css', array(), "1.0", "all");
        wp_enqueue_style("magnific-popup", get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), "1.0", "all");
        wp_enqueue_style("nice-select", get_template_directory_uri() . '/assets/css/nice-select.css', array(), "1.0", "all");
        wp_enqueue_style("jquery-ui.css", get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), "1.0", "all");
        wp_enqueue_style("automotiveWebsite-stle", get_stylesheet_uri() );



    }
add_action("wp_enqueue_scripts", "automotiveWebsite_theme_files");
?>