-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2023 pada 07.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c45`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_atribut`
--

CREATE TABLE `data_atribut` (
  `id_atribut` int(8) NOT NULL,
  `kode_atribut` varchar(50) NOT NULL,
  `nama_atribut` varchar(50) NOT NULL,
  `nama_nilai_atribut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_atribut`
--

INSERT INTO `data_atribut` (`id_atribut`, `kode_atribut`, `nama_atribut`, `nama_nilai_atribut`) VALUES
(1, 'A3', 'Pekerjaan', 'Guru'),
(2, 'B2', 'Pendidikan', 'SLTA'),
(3, 'A2', 'Status Perkawinan', 'Duda'),
(4, 'A1', 'Pendidikan', 'SD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id_penduduk` int(8) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_dusun` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  `keterangan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`id_penduduk`, `no_kk`, `nik`, `nama`, `alamat_dusun`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `penghasilan`, `keterangan`) VALUES
(2, '7304050609100005', '7304051008600002', 'mustafa', 'Mattiro Baji', 'laki-laki', 'BT.PAEWAI', '8/10/60', 'islam', 'SD', 'Petani/pekebun', 'Kawin', '1000000', 'Layak'),
(4, '7304050609100005', '7304055107700001', 'Sahari', 'Mattiro Baji', 'perempuan', 'MT. BAJI', '7/11/70', 'islam', 'SLTP', 'Peternak', 'Janda', '1000000', 'Layak'),
(5, '7304051605160004', '7304050107500013', 'tarai', 'Mattiro Baji', 'laki-laki', 'lajayya', '1/7/50', 'islam', 'SLTP', 'Petani/pekebun', 'Duda', '1000000', 'Layak'),
(6, '7304050609100005', '7304051908900002', 'Muksin', 'Mattiro Baji', 'laki-laki', 'MT. BAJI', '19/8/90', 'islam', 'SLTA', 'Petani/pekebun', 'Kawin', '1000000', 'Layak'),
(7, '7304050410100014', '7304050702660003', 'Sattu', 'Mattiro Baji', 'laki-laki', 'MT. BAJI', '02/07/1966', 'islam', 'Tidak sekolah', 'Petani/pekebun', 'Duda', '1000000', 'Layak'),
(8, '7304050410100014', '7304054801670002', 'Hj. Marica', 'Mattiro Baji', 'perempuan', 'MT. BAJI', '01/08/1967', 'islam', 'Tidak Tamat SD', 'Mengurus Rumah Tangga', 'Kawin', '500000', 'Layak'),
(9, '7304052306080013', '7304050610860001', 'TAWANG ', 'Mattiro Baji', 'laki-laki', 'BT.Nompo', '06/10/1986', 'islam', 'D1/2', 'Dokter', 'Kawin', '5000000', 'Tidak Layak'),
(10, '7304052306080013', '7304055005910001', 'Nursanti', 'Mattiro Baji', 'perempuan', 'MT. BAJI', '10/05/1991', 'islam', 'D3 ', 'PNS', 'Kawin ', '5000000', 'Tidak Layak'),
(11, '7304050905150002', '7304054507970002', 'Sunarti', 'Mattiro Baji', 'perempuan', 'lajayya', '07/05/1997', 'islam', 'S1', 'Pegawai Honorer', 'Janda', '3000000', 'Tidak Layak'),
(12, '7304050212100008', '7304051901700001', 'fatta', 'Mattiro Baji', 'laki-laki', 'lajayya', '01/19/1970', 'islam', 'Tidak sekolah', 'Petani/pekebun', 'Duda', '1000000', 'Layak'),
(13, '730405021210008', '7304056010700001', 'Hasna', 'Lajayya', 'perempuan', 'lajayya', '10/20/1970', 'islam', 'SLTA', 'Wiraswasta', 'Kawin ', '3000000', 'Tidak Layak'),
(14, '7304052808120009', '7304052001170000', 'Sodding', 'Lajayya', 'laki-laki', 'MT. BAJI', '01/20/1970', 'islam', 'SLTA', 'Petani/pekebun', 'Kawin ', '1000000', 'Layak'),
(15, '7304052808120009', '7304056804720002', 'Yanti', 'Lajayya', 'perempuan', 'MT. BAJI', '04/28/1972', 'islam', 'D3 ', 'Guru', 'Kawin ', '3000000', 'Tidak Layak'),
(16, '7304053004100007', '7304052607800003', 'H.puddin', 'Lajayya', 'laki-laki', 'Benrong', '07/26/1980', 'islam', 'Tidak Tamat SD', 'Petani/pekebun', 'Kawin', '1000000', 'Layak'),
(17, '7304053004100007', '7304054309820001', 'HJ.Tina', 'Lajayya', 'perempuan', 'lajayya', '09/03/1982', 'islam', 'SD', 'Mengurus Rumah Tangga', 'Kawin ', '500000', 'Layak'),
(18, '7304053004100006', '7304054102630001', 'HJ.bulang', 'Lajayya', 'perempuan', 'lajayya', '02/01/1963', 'islam', 'SD', 'Petani/pekebun', 'Janda', '1000000', 'Layak'),
(19, '7304053004100006', '7304051990160000', 'Jusman', 'Lajayya', 'laki-laki', 'MT. BAJI', '08/17/1992', 'islam', 'SLTA', 'Wiraswasta', 'Duda', '3000000', 'Tidak Layak'),
(20, '7304051606080002', '7304051901600003', 'Maseng', 'Lajayya', 'perempuan', 'MT. BAJI', '01/19/1960', 'islam', 'Tidak sekolah', 'Petani/pekebun', 'Kawin', '1000000', 'Layak'),
(21, '7304051605160004', '7304056005630002', 'Minang', 'Lajayya', 'perempuan', 'MT. BAJI', '05/20/1963', 'islam', 'SLTP', 'Wiraswasta', 'Kawin ', '3000000', 'Tidak Layak'),
(22, '7304051606080002', '7304056007900001', 'Narti', 'Lajayya', 'perempuan', 'MT. BAJI', '07/20/1990', 'islam', 'SD', 'Petani/pekebun', 'Kawin', '1000000', 'Layak'),
(23, '7304052511140391', '7304055002650001', 'Bau DG kebo', 'Lantang', 'perempuan', 'MT. BAJI', '02/10/1965', 'islam', 'Tidak Tamat SD', 'Mengurus Rumah Tangga', 'Kawin ', '500000', 'Layak'),
(24, '7304052511140391', '7304057112660216', 'Nia', 'Lantang', 'perempuan', 'MT. BAJI', '12/31/1966', 'islam', 'SD', 'Petani/pekebun', 'Kawin', '1000000', 'Layak'),
(25, '7304052511140391', '7304053112500002', 'Juni', 'Lantang', 'laki-laki', 'Gantarang', '12/31/1950', 'islam', 'SLTA', 'Petani/pekebun', 'Duda', '1000000', 'Layak'),
(26, '7304051106110003', '7304055002550000', 'Jumania', 'Lantang', 'perempuan', 'lajayya', '02/10/1955', 'islam', 'D1/2', 'Dokter', 'Janda', '5000000', 'Tidak Layak'),
(27, '7304051106110003', '7304055204720001', 'Sario', 'Lantang', 'perempuan', 'lajayya', '04/21/1972', 'islam', 'Tidak sekolah', 'Petani/pekebun', 'Janda', '1000000', 'Layak'),
(28, '7304051106110003', '7304054610820004', 'Noni', 'Lantang', 'perempuan', 'lajayya', '10/15/1982', 'islam', 'SLTP', 'Mengurus Rumah Tangga', 'Kawin ', '500000', 'Layak'),
(29, '7304052808120028', '7304054701800002', 'Suri', 'Lantang', 'perempuan', 'MT. BAJI', '01/07/1960', 'islam', 'S1', 'Pegawai Honorer', 'Kawin ', '3000000', 'Tidak Layak'),
(30, '7304052808120028', '730405480180003', 'Ajo', 'Lantang', 'perempuan', 'MT. BAJI', '01/08/1961', 'islam', 'Tidak Tamat SD', 'Wiraswasta', 'Janda', '3000000', 'Tidak Layak'),
(31, '7304051112100006', '7304053112440002', 'H.baso', 'Lantang', 'laki-laki', 'lajayya', '12/31/1944', 'islam', 'SLTA', 'Petani/pekebun', 'Duda', '1000000', 'Layak'),
(32, '7304051112100006', '7304057112460158', 'HJ.tanni', 'Lantang', 'perempuan', 'parang lompoa', '12/31/1946', 'islam', 'D3 ', 'PNS', 'Kawin', '5000000', 'Tidak Layak'),
(33, '7304050212100012', '7304051911730002', 'Marusu', 'Bt.Masunggu', 'laki-laki', 'lajayya', '11/19/1973', 'islam', 'SLTP', 'Petani/pekebun', 'Kawin', '1000000', 'Layak'),
(34, '7304050212100012', '7304056012740002', 'Sainab', 'Bt.Masunggu', 'perempuan', 'lajayya', '12/20/1974', 'islam', 'Tidak sekolah', 'Mengurus Rumah Tangga', 'Janda', '500000', 'Layak'),
(35, '7304050605120003', '7304051205840009', 'Syamsuddin', 'Bt.Masunggu', 'laki-laki', 'lajayya', '05/12/1984', 'islam', 'D1/2', 'Dokter', 'Kawin ', '5000000', 'Tidak Layak'),
(36, '7304050605120003', '7304055504850004', 'Mantang', 'Bt.Masunggu', 'perempuan', 'lajayya', '04/15/1985', 'islam', 'S1', 'Pegawai Honorer', 'Kawin ', '3000000', 'Tidak Layak'),
(37, '7304050901140000', '7304051507970004', 'Suardi', 'Bt.Masunggu', 'laki-laki', 'MT. BAJI', '07/15/1997', 'islam', 'SLTA', 'Petani/pekebun', 'Kawin', '1000000', 'Layak'),
(38, '7304050901140000', '7304107112940251', 'Rostina', 'Bt.Masunggu', 'perempuan', 'jangan-jangan ', '12/31/1997', 'islam', 'D3 ', 'PNS', 'Kawin ', '5000000', 'Tidak Layak'),
(39, '7304052908120025', '7304053112310412', 'Kitta', 'Bt.Masunggu', 'laki-laki', 'BT.Nompo', '12/31/1971', 'islam', 'Tidak Tamat SD', 'Petani/pekebun', 'Duda', '1000000', 'Layak'),
(40, '7304052908120025', '7304053112710380', 'Mina', 'Bt.Masunggu', 'laki-laki', 'lajayya', '12/31/1973', 'islam', 'D1/2', 'Dokter', 'Kawin ', '5000000', 'Tidak Layak'),
(41, '7304053105070001', '7304050100744001', 'Dani', 'Bt.Masunggu', 'laki-laki', 'MT. BAJI', '07/01/1944', 'islam', 'SD', 'Petani/pekebun', 'Duda', '1000000', 'Layak'),
(42, '7304053105070001', '7304054107520002', 'Jumasia ', 'Bt.Masunggu', 'perempuan', 'MT. BAJI', '07/01/1952', 'islam', 'Tidak Tamat SD', 'Mengurus Rumah Tangga', 'Janda', '500000', 'Layak'),
(43, '7304052205140007', '7304053112800304', 'Ansar', 'Tombolo kota', 'laki-laki', 'MT. BAJI', '12/123/1994', 'islam', 'SLTA', 'Wiraswasta', 'Duda', '3000000', 'Tidak Layak'),
(44, '7304052205140007', '7304055509380003', 'Rafina', 'Tombolo kota', 'perempuan', 'Tompo kelara', '12/31/1989', 'islam', 'D1/2', 'Wiraswasta', 'Kawin ', '3000000', 'Tidak Layak'),
(45, '7304052906160001', '7304056903810001', 'Kami', 'Tombolo kota', 'perempuan', 'MT. BAJI', '03/29/1981', 'islam', 'Tidak sekolah', 'Mengurus Rumah Tangga', 'Janda', '500000', 'Layak'),
(46, '7304051601120016', '7304053112910181', 'Saharuddin', 'Tombolo kota', 'laki-laki', 'Paloe', '12/31/1991', 'islam', 'SD', 'Petani/pekebun', 'Kawin ', '1000000', 'Layak'),
(47, '7304051601120016', '7304055502930001', 'Muliati', 'Tombolo kota', 'perempuan', 'lajayya', '02/15/1993', 'islam', 'D3 ', 'PNS', 'Janda', '5000000', 'Tidak Layak'),
(48, '7304053003090012', '7304050312000001', 'Yandi', 'Tombolo selatan', 'laki-laki', 'MT. BAJI', '12/03/2000', 'islam', 'SLTP', 'Petani/pekebun', 'Kawin ', '1000000', 'Layak'),
(49, '730405200410004', '7304052807500001', 'Jaga', 'Tombolo selatan', 'laki-laki', 'MT. BAJI', '07/28/1950', 'islam', 'SD', 'Petani/pekebun', 'Duda', '1000000', 'Layak'),
(50, '7304051212100014', '7304051502600002', 'Hama', 'Tombolo selatan', 'laki-laki', 'MT. BAJI', '02/15/1960', 'islam', 'Tidak sekolah', 'Petani/pekebun', 'kawin', '1000000', 'Layak'),
(51, '7304051212100014', '7304056003710001', 'Noro', 'Tombolo selatan', 'perempuan', 'MT. BAJI', '03/20/1971', 'islam', 'SD', 'Mengurus Rumah Tangga', 'Kawin ', '500000', 'Layak'),
(54, '7304050410100014', '7111345299111001', 'ningsi', 'Tombolo kota', 'perempuan', 'jenepontio', '19/08/90', 'islam', 'Tidak sekolah', 'Mengurus Rumah Tangga', 'Kawin ', '500000', 'Layak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perhitungan`
--

CREATE TABLE `perhitungan` (
  `iterasi1` varchar(50) NOT NULL,
  `jumlah` int(8) NOT NULL,
  `layak` int(8) NOT NULL,
  `tidak_layak` int(8) NOT NULL,
  `entropy` int(8) NOT NULL,
  `informasion_gain` int(8) NOT NULL,
  `split_info` int(8) NOT NULL,
  `gain_rasio` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `hak_akses` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'penduduk', '123456789', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_atribut`
--
ALTER TABLE `data_atribut`
  ADD PRIMARY KEY (`id_atribut`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_atribut`
--
ALTER TABLE `data_atribut`
  MODIFY `id_atribut` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id_penduduk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
