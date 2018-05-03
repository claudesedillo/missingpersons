	
<?php
	/* Template Name: 2 - Browse Cases (Full)
	 */
	get_header();
?>

<?php
	global $wpdb; 
	global $type;
	$type = $_GET['type'] == null ? "unsolved" : $_GET['type'];
	$result = $wpdb->get_results("SELECT *, (SELECT COUNT(*) FROM 
											 threadpost WHERE postId = id) AS n   
								  FROM casedetails WHERE status = '$type' 
								  ORDER BY lastseen DESC, datePosted DESC 
								  LIMIT 4", ARRAY_A);
	if(strcmp($type, "unsolved") == 0){
?>
		<div class="container-fluid"> 
			<div class="row maindivs" id="browsepics-div">
				<h4><?php echo strtoupper($type)?> CASES</h4>
<?php
	foreach($result as $row){
        $src = "http://wordpress.local/5-specific-case?caseNumber={$caseNumber}";
?>      
				<div class="col-sm-3">
                    <a href = "<?php echo $src ?>">
						<img class=" img-responsive" 
							 src="../wp-content/themes/missingPersons/images/icon.png"></a>
					<p>Last Location: <?php echo $row['lastlocation'];?></p>
					<p>Last seen: <?php echo $row['lastseen'];?></p>
				</div>
<?php  }
?>
				<br><br>
				<button class="btn btn-default" id="btn-viewallBP"><a href = "http://wordpress.local/5-specific-case?type={unsolved}">VIEW ALL</a></button>
			</div>
<?php }
?>
			<div class="row maindivs" id="unsolved-div"> 
				<div class="row headers">
					<h4><?php echo strtoupper($type) ?> CASES</h4>
				</div>
<?php

	$result = $wpdb->get_results("SELECT *, (SELECT COUNT(*) FROM 
											 threadpost WHERE postId = id) AS n   
								  FROM casedetails WHERE status = '$type' 
								  ORDER BY lastseen DESC, datePosted DESC 
								  LIMIT 4", ARRAY_A);
	foreach($result as $row){
        $src = "http://wordpress.local/5-specific-case?caseNumber={$row['id']}";
?>   
				<div class="row" id="report-div">
					<div class="col-sm-8">
						<p><a href = "<?php echo $src ?>">
						   [<?php echo strtoupper($row['status']) ?>] 
                            <?php echo strtoupper($row['lName']) ?>, 
							<?php echo strtoupper($row['fName']) ?></a></p>
						<p>Date poster: <?php echo $row['datePosted'] ?></p>
						<p>Replies: <?php echo $row['n'] ?></p>
					</div>
					<div class="col-sm-4">
						<p>Location <br> <?php echo $row['lastlocation'] ?></p>
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
