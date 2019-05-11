<?php
include("koneksi.php");
?>
<h3 align="center">Data Penjualan</h3>
<a href="?halaman=data_penjualan_tambah" class="btn btn-primary btn-sm">Tambah Data Penjualan</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>no_penjualan</th>
		<th>tgl_penjualan</th>
		<th>pelanggan</th>
		<th>keterangan</th>
		<th>uang_bayar</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_penjualan");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[no_penjualan]";?></td>
		<td><?php echo"$r[tgl_penjualan]";?></td>
		<td><?php echo"$r[pelanggan]";?></td>
		<td><?php echo"$r[keterangan]";?></td>
		<td><?php echo"$r[uang_bayar]";?></td>
		<td align="center">
			<a href="?halaman=data_penjualan_edit&id=<?php echo"$r[no_penjualan]";?>" title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a herf="?halaman=data_penjualan_hapus&id=<?php echo"$r[no_penjulaan]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		
	</tr>
<?php
$no++;
} ?>
</table>
</div>
