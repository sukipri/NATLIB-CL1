<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NATSET</a>
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
           <i class="fas fa-hashtag"></i> Kejuruan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?PG_SA=PLMD_FAKULTAS_01">Fakultas</a></li>
            <li><a class="dropdown-item" href="?PG_SA=PLMD_PRODI_01">Program Studi</a></li>
          </ul>
        </li>
      </ul>
      <?PHP }else{ ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-success" aria-current="page" href="?PG_SA=PLPMB_DAFTAR_01">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
        <?PHP } ?>
      <form class="d-flex" role="search">
        <?PHP 
        
            if($pl_nr_vusr01_sww > 0){
              echo"<a href='#' class='btn btn-primary'><i class='fas fa-user-alt'></i>  $pl_vusr01_sww[user_nama_01]</a>";
              echo"&nbsp";
              echo"<a href='CODE/PL_CODELOGOUT.php' class='btn btn-danger'><i class='fas fa-sign-out-alt'></i> Logout</a>";
            }else{
              echo"<a href='?PG_SA=Pl_SITELOGIN' class='btn btn-warning'><i class='fas fa-sign-in-alt'></i> L.O.G.I.N</a>";
            }
        ?>
      </form>
    </div>
  </div>
</nav>