<?php
include 'koneksi.php';
$query ("UPDATE data_penjualan"
		SET 
		tgl_penjualan='$_POST[tgl_penjualan]',
		pelanggan='$_POST[pelanggan]',
		keterangan='$_POST[keterangan]',
		uang_bayar='$_POST[uang_bayar]',
		WHERE no_penjualan='$_POST[id]'");
		$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
	echo "<script>alert('Data Penjualan Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_penjualan'>";
?>