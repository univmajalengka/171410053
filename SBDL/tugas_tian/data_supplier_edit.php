<?php
include"koneksi.php";
$query=("SELECT * FROM data_supplier WHERE kd_supplier='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error($koneksi));
$m = mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Supplier</h3>
<form class="form-horizontal" method="post" action="?halaman=barang_elektronik-columbus_up" enctype="multipart/from-data">
	<input type="hidden" name="id" value="<?php echo"$m[kd_barang]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_supplier : </label>
		<div class="col-sm-4">
				<input type="text" name="kd_supplier" class="form-control" placeholder="Masukan kd_supplier" value="<?php echo"$m[kd_supplier]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">nm_supplier : </label>
		<div class="col-sm-4">
			<input type="text" name="nm_supplier" class="form-control" placeholder="Masukan nm_supplier" value="<?php echo"$m[nm_supplier]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">alamat : </label>
		<div class="col-sm-4">
			<input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" value="<?php echo"$m[alamat]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">no_telepon : </label>
		<div class="col-sm-4">
			<input type="text" name="no_telepon" class="form-control" placeholder="Masukan no_telepon" value="<?php echo"$m[no_telepon]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_data_supplier" class="btn btn-sm btn-primary" value="Simpan">
			<a href="?halaman=data_supplier" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
