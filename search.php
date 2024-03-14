<?php get_header(); ?>
        <div id="primary">
            <div id="main">
                <div class="container">
                    <h1><?php _e('Search result for', 'wordev'); ?>: <?php echo get_search_query(); ?></h1>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('parts/content', 'search'); ?>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
<?php get_footer(); ?>