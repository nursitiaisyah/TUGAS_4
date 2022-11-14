-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2022 pada 16.38
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusuniga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(20) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `alamat`, `telepon`) VALUES
(6, 'Gunadi, MSc., Ph.D.', 'Malang', '082247429742'),
(7, 'Resti Rahayu, S.Kom., M.M', 'Malang', '085755554358'),
(8, 'Aan Jelli Priana, S.Kom., M.Kom', 'Malang', '085346578908'),
(9, 'Rizky Nur Iman, S.Kom., M.M', 'Malang', '082345786980'),
(10, 'Dafid Bayu Firmansya, S.Kom., M.Kom', 'Malang', '081332698247'),
(11, 'Dr.Dwi Orbaningsih, SE., MM., Ak.,CA.', 'Malang', '081235678908'),
(12, 'Andreas Prasetia, S.Si., M.T.', 'Malang', '085467876890'),
(13, 'Drs. Suryamanto', 'Malang', '081234789067'),
(14, 'Hari Budi Setiawan, S.Pd.I., M.Pd.I', 'Malang', '082346789098');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalkuliah`
--

CREATE TABLE `jadwalkuliah` (
  `id_jadwal` int(20) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `id_matkul` int(20) NOT NULL,
  `id_dosen` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwalkuliah`
--

INSERT INTO `jadwalkuliah` (`id_jadwal`, `hari`, `jam`, `id_matkul`, `id_dosen`) VALUES
(11, 'Senin', '07:30', 6, 6),
(12, 'Senin', '09:30', 7, 7),
(13, 'Selasa', '09:30', 8, 7),
(14, 'Rabu', '07:30', 9, 8),
(15, 'Rabu', '09:30', 10, 9),
(16, 'Rabu', '12:00', 11, 10),
(17, 'Kamis', '09:30', 12, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(20) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Sistem Infomasi'),
(5, 'Teknik Elektro'),
(6, 'Manajemen'),
(7, 'Teknik Mesin'),
(8, 'Psikologi'),
(9, 'Akuntansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `nim`, `alamat`, `username`, `password`, `id_jurusan`) VALUES
(26, 'Nur Siti Aisyah', 21510024, 'Lumajang', 'aisyah15', 'nursitiaisyah', 1),
(27, 'Country Ina ', 2151007, 'Malang', 'ina12', 'asasasasasa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matkul` int(20) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id_matkul`, `nama_matkul`) VALUES
(6, 'Analisis Sistem Informasi'),
(7, 'Pemograman Berbasis Objek Lanjut'),
(8, 'Manajemen Basis Data 1'),
(9, 'Tugas Pengembangan Solusi 1'),
(10, 'Sistem Operasi'),
(11, 'Pemograman Internet'),
(12, 'Akuntansi 1'),
(13, 'Pemograman Visual Lanjut'),
(14, 'Pendidikan Pancasila'),
(15, 'Pendidikan Agama Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Nur Siti Aisyah', 'aisyah', 'aisyah15', 'admin'),
(2, 'Tiara', 'petugas', 'petugas', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `jadwalkuliah`
--
ALTER TABLE `jadwalkuliah`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jadwalkuliah`
--
ALTER TABLE `jadwalkuliah`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matkul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwalkuliah`
--
ALTER TABLE `jadwalkuliah`
  ADD CONSTRAINT `jadwalkuliah_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwalkuliah_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
