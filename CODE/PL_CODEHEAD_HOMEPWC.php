<?php
    /* 
        Penempatan file Layouting dan fungsi Layouting
        *CSS
        *JS
        *DLL
    */
?>
    <meta name="viewport" content="width=device-width, initial-scale=1  , user-scalable=0">
    <meta charset="UTF-8">
   
<!-- LIBRARY CSS DAN JS-->
    <!-- -->
    <link rel="icon" href="CDN/apps.png">

    <!-- CSS -->
        <!-- <link href="<?php //echo"http://$MY_HOST/ARGONET/LAYOUT/CSS/CSS_SENDSTONE.css"; ?>" rel="stylesheet" type="text/css" /> --> 
              <!-- <link href="<?php //echo"http://$MY_HOST/ARGONET/LAYOUT/CSS/CSS_SENDSTONE.css"; ?>" rel="stylesheet" type="text/css" /> -->
              <!-- <link href="<?php #echo"https://rspwc.net/E-PWC/CDN/SKETSA.css"; ?>" rel="stylesheet" type="text/css" /> -->
              <link href="<?php echo"CDN/flatly.css"; ?>" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- --JS -->
         <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
       
         <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
         <!--
         <script src="<?php #echo"https://rspwc.net/E-PWC/CDN/BOOT_5.js"; ?>"></script>
         <script src="<?php #echo"https://rspwc.net/E-PWC/CDN/BOOT_POOPER.js"; ?>"></script> -->
         <script src="<?php echo"CDN/BOOT_5.js"; ?>"></script>
         <script src="<?php echo"CDN/BOOT_POOPER.js"; ?>"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script> <!-- CKEDITOR -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
   
    <!-- close -->

    <!-- Function JS -->
    <script type="text/javascript" language="JavaScript">
            function konfirmasi_del()
            {
                tanya = confirm("are you sure to cancel / delete data ?");
            if (tanya == true) return true;
            else return false;
        }
        </script>
        <script type="text/javascript" language="JavaScript">
            function konfirmasi_save()
            {
                tanya = confirm("are you sure to save  data ?");
            if (tanya == true) return true;
            else return false;
        }
    </script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>
    <!-- -->