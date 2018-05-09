<?php
	/* Template Name: 4 - Search Page
	 */
	get_header();
?>

<?php
	global $wpdb; 
	global $type;
	$query = $_GET['query'] == null ? "" : $_GET['query'];
	$result = $wpdb->get_results("SELECT * FROM casedetails WHERE ".
								 "status LIKE '%$query%' OR fName LIKE '%$query%' OR ".
								 "lName LIKE '%$query%' ORDER BY status DESC, datePosted DESC",
								 ARRAY_A);
								 
?>


<div class="container-fluid feed" id="unsolved-div">
    <h4 class="h4-color">Search results for <?php echo $query?></h4><br><br>
<?php
	foreach($result as $row){
		$id = $row['userID'];
        $src = "http://wordpress.local/5-specific-case?caseNumber={$row['id']}";
		$postId = $row['id'];
		$result2 = $wpdb->get_results("SELECT username FROM users WHERE userID = '$id'");
		$result3 = $wpdb->get_results("SELECT COUNT(*) AS n FROM threadpost WHERE postId = $postId");
?>
      <div class="row forumcase-div">
        <div class="pull-left col-sm-1 voting">
            <button class="vote-btn"><i class="fas fa-caret-up"></i></button>
            <span itemprop="upvoteCount" class="vote-count-post"><?php echo $result3[0]->n;?></span>
            <button class="vote-btn"><i class="fas fa-caret-down"></i></button>
        </div>
        <a class="maintext" href="<?php echo $src ?>">[<?php echo strtoupper($row['status']) ?>] 
		 <?php echo strtoupper($row['lName']) ?>, 
		 <?php echo strtoupper($row['fName']) ?></a>
        <p class="maintext loc"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $row['lastlocation']; ?></p>
        <p class="subtext">Date posted: <?php echo $row['datePosted']?></p>
        <p class="subtext"><i class="fas fa-comment-alt"></i><?php echo $result3[0]->n;?> Comments</p>
        <hr>
      </div>

<?php
	}
?> 
</div>

<?php
	get_footer();
?>
