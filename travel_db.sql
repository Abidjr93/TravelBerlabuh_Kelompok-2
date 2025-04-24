-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2025 pada 12.56
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `group_size` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `available_months` varchar(255) NOT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tour_packages`
--

INSERT INTO `tour_packages` (`id`, `title`, `destination`, `location`, `duration`, `group_size`, `description`, `price`, `image`, `available_months`, `is_featured`, `created_at`) VALUES
(1, 'Paket Trip Gunung Bromo (Malang)', 'Gunung Bromo', 'Malang, Jawa Timur', '2', '5', 'Nikmati pesona matahari terbit paling ikonik di Indonesia!\r\nGunung Bromo menyuguhkan pemandangan dramatis dengan lautan pasir yang luas, kaldera megah, dan siluet gunung-gunung yang menyala keemasan saat fajar menyingsing. Dalam trip ini, kamu akan diajak menyaksikan sunrise dari Penanjakan, jelajah kawah Bromo, dan berpetualang dengan jeep di hamparan pasir berbisik dan Bukit Teletubbies. Cocok untuk para pecinta alam dan fotografi!', '200000.00', 'rome.jpg', 'March,April,May,June,September,October', 1, '2025-04-23 00:53:51'),
(2, 'Paket Trip Kawah Ijen (Banyuwangi)', 'Kawah Ijen', 'Banyuwangi, Jawatimur', '1', '6', 'Petualangan malam yang menakjubkan menuju api biru legendaris!\r\nKawah Ijen adalah satu-satunya tempat di Indonesia yang menawarkan fenomena blue fire yang langka. Trip ini membawa kamu mendaki dini hari untuk menyaksikan api biru menyala di tengah kegelapan, dilanjutkan dengan pemandangan kawah belerang berwarna hijau toska yang memukau saat matahari terbit. Bonus: kamu juga akan menyaksikan aktivitas para penambang belerang tradisional yang menantang.', '400000.00', 'paris.jpg', 'April,May,June,July,August,September', 1, '2025-04-23 00:53:51'),
(3, 'Paket Trip Gunung Dieng (Wonosobo)', 'Gunung Dieng', 'Wonosobo, Jawa Tengah', '3', '10', 'Jelajahi negeri di atas awan yang sarat budaya dan keindahan alam!\r\nDataran Tinggi Dieng menyuguhkan perpaduan alam pegunungan, situs sejarah, dan nuansa mistis yang unik. Dalam trip ini, kamu akan menikmati sunrise dari Bukit Sikunir, mengunjungi Telaga Warna yang eksotis, Candi Arjuna yang bersejarah, hingga menjelajah kawah aktif di sekitar pegunungan. Udara sejuk dan atmosfer damai menjadikan Dieng destinasi ideal untuk healing dan eksplorasi.', '500000.00', 'greece.jpg', 'May,June,July,August,September', 1, '2025-04-23 00:53:51'),
(4, 'Paket Trip Raja Ampat (Papua Barat)', 'Raja Ampat', 'Sorong, Raja Ampat', '4', '15', 'Surga bawah laut yang belum terjamah – eksplorasi keajaiban dunia dari timur Indonesia!\r\nRaja Ampat dikenal sebagai salah satu destinasi menyelam terbaik di dunia. Trip ini menawarkan petualangan ke pulau-pulau eksotis, snorkeling di perairan jernih penuh terumbu karang dan ikan tropis, serta menikmati panorama karst spektakuler dari Piaynemo. Cocok untuk kamu yang mencari kedamaian, keindahan alam, dan keunikan budaya Papua.', '349000.00', 'barcelona.jpg', 'March,April,May,June,September,October', 1, '2025-04-23 00:53:51'),
(5, 'Paket Trip Pulau Komodo (Labuan Bajo)', 'Pulau Komodo', 'Labuan Bajo – Taman Nasional Komodo', '3', '8', 'Bertualang di tanah naga purba – destinasi eksotis nan menantang!\r\nTrip ke Pulau Komodo mengajak kamu menyusuri habitat asli komodo, satwa purba khas Indonesia. Tak hanya itu, kamu juga akan diajak island hopping ke pulau-pulau indah seperti Padar, Pink Beach, dan Manta Point. Trekking, berenang, dan snorkeling jadi satu dalam petualangan penuh warna di perairan Nusa Tenggara.', '329000.00', 'amsterdam.jpg', 'April,May,June,July,August,September', 0, '2025-04-23 00:53:51'),
(6, 'Paket Trip Ubud & Kintamani (Bali Tengah)', 'Ubud & Kintamani', 'Gianyar, Bali', '4 Days', '10-15', 'Nikmati sisi tenang Bali yang dipenuhi budaya dan keindahan alam yang memukau.\r\nUbud adalah jantung budaya Bali. Trip ini membawamu menyusuri terasering sawah di Tegalalang, mengunjungi pura suci seperti Tirta Empul, serta merasakan suasana spiritual dan artistik khas Bali. Dilengkapi dengan kunjungan ke Kintamani, kamu bisa menikmati view spektakuler Gunung dan Danau Batur.', '449000.00', 'london.jpg', 'March,April,May,June,July,August,September', 0, '2025-04-23 00:53:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
