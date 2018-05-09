<?php
    //setcookie("logged", "claude");
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
    <div class="container-fluid feed">
        <div class="row profile-div">
            <?php
			$result = $wpdb->get_results ( "SELECT * FROM casedetails WHERE id='$caseid'", ARRAY_A);
			foreach ( $result as $caseprofile )   {
		    ?>
            <div class="col-sm-3"><img class="img-responsive" src="../wp-content/themes/missingPersons/images/icon.png"></div>
            <div class="col-sm-9 details-div">
                    <h3><?php echo $caseprofile['fName'];?>  <?php echo $caseprofile['lName'];?></h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="maintext">Age: </p><span class="info"><?php echo $caseprofile['age'];?></span><br>
                            <p class="maintext">Last seen: </p><span class="info"><?php echo $caseprofile['lastseen'];?></span>
                        </div>
                        <div class="col-sm-6">
                            <p class="maintext">Height: </p><span class="info"><?php echo $caseprofile['height'];?>ft</span><br>
                            <p class="maintext">Weight: </p><span class="info"><?php echo $caseprofile['weight'];?>KG</span>
                        </div>
                    </div>
                    <p class="description"><?php echo $caseprofile['details'];?></p>
                    
                    <button class="icons"><i class="fab fa-facebook"></i></button>
                    <button class="icons"><i class="fab fa-twitter"></i></button>
                    <button class="icons"><i class="far fa-envelope"></i></button>
            </div>
            <?php }?>
        </div>
        
        
        <div class="row thread-div">
        <p class="maintext">[<?php echo strtoupper($caseprofile['status']) ?>] 
				    <?php echo strtoupper($caseprofile['fName']) ?> 
				    <?php echo strtoupper($caseprofile['lName']) ?>, 
                    <?php echo $caseprofile['age'];?></p>
        <?php
			
			$result = $wpdb->get_results ( "SELECT @rownum := @rownum + 1 as commentNumber, 
												threadpost.*, username 
											FROM threadpost, users 
											cross join (select @rownum := 0) r 
											WHERE postId='$caseid' AND 
												threadpost.userId = users.userID 
											ORDER BY dateCommented DESC", ARRAY_A);
			foreach ( $result as $threadpost )   {
		?>
            <div class="row reply-div">
                <span class="maintext username"><?php echo $threadpost['username'];?></span>
                <span class="maintext date"><?php echo date("m-d-y h:i A ", 
								  strtotime($threadpost['dateCommented']))?></span>
                <p class="reply-text"><?php echo $threadpost['message'];?></p>
            </div>
        <?php 
            }
        ?>
        </div>
<?php
    if(!isset($_COOKIE["logged"])) { ?>
        <div class="row newreply-div">
            Want to leave a comment? <a href = "#">Sign up</a> or <a href = #>Login</a> now!
        </div>
    <?php
    }
    else{
    ?>
    <div class="row newreply-div">
        <form method = "POST" action = "">
            <div class = "form-group">
                <textarea type = "text" 
				  class = "form-control padding-10 border-black" 
				  id = "reply-field" rows = "5"
				  placeholder = "Message" name = "message"></textarea>
            </div>
            <input  type="submit" class="btn btn-primary float-right background-black" id = "btn-reply" name = "reply" text = "Submit">
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