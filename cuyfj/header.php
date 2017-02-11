 <!DOCTYPE html>
<html>
<head>
    <title><?php echo get_bloginfo("name"); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo("stylesheet_url"); ?>">
    <link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.less" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/scripts/jquery.mCustomScrollbar.css">
    <!-- Ye Olde Query of the Jaye -->
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery-3.1.1.js"></script>
    <!-- Jquery plugin for non-hideous scrollbars! -->
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.mCustomScrollbar.js"></script>
    <!-- Client-side Less. -->
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/less.js"></script><!-- Nav pane management. -->
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/morelikehidebar.js"></script>
    <?php wp_head(); ?>
</head>

<body>
<div class="container">
    <div class="blog-name">
        <a href="<?php echo get_site_url(); ?>">
            <h1><?php echo get_bloginfo("name"); ?></h1>
        </a>
    </div>
    <div class="head-nav">
        <button id="donav">Site Navigation +</a>
    </div>
