<?php get_header(); ?>
        <!--  -->
        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
                    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                    <div class="container">
                        <div class="archive-items">
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post(); ?>
                                    <article>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(300, 300)); ?></a>
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div class="meta-info">
                                            <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                            <p>Categories: <?php the_category(' '); ?></p>
                                            <p>Tags: <?php the_tags('', ', '); ?></p>
                                        </div>
                                        <?php the_excerpt(); ?>
                                    </article>
                                <?php endwhile; ?>
                                    <?php the_posts_pagination(); ?>
                            <?php else : ?>
                                <p>No content available.</p>
                            <?php endif; ?>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>