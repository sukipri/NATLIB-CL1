<?php
	$hasil=mkdir("//192.168.9.180/1101r019/E-MR/Signature/Signature_Klien/Edukasi/",0777,true);

	if ($hasil) {
		echo "Direktori baru berhasil dibuat";
	} else {
		echo "Direktori baru gagal dibuat";
	}	

?>