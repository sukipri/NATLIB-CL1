<?PHP 
@session_start();
	//ob_start();
	 //session_start();
	//include"../../DIST/DIST_GET.php";
	//include"../../CONFIG/MYSQL/MY_CONNECT_PRD.php";
	  if(isset($_POST['hr_acs_login'])){ 
			$username=@trim($SQL_ESC($CONN01,$_POST['us_nama']));
			$passuser=@trim($SQL_ESC($CONN01,$_POST['us_pass']));  // MD5 --> 9e39fe12c7c9c968ceabcd0b80d622a7 	
			$tanya_us=@trim($SQL_ESC($CONN01,$_POST['tanya_us']));
			$jawab_us=@trim($SQL_ESC($CONN01,$_POST['jawab_us']));
				if($jawab_us!==$tanya_us){
                    //header("location:../SU_ADMIN/");
					echo "<script language='javascript'>alert('Hasil Perkalian Salah')</script>";
				echo "<script language='javascript'>window.location = '?'</script>";
				}elseif($jawab_us==$tanya_us ){
						
			//include"../sc/conek.php";
			$mdpass =EN_HS_MD5($passuser);
				$dt=$CL_Q($CONN01,"$CL_SL srv_user_01 WHERE user_nama_01='$username' AND user_pass_01='$mdpass'");
					$bc=$CL_FR($dt);
			if($bc > 0){
				  // session_start(); // di gunakan untuk mengawali perintah session
					//session_start(); 
				   $_SESSION['namauser']=$bc[2];  // di gunakan untuk membandingkan variabel session dengan database
				   $_SESSION['passuser']=$bc[3];
					 //header("location:?HLM=H_LOGIN"); 
					echo"<b>Success....</b>";
					echo"$_SESSION[namauser]";
					echo"$_SESSION[passuser]";
					
					echo"<META HTTP-EQUIV='Refresh' Content='0; URL=NTS_HOME_01.php'>";
					#echo"Masuk Guys";
				exit();
				}else{
				//header("location:../SU_ADMIN/");
				echo "<script language='javascript'>alert('Username or password is wrong')</script>";
				echo "<script language='javascript'>window.location = '?'</script>";
				}
			}else{
            //header("location:../SU_ADMIN/");
			echo "<script language='javascript'>alert('Username or password is wrong')</script>";
			echo "<script language='javascript'>window.location = '?'</script>";
			} }
				//echo $mdpass;
		ob_flush();
?>