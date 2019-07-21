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

  <html>
<body>
  <br/>
  <br/>
<div class="container">
    <table id="example" class="display" style="width:100%">
       <thead style="background-color:#122631;color:#c7fcff;">
      

           <tr>
                <th>Nomor Id</th>
                <th>Nama Penghutang</th>
                <th>Debit</th>
                <th>Kredit</th>
                <th>Total Saldo</th>
                <th>Tanggal Berhutang</th>
                <!--<th>Waktu Transaksi</th>
                <th>Detail Transaksi</th>-->
            </tr>
        </thead>
        <tbody>

<?php

$nominal=0;
$sqlTampil1= "SELECT id, id_penghutang, jenis_kas, nominal_with, saldo, inquiri, date_updated, SUM(nominal_with) AS nominal_withdraw from transaksi_bank_hutang_with WHERE id_penghutang='ALAM'";
$tampil1 = $database->query($sqlTampil1);
?>
<?php if ($tampil1->num_rows > 0) {
  // jika data benar
  while($row1 = $tampil1->fetch_assoc()){ ?>

        <?php

$nominal=0;
$pendapatan = $nominal-$nominal;
$sqlTampil= "SELECT id, id_penghutang, jenis_kas, nominal_depo, saldo, inquiri, date_updated, SUM(nominal_depo) AS nominal_deposit from transaksi_bank_hutang_depo WHERE id_penghutang='ALAM'";
$tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
  // jika data benar
  while($row = $tampil->fetch_assoc()){ ?>



            <tr>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row1['id_penghutang']; ?></td>
                <td><?php echo $row['nominal_deposit']; ?></td>
                <td><?php echo $row1['nominal_withdraw']; ?></td>
                <td><?php echo $row['saldo'] = $row['nominal_deposit'] - $row1['nominal_withdraw']; ?></td>
                <!-- <?php //echo @rupiah($pendapatan = $row['nominal']-$row1['nominal']); ?> -->
                <!-- <td><?php //echo $row['jenis_kas']; ?></td> -->
                <!-- <td><?php //echo $row['rekening']; ?></td>--> 
              <!--   <td><?php //echo $row2['nama_bank']; ?></td> -->
                <!--<td><?php ///echo $row['rekening']; ?></td>-->
                <td><?php echo $row['date_updated']; ?></td>
                <!--<td><?php //echo $row['create_date']; ?></td>
                <td><a href="">Detail Transaksi</a></td>-->
            </tr>
            
            <?php   }?>
<?php } else {
    // jika data salah
    echo "data kosong";
  } ?>
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
}}}?>
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