<?PHP 
		
				#VARIABLE GET ID AND VIEW
				$TG01 = @$SQL_SL($_GET['TG01']); #GET ID Tanggal 1
				$TG02 = @$SQL_SL($_GET['TG02']); #GET ID Tanggal 2
				$IDDOK01 = @$SQL_SL($_GET['IDDOK01']); #GET ID NIK DOKTER 
				$IDPSN01 = @$SQL_SL($_GET['IDPSN01']); #GET ID NIK PASIEN 
				

			###DATA FOR GRID AND VIEW DATABASE SQL#######
				#-------------------------------------#
				#DATA QUESTION VERIFIYING 
				$pl_vqa01_sw = $CL_Q($CONN01,"$CL_SL tqa order by RAND()");
                        $pl_vqa01_sww = $CL_FAS($pl_vqa01_sw);
														
				#DATA USER by SESSION ID
				 $pl_vusr01_sw = @$CL_Q($CONN01,"$CL_SL srv_user_01 WHERE user_nama_01='$_SESSION[namauser]'");
					$pl_vusr01_sww = $CL_FAS($pl_vusr01_sw);
					$pl_nr_vusr01_sww = $CL_NR($pl_vusr01_sw);
					
				#DATA TOKEN SS SANDBOX
				$pl_vsstoken_sw = $CL_Q($CONN01,"$CL_SL sstoken WHERE idmain_token_01='SS10001'");
                        $pl_vsstoken_sww = $CL_FAS($pl_vsstoken_sw);

				#DATA DOKTER
				$pl_vw_vdkt01_sw = $CL_Q($CONN01,"$CL_SL nat_dokter WHERE idmain_dokter='$IDDOK01'");
                    $pl_vw_vdkt01_sww = $CL_FAS($pl_vw_vdkt01_sw);

			
						
		#--------------LINE------------------------------#
		#SATUSEHAT SANBOX
		$URI_TYPE = "SANDBOX";
		$URI_DATA_AUTH = "https://api-satusehat-stg.dto.kemkes.go.id/oauth2/v1";
		$URI_DATA_BASE = "https://api-satusehat-stg.dto.kemkes.go.id/fhir-r4/v1";
		$URI_DATA_CONSENT = "https://api-satusehat.dto.kemkes.go.id/consent/v1";
		$ID_UKP = "962175e9-70fe-45fd-8ead-8f763529f527";
		$ID_POLI = "e287edb4-f2d6-4528-ba35-774bf22e55b4";
			#DATA KEYSTORE
			$ORG_ID = "a33ade0f-a26c-45e0-a19f-e206e1ccc255";
			$CLIENT_ID = "iT2YW5uENnrQ5SJEYXntkEEvHX1QY0AgxWmcT1X8f4VboG0d";
			$CLIENT_SEC = "Nmfem4dbEwxBUiZKKdY4k1H98PHzZ70holqNEnpNRVXME7ISUIh7InuOA5eIQHYR"; 
			#--------------LINE------------------------------#
					
?>