<?php
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
	global $wpdb;
	$message = "a";
	echo $message;
	if (isset($_POST['action'])) {
		switch ($_POST['action']) {
			case 'contactUsForm':
				$name  	 = $_POST['name'];
				$email   = $_POST['email'];
				$phone   = $_POST['phone'];
				$message = $_POST['message'];
				
				if($wpdb -> insert('contactus', array(
				   'name'  => $name,  'email'   => $email,
				   'phone' => $phone, 'message' => $message)) == false){
					$message ='Database Insertion Failed';
					wp_die();
			    }
				else $message = 'Database insertion successful';
				break;
				
			case 'submitReportForm':	
				$fName  	 = $_POST['fName'];
				$lName  	 = $_POST['lName'];
				$age  	 	 = $_POST['age'];
				$height  	 = $_POST['height'];
				$weight   	 = $_POST['weight'];
				$details 	 = $_POST['report_details'];
				
				if($wpdb -> insert('casedetails', array(
				   'fName'  => $fName,  'lName'   => $lName,
				   'age'  => $age,  'height'   => $height,
				   'weight' => $weight, 'details' => $details)) == false){
				    $message ='Database Insertion Failed';
					wp_die();
			    }
				else $message = 'Database insertion successful';
				break;
					
			case 'signUpForm':	
				$fName  	 = $_POST['first_name'];
				$lName  	 = $_POST['last_Name'];
				$email  	 = $_POST['email'];
				$username  	 = $_POST['username'];
				$password    = $_POST['password'];
				
				if($wpdb -> insert('users', array(
				   'firstName'  => $fName,  'lastName'   => $lName,
				   'email'  => $email,  'username'   => $username,
				   'password' => $password)) == false){
				    $message ='Database Insertion Failed';
					wp_die();
			    }
				else $message = 'Database insertion successful';
				break;
				
			case 'messageForm':	
				$recepient   = $_POST['recepient'];
				$subject  	 = $_POST['subject'];
				$message  	 = $_POST['message'];
				$userId  	 = $_POST['userid'];
				$postId  	 = $_POST['postId'];
				$conversationId = $_POST['conversationId'];
				
				$result = $wpdb->get_results("SELECT * FROM users WHERE username = '$recepient'");
				$result2 = $wpdb->get_results("SELECT * FROM inbox WHERE senderId = '$recepient' AND receiverId = '".$result[0]->userID."' AND postId = '$postId'");
				
				if($result2.length != 0)
					$conversationId = 7;
				else $conversationId = 6;

				if($wpdb -> insert('inbox', array(
				   'receiverId'  => $result[0]->userID,  'lName'   => $lName,
				   'subject'  => $subject,  'message'   => $message,
				   'senderId' => $userid, 'conversationId' => $conversationId,
				   'postId' => $postId)) == false){
				    $message ='DatSbase Insertion Failed $conversationId';
					wp_die();
			    }
				else $message = 'Database insertion successful';
				break;
		}
		echo $message;
	} else if (isset($_GET['action'])) {
		switch ($_GET['action']) {
            case 'login-form':
                if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['password']) && !empty($_GET['password'])){
        
                $email = $_GET['email'];
                $password = $_GET['password'];

                global $wpdb; 
                $result = $wpdb->get_results ( "SELECT * FROM users WHERE username = '$email' && password = '$password'");

                if($result->numRows == 0){
                    //error
                    header("location: http://wordpress.local/wordpress/login");
                }
                else{
                    $user = $result[0];

                    $_SESSION['username'] = $user['username'];
                    $_SESSION['userid'] = $user['userID'];

                    header("location: http://wordpress.local/wordpress/6-user-dashboard");   
                }
        }
        if(true){
            $_SESSION['logged_in'] = true;
        }
                    break;
			case 'browseCasePicLoadMore': 
					$result = $wpdb->get_results ( "SELECT * FROM casedetails ".
												   "WHERE status = 'unsolved' ORDER BY id ".
												   "LIMIT ".$_GET['currentIndex'].", 8", ARRAY_A);
					$htmlSnippet = "";
					$currentIndex = $_GET['currentIndex'];
					
					foreach($result as $row){
						$src = "http://wordpress.local/wordpress/5-specific-case?caseNumber={$row['id']}";
						$currentIndex += 1;
						$htmlSnippet .= 
										'<div class="col-sm-3 offset-sm-1 pic-div">
											<a href = "'.$src.'">
												<img class="img-responsive" src="../wp-content/themes/missingPersons/images/icon.png">
												<p id="nameloc" class="maintext">'.$row['fName'].' '.$row['lName'].', '.
												$row['lastlocation'].'</p>
												<p id="date" class="subtext">Last seen: '.$row['lastseen'].'</p>
											</a>
										</div>';
					}
					echo $htmlSnippet.";".$currentIndex;
					 
					 break;
					 
			default: echo "Error: Invalid action data being passed in AJAX (CHECK JS)";
					 break;
			
		}
		
	}


	function select() {
		echo "The select function is called.";
		exit;
	}

	function insert() {
		echo "The insert function is called.";
		exit;
	}
?>
