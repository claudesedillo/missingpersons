
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
        <?php
            global $wpdb;
            $result = $wpdb->get_results ( "SELECT * FROM casedetails WHERE status = 'unsolved'");
            for($i = 0; $i < 4; $i++){
        ?> 
		<div class="col-sm-3">
			<img class=" img-responsive" 
				 src="../wp-content/themes/missingPersons/images/icon.png">
            <?php
                $caseNumber = $i + 1;
                $src = "http://wordpress.local/5-specific-case?caseNumber={$caseNumber}";
            ?>
            <p><a href = "<?php echo $src ?>"><?php echo $result[$i]->fName;?> <?php echo $result[$i]->lName;?>, <?php echo $result[$i]->lastlocation;?></a></p>
			<p>Last seen: <?php echo $result[$i]->lastseen;?></p>
		</div>
        <?php
            }
        ?>
        <br><br>
		<button class="btn btn-default" id="btn-viewallBP"><a href = "http://wordpress.local/3-browse-cases-with-pictures/">VIEW ALL</a></button>

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
        <?php
            global $wpdb;
            $result = $wpdb->get_results ( "SELECT id, title, dateposted, lastlocation
                                            FROM thread t NATURAL JOIN casedetails cd
                                            WHERE cd.status = 'unsolved'");
            for($i = 0; $i < 2; $i++){
        ?>
		<div class="row" id="report-div">
			<div class="col-sm-8">
				<p><?php echo $result[$i]->title; ?></p>
				<p>Date posted: <?php echo $result[$i]->dateposted; ?></p>
				<p>Replies: 10</p>
			</div>
			<div class="col-sm-4">
				<p>Location <br> <?php echo $result[$i]->lastlocation; ?></p>
			</div>
		</div><hr>
        <?php
            }
        ?>
        <hr>
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
        <?php
            global $wpdb;
            $result = $wpdb->get_results ( "SELECT id, title, dateposted, lastlocation
                                            FROM thread t NATURAL JOIN casedetails cd
                                            WHERE cd.status = 'solved'");
            for($i = 0; $i < 2; $i++){
        ?>
		<div class="row" id="report-div">
			<div class="col-sm-8">
				<p><?php echo $result[$i]->title; ?></p>
				<p>Date posted: <?php echo $result[$i]->dateposted; ?></p>
				<p>Replies: 10</p>
			</div>
			<div class="col-sm-4">
				<p>Location <br> <?php echo $result[$i]->lastlocation; ?></p>
			</div>
		</div><hr>
        <?php
            }
        ?>
        <hr>
	</div> 
</div>

<?php
	get_footer();
?>
