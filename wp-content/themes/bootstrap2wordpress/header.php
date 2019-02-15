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
                    <img src="assets/img/logo.png">
                  </a>
                </div>

                <?php
                	wp_nav_menu( array(
                		'theme_location' => 'primary', 
                		'container' => 'nav',
                		'container_class' => 'collapse navbar-collapse',
                		'menu_class' => 'nav navbar-nav'	
                
                	));
                ?>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" >About Us<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="about-us.html">About Us </a></li>
                        <li><a href="our-vision-mission.html">Our Vision</a></li>
                        <li><a href="#">Our Commitment</a></li>
                        <li><a href="#">Faq's</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle">What We Do<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">R&D And Sourcing</a></li>
                        <li><a href="#">Production Support</a></li>
                        <li><a href="#">Quality Assurance</a></li>
                        <li><a href="#">Order Management</a></li>
                        <li><a href="#">Logistics</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle">Products<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Corporate</a></li>
                        <li><a href="#">Formals</a></li>
                        <li><a href="#">Uniforms</a></li>
                      </ul>
                    </li>
                    <li id="responsive-logo"><a href="index.html">
                        <img src="assets/img/logo.png">
                    </a></li>
                    <li><a href="#">Why Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Strings Character</a></li>
                  </ul>
                </div>--><!-- /.navbar-collapse -->
            </div>
          </div><!-- /.container -->
        </nav>
    </header>
    
    <!--------- header section end --------->

	<div id="content" class="site-content">
