-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2019 pada 06.21
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barang_elektronik_columbus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE IF NOT EXISTS `data_barang` (
  `kd_barang` char(5) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `harga_beli` int(10) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `kd_kategori` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`kd_barang`, `nm_barang`, `satuan`, `keterangan`, `harga_beli`, `harga_jual`, `stok`, `kd_kategori`) VALUES
('01', 'kulkas', '60 kg', 'baik', 6000000, 8000000, 100, '10'),
('02', 'blender', '20 kg', 'baik', 300000, 500000, 200, '20'),
('03', 'dispenser', '25 kg', 'baik', 500000, 700000, 300, '30'),
('04', 'rice cooker', '50 kg', 'baik', 700000, 900000, 400, '40'),
('05', 'mixer', '10 kg', 'baik', 300000, 500000, 500, '50'),
('06', 'televisi', '70 kg', 'baik', 600000, 800000, 600, '60'),
('07', 'mesin cuci', '100 kg', 'baik', 1000000, 3000000, 700, '70'),
('08', 'kipas angin', '80 kg', 'baik', 700000, 800000, 800, '80'),
('09', 'vacum cleaner', '90 kg', 'baik', 2000000, 4000000, 900, '90'),
('10', 'ac', '50 kg', 'baik', 3000000, 5000000, 950, '95');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kategori`
--

CREATE TABLE IF NOT EXISTS `data_kategori` (
  `kd_kategori` char(3) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kategori`
--

INSERT INTO `data_kategori` (`kd_kategori`, `nm_kategori`) VALUES
('10', 'listrik'),
('20', 'listrik'),
('30', 'listrik'),
('40', 'listrik'),
('50', 'listrik'),
('60', 'listrik'),
('70', 'listrik'),
('80', 'listrik'),
('90', 'listrik'),
('95', 'listrik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembelian`
--

CREATE TABLE IF NOT EXISTS `data_pembelian` (
  `no_pembelian` char(7) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kd_supplier` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pembelian`
--

INSERT INTO `data_pembelian` (`no_pembelian`, `tgl_pembelian`, `keterangan`, `kd_supplier`) VALUES
('05', '2019-03-13', 'baik', '11'),
('15', '2019-03-16', 'baik', '12'),
('25', '2019-03-24', 'baik', '13'),
('35', '2019-03-19', 'baik', '14'),
('45', '2019-03-25', 'baik', '15'),
('55', '2019-03-05', 'baik', '16'),
('65', '2019-03-28', 'baik', '17'),
('75', '2019-02-15', 'baik', '18'),
('85', '2019-02-19', 'baik', '19'),
('95', '2019-02-23', 'baik', '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembelian item`
--

CREATE TABLE IF NOT EXISTS `data_pembelian item` (
  `no_pembelian` char(7) NOT NULL,
  `kd_barang` char(5) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pembelian item`
--

INSERT INTO `data_pembelian item` (`no_pembelian`, `kd_barang`, `harga`, `jumlah`) VALUES
('05', '01', 300000, 250),
('15', '02', 400000, 251),
('25', '03', 500000, 252),
('35', '04', 600000, 253),
('45', '05', 700000, 254),
('55', '06', 800000, 255),
('65', '07', 900000, 256),
('75', '08', 1000000, 257),
('85', '09', 2000000, 258),
('95', '10', 3000000, 259);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penjualan`
--

CREATE TABLE IF NOT EXISTS `data_penjualan` (
  `no_penjualan` char(7) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `pelanggan` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `uang_bayar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penjualan`
--

INSERT INTO `data_penjualan` (`no_penjualan`, `tgl_penjualan`, `pelanggan`, `keterangan`, `uang_bayar`) VALUES
('10', '2019-03-13', 'baik', 'baik', 300000),
('11', '2019-03-16', 'baik', 'baik', 400000),
('12', '2019-03-14', 'baik', 'baik', 500000),
('13', '2019-03-20', 'baik', 'baik', 600000),
('14', '2019-03-25', 'baik', 'baik', 700000),
('15', '2019-03-28', 'baik', 'baik', 800000),
('16', '2019-03-05', 'baik', 'baik', 900000),
('17', '2019-03-10', 'baik', 'baik', 1000000),
('18', '2019-03-18', 'baik', 'baik', 2000000),
('19', '2019-03-03', 'baik', 'baik', 3000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penjualan item`
--

CREATE TABLE IF NOT EXISTS `data_penjualan item` (
  `no_penjualan` char(7) NOT NULL,
  `kd_barang` char(5) NOT NULL,
  `harga` int(12) NOT NULL,
  `jumlah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penjualan item`
--

INSERT INTO `data_penjualan item` (`no_penjualan`, `kd_barang`, `harga`, `jumlah`) VALUES
('10', '01', 300000, 100),
('11', '02', 400000, 200),
('12', '03', 500000, 300),
('13', '04', 600000, 400),
('14', '05', 700000, 500),
('15', '06', 800000, 600),
('16', '07', 900000, 700),
('17', '08', 1000000, 800),
('18', '09', 2000000, 900),
('19', '10', 3000000, 950);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_supplier`
--

CREATE TABLE IF NOT EXISTS `data_supplier` (
  `kd_supplier` char(4) NOT NULL,
  `nm_supplier` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_supplier`
--

INSERT INTO `data_supplier` (`kd_supplier`, `nm_supplier`, `alamat`, `no_telepon`) VALUES
('11', 'ananda', 'panyingkiran', '085219345678'),
('12', 'bilqis', 'dawuan', '085895256012'),
('13', 'cindy', 'jatiwangi', '085764234892'),
('14', 'dini', 'palasah', '085765981254'),
('15', 'euis', 'kertajati', '085316980257'),
('16', 'fanda', 'majalengka', '085564298053'),
('17', 'gina', 'sumber jaya', '085327903526'),
('18', 'herlina', 'rajagaluh', '085387256078'),
('19', 'intan', 'ligung', '085945372541'),
('20', 'lia', 'kasokandel', '085219345675');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
 ADD PRIMARY KEY (`kd_barang`), ADD UNIQUE KEY `kd_kategori` (`kd_kategori`);

--
-- Indexes for table `data_kategori`
--
ALTER TABLE `data_kategori`
 ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `data_pembelian`
--
ALTER TABLE `data_pembelian`
 ADD PRIMARY KEY (`no_pembelian`), ADD UNIQUE KEY `kd_supplier` (`kd_supplier`);

--
-- Indexes for table `data_pembelian item`
--
ALTER TABLE `data_pembelian item`
 ADD UNIQUE KEY `no_pembelian` (`no_pembelian`,`kd_barang`);

--
-- Indexes for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
 ADD PRIMARY KEY (`no_penjualan`);

--
-- Indexes for table `data_penjualan item`
--
ALTER TABLE `data_penjualan item`
 ADD UNIQUE KEY `no_penjualan` (`no_penjualan`,`kd_barang`);

--
-- Indexes for table `data_supplier`
--
ALTER TABLE `data_supplier`
 ADD PRIMARY KEY (`kd_supplier`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
ADD CONSTRAINT `data_barang_ibfk_1` FOREIGN KEY (`kd_kategori`) REFERENCES `data_kategori` (`kd_kategori`);

--
-- Ketidakleluasaan untuk tabel `data_pembelian`
--
ALTER TABLE `data_pembelian`
ADD CONSTRAINT `data_pembelian_ibfk_1` FOREIGN KEY (`kd_supplier`) REFERENCES `data_supplier` (`kd_supplier`);

--
-- Ketidakleluasaan untuk tabel `data_pembelian item`
--
ALTER TABLE `data_pembelian item`
ADD CONSTRAINT `data_pembelian item_ibfk_1` FOREIGN KEY (`no_pembelian`) REFERENCES `data_pembelian` (`no_pembelian`);

--
-- Ketidakleluasaan untuk tabel `data_penjualan item`
--
ALTER TABLE `data_penjualan item`
ADD CONSTRAINT `data_penjualan item_ibfk_1` FOREIGN KEY (`no_penjualan`) REFERENCES `data_penjualan` (`no_penjualan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
