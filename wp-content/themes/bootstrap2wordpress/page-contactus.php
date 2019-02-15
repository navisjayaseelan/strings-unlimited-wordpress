<?php
/* Template Name: Contact us by Navis Michael Bearly J */
	get_header();
?>
  <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 ">
					<div class="row">
						<div class="col">
							<h2 align="center" class="text-primary">ORDER ENQUIRY FORM</h2>
					       	<hr/>
							<form action="/action_page.php">
							<div class="form-group">
								<label for="firstname">First Name</label>
								<input type="text" class="form-control" id="firstname">
							</div>
							<div class="form-group">
								<label for="company">Company:</label>
								<input type="text" class="form-control" id="company">
							</div>
							<div class="form-group form-check">
								<label class="form-check-label">
								<input class="form-check-input" type="checkbox"> Remember me
							</label>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
						<div class="col">
							<h2 align="center" class="text-primary">OUR OFFICE</h2>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
<?php
	get_footer();
?>	