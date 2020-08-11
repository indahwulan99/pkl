<?php ob_start(); ?>
<html>
<head>
<title>Cetak PDF</title>
	
	<style>
		table {border-collapse: collapse; table-layout: fixed; width: 630px;}
		table td {word-wrap: break-word;width: 20%;}
	</style>
</head>

<body>
	<h1 style="text-align: center">Daftar Menu King Cafe</h1>
	<table border="1" width="100%">
		<tr>
			<th>ID</th>
			<th>Nama Menu</th>
			<th> Jenis </th>
			<th>Harga</th>
		</tr>
	<?php
	include "koneksi.php";
		
	$query = "SELECT * FROM menu";
		$sql = mysqli_query($db, $query);
		$row = mysqli_num_rows($sql);
		
	if($row > 0){
		while($data = mysqli_fetch_array($sql)){
			echo "<tr>";
			echo "<td>".$data['id_menu']."</td>";
			echo "<td>".$data['nama_menu']."</td>";
			echo "<td>".$data['jenis']."</td>";
			echo "<td>".$data['harga']."</td>";
			echo "</tr>";
			
		}
		}else{
		echo "<tr><td colspan='4'> Data Tidak ada</td></tr>";
	}
	?>
	</table>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf -> WriteHTML($html);
$pdf -> Output('Data Menu.pdf', 'D');
?>

