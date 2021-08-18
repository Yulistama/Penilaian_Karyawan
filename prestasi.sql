-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 16.58
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prestasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cover`
--

CREATE TABLE `tb_cover` (
  `id_cover` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `jangka` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `id_dataskp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dataskp`
--

CREATE TABLE `tb_dataskp` (
  `id_dataskp` int(11) NOT NULL,
  `nama_yd` varchar(50) NOT NULL,
  `nip_yd` varchar(50) NOT NULL,
  `pangkat_yd` varchar(50) NOT NULL,
  `jabatan_yd` varchar(50) NOT NULL,
  `unitkerja_yd` varchar(50) NOT NULL,
  `nama_pp` varchar(50) NOT NULL,
  `nip_pp` varchar(50) NOT NULL,
  `pangkat_pp` varchar(50) NOT NULL,
  `jabatan_pp` varchar(50) NOT NULL,
  `unitkerja_pp` varchar(50) NOT NULL,
  `nama_app` varchar(50) NOT NULL,
  `nip_app` varchar(50) NOT NULL,
  `pangkat_app` varchar(50) NOT NULL,
  `jabatan_app` varchar(50) NOT NULL,
  `unitkerja_app` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dataskp`
--

INSERT INTO `tb_dataskp` (`id_dataskp`, `nama_yd`, `nip_yd`, `pangkat_yd`, `jabatan_yd`, `unitkerja_yd`, `nama_pp`, `nip_pp`, `pangkat_pp`, `jabatan_pp`, `unitkerja_pp`, `nama_app`, `nip_app`, `pangkat_app`, `jabatan_app`, `unitkerja_app`, `id_user`) VALUES
(2, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 2),
(3, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 2),
(4, 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_formulirskp`
--

CREATE TABLE `tb_formulirskp` (
  `id_formulirskp` int(11) NOT NULL,
  `kuant1` varchar(50) NOT NULL,
  `kuant2` varchar(50) NOT NULL,
  `kuant3` varchar(50) NOT NULL,
  `kuant4` varchar(50) NOT NULL,
  `kuant5` varchar(50) NOT NULL,
  `kuant6` varchar(50) NOT NULL,
  `kual1` varchar(50) NOT NULL,
  `kual2` varchar(50) NOT NULL,
  `kual3` varchar(50) NOT NULL,
  `kual4` varchar(50) NOT NULL,
  `kual5` varchar(50) NOT NULL,
  `kual6` varchar(50) NOT NULL,
  `waktu1` varchar(50) NOT NULL,
  `waktu2` varchar(50) NOT NULL,
  `waktu3` varchar(50) NOT NULL,
  `waktu4` varchar(50) NOT NULL,
  `waktu5` varchar(50) NOT NULL,
  `waktu6` varchar(50) NOT NULL,
  `biaya1` varchar(50) NOT NULL,
  `biaya2` varchar(50) NOT NULL,
  `biaya3` varchar(50) NOT NULL,
  `biaya4` varchar(50) NOT NULL,
  `biaya5` varchar(50) NOT NULL,
  `biaya6` varchar(50) NOT NULL,
  `kdformulir` varchar(50) NOT NULL,
  `id_dataskp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengukuran`
--

CREATE TABLE `tb_pengukuran` (
  `id_pengukuran` int(11) NOT NULL,
  `kuant1r` varchar(50) NOT NULL,
  `kuant2r` varchar(50) NOT NULL,
  `kuant3r` varchar(50) NOT NULL,
  `kuant4r` varchar(50) NOT NULL,
  `kuant5r` varchar(50) NOT NULL,
  `kuant6r` varchar(50) NOT NULL,
  `kual1r` varchar(50) NOT NULL,
  `kual2r` varchar(50) NOT NULL,
  `kual3r` varchar(50) NOT NULL,
  `kual4r` varchar(50) NOT NULL,
  `kual5r` varchar(50) NOT NULL,
  `kual6r` varchar(50) NOT NULL,
  `waktu1r` varchar(50) NOT NULL,
  `waktu2r` varchar(50) NOT NULL,
  `waktu3r` varchar(50) NOT NULL,
  `waktu4r` varchar(50) NOT NULL,
  `waktu5r` varchar(50) NOT NULL,
  `waktu6r` varchar(50) NOT NULL,
  `biaya1r` varchar(50) NOT NULL,
  `biaya2r` varchar(50) NOT NULL,
  `biaya3r` varchar(50) NOT NULL,
  `biaya4r` varchar(50) NOT NULL,
  `biaya5r` varchar(50) NOT NULL,
  `biaya6r` varchar(50) NOT NULL,
  `pwaktu1` varchar(50) NOT NULL,
  `pwaktu2` varchar(50) NOT NULL,
  `pwaktu3` varchar(50) NOT NULL,
  `pwaktu4` varchar(50) NOT NULL,
  `pwaktu5` varchar(50) NOT NULL,
  `pwaktu6` varchar(50) NOT NULL,
  `pbiaya1` varchar(50) NOT NULL,
  `pbiaya2` varchar(50) NOT NULL,
  `pbiaya3` varchar(50) NOT NULL,
  `pbiaya4` varchar(50) NOT NULL,
  `pbiaya5` varchar(50) NOT NULL,
  `pbiaya6` varchar(50) NOT NULL,
  `kuantitas1` varchar(50) NOT NULL,
  `kuantitas2` varchar(50) NOT NULL,
  `kuantitas3` varchar(50) NOT NULL,
  `kuantitas4` varchar(50) NOT NULL,
  `kuantitas5` varchar(50) NOT NULL,
  `kuantitas6` varchar(50) NOT NULL,
  `kualitas1` varchar(50) NOT NULL,
  `kualitas2` varchar(50) NOT NULL,
  `kualitas3` varchar(50) NOT NULL,
  `kualitas4` varchar(50) NOT NULL,
  `kualitas5` varchar(50) NOT NULL,
  `kualitas6` varchar(50) NOT NULL,
  `waktu1x` varchar(50) NOT NULL,
  `waktu2x` varchar(50) NOT NULL,
  `waktu3x` varchar(50) NOT NULL,
  `waktu4x` varchar(50) NOT NULL,
  `waktu5x` varchar(50) NOT NULL,
  `waktu6x` varchar(50) NOT NULL,
  `biaya1x` varchar(50) NOT NULL,
  `biaya2x` varchar(50) NOT NULL,
  `biaya3x` varchar(50) NOT NULL,
  `biaya4x` varchar(50) NOT NULL,
  `biaya5x` varchar(50) NOT NULL,
  `biaya6x` varchar(50) NOT NULL,
  `perhitungan1` varchar(50) NOT NULL,
  `perhitungan2` varchar(50) NOT NULL,
  `perhitungan3` varchar(50) NOT NULL,
  `perhitungan4` varchar(50) NOT NULL,
  `perhitungan5` varchar(50) NOT NULL,
  `perhitungan6` varchar(50) NOT NULL,
  `nilaiskp1` varchar(50) NOT NULL,
  `nilaiskp2` varchar(50) NOT NULL,
  `nilaiskp3` varchar(50) NOT NULL,
  `nilaiskp4` varchar(50) NOT NULL,
  `nilaiskp5` varchar(50) NOT NULL,
  `nilaiskp6` varchar(50) NOT NULL,
  `nilaicapaianskp` varchar(50) NOT NULL,
  `pnilaicapaianskp` varchar(50) NOT NULL,
  `tt1` varchar(50) NOT NULL,
  `tt2` varchar(50) NOT NULL,
  `tt3` varchar(50) NOT NULL,
  `tt4` varchar(50) NOT NULL,
  `kk1` varchar(50) NOT NULL,
  `kk2` varchar(50) NOT NULL,
  `kk3` varchar(50) NOT NULL,
  `kk4` varchar(50) NOT NULL,
  `ttk1` varchar(50) NOT NULL,
  `ttk2` varchar(50) NOT NULL,
  `id_cover` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penialian` int(11) NOT NULL,
  `kd_penialian` varchar(50) NOT NULL,
  `persenpengukuran` varchar(50) NOT NULL,
  `jmlhpersenpengukuran` varchar(50) NOT NULL,
  `persenperilaku` varchar(50) NOT NULL,
  `jmlhpersenperilaku` varchar(50) NOT NULL,
  `nilaiprestasi` varchar(50) NOT NULL,
  `pnilaiprestasi` varchar(50) NOT NULL,
  `id_dataskp` int(11) NOT NULL,
  `id_cover` int(11) NOT NULL,
  `id_pengukuran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perilakukerja`
--

CREATE TABLE `tb_perilakukerja` (
  `id_perilakukerja` int(11) NOT NULL,
  `kdperilaku` varchar(50) NOT NULL,
  `orientasi` varchar(50) NOT NULL,
  `porientasi` varchar(50) NOT NULL,
  `integritas` varchar(50) NOT NULL,
  `pintegritas` varchar(50) NOT NULL,
  `komitmen` varchar(50) NOT NULL,
  `pkomitmen` varchar(50) NOT NULL,
  `disiplin` varchar(50) NOT NULL,
  `pdisiplin` varchar(50) NOT NULL,
  `kerjasama` varchar(50) NOT NULL,
  `pkerjasama` varchar(50) NOT NULL,
  `kepemimpinan` varchar(50) NOT NULL,
  `pkepemimpinan` varchar(50) NOT NULL,
  `jumlahperilaku` varchar(50) NOT NULL,
  `pjumlahperilaku` varchar(50) NOT NULL,
  `nilairataperilaku` varchar(50) NOT NULL,
  `pnilairataperilaku` varchar(50) NOT NULL,
  `id_dataskp` int(11) NOT NULL,
  `id_cover` int(11) NOT NULL,
  `id_pengukuran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_spt`
--

CREATE TABLE `tb_spt` (
  `id_spt` int(11) NOT NULL,
  `tgl_pp` date NOT NULL,
  `tgl_yd` date NOT NULL,
  `tgl_app` date NOT NULL,
  `id_dataskp` int(11) NOT NULL,
  `id_cover` int(11) NOT NULL,
  `id_penilaian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('superadmin','admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `username`, `password`, `level`) VALUES
(1, 'tri', 'tri', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'admin'),
(2, 'yuken', 'yuken', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_cover`
--
ALTER TABLE `tb_cover`
  ADD PRIMARY KEY (`id_cover`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `tb_cover_ibfk_1` (`id_dataskp`);

--
-- Indeks untuk tabel `tb_dataskp`
--
ALTER TABLE `tb_dataskp`
  ADD PRIMARY KEY (`id_dataskp`),
  ADD KEY `tb_dataskp_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `tb_formulirskp`
--
ALTER TABLE `tb_formulirskp`
  ADD PRIMARY KEY (`id_formulirskp`),
  ADD KEY `tb_formulirskp_ibfk_1` (`id_dataskp`),
  ADD KEY `tb_formulirskp_ibfk_2` (`id_user`);

--
-- Indeks untuk tabel `tb_pengukuran`
--
ALTER TABLE `tb_pengukuran`
  ADD PRIMARY KEY (`id_pengukuran`),
  ADD KEY `tb_pengukuran_ibfk_1` (`id_cover`),
  ADD KEY `tb_pengukuran_ibfk_2` (`id_formulir`),
  ADD KEY `tb_pengukuran_ibfk_3` (`id_user`);

--
-- Indeks untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penialian`),
  ADD KEY `tb_penilaian_ibfk_1` (`id_cover`),
  ADD KEY `tb_penilaian_ibfk_2` (`id_dataskp`),
  ADD KEY `tb_penilaian_ibfk_3` (`id_pengukuran`),
  ADD KEY `tb_penilaian_ibfk_4` (`id_user`);

--
-- Indeks untuk tabel `tb_perilakukerja`
--
ALTER TABLE `tb_perilakukerja`
  ADD PRIMARY KEY (`id_perilakukerja`),
  ADD KEY `tb_perilakukerja_ibfk_1` (`id_cover`),
  ADD KEY `tb_perilakukerja_ibfk_2` (`id_dataskp`),
  ADD KEY `tb_perilakukerja_ibfk_3` (`id_pengukuran`),
  ADD KEY `tb_perilakukerja_ibfk_4` (`id_user`);

--
-- Indeks untuk tabel `tb_spt`
--
ALTER TABLE `tb_spt`
  ADD PRIMARY KEY (`id_spt`),
  ADD KEY `tb_spt_ibfk_1` (`id_cover`),
  ADD KEY `tb_spt_ibfk_2` (`id_dataskp`),
  ADD KEY `tb_spt_ibfk_3` (`id_penilaian`),
  ADD KEY `tb_spt_ibfk_4` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_dataskp`
--
ALTER TABLE `tb_dataskp`
  MODIFY `id_dataskp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_formulirskp`
--
ALTER TABLE `tb_formulirskp`
  MODIFY `id_formulirskp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pengukuran`
--
ALTER TABLE `tb_pengukuran`
  MODIFY `id_pengukuran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `id_penialian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_perilakukerja`
--
ALTER TABLE `tb_perilakukerja`
  MODIFY `id_perilakukerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_spt`
--
ALTER TABLE `tb_spt`
  MODIFY `id_spt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_cover`
--
ALTER TABLE `tb_cover`
  ADD CONSTRAINT `tb_cover_ibfk_1` FOREIGN KEY (`id_dataskp`) REFERENCES `tb_dataskp` (`id_dataskp`),
  ADD CONSTRAINT `tb_cover_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_cover` (`id_cover`);

--
-- Ketidakleluasaan untuk tabel `tb_dataskp`
--
ALTER TABLE `tb_dataskp`
  ADD CONSTRAINT `tb_dataskp_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_formulirskp`
--
ALTER TABLE `tb_formulirskp`
  ADD CONSTRAINT `tb_formulirskp_ibfk_1` FOREIGN KEY (`id_dataskp`) REFERENCES `tb_dataskp` (`id_dataskp`),
  ADD CONSTRAINT `tb_formulirskp_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_pengukuran`
--
ALTER TABLE `tb_pengukuran`
  ADD CONSTRAINT `tb_pengukuran_ibfk_1` FOREIGN KEY (`id_cover`) REFERENCES `tb_cover` (`id_cover`),
  ADD CONSTRAINT `tb_pengukuran_ibfk_2` FOREIGN KEY (`id_formulir`) REFERENCES `tb_formulirskp` (`id_formulirskp`),
  ADD CONSTRAINT `tb_pengukuran_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD CONSTRAINT `tb_penilaian_ibfk_1` FOREIGN KEY (`id_cover`) REFERENCES `tb_cover` (`id_cover`),
  ADD CONSTRAINT `tb_penilaian_ibfk_2` FOREIGN KEY (`id_dataskp`) REFERENCES `tb_dataskp` (`id_dataskp`),
  ADD CONSTRAINT `tb_penilaian_ibfk_3` FOREIGN KEY (`id_pengukuran`) REFERENCES `tb_pengukuran` (`id_pengukuran`),
  ADD CONSTRAINT `tb_penilaian_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_perilakukerja`
--
ALTER TABLE `tb_perilakukerja`
  ADD CONSTRAINT `tb_perilakukerja_ibfk_1` FOREIGN KEY (`id_cover`) REFERENCES `tb_cover` (`id_cover`),
  ADD CONSTRAINT `tb_perilakukerja_ibfk_2` FOREIGN KEY (`id_dataskp`) REFERENCES `tb_dataskp` (`id_dataskp`),
  ADD CONSTRAINT `tb_perilakukerja_ibfk_3` FOREIGN KEY (`id_pengukuran`) REFERENCES `tb_pengukuran` (`id_pengukuran`),
  ADD CONSTRAINT `tb_perilakukerja_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_spt`
--
ALTER TABLE `tb_spt`
  ADD CONSTRAINT `tb_spt_ibfk_1` FOREIGN KEY (`id_cover`) REFERENCES `tb_cover` (`id_cover`),
  ADD CONSTRAINT `tb_spt_ibfk_2` FOREIGN KEY (`id_dataskp`) REFERENCES `tb_dataskp` (`id_dataskp`),
  ADD CONSTRAINT `tb_spt_ibfk_3` FOREIGN KEY (`id_penilaian`) REFERENCES `tb_penilaian` (`id_penialian`),
  ADD CONSTRAINT `tb_spt_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
