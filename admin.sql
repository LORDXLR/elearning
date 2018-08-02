-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 11:57 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tgl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `tgl`) VALUES
(1, 'berita 1', 'hahahahahha', '', ''),
(3, 'ss', 'ss', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bdng_studi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `username`, `password`, `jenis_kelamin`, `alamat`, `tgl_lahir`, `bdng_studi`, `email`) VALUES
(2, 'guru2', 'guru2', 'guru1', 'L', 'sukajadi', '1987-07-10', 'Matematika', 'guru2@gmail.com'),
(10, 'julie', 'julie', 'julie', 'P', 'antapani', '2000-03-12', 'Bahasa Inggris', 'julie@gmail.com'),
(11, 'siti', 'siti', 'siti', 'P', 'sukajadi', '1942-08-12', 'Matematika', 'siti@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'admin', 'admin', 'udin'),
(2, 'saya', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(10) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `id_tugas` int(10) NOT NULL,
  `id_ujian` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `mapel`, `id_admin`, `id_tugas`, `id_ujian`) VALUES
(1, 'Bahasa Indonesia', 0, 0, 0),
(2, 'Matematika', 0, 0, 0),
(3, 'Bahasa Inggris', 0, 0, 0),
(4, 'IPA', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(10) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `file_materi` varchar(100) NOT NULL,
  `id_tugas` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_ujian` int(10) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `nama_materi`, `file_materi`, `id_tugas`, `id_mapel`, `id_guru`, `id_ujian`, `mapel`) VALUES
(1, 'BAB 1', 'penggunaan suku kata', '', 0, 0, 0, 0, 'Bahasa Indonesia'),
(2, 'ss', 'ss', '', 0, 0, 0, 0, 'Matematika'),
(3, 'perhitungan', 'perhitungan', '', 0, 0, 0, 0, 'Matematika'),
(4, 'spell', 'talk', '', 0, 0, 0, 0, 'Bahasa Inggris'),
(5, 'alam', 'alam', '', 0, 0, 0, 0, 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pgmn` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pgmn`, `judul`, `isi`, `id_guru`, `tgl`) VALUES
(1, 'belajar', 'besok ujian', 0, '0000-00-00'),
(18, 'tugas ', 'besok mengumpulkan ujian', 0, '2018-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `username`, `password`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `email`, `kelas`) VALUES
(1, 'adi', 'adi', 'adi', '1998-12-12', 'L', 'bojong koneng', 'adi@gmail.com', '5B'),
(2, 'adi', 'adi', 'adi', '1998-12-12', 'L', 'bojong koneng', 'adi@gmail.com', '5B'),
(3, 'adi', 'adi', 'adi', '1998-12-12', 'L', 'bojong koneng', 'adi@gmail.com', '5B'),
(5, 'adi', 'adi', 'adi', '1998-12-12', 'P', 'bojong koneng', 'adi@gmail.com', '5A');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `tgl` date NOT NULL,
  `soal_tugas` text NOT NULL,
  `jawa` varchar(30) NOT NULL,
  `jawb` varchar(30) NOT NULL,
  `jawc` varchar(30) NOT NULL,
  `jawd` varchar(30) NOT NULL,
  `kunci_j` varchar(30) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_materi` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_guru` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pgmn`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pgmn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
