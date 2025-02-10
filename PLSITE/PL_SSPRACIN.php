<?PHP if($pl_nr_vusr01_sww  > 0){ ?>
<div class="card">
 <div class="headimg"> <br>
    <a href='?PG_SA=PL_SSPRACNIK' class="btn btn-primary mx-1"><i class="fas fa-angle-double-left"></i> </a>
        <a href='#' class="btn btn-secondary  mx-1"><i class='fas fa-folder'></i> RJ #1 Set data Dokter</a>
 </div>
</div>
<br>
<div class="container">
<!--  -->
<form method="post">
<div class="card border-primary mb-3" style="max-width: 30rem;">
  <div class="card-header">Form Dokter</div>
  <div class="card-body">
   <!--  -->
   <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">NIK Dokter</span>
       <input type="text" class="form-control form-control-sm" required name="dokter_nik_01" autocomplete="off" value="<?PHP echo @$pl_vw_vdkt01_sww['dokter_nik_01'] ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nama Dokter</span>
       <input type="text" class="form-control form-control-sm" required name="dokter_nama_01" autocomplete="off" value="<?PHP echo @$pl_vw_vdkt01_sww['dokter_nama_01'] ?>">
    </div>
    <br>
    <?PHP 
     if(isset($_GET['UPDKT01'])){
         $txt_isi = "https://fhir.kemkes.go.id/id/nik|$pl_vw_vdkt01_sww[dokter_nik_01]";
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
         #echo"<code>$data</code>";
         $data_jsonfor =  $data_fetch['entry'];
     foreach($data_jsonfor as $data_jsonfor_get){ 
         $txt_jsondata = $data_jsonfor_get['resource']['id'];
     echo"  <div class='input-group mb-3'>
        <span class='input-group-text' id='basic-addon1'>ID SatuSehat</span>
         <input type='text' class='form-control form-control-sm' value=$txt_jsondata required name='dokter_idss_01'>
    </div>";
     
      } 
    }


    echo"<br>";
        if(@$SQL_SL($_GET['UPDKT01'])){
            echo"<button class='btn btn-warning btn-sm' name='btn_updatedok'>Update Data</button>";
        }else{
            echo"<button class='btn btn-success btn-sm' name='btn_simpandok'>Simpan Data</button>";
        }
    ?>
   <!--  -->
  </div>
</div>
</form>
        <?PHP 
                #VARIABLE
                $dokter_nik_01 = @$SQL_SL($_POST['dokter_nik_01']);
                $dokter_nama_01 = @$SQL_SL($_POST['dokter_nama_01']);
                $dokter_idss_01 = @$SQL_SL($_POST['dokter_idss_01']);

                    if(isset($_POST['btn_simpandok'])){ #INSERT DOKTER
                        $save_dokter_01 = $CL_Q($CONN01,"$IN nat_dokter(idmain_dokter,dokter_nik_01,dokter_idss_01,dokter_nama_01)VALUES('$IDMAIN','$dokter_nik_01','$dokter_idss_01','$dokter_nama_01')");
                        if($save_dokter_01){
                            header("LOCATION:?PG_SA=PL_SSPRACIN");
                        }else{
                            include"NOTIF/NF_FAILED_01.php";
                        }
                    }
                    if(isset($_POST['btn_updatedok'])){ #UPDATE DOKTER
                        $update_dokter_01 = $CL_Q($CONN01,"$UP nat_dokter SET dokter_nik_01='$dokter_nik_01',dokter_idss_01='$dokter_idss_01',dokter_nama_01='$dokter_nama_01' WHERE idmain_dokter='$IDDOK01'");
                        if($update_dokter_01){
                            header("LOCATION:?PG_SA=PL_SSPRACIN");
                        }else{
                            include"NOTIF/NF_FAILED_01.php";
                        }
                    }

            ?>

            <!-- Preview Data -->
             <table class="table table-sm table-bordered table-striped" style="max-width:40rem;">
                    <tr class="table-dark">
                        <td>Nik</td>
                        <td>SS ID</td>
                        <td>Nama Dokter</td>
                    </tr>
                    <?PHP 
                        #DATA DOKTER
                        $pl_ls_vdkt01_sw = $CL_Q($CONN01,"$CL_SL nat_dokter order by dokter_nama_01 asc");
                            while($pl_ls_vdkt01_sww = $CL_FAS($pl_ls_vdkt01_sw)){
                    ?>
                    <tr>
                        <td><?PHP echo "<a href='?PG_SA=PL_SSPRACIN&IDDOK01=$pl_ls_vdkt01_sww[idmain_dokter]&UPDKT01=UPDKT01'>".$pl_ls_vdkt01_sww['dokter_nik_01']."</a>"; ?></td>
                        <td><?PHP echo $pl_ls_vdkt01_sww['dokter_idss_01'] ?></td>
                        <td><?PHP echo $pl_ls_vdkt01_sww['dokter_nama_01'] ?></td>
                    </tr>
                    <?PHP } ?>
                </table>

 <!--  -->
 </div>
            <?PHP }else { echo"<b>Akses Dibatasi </b>"; } ?>