<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post(); ?>
        <?php echo get_the_date('Y-m-d'); ?>
        <?php the_content(); ?>
        <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('blog-small') ?>" alt="<?php the_title(); ?>" class="img-fluid">
        <?php endif; ?>
        <?php // the_author(); ?>
        <?php $fname = get_the_author_meta('first_name'); ?>
        <?php $lname = get_the_author_meta('last_name'); ?>
        <p>Posted by <?php echo $fname ?>         <?php echo $lname ?></p>

        <?php $tags = get_the_tags();
        if ($tags):
            foreach ($tags as $tag): ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>">
                    <?php echo $tag->name ?>
                </a>
            <?php endforeach; endif; ?>

        <?php $categories = get_the_category();
        if ($categories):
            echo ("Category: ");
            foreach ($categories as $cat): ?>
                <a href="<?php echo get_category_link($cat->term_id); ?>">
                    <?php echo $cat->name ?>
                </a>
            <?php endforeach; endif; ?>


        <?php comments_template(); ?>
    <?php endwhile; else: endif; ?>