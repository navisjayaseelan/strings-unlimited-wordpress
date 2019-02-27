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
    <!--------- contact-section-end ------->
     <!-- Modal -->
     <button id="btnTest" class="btn btn-default">Show Modal</button>
 <div id="dummyModal" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" class="close">&times;</button>
            <h4 class="modal-title">Error</h4>
          </div>
          <div class="modal-body">
            <p>Quick Brown Fox Jumps Over The Lazy Dog</p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
	get_footer();

?>
<script type="text/javascript">
  $('document').ready(function() {
    $('#btnTest').click(function() {
      jQuery.noConflict();
      $('#dummyModal').modal('show');
    });
});
</script>	

