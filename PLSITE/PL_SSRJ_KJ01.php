<br>
<div class="container">
<b>Rawat Jalan #1 Kunjungan Awal</b>
<hr>
<div class="card border-primary mb-3" style="max-width: 40rem;">
  <div class="card-header">Upload Kunjungan Awal</div>
  <div class="card-body">
    <!--  -->
    <form method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <input type="file" class="form-control form-control-sm" name="data_csv" required>
        <button class="btn btn-success btn-sm" name="btn_simpancsv">Upload</button>
    </div>
    </form>
    <!--  -->
    <?PHP 
    if(isset($_POST['btn_simpancsv'])){
        $output = ''; 
        
        $format_file = array("csv"); 
    
        $extension = end(explode(" . ", $_FILES["data_csv"]["name"])); 

            if(in_array($extension, $format_file)){ 
        
                  $file_data = fopen($_FILES["data_csv"]["tmp_name"], 'r'); 
        
                  fgetcsv($file_data); 
        
                  while($row = fgetcsv($file_data)){ 
        
                      $name = mysqli_real_escape_string($CONN01, $row[0]); 
                      $email = mysqli_real_escape_string($CONN01, $row[1]);
                      $data3 = mysqli_real_escape_string($CONN01, $row[2]);
        
                      #$query = "INSERT INTO import VALUES ('','$name', '$email')"; 
                      echo $name;

        
                      #mysqli_query($CONN01, $query); 
        
                  } 
                }
        }

    

    ?>
    <!--  -->
  </div>
</div>
<!--  -->
</div>
