<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trending-agile
 */
?>

<!--Get in touch section start-->
<section id="get-in-touch-section" class="get-in-touch-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 form-block">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
            </div>
            <div class="col-lg-5 col-md-6 contact-info-block">
                <?php dynamic_sidebar('contact-info'); ?>
            </div>
        </div>
    </div>
</section>
<!--Get in touch section end-->

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <!--Main footer start-->


    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt=""></a>


            </div>
            <div class="col-lg-8 col-md-8 text-right">
                <div class="footer-links"><?php dynamic_sidebar('footer-menu'); ?></div>
            </div>
            <?php /* ?><div class="col-lg-3">
              <!--                <div class="newsletter-form">
              <?php echo do_shortcode('[contact-form-7 id="23" title="Newsletter form"]'); ?>
              </div>-->
              <div class="footer-logo-details"><?php dynamic_sidebar('footer-logo-details'); ?></div>
              <ul class="list-inline social-icons">
              <li class="list-inline-item"><a href="#" title="facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook"></a></li>
              <li class="list-inline-item"><a href="#" title="twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter"></a></li>
              <li class="list-inline-item"><a href="#" title="instagram"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram"></a></li>
              <li class="list-inline-item"><a href="#" title="linkedin"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin"></a></li>
              </ul>
              </div><?php */ ?>
        </div>
    </div>


    <div class="site-info text-center">@2019 All rights reserved Trending Agile.</div><!-- .site-info -->
    <!--Main footer end-->
</footer><!-- #colophon -->
</div><!-- #page -->

<div class="menu-btn">
    <span class="top"></span>
    <span class="mid"></span>
    <span class="bot"></span>
</div>
<div id="nav" class="text-center">
    <ul class="nav-inner">
        <?php dynamic_sidebar('header-contact-info'); ?>
        <?php
        //wp_nav_menu( array('theme_location'=> 'menu-1','menu_id'=> 'primary-menu',) ); 
        if (is_front_page()) :
            wp_nav_menu(array('theme_location' => 'inner-pages-menu', 'menu_id' => 'inner-pages-menu',));

        else :
            //wp_nav_menu( array('theme_location'=> 'menu-1','menu_id'=> 'primary-menu',) ); 
            wp_nav_menu(array('theme_location' => 'inner-pages-menu', 'menu_id' => 'inner-pages-menu',));
        endif;
        ?>
    </ul>
</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/js/custom.js?v=1'; ?>"></script>
<script type="text/javascript">


    jQuery(document).ready(function () {

        if (window.location.hash) {
            var hash = window.location.hash;
            jQuery(".menu-main-menu-container ul li").removeClass("current_page_item");
            var hashCls = window.location.hash;
            jQuery(".menu-main-menu-container ul li").each(function () {
                var hC = jQuery(this).find('a').attr("href");

                if (hC == "/" + hashCls) {
                    jQuery(this).addClass("current_page_item");
                }
            });
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top
            }, '');
        } else {
            jQuery(".menu-main-menu-container ul li").removeClass("current_page_item");
        }
        jQuery(".menu-main-menu-container ul li a").click(function () {
            jQuery(".menu-main-menu-container ul li").removeClass("current_page_item");
            jQuery(this).parent('li').addClass("current_page_item");
        });

        if (window.location.hash) {
            var hash = window.location.hash;
            jQuery("#menu-footer-menu li").removeClass("current_page_item");
            var hashCls = window.location.hash;
            jQuery("#menu-footer-menu li").each(function () {
                var hC = jQuery(this).find('a').attr("href");

                if (hC == "/" + hashCls) {
                    jQuery(this).addClass("current_page_item");
                }
            });
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top
            }, '');
        } else {
            jQuery("#menu-footer-menu li").removeClass("current_page_item");
        }
        jQuery("#menu-footer-menu li a").click(function () {
            jQuery("#menu-footer-menu li").removeClass("current_page_item");
            jQuery(this).parent('li').addClass("current_page_item");
        });
        
        jQuery(".leftslide #inner-pages-menu li a ").click(function(){
            jQuery(".menu-btn").removeClass("active");
            jQuery("#nav").removeClass("open");
            jQuery("html").removeClass("open");
        });

    });
</script>
</body>

</html>
