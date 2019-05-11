<h3 align="center">Tambah Data Barang</h3>
<form class="form-horizontal" method="post" action=?halaman=kd_barang_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_barang : </label>
		<div class="col-sm-4">
		<input type="text" name="kd_barang" class="form-control" placeholder="Masukan Kd_barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">nm_barang : </label>
		<div class="col-sm-4">
		<input type="text" name="nm_barang" class="form-control" placeholder="Masukan Nm_barang" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">satuan : </label>
		<div class="col-sm-4">
		<input type="text" name="satuan" class="form-control" placeholder="Masukan Satuan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">keterangan : </label>
		<div class="col-sm-4">
		<input type="text" name="keterangan" class="form-control" placeholder="Masukan Keterangan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">harga_beli : </label>
		<div class="col-sm-4">
		<input type="text" name="harga_beli" class="form-control" placeholder="Masukan harga_beli" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">harga_jual : </label>
		<div class="col-sm-4">
		<input type="text" name="harga_jual" class="form-control" placeholder="Masukan harga_jual" required>
		</div>
	</div><div class="form-group">
		<label class="col-sm-3 control-label">stok : </label>
		<div class="col-sm-4">
		<input type="text" name="stok" class="form-control" placeholder="Masukan stok" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_kategori : </label>
		<div class="col-sm-4">
		<input type="text" name="kd_kategori" class="form-control" placeholder="Masukan kd-kategori" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah data_barang" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=kd_barang" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>