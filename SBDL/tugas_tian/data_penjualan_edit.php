<?php
include"koneksi.php";
$query=("SELECT * FROM data_penjualan WHERE no_penjualan='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error($koneksi));
$m = mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Penjualan</h3>
<form class="form-horizontal" method="post" action="?halaman=barang_elektronik-columbus_up" enctype="multipart/from-data">
	<input type="hidden" name="id" value="<?php echo"$m[kd_barang]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">no_penjualan : </label>
		<div class="col-sm-4">
				<input type="text" name="no_penjualan" class="form-control" placeholder="Masukan no_penjualan" value="<?php echo"$m[no_penjualan]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">tgl_penjualan : </label>
		<div class="col-sm-4">
			<input type="text" name="tgl_penjualan" class="form-control" placeholder="Masukan tgl_penjualan" value="<?php echo"$m[tgl_penjualan]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">pelanggan : </label>
		<div class="col-sm-4">
			<input type="text" name="pelanggan" class="form-control" placeholder="Masukan pelanggan" value="<?php echo"$m[pelanggan]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">keterangan : </label>
		<div class="col-sm-4">
			<input type="text" name="keterangan" class="form-control" placeholder="Masukan keterangan" value="<?php echo"$m[keterangan]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">uang_bayar : </label>
		<div class="col-sm-4">
			<input type="text" name="uang_bayar" class="form-control" placeholder="Masukan uang_bayar" value="<?php echo"$m[uang_bayar]";?>" required />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_data_penjualan" class="btn btn-sm btn-primary" value="Simpan">
			<a href="?halaman=data_penjualan" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
