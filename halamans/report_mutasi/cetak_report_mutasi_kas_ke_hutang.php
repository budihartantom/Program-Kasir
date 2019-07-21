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
          <center><h1>LAPORAN TRANSAKSI MUTASI KAS KE HUTANG</h1></center>
               <tr>
               <th>Nomor Urut</th>
               <!-- <th>Jenis Transaksi</th> -->
               <th>Pengirim</th>
               <th>Penerima</th> 
            <!--     <th>Kode Rekening</th> -->
                <th>Nominal Terkirim</th>
                <th>Nominal Di Terima</th>
                <!-- <th>Total Kas Kecil</th>
                <th>Total Kas Besar</th>-->
                <!-- <th>Total Saldo</th>  --> 
                <!--  <th>Keterangan Transaksi</th>  -->
                <th>Tanggal Transaksi</th>         
                </tr>                        
        </thead>
        <tbody>

 <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}

$no=1;
$jenis_kas='jenis_kas'; 
$jenis_transaksi='jenis_transaksi'; 
$id_penghutang='id_penghutang';
// $data = mysqli_query($database,"SELECT kas_kecil.id, kas_kecil.jenis_kas, kas_kecil.jenis_kas AS jenis_kas_kas_kecil, kas_kecil.nominal AS nominal_kas_kecil, kas_besar.jenis_kas, kas_besar.jenis_kas AS jenis_kas_kas_besar, kas_besar.nominal AS nominal_kas_besar, bank_akun.rekening, bank_akun.nominal AS nominal_bank_akun, bank_akun.date_updated 
//                             FROM kas_kecil, kas_besar, bank_akun
//                             WHERE kas_kecil.jenis_kas = kas_besar.jenis_kas
//                             AND kas_kecil.rekening = bank_akun.rekening
//                             GROUP BY rekening DESC");

// $data = mysqli_query($database,"SELECT kas_kecil.jenis_transaksi, kas_kecil.jenis_kas,  kas_kecil.nominal AS nominal_terkirim, kas_kecil.create_date FROM kas_kecil WHERE jenis_kas !=1 AND jenis_kas !=2 AND jenis_kas !='B0001' AND jenis_kas !='B0002' AND jenis_kas !='B0003' AND jenis_kas !='B0004' AND jenis_kas !='B0004' AND jenis_kas !='B0006' AND jenis_kas !='B0007' AND jenis_kas !='B0008' AND jenis_kas !='B0009' AND jenis_kas !='B0010' AND jenis_kas !='B0011' UNION SELECT kas_besar.jenis_transaksi, kas_besar.jenis_kas, kas_besar.nominal AS nominal_terkirim, kas_besar.create_date FROM kas_besar WHERE jenis_kas !=2 AND jenis_kas !=1 AND jenis_kas !='B0001' AND jenis_kas !='B0002' AND jenis_kas !='B0003' AND jenis_kas !='B0004' AND jenis_kas !='B0004' AND jenis_kas !='B0006' AND jenis_kas !='B0007' AND jenis_kas !='B0008' AND jenis_kas !='B0009' AND jenis_kas !='B0010' AND jenis_kas !='B0011'");

$data = mysqli_query($database,"SELECT bank_hutang.jenis_transaksi, bank_hutang.id_penghutang, bank_hutang.nominal1 AS nominal_terkirim, bank_hutang.nominal AS nominal_diterima, bank_hutang.date_updated FROM bank_hutang WHERE jenis_transaksi !=0");





   while($d = mysqli_fetch_array($data)){
      ?>


            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['jenis_transaksi']; ?></td> 
               <td><?php echo $d['id_penghutang']; ?></td>
               <td><?php echo @rupiah(-$d['nominal_terkirim']); ?></td>
               <td><?php echo @rupiah($d['nominal_terkirim']); ?></td>
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
<?php
      function rupiah($angka){
      $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
      return $hasil_rupiah;
}?>

<script>
    window.print();
  </script>

    </table>


<!-- <p>
    <a href="halamans/report_mutasi/cetak_report_mutasi_kas_ke_hutang.php" class="btn btn-success btn-lg">
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