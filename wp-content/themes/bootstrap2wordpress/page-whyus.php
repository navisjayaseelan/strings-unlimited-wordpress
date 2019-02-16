<?php
/* Template Name: Why us for Strings Unlimited */
get_header();
#Advanced custom field added by Navis
$title = get_field('title');
$content = get_field('content')
?>
 <!--------- why-us-content start ----->
    <section class="why-us-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 why-us-content-sub">
                	<h2 align="center" style="color: #00bfff"><?php echo $title ?></h2>
                    <br/>
                    <p>
                        <?php echo $content ?>
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
get_header();
?>