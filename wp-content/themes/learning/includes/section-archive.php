<?php if (have_posts()): ?>
	<?php while (have_posts()): the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read more</a>
	<?php endwhile; else: endif; ?>