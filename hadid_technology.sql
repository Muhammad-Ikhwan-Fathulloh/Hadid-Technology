-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 05:33 AM
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
-- Database: `hadid_technology`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` varchar(100) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `gambar_artikel` varchar(100) NOT NULL,
  `kategori_artikel` varchar(100) NOT NULL,
  `keterangan_artikel` varchar(100) NOT NULL,
  `penulis_artikel` varchar(100) NOT NULL,
  `isi_artikel` varchar(7000) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `gambar_artikel`, `kategori_artikel`, `keterangan_artikel`, `penulis_artikel`, `isi_artikel`, `tanggal`) VALUES
('A-00000001', 'Berpikir pola Algoritma', 'A-00000001.jpeg', 'Filsafat', 'Berpikir Algoritma', 'Muhammad Ikhwan Fathulloh', 'Apa itu Berpikir, Sungguh sesuatu pertanyaan yang membuat kepikiran  Lalu apa itu Algoritma....  Nah ini bikin otak bergetar-getar seakan ingin meluap  eits tenang dulu, itu merupakan cara berpikir yang salah jika suatu pertanyaan itu dianggap beban  Tapi kan emang beban, bikin otak mikir  Kalo mikir berarti kamu manusia, karena fitrah manusia adalah selalu berpikir, beda dengan hewan yang pakenya nafsu terus....  Kita luruskan dulu, bahwa setiap masalah harus diselesaikan dengan benar. Kenapa kalo masalah dibikin beban tidak akan selesai, makanya diselesaikan  Ok langsung lanjut ke pembahasan  Apa itu Berpikir. Berpikir adalah. Proses pengendalian kinerja Akal dalam memahami suatu Realitas dari obyek yang di inderanya untuk berusaha memahami dan mempelajari setiap kejadian ataupun masalah agar dapat diambil sebuah kesimpulan.  Gimana bahasanya agak rumit ya  Yang pasti Berpikir adalah untuk mempelajari dan memahami, jika ada definisi dari pembaca bisa diisi dikolom komentar...  Algoritma... Duh apa lagi iye  Sabar jangan pusing dulu  Algoritma itu ya secara simpelnya adalah urutan yang tersistematis dalam menyelesaikan masalah.  Masih pusing???  Nih sederhananya  Jadi bagaimana kita menyelasaikan masalah yang ada secara berurutan dari awal sampai akhir, step by step....  Sehingga Berpikir pola Algoritma adalah proses kerja akal yang mengamati sebuah obyek(lingkungan) untuk dipelajari, dipahami, dan dihayati secara berurutan(sistematis) agar mendapatkan kesimpulan dan hikmah yang dapat bermanfaat bagi umat.  Masih pusing juga, sama saya juga pusing  Gini deh kita masuk ke studi kasus aja, kuy lah  Coba kita baca dan pahami ayat Al Qur\'an dibawah ini :  Allah SWT berfirman: \"kemudian makanlah dari segala (macam) buah-buahan, lalu tempuhlah jalan Tuhanmu yang telah dimudahkan (bagimu). Dari perut lebah itu keluar minuman (madu) yang bermacam-macam warnanya, di dalamnya terdapat obat yang menyembuhkan bagi manusia. Sungguh, pada yang demikian itu benar-benar terdapat tanda (kebesaran Allah) bagi orang yang berpikir.\" (QS. An-Nahl 16: Ayat 69)  Coba pikirkan maksud dari ayat tersebut.... Jika kita pikirkan dengan ilmu, bahwa lebah dapat mendatangkan manfaat.  Mari kita berpikir dengan Algoritma....  Ingat ya Algoritma itu harus berurutan...  kita pahami dulu lebah, sederhananya kalo pernah kita amati perilaku lebah adalah menghisap nektar dari bunga. Nektar bunga dihasilkan oleh bunga saat mekar yang merupakan gula alami, tujuannya adalah untuk memikat hati serangga agar terjadi perkawinan antar bunga jantan dan betina. (Bunga aja perpasangan masa kamu enggak.. ..)  Serangga yang terpikat salah satunya lebah, nah lebah memiliki cara unik untuk menyimpan hasil nektarnya.  Sebelum disimpan nektar yang dihisap otu diproses secara alami di tubuh lebah untuk dikeluarkan dengan kandungan yang baik.  Lalu baru deh disimpan di sarang lebah, dan ini dilakukan secara bersama-sama sehingga hasilnya pun sangat berlimpah.  Barulah manusia bisa menikmati hasil proses alami madu yang berkhasiat dan alami dan baik bagi tubuh.  Ada banyak manfaat jika kita lihat di beberapa artikel atau riset para ahli....  Makanya jika kita memikirkan kebesaran sang maha kuasa alam secara sistematis dan pastinya pake ilmu akan terlihat kebesarannya kok.  Gak percaya, silahkan Berpikir pola Algoritma aja...  HIKMAH... Eh tadi udah sekalian hikmah ya diatas tuh, gpp lah tambahan sedikit ya hehe  Allah SWT berfirman: \"Demikianlah Kami bacakan kepadamu (Muhammad) sebagian ayat-ayat dan peringatan yang penuh hikmah.\" (QS. Ali \'Imran 3: Ayat 58)  Nah begitulah islam rahmatan lil alamin yang sebenarnya akan terasa jika kita memahaminya dengan benar dan bil hikmah. Makanya ubah cara berpikirmu ya  Perubahan dimulai dari cara berpikir.... Hikmah akan terasa dari manusia yang selalu berpikir....  Jadi jangan lupa berpikir ya...', '2021-06-06 19:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` varchar(100) NOT NULL,
  `materi_jasa` varchar(100) NOT NULL,
  `gambar_jasa` varchar(100) NOT NULL,
  `keterangan_jasa` varchar(255) NOT NULL,
  `kategori_jasa` varchar(100) NOT NULL,
  `harga_jasa` int(100) NOT NULL,
  `instruktur_jasa` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `materi_jasa`, `gambar_jasa`, `keterangan_jasa`, `kategori_jasa`, `harga_jasa`, `instruktur_jasa`, `tanggal`) VALUES
('J-0000001', 'Pemograman Dasar Arduino dengan Tinkercad', 'J-0000001.jpeg', '4 Kali Pertemuan / 2 Jam', 'Elektronika', 300000, 'Muhammad Firman Hermawan', '2021-06-07 07:35:23'),
('J-0000002', 'Membuat Aplikasi Android dengan Kodular', 'J-0000002.jpeg', '4 Kali Pertemuan / 2 Jam', 'Aplikasi Android', 300000, 'Muhammad Ikhwan Fathulloh', '2021-06-07 07:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_05_21_174915_create_produks_table', 1),
(8, '2021_05_28_012417_create_m_pesans_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jumlah_harga` int(100) NOT NULL DEFAULT '0',
  `status` int(100) NOT NULL,
  `konfirmasi` int(11) NOT NULL DEFAULT '0',
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `jumlah_harga`, `status`, `konfirmasi`, `tanggal`) VALUES
(13, 2, 350000, 1, 1, '2021-06-07 06:46:13'),
(14, 2, 409000, 1, 0, '2021-06-07 06:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_detail`
--

CREATE TABLE `pesan_detail` (
  `id_pesanan` int(11) NOT NULL,
  `id_produk` varchar(100) NOT NULL,
  `id_pesan` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `jumlah_harga` int(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_detail`
--

INSERT INTO `pesan_detail` (`id_pesanan`, `id_produk`, `id_pesan`, `jumlah`, `jumlah_harga`, `tanggal`) VALUES
(22, 'P-00000001', 13, 5, 350000, '2021-06-06 22:07:30'),
(23, 'P-00000002', 14, 2, 160000, '2021-06-06 22:38:32'),
(24, 'P-00000005', 14, 2, 44000, '2021-06-06 22:38:54'),
(25, 'P-00000008', 14, 4, 160000, '2021-06-06 22:42:55'),
(26, 'P-00000007', 14, 1, 45000, '2021-06-06 22:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  `hargabeli_produk` int(100) NOT NULL,
  `hargajual_produk` int(100) NOT NULL,
  `stok_produk` int(100) NOT NULL,
  `keterangan_produk` varchar(255) NOT NULL,
  `tanggal_produk` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar_produk`, `hargabeli_produk`, `hargajual_produk`, `stok_produk`, `keterangan_produk`, `tanggal_produk`) VALUES
('P-00000001', 'Arduino Uno R3', 'P-00000001.jpeg', 60000, 70000, 95, 'Mikrokontroller', '2021-06-06 20:15:09'),
('P-00000002', 'Wemos D1 R1 ESP8266', 'P-00000002.jpeg', 70000, 80000, 98, 'Mikrokontroller', '2021-06-06 20:16:04'),
('P-00000003', 'Nodemcu ESP8266', 'P-00000003.jpeg', 45000, 55000, 100, 'Mikrokontroller', '2021-06-06 20:17:00'),
('P-00000004', 'Wemos D1 Mini', 'P-00000004.jpeg', 45000, 55000, 100, 'Mikrokontroller', '2021-06-06 20:18:20'),
('P-00000005', 'DHT 11', 'P-00000005.jpeg', 15000, 22000, 98, 'Sensor', '2021-06-06 20:26:29'),
('P-00000006', 'RFID RC-522', 'P-00000006.jpeg', 35000, 45000, 100, 'Sensor', '2021-06-06 20:27:41'),
('P-00000007', 'Ultrasonic HC-SR04', 'P-00000007.jpeg', 35000, 45000, 97, 'Sensor', '2021-06-06 20:28:51'),
('P-00000008', 'Soil Moisture Capacitive', 'P-00000008.jpeg', 30000, 40000, 96, 'Sensor', '2021-06-06 20:30:09'),
('P-00000009', 'Dot Matrix MAX7219', 'P-00000009.jpeg', 80000, 90000, 100, 'Output', '2021-06-06 20:36:55'),
('P-00000010', 'LCD Display 16x2 I2C', 'P-00000010.jpeg', 45000, 55000, 100, 'Output', '2021-06-06 20:40:03'),
('P-00000011', 'Relay 4 Channel', 'P-00000011.jpeg', 55000, 65000, 100, 'Output', '2021-06-06 20:54:16'),
('P-00000012', 'Water Flow', 'P-00000012.jpeg', 80000, 90000, 100, 'Sensor', '2021-06-06 21:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Ikhwan Fathulloh', 'muhammadikhwanfathulloh17@gmail.com', NULL, '$2y$10$Sas3jMZ7VHA5KoZ58DfWMOdj7WF8deney8l0a.8FvD4fKot0Na0h6', NULL, 1, '2021-05-23 07:57:11', '2021-05-23 07:57:11'),
(2, 'Muhammad Firman Hermawan', 'muhammadfirmanhermawan@gmail.com', NULL, '$2y$10$eDTcHiLmeoGeGlP.ZUJk3ecDEsytor2a4RwNibV0l0lX9ctGt4qoa', NULL, 2, '2021-05-27 18:42:42', '2021-05-27 18:42:42'),
(3, 'Shalih Rizaldy', 'shalihrizaldy@gmail.com', NULL, '$2y$10$0R0Gwnid3T.5oWzqfESsR.mDe.vAjJBIOQog5y0hDJAZ.AEkSlKvO', NULL, 2, '2021-06-06 02:47:39', '2021-06-06 02:47:39'),
(4, 'Dimas Aji Permadi', 'dimasajipermadi@gmail.com', NULL, '$2y$10$vZv2KvdXtk2tvi33RTvvrOtSCOM0QihpHGFHc7cuI1lwWnLnn7CAK', NULL, 2, '2021-06-06 17:01:51', '2021-06-06 17:01:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pesan_detail`
--
ALTER TABLE `pesan_detail`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pesan_detail`
--
ALTER TABLE `pesan_detail`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
