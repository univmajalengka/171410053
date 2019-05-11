<?php
include 'koneksi.php';
$query ("UPDATE data_kategori"
		SET 
		nm_kategori='$_POST[nm_kategori]',
		kd_kategori='$_POST[kd_kategori]'
		WHERE kd_kategori='$_POST[id]'");
		$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data kategori Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_kategori'>";
?>