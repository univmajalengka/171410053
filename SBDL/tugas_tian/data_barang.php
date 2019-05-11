<?php
include("koneksi.php");
?>
<h3 align="center">Data Barang</h3>
<a href="?halaman=data_barang_tambah" class="btn btn-primary btn-sm">Tambah Data Barang</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>kd_barang</th>
		<th>nm_barang</th>
		<th>satuan</th>
		<th>keterangan</th>
		<th>harga_beli</th>
		<th>harga_jual</th>
		<th>stok</th>
		<th>kd_kategori</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_barang");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[kd_barang]";?></td>
		<td><?php echo"$r[nm_barang]";?></td>
		<td><?php echo"$r[satuan]";?></td>
		<td><?php echo"$r[keterangan]";?></td>
		<td><?php echo"$r[harga_beli]";?></td>
		<td><?php echo"$r[harga_jual]";?></td>
		<td><?php echo"$r[stok]";?></td>
		<td><?php echo"$r[kd_kategori]";?></td>
		<td align="center">
			<a href="?halaman=data_barang_edit&id=<?php echo"$r[kd_barang]";?>" title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a herf="?halaman=data_barang_hapus&id=<?php echo"$r[kd_barang]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		
	</tr>
<?php
$no++;
} ?>
</table>
</div>
