
<?php
	/* Template Name: 1 - Home
	 */
	get_header();
?>


<div class="container-fluid"> 
	<div class="row" id="cot-div"> <!-- call to action button -->
		<div class="col-sm-7" id="cot-submit">
			<br>Lorem ipsum dolor sit amet, consectetur 
				adipiscing elit, sed do eiusmod tempor 
				incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation 
				ullamco laboris nisi ut aliquip ex ea 
				commodo consequat. Duis aute irure dolor in 
				reprehenderit in voluptate velit esse cillum 
				dolore eu fugiat nulla pariatur. <br>
		   <a class="btn btn-default" id="btn-submit">SUBMIT</a>
		</div>
		<div class="col-sm-5"><!-- image goes here --></div>
	</div>
	
	<div class="row maindivs" id="browsepics-div">
		<h4>Have you seen these people?</h4>
		<div class="col-sm-3">
			<img class=" img-responsive" 
				 src="../wp-content/themes/missingPersons/images/icon.png">
			<p>First Last, Taguig</p>
			<p>Last seen: March 23, 2018</p>
		</div>
		<div class="col-sm-3">
			<img class=" img-responsive" 
				 src="../wp-content/themes/missingPersons/images/icon.png">
			<p>First Last, Taguig</p>
			<p>Last seen: March 23, 2018</p>
		</div>
		<div class="col-sm-3">
			<img class=" img-responsive" 
				 src="../wp-content/themes/missingPersons/images/icon.png">
			<p>First Last, Taguig</p>
			<p>Last seen: March 23, 2018</p>
		</div>
		<div class="col-sm-3">
			<img class=" img-responsive" 
				 src="../wp-content/themes/missingPersons/images/icon.png">
			<p>First Last, Taguig</p>
			<p>Last seen: March 23, 2018</p>
		</div><br><br>
		<button class="btn btn-default" id="btn-viewallBP">VIEW ALL</button>
	</div>
	<div class="row maindivs" id="unsolved-div"> <!-- unsolved cases -->
		<div class="row headers">
			<div class="col-sm-8">
				<h4>UNSOLVED CASES</h4>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-default" id="btn-viewallUN">VIEW ALL</button>
			</div>
			<hr>
		</div>
		<div class="row" id="report-div">
			<div class="col-sm-8">
				<p>[ACTIVE] LOREM IPSUM</p>
				<p>Date poster: March 23, 2018</p>
				<p>Replies: 10</p>
			</div>
			<div class="col-sm-4">
				<p>Location <br> Taguig</p>
			</div>
		</div><hr>
		<div class="row" id="report-div">
			<div class="col-sm-8">
				<p>[ACTIVE] LOREM IPSUM</p>
				<p>Date poster: March 23, 2018</p>
				<p>Replies: 10</p>
			</div>
			<div class="col-sm-4">
				<p>Location <br> Taguig</p>
			</div>
		</div><hr>
	</div> 
	
	<div class="row maindivs" id="solved-div"> <!-- solved cases -->
		<div class="row headers">
			<div class="col-sm-8">
				<h4>SOLVED CASES</h4>
			</div>
			<div class="col-sm-4">
				<button class="btn btn-default" id="btn-viewallSOL">VIEW ALL</button>
			</div>
			<hr>
		</div>
		<div class="row" id="report-div">
			<div class="col-sm-8">
				<p>[ACTIVE] LOREM IPSUM</p>
				<p>Date poster: March 23, 2018</p>
				<p>Replies: 10</p>
			</div>
			<div class="col-sm-4">
				<p>Location <br> Taguig</p>
			</div>
		</div><hr>
		<div class="row" id="report-div">
			<div class="col-sm-8">
				<p>[ACTIVE] LOREM IPSUM</p>
				<p>Date poster: March 23, 2018</p>
				<p>Replies: 10</p>
			</div>
			<div class="col-sm-4">
				<p>Location <br> Taguig</p>
			</div>
		</div><hr>
	</div> 
</div>

<?php
	get_footer();
?>
