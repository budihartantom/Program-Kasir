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
            <center><h1>LAPORAN TRANSAKSI PENGHUTANG PRODUK</h1></center>
             <tr>
               <th>Nomor Urut</th>
              <!--   <th>Id Produk</th> -->
                <th>Nama Penghutang</th>
                <th>Nama Produk</th>
                <th>Satuan Produk</th>
                <!-- <th>Jenis Kas</th> -->
                <th>Total Produk</th>
                <th>Keterangan Transaksi</th>
                 <th>Tanggal Transaksi</th>
                </tr>                       
        </thead>
        <tbody>
        
          
   <?php


$id=1;
$id_penghutang='id_penghutang'; 
$data = mysqli_query($database,"SELECT id, id_produk, id_penghutang, jenis_kas, nama_produk, satuan_produk, nominal,  keterangan, date_updated, SUM(nominal) AS total_jumlah_produk FROM bank_hutang_produk GROUP BY id_penghutang");


   while($d = mysqli_fetch_array($data)){

?> 
 

            <tr>
              <td><?php echo $d['id']; ?></td>
           <!--    <td><?php// echo $d['id_produk']; ?></td> -->
               <td><?php echo $d['id_penghutang']; ?></td>
               <td><?php echo $d['nama_produk']; ?></td>
               <td><?php echo $d['satuan_produk']; ?></td>
           <!--     <td><?php //echo $d['jenis_kas']; ?></td> -->
               <td><?php echo $d['total_jumlah_produk']; ?></td>
               <td><?php echo $d['keterangan']; ?></td>
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
 
<script>
    window.print();
  </script>

<!-- <p>Icon Print: <span class="glyphicon glyphicon-print"></span></p>
  <p>Icon Print di atas tombol besar ("btn-lg"): --><!-- <p>
    <a href="halamans/cetak_report/cetak_report_penghutang.php" class="btn btn-success btn-lg">
      <span class="glyphicon glyphicon-print"></span> Cetak
    </a>
  </p> -->
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