	
<?php
	/* Template Name: 2 - Browse Cases (Full)
	 */
	get_header();
?>

<?php
	global $wpdb; 
	global $type;
	$type = $_GET['type'] == null ? "unsolved" : $_GET['type'];
	$result = $wpdb->get_results("SELECT * FROM casedetails WHERE ".
								 "status = '$type' ORDER BY lastseen DESC");
	if(strcmp($type, "unsolved") == 0){
?>
		<div class="container-fluid"> 
			<div class="row maindivs" id="browsepics-div">
				<h4><?php echo strtoupper($type)?> CASES</h4>
<?php
	for($i = 0; $i < 4; $i++){
        $caseNumber = $i + 1;
        $src = "http://wordpress.local/5-specific-case?caseNumber={$caseNumber}";
?>      
				<div class="col-sm-3">
                    <a href = "<?php echo $src ?>"><img class=" img-responsive" src="../wp-content/themes/missingPersons/images/icon.png"></a>
					<p>Last Location: <?php echo $result[$i]->lastlocation;?></p>
					<p>Last seen: <?php echo $result[$i]->lastseen;?></p>
				</div>
<?php  }
?>
				<br><br>
				<button class="btn btn-default" id="btn-viewallBP"><a href = "http://wordpress.local/5-specific-case?type={unsolved}">VIEW ALL</a></button>
			</div>
<?php	}
?>
			<div class="row maindivs" id="unsolved-div"> 
				<div class="row headers">
					<h4><?php echo strtoupper($type) ?> CASES</h4>
				</div>
<?php
	for($i = 0; $i < 5; $i++){
        $caseNumber = $i + 1;
        $src = "http://wordpress.local/5-specific-case?caseNumber={$caseNumber}";
?>   
				<div class="row" id="report-div">
					<div class="col-sm-8">
						<p><a href = "<?php echo $src ?>">[<?php echo strtoupper($result[$i]->status) ?>] 
                            <?php echo strtoupper($result[$i]->lName) ?>, <?php echo strtoupper($result[$i]->fName) ?></a></p>
						<p>Date poster: March 23, 2018</p>
						<p>Replies: 10</p>
					</div>
					<div class="col-sm-4">
						<p>Location <br> Taguig</p>
					</div>
				</div><hr>
<?php  }
?>
				<ul class="pagination">
				  <li><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				</ul>
			</div> 
		</div>
<?php
	get_footer();
?>