<?php
include'koneksi.php';
$query=("INSERT INTO data_kategori (kd_kategori,nm_kategori)
			VALUES
			('$_POST[kd_kategori]',
			'$_POST[nm_kategori]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Kategori Berhasil Disimpan. ');</script>"
		echo "<meta http-equiv='refresh' content='1; url=?halaman=data_kategori'>";
?>