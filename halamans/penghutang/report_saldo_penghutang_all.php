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
        <thead style="background-color:#122631;color:#c7fcff;">
           <tr>
                <th>Nomor Urut</th>
                <th>Nama Penghutang</th>
            <!--     <th>Jenis Kas</th> -->
                <th>Nominal Deposit</th>
                <th>Nominal Withdraw</th>
                <th>Keterangan Transaksi</th>
                <th>Tanggal Berhutang</th>
                <!--<th>Waktu Transaksi</th>
                <th>Detail Transaksi</th>-->
            </tr>
        </thead>
        <tbody>

<?php

 
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}

$total_nominal=0;
$sqlTampil= "SELECT id, id_penghutang, nominal1, nominal, inquiri, date_updated from bank_hutang WHERE id_penghutang!= 1 AND id_penghutang!=2 AND id_penghutang NOT LIKE 'B00%'  ORDER BY id_penghutang";
$tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
  // jika data benar
  while($row = $tampil->fetch_assoc()){ ?>


           
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['id_penghutang']; ?></td>
                <!-- <td><?php //echo $row['jenis_kas']; ?></td> -->
                <td><?php echo @rupiah($row['nominal1']); ?></td>
                <td><?php echo @rupiah($row['nominal']); ?></td>
                <td><?php echo $row['inquiri'] ?></td>
                <!-- <?php //echo @rupiah($pendapatan = $row['nominal']-$row1['nominal']); ?> -->
                <!-- <td><?php //echo $row['jenis_kas']; ?></td> -->
                <!-- <td><?php //echo $row['rekening']; ?></td>--> 
              <!--   <td><?php //echo $row2['nama_bank']; ?></td> -->
                <!--<td><?php ///echo $row['rekening']; ?></td>-->
                <td><?php echo $row['date_updated']; ?></td>
                <!--<td><?php //echo $row['create_date']; ?></td>
                <td><a href="">Detail Transaksi</a></td>-->
              </tr>
              <!-- <tr>
            <td>GRAND TOTAL</td> 
              <td></td>
        <td><?php //echo @rupiah($total_nominal+=$row['nominal']); ?></td>
       <td></td>
            </tr> -->
            </tfoot>
   <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>

            <?php   }?>


            </tfoot>
    </table>
    
    <?php  } else {
   // jika data salah
    echo "data kosong";
    }?>

    
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
    <a href="halamans/cetak_report/cetak_report_saldo_penghutang_all_detail.php" class="btn btn-success btn-lg">
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