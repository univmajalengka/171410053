<?php
include"koneksi.php";
$query=("SELECT * FROM data_barang WHERE kd_barang='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error($koneksi));
$m = mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Barang</h3>
<form class="form-horizontal" method="post" action="?halaman=barang_elektronik-columbus_up" enctype="multipart/from-data">
	<input type="hidden" name="id" value="<?php echo"$m[kd_barang]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_barang : </label>
		<div class="col-sm-4">
				<input type="text" name="kd_barang" class="form-control" placeholder="Masukan kd_barang" value="<?php echo"$m[kd_barang]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">nm_barang : </label>
		<div class="col-sm-4">
			<input type="text" name="nm_barang" class="form-control" placeholder="Masukan nm_barang" value="<?php echo"$m[nm_barang]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">satuan : </label>
		<div class="col-sm-4">
			<input type="text" name="satuan" class="form-control" placeholder="Masukan satuan" value="<?php echo"$m[satuan]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">keterangan : </label>
		<div class="col-sm-4">
			<input type="text" name="keterangan" class="form-control" placeholder="Masukan keterangan" value="<?php echo"$m[keterangan]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">harga_beli : </label>
		<div class="col-sm-4">
			<input type="text" name="harga_beli" class="form-control" placeholder="Masukan harga_beli" value="<?php echo"$m[harga_beli]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">harga_jual : </label>
		<div class="col-sm-4">
			<input type="text" name="harga_jual" class="form-control" placeholder="Masukan harga_jual" value="<?php echo"$m[harga_jual]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">stok : </label>
		<div class="col-sm-4">
			<input type="text" name="stok" class="form-control" placeholder="Masukan stok" value="<?php echo"$m[stok]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_kategori : </label>
		<div class="col-sm-4">
			<input type="text" name="kd_kategori" class="form-control" placeholder="Masukan kd_kategori" value="<?php echo"$m[kd_kategori]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_data_barang" class="btn btn-sm btn-primary" value="Simpan">
			<a href="?halaman=data_barang" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
