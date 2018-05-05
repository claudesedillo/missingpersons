<?php
	/* Template Name: 7 - Submit Report
	 */
	get_header();
?>

<?php

	If($_POST['Submit']){
		// Run validation if you are not doing it in js
		global $wpdb;
		
		$fName  	 = $_POST['fName'];
		$lName  	 = $_POST['lName'];
		$age  	 	 = $_POST['age'];
		$height  	 = $_POST['height'];
		$weight   	 = $_POST['weight'];
		$details 	 = $_POST['details'];
		
		if($wpdb -> insert('casedetails', array(
		   'fName'  => $fName,  'lName'   => $lName,
		   'age'  => $age,  'height'   => $height,
		   'weight' => $weight, 'details' => $details)) == false)
			wp_die('Database Insertion Failed');
		else echo 'Database insertion successful';
	}
?>
<div class = 'container margin-top-40'>
	<div class="row">
		<div class="col-md-6">
			<div class="well-block">
				<div class="well-title">
					<h1><b>SUBMIT A REPORT</b></h1>
				</div>
				<form method = "post" action = "">
				<!-- Form start -->
					<div class = 'row'>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" 
									   for="name">First Name</label>
								<input id = "id"
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
									   for="email">Last Name</label>
								<input id="email" 
									   type="text" 
									   name = "lName" 
									   placeholder="E-Mail" 
									   class="form-control input-md" 
									   pattern = "^[a-zA-Z]+$">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label" 
									   for="date">Age</label>
								<input id = "date"
									   name = "age" 
									   type="number" 
									   placeholder="Age of disappearance" 
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
									   for="report_details">Report Details</label>
								<textArea rows="5" 
										  id = "report_details" 
										  name = "details" type="text" 
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
					<h1>QA</h1>
				</div>
				<div class="feature-block">
					<div class="feature feature-blurb-text">
						<h4 class="feature-title">Why do you need to submit the Documents?</h4>
						<div class="feature-content">
							<p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
						</div>
					</div>
					<div class="feature feature-blurb-text">
						<h4 class="feature-title">Why do you ___?</h4>
						<div class="feature-content">
							<p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
						</div>
					</div>
					<div class="feature feature-blurb-text">
						<h4 class="feature-title">Why do you ___?</h4>
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
