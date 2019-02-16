 <?php
/* Template Name: About us us for Strings Unlimited */
	get_header();
	$about_us_content = get_field('about_us_content');
?>
 <!--------- about-us-content start ----->
    <section class="about-us-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 about-us-content-sub">
                    <p>
                        <?php echo $about_us_content; ?>
                    </p>
                    <a href="why-us/">
                        <button>Why Us</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
<!--------- about-us-content end ------->
<?php
/* Template Name: Contact us for Strings Unlimited */
	get_header();
?>
