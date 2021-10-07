-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 07.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_dika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `nama`, `alamat`, `kelas`, `jurusan`) VALUES
(1, 'Yurischa Aulya', '														Mojokerto', '																12A', '																			MIPA																						'),
(2, 'Vinka Amalia', '							Pasuruan', '								12B', '								MIPA'),
(3, 'Nio Dyah', '							Nganjuk', '								12C', '								MIPA'),
(4, 'Riris Silvia', '							Malang', '								12D', '								MIPA'),
(5, 'Eldha Nirwana', '							Tuban', '								12E', '								IPS'),
(6, 'Chelvin', '							Sawojajar', '								12F', '								MIPA'),
(7, 'Aldi Rismanto', '							Magetan', '								12G', '								MIPA'),
(8, 'Ayu citra', '							Kalimantan', '								12H', '								MIPA'),
(9, 'Muzammil', '							Jakarta', '								12I', '								IPS'),
(10, 'Bayu Asmara', '							Kendal', '								12E', '								IPS'),
(11, 'Akmal Naim', '							Sidoarjo', '								12B', '								MIPA'),
(12, 'Indra Reinhard', '							Sukomoro', '								12A', '								MIPA'),
(13, 'Andri Dwi Putra', '							Tulungagung', '								12C', '					IPS'),
(14, 'Sidik Dwi P', 'Takeran', '12A', 'MIPA'),
(15, 'M. Fisra', '							Kebonsari', '								12G', '								MIPA'),
(16, 'M. Regi Hardiansyah', '							Situbondo', '								12F', '								IPS'),
(17, 'Wahyu Saputra', '							TegalGondo', '								12H', '								MIPA'),
(18, 'M. Irwansyah', '							Kedungkandang', '								12H', '								IPS'),
(19, 'M. Ilham', '							Ngawi', '								12I', '								MIPA'),
(20, 'M. Hanif', '							Yogyakarta', '								12F', '						IPS'),
(21, 'Anisa Ayunda', 'SumberAsih', '12B', 'MIPA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT 'L',
  `status` enum('PNS','KONTRAK') DEFAULT 'PNS',
  `jabatan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `alamat`, `jenis_kelamin`, `status`, `jabatan`) VALUES
(101, 'Ririn Puji Astuti,S.Pd', 'Jl.Kembang jati No.01', 'P', 'PNS', 'Guru mapel Sejarah'),
(102, 'Ahmad Dardiri,S.Ag', 'Jl.Sumber jaya No.02', 'L', 'PNS', 'Guru mapel Agama'),
(103, 'Gunawan Risdianto,S.Pd', 'Jl.Cokrokertopati No.18', 'L', 'KONTRAK', 'Guru mapel Pkn'),
(104, 'Citra Kirana,M.Pd.', 'Jl.Pahlawan No.1B', 'P', 'PNS', 'Guru mapel Bahasa Inggris'),
(105, 'Hari Siswanto,S.Pd', 'Jl.Majapahit No.1C', 'L', 'KONTRAK', 'Guru mapel Penjaskes'),
(106, 'Endang Puryani,M.Pd', 'Jl.Kembang Sawit No.11', 'P', 'PNS', 'Guru mapel Matematika'),
(107, 'Amirudin,S.Pd', 'Jl.Kartini N0.2A', 'L', 'KONTRAK', 'Guru mapel Fisika'),
(108, 'Halimah Aisyah,S.Pd', '																Jl.Sriwijaya No.14									', 'P', 'PNS', '																Guru mapel Ekonomi	'),
(109, 'Dra.Elang Pradana', '							Jl.Rogonoto N0.1A', 'L', 'PNS', '							Guru mapel Bahasa Jawa'),
(110, 'Sinta Alya', 'Jl.Kuwonharjo No.15', 'P', 'KONTRAK', 'Guru mapel Kimia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `sumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `deskripsi`, `sumber`) VALUES
(12, 'ppdb', '							Penerimaan siswa baru tahun 2017', '								https://mage');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepalasekolah`
--

CREATE TABLE `kepalasekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pangkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepalasekolah`
--

INSERT INTO `kepalasekolah` (`id`, `nama`, `alamat`, `pangkat`) VALUES
(111, 'Dra. Dika Ayu Wijayanti', 'Magetan', 'Pembina/ IVB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin1', '202cb962ac59075b964b07152d234b70', '1'),
(2, 'admin2', '81dc9bdb52d04dc20036dbd8313ed055', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
