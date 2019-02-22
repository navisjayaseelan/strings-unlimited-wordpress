<?php
/* Template Name: R&D Sourcing - Strings Unlimited */
	get_header();
?>
 <!--------- contact-section-start ----->
<section class="rd-sourcing" id="top-fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 rd-sourcing-content wow slideInRight animated">
                <?php echo get_field('title'); ?>
                <?php echo get_field('content'); ?>
            </div>
        </div>
    </div>
</section>
<?php
	get_footer();
?>	