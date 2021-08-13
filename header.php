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
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'main-menu',
                            'menu'         => '',
                            'container'    => 'ul',
                            'items_wrap' => '<ul class="menu">%3$s</ul>' ,
                            'menu_class'   => 'menu align-right dropdown',
                        ));
                    ?> 
                    </nav>
                    <nav class="mobmenu hide-for-large">
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'main-menu',
                            'menu'         => '',
                            'container'    => 'ul',
                            'items_wrap' => '<ul class="menu">%3$s</ul>' ,
                            'menu_class'   => 'menu align-right dropdown',
                        ));
                    ?> 
                    </nav>
                </div>
            </div>
        </div>            
    </header>
    <main id="content" class="content">