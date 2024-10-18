-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 05:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(150) NOT NULL,
  `artist_desc` text NOT NULL,
  `artist_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`, `artist_desc`, `artist_image`, `price`, `category_id`, `uploaded_date`) VALUES
(3, 'Taylor Swift', 'Taylor Alison Swift is an American singer-songwriter. Known for her biographical songwriting, artistic reinventions, and cultural impact, Swift is a leading figure in popular music and the subject of widespread public interest.', './uploads/tylor.jpg', 1200000, 3, '2024-10-17'),
(4, 'Harry Styles', 'Harry Edward Styles is an English singer. Known for his influence in popular culture, showmanship, artistry, and philanthropy, he is regarded as one of the most influential men in music and fashion and a subject of widespread public interest with a vast fanbase.', './uploads/hary.jpg', 800000, 3, '2024-10-17'),
(6, 'Imagine Dragons', 'Imagine Dragons are an American pop rock band formed in 2008, based in Las Vegas, Nevada, and currently consisting of lead singer Dan Reynolds, guitarist Wayne Sermon, and bassist Ben McKee', './uploads/imagine.jpg', 1000000, 1, '2024-10-17'),
(9, 'Martin Garrix', 'Martijn Gerard Garritsen, known professionally as Martin Garrix and also as Ytram and GRX, is a Dutch DJ and record producer who was ranked number one on DJ Mag\'s Top 100 DJs list for three consecutive years—2016, 2017, and 2018.', './uploads/martin.jpg', 700000, 2, '2024-10-17'),
(10, 'Post Malone', 'Austin Richard Post, known professionally as Post Malone, is an American rapper, singer, songwriter, record producer, and guitarist. He has gained distinction and acclaim for his blending of various genres including hip hop, pop, R&B, trap, and country.', './uploads/post.jpg', 1400000, 3, '2024-10-17'),
(11, 'Coldplay', 'Coldplay are a British rock band formed in London in 1997. They consist of vocalist and pianist Chris Martin, guitarist Jonny Buckland, bassist Guy Berryman, drummer and percussionist Will Champion, and manager Phil Harvey.', './uploads/cold.jfif', 900000, 1, '2024-10-17'),
(12, 'Alan Walker', 'Alan Olav Walker is a Norwegian DJ and music producer. His songs \"Faded,\" \"Sing Me to Sleep,\" \"Alone,\" \"All Falls Down\" and \"Darkside\" have each been multi platinum certification and reached number 1 on the VG-lista chart in Norway.', './uploads/alan.jpg', 2000000, 2, '2024-10-17'),
(13, 'Ariana Grande', 'Ariana Grande-Butera is an American singer, songwriter, and actress. Regarded as a pop icon and an influential figure in popular music, she is noted for her four-octave vocal range and her signature use of the whistle register.', './uploads/ariana.jpg', 1800000, 3, '2024-10-17'),
(14, 'Fujii Kaze', 'Fujii Kaze is a Japanese singer-songwriter and pianist. Born and raised in Satoshō, Okayama, he began uploading piano covers of pop songs to YouTube at 12.', './uploads/fuji.jpg', 1500000, 3, '2024-10-17'),
(15, 'Radwimps', 'Radwimps is a Japanese rock band who debuted independently in 2003 and signed with Toshiba EMI in 2005. The band\'s name, Radwimps, was formed from two English slang terms, \"rad\" and \"wimp\".', './uploads/rad.png', 1200000, 1, '2024-10-17'),
(16, 'Marshmello', 'Christopher Comstock, known professionally as Marshmello, is an American electronic music producer and DJ. His songs \"Silence\", \"Wolves\", \"Friends\", \"Happier\", and \"Alone\"', './uploads/mas.jpg', 950000, 2, '2024-10-17'),
(17, 'DJ Yutaka', 'DJ Yutaka is one of Japan\'s most legendary DJ\'s. Dj Yutaka built a career in many discos and clubs with in Japan, This is the man the designed the Vestax DJ mixer and the Pioneer CDJ , Also he is first Asian hip-hop DJ', './uploads/yuk.jpg', 1100000, 2, '2024-10-17'),
(22, 'BTS', 'BTS, also known as the Bangtan Boys, is a South Korean boy band formed in 2010. The band consists of Jin, Suga, J-Hope, RM, Jimin, V, and Jungkook, who co-write or co-produce much of their material.', './uploads/bts.jpg', 200000, 1, '2024-10-18'),
(23, 'Lil Nas X', 'Montero Lamar Hill, better known by his stage name Lil Nas X, is an American rapper, singer, and songwriter. He rose to prominence with the release of his 2019 country rap single ', './uploads/lil.jpg', 600000, 3, '2024-10-18'),
(24, 'AniMe', 'DJ AniMeor simply AniMe, is an Italian DJ and producer specializing in the electronic music genre Hardcore.', './uploads/anime.jpg', 1565000, 2, '2024-10-18'),
(25, 'AC/DC', 'AC/DC are an Australian rock band formed in Sydney in 1973. The band was founded by brothers Malcolm Young on rhythm guitar and Angus Young on lead guitar.', './uploads/ac.jpg', 1700000, 1, '2024-10-18'),
(26, 'Yoasobi', 'Yoasobi is a Japanese pop duo formed in 2019 by Sony Music Entertainment Japan. It is composed of musician and record producer Ayase and singer-songwriter Lilas Ikuta, under the moniker Ikura.', './uploads/yoa.jpg', 1200000, 3, '2024-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `artist_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time_slot` varchar(20) NOT NULL,
  `booking_date` date NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `full_name`, `category_name`, `artist_name`, `email`, `time_slot`, `booking_date`, `phone_number`) VALUES
(6, 'divya', 'Music Artist', 'Taylor Swift', 'divyasathya@gmail.com', '15:00', '2024-10-26', '0768701235'),
(7, 'Pathum', 'Band Artist', 'Coldplay', 'pathum26@gmail.com', '18:00', '2024-10-31', '0784569713');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Band Artist'),
(2, 'DJ Artist'),
(3, 'Music Artist');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_phone` varchar(50) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_message` text NOT NULL,
  `uploaded_date_c` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_phone`, `contact_email`, `contact_subject`, `contact_message`, `uploaded_date_c`) VALUES
(1, 'Imasha', '+94768708453', 'mishall@gmail.com', 'Inquiry', 'hi this is problem', '2024-10-17'),
(2, 'thila', '+94758463229', 'thila26@gmail.com', 'non inqury', 'this is a message', '2024-10-17'),
(4, 'Sasha', '+94758463221', 'sasha@gmail.com', 'Inquiry', 'This is ', '2024-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `feed_name` varchar(50) NOT NULL,
  `feed_email` varchar(50) NOT NULL,
  `feed_rate` varchar(50) NOT NULL,
  `feed_value` varchar(50) NOT NULL,
  `feed_mesage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_name`, `feed_email`, `feed_rate`, `feed_value`, `feed_mesage`) VALUES
(1, 'Imasha', 'imasharandima26@gmail.com', 'Average', '2', 'this is ec'),
(2, 'Imasha', 'admin@example.com', 'Very Satisfied', '3', 'asxjnjna');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `isAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `repassword`, `isAdmin`) VALUES
(3, 'imasha', 'imasharandima26@gmail.com', '26860c21a035e53882f307060681eb95', '26860c21a035e53882f307060681eb95', 0),
(4, 'admin', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 1),
(5, 'divya', 'divyasathya@gmail.com', '72a11be643e19acefb86b7132cb2f96d', '72a11be643e19acefb86b7132cb2f96d', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`),
  ADD KEY `Test` (`category_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `Test` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
