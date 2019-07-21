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
          <center><h1>LAPORAN TRANSAKSI MUTASI KAS KE KAS</h1></center>
               <tr>
               <th>Nomor Urut</th>
               <!-- <th>Jenis Transaksi</th> -->
               <th>Jenis Kas Pengirim</th>
               <th>Jenis Kas Penerima</th> 
            <!--     <th>Kode Rekening</th> -->
                <th>Nominal Terkirim</th>
                <th>Nominal Di Terima</th>
                <!-- <th>Total Kas Kecil</th>
                <th>Total Kas Besar</th>-->
                <!-- <th>Total Saldo</th>  --> 
                <!--  <th>Keterangan Transaksi</th>  -->
                <th>Tanggal Transaksi</th>         
               <!--  <th>Detail Transaksi</th> -->
                </tr>                        
        </thead>
        <tbody>

 <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}


// $id=1;
// $jenis_kas='jenis_kas'; 
// $data = mysqli_query($database,"SELECT kas_kecil.id, kas_kecil.jenis_transaksi, kas_kecil.jenis_kas,  kas_kecil.rekening, kas_kecil.nominal, kas_kecil.inquiri, kas_kecil.create_date, kas_besar.id, kas_besar.jenis_transaksi, kas_besar.jenis_kas,  kas_besar.rekening, kas_besar.nominal, kas_besar.inquiri, kas_besar.create_date, SUM(kas_kecil.nominal) AS total_kas_kecil, SUM(kas_besar.nominal) AS total_kas_besar FROM kas_kecil INNER JOIN kas_besar ON kas_kecil.jenis_kas=kas_besar.jenis_kas");


$no=1;
$jenis_kas='jenis_kas'; 
$jenis_transaksi='jenis_transaksi'; 
$data = mysqli_query($database,"SELECT kas_kecil.id, kas_kecil.jenis_transaksi, kas_kecil.jenis_kas,  kas_kecil.rekening, kas_kecil.nominal, kas_kecil.inquiri, kas_kecil.create_date, kas_kecil.jenis_transaksi AS jenis_kas_pengirim, kas_kecil.nominal AS nominal_terkirim, kas_besar.id, kas_besar.jenis_transaksi, kas_besar.jenis_kas, kas_besar.rekening, kas_besar.nominal, kas_besar.inquiri, kas_besar.create_date, kas_besar.jenis_transaksi AS jenis_kas_penerima, kas_besar.nominal AS nominal_diterima FROM kas_kecil INNER JOIN kas_besar ON kas_kecil.jenis_kas=kas_besar.jenis_kas GROUP BY jenis_kas LIMIT 1 DESC");

  
 while($d = mysqli_fetch_array($data)){
      ?>


            <tr>
              <td><?php echo $no++; ?></td>
             <!--   <td><?php //echo $d['jenis_transaksi']; ?></td> -->
                <!-- <td><?php// echo $d['jenis_kas']; ?></td> -->
               <!-- <td><?php// echo $d['rekening']; ?></td> -->
               <td><?php echo $d['jenis_transaksi']; ?></td>
                <td><?php echo $d['jenis_kas']; ?></td>
               <!--  <td><?php //echo $d['jenis_kas_dari_kas_besar']; ?></td> -->
              <td><?php echo @rupiah(-$d['nominal_terkirim']); ?></td>
               <td><?php echo @rupiah($d['nominal_diterima']); ?></td>
             <!--   <td><?php// echo @rupiah($d['total_kas_kecil']); ?></td>
               <td><?php// echo @rupiah($d['total_kas_besar']); ?></td> -->
            <!-- <td><?php //echo @rupiah($d['total_kas_besar']); ?></td>-->
         <!-- <td><?php// echo @rupiah($d['nominal_kas_kecil']-$d['nominal_kas_besar']); ?></td>  -->
            <!-- <td><?php //echo $d['inquiri']; ?></td> -->
               <td><?php echo $d['create_date']; ?></td>
              <!--  <td><a href="report_detail_kas_besar.php">Detail Transaksi</a></td> -->
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

    <!-- <a href="halamans/report_mutasi/cetak_report_mutasi_kas_ke_kas.php" class="btn btn-success btn-lg">
      <span class="glyphicon glyphicon-print"></span> Cetak
    </a>
  </p> -->
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