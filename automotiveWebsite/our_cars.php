<?php 
//Template Name:our_cars
get_header();?>


			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section text-center clearfix">
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/breadcrumb/bg_13.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">Gallery</h1>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- gallery_section - start
			================================================== -->
			<!-- <section class="gallery_section sec_ptb_100 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
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

					<div class="feature_vehicle_filter mb-0 element-grid clearfix">
						<div class="element-item sedan " data-category="sedan">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
								<h3 class="item_title mb-0">
									<a href="#!">
										2015 Chevrolet Corvette Stingray Z51
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/feature/img_01.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_02.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_03.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_04.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_05.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_06.jpg" alt="image_not_found">
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

						<div class="element-item sedan " data-category="sedan">
							<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
								<h3 class="item_title mb-0">
									<a href="#!">
										2015 Chevrolet Corvette Stingray Z51
									</a>
								</h3>
								<div class="item_image position-relative">
									<a class="image_wrap" href="#!">
										<img src="assets/images/feature/img_13.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_08.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_09.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_10.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_11.jpg" alt="image_not_found">
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
										<img src="assets/images/feature/img_12.jpg" alt="image_not_found">
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

					<div class="pagination_wrap clearfix">
						<div class="row align-items-center justify-content-lg-between">
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
								<span class="page_number" data-aos="fade-up" data-aos-delay="100">Page 1 of 3</span>
							</div>

							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								<ul class="pagination_nav ul_li_right clearfix" data-aos="fade-up" data-aos-delay="300">
									<li><a href="#!"><i class="fal fa-angle-double-left"></i></a></li>
									<li class="active"><a href="#!">1</a></li>
									<li><a href="#!">2</a></li>
									<li><a href="#!">3</a></li>
									<li><a href="#!"><i class="fal fa-angle-double-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</section> -->

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
            <?php
            $args = array(
                'post_type' => 'vehicle', // Assuming 'vehicle' is the custom post type name
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $price = get_post_meta(get_the_ID(), 'price', true);
                    $category = get_post_meta(get_the_ID(), 'category', true);
                    $image = get_the_post_thumbnail_url();
            ?>
                    <div class="element-item <?php echo esc_attr($category); ?>" data-category="<?php echo esc_attr($category); ?>">
                        <div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="item_title mb-0">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="item_image position-relative">
                                <a class="image_wrap" href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($image); ?>" alt="image_not_found">
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>

        <div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="100">
            <a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Book A Car <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon_01.png" alt="icon_not_found"></a>
        </div>

    </div>
</section>
			<!-- gallery_section - end
			================================================== -->




		</main>
		<!-- main body - end
		================================================== -->


<?php get_footer();?>