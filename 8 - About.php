<?php
	/* Template Name: 8 - About
	 */
	get_header();
?>

<div class="container-fluid feed" id = 'aboutSection'>
	<div class="row" id="about-div">
		<h2 class="h4-color"><b>LOREM IPSUM</b></h2>
		<h4>dolor sit amet</h4><br>
		<p>Lorem ipsum dolor sit amet, 
		   consectetur adipiscing elit, 
		   sed do eiusmod tempor incididunt 
		   ut labore et dolore magna aliqua. 
		   Ut enim ad minim veniam, quis nostrud 
		   exercitation ullamco laboris nisi ut 
		   aliquip ex ea commodo consequat. Duis 
		   aute irure dolor in reprehenderit in 
		   voluptate velit esse cillum dolore eu 
		   fugiat nulla pariatur.</p>
	</div>

	<div class="row" id="contact-div">
		<h3 class="h4-color">CONTACT US</h3><br><br>
		<form method = "post" action = "" id = 'contactUsForm'>
			<input id="name" name="name" type="text" 
				   placeholder="Name" class="form-control" >
			<div class="col-md-6">
				<input id="email" name="email" type="email" 
					   class="form-control" placeholder="Email Address">   
			</div>
			<div class="col-md-6 right">
				<input id="number" name="phone" type="number" 
					   class="form-control" placeholder="Phone Number">   
			</div>
			<div class="form-group">
				<textArea id="message" name="message" 
						  type="text"  rows="10" cols="40"
						  placeholder="Your message..." class="form-control"></textArea>   
			</div>
			<input class="btn btn-default2" id="btn-submit"
				   type="submit" name = "Submit" 
				   text= "Send">
		</form>	
	</div>
</div>
<?php
	get_footer();
?>
