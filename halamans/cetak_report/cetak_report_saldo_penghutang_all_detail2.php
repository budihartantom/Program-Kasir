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
        <thead>
          <center><h1>LAPORAN DAFTAR TRANSAKSI PENGHUTANG</h1></center>
             <tr>
                <th>Nama Penghutang</th>
                <th>Total Deposit</th>
                <th>Total Withdraw</th>
                <th>Total Saldo</th>
               <!--  <th>Saldo</th> -->
                <th>Tanggal Transaksi</th>
                </tr>                       
        </thead>
        <tbody>
        
          
   <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}


$id_penghutang='id_penghutang'; 
$data = mysqli_query($database,"SELECT * FROM bank_hutang GROUP BY id_penghutang DESC");
   while($d = mysqli_fetch_array($data)){
      ?>


      <!--  -->
<!-- $sql1="SELECT id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_depo INNER  JOIN transaksi_bank_hutang_with  ON transaksi_bank_hutang_depo.id_penghutang=transaksi_bank_hutang_with.id_penghutang  ";
$query1=mysqli_query($database,$sql1);
$row1=mysqli_fetch_array($query1);{


?> -->
 

            <tr>
               <td><?php echo $d['id_penghutang']; ?></td>
        <!--        <td><?php//s echo @rupiah($d['nominal']); ?></td> -->
               <td><?php echo @rupiah($d['nominal']); ?></td>
            <td><?php echo $d['inquiri']; ?></td> 
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
        <!-- <footer class="footer"> -->
          
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <!-- <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script> -->
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>