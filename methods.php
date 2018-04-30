<?php
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
			case 'browseCase':
				echo "AAAA" + $i;
				return $i;
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
