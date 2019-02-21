 <?php
/* Template Name: About us us for Strings Unlimited */
	get_header();
?>
  <!--------- about-us-content start ----->
    <section class="our-vision-content" id="top-fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 our-vision-content-sub wow slideInLeft">
                    <h2>
                        Vision
                    </h2>
                    <?php echo get_field('vision'); ?>
                </div>
                <div class="col-lg-12 col-12 our-mission-content-sub wow slideInRight">
                    <h2>
                       Mission 
                    </h2>
                    <?php echo get_field('mission'); ?>
                </div>
            </div>
        </div>
    </section>
    <!--------- about-us-content end ------->
<?php
/* Template Name: Contact us for Strings Unlimited */
	get_footer();
?>
