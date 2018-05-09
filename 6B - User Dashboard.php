<?php
    //setcookie("logged", "claude");
	/* Template Name: 6 - User Dashboard
	 */
	if(!isset($_COOKIE["logged"])) {
        wp_redirect( get_site_url().'/404-page/'); exit;
    }
	get_header();
?>

<?php
	global $wpdb;
	global $userID; //get from cookie
	global $username;
	
	$userID = 1;
?>
<div class="container-fluid feed">
    <div class="col-sm-2" id="sidenav" user = "<?php $userID ?>">
        <ul class="nav nav-pills nav-stacked">
            <li  class="active"><a data-toggle="tab" href="#usercases"><span class="glyphicon glyphicon-file gi-right"></span> My Case/s</a></li>
            <li><a data-toggle="tab" href="#pinnedcases"><span class="glyphicon glyphicon-pushpin gi-right"></span> Pinned Cases</a></li>
            <li><a data-toggle="tab" href="#inbox"><span class="glyphicon glyphicon-envelope gi-right"></span>  Inbox</a></li>
        </ul>
    </div>
    
	<!-- tab content -->
    <div class="col-sm-10 tab-content">
        <div class="tab-pane" id="usercases">
			<?php
				$username = $wpdb->get_results("SELECT * FROM users WHERE userID=$userID");
				$result = $wpdb->get_results("SELECT * FROM casedetails WHERE userID=$userID", 
											  ARRAY_A);
				
				foreach ( $result as $mycase )   {
                    $caseID = $mycase['id'];
					$src = "http://wordpress.local/5-specific-case?caseNumber={$caseID}";
                    		
                    $replies = $wpdb->get_results("SELECT COUNT(*) AS n FROM threadpost WHERE postId = $caseID");
			?>
                <div class="row forumcase-div">
                    <a class="maintext" href="<?php echo $src ?>">[<?php echo strtoupper($mycase['status']) ?>] 
								<?php echo strtoupper($mycase['lName']) ?>, 
								<?php echo strtoupper($mycase['fName']) ?></a>
                    <p class="maintext loc"><span class="glyphicon glyphicon-map-marker"></span><?php echo $mycase['lastlocation']; ?></p>
                    <p class="subtext">Date posted: <?php echo $mycase['datePosted']; ?></p>
                    <p class="subtext"><i class="fas fa-comment-alt"></i> <?php echo $replies[0]->n; ?> Comments</p>
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
				<div class="row forumcase-div">
						<?php 
							$casedetails = $wpdb->get_results ( "SELECT * FROM casedetails 
																 WHERE id=".$pinnedcase."");
                            $caseID = $casedetails[0]->id;
					        $src = "http://wordpress.local/5-specific-case?caseNumber={$caseID}";
                    		
                            $replies = $wpdb->get_results("SELECT COUNT(*) AS n FROM threadpost WHERE postId = $caseID");
                    
							$src = "http://wordpress.local/5-specific-case?caseNumber={$caseID}";
						?>
                    <a class="maintext" href="<?php echo $src ?>">[<?php echo strtoupper($casedetails[0]->status) ?>] 
								<?php echo strtoupper($casedetails[0]->lName) ?>, 
								<?php echo strtoupper($casedetails[0]->fName) ?></a>
                    <p class="maintext loc"><span class="glyphicon glyphicon-map-marker"></span><?php echo $casedetails[0]->lastlocation; ?></p>
                    <p class="subtext">Date posted: <?php echo $mycase['datePosted']; ?></p>
                    <p class="subtext"><i class="fas fa-comment-alt"></i> <?php echo $replies[0]->n;?></p>
                    <hr>
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
                       <div class="col-sm-6"><a id="title" class="maintext" href="#">RE: <?php echo $message['senderId'] == $userID ? 
																					$message['receiverName'] : $message['senderName'] ?></a></div>
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
		
		<div class="tab-pane" id="newmsg-div">
		   <h5 class="h4-color">NEW MESSAGE</h5>
		   <form id = "messageForm" method = "post">
			   <input type="text" class="form-control" id = "recepient" name = "recepient" placeholder="Recepient">
			   <input type="text" class="form-control" id = "subject" name = "subject" placeholder="Subject">
			   <textarea class="form-control" cols="40" id="message" name="message" placeholder="Your message..." rows="10"></textarea>
			   <button class="btn btn-default2" id="btn-send"
				   type="submit" name = "Submit">Send</button>
		   </form>
		   <button class="btn btn-default2 btn-back" data-toggle="tab" href="#inbox">BACK</button>
		</div>

		<div class="tab-pane" id="viewmsg-div">
		   <h3 class="maintext title">Subject: LF: Soul Stone</h3>
		   <button class="btn btn-default2 btn-back" data-toggle="tab" href="#inbox">BACK</button>
		   <div class="row thread-div">
				<span class="maintext username">@thanos</span>
				<span class="maintext date">05-05-2018 9:30 pm</span>
				<p class="reply-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   </div>
		   <div class="row thread-div">
				<span class="maintext username">@ironman (you)</span>
				<span class="maintext date">05-05-2018 9:30 pm</span>
				<p class="reply-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		   </div>
		   <div class="row" id="reply-div">
			   <form>
				   <textarea class="form-control" cols="40" id="reply" name="message" placeholder="Reply..." rows="10"></textarea>
			   </form>
			   <button class="btn btn-default2" id="btn-send">SEND</button>
		   </div>
		</div> <!-- end of viewmsg-div -->
    </div>		
</div>

<?php
	get_footer();
?>
