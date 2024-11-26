<?PHP 

	$serverName = "192.168.9.202"; //serverName\instanceName
	$connectionInfo = array( 
	#"Database"=>"Citarum",
	 "UID"=>"edppwc", 
	"PWD"=>"7@kkum");
	$connsrv = sqlsrv_connect( $serverName, $connectionInfo);
	if($connsrv) {
		/*
			echo "Koneksi Berhasil.<br />";
			$pl_ctr_vuser01_sw = sqlsrv_query($connsrv,"SELECT PasienNomorRM,PasienNama FROM Citarum.dbo.TPasien WHERE PasienNomorRM='730305'");
			$pl_ctr_vuser01_sww = sqlsrv_fetch_array($pl_ctr_vuser01_sw);
			echo $pl_ctr_vuser01_sww['PasienNama'];
		*/
	}else{
		echo "Connection could not be established.<br />";
		die( print_r( sqlsrv_errors(), true));
	}

?>