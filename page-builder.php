<?php get_header(); ?>
        <!--  -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="page-item">
                        <?php while(have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>