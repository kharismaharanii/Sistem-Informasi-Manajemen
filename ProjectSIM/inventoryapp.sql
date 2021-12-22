-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2021 pada 06.08
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventoryapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `nama`, `jeniskelamin`, `telp`, `alamat`) VALUES
(1, 'Reza Kurnia Setiawan', 'Laki Laki', '085850728067', 'Dsn. Jatirejo Ds. Pulorejo Kec. Tembelang Kab. Jombang'),
(2, 'Indriana ', 'Perempuan', '085758744110', 'Bareng Jombang'),
(4, 'Kharisma', 'Perempuan', '0854548784521', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `gaji` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `jeniskelamin`, `gaji`, `telepon`) VALUES
(9, 'Zayn Malik', 'Jalan Jalan', 'Laki-laki', '2000000', '08976544278');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `debit` varchar(255) NOT NULL,
  `kredit` varchar(255) NOT NULL,
  `saldo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id`, `tanggal`, `keterangan`, `debit`, `kredit`, `saldo`) VALUES
(4, '2021-04-27', 'Saldo Awal', '2000000', '', '2000000'),
(9, '2021-04-28', 'infokuisnetwork11', '1000000', '', '3000000'),
(10, '2021-04-30', 'Beli barang', '', '500000', '2500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persediaanbarang`
--

CREATE TABLE `persediaanbarang` (
  `id` int(3) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `jumlahbarang` varchar(255) NOT NULL,
  `kodebarang` varchar(255) NOT NULL,
  `hargasatuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `persediaanbarang`
--

INSERT INTO `persediaanbarang` (`id`, `namabarang`, `jumlahbarang`, `kodebarang`, `hargasatuan`) VALUES
(1, 'Pensill', '100 buah', 'B001', '2500'),
(2, 'Buku Tulis ', '58 buah', 'B002', '4000'),
(8, 'Spidol', '20 buah', 'B003', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `namatoko` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `namatoko`, `telp`, `alamat`, `deskripsi`) VALUES
(1, 'Sumber Makmur', '085123456789', 'Mbareng Klelep', 'Jual beli barang haram'),
(6, 'Toko Sinar', '0854548784521', 'Luar Negeri', 'Lombok Tomat Kecap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hakakses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `hakakses`) VALUES
(1, 'Reza Kurnia', 'rezakurniasetiawan@gmail.com', 'rezaadmin', '21232f297a57a5a743894a0e4a801fc3', 'user'),
(2, 'Kharismaharani', 'kharismaunesa@gmail.com', 'kharismaadmin', '21232f297a57a5a743894a0e4a801fc3', 'user'),
(3, 'Zulfa ', 'zulfaunesa@gmail.com', 'zulfaadmin', '21232f297a57a5a743894a0e4a801fc3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `persediaanbarang`
--
ALTER TABLE `persediaanbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `persediaanbarang`
--
ALTER TABLE `persediaanbarang`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
