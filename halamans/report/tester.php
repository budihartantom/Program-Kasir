<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
   <script type="text/javascript" src="DataTables/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="DataTables/media/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="DataTables/media/css/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/media/css/jquery.dataTables.css">
</head>
<body>
<table id="example" border="1" class="display" style="width:100%">
     <thead style="background-color:#122631;color:#c7fcff;">
    <tr>
        <th>No</th>
        <th>Nama Penghutang</th>
        <th>Withdraw</th>
        <th>Deposit</th>
        <th>Saldo</th>
    </tr>           
        </thead>
        <tbody>

    <?php
$database = new mysqli('localhost','root','','third_pro');
  if($database->connect_errno){
    echo"Database Tidak Dapat Terhubung";
  }

 function format_ribuan ($nilai){
  return number_format ($nilai, 0, ',', '.');
}

    $no=1;
    $data1= mysqli_query($database,"SELECT * from penghutang");
    while($d1=mysqli_fetch_array($data1)){
        $no++;
        $id_penghutang=$d1['id_penghutang'];
        $nominal1=$d1['nominal1'];
        $nominal=$d1['nominal'];
        $saldo=$d1['saldo'];
        ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $id_penghutang; ?></td>
        <td><?php echo @rupiah($nominal1); ?></td>
        <td><?php echo @rupiah($nominal); ?></td>
        <td><?php echo @rupiah($saldo); ?></td>
    </tr>
        <?php
        }
    ?>
    <tr>
        <td>Jumlah Total</td>
        <td>
        <?php
        $qry_id_penghutang=mysqli_query($database,"SELECT id_penghutang FROM penghutang");
        $data_penghutang=mysqli_fetch_array($qry_id_penghutang);
        $nama_pengutang=$data_penghutang[0];
        echo $nama_pengutang;
        ?> 
        </td>
        <td>
        <?php
        $qry_jumlah_a=mysqli_query($database,"SELECT SUM(nominal1) FROM penghutang where id_penghutang='$id_penghutang'");
        $data_a=mysqli_fetch_array($qry_jumlah_a);
        $jumlah_nilai_a=$data_a[0];
        echo @rupiah($jumlah_nilai_a);
        ?>
        </td>
        <td>
        <?php
        $qry_jumlah_b=mysqli_query($database,"SELECT SUM(nominal) FROM penghutang where id_penghutang='$id_penghutang'");
        $data_b=mysqli_fetch_array($qry_jumlah_b);
        $jumlah_nilai_b=$data_b[0];
        echo @rupiah($jumlah_nilai_b);
        ?>
        </td>
        <td>
        <?php
        $qry_jumlah_nilai=mysqli_query($database,"SELECT SUM(saldo) FROM penghutang where id_penghutang='$id_penghutang'");
        $data_nilai=mysqli_fetch_array($qry_jumlah_nilai);
        $jumlah_nilai_total=$data_nilai[0];
        echo @rupiah($jumlah_nilai_total);
        ?>
        </td>
    </tr>
</table>
<?php
      function rupiah($angka){
      $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
      return $hasil_rupiah;
}?>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>
</html>