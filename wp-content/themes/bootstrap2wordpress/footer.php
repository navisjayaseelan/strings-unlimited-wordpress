<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>



<?php wp_footer(); ?>
 <!-------- footer section start -------->
    <footer>
        <div class="container footer" style="background-color: #000;">
            <div class="row">
                <div class="col-lg-4 col-md-4
                col-sm-12 footer-sub-logo">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png">
                    <h5>"Rich Service with a Simple Approach"</h5>
                </div>
                <div class="col-lg-4 col-md-4
                col-sm-12 footer-sub-address">
                    <h3>OUR SOCIAL LINKS</h3>
                    <ul class="footer-social">
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               <i class="fa fa-pinterest-square" aria-hidden="true"></i> 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               <i class="fa fa-linkedin-square" aria-hidden="true"></i> 
                            </a>
                        </li>
                    </ul>
                    <h3>Strings Unlimited</h3>
                    <ul class="footer-address-cont">
                        <li>
                            <i class="fa fa-home" aria-hidden="true"></i>
                            36 St Andrews Drive, Glasgow, G41 5SG
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            +44 (0) 7925344275
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="mailto:marketing-international@strings-unlimited.com">
                                marketing-international@strings-unlimited.com
                            </a>

                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4
                col-sm-12 footer-sub-link">
                    <h3>Products</h3>
                    <ul>
                        <li>
                            Fashion
                        </li>
                        <li>
                            Corporate
                        </li>
                        <li>
                            Formals
                        </li>
                        <li>
                            Uniforms
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-------- footer section end ---------->

    <!------------ footer-end-start  ------->
    <section class="footer-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 footer-e-s-1">
                     © 2015 - Strings Unlimited
                </div>
                <div class="col-lg-10 col-md-12 footer-e-s-2">
                    <ul class="footer-end-ul">
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               What We Do 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Products 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Home | uniform suppliers in chennai, uniform suppliers in India,uniform suppliers in Tamilnadu, Casual 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Why Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Strings Character
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<!--main js-->
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/bootstrap.js"></script>
    <!-- Owl-Carousel2-js -->
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/assets/js/owl.carousel.js"></script>
    <script type="text/javascript">
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:1,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[2500])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>
    <!-- wow js -->
   
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/wow.js"></script> 
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/wow.min.js"></script> 
    <script> new WOW().init(); </script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/wow-scroll.js"></script> 
</body>
</html>
