<?php
/* Template Name: Contact us for Strings Unlimited */
	get_header();
?>
 <div id="dummyModal" role="dialog" class="modal fade" style="margin-top: 120px;">
      <div class="modal-dialog">
        <div class="modal-content" style="padding: 10px;">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <center><h3>Thank you !</h3></center>
          <center><b>Thanks for contacting us, we will contact you within 48 hours to discuss your requirement.</b></center>
        </div>
      </div>
    </div>
  </div>
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
                            Our Offices
                        </h2>
                    </div>
                    <div class="contact-address-sub">
                        <h3>
                            India
                        </h3>
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
                    </div>
                    <div class="contact-address-sub">
                        <h3>
                            United Kingdom
                        </h3>
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
   


<?php
	get_footer();

?>
<script type="text/javascript">
  $('document').ready(function() {
    document.addEventListener( 'wpcf7submit', function( event ) {
      if ( '378' == event.detail.contactFormId ) {
        jQuery.noConflict();
        $('#dummyModal').modal('show');
        $('.wpcf7-response-output').hide();
      }
    }, false );
});
</script>	

