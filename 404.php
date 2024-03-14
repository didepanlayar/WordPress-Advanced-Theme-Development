<?php get_header(); ?>
        <!--  -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="error-404">
                            <header>
                                <h1><?php _e('Page not found', 'wordev'); ?></h1>
                                <p><?php _e('Unfortunately, the page you tried to read does not exist on this site.', 'wordev');?></p>
                            </header>
                            <div class="error">
                                <p><?php _e('How about doing a search?', 'wordev'); ?></p>
                                <?php get_search_form(); ?>
                                <?php
                                    the_widget('WP_Widget_Recent_Posts', array(
                                        'title' => __('Latest Posts', 'wordev'),
                                        'number' => 3
                                    ));
                                ?>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>