<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

if(isset($_POST['simpan'])){
    $jenis_transaksi = $_POST['jenis_transaksi'];
    $jenis_kas = $_POST['jenis_kas'];
    $nominal = $_POST['nominal'];
     $rp=$_POST['nominal'];
     $inquiri= "mutasi";
      $sal2= str_replace("Rp.","",$rp);
    $nominal = str_replace(".","",$sal2);

  $sql= "INSERT INTO kas_besar VALUES('','$jenis_transaksi', '$jenis_kas', '$nominal', '$inquiri', '$now')";
  //$data = $database->query($sql);
   if ($database->query($sql))
        {
echo "<script>";
echo " alert('Berhasil,Silahkan transfer');      
        window.location.href='';
    </script>";


}}?>
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
include 'halamans\pilih_menu_transfer.php'
?>
<br>
<h4>KAS KE KAS</h4>
                    <div class="row">
                      <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
                      <div class="col-md-6">
                      </div>
                    </div>
               
                  <div id="jenis_transaksi">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Dari</label>
                          <div class="col-sm-9">
                           <select required aria-requiered="true" class="form-control" name="jenis_transaksi"> 
                             <!--  <option value="">- Pilih KAS -</option> -->
                  
                  
                <?php
$sql2="SELECT * FROM jenis_kas  where tipe='1'";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['tipe']."'";
   
    echo ">".$r2['jenis_transaksi']."</option>";
}
?>
              </select>
  
                          </div>
                        </div>
                      </div>                                          
                        </div>               
             
               <div id="jenis_kas">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ke</label>
                          <div class="col-sm-9">
                       <select required aria-requiered="true" class="form-control" name="jenis_kas"> 
                           <!--    <option value="">- Pilih KAS -</option> -->
                  
                  
                <?php
$sql2="SELECT * FROM jenis_kas  where tipe='2'";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['tipe']."'";
   
    echo ">".$r2['jenis_transaksi']."</option>";
}
?>
              </select>
                          </div>
                        </div>
                      </div>                                          
                        </div>
                    <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nominal</label>
                          <div class="col-sm-9">
                            <input type="text" name="nominal" class="form-control" id="rupiah" placeholder="Masukkan Nominal"  required="required">
                  </div>
                          </div>
                        </div>
               </div>
                  <button type="submit" name="simpan" class="btn btn-warning btn-fw" >Simpan</button>
                     
      </form>
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
</form>
</body>

</html>