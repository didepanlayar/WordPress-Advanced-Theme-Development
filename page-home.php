<?php get_header(); ?>
        <!--  -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php
                        $hero_backround     = wp_get_attachment_url(get_theme_mod('set_hero_background'));
                        $hero_height        = get_theme_mod('set_hero_height', 800);
                        $hero_title         = get_theme_mod('set_hero_title', 'Please, type some title');
                        $hero_subtitle      = get_theme_mod('set_hero_subtitle', 'Please, type some subtitle.');
                        $hero_button_text   = get_theme_mod('set_hero_button_text', 'Learn More');
                        $hero_button_link   = get_theme_mod('set_hero_button_link', '#');
                    ?>
                    <section class="hero" style="background-image: url('<?php echo $hero_backround; ?>')">
                        <div class="overlay" style="min-height: <?php echo $hero_height; ?>px">
                            <div class="container">
                                <div class="hero-items">
                                    <h1><?php echo $hero_title; ?></h1>
                                    <p><?php echo nl2br($hero_subtitle); ?></p>
                                    <a href="<?php echo $hero_button_link; ?>"><?php echo $hero_button_text; ?></a>
                                </div>
                            </div>
                        </div>
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
                                    // 'category__in'      => array(4, 5, 6),
                                    // Get Category Slug: Design, Development and Network
                                    'category_name'     => array('design','development','network'),
                                    // Get Category ID: Uncategorized
                                    'category__not_in'  => array(1),
                                    'posts_per_page'    => 3
                                );
                                $postlist = new WP_Query($args);
                                if($postlist->have_posts()) : ?>
                                <?php while($postlist->have_posts()) : $postlist->the_post(); ?>
                                    <?php get_template_part('parts/content', 'latest-news'); ?>
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