<?php
include'koneksi.php';
$query=("INSERT INTO data_penjualan (no_penjualan,tgl_penjualan,pelanggan,keterangan,uang_bayar)
			VALUES
			('$_POST[no_penjualan]',
			'$_POST[tgl_penjualan]',
			'$_POST[pelanggan]',
			'$_POST[keterangan]',
			'$_POST[uang_bayar]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Penjualan Berhasil Disimpan. ');</script>"
		echo "<meta http-equiv='refresh' content='1; url=?halaman=data_penjualan'>";
?>