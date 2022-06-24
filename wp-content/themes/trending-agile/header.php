<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trending-agile
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome.css' ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/bootstrap.css' ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/slick.css' ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/menu.css' ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom.css' ?>"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/responsive.css' ?>"/>
	<?php wp_head(); ?>
<!--     wp_enqueue_style( 'trending-agile-custom-css', get_template_directory_uri() . '/css/custom.css');-->
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">		
		<div class="container-fluid">
		    <div class="row d-flex align-items-center justify-content-between">
		        <div class="col-lg-3 col-6"><a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Logo"></a></div>
		        <div class="col-lg-5 col-6">
		            <nav id="site-navigation" class="main-navigation text-center">
                        <?php 
                        if ( is_front_page() ) :
                            wp_nav_menu( array('theme_location'=> 'inner-pages-menu','menu_id'=> 'inner-pages-menu',) );
                             
                        else :
                            //wp_nav_menu( array('theme_location'=> 'menu-1','menu_id'=> 'primary-menu',) ); 
                             wp_nav_menu( array('theme_location'=> 'inner-pages-menu','menu_id'=> 'inner-pages-menu',) );
                        endif;
                           
                        ?>
                        <?php 
                             
                        ?>
                    </nav>
                    
                    <div class="mobile-nav">
                        <div class="menu-btn">
                            <span class="top"></span>
                            <span class="mid"></span>
                            <span class="bot"></span>
                        </div>                        
                    </div>
                    
		        </div>
		        <div class="col-md-4 text-right header-contact-info">
		            <?php dynamic_sidebar('header-contact-info'); ?>
		        </div>
		    </div>
		</div>
		<!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">