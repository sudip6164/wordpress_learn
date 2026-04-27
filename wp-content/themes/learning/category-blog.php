<?php get_header(); ?>
This is category blog template
<div class="container">
    <?php get_template_part('includes/section', 'archive'); ?>
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
</div>

<?php get_footer(); ?>