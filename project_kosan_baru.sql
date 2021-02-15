-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 07:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_kosan_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_fasilitas_kosan`
--

CREATE TABLE `data_fasilitas_kosan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `fasilitas_kosan` varchar(255) NOT NULL,
  `fasilitas_mandi` varchar(255) NOT NULL,
  `fasilitas_bersama` varchar(255) NOT NULL,
  `fasilitas_parkir` varchar(255) NOT NULL,
  `area_lingkungan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_fasilitas_kosan`
--

INSERT INTO `data_fasilitas_kosan` (`id`, `user_id`, `fasilitas_kosan`, `fasilitas_mandi`, `fasilitas_bersama`, `fasilitas_parkir`, `area_lingkungan`) VALUES
(35, '2', 'TV,AC', 'Shower,Ember', 'Satpam', 'Tidak Ada', 'Tidak Ada'),
(37, '2', 'Lemari Baju,WIFI', 'Kloset Duduk,Ember', 'Dapur,R. Jemur', 'Parkir Sepeda', 'Rumah makan,Mini market,ATM / Bank,Apotek / Klinik,Halte Bus / Pos Ojek,Pusat belanja / Mall'),
(59, '2', 'WIFI,Bisa Pasutri,2 Orang/Kamar,Bantal', 'K. Mandi Dalam,Kloset Duduk,Shower,Ember', 'Dapur,R. Jemur,Laundry,Dispenser', 'Parkir Motor,Parkir Sepeda,Parkir Mobil', 'Masjid'),
(60, '2', 'AC,WIFI,Bisa Pasutri,2 Orang/Kamar', 'Kloset Duduk,Shower,Ember', 'R. Jemur,Laundry,Kulkas,Dispenser', 'Parkir Motor,Parkir Sepeda', 'Halte Bus / Pos Ojek,Kampus / Sekolah,Pusat belanja / Mall,Parkir Sepeda,Masjid'),
(66, '2', 'Bisa Pasutri', 'Ember', 'CCTV', 'Parkir Mobil', 'Parkir Sepeda'),
(67, '2', '2 Orang/Kamar', 'Kloset Duduk,Shower,Ember', 'R. Jemur,Kulkas,Dispenser', 'Parkir Motor,Parkir Sepeda,Parkir Mobil', 'ATM / Bank,Apotek / Klinik,Halte Bus / Pos Ojek,Kampus / Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `data_harga_kosan`
--

CREATE TABLE `data_harga_kosan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `harga_perhari` int(255) NOT NULL,
  `harga_perminggu` int(255) NOT NULL,
  `harga_perbulan` int(255) NOT NULL,
  `harga_pertahun` int(255) NOT NULL,
  `minimal_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_harga_kosan`
--

INSERT INTO `data_harga_kosan` (`id`, `user_id`, `harga_perhari`, `harga_perminggu`, `harga_perbulan`, `harga_pertahun`, `minimal_pembayaran`) VALUES
(35, '2', 50000, 350000, 450000, 5000000, '6 Bulan'),
(37, '2', 100000, 450000, 1500000, 15000000, '3 Bulan'),
(59, '2', 250000, 750000, 2500000, 0, ''),
(60, '2', 0, 0, 2500000, 0, '4 Bulan'),
(66, '2', 200000, 450000, 1500000, 15000000, ''),
(67, '2', 100000, 500000, 1500000, 15000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_keterangan_kosan`
--

CREATE TABLE `data_keterangan_kosan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `deskripsi_kosan` varchar(255) NOT NULL,
  `keterangan_kosan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_keterangan_kosan`
--

INSERT INTO `data_keterangan_kosan` (`id`, `user_id`, `deskripsi_kosan`, `keterangan_kosan`) VALUES
(35, '2', 'das', 'dsa'),
(37, '2', 'dsa', 'dsa'),
(59, '2', 'dassda', 'dasddas'),
(60, '2', 'dsadas', 'dasdas'),
(66, '2', 'dsadsa', 'dasd'),
(67, '2', 'dsadasd', 'dasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftaran_mitra`
--

CREATE TABLE `data_pendaftaran_mitra` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nama_kosan` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `no_hp` varchar(256) NOT NULL,
  `photo_ktp` varchar(256) NOT NULL,
  `photo_selfie` varchar(256) NOT NULL,
  `status` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pendaftaran_mitra`
--

INSERT INTO `data_pendaftaran_mitra` (`id`, `user_id`, `nama`, `nama_kosan`, `alamat`, `email`, `no_hp`, `photo_ktp`, `photo_selfie`, `status`, `created_at`, `updated_at`) VALUES
(18, '3', 'Widdy Arfiansyah', 'Kosan Besar Banget', 'Sukabumi bhayangkara', 'widdyarfiansyah00@gmail.com', '082299921720', '1595910349_b87d8a4707a474b3b551.png', '1595910349_41c727317c3836743fde.jpg', 1, '2020-07-27 23:25:49', '2020-07-27 23:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `data_photo_kosan`
--

CREATE TABLE `data_photo_kosan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `photo_1` varchar(255) NOT NULL,
  `photo_2` varchar(255) NOT NULL,
  `photo_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_photo_kosan`
--

INSERT INTO `data_photo_kosan` (`id`, `user_id`, `photo_1`, `photo_2`, `photo_3`) VALUES
(35, '2', '1596524566_ded427b4ab5d8111525e.jpg', '1596524566_85e659e47de24b84db5e.jpg', '1596524566_d7ca1ca28e58e27bb088.jpg'),
(37, '2', '1596524618_f5ad480d035142756aa0.jpg', '1596524618_d5ae7de289d092e55143.jpg', '1596524618_813543bf70aa26ac452a.jpg'),
(59, '2', '1596647265_cf3d5c46a6f90d164dc4.jpg', '1596647265_8963920eea6574341a2b.jpg', '1596647265_7ec28c81ab2ba3e67d5c.jpg'),
(60, '2', '1596648968_2c2e0f89682fc7656f72.jpg', '1596648968_0957ab46cdb92117d73b.jpg', '1596648968_b46f5eba4a99150d1149.jpg'),
(66, '2', '1596720245_389ef8e62d9208626ab4.jpg', '1596720245_2508465b6d42906461b7.jpg', '1596720245_4229c470dfd09ca7fd99.jpg'),
(67, '2', '1596723445_1dae5081496b12af995b.jpg', '1596723445_fe86a36937204a64062a.jpg', '1596723445_427d7c0bd5c4b8cab7f3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_profil_kosan`
--

CREATE TABLE `data_profil_kosan` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `nohp_pemilik` varchar(255) NOT NULL,
  `nama_pengelola` varchar(255) NOT NULL,
  `nohp_pengelola` varchar(255) NOT NULL,
  `nama_penginput` varchar(255) NOT NULL,
  `email_penginput` varchar(255) NOT NULL,
  `nohp_penginput` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_role_kosan`
--

CREATE TABLE `data_role_kosan` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_role_kosan`
--

INSERT INTO `data_role_kosan` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Pemilik'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `data_status_mitra`
--

CREATE TABLE `data_status_mitra` (
  `id` int(11) NOT NULL,
  `background` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `pesan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_status_mitra`
--

INSERT INTO `data_status_mitra` (`id`, `background`, `status`, `pesan`) VALUES
(1, 'bg-secondary', 'Menunggu', 'Dimohon untuk menunggu hingga berkas anda kami proses.'),
(2, 'bg-primary', 'Diproses', 'Berkas anda sedang kami proses, pemeriksaan ini memakan waktu 2x24 jam.'),
(3, 'bg-danger', 'Ditolak', 'Pendaftaran anda ditolak, bisa jadi karena data yang dibutuhkan tidak sesuai, data kurang spesifik, data yang dikirim tidak benar sungguh-sungguh. Mohon bila anda mendapatkan kekeliruan bisa hubungi kami atau anda bisa mengirim berkas kembali.'),
(4, 'bg-success', 'Diterima', 'Berhasil! Kami membutuhkan maksimal 1x24 jam untuk mempersiapkan akun mitra anda. Dimohon untuk menunggu hingga kami menghubungi anda melalui notifikasi website atau melalui email.');

-- --------------------------------------------------------

--
-- Table structure for table `data_users_kosan`
--

CREATE TABLE `data_users_kosan` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_hp` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `tanggal_lahir` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` varchar(11) NOT NULL,
  `is_active` varchar(1) NOT NULL,
  `image` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_users_kosan`
--

INSERT INTO `data_users_kosan` (`id`, `username`, `email`, `nama`, `no_hp`, `jenis_kelamin`, `status`, `tanggal_lahir`, `password`, `role_id`, `is_active`, `image`, `created_at`, `updated_at`) VALUES
(1, 'arfiiyd', 'widdyarfiansyah@ummi.ac.id', 'Widdy Arfiansyah', '', 'lainnya', '', '', '$2y$10$yiSKqdUzmCg77xrtfF7/GO255Ae8Hy/qbHMkxdZ48e1c6bzhM622q', '1', '1', 'default.png', '2020-07-25 05:17:37', '2020-07-25 05:17:37'),
(2, 'admin01', 'admin@admin.com', 'Pemilik Kosan Pertama', '82299921720', 'lainnya', '', '', '$2y$10$P.9jO21WWgoJBtDi93eRhO1Kkfuy1r/6/agnNCYk1k6n52Enekv7W', '2', '1', 'default.png', '2020-07-26 03:57:33', '2020-07-26 03:57:33'),
(3, 'user01', 'user@gmail.com', 'User pertama', '82299921720', 'Laki-laki', 'Mahasiswa', '1998-12-19', '$2y$10$f9NAuWs7myAkX00Gcai0q.S5TsIQMZ3YJKG2Kwk.E8onScSHtxvFu', '3', '1', '1595829824_976a8952e846ba98dc6d.png', '2020-07-25 05:18:32', '2020-07-27 07:15:38'),
(4, 'user02', 'user02@gmail.com', 'User Kedua', '82299921720', 'Laki-laki', 'Mahasiswa', '2020-07-24', '$2y$10$.1riEpjsF/bC.qEkoKnaxeB1aUV7jxBup3ghpBEjzMu89XnD77Hyy', '3', '1', 'default.png', '2020-07-27 01:04:29', '2020-07-27 12:59:54'),
(5, 'admin02', 'admin02@gmail.com', 'Admin Kedua', '', 'lainnya', '', '', '$2y$10$wBjsAkg3I8H4IHPdpKAEQuO4cTsi9B0ML.LInMDMcrDxbZirQkY3O', '2', '1', 'default.png', '2020-07-29 02:19:25', '2020-07-29 02:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `data_utama_kosan`
--

CREATE TABLE `data_utama_kosan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(128) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama_kosan` varchar(255) NOT NULL,
  `provinsi_kosan` varchar(255) NOT NULL,
  `kota_kosan` varchar(255) NOT NULL,
  `kecamatan_kosan` varchar(255) NOT NULL,
  `kelurahan_kosan` varchar(255) NOT NULL,
  `alamat_kosan` varchar(255) NOT NULL,
  `jenis_kosan` varchar(255) NOT NULL,
  `tersedia_kosan` int(128) NOT NULL,
  `panjang_kosan` int(128) NOT NULL,
  `lebar_kosan` int(128) NOT NULL,
  `booking_kosan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_utama_kosan`
--

INSERT INTO `data_utama_kosan` (`id`, `user_id`, `slug`, `nama_kosan`, `provinsi_kosan`, `kota_kosan`, `kecamatan_kosan`, `kelurahan_kosan`, `alamat_kosan`, `jenis_kosan`, `tersedia_kosan`, `panjang_kosan`, `lebar_kosan`, `booking_kosan`) VALUES
(35, '2', 'kosan-pertama', 'Kosan Pertama', 'Jawa Barat', 'Pilih Kota', 'Pilih Kecamatan', 'Pilih Kelurahan', 'Jalan Soedirman No 15', 'Campur', 4, 4, 4, 'Tidak'),
(37, '2', 'kosan-kedua', 'Kosan Kedua', 'Riau', 'Kabupaten Indragiri Hilir', 'Enok', 'Sungai Ambat', 'Jalan Bhayangkara Gelatik 01', 'Campur', 20, 4, 4, 'Tidak'),
(59, '2', 'kosan-ketiga', 'Kosan Ketiga', 'Jambi', 'Kabupaten Merangin', 'Pamenang Selatan', 'Pilih Kelurahan', 'Jalan cicadas jalur 02', 'Laki-laki', 11, 4, 4, 'Booking Langsung'),
(60, '2', 'kosan-keempat', 'Kosan Keempat', 'Jambi', 'Kabupaten Tebo', 'Tebo Ilir', 'Kelurahan Sungai Bengkal', 'Jalan Cisaat Rambay no 05', 'Perempuan', 10, 4, 4, 'Booking Langsung'),
(66, '2', 'kosan-kelima', 'Kosan Kelima', 'Riau', 'Kabupaten Kuantan Singingi', 'Kuantan Mudik', 'Pantai', 'Jalan sukaraja no 50', 'Campur', 3, 3, 4, 'Tidak'),
(67, '2', 'kosan-keenam', 'Kosan Keenam', 'Jambi', 'Pilih Kota', 'Pilih Kecamatan', 'Pilih Kelurahan', 'Jalan Selabintana No 50', 'Campur', 9, 3, 4, 'Tidak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_fasilitas_kosan`
--
ALTER TABLE `data_fasilitas_kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_harga_kosan`
--
ALTER TABLE `data_harga_kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_keterangan_kosan`
--
ALTER TABLE `data_keterangan_kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pendaftaran_mitra`
--
ALTER TABLE `data_pendaftaran_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_photo_kosan`
--
ALTER TABLE `data_photo_kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_profil_kosan`
--
ALTER TABLE `data_profil_kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_role_kosan`
--
ALTER TABLE `data_role_kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_status_mitra`
--
ALTER TABLE `data_status_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_users_kosan`
--
ALTER TABLE `data_users_kosan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_utama_kosan`
--
ALTER TABLE `data_utama_kosan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_fasilitas_kosan`
--
ALTER TABLE `data_fasilitas_kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `data_harga_kosan`
--
ALTER TABLE `data_harga_kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `data_keterangan_kosan`
--
ALTER TABLE `data_keterangan_kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `data_pendaftaran_mitra`
--
ALTER TABLE `data_pendaftaran_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_photo_kosan`
--
ALTER TABLE `data_photo_kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `data_profil_kosan`
--
ALTER TABLE `data_profil_kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_role_kosan`
--
ALTER TABLE `data_role_kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_status_mitra`
--
ALTER TABLE `data_status_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_users_kosan`
--
ALTER TABLE `data_users_kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_utama_kosan`
--
ALTER TABLE `data_utama_kosan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
