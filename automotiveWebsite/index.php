<?php get_header();?>


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


<?php get_footer();?>