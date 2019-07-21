<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "third_pro";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }

    $query = mysqli_query($connection,"SELECT id, inquiri,SUM(nominal) AS nominal  FROM bank_akun WHERE  inquiri='deposit' ORDER BY id DESC ");
    ?>
 
    
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nominal</th>
            <th>inquiri</th>
        </tr>
        
        <?php $nominal = 0; ?>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nominal"];?></td>
            <td><?php echo $data["inquiri"];?></td>
        </tr>
       <?php $nominal += $data['nominal'] ?>
      }
echo '<tr>
		<td colspan="2">TOTAL</td>
		<td><?php $nominal ?></td>
	 </tr>
        <tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>

?>