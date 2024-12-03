<br>
<div class="container">
<b>Rawat Jalan #1 Kunjungan Awal</b>
<hr>

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
    
        //Import uploaded file to Database, Letakan dibawah sini..
        $handle = fopen($_FILES['filename']['tmp_name'], "r"); //Membuka file dan membacanya
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            #$import="$in TGaji (GajiBulan,KaryNomor,UnitKode,GajiStKeluarga,GajiStPPh,GajiASTEK)VALUES()"; //data array sesuaikan dengan jumlah kolom pada CSV anda mulai dari “0” bukan “1”
            $save_rjkj_01 = $CL_Q($CONN01,"$IN nat_rjkj1()VALUES()");
            echo $data['0'];
           # $ms_q($import) or die(mssql_error()); //Melakukan Import
        }
    
        fclose($handle); //Menutup CSV file
        echo "<br><strong>Import data selesai.</strong>";
        
    }else { //Jika belum menekan tombol submit, form dibawah akan muncul.. ?>
    
    <!-- Form Untuk Upload File CSV-->
    <form enctype='multipart/form-data' action='' method='post'>
        <input type='file' required name='filename' size='100' class="form-control">
        <br>
        <input type='submit' name='kom_upload_01' value='Upload' class="btn btn-success btn-sm">


    </form>
    <?php } @mysqli_close(); //Menutup koneksi SQL?> 
    </div>
    </div>
<!--  -->
</div>
