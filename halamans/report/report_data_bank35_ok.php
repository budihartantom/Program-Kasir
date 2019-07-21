0<?php
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
        <thead>
             <tr>
                <th>Nomor Urut</th>
                <th>Id Bank</th>
                <th>Id Rekening</th>
                <th>Pemilik Rekening</th>
                <th>Nomor Rekening</th>
                <th>Total Saldo</th>
                <th>Tanggal Transaksi</th>
                <th>Detail Transaksi</th>
                </tr>                       
        </thead>
        <tbody>

 <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}


$no=1; 
$data = mysqli_query($database,"SELECT bank_account.id_bank, bank_account.rekening,  bank_account.account_name, bank_account.account_number, bank_account.date_updated, transaksi_bank_akun_depo.id,  transaksi_bank_akun_depo.rekening, transaksi_bank_akun_depo.nominal, transaksi_bank_akun_depo.inquiri, transaksi_bank_akun_depo.date_updated, sum(transaksi_bank_akun_depo.nominal) AS total_deposit, transaksi_bank_akun_with.id, transaksi_bank_akun_with.rekening, transaksi_bank_akun_with.nominal, transaksi_bank_akun_with.inquiri, transaksi_bank_akun_with.date_updated, sum(transaksi_bank_akun_with.nominal) AS total_withdraw from (bank_account LEFT JOIN transaksi_bank_akun_depo on bank_account.rekening = transaksi_bank_akun_depo.rekening) LEFT JOIN transaksi_bank_akun_with on transaksi_bank_akun_depo.rekening = transaksi_bank_akun_with.rekening GROUP BY bank_account.rekening DESC");
   while($d = mysqli_fetch_array($data)){
      ?>


<!-- <?php
//      $id='id'; 
//$data1 = mysqli_query($database,"SELECT bank_account.id,  bank_account.id_bank, bank_account.account_name, bank_account.account_number, bank_account.date_updated, transaksi_bank_akun_with.id,  transaksi_bank_akun_with.rekening, transaksi_bank_akun_with.nominal, transaksi_bank_akun_with.inquiri, transaksi_bank_akun_with.date_updated, sum(transaksi_bank_akun_with.nominal) AS total_withdraw from bank_account, transaksi_bank_akun_with  WHERE bank_account.id=transaksi_bank_akun_with.rekening GROUP BY bank_account.id DESC");
  // while($d1 = mysqli_fetch_array($data1)){
      ?>
 -->

      <!-- <?php

//      $id_penghutang='id_penghutang'; 
$data1// = mysqli_query($database,"SELECT penghutang.id_penghutang,  penghutang.nominal, penghutang.date_updated, transaksi_bank_hutang_with.id_penghutang, transaksi_bank_hutang_with.nominal, transaksi_bank_hutang_with.date_updated, sum(transaksi_bank_hutang_with.nominal) AS total_withdraw from penghutang, transaksi_bank_hutang_with  WHERE penghutang.id_penghutang=transaksi_bank_hutang_with.id_penghutang GROUP BY penghutang.id_penghutang DESC");
  // while($d1 = mysqli_fetch_array($data1)){
      ?>
 -->
<!-- $sql1="SELECT id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_depo INNER  JOIN transaksi_bank_hutang_with  ON transaksi_bank_hutang_depo.id_penghutang=transaksi_bank_hutang_with.id_penghutang  ";
$query1=mysqli_query($database,$sql1);
$row1=mysqli_fetch_array($query1);{


?> -->

    


            <tr>
              <td><?php echo $no++ ?></td>
               <td><?php echo $d['id_bank']; ?></td>
               <td><?php echo $d['rekening']; ?></td>
               <td><?php echo $d['account_name']; ?></td>
               <td><?php echo $d['account_number']; ?></td>
        <!--        <td><?php//s echo @rupiah($d['nominal']); ?></td> -->
               <td><?php echo @rupiah($d['total_deposit']-$d['total_withdraw']); ?></td>
            <!-- <td><?php// echo @rupiah($d1['total_withdraw']); ?></td> 
            <td><?php// echo @rupiah($d['total_deposit']-$d1['total_withdraw']); ?></td> -->
               <td><?php echo $d['date_updated']; ?></td>
               <td><a href="detail_histori_bank.php">Detail Transaksi</a></td>
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

<p>
    <a href="halamans/cetak_report/cetak_report_data_bank.php" class="btn btn-success btn-lg">
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