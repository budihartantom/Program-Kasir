<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

if(isset($_POST['simpan'])){
    $jenis_transaksi = $_POST['jenis_transaksi'];
    $jenis_kas = $_POST['jenis_kas'];
    $rekening = $_POST['rekening'];
     $rp=$_POST['nominal'];
     $inquiri= "deposit";
     $in= "deposit";
     $nama_game ="game_mm";
      $sal2= str_replace("Rp.","",$rp);
    $nominal = str_replace(".","",$sal2);


  $sql= "INSERT INTO game_mm VALUES('','$jenis_transaksi', '$jenis_kas','$rekening','$nominal','$inquiri', '$now')";
  $sql2= "INSERT INTO kas_kecil VALUES('','$jenis_transaksi', '$jenis_kas','$rekening','$nominal','$inquiri', '$now')";

      if ($database->query($sql))
        {
          if ($database->query($sql))
        {

       //   else ($database->query($sql2))
       // {
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
              </br></br></br></br></br></br>
                    <div class="row">
                      <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">     
                      <div class="col-md-6">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Transaksi</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="kas" id="select" onclick="myfun()">
                 <option value="kas">Kas</option>
                <option value="transfer">Transfer</option>
                <option value="hutang">Hutang</option>
              </select>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="kas">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kas</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="nama-kas"> 
                  
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

<div id="transfer">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kas</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="nama-transfer" onclick="myfun2()" id="select2"> 
                   
                          <option value="">Pilih Jenis Pengeluaran</option>
                           <option value="transfer">Transfer</option>
                           <option value="transfer">Hutang</option>
                           

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



                    <div id="rekening">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Rekening</label>
                          <div class="col-sm-9">
                            <select required aria-requiered="true" class="form-control" name="rekening" id="rekening">
                              <option value="">- Pilih BANK -</option>
                 <?php
$sql2="SELECT * FROM bank b join bank_account a where a.id_bank=b.id";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['id']."'";
   
    echo ">".$r2['account_name']." - ".$r2['account_number']." - ".$r2['nama_bank']."</option>";
}
?></select>
                            </select>
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
                            <input type="text" name="nominal" class="form-control" id="rupiah" placeholder="Masukkan Nominal"  required="required">
                  </div>
                          </div>
                        </div>
               </div>
                  <button type="submit" name="simpan" class="btn btn-success mr-2" >Simpan</button>
                        <button type="reset" class="btn btn-light">Reset</button>
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