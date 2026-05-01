<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <div class="main">

        <div class="top-contact">
            <div class="left-cont">
                <img src="https://img.icons8.com/ios-filled/50/000000/globe.png"
                    class="top-left-img"
                    alt="Website icon" />
            </div>
        </div>
        <div class="menu-container">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
            ?>
                <a href="<?php echo home_url(); ?>" class="logo-text">NovaCraft</a>
            <?php } ?>
            <div class="menu-bar">
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div>
        </div>