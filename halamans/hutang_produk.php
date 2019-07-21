<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

if(isset($_POST['simpan'])){
  $id_produk = 0;
  $id_penghutang = $_POST['id_penghutang'];
  $jenis_kas = 4;
  $nama_produk=$_POST['nama_produk'];
  $satuan_produk=$_POST['satuan_produk'];
    $nominal=$_POST['nominal'];
    $keterangan=$_POST['keterangan'];
     
    

$sql3= "INSERT INTO bank_hutang_produk VALUES('', NULL, '$id_penghutang', '$jenis_kas', '$nama_produk', '$satuan_produk','$nominal', '$keterangan','$now')";



     //  if ($database->query($sql))
     //    {
     // if ($database->query($sql2))
     //    {
      $database->query($sql3);
        
        //   if ($database->query($sql4))
        // {
       //   else ($database->query($sql2))
       // {



        echo "<script>";
        echo " alert('Berhasil!! HORE!!');      
                window.location.href='/program_kasir/?home';
            </script>";
    

}?>
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
           <!-- <?php
//include 'halamans\pilih_menu_deposit_mm.php'
?>  -->
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
$query2=mysqli_query($database,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['id_penghutang']."'";
   
    echo ">".$r2['id_penghutang']."</option>";
}
?></select>

                          </div>
                        </div>
                      </div>                                          
                        </div>
                    <div id="nama_produk">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Produk</label>
                          <div class="col-sm-9">
                            <select required aria-requiered="true" class="form-control" name="nama_produk" id="nama_produk" style="font-size:20px;">
                               <?php
$sql2="SELECT * FROM produk";
$query2=mysqli_query($database,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['nama_produk']."'";
   
    echo ">".$r2['nama_produk']."</option>";
}
?></select>

                          </div>
                        </div>
                      </div>                                          
                        </div>
                        <div id="satuan_produk">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Satuan Produk</label>
                          <div class="col-sm-9">
                            <select required aria-requiered="true" class="form-control" name="satuan_produk" id="satuan_produk" style="font-size:20px;">
                               <?php
$sql2="SELECT * FROM produk";
$query2=mysqli_query($database,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['satuan_produk']."'";
   
    echo ">".$r2['satuan_produk']."</option>";
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
                            <input type="text" name="nominal" class="form-control" id="nominal" placeholder="Masukkan Jumlah Barang"  required="required" style="font-size:20px;">
                  </div>
                          </div>
                        </div>
               </div>

                <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Keterangan</label>
                          <div class="col-sm-9">

                            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Keterangan"  required="required">
                  </div>
                          </div>
                        </div>
               </div>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--  -->

                  <button type="submit" name="simpan" class="btn btn-success mr-2">Simpan</a></button>
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