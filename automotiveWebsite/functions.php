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


        /////////////////////////////////////////JS files Here//////////////////////////////////////////////////////////////////
        wp_enqueue_script("jquery", get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("popper", get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("bootstrap", get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("aos", get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), 1.0, false);
        wp_enqueue_script("parallaxie", get_template_directory_uri() . '/assets/js/parallaxie.js', array('jquery'), 1.0, false);
        wp_enqueue_script("slick", get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("magnific-popup", get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("nice-select", get_template_directory_uri() . '/assets/js/nice-select.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("isotope", get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery'), 1.0, false);
        wp_enqueue_script("imagesloaded", get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("masonry", get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("gmapLink", 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6', false);
        wp_enqueue_script("gmaps", get_template_directory_uri() . '/assets/js/gmaps.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("jquery-ui", get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), 1.0, false);
        wp_enqueue_script("waypoint", get_template_directory_uri() . '/assets/js/waypoint.js', array('jquery'), 1.0, false);
        wp_enqueue_script("counterup", get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), 1.0, false);
        wp_enqueue_script("validate", get_template_directory_uri() . '/assets/js/validate.js', array('jquery'), 1.0, false);
        wp_enqueue_script("mCustomScrollbar", get_template_directory_uri() . '/assets/js/mCustomScrollbar.js', array('jquery'), 1.0, false);
        wp_enqueue_script("custom", get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 1.0, false);
    }
add_action("wp_enqueue_scripts", "automotiveWebsite_theme_files");
?>