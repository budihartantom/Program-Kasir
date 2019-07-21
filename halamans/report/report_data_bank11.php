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
                <!-- <th>No Urut</th> -->
               <!--  <th>Bank</th>
                <th>Id Bank</th>
                <th>Jenis Transaksi</th> -->
                <!-- <th>Jenis Kas</th>
                <th>Kode Bank</th> -->
                <th>Nama Bank</th>
                <th>Pemilik Rekening</th>
                 <th>Nomor Rekening</th>
                <!-- <th>Account Name</th>
                <th>Account Number</th> -->
               <!--  <th>Nominal</th> -->
                <th>Saldo Rekening</th>
               <!--  <th>Inquiri</th> -->
              <!--   <th>Tanggal Transaksi</th> -->
                </tr>                       
            </tr>
        </thead>
        <tbody>

<?php


$sqlTampil2= "SELECT id, nama_bank, tipe  from bank WHERE tipe='1' AND nama_bank='BNI'";
$tampil2 = $database->query($sqlTampil2);
?>
<?php  if ($tampil2->num_rows > 0) {
  // jika data benar
  while($row2 = $tampil2->fetch_array()){ ?>     


<?php


$sqlTampil1= "SELECT id, bank, account_name, account_number from bank_account WHERE bank='B0001' AND account_name='arifin'";
$tampil1 = $database->query($sqlTampil1);
?>
<?php  if ($tampil1->num_rows > 0) {
  // jika data benar
  while($row1 = $tampil1->fetch_array()){ ?>        
          
   <?php

$sqlTampil3= "SELECT id, jenis_kas, rekening, nominal, date_updated, SUM(nominal) AS total_deposit from bank_akun WHERE rekening='B0001' AND inquiri='deposit'";
$tampil3 = $database->query($sqlTampil3);
?>
<?php  if ($tampil3->num_rows > 0) {
  // jika data benar
  while($row3 = $tampil3->fetch_array()){ ?>

     <?php

$sqlTampil10= "SELECT id, jenis_kas, rekening, nominal, date_updated, SUM(nominal) AS total_withdraw from bank_akun WHERE rekening='B0001' AND inquiri='withdraw'";
$tampil10 = $database->query($sqlTampil10);
?>
<?php  if ($tampil10->num_rows > 0) {
  // jika data benar
  while($row10 = $tampil10->fetch_array()){ ?>



    <?php

$sqlTampil4= "SELECT id, nama_bank, tipe  from bank WHERE tipe='1' AND nama_bank='BCA'";
$tampil4 = $database->query($sqlTampil4);
?>
<?php  if ($tampil4->num_rows > 0) {
  // jika data benar
  while($row4 = $tampil4->fetch_array()){ ?>     


<?php


$sqlTampil5= "SELECT id, bank, account_name, account_number from bank_account WHERE bank='B0002' AND account_name='Veroni Sinta'";
$tampil5 = $database->query($sqlTampil5);
?>
<?php  if ($tampil5->num_rows > 0) {
  // jika data benar
  while($row5 = $tampil5->fetch_array()){ ?>        
          
   <?php


$sqlTampil6= "SELECT id, jenis_kas, rekening, nominal, date_updated, SUM(nominal) AS total_deposit from bank_akun WHERE rekening='B0002' AND inquiri='deposit'";
$tampil6 = $database->query($sqlTampil6);
?>
<?php  if ($tampil6->num_rows > 0) {
  // jika data benar
  while($row6 = $tampil6->fetch_array()){ ?>

    <?php

    $sqlTampil11= "SELECT id, jenis_kas, rekening, nominal, date_updated, SUM(nominal) AS total_withdraw from bank_akun WHERE rekening='B0002' AND inquiri='withdraw'";
$tampil11 = $database->query($sqlTampil11);
?>
<?php  if ($tampil11->num_rows > 0) {
  // jika data benar
  while($row11 = $tampil11->fetch_array()){ ?>


    <?php

$sqlTampil7= "SELECT id, nama_bank, tipe  from bank WHERE tipe='1' AND nama_bank='MANDIRI'";
$tampil7 = $database->query($sqlTampil7);
?>
<?php  if ($tampil7->num_rows > 0) {
  // jika data benar
  while($row7 = $tampil7->fetch_array()){ ?>     


<?php


$sqlTampil8= "SELECT id, bank, account_name, account_number from bank_account WHERE bank='B0003' AND account_name='edi'";
$tampil8 = $database->query($sqlTampil8);
?>
<?php  if ($tampil8->num_rows > 0) {
  // jika data benar
  while($row8 = $tampil8->fetch_array()){ ?>        
          
   <?php

$sqlTampil9= "SELECT id, jenis_kas, rekening, nominal, date_updated, SUM(nominal) AS total_deposit from bank_akun WHERE rekening='B0003' AND inquiri='deposit'";
$tampil9 = $database->query($sqlTampil9);
?>
<?php  if ($tampil9->num_rows > 0) {
  // jika data benar
  while($row9 = $tampil9->fetch_array()){ ?>

    <?php

    $sqlTampil12= "SELECT id, jenis_kas, rekening, nominal, date_updated, SUM(nominal) AS total_withdraw from bank_akun WHERE rekening='B0003' AND inquiri='withdraw'";
$tampil12 = $database->query($sqlTampil12);
?>
<?php  if ($tampil12->num_rows > 0) {
  // jika data benar
  while($row12 = $tampil12->fetch_array()){ ?>



              <tr>
               <!-- <td><?php //echo $row3['id']; ?></td>        -->      
        <!--        <td><?php //echo $row3['jenis_kas']; ?></td> -->
             <!--   <td><?php //echo $row3['rekening']; ?></td> -->
               <td><?php echo $row2['nama_bank']; ?></td>
              <td><?php echo $row1['account_name']; ?></td>
              <td><?php echo $row1['account_number']; ?></td>
              <td><?php echo @rupiah($row3['total_deposit']-$row10['total_withdraw']); ?></td> 
               <!-- <td><?php// echo $row3['inquiri']; ?></td> -->
          <!--<td><?php //echo $row3['date_updated']; ?></td> -->
              </tr>
              <tr>
              <!--  <td><?php// echo $row6['id']; ?></td>   -->           
              <!--  <td><?php //echo $row6['jenis_kas']; ?></td>
               <td><?php// echo $row6['rekening']; ?></td> -->
               <td><?php echo $row4['nama_bank']; ?></td>
              <td><?php echo $row5['account_name']; ?></td>
              <td><?php echo $row5['account_number']; ?></td>
              <td><?php echo @rupiah($row6['total_deposit']-$row11['total_withdraw']); ?></td> 
               <!-- <td><?php// echo $row3['inquiri']; ?></td> -->
          <!--<td><?php //echo $row3['date_updated']; ?></td> -->
              </tr>
              <tr>
               <!-- <td><?php //echo $row9['id']; ?></td> -->
               <!-- <td><?php //echo $row9['jenis_kas']; ?></td>
               <td><?php //echo $row9['rekening']; ?></td> -->
               <td><?php echo $row7['nama_bank']; ?></td>
              <td><?php echo $row8['account_name']; ?></td>
              <td><?php echo $row8['account_number']; ?></td>
              <td><?php echo @rupiah($row9['total_deposit']-$row12['total_withdraw']); ?></td> 
               <!-- <td><?php// echo $row3['inquiri']; ?></td> -->
          <!--<td><?php //echo $row3['date_updated']; ?></td> -->
              </tr>
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
    }}}}}}}}}}}}}}}}}}}}}}}?>

    <?php
      function rupiah($angka){
      $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
      return $hasil_rupiah;
}?>
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