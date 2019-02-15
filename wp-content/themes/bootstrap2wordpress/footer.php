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
    <script>
      new WOW().init(); 
    </script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/wow.js"></script> 
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/wow.min.js"></script> 
    <script src="<?php bloginfo( 'template_directory' ); ?>/assets/js/wow-scroll.js"></script> 
</body>
</html>
