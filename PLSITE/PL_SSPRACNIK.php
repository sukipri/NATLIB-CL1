<?PHP if($pl_nr_vusr01_sww  > 0){ ?>
<div class="card">
 <div class="headimg"><br>
        <a href='#' class="btn btn-secondary  mx-1"><i class='fas fa-folder'></i> Practitioner #1 SATU SEHAT *NIK</a>
 </div>
</div>
<br>
<div class="container">
<form method="post">
	<div class="input-group mb-3" style="max-width:30rem;">
	  <input type="text" class="form-control" required required name="txt_src_ssprac01" autocomplete="off" placeholder="Masukan NIK Praktisi Medis........">
	  <button class="btn btn-success btn-sm" name="btn_src_ssencounter01">CARI</button>
	  <a href="?PG_SA=PL_SSPRACIN" class="btn btn-dark btn-sm"><i class="fas fa-plus"></i> Set Dokter</a>
	</div>
</form>

<?php
	if(isset($_POST['btn_src_ssencounter01'])){
		$txt_src_ssprac01 = @$SQL_SL($_POST['txt_src_ssprac01']);
		$txt_isi = "https://fhir.kemkes.go.id/id/nik|$txt_src_ssprac01";

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
		echo"<code>$data</code><hr>";
		echo"<br>";
		$data_jsonfor =  $data_fetch['entry'];

        foreach($data_jsonfor as $data_jsonfor_get){ #FOREACH ENTRY

            echo"<b>ID SS</b> ".$data_jsonfor_get['resource']['id']."<br>";
            $data_jsonfor_name = $data_jsonfor_get['resource']['name'];
            foreach($data_jsonfor_name as $data_jsonfor_nameget ){
                echo "<b>Name</b> ".$data_jsonfor_nameget['text'];
            }
        }
        

    }
?>
<!--  -->
</div>
<?PHP }else { echo"<b>Akses Dibatasi </b>"; } ?>