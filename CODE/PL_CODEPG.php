<?php
     //error_reporting(0);
     $PGSA = @$SQL_SL($_GET['PG_SA']);
     if($PGSA ==''){ 
           #echo "<img src='https://rspwc.net/E-PWC/CDN/edis.jpg' class=img-fluid>";
           include_once"PLSITE/PL_FIRSTHOME.php";
      ?>
           
     <?PHP }else{
      switch(@$SQL_SL($PGSA)){
            #MASTER DATA
                  case"$PGSA":
                        include"PLSITE/$PGSA.php";  #DIISI DENGAN NAMA FOLDER FILE
                  break;
          }

     }
     
  ?>