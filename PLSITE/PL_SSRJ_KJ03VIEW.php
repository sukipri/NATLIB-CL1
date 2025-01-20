<?PHP if($pl_nr_vusr01_sww  > 0){ ?>
<div class="card">
 <div class="headimg"> <br>
        <a href='#' class="btn btn-secondary  mx-1"><i class='fas fa-folder'></i> RJ #3 Finishing Dataview Pending</a>
        &nbsp
        <a href="?PG_SA=PL_SSRJ_KJ02VIEWTKIRIM" class="btn btn-dark btn-sm"> <i class="fas fa-bookmark"></i> Data Gagal Terikirim</a>
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
        <td>IDLOC.SS / IDKJ.SS</td>
        <td>Tgl Periksa</td>
        <td>Aksi</td>
    </tr>
    <?PHP 
        
        #DATA Kunjungan Awal
        $pl_vrjkj1_sw = $CL_Q($CONN01," $CL_SL nat_rjkj1 WHERE rjkj1_status_01='21' order by rjkj1_tglmasuk_01 desc");
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
        <td><?PHP echo "<b>Kunjungan Awal</b><br>".$pl_vrjkj1_sww['rjkj1_idssen_01']; ?></td>
        <td><?PHP echo $pl_vrjkj1_sww['rjkj1_tglmasuk_01'] ?></td>
        <td>
            <?PHP echo"<a href='?PG_SA=PL_SSRJ_KJ03VIEWP&IDSSPOLI01=$pl_vrjkj1_sww[rjkj1_lokid_01]&IDSSDOK01=$pl_sl_vdkt01_sww[dokter_idss_01]&IDSSPSN01=$idps_json&TG01=$pl_vrjkj1_sww[rjkj1_tglmasuk_01]&GETKJ01=GETKJ01&IDRJKJ01=$pl_vrjkj1_sww[idmain_rjkj1]' class='btn btn-warning btn-sm'><i class='far fa-paper-plane'></i> Upload</a>";
                if(@$SQL_SL($_GET['GETKJIN'])){
                    echo"<META HTTP-EQUIV='Refresh' Content='0; URL=?PG_SA=PL_SSRJ_KJ03VIEWP&IDSSPOLI01=$pl_vrjkj1_sww[rjkj1_lokid_01]&IDSSDOK01=$pl_sl_vdkt01_sww[dokter_idss_01]&IDSSPSN01=$idps_json&TG01=$pl_vrjkj1_sww[rjkj1_tglmasuk_01]&GETKJ01=GETKJ01&IDRJKJ01=$pl_vrjkj1_sww[idmain_rjkj1]'>";
                }
            ?>
        </td>
    </tr>
    <?PHP } } ?>
</table>
        <a href="<?PHP echo"?PG_SA=PL_SSRJ_KJ01VIEW&GETKJIN=GETKJIN"; ?>" class="btn btn-success btn-sm"><i class="fas fa-paper-plane"></i> Upload >> SS</a>
       
        <!--  -->
            <?PHP }else { echo"<b>Akses Dibatasi </b>"; } ?>