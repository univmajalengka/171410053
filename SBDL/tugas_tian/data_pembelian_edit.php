<?php
include"koneksi.php";
$query=("SELECT * FROM data_pembelian WHERE no_pembelian='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error($koneksi));
$m = mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Pembelian</h3>
<form class="form-horizontal" method="post" action="?halaman=barang_elektronik-columbus_up" enctype="multipart/from-data">
	<input type="hidden" name="id" value="<?php echo"$m[no_pembelian]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">no_pembelian : </label>
		<div class="col-sm-4">
			<input type="text" name="no_pembelian" class="form-control" placeholder="Masukan no_pembelian" value="<?php echo"$m[no_pembelian]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">tgl_pembelian : </label>
		<div class="col-sm-4">
			<input type="text" name="tgl_pembelian" class="form-control" placeholder="Masukan tgl_pembelian" value="<?php echo"$m[tgl_pembelian]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">keterangan : </label>
		<div class="col-sm-4">
				<input type="text" name="keterangan" class="form-control" placeholder="Masukan keterangan" value="<?php echo"$m[keterangan]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_supplier : </label>
		<div class="col-sm-4">
			<input type="text" name="kd_supplier" class="form-control" placeholder="Masukan kd_supplier" value="<?php echo"$m[kd_supplier]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_data_pembelian" class="btn btn-sm btn-primary" value="Simpan">
			<a href="?halaman=data_pembelian" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
