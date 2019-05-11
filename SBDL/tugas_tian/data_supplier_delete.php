<?php
include'koneksi.php';
$query=("DELETE FROM data_supplier
			WHERE kd_supplier='$_GET[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
			echo "<script>alert('Data Supplier Berhasil Di Hapus.');</script>";
			echo "<meta http-equiv='refresh' content='1; url=?halaman=data_supplier'>";
?>