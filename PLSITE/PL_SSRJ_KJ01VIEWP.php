<?PHP if($pl_nr_vusr01_sww  > 0){ ?>
<div class="card">
 <div class="headimg"> <br>
 <a href="#" class="btn btn-dark btn-sm"> << Kembali</a>
    &nbsp
        <a href='#' class="btn btn-secondary  mx-1"><i class='fas fa-folder'></i> RJ #1 Kunjungan Awal Dataview Pending</a>
</div>
</div>
<?php
if(isset($_GET['GETKJ01'])){
    #GET VIEW DATA DOKTER
    $pl_get_vdkt01_sw = $CL_Q($CONN01,"$SL dokter_idss_01,dokter_nama_01 FROM nat_dokter WHERE dokter_idss_01='$IDSSDOK01' ");
         $pl_get_vdkt01_sww = $CL_FAS($pl_get_vdkt01_sw);
    #GET VIEW DATA RJKJ
    $pl_get_vrjkj01_sw = $CL_Q($CONN01,"$SL idmain_rjkj1, rjkj1_namapasien_01 FROM nat_rjkj1 WHERE idmain_rjkj1='$IDRJKJ01'");
        $pl_get_vrjkj01_sww = $CL_FAS($pl_get_vrjkj01_sw);
        echo $pl_get_vrjkj01_sww['rjkj1_namapasien_01'];

// Encode some data with a maximum depth  of 4 (array -> array -> array -> string)
$data = array(
    "resourceType" => "Encounter",
    "identifier" => array(
        array(
            "system" => "http://sys-ids.kemkes.go.id/encounter/$ORG_ID", 
        )
    ),
    "status" => "arrived",
    "class" => array(
        "system" => "http://terminology.hl7.org/CodeSystem/v3-ActCode",
        "code" => "AMB",
        "display" => "ambulatory"
    ),
    "subject" => array(
        "reference" => "Patient/$IDSSPSN01",
        "display" => "$pl_get_vrjkj01_sww[rjkj1_namapasien_01]"
    ),
    "participant" => array(
        array(
            "type" => array(
                array(
                    "coding" => array(
                        array(
                            "system" => "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
                            "code" => "ATND",
                            "display" => "attender"
                        )
                    )
                )
            ),
            "individual" => array(
                "reference" => "Practitioner/$IDSSDOK01",
                "display" => "$pl_get_vdkt01_sww[dokter_nama_01]"
            )
        )
    ),
    "period" => array(
        "start" => "$TG01$pl_timzone01+00:00"
    ),
    "location" => array(
        array(
            "location" => array(
                "reference" => "Location/$IDSSPOLI01",
                "display" => "TEST POLI"
            ),
            "extension" => array(
                array(
                    "url" => "https://fhir.kemkes.go.id/r4/StructureDefinition/ServiceClass",
                    "extension" => array(
                        array(
                            "url" => "value",
                            "valueCodeableConcept" => array(
                                "coding" => array(
                                    array(
                                        "system" => "http://terminology.kemkes.go.id/CodeSystem/locationServiceClass-Outpatient",
                                        "code" => "reguler",
                                        "display" => "Kelas Reguler"
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    ),
    "statusHistory" => array(
        array(
            "status" => "arrived",
            "period" => array(
                "start" => "$TG01$pl_timzone01+00:00"
            )
        )
    ),
    "serviceProvider" => array(
        "reference" => "Organization/$ORG_ID"
    )
);

		$url = "$URI_DATA_BASE/Encounter";
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
            $update_rjkj_01 = $CL_Q($CONN01,"$UP nat_rjkj1 SET rjkj1_status_01='3' WHERE idmain_rjkj1='$IDRJKJ01' ");
        }else{
        $update_rjkj_01 = $CL_Q($CONN01,"$UP nat_rjkj1 SET rjkj1_status_01='2',rjkj1_idssen_01='$get_json' WHERE idmain_rjkj1='$IDRJKJ01' ");
        include"NOTIF/NF_SUCCESS_01.php";
		echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?PG_SA=PL_SSRJ_KJ01VIEW&GETKJIN=GETKJIN'>";
        }
    }
    #echo "<META HTTP-EQUIV='Refresh' Content='13; URL=PL_HOME_01.php?PG_SA=PL_SS_R6_01_ENKUNJ01POST&TG01=$TG01&TG02=$TG01&IDGET01=$IDGET01&IDDOK01=$IDDOK01#$IDGET01'>";
    
?>

<?PHP }else { echo"<b>Akses Dibatasi </b>"; } ?>