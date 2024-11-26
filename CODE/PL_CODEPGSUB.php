<?php
     //error_reporting(0);
     $PGSASUB = @$SQL_SL($_GET['PG_SA_SUB']);
     if($PGSASUB ==''){ 
           #echo "<img src='https://rspwc.net/E-PWC/CDN/edis.jpg' class=img-fluid>";
      ?>

     <?PHP }else{
      switch(@$SQL_SL($PGSASUB)){
            #MASTER DATA
                  case"$PGSASUB":
                        include"PLSITE/$PGSASUB.php";  #DIISI DENGAN NAMA FOLDER FILE
                  break;

          }

     }
     
  ?>