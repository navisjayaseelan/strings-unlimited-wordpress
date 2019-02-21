 <?php
/* Template Name: Our Mission and Vision - Strings Unlimited */
	get_header();
?>
   <!--------- oru-commitment-section-start ----->
    <section class="oru-commitment" id="top-fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 oru-commitment-content">
                    <div class="oru-commitment-content-sub">
                        <h2>
                            <?php echo get_field('commitment_1_title'); ?>
                        </h2>
                        <?php echo get_field('commitment_1_content'); ?>
                    </div>

                    <div class="oru-commitment-content-sub" style="padding-top: 50px;">
                        <h2>
                            <?php echo get_field('commitment_2_title'); ?>
                        </h2>
                        <?php echo get_field('commitment_2_content'); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--------- oru-commitment-section-end -------->
<?php
/* Template Name: Contact us for Strings Unlimited */
	get_footer();
?>
