<?php
	/* Template Name: 3 - Browse Cases
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


<div class = 'container'>
	<h3>CURRENTLY MISSING</h3><br>
	
	<ul class="breadcrumb">
		<li><a href="#">2017</a></li>
		<li><a href="#">2018</a></li>
		<li><a href="#">2019</a></li>
	</ul>
	<div id="caseFeed">
		
	</div>
	<button id = 'loadMoreButton'>LOAD MORE</button>
</div>
<?php
	get_footer();
?>
