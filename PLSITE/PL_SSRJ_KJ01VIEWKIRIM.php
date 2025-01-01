<?PHP if($pl_nr_vusr01_sww  > 0){ ?>
<div class="card">
 <div class="headimg"> <br>
        <a href='?PG_SA=PL_SSRJ_KJ01VIEW' class="btn btn-secondary  mx-1"> << Kembali</a>
        <a href="#" class="btn btn-dark btn-sm"> <i class='fas fa-folder'></i> Data Kunjungan Awal Gagal Terikirim</a>
</div>
</div>
<br>
    <form method="post">
    <div class="input-group mb-3">
        <input type="date" class="form-control" required name="txt_tglkj1">
        <button class="btn btn-info" name="btn_tglkj1">Cari Data</button>
    </div>
    </form>
<?PHP 
    if(isset($_POST['btn_tglkj1'])){

    }

?>
    <b>Riwayat Data Terunggah</b>
<table class="table table-sm table-bordered table-striped">
    <tr class="table-dark">
        <td width="7%">ID</td>
        <td>NIK Pasien</td>
        <td>Nama Pasien</td>
        <td class="table-success">ID SS Pasien</td>
        <td>NIK Dokter</td>
        <td class="table-success">ID SS Dokter</td>
        <td>Location</td>
        <td>ID Satu Sehat</td>
        <td>Tgl Periksa</td>
        
    </tr>
    <?PHP 
        
        #DATA Kunjungan Awal
        $pl_vrjkj1_sw = $CL_Q($CONN01," $CL_SL nat_rjkj1 WHERE NOT rjkj1_idssen_01='' order by rjkj1_tglmasuk_01 desc");
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
        <td><?PHP echo "<b>#Kunjungan Awal</b><br> ".$pl_vrjkj1_sww['rjkj1_idssen_01']; ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_tglmasuk_01'] ?></td>
       
    </tr>
    <?PHP } } ?>
</table>
               
        <!--  -->
            <?PHP }else { echo"<b>Akses Dibatasi </b>"; } ?>