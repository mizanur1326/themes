<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php bloginfo("title") ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/favourite_icon.png">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

    <!-- icon - css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">

    <!-- carousel - css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">

    <!-- popup - css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">

    <!-- select options - css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">

    <!-- pricing range - css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>


<body>


    <!-- backtotop - start -->
    <div id="thetop"></div>
    <div class="backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <div class="preloader">
        <div class="animation_preloader">
            <div class="spinner"></div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row vh-100">
                <div class="col-3 loader_section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader_section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader - end -->


    <!-- header_section - start
		================================================== -->
    <header class="header_section secondary_header sticky text-white clearfix">
        <div class="header_top clearfix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <ul class="header_contact_info ul_li clearfix">
                            <li><i class="fal fa-envelope"></i> rotorsmail@email.com</li>
                            <li><i class="fal fa-phone"></i> +1-202-555-0156</li>
                        </ul>
                    </div>

                    <div class="col-lg-5">
                        <ul class="primary_social_links ul_li_right clearfix">
                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_bottom clearfix">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="brand_logo">
                            <a href="<?php get_home_url();?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_01_1x.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_01_2x.png 2x" alt="logo_not_found">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_02_1x.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_02_2x.png 2x" alt="logo_not_found">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 order-last">
                        <ul class="header_action_btns ul_li_right clearfix">


                            <li>
                                <button type="button" class="mobile_sidebar_btn"><i class="fal fa-align-right"></i></button>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <nav class="main_menu clearfix">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary_menu', // The menu location you want to display
                                'container' => 'nav',
                                'container_class' => 'main_menu clearfix',
                                'menu_class' => 'ul_li_center main_menu_ul clearfix',
                            ));
                        ?>
                        </nav>
                    </div>

                    
                </div>
            </div>
        </div>

        <div id="collapse_search_body" class="collapse_search_body collapse">
            <div class="search_body">
                <div class="container">
                    <form action="#">
                        <div class="form_item">
                            <input type="search" name="search" placeholder="Type here...">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- header_section - end
		================================================== -->


    <!-- main body - start
		================================================== -->
    <main>


        <!-- mobile menu - start
			================================================== -->
        <div class="sidebar-menu-wrapper">
            <div class="mobile_sidebar_menu">
                <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

                <div class="about_content mb_60">
                    <div class="brand_logo mb_15">
                        <a href="<?php get_home_url();?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_01_1x.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo_01_2x.png 2x" alt="logo_not_found">
                        </a>
                    </div>
                    <p class="mb-0">
                        Nullam id dolor auctor, dignissim magna eu, mattis ante. Pellentesque tincidunt, elit a facilisis efficitur, nunc nisi scelerisque enim, rhoncus malesuada est velit a nulla. Cras porta mi vitae dolor tristique euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                </div>

                <div class="menu_list mb_60 clearfix">
                    <h3 class="title_text text-white">Menu List</h3>


                    <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary_menu', // The menu location you want to display
                                'container' => 'nav',
                                'container_class' => 'main_menu clearfix',
                                'menu_class' => 'ul_li_center main_menu_ul clearfix',
                            ));
                        ?>

                </div>

                <div class="booking_car_form">
                    <h3 class="title_text text-white mb-2">Book A Car</h3>
                    <p class="mb_15">
                        Nullam id dolor auctor, dignissim magna eu, mattis ante. Pellentesque tincidunt, elit a facilisis efficitur.
                    </p>
                    <form action="#">
                        <div class="form_item">
                            <h4 class="input_title text-white">Pick Up Location</h4>
                            <div class="position-relative">
                                <input id="location_one" type="text" name="location" placeholder="City, State or Airport Code">
                                <label for="location_one" class="input_icon"><i class="fas fa-map-marker-alt"></i></label>
                            </div>
                        </div>
                        <div class="form_item">
                            <h4 class="input_title text-white">Pick A Date</h4>
                            <input type="date" name="date">
                        </div>
                        <button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Book A Car <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                    </form>
                </div>

            </div>
            <div class="overlay"></div>
        </div>
        <!-- mobile menu - end
			================================================== -->