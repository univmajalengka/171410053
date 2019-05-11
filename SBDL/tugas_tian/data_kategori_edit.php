<?php
include"koneksi.php";
$query=("SELECT * FROM data_kategori WHERE kd_kategori='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error($koneksi));
$m = mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Kategori</h3>
<form class="form-horizontal" method="post" action="?halaman=barang_elektronik-columbus_up" enctype="multipart/from-data">
	<input type="hidden" name="id" value="<?php echo"$m[kd_kategori]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_kategori : </label>
		<div class="col-sm-4">
				<input type="text" name="kd_kategori" class="form-control" placeholder="Masukan kd_kategori" value="<?php echo"$m[kd_kategori]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">nm_kategori : </label>
		<div class="col-sm-4">
			<input type="text" name="nm_kategori" class="form-control" placeholder="Masukan nm_kategori" value="<?php echo"$m[nm_kategori]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_data_kategori" class="btn btn-sm btn-primary" value="Simpan">
			<a href="?halaman=data_kategori" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
