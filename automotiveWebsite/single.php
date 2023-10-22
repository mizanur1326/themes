<?php get_header(); ?>

<section class="breadcrumb_section text-center clearfix">
	<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/breadcrumb/bg_07.jpg">
		<div class="overlay"></div>
		<div class="container" data-aos="fade-up" data-aos-delay="100">
			<h1 class="page_title text-white mb-0">Blog</h1>
		</div>
	</div>
</section>


<section class="blog_section sec_ptb_100 clearfix">
	<div class="container">
		<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
			<div class="col-lg-12 col-md-12 order-last">
				<?php
				if (have_posts()) :
					while (have_posts()) :
						the_post();
				?>
						<div class="blog_standard" data-aos="fade-up" data-aos-delay="100">
							<a class="item_image" href="<?php the_permalink() ?>" target="_blank">
								<?php the_post_thumbnail() ?>
							</a>
							<div class="item_content">
								<ul class="post_meta ul_li clearfix">
									<li><?php echo get_the_date("F j, Y") ?></li>
									<li>by <a href="#!"><?php the_author() ?></a></li>
									<li><a href="#!"><?php echo comments_number('no responses', 'one response', '% responses'); ?></a></li>
								</ul>
								<h3 class="item_title">
									<a href="<?php the_permalink() ?>" target="_blank">
										<?php the_title() ?>
									</a>
								</h3>
								<?php
								the_content();
								//the_excerpt();
								?>								
							</div>
						</div>

				<?php
					endwhile;
				endif;
				?>		
			</div>
		</div>
	</div>
</section>




<section class="search_section sec_ptb_100 clearfix" data-bg-color="#161829">
	<div class="container">
		<div class="section_title text-center mb_60" data-aos="fade-up" data-aos-delay="100">
			<h2 class="title_text text-white mb-0"><span>Find the right car for every occasion</span></h2>
		</div>
	</div>


	<?php
	$args = array(
		'post_type' => 'carousel_item',
		'posts_per_page' => 5, 
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) :
	?>
		<div class="offers_car_carousel slideshow4_slider" data-aos="fade-up" data-aos-delay="900">
			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<div class="item">
					<div class="gallery_fullimage_2">
						<?php
						if (has_post_thumbnail()) {
							echo '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '">';
						}
						?>
						<div class="item_content text-white">
							<span class="item_price bg_default_blue">
								<?php the_title(); ?>
							</span>
							<h3 class="item_title text-white"><?php the_content(); ?></h3>
							<a class="text_btn text-uppercase" href="<?php the_permalink(); ?>"><span>Kook A Car</span></a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php
	endif;
	wp_reset_postdata(); 
	?>

</section>

</main>

<?php get_footer(); ?>