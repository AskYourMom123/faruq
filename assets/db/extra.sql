-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 06:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extra`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `extra` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nis`, `nama`, `email`, `kelas`, `alamat`, `no_hp`, `extra`, `password`, `foto`) VALUES
(14, 14459, 'Muhamad Faruq Osama', 'abdolslamet@gmail.com', 'XII RPL 2', 'Tegalsari, Kecamatan Garung, Kabupaten Wonosobo', 2147483647, 'Voli', '$2y$10$iLxcZnV5HaTQ8LOE5YXhaOgdVdqqo/kb0xnfvyjbuWRJfplQXtBMK', 'DSCF2230.JPG'),
(15, 13345, 'Muhamad Aufaril Asyfak', 'danedane030@gmail.com', 'MI Kelas 5', 'jakarta', 88888888, 'Sepakbola', '$2y$10$Vk0hc6ekNJCudHcl33k6aOweuq770JRiNejyni8rhVwDsFgY/zBaK', 'Muhamad Aufaril Asyfak-logo_linkin_park_by_yasinos_rocking.jpg'),
(16, 1234, 'Muhammad Sumbul', 'sumbul@gmail.com', 'XII BDP 1', 'Kertek', 788765567, 'Smakansa Budaya', '$2y$10$JtqdkGfjIeMQfci2CzpuluAtD3MYy/hGmniR6pqc4DLE4zoSB7Qqi', 'Muhammad Sumbul-259265ioclw3q0tp.jpg'),
(17, 17700, 'Muhamad ', 'jover27@gmail.com', 'xii rpl 2', 'panawangan', 888888, 'Voli', '$2y$10$/dBwq/JITdocA5wz/w6xIOcgrf9vJsVzipdcpRcsIs.ssgoMW5vSG', 'Muhamad -51890.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama_extra` varchar(60) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `desk_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_extra`
--

CREATE TABLE `jenis_extra` (
  `id` int(11) NOT NULL,
  `nama_extra` varchar(50) NOT NULL,
  `desk` text NOT NULL,
  `pengampu` varchar(100) NOT NULL,
  `foto_pengampu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_extra`
--

INSERT INTO `jenis_extra` (`id`, `nama_extra`, `desk`, `pengampu`, `foto_pengampu`) VALUES
(1, 'Voli', 'voli didirikan karena tidak bisa duduk, voli sangat populer di kalangan masyarakat karena sering dimainkan bersama gasing, makan tomat sambil njengkang, chuakss ga mutu banget', 'panggah', ''),
(2, 'Sepakbola', 'pemain andalan saya di sepakbola adalah gonzales, dia bisa nenadang tanpa nyentuh kek habib jidan, yang tadinya dukun sekarang jadi rapper', 'Bambang', ''),
(3, 'Smakansa Budaya', 'smkanza budaya didirikan pada tahu 1999 oleh sultan hamengkubuono 9 di kelaten yogyakarta dan di sembelih sama kambing yang berusia 9 bulan kemudian bertemu oleh jhon wick', 'pak sub', '');

-- --------------------------------------------------------

--
-- Table structure for table `materi_extra`
--

CREATE TABLE `materi_extra` (
  `id` int(11) NOT NULL,
  `nama_extra` varchar(100) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `desk_materi` text NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_extra`
--

INSERT INTO `materi_extra` (`id`, `nama_extra`, `judul_materi`, `desk_materi`, `tanggal`) VALUES
(1, 'Voli', 'passing bawah', 'materi kali ini kita akan berlatih untuk melakukan passing bawah, untuk melakukan passing bawah ada beberapa langkah, yaitu :\r\n1. kalian harus bersikap kuda kuda\r\n2. jangan pernah takut dengan apa yang anda hadapi.\r\n3. tetap tawakal dan percata proses', '13 september 2022'),
(2, 'Sepakbola', 'cara heading yang benar', 'disini saya akan mengajarkan kalian tentang menendang bola, pertama tama kalian harus begini begini dan begini, kedua kalian harus berani begini begini', '27 januari 2020'),
(3, 'Voli', 'cara passing atas', 'cara passing atas kali ini tidak lah sulit, karena jika kalian ingat dengan materi yang pernah bapak sampaikan dipertemuan sebelumnya, kita telah mempelajari passing bawah, berikut adalah beberapa step melakukan passing atas:\r\n1. jangan lupa niat\r\n2. jangan pernah lupa sholat\r\n3. jangan pernah jadi patokan kalo semua itu pake uang', '11 juli 2021');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `materi` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nama_siswa`, `tanggal`, `materi`, `nilai`) VALUES
(1, '', '12 september 2021', 'siuuuuuuuuuuuuuuuuuuuuuuuuuuu', 90),
(2, '', '23 sepetember 2022', 'tentang sepakbola', 80),
(3, '', '23 desember 2022', 'perkedel', 60);

-- --------------------------------------------------------

--
-- Table structure for table `presensi_siswa`
--

CREATE TABLE `presensi_siswa` (
  `id` int(11) NOT NULL,
  `nama_extra` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nis` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `presensi` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi_siswa`
--

INSERT INTO `presensi_siswa` (`id`, `nama_extra`, `nama_siswa`, `nis`, `tanggal`, `presensi`, `ket`, `bukti`) VALUES
(55, 'Voli', 'Muhamad Faruq Osama', 14459, '13 september 2022', 'hadir', '-', 'Muhamad Faruq Osama-Hybrid_Theory_Linkin_Park_Logo'),
(56, 'Voli', 'Muhamad Faruq Osama', 14459, '13 september 2022', 'hadir', '-', 'Muhamad Faruq Osama-BiografiChesterBennington-Voka'),
(57, 'Voli', 'Muhamad Faruq Osama', 14459, '13 september 2022', 'hadir', '-', 'Muhamad Faruq Osama-51890.jpg-13 september 2022'),
(58, 'Voli', 'Muhamad Faruq Osama', 14459, '11 juli 2021', 'sakit', 'Sakit jantung', 'Muhamad Faruq Osama-DSCF2230.JPG-11 juli 2021');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `nama_extra` varchar(100) NOT NULL,
  `kejuaraan` varchar(255) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `nama_extra`, `kejuaraan`, `tanggal`) VALUES
(1, 'Voli', 'juara 1 provinsi tahun 2016', '26 september 2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_extra`
--
ALTER TABLE `jenis_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi_extra`
--
ALTER TABLE `materi_extra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_extra`
--
ALTER TABLE `jenis_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materi_extra`
--
ALTER TABLE `materi_extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
