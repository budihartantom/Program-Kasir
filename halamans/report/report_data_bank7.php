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
                <th>Bank</th>
                <th>Nama Pemilik Rekening</th>
                <th>Saldo Rekening</th>
                </tr>                       
            </tr>
        </thead>
        <tbody>
        
          
   <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}



$jenis_kas=0;
$sqlTampil1= "SELECT id, bank, account_name, saldo, date_updated, SUM(saldo) AS saldo from bank_account WHERE bank='B0001' AND account_name='Arifin'";
$tampil1 = $database->query($sqlTampil1);
?>
<?php if ($tampil1->num_rows > 0) {
  // jika data benar
  while($row1 = $tampil1->fetch_array()){ ?>


<?php
    $jenis_kas=0;
$sqlTampil2= "SELECT id, bank, account_name, saldo, date_updated, SUM(saldo) AS saldo from bank_account WHERE bank='B0002' AND account_name='Veroni Sinta'";
$tampil2 = $database->query($sqlTampil2);
?>
<?php if ($tampil2->num_rows > 0) {
  // jika data benar
  while($row2 = $tampil2->fetch_array()){ ?>



<?php
  $jenis_kas=0;
  $sqlTampil3= "SELECT id, bank, account_name, saldo, date_updated, SUM(saldo) AS saldo from bank_account WHERE bank='B0003' AND account_name='Edi'";
  $tampil3 = $database->query($sqlTampil3);
?>
<?php if ($tampil3->num_rows > 0) {
    // jika data benar
    while($row3 = $tampil3->fetch_array()){ ?>


              <tr>
               <td><?php echo $row1['bank']; ?></td>
               <td><?php echo $row1['account_name']; ?></td>
               <td><?php echo @rupiah($row1['saldo']); ?></td>
                </tr>
                <tr>
               <td><?php echo $row2['bank']; ?></td>
               <td><?php echo $row2['account_name']; ?></td>
               <td><?php echo @rupiah($row2['saldo']); ?></td>
            </tr>
                <tr>
               <td><?php echo $row3['bank']; ?></td>
               <td><?php echo $row3['account_name']; ?></td>
                <td><?php echo @rupiah($row3['saldo']); ?></td>  
              </tr>
            
        </tfoot>
        <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>



  
            <?php   }?>
<?php } else {
    // jika data salah
    echo "data kosong";
  }}}}}?>
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