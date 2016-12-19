<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo("stylesheet_url"); ?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
<?php echo get_bloginfo("name"); ?>
<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <div class="entry">
                <div class="entry-title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="entry-text">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        }
    }
?>
</div>
</body>
</html>