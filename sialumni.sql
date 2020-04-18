-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 05:00 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `tb_alumni`
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
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`nis`, `nama_alumni`, `tempat_lahir`, `tgl_lahir`, `jk`, `alamat_awal`, `alamat_skr`, `tahun_masuk`, `tahun_keluar`, `kuliah`, `nama_ayah`, `nama_ibu`, `no_telp`, `agama`, `pekerjaan_ayah`, `pekerjaan_ibu`, `jurusan`, `nama_wali`, `pekerjaan_wali`, `foto`) VALUES
('E41161001', 'Sutrisna Bahriyadi', 'Wonosobo', '2020-04-14', 'Laki-laki', 'Jakarta', 'Singapura', 2014, 2017, 'Universitas Surabaya', 'Suprapto', 'Sikujo', '08983975332', 'Islam', 'Manajer Indomaret', 'Pegawai bank', 'Perbankan', 'Suiji', 'Kuli', '1a.jpg'),
('E41161002', 'Anisa Febrianti', 'Jombang', '2020-04-08', 'Perempuan', 'Tuban', 'Bali', 2013, 2016, 'Universitas brawijaya', 'Paino', 'Itur', '0897878978', 'Islam', 'Asisten Bank', 'Dosen UNESA', 'Administrasi bisnis', 'Aluca', 'Paruh Waktu', '2a.jpg'),
('E41161003', 'Aldi Ardiano', 'Mojokerto', '2020-03-04', 'Laki-laki', 'Jember', 'Yogyakarta', 2013, 2016, 'Universitas Indonesia', 'Tukinem', 'Puri', '0987653435', 'Islam', 'Bangunan', 'IRT', 'Peternakan', 'Sujiwo', 'Petani', '3a.jpg'),
('E41161004', 'Zainun Najib', 'Kediri', '2020-04-02', 'Laki-laki', 'Kediri', 'Maluku', 2015, 2018, 'Universitas Jember', 'Andi Malerang', 'Bukin', '0898747887', 'Kristen', 'Petani', 'Petani', 'Agribisnis', 'Astri', 'Penjaga toko', '4a.jfif'),
('E41161005', 'Ayu Ramadhani Putri', 'Jember', '2020-04-08', 'Perempuan', 'Wuluhan, Jember', 'Malang', 2013, 2016, 'Politeknik negeri jember', 'Suyadi', 'Elis Munawaroh', '085604959785', 'Islam', 'Pegawai Swasta', 'Ibu Rumah Tangga', 'Teknologi Informasi', 'Yayuk', 'Usaha bisinis Jualan', '5a.png'),
('E41161006', 'Toni Firmansyah', 'Banyuwangi', '2020-04-02', 'Laki - laki', 'Bali', 'Magetan', 2014, 2017, 'Universitas Muhammadiyah Jember', 'Supik', 'Asya', '098088980', 'Budha', 'Pegawai Swasta', 'Ibu Rumah Tangga', 'Politik', 'Argum', 'Freelancer', '6a.jfif'),
('E41161007', 'Rina Ardiyanti', 'Bondowoso', '2020-04-01', 'Perempuan', 'Bondowoso', 'Situbondo', 2015, 2019, 'Universitas Airlangga', 'Suprapto', 'Aini', '089797977', 'Islam', 'Guru', 'Guru', 'Pendidikan Matematika', 'Sulis', 'Swasta', '7a.jfif'),
('E41161008', 'Lintang Agustin', 'Jember', '2020-04-03', 'Perempuan', 'Jember', 'Jakarta', 2017, 2020, 'universitas Jember', 'Arto', 'Suana', '089797887', 'Islam', 'Wiraswasta', 'Ibu Rumah Tangga', 'Ekonomi Bisnis', 'Ambu', 'Pedagang', '8a.jfif'),
('E41161009', 'Ahira Labata', 'Situbondo', '2020-04-10', 'Laki-laki', 'Situbondo', 'Jember', 2011, 2014, 'Politeknik negeri jember', 'yuko', 'Tukiyem', '099789678976', 'Islam', 'Petani', 'Petani', 'Teknologi Informasi', 'Hiya', 'Pedagang', '9a.jpg'),
('E41161010', 'Mambaur Roziq Alwi', 'Jember', '2020-04-11', 'Laki laki', 'Jember', 'Jakarta', 2013, 2016, 'Politeknik Negeri Jember', 'Suyadi', 'Elisa', '0989087078', 'Islam', 'Wiraswasta', 'Ibu rumah tangga', 'Teknologi Informasi', 'Iva', 'Pedagang', '10a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
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
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tgl_berita`, `gambar_berita`, `penulis`) VALUES
('BR0001', 'Siswa berhasil menemukan obat kanker', '<p>Siswa ini berhasil menemukan obat dari kelapa yang dapat menyembuhkan kanker dengan perawatan yang luarbiasa dan terbukti ampuh menyembuhkan.</p>', '2020-04-07 01:18:12', 'b1.jpeg', 'Ahira'),
('BR0002', 'Pembangunan SMKN 1 Malang Sangat Cepat', 'Lalu penilitian dilanjutkan dengan uji sampel lanjutan yang menggunakan dua ekor mencit betina atau tikus kecil berwarna putih yang sudah diinduksi atau disuntikkan zat pertumbuhan sel tumor atau kanker.\r\n', '2020-04-07 01:22:01', 'b2.jpg', 'Baur'),
('BR0003', 'MOS dilaksanakan secara serentak', 'Berdasarkan hasil tertulis uji laboratorium dari Universitas Lambung Mangkurat tersebut, ketiga siswa dibantu guru pembimbing mengolah kayu bajakah menjadi serbuk teh siap sedu.\r\n', '2020-04-07 01:23:02', 'b4.png', 'Rezhi'),
('BR0004', 'Sekolah jadi sepi setelah corona', 'Setelah sukses di Bandung, karya ilmiah dari ketiga siswa tersebut dipilih mewakili Indonesia, untuk tampil dalam perlombaan tingkat internasional, dalam ajang World Invention Olympic (WICO) di Seoul, Korea Selatan.\r\n', '2020-04-07 01:26:00', 'b3.jpg', 'Gita'),
('BR0005', 'Siswa Ikut Andil dalam JFC', 'Awalnya, mereka merasa tidak yakin karya dibawa ke tingkat internasional itu akan berhasil meraih juara. Namun mereka tetap berusaha tampil sebaik mungkin.\r\n', '2020-04-07 01:26:00', 'b5.jpg', 'Baur'),
('BR0006', 'Pengenalan Sekolah sejak baru masuk', 'Setelah sukses di Bandung, karya ilmiah dari ketiga siswa tersebut dipilih mewakili Indonesia, untuk tampil dalam perlombaan tingkat internasional, dalam ajang World Invention Olympic (WICO) di Seoul, Korea Selatan.', '2020-04-07 01:26:00', 'b6.jpg', 'Ahira');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
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
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `judul_event`, `tanggal`, `isi_event`, `kategori_event`, `status_event`, `gambar_event`, `user_id_user`) VALUES
('EV0001', 'PT ultimate Stron Loker Fresh Graduate', '2020-04-07 00:42:04', 'Anak perusahaan PT Indonesia Power (PLN Group) membuka lowongan kerja untuk tiga posisi sekaligus yang dibuka hingga 10 Maret 2020.', 'loker', 'diterima', '1L.jpg', 'US0007'),
('EV0002', 'PT Furindo Sakti Sejahtera', '2020-04-07 00:47:15', 'PT. Furindo Sakti Sejahtera yang bergerak di bidang manufaktur kemasan plastik sedang membutuhkan admin produksi yang kompeten dibidangnya.\r\n', 'loker', 'diterima', '2L.jpg', 'US0008'),
('EV0003', ' PT. Tjipta Widjaya Sejahtera Butik Dukomsel', '2020-04-07 00:47:15', 'PT. Tjipta Widjaya Sejahtera sedang membutuhkan Programmer / WEB Developer', 'loker', 'diterima', '3L.jpg', 'US0009'),
('EV0004', 'PT Duta Kekar Plasindo, Sragen', '2020-04-07 00:56:31', 'PT Duta Kekar Plasindo berlokasi di Sambirembe, Kalijambe, Sragen dan bergerak dibidang produksi karung plastik membutuhkan tenaga yang handal untuk mengisi posisi Staff Pembelian', 'loker', 'diterima', '4L.jpg', 'US0008'),
('EV0005', 'PHP DEVELOPER ARCA INTERNATIONAL', '2020-04-07 00:56:31', 'Arca International adalah award-winning software company yang berbasis di Jakarta. PT. Arca International telah berhasil mengembangkan beberapa produk yang sukses di pasaran. Seiring dengan semakin berkembangnya perusahaan, maka kami membuka kesempatan untuk bergabung.', 'loker', 'diterima', '5L.jpg', 'US0009'),
('EV0006', 'PT Pyxis Solution', '2020-04-07 00:56:31', 'Dengan pengalaman lebih dari 25 tahun dalam kemasan plastik, kami terus melakukan inovasi mengikuti perkembangan di dalam bidang kemasan plastik ', 'loker', 'diterima', '5L.jpg', 'US0002'),
('EV0007', 'Reuni Akbar Angkatan 2011', '2020-04-07 01:00:57', 'Meski tak semua acara reuni, apalagi dengan embel-embel \"akbar,\" bisa memuaskan semua orang, setidaknya Anda dan teman-teman panitia bisa menggelar reuni akbar yang berkesan dan pantas dikenang (#tsaah #memori).', 'reuni', 'diterima', 'r1.jpg', 'US0001'),
('EV0008', 'Pertemuan Akbar Argistra Angkatan 2008', '2020-04-07 01:06:51', 'Persiapannya pun tak seribet acara pernikahan, namun Anda harus lebih detail. simak langkah-langkah yang bisa Anda terapkan berikut!   ', 'reuni', 'diterima', 'r2.jpg', 'US0001'),
('EV0009', 'Tasyakuran Akbar Kelulusan 2020', '2020-04-07 01:06:51', 'Tim panitia menentukan kesuksesan acara. Setelah sepakat mengadakan reuni akbar, segera bentuk tim panitia, dimulai dari memilih ketua panitia. ', 'reuni', 'diterima', 'r3.jpg', 'US0003'),
('EV0010', 'Reuni Bersama Angkatan Muda 2017', '2020-04-07 01:06:51', 'Pilihlah ketua yang aktif, cukup populer di antara para alumni, memiliki kemampuan mengorganisasi kegiatan, dan (ini paling penting) mau dan bisa meluangkan waktu untuk menjalankan tugasnya. ', 'reuni', 'diterima', 'r4.jpg', 'US0003'),
('EV0011', 'Kumpul Bareng Kopdar 11', '2020-04-07 01:06:51', 'Kemudian bentuk tim yang terdiri atas seksi keuangan atau pendanaan, acara, perlengkapan, publikasi, dokumentasi, dan bagian lain yang diperlukan. Pilihlah orang-orang yang memang kompeten di bidangnya', 'reuni', 'diterima', 'r5.jpg', 'US0010'),
('EV0012', 'Reuni Bersama Mahasiswa UNEJ', '2020-04-07 01:06:51', 'Di sinilah gaya anak old school diperlukan: Melihat arsip siswa sampai menelepon teman-teman lain. Dari data valid yang telah terkumpul dapat dibuat estimasi berapa jumlah alumni yang akan datang. Jangan terlalu muluk; 50% dari undangan yang disebar sudah bagus.\r\n', 'reuni', 'diterima', 'r6.jpg', 'US0002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_organisasi`
--

CREATE TABLE `tb_organisasi` (
  `id_organisasi` int(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_org` varchar(45) NOT NULL,
  `tahun` int(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
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
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `nis`, `deskripsi`, `jabatan_pekerjaan`, `tahun_pekerjaan`, `bidang`, `alamat`) VALUES
(12, 'E41161002', 'Pegawai Bank', 'Customer Service', 2020, 'Perbankan', 'Kabupaten Jember');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
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
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nis`, `prestasi`, `thn_prestasi`, `tingkat_prestasi`, `juara_prestasi`, `gambar_prestasi`) VALUES
(1, 'E41161001', 'Lomba baca puisi nasional', 2018, 'Nasional', '1', '1p.jpg'),
(2, 'E41161002', 'Juara lomba cerdas cermat', 2019, 'Kabupaten', '2', '2p.jpg'),
(3, 'E41161003', 'Juara Olimpiade Matematika', 2020, 'Provinsi', '1', '3p.jpg'),
(4, 'E41161004', 'Kaligrafi Maulid Nabi', 2019, 'Nasional', '1', '4p.jpeg'),
(5, 'E41161005', 'Lomba Duta SMKN', 2019, 'Nasional', '1', '5p.jpeg'),
(6, 'E41161006', 'Gus dan ning se Jawa timur', 2019, 'Provinsi', '2', '6p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `level` varchar(45) NOT NULL,
  `nis` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `nis`) VALUES
('US0001', 'user', 'user', '2', 'E41161001'),
('US0002', 'admin', 'admin', '1', 'E41161002'),
('US0003', 'aldi', 'aldi', '2', 'E41161003'),
('US0004', 'zainun', 'zainun', '2', 'E41161004'),
('US0005', 'ayu', 'ayu', '2', 'E41161005'),
('US0006', 'toni', 'toni', '2', 'E41161006'),
('US0007', 'rina', 'rina', '2', 'E41161007'),
('US0008', 'lintang', 'lintang', '2', 'E41161008'),
('US0009', 'ahira', 'ahira', '2', 'E41161009'),
('US0010', 'mambaur', 'mambaur', '2', 'E41161010');

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
  MODIFY `id_organisasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD CONSTRAINT `tb_event_ibfk_1` FOREIGN KEY (`user_id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_organisasi`
--
ALTER TABLE `tb_organisasi`
  ADD CONSTRAINT `tb_organisasi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_alumni` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD CONSTRAINT `tb_pekerjaan_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_alumni` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD CONSTRAINT `tb_prestasi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_alumni` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
