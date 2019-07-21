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
<div class="container"> </br></br></br></br></br></br>
    <table id="example" class="display" style="width:100%">
         <thead style="background-color:#122631;color:#c7fcff;">

            <tr>
                <th>Nomor Id</th>
                <th>Bank</th>
                <!-- <th>Id Bank</th> -->
                <th>Nama Pemilik</th>
                <th>No.Rekening</th>
                <th>Dana Transfer</th>
                <th>Nominal</th>
                <th>Saldo</th>
                <th>Total Saldo</th>
                <th>Waktu Transaksi</th>
                <!--<th>Waktu Transaksi</th>
                <th>Detail Transaksi</th>-->
            </tr>
        </thead>
        <tbody>


 <?php

 $nominal=0;
  $sqlTampil= "SELECT bank_account.id, bank_account.bank, bank_account.account_name, bank_account.account_number, bank_account.saldo, bank_account.date_updated, bank_accountest.nominal FROM bank_account INNER JOIN bank_accountest ON bank_account.id = bank_accountest.id";
  $tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
    // jika data benar
    while($row = $tampil->fetch_assoc()){ ?>
    

<!-- $sql = "SELECT * FROM bank join bank_account where bank.id=bank_account.id_bank ";
$query=mysqli_query($koneksi,$sql);
 
if(mysqli_num_rows($query)==0){ -->

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['bank']; ?></td>
                <!-- <td><?php //echo $row['id_bank']; ?></td> -->
                <td><?php echo $row['account_name']; ?></td>
                <td><?php echo $row['account_number']; ?></td>
                <!--<td><?php //echo $row['jenis_transaksi']; ?></td>
                <td><?php //echo $row['jenis_kas']; ?></td>
                <td><?php //echo $row['rekening']; ?></td>-->
                <!-- <td><?php //echo @rupiah($row2['nominal']); ?></td> -->
                <td><?php echo @rupiah($row['nominal']); ?></td>
                <td><?php echo @rupiah($row['saldo']); ?></td>
                <td></td>
                <td><?php echo $row['date_updated']; ?></td>
                <!-- <td><a href="">Detail Transaksi</a></td> -->
            </tr>
           <tr>
                <td>GRAND TOTAL</td>
                <td>GRAND SALDO</td>

                <td><?php echo $row['account_name']; ?></td>
                <td></td>
                <td><?php echo @rupiah($row['nominal']); ?></td>
                <td><?php echo @rupiah($row['nominal']); ?></td>
                <td><?php echo @rupiah($row['saldo']); ?></td>
                <td><?php echo @rupiah($total_saldo = $row['saldo']+$row['nominal']+$row['nominal']); ?></td>
                <td></td>
                <td></td>
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
}?>
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