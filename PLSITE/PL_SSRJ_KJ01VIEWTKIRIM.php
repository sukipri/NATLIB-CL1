<?PHP if($pl_nr_vusr01_sww  > 0){ ?>
<div class="card">
 <div class="headimg"> <br>
        <a href='?PG_SA=PL_SSRJ_KJ01VIEW' class="btn btn-secondary  mx-1"> << Kembali</a>
        <a href="#" class="btn btn-dark btn-sm"> <i class='fas fa-folder'></i> Data Kunjungan Awal Gagal Terikirim</a>
</div>
</div>
<br>
    <b>*Data yang belum terunggah</b>
<table class="table table-sm table-bordered table-striped">
    <tr class="table-dark">
        <td width="7%">ID</td>
        <td>NIK Pasien</td>
        <td>Nama Pasien</td>
        <td class="table-success">ID SS Pasien</td>
        <td>NIK Dokter</td>
        <td class="table-success">ID SS Dokter</td>
        <td>Location</td>
        <td>Tgl Periksa</td>
        <td>Aksi</td>
    </tr>
    <?PHP 
        
        #DATA Kunjungan Awal
        $pl_vrjkj1_sw = $CL_Q($CONN01," $CL_SL nat_rjkj1 WHERE rjkj1_status_01='3' order by rjkj1_tglmasuk_01 desc");
            while($pl_vrjkj1_sww = $CL_FAS($pl_vrjkj1_sw)){
                #DATA DOKTER
                $pl_sl_vdkt01_sw = $CL_Q($CONN01,"$SL dokter_idss_01 FROM nat_dokter WHERE dokter_nik_01='$pl_vrjkj1_sww[rjkj1_nikdokter_01]' ");
                $pl_sl_vdkt01_sww = $CL_FAS($pl_sl_vdkt01_sw);
                
        $txt_isi2 = "https://fhir.kemkes.go.id/id/nik|$pl_vrjkj1_sww[rjkj1_nikpasien_01]";
        #-----------#
        $curl2 = curl_init();
        curl_setopt_array($curl2, array(
        CURLOPT_URL => "$URI_DATA_BASE/Patient?identifier=$txt_isi2",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer $pl_vsstoken_sww[token_isi_01]"
        ),
        ));

        $response2 = curl_exec($curl2);
        $en_json2 = json_encode($response2);
        $data2 = json_decode($en_json2, true);
        $data2_fetch = json_decode($response2, true);
        $data2_jsonfor =  @$data2_fetch['entry'];
             
?>
<?PHP 
#-----------#
foreach($data2_jsonfor as $data2_jsonfor_get){ 
$idps_json =  $data2_jsonfor_get['resource']['id'];

    ?>
    <tr>
        <td><?PHP echo $pl_vrjkj1_sww['idmain_rjkj1'] ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_nikpasien_01']; ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_namapasien_01']; ?></td>
        <td><?PHP echo  $data2_jsonfor_get['resource']['id']; ?> </td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_nikdokter_01'] ?></td>
        <td><?PHP echo  $pl_sl_vdkt01_sww['dokter_idss_01']; ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_lokid_01']; ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_tglmasuk_01'] ?></td>
        <td>
            <?PHP echo"<a href='?PG_SA=PL_SSRJ_KJ01VIEWP&IDSSPOLI01=$pl_vrjkj1_sww[rjkj1_lokid_01]&IDSSDOK01=$pl_sl_vdkt01_sww[dokter_idss_01]&IDSSPSN01=$idps_json&TG01=$pl_vrjkj1_sww[rjkj1_tglmasuk_01]&GETKJ01=GETKJ01&IDRJKJ01=$pl_vrjkj1_sww[idmain_rjkj1]' class='btn btn-warning btn-sm'><i class='far fa-paper-plane'></i> Kirim Lagi</a>";
                if(@$SQL_SL($_GET['GETKJIN'])){
                    echo"<META HTTP-EQUIV='Refresh' Content='0; URL=?PG_SA=PL_SSRJ_KJ01VIEWP&IDSSPOLI01=$pl_vrjkj1_sww[rjkj1_lokid_01]&IDSSDOK01=$pl_sl_vdkt01_sww[dokter_idss_01]&IDSSPSN01=$idps_json&TG01=$pl_vrjkj1_sww[rjkj1_tglmasuk_01]&GETKJ01=GETKJ01&IDRJKJ01=$pl_vrjkj1_sww[idmain_rjkj1]'>";
                }
            ?>
        </td>
    </tr>
    <?PHP } } ?>
</table>
        <br><br>
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
        <!--  -->
            <?PHP }else { echo"<b>Akses Dibatasi </b>"; } ?>