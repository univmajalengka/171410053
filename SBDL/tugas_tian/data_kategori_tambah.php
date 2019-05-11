<h3 align="center">Tambah Data Kategori</h3>
<form class="form-horizontal" method="post" action=?halaman=data_kategori_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">kd_kategori : </label>
		<div class="col-sm-4">
		<input type="text" name="kd_kategori" class="form-control" placeholder="Masukan kd_kategori" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">nm_kategori : </label>
		<div class="col-sm-4">
		<input type="text" name="nm_kategori" class="form-control" placeholder="Masukan nm_kategori" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah data_kategori" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_kategori" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>