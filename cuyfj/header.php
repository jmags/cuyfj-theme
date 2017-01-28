<!DOCTYPE html>
<html>
<head>
    <title><?php echo get_bloginfo("name"); ?></title>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo("stylesheet_url"); ?>"> -->
    <link rel="stylesheet/less" type="text/css" href="http://wplocal.net/wordpress/wp-content/themes/cuyfj/style.less" />
    <!-- Ye Olde Query of the Jaye -->
    <script src="http://wplocal.net/wordpress/wp-content/themes/cuyfj/scripts/jquery-3.1.1.js"></script>
    <!-- Client-side Less. -->
    <script src="http://wplocal.net/wordpress/wp-content/themes/cuyfj/scripts/less.js"></script><!-- Nav pane management. -->
    <script src="http://wplocal.net/wordpress/wp-content/themes/cuyfj/scripts/morelikehidebar.js"></script>
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
        <ul>
            <li>
                <button id="donav">Other Stuff</a>
            </li>
        </ul>
    </div>
