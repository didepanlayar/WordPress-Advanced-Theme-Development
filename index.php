<?php get_header(); ?>
        <!--  -->
        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1>Blog</h1>
                    <div class="container">
                        <div class="blog-items">
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post(); ?>
                                    <article>
                                        <h2><?php the_title(); ?></h2>
                                        <div class="meta-info">
                                            <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                            <p>Categories: <?php the_category(' '); ?></p>
                                            <p>Tags: <?php the_tags('', ', '); ?></p>
                                        </div>
                                        <?php the_content(); ?>
                                    </article>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p>No content available.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>