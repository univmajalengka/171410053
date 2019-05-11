<?php
include'koneksi.php';
$query=("INSERT INTO data_pembelian (no_pembelian,tgl_pembelian,keterangan,kd_supplier)
			VALUES
			('$_POST[no_pembelian]',
			'$_POST[tgl_pembelian]',
			'$_POST[keterangan]',
			'$_POST[kd_supplier]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Pembelian Berhasil Disimpan. ');</script>"
		echo "<meta http-equiv='refresh' content='1; url=?halaman=data_pembelian'>";
?>