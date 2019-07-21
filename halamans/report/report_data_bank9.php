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
                <th>No Urut</th>
                <th>Bank</th>
                <th>Id Bank</th>
                <th>Jenis Transaksi</th>
                <th>Jenis Kas</th>
                <th>Account Name</th>
                <th>Account Number</th>
                <th>Nominal</th>
                <th>Saldo</th>
                <th>Inquiri</th>
                <th>Tanggal</th>
                </tr>                       
            </tr>
        </thead>
        <tbody>
        
          
   <?php




$sqlTampil3= "SELECT * from bank_account";
$tampil3 = $database->query($sqlTampil3);
?>
<?php 
  // jika data benar
  while($row3 = $tampil3->fetch_array()){ ?>

              <tr>
               <td><?php echo $row3['id']; ?></td>
               <td><?php echo $row3['bank']; ?></td>
               <td><?php echo $row3['id_bank']; ?></td>
               <td><?php echo $row3['jenis_transaksi']; ?></td>
               <td><?php echo $row3['jenis_kas']; ?></td>
               <td><?php echo $row3['account_name']; ?></td>
               <td><?php echo $row3['account_number']; ?></td>
               <td><?php echo $row3['nominal']; ?></td>
               <td><?php echo $row3['saldo']; ?></td>       
               <td><?php echo $row3['inquiri']; ?></td>
               <td><?php echo $row3['date_updated']; ?></td>
              </tr>
        </tfoot>
        <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>

            <?php   }?>

        </tfoot>
    </table>
    <!--<?php  //else {
    // jika data salah
    //echo "data kosong";
   ?>-->
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