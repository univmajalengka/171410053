<h3 align="center">Tambah Data Penjualan</h3>
<form class="form-horizontal" method="post" action=?halaman=data_penjualan_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">no_penjualan : </label>
		<div class="col-sm-4">
		<input type="text" name="no_penjualan" class="form-control" placeholder="Masukan no_penjualan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">tgl_penjualan : </label>
		<div class="col-sm-4">
		<input type="text" name="tgl_penjualan" class="form-control" placeholder="Masukan tgl_penjualan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">pelanggan : </label>
		<div class="col-sm-4">
		<input type="text" name="pelanggan" class="form-control" placeholder="Masukan pelanggan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">keterangan : </label>
		<div class="col-sm-4">
		<input type="text" name="keterangan" class="form-control" placeholder="Masukan keterangan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">uang_bayar : </label>
		<div class="col-sm-4">
		<input type="text" name="uang_bayar" class="form-control" placeholder="Masukan uang_bayar" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
		<input type="submit" name="tambah data_penjualan" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_penjualan" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</for>