<?php
include("koneksi.php");
?>
<h3 align="center">Data Pembelian</h3>
<a href="?halaman=data_pembelian_tambah" class="btn btn-primary btn-sm">Tambah Data Pembelian</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>no_pembelian</th>
		<th>tgl_pembelian</th>
		<th>keterangan</th>
		<th>kd_supplier</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_pembelian");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[no_pembelian]";?></td>
		<td><?php echo"$r[tgl_pembelian]";?></td>
		<td><?php echo"$r[keterangan]";?></td>
		<td><?php echo"$r[kd_supplier]";?></td>
		<td align="center">
			<a href="?halaman=data_pembelian_edit&id=<?php echo"$r[no_pembelian]";?>" title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a herf="?halaman=data_pembelian_hapus&id=<?php echo"$r[no_pembelian]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		
	</tr>
<?php
$no++;
} ?>
</table>
</div>
