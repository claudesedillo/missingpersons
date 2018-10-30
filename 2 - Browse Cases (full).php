	
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
		<div class="container-fluid feed"> 
			<div class="row maindivs" id="browsepics-div">
				<h4 class="h4-color"><?php echo strtoupper($type)?> CASES</h4><br>
<?php
	foreach($result as $row){
        $src = "http://wordpress.local/wordpress/5-specific-case?caseNumber={$row['id']}";
?>      
				<div class="col-sm-3 offset-sm-1 pic-div">
                    <a href = "<?php echo $src ?>">
						<img class=" img-responsive" 
							 src="../wp-content/themes/missingPersons/images/icon.png">
						<p id="nameloc" class="maintext"><?php echo $row['fName'];?>  <?php echo $row['lName'];?>, 
							<?php echo $row['lastlocation'];?></p>
						<p id="date" class="subtext">Last seen: <?php echo $row['lastseen'];?></p>
					</a>
			</div>
<?php  }
?>
				<button class="btn btn-default" id="btn-viewallBP"><a href = "http://wordpress.local/wordpress/5-specific-case?type={unsolved}">VIEW ALL</a></button>
			</div>
<?php }
?>
			<div class="row maindivs" id="unsolved-div"> 
				<h4 class="h4-color"><?php echo strtoupper($type) ?> CASES</h4>
<?php

	$result = $wpdb->get_results("SELECT *, (SELECT COUNT(*) FROM 
											 threadpost WHERE postId = id) AS n   
								  FROM casedetails WHERE status = '$type' 
								  ORDER BY lastseen DESC, datePosted DESC 
								  LIMIT 4", ARRAY_A);
	foreach($result as $row){
        $src = "http://wordpress.local/wordpress/5-specific-case?caseNumber={$row['id']}";
?>   
			<div class="row forumcase-div">
                    <a id="title" class="maintext" href="<?php echo $src ?>">[<?php echo strtoupper($row['status']) ?>] 
					 <?php echo strtoupper($row['lName']) ?>, 
					 <?php echo strtoupper($row['fName']) ?></a>
                    <p class="maintext loc"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row['lastlocation']; ?></p>  
                    <p id="datepost" class="subtext">Date posted: <?php echo $row['dateposted']; ?></p>
                    <p id="replies"  class="subtext"><b>Replies: <?php echo $row['n'];?></b></p>
                    <hr>
            </div>
<?php  }
?>
				<ul class="pagination pagination-sm">
				  <li class = "active"><a href="#">1</a></li>
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
