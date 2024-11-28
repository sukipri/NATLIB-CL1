<?PHP 
		
				#VARIABLE GET ID AND VIEW
				$TG01 = @$SQL_SL($_GET['TG01']); #GET ID Tanggal 1
				$TG02 = @$SQL_SL($_GET['TG02']); #GET ID Tanggal 2
				$IDFAK01 = @$SQL_SL($_GET['IDFAK01']); #GET ID FAKULTAS
				

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

			#--------------LINE------------------------------#
			#DATA FAKULTAS
			$pl_vw_vfak01_sw = $CL_Q($CONN01,"$CL_SL nts_fak WHERE idmain_fak_01='$IDFAK01'");
			$pl_vw_vfak01_sww = $CL_FAS($pl_vw_vfak01_sw);
						
		#--------------LINE------------------------------#

			
			#--------------LINE------------------------------#
					
?>