<?PHP 
ob_start();
	session_start();
		session_destroy();
		header("LOCATION:../");
			exit;
	ob_flush();

?>