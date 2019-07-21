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
      <form>
          <thead style="background-color:#122631;color:#c7fcff;">
           <center><h1>LAPORAN TRANSAKSI GAME SLOT</h1></center>
            <tr>
               <th>Nomor Urut</th>
              <!--  <th>Jenis Transaksi</th> -->
               <th>Jenis Kas</th> 
               <th>Rekening</th> 
                <th>Nominal</th>
                <!-- <th>Nominal Withdraw</th>
                <th>Total Saldo</th>
               <th>Total Withdraw</th> -->
                <th>Keterangan Transaksi</th>
                <!--  <th>Keterangan Transaksi2</th> -->
                <th>Tanggal Transaksi</th>                
                <!-- <th>Detail Transaksi</th> -->
                </tr>                       
        </thead>
        <tbody>

 <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}


$id=1;
// $rekening='rekening'; 
$data1 = mysqli_query($database,"SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date FROM game_slot GROUP BY create_date");


   while($d1 = mysqli_fetch_array($data1)){

      ?>


<!-- <?php

//      $id=1;
// $rekening='rekening'; 
$data// = mysqli_query($database//,"SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date,  SUM(nominal) AS total_withdraw FROM game_mm  where inquiri='withdraw' GROUP BY create_date");


  // while($d = mysqli_fetch_array($data)){

      ?>

 -->

    


            <tr>
              <td><?php echo $d1['id']; ?></td>
               <!-- <td><?php// echo $d1['jenis_transaksi']; ?></td>-->
                <td><?php echo $d1['jenis_kas']; ?></td> 
               <td><?php echo $d1['rekening']; ?></td>
              <td><?php  echo @rupiah($d1['nominal']); ?></td>
          <!--     <td><?php  //echo @rupiah($d['nominal']); ?></td>  --> 
               <!-- <td><?php //echo @rupiah($d1['total_deposit'] - $d['total_withdraw'] ); ?></td> -->
                <td><?php echo $d1['inquiri']; ?></td>
                <!-- <td><?php// echo $d['inquiri']; ?></td> -->
           <!--  <td><?php //echo @rupiah($d['total_withdraw']); ?></td> 
            <td><?php //echo @rupiah($d['total_saldo']= $d['total_deposit']-$d['total_withdraw']); ?></td -->
               <td><?php echo $d1['create_date']; ?></td>
               <!-- <td><a href="detail_histori_bank.php?rekening=<?php //echo $d['rekening']; ?>" class="fa fa-search">Detail Transaksi</a></td> -->
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