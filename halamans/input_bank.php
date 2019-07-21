<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

if(isset($_POST['simpan'])){
  
    $bank = $_POST['bank'];
    $rekening = $_POST['rekening'];
    $jenis_transaksi = 0;
    $jenis_kas = 3;
    $account_name = $_POST['account_name'];
    $account_number = $_POST['account_number'];
   
 
  $sql= "INSERT INTO bank_account VALUES('','$bank','$rekening', NULL, NULL, '$account_name', '$account_number', '$now')";


  $cek = mysqli_num_rows(mysqli_query($database,"SELECT * FROM bank_account WHERE account_name='$account_name' OR account_number='$account_number'"));
    if ($cek > 0){
    echo "<script>window.alert('nama akun dan nomor rekening yang anda masukan sudah ada')
    window.location='index.php'</script>";
    }else {
    mysqli_query($database,"INSERT INTO bank_account(id, bank, rekening, jenis_transaksi, jenis_kas, account_name, account_number, date_updated)
    VALUES ('','$bank','$rekening', NULL, NULL, '$account_name', '$account_number', '$now')");

  //   $cek1 = mysqli_num_rows(mysqli_query($database,"SELECT * FROM bank_hutang WHERE id_penghutang='$id_penghutang'"));
  //   if ($cek1 > 0){
  //   echo "<script>window.alert('nama yang anda masukan sudah ada')
  //   window.location='index.php'</script>";
  //   }else {
  //   mysqli_query($database,"INSERT INTO bank_hutang(id, id_penghutang, jenis_kas, nominal, inquiri, date_updated)
  //   VALUES ('','$id_penghutang',NULL,NULL,NULL,'$now')");
 
  // $cek2 = mysqli_num_rows(mysqli_query($database,"SELECT * FROM transaksi_bank_hutang_depo WHERE id_penghutang='$id_penghutang'"));
  //   if ($cek2 > 0){
  //   echo "<script>window.alert('nama yang anda masukan sudah ada')
  //   window.location='index.php'</script>";
  //   }else {
  //   mysqli_query($database,"INSERT INTO transaksi_bank_hutang_depo(id, id_penghutang, jenis_kas, nominal, inquiri, date_updated)
  //   VALUES ('','$id_penghutang',NULL,NULL,NULL,'$now')");

  //   $cek3 = mysqli_num_rows(mysqli_query($database,"SELECT * FROM transaksi_bank_hutang_with WHERE id_penghutang='$id_penghutang'"));
  //   if ($cek3 > 0){
  //   echo "<script>window.alert('nama yang anda masukan sudah ada')
  //   window.location='index.php'</script>";
  //   }else {
  //   mysqli_query($database,"INSERT INTO transaksi_bank_hutang_with(id, id_penghutang, jenis_kas, nominal, inquiri, date_updated)
  //   VALUES ('','$id_penghutang',NULL,NULL,NULL,'$now')");

    // $sql2 = "SELECT max(id) FROM bank_account";
  // $query = mysqli_query($database,$sql2) or die (mysqli_error($database));
 
  // $kode_faktur = mysqli_fetch_array($query);
 
  // if($kode_faktur){
  //   $nilai = substr($kode_faktur[0], 1);
  //   $kode = (int) $nilai;
 
  //   //tambahkan sebanyak + 1
  //   $kode = $kode + 1;
  //   $auto_kode = "B" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
  // } else {
  //   $auto_kode = "B0001";
  // }
    
    

      if ($database->query($sql))
        {
        //   if ($database->query($sql2))
        // {

       //   else ($database->query($sql2))
       // {
echo "<script>";
echo " alert('Berhasil,Silahkan transfer');      
        window.location.href='';
    </script>";


  }}}?>
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
                          <label class="col-sm-3 col-form-label">BANK</label>
                          <div class="col-sm-9">
                             <select required aria-requiered="true" class="form-control" name="bank"> 
                              <option value="">- Pilih BANK -</option>
          
 <?php
              
$sql2="SELECT * FROM bank ";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "
                          <option value='".$r2['id']."'";
    echo $r2['id']==@$row['id']?"selected":"";
    echo ">".$r2['nama_bank']."</option>";
}
?>            </select>
                          </div>
                        </div>
                      </div>
                    </div>
<?php
                     $sql2 = "SELECT max(rekening) FROM bank_account";
  $query = mysqli_query($database,$sql2) or die (mysqli_error($database));
 
  $datakode = mysqli_fetch_array($query);
 
  if($datakode){
    $nilai = substr($datakode[0], 1);
    $kode = (int) $nilai;
 
    //tambahkan sebanyak + 1
    $kode = $kode + 1;
    $kode_otomatis = "B" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
  } else {
    $kode_otomatis = "B0001";
  }
    
   ?> 
                    
                     <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Atas Nama</label>
                          <div class="col-sm-9">
                            <input type="hidden" name="rekening" value="<?php echo $kode_otomatis;?>" readonly="readonly">
                            <input type="text" name="account_name" class="form-control" id="account_name" placeholder="Masukkan Akun Bank Anda"  required="required">
                  </div>
                          </div>
                        </div>
               </div>

               <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nomor Rekening</label>
                          <div class="col-sm-9">
                            <input type="text" name="account_number" class="form-control" id="account_number" placeholder="Masukkan Nomor Rekening Anda"  required="required">
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
 if($('#select').val() == 'in'){
$("#bank-penerima").hide();
$("#keterangan").show();
$("#kas").show();
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