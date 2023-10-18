<?php get_header();?>

    <!-- Featured Title -->
    <div id="featured-title" class="featured-title clearfix">
        <div id="featured-title-inner" class="themesflat-container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">
                    <?php wp_title(); ?>
                    </h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="home.html" class="trail-begin">Home</a>
                            <span class="sep"><i class="finance-icon-chevron-right"></i></span>
                            <span class="trail-end">News</span>
                        </div>
                    </div>
                </div>
            </div><!-- /.featured-title-inner-wrap -->
        </div><!-- /#featured-title-inner -->            
    </div>
    <!-- End Featured Title -->

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap" class="themesflat-container">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">

<!-- ---------------------------------------------------------------------------------------------- -->
                <?php if(have_posts()){
                    while(have_posts()){
                        the_post();
                ?>


                    <article class="hentry">
                        <div class="post-media clearfix">
                            <a href="<?php  the_permalink()?>"><?php the_post_thumbnail()?></a>
                        </div><!-- /.post-media -->

                        <div class="post-content-wrap">
                            <h2 class="post-title">
                                <span class="post-title-inner">
                                    <a href="<?php  the_permalink()?>"><?php the_title();?></a>
                                </span>
                            </h2><!-- /.post-title -->

                            <div class="post-meta style-1">
                                <div class="post-meta-content">
                                    <div class="post-meta-content-inner">
                                        <span class="post-meta-categories item">
                                            <span class="inner">
                                                <a href="#" rel="category"><?php the_category()?></a>
                                            </span>
                                        </span>

                                        <span class="post-by-author item">
                                            <span class="inner"><a href="#" title="" rel="author"><?php the_author();?></a></span>
                                        </span>

                                        <span class="post-comment item">
                                            <span class="inner"><a href="#"><?php comments_number( 'no responses', 'one response', '% responses' );?></a></span>
                                        </span>
                                    </div>

                                    <ul class="post-date">
                                        <li class="date">
                                            <span class="day"> <?php echo get_the_date('j');?> </span>        
                                        </li>
                                        <li class="month">
                                        <span class="month"> <?php echo get_the_date('M');?> </span>                                          
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.post-meta -->

                            <div class="post-content post-excerpt">
                                <?php the_excerpt();?>                                
                            </div><!-- /.post-excerpt -->

                            <div class="post-read-more">
                                <div class="post-link">
                                    <a href="<?php  the_permalink()?>">Read More</a>
                                </div>
                            </div><!-- /.post-read-more -->
                        </div><!-- /.post-content-wrap -->
                        <div class="border-bottom-1px padding-top-33"></div>
                    </article>

                <?php }};?>
                <?php comments_template();?>

<!-- ---------------------------------------------------------------------------------------------- -->

                    <div class="themesflat-pagination padding-left-70 clearfix">
                        <ul class="page-numbers">
                            <li><a class="prev page-numbers" href="#"><span class=" finance-icon-cheveron-left"></span></a></li>
                            <li><a class="page-numbers current"  href="#">1</a></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="next page-numbers" href="#"><span class=" finance-icon-cheveron-right"></span></a></li>
                        </ul>
                    </div>

                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->

<?php get_sidebar();?>

        </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->

<?php get_footer();?>