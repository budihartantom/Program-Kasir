<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

if(isset($_POST['simpan'])){
    $jenis_pemasukan = $_POST['jenis_pemasukan'];
    $jenis_kas = 5;
    $jenis_game = $_POST['jenis_game'];
    $rekening = 0;
    $nominal = $_POST['nominal'];
     $rp=$_POST['nominal'];
      $keterangan=$_POST['keterangan'];
     $inquiri='deposit';
      $sal2= str_replace("Rp.","",$rp);
    $nominal = str_replace(".","",$sal2);



   if($_POST['jenis_game']==1){

   $sql2= "INSERT INTO pemasukan_game_mm VALUES('', '$jenis_pemasukan','$jenis_kas','$jenis_game','$nominal','$rekening','$keterangan','$inquiri', '$now')";
   // $sql3= "INSERT INTO game_mm VALUES('', '$jenis_pemasukan','$jenis_kas','$rekening','$nominal','$inquiri', '$now')";


   $database->query($sql2);
   // $database->query($sql3);

   }elseif($_POST['jenis_game']==2){

   $sql4= "INSERT INTO pemasukan_game_bk VALUES('', '$jenis_pemasukan','$jenis_kas','$jenis_game','$nominal','$rekening','$keterangan','$inquiri', '$now')";
   // $sql5= "INSERT INTO game_bk VALUES('', '$jenis_pemasukan','$jenis_kas','$rekening','$nominal','$inquiri', '$now')";

  $database->query($sql4);
   // $database->query($sql5);

   }elseif($_POST['jenis_game']==3){

   $sql6= "INSERT INTO pemasukan_game_slot VALUES('', '$jenis_pemasukan','$jenis_kas','$jenis_game','$nominal','$rekening','$keterangan','$inquiri', '$now')";
   // $sql7= "INSERT INTO game_slot VALUES('', '$jenis_pemasukan','$jenis_kas','$rekening','$nominal','$inquiri', '$now')";


   $database->query($sql6);
   // $database->query($sql7);

   }else{

   $sql8= "INSERT INTO pemasukan_game_dingdong VALUES('', '$jenis_pemasukan','$jenis_kas','$jenis_game','$nominal','$rekening','$keterangan','$inquiri', '$now')";
   // $sql9= "INSERT INTO game_dingdong VALUES('', '$jenis_pemasukan','$jenis_kas','$rekening','$nominal','$inquiri', '$now')";

   $database->query($sql8);
   // $database->query($sql9);
   }
  // $sql = $koneksi->query("SELECT * FROM bank_history join bank_account WHERE bank_account.id_bank='$_GET[key]'");
  // $row = $sql->fetch_assoc();
        // {
        //    if ($database->query($sql2))
        // {
        //   if ($database->query($sql3))
        // {
        //   if ($database->query($sql4))
        // {
        //   if ($database->query($sql5))
        // {
        //   if ($database->query($sql6))
        // {
        //   if ($database->query($sql7))
        // {
        //   if ($database->query($sql8))
        // {
    // $s1 = str_replace("Rp.","","$nominal");
    // $saldo = str_replace(".","","$s1");

    // $sqla="UPDATE bank_account set id_bank='$bank', 
    // account_name='$atas_nama',
    // account_number='$rekening',
    // saldo='$saldo' where id='$id'";


 
  // $sql2= "INSERT INTO bank_accountest VALUES('','$bank', '$nominal', '$now')";

    // $sql2="INSERT INTO bank_account set 
    // bank='bank',
   
    // nominal='$nominal',
    
    // now='$now'";
  
  //$data = $database->query($sql);
  
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
            </br></br></br></br></br></br></br>
            <h4>kredit balance deposit game</h4>
                    <div class="row">
                      <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">   
                     <!-- <form class="form-detail" action="?m=tambah_tr_bank&s=save" method="post" id="myform">   --> 
                      <div class="col-md-6">
                      </div>
                    </div>
                    <!--<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Transaksi</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="tipe" id="select">
                 <option value="">--Pilih--</option>
                <option value="in">Pemasukan</option>
              </select>
                          </div>
                        </div>
                      </div>
                    </div>-->

                    <div id="jenis_pemasukan">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Pemasukan</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="jenis_pemasukan">
                 <!-- <option value="">--Pilih Jenis Pemasukan--</option> -->
                             <?php
$sql2="SELECT * FROM kategori_tr_bank where id='1' or id='3'";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['id']."'";
   
    echo ">".$r2['nama']."</option>";
}
?></select>
                          </div>
                        </div>
                      </div>
                    </div>


                   <!-- <div id="pengeluaran">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Pengeluaran</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="nama-pengeluaran" onclick="myfun2()" id="select2">
                 <option value="">Pilih Jenis Pengeluaran</option>
                  <option value="transfer">Transfer</option>
                             <?php
//$sql2="SELECT * FROM kategori_tr_bank where tipe='1' ";
//$query2=mysqli_query($koneksi,$sql2);
//while($r2=mysqli_fetch_assoc($query2)){
 //   echo "<option value='".$r2['id']."'";
   
 //   echo ">".$r2['nama']."</option>";

?></select>
                           
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

                   

                    <div id="jenis_game">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Game</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="jenis_game"> 
                  
                <?php
$sql2="SELECT * FROM jenis_game";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['tipe']."'";
   
    echo ">".$r2['jenis_game']."</option>";
}
?>
              </select>
                          </div>
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
                  <button type="submit" name="simpan" class="btn btn-success mr-2" >Pemasukan</button>
                        <!-- <button type="reset" class="btn btn-light">Reset</button> -->
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
    <!-- <script type="text/javascript">
 
    function myfun(){
    $(document).ready(function(){
      
        $("#select").click(
        function(){
        var data=$("#select").val();
 if($('#select').val() == 'in'){
$("#bank-penerima").hide();
$("#keterangan").show();
$("#pemasukan").show();
$("#pengeluaran").hide();
 
               }else{
               $("#keterangan").show();
               $("#pemasukan").hide();
                 $("#bank-penerima").hide();
                 $("#pengeluaran").show();
               
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
$("#bank-penerima").show();
 }else{
$("#bank-penerima").hide();
 } });
    });
    }
</script>-->
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