

    </main>
    
    <footer id="footer" class="footer">
        <div class="foottop">
            <div class="foot_logo">
                <figure>
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo.svg" alt="" width="243" height="107" />
                </figure>
            </div>
            <div class="footer_menu">                
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'main-menu',
                    'menu'         => '',
                    'container'    => 'ul',
                    'items_wrap' => '<ul class="menu">%3$s</ul>' ,
                    'menu_class'   => 'menu align-right dropdown',
                ));
            ?> 
            </div>
            <div class="follow_us"></div>
        </div>
        <div class="footbot">
            <div class="copyright">Copyright <?php echo date('Y'); ?> &copy; Company. ALL Rights Reserved.</div>
            <div class="designby"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a> by: My Biz Niche</div>
        </div>
    </footer>
</div>  

<?php wp_footer() ?>

</body>
</html>