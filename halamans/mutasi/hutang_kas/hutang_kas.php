<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }
if(isset($_POST['simpan'])){
  $id_penghutang = $_POST['id_penghutang'];
    $jenis_kas = $_POST['jenis_kas'];
     $nominal = $_POST['nominal'];
     $rp=$_POST['nominal'];
     $inquiri= "withdraw";
     // $in= "mutasi";
     // $nama_game ="game_mm";
      $sal2= str_replace("Rp.","",$rp);
    $nominal = str_replace(".","",$sal2);
    $hasil+=$nominal;
   

    // $sql= "INSERT INTO mutasi VALUES('',  '$id_penghutang', '$jenis_kas','$jenis_kas1', '$jenis_kas2','$rekening','$nominal','$inquiri', '$now')";

  if($_POST['jenis_kas'] == 1){
  $sql1= "INSERT INTO  bank_hutang VALUES('','$id_penghutang','$jenis_kas','$nominal',NULL,'$hasil','$inquiri','$now')";

 $sql2= "INSERT INTO kas_kecil VALUES('','$jenis_kas','$id_penghutang','$jenis_transaksi','$nominal','$inquiri', '$now')";
  

$database->query($sql1);

$database->query($sql2);

}else{
   


 $sql3= "INSERT INTO  bank_hutang VALUES('','$id_penghutang','$jenis_kas','$nominal',NULL,'$hasil','$inquiri','$now')";

$sql4= "INSERT INTO kas_besar VALUES('','$jenis_kas','$id_penghutang','$jenis_transaksi','$nominal','$inquiri', '$now')";



   $database->query($sql3);

   $database->query($sql4);




}

echo "<script>";
echo " alert('Berhasil,Silahkan transfer');      
        window.location.href='';
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
            <?php
include 'halamans\pilih_menu_transfer.php'
?>
<br>
<h4>KAS KE HUTANG</h4>
                    <div class="row">
                      <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
                      <div class="col-md-6">
                        <!--<div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Pemain</label>
                          <div class="col-sm-9">
                            <input type="text" name="pemain" class="form-control" id="pemain" placeholder="Masukkan Nama Pemain"  required="required">
                          </div>
                        </div>-->
                      </div>
                    </div>
                    <!--<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kas</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="id_game">
                 <option value="in">Kas Kecil</option>
                <option value="in">Kas Besar</option>
                <option value="in">Transfer</option>
                <option value="out">Hutang</option>
              </select>
                </select>
                          </div>
                        </div>
                      </div>
                    </div>-->
              <div id="id_penghutang">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Dari </label>
                          <div class="col-sm-9">
                            <select required aria-requiered="true" class="form-control" name="id_penghutang" id="id_penghutang">
                                <option value="">- Pilih Penghutang -</option>
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



                   <div id="jenis_kas">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ke</label>
                          <div class="col-sm-9">
                       <select required aria-requiered="true" class="form-control" name="jenis_kas"id="jenis_kas"> 
                           <!--    <option value="">- Pilih KAS -</option> -->
                  
                  
                <?php
$sql2="SELECT * FROM jenis_kas  where tipe='1' or tipe='2'";
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
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="submit" name="simpan" class="btn btn-warning btn-fw" >Transfer</button>
                        <!-- <button type="reset" class="btn btn-light">Reset</button> -->
                    <!--<p class="card-description">
                      Address
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 2</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>-->
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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