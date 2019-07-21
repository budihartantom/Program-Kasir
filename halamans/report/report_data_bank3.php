<?php
$sql = 'SELECT id, inquiri, SUM(nominal) AS nominal 
		FROM `bank_akun` 
		GROUP BY id';
$stmt = $pdo->prepare($sql);
$stmt->execute();

echo '<table>
		<thead>
			<tr>
				<td>id</td>
				<td>inquiri</td>
				<td>total</td>
			</tr>
		</thead>
		<tbody>';
$nominal = 0;
while ($row = $stmt->fetch())
{
	echo '<tr>
			<td>' . $row['id_pelanggan'] . '</td>
			<td>' . $row['id_produk'] . '</td>
			<td>' . number_format($row['nominal'], 0, ',', '.') . '</td>
		</tr>';
	$nominal += $row['nominal'];
}
echo '<tr>
		<td colspan="2">TOTAL</td>
		<td>' . number_format($nominal, 0, ',', '.') . '</td>
	 </tr>
	</tbody>
</table>';