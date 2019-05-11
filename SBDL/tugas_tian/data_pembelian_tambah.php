<h3 align="center">Tambah Data Pembelian</h3>
<form class="form-horizontal" method="post" action=?halaman=data_pembelian_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">no_pembelian : </label>
		<div class="col-sm-4">
		<input type="text" name="no_pembelian" class="form-control" placeholder="Masukan no_pembelian" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">tgl_pembelian : </label>
		<div class="col-sm-4">
		<input type="text" name="tgl_pembelian" class="form-control" placeholder="Masukan tgl_pembelian" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">keterangan : </label>
		<div class="col-sm-4">
		<input type="text" name="keterangan" class="form-control" placeholder="Masukan keterangan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_supplier : </label>
		<div class="col-sm-4">
		<input type="text" name="kd_supplier" class="form-control" placeholder="Masukan kd_supplier" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah data_pembelian" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_pembelian" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>