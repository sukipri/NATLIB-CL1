<?PHP 
ob_start();
	session_start();
		session_destroy();
		header("LOCATION:../PL_TTD_LIST_01.php");
			exit;
	ob_flush();

?>