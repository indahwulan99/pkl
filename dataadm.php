<!doctype html>
<?php 
include 'koneksi.php';
$db = new database();

?>

<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="logo.jpg">
	<title>DINAS PERDAGANGAN KABUPATEN KEDIRI</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #6a99ff">
		<a class="navbar-brand" href="admin.php">DINAS PERDAGANGAN KABUPATEN KEDIRI</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="dataadm.php">DATA INDUSTRI</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="kelola.php">KELOLA DATA</a>
				</li>
			</ul>

		</div>
		<!-- <div class="btn-group dropleft mr-2">
			<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
				<img src="cr.png" width="20">
			</button>
			<div class="dropdown-menu bg-light">
				<form class="form-inline">
					<input class="form-control mr-sm-1" type="search" placeholder="Cari disini" aria-label="Search">
				</form>
			</div>	
		</div> -->
		<div class="btn-group dropleft mr-2">
			<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
				<img src="adm.png" width="20">
			</button>
			<div class="dropdown-menu" aria-labelledby="DropdownMenuLink">
				<a class="dropdown-item" href="register.php">REGISTER</a>
				<a class="dropdown-item" href="logout.php">LOG OUT</a>

			</div>	
		</div>	</nav><br>

		<div class="jumbotron pr-5 pl-10" style="background-color: #ffffff">
			<center><h3>DATA INDUSTRI KABUPATEN KEDIRI</h3></center><br>

			<div class="container">
				<form class="form-inline my-2 my-lg-0" action="dataadm.php" method="POST">
					<input class="form-control mr-sm-2" type="search" name="data" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
				</form>	<br>
				 <?php 
				if (isset($_GET['data'])==NULL) {
					$_POST['data']='kosong';
				}
				if (isset($_GET['data'])!=NULL) {
				}
				if (isset($_POST['cari'])) {
					echo $_POST['data'];
				}
				?>

					<!-- <p><a href="export.php"><button>Export ke Excel</button></a></p>
					<p><a href="pdf.php"><button>Export Ke PDF</button></a></p> -->

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
								<td>
									<p><a href="edit.php?nib=<?php echo $data['nib'] ?>&aksi=edit" class="btn btn-info"><img src="edit.png" width="20"></a></p>
									<p><a href="proses.php?nib=<?php echo $data['nib'] ?>&aksi=delete" class="btn btn-danger" ><img src="hps.png" width="15"></a></p>
								</tr>
							</td>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>




		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>
