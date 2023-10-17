-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 01:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostfound`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_hilang`
--

CREATE TABLE `barang_hilang` (
  `id_barang` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `tempat_kehilangan` text NOT NULL,
  `waktu_kehilangan` time NOT NULL,
  `tanggal_kehilangan` date NOT NULL,
  `photobrg` varchar(200) NOT NULL DEFAULT 'default.png',
  `founded` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_hilang`
--

INSERT INTO `barang_hilang` (`id_barang`, `nama_pemilik`, `nama_barang`, `jenis_barang`, `tempat_kehilangan`, `waktu_kehilangan`, `tanggal_kehilangan`, `photobrg`, `founded`) VALUES
(37, 'Fakhri', 'Kunci lab fakultas teknik', 'Key', 'Di dekat tangga menuju lab', '11:53:00', '2022-05-18', 'gantungan_kunci.jpg', 1),
(38, 'Samsudin', 'Gantungan kunci', 'Aksesoris', 'Di daerah wc bawah', '01:56:00', '2022-05-03', 'akses-rumah-tanpa-kunci.png', 1),
(40, 'Ariel', 'Kunci motor scoopy', 'Key', 'Di daerah parkiran motor', '11:56:00', '2022-05-23', 'akses-rumah-tanpa-kunci1.png', 1),
(46, 'aa', 'aa', 'Aksesoris', 'aa', '20:27:00', '2022-06-07', 'default.png', 1),
(47, 'Dikdik', 'Taplak meja', 'Aksesoris', 'Di toilet', '08:33:00', '2022-06-07', 'default.png', 1),
(48, 'Kemod', 'Vape', 'Elektronik', 'Lorong Kematian', '20:37:00', '2022-06-07', 'default.png', 0),
(49, 'Boyke', 'Headphone', 'Elektronik', 'Wc Pria', '08:38:00', '2022-06-07', 'default.png', 0),
(50, 'Ujang', 'Jaket', 'Outfit', 'Lab Informatika', '20:39:00', '2022-06-07', 'default.png', 0),
(52, 'Jajang', 'HP', 'Elektronik', 'Musholla', '09:39:00', '2022-06-15', 'default.png', 0),
(53, 'Ilham', 'Hoodie', 'Aksesoris', 'Musholla', '09:44:00', '2022-06-15', 'default.png', 0),
(54, 'Aldi', 'HP Oppo Reno 5', 'Elektronik', 'Di daerah parkiran mobil', '23:44:00', '2022-07-14', 'default.png', 0),
(55, 'Hidayat', 'Dompet', 'Aksesoris', 'Di daerah parkiran motor', '11:46:00', '2022-07-14', 'default.png', 0),
(56, 'Pratama', 'Tupperware', 'Aksesoris', 'Di parkiran atas', '09:25:00', '2022-07-15', 'default.png', 0),
(57, 'Febrian', 'Sepatu', 'Outfit', 'Di sekre elektro', '09:28:00', '2022-07-20', 'default.png', 0),
(58, 'Rizky', 'Kunci motor yamaha mio z', 'Key', 'Di area parkiran motor', '11:28:00', '2022-07-27', 'default.png', 0),
(59, 'Dikdik', 'Mouse', 'Elektronik', 'Di lab informatika', '09:41:00', '2022-07-18', 'default.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang_temuan`
--

CREATE TABLE `barang_temuan` (
  `id_barang` int(11) NOT NULL,
  `nama_penemu` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `tempat_menemukan` text NOT NULL,
  `waktu_menemukan` time NOT NULL,
  `tanggal_menemukan` date NOT NULL,
  `phototemu` varchar(200) NOT NULL DEFAULT 'default.png',
  `taken` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_temuan`
--

INSERT INTO `barang_temuan` (`id_barang`, `nama_penemu`, `nama_barang`, `jenis_barang`, `tempat_menemukan`, `waktu_menemukan`, `tanggal_menemukan`, `phototemu`, `taken`) VALUES
(1, 'Agung', 'Iphone XR', 'Elektronik', 'Di area parkir motor', '20:13:00', '2022-05-16', '7884fde8-a9aa-4853-8831-7d8368f9443b.jpg', 1),
(3, 'Hafizh', 'Casan Laptop HP', 'Elektronik', 'Di ruang himpunan', '12:22:00', '2022-05-04', '0_153da78a-02ca-4abf-a4f3-fd13f86e3fa9_500_500.jpg', 1),
(5, 'Ilham', 'Kunci motor honda beat', 'Key', 'Di lorong parkir', '11:29:00', '2022-05-24', 'default.png', 1),
(6, 'Ilham', 'Kunci motor honda vario', 'Key', 'DI lorong parkir', '10:42:00', '2022-05-24', 'default.png', 1),
(7, 'Dikdik', 'HP Realme 7', 'Elektronik', 'Di musholla', '12:12:00', '2022-05-25', 'default.png', 1),
(9, 'Ilham', 'HP Redmi 8 Pro', 'Elektronik', 'Di tempat wudhu', '13:37:00', '2022-05-26', 'default.png', 1),
(10, 'Ilham', 'Vape', 'Elektronik', 'Dekat Lorong Kematian', '20:46:00', '2022-06-07', 'default.png', 1),
(11, 'Jajang', 'Headphone', 'Elektronik', 'Dekat lorong wc', '20:47:00', '2022-06-07', 'default.png', 1),
(13, 'Jalil', 'Laptop', 'Elektronik', 'Di lab informatika', '15:53:00', '2022-07-06', 'default.png', 1),
(14, 'aa', 'aa', 'Aksesoris', 'aa', '16:25:00', '2022-07-07', 'default.png', 1),
(15, 'aaa', 'aaa', 'Aksesoris', 'aaa', '16:27:00', '2022-07-07', 'default.png', 0),
(16, 'Hermawan', 'Casing rokok maternal', 'Aksesoris', 'Di ruang sekretariat', '07:24:00', '2022-07-15', 'default.png', 1),
(17, 'Hermawan', 'Casing rokok maternal', 'Aksesoris', 'Di sekre informatika', '06:42:00', '2022-07-15', 'default.png', 1),
(18, 'Apendi', 'Tupperware', 'Aksesoris', 'Di parkiran atas dekat lapang', '09:35:00', '2022-07-19', 'default.png', 0),
(19, 'Bob', 'Sepatu', 'Outfit', 'Di tangga menuju sekre elektro', '00:33:00', '2022-07-20', 'default.png', 0),
(20, 'Ilham', 'Kunci motor yamaha mio z', 'Key', 'Di daerah parkiran motor bawah\r\n\r\n', '11:34:00', '2022-07-27', 'default.png', 1),
(21, 'Sandi', 'Ijasah', 'Aksesoris', 'Di parkiran basement', '09:52:00', '2022-07-18', 'default.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES
(1, 'Aksesoris', 'Benda-benda yang dikenakan seseorang untuk mendukung atau menjadi pengganti pakaian. \r\n'),
(2, 'Elektronik', 'Alat maupun peralatan yang dibuat ataupun dipergunakan manusia berdasarkan prinsip pada sistem elektronika. Dimana penggunaan alat elektronik merupakan suatu kebutuhan sehari-hari yang sering dkali dipergunakan oleh masyarakat untuk memenuhi kebutuhan hidupnya.'),
(3, 'Outfit', 'Terdiri dari perpaduan antara baju, celana atau rok, ikat pinggang, topi, kaos kaki, sepatu dan lain-lain.\r\n\r\n\r\n'),
(4, 'Key', 'Alat untuk membuka sesuatu seperti mobil, motor, pintu, dan lemari.');

-- --------------------------------------------------------

--
-- Table structure for table `discovery_report`
--

CREATE TABLE `discovery_report` (
  `report_id` int(11) NOT NULL,
  `tanggal_penemuan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `barang_id` int(11) NOT NULL,
  `nama_penemu` varchar(100) NOT NULL,
  `tempat_penemuan` text NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discovery_report`
--

INSERT INTO `discovery_report` (`report_id`, `tanggal_penemuan`, `barang_id`, `nama_penemu`, `tempat_penemuan`, `phone`) VALUES
(4, '2022-04-26 08:58:45', 21, 'Ramdani', 'Tempat Wudhu', '08645267628'),
(5, '2022-04-26 09:41:57', 23, 'Ilham', 'Lorong menuju lantai 3', '08986413803'),
(6, '2022-04-26 09:42:43', 24, 'Zidan', 'Di WC dekat sekre', '08578876521'),
(7, '2022-04-26 09:54:55', 28, 'Dikdik', 'Di parkiran mobil\r\n', '08768909872'),
(8, '2022-04-26 10:07:07', 25, 'Udin', 'Di depan parkiran motor', '087654212652'),
(9, '2022-04-26 14:47:40', 27, 'Pur', 'Jamika', '0876545678990'),
(10, '2022-05-16 12:19:56', 26, 'Hapsah', 'Musholla', '085678990987'),
(11, '2022-05-16 16:58:32', 31, 'Revian', 'Di dekat lorong lab informatika', '085788982122'),
(12, '2022-05-16 17:18:13', 32, 'Idah', 'Di ruang himpunan', '087567856678'),
(13, '2022-05-17 17:52:44', 34, 'Ilham', 'Di musholla', '08986413803'),
(14, '2022-05-24 09:24:42', 35, 'Ilham', 'Di dekat lorong parkir', '08986413803'),
(15, '2022-05-24 09:32:46', 33, 'Ilham', 'Di lorong parkir', '08986413803'),
(16, '2022-05-25 02:52:39', 36, 'Dikdik', 'Di musholla', '085678908765'),
(17, '2022-05-26 05:36:09', 41, 'Ilham', 'Di tempat wudhu', '08986413803'),
(18, '2022-06-08 01:45:15', 38, 'Ilham', 'Lab informatika', '08986413803'),
(19, '2022-06-08 01:47:39', 37, 'wow', 'Halaman UNLA', '0837373737373'),
(20, '2022-07-14 16:56:32', 39, 'Ilham', 'Di hj djuanda', '0867883213'),
(21, '2022-07-15 10:59:36', 40, 'Kidkid', 'Area parkiran motor', '085788980989'),
(22, '2022-07-18 02:44:08', 47, 'Ilham', 'Di lorong informatika', '085677891232'),
(23, '2022-12-07 11:13:13', 46, 'frendiukka', 'adaDAS', '8923849234');

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan_barang`
--

CREATE TABLE `pengambilan_barang` (
  `id_pengambilan` int(11) NOT NULL,
  `tanggal_pengambilan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `barang_id` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengambilan_barang`
--

INSERT INTO `pengambilan_barang` (`id_pengambilan`, `tanggal_pengambilan`, `barang_id`, `nama_pemilik`, `phone`) VALUES
(1, '2022-05-16 13:37:23', 1, 'Ilham', '08578876521'),
(2, '2022-05-16 16:54:47', 2, 'Guntur', '087654212652'),
(3, '2022-05-16 17:20:30', 3, 'Hafizh', '085766787764'),
(4, '2022-05-17 17:54:18', 4, 'Fazril', '085722675521'),
(5, '2022-05-24 09:25:57', 5, 'Ramdani', '087677890987'),
(6, '2022-05-24 09:33:45', 6, 'Riza', '085766789021'),
(10, '2022-05-25 03:00:04', 7, 'Ramdani', '08986413803'),
(11, '2022-05-26 05:37:28', 9, 'Hafizh\\', '085678907654'),
(12, '2022-06-08 01:49:26', 10, 'Ramdani', '087567889876'),
(13, '2022-07-06 08:52:57', 11, '', ''),
(14, '2022-07-06 08:58:12', 13, 'Dikdik', ''),
(15, '2022-07-07 09:25:35', 14, '', ''),
(16, '2022-07-15 11:39:58', 16, 'Ilham', '08986413803'),
(17, '2022-07-15 11:43:03', 17, 'Ilham', '08986413803'),
(18, '2022-07-18 02:46:30', 20, 'Pratama', '085789980987');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `usertype`, `fullname`, `photo`) VALUES
(1, 'Ilham', '$2y$10$McGdUOn2huqaJcORocjrDeYpfh/FFtpt13VkRPfDHduWl3akMdgtW', 'Admin', 'Muhammad Ilham', 'WhatsApp_Image_2022-03-11_at_6_22_23_PM_(1)3.jpeg'),
(2, 'Dikdik', '$2y$10$McGdUOn2huqaJcORocjrDeYpfh/FFtpt13VkRPfDHduWl3akMdgtW', 'Admin', 'Dikdik Apendi', 'hamm3.jpeg'),
(4, 'Ridwan', '$2y$10$McGdUOn2huqaJcORocjrDeYpfh/FFtpt13VkRPfDHduWl3akMdgtW', 'Admin', 'RIdwan Agung', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_hilang`
--
ALTER TABLE `barang_hilang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_temuan`
--
ALTER TABLE `barang_temuan`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `discovery_report`
--
ALTER TABLE `discovery_report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `pengambilan_barang`
--
ALTER TABLE `pengambilan_barang`
  ADD PRIMARY KEY (`id_pengambilan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_hilang`
--
ALTER TABLE `barang_hilang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `barang_temuan`
--
ALTER TABLE `barang_temuan`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `discovery_report`
--
ALTER TABLE `discovery_report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengambilan_barang`
--
ALTER TABLE `pengambilan_barang`
  MODIFY `id_pengambilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
