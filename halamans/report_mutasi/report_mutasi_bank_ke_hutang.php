<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap-4 Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../vendors/icheck/skins/all.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />

   <script type="text/javascript" src="DataTables/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="DataTables/media/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="DataTables/media/css/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/media/css/jquery.dataTables.css">
</head>
<body>
  <br/>
  <br/>
<div class="container">
    <table id="example" class="display" style="width:100%">
          <thead style="background-color:#122631;color:#c7fcff;">
          <center><h1>LAPORAN TRANSAKSI MUTASI BANK KE HUTANG</h1></center>
               <tr>
               <th>Nomor Urut</th>
               <!-- <th>Jenis Transaksi</th> -->
               <th>Pengirim</th>
               <th>Penerima</th> 
            <!--     <th>Kode Rekening</th> -->
                <th>Nominal Terkirim</th>
                <th>Nominal Di Terima</th>
                <!-- <th>Total Kas Kecil</th>
                <th>Total Kas Besar</th>-->
                <!-- <th>Total Saldo</th>  --> 
                <!--  <th>Keterangan Transaksi</th>  -->
                <th>Tanggal Transaksi</th>         
                </tr>                        
        </thead>
        <tbody>

 <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}


$no=1;
$jenis_transaksi='jenis_transaksi'; 
$id_penghutang='id_penghutang'; 
// $data = mysqli_query($database,"SELECT bank_akun.jenis_transaksi, bank_hutang.id_penghutang, bank_akun.nominal1 AS nominal_terkirim, bank_akun.date_updated FROM bank_akun LEFT JOIN bank_hutang ON bank_akun.date_updated=bank_hutang.date_updated");

// $sqlTampil= "SELECT bank_akun.jenis_transaksi, bank_hutang.id_penghutang, bank_akun.nominal1 AS nominal_terkirim, bank_akun.date_updated FROM bank_akun LEFT JOIN bank_hutang ON bank_akun.date_updated=bank_hutang.date_updated WHERE jenis_transaksi !=1 AND jenis_transaksi !=2 AND id_penghutang ='ALAM' AND id_penghutang ='AKANG' AND id_penghutang ='ANG CU' AND id_penghutang ='ATAK' AND id_penghutang ='AON' AND id_penghutang ='ATEK' AND id_penghutang ='ASIANG' AND id_penghutang ='ASENG BANGUNAN' AND id_penghutang ='AKUANG MEDAN' AND id_penghutang ='ACUI' AND id_penghutang ='AKOK TATO' AND id_penghutang ='MEPONG' AND id_penghutang ='FERRY' AND id_penghutang ='AKUANG KACA' AND id_penghutang ='ENG HUI' AND id_penghutang ='AFU' AND id_penghutang ='DEBY' AND id_penghutang ='ACONG' AND id_penghutang ='ACIONG' AND id_penghutang ='ATAM' AND id_penghutang ='XXX001' AND id_penghutang ='XXX002' AND id_penghutang ='XXX003' AND id_penghutang ='XXX004'";
// $sqlTampil= "SELECT bank_akun.jenis_transaksi, bank_hutang.id_penghutang, bank_akun.nominal1 AS nominal_terkirim, bank_akun.date_updated FROM bank_akun LEFT JOIN bank_hutang ON bank_akun.date_updated=bank_hutang.date_updated WHERE jenis_transaksi !=1 AND jenis_transaksi !=2 AND id_penghutang ='ALAM' OR id_penghutang ='AKANG' OR id_penghutang ='ANG CU' OR id_penghutang ='ATAK' OR id_penghutang ='AON' OR id_penghutang ='ATEK' OR id_penghutang ='ASIANG' OR id_penghutang ='ASENG BANGUNAN' OR id_penghutang ='AKUANG MEDAN' OR id_penghutang ='ACUI' OR id_penghutang ='AKOK TATO' OR id_penghutang ='MEPONG' OR id_penghutang ='FERRY' OR id_penghutang ='AKUANG KACA' OR id_penghutang ='ENG HUI' OR id_penghutang ='AFU' OR id_penghutang ='DEBY' OR id_penghutang ='ACONG' OR id_penghutang ='ACIONG' OR id_penghutang ='ATAM' OR id_penghutang ='XXX001' OR id_penghutang ='XXX002' OR id_penghutang ='XXX003' OR id_penghutang ='XXX004'";
$data = mysqli_query($database,"SELECT bank_hutang.jenis_transaksi, bank_hutang.id_penghutang, bank_hutang.nominal1 AS nominal_terkirim, bank_hutang.nominal AS nominal_diterima, bank_hutang.date_updated FROM bank_hutang WHERE jenis_transaksi LIKE 'B00%'");




  while($d = mysqli_fetch_array($data)){
      ?>


            <tr>
              <td><?php echo $no++; ?></td>   
              <td><?php echo $d['jenis_transaksi']; ?></td>
              <td><?php echo $d['id_penghutang']; ?></td>
               <td><?php echo @rupiah(-$d['nominal_terkirim']); ?></td>
               <td><?php echo @rupiah($d['nominal_terkirim']); ?></td>
            <td><?php echo $d['date_updated']; ?></td>
                </tr>
            
         </tfoot>
        <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>



  
            <?php } ?>

 
        </tfoot>
    </table>


    <!--<?php  //else {
    // jika data salah
    //echo "data kosong";
   ?>-->
    <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>
<?php
      function rupiah($angka){
      $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
      return $hasil_rupiah;
}?>

<!-- <script>
    window.print();
  </script> -->

    </table>
<p>
    <a href="halamans/report_mutasi/cetak_report_mutasi_bank_ke_hutang.php" class="btn btn-success btn-lg">
      <span class="glyphicon glyphicon-print"></span> Cetak
    </a>
  </p>
    </table>
        <footer class="footer">
          
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>