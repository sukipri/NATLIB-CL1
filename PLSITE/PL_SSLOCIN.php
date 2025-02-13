<?PHP if($pl_nr_vusr01_sww  > 0){ ?>
<div class="card">
 <div class="headimg"><br>
        <a href='#' class="btn btn-secondary  mx-1"><i class='fas fa-folder'></i> Entry & Set Location</a>
 </div>
</div>
<br>
<div class="container">
<!--  -->
<form method="post">
<div class="card border-primary mb-3" style="max-width: 30rem;">
  <div class="card-header">Entri Location / Poli</div>
  <div class="card-body">
        <!--  -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama Poli</span>
            <input type="text" class="form-control" placeholder="Nama Poli" required name="txt_locanama" autocomplete="off">
        </div>
        <br>
        <button class="btn btn-primary btn-sm" name="btn_simpanloc">Simpan data</button>
        <!--  -->
  </div>
</div>
</form>
<?PHP 
    #VARIABLE
    $txt_locanama = @$SQL_SL($_POST['txt_locanama']);
    if(isset($_POST['btn_simpanloc'])){

        $data = [
            "resourceType" => "Location",
            "identifier" => [
                [
                    "system" =>
                        "http://sys-ids.kemkes.go.id/location/$ID_ORGLOC",
                    "value" => "$NM_ORGLOC",
                ],
            ],
            "status" => "active",
            "name" => "$txt_locanama",
            "description" => "$txt_locanama",
            "mode" => "instance",
            "telecom" => [
                ["system" => "phone", "value" => "+621500567", "use" => "work"],
                [
                    "system" => "email",
                    "value" => "manikaaestheticc@gmail.com",
                    "use" => "work",
                ],
                ["system" => "url", "value" => "manikaaestheticc.com", "use" => "work"],
            ],
            "physicalType" => [
                "coding" => [
                    [
                        "system" =>
                            "http://terminology.hl7.org/CodeSystem/location-physical-type",
                        "code" => "ro",
                        "display" => "Room",
                    ],
                ],
            ],
            "position" => [
                "longitude" => -7.0245522,
                "latitude" => 110.3346642,
                "altitude" => 0,
            ],
            "managingOrganization" => [
                "reference" => "Organization/$ORG_ID",
            ],
        ];
        

$url = "$URI_DATA_BASE/Location";
		$encodedData = json_encode($data,true);
		$curl = curl_init($url);
		$data_string = urlencode(json_encode($data));
		
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt( $curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json',"Authorization: Bearer $pl_vsstoken_sww[token_isi_01]"));
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $encodedData);
		$result02 = curl_exec($curl);
		$result = json_decode($result02, true);
		#$output = json_decode($output2, true);
		curl_close($curl);
		#echo"<code>". $result['status']."</code>";
		echo"#RESULT FEEDBACK Satu Sehat<br><code>".$result02."</code><br>"; 
		echo "<br>".$get_json =  @$result['id'];

		#PROCCESSING UPDATE MYSQL
        if($result['resourceType']=="OperationOutcome"){
            include"NOTIF/NF_FAILED_01.php";
            #$update_rjkj_01 = $CL_Q($CONN01,"$UP nat_rjkj1 SET rjkj1_status_01='3' WHERE idmain_rjkj1='$IDRJKJ01' ");
        }else{
             #$update_rjkj_01 = $CL_Q($CONN01,"$UP nat_rjkj1 SET rjkj1_status_01='2',rjkj1_idssen_01='$get_json' WHERE idmain_rjkj1='$IDRJKJ01' ");
        include"NOTIF/NF_SUCCESS_01.php";
		#echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?PG_SA=PL_SSRJ_KJ01VIEW&GETKJIN=GETKJIN'>";
        }
    
    #echo "<META HTTP-EQUIV='Refresh' Content='13; URL=PL_HOME_01.php?PG_SA=PL_SS_R6_01_ENKUNJ01POST&TG01=$TG01&TG02=$TG01&IDGET01=$IDGET01&IDDOK01=$IDDOK01#$IDGET01'>";
} #CLOSE ISSET
?>
<!--  -->
</div>
<?PHP }else { echo"<b>Akses Dibatasi </b>"; } ?>