<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Diwali_Restaurant
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Site Properties -->
    <link rel="shortcut icon" href="http://diwalirestaurant.com/wp-content/uploads/2016/09/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed"
          href="http://diwalirestaurant.com/wp-content/uploads/2016/09/favicon.ico">

    <!-- Google Fonts -->
    <link
        href='https://fonts.googleapis.com/css?family=Overlock:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/uikit.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/slideshow.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/slidenav.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/dotnav.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/slider.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/datepicker.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/autocomplete.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/diwali.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="impx-body">
<!-- Main Container -->
<div id="impx-container">

    <!-- Header -->
    <header id="impx-header" data-uk-sticky="{top:-400, animation: 'uk-animation-slide-top'}">

        <!-- Top Header -->
        <div class="impx-top-header">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-top-header">
                    <div class="uk-width-1-2">

                        <!-- Top Header  Left-->
                        <div class="impx-top-header-left">
                            <p class="uk-hidden-medium uk-hidden-small">Connect with us : </p>
                            <ul class="impx-header-social-list">
                                <li>
                                    <a href="<?php echo !empty(of_get_option('facebook_link')) ? of_get_option('facebook_link') : '#'; ?>"
                                       class="uk-icon-hover uk-icon-facebook" target="_blank"></a></li>
                                <li>
                                    <a href="<?php echo !empty(of_get_option('twitter_link')) ? of_get_option('twitter_link') : '#'; ?>"
                                       class="uk-icon-hover uk-icon-twitter" target="_blank"></a></li>
                                <li>
                                    <a href="<?php echo !empty(of_get_option('instagram_link')) ? of_get_option('instagram_link') : '#'; ?>"
                                       class="uk-icon-hover uk-icon-instagram" target="_blank"></a></li>
                            </ul>
                        </div>
                        <!-- Top Header Left End -->
                    </div>

                    <div class="uk-width-1-2">

                        <!-- Top Header  Middle-->
                        <div class="impx-top-header-middle">
                            <a href="#" class="uk-button uk-button-large outline default uk-hidden-medium" data-glf-cuid="4f4fdd64-cb14-4669-9366-7920dc6b701c" data-glf-ruid="0ef2acb3-3065-4b27-84d0-a4513e87e749">Order Online</a>
                        </div>

                        <!-- Top Header Right -->
                        <div class="impx-top-header-right uk-float-right">

                            <!-- Top Header Right Contact -->
                            <ul class="impx-top-header-contact">
                                <li class="uk-hidden-small"><i
                                        class="uk-icon-phone"></i><a
                                        href="tel:<?php echo !empty(of_get_option('phone')) ? of_get_option('phone') : ''; ?>"><?php echo !empty(of_get_option('phone')) ? of_get_option('phone') : ''; ?></a> |
                                    <a
                                        href="tel:<?php echo !empty(of_get_option('phone1')) ? of_get_option('phone1') : ''; ?>"><?php echo !empty(of_get_option('phone1')) ? of_get_option('phone1') : ''; ?></a>
                                </li>
                                <li class="uk-hidden-small uk-hidden-medium"><i class="uk-icon-envelope-o"></i><a
                                        href="mailto:<?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?>"><?php echo !empty(of_get_option('email')) ? of_get_option('email') : ''; ?></a>
                                </li>
                            </ul>
                            <!-- Top Header Right Contact End -->

                            <a href="#mobile-nav" class="uk-navbar-toggle uk-visible-medium uk-visible-small "
                               data-uk-offcanvas></a>

                        </div>
                        <!-- Top Header Right End -->

                    </div>
                </div>

            </div>
        </div>
        <!-- Top Header End -->

        <!-- Main Header  -->
        <div class="impx-main-header">
            <div class="uk-container fullwidth">
                <div class="uk-grid">
                    <div
                        class="uk-width-xlarge-2-5 uk-width-large-2-5 uk-width-medium-2-5 uk-hidden-medium uk-hidden-small">

                        <!-- Header Menu Left -->
                        <div class="impx-header-nav-left uk-align-right">
                            <nav class="uk-navbar uk-text-right">
                                <!-- Header Menu Left Items Start -->
                                <?php
                                wp_nav_menu(array(
                                    'menu' => 'Menu Left',
                                    'container' => false,
                                    'menu_class' => 'uk-navbar-nav',
                                    'walker' => new diwalirestaurant_walker_nav_menu

                                ));
                                ?>
                                <!-- Header Menu Left Items End -->

                            </nav>
                        </div>
                        <!-- Header Menu Left End -->
                    </div>


                    <div
                        class="uk-width-xlarge-1-5 uk-width-large-1-5  uk-width-medium-1-5 uk-width-small-1-1 uk-text-center">
                        <!-- Header Logo -->
                        <div class="impx-logo uk-align-center">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
                                    alt="Logo" class="impx-logo-light uk-img-preserve"></a>
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png" alt="Logo"
                                    class="impx-logo-dark uk-img-preserve"></a>
                        </div>
                        <!-- Header Logo End -->
                    </div>

                    <div
                        class="uk-width-xlarge-2-5 uk-width-large-2-5  uk-width-medium-2-5 uk-hidden-medium uk-hidden-small">
                        <!-- Header Menu Right -->
                        <div class="impx-header-nav-right">

                            <!-- Header Menu Right Items Start -->
                            <nav class="uk-navbar uk-hidden-small">
                                <?php
                                wp_nav_menu(array(
                                    'menu' => 'Menu Right',
                                    'container' => false,
                                    'menu_class' => 'uk-navbar-nav',
                                    'walker' => new diwalirestaurant_walker_nav_menu

                                ));
                                ?>
                            </nav>
                            <!-- Header Menu Right Items End -->
                        </div>
                        <!-- Header Menu Right End -->
                    </div>

                    <!-- Mobile Nav Start -->
                    <div id="mobile-nav" class="uk-offcanvas">
                        <div class="uk-offcanvas-bar">
                            <?php
                            wp_nav_menu(array(
                                'menu' => 'Main Menu',
                                'container' => false,
                                'menu_class' => 'uk-nav uk-nav-offcanvas uk-nav-parent-icon'
                            ));
                            ?>
                        </div>
                    </div>
                    <!-- Mobile Nav End -->

                </div>
            </div>
        </div>
        <!-- Main Header End -->

    </header>
    <!-- Header  End -->
