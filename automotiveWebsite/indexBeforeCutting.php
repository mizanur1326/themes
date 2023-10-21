<!DOCTYPE html>
<html <?php language_attributes();?>>

	<head>

		<meta charset="<?php bloginfo('charset')?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title><?php bloginfo("title")?></title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/images/logo/favourite_icon.png">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">

		<!-- icon - css include -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome.css">

		<!-- animation - css include -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/aos.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css">

		<!-- popup - css include -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.css">

		<!-- select options - css include -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/nice-select.css">

		<!-- pricing range - css include -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/jquery-ui.css">

		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">

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
								<a href="index.html">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo_01_1x.png" srcset="assets/images/logo/logo_01_2x.png 2x" alt="logo_not_found">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo_02_1x.png" srcset="assets/images/logo/logo_02_2x.png 2x" alt="logo_not_found">
								</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-6 order-last">
							<ul class="header_action_btns ul_li_right clearfix">
								<li>
									<button type="button" class="search_btn" data-toggle="collapse" data-target="#collapse_search_body" aria-expanded="false" aria-controls="collapse_search_body">
										<i class="fal fa-search"></i>
									</button>
								</li>
								<li class="dropdown">
									<button type="button" class="cart_btn" id="cart_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fal fa-shopping-cart"></i>
										<span class="cart_counter bg_default_red">3</span>
									</button>
									<div class="cart_dropdown rotors_dropdown dropdown-menu" aria-labelledby="cart_dropdown">
										<h4 class="wrap_title">Cart Items: (3)</h4>
										<ul class="cart_items_list ul_li_block clearfix">
											<li>
												<div class="item_image">
													<img src="<?php echo get_template_directory_uri();?>/assets/images/cart/img_2.png" alt="image_not_found">
												</div>
												<div class="item_content">
													<h4 class="item_title">Digital Infrared Thermometer</h4>
													<span class="item_price">$39.50</span>
												</div>
												<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
											</li>

											<li>
												<div class="item_image">
													<img src="<?php echo get_template_directory_uri();?>/assets/images/cart/img_2.png" alt="image_not_found">
												</div>
												<div class="item_content">
													<h4 class="item_title">Digital Infrared Thermometer</h4>
													<span class="item_price">$39.50</span>
												</div>
												<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
											</li>

											<li>
												<div class="item_image">
													<img src="<?php echo get_template_directory_uri();?>/assets/images/cart/img_2.png" alt="image_not_found">
												</div>
												<div class="item_content">
													<h4 class="item_title">Digital Infrared Thermometer</h4>
													<span class="item_price">$39.50</span>
												</div>
												<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
											</li>
										</ul>
										<ul class="btns_group ul_li_block clearfix">
											<li><a href="cart.html" class="custom_btn bg_default_red text-uppercase">View Cart <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></a></li>
											<li><a href="#!" class="custom_btn bg_default_black text-uppercase">Checkout <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></a></li>
										</ul>
									</div>
								</li>
								<li class="dropdown">
									<button type="button" class="user_btn" id="user_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fal fa-user"></i>
									</button>
									<div class="user_dropdown rotors_dropdown dropdown-menu clearfix" aria-labelledby="user_dropdown">
										<div class="profile_info clearfix">
											<a href="#!" class="user_thumbnail">
												<img src="<?php echo get_template_directory_uri();?>/assets/images/meta/img_01.png" alt="thumbnail_not_found">
											</a>
											<div class="user_content">
												<h4 class="user_name"><a href="#!">Rakibul Hassan</a></h4>
												<span class="user_title">Seller</span>
											</div>
										</div>
										<ul class="ul_li_block clearfix">
											<li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
											<li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
											<li><a href="#!"><i class="fal fa-sign-out"></i> Logout</a></li>
										</ul>
									</div>
								</li>
								<li>
									<button type="button" class="mobile_sidebar_btn"><i class="fal fa-align-right"></i></button>
								</li>
							</ul>
						</div>

						<div class="col-lg-6 col-md-12">
							<nav class="main_menu clearfix">
								<ul class="ul_li_center clearfix">
									<li class="active has_child">
										<a href="#!">Home</a>
										<ul class="submenu">
											<li><a href="index_1.html">Home Page V.1</a></li>
											<li><a href="index_2.html">Home Page V.2</a></li>
										</ul>
									</li>
									<li><a href="gallery.html">Our Cars</a></li>
									<li><a href="review.html">Reviews</a></li>
									<li><a href="about.html">About</a></li>
									<li class="has_child">
										<a href="#!">Pages</a>
										<ul class="submenu">
											<li><a href="service.html">Our Service</a></li>
											<li><a href="gallery.html">Car Gallery</a></li>
											<li><a href="account.html">My Account</a></li>
											<li><a href="reservation.html">Reservation</a></li>
											<li class="has_child">
												<a href="#!">Blogs</a>
												<ul class="submenu">
													<li><a href="blog.html">Blog</a></li>
													<li><a href="blog_details.html">Blog Details</a></li>
												</ul>
											</li>
											<li class="has_child">
												<a href="#!">Our Cars</a>
												<ul class="submenu">
													<li><a href="car.html">Cars</a></li>
													<li><a href="car_details.html">Car Details</a></li>
												</ul>
											</li>
											<li><a href="cart.html">Shopping Cart</a></li>
											<li><a href="faq.html">F.A.Q.</a></li>
											<li><a href="login.html">Login</a></li>
										</ul>
									</li>
									<li class="has_child">
										<a href="#!">Contact Us</a>
										<ul class="submenu">
											<li><a href="contact.html">Contact Default</a></li>
											<li><a href="contact_wordwide.html">Contact Wordwide</a></li>
										</ul>
									</li>
								</ul>
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
		<main class="mt-0">


			<!-- mobile menu - start
			================================================== -->
			<div class="sidebar-menu-wrapper">
				<div class="mobile_sidebar_menu">
					<button type="button" class="close_btn"><i class="fal fa-times"></i></button>

					<div class="about_content mb_60">
						<div class="brand_logo mb_15">
							<a href="index.html">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo_01_1x.png" srcset="assets/images/logo/logo_01_2x.png 2x" alt="logo_not_found">
							</a>
						</div>
						<p class="mb-0">
							Nullam id dolor auctor, dignissim magna eu, mattis ante. Pellentesque tincidunt, elit a facilisis efficitur, nunc nisi scelerisque enim, rhoncus malesuada est velit a nulla. Cras porta mi vitae dolor tristique euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit
						</p>
					</div>

					<div class="menu_list mb_60 clearfix">
						<h3 class="title_text text-white">Menu List</h3>
						<ul class="ul_li_block clearfix">
							<li class="active dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
								<ul class="dropdown-menu">
									<li><a href="index_1.html">Home Page V.1</a></li>
									<li><a href="index_2.html">Home Page V.2</a></li>
								</ul>
							</li>
							<li><a href="gallery.html">Our Cars</a></li>
							<li><a href="review.html">Reviews</a></li>
							<li><a href="about.html">About</a></li>
							<li class="dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li><a href="service.html">Our Service</a></li>
									<li><a href="gallery.html">Car Gallery</a></li>
									<li><a href="account.html">My Account</a></li>
									<li><a href="reservation.html">Reservation</a></li>
									<li class="dropdown">
										<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
										<ul class="dropdown-menu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog_details.html">Blog Details</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Cars</a>
										<ul class="dropdown-menu">
											<li><a href="car.html">Cars</a></li>
											<li><a href="car_details.html">Car Details</a></li>
										</ul>
									</li>
									<li><a href="cart.html">Shopping Cart</a></li>
									<li><a href="faq.html">F.A.Q.</a></li>
									<li><a href="login.html">Login</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
								<ul class="dropdown-menu">
									<li><a href="contact.html">Contact Default</a></li>
									<li><a href="contact_wordwide.html">Contact Wordwide</a></li>
								</ul>
							</li>
						</ul>
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
							<button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Book A Car <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></button>
						</form>
					</div>

				</div>
				<div class="overlay"></div>
			</div>
			<!-- mobile menu - end
			================================================== -->


			<!-- slider_section - start
			================================================== -->
			<section class="slider_section text-white text-center position-relative clearfix">
				<div class="main_slider clearfix">
					<div class="item has_overlay d-flex align-items-center" data-bg-image="assets/images/backgrounds/bg_02.jpg">
						<div class="overlay"></div>
						<div class="container">
							
							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="slider_content text-center">
										<h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">Lamborghini Aventador LP700-4</h3>
										<p data-animation="fadeInUp" data-delay=".5s">
											6.6L V8 32V DDI OHV Turbo Diesel, 5-Speed Automatic, Fuel Type: Diesel, Color: Black
										</p>
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
											<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Book Now <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item has_overlay d-flex align-items-center" data-bg-image="assets/images/backgrounds/bg_02.jpg">
						<div class="overlay"></div>
						<div class="container">
							
							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="slider_content text-center">
										<h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">Lamborghini Aventador LP700-4</h3>
										<p data-animation="fadeInUp" data-delay=".5s">
											6.6L V8 32V DDI OHV Turbo Diesel, 5-Speed Automatic, Fuel Type: Diesel, Color: Black
										</p>
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
											<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Book Now <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="item has_overlay d-flex align-items-center" data-bg-image="assets/images/backgrounds/bg_02.jpg">
						<div class="overlay"></div>
						<div class="container">
							
							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="slider_content text-center">
										<h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">Lamborghini Aventador LP700-4</h3>
										<p data-animation="fadeInUp" data-delay=".5s">
											6.6L V8 32V DDI OHV Turbo Diesel, 5-Speed Automatic, Fuel Type: Diesel, Color: Black
										</p>
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
											<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Book Now <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="carousel_nav clearfix">
					<button type="button" class="main_left_arrow"><i class="fal fa-chevron-left"></i></button>
					<button type="button" class="main_right_arrow"><i class="fal fa-chevron-right"></i></button>
				</div>
			</section>
			<!-- slider_section - end
			================================================== -->


			<!-- search_section - start
			================================================== -->
			<section class="search_section clearfix">
				<div class="container">
					<div class="advance_search_form2" data-bg-color="#161829" data-aos="fade-up" data-aos-delay="100">
						<form action="#">
							<div class="row align-items-end">
								<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
									<div class="form_item">
										<h4 class="input_title text-white">Pick Up Location</h4>
										<div class="position-relative">
											<input id="location_two" type="text" name="location" placeholder="City, State or Airport Code">
											<label for="location_two" class="input_icon"><i class="fas fa-map-marker-alt"></i></label>
										</div>
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
									<div class="form_item">
										<h4 class="input_title text-white">Pick A Date</h4>
										<input type="date" name="date">
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
									<div class="price-range-area clearfix">
										<h4 class="input_title text-white">Price</h4>
										<div id="slider-range" class="slider-range clearfix"></div>
										<input class="price-text" type="text" id="amount" readonly>
									</div>
								</div>

								<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
									<button type="submit" class="custom_btn bg_default_red text-uppercase">Find A Car <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			<!-- search_section - end
			================================================== -->


			<!-- feature_section - start
			================================================== -->
			<section class="feature_section sec_ptb_150 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
							<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
								<h2 class="title_text mb_15">
									<span>Featured Vehicles</span>
								</h2>
								<p class="mb-0">
									Mauris cursus quis lorem sed cursus. Aenean aliquam pellentesque magna, ut dictum ex pellentesque
								</p>
							</div>
						</div>
					</div>

					<ul class="button-group filters-button-group ul_li_center mb_30 clearfix" data-aos="fade-up" data-aos-delay="300">
						<li><button class="button active" data-filter="*">All</button></li>
						<li><button class="button" data-filter=".sedan">Sedan</button></li>
						<li><button class="button" data-filter=".sports">Sports</button></li>
						<li><button class="button" data-filter=".luxury">Luxury</button></li>
					</ul>

					<div class="feature_vehicle_filter element-grid clearfix">
						<div class="element-item sedan " data-category="sedan">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
								<h3 class="item_title mb-0">
									<a href="#!">
										2015 Chevrolet Corvette Stingray Z51
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_01.jpg" alt="image_not_found">
									</a>
									<span class="item_price bg_default_blue">$230/Day</span>
								</div>
								<ul class="info_list ul_li_center clearfix">
									<li>Sports</li>
									<li>Auto</li>
									<li>2 Passengers</li>
									<li>Gasoline</li>
								</ul>
							</div>
						</div>

						<div class="element-item sports " data-category="sports">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="300">
								<h3 class="item_title mb-0">
									<a href="#!">
										2019 Chevrolet Corvette Stingray Red
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_02.jpg" alt="image_not_found">
									</a>
									<span class="item_price bg_default_blue">$230/Day</span>
								</div>
								<ul class="info_list ul_li_center clearfix">
									<li>Sports</li>
									<li>Auto</li>
									<li>2 Passengers</li>
									<li>Hybrid</li>
								</ul>
							</div>
						</div>

						<div class="element-item luxury " data-category="luxury">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="500">
								<h3 class="item_title mb-0">
									<a href="#!">
										2015 Chevrolet Corvette Stingray Z51
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_03.jpg" alt="image_not_found">
									</a>
									<span class="item_price bg_default_blue">$120/Day</span>
								</div>
								<ul class="info_list ul_li_center clearfix">
									<li>Sports</li>
									<li>Auto</li>
									<li>2 Passengers</li>
									<li>Gasoline</li>
								</ul>
							</div>
						</div>

						<div class="element-item sedan " data-category="sedan">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
								<h3 class="item_title mb-0">
									<a href="#!">
										2020 Audi New Generation P00234
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_04.jpg" alt="image_not_found">
									</a>
									<span class="item_price bg_default_blue">$230/Day</span>
								</div>
								<ul class="info_list ul_li_center clearfix">
									<li>Sports</li>
									<li>Auto</li>
									<li>2 Passengers</li>
									<li>Electro</li>
								</ul>
							</div>
						</div>

						<div class="element-item sports " data-category="sports">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="300">
								<h3 class="item_title mb-0">
									<a href="#!">
										2015 Chevrolet Corvette Stingray Z51
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_05.jpg" alt="image_not_found">
									</a>
									<span class="item_price bg_default_blue">$160/Day</span>
								</div>
								<ul class="info_list ul_li_center clearfix">
									<li>Sports</li>
									<li>Auto</li>
									<li>2 Passengers</li>
									<li>Gasoline</li>
								</ul>
							</div>
						</div>

						<div class="element-item luxury " data-category="luxury">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="500">
								<h3 class="item_title mb-0">
									<a href="#!">
										2015 Chevrolet Corvette Stingray Z51
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_06.jpg" alt="image_not_found">
									</a>
									<span class="item_price bg_default_blue">$230/Day</span>
								</div>
								<ul class="info_list ul_li_center clearfix">
									<li>Sports</li>
									<li>Auto</li>
									<li>2 Passengers</li>
									<li>Hybrid</li>
								</ul>
							</div>
						</div>	
					</div>

					<div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="100">
						<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Book A Car <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></a>
					</div>

				</div>
			</section>
			<!-- feature_section - end
			================================================== -->


			<!-- service_section - start
			================================================== -->
			<section class="service_section sec_ptb_150 pb-0 mb_100 text-white clearfix" data-bg-gradient="linear-gradient(0deg, #0C0C0F, #292D45)">
				<div class="container">

					<div class="section_title mb_30 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text text-white mb-0">
							<span>Why Usd</span>
						</h2>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
								<div class="item_icon">
									<i class="far fa-shield-alt"></i>
								</div>
								<h3 class="item_title text-white">Secured Payment Guarantee</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
								<div class="item_icon">
									<i class="fal fa-headset"></i>
								</div>
								<h3 class="item_title text-white">Help Center & Support 24/7</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="500">
								<div class="item_icon">
									<i class="far fa-shield-alt"></i>
								</div>
								<h3 class="item_title text-white">Booking any Class Vehicles</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
								<div class="item_icon">
									<i class="fas fa-briefcase"></i>
								</div>
								<h3 class="item_title text-white">Corporate and Business Services</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
								<div class="item_icon">
									<i class="fas fa-user-plus"></i>
								</div>
								<h3 class="item_title text-white">Car Sharing Options</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="500">
								<div class="item_icon">
									<i class="fas fa-gem"></i>
								</div>
								<h3 class="item_title text-white">Limousine and Chauffeur Hire</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>
					</div>

					<div class="feature_carousel_wrap position-relative clearfix">
						<div class="slideshow1_slider" data-aos="fade-up" data-aos-delay="100">
							<div class="item">
								<div class="feature_fullimage">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_07.jpg" alt="image_not_found">
									<div class="item_content text-white">
										<span class="item_price bg_default_blue">$670/Day</span>
										<h3 class="item_title text-white">2017 Chevrolet Corvette C7 Stingray  </h3>
										<a class="text_btn text-uppercase" href="#!"><span>Kook A Car</span> <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_02.png" alt="icon_not_found"></a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="feature_fullimage">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_07.jpg" alt="image_not_found">
									<div class="item_content text-white">
										<span class="item_price bg_default_blue">$670/Day</span>
										<h3 class="item_title text-white">2017 Chevrolet Corvette C7 Stingray  </h3>
										<a class="text_btn text-uppercase" href="#!"><span>Kook A Car</span> <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_02.png" alt="icon_not_found"></a>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="feature_fullimage">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/feature/img_07.jpg" alt="image_not_found">
									<div class="item_content text-white">
										<span class="item_price bg_default_blue">$670/Day</span>
										<h3 class="item_title text-white">2017 Chevrolet Corvette C7 Stingray  </h3>
										<a class="text_btn text-uppercase" href="#!"><span>Kook A Car</span> <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_02.png" alt="icon_not_found"></a>
									</div>
								</div>
							</div>
						</div>

						<div class="carousel_nav">
							<button type="button" class="s1_left_arrow"><i class="fal fa-angle-left"></i></button>
							<button type="button" class="s1_right_arrow"><i class="fal fa-angle-right"></i></button>
						</div>
					</div>

				</div>
			</section>
			<!-- service_section - end
			================================================== -->


			<!-- blog_section - start
			================================================== -->
			<section class="blog_section sec_ptb_150 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-center">

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="blog_wrap">
								<h3 class="wrap_title mb-0" data-aos="fade-up" data-aos-delay="100">From the Blog:</h3>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="blog_child" data-aos="fade-up" data-aos-delay="300">
											<a class="item_image" href="blog_details.html">
												<img src="<?php echo get_template_directory_uri();?>/assets/images/blog/child_01.jpg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h4 class="item_title mb-0">
													<a href="blog_details.html">
														Purus in massa tempor nec…
													</a>
												</h4>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="blog_child" data-aos="fade-up" data-aos-delay="500">
											<a class="item_image" href="blog_details.html">
												<img src="<?php echo get_template_directory_uri();?>/assets/images/blog/child_02.jpg" alt="image_not_found">
											</a>
											<div class="item_content">
												<h4 class="item_title mb-0">
													<a href="blog_details.html">
														Vestibulum lobortis aliquam nisl eget
													</a>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="newsletter_form1">
								<h3 class="form_title mb_30" data-aos="fade-up" data-aos-delay="100">Subscribe:</h3>
								<p class="mb_30" data-aos="fade-up" data-aos-delay="300">
									Phasellus efficitur dolor sit amet odio scelerisque, et luctus eros lobortis
								</p>
								<ul class="primary_social_links ul_li mb_30 clearfix" data-aos="fade-up" data-aos-delay="500">
									<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="row" data-aos="fade-up" data-aos-delay="700">
									<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
										<form action="#">
											<div class="form_item mb-0">
												<input type="email" name="email" placeholder="Enter your e-mail">
											</div>
										</form>
									</div>
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<button type="submit" class="custom_btn bg_default_red text-uppercase w-100 d-block">Book A Car <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/icon_01.png" alt="icon_not_found"></button>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- blog_section - end
			================================================== -->


			<hr class="m-0" data-aos="fade-up" data-aos-delay="100">


			<!-- testimonial_section - start
			================================================== -->
			<section class="testimonial_section sec_ptb_150 clearfix">
				<div class="container">

					<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text mb-0">
							<span>What Clients Say about Us</span>
						</h2>
					</div>

					<div class="testimonial_carousel_wrap position-relative">
						<div class="testimonial_carousel" data-slick='{"dots": false}' data-aos="fade-up" data-aos-delay="300">
							<div class="item">
								<div class="testimonial_item2 text-center">
									<p class="mb_30">
										“Ut id lobortis eros, sed finibus dui. Cras eget purus lacus. Suspendisse sodales massa quis turpis ultrices ultricies. Cras euismod eros at vehicula sagittis. Suspendisse condimentum tortor nec enim pellentesque feugiat. Nulla tempor urna vitae sapien iaculis, auctor condimentum enim auctor”
									</p>
									<div class="admin_info">
										<div class="admin_image">
											<img src="<?php echo get_template_directory_uri();?>/assets/images/meta/img_01.png" alt="image_not_found">
										</div>
										<h4 class="admin_name">Marianna Frazoni</h4>
										<ul class="rating_star ul_li_center clearfix">
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="testimonial_item2 text-center">
									<p class="mb_30">
										“Ut id lobortis eros, sed finibus dui. Cras eget purus lacus. Suspendisse sodales massa quis turpis ultrices ultricies. Cras euismod eros at vehicula sagittis. Suspendisse condimentum tortor nec enim pellentesque feugiat. Nulla tempor urna vitae sapien iaculis, auctor condimentum enim auctor”
									</p>
									<div class="admin_info">
										<div class="admin_image">
											<img src="<?php echo get_template_directory_uri();?>/assets/images/meta/img_01.png" alt="image_not_found">
										</div>
										<h4 class="admin_name">Marianna Frazoni</h4>
										<ul class="rating_star ul_li_center clearfix">
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="testimonial_item2 text-center">
									<p class="mb_30">
										“Ut id lobortis eros, sed finibus dui. Cras eget purus lacus. Suspendisse sodales massa quis turpis ultrices ultricies. Cras euismod eros at vehicula sagittis. Suspendisse condimentum tortor nec enim pellentesque feugiat. Nulla tempor urna vitae sapien iaculis, auctor condimentum enim auctor”
									</p>
									<div class="admin_info">
										<div class="admin_image">
											<img src="<?php echo get_template_directory_uri();?>/assets/images/meta/img_01.png" alt="image_not_found">
										</div>
										<h4 class="admin_name">Marianna Frazoni</h4>
										<ul class="rating_star ul_li_center clearfix">
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li class="active"><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="carousel_nav position_ycenter">
							<button type="button" class="ts_left_arrow"><i class="fal fa-angle-left"></i></button>
							<button type="button" class="ts_right_arrow"><i class="fal fa-angle-right"></i></button>
						</div>
					</div>
					
				</div>
			</section>
			<!-- testimonial_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->


		<!-- footer_section - start
		================================================== -->
		<footer class="footer_section clearfix">
			<div class="footer_widget_area sec_ptb_100 clearfix" data-bg-color="#F2F2F2">
				<div class="container">
					<div class="row justify-content-lg-between">
						<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
							<div class="footer_about" data-aos="fade-up" data-aos-delay="100">
								<div class="brand_logo mb_30">
									<a href="index.html">
										<img src="<?php echo get_template_directory_uri();?>/assets/images/logo/logo_02_1x.png" srcset="assets/images/logo/logo_02_2x.png 2x" alt="logo_not_found">
									</a>
								</div>
								<p class="mb_15">
									Cras sit amet mi non orci pretium consectetur. Donec iaculis ante ac sollicitudin luctus. Phasellus ut lacus lacus. Phasellus sagittis ex id tortor tincidunt luctus. Donec consectetur consequat bibendum
								</p>
								<div class="footer_useful_links mb_30">
									<ul class="ul_li_block clearfix">
										<li><a href="#!"><i class="fal fa-angle-right"></i> Rental Information</a></li>
										<li><a href="#!"><i class="fal fa-angle-right"></i> F.A.Q.</a></li>
									</ul>
								</div>
								<div class="form_item mb-0">
									<form action="#">
										<input id="footer_search" type="search" name="search" placeholder="Search">
										<label for="footer_search" class="input_icon"><i class="fal fa-search"></i></label>
									</form>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-12 col-sm-12">
							<div class="footer_contact_info" data-aos="fade-up" data-aos-delay="200">
								<h3 class="footer_widget_title">Contact Us:</h3>
								<ul class="ul_li_block clearfix">
									<li>
										<strong><i class="fas fa-map-marker-alt"></i> Main Office Address:</strong>
										<p class="mb-0">
											Unit 9, Manor Industrial Estate, Lower Wash Lane, Warrington, WA4
										</p>
									</li>
									<li><i class="fas fa-clock"></i> 8:00am-9:30pm</li>
									<li><i class="far fa-angle-right"></i> Other Office Locations</li>
									<li><i class="fas fa-envelope"></i> <strong>rotorseml@eml.fr</strong></li>
									<li><i class="fas fa-phone"></i> <strong>+880 1680 6361 89</strong></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
							<div class="footer_useful_links" data-aos="fade-up" data-aos-delay="300">
								<h3 class="footer_widget_title">Information:</h3>
								<ul class="ul_li_block clearfix">
									<li><a href="#!"><i class="fal fa-angle-right"></i> Find a Car for Rent in the Nearest Location</a></li>
									<li><a href="#!"><i class="fal fa-angle-right"></i> Cars Catalog</a></li>
									<li><a href="#!"><i class="fal fa-angle-right"></i> F.A.Q.</a></li>
									<li><a href="#!"><i class="fal fa-angle-right"></i> About Us</a></li>
									<li><a href="#!"><i class="fal fa-angle-right"></i> Contact Us</a></li>
									<li><a href="#!"><i class="fal fa-angle-right"></i> Help Center</a></li>
									<li><a href="#!"><i class="fal fa-angle-right"></i> Privacy Police</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer_bottom text-white clearfix" data-bg-color="#000C21">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<p class="copyright_text mb-0">Copyright © 2020. Rotors by <a class="author_links text-white" href="#!">Merkulove</a></p>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
		</footer>
		<!-- footer_section - end
		================================================== -->

		
		<!-- fraimwork - jquery include -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.5.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>

		<!-- animation - jquery include -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/aos.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/assets/js/parallaxie.js"></script>

		<!-- carousel - jquery include -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>

		<!-- popup - jquery include -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/magnific-popup.min.js"></script>

		<!-- select ontions - jquery include -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/nice-select.min.js"></script>

		<!-- isotope - jquery include -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/isotope.pkgd.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/masonry.pkgd.min.js"></script>

		<!-- google map - jquery include -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/gmaps.min.js"></script>

		<!-- pricing range - jquery include -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-ui.js"></script>

		<!-- counter - jquery include -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/waypoint.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/assets/js/counterup.min.js"></script>

		<!-- contact form - jquery include -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/validate.js"></script>

		<!-- mobile menu - jquery include -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/mCustomScrollbar.js"></script>

		<!-- custom - jquery include -->
		<script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>

		
	</body>
</html>