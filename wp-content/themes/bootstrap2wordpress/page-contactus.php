<?php
/* Template Name: Contact us for Strings Unlimited */
	get_header();
?>
 <!--------- contact-section-start ----->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 contact-us-form">
                    <h2>
                        Order Enquiry Form
                    </h2>

                    <form id="contactform" class="contactform style4  clearfix" method="post" action="./contact/contact-process.php" novalidate>
                        <span class="flat-input">
                            <label>
                                Title *
                            </label>
                            <select name="select" id="select" type="select" value="" placeholder="Name*" required>
                                <option>
                                    Mr
                                </option>
                                <option>
                                    Mrs
                                </option>
                                <option>
                                    Ms
                                </option>
                                <option>
                                    Miss
                                </option>
                                <option>
                                    Dr
                                </option>
                            </select>
                        </span>
                        <span class="flat-input">
                            <label>
                                First Name *
                            </label>
                            <input name="fname" id="fname" type="text" value="" required>
                        </span>
                        <span class="flat-input">
                            <label>
                                Last Name *
                            </label>
                            <input name="lname" id="lname" type="text" value="" required>
                        </span>
                        <span class="flat-input">
                            <label>
                                Company *
                            </label>
                            <input name="company" id="company" type="text" value="" required>
                        </span>
                        <span class="flat-input">
                            <label>
                                Industry *
                            </label>
                            <select name="avia_industry_1" class="select is_empty" id="avia_industry_1">
                                <option selected="is_empty"></option>
                                <option value="Education">
                                    Education
                                </option>
                                <option value="Apparel">
                                    Apparel
                                </option>
                                <option value="Hospitality">
                                    Hospitality
                                </option>
                                <option value="Insurance">
                                    Insurance
                                </option>
                                <option value="Machinery">
                                    Machinery
                                </option>
                                <option value="Manufacturing">
                                    Manufacturing
                                </option>
                                <option value="Media">
                                    Media
                                </option>
                                <option value="Not For Profit">

                                    Not For Profit
                                </option>
                                <option value="Recreation">
                                    Recreation
                                </option>
                                <option value="Retail">
                                    Retail
                                </option>
                                <option value="Shipping">
                                    Shipping
                                </option>
                                <option value="Technology">
                                    Technology
                                </option>
                                <option value="Telecommunications">
                                    Telecommunications
                                </option>
                                <option value="Transportation">
                                    Transportation
                                </option>
                                <option value="Utilities">
                                    Utilities
                                </option>
                                <option value="Healthcare">
                                    Healthcare
                                </option>
                                <option value="Government">
                                    Government
                                </option>
                                <option value="Food &amp; Beverage">
                                    Food &amp; Beverage
                                </option>
                                <option value="Banking">
                                    Banking
                                </option>
                                <option value="Biotechnology">
                                    Biotechnology
                                </option>
                                <option value="Chemicals">
                                    Chemicals
                                </option>
                                <option value="Communications">
                                    Communications
                                </option>
                                <option value="Construction">
                                    Construction
                                </option>
                                <option value="Consulting">
                                    Consulting
                                </option>
                                <option value="Education">
                                    Education
                                </option>
                                <option value="Education">
                                    Education
                                </option>
                                <option value="Energy">
                                    Energy
                                </option>
                                <option value="Engineering">
                                    Engineering
                                </option>
                                <option value="Entertainment">
                                    Entertainment
                                </option>
                                <option value="Environmental">
                                    Environmental
                                </option>
                                <option value="Finance">
                                    Finance
                                </option>
                                <option value="Other">
                                    Other
                                </option>
                            </select>
                        </span>
                        <span class="flat-input">
                            <label>
                                City *
                            </label>
                            <input name="city" id="city" type="text" value="" required>
                        </span>
                        <span class="flat-input">
                            <label>
                                Country *
                            </label>
                            <input name="country" id="country" type="text" value="" required>
                        </span>
                        <span class="flat-input">
                            <label>
                                Contact Number *
                            </label>
                            <input name="phone" id="phone" type="text" value="" required>
                        </span>
                        <span class="flat-input">
                            <label>
                                Email Id *
                            </label>
                            <input name="email" id="email" type="text" value="" required>
                        </span>
                        <span class="flat-input">
                            <label>
                                Enquiry Details
                            </label>
                            <textarea name="message" id="message" tabindex="3" cols="30" rows="6" required=""></textarea>
                        </span>
                        <span class="flat-input">
                            <button class="submit" name="submit"
                            id="submit" value="">Submit</button>
                        </span>
                    </form>
                     <div class="contact-address-sub c-width" id="add-email">
                        <h3>
                            Ways to reach us
                        </h3>
                        <span>
                            Accounts
                        </span>
                        <p>
                            <a href="mailto: <?php echo get_field('accounts_email') ?>">
                               <?php echo get_field('accounts_email') ?>
                            </a>
                        </p>
                        <span>
                            Vendors/Suppliers
                        </span>
                        <p>
                            <a href="mailto:<?php echo get_field('vendors_supplier_email') ?>">
                                <?php echo get_field('vendors_supplier_email') ?>
                            </a>
                        </p>
                        <span>
                            Recruitment
                        </span>
                        <p>
                            <a href="mailto:<?php echo get_field('recruitment_email') ?>">
                              <?php echo get_field('recruitment_email') ?>  
                            </a>
                        </p>
                        <span>
                            Press
                        </span>
                        <p>
                            <a href="mailto:<?php echo get_field('press_email') ?>">
                                <?php echo get_field('press_email') ?>
                            </a>
                        </p>
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
                            STRINGS FACTORY PRIVATE LIMITED<br>
                            (Subsidiary Company of STRINGS UNLIMITED PVT LTD, UK)
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
                     <div class="contact-address-sub c-width-720" id="add-email">
                        <h3>
                            Ways to reach us
                        </h3>
                        <span>
                            Accounts
                        </span>
                        <p>
                            <a href="mailto:<?php echo get_field('accounts_email') ?>">
                               <?php echo get_field('accounts_email') ?> 
                            </a>
                        </p>
                        <span>
                            Vendors/Suppliers
                        </span>
                        <p>
                            <a href="mailto:<?php echo get_field('vendors_supplier_email') ?>">
                                <?php echo get_field('vendors_supplier_email') ?>
                            </a>
                        </p>
                        <span>
                            Recruitment
                        </span>
                        <p>
                            <a href="mailto:<?php echo get_field('recruitment_email') ?>">
                              <?php echo get_field('recruitment_email') ?> 
                            </a>
                        </p>
                        <span>
                            Press
                        </span>
                        <p>
                            <a href="mailto:<?php echo get_field('press_email') ?>">
                                <?php echo get_field('press_email') ?>
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