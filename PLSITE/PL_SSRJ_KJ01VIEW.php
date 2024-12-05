<div class="card">
 <div class="headimg"> <br>
        <a href='#' class="btn btn-secondary  mx-1"><i class='fas fa-folder'></i> RJ #1 Kunjungan Awal Dataview Pending</a>
 </div>
</div>
<br>
<div class="container">
    <b>*Data yang belum terunggah</b>
<table class="table table-sm table-bordered table-striped">
    <tr class="table-dark">
        <td width="7%">ID</td>
        <td>NIK Pasien</td>
        <td>NIK Dokter</td>
        <td>Location</td>
        <td>Tgl Periksa</td>
        <td>Aksi</td>
    </tr>
    <?PHP 
        #DATA Kunjungan Awal
        $pl_vrjkj1_sw = $CL_Q($CONN01," $CL_SL nat_rjkj1 WHERE rjkj1_status_01='1' order by rjkj1_tglmasuk_01 desc");
            while($pl_vrjkj1_sww = $CL_FAS($pl_vrjkj1_sw)){
    ?>
    <tr>
        <td><?PHP echo $pl_vrjkj1_sww['idmain_rjkj1'] ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_nikpasien_01'] ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_nikdokter_01'] ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_lokid_01'] ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_tglmasuk_01'] ?></td>
        <td>
            <?PHP echo"<a href='?PG_SA=PL_SSRJ_KJ01VIEW&IDDOK01=$pl_vrjkj1_sww[rjkj1_nikdokter_01]&IDPSN01=$pl_vrjkj1_sww[rjkj1_nikpasien_01]&GETKJ01=GETKJ01' class='btn btn-warning btn-sm'><i class='far fa-paper-plane'></i> Upload</a>"; ?>
        </td>
    </tr>
    <?PHP } ?>
</table>
        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Upload >> SS</a>
        <br><br>
        <?php
if(isset($_GET['GETKJ01'])){
    $txt_isi = "https://fhir.kemkes.go.id/id/nik|$IDDOK01";
    #-----------#
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "$URI_DATA_BASE/Practitioner?identifier=$txt_isi",
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

    $response = curl_exec($curl);
    $en_json = json_encode($response);
    $data = json_decode($en_json, true);
    $data_fetch = json_decode($response, true);
    
    #echo"<textarea rows=10 cols=70>$data</textarea><hr>";
    echo"<code>$data</code>";
    echo"<br>";
    $data_jsonfor =  $data_fetch['entry'];
                 
?>
<?PHP 
#-----------#
foreach($data_jsonfor as $data_jsonfor_get){ 
    echo $data_jsonfor_get['resource']['id'];

 } #FOREACH ENTRY 

 echo"<hr>";
#------LINE-----#

$txt_isi2 = "https://fhir.kemkes.go.id/id/nik|$IDPSN01";
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
    
    #echo"<textarea rows=10 cols=70>$data2</textarea><hr>";
    echo"<code>$data2</code>";
    echo"<br>";
    $data2_jsonfor =  $data2_fetch['entry'];
                 
?>
<?PHP 
#-----------#
foreach($data2_jsonfor as $data2_jsonfor_get){ 
    echo $data2_jsonfor_get['resource']['id'];

 }
    }
?>
        <!--  -->
            </div>