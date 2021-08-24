-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 06:24 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakpw_tubes_203040003`
--

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `sinopsis` varchar(250) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novel`
--

INSERT INTO `novel` (`id`, `judul`, `gambar`, `pengarang`, `sinopsis`, `harga`, `kategori`) VALUES
(1, 'What\'s so wrong about your life', '1.jpg', 'Ardhi Mohammad', 'membahas tentang kesalahan-kesalahan yang sering kita lakukan dalam menghadapi suatu hal. Mulai dari masalah cinta, kebahagiaan, pencapaian dalam hidup atau cara kita menghadapi suatu masalah', 84000, 'Novel'),
(2, 'JIka Kita Tak Pernah Jatuh cinta', '2.jpg', 'Alvi Syahrin', 'tentang sebuah bentuk segala permasalahan tentang cinta. Mengajarkan kita untuk tidak payah hingga mengorbankan banyak hal demi cinta', 74000, 'Novel'),
(3, 'JIka Kita Tak Pernah Baik Baik Saja', '3.jpg', 'Alvi Syahrin', 'Mengatasi kekecewaan hidup', 74000, 'Novel'),
(4, 'Tumbuh Dari Luka', '4.jpg', 'Indra Sugiarto', 'Novel ini untuk para pejuang yang ingin memilih tumbuh atas hancur dari luka', 99000, 'Novel'),
(5, 'Book of Introvert', '5.jpg', 'Sutrisno', 'Novel Book of Introvert berisi tentang bagaimana kita bisa tetap istimewa dengan kepribadian introvert', 50000, 'Novel'),
(6, 'Duduk Dulu', '6.jpg', 'Andrea Hirata', 'novel ini menjelaskan tentang jiwa manusia dalam amarah, kesedihan, kecemasan, hingga kesepian', 83000, 'Novel'),
(7, 'Tentang Semua Yang Ada diBumi', '7.jpg', 'aesteuticc', 'Manusia sungguh makhluk yang lucu. Bisa merasa takut kehilangan pada yang belum benar-benar miliknya.', 77000, 'Novel'),
(8, 'Sabtu Bersama Bapak', '8.jpg', 'Aditya Mulya', 'Berawal dari keluarga kecil seorang ayah bernama Gunawan Garnida yang divonis sakit. Ia sadar, masih panjang perjalanan hidup kedua anaknya, yang kala itu masih kecil, dan masih butuh pemdampingan serta nasihat-nasihat serta nilai-nilai kehidupan', 45000, 'Novel'),
(9, 'Tak Mungkin Membuat Semua Orang Senang', '9.jpg', 'Jeong Moon Jeong', 'Buku ini semacam curhatan Moon-jeong tentang bagaimana seharusnya menjalin hubungan antarmanusia. Karena bentuknya curhat, buku ini didominasi oleh pemikiran-pemikiran Moon-jeong sendiri', 69000, 'Novel'),
(10, 'Buku Ini Untuk Kamu', '10.jpg', 'Menjadi Manusia', 'Kumpulan surat-surat yang dikurasi dari ribuan surat lainnya, yang belum sempat tersampaikan. Semoga dapat mewakili perasaan banyak orang. Kami percaya, ketika suara tidak mampu mengutarakan, tulisan adalah cara yang tepat untuk meluapkan perasaan.', 92000, 'Novel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
