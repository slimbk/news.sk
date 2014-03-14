<?php
	if(isset($_GET['page'])) {
		$page=$_GET['page'];
	} else {
		$page='home';
	}
	
	require_once ("./pages/$page.php"); 
	
?>