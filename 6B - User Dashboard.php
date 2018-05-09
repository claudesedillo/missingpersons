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
<div class="container-fluid feed">
	<div class="col-sm-2" id="sidenav">
		<nav class="nav-sidebar fill-height">
            <ul class="nav nav-pills nav-stacked">
                <li  class="active"><a data-toggle="tab" href="#usercases"><span class="glyphicon glyphicon-file gi-right"></span> My Case/s</a></li>
                <li><a data-toggle="tab" href="#pinnedcases"><span class="glyphicon glyphicon-pushpin gi-right"></span> Pinned Cases</a></li>
                <li><a data-toggle="tab" href="#inbox"><span class="glyphicon glyphicon-envelope gi-right"></span>  Inbox</a></li>
            </ul>
		</nav>
	</div>
    
	<!-- tab content -->
    <div class="col-sm-10 tab-content">
        <div class="tab-pane" id="usercases">
			<?php
				$username = $wpdb->get_results("SELECT * FROM users WHERE userID=$userID");
				$result = $wpdb->get_results("SELECT * FROM casedetails WHERE userID=$userID", 
											  ARRAY_A);
				
				foreach ( $result as $mycase )   {
					$src = "http://wordpress.local/5-specific-case?caseNumber={$mycase['id']}";
			?>
                <div class="row case-div">
                        <a class="maintext" href="<?php echo $src ?>">[[<?php echo strtoupper($mycase['status']) ?>] 
								<?php echo strtoupper($mycase['lName']) ?>, 
								<?php echo strtoupper($mycase['fName']) ?></a>
                        <p class="maintext loc"><span class="glyphicon glyphicon-map-marker"></span><?php echo $mycase['lastlocation']; ?></p>  
                        <p class="subtext">Date posted: Change this to dateposted!</p>
                        <p class="subtext"><b>Replies: Change this</b></p>
                    <hr>
                </div>
			     <hr>
			<?php
				} 
			?>
        </div> <!-- end of usercases -->
    
		<div class="tab-pane" id="pinnedcases">
            <?php
				$result = ($wpdb->get_results ( "SELECT * FROM users WHERE userid='$userID'"));
				$pinnedcases = array_filter(explode(';', $result[0]->pinnedCases));
				foreach ( $pinnedcases as $pinnedcase )   {
			?>
				<div class="row case-div">
						<?php 
							$casedetails = $wpdb->get_results ( "SELECT * FROM casedetails 
																 WHERE id=".$pinnedcase."");
							$src = "http://wordpress.local/5-specific-case?caseNumber={$casedetails[0]->id}";
						?>    
                    <a id="title" class="maintext" href="<?php echo $src ?>">[<?php echo strtoupper($casedetails[0]->status) ?>] 
								<?php echo strtoupper($casedetails[0]->lName) ?>, 
								<?php echo strtoupper($casedetails[0]->fName) ?></a>
                    <p class="maintext loc"><span class="glyphicon glyphicon-map-marker"></span><?php echo $casedetails[0]->lastlocation; ?></p>  
                    <p id="datepost" class="subtext">Date posted: April 27, 2017 (Actual Date Posted here)</p>
                    <p id="replies" class="subtext"><b>Replies: 10 (Actual Repllier here)</b></p>				<hr>
				</div>
                <hr>
			<?php
				}
			?>
        </div> <!-- end of pinnedcases -->
			
		<div class="tab-pane" id="inbox">
            <a class="btn btn-default2" data-toggle="tab" id="btn-newmsg" href="#newmsg-div"><span class="glyphicon glyphicon-edit gi-right"></span> COMPOSE</a><br><br><br>
            <?php
				$result = $wpdb->get_results("SELECT * 
											  FROM (
												SELECT casedetails.*, inbox.senderId, 
													   inbox.receiverId, inbox.dateMessaged, 
													   inbox.message, inbox.postId, 
                                                       inbox.conversationId, 
													   sender.username AS senderName,
													   receiver.username AS receiverName 
											    FROM inbox, casedetails, users AS sender, 
													 users AS receiver  
												WHERE  sender.userID = senderId AND 
													   receiver.userID = receiverId AND 
													   casedetails.id = inbox.postId AND 
													(senderId = $userID OR receiverId = $userID) 
												ORDER BY dateMessaged DESC LIMIT 1234124213)
											  AS sub GROUP BY conversationId", 
											  ARRAY_A);
				
				foreach ( $result as $message )   {
			?>
                <div class="row msg-div">
                       <div class="col-sm-1"><span class="glyphicon glyphicon-record read"></span></div>
                       <div class="col-sm-3"><p class="subtext">Subject: [<?php echo strtoupper($message['status']) ?>] 
							<?php echo strtoupper($message['lName']) ?>, 
							<?php echo strtoupper($message['fName']) ?></p></div>
                       <div class="col-sm-6"><a id="title" class="maintext" href="#">RE: Spider-Man</a></div>
                       <div class="col-sm-2"><p class="subtext"><?php echo date("F j Y; h:i:s A", strtotime($message['dateMessaged']))?></p></div>
                       <hr>
                </div>
            
<!--
				<div class="col-lg-8 panel panel-default ">
					<p><h3></h3><p>
					<p>c/o <//?php echo $message['senderId'] == $userID ? 
										$message['receiverName'] : $message['senderName']?>
					(<//?php echo date("F j Y; h:i:s A", strtotime($message['dateMessaged']))?>)</p>
					<p><i>&nbsp;&nbsp;&nbsp;&nbsp;<//?php echo $message['message']?></i></p>
				</div>
-->
			<?php 
				}
			?>
        </div>
    </div>		
</div>

<?php
	get_footer();
?>
