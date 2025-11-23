-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2025 at 01:42 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `book_id` int NOT NULL,
  `booking_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `pickup_deadline` datetime DEFAULT NULL,
  `status` enum('Dipinjam','Dikembalikan','Terlambat') DEFAULT 'Dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `year` int DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `pages` int DEFAULT NULL,
  `status` enum('available','borrowed','reserved') DEFAULT 'available',
  `description` text,
  `cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `category`, `year`, `isbn`, `pages`, `status`, `description`, `cover`) VALUES
(1, 'Bumi Manusia 123', 'Pramoedya Ananta Toer', 'History', 1980, '978', 464, 'reserved', 'Buku ini mengajarkan prinsip-prinsip menulis kode yang bersih, mudah dibaca, dan mudah dikelola. Essential untuk setiap programmer yang ingin meningkatkan kualitas kodenya.', 'Gambar/bumi manusia.jpg'),
(2, 'Laskar Pelangi', 'Andrea Hirata', 'Romance', 2005, '978', 368, 'borrowed', 'Panduan klasik tentang desain yang berpusat pada pengguna. Menjelaskan bagaimana desain yang baik dapat membuat hidup lebih mudah.', 'Gambar/laskar pelangi.jpg'),
(3, 'Filosofi Teras', 'Heary Manampiring', 'Fiksi', 2018, '978', 153, 'reserved', 'Mengeksplorasi bagian-bagian terbaik dari JavaScript dan mengajarkan cara menulis kode JavaScript yang efektif dan elegan.', 'Gambar/filosofi teras.jpg'),
(4, 'Perahu Kertas', 'Dewi Lestari', 'Fiksi', 2003, '978', 444, 'available', 'Eksplorasi mendalam tentang dua sistem pemikiran manusia dan bagaimana keduanya membentuk penilaian dan keputusan kita.', 'Gambar/perahu kertas.jpg'),
(5, 'Algoritma dan Pemograman', 'Dr. Ir. Munir', 'Programming', 2023, '978', 336, 'available', 'Metodologi revolusioner untuk menciptakan dan mengelola startup yang sukses di era yang penuh ketidakpastian.', 'Gambar/algoritma dan pemograman.jpg'),
(6, 'Atomic Habits', 'James Clear', 'fiction', 2021, '978', 328, 'available', 'Novel distopia klasik yang menggambarkan masyarakat totaliter di bawah pengawasan Big Brother. Sangat relevan dengan era digital saat ini.', 'Gambar/atomic habits.jpg'),
(7, 'Steve Jobs', 'Walter Isaacson', 'biography', 2022, '978', 656, 'borrowed', 'Biografi lengkap tentang kehidupan dan karir Steve Jobs, pendiri Apple, berdasarkan wawancara eksklusif.', 'Gambar/dilan 1990.jpg'),
(8, 'A Brief History of Time', 'Stephen Hawking', 'science', 2020, '978', 256, 'available', 'Penjelasan yang dapat diakses tentang kosmologi modern, dari Big Bang hingga lubang hitam dan perjalanan waktu.', 'Gambar/jepang.jpg'),
(9, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'History', 1980, '978', 464, 'available', 'Buku ini mengajarkan prinsip-prinsip menulis kode yang bersih, mudah dibaca, dan mudah dikelola. Essential untuk setiap programmer yang ingin meningkatkan kualitas kodenya.', 'Gambar/bumi manusia.jpg'),
(10, 'Laskar Pelangi', 'Andrea Hirata', 'Romance', 2005, '978', 368, 'borrowed', 'Panduan klasik tentang desain yang berpusat pada pengguna. Menjelaskan bagaimana desain yang baik dapat membuat hidup lebih mudah.', 'Gambar/laskar pelangi.jpg'),
(11, 'Filosofi Teras', 'Heary Manampiring', 'Fiksi', 2018, '978', 153, 'available', 'Mengeksplorasi bagian-bagian terbaik dari JavaScript dan mengajarkan cara menulis kode JavaScript yang efektif dan elegan.', 'Gambar/filosofi teras.jpg'),
(12, 'Perahu Kertas', 'Dewi Lestari', 'Fiksi', 2003, '978', 444, 'available', 'Eksplorasi mendalam tentang dua sistem pemikiran manusia dan bagaimana keduanya membentuk penilaian dan keputusan kita.', 'Gambar/perahu kertas.jpg'),
(13, 'Algoritma dan Pemograman', 'Dr. Ir. Munir', 'Programming', 2023, '978', 336, 'available', 'Metodologi revolusioner untuk menciptakan dan mengelola startup yang sukses di era yang penuh ketidakpastian.', 'Gambar/algoritma dan pemograman.jpg'),
(17, 'Atomic Habits', 'James Clear', 'Business', 2024, '978-0735211292', 320, 'available', 'Panduan praktis untuk membangun kebiasaan baik dan menghilangkan kebiasaan buruk melalui perubahan kecil yang konsisten.', 'atomic_habits.jpg'),
(18, 'The Psychology of Computer Programming', 'Gerald M. Weinberg', 'Programming', 2019, '978-0932633420', 288, 'borrowed', 'Eksplorasi aspek manusia dalam pengembangan perangkat lunak dan bagaimana psikologi mempengaruhi proses programming.', 'psychology_programming.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `id` int NOT NULL,
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `book_id` int DEFAULT NULL,
  `tanggal_pinjam` datetime DEFAULT CURRENT_TIMESTAMP,
  `batas_waktu` datetime DEFAULT NULL,
  `status` enum('Dipinjam','Dikembalikan','Terlambat') DEFAULT 'Dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `user_id`, `book_id`, `tanggal_pinjam`, `batas_waktu`, `status`) VALUES
(12, NULL, NULL, '2025-11-13 15:40:33', '2025-11-16 15:40:33', 'Dipinjam'),
(13, NULL, NULL, '2025-11-13 15:41:20', '2025-11-16 15:41:20', 'Dipinjam'),
(14, NULL, NULL, '2025-11-13 15:48:51', '2025-11-16 15:48:51', 'Dipinjam'),
(18, NULL, NULL, '2025-11-14 03:46:39', '2025-11-17 03:46:39', 'Dipinjam'),
(19, NULL, NULL, '2025-11-14 03:52:35', '2025-11-17 03:52:35', 'Dipinjam'),
(20, NULL, NULL, '2025-11-14 04:06:18', '2025-11-17 04:06:18', 'Dipinjam'),
(21, NULL, NULL, '2025-11-15 12:42:05', '2025-11-18 12:42:05', 'Dipinjam'),
(22, NULL, NULL, '2025-11-15 12:43:03', '2025-11-18 12:43:03', 'Dipinjam'),
(23, NULL, NULL, '2025-11-16 04:20:30', '2025-11-19 04:20:30', 'Dipinjam'),
(24, NULL, NULL, '2025-11-16 04:21:10', '2025-11-19 04:21:10', 'Dipinjam'),
(25, 1, 1, '2025-11-19 19:41:12', '2025-11-26 19:41:12', 'Dipinjam'),
(26, 2, 2, '2025-11-19 19:41:12', '2025-11-26 19:41:12', 'Dipinjam'),
(27, 21, 1, '2025-11-20 14:48:35', '2025-11-20 14:48:35', 'Dipinjam'),
(28, 21, 2, '2025-11-20 14:48:52', '2025-11-20 14:48:52', 'Dipinjam'),
(29, 21, 1, '2025-11-20 15:24:04', '2025-11-20 15:24:04', 'Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `buku_dipinjam` varchar(150) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `batas_waktu` date NOT NULL,
  `status` enum('Dipinjam','Dikembalikan','Terlambat') DEFAULT 'Dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `email`, `no_telepon`, `buku_dipinjam`, `tanggal_pinjam`, `batas_waktu`, `status`) VALUES
(1, 'user@example.com', '081234567890', 'Belajar PHP untuk Pemula', '2025-01-10', '2025-01-17', 'Dipinjam'),
(2, 'user@example.com', '081298765432', 'Dasar-Dasar MySQL', '2025-01-05', '2025-01-12', 'Dikembalikan'),
(3, 'user@example.com', '088888888888', 'Belajar JavaScript Lanjutan', '2024-12-20', '2024-12-27', 'Terlambat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Test User', 'test@example.com', '081234567890', '$2y$10$s11QTzlVqol5oGjsbUmmaOEQ32AHT/yTDIbEWcHQfwwoDNf0W7Jku'),
(2, 'oll', 'lll@ooo.com', '098765', '$2y$10$1g1q6Rj4JVa.oKcWRMLDKOrEu2ErN6ZTysEewE/.NXePLOXjDsMJe'),
(4, 'William Tjandera', 'williamtjandera956@gmail.com', '089696380789', '$2y$10$/LlRkP/IyqRffdOMag4OdeUdM.LWylYowBWgv56i5Y2TFdxS9htUy'),
(5, 'Hernandez lim', 'hernan@gmail.com', '0120930233', '$2y$10$.ooVUwKDdEnmarRVa6rsq.UthaD0A7Iiw.3nCP8dZIrGik/vl.45C'),
(6, 'LEWIS GAY', 'lewis.gay@gmail.com', '081234567890', '$2y$10$iFU25emdeJGXMbQt8wrjS.yI3V5XBeR52DWQO8weCv8cBtbfXfEMO'),
(7, 'jobi', 'job@gmail.com', '0293092032', '$2y$10$Pi2AGU82w48hQYNJIWlK3eGkApaJP4n8N35FY8EtEZ9f6WTRQ4zOW'),
(8, 'jose', 'jose@gmail.com', '209309120903', '$2y$10$vWNs2qFxNyADmgOlKfHD8.NICzVNi3Aga.wL0lJ1vWzmDjvVzVbHG'),
(10, 'Richard', 'richard@gmail.com', '0723878324923', '$2y$10$teWIjKs/iH8Xs18E9Q0LBexDJQO7iyDaQVG3NTs3ecUUK7HhL4vtu'),
(17, 'William Tjandera', 'william@gmiail.com', '0810299323', '$2y$10$8W09A6Sw69YBfor0A6TjIes3fSYDt2V2bUFUlEilfGFZzoyJ/bn/O'),
(18, 'William Tjandera', 'williamtjandera906@gmail.com', 'lewis.gay@gmail.com', '$2y$10$thAa0K2tslXmDhYl.bsHx.xGXLFhtqRwuYstKU49FfVvLQOet.sLW'),
(19, 'ppp', 'pp@ppp.com', '543', '$2y$10$EFXPS7s6l.lCnjQLeJU2mOh.Ef5ylbx7JNFf2BaYAINNPuBvRVgOC'),
(21, '', 'williamtjandera9006@gmail.com', '089696380789', '$2y$10$mDpohWxH2Ez6/N2cEJNTJ.3jwG5iDlgaZvp/z/OCWR97x2BppzUmK'),
(22, 'Meishia Vingenia Jimmy', 'Meishia@gmail.com', '0910290192', '$2y$10$r5LdxajY1FFecCrPO6z9EuEaMJuWpntJdLbBOExsRaUKmAspuXYuW'),
(23, 'aju', 'aju@gmail.com', '1233233232', '$2y$10$3zwEuXcYvZSvts4jFVig2OolFH3rLEYOhR/KnJ5IRXj1MpRXp5Lia'),
(24, 'aju', 'a12ju@gmail.com', '01291021212', '$2y$10$4WCmg8GU3/6kh3PgJ8RRHul6NbA.yXwXiwVFB4uch1dMvHmsxhlhi'),
(25, 'William TJ', 'william@gmail.com', '0812345678', '$2y$10$d9KqSk/H/IQnHXRMnIBoTO8sUZXNs4asPnzj/VpQDcj.a0sljQNSC'),
(27, 'William TJ', 'william12222@gmail.com', '0812345678', '$2y$10$n4zpn/8vaqHHRsYxqU.rvuwxjYl.OjKuEZPPTNVsh2nqrOS.fA.km'),
(28, 'Rani', 'Rani@gmail.com', '089929292992', '$2y$10$irtWrBMl3/oh6ruUBNhwVOkVp04oR.TxUx.qEOqyy8fasxk12MXe2'),
(29, 'William', 'william@example.com', NULL, '12345'),
(30, 'Kevin', 'kevin@example.com', NULL, '12345'),
(31, 'Jason', 'jason@example.com', NULL, '12345'),
(32, 'poni', 'poni@gmail.com', '0192091222', '$2y$10$b2WFIH/a7t5NRZaJVxtanu21AAMAusYwzu2kRP0QsA/0UOob.XQFW'),
(33, 'lewis gembel', 'lewis.gembel@gmail.com', '081234567890', '$2y$10$b4G/eH8JSeCptDqbFRxGfuvo.UKP.5Om8emifm.AcExA3tV3dPdsq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_borrowers_user` (`user_id`),
  ADD KEY `fk_borrowers_book` (`book_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD CONSTRAINT `fk_borrowers_book` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `fk_borrowers_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
