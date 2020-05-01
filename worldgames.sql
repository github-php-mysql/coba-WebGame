-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2018 pada 19.27
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldgames`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `domain_game`
--

CREATE TABLE `domain_game` (
  `id_domain_game` int(11) NOT NULL,
  `exe` varchar(10) NOT NULL,
  `iso` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `domain_game`
--

INSERT INTO `domain_game` (`id_domain_game`, `exe`, `iso`) VALUES
(1, '.Exe', '.Iso/Cso');

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE `games` (
  `id` int(100) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tgl_post` text NOT NULL,
  `tgl_release` text NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `processor` varchar(20) NOT NULL,
  `memory` varchar(10) NOT NULL,
  `gambar` text NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL,
  `link` text NOT NULL,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `link3` text NOT NULL,
  `link4` text NOT NULL,
  `link5` text NOT NULL,
  `keadaan` varchar(10) NOT NULL,
  `page` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `domain_game` varchar(10) NOT NULL,
  `posting` varchar(10) NOT NULL,
  `hot` varchar(15) NOT NULL,
  `rating` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`id`, `judul`, `tgl_post`, `tgl_release`, `kategori`, `keterangan`, `ram`, `processor`, `memory`, `gambar`, `gambar1`, `gambar2`, `gambar3`, `link`, `link1`, `link2`, `link3`, `link4`, `link5`, `keadaan`, `page`, `type`, `domain_game`, `posting`, `hot`, `rating`) VALUES
(69, 'Assassins creed 2', '21-07-2018', '2018-07-06', 'Action', 'mnmnmmnn', '2 GB', '2.5 ghz', '300 GB', 'Screenshot (31).png', '', '', '', 'http://localhost/project/', 'http://localhost/project/', 'http://localhost/project/', '', '', '', 'publish', 'current-menu-item', 'Pc', '.Exe', '', '', 4),
(70, 'god of war', '21-07-2018', '2018-07-21', 'Action', '               ', '', '', '', '510420.jpg', '', '', '', '', '', '', '', '', '', 'draft', 'current-menu-item', 'Pc', '.Exe', '', '', 3),
(71, 'sssss', '21-07-2018', '2018-07-21', 'Action', '               ', '', '', '', '3D-Background-Wallpaper-8.jpg', '', '', '', '', '', '', '', '', '', 'publish', 'current-menu-item', 'Pc', '.Exe', '', '', 4),
(72, 'Gila Kau', '21-07-2018', '', 'Action', '               ', '', '', '', '3D-Abstract-Background-Wallpapers-Part-2-9.jpg', '', '', '', '', '', '', '', '', '', 'publish', 'current-menu-item', 'Pc', '.Exe', '', '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori`, `status`) VALUES
('Action', 'publish'),
('Horror', 'publish'),
('Online', 'publish'),
('Puzzle', 'publish'),
('Shooter', 'publish'),
('Sport', 'publish'),
('Strategy', 'publish'),
('World', 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keadaan`
--

CREATE TABLE `keadaan` (
  `id_keadaan` int(10) NOT NULL,
  `publish` varchar(10) NOT NULL,
  `draft` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keadaan`
--

INSERT INTO `keadaan` (`id_keadaan`, `publish`, `draft`) VALUES
(1, 'publish', 'draft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `navigasi`
--

CREATE TABLE `navigasi` (
  `id_navigasi` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `navigasi`
--

INSERT INTO `navigasi` (`id_navigasi`, `nama`) VALUES
('1', 'Action'),
('2', 'Sport'),
('3', 'Horror'),
('4', 'Shooter'),
('5', 'World'),
('6', 'Online'),
('7', 'Strategi'),
('8', 'Puzzle');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id_posting` int(11) NOT NULL,
  `terupdate` varchar(10) NOT NULL,
  `hot` varchar(10) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `sampah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id_posting`, `terupdate`, `hot`, `rating`, `sampah`) VALUES
(1, 'update', 'hot', 'rating', 'sampah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `nilai` int(100) NOT NULL,
  `fa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`nilai`, `fa`) VALUES
(0, '<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>'),
(1, '<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>'),
(2, '<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>'),
(3, '<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>'),
(4, '<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star-o\"></i>'),
(5, '<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>\r\n<i class=\"rating-star fa fa-star\"></i>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `pc` varchar(20) NOT NULL,
  `ppsspp` varchar(20) NOT NULL,
  `epsxe` varchar(20) NOT NULL,
  `ps2` varchar(20) NOT NULL,
  `nintendo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`id_type`, `pc`, `ppsspp`, `epsxe`, `ps2`, `nintendo`) VALUES
(1, 'Pc', 'Ppsspp', 'Epsxe', 'Ps2', 'Nintendo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_1`
--

CREATE TABLE `type_1` (
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type_1`
--

INSERT INTO `type_1` (`type`) VALUES
('Epsxe'),
('Nintendo'),
('Ppsspp'),
('Ps2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `domain_game`
--
ALTER TABLE `domain_game`
  ADD PRIMARY KEY (`id_domain_game`);

--
-- Indeks untuk tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori`);

--
-- Indeks untuk tabel `keadaan`
--
ALTER TABLE `keadaan`
  ADD PRIMARY KEY (`id_keadaan`);

--
-- Indeks untuk tabel `navigasi`
--
ALTER TABLE `navigasi`
  ADD PRIMARY KEY (`id_navigasi`);

--
-- Indeks untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_posting`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`nilai`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indeks untuk tabel `type_1`
--
ALTER TABLE `type_1`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `posting`
--
ALTER TABLE `posting`
  MODIFY `id_posting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
