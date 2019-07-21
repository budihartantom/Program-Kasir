<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

if(isset($_POST['simpan'])){
  $jenis_transaksi = 0;
  $id_penghutang = $_POST['id_penghutang'];
  $jenis_kas = 4;
    $rekening = 0;
    $nominal=$_POST['nominal'];
     $rp=$_POST['nominal'];
     $inquiri= "deposit";
     $in= "deposit";
     $nama_game ="game_mm";
      $sal2= str_replace("Rp.","",$rp);
    $nominal = str_replace(".","",$sal2);
    $hasil+=$nominal;


//     $data = mysqli_query($database, "SELECT nominal,
//                       sum(nominal) as nominal
//                       FROM bank_hutang INNER JOIN transaksi_bank_hutang_depo ON bank_hutang.id_penghutang = transaksi_bank_hutang_depo.id_penghutang WHERE id_penghutang = $id_penghutang");
 
//     /* determine number of rows result set */
//   $row = mysqli_fetch_array ($data);
//    $total_saldo = $row['nominal'] + $nominal;

//     //$sql1 = "INSERT INTO deposit SET
//         //        id_pemain = '$id_pemain',
//           //      email = '$email',
//             //    tambah_deposit = '$tambah_deposit',
//               //  total_saldo = '$total_saldo',
//                 //tanggal = '$tanggal'
//                // ";
// // $query = mysqli_query($koneksi, $sql1) or die (mysqli_error($koneksi));

//  $sql2 = "INSERT INTO pemain SET
//                 id_pemain = '$id_pemain',
//                 email = '$email',
//                 tambah_deposit = '$tambah_deposit',
//                 total_saldo = '$total_saldo',
//                 tanggal = '$tanggal
//                 '";    
 
// $sql4= "INSERT INTO penghutang VALUES('','$id_penghutang',NULL,'$nominal','$hasil','$inquiri','$now')";

  $sql= "INSERT INTO game_mm VALUES('','$jenis_transaksi', '$jenis_kas','$rekening','$nominal','$inquiri', '$now')";



// $data = mysqli_query($database, "SELECT nominal,
//                       sum(nominal) as nominal
//                       FROM bank_hutang INNER JOIN transaksi_bank_hutang_depo ON bank_hutang.id_penghutang = transaksi_bank_hutang_depo.id_penghutang WHERE inquiri='deposit' AND id_penghutang = $id_penghutang");
 
//     /* determine number of rows result set */
//   $row = mysqli_fetch_array ($data);
//    $nominal = $row['nominal'] + $nominal;



 // $sql2 = "INSERT INTO penghutang SET
 //                   id_penghutang = '$id_penghutang',
 //                   jenis_kas = '$jenis_kas',
 //                   nominal = '$nominal',
 //                   inquiri = '$inquiri',
 //                   now = '$now
 //                   '";    

  $sql2= "INSERT INTO bank_hutang VALUES('','$id_penghutang',NULL,'$nominal','$hasil','$inquiri','$now')";



// $sql= "SELECT id, id_penghutang, jenis_kas, nominal_depo, saldo, inquiri, date_updated, SUM(nominal_depo) AS nominal_deposit from transaksi_bank_hutang_depo WHERE id_penghutang='ALAM'";

// $tampil = $database->query($sql);
// $row = $tampil->fetch_assoc();

 // if($_POST['id_penghutang'] == 'ALAM'){

                   //  $sql3 = "INSERT INTO transaksi_bank_hutang_depo SET
                   // id_penghutang = '$id_penghutang',
                   // jenis_kas = '$jenis_kas',
                   // nominal = '$nominal',
                   // inquiri = '$inquiri',
                   // now = '$now
                   // '";    

$sql3= "INSERT INTO transaksi_bank_hutang_depo VALUES('','$id_penghutang', '$jenis_kas','$nominal', '$inquiri', '$now')";



      if ($database->query($sql))
        {
     if ($database->query($sql2))
        {
      if ($database->query($sql3))
        {
        //   if ($database->query($sql4))
        // {
       //   else ($database->query($sql2))
       // {



        echo "<script>";
        echo " alert('Berhasil!! HORE!!');      
                window.location.href='/program_kasir/detail_histori_penghutang.php';
            </script>";
    

}}}}?>
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
</head>

<body>

          <table>
            <div class="col-12 grid-margin">
            <?php
include 'halamans\pilih_menu_deposit_mm.php'
?>
<p id="hasil"></p>

                    <div class="row">
                      <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">     
                      <div class="col-md-6">
                      </div>
                    </div>
                    <div id="id_penghutang">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Penghutang </label>
                          <div class="col-sm-9">
                            <select required aria-requiered="true" class="form-control" name="id_penghutang" id="id_penghutang" style="font-size:20px;">
                               <?php
$sql2="SELECT * FROM penghutang";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['id_penghutang']."'";
   
    echo ">".$r2['id_penghutang']."</option>";
}
?></select>

                          </div>
                        </div>
                      </div>                                          
                        </div>
                    <!--<div id="pemasukan">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Transaksi</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option value="">--Pilih Jenis Transaksi--</option>
                             <?php
//$sql2="SELECT * FROM bank_account";
//$query2=mysqli_query($koneksi,$sql2);
//while($r2=mysqli_fetch_assoc($query2)){
//    echo "<option value='".$r2['id']."'";
   
  //  echo ">".$r2['nama']."</option>";

?></select>
                            </select>
                          </div>
                        </div>
                      </div>                                          
                        </div>-->
                        
                
                  <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nominal</label>
                          <div class="col-sm-9">
                            <input type="text" name="nominal" class="form-control" id="rupiah" placeholder="Masukkan Nominal"  required="required" style="font-size:20px;">
                  </div>
                          </div>
                        </div>
               </div>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- <?php
//$id=1;
 // $id_penghutang = $_GET['id_penghutang'];
// $data = mysqli_query($database,"SELECT * FROM bank_hutang");
 //   $d = mysqli_fetch_array($data);
      ?> -->

      <button type="submit" name="simpan"  onclick="return confirm('Apa Anda Ingin Mencetaknya?');" class="btn btn-success mr-2">Deposit</a></button>

                  <!-- <button type="submit" name="simpan" class="btn btn-success mr-2"  onclick="return confirm('Apakah Anda Ingin Mencetaknya?')? window.open('http://192.168.1.10/program_kasir/detail_histori_penghutang.php?id_penghutang=<?php //echo $d['id_penghutang']; ?>'): void(0);">Deposit</a></button> -->
                        <!-- <button type="reset" class="btn btn-light">Reset</button> -->
      </form>
    <?php  ?>
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
  <script type="text/javascript">
 
    function myfun(){
    $(document).ready(function(){
      
        $("#select").click(
        function(){
        var data=$("#select").val();
 if($('#select').val() == 'kas'){
$("#rekening").hide();
$("#nominal").show();

               }else{
               $("#rekening").show();
               $("jenis_kas").hide();
                 $("#nominal").show();
               
               }
                            });
    });

     }
      function myfun2(){
    $(document).ready(function(){
      $("#select2").click(
        function(){
        var data=$("#select2").val();
 if($('#select2').val() == 'transfer'){
$("#rekening").show();
 }else{
$("#kas").hide();
 } });
    });
    }
    </script>
<!--     <script>
      function konfirmasiDulu(){
        var konfirmasi = confirm("Silakan Klik Tombol Salah Satu Tombol");
        var text = "";
        
        if(konfirmasi === true) {
          window.location.href="/program_kasir/?home";
        }else{
          window.location.href = "Kamu klik Tombol Cancel";
        }
        
        document.getElementById("hasil").innerHTML = text;
      }
    </script> -->
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