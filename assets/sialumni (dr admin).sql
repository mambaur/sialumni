-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Apr 2020 pada 06.48
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sialumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `nis` varchar(20) NOT NULL,
  `nama_alumni` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(45) NOT NULL,
  `alamat_awal` varchar(45) DEFAULT NULL,
  `alamat_skr` varchar(45) NOT NULL,
  `tahun_masuk` int(45) NOT NULL,
  `tahun_keluar` int(45) NOT NULL,
  `kuliah` varchar(45) DEFAULT NULL,
  `nama_ayah` varchar(45) NOT NULL,
  `nama_ibu` varchar(45) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `agama` varchar(45) NOT NULL,
  `pekerjaan_ayah` varchar(45) NOT NULL,
  `pekerjaan_ibu` varchar(45) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `nama_wali` varchar(45) DEFAULT NULL,
  `pekerjaan_wali` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alumni`
--

INSERT INTO `tb_alumni` (`nis`, `nama_alumni`, `tempat_lahir`, `tgl_lahir`, `jk`, `alamat_awal`, `alamat_skr`, `tahun_masuk`, `tahun_keluar`, `kuliah`, `nama_ayah`, `nama_ibu`, `no_telp`, `agama`, `pekerjaan_ayah`, `pekerjaan_ibu`, `jurusan`, `nama_wali`, `pekerjaan_wali`, `foto`) VALUES
('awd', 'awdwad', 'wadawd', '2020-03-19', 'Laki-laki', 'awdaw', 'awdaw', 2011, 2014, '', 'asdasd', 'asdsadasd', '12412', 'awd', 'asdasd', 'asdasd', 'asdasd', 'sadasd', 'wadad', '112.png'),
('e1242', 'hk', 'hj', '2020-03-13', 'Laki-laki', 'jb', 'jh', 20022, 20202, '', 'h', 'h', '123124', 'k', 'kjk', 'j', 'nk', 'jjh', 'jh', '1.png'),
('E13123hja', 'awdw', 'wadawd', '2020-03-17', 'Laki-laki', 'awdaw', 'wadaw', 0, 0, 'sadsad', 'asdasd', 'asdsadasd', '12412', 'awd', 'asdasd', 'asdasd', 'asdasd', 'sadasd', 'wadad', '112.png'),
('E41161548', 'ahira labata', 'Tulungagung', '2020-03-18', 'Laki-Laki', 'Tulungagung', 'Tulungagung', 2016, 2020, 'Poltek Jember', 'Subatin', 'Ida Alfiantini', '083830728695', 'Islam', 'PNS', 'Ibu Rumah Tangga', 'TIF', 'john', '', ''),
('E41161549', 'ahira labata', 'Tulungagung', '2020-03-18', 'Laki-Laki', 'Tulungagung', 'Tulungagung', 2016, 2020, 'Poltek Jember', 'Subatin', 'Ida Alfiantini', '083830728695', 'Islam', 'PNS', 'Ibu Rumah Tangga', 'TIF', 'john', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` varchar(10) NOT NULL,
  `judul_berita` varchar(45) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gambar_berita` varchar(45) NOT NULL,
  `penulis` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_berita`, `gambar_berita`, `penulis`) VALUES
('0', 'adwad', '<p>hh</p>\r\n', '0000-00-00 00:00:00', '112.png', 'awdaw'),
('BR0001', 'adwad', '<p>wadawd</p>\r\n', '0000-00-00 00:00:00', '112.png', 'awdaw'),
('BR0002', 'kucing kualik', '<p>awdad</p>\r\n', '2020-03-18 13:45:47', '1.png', 'wa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` varchar(10) NOT NULL,
  `judul_event` varchar(45) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_event` text NOT NULL,
  `kategori_event` varchar(45) NOT NULL,
  `status_event` varchar(45) NOT NULL DEFAULT 'diperiksa',
  `gambar_event` varchar(45) NOT NULL,
  `user_id_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `judul_event`, `tanggal`, `isi_event`, `kategori_event`, `status_event`, `gambar_event`, `user_id_user`) VALUES
('EV0001', 'asik', '2020-03-28 14:48:17', '<p>awdawd</p>\r\n', 'loker', 'diterima', '112.png', 'US0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id_organisasi` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_org` varchar(45) NOT NULL,
  `tahun` int(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id_organisasi`, `nis`, `nama_org`, `tahun`, `jabatan`) VALUES
(5, 'E41161549', 'Kucing Ninja', 2016, 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `jabatan_pekerjaan` varchar(45) NOT NULL,
  `tahun_pekerjaan` int(45) NOT NULL,
  `bidang` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `nis`, `deskripsi`, `jabatan_pekerjaan`, `tahun_pekerjaan`, `bidang`, `alamat`) VALUES
(2, 'E41161549', 'Maling Pro', 'Ketua', 2016, 'Wirausaha', 'Tambora 15, Malang'),
(3, 'E13123hja', 'qwe', 'qwe', 2017, 'PNS', 'Tambora 15, Malang'),
(4, 'E13123hja', 'Maling Pro', 'Ketua', 2016, 'Wirausaha', 'Tambora 15, Malang'),
(8, 'awd', 'Maling Pro', 'Ketua', 2016, 'Wirausaha', 'Tambora 15, Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `prestasi` varchar(45) NOT NULL,
  `thn_prestasi` int(45) NOT NULL,
  `tingkat_prestasi` varchar(45) NOT NULL,
  `juara_prestasi` varchar(45) NOT NULL,
  `gambar_prestasi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nis`, `prestasi`, `thn_prestasi`, `tingkat_prestasi`, `juara_prestasi`, `gambar_prestasi`) VALUES
(1, 'E41161549', 'Maling International', 2017, 'Dunia', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `level` varchar(45) NOT NULL,
  `nis` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `nis`) VALUES
('US0001', 'ujang', '123', '1', 'E41161549'),
('US0002', 'adwd', '123', '2', 'e345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `user_id_user` (`user_id_user`);

--
-- Indexes for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD PRIMARY KEY (`id_organisasi`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  MODIFY `id_organisasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  ADD CONSTRAINT `tb_event_ibfk_1` FOREIGN KEY (`user_id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD CONSTRAINT `tb_organisasi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_alumni` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD CONSTRAINT `tb_pekerjaan_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_alumni` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD CONSTRAINT `tb_prestasi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_alumni` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
