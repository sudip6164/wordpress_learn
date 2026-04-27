<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>
            <?php echo get_the_date('Y-m-d'); ?>
            <?php the_content(); ?>
            <?php // the_author(); ?>
            <?php $fname = get_the_author_meta('first_name');?>
            <?php $lname = get_the_author_meta('last_name');?>
            <p>Posted by <?php echo $fname ?> <?php echo $lname ?></p>
            <?php $tags = get_the_tags();
            if($tags):
            foreach ($tags as $tag): ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>">
                    <?php echo $tag->name?>
                </a>
            <?php endforeach; endif; ?>
	<?php endwhile; else: endif; ?>