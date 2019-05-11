<?php
include'koneksi.php';
$query=("INSERT INTO data_supplier (kd_supplier,nm_supplier,alamat,no_telepon)
			VALUES
			('$_POST[kd_supplier]',
			'$_POST[nm_supplier]',
			'$_POST[alamat]',
			'$_POST[no_telepon]')");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
		echo "<script>alert('Data Supplier Berhasil Disimpan. ');</script>"
		echo "<meta http-equiv='refresh' content='1; url=?halaman=data_supplier'>";
?>