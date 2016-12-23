<!DOCTYPE html>
<html>
<head>
    <title><?php echo get_bloginfo("name"); ?></title>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo("stylesheet_url"); ?>"> -->
    <link rel="stylesheet/less" type="text/css" href="http://wplocal.net/wordpress/wp-content/themes/cuyfj/style.less" />
    <!-- Client-side Less. -->
    <script src="http://wplocal.net/wordpress/wp-content/themes/cuyfj/scripts/less.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <div class="blog-name">
    <?php echo get_bloginfo("stylesheet_url"); ?>
        <h1><?php echo get_bloginfo("name"); ?></h1>
    </div>
