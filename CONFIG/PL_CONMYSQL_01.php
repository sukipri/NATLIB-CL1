<?PHP 

	$db_host = "localhost";
    $db_user = "root";
    $db_pass = "holihks45";
	#$db_pass = "";
    $db_name = "natset";
    
    $CONN01 = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
		#if($CONN01){echo"CONNECTED";}else{echo "FAILED"; }

?>