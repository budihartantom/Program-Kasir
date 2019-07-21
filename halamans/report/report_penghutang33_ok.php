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
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>

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
                <th>Nama Penghutang</th>
                <th>Total Deposit</th>
                <th>Total Withdraw</th>
                <th>Total Saldo</th>
               <!--  <th>Saldo</th> -->
                <th>Tanggal Transaksi</th>
                </tr>                       
        </thead>
        <tbody>
        
          
   <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}

$no=1;
$id_penghutang='id_penghutang'; 
$data = mysqli_query($database,"SELECT penghutang.id, penghutang.id_penghutang, transaksi_bank_hutang_depo.id_penghutang, transaksi_bank_hutang_depo.nominal, transaksi_bank_hutang_depo.inquiri, transaksi_bank_hutang_depo.date_updated, transaksi_bank_hutang_with.id_penghutang, transaksi_bank_hutang_with.nominal, transaksi_bank_hutang_with.inquiri, transaksi_bank_hutang_with.date_updated, sum(transaksi_bank_hutang_depo.nominal) AS total_deposit, sum(transaksi_bank_hutang_with.nominal) AS total_withdraw FROM (penghutang LEFT JOIN transaksi_bank_hutang_depo ON penghutang.id_penghutang = transaksi_bank_hutang_depo.id_penghutang) LEFT JOIN  transaksi_bank_hutang_with ON transaksi_bank_hutang_depo.id_penghutang=transaksi_bank_hutang_with.id_penghutang GROUP BY penghutang.id_penghutang DESC");


   while($d = mysqli_fetch_array($data)){


// $data = mysqli_query($database,"SELECT transaksi_bank_hutang_depo.id, transaksi_bank_hutang_depo.id_penghutang, transaksi_bank_hutang_depo.nominal, transaksi_bank_hutang_depo.inquiri, transaksi_bank_hutang_depo.date_updated, transaksi_bank_hutang_with.id, transaksi_bank_hutang_with.id_penghutang, transaksi_bank_hutang_with.nominal, transaksi_bank_hutang_with.inquiri, transaksi_bank_hutang_with.date_updated, sum(transaksi_bank_hutang_depo.nominal) AS total_deposit, sum(transaksi_bank_hutang_with.nominal) AS total_withdraw from transaksi_bank_hutang_depo, transaksi_bank_hutang_with WHERE transaksi_bank_hutang_depo.id_penghutang=transaksi_bank_hutang_with.id_penghutang ORDER BY id_penghutang DESC");
//    while($d = mysqli_fetch_array($data)){
   
      
// $sql="SELECT id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_depo INNER  JOIN transaksi_bank_hutang_with  ON transaksi_bank_hutang_depo.id_penghutang=transaksi_bank_hutang_with.id_penghutang ORDER BY id_penghutang";
//  $query=mysqli_query($database,$sql);
//  $d=mysqli_fetch_array($query);{

      
// <!-- $sql1="SELECT id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_depo INNER  JOIN transaksi_bank_hutang_with  ON transaksi_bank_hutang_depo.id_penghutang=transaksi_bank_hutang_with.id_penghutang  ";
// $query1=mysqli_query($database,$sql1);
// $row1=mysqli_fetch_array($query1);{


?> 
 
<!-- <?php
// $id_penghutang='id_penghutang'; 
//$data1 = mysqli_query($database,"SELECT id_penghutang, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from bank_hutang WHERE id_penghutang =$id_penghutang GROUP BY id_penghutang");
  // while($last_d1 = mysqli_fetch_array($data1)){

    ?>
 -->
            <tr>
              <td><?php echo $no++ ?></td>
               <td><?php echo $d['id_penghutang']; ?></td>
        <!--        <td><?php//s echo @rupiah($d['nominal']); ?></td> -->
               <td><?php echo @rupiah($d['total_deposit']); ?></td>
            <td><?php echo @rupiah($d['total_withdraw']); ?></td> 
            <td><?php echo @rupiah($d['total_deposit']+$d['total_withdraw']); ?></td>
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


     <!--  <a href="halamans/cetak_report/cetak_report_penghutang.php" class="fa fa-print" target="_BLANK">CETAK 
      </a>
    </p> -->
<!-- <p>Icon Print: <span class="glyphicon glyphicon-print"></span></p>
  <p>Icon Print di atas tombol besar ("btn-lg"): --><p>
    <a href="halamans/cetak_report/cetak_report_penghutang.php" class="btn btn-success btn-lg">
      <span class="glyphicon glyphicon-print"></span> Cetak
    </a>
  </p>
<!-- <a href="halamans/cetak_report/cetak_report_penghutang.php" target="_BLANK">TES PRINT</a> -->
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