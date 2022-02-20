<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage BadJohnny
 * @since BadJohnny 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
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
            <div>Логотип</div>
            <div> (Phone) <?= get_option('number_of_main_phone') ?>

                <a href="https://wa.me/<?= get_option('whatsapp_phone') ?>" rel="nofollow" target="_blank">WhatsApp</a>
                <a href="<?= get_option('link_facebook') ?>" rel="nofollow" target="_blank">Fb</a>
                <a href="<?= get_option('link_instagram') ?>" rel="nofollow" target="_blank">Inst</a>
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