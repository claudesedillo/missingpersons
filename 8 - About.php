<?php
	/* Template Name: 8 - About
	 */
	get_header();
?>

<?php

	If($_POST['Submit']){
		// Run validation if you are not doing it in js
		global $wpdb;
		
		$name  	 = $_POST['name'];
		$email   = $_POST['email'];
		$phone   = $_POST['phone'];
		$message = $_POST['message'];
		
		if($wpdb -> insert('contactus', array(
		   'name'  => $name,  'email'   => $email,
		   'phone' => $phone, 'message' => $message)) == false)
			wp_die('Database Insertion Failed');
		else echo 'Database insertion successful<p/>';
	}
?>

<div class="whiteBlock container-fluid text-center" id = 'aboutSection'>
	<h1><b>LOREM IPSUM</b></h1>
	<h4><b>dolor sit amet</b></h4>
	<br><br>

	<div id = 'aboutFeed' class ='container'>
		<div class = 'row'>
			<div class = 'col-lg-8 col-lg-offset-2'>	
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco 
				laboris nisi ut aliquip ex ea commodo consequat.</p>			
			</div>
		</div>
	</div>
</div>

<div class="whiteBlock container-fluid" id = 'contactSection'>
  
	<div class = 'container'> 
		<h1 class = 'headerWithLines'><b>CONTACT US</b></h1>

	
	
		<div class = 'container' id ='contactDivForm'>
			<form method = "post" action = "">
				<input name="name" type="text" placeholder="Name">
				<br/>
				<input name="email" type="email" placeholder="Email Address">
				<br/>
				<input name="phone" type="number" placeholder="Phone Number">
				<br/>
				<textArea name="message" type="text" placeholder="Message" id = 'contactMessageInput'></textArea>
				<br/>
				<input type="submit" name = "Submit" text= "Send" id = "submitContactMe_b">	
			</form>
		</div>
	</div>
</div>

<?php
	get_footer();
?>
