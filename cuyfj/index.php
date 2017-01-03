<?php get_header(); ?>
<div class="posts">
<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <div <?php post_class(); ?>>
                <div class="date-block"><?php 
                    the_date();
                    echo ' at ';
                    the_time(); ?>
                </div>
                <div class="title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="byline">
                    <?php // the_author(); ?>
                </div>
                <div class="text">
                    <?php the_content(); ?>
                </div>
                <!-- TODO: Non-terrible presentation. -->
                <div class="tags"><?php // the_tags(); ?></div>
            </div>
            <?php
        }
    }
?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
