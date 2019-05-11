<?php
include'koneksi.php';
$query=("DELETE FROM data_kategori
			WHERE kd_kategori='$_GET[kd_kategori]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
			echo "<script>alert('Data Kategori Berhasil Di Hapus.');</script>";
			echo "<meta http-equiv='refresh' content='1; url=?halaman=data_kategori'>";
?>