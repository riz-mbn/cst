

    </main>
    
    <footer id="footer" class="footer">
        <div class="foottop">
            <div class="grid-container">
                <div class="grid-x grid-margin-x cols2-s1">
                    <div class="cell large-3">
                        <div class="foot_logo">
                            <figure>
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/logo.svg" alt="" width="243" height="107" />
                            </figure>
                        </div>
                    </div>
                    <div class="cell large-9 col-copy align-self-middle">
                        <div class="footer_menu">                
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'footer-menu',
                                'menu'         => '',
                                'container'    => 'ul',
                                'items_wrap' => '<ul class="menu">%3$s</ul>' ,
                                'menu_class'   => 'menu align-right dropdown',
                            ));
                        ?> 
                        </div>
                        <div class="follow_us">
                            <span class="social_icon fb_icon">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-fb.svg" alt="" width="34" height="34" />
                                </figure>
                            </span>
                            <span class="social_icon tw_icon">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-tw.svg" alt="" width="34" height="34" />
                                </figure></span>
                            <span class="social_icon in_icon">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-in.svg" alt="" width="34" height="34" />
                                </figure></span>
                            <span class="social_icon yt_icon">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-yt.svg" alt="" width="34" height="34" />
                                </figure></span>
                            <span class="social_icon ig_icon">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-ig.svg" alt="" width="34" height="34" />
                                </figure></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footbot">
            <div class="grid-container">
                <div class="copyright"><span>&copy; Copyright <?php echo date('Y'); ?> Speech Therapy</span><span class="separator"> | </span> <span>ALL Rights Reserved</span><span class="separator"> | </span> </span>
                <div class="footer_links"><a href="#">Terms of Service</a><span class="separator"> | </span><a href="#">Privacy Policy</a><span class="separator"> | </span> </span>
                <div class="designby"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a> by: My Biz Niche</span>
            </div>
        </div>
    </footer>
</div>  

<?php wp_footer() ?>

</body>
</html>