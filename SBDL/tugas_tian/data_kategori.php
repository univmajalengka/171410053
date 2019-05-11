<?php
include("koneksi.php");
?>
<h3 align="center">Data Kategori</h3>
<a href="?halaman=data_kategori_tambah" class="btn btn-primary btn-sm">Tambah Data Kategori</a><br /><br />
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr>
		<th>kd_kategori</th>
		<th>nm_kategori</th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_kategori");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[kd_kategori]";?></td>
		<td><?php echo"$r[nm_kategori]";?></td>
		<td align="center">
			<a href="?halaman=data_kategori_edit&id=<?php echo"$r[kd_kategori]";?>" title="Edit Data"
			class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a herf="?halaman=data_kategori_hapus&id=<?php echo"$r[kd_kategori]";?>" title="Hapus Data"
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		
	</tr>
<?php
$no++;
} ?>
</table>
</div>
