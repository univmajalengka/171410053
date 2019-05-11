<?php
include'koneksi.php';
$query=("DELETE FROM data_pembelian
			WHERE no_pembelian='$_GET[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
			echo "<script>alert('Data Pembelian Berhasil Di Hapus.');</script>";
			echo "<meta http-equiv='refresh' content='1; url=?halaman=data_pembelian'>";
?>