-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2024 at 08:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sportify`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `waktu_awal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `field_id`, `tanggal`, `waktu_awal`, `durasi`) VALUES
(12, 11, 5, '2024-07-06 12:22:03', '2024-07-10 04:00:00', 3),
(13, 11, 2, '2024-07-06 12:24:46', '2024-07-06 05:00:00', 1),
(14, 11, 2, '2024-07-06 12:25:47', '2024-07-06 05:00:00', 1),
(15, 11, 14, '2024-07-06 13:50:34', '2024-07-06 06:00:00', 1),
(16, 11, 15, '2024-07-06 13:52:46', '2024-07-06 06:00:00', 1),
(17, 11, 1, '2024-07-10 13:24:29', '2024-07-12 23:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `facility_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facility_id`, `field_id`, `nama_fasilitas`, `keterangan`) VALUES
(1, 1, 'Pencahayaan', 'Lampu LED untuk malam hari'),
(2, 1, 'Tribun Penonton', 'Tempat duduk penonton'),
(3, 1, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(4, 1, 'WiFi', 'WiFi gratis'),
(5, 1, 'Toilet', 'Toilet bersih dan higienis'),
(6, 2, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(7, 2, 'Toilet', 'Toilet bersih dan higienis'),
(8, 2, 'Asuransi Kecelakaan', 'Tercakup dalam asuransi'),
(9, 2, 'Parkir', 'Parkir luas'),
(10, 3, 'Kantin', 'Kantin dengan berbagai makanan'),
(11, 3, 'WiFi', 'WiFi gratis'),
(12, 3, 'Toilet', 'Toilet bersih dan higienis'),
(13, 4, 'Pencahayaan', 'Lampu LED untuk malam hari'),
(14, 4, 'Tribun Penonton', 'Tempat duduk penonton'),
(15, 4, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(16, 4, 'WiFi', 'WiFi gratis'),
(17, 4, 'Toilet', 'Toilet bersih dan higienis'),
(18, 5, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(19, 5, 'Toilet', 'Toilet bersih dan higienis'),
(20, 5, 'Asuransi Kecelakaan', 'Tercakup dalam asuransi'),
(21, 5, 'Parkir', 'Parkir luas'),
(22, 6, 'Kantin', 'Kantin dengan berbagai makanan'),
(23, 6, 'WiFi', 'WiFi gratis'),
(24, 6, 'Toilet', 'Toilet bersih dan higienis'),
(25, 7, 'Pencahayaan', 'Lampu LED untuk malam hari'),
(26, 7, 'Tribun Penonton', 'Tempat duduk penonton'),
(27, 7, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(28, 7, 'WiFi', 'WiFi gratis'),
(29, 7, 'Toilet', 'Toilet bersih dan higienis'),
(30, 8, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(31, 8, 'Toilet', 'Toilet bersih dan higienis'),
(32, 8, 'Asuransi Kecelakaan', 'Tercakup dalam asuransi'),
(33, 8, 'Parkir', 'Parkir luas'),
(34, 9, 'Kantin', 'Kantin dengan berbagai makanan'),
(35, 9, 'WiFi', 'WiFi gratis'),
(36, 9, 'Toilet', 'Toilet bersih dan higienis'),
(37, 10, 'Pencahayaan', 'Lampu LED untuk malam hari'),
(38, 10, 'Tribun Penonton', 'Tempat duduk penonton'),
(39, 10, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(40, 10, 'WiFi', 'WiFi gratis'),
(41, 10, 'Toilet', 'Toilet bersih dan higienis'),
(42, 11, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(43, 11, 'Toilet', 'Toilet bersih dan higienis'),
(44, 11, 'Asuransi Kecelakaan', 'Tercakup dalam asuransi'),
(45, 11, 'Parkir', 'Parkir luas'),
(46, 12, 'Kantin', 'Kantin dengan berbagai makanan'),
(47, 12, 'WiFi', 'WiFi gratis'),
(48, 12, 'Toilet', 'Toilet bersih dan higienis'),
(49, 13, 'Pencahayaan', 'Lampu LED untuk malam hari'),
(50, 13, 'Tribun Penonton', 'Tempat duduk penonton'),
(51, 13, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(52, 13, 'WiFi', 'WiFi gratis'),
(53, 13, 'Toilet', 'Toilet bersih dan higienis'),
(54, 14, 'Ruang Ganti', 'Ruang ganti yang nyaman'),
(55, 14, 'Toilet', 'Toilet bersih dan higienis'),
(56, 14, 'Asuransi Kecelakaan', 'Tercakup dalam asuransi'),
(57, 14, 'Parkir', 'Parkir luas'),
(58, 15, 'Kantin', 'Kantin dengan berbagai makanan'),
(59, 15, 'WiFi', 'WiFi gratis'),
(60, 15, 'Toilet', 'Toilet bersih dan higienis');

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE `field` (
  `field_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi_pendek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`field_id`, `nama`, `lokasi`, `kategori_id`, `harga`, `deskripsi`, `deskripsi_pendek`) VALUES
(1, 'Alpha Arena Futsal', 'Blok A1', 1, 500000, 'Lapangan sepak bola ini dirancang dengan fasilitas modern dan berkualitas tinggi untuk mendukung pengalaman bermain yang optimal. Permukaan lapangan menggunakan rumput buatan atau sintetis berkualitas tinggi, memastikan kenyamanan dan keamanan para pemain. Gawang standar dilengkapi dengan jaring berkualitas tinggi, memberikan sensasi bermain yang autentik. Pencahayaan profesional memungkinkan pertandingan digelar pada malam hari dengan visibilitas yang sempurna. Tribun penonton yang luas dengan kapasitas besar menciptakan suasana yang meriah dan mendukung. Selain itu, ruang ganti yang lengkap dengan kamar mandi dan loker memberikan kenyamanan dan privasi bagi para pemain sebelum dan setelah pertandingan.', 'Lapangan futsal modern dengan rumput sintetis, pencahayaan, tribun, dan ruang ganti.'),
(2, 'Beta Arena Futsal', 'Blok A2', 1, 350000, 'Beta Arena Futsal menyediakan lapangan dengan permukaan rumput buatan atau sintetis, dilengkapi gawang standar dengan jaring. Pencahayaan yang memadai memungkinkan pertandingan di berbagai waktu, sementara tempat duduk sederhana untuk penonton menciptakan suasana mendukung. Selain itu, tersedia ruang ganti dasar untuk kenyamanan pemain.', 'Lapangan Sintetis , gawang standar, pencahayaam baik, tempat duduk,ruang ganti'),
(3, 'Charlie Arena Futsal', 'Blok A3', 1, 200000, 'Charlie Arena Futsal menawarkan lapangan futsal dengan permukaan aspal atau semen, dilengkapi dengan gawang sederhana. Pencahayaan dasar memastikan visibilitas yang memadai, dan garis pembatas lapangan jelas terlihat untuk pengalaman bermain yang optimal.', 'Lapangan futsal aspal/semen, gawang sederhana, pencahayaan dasar, garis lapangan jelas.'),
(4, 'Hoop Haven Arena', 'Blok B1', 2, 350000, 'Hoop Haven Arena menawarkan lapangan dengan permukaan kayu berkualitas tinggi untuk bermain basket. Dilengkapi dengan tiang dan ring basket standar profesional, serta pencahayaan yang optimal untuk pengalaman bermain yang maksimal. Tribun penonton dengan kapasitas besar memberikan suasana yang meriah, sementara ruang ganti lengkap dengan kamar mandi dan loker menjamin kenyamanan para pemain sebelum dan setelah pertandingan.', 'Lapangan kayu, ring basket profesional, pencahayaan dan tribun profesional, ruang ganti lengkap.'),
(5, 'Dunk Dynasty Court', 'Blok B2', 2, 225000, 'Dunk Dynasty Court menampilkan lapangan dengan permukaan sintetis atau kayu yang ideal untuk bermain basket. Dilengkapi dengan ring dan tiang standar, serta pencahayaan yang cukup untuk memfasilitasi pertandingan di berbagai kondisi cahaya. Tempat duduk yang sederhana tersedia untuk penonton, dan terdapat ruang ganti dasar untuk kenyamanan pemain.', 'Lapangan sintetis/kayu, ring standar, pencahayaan cukup, tempat duduk sederhana, ruang ganti.'),
(6, 'Slam City Center', 'Blok B3', 2, 150000, 'Slam City Center adalah tempat yang menyediakan lapangan dengan permukaan semen untuk bermain basket. Lapangan dilengkapi dengan tiang dan ring basket sederhana, serta garis pembatas lapangan yang jelas untuk pengalaman bermain yang optimal. Selain itu, Slam City Center juga menawarkan suasana yang ramah untuk semua penggemar basket.', 'Slam City Center menawarkan lapangan basket dengan tiang basket sederhana.'),
(7, 'Shuttle Smash Arena', 'Blok D1', 3, 150000, 'Shuttle Smash Arena adalah fasilitas bulu tangkis berkelas yang memiliki lapangan dengan permukaan sintetis berkualitas tinggi, dilengkapi tiang dan jaring badminton standar profesional, serta pencahayaan optimal. Arena ini juga menyediakan tribun penonton dengan kapasitas besar dan ruang ganti lengkap yang dilengkapi kamar mandi serta loker, memastikan kenyamanan maksimal bagi para pemain dan penonton.', 'Lapangan sintetis, jaring profesional, pencahayaan optimal, tribun besar, ruang ganti lengkap.'),
(8, 'Smash City Center', 'Blok D2', 3, 100000, 'Smash City Center adalah fasilitas olahraga yang dilengkapi dengan lapangan berpermukaan sintetis, tiang dan jaring badminton standar, serta pencahayaan yang memadai. Tempat ini juga menyediakan tempat duduk sederhana untuk penonton dan ruang ganti dasar, memastikan kenyamanan dasar bagi pemain dan penonton.', 'Lapangan sintetis, jaring standar, pencahayaan memadai, tempat duduk sederhana, ruang ganti dasar.'),
(9, 'Badminton Bliss Venue', 'Blok D3', 3, 75000, 'Badminton Bliss Venue memiliki lapangan dengan permukaan semen atau ubin, tiang dan jaring badminton, serta garis pembatas lapangan.', 'Lapangan semen atau ubin, jaring badminton, garis pembatas lapangan.'),
(10, 'Volley Victory Arena', 'Blok C1', 4, 300000, 'Volley Victory Arena adalah tempat yang menyediakan lapangan voli dengan permukaan sintetis berkualitas tinggi. Dilengkapi dengan tiang dan jaring voli standar profesional, serta pencahayaan yang dirancang untuk memastikan visibilitas optimal selama pertandingan. Tribun penonton dengan kapasitas besar menambahkan suasana meriah, sementara ruang ganti lengkap dengan kamar mandi dan loker memberikan kenyamanan bagi para pemain sebelum dan setelah pertandingan.', 'Volley Victory Arena: Lapangan sintetis, tiang jaring voli standar, pencahayaan dan tribun profesional.'),
(11, 'Volley Vortex Value', 'Blok C2', 4, 200000, 'Volley Vortex Value menawarkan lapangan voli dengan permukaan sintetis yang nyaman untuk bermain. Dilengkapi dengan tiang dan jaring voli standar untuk pengalaman bermain yang konsisten. Pencahayaan yang memadai memastikan visibilitas yang baik selama pertandingan, sementara tempat duduk sederhana untuk penonton memberikan kenyamanan. Terdapat juga ruang ganti dasar untuk para pemain bersiap sebelum dan setelah pertandingan.', 'Volley Vortex Value: Lapangan sintetis, tiang jaring voli standar, pencahayaan memadai.'),
(12, 'Block City Centre', 'Blok C3', 4, 150000, 'Block City Centre adalah  lapangan voli dengan permukaan yang bisa berupa semen. Dilengkapi dengan tiang dan jaring voli standar untuk pengalaman bermain yang autentik. Garis pembatas lapangan yang jelas membantu dalam mengatur pertandingan dengan baik.', 'Lapangan semen , tiang jaring voli standar, garis pembatas.'),
(13, 'Grand Slam Arena', 'Blok E1', 5, 200000, 'Grand Slam Arena adalah fasilitas tenis premium yang dilengkapi dengan lapangan berkualitas tinggi berpermukaan keras atau sintetis. Arena ini menyediakan tiang dan jaring tenis standar profesional serta pencahayaan yang optimal untuk pengalaman bermain yang baik di siang dan malam hari. Dengan tribun penonton yang luas dan fasilitas ruang ganti lengkap termasuk kamar mandi dan loker, Grand Slam Arena menjadi pilihan utama untuk pemain tenis dan penggemar olahraga yang mencari lingkungan yang nyaman dan profesional.', 'Lapangan keras/sintetis, jaring tenis standar, pencahayaan dan fasilitas lengkap.'),
(14, 'Racket Royals Court', 'Blok E2', 5, 100000, 'Racket Royals Court adalah arena tenis yang menyediakan lapangan dengan permukaan keras atau sintetis untuk pengalaman bermain yang optimal. Fasilitas ini dilengkapi dengan tiang dan jaring tenis standar, serta pencahayaan yang memadai untuk pertandingan siang dan malam. Tempat duduk sederhana untuk penonton dan ruang ganti dasar menambah kenyamanan bagi para pemain dan pengunjung arena ini.', 'Lapangan keras/sintetis, jaring tenis standar, pencahayaan memadai, tempat duduk sederhana, ruang ganti dasar.'),
(15, 'Tennis Triumph Court', 'Blok E3', 5, 75000, 'Tennis Triumph Court adalah tempat tenis yang menawarkan lapangan dengan permukaan tanah liat atau semen untuk pengalaman bermain yang autentik. Fasilitas ini dilengkapi dengan tiang dan jaring tenis standar serta garis pembatas lapangan yang jelas, memastikan kondisi bermain yang optimal bagi para pemain.', 'Lapangan tanah liat/semen, tiang dan jaring tenis, garis pembatas lapangan.');

-- --------------------------------------------------------

--
-- Table structure for table `field_category`
--

CREATE TABLE `field_category` (
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `field_category`
--

INSERT INTO `field_category` (`kategori_id`, `nama`) VALUES
(1, 'Futsal'),
(2, 'Basket'),
(3, 'Badminton'),
(4, 'Voli'),
(5, 'Tenis');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `booking_id`, `payment_method_id`, `amount`, `tanggal`) VALUES
(2, 12, 5, 249750, '2024-07-06 12:22:06'),
(3, 13, 2, 388500, '2024-07-06 12:24:48'),
(4, 14, 3, 388500, '2024-07-06 12:25:50'),
(5, 15, 3, 111000, '2024-07-06 13:50:38'),
(6, 16, 2, 83250, '2024-07-06 13:52:49'),
(7, 17, 3, 1665000, '2024-07-10 13:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  `no_rekening` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`payment_method_id`, `logo`, `nama_bank`, `nama_rekening`, `no_rekening`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/1280px-Bank_Central_Asia.svg.png', 'Bank BCA', 'Ujang Saepulloh', '1234567'),
(2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/2560px-Bank_Mandiri_logo_2016.svg.png', 'Bank Mandiri', 'Ujang Saepulloh', '1234567'),
(3, 'https://i0.wp.com/febi.uinsaid.ac.id/wp-content/uploads/2020/11/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png?fit=1650%2C1408&ssl=1', 'Bank BRI', 'Ujang Saepulloh', '1234567'),
(4, 'https://i.pinimg.com/originals/94/3c/97/943c971903518e53ffd324dd51e46a90.png', 'Gopay', 'Ujang Saepulloh', '1234567'),
(5, 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEga8boCkTtQzVmSYUlP0tU_P013CGxRfxH0x5KzqBgJ5XMkGPAJPja6JsxMzPOAQ1ecW4nyZdVcHXaDnTXuTOU0ULdVQUCEqc4MIXskp27C_3UCWeLN30gM_M5Soc1rLl6Y4BUQTieq6vu5D8JXJQTUa8jW5TZCASe0pGIHZnFTl-q6d463Dd5syrvFbA/s320/ShopeePay%20New%20Logo.png', 'Shopee Pay', 'Ujang Saepulloh', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `picture_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `main_picture` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`picture_id`, `field_id`, `link`, `main_picture`) VALUES
(1, 1, 'https://drive.google.com/thumbnail?id=1l00bCgVHBKjFSpUnO34VK_1kFX7zml6w&sz=w1000', 1),
(2, 1, 'https://drive.google.com/thumbnail?id=1l_zslXXCZDk7u6VasliZSeNhAWjmjH0z&sz=w1000', 0),
(3, 1, 'https://drive.google.com/thumbnail?id=1MDgAuokOtGzPpw8ZqPyAq-IjjqMzGFnZ&sz=w1000', 0),
(4, 1, 'https://drive.google.com/thumbnail?id=1fRtEQpIe5aRFKH50s7USVRwS7VZLP5bd&sz=w1000', 0),
(5, 2, 'https://drive.google.com/thumbnail?id=1gwJawRPyxlcF_rnbL6wTt-c8YqLD0r4T&sz=w1000', 1),
(6, 2, 'https://drive.google.com/thumbnail?id=1lAn0MwdUJ1jEYdV4yCSmcRARnBuN3tl7&sz=w1000e_link', 0),
(7, 2, 'https://drive.google.com/thumbnail?id=1Xmcf9AvceTi66g08kyjPQi2QNNCMD3FN&sz=w1000', 0),
(8, 2, 'https://drive.google.com/thumbnail?id=1pWncS1r4uNfWFuJMPdEkC_njA4QUtTTc&sz=w1000', 0),
(9, 3, 'https://drive.google.com/thumbnail?id=15-ARe5cM8ggc_nahXvLKWN6HUvAiVWMs&sz=w1000', 1),
(10, 3, 'https://drive.google.com/thumbnail?id=1euqJP4mxdBF0j3GYaON_gGNTgEug3RLB&sz=w1000', 0),
(11, 3, 'https://drive.google.com/thumbnail?id=19ZtwhaBVLuTYUf4iLGjmEO7eT7HekRns&sz=w1000', 0),
(12, 3, 'https://drive.google.com/thumbnail?id=1qtorlmHladGTU7tEvW7CsT6yuoLD9Z0Z&sz=w1000', 0),
(13, 4, 'https://drive.google.com/thumbnail?id=1wzKmcqg7eVvN6nov-GQHct0RHOfZtdcw&sz=w1000', 1),
(14, 4, 'https://drive.google.com/thumbnail?id=1zctj75JYvk9qGvam4cD0EdHqk2VxssnC&sz=w1000', 0),
(15, 4, 'https://drive.google.com/thumbnail?id=16KWiO-6AlySK_X4rzfscqa8FSHpbCnPo&sz=w1000', 0),
(16, 4, 'https://drive.google.com/thumbnail?id=1iQpqGYmtuA9CH0uaehYcJM9-yCsxkyGV&sz=w1000', 0),
(17, 5, 'https://drive.google.com/thumbnail?id=1KGzcmxCu6PRdHvEZ3mGZC0TvQLiSUsQE&sz=w1000', 1),
(18, 5, 'https://drive.google.com/thumbnail?id=1eFvefzyuD3eoYz22S2IEW1qrJff7Emah&sz=w1000', 0),
(19, 5, 'https://drive.google.com/thumbnail?id=1kPK69NpT89LeWii3sbjB5NB1zKfyiHm5&sz=w1000', 0),
(20, 5, 'https://drive.google.com/thumbnail?id=1aC-8QXNgmn8vxSownpyUhElzEjTEsXrV&sz=w1000', 0),
(21, 6, 'https://drive.google.com/thumbnail?id=1yvqh8i0oRD4DNOmpA0a6u6mQ7-ZGNBkn&sz=w1000', 1),
(22, 6, 'https://drive.google.com/thumbnail?id=1wq0B84L8_Nx5B6BwKtEOC-eHxFPBts8M&sz=w1000', 0),
(23, 6, 'https://drive.google.com/thumbnail?id=17NNISjv4LGilXhb7a_MQqACkRnJ4-rYG&sz=w1000', 0),
(24, 6, 'https://drive.google.com/thumbnail?id=1pMox8E3jSLnXCbdmAbNB-lMSkucMQ9Gm&sz=w1000', 0),
(25, 7, 'https://drive.google.com/thumbnail?id=1gJqL2cAJpmE3jeXSYztmNBt6HIaHh56q&sz=w1000', 1),
(26, 7, 'https://drive.google.com/thumbnail?id=1w-uVFexu50W--Paj6nPGiShCUiQAcOse&sz=w1000', 0),
(27, 7, 'https://drive.google.com/thumbnail?id=1d1Q5zp-6xZH2QnCOu-2Uhwp3uZj24Tsk&sz=w1000', 0),
(28, 7, 'https://drive.google.com/thumbnail?id=1f01_1ajHNu_24IMGxDo4fohLYEB_HYqN&sz=w1000', 0),
(29, 8, 'https://drive.google.com/thumbnail?id=1K0oA5c5BXGm1nK_WWiCZ69oY8UNs5qiD&sz=w1000', 1),
(30, 8, 'https://drive.google.com/thumbnail?id=155asQ0tp2VowVyJiWNpLQrNXCDwCYCtY&sz=w1000', 0),
(31, 8, 'https://drive.google.com/thumbnail?id=1ZIQoZoVtP2kZenAsvPOfwZuhq49H01Qk&sz=w1000', 0),
(32, 8, 'https://drive.google.com/thumbnail?id=1rjG_0BCC5DzysA_lapU3KppV391nnC6m&sz=w1000', 0),
(33, 9, 'https://drive.google.com/thumbnail?id=1nzgV8-Pnvr8V-9UFsovKVshMHvuBCf5I&sz=w1000', 1),
(34, 9, 'https://drive.google.com/thumbnail?id=1JPHeTnkhUC60SLOcyuClw5llki1FnTsA&sz=w1000', 0),
(35, 9, 'https://drive.google.com/thumbnail?id=17eiMQ7EpMzCDj_DPzx1kNGmM8F_cTIYK&sz=w1000', 0),
(36, 9, 'https://drive.google.com/thumbnail?id=1H9cOdMEEkkyLHF67WzPI3_1LWha-HvK6&sz=w1000', 0),
(37, 10, 'https://drive.google.com/thumbnail?id=1fsnq4g2xFLoPb6qrHdSsIq5TF3etW0TX&sz=w1000', 1),
(38, 10, 'https://drive.google.com/thumbnail?id=1JnhkpNlnoVs1B3UN7EsWP-xG6klbYcDj&sz=w1000', 0),
(39, 10, 'https://drive.google.com/thumbnail?id=1pCJDbRBtb2ezpCStem4UC4CM5FpZmW7d&sz=w1000', 0),
(40, 10, 'https://drive.google.com/thumbnail?id=1LrrpX3KQlYz7b5tfUdo9KcKlAhpJ_OZE&sz=w1000', 0),
(41, 11, 'https://drive.google.com/thumbnail?id=1CdTgjipMJwWYrCfXuC_Zmb-OAkcBPVeL&sz=w1000', 1),
(42, 11, 'https://drive.google.com/thumbnail?id=1v69Wj1PyxmxNs6jPPsy-PmsH6MEbLw14&sz=w1000', 0),
(43, 11, 'https://drive.google.com/thumbnail?id=14GKRsg2QvZcCOHTXwgcjDyjpZDTbKXWG&sz=w1000', 0),
(44, 11, 'https://drive.google.com/thumbnail?id=1OaGeuyAwApxeFFyQNmEPDC0wWcVPmhtd&sz=w1000', 0),
(45, 12, 'https://drive.google.com/thumbnail?id=1qsLG8EaYMfigUeRQ3E7J3EteaJmcvoYu&sz=w1000', 1),
(46, 12, 'https://drive.google.com/thumbnail?id=1UPUKmkagai76uomUZyKr4mEYTh0Cidy5&sz=w1000', 0),
(47, 12, 'https://drive.google.com/thumbnail?id=1NmrHaw4ayC5snu5JrTcyLszzHj8OV_AJ&sz=w1000', 0),
(48, 12, 'https://drive.google.com/thumbnail?id=1Y5iG-HvT7JrSMxCyS16c1wibQVG_YKVE&sz=w1000', 0),
(49, 12, 'https://drive.google.com/thumbnail?id=1Y5iG-HvT7JrSMxCyS16c1wibQVG_YKVE&sz=w1000', 0),
(50, 13, 'https://drive.google.com/thumbnail?id=16iUnmpV_1nyCsooJYWECb1Vwb82puwTq&sz=w1000', 1),
(51, 13, 'https://drive.google.com/thumbnail?id=1MIeAQTdKj7VVNWdcUmzWA69vlgVHcJla&sz=w1000', 0),
(52, 13, 'https://drive.google.com/thumbnail?id=1PfByBaFI2DzEgoatgJ6cU6hgPX_gcWM-&sz=w1000', 0),
(53, 13, 'https://drive.google.com/thumbnail?id=168vYqCl6jbaTbzI36lsozVQZ9vq_wFmm&sz=w1000', 0),
(54, 14, 'https://drive.google.com/thumbnail?id=1IBaiP-7sq_bUDTTvBV9H_QL7qrORTvMP&sz=w1000', 1),
(55, 14, 'https://drive.google.com/thumbnail?id=1xXuKewnCFbbZKXtFwubnJbkdt-mr_c5t&sz=w1000', 0),
(56, 14, 'https://drive.google.com/thumbnail?id=1pywIyPfeMAThkNo-QykB4mLHWUi3Om_w&sz=w1000', 0),
(57, 14, 'https://drive.google.com/thumbnail?id=1LAhHl_gTn3tFYeyxHCJ52c-XuOeNP2tz&sz=w1000', 0),
(58, 15, 'https://drive.google.com/thumbnail?id=11TKKf-y86vd6ZVWORGiuAz0cmU9G3rh2&sz=w1000', 1),
(59, 15, 'https://drive.google.com/thumbnail?id=1JsRgyaLUSH-dwmSaNM11Z7m5g1ZGzUmj&sz=w1000', 0),
(60, 15, 'https://drive.google.com/thumbnail?id=1v3iqvLMkYJswJdWvPqt1u5_6OF5dUIu-&sz=w1000', 0),
(61, 15, 'https://drive.google.com/thumbnail?id=1U8avONREBdD58BICMB32DXABQCw8Z-b4&sz=w1000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `field_id`, `rating`, `tanggal`, `komentar`) VALUES
(1, 5, 1, 2, '2024-06-20 13:43:25', 'Mahal Boss'),
(2, 3, 6, 5, '2024-06-20 17:43:25', 'Murah Tapi Kelas'),
(3, 7, 12, 4, '2024-06-25 08:26:39', 'Sedikit mahal tapi worth it'),
(4, 8, 3, 5, '2024-06-26 15:27:14', 'Kelasssss'),
(5, 6, 7, 1, '2024-06-28 06:21:00', 'Tiangnya ketinggian Boss'),
(6, 11, 5, 5, '2024-07-08 09:58:23', 'Vamosss');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `alamat`, `no_telp`, `email`, `password`) VALUES
(1, 'Ahmad Rizky Pratama', 'Jl. Diponegoro No. 45, Kecamatan Grogol, Kota Surabaya, Jawa Timur 60222', '085234567890', 'ahmad.rizky.pratama@gmail.com', 'ahmadgalau444'),
(2, 'Budi Santoso', 'Jl. Pahlawan No. 78, Kecamatan Umbulharjo, Kota Yogyakarta, DI Yogyakarta 55161', '089645678901', 'budi.santoso@gmail.com', 'budirajin23'),
(3, 'Fransiska Adeline', 'Jl. Merdeka Raya No. 21, Kelurahan Menteng, Jakarta Pusat, DKI Jakarta 10310', '085756789012', 'fransiska.adeline@gmail.com', 'fransiskalapar5'),
(4, 'Siti Aisyah', 'Jl. Dago Atas No. 12, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135', '089567890123', 'siti.aisyah@gmail.com', 'sitiloncat44'),
(5, 'Maria Kristina', 'Jl. Mangkubumi No. 7, Kecamatan Gondokusuman, Kota Yogyakarta, DI Yogyakarta 55224', '081878901234', 'maria.kristina@gmail.com', 'ratumaria11'),
(6, 'Hendra Wijaya', 'Jl. Imam Bonjol No. 34, Kelurahan Medan Petisah, Kota Medan, Sumatera Utara 20112', '082189012345', 'hendra.wijaya@gmail.com', 'kinghendra49'),
(7, 'Rina Andriani', 'Jl. Cihampelas No. 56, Kecamatan Sukajadi, Kota Bandung, Jawa Barat 40116', '089690123456', 'rina.andriani@gmail.com', 'rinasehat45'),
(8, 'Alex Setiawan', 'Jl. Gajah Mada No. 89, Kecamatan Tanjung Duren, Jakarta Barat, DKI Jakarta 11470', '082201234567', 'alex.setiawan@gmail.com', 'alex1945'),
(9, 'Nita Lestari', 'Jl. Malioboro No. 14, Kecamatan Danurejan, Kota Yogyakarta, DI Yogyakarta 55211', '088212345678', 'nita.lestari@gmail.com', 'nitaavanza2020'),
(10, 'Yudi Kurniawan', 'Jl. Raya Puncak No. 10, Kecamatan Cisarua, Kabupaten Bogor, Jawa Barat 16750', '081323456789', 'yudi.kurniawan@gmail.com', 'yudiaja'),
(11, 'Ujang Saepulloh', 'Jalan Haji Naim', '081224037210', 'ujang.saep@gmail.com', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facility_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `field`
--
ALTER TABLE `field`
  ADD PRIMARY KEY (`field_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `field_category`
--
ALTER TABLE `field_category`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `payment_method_id` (`payment_method_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`picture_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `field_id` (`field_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `field`
--
ALTER TABLE `field`
  MODIFY `field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `field_category`
--
ALTER TABLE `field_category`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`field_id`) REFERENCES `field` (`field_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `facility`
--
ALTER TABLE `facility`
  ADD CONSTRAINT `facility_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `field` (`field_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `field`
--
ALTER TABLE `field`
  ADD CONSTRAINT `field_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `field_category` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`payment_method_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`field_id`) REFERENCES `field` (`field_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`field_id`) REFERENCES `field` (`field_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
