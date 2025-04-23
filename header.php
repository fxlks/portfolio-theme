<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
</div>
<nav>
    <ul>
        <?php 
        if (function_exists('the_custom_logo') && has_custom_logo()) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
            if ($logo): ?>
                <li class="menu-logo">
                    <img src="<?php echo esc_url($logo[0]); ?>" alt="Site Logo">
                </li>
        <?php endif; } ?>

        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a></li>
        <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
        <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
    </ul>
</nav>
