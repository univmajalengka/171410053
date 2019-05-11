<?php
include 'koneksi.php';
$query ("UPDATE data_barang"
		SET 
		nm_barang='$_POST[nm_barang]',
		satuan='$_POST[satuan]'
		WHERE kd_barang='$_POST[no]'");
		$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data Barang Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_barang'>";
?>