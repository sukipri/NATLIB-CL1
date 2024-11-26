<?PHP 
    ob_start();
    session_start();
    include_once"NTS_GETCODE.php";
?>

    <!--  -->
        <?PHP include"NTS_MENU_01.php"; ?>
    <!--  -->
        <?PHP include_once"CODE/PL_CODEPG.php"; ?>
    <div style="padding-top:10%"></div>
<?PHP 
     include"CODE/PL_CODEFOOTER.php";
     ob_flush();
?>