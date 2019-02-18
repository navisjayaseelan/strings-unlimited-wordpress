<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("includes/head-tag-contents.php");?>
</head>
<body>

    <!--------- header section sart -------->
    <?php include("includes/head-top.php");?>
    <?php include("includes/head-navigation.php");?>
    <?php include("includes/head-down.php");?>
    <!--------- header section end --------->

    <!--------- contact-section-start ----->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 contact-us-form">
                    <h2>
                        Order Enquiry Form
                    </h2>

                    <form role="form" id="contact-form" method="post" action="contact-thank-you" class="contactform style4  clearfix">
                        <div class="messages"></div>
                        <span class="flat-input">
                            <label>
                                Title *
                            </label>
                            <select name="select" id="title" type="title" value="" placeholder="Name*" required>
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
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                First Name *
                            </label>
                            <input name="fname" id="fname" type="text" value="" required>
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                Last Name *
                            </label>
                            <input name="lname" id="lname" type="text" value="" required>
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                Company *
                            </label>
                            <input name="company" id="company" type="text" value="" required>
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                Industry *
                            </label>
                            <select name="industry" class="select is_empty" id="industry">
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
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                City *
                            </label>
                            <input name="city" id="city" type="text" value="" required>
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                Country *
                            </label>
                            <input name="country" id="country" type="text" value="" required>
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                Contact Number *
                            </label>
                            <input name="phone" id="phone" type="text" value="" required>
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                Email Id *
                            </label>
                            <input name="email" id="email" type="text" value="" required>
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <label>
                                Enquiry Details
                            </label>
                            <textarea name="message" id="message" tabindex="3" cols="30" rows="6" required=""></textarea>
                            <div class="help-block with-errors"></div>
                        </span>
                        <span class="flat-input">
                            <button class="submit" name="submit"
                            id="submit" value="">Submit</button>
                        </span>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        
                    </form>
                     <div class="contact-address-sub c-width" id="add-email">
                        <h3>
                            Ways to reach us
                        </h3>
                        <span>
                            Accounts
                        </span>
                        <p>
                            <a href="mailto:accounts-ind@strings-unlimited.com">
                               accounts-ind@strings-unlimited.com 
                            </a>
                        </p>
                        <span>
                            Vendors/Suppliers
                        </span>
                        <p>
                            <a href="mailto:admin-ind@strings-unlimited.com">
                                admin-ind@strings-unlimited.com
                            </a>
                        </p>
                        <span>
                            Recruitment
                        </span>
                        <p>
                            <a href="mailto:vacancy@strings-unlimited.com">
                              vacancy@strings-unlimited.com  
                            </a>
                        </p>
                        <span>
                            Press
                        </span>
                        <p>
                            <a href="mailto:admin@strings-unlimited.com">
                                admin@strings-unlimited.com
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
                            No : 5, 1st Main road<br>
                            Mangala nagar,<br>
                            Porur, Chennai – 600 116<br>
                            TamilNadu<br>
                            India
                        </p>
                        <p>
                           Landline :<br>
                            +91 44 4950 6565 / +91 44 4950 5656 
                        </p>
                        <p>
                          Email ID:<br>
                          <a href="mailto:sales@strings-unlimited.com">
                              sales@strings-unlimited.com 
                          </a>
                        </p>
                        <hr>
                        <h5>
                            Bangalore Branch
                        </h5>
                        <p>
                            #1991/B, 1ST FLOOR, HIG 3RD Phase,<br>
                            Major Sandeep Unnikrishnan Road,<br>
                            Yelahanka New Town,<br>
                            Bangalore -560064,<br>
                            KARNATAKA.<br>
                        </p>
                        <p>
                           Landline :<br>
                            +91 (0) 80 – 40909995
                        </p>
                        <p>
                          Email ID:<br>
                          <a href="mailto:sales-blr@strings-unlimited.com">
                            sales-blr@strings-unlimited.com
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
                            36 St Andrews Drive,<br>
                            Glasgow,<br>
                            G41 5SG,<br>
                            United Kingdom.
                        </p>
                        <p>
                           Landline :<br>
                            +44 (0) 7925 344 275
                        </p>
                        <p>
                          Email ID:<br>
                          <a href="mailto:marketing-international@strings-unlimited.com">
                             marketing-international@strings-unlimited.com
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
                            P.O.Box 11469,<br>
                            Dammam,<br>
                            G41 5SG,<br>
                            Kingdom of Saudi Arabia
                        </p>
                        <p>
                           Landline :<br>
                            +44 (0) 7925 344 275
                        </p>
                        <p>
                          Email ID:<br>
                          <a href="mailto:info@pafcogcc.com">
                             info@pafcogcc.com
                          </a><br>
                          <a href="mailto:gulfsales@strings-unlimited.com">gulfsales@strings-unlimited.com
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
                            <a href="mailto:accounts-ind@strings-unlimited.com">
                               accounts-ind@strings-unlimited.com 
                            </a>
                        </p>
                        <span>
                            Vendors/Suppliers
                        </span>
                        <p>
                            <a href="mailto:admin-ind@strings-unlimited.com">
                                admin-ind@strings-unlimited.com
                            </a>
                        </p>
                        <span>
                            Recruitment
                        </span>
                        <p>
                            <a href="mailto:vacancy@strings-unlimited.com">
                              vacancy@strings-unlimited.com  
                            </a>
                        </p>
                        <span>
                            Press
                        </span>
                        <p>
                            <a href="mailto:admin@strings-unlimited.com">
                                admin@strings-unlimited.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------- contact-section-end ------->


    <!--------- footer section sart -------->
    <?php include("includes/footer.php");?>
    <!--------- footer section end -------->

    <script type="text/javascript" src="js/contact-us.js"></script>

</body>
</html>