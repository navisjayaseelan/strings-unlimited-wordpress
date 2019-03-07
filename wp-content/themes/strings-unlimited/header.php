<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strings_Unlimited
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/revolution-slider.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive.css" rel="stylesheet">
	
	<?php wp_head(); ?>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'strings-unlimited' ); ?></a>

	<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style Two-->
    <header class="main-header header-style-two">
        <!--Header-Lower-->
        <div class="header-lower">
        	<div class="auto-container">
            	<div class="outer clearfix">
                	<!--Logo -->
                    <div class="logo-outer">
                    	<div class="logo"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" alt=""></a></div>
                    </div>
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        

                        <?php
                        /*
                        	wp_nav_menu ( array(
                        		'theme_location' => 'primary',
                        		'container' => 'nav',
                        		'conatiner_class' => 'navbar-collapse collapse clearfix',
                        		'menu_class' => 'navigation clearfix'
                        	));
                        */
                        ?>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                
                                <li class="current dropdown"><a href="#">Home</a>
                                 
                                </li>
                            
                                <li class="dropdown"><a href="#">About Us</a>
                                    
                                    <!--
                                    <ul>
                                        <li><a href="about-us-1.html">About Us 1</a></li>
                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                        <li class="dropdown"><a href="#">Our Team</a>
                                            <ul>
                                                <li><a href="team-grid.html">Team Grid View</a></li>
                                                <li><a href="team-single.html">Single Member</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                -->
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="services.html">Services Style One</a></li>
                                        <li><a href="services-2.html">Services Style Two</a></li>
                                        <li><a href="single-service.html">Single Service</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                    	<li><a href="faq-1.html">FAQs Style One</a></li>
                                        <li><a href="faq-2.html">FAQs Style Two</a></li>
                                        <li><a href="error-page.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-1.html">Gallery One</a></li>
                                        <li><a href="gallery-2.html">Gallery Two</a></li>
                                        <li><a href="gallery-single.html">Gallery Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Classic</a></li>
                                        <li><a href="blog-three-column.html">Blog Three Column</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Contact Us</a>
                                	<ul class="from-right">
                                    	<li><a href="contact.html">Contact Us One</a></li>
                                    	<li><a href="contact-2.html">Contact Us Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
						
                    </nav><!-- Main Menu End-->
                    
                </div>
            </div>
        </div>
    
    </header>
    <!--End Main Header -->