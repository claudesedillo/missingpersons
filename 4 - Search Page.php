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

<div class="container">

<?php
	foreach($result as $row){
		$id = $row['userID'];
        $src = "http://wordpress.local/5-specific-case?caseNumber={$row['id']}";
		$postId = $row['id'];
		$result2 = $wpdb->get_results("SELECT username FROM users WHERE userID = '$id'");
		$result3 = $wpdb->get_results("SELECT COUNT(*) AS n FROM threadpost WHERE postId = $postId");
?> 
	<div class="row panel panel-default panel_padding">
		<a href = "<?php echo $src ?>">
			<div class="col-lg-1">
				<div class="row">
					<span class="glyphicon glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
				</div>
				<div class="row">
					&nbsp;&nbsp;<?php echo $result3[0]->n;?> 
				</div>
				<div class="row">
					<span class="glyphicon glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-lg-11">
					<h6>Posted by: <?php echo $result2[0]->username;?> 
						<i><?php echo $row['datePosted'];?></i></h6>
					<h1>[<?php echo strtoupper($row['status']) ?>] 
						 <?php echo strtoupper($row['lName']) ?>, 
						 <?php echo strtoupper($row['fName']) ?></h1>
					<h4><?php echo $row['details'];?></h4>
					<!--<h4>
						Edit: Also is there a way to set a maximum amount a column will resize down to before it stacks instead? I'm trying to use 4 cards but if they resize too small the title lines wrap and then suddenly the alignment of the titles and pictures in the cards is different in each card and it looks awful.
					</h4>
					<h4>
						Thanks!
					</h4>-->
			</div>
		</a>
	</div>
<?php
	}
?> 
</div>

<?php
	get_footer();
?>
