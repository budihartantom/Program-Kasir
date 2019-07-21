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
          <center><h1>LAPORAN TRANSAKSI SALDO PER/REKENING</h1></center>
               <tr>
               <th>Nomor Urut</th>
               <th>Pemilik Rekening</th>
               <th>Nomor Rekening</th>
                <th>Kode Rekening</th>
                <th>Total Deposit</th>
                <th>Total Withdraw</th>
                <th>Total Saldo</th>
                <th>Tanggal Transaksi</th>                
                <!-- <th>Detail Transaksi</th> -->
                </tr>                        
        </thead>
        <tbody>

 <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}


$no=1;
$id_penghutang='id_penghutang'; 
$data = mysqli_query($database,"SELECT bank_akun.rekening, bank_akun.nominal, bank_akun.nominal1,  bank_akun.saldo, bank_akun.date_updated, bank_account.account_name, bank_account.account_number, SUM(nominal) AS total_deposit, SUM(nominal1) AS total_withdraw, SUM(saldo) AS total_saldo FROM bank_akun INNER JOIN bank_account ON bank_akun.rekening=bank_account.rekening GROUP BY rekening");


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
               <td><?php echo $d['account_name']; ?></td>
                <td><?php echo $d['account_number']; ?></td>
               <td><?php echo $d['rekening']; ?></td>
        <!--        <td><?php//s echo @rupiah($d['nominal']); ?></td> -->
               <td><?php echo @rupiah($d['total_deposit']); ?></td>
            <td><?php echo @rupiah($d['total_withdraw']); ?></td> 
            <td><?php echo @rupiah($d['total_saldo']= $d['total_deposit']-$d['total_withdraw']); ?></td>
               <td><?php echo $d['date_updated']; ?></td>
              <!--  <td><a href="detail_histori_bank.php">Detail Transaksi</a></td> -->
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
<script>
    window.print();
  </script>

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