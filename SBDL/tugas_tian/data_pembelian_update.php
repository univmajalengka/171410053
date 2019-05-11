<?php
include 'koneksi.php';
$query ("UPDATE data_pembelian"
		SET 
		tgl_pembelian='$_POST[tgl_pembelian]',
		keterangan='$_POST[keterangan]',
		kd_supplier='$_POST[kd_supplier]'
		WHERE no_pembelian='$_POST[id]'");
		$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data Pembelian Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_pembelian'>";
?>