<?php
/* Template Name: Contact us for Strings Unlimited */
	get_header();
?>
 <!--------- contact-section-start ----->
    <section class="contact-us" id="top-fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 contact-us-form">
                    <h2>
                        Submit your Requirements
                    </h2>
                    <div class="contactform style4  clearfix">
                        <?php echo do_shortcode( '[contact-form-7 id="378" title="Strings Contact form"]' ); ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 contact-us-address">
                    <div class="con-add-tittle">
                        <h2>
                            Our Office
                        </h2>
                    </div>
                    <div class="contact-address-sub">
                        <h3>
                            India
                        </h3>
                        <h4>
                            STRINGS FACTORY PRIVATE LIMITED
                        </h4>
                        <h5>
                            Chennai Branch
                        </h5>
                        <p>
                            <?php echo get_field('chennai_branch_address') ?>
                        </p>
                        <p>
                           Landline :<br>
                            <?php echo get_field('chennai_landline_number') ?> 
                        </p>
                        <p>
                          Email ID:<br>
                          <a href="mailto:<?php echo get_field('chennai_email_id') ?>">
                              <?php echo get_field('chennai_email_id') ?> 
                          </a>
                        </p>
                        <hr>
                        <h5>
                            Bangalore Branch
                        </h5>
                        <p>
                            <?php echo get_field('bangalore_branch_address') ?> 
                        </p>
                        <p>
                           Landline :<br>
                           <?php echo get_field('bangalore_branch_landline') ?> 
                        </p>
                        <p>
                          Email ID:<br>
                          <a href="mailto:<?php echo get_field('bangalore_branch_email') ?> ">
                            <?php echo get_field('bangalore_branch_email') ?>
                          </a>
                        </p>
                    </div>
                    <div class="contact-address-sub">
                        <h3>
                            United Kingdom
                        </h3>
                        <h4>
                            STRINGS UNLIMITED PRIVATE LIMITED, UK
                            <br>
                            (Registered Office)
                        </h4>
                        <p>
                             <?php echo get_field('united_kingdom_address') ?>
                        </p>
                        <p>
                           Landline :<br>
                            <?php echo get_field('united_kingdom_landline') ?>
                        </p>
                        <p>
                          Email ID:<br>
                          <a href="mailto:<?php echo get_field('united_kingdom_email') ?>">
                             <?php echo get_field('united_kingdom_email') ?>
                          </a>
                        </p>
                    </div>
                    <div class="contact-address-sub">
                        <h3>
                            Middle East
                        </h3>
                        <h4>
                            PAFCO – STRINGS Est.<br>
                            (Partnership in ME)
                        </h4>
                        <p>
                            <?php echo get_field('middle_east_address') ?>
                        </p>
                        <p>
                           Landline :<br>
                           <?php echo get_field('middle_east_landline') ?>
                        </p>
                        <p>
                          Email ID:<br>
                          <a href="mailto: <?php echo get_field('middle_east_email_1') ?>">
                             <?php echo get_field('middle_east_email_1') ?>
                          </a><br>
                          <a href="mailto:<?php echo get_field('middle_east_email_2') ?>"><?php echo get_field('middle_east_email_2') ?>
                          </a>
                        </p>
                    </div>
                     
                </div>
            </div>
        </div>
    </section>
    <!--------- contact-section-end ------->
<?php
	get_footer();
?>	