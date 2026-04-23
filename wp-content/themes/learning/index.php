<!-- index.php is the only other strictly required file. Its job is to render all the front-end output for our theme. -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- Allows wordpress and plugins to directly insert code into header. -->
</head>

<body <?php body_class(); ?>>
    <!--body_class() is a helper function provided by WordPress that will output a list of useful CSS classes which describe the page-->
    <div class="site-content">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                ?>
                <article <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header><!-- .entry-header -->
                    <div class="entry-content">
                        <?php the_content(esc_html__('Continue reading &rarr;', 'my-custom-theme')); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->
                <?php

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()):
                    comments_template();
                endif;
            endwhile;
        else:
            ?>
            <article class="no-results">
                <header class="entry-header">
                    <h1 class="page-title"><?php esc_html_e('Nothing Found', 'my-custom-theme'); ?></h1>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <p><?php esc_html_e('It looks like nothing was found at this location.', 'my-custom-theme'); ?></p>
                </div><!-- .entry-content -->
            </article><!-- .no-results -->
            <?php
        endif;
        ?>
    </div>

<?php wp_footer(); ?>
</body>

</html>