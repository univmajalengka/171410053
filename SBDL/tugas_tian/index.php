<!DOCTYPE html>
<html>
<head>
	<title>My Web | Barang Elektronik Columbus</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
		<nav class="navbar navbar-default navabar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Informatika</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="?halaman=default">Home</a></li>
					<li><a href="?halaman=data_barang">Data Barang</a></li>
					<li><a href="?halaman=data_kategori">Data Kategori</a></li>
					<li><a href="?halaman=data_pembelian">Data Pembelian</a></li>
					<li><a href="?halaman=data_penjualan">Data Penjualan</a></li>
					<li><a href="?halaman=data_supplier">Data Supplier</a></li>
				</ul>
			</div>
		</nav>
			<div class="container">

		<div>
			<div class="jumbotron">
			<?php
			include("halaman.php");
			?>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Copyright &copy; Tian Kusuma Dewi</h3>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
