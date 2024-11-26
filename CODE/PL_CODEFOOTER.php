
<div style="padding-left:10px;" class="badge bg-primary mx-2">&copy LULABY Allright Reserved - C4mpus <?PHP echo"$DATE_Y"; ?>
</div>
   <!-- --JS -->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
       
       <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
       <!--
       <script src="<?php #echo"https://rspwc.net/E-PWC/CDN/BOOT_5.js"; ?>"></script>
       <script src="<?php #echo"https://rspwc.net/E-PWC/CDN/BOOT_POOPER.js"; ?>"></script> -->
       <script src="<?php echo"CDN/BOOT_5.js"; ?>"></script>
       <script src="<?php echo"CDN/BOOT_POOPER.js"; ?>"></script>
       <script src="<?php echo"CODE/PL_MAINJS.js"; ?>"></script>
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