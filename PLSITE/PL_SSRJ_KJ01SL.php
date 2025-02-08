<?PHP if($pl_nr_vusr01_sww  > 0){ ?>
<div class="card">
 <div class="headimg"> <br>
        <a href='#' class="btn btn-secondary  mx-1"><i class='fas fa-folder'></i> Rawat Jalan Dataset Local #1 </a>
 </div>
</div>
<br>
<div class="container">
<!--  -->
    <table class="table table-bordered table-sm table-striped">
    <tr class="table-dark">
        <td>ID</td>
        <td>NIK Pasien</td>
        <td>Nama Pasien</td>
        <td>NIK Dokter</td>
        <td>ID Poliklinik</td>
        <td>Tanggal Periksa</td>
        <td>ICD</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </table>
<!--  -->
</div>
<?PHP }else { echo"<b>Akses Dibatasi </b>"; } ?>