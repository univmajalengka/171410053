<?php
include 'koneksi.php';
$query=("DELETE FROM data_barang WHERE kd_barang='$_GET[kd_barang]'");
$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Barang Berhasil Di Hapus.');</script>";
		echo "<meta http-equive='refresh' content='1; url=?halaman=data_barang'>";
?>