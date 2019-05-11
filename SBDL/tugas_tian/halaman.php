<?php
$halaman=(isset($_GET['halaman'])) ?$_GET['halaman']:"default";
switch($halaman){
	case'data_barang':include"data_barang.php";break;
	case'data_barang_edit':include"data_barang_edit.php";break;
	case'data_barang_hapus':include"data_barang_hapus.php";break;
	case'data_barang_tambah':include"data_barang_tambah.php";break;
	case'data_barang_ad':include"data_barang_save.php";break;
	case'data_barang_up':include"data_barang_update.php";break;
	case'data_barang_delete':include"data_barang_delete.php";break;
	
	case'data_kategori':include"data_kategori.php";break;
	case'data_kategori_edit':include"data_kategori_edit.php";break;
	case'data_kategori_hapus':include"data_kategori_hapus.php";break;
	case'data_kategori_tambah':include"data_kategori_tambah.php";break;
	case'data_kategori_ad':include"data_kategori_save.php";break;
	case'data_kategori_up':include"data_kategori_update.php";break;
	case'data_kategori_delete':include"data_kategori_delete.php";break;
	
	case'data_pembelian':include"data_pembelian.php";break;
	case'data_pembelian_edit':include"data_pembelian_edit.php";break;
	case'data_pembelian_hapus':include"data_pembelian_hapus.php";break;
	case'data_pembelian_tambah':include"data_pembelian_tambah.php";break;
	case'data_pembelian_ad':include"data_pembelian_save.php";break;
	case'data_pembelian_up':include"data_pembelian_update.php";break;
	case'data_pembelian_delete':include"data_pembelian_delete.php";break;
	
	case'data_penjualan':include"data_penjualan.php";break;
	case'data_penjualan_edit':include"data_penjualan_edit.php";break;
	case'data_penjualan_hapus':include"data_penjualan_hapus.php";break;
	case'data_penjualan_tambah':include"data_penjualan_tambah.php";break;
	case'data_penjualan_ad':include"data_penjualan_save.php";break;
	case'data_penjualan_up':include"data_penjualan_update.php";break;
	case'data_penjualan_delete':include"data_penjualan_delete.php";break;
	
	case'data_supplier':include"data_supplier.php";break;
	case'data_supplier_edit':include"data_supplier_edit.php";break;
	case'data_supplier_hapus':include"data_supplier_hapus.php";break;
	case'data_supplier_tambah':include"data_supplier_tambah.php";break;
	case'data_supplier_ad':include"data_supplier_save.php";break;
	case'data_supplier_up':include"data_supplier_update.php";break;
	case'data_supplier_delete':include"data_supplier_delete.php";break;
	case'default':include"home.php";break;
}
?>