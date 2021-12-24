-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 07:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ekspedisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absen`
--

CREATE TABLE `tbl_absen` (
  `id` int(11) NOT NULL,
  `tanggal_kehadiran` date DEFAULT NULL,
  `check_in` time DEFAULT NULL,
  `check_out` time DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absen`
--

INSERT INTO `tbl_absen` (`id`, `tanggal_kehadiran`, `check_in`, `check_out`, `user_id`) VALUES
(1, '2021-12-15', '07:46:00', NULL, 1),
(2, '2021-12-16', '07:23:00', NULL, 3),
(3, '2021-12-19', '10:26:21', '10:59:57', 3),
(4, '2021-12-20', '17:56:03', '17:56:06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catatan_kerja`
--

CREATE TABLE `tbl_catatan_kerja` (
  `id` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_pengerjaan` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_catatan_kerja`
--

INSERT INTO `tbl_catatan_kerja` (`id`, `keterangan`, `tanggal_pengerjaan`, `user_id`) VALUES
(1, 'buat makalah', '2021-12-21', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `id` int(11) NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `tanggal_permintaan` date NOT NULL,
  `status` enum('Menunggu Persetujuan Atasan','Disetujui Atasan','Ditolak atasan') NOT NULL,
  `keterangan` text NOT NULL,
  `lama_cuti` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cuti`
--

INSERT INTO `tbl_cuti` (`id`, `tanggal_pembuatan`, `tanggal_permintaan`, `status`, `keterangan`, `lama_cuti`, `user_id`) VALUES
(1, '2021-12-19', '2021-12-27', 'Disetujui Atasan', 'test', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisi`
--

CREATE TABLE `tbl_divisi` (
  `id` int(11) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_divisi`
--

INSERT INTO `tbl_divisi` (`id`, `nama_divisi`) VALUES
(1, 'Manager'),
(5, 'Software Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `nama`, `jumlah`, `transaksi_id`) VALUES
(1, 'produk 1', 3, 1),
(3, 'produk a', 5, 2),
(4, 'produk b', 7, 2),
(8, 'hp', 12, 3),
(9, 'laptop', 35, 3),
(10, 'hp', 12, 3),
(11, 'laptop', 35, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_pengiriman`
--

CREATE TABLE `tbl_status_pengiriman` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `transaksi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status_pengiriman`
--

INSERT INTO `tbl_status_pengiriman` (`id`, `name`, `tanggal`, `transaksi_id`) VALUES
(1, 'Disimpan dalam gudang', '2021-12-18 16:30:42', 1),
(2, 'Diambil kurir', '2021-12-18 16:31:20', 1),
(3, 'Disimpan dalam gudang', '2021-12-18 16:47:25', 2),
(4, 'dikirim', '2021-12-19 17:45:25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL,
  `no_resi` text NOT NULL,
  `penerima` varchar(45) NOT NULL,
  `pengirim` varchar(45) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `telp_penerima` varchar(12) NOT NULL,
  `telp_pengirim` varchar(12) NOT NULL,
  `berat` double NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `no_resi`, `penerima`, `pengirim`, `alamat_penerima`, `alamat_pengirim`, `telp_penerima`, `telp_pengirim`, `berat`, `harga`) VALUES
(1, 'GO20211218001', 'niya', 'maya', 'bekasi', 'jakarta', '02387876', '01289', 56, 273256),
(2, 'GO20211218002', 'jaja', 'budi', 'bekasi', 'jakart', '08329', '02389', 8923, 89823),
(3, 'GO20211218003', 'mui', 'mey 12', 'bekasi', 'jakarta', '932472', '9127238', 12, 983000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `nik` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `divisi_id` int(11) NOT NULL,
  `tbl_role_id` int(11) NOT NULL,
  `gaji` int(11) NOT NULL,
  `hak_cuti` int(11) NOT NULL DEFAULT 12
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `nik`, `password`, `divisi_id`, `tbl_role_id`, `gaji`, `hak_cuti`) VALUES
(1, 'admin', 'admin', 'admin', 1, 1, 300000, 12),
(3, 'Lanjar Dwi Saputro', 'k002', 'lanjar', 1, 2, 23000000, 8),
(5, 'Farras Aji Suprayitno', 'k003', 'k3520028', 1, 1, 10000000, 60),
(6, 'Muhammad Aqil Sadik', 'k004', 'k3520048', 1, 2, 12000000, 1),
(7, 'Fahmia Nuha Shafira', 'k005', 'k3520026', 5, 2, 1000000, 5),
(8, 'Ratih Friska', 'k006', 'k3520066', 5, 2, 2000000, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_absen_tbl_user1_idx` (`user_id`);

--
-- Indexes for table `tbl_catatan_kerja`
--
ALTER TABLE `tbl_catatan_kerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_catatan_kerja_tbl_user1_idx` (`user_id`);

--
-- Indexes for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_cuti_tbl_user1_idx` (`user_id`);

--
-- Indexes for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_produk_tbl_transaksi1_idx` (`transaksi_id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status_pengiriman`
--
ALTER TABLE `tbl_status_pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_status_pengiriman_tbl_transaksi1_idx` (`transaksi_id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_user_tbl_divisi_idx` (`divisi_id`),
  ADD KEY `fk_tbl_user_tbl_role1_idx` (`tbl_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_catatan_kerja`
--
ALTER TABLE `tbl_catatan_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_divisi`
--
ALTER TABLE `tbl_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_status_pengiriman`
--
ALTER TABLE `tbl_status_pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
  ADD CONSTRAINT `fk_tbl_absen_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_catatan_kerja`
--
ALTER TABLE `tbl_catatan_kerja`
  ADD CONSTRAINT `fk_tbl_catatan_kerja_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD CONSTRAINT `fk_tbl_cuti_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `fk_tbl_produk_tbl_transaksi1` FOREIGN KEY (`transaksi_id`) REFERENCES `tbl_transaksi` (`id`);

--
-- Constraints for table `tbl_status_pengiriman`
--
ALTER TABLE `tbl_status_pengiriman`
  ADD CONSTRAINT `fk_tbl_status_pengiriman_tbl_transaksi1` FOREIGN KEY (`transaksi_id`) REFERENCES `tbl_transaksi` (`id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_tbl_user_tbl_divisi` FOREIGN KEY (`divisi_id`) REFERENCES `tbl_divisi` (`id`),
  ADD CONSTRAINT `fk_tbl_user_tbl_role1` FOREIGN KEY (`tbl_role_id`) REFERENCES `tbl_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
