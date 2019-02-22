<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	 <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/font-awesome.min.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <!-- style-sheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/bootstrap.css">
    <!-- wow css -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/wow/animate.css">
    <!-- Owl-Carousel2-css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/owl.theme.default.css">
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/responsive.css">
    
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>


	<!--------- header section sart -------->
    <header>
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/logo.png">
                  </a>
                </div>

                <?php
                /*
                	wp_nav_menu( array(
                		'theme_location' => 'primary', 
                		'container' => 'nav',
                		'container_class' => 'collapse navbar-collapse',
                		'menu_class' => 'nav navbar-nav'	
                
                	));
                	*/
                ?>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="/about-us/" class="dropdown-toggle" >About Us<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/about-us/">About Us </a></li>
                        <li><a href="/our-vision-mission/">Our Vision</a></li>
                        <li><a href="/our-commitment/">Our Commitment</a></li>
                        <li><a href="/faq/">Faq's</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="/what-we-do/" class="dropdown-toggle">What We Do<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/what-we-do/rd-and-sourcing/">R&D And Sourcing</a></li>
                        <li><a href="/what-we-do/production-support/">Production Support</a></li>
                        <li><a href="/what-we-do/quality-assurance/">Quality Assurance</a></li>
                        <li><a href="/what-we-do/order-management/">Order Management</a></li>
                        <li><a href="/what-we-do/logistics/">Logistics</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="/products/" class="dropdown-toggle">Products<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/products/fashion/">Fashion</a></li>
                        <li><a href="/products/corporate/">Corporate</a></li>
                        <li><a href="/products/formas/">Formals</a></li>
                        <li><a href="/products/uniforms/">Uniforms</a></li>
                        <li><a href="/products/leather/">Leather</a></li>
                      </ul>
                    </li>
                    <li id="responsive-logo"><a href="/">
                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/img/logo.png">
                    </a></li>
                    <li><a href="/why-us/">Why Us</a></li>
                    <li><a href="/contact-us/">Contact Us</a></li>
                    <li><a href="/strings-character/">Strings Character</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
            </div>
          </div><!-- /.container -->
        </nav>
    </header>
    
    <!--------- header section end --------->

	<!--<div id="content" class="site-content">-->
