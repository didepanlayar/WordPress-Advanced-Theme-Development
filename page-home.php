<?php get_header(); ?>
        <!--  -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        <h2>Services</h2>
                        <div class="container">
                            <div class="services-item">
                                <?php
                                    if(is_active_sidebar('services-1')) {
                                        dynamic_sidebar('services-1');
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php
                                    if(is_active_sidebar('services-2')) {
                                        dynamic_sidebar('services-2');
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php
                                    if(is_active_sidebar('services-3')) {
                                        dynamic_sidebar('services-3');
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-blog">
                        <h2>Latest News</h2>
                        <div class="container">
                            <?php
                                $args = array(
                                    'post_type'         => 'post',
                                    // Get Category ID: Design, Development and Network
                                    'category__in'      => array(5, 10, 14),
                                    // Get Category ID: Uncategorized
                                    'category__not_in'  => array(1),
                                    'posts_per_page'    => 3
                                );
                                $postlist = new WP_Query($args);
                                if($postlist->have_posts()) : ?>
                                <?php while($postlist->have_posts()) : $postlist->the_post(); ?>
                                    <article class="latest-news">
                                        <?php the_post_thumbnail('large'); ?>
                                        <h3><?php the_title(); ?></h3>
                                        <div class="meta-info">
                                            <p>
                                                by <span><?php the_author_posts_link(); ?></span>
                                                Categories: <span><?php the_category(' '); ?></span>
                                                Tags: <?php the_tags('', ', '); ?>
                                            </p>
                                            <p><span><?php echo get_the_date(); ?></span></p>
                                        </div>
                                        <?php the_excerpt(); ?>
                                    </article>
                                <?php endwhile; wp_reset_postdata();?>
                            <?php else : ?>
                                <p>No content available.</p>
                            <?php endif; ?>
                        </div>
                        
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>