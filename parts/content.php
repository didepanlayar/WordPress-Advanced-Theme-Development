<article>
    <?php if(has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(300, 300)); ?></a>
    <?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="meta-info">
        <p><?php esc_html_e('Posted on', 'wordev'); ?> <?php echo esc_html(get_the_date()); ?> <?php esc_html_e('by', 'wordev'); ?> <?php the_author_posts_link(); ?></p>
        <?php if(has_category()) : ?>
            <p><?phpesc_html_e('Categories', 'wordev'); ?>: <?php the_category(' '); ?></p>
        <?php endif; ?>
        <?php if(has_tag()) : ?>
            <p><?php esc_html_e('Tags', 'wordev'); ?>: <?php the_tags('', ', '); ?></p>
        <?php endif; ?>
    </div>
    <?php the_excerpt(); ?>
</article>