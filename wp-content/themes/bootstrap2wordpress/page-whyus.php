<?php
/* Template Name: Why us for Strings Unlimited */
get_header();
?>
    <!--------- why-us-content start ----->
    <section class="why-us-content" id="top-fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 why-us-content-sub">
                    <h2 align="center" style="color: #00bfff"><?php echo get_field('title'); ?></h2>
                    <br/>
                    <p>
                        <?php echo get_field('content'); ?>
                    </p>
                    <!-- <a href="why-us.html">
                        <button>Why Us</button>
                    </a> -->
                </div>
            </div>
        </div>
    </section>
    <!--------- why-us-content end ------->
<?php
/* Template Name: Contact us for Strings Unlimited */
get_footer();
?>