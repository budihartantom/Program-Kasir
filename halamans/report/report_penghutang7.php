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
                <th>Nama Penghutang</th>
                <th>Total Hutang</th>
                </tr>                       
        </thead>
        <tbody>
        
          
   <?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}


$jenis_kas=0;
$sqlTampil1= "SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ALAM' AND inquiri='deposit'";
$tampil1 = $database->query($sqlTampil1);
?>
<?php if ($tampil1->num_rows > 0) {
  // jika data benar
  while($row1 = $tampil1->fetch_array()){ ?>

<?php
$jenis_kas=0;
$sqlTampil2= "SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ALAM' AND inquiri='withdraw' ";
$tampil2 = $database->query($sqlTampil2);
?>
<?php if ($tampil2->num_rows > 0) {
  // jika data benar
  while($row2 = $tampil2->fetch_array()){ ?>


    <?php

    $jenis_kas=0;
$sqlTampil3= "SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AKANG' AND inquiri='deposit'";
$tampil3 = $database->query($sqlTampil3);
?>
<?php if ($tampil3->num_rows > 0) {
  // jika data benar
  while($row3 = $tampil3->fetch_array()){ ?>

     <?php

    $jenis_kas=0;
$sqlTampil4= "SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AKANG' AND inquiri='withdraw'";
$tampil4 = $database->query($sqlTampil4);
?>
<?php if ($tampil4->num_rows > 0) {
  // jika data benar
  while($row4 = $tampil4->fetch_array()){ ?>


<?php
  $jenis_kas=0;
  $sqlTampil5="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ANG CU' AND inquiri='deposit'";
  $tampil5 = $database->query($sqlTampil5);
?>
<?php if ($tampil5->num_rows > 0) {
    // jika data benar
    while($row5 = $tampil5->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil6="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ANG CU' AND inquiri='withdraw'";
  $tampil6 = $database->query($sqlTampil6);
?>
<?php if ($tampil6->num_rows > 0) {
    // jika data benar
    while($row6 = $tampil6->fetch_array()){ ?>

<?php
  $jenis_kas=0;
  $sqlTampil7="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ATAK' AND inquiri='deposit'";
  $tampil7 = $database->query($sqlTampil7);
?>
<?php if ($tampil7->num_rows > 0) {
    // jika data benar
    while($row7 = $tampil7->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil8="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ATAK' AND inquiri='withdraw'";
  $tampil8 = $database->query($sqlTampil8);
?>
<?php if ($tampil8->num_rows > 0) {
    // jika data benar
    while($row8 = $tampil8->fetch_array()){ ?>


<?php
  $jenis_kas=0;
  $sqlTampil9="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AON' AND inquiri='deposit'";
  $sqlTampil9 = $database->query($sqlTampil9);
?>
<?php if ($sqlTampil9->num_rows > 0) {
    // jika data benar
    while($row9 = $sqlTampil9->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil10="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AON' AND inquiri='withdraw'";
  $sqlTampil10 = $database->query($sqlTampil10);
?>
<?php if ($sqlTampil10->num_rows > 0) {
    // jika data benar
    while($row10 = $sqlTampil10->fetch_array()){ ?>


<?php
  $jenis_kas=0;
  $sqlTampil11="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ATEK' AND inquiri='deposit'";
  $sqlTampil11 = $database->query($sqlTampil11);
?>
<?php if ($sqlTampil11->num_rows > 0) {
    // jika data benar
    while($row11 = $sqlTampil11->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil12="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ATEK' AND inquiri='withdraw'";
  $sqlTampil12 = $database->query($sqlTampil12);
?>
<?php if ($sqlTampil12->num_rows > 0) {
    // jika data benar
    while($row12 = $sqlTampil12->fetch_array()){ ?>  


<?php
  $jenis_kas=0;
  $sqlTampil13="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ASIANG' AND inquiri='deposit'";
  $sqlTampil13 = $database->query($sqlTampil13);
?>
<?php if ($sqlTampil13->num_rows > 0) {
    // jika data benar
    while($row13 = $sqlTampil13->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil14="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ASIANG' AND inquiri='withdraw'";
  $sqlTampil14 = $database->query($sqlTampil14);
?>
<?php if ($sqlTampil14->num_rows > 0) {
    // jika data benar
    while($row14 = $sqlTampil14->fetch_array()){ ?>


<?php
  $jenis_kas=0;
  $sqlTampil15="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ASENG BANGUNAN' AND inquiri='deposit'";
  $sqlTampil15 = $database->query($sqlTampil15);
?>
<?php if ($sqlTampil15->num_rows > 0) {
    // jika data benar
    while($row15 = $sqlTampil15->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil16="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ASENG BANGUNAN' AND inquiri='withdraw'";
  $sqlTampil16 = $database->query($sqlTampil16);
?>
<?php if ($sqlTampil16->num_rows > 0) {
    // jika data benar
    while($row16 = $sqlTampil16->fetch_array()){ ?>    




<?php
  $jenis_kas=0;
  $sqlTampil17="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AKUANG MEDAN' AND inquiri='deposit'";
  $sqlTampil17 = $database->query($sqlTampil17);
?>
<?php if ($sqlTampil17->num_rows > 0) {
    // jika data benar
    while($row17 = $sqlTampil17->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil18="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AKUANG MEDAN' AND inquiri='withdraw'";
  $sqlTampil18 = $database->query($sqlTampil18);
?>
<?php if ($sqlTampil18->num_rows > 0) {
    // jika data benar
    while($row18 = $sqlTampil18->fetch_array()){ ?>  




<?php
  $jenis_kas=0;
  $sqlTampil19="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ACUI' AND inquiri='deposit'";
  $sqlTampil19 = $database->query($sqlTampil19);
?>
<?php if ($sqlTampil19->num_rows > 0) {
    // jika data benar
    while($row19 = $sqlTampil19->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil20="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ACUI' AND inquiri='withdraw'";
  $sqlTampil20 = $database->query($sqlTampil20);
?>
<?php if ($sqlTampil20->num_rows > 0) {
    // jika data benar
    while($row20 = $sqlTampil20->fetch_array()){ ?>



<?php
  $jenis_kas=0;
  $sqlTampil21="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AKOK TATO' AND inquiri='deposit'";
  $sqlTampil21 = $database->query($sqlTampil21);
?>
<?php if ($sqlTampil21->num_rows > 0) {
    // jika data benar
    while($row21 = $sqlTampil21->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil22="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AKOK TATO' AND inquiri='withdraw'";
  $sqlTampil22 = $database->query($sqlTampil22);
?>
<?php if ($sqlTampil22->num_rows > 0) {
    // jika data benar
    while($row22 = $sqlTampil22->fetch_array()){ ?>


<?php
  $jenis_kas=0;
  $sqlTampil23="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='MEPONG' AND inquiri='deposit'";
  $sqlTampil23 = $database->query($sqlTampil23);
?>
<?php if ($sqlTampil23->num_rows > 0) {
    // jika data benar
    while($row23 = $sqlTampil23->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil24="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='MEPONG' AND inquiri='withdraw'";
  $sqlTampil24 = $database->query($sqlTampil24);
?>
<?php if ($sqlTampil24->num_rows > 0) {
    // jika data benar
    while($row24 = $sqlTampil24->fetch_array()){ ?>  



    <?php
  $jenis_kas=0;
  $sqlTampil25="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='FERRY' AND inquiri='deposit'";
  $tampil25 = $database->query($sqlTampil25);
?>
<?php if ($tampil25->num_rows > 0) {
    // jika data benar
    while($row25 = $tampil25->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil26="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='FERRY' AND inquiri='withdraw'";
  $tampil26 = $database->query($sqlTampil26);
?>
<?php if ($tampil26->num_rows > 0) {
    // jika data benar
    while($row26 = $tampil26->fetch_array()){ ?>


  <?php
  $jenis_kas=0;
  $sqlTampil27="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AKUANG KACA' AND inquiri='deposit'";
  $tampil27 = $database->query($sqlTampil27);
?>
<?php if ($tampil27->num_rows > 0) {
    // jika data benar
    while($row27 = $tampil27->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil28="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AKUANG KACA' AND inquiri='withdraw'";
  $tampil28 = $database->query($sqlTampil28);
?>
<?php if ($tampil28->num_rows > 0) {
    // jika data benar
    while($row28 = $tampil28->fetch_array()){ ?>


       <?php
  $jenis_kas=0;
  $sqlTampil29="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ENG HUI' AND inquiri='deposit'";
  $tampil29 = $database->query($sqlTampil29);
?>
<?php if ($tampil29->num_rows > 0) {
    // jika data benar
    while($row29 = $tampil29->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil30="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ENG HUI' AND inquiri='withdraw'";
  $tampil30 = $database->query($sqlTampil30);
?>
<?php if ($tampil30->num_rows > 0) {
    // jika data benar
    while($row30 = $tampil30->fetch_array()){ ?>




        <?php
  $jenis_kas=0;
  $sqlTampil31="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AFU' AND inquiri='deposit'";
  $tampil31 = $database->query($sqlTampil31);
?>
<?php if ($tampil31->num_rows > 0) {
    // jika data benar
    while($row31 = $tampil31->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil32="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='AFU' AND inquiri='withdraw'";
  $tampil32 = $database->query($sqlTampil32);
?>
<?php if ($tampil32->num_rows > 0) {
    // jika data benar
    while($row32 = $tampil32->fetch_array()){ ?>


        <?php
  $jenis_kas=0;
  $sqlTampil33="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='DEBY' AND inquiri='deposit'";
  $tampil33 = $database->query($sqlTampil33);
?>
<?php if ($tampil33->num_rows > 0) {
    // jika data benar
    while($row33 = $tampil33->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil34="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='DEBY' AND inquiri='withdraw'";
  $tampil34 = $database->query($sqlTampil34);
?>
<?php if ($tampil34->num_rows > 0) {
    // jika data benar
    while($row34 = $tampil34->fetch_array()){ ?>




          <?php
  $jenis_kas=0;
  $sqlTampil35="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ACONG' AND inquiri='deposit'";
  $tampil35 = $database->query($sqlTampil35);
?>
<?php if ($tampil35->num_rows > 0) {
    // jika data benar
    while($row35 = $tampil35->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil36="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ACONG' AND inquiri='withdraw'";
  $tampil36 = $database->query($sqlTampil36);
?>
<?php if ($tampil36->num_rows > 0) {
    // jika data benar
    while($row36 = $tampil36->fetch_array()){ ?>


       <?php
  $jenis_kas=0;
  $sqlTampil37="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ACIONG' AND inquiri='deposit'";
  $tampil37 = $database->query($sqlTampil37);
?>
<?php if ($tampil37->num_rows > 0) {
    // jika data benar
    while($row37 = $tampil37->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil38="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ACIONG' AND inquiri='withdraw'";
  $tampil38 = $database->query($sqlTampil38);
?>
<?php if ($tampil38->num_rows > 0) {
    // jika data benar
    while($row38 = $tampil38->fetch_array()){ ?>



        <?php
  $jenis_kas=0;
  $sqlTampil39="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ATAM' AND inquiri='deposit'";
  $tampil39 = $database->query($sqlTampil39);
?>
<?php if ($tampil39->num_rows > 0) {
    // jika data benar
    while($row39 = $tampil39->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil40="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='ATAM' AND inquiri='withdraw'";
  $tampil40 = $database->query($sqlTampil40);
?>
<?php if ($tampil40->num_rows > 0) {
    // jika data benar
    while($row40 = $tampil40->fetch_array()){ ?>



      <?php
  $jenis_kas=0;
  $sqlTampil41="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='XXX001' AND inquiri='deposit'";
  $tampil41 = $database->query($sqlTampil41);
?>
<?php if ($tampil41->num_rows > 0) {
    // jika data benar
    while($row41 = $tampil41->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil42="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='XXX001' AND inquiri='withdraw'";
  $tampil42 = $database->query($sqlTampil42);
?>
<?php if ($tampil42->num_rows > 0) {
    // jika data benar
    while($row42 = $tampil42->fetch_array()){ ?>




      <?php
  $jenis_kas=0;
  $sqlTampil43="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='XXX002' AND inquiri='deposit'";
  $tampil43 = $database->query($sqlTampil43);
?>
<?php if ($tampil43->num_rows > 0) {
    // jika data benar
    while($row43 = $tampil43->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil44="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='XXX002' AND inquiri='withdraw'";
  $tampil44 = $database->query($sqlTampil44);
?>
<?php if ($tampil44->num_rows > 0) {
    // jika data benar
    while($row44 = $tampil44->fetch_array()){ ?>


        <?php
  $jenis_kas=0;
  $sqlTampil45="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='XXX003' AND inquiri='deposit'";
  $tampil45 = $database->query($sqlTampil45);
?>
<?php if ($tampil45->num_rows > 0) {
    // jika data benar
    while($row45 = $tampil45->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil46="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='XXX003' AND inquiri='withdraw'";
  $tampil46 = $database->query($sqlTampil46);
?>
<?php if ($tampil46->num_rows > 0) {
    // jika data benar
    while($row46 = $tampil46->fetch_array()){ ?>    


        <?php
  $jenis_kas=0;
  $sqlTampil47="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='XXX004' AND inquiri='deposit'";
  $tampil47 = $database->query($sqlTampil47);
?>
<?php if ($tampil47->num_rows > 0) {
    // jika data benar
    while($row47 = $tampil47->fetch_array()){ ?>

      <?php
  $jenis_kas=0;
  $sqlTampil48="SELECT id_penghutang, nominal , SUM(nominal) AS nominal from bank_hutang WHERE id_penghutang='XXX004' AND inquiri='withdraw'";
  $tampil48 = $database->query($sqlTampil48);
?>
<?php if ($tampil48->num_rows > 0) {
    // jika data benar
    while($row48 = $tampil48->fetch_array()){ ?>    

            <tr>
               <td><?php echo $row1['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row1['nominal'] - $row2['nominal']); ?></td>
                </tr>
            <tr>
               <td><?php echo $row3['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row3['nominal'] - $row4['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row5['id_penghutang']; ?></td>
                <td><?php echo @rupiah($row5['nominal'] - $row6['nominal']); ?></td>  
            </tr>
            <tr>
               <td><?php echo $row8['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row7['nominal'] - $row8['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row9['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row9['nominal'] - $row10['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row12['id_penghutang']; ?></td>
                <td><?php echo @rupiah($row11['nominal'] - $row12['nominal']); ?></td>  
            </tr>
            <tr>
               <td><?php echo $row14['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row13['nominal'] - $row14['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row15['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row15['nominal'] - $row16['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row18['id_penghutang']; ?></td>
                <td><?php echo @rupiah($row17['nominal'] - $row18['nominal']); ?></td>  
           </tr>
            <tr>
               <td><?php echo $row19['id_penghutang']; ?></td>
               <td><?php echo @rupiah($roW19['nominal'] - $row20['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row22['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row21['nominal'] - $row22['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row23['id_penghutang']; ?></td>
                <td><?php echo @rupiah($row23['nominal'] - $row24['nominal']); ?></td>  
            </tr>
            <tr>
               <td><?php echo $row26['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row25['nominal'] - $row26['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row28['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row27['nominal'] - $row28['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row30['id_penghutang']; ?></td>
                <td><?php echo @rupiah($row29['nominal'] - $row30['nominal']); ?></td>  
            </tr>
            <tr>
               <td><?php echo $row32['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row31['nominal'] - $row32['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row34['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row33['nominal'] - $row34['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row36['id_penghutang']; ?></td>
                <td><?php echo @rupiah($row35['nominal'] - $row36['nominal']); ?></td>  
            </tr>
            <tr>
               <td><?php echo $row38['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row37['nominal'] - $row38['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row40['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row39['nominal'] - $row40['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row42['id_penghutang']; ?></td>
                <td><?php echo @rupiah($row41['nominal'] - $row42['nominal']); ?></td>  
            </tr>
            <tr>
               <td><?php echo $row44['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row43['nominal'] - $row44['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row46['id_penghutang']; ?></td>
               <td><?php echo @rupiah($row45['nominal'] - $row46['nominal']); ?></td>
            </tr>
            <tr>
               <td><?php echo $row48['id_penghutang']; ?></td>
                <td><?php echo @rupiah($row47['nominal'] - $row48['nominal']); ?></td>  
            </tr>
            <tr>
                <td>ZGRAND TOTAL</td>
                <td><?php echo @rupiah(($pendapatan = $row1['nominal'] + $row3['nominal'] + $row5['nominal'] + $row7['nominal'] + $row9['nominal'] + $row11['nominal'] + $row13['nominal'] + $row15['nominal'] + $row17['nominal'] + $row19['nominal'] + $row21['nominal'] + $row23['nominal'] + $row25['nominal'] + $row27['nominal'] + $row29['nominal'] + $row31['nominal'] + $row33['nominal'] + $row35['nominal'] + $row37['nominal'] + $row39['nominal'] + $row41['nominal'] + $row43['nominal'] + $row45['nominal'] + $row47['nominal']) - ($row2['nominal'] + $row4['nominal'] + $row6['nominal'] + $row8['nominal'] + $row10['nominal'] + $row20['nominal'] + $row22['nominal'] + $row24['nominal'] + $row26['nominal'] + $row28['nominal'] + $row30['nominal'] + $row32['nominal'] + $row34['nominal'] + $row36['nominal'] + $row38['nominal'] + $row40['nominal'] + $row42['nominal'] + $row44['nominal'] + $row46['nominal'] + $row48['nominal'])); ?></td>
              </tr>
        </tfoot>
        <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>



  
            <?php   }?>
<?php } else {
    // jika data salah
    echo "data kosong";
  }}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}?>
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