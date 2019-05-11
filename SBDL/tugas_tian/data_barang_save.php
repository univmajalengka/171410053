<?php
include'koneksi.php';
$query=("INSERT INTO data_barang (kd_barang,nm_barang,satuan,keterangan,harga_beli,harga_jual,stok,kd_kategori)
			VALUES
			('$_POST[kd_barang]',
			'$_POST[nm_barang]',
			'$_POST[satuan]',
			'$_POST[keterangan]',
			'$_POST[harga_beli]',
			'$_POST[harga_jual]',
			'$_POST[stok]',
			'$_POST[kd_kategori]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Barang Berhasil Disimpan. ');</script>"
		echo "<meta http-equiv='refresh' content='1; url=?halaman=data_barang'>";
?>