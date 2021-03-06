<?php

/**
 * Add custom body class
**/
function mbn_body_class($classes){
    // code here ...

    return $classes;
}
add_filter('body_class', 'mbn_body_class');



/*
** Submenu Classes
*/
function mbn_submenu_classes($classes, $args){
    // code here ...
    
    return $classes;
}
//add_filter('wp_nav_menu_items', 'mbn_submenu_classes', 10, 2);


add_action( 'wp_head', 'preload_fonts' ); 
function preload_fonts() { 
    $url = 'https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap'; 
    ?> 
<link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"> 
<link rel="preload" href="<?php echo esc_url( $url ); ?>" as="fetch style" crossorigin="anonymous" > 
<script type="text/javascript"> 
!function(e,n,t){"use strict";var o="<?php echo esc_url( $url ); ?>",r="__3perf_googleFontsStylesheet";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage); 
</script>
    <?php
} 
