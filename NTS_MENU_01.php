<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="?"><i class="fas fa-home"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?PHP 
          if(@$pl_vusr01_sww['user_hak_01']=="1"){
      ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fas fa-hashtag"></i> Autentifikasi
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?PG_SA=PL_SSTOKEN">Set Token</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fas fa-hashtag"></i> Prerequisites
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?PG_SA=PL_SSPRACNIK">Practitioner</a></li>  
            <li><a class="dropdown-item" href="?PG_SA=PL_SSPATNIK">Patient</a></li>
            <li><a class="dropdown-item" href="?PG_SA=PL_SSLOCNAME">Location / Poli<a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fas fa-hashtag"></i> Rawat Jalan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?PG_SA=PL_SSRJ_KJ01">EN01.Kunjungan Baru</a></li>
            <li><a class="dropdown-item" href="?PG_SA=PL_SSRJ_KJ01VIEW">EN01.View Kunjungan Baru</a></li>
          </ul>
        </li>
      </ul>
      <?PHP }else{ ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-success" aria-current="page" href="?PG_SA=PLPMB_DAFTAR_01"><i class="fas fa-archive"></i> Data</a>
        </li>
        </li>
      </ul>
        <?PHP } ?>
      <form class="d-flex" role="search">
        <?PHP 
        
            if($pl_nr_vusr01_sww > 0){
              echo"<a href='#' class='btn btn-primary btn-sm'><i class='fas fa-user-alt'></i>  $pl_vusr01_sww[user_nama_01]</a>";
              echo"&nbsp";
              echo"<a href='CODE/PL_CODELOGOUT.php' class='btn btn-danger btn-sm'><i class='fas fa-sign-out-alt'></i> Logout</a>";
            }else{
              echo"<a href='?PG_SA=Pl_SITELOGIN' class='btn btn-warning btn-sm'><i class='fas fa-sign-in-alt'></i> L.O.G.I.N</a>";
            }
        ?>
      </form>
    </div>
  </div>
</nav>