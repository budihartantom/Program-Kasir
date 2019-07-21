<?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }
?>
<?php
      function rupiah($angka){
      $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
      return $hasil_rupiah;
}?>
 <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <p>Jangan Lupa hitung selalu uang di kas kecil dan cocokan dengan system</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>

                    <?php

  $nominal=0;
  $sqlTampil1= "SELECT id, jenis_pemasukan, jenis_kas, jenis_game, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from pemasukan_game_mm WHERE inquiri='deposit'";
  $tampil1 = $database->query($sqlTampil1);
?>
<?php if ($tampil1->num_rows > 0) {
    // jika data benar
    while($row1 = $tampil1->fetch_assoc()){ ?>


          <?php

  $nominal=0;
  
  $sqlTampil= "SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_mm WHERE inquiri='deposit'";
  $tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
    // jika data benar
    while($row = $tampil->fetch_assoc()){ ?>

<?php

$nominal=0;

$sqlTampil3= "SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_mm WHERE inquiri='withdraw'";
$tampil3 = $database->query($sqlTampil3);
?>
<?php if ($tampil3->num_rows > 0) {
  // jika data benar
  while($row3 = $tampil3->fetch_assoc()){ ?>

      <?php

       $nominal=0;
  $pendapatan = $nominal-$nominal-$nominal-$nominal;
  $sqlTampil2= "SELECT id, jenis_pengeluaran, jenis_kas, nominal, rekening, keterangan, inquiri, create_date, SUM(nominal) AS nominal from pengeluaran_game_mm WHERE inquiri='withdraw'";
  $tampil2 = $database->query($sqlTampil2);
?>
<?php if ($tampil2->num_rows > 0) {
    // jika data benar
    while($row2 = $tampil2->fetch_assoc()){ ?>
 
                    <div class="float-right">
                      <p class="mb-0 text-right">Total MM per hari</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0" style="font-size:20px;"><?php echo @rupiah($pendapatan = $row1['nominal']-($row['nominal']+$row2['nominal'])+$row3['nominal']); ?></h3>

                         <?php
             if ($pendapatan < $row1['nominal'] ){
} else {
     "";
}
?>


                        <?php   }?>
<?php } else {
    // jika data salah
    "data kosong";
  }}}}}}} ?>


  
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
<?php


  $nominal=0;
  $sqlTampil1= "SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_bk WHERE inquiri='withdraw'";
  $tampil1 = $database->query($sqlTampil1);
?>
<?php if ($tampil1->num_rows > 0) {
    // jika data benar
    while($row1 = $tampil1->fetch_assoc()){ ?>


          <?php

  $nominal=0;
  $pendapatan = $nominal-$nominal;
  $sqlTampil= "SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_bk WHERE inquiri='deposit'";
  $tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
    // jika data benar
    while($row = $tampil->fetch_assoc()){ ?>
 

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total BK 1288 per hari</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0" style="font-size:20px;"><?php echo @rupiah($pendapatan = $row['nominal']-$row1['nominal']); ?></h3>

                        
                   

                        <?php   }?>
<?php } else {
    // jika data salah
    "data kosong";
  }}} ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
<?php
function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}


  $nominal=0;
  $sqlTampil1= "SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_slot WHERE inquiri='withdraw'";
  $tampil1 = $database->query($sqlTampil1);
?>
<?php if ($tampil1->num_rows > 0) {
    // jika data benar
    while($row1 = $tampil1->fetch_assoc()){ ?>


          <?php

  $nominal=0;
  $pendapatan = $nominal-$nominal;
  $sqlTampil= "SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_slot WHERE inquiri='deposit'";
  $tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
    // jika data benar
    while($row = $tampil->fetch_assoc()){ ?>
 

                    <div class="float-right">
                      <p class="mb-0 text-right">Total SLOT 168 per hari</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0" style="font-size:20px;"><?php echo @rupiah($pendapatan = $row['nominal']-$row1['nominal']); ?></h3>


                   


                        <?php   }?>
<?php } else {
    // jika data salah
    "data kosong";
  }}} ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>


<?php


  $nominal=0;
  $sqlTampil1= "SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_dingdong WHERE inquiri='withdraw'";
  $tampil1 = $database->query($sqlTampil1);
?>
<?php if ($tampil1->num_rows > 0) {
    // jika data benar
    while($row1 = $tampil1->fetch_assoc()){ ?>


          <?php

  $nominal=0;
  $pendapatan = $nominal-$nominal;
  $sqlTampil= "SELECT id, jenis_transaksi, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_dingdong WHERE inquiri='deposit'";
  $tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
    // jika data benar
    while($row = $tampil->fetch_assoc()){ ?>


                    <div class="float-right">
                      <p class="mb-0 text-right" >Total Dingdong per hari</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0" style="font-size:20px;"><?php echo @rupiah($pendapatan = $row['nominal']-$row1['nominal']); ?></h3>


                       <!-- <?php
            // if ($pendapatan < $row1['nominal'] ){
    //echo "Saldo Anda Tidak Cukup, Lakukan Deposit!";
}// else {
   //  "";
}
?>-->
                   

                        <?php   }?>
<?php } else {
    // jika data salah
    "data kosong";
  } ?>
                      </div>
                    </div>
                  </div>


<?php

 //
  $nominal=0;
  $sqlTampil= "SELECT id, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_mm WHERE inquiri='deposit' AND jenis_kas='1'";
  $tampil = $database->query($sqlTampil);
?>
<?php if ($tampil->num_rows > 0) {
    // jika data benar
    while($row = $tampil->fetch_assoc()){ ?>

      <?php

 //
  $nominal=0;
  $sqlTampil7= "SELECT id, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_dingdong WHERE inquiri='deposit' AND jenis_kas='1'";
  $tampil7 = $database->query($sqlTampil7);
?>
<?php if ($tampil7->num_rows > 0) {
    // jika data benar
    while($row7 = $tampil7->fetch_assoc()){ ?>


      <?php

 //
  $nominal=0;
  $sqlTampil3= "SELECT id, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_bk WHERE inquiri='deposit' AND jenis_kas='1'";
  $tampil3 = $database->query($sqlTampil3);
?>
<?php if ($tampil3->num_rows > 0) {
    // jika data benar
    while($row3 = $tampil3->fetch_assoc()){ ?>



      <?php

 //
  $nominal=0;
  $sqlTampil6= "SELECT id, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_slot WHERE inquiri='deposit' AND jenis_kas='1'";
  $tampil6 = $database->query($sqlTampil6);
?>
<?php if ($tampil6->num_rows > 0) {
    // jika data benar
    while($row6 = $tampil6->fetch_assoc()){ ?>

     


      <?php

  $nominal=0;
  $sqlTampil2= "SELECT id, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_mm WHERE inquiri='withdraw' AND jenis_kas='1'";
  $tampil2 = $database->query($sqlTampil2);
?>
<?php if ($tampil2->num_rows > 0) {
    // jika data benar
    while($row2 = $tampil2->fetch_assoc()){ ?>

      <?php


  $nominal=0;
  $sqlTampil4= "SELECT id, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_bk WHERE inquiri='withdraw' AND jenis_kas='1'";
  $tampil4 = $database->query($sqlTampil4);
?>
<?php if ($tampil2->num_rows > 0) {
    // jika data benar
    while($row4 = $tampil4->fetch_assoc()){ ?>

      <?php

 //
  $nominal=0;
  $sqlTampil5= "SELECT id, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_slot WHERE inquiri='withdraw' AND jenis_kas='1'";
  $tampil5 = $database->query($sqlTampil5);
?>
<?php if ($tampil5->num_rows > 0) {
    // jika data benar
    while($row5 = $tampil5->fetch_assoc()){ ?>

<?php

 //
  $nominal=0;
  $sqlTampil8= "SELECT id, jenis_kas, rekening, nominal, inquiri, create_date, SUM(nominal) AS nominal from game_dingdong WHERE inquiri='withdraw' AND jenis_kas='1'";
  $tampil8 = $database->query($sqlTampil8);
?>
<?php if ($tampil8->num_rows > 0) {
    // jika data benar
    while($row8 = $tampil8->fetch_assoc()){ ?>

                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-center">Jumlah kas kecil hari ini</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0" style="font-size:20px;"><?php echo @rupiah(($pendapatan = $row['nominal'] + $row7['nominal'] + $row3['nominal'] + $row6['nominal']) - ($row2['nominal'] + $row4['nominal'] + $row5['nominal'] + $row8['nominal'])); ?></h3>


                       
                   

                        <?php   }?>
<?php } else {
    // jika data salah
    "data kosong";
  }}}}}}}}}}}}}}} ?>
                      </div>
                    </div>

                </div>
              </div>
            </div>
          <div class="row">
            <div class="col-lg-7 grid-margin stretch-card">
 
                        </div>
                      </div>


              </div>
            </div>
          </div>
          </div>

                  </div>
                </div>
              
              </div>
            </div>
          </div>
      $query = "SELECT inquiry, SUM(nominal) FROM kas_besar GROUP BY inquiry"; 
   
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
  echo "Total ". $row['inquiry']. " = $". $row['SUM(nominal)'];
  echo "<br />";
}
?> 