<?php
include'koneksi.php';
$query=("DELETE FROM data_penjualan
			WHERE no_penjualan='$_GET[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
			echo "<script>alert('Data Penjualan Berhasil Di Hapus.');</script>";
			echo "<meta http-equiv='refresh' content='1; url=?halaman=data_penjualan'>";
?>