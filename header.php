<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>

<div class="main">

    <div class="top-contact">
        <div class="left-cont">
            <img src="<?php echo get_template_directory_uri(); ?>/images/web.png" class="top-left-img" />
            <div class="top-left-iip">
                <a href="#">www.iipacademy.com</a>
            </div>
        </div>

        <div class="right-cont">
            <img src="<?php echo get_template_directory_uri(); ?>/images/info.png" class="top-right-img"/>
            <div class="top-right-info">
                <a href="#">info@iipacademy.com</a>
            </div>
        </div>
    </div>

    <div class="menu-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo"/>

        <div class="menu-bar">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </div>
    </div>