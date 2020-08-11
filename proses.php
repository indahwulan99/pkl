<?php
include 'koneksi.php';
$db = new database();

// CARI

    if($aksi == "cari")
    {
      $cari = ($_GET['cari']);
      header("location:dataadm.php");
		}
		

$aksi = $_GET['aksi'];
// CREATE DATA
if($aksi == "tambah")
{
$db->input(
  //industri
  $_POST['nib'], $_POST['namaind'], $_POST['namaproduk'], $_POST['tahun'], $_POST['pendthn'],  $_POST['inthn'], $_POST['pekerja'],  
  $_POST['alamatind'],
  //pemilik
  $_POST['nik'], $_POST['nama'], $_POST['email'], $_POST['alamat'], $_POST['sosmed'], $_POST['telp'],
  //kecamatan
  $_POST['inputkec']
);
  header("location:dataadm.php");
}


// DELETE DATA
if ($aksi == "delete") {
    $db->hps_ind($_GET['nib']);
    $db->hps_pm($_GET['nib']);
    header("location:dataadm.php");
  }

// EDIT DATA
if ($aksi =="edit")
{
  $db->edit(
    //industri
    $_POST['nib']
  );
    header("location:edit.php");
}

elseif ($aksi == "update")
{
    $db->update($_POST['nib'], 
      $_POST['nik'], 
      $_POST['nama'], 
      $_POST['namaind'],
      $_POST['namaproduk'],
      $_POST['tahun'],
      $_POST['pendthn'],
      $_POST['inthn'],
      $_POST['pekerja'],
      $_POST['alamatind'], 
      $_POST['email'], 
      $_POST['alamat'], 
      $_POST['sosmed'],
      $_POST['telp'],
      $_POST['inputkec']);
    header("location:dataadm.php");
}

?>