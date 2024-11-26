<?PHP 
    include_once"../CODE/PL_CODEHEAD_HOMEPWC.php"; #1
    include_once"../CONFIG/PL_CONMYSQL_01.php"; #21
    include_once"../CONFIG/PL_CONSQLSERVER_01.php"; #22
    include"../CODE/PL_CODELIB.php"; #3
    include"../CODE/PL_CODEDDL.php"; #4
    include"../CODE/PL_CODEGETSQL.php"; #5

?>
<head>
<title>Tanda Tangan Edukasi</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.signature.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.signature.css">
    <style>
        .kbw-signature { width: 400px; height: 400px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
   
</head>
<body>
   
<div class="container">
    <form method="POST">
        <div class="col-md-12">
            <label class="" for="">Tanda Tangan:</label>
            <br/>
            <div id="sig" ></div>
            <br/>
            <button id="clear">Hapus Tanda Tangan</button>
            <textarea id="signature64" name="signed" style="display: none"></textarea>
        </div>
   
        <br/>
        <button class="btn btn-success">Setuju</button>
    </form>
   
</div>
   
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
<?php
   
    $folderPath = "//192.168.9.180/1101r019/E-MR/Signature/Signature_Klien/Edukasi/TUPLOAD/";
    if(empty($_POST['signed'])){
        echo "Kosong";
    }else{
    $image_parts = explode(";base64,", $_POST['signed']); 
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . uniqid() . '.'.$image_type;
    file_put_contents($file, $image_base64);
    echo "Tanda Tangan Sukses Diupload ";
    }
?>
</body>