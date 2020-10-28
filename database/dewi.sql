-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Okt 2020 pada 15.02
-- Versi server: 8.0.18
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `pesan`) VALUES
(3, 'adjie', 'hellowordpart1@gmail.com', 'hallo guys');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_about`
--

CREATE TABLE `p_about` (
  `id_about` int(11) NOT NULL,
  `judul` text COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_about`
--

INSERT INTO `p_about` (`id_about`, `judul`, `isi`) VALUES
(1, 'Page About Us', '<p style=\"text-align: justify;\">Fakultas Ekonomi dan Bisnis Universitas Bina Insan Lubuklinggau merupakan salah satu Fakultas Universitas Bina Insan yang berada di Kota Lubuklinggau, Provinsi Sumatera Selatan, yang berdiri pada tanggal 6 agustus tahun 1999. Fakultas Universitas Bina Insan sampai sekarang adalah kampus yang telah diakui oleh Masyarakat dan Pemerintah Kota Lubuklinggau dan sekitarnya sebagai salah satu perguruan tinggi swasta di Indonesia, khususnya di L2Dikti II.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_artikel`
--

CREATE TABLE `p_artikel` (
  `partikelid` int(11) NOT NULL,
  `pa_judul` text COLLATE utf8mb4_general_ci NOT NULL,
  `pa_tgl` date NOT NULL,
  `pa_isi` text COLLATE utf8mb4_general_ci NOT NULL,
  `pa_link` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pa_file` varchar(99) COLLATE utf8mb4_general_ci NOT NULL,
  `pa_penulis` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_artikel`
--

INSERT INTO `p_artikel` (`partikelid`, `pa_judul`, `pa_tgl`, `pa_isi`, `pa_link`, `id_kategori`, `pa_file`, `pa_penulis`) VALUES
(1, 'berita utama hari ini', '2020-10-24', 'Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.', 'berita-utama-hari-ini', 1, '1.png', 'adjie'),
(2, 'What is Lorem Ipsum?', '2020-10-24', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'What-is-Lorem-Ipsum', 1, '2.png', 'admin'),
(3, 'Where does it come from?', '2020-10-23', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Where-doe-it-come-rom', 1, '3.png', 'admin'),
(4, 'Where can I get some', '2020-10-24', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Where-can-I-get-some', 1, '4.png', 'anonim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_detail_menu`
--

CREATE TABLE `p_detail_menu` (
  `pdetailmenuid` int(11) NOT NULL,
  `pdm_link` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_detail_menu`
--

INSERT INTO `p_detail_menu` (`pdetailmenuid`, `pdm_link`) VALUES
(1, 'home/about'),
(2, 'home/fakultas'),
(3, 'home/blog'),
(4, 'home/prodi'),
(5, 'home/kontak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_fakultas`
--

CREATE TABLE `p_fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `judul` text COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_fakultas`
--

INSERT INTO `p_fakultas` (`id_fakultas`, `judul`, `isi`) VALUES
(1, 'Page Fakultas', '<div data-wow-delay=\"400ms\">\r\n<p style=\"text-align: justify;\">Fakultas Ekonomi dan Bisnis Universitas Bina Insan Lubuklinggau merupakan salah satu Fakultas Universitas Bina Insan yang berada di Kota Lubuklinggau, Provinsi Sumatera Selatan, yang berdiri pada tanggal 6 agustus tahun 1999. Fakultas Universitas Bina Insan sampai sekarang adalah kampus yang telah diakui oleh Masyarakat dan Pemerintah Kota Lubuklinggau dan sekitarnya sebagai salah satu perguruan tinggi swasta di Indonesia, khususnya di L2Dikti II.</p>\r\n</div>\r\n<div data-wow-delay=\"500ms\">\r\n<p style=\"text-align: justify;\">Fakultas Ekonomi dan Bisnis Universitas Bina Insan Lubuklinggau memiliki Dua (II) Program Studi Strata Satu yaitu Program Studi Manajemen dan Program Studi Akuntansi. Untuk Program Studi yang ada di STIE MURA Lubuklinggau statusnya sudah Terakreditasi semua, dengan SK No. ................................ untuk Program Studi Manajemen, SK. No. ................................ untuk Program Studi Akuntansi. Kini Fakultas Ekonomi dan Bisnis UNIV BI Lubuklinggau mengajukan Re-Akreditasi institusi setelah melakukan berbagai evaluasi, perbaikan, dan kemajuan, bukan saja untuk mendapatkan pengakuan dari BAN-PT, namun juga mendapat pengakuan dari sivitas akademika, stakeholder, dan masyarakat di Indonesia..</p>\r\n</div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_galeri`
--

CREATE TABLE `p_galeri` (
  `pfotoid` int(11) NOT NULL,
  `pf_judul` text COLLATE utf8mb4_general_ci NOT NULL,
  `pf_tanggal` date NOT NULL,
  `pf_ket` text COLLATE utf8mb4_general_ci NOT NULL,
  `pfuserid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pf_file` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_galeri`
--

INSERT INTO `p_galeri` (`pfotoid`, `pf_judul`, `pf_tanggal`, `pf_ket`, `pfuserid`, `pf_file`) VALUES
(1, 'photo bersama', '2020-10-24', 'bagus', '1', 'img/bg-img/1.png'),
(2, 'test 1', '2020-10-24', 'test 1', '1', 'img/bg-img/2.png'),
(3, 'test 2', '2020-10-24', 'test', '1', 'img/bg-img/3.png'),
(6, 'photo ad', '2020-10-28', 'ada', '1', 'img/bg-img/5f993f0ac8e83.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_ketegori`
--

CREATE TABLE `p_ketegori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_ketegori`
--

INSERT INTO `p_ketegori` (`id_kategori`, `kategori`) VALUES
(1, 'news'),
(2, 'artikel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_menu`
--

CREATE TABLE `p_menu` (
  `pmenuid` int(20) NOT NULL,
  `pdetailmenuid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pm_nama` text COLLATE utf8mb4_general_ci NOT NULL,
  `pm_status` enum('0','1') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_menu`
--

INSERT INTO `p_menu` (`pmenuid`, `pdetailmenuid`, `pm_nama`, `pm_status`) VALUES
(2, '2', 'fakultas', '1'),
(3, '3', 'blog', '1'),
(4, '4', 'prodi', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_pengumuman`
--

CREATE TABLE `p_pengumuman` (
  `id_pem` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `judul` text COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL,
  `file` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_pengumuman`
--

INSERT INTO `p_pengumuman` (`id_pem`, `tgl`, `judul`, `isi`, `file`) VALUES
(1, '2020-10-24', 'Pengumuman 1', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 'lb-1.jpg'),
(2, '2020-10-24', 'penguman 2', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 'lb-2.jpg'),
(3, '2020-10-24', 'pengumuman 3', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 'lb-3.jpg'),
(4, '2020-10-24', 'Pengumuman 4', 'as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text', 'lb-4.jpg'),
(5, '2020-10-28', 'Pengumuman 5', 'Berhasil edit pengumuman', '5f9984ea6ea8c.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_prodi`
--

CREATE TABLE `p_prodi` (
  `id_prodi` int(11) NOT NULL,
  `judul` text COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_prodi`
--

INSERT INTO `p_prodi` (`id_prodi`, `judul`, `isi`) VALUES
(1, 'Page Prodi', '<div data-wow-delay=\"400ms\">\r\n<p style=\"text-align: justify;\">Fakultas Ekonomi dan Bisnis Universitas Bina Insan Lubuklinggau merupakan salah satu Fakultas Universitas Bina Insan yang berada di Kota Lubuklinggau, Provinsi Sumatera Selatan, yang berdiri pada tanggal 6 agustus tahun 1999. Fakultas Universitas Bina Insan sampai sekarang adalah kampus yang telah diakui oleh Masyarakat dan Pemerintah Kota Lubuklinggau dan sekitarnya sebagai salah satu perguruan tinggi swasta di Indonesia, khususnya di L2Dikti II.</p>\r\n</div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_slider`
--

CREATE TABLE `p_slider` (
  `psliderid` int(20) NOT NULL,
  `ps_file` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `ps_tanggal` date NOT NULL,
  `ps_title` text COLLATE utf8mb4_general_ci NOT NULL,
  `ps_status` enum('0','1') COLLATE utf8mb4_general_ci NOT NULL,
  `ps_userid` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `ps_link` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_slider`
--

INSERT INTO `p_slider` (`psliderid`, `ps_file`, `ps_tanggal`, `ps_title`, `ps_status`, `ps_userid`, `ps_link`) VALUES
(1, 'bimtek.jpg', '2020-10-28', 'Bimtek Univbi', '1', '1', 'home'),
(2, 'kuliah-di-luar-kampus.jpg', '2020-10-24', 'Kuliah Keluar Kampus', '1', '1', 'home'),
(4, '5f9918dcb2485.jpg', '2020-10-28', 'Talk show Papeja', '1', '1', 'http://univbinainsan.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_user`
--

CREATE TABLE `p_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  `pupegnip` int(20) NOT NULL,
  `role` enum('1','2') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `p_user`
--

INSERT INTO `p_user` (`id_user`, `username`, `password`, `pupegnip`, `role`) VALUES
(1, 'admin', '$2y$10$jPoZjCs/do8LFZUGcPQcqeD0vJMZ3TRrB56dTwGtllcgV3lGkQDMa', 32222222, '1'),
(2, 'pengelola', '$2y$10$jPoZjCs/do8LFZUGcPQcqeD0vJMZ3TRrB56dTwGtllcgV3lGkQDMa', 1213, '2'),
(4, 'super', '$2y$10$FE8p7Kdkt2qv/V1saOkZzOv4D7BiEOhztobLxv8W6bVylpWhaq2ji', 1213, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_seting` int(11) NOT NULL,
  `judul` text COLLATE utf8mb4_general_ci NOT NULL,
  `telp` text COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_seting`, `judul`, `telp`, `alamat`, `email`, `logo`) VALUES
(1, 'Universitas BinaInsan', '+6282281022494', '31626 JL. HM Soeharto No.kel, Lubuk Kupang Selatan 1 Kota Lubuk Linggau, Sumatra Selatan', 'mail2@mail.com', '5f95245db7018.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `id_visitor` int(11) NOT NULL,
  `visitor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `p_about`
--
ALTER TABLE `p_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `p_artikel`
--
ALTER TABLE `p_artikel`
  ADD PRIMARY KEY (`partikelid`);

--
-- Indeks untuk tabel `p_detail_menu`
--
ALTER TABLE `p_detail_menu`
  ADD PRIMARY KEY (`pdetailmenuid`);

--
-- Indeks untuk tabel `p_fakultas`
--
ALTER TABLE `p_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `p_galeri`
--
ALTER TABLE `p_galeri`
  ADD PRIMARY KEY (`pfotoid`);

--
-- Indeks untuk tabel `p_ketegori`
--
ALTER TABLE `p_ketegori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `p_menu`
--
ALTER TABLE `p_menu`
  ADD PRIMARY KEY (`pmenuid`);

--
-- Indeks untuk tabel `p_pengumuman`
--
ALTER TABLE `p_pengumuman`
  ADD PRIMARY KEY (`id_pem`);

--
-- Indeks untuk tabel `p_prodi`
--
ALTER TABLE `p_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `p_slider`
--
ALTER TABLE `p_slider`
  ADD PRIMARY KEY (`psliderid`);

--
-- Indeks untuk tabel `p_user`
--
ALTER TABLE `p_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_seting`);

--
-- Indeks untuk tabel `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id_visitor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `p_about`
--
ALTER TABLE `p_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `p_artikel`
--
ALTER TABLE `p_artikel`
  MODIFY `partikelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `p_detail_menu`
--
ALTER TABLE `p_detail_menu`
  MODIFY `pdetailmenuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `p_fakultas`
--
ALTER TABLE `p_fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `p_galeri`
--
ALTER TABLE `p_galeri`
  MODIFY `pfotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `p_ketegori`
--
ALTER TABLE `p_ketegori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `p_menu`
--
ALTER TABLE `p_menu`
  MODIFY `pmenuid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `p_pengumuman`
--
ALTER TABLE `p_pengumuman`
  MODIFY `id_pem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `p_prodi`
--
ALTER TABLE `p_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `p_slider`
--
ALTER TABLE `p_slider`
  MODIFY `psliderid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `p_user`
--
ALTER TABLE `p_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_seting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id_visitor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
