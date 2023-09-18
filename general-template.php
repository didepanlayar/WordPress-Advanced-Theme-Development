<?php
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>
        <!--  -->
        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="general-template">
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post(); ?>
                                    <article>
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                    </article>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>