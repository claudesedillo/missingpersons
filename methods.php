<?php
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-includes/wp-db.php' );
	global $wpdb;
	
	if (isset($_POST['action'])) {
		switch ($_POST['action']) {
			case 'insert':
				insert();
				break;
			case 'select':
				select();
				break;
		}
		
	} else if (isset($_GET['action'])) {
		switch ($_GET['action']) {
			case 'browseCasePicLoadMore': 
					
					$result = $wpdb->get_results ( "SELECT * FROM casedetails WHERE status = 'unsolved'");
					$htmlSnippet = "";
					$currentIndex;
					
					for($currentIndex = 0; $currentIndex < 8; $currentIndex++){
						$caseNumber = $currentIndex + 1;
						$src = "http://wordpress.local/5-specific-case?caseNumber={$caseNumber}";
				
						$htmlSnippet .= '<span class="casePreview"> 
											<a href="'.$src.'">
												<img class="alignleft" 
													 src="https://365psd.com/images/'. 
														 'istock/previews/1012/101282869'.
														 '-white-blank-poster-mockup.jpg" 
													 alt="Poster" width="205" height="228">
											</a>
											<p class = "caseDescription">
												<strong><a href = '.
													$src.'>'.$result[$currentIndex]->fName.' '.
													$result[$currentIndex]->lName.'</a>, '. 
													$result[$currentIndex]->lastlocation.'</strong><br><br>
												Last seen: '.$result[$currentIndex]->lastseen.'<br>
											</p>
										</span>';
					}
					echo $htmlSnippet;
					 
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
