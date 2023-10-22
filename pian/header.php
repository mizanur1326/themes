<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- basic -->
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title><?php bloginfo("title") ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- header section start -->
  <div class="header_section padding_bottom_0">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- <a class="nav-item nav-link active" href="index.html">Home</a>
          <a class="nav-item nav-link" href="about.html">About</a>
          <a class="nav-item nav-link" href="products.html">Our Product</a>
          <a class="nav-item nav-link" href="blog.html">Blog</a>
          <a class="nav-item nav-link" href="services.html">Services</a>
          <a class="nav-item nav-link" href="contact.html">Contact Us</a>
          <a class="nav-item nav-link" href="contact.html">Login</a> -->
          <?php
      wp_nav_menu(array(
        'theme_location' => 'primary_menu', // The menu location you want to display
        'container' => 'nav',
        'container_class' => 'navbar navbar-expand-lg navbar-light bg-light',
        'menu_class' => 'collapse navbar-collapse',
      ));
      ?>
        </div>
      </nav>
    </div>
  </div>

  <!-- header section end -->