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
             <tr>
                <!-- <th>Nomor Transaksi</th> -->
                <th>Nama Penghutang</th>
                <!-- <th>Jenis Kas</th> -->
                <th>Total Hutang</th>
                <th>Tanggal Transaksi</th>
                </tr>                       
        </thead>
        <tbody>
        
          
   <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}

$id_penghutang='ALAM';
$sqlTampil0= "SELECT id_penghutang, nama from penghutang where id_penghutang='1' AND nama='ALAM'";
$tampil0 = $database->query($sqlTampil0);
?>
<?php  if ($tampil0->num_rows > 0) {
  // jika data benar
  while($row0 = $tampil0->fetch_assoc()){ ?>

    <?php

$id_penghutang='ALAM';
$sqlTampil1= "SELECT id, id_penghutang, jenis_kas,nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ALAM'";
$tampil1 = $database->query($sqlTampil1);
?>
<?php  if ($tampil1->num_rows > 0) {
  // jika data benar
  while($row1 = $tampil1->fetch_assoc()){ ?>

    <?php

$id_penghutang='ALAM';
$sqlTampil2= "SELECT id, id_penghutang, jenis_kas,nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ALAM'";
$tampil2 = $database->query($sqlTampil2);
?>
<?php  if ($tampil2->num_rows > 0) {
  // jika data benar
  while($row2 = $tampil2->fetch_assoc()){ ?>

<?php

    $id_penghutang='AKUANG KACA';
$sqlTampil01= "SELECT id_penghutang, nama from penghutang where id_penghutang='14' AND nama='AKUANG KACA'";
$tampil01 = $database->query($sqlTampil01);
?>
<?php  if ($tampil01->num_rows > 0) {
  // jika data benar
  while($row01 = $tampil01->fetch_assoc()){ ?>


    <?php


    $id_penghutang='AKUANG KACA';
$sqlTampil3= "SELECT id, id_penghutang, jenis_kas,nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='AKUANG KACA'";
$tampil3 = $database->query($sqlTampil3);
?>
<?php  if ($tampil3->num_rows > 0) {
  // jika data benar
  while($row3 = $tampil3->fetch_assoc()){ ?>

    <?php

$id_penghutang='AKUANG KACA';
$sqlTampil4= "SELECT id, id_penghutang, jenis_kas,nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='AKUANG KACA'";
$tampil4 = $database->query($sqlTampil4);
?>
<?php  if ($tampil4->num_rows > 0) {
  // jika data benar
  while($row4 = $tampil4->fetch_assoc()){ ?>


    <?php

    $id_penghutang='ANG CU';
$sqlTampil02= "SELECT id_penghutang, nama from penghutang where id_penghutang='3' AND nama='ANG CU'";
$tampil02 = $database->query($sqlTampil02);
?>
<?php  if ($tampil02->num_rows > 0) {
  // jika data benar
  while($row02 = $tampil02->fetch_assoc()){ ?>


    <?php

      $id_penghutang='ANG CU';
$sqlTampil5= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ANG CU'";
$tampil5 = $database->query($sqlTampil5);
?>
<?php  if ($tampil5->num_rows > 0) {
  // jika data benar
  while($row5 = $tampil5->fetch_assoc()){ ?>

    <?php

$id_penghutang='ANG CU';
$sqlTampil6= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ANG CU'";
$tampil6 = $database->query($sqlTampil6);
?>
<?php  if ($tampil6->num_rows > 0) {
  // jika data benar
  while($row6 = $tampil6->fetch_assoc()){ ?>

     <?php

    $id_penghutang='AKANG';
$sqlTampil03= "SELECT id_penghutang, nama from penghutang where id_penghutang='2' AND nama='AKANG'";
$tampil03 = $database->query($sqlTampil03);
?>
<?php  if ($tampil03->num_rows > 0) {
  // jika data benar
  while($row03 = $tampil03->fetch_assoc()){ ?>



 <?php

$id_penghutang='AKANG';
$sqlTampil7= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='AKANG'";
$tampil7 = $database->query($sqlTampil7);
?>
<?php  if ($tampil7->num_rows > 0) {
  // jika data benar
  while($row7 = $tampil7->fetch_assoc()){ ?>

    <?php

$id_penghutang='AKANG';
$sqlTampil8= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='AKANG'";
$tampil8 = $database->query($sqlTampil8);
?>
<?php  if ($tampil8->num_rows > 0) {
  // jika data benar
  while($row8 = $tampil8->fetch_assoc()){ ?>

     <?php

    $id_penghutang='ATAK';
$sqlTampil04= "SELECT id_penghutang, nama from penghutang where id_penghutang='4' AND nama='ATAK'";
$tampil04 = $database->query($sqlTampil04);
?>
<?php  if ($tampil04->num_rows > 0) {
  // jika data benar
  while($row04 = $tampil04->fetch_assoc()){ ?>


<?php

$id_penghutang='ATAK';
$sqlTampil9= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ATAK'";
$tampil9 = $database->query($sqlTampil9);
?>
<?php  if ($tampil9->num_rows > 0) {
  // jika data benar
  while($row9 = $tampil9->fetch_assoc()){ ?>

    <?php

$id_penghutang='ATAK';
$sqlTampil10= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ATAK'";
$tampil10 = $database->query($sqlTampil10);
?>
<?php  if ($tampil10->num_rows > 0) {
  // jika data benar
  while($row10 = $tampil10->fetch_assoc()){ ?>


<?php

    $id_penghutang='AON';
$sqlTampil05= "SELECT id_penghutang, nama from penghutang where id_penghutang='5' AND nama='AON'";
$tampil05 = $database->query($sqlTampil05);
?>
<?php  if ($tampil05->num_rows > 0) {
  // jika data benar
  while($row05 = $tampil05->fetch_assoc()){ ?>

<?php

$id_penghutang='AON';
$sqlTampil11= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='AON'";
$tampil11 = $database->query($sqlTampil11);
?>
<?php  if ($tampil11->num_rows > 0) {
  // jika data benar
  while($row11 = $tampil11->fetch_assoc()){ ?>

    <?php

$id_penghutang='AON';
$sqlTampil12= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='AON'";
$tampil12 = $database->query($sqlTampil12);
?>
<?php  if ($tampil12->num_rows > 0) {
  // jika data benar
  while($row12 = $tampil12->fetch_assoc()){ ?>

    <?php

    $id_penghutang='ATEK';
$sqlTampil06= "SELECT id_penghutang, nama from penghutang where id_penghutang='6' AND nama='ATEK'";
$tampil06 = $database->query($sqlTampil06);
?>
<?php  if ($tampil06->num_rows > 0) {
  // jika data benar
  while($row06 = $tampil06->fetch_assoc()){ ?>


<?php

$id_penghutang='ATEK';
$sqlTampil13= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ATEK'";
$tampil13 = $database->query($sqlTampil13);
?>
<?php  if ($tampil13->num_rows > 0) {
  // jika data benar
  while($row13 = $tampil13->fetch_assoc()){ ?>

    <?php

$id_penghutang='ATEK';
$sqlTampil14= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ATEK'";
$tampil14 = $database->query($sqlTampil14);
?>
<?php  if ($tampil14->num_rows > 0) {
  // jika data benar
  while($row14 = $tampil14->fetch_assoc()){ ?>


    <?php

    $id_penghutang='ASIANG';
$sqlTampil07= "SELECT id_penghutang, nama from penghutang where id_penghutang='7' AND nama='ASIANG'";
$tampil07 = $database->query($sqlTampil07);
?>
<?php  if ($tampil07->num_rows > 0) {
  // jika data benar
  while($row07 = $tampil07->fetch_assoc()){ ?>

    <?php

$id_penghutang='ASIANG';
$sqlTampil15= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ASIANG'";
$tampil15 = $database->query($sqlTampil15);
?>
<?php  if ($tampil15->num_rows > 0) {
  // jika data benar
  while($row15 = $tampil15->fetch_assoc()){ ?>

    <?php

$id_penghutang='ASIANG';
$sqlTampil16= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ASIANG'";
$tampil16 = $database->query($sqlTampil16);
?>
<?php  if ($tampil16->num_rows > 0) {
  // jika data benar
  while($row16 = $tampil16->fetch_assoc()){ ?>
   

 <?php

    $id_penghutang='ASENG BANGUNAN';
$sqlTampil08= "SELECT id_penghutang, nama from penghutang where id_penghutang='8' AND nama='ASENG BANGUNAN'";
$tampil08 = $database->query($sqlTampil08);
?>
<?php  if ($tampil08->num_rows > 0) {
  // jika data benar
  while($row08 = $tampil08->fetch_assoc()){ ?>

    <?php

$id_penghutang='ASENG BANGUNAN';
$sqlTampil17= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ASENG BANGUNAN'";
$tampil17 = $database->query($sqlTampil17);
?>
<?php  if ($tampil17->num_rows > 0) {
  // jika data benar
  while($row17 = $tampil17->fetch_assoc()){ ?>

    <?php

$id_penghutang='ASENG BANGUNAN';
$sqlTampil18= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ASENG BANGUNAN'";
$tampil18 = $database->query($sqlTampil18);
?>
<?php  if ($tampil18->num_rows > 0) {
  // jika data benar
  while($row18 = $tampil18->fetch_assoc()){ ?>

    <?php

    $id_penghutang='AKUANG MEDAN';
$sqlTampil09= "SELECT id_penghutang, nama from penghutang where id_penghutang='9' AND nama='AKUANG MEDAN'";
$tampil09 = $database->query($sqlTampil09);
?>
<?php  if ($tampil09->num_rows > 0) {
  // jika data benar
  while($row09 = $tampil09->fetch_assoc()){ ?>

    <?php

$id_penghutang='AKUANG MEDAN';
$sqlTampil19= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='AKUANG MEDAN'";
$tampil19 = $database->query($sqlTampil19);
?>
<?php  if ($tampil19->num_rows > 0) {
  // jika data benar
  while($row19 = $tampil19->fetch_assoc()){ ?>

    <?php

$id_penghutang='AKUANG MEDAN';
$sqlTampil20= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='AKUANG MEDAN'";
$tampil20 = $database->query($sqlTampil20);
?>
<?php  if ($tampil20->num_rows > 0) {
  // jika data benar
  while($row20 = $tampil20->fetch_assoc()){ ?>
   
   <?php

    $id_penghutang='ACUI';
$sqlTampil010= "SELECT id_penghutang, nama from penghutang where id_penghutang='10' AND nama='ACUI'";
$tampil010 = $database->query($sqlTampil010);
?>
<?php  if ($tampil010->num_rows > 0) {
  // jika data benar
  while($row010 = $tampil010->fetch_assoc()){ ?>

    <?php

$id_penghutang='ACUI';
$sqlTampil21= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ACUI'";
$tampil21 = $database->query($sqlTampil21);
?>
<?php  if ($tampil21->num_rows > 0) {
  // jika data benar
  while($row21 = $tampil21->fetch_assoc()){ ?>

    <?php

$id_penghutang='ACUI';
$sqlTampil22= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ACUI'";
$tampil22 = $database->query($sqlTampil22);
?>
<?php  if ($tampil22->num_rows > 0) {
  // jika data benar
  while($row22 = $tampil22->fetch_assoc()){ ?>

    <?php

    $id_penghutang='AKOK TATO';
$sqlTampil011= "SELECT id_penghutang, nama from penghutang where id_penghutang='11' AND nama='AKOK TATO'";
$tampil011 = $database->query($sqlTampil011);
?>
<?php  if ($tampil011->num_rows > 0) {
  // jika data benar
  while($row011 = $tampil011->fetch_assoc()){ ?>

    <?php

$id_penghutang='AKOK TATO';
$sqlTampil23= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='AKOK TATO'";
$tampil23 = $database->query($sqlTampil23);
?>
<?php  if ($tampil23->num_rows > 0) {
  // jika data benar
  while($row23 = $tampil23->fetch_assoc()){ ?>

    <?php

$id_penghutang='AKOK TATO';
$sqlTampil24= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='AKOK TATO'";
$tampil24 = $database->query($sqlTampil24);
?>
<?php  if ($tampil24->num_rows > 0) {
  // jika data benar
  while($row24 = $tampil24->fetch_assoc()){ ?>
   
    <?php

    $id_penghutang='MEPONG';
$sqlTampil012= "SELECT id_penghutang, nama from penghutang where id_penghutang='12' AND nama='MEPONG'";
$tampil012 = $database->query($sqlTampil012);
?>
<?php  if ($tampil012->num_rows > 0) {
  // jika data benar
  while($row012 = $tampil012->fetch_assoc()){ ?>

    <?php

$id_penghutang='MEPONG';
$sqlTampil25= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='MEPONG'";
$tampil25 = $database->query($sqlTampil25);
?>
<?php  if ($tampil25->num_rows > 0) {
  // jika data benar
  while($row25 = $tampil25->fetch_assoc()){ ?>

    <?php

$id_penghutang='MEPONG';
$sqlTampil26= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='MEPONG'";
$tampil26 = $database->query($sqlTampil26);
?>
<?php  if ($tampil26->num_rows > 0) {
  // jika data benar
  while($row26 = $tampil26->fetch_assoc()){ ?>

     <?php

    $id_penghutang='FERRY';
$sqlTampil013= "SELECT id_penghutang, nama from penghutang where id_penghutang='13' AND nama='FERRY'";
$tampil013 = $database->query($sqlTampil013);
?>
<?php  if ($tampil013->num_rows > 0) {
  // jika data benar
  while($row013 = $tampil013->fetch_assoc()){ ?>

    <?php

$id_penghutang='FERRY';
$sqlTampil27= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='FERRY'";
$tampil27 = $database->query($sqlTampil27);
?>
<?php  if ($tampil27->num_rows > 0) {
  // jika data benar
  while($row27 = $tampil27->fetch_assoc()){ ?>

    <?php

$id_penghutang='FERRY';
$sqlTampil28= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='FERRY'";
$tampil28 = $database->query($sqlTampil28);
?>
<?php  if ($tampil28->num_rows > 0) {
  // jika data benar
  while($row28 = $tampil28->fetch_assoc()){ ?>

     <?php

    $id_penghutang='ENG HUI';
$sqlTampil015= "SELECT id_penghutang, nama from penghutang where id_penghutang='15' AND nama='ENG HUI'";
$tampil015 = $database->query($sqlTampil015);
?>
<?php  if ($tampil015->num_rows > 0) {
  // jika data benar
  while($row015 = $tampil015->fetch_assoc()){ ?>

    <?php

$id_penghutang='ENG HUI';
$sqlTampil29= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ENG HUI'";
$tampil29 = $database->query($sqlTampil29);
?>
<?php  if ($tampil29->num_rows > 0) {
  // jika data benar
  while($row29 = $tampil29->fetch_assoc()){ ?>

    <?php

$id_penghutang='ENG HUI';
$sqlTampil30= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ENG HUI'";
$tampil30 = $database->query($sqlTampil30);
?>
<?php  if ($tampil30->num_rows > 0) {
  // jika data benar
  while($row30 = $tampil30->fetch_assoc()){ ?>

     <?php

    $id_penghutang='AFU';
$sqlTampil017= "SELECT id_penghutang, nama from penghutang where id_penghutang='17' AND nama='AFU'";
$tampil017 = $database->query($sqlTampil017);
?>
<?php  if ($tampil017->num_rows > 0) {
  // jika data benar
  while($row017 = $tampil017->fetch_assoc()){ ?>

    <?php

$id_penghutang='AFU';
$sqlTampil31= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='AFU'";
$tampil31 = $database->query($sqlTampil31);
?>
<?php  if ($tampil31->num_rows > 0) {
  // jika data benar
  while($row31 = $tampil31->fetch_assoc()){ ?>

    <?php

$id_penghutang='AFU';
$sqlTampil32= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='AFU'";
$tampil32 = $database->query($sqlTampil32);
?>
<?php  if ($tampil32->num_rows > 0) {
  // jika data benar
  while($row32 = $tampil32->fetch_assoc()){ ?>

         <?php

    $id_penghutang='DEBY';
$sqlTampil018= "SELECT id_penghutang, nama from penghutang where id_penghutang='18' AND nama='DEBY'";
$tampil018 = $database->query($sqlTampil018);
?>
<?php  if ($tampil018->num_rows > 0) {
  // jika data benar
  while($row018 = $tampil018->fetch_assoc()){ ?>

    <?php

$id_penghutang='DEBY';
$sqlTampil33= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='DEBY'";
$tampil33 = $database->query($sqlTampil33);
?>
<?php  if ($tampil33->num_rows > 0) {
  // jika data benar
  while($row33 = $tampil33->fetch_assoc()){ ?>

    <?php

$id_penghutang='DEBY';
$sqlTampil34= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='DEBY'";
$tampil34 = $database->query($sqlTampil34);
?>
<?php  if ($tampil34->num_rows > 0) {
  // jika data benar
  while($row34 = $tampil34->fetch_assoc()){ ?>
   

    <?php

    $id_penghutang='ACONG';
$sqlTampil019= "SELECT id_penghutang, nama from penghutang where id_penghutang='19' AND nama='ACONG'";
$tampil019 = $database->query($sqlTampil019);
?>
<?php  if ($tampil019->num_rows > 0) {
  // jika data benar
  while($row019 = $tampil019->fetch_assoc()){ ?>

    <?php

$id_penghutang='ACONG';
$sqlTampil35= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ACONG'";
$tampil35 = $database->query($sqlTampil35);
?>
<?php  if ($tampil35->num_rows > 0) {
  // jika data benar
  while($row35 = $tampil35->fetch_assoc()){ ?>

    <?php

$id_penghutang='ACONG';
$sqlTampil36= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ACONG'";
$tampil36 = $database->query($sqlTampil36);
?>
<?php  if ($tampil36->num_rows > 0) {
  // jika data benar
  while($row36 = $tampil36->fetch_assoc()){ ?>

    <?php

    $id_penghutang='ACIONG';
$sqlTampil020= "SELECT id_penghutang, nama from penghutang where id_penghutang='20' AND nama='ACIONG'";
$tampil020 = $database->query($sqlTampil020);
?>
<?php  if ($tampil020->num_rows > 0) {
  // jika data benar
  while($row020 = $tampil020->fetch_assoc()){ ?>

    <?php

$id_penghutang='ACIONG';
$sqlTampil37= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ACIONG'";
$tampil37 = $database->query($sqlTampil37);
?>
<?php  if ($tampil37->num_rows > 0) {
  // jika data benar
  while($row37 = $tampil37->fetch_assoc()){ ?>

    <?php

$id_penghutang='ACIONG';
$sqlTampil38= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ACONG'";
$tampil38 = $database->query($sqlTampil38);
?>
<?php  if ($tampil38->num_rows > 0) {
  // jika data benar
  while($row38 = $tampil38->fetch_assoc()){ ?>
   
   
    <?php

    $id_penghutang='ATAM';
$sqlTampil021= "SELECT id_penghutang, nama from penghutang where id_penghutang='21' AND nama='ATAM'";
$tampil021 = $database->query($sqlTampil021);
?>
<?php  if ($tampil021->num_rows > 0) {
  // jika data benar
  while($row021 = $tampil021->fetch_assoc()){ ?>

    <?php

$id_penghutang='ATAM';
$sqlTampil39= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='ATAM'";
$tampil39 = $database->query($sqlTampil39);
?>
<?php  if ($tampil39->num_rows > 0) {
  // jika data benar
  while($row39 = $tampil39->fetch_assoc()){ ?>

    <?php

$id_penghutang='ATAM';
$sqlTampil40= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='ATAM'";
$tampil40 = $database->query($sqlTampil40);
?>
<?php  if ($tampil40->num_rows > 0) {
  // jika data benar
  while($row40 = $tampil40->fetch_assoc()){ ?>

     <?php

    $id_penghutang='XXX001';
$sqlTampil022= "SELECT id_penghutang, nama from penghutang where id_penghutang='22' AND nama='XXX001'";
$tampil022 = $database->query($sqlTampil022);
?>
<?php  if ($tampil022->num_rows > 0) {
  // jika data benar
  while($row022 = $tampil022->fetch_assoc()){ ?>

    <?php

$id_penghutang='XXX001';
$sqlTampil41= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='XXX001'";
$tampil41 = $database->query($sqlTampil41);
?>
<?php  if ($tampil41->num_rows > 0) {
  // jika data benar
  while($row41 = $tampil41->fetch_assoc()){ ?>

    <?php

$id_penghutang='XXX001';
$sqlTampil42= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='XXX001'";
$tampil42 = $database->query($sqlTampil42);
?>
<?php  if ($tampil42->num_rows > 0) {
  // jika data benar
  while($row42 = $tampil42->fetch_assoc()){ ?>

     <?php

    $id_penghutang='XXX002';
$sqlTampil023= "SELECT id_penghutang, nama from penghutang where id_penghutang='23' AND nama='XXX002'";
$tampil023 = $database->query($sqlTampil023);
?>
<?php  if ($tampil023->num_rows > 0) {
  // jika data benar
  while($row023 = $tampil023->fetch_assoc()){ ?>

    <?php

$id_penghutang='XXX002';
$sqlTampil43= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='XXX002'";
$tampil43 = $database->query($sqlTampil43);
?>
<?php  if ($tampil43->num_rows > 0) {
  // jika data benar
  while($row43 = $tampil43->fetch_assoc()){ ?>

    <?php

$id_penghutang='XXX002';
$sqlTampil44= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='XXX002'";
$tampil44 = $database->query($sqlTampil44);
?>
<?php  if ($tampil44->num_rows > 0) {
  // jika data benar
  while($row44 = $tampil44->fetch_assoc()){ ?>

      <?php

    $id_penghutang='XXX003';
$sqlTampil024= "SELECT id_penghutang, nama from penghutang where id_penghutang='24' AND nama='XXX003'";
$tampil024 = $database->query($sqlTampil024);
?>
<?php  if ($tampil024->num_rows > 0) {
  // jika data benar
  while($row024 = $tampil024->fetch_assoc()){ ?>

    <?php

$id_penghutang='XXX003';
$sqlTampil45= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='XXX003'";
$tampil45 = $database->query($sqlTampil45);
?>
<?php  if ($tampil45->num_rows > 0) {
  // jika data benar
  while($row45 = $tampil45->fetch_assoc()){ ?>

    <?php

$id_penghutang='XXX003';
$sqlTampil46= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='XXX003'";
$tampil46 = $database->query($sqlTampil46);
?>
<?php  if ($tampil46->num_rows > 0) {
  // jika data benar
  while($row46 = $tampil46->fetch_assoc()){ ?>

     <?php

    $id_penghutang='XXX004';
$sqlTampil025= "SELECT id_penghutang, nama from penghutang where id_penghutang='25' AND nama='XXX004'";
$tampil025 = $database->query($sqlTampil025);
?>
<?php  if ($tampil025->num_rows > 0) {
  // jika data benar
  while($row025 = $tampil025->fetch_assoc()){ ?>

    <?php

$id_penghutang='XXX004';
$sqlTampil47= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_deposit from transaksi_bank_hutang_depo where inquiri='deposit' AND id_penghutang='XXX004'";
$tampil47 = $database->query($sqlTampil47);
?>
<?php  if ($tampil47->num_rows > 0) {
  // jika data benar
  while($row47 = $tampil47->fetch_assoc()){ ?>

    <?php

$id_penghutang='XXX004';
$sqlTampil48= "SELECT id, id_penghutang, jenis_kas, nominal, inquiri, date_updated, SUM(nominal) AS total_withdraw from transaksi_bank_hutang_with where inquiri='withdraw' AND id_penghutang='XXX004'";
$tampil48 = $database->query($sqlTampil48);
?>
<?php  if ($tampil48->num_rows > 0) {
  // jika data benar
  while($row48 = $tampil48->fetch_assoc()){ ?>
   
   
   


            <tr>
              <!-- <td><?php// echo $row1['id']; ?></td> -->
               <td><?php echo $row0['nama']; ?></td>
               <!-- <td><?php //echo $row1['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row1['total_deposit'] - $row2['total_withdraw']); ?></td>
               <td><?php echo $row1['date_updated']; ?></td>
                </tr>
                <tr>
              <!-- <td><?php //echo $row3['id']; ?></td> -->
               <td><?php echo $row01['nama']; ?></td>
              <!--  <td><?php// echo $row3['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row3['total_deposit'] - $row4['total_withdraw']); ?></td>
               <td><?php echo $row3['date_updated']; ?></td>
                </tr>
                 <tr>
              <!-- <td><?php// echo $row5['id']; ?></td> -->
               <td><?php echo $row02['nama']; ?></td>
              <!--  <td><?php //echo $row5['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row5['total_deposit'] - $row6['total_withdraw']); ?></td>
               <td><?php echo $row5['date_updated']; ?></td>
                </tr>
                <tr>
              <!--   <td><?php// echo $row7['id']; ?></td> -->
               <td><?php echo $row03['nama']; ?></td>
              <!--  <td><?php// echo $row7['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row7['total_deposit'] - $row8['total_withdraw']); ?></td>
               <td><?php echo $row7['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php //echo $row9['id']; ?></td> -->
               <td><?php echo $row04['nama']; ?></td>
              <!--  <td><?php //echo $row9['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row9['total_deposit'] - $row10['total_withdraw']); ?></td>
               <td><?php echo $row9['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php //echo $row11['id']; ?></td> -->
               <td><?php echo $row05['nama']; ?></td>
              <!--  <td><?php// echo $row11['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row11['total_deposit'] - $row12['total_withdraw']); ?></td>
               <td><?php echo $row11['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php// echo $row13['id']; ?></td> -->
               <td><?php echo $row06['nama']; ?></td>
               <!-- <td><?php //echo $row13['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row13['total_deposit'] - $row14['total_withdraw']); ?></td>
               <td><?php echo $row13['date_updated']; ?></td>
                </tr>
                  <tr>
               <!--  <td><?php //echo $row15['id']; ?></td> -->
               <td><?php echo $row07['nama']; ?></td>
              <!--  <td><?php //echo $row15['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row15['total_deposit'] - $row16['total_withdraw']); ?></td>
               <td><?php echo $row15['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php //echo $row17['id']; ?></td> -->
               <td><?php echo $row08['nama']; ?></td>
               <!-- <td><?php //echo $row17['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row17['total_deposit'] - $row18['total_withdraw']); ?></td>
               <td><?php echo $row17['date_updated']; ?></td>
                </tr>
                 <tr>
               <!--  <td><?php// echo $row19['id']; ?></td> -->
               <td><?php echo $row09['nama']; ?></td>
              <!--  <td><?php// echo $row19['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row19['total_deposit'] - $row20['total_withdraw']); ?></td>
               <td><?php echo $row19['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php //echo $row21['id']; ?></td> -->
               <td><?php echo $row010['nama']; ?></td>
              <!--  <td><?php //echo $row21['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row21['total_deposit'] - $row22['total_withdraw']); ?></td>
               <td><?php echo $row21['date_updated']; ?></td>
                </tr>
                <tr>
               <!--  <td><?php //echo $row23['id']; ?></td> -->
               <td><?php echo $row011['nama']; ?></td>
              <!--  <td><?php// echo $row23['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row23['total_deposit'] - $row24['total_withdraw']); ?></td>
               <td><?php echo $row23['date_updated']; ?></td>
                </tr>
                  <tr>
               <!--  <td><?php //echo $row25['id']; ?></td> -->
               <td><?php echo $row012['nama']; ?></td>
               <!-- <td><?php// echo $row25['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row25['total_deposit'] - $row26['total_withdraw']); ?></td>
               <td><?php echo $row25['date_updated']; ?></td>
                </tr>
                 <tr>
                <!-- <td><?php// echo $row27['id']; ?></td> -->
               <td><?php echo $row013['nama']; ?></td>
               <!-- <td><?php// echo $row27['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row27['total_deposit'] - $row28['total_withdraw']); ?></td>
               <td><?php echo $row27['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php// echo $row29['id']; ?></td> -->
               <td><?php echo $row015['nama']; ?></td>
              <!--  <td><?php// echo $row29['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row29['total_deposit'] - $row30['total_withdraw']); ?></td>
               <td><?php echo $row29['date_updated']; ?></td>
                </tr>
                 <tr>
                <!-- <td><?php// echo $row31['id']; ?></td> -->
               <td><?php echo $row017['nama']; ?></td>
              <!--  <td><?php //echo $row31['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row31['total_deposit'] - $row32['total_withdraw']); ?></td>
               <td><?php echo $row31['date_updated']; ?></td>
                </tr>
                  <tr>
                <!-- <td><?php //echo $row33['id']; ?></td> -->
               <td><?php echo $row018['nama']; ?></td>
              <!--  <td><?php// echo $row33['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row33['total_deposit'] - $row34['total_withdraw']); ?></td>
               <td><?php echo $row33['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php// echo $row35['id']; ?></td> -->
               <td><?php echo $row019['nama']; ?></td>
               <!-- <td><?php //echo $row35['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row35['total_deposit'] - $row36['total_withdraw']); ?></td>
               <td><?php echo $row35['date_updated']; ?></td>
                </tr>
                <tr>
               <!--  <td><?php //echo $row37['id']; ?></td> -->
               <td><?php echo $row020['nama']; ?></td>
              <!--  <td><?php //echo $row37['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row37['total_deposit'] - $row38['total_withdraw']); ?></td>
               <td><?php echo $row37['date_updated']; ?></td>
                </tr>
              <tr>
                <!-- <td><?php //echo $row39['id']; ?></td> -->
               <td><?php echo $row021['nama']; ?></td>
               <!-- <td><?php// echo $row39['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row39['total_deposit'] - $row40['total_withdraw']); ?></td>
               <td><?php echo $row39['date_updated']; ?></td>
                </tr>
                <tr>
               <!--  <td><?php //echo $row41['id']; ?></td> -->
               <td><?php echo $row022['nama']; ?></td>
               <!-- <td><?php// echo $row41['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row41['total_deposit'] - $row42['total_withdraw']); ?></td>
               <td><?php echo $row41['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php //echo $row43['id']; ?></td> -->
               <td><?php echo $row023['nama']; ?></td>
               <!-- <td><?php //echo $row43['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row43['total_deposit'] - $row44['total_withdraw']); ?></td>
               <td><?php echo $row43['date_updated']; ?></td>
                </tr>
                <tr>
                <!-- <td><?php //echo $row45['id']; ?></td> -->
               <td><?php echo $row024['nama']; ?></td>
              <!--  <td><?php// echo $row45['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row45['total_deposit'] - $row46['total_withdraw']); ?></td>
               <td><?php echo $row45['date_updated']; ?></td>
                </tr>
                 <tr>
               <!--  <td><?php //echo $row47['id']; ?></td> -->
               <td><?php echo $row025['nama']; ?></td>
              <!--  <td><?php// echo $row47['jenis_kas']; ?></td> -->
               <td><?php echo @rupiah($row47['total_deposit'] - $row48['total_withdraw']); ?></td>
               <td><?php echo $row47['date_updated']; ?></td>
                </tr>
                 
          
        </tfoot>
        <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>



  
            <?php }  ?>
<?php } else {
    // jika data salah
    echo "data kosong";
  }}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}} ?>
  
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
</body>

</html>