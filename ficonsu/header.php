<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" <?php language_attributes();?>><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="<?php bloginfo('charset')?>">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?php bloginfo('title')?></title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri()?>">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/apple-touch-icon-158-precomposed.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body <?php body_class("header-fixed sidebar-right site-layout-full-width header-style-1 has-topbar topbar-style-1 menu-has-search menu-has-cart blog-archive page no-sidebar  header-style-2  topbar-style-2");?>>

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">
    <!-- Header Wrap -->
    <div id="site-header-wrap">
        <!-- Top Bar -->        
        <div id="top-bar">
            <div id="top-bar-inner" class="themesflat-container">
                <div class="top-bar-inner-wrap">
                    <div class="top-bar-content">
                        <span class="address content"><a href="#">2835 Vidor Ave, San Antonio, TX 78216</a></span>
                        <span class="phone content"><a href="#">Phone +1 (100) 380-790</a></span>
                    </div><!-- /.top-bar-content -->

                    <div class="top-bar-content-right">
                        <div class="top-bar-socials">
                            <div class="inner">
                                <span class="texts">Follow Us:</span>
                                <span class="icons">
                                    <a href="#" title="Facebook">
                                        <span class="finance-icon-Facebook" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" title="Twitter">
                                        <span class="finance-icon-Twitter" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" title="Linkedin">
                                        <span class="flat-icon-linkedin" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" title="Instagram">
                                        <span class="flat-icon-instagram" aria-hidden="true"></span>
                                    </a>
                                </span>
                            </div>
                        </div><!-- /.top-bar-socials -->
                    </div><!-- .top-bar-content-right -->
                </div>
            </div>
        </div><!-- /#top-bar -->

        <!-- Header -->
        <header id="site-header">
            <div id="site-header-inner" class="themesflat-container">
                <div class="wrap-inner">
                    <div id="site-logo" class="clearfix">
                        <div id="site-logo-inner">
                            <a href="<?php echo get_home_url();?>" title="Finance" rel="home" class="main-logo"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" width="184" height="40" alt="Finance" data-retina="assets/img/logo@2x.png" data-width="184" data-height="40"></a>
                        </div>
                    </div><!-- /#site-logo -->

                    <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                    <!-- <nav id="main-nav" class="main-nav">
                        <ul id="menu-primary-menu" class="menu">
                            <li class="menu-item current-menu-item menu-item-has-children"><a href="home.html">HOME</a>
                                <ul class="sub-menu">
                                    <li class="menu-item current-item"><a href="home.html">Home 1</a></li>
                                    <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                    <li class="menu-item"><a href="home-3.html">Home 3</a></li>
                                    <li class="menu-item"><a href="home-4.html">Home 4</a></li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children"><a href="#">FEATURES</a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-has-children"><a href="home.html">Headers</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="home.html">Header Style 1</a></li>
                                            <li class="menu-item"><a href="home-2.html">Header Style 2</a></li>
                                            <li class="menu-item"><a href="home-3.html">Header Style 3</a></li>
                                            <li class="menu-item"><a href="home-4.html">Header Style 4</a></li>
                                            <li class="menu-item"><a href="home-header-style5.html">Header Style 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="#">Hero SlideShow</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="home-heroslider-fullheight-textscroll.html">Full Height - Text Scroll</a></li>
                                            <li class="menu-item"><a href="home-heroslider-fullheight-texttype.html">Full Height - Text Typed</a></li>
                                            <li class="menu-item"><a href="home-heroslider-fullheight-textrotate.html">Full Height - Text Rotate</a></li>
                                            <li class="menu-item"><a href="home-heroslider-fixedheight-textscroll.html">Custom Height - Scroll </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href="home.html">Revolution Slider</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="home-revo-fullscreen.html">Full Screen</a></li>
                                            <li class="menu-item"><a href="home.html">Half Size</a></li>
                                            <li class="menu-item"><a href="home-revo-custom-height.html">Custom Height</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="menu-item"><a href="element-financeicons.html">100 Finance Icons</a></li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children"><a href="#">PAGES</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="page-about.html">About Us</a></li>
                                    <li class="menu-item"><a href="page-services.html">Our Services</a></li>
                                    <li class="menu-item"><a href="page-contact.html">Contact Us</a></li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children"><a href="page-blog.html">BLOG</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="page-blog.html">blog</a></li>
                                    <li class="menu-item"><a href="page-blog-single.html">blog Single</a></li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children"><a href="element-project-post.html">PORTFOLIO</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="element-project-post.html">Unlimited Portfolio</a></li>
                                    <li class="menu-item"><a href="page-project-single-1.html">Project Single 1</a></li>
                                    <li class="menu-item"><a href="page-project-single-2.html">Project Single 2</a></li>
                                </ul>
                            </li>
                            <li class="megamenu col-4 menu-item menu-item-has-children"><a href="#">ELEMENTS</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a># 01</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="element-buttons.html">Buttons</a></li>
                                                <li class="menu-item"><a href="element-counter.html">Counter</a></li>
                                                <li class="menu-item"><a href="element-list.html">Lists</a></li>
                                                <li class="menu-item"><a href="element-line-divider.html">Line and Divider</a></li>
                                                <li class="menu-item"><a href="element-icons.html">Icons</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a># 02</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="element-icon-box.html">Icon Box</a></li>
                                                <li class="menu-item"><a href="element-accordion.html">Accordions</a></li>
                                                <li class="menu-item"><a href="element-progress-bar.html">Progress Bar</a></li>
                                                <li class="menu-item"><a href="element-testimonials.html">Testimonials</a></li>
                                                <li class="menu-item"><a href="element-tabs.html">Tabs</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item menu-item-has-children"><a># 03</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="element-image-box.html">Image Box</a></li>
                                                <li class="menu-item"><a href="element-blog-post.html">Blog Posts</a></li>
                                                <li class="menu-item"><a href="element-partner-post.html">Partner Posts</a></li>
                                                <li class="menu-item"><a href="element-member-post.html">Member Posts</a></li>
                                                <li class="menu-item"><a href="element-gallery-post.html">Gallery Posts</a></li>
                                            </ul>
                                        </li>

                                        <li class="menu-item menu-item-has-children"><a># 04</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="element-pricing-table.html">Pricing Table</a></li>
                                                <li class="menu-item"><a href="element-action-box.html">Action Box</a></li>
                                                <li class="menu-item"><a href="element-google-map.html">Google Map</a></li>
                                                <li class="menu-item"><a href="element-contact-form.html">Contact Form</a></li>
                                                <li class="menu-item"><a href="element-carousel-box.html">Carousel Box</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                        </ul>
                    </nav>/#main-nav -->

                    <?php 
                        wp_nav_menu( array(
                        'menu'              => "Primary Menu",
                        'menu_class'        => "menu-item",
                        'menu_id'           => "menu-primary-menu", 
                        'container'         => "nav", 
                        'container_class'   => "main-nav", 
                        'container_id'      => "main-nav", 
                        'theme_location'    => "Primary Menu"                        
                        ) );
                    ?>

                    <ul class="nav-extend active">
                        <li class="ext c">
                            <a class="cart-info" href="#" title="View your shopping cart">6 items <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>260.00</span></a>
                        </li>
                    </ul><!-- /.nav-extend -->

                    <div class="nav-top-cart-wrapper">
                        <a class="nav-cart-trigger" href="page-shop-cart.html">
                            <span class="cart-icon finance-icon-shopping-cart">
                                <span class="shopping-cart-items-count">3</span>
                            </span>
                        </a>

                        <div class="nav-shop-cart">
                            <div class="widget_shopping_cart_content">
                                <div class="woocommerce-min-cart-wrap">
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove"><span class="fa fa-close"></span></a><a href="#">
                                                <img width="150" height="150" src="<?php echo get_template_directory_uri()?>/assets/img/shop/shop-item-150x150.jpg" alt="Image">Advance Blue Oil Cans
                                            </a>
                                                                    
                                            <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>65.00</span></span>
                                        </li>

                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove"><span class="fa fa-close"></span></a><a href="#">
                                                <img width="150" height="150" src="<?php echo get_template_directory_uri()?>/assets/img/shop/shop-item-150x150.jpg" alt="Image">Simple Blue Oil Cans
                                            </a>
                                                                    
                                            <span class="quantity">3 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>35.00</span></span>
                                        </li>

                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                            <a href="#" class="remove"><span class="fa fa-close"></span></a><a href="#">
                                                <img width="150" height="150" src="<?php echo get_template_directory_uri()?>/assets/img/shop/shop-item-150x150.jpg" alt="Image">Premium Blue Oil Cans
                                            </a>
                                                                    
                                            <span class="quantity">2 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>45.00</span></span>
                                        </li>
                                    </ul>

                                    <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>260.00</span></p>
                                    
                                    <p class="woocommerce-mini-cart__buttons buttons"><a href="#" class="button wc-forward">View cart</a><a href="#" class="button checkout wc-forward">Checkout</a></p>
                                </div><!-- /.widget_shopping_cart_content -->
                            </div>
                        </div><!-- /.nav-shop-cart -->
                    </div><!-- /.nav-top-cart-wrapper -->

                    <div id="header-search">
                        <a class="header-search-icon" href="#"><span class="search-icon finance-icon-search"></span></a>
                        <form role="search" method="get" class="header-search-form" action="#">
                            <label class="screen-reader-text">Search for:</label>
                            <input type="text" value="" name="s" class="header-search-field" placeholder="Type and hit enter...">
                            <button type="submit" class="header-search-submit" title="Search">Search</button>
                        </form>
                    </div><!-- /#header-search -->
                </div>
            </div><!-- /#site-header-inner -->
        </header><!-- /#site-header -->
    </div><!-- #site-header-wrap -->