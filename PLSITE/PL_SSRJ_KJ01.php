<div class="card">
 <div class="headimg"> <br>
        <a href='#' class="btn btn-secondary  mx-1"><i class='fas fa-folder'></i> Rawat Jalan #1 Kunjungan Awal</a>
 </div>
</div>
<br>
<div class="container">
<div class="panel panel-success" style="max-width:20rem;">
  <div class="panel-body">
    <?php

    if (isset($_POST['kom_upload_01'])) {//Script akan berjalan jika di tekan tombol submit..
    
    //Script Upload File..
        if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
            echo "<h1>" . "File ". $_FILES['filename']['name'] ." Berhasil di Upload" . "</h1>";
            echo "<h2>Menampilkan Hasil Upload:</h2>";
            readfile($_FILES['filename']['tmp_name']);
        }
        
        $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
        $no_kj = 1;
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            $save_rjkj_01 = $CL_Q($CONN01,"$IN nat_rjkj1(idmain_rjkj1,rjkj1_nikpasien_01,rjkj1_nikdokter_01,rjkj1_lokid_01,rjkj1_tglmasuk_01,rjkj1_status_01)VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','1')");
            if($save_rjkj_01){
                echo"<b class='badge bg-success'>Terkirim $data[0]</b>";
            }
           # $ms_q($import) or die(mssql_error()); //Melakukan Import
        $no_kj++; }
            header("LOCATION:?PG_SA=PL_SSRJ_KJ01VIEW");
    
        fclose($handle); //Menutup CSV file
        echo "<br><strong>Import data selesai.</strong>";
        
    }else { //Jika belum menekan tombol submit, form dibawah akan muncul.. ?>
    
    <!-- Form Untuk Upload File CSV-->
    <form enctype='multipart/form-data' action='' method='post'>
        <input type='file' required name='filename' size='100' class="form-control">
        <br>
        <input type='submit' onclick="return simpan_konf()" name='kom_upload_01' value='Upload' class="btn btn-success btn-sm">
        *Filetype .CSV
    </form>
    <?php } @mysqli_close(); //Menutup koneksi SQL?> 
    </div>
    </div>
<!--  -->
</div>
