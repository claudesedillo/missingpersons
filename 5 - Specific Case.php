<?php
    setcookie("logged", "claude");
	/* Template Name: 5 - Specific Case
	 */
	 
	get_header();

	global $wpdb; 
	$caseid = $_GET['caseNumber'];
	$userID = 1; //get this value dynamically
          
	if($_POST['reply']){
		
		$threadid  	 = $caseid;
		$message 	 = $_POST['message'];
		
		if($wpdb -> insert('threadpost', array(
		   'threadId'  	  => $caseid,
		   'postId'		  => $caseid,
           'userId'   	  => $userID,
		   'message' 	  => $message
        )) == false)
			wp_die('Database Insertion Failed');
		else echo 'Database insertion successful<p/>';
	}
?>

	<div class = "container-fluid width-85 padding-20 border-black margin-top-40" id = "profile">
		<div id = "info" class = "row"> 
		 <?php
			$result = $wpdb->get_results ( "SELECT * FROM casedetails WHERE id='$caseid'", ARRAY_A);

			foreach ( $result as $caseprofile )   {
		?>       
			<div class = "col-md-4">
				<img id = "mugshot" class="loat-left margin-right-20 img-responsive" 
					 src="../wp-content/themes/missingPersons/images/default-avatar.jpg">
				<p id = "missing-person-name" class="fontsize-30">
					<?php echo $caseprofile['fName'];?>  <?php echo $caseprofile['lName'];?></p>
			</div>
				   
			<div class = "col-md-4">
				<p id = "missing-person-age">Age: <?php echo $caseprofile['age'];?></p>
				<p id = "missing-person-lastseen">Last Seen: <?php echo $caseprofile['lastseen'];?></p>
				<p id = "missing-person-lastseen">Location: <?php echo $caseprofile['lastlocation'];?></p>
			</div>
			<div class = "col-md-4">
				<p id = "missing-person-weight">Weight: <?php echo $caseprofile['weight'];?>KG</p>
				<p id = "missing-person-height">Height: <?php echo $caseprofile['height'];?>ft</p>
			</div>
			<div class = "col-md-8">
				<br>
				<p id = "description"><?php echo $caseprofile['details'];?></p>
				<br>
			</div>
			<div class = "col-md-8">
				<span>Share this post</span>
				<ul class = "list-inline color-white" id = "icons">
					<li class = "list-inline-item">
						<a href = "#"><i class="fab fa-facebook-f iconLink"></i></a>
					</li>
					<li class = "list-inline-item">
						 <a href = "#"><i class="fab fa-google-plus iconLink"></i></a>
					</li>
					<li class = "list-inline-item">
						 <a href = "#"><i class="fab fa-twitter iconLink"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
												 
	<div class = "container width-85 padding-20" id = "thread">
		<h3 id = "thread-title">
			<a id="title" class="maintext" href="<?php echo $src ?>">
				[<?php echo strtoupper($caseprofile['status']) ?>] 
				 <?php echo strtoupper($caseprofile['fName']) ?> 
				 <?php echo strtoupper($caseprofile['lName']) ?>, 
				 <?php echo $caseprofile['age'];?></a></h3>

		<?php
			}
			
			$result = $wpdb->get_results ( "SELECT @rownum := @rownum + 1 as commentNumber, 
												threadpost.*, username 
											FROM threadpost, users 
											cross join (select @rownum := 0) r 
											WHERE postId='$caseid' AND 
												threadpost.userId = users.userID 
											ORDER BY dateCommented DESC", ARRAY_A);
			foreach ( $result as $threadpost )   {
		?>
			<div class = "row thread-post thread-post-message border-black margin-10">
				<div class = "thread-post-user-info padding-10">
					<img class = "float-left margin-right-10 comment-user-pic" 
						 src = "../wp-content/themes/missingPersons/images/default-avatar.jpg">
					<span class="user-poster badge badge-pill badge-danger">
						<?php echo $threadpost['username'];?>
						<i class="fab fa-angular"></i> </span>
					<small class="text-time"><em>
						<span class = "pull-right">#<?php echo $threadpost['commentNumber'];?></span> 
						<span class = " date-time pull-right">
							<?php echo date("m-d-y h:i A ", 
								  strtotime($threadpost['dateCommented']))?></span></em>
				    </small>
				</div>
				<div class = "message-div">
					<p class = "message padding-10"><?php echo $threadpost['message'];?></p>
				</div>
			</div>
		<?php }
		?>
	</div>
<?php
    if(!isset($_COOKIE["logged"])) {
    ?>
        <div class = "container width-85 padding-20" id = "signup-div">
            <div id = "signup-header" class = "padding-10 background-black">
                <p class = "text-white">Want to leave a comment? <a href = "#">Sign up</a> or <a href = "#">Login</a> now!</p>
            </div>
        </div>
    <?php
    }
    else{
    ?>
        <div class = "container width-85 padding-20" id = "reply-div">
            <div id = "reply-header" class = "padding-10 background-black">
                <p class = "text-white">Leave a reply</p>
            </div>
            <form method = "POST" action = "">
                <div class = "form-group">
                    <textarea type = "text" 
							  class = "form-control padding-10 border-black" 
							  id = "reply-field" rows = "5"
							  placeholder = "Message" name = "message"></textarea>
                </div>
                <input  type="submit" class="btn btn-primary float-right background-black" id = "btn-reply" name = "reply" text = "Reply">
                <button type="button" class="btn btn-primary float-right background-black" id = "btn-preview">Preview</button>
                <button type="button" class="btn btn-primary float-right background-black" id = "btn-cancel">Cancel</button>
            </form>
        </div>
    <?php
        
    }
?>

<?php
	get_footer();
?>