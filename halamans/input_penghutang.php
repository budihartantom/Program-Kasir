<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

if(isset($_POST['simpan'])){
    $id_penghutang = $_POST['id_penghutang'];
    $jenis_kas = 0;
    $rekening = 0;
    $nominal = 0;
     $rp=0;
     $inquiri= 0;
     $nama_game ="game_dingdong";
      $sal2= str_replace("Rp.","",$rp);
    $nominal = str_replace(".","",$sal2);
  


$cek = mysqli_num_rows(mysqli_query($database,"SELECT * FROM penghutang WHERE id_penghutang='$id_penghutang'"));
    if ($cek > 0){
    echo "<script>window.alert('nama yang anda masukan sudah ada')
    window.location='index.php'</script>";
    }else {
    mysqli_query($database,"INSERT INTO penghutang(id, id_penghutang, jenis_kas, nominal, inquiri, date_updated)
    VALUES ('','$id_penghutang',NULL,NULL,NULL,'$now')");

    $cek1 = mysqli_num_rows(mysqli_query($database,"SELECT * FROM bank_hutang WHERE id_penghutang='$id_penghutang'"));
    if ($cek1 > 0){
    echo "<script>window.alert('nama yang anda masukan sudah ada')
    window.location='index.php'</script>";
    }else {
    mysqli_query($database,"INSERT INTO bank_hutang(id, id_penghutang, nominal, nominal1, saldo, inquiri, date_updated)
    VALUES ('','$id_penghutang',NULL,NULL,NULL,NULL,'$now')");
 
  $cek2 = mysqli_num_rows(mysqli_query($database,"SELECT * FROM transaksi_bank_hutang_depo WHERE id_penghutang='$id_penghutang'"));
    if ($cek2 > 0){
    echo "<script>window.alert('nama yang anda masukan sudah ada')
    window.location='index.php'</script>";
    }else {
    mysqli_query($database,"INSERT INTO transaksi_bank_hutang_depo(id, id_penghutang, jenis_kas, nominal, inquiri, date_updated)
    VALUES ('','$id_penghutang',NULL,NULL,NULL,'$now')");

    $cek3 = mysqli_num_rows(mysqli_query($database,"SELECT * FROM transaksi_bank_hutang_with WHERE id_penghutang='$id_penghutang'"));
    if ($cek3 > 0){
    echo "<script>window.alert('nama yang anda masukan sudah ada')
    window.location='index.php'</script>";
    }else {
    mysqli_query($database,"INSERT INTO transaksi_bank_hutang_with(id, id_penghutang, jenis_kas, nominal, inquiri, date_updated)
    VALUES ('','$id_penghutang',NULL,NULL,NULL,'$now')");
    
    

  // $sql= "INSERT INTO penghutang VALUES('','$id_penghutang', NULL , NULL , NULL , '$now')";



  // $sql1= "INSERT INTO transaksi_bank_hutang_depo VALUES('','$id_penghutang', NULL , NULL , NULL , '$now')";

  // $sql2= "INSERT INTO transaksi_bank_hutang_with VALUES('','$id_penghutang', NULL , NULL , NULL , '$now')";

  // $sql3= "INSERT INTO bank_hutang VALUES('','$id_penghutang', NULL, NULL , NULL , '$now')";



      // if ($database->query($sql))
      //   {
// if ($database->query($sql1))
//         {
//           if ($database->query($sql2))
//         {
//          if ($database->query($sql3))
//        {
echo "<script>";
echo " alert('Berhasil, Data Berhasil Di Simpan');      
       window.location.href='';
   </script>";


}}}}}?>


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
                    <div class="row">
                      <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">     
                      <div class="col-md-6">
                      </div>
                    </div>
                    <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9">
                            <input type="text" name="id_penghutang" class="form-control" id="id_penghutang" placeholder="Nama Anda"  required="required">
                  </div>
                          </div>
                        </div>
               </div>


               
<!--<form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nominal</label>
                          <div class="col-sm-9">
                            <input type="text" name="nominal" class="form-control" id="rupiah" placeholder="Masukkan Nominal"  required="required">
                  </div>
                          </div>
                        </div>
               </div>-->

                  <button type="submit" name="simpan" class="btn btn-success mr-2" >Simpan</button>
                        <button type="reset" class="btn btn-light">Reset</button>
      </form>

      </table>

<div class="container">
    <table id="example" class="display" style="width:20%">
       <thead style="background-color:#122631;color:#c7fcff;">
      

           <tr>
                <!-- <th>Nomor Id</th> -->
                <th>Nama Penghutang</th>
                <!--<th>No.Rekening</th>-->
                <!-- <th>Tanggal Berhutang</th> -->
                <!--<th>Waktu Transaksi</th>
                <th>Detail Transaksi</th>-->
            </tr>
        </thead>
        <tbody>
<?php

  $sqlTampil= "SELECT * from penghutang";
  $tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
    // jika data benar
    while($row = $tampil->fetch_assoc()){ ?>


            <tr>
                <!-- <td><?php //echo $row['id_penghutang']; ?></td> -->
                <td><?php echo $row['id_penghutang']; ?></td>
                <!--<td><?php //echo $row['jenis_transaksi']; ?></td>
                <td><?php //echo $row['jenis_kas']; ?></td>
                <td><?php //echo $row['rekening']; ?></td>-->
              <!--   <td><?php //echo $row2['nama_bank']; ?></td> -->
                <!--<td><?php ///echo $row['rekening']; ?></td>-->
                <!-- <td><?php // echo $row['create_date']; ?></td> -->
                <!--<td><?php //echo $row['create_date']; ?></td>
                <td><a href="">Detail Transaksi</a></td>-->
            </tr>
            
            <?php   }?>
<?php } else {
    // jika data salah
    echo "data kosong";
  } ?>





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