<?php
/**
 * The Header template for our theme
 * Displays all of the <head> section and everything up till <div id="main">
 * @package WordPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header top-header" role="banner">
        <hgroup>
            <div class="top-header-logo"><img src="/wp-content/themes/surrogacyTheme/images/logo_full.png" width="244" height="50"></div>
            <div class="top-header-contact">
                <img class="top-header-contact-middle" src="/wp-content/themes/surrogacyTheme/images/phone_50.png" width="29" height="29">
                <a class="top-header-contact-middle" href="tel:<?= get_option('number_of_main_phone') ?>" rel="nofollow" target="_blank">

                    <span class="top-header-contact-phone">
                    <?= get_option('number_of_main_phone') ?>
                        </span>
                </a>
                <a class="top-header-contact-middle" href="https://wa.me/<?= get_option('whatsapp_phone') ?>" rel="nofollow" target="_blank">
                    <img src="/wp-content/themes/surrogacyTheme/images/whatsapp_50.png" width="29" height="29"></a>
                <!--a class="top-header-contact-middle" href="<?= get_option('link_facebook') ?>" rel="nofollow" target="_blank">
                    <img src="/wp-content/themes/surrogacyTheme/images/facebook_50.png" width="29" height="29">
                </a>
                <a class="top-header-contact-middle" href="<?= get_option('link_instagram') ?>" rel="nofollow" target="_blank">
                    <img src="/wp-content/themes/surrogacyTheme/images/instagram_50.png" width="29" height="29">
                </a-->
            </div>
        </hgroup>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle"><?php _e('Menu', 'badjohnny'); ?></button>
            <a class="assistive-text" href="#content"
               title="<?php esc_attr_e('Skip to content', 'badjohnny'); ?>"><?php _e('Skip to content', 'badjohnny'); ?></a>
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu', 'items_wrap' => '%3$s', 'container' => false)); ?>
        </nav><!-- #site-navigation -->

        <?php if (get_header_image()) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>" class="header-image"
                                                                 width="<?php echo get_custom_header()->width; ?>"
                                                                 height="<?php echo get_custom_header()->height; ?>"
                                                                 alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"/></a>
        <?php endif; ?>
    </header><!-- #masthead -->

    <div id="main" class="wrapper">