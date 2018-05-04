<?php
	/* Template Name: 3 - Browse Cases (With Pictures)
	 */
	get_header();
?>



<div class = 'container'>
	<h3>CURRENTLY MISSING</h3><br>
	
    <div class="container-fluid feed">
            <h4 class="h4-color">CURRENTLY MISSING PEOPLE</h4><br>
            <p id="yr-filter"><a href="#">2016</a>  /  <a href="#">2017</a>  /  <a href="#">2018</a></p><br>
        
        <div class="row">
        <?php
            global $wpdb, $i;
            $result = $wpdb->get_results("SELECT * FROM casedetails WHERE status = 'unsolved' LIMIT 8", 
										 ARRAY_A);
            $currentIndex = 0;
			
			foreach($result as $row){
                $currentIndex += 1;
                $src = "http://wordpress.local/5-specific-case?caseNumber={$currentIndex}";
        ?>
        <div class="col-sm-3 offset-sm-1 pic-div">
                    <img class="img-responsive" src="../wp-content/themes/missingPersons/images/icon.png">
                    <p class="maintext"><a href = "<?php echo $src ?>">
						<?php echo $row["fName"];?> 
						<?php echo $row["lName"];?></a>, 
						<?php echo $row["lastlocation"];?></p>
                    <p class="subtext">Last seen: <?php echo $row["lastseen"];?></p>
        </div>
        <?php
            }
        ?>
        </div>
	<button id = 'loadMoreButton' currentIndex = '<?php echo $currentIndex ?>'>LOAD MORE</button>
</div>

<?php
	get_footer();
?>
