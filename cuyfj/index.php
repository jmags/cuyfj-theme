<?php get_header(); ?>
    <div class="posts">
    <?php
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>
                <div class="post">
                    <div class="post-title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="post-text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
            }
        }
    ?>
    </div>
<?php get_footer(); ?>
