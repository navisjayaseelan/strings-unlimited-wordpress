<?php
/*
	Template Name: Home Page
*/

get_header();
?>

<!--------- slider section start ------->
    <section class="slider" id="top-fixed">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/sliders-1.jpg">
            </div>
            <div class="item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/sliders-2.jpg">
            </div>
            <div class="item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/sliders-3.jpg">
            </div>
            <div class="item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/sliders-4.jpg">
            </div>
            <div class="item">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/sliders-5.jpg">
            </div>
        </div>
   </section>
    <!--------- slider section end --------->

   <!--------- index-about link start ----->

    <section class="index-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 index-about-tittle">
                    <h2>GLOBAL SOURCING COMPANY FOR APPAREL PRODUCTS</h2>
                    <p>HEADQUARTERED IN INDIA WITH MARKETING OFFICE IN UNITED KINGDOM.</p>
                </div>
                <div class="col-lg-12 col-sm-12 index-about-button">
                    <a href="/about-us/">
                        <button class="ab-but">
                            More About Us
                        </button>
                    </a>
                    <a href="/why-us/">
                        <button class="ab-but">
                            Our Service
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--------- index-about link end ------->


    <!-------- our product start ----------->

    <section class="our-product">
        <div class="col-lg-12 col-sm-12 our-product-tittle">
            <h2>Our Products</h2>
        </div>
        <div class="container" style="background-color: #000;">
            <div class="row">
                <div class="our-product-sub col-lg-12 col-sm-12">
                    <div class="our-sub-cont wow slideInRight animated">
                        <div class="our-sub-fashion">
                            <h4>Fashion</h4>
                            <p>
                                 We offer a wide range of products from lightweight knitted t-shirts, tops & tanks to woven shirts & tunics to mediumweight jackets, pull-overs, bottoms, trousers & shorts. We also offer season specific products as per the current trends and colours. …
                            </p>
                            <a href="/products/fashion/">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="our-corporate-sub col-lg-12 col-sm-12">
                    <div class="our-corporate-cont wow slideInLeft animated">
                        <div class="our-sub-corporate">
                            <h4>Corporate</h4>
                            <p>
                                 Corporate workwear helps create a company it’s brand identity. We are pleased to offer custom-made corporate workwear with adequate branding on the garments to ensure an essence…
                            </p>
                            <a href="/products/corporate/">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="our-formals-sub col-lg-12 col-sm-12">
                    <div class="our-formals-cont wow slideInRight animated">
                        <div class="our-sub-formals">
                            <h4>Formals</h4>
                            <p>
                                 We have a fine range of exquisite fabrics and trims especially for the dandy workoholics. Workwear could never be so much fun as it’s now. We offer detailed & handcrafted shirts, trousers, blazers & waistcoats for every formal occasion…
                            </p>
                            <a href="/products/formals/">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="our-uniforms-sub col-lg-12 col-sm-12">
                    <div class="our-uniforms-cont wow slideInLeft animated">
                        <div class="our-sub-uniforms">
                            <h4>Uniforms</h4>
                            <p>
                                 Uniforms are, amongst all, a vehicle of ongoing communication and one of the most economical ways to give brands visibility and awareness…
                            </p>
                            <a href="/products/uniforms/">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="our-leather-sub col-lg-12 col-sm-12">
                    <div class="our-leather-cont wow slideInRight animated">
                        <div class="our-sub-leather">
                            <h4>leather</h4>
                            <p>
                                 With a State of Art facility Machinery, a plant capacity of 12,500 sqft and an integrated manufacturing facility we manufacture a wide range of quality Leather Products…
                            </p>
                            <a href="/products/leather/">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------- our product start ----------->

<?php 
get_footer();
?>
