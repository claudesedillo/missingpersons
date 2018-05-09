<?php
	/* Template Name: 7 - Submit Report
	 */
	if(!isset($_COOKIE["logged"])) {
        wp_redirect( get_site_url().'/404-page/'); exit;
    }
	get_header();
?>

<div class = 'container margin-top-40'>
	<div class="row">
		<div class="col-md-6">
			<div class="well-block">
				<div class="well-title">
					<h1 class="h4-color"><b>SUBMIT A REPORT</b></h1>
				</div>
				<form method = "post" action = "" id = "submitReportForm">
				<!-- Form start -->
					<div class = 'row'>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" 
									   for="fName">First Name</label>
								<input id = "fName"
									   type="text" 
									   name = "fName" 
									   placeholder="Name"
									   class="form-control input-md"
									   pattern = "^[a-zA-Z]+$">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" 
									   for="lName">Last Name</label>
								<input id="lName" 
									   type="text" 
									   name = "lName" 
									   placeholder="Last Name" 
									   class="form-control input-md" 
									   pattern = "^[a-zA-Z]+$">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" 
									   for="age">Age</label>
								<input id = "age"
									   name = "age" 
									   type="number" 
									   placeholder="Age of Disappearance" 
									   class="form-control input-md" 
									   pattern = "^\d+$">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" 
									   for="height">Height</label>
								<input id = "height"
									   name = "height" 
									   type="number" 
									   placeholder="Input Value" 
									   class="form-control input-md"  
									   pattern = "^\d*\.?\d*$">
						
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" 
									   for="lastSeen">Last Seen</label>
								<input id = "lastSeen"
									   name = "lastSeen" 
									   type="text" 
									   placeholder="yyyy-mm-dd" 
									   class="form-control input-md" 
									   pattern="\d{4}-\b(0[1-9]|1[0-2])\b-(0[1-9]|1[\d]|2[\d]|3[01])">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" 
									   for="weight">Weight</label>
								<input id = "weight"
									   name = "weight" 
									   type="number" 
									   placeholder="Input Value" 
									   class="form-control input-md"  
									   pattern = "^\d*\.?\d*$">
						
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" 
									   for="lastLocation">Last Location</label>
								<input id = "lastLocation"
									   name = "lastLocation" 
									   type="text" 
									   placeholder="Location" 
									   class="form-control input-md">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" 
									   for="report_details">Report Details</label>
								<textArea rows="5" 
										  id = "report_details" 
										  name = "report_details" type="text" 
										  placeholder="Input Value"
										  class="form-control input-md" ></textArea>
							</div>
						</div>
						<div class="col-md-12">
							<b>Police Report:</b><br/>
							<input type="file" name="img" multiple><br/>
						</div>
						
						<div class="col-md-12">
							<b>Others:</b><br/>
							<input type="file" name="img" multiple><br/>
						</div>
							
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" text= "Submit Report" 
									   name = "Submit" id = "singlebutton"
									   class="btn btn-default">	
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<div class="well-block">
				<div class="well-title">
					<h1 class="h4-color">QA</h1>
				</div>
				<div class="feature-block">
					<div class="feature feature-blurb-text">
						<h4 class="feature-title"><b>Why do you need to submit the Documents?</b></h4>
						<div class="feature-content">
							<p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
						</div>
					</div>
					<div class="feature feature-blurb-text">
						<h4 class="feature-title"><b>Why do you ___?</b></h4>
						<div class="feature-content">
							<p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
						</div>
					</div>
					<div class="feature feature-blurb-text">
						<h4 class="feature-title"><b>Why do you ___?</b></h4>
						<div class="feature-content">
							<p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<?php
	get_footer();
?>
