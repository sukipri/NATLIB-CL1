<br>
<div class="container">
<b>TOKEN AUTH SATU SEHAT</b>
<hr>
<?php
	$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "$URI_DATA_AUTH/accesstoken?grant_type=client_credentials",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_SSL_VERIFYPEER => true,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "client_id=$CLIENT_ID&client_secret=$CLIENT_SEC",
		CURLOPT_HTTPHEADER => array(
				"Content-Type: application/x-www-form-urlencoded"
		),
	));

	$response = curl_exec($curl);
	#if($response){		
		$en_json = json_encode($response);
		$de_enjson = json_decode($en_json , true);
		$de_json = json_decode($response , true);
		echo"<code>$de_enjson</code><hr>";
		#echo $de_json['organization_name'];
	#}else{ echo"GAGAL";}
?>
<form method="post">
		<b>#PHARSING JSON</b> <br>
		<div class="input-group mb-3" style="max-width:30rem;">
		  <span class="input-group-text" id="basic-addon1">@</span>
		  <input type="text" class="form-control" placeholder="Username" readonly aria-label="Username" aria-describedby="basic-addon1" value="<?PHP echo $de_json['developer.email'] ?>">
	</div>

	<div class="input-group mb-3" style="max-width:30rem;">
		  <span class="input-group-text" id="basic-addon1">TOKEN</span>
		  <input type="text" class="form-control" placeholder="Username" name="txt_ssauth_01" readonly aria-label="Username" aria-describedby="basic-addon1" value="<?PHP echo $de_json['access_token'] ?>">
	</div>
	
	<div class="input-group mb-3" style="max-width:30rem;">
		  <span class="input-group-text" id="basic-addon1">ID</span>
		  <input type="text" class="form-control" placeholder="Username" readonly aria-label="Username" aria-describedby="basic-addon1" value="<?PHP echo $de_json['client_id'] ?>">
	</div>
	
	<div class="input-group mb-3" style="max-width:30rem;">
		  <span class="input-group-text" id="basic-addon1">ID APP</span>
		  <input type="text" class="form-control" placeholder="Username" readonly aria-label="Username" aria-describedby="basic-addon1" value="<?PHP echo $de_json['application_name'] ?>">
	</div>
	<br>
		<button class="btn btn-success btn-sm" onclick="return simpan_konf()" name="btn_update_SSAUTH">UPDATE TOKEN</button>
	</form>
<!-- -->
</div>
	<?PHP 
		#PL_SSAUTH.php
			#VARIABLE
			$txt_ssauth_01 = @$SQL_ESC($CONN01,$_POST['txt_ssauth_01']);
			if(isset($_POST['btn_update_SSAUTH'])){ #PROCCESSING
					
					$update_ssauth_01 = $CL_Q($CONN01,"$UP sstoken SET token_isi_01='$txt_ssauth_01' WHERE idmain_token_01='SS10001'");
					if($update_ssauth_01){
						include"NOTIF/NF_SUCCESS_01.php";
					}else{
						include"NOTIF/NF_FAILED_01.php";
					}
				
			}
	?>
		