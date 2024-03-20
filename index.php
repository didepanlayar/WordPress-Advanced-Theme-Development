<?php get_header(); ?>
        <!--  -->
        <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="">
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1><?php esc_html_e('Blog', 'wordev'); ?></h1>
                    <div class="container">
                        <div class="blog-items">
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post(); ?>
                                    <?php get_template_part('parts/content'); ?>
                                <?php endwhile; ?>
                                    <div class="wpdevs-pagination">
                                        <div class="pages new">
                                            <?php previous_posts_link(esc_html__('<< Newer Posts', 'wordev')); ?>
                                        </div>
                                        <div class="pages old">
                                            <?php next_posts_link(esc_html__('Older Posts >>', 'wordev')); ?>
                                        </div>
                                    </div>
                            <?php else : ?>
                                <p><?php esc_html_e('No content available.', 'wordev'); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>