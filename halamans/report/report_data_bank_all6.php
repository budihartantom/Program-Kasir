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
      <thead>
        <tr>
                <th>Nomor Urut</th>
                <th>Id Rekening</th>
                <th>Nominal Deposit</th>
                <th>Nominal Withdraw</th>
                <th>Keterangan Transaksi</th>
                <th>Keterangan Transaksi</th>
                <th>Total Deposit</th>
                <th>Total Withdraw</th>
                <th>Total Setelah Akumulasi</th>
                 <th>Waktu Transaksi</th>
              
                <!-- <th>Detail Transaksi</th> -->
            </tr>
        </thead>
        <tbody>

 <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}

         $id=1; 
        $subtotal_rekening= 0; 
         // <!--menampilkan produk yang sedang diperulangkan berdasarkan id produk  -->
         
      
         $data = mysqli_query($database,"SELECT id, rekening, nominal, inquiri, date_updated, SUM(nominal) AS subtotal_rekening_deposit from bank_akun where inquiri='deposit' GROUP BY rekening");
         $row = mysqli_fetch_assoc($data);

         $subtotal_rekening_deposit=0;
         $subtotal_rekening_deposit += $row['nominal'];
          ?>
         
          <?php

          $data1 = mysqli_query($database,"SELECT id, rekening, nominal, inquiri, date_updated, SUM(nominal) AS subtotal_rekening_withdraw from bank_akun where inquiri='withdraw' GROUP BY rekening");
         $row1 = mysqli_fetch_assoc($data1);

         $subtotal_rekening_deposit=0;
         $subtotal_rekening_deposit += $row['nominal'];
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['rekening']; ?></td>
                <td><?php echo @rupiah($row['nominal']); ?></td>
                 <td><?php echo @rupiah($row1['nominal']); ?></td>
                <td><?php echo $row['inquiri'] ?></td>
                 <td><?php echo $row1['inquiri'] ?></td>
                <td><?php echo @rupiah($row['subtotal_rekening_deposit']); ?></td>
                <td><?php echo @rupiah($row1['subtotal_rekening_withdraw']); ?></td>
                <td><?php echo @rupiah($row['subtotal_rekening_deposit']-$row1['subtotal_rekening_withdraw']); ?></td>
                 <td><?php echo $row['date_updated']; ?></td>
            </tr>
            <?php $id++; ?>
            <!-- <?php $subtotal_rekening //+= $nominal; ?> -->    
        </tbody>
          </table>


            </tfoot>
        <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>

            <?php   ?>

        </tfoot>
    </table>
   <!--  <?php  //} else {
   // jika data salah
   // echo "data kosong";
    ?>
 -->
    <?php
      function rupiah($angka){
      $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
      return $hasil_rupiah;
}?>
<p>
    <a href="halamans/cetak_report/cetak_report_data_bank_all.php" class="btn btn-success btn-lg">
      <span class="glyphicon glyphicon-print"></span> Cetak
    </a>
  </p>
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