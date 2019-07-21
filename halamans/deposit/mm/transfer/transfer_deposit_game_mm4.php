<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

if(isset($_POST['simpan'])){
    $jenis_transaksi = 0;
    $jenis_kas = 3;
    $rekening = $_POST['rekening'];
     $rp=$_POST['nominal'];
     $inquiri= "deposit";
     $in= "deposit";
     $nama_game ="game_mm";
      $sal2= str_replace("Rp.","",$rp);
    $nominal = str_replace(".","",$sal2);




    // $data = mysqli_query($koneksi, "SELECT tambah_deposit,
    //                   nominal_deposit,
    //                   klaim_withdraw,
    //                   sum(tambah_deposit) as tambah_deposit,
    //                   sum(nominal_deposit) as nominal_deposit,
    //                   sum(klaim_withdraw) as klaim_withdraw
    //                   FROM deposit INNER JOIN pemain ON deposit.id_pemain = pemain.id_pemain WHERE id_pemain = $id_pemain");

// $sqlTampil= "SELECT id, bank, account_name, saldo, date_updated, SUM(saldo) AS saldo from bank_account WHERE bank='B0001' AND account_name='Arifin'";
// $tampil = $database->query($sqlTampil);
// $row1 = $tampil->fetch_array();

     


 
    /* determine number of rows result set */
  // $row = mysqli_fetch_array ($data);
  //  $total_saldo = $row['tambah_deposit'] + $row['nominal_deposit'] - $row['klaim_withdraw'] + $tambah_deposit;

    //$sql1 = "INSERT INTO deposit SET
        //        id_pemain = '$id_pemain',
          //      email = '$email',
            //    tambah_deposit = '$tambah_deposit',
              //  total_saldo = '$total_saldo',
                //tanggal = '$tanggal'
               // ";
// $query = mysqli_query($koneksi, $sql1) or die (mysqli_error($koneksi));



  $sql= "INSERT INTO game_mm VALUES('','$jenis_transaksi', '$jenis_kas','$rekening','$nominal','$inquiri', '$now')";

  $sql2= "INSERT INTO bank_account VALUES('','$bank', '$jenis_kas','$rekening','$nominal','$inquiri', '$now')";



      if ($database->query($sql))
        {
     if ($database->query($sql2))
        {
       //   else ($database->query($sql2))
       // {
        echo "<script>";
        echo " alert('Berhasil!! HORE!!');      
                window.location.href='/program_kasir/?home';
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
            <?php
include 'halamans\pilih_menu_deposit_mm.php'
?>
                    <div class="row">
                      <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">     
                      <div class="col-md-6">
                      </div>
                    </div>
                    <div id="rekening">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Rekening</label>
                          <div class="col-sm-9">
                            <select required aria-requiered="true" class="form-control" name="rekening" id="rekening" style="font-size:20px;">
                              <option value="">- Pilih BANK -</option>
                 <?php
$sql2="SELECT * FROM bank b join bank_account a where a.id_bank=b.id";
$query2=mysqli_query($koneksi,$sql2);
while($r2=mysqli_fetch_assoc($query2)){
    echo "<option value='".$r2['bank']."'";
   
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
                            <input type="text" name="nominal" class="form-control" id="rupiah" placeholder="Masukkan Nominal"  required="required" style="font-size:20px;">
                  </div>
                          </div>
                        </div>
               </div>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="submit" name="simpan" class="btn btn-success mr-2" >Deposit</button>
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