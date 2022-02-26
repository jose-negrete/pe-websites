<?php 

	// Set query string variable
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}

	// Display page for each person
	function getTemplate($page){
		include($page . '.php');
	}
	

?>