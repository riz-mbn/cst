<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/favicon.png"> -->
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>
<button data-scroll="up" class="btn_scroll_up"><span>UP</span></button>
<div id="wrapper"> 
    <header id="header" data-sticky-container data-toggler=".show-menu">
        <div class="hsnav-s4 sticky" data-sticky data-options="marginTop:0">
            <div class="navbar">
                <div class="grid-container">
                    <a class="navlogo" href="<?php echo home_url() ?>">
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/logo.svg" alt="" width="243" height="107" />
                        </figure>
                    </a>
                    <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>
                    <nav class="navmenu show-for-large">
                        <ul class="menu align-right dropdown" data-dropdown-menu>
                            <li><a href="<?php echo home_url() ?>/#services">Services</a></li>
                            <li><a href="<?php echo home_url() ?>/#about">About Us</a></li>
                            <li><a href="<?php echo home_url() ?>/#faqs">FAQ</a></li>
                            <li><a href="<?php echo home_url() ?>/contact">Contact</a></li>
                        </ul>
                    </nav>
                    <nav class="mobmenu hide-for-large">
                        <ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu data-submenu-toggle="true">
                            <li class="menu_item" data-toggler=".show-menu"><a href="<?php echo home_url() ?>">Home</a></li>
                            <li class="menu_item" data-toggler=".show-menu"><a href="<?php echo home_url() ?>/#services">Services</a></li>
                            <li class="menu_item" data-toggler=".show-menu"><a href="<?php echo home_url() ?>/#about">About Us</a></li>
                            <li class="menu_item" data-toggler=".show-menu"><a href="<?php echo home_url() ?>/#faqs">FAQ</a></li>
                            <li class="menu_item nav-cta" data-toggler=".show-menu"><a href="<?php echo home_url() ?>/contact" class="button hollow" >Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>            
    </header>
    <main id="content" class="content">