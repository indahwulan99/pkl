<!doctype html>
<html>
<head>
<title>Untitled Document</title>
</head>

<body>
	<header>
		<h3>DATA INDUSTRI KABUPATEN KEDIRI</h3>
	</header>
    <table class="table table-striped">
					<thead class="thead">
						<tr>
							<th scope="col">NIB</th>
							<th scope="col">Nama Pemilik</th>
							<th scope="col">Nama Industri</th>
							<th scope="col">Nama Produk</th>
							<th scope="col">Tahun</th>
							<th scope="col">Skala Pendapatan</th>
							<th scope="col">Skala Investasi</th>
							<th scope="col">Tenaga Kerja</th>
							<th scope="col">Alamat Industri</th>
							<th scope="col">Sosial Media</th>
							<th scope="col">Telepon</th>
							<th scope="col">Kecamatan</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php
                        include 'koneksi.php';
						foreach ($db->tampil_data($_POST['data']) as $data) { ?>
							<tr>
								<td> <?php echo $data['nib'];?> </td>
								<td> <?php echo $data['nama'];?> </td>
								<td> <?php echo $data['namaind'];?> </td>
								<td> <?php echo $data['namaproduk'];?> </td>
								<td> <?php echo $data['tahun'];?> </td>
								<td> <?php echo $data['pendthn'];?> </td>
								<td> <?php 
								if ($data['pekerja'] == '>=20' && $data['inthn']== '15.000.000.000' ) {
									echo "Besar";
								} else if ($data['pekerja'] == '>=20' && $data['inthn'] == '1.000.000.000 - 15.000.000.000' ){
									echo "Menengah";
								}else if ($data['pekerja'] == '>=20' && $data['inthn'] == '1.000.000.000' ){
									echo "Menengah";
								}else if ($data['pekerja'] == '1-19' && $data['inthn'] == '15.000.000.000' ) {
									echo "Menengah";
								} else if ($data['pekerja'] == '1-19' && $data['inthn'] == '1.000.000.000 - 15.000.000.000' ){
									echo "Menengah";
								}else if ($data['pekerja'] == '1-19' && $data['inthn'] == '1.000.000.000' ){
									echo "Kecil";
								}
								?> </td>
								<td> <?php echo $data['pekerja'];?> </td>
								<td> <?php echo $data['alamatind'];?> </td>
								<td> <?php echo $data['sosmed'];?> </td>
								<td> <?php echo $data['telp'];?> </td>
								<td> <?php echo $data['namakec'];?> </td>
						<?php } ?>
					</tbody>
				</table>
</body>
</html>