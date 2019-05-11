<h3 align="center">Tambah Data_Supplier</h3>
<form class="form-horizontal" method="post" action=?halaman=data_supplier_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_supplier : </label>
		<div class="col-sm-4">
		<input type="text" name="kd_supplier" class="form-control" placeholder="Masukan kd_supplier" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">nm_supplier : </label>
		<div class="col-sm-4">
		<input type="text" name="nm_supplier" class="form-control" placeholder="Masukan nm_supplier" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">alamat : </label>
		<div class="col-sm-4">
		<input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">no_telepon : </label>
		<div class="col-sm-4">
		<input type="text" name="no_telepon" class="form-control" placeholder="Masukan no_telepon" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah data_supplier" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_supplier" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>