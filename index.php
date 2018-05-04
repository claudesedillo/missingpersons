
<?php
	/* Template Name: 1 - Home
	 */
	get_header();
?>


    <div class="container-fluid banner">
        <div class="row">
            <div class="col-md-4" id="cot-div">
                <h2>ABCDEFGHIJKLMN<br>OPQRSTUVWXYZ</h2><br><p>abcdefghijklmn<br>opqrstuvwxyz<br>0123456789</p><br>
                <button class="btn btn-default" id="cot-btn">submit a report</button>
            </div>
        </div>
    </div>
	
	<div class="container-fluid feed" id="pic-feed">
        <h4>HAVE YOU SEEN THESE PEOPLE?</h4><br>
        <div class="row">
        <?php
            global $wpdb;
            $result = $wpdb->get_results ( "SELECT *, (SELECT COUNT(*) FROM 
												threadpost WHERE postId = id) AS n 
											FROM casedetails 
											WHERE status = 'unsolved' 
											ORDER BY n DESC, datePosted DESC 
											LIMIT 4", ARRAY_A);
            foreach($result as $row){	
        ?> 
		<div class="col-sm-3 offset-sm-1">
			<img class=" img-responsive" 
				 src="../wp-content/themes/missingPersons/images/icon.png">
            <?php
                $src = "http://wordpress.local/5-specific-case?caseNumber={$row['id']}";
            ?>
            <p class="maintext"><a href = "<?php echo $src ?>"><?php echo $row['fName'];?> 
											  <?php echo $row['lName'];?>, 
											  <?php echo $row['lastlocation'];?></a></p>
			<p class="subtext">Last seen: <?php echo $row['lastseen'];?></p>
		</div>
        <?php
            }
        ?>
        </div>
        <br><br>
        <button class="btn btn-default btn-viewall"><a href ="http://wordpress.local/3-browse-cases-with-pictures">VIEW ALL</a></button>
	</div>

    <div class="container-fluid feed" id="unsol-div">
        <h4>UNSOLVED CASES</h4>
        <button class="btn btn-default" id="btn-viewallUN">
		<a href ="http://wordpress.local/2-browse-cases-full?type={unsolved}">VIEW ALL
		</a>
        </button>
        <?php
            global $wpdb;
            $result = $wpdb->get_results("SELECT *, (SELECT COUNT(*) FROM 
													 threadpost WHERE postId = id) AS n 
										  FROM casedetails 
										  WHERE status = 'unsolved' 
										  ORDER BY datePosted DESC LIMIT 2", ARRAY_A);	
		    foreach($result as $row){
            $src = "http://wordpress.local/5-specific-case?caseNumber={$row['id']}";
		?>
            <div class="row">
                    <a class="maintext" href="<?php echo $src ?>">[<?php echo strtoupper($row['status']) ?>] 
					 <?php echo strtoupper($row['lName']) ?>, 
					 <?php echo strtoupper($row['fName']) ?></a>
                    <p class="maintext loc"><span class="glyphicon glyphicon-map-marker"></span> Location <br> <?php echo $row['lastlocation']; ?></p>  
                    <p class="subtext">Date posted: <?php echo $row['dateposted']; ?></p>
                    <p  class="subtext"><b>Replies: <?php echo $row['n'];?></b></p>
                    <hr>
            </div>
        <?php
            }
        ?>
        <br>
	</div> 
	
        <div class="container-fluid feed" id="sol-div">
            <h4>SOLVED CASES</h4>
            <button class="btn btn-default" id="btn-viewallSOL">
			 <a href ="http://wordpress.local/2-browse-cases-full?type={solved}">VIEW ALL
			 </a>
            </button>
            <br>
            <?php
            global $wpdb;
            $result = $wpdb->get_results("SELECT *, (SELECT COUNT(*) FROM 
													 threadpost WHERE postId = id) AS n 
										  FROM casedetails 
										  WHERE status = 'solved' 
										  ORDER BY datePosted DESC LIMIT 2", ARRAY_A);
            foreach($result as $row){
            $src = "http://wordpress.local/5-specific-case?caseNumber={$row['id']}";
		  ?>
            <div class="row">
                    <a class="maintext" href="<?php echo $src ?>">[<?php echo strtoupper($row['status']) ?>] 
					 <?php echo strtoupper($row['lName']) ?>, 
					 <?php echo strtoupper($row['fName']) ?></a>
                    <p class="maintext loc"><span class="glyphicon glyphicon-map-marker"></span> Location <br> <?php echo $row['lastlocation']; ?></p>  
                    <p class="subtext">Date posted: <?php echo $row['dateposted']; ?></p>
                    <p  class="subtext"><b>Replies: <?php echo $row['n'];?></b></p>
                    <hr>
            </div>
            <?php
            }
            ?>
		</div> <br><br>

<?php
	get_footer();
?>
