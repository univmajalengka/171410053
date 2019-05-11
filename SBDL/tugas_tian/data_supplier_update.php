<?php
include 'koneksi.php';
$query ("UPDATE data_supplier"
		SET 
		nm_supplier='$_POST[nm_supplier]',
		alamat='$_POST[alamat]',
		no_telepon='$_POST[no_telepon]',
		WHERE kd_supplier='$_POST[id]'");
		$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data Supplier Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_supplier'>";
?>