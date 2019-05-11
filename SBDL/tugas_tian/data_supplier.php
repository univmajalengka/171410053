<?php
include("koneksi.php");
?>
<h3 align="center">Data Supplier</h3>
<a href="?halaman=data_supplier_tambah" class="btn btn-primary btn-sm">Tambah Data Supplier</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>kd_supplier</th>
		<th>nm_supplier</th>
		<th>alamat</th>
		<th>no_telepon</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_supplier");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[kd_supplier]";?></td>
		<td><?php echo"$r[nm_supplier]";?></td>
		<td><?php echo"$r[alamat]";?></td>
		<td><?php echo"$r[no_telepon]";?></td>
		<td align="center">
			<a href="?halaman=data_supplier_edit&id=<?php echo"$r[kd_supplier]";?>" title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a herf="?halaman=data_supplier_hapus&id=<?php echo"$r[kd_supplier]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		
	</tr>
<?php
$no++;
} ?>
</table>
</div>
