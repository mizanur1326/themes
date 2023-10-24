<?php
////Template Name:home

get_header(); ?>


<section class="slider_section text-white text-center position-relative clearfix">
    <div class="main_slider clearfix">
        <?php
        // Create a query to fetch the sliders
        $slider_query = new WP_Query(array('post_type' => 'slider', 'posts_per_page' => -1));

        if ($slider_query->have_posts()) {
            while ($slider_query->have_posts()) {
                $slider_query->the_post();
        ?>
                <div class="item has_overlay d-flex align-items-center" data-bg-image="<?php the_post_thumbnail_url(); ?>">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider_content text-center">
                                    <h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s"><?php the_title(); ?></h3>
                                    <p data-animation="fadeInUp" data-delay=".5s"><?php the_content(); ?></p>
                                    <div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
                                        <a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Book Now <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon_01.png" alt="icon_not_found"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        wp_reset_postdata(); // Reset the query to avoid conflicts
        ?>
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
                        <button type="submit" class="custom_btn bg_default_red text-uppercase">Find A Car <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/img_07.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">2017 Chevrolet Corvette C7 Stingray </h3>
                            <a class="text_btn text-uppercase" href="#!"><span>Kook A Car</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon_02.png" alt="icon_not_found"></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="feature_fullimage">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/img_07.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">2017 Chevrolet Corvette C7 Stingray </h3>
                            <a class="text_btn text-uppercase" href="#!"><span>Kook A Car</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon_02.png" alt="icon_not_found"></a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="feature_fullimage">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/img_07.jpg" alt="image_not_found">
                        <div class="item_content text-white">
                            <h3 class="item_title text-white">2017 Chevrolet Corvette C7 Stingray </h3>
                            <a class="text_btn text-uppercase" href="#!"><span>Kook A Car</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon_02.png" alt="icon_not_found"></a>
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


<section class="blog_section sec_ptb_150 clearfix">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <div class="blog_wrap">
                    <h3 class="wrap_title mb-0" data-aos="fade-up" data-aos-delay="100">From the Blog:</h3>
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type' => 'post', // Fetch standard posts
                            'posts_per_page' => 2, // Display only 2 posts
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog_child" data-aos="fade-up" data-aos-delay="300">
                                        <a class="item_image" href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));
                                            } else {
                                                // Add a default image if no featured image is set.
                                                echo '<img src="' . get_template_directory_uri() . '/assets/images/default.jpg" alt="image_not_found">';
                                            }
                                            ?>
                                        </a>
                                        <div class="item_content">
                                            <h4 class="item_title mb-0">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                        else :
                        // No posts found.
                        endif;
                        wp_reset_postdata();
                        ?>
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
                            <button type="submit" class="custom_btn bg_default_red text-uppercase w-100 d-block">Subscribe <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon_01.png" alt="icon_not_found"></button>
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
                <?php
                $testimonial_query = new WP_Query(array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 3, // Change the number of testimonials to display
                ));

                if ($testimonial_query->have_posts()) :
                    while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                ?>
                        <div class="item">
                            <div class="testimonial_item2 text-center">
                                <p class="mb_30">
                                    <?php the_content(); ?>
                                </p>
                                <div class="admin_info">
                                    <div class="admin_image">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                    <h4 class="admin_name"><?php the_title(); ?></h4>
                                    <!-- Add your rating stars here -->
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'No testimonials found.';
                endif;
                ?>
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


<?php get_footer(); ?>