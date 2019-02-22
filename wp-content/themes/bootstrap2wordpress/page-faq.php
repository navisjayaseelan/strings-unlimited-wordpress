 <?php
/* Template Name: Faq for Strings Unlimited */
	get_header();
?>
 <!--------- faq-section start ----->
<section class="faq-section" id="top-fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 section-tittle">
                <h1>
                    Faq's
                </h1>
            </div>
            <div class="col-lg-12 col-12 faq-section-content">
                <div class="qa">
                    <h2>
                    	<?php echo get_field('question_1'); ?>
                    </h2>
                    <?php echo get_field('question_1_answer'); ?>

                </div>
                <div class="qa">
                    <h2>
                    	<?php echo get_field('question_2'); ?>
                    </h2>
                    <?php echo get_field('question_2_answer'); ?>

                </div>
                <div class="qa">
                    <h2>
                    	<?php echo get_field('question_3'); ?>
                    </h2>
                    <?php echo get_field('question_3_answer'); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--------- faq-section end ------->
<?php
/* Template Name: Contact us for Strings Unlimited */
	get_footer();
?>
