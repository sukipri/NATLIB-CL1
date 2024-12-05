<div class="card">
 <div class="headimg"> <br>
 <a href='#' class="btn btn-secondary  mx-1"><i class="fas fa-project-diagram"></i> Login Akses</a>
 </div>
</div>
<!-- -->
<div style="padding-top:0.5%;"></idv>
<div class="card border-success mx-2" style="max-width:30rem;">
  
<!-- <div class="card-header bg-secondary">-</div> -->
  <div class="card-body">
    <!-- -->
		<form method="post">
		<input type="hidden"   class="form-control form-control-sm" value="<?php echo"$pl_vqa01_sww[qa_02]"; ?>" name="tanya_us" readonly="readonly" />
        <!-- -->
            <input type="text" class="form-control form-control-sm" name="us_nama" required autocomplete="off" placeholder="Username....">
            <br>
            <input type="password" placeholder="Password..." class="form-control form-control-sm" name="us_pass" required autocomplete="off">
            <br>
            <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><?php echo"$pl_vqa01_sww[qa_01]"; ?></span>
          </div>
          <input autocomplete="off" type="text" required class="form-control" name="jawab_us"  style="max-width:6rem;" placeholder="Answer..">
        </div>
            <button class="btn btn-dark btn-sm" name="hr_acs_login">LOGIN >> </a>
			
		</form>
			<?PHP include"CODE/PL_CODELOGIN.php"; ?>
	<!-- -->
  </div>
</div>
<!-- -->