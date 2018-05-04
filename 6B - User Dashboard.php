<?php
    setcookie("logged", "claude");
	/* Template Name: 6 - User Dashboard
	 */
	get_header();
?>

<?php
	global $wpdb;
	global $userID; //get from cookie
	global $username;
	
	$userID = 1;
?>
<div class="container">
	<div class="col-sm-2 ">
		<nav class="nav-sidebar fill-height">
			<ul class="nav tabs">
				<li class=""><a href="#tab1" data-toggle="tab">My Case/s</a></li>
				<li class=""><a href="#tab2" data-toggle="tab">Pinned Cases</a></li>
				<li class="active"><a href="#tab3" data-toggle="tab">Inbox</a></li>
			</ul>
		</nav>
	</div>
	<!-- tab content -->
	<div class="tab-content">
		<div class="tab-pane active text-style" id="tab1">
			<h2>My Case/s</h2>
			<?php
				$username = $wpdb->get_results("SELECT * FROM users WHERE userID=$userID");
				$result = $wpdb->get_results("SELECT * FROM casedetails WHERE userID=$userID", 
											  ARRAY_A);
				
				foreach ( $result as $mycase )   {
			?>
				<div class="row">
					<div class="col-lg-8 panel panel-default">   
						<p><h3>[<?php echo strtoupper($mycase['status']) ?>] 
								<?php echo strtoupper($mycase['lName']) ?>, 
								<?php echo strtoupper($mycase['fName']) ?></h3><p>
						<p>Last seen: <?php echo $mycase['lastseen']; ?><br><?php echo $mycase['lastlocation']; ?></p>

					</div>
				</div>
			<?php
				} 
			?>
			<hr>
		</div>
		<div class="tab-pane text-style" id="tab2">
			<h2>Pinned Cases</h2>
			<div class="row">
            <?php
				$result = ($wpdb->get_results ( "SELECT * FROM users WHERE userid='$userID'"));
				$pinnedcases = array_filter(explode(';', $result[0]->pinnedCases));
				foreach ( $pinnedcases as $pinnedcase )   {
			?>
				<div class="col-lg-8 panel panel-default">
					<?php 
						$casedetails = $wpdb->get_results ( "SELECT * FROM casedetails 
															 WHERE id=".$pinnedcase."");
					?>    
					
					<p><h3>[<?php echo strtoupper($casedetails[0]->status) ?>] 
							<?php echo strtoupper($casedetails[0]->lName) ?>, 
							<?php echo strtoupper($casedetails[0]->fName) ?><h3><p>
					<p>Last seen: <?php echo $casedetails[0]->lastseen; ?><br>
								  <?php echo $casedetails[0]->lastlocation; ?></p>

					<!--<?php
						$threadposter = $wpdb->get_results ( "SELECT * FROM users WHERE userID=".
															$casedetails[0]->userID."");
					?>
					
					<a href="" class="underlined"><?php echo $threadposter[0]->username; ?></a>
					-->
				</div>
			<?php
				}
			?>
			</div>
			<hr>
		</div>
		<div class="tab-pane text-style" id="tab3">
			<h2>Inbox</h2>
			<div class="row">
			<?php
				$result = $wpdb->get_results("SELECT * 
											  FROM (
												SELECT casedetails.*, inbox.senderId, 
													   inbox.receiverId, inbox.dateMessaged, 
													   inbox.message, inbox.postId, 
                                                       inbox.conversationId 
											    FROM inbox, casedetails 
												WHERE casedetails.id = inbox.postId AND 
													(senderId = $userID OR receiverId = $userID) 
												ORDER BY dateMessaged DESC LIMIT 1234124213)
											  AS sub GROUP BY conversationId", 
											  ARRAY_A);
				
				foreach ( $result as $message )   {
			?>
				<div class="col-lg-8 panel panel-default ">
					<p><h3>Subject: [<?php echo strtoupper($message['status']) ?>] 
							<?php echo strtoupper($message['lName']) ?>, 
							<?php echo strtoupper($message['fName']) ?></h3><p>
							<br>
					<?php echo $message['dateMessaged']?>
					<p><?php echo $message['message']?></a>
				</div>
			<?php 
				}
			?>
			</div>
			<hr>
		</div>
	</div>
</div>


<?php
	get_footer();
?>
