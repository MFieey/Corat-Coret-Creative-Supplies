-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2025 pada 17.58
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ccs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(35) NOT NULL,
  `admin_pass` varchar(35) NOT NULL,
  `admin_nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_nama`) VALUES
(1, 'admin', 'admin', 'admin'),
(5, 'fieey', 'fieey098', 'Admin FIeey');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(35) NOT NULL,
  `kategori_satuan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `kategori_nama`, `kategori_satuan`) VALUES
(15, 'Alat Tulis', ''),
(16, 'Perbukuan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keuangan`
--

CREATE TABLE `tb_keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `pelanggan_user` varchar(35) NOT NULL,
  `pelanggan_pass` varchar(35) NOT NULL,
  `pelanggan_nama` varchar(35) NOT NULL,
  `pelanggan_jk` varchar(35) NOT NULL,
  `pelanggan_tgl_lahir` date NOT NULL,
  `pelanggan_alamat` text NOT NULL,
  `pelanggan_nohp` varchar(35) NOT NULL,
  `pelanggan_nik` varchar(30) NOT NULL,
  `pelanggan_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`pelanggan_id`, `pelanggan_user`, `pelanggan_pass`, `pelanggan_nama`, `pelanggan_jk`, `pelanggan_tgl_lahir`, `pelanggan_alamat`, `pelanggan_nohp`, `pelanggan_nik`, `pelanggan_pekerjaan`) VALUES
(20, 'meka69', 'meka123', 'Meka Putra Gunuang Medan', 'Laki-Lakii', '2024-04-23', 'Gunuang Medan, Kabupaten Dharmasraya, Sumatera Barat, Indonesia, Bumi, Bima Sakti', '082759374213', '1311020805030001', 'Pengangguran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `pembelian_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `pembelian_tgl` date NOT NULL,
  `pembelian_status` varchar(35) NOT NULL DEFAULT 'Belum di Konfirmasi',
  `pembelian_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`pembelian_id`, `pelanggan_id`, `pembelian_tgl`, `pembelian_status`, `pembelian_total`) VALUES
(1059, 20, '2025-06-24', 'Belum di Konfirmasi', 147000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian_produk`
--

CREATE TABLE `tb_pembelian_produk` (
  `pembelian_produk_id` int(11) NOT NULL,
  `pembelian_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `pembelian_produk_jumlah` int(11) NOT NULL,
  `pembelian_produk_harga` int(11) NOT NULL,
  `pembelian_sub_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pembelian_produk`
--

INSERT INTO `tb_pembelian_produk` (`pembelian_produk_id`, `pembelian_id`, `produk_id`, `pembelian_produk_jumlah`, `pembelian_produk_harga`, `pembelian_sub_harga`) VALUES
(70, 1059, 233, 2, 2000, 4000),
(71, 1059, 235, 1, 78000, 78000),
(72, 1059, 236, 1, 65000, 65000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `produk_nama` varchar(35) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_stok` int(11) NOT NULL,
  `produk_deskripsi` varchar(255) NOT NULL,
  `produk_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `kategori_id`, `produk_nama`, `produk_harga`, `produk_stok`, `produk_deskripsi`, `produk_foto`) VALUES
(232, 15, 'Pensil Joyko 2B Standar Internasion', 5000, 999, '', 'pensilc (2).png'),
(233, 15, 'Isian Pensil Joyko', 2000, 99999, '', 'pensilb (2).png'),
(234, 15, 'Pulpen Zebra Sarasa Full Colour (Sa', 7000, 9999, '', 'penab (2).png'),
(235, 15, 'Pulpen Zebra Sarasa Full Colour (Pa', 78000, 999, '', 'penaa (2).png'),
(236, 16, 'Buku Kulit A5 Kualitas Premium', 65000, 99999, '', 'bukua (2).png'),
(237, 16, 'Buku Kulit KOG A5 (Pack)', 65000, 99999, '', 'bukub (2).png'),
(238, 16, 'Buku Double Folio Okey (Satuan)', 22000, 9999, '', 'bukuda (2).png'),
(240, 15, 'Buku Gambar A3', 13000, 9999, '', 'bukuga (2).png'),
(241, 15, 'Buku Gambar A4', 10000, 9999, '', 'bukugb (2).png'),
(242, 15, 'Buku Akuntansi', 25000, 9999, '', 'bukudb (2).png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`pembelian_id`);

--
-- Indeks untuk tabel `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  ADD PRIMARY KEY (`pembelian_produk_id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_keuangan`
--
ALTER TABLE `tb_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `pembelian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1060;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  MODIFY `pembelian_produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
