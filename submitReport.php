<?php
	/* Template Name: 7c - Submit Report
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
		
		if($wpdb -> insert('case', array(
		   'fName'  => $fName,  'lName'   => $lName,
		   'age'  => $age,  'height'   => $height,
		   'weight' => $weight, 'details' => $details)) == false)
			wp_die('Database Insertion Failed');
		else echo 'Database insertion successful<p/>';
	}
?>

<div class = 'container'>
	
	<h1><b>SUBMIT A REPORT</b></h1>

	<div class = 'container' id ='submitReportDivForm'>
		<form method = "post" action = "">
			<div class = 'row'>
				<div class = 'col-lg-6'>
					<b>First Name</b><br/>
					<input name = "fName" type="text" placeholder="Input Value">
				</div>
				<div class = 'col-lg-6'>
					<b>Last Name</b><br/>
					<input name = "lName" type="text" placeholder="Input Value">
				</div>
			</div>
			
			<div class = 'row'>
				<div class = 'col-lg-4'>
					<b>Age</b><br/>
					<input name = "age" type="number" placeholder="Input Value">
				</div>
				<div class = 'col-lg-4'>
					<b>Height</b><br/>
					<input name = "height" type="number" placeholder="Input Value">
				</div>
				<div class = 'col-lg-4'>
					<b>Weight</b><br/>
					<input name = "weight" type="number" placeholder="Input Value">
				</div>
			</div>
			<b>Report Details</b>
			<textArea name = "details" type="text" placeholder="Input Value" id = 'detailsInput'></textArea><br/>
			
			<b>Police Report:</b><br/>
			<input type="file" name="img" multiple><br/>
			<b>Others:</b><br/>
			<input type="file" name="img" multiple><br/>
			<input type="submit" text= "Send" name = "Submit" id = "submitReport_b">	
		</form>
	</div>
</div>

<?php
	get_footer();
?>
