-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2024 at 02:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `sent_at`) VALUES
(1, 'Rayyan', 'mr.rayyan2005@gmail.com', 'I want samsung tablet', '2024-08-18 05:28:49'),
(2, 'Rakesh', 'rakesh@gmail.com', 'i want phone', '2024-08-18 05:33:09'),
(3, 'Rakesh', 'okk@gmail.com', 'hii', '2024-08-18 05:34:23'),
(4, 'mukesh', 'rathee@gmail.com', 'microphones are good', '2024-08-18 05:37:30'),
(5, 'janisar', 'janisar@gmail.com', 'i want a game', '2024-08-18 06:33:09');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `sno` int(3) NOT NULL,
  `category` varchar(15) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`sno`, `category`, `image`, `title`, `description`, `price`) VALUES
(1, 'Games', 'products/batlefield.jpg', 'Battlefield video Game', 'The \"Battlefield\" series is a popular first-person shooter (FPS) video game franchise developed by DICE and published by Electronic Arts. ', 49.99),
(6, 'Games', 'products/star-wars.jpg', 'Star Wars: The Complete Guide to the Galaxy\'s Most Iconic Games', 'Dive into the expansive universe of Star Wars through its most influential games with this comprehensive guide. From the classic arcade hits to the latest console and PC adventures.', 42.3),
(7, 'Games', 'products/tank.jpg', 'Tank Warfare: The Ultimate Guide to Tank Games', 'Explore the thrilling world of tank warfare with this comprehensive guide to tank games. From iconic classics like Battlezone and World of Tanks to modern ', 15.8),
(8, 'Games', 'products/farcry.jpg', 'Far Cry: Exploring the Ultimate Open-World Adventure', 'Immerse yourself in the world of Far Cry with this detailed exploration of the acclaimed open-world game series.', 60.2),
(9, 'phones', 'products/phone-1.jpg', 'Moto G Series: A Revolution in Affordable Smartphones', 'Explore the impact of Motorola\'s Moto G series in this detailed guide to one of the most popular lines of budget smartphones.', 122.3),
(10, 'phones', 'products/phone-2.jpg', 'Never Settle: The Rise of OnePlus and Its Quest for Perfection', 'Uncover the journey of OnePlus, a brand that embodies the \"Never Settle\" mantra with its relentless pursuit of innovation and excellence in the smartphone industry.', 345.6),
(11, 'phones', 'products/phone-3.jpg', 'Realme GT: Power and Performance Redefined', 'Explore the Realme GT, a game-changer in the smartphone arena, with this detailed guide to one of Realme\'s most powerful models. Discover how the Realme GT combines cutting-edge technology, high-speed performance, and sleek design to deliver an exceptional user experience. ', 456.7),
(12, 'phones', 'products/phone-4.jpg', 'Never Settle: The Rise of OnePlus and Its Quest for Perfection', 'Uncover the journey of OnePlus, a brand that embodies the \"Never Settle\" mantra with its relentless pursuit of innovation and excellence in the smartphone industry.', 456.6),
(13, 'microphones', 'products/mic-1.jpg', 'Rode PodMic: Mastering Professional Podcasting and Broadcasting', 'Discover the power of the Rode PodMic with this in-depth guide to one of the most acclaimed microphones for podcasting and broadcasting. ', 99),
(14, 'microphones', 'products/mic-2.jpg', 'Audio-Technica Microphones: A Guide to Superior Sound Quality', 'Dive into the world of Audio-Technica microphones with this comprehensive guide that covers the brand\'s renowned range of audio equipment.', 99),
(15, 'microphones', 'products/mic-3.jpg', 'Elgato Wave:3: The Ultimate Guide to Streaming and Podcasting Excellence', 'Unlock the potential of the Elgato Wave:3 with this detailed guide to one of the most advanced microphones designed for streamers and podcasters. ', 149.5),
(22, 'Novels', 'products/novel-1.jpg', 'Economist: The User Guide', 'e User Guide is a comprehensive handbook designed to help users navigate the world of economic reporting and analysis provided by The Economist magazine.', 12.5),
(23, 'Novels', 'products/novel-2.jpg', 'The Fault in Our Stars', 'The Fault in Our Stars by John Green is a poignant and deeply moving novel that explores the lives of two teenagers battling cancer. Hazel Grace Lancaster, a sixteen-year-old cancer patient, meets Augustus Waters, a charming and philosophical young man, at a support group. ', 32.4),
(24, 'Novels', 'products/novel-3.jpg', 'Inferno', 'Inferno by Dan Brown is a gripping thriller that follows Harvard symbologist Robert Langdon as he delves into a complex web of secrets and conspiracies. When Langdon wakes up in an Italian hospital with amnesia, he teams up with Dr. Sienna Brooks to unravel a series of cryptic clues related to Dante Alighieri\'s Divine Comedy. ', 20),
(25, 'Novels', 'products/novel-4.jpg', ' Forrest Gump', 'Forrest Gump by Winston Groom is an inspirational novel that chronicles the extraordinary life of Forrest Gump, a man with a low IQ but a kind heart and incredible luck. ', 13.3),
(26, 'Laptops', 'products/lap-1.jpg', 'HP Spectre x360 14', 'The HP Spectre x360 14 is a premium 2-in-1 convertible laptop designed for versatility and high performance. Featuring a sleek, ultra-thin design, it offers a 13.5-inch, 3K2K OLED touchscreen display that provides vibrant, true-to-life colors and sharp details.', 120.5),
(27, 'Laptops', 'products/lap-2.jpg', 'Dell XPS 13', 'The Dell XPS 13 is a high-end ultrabook renowned for its premium build and exceptional performance. Sporting a 13.4-inch InfinityEdge display with a near-borderless design.', 344.4),
(28, 'Laptops', 'products/lap-3.jpg', 'ASUS ROG Zephyrus G14', 'The ASUS ROG Zephyrus G14 is a powerful gaming laptop designed for high performance and portability. Featuring a 14-inch Full HD display with a 120Hz refresh rate, it delivers smooth and vibrant visuals for an immersive gaming experience.', 345.8),
(29, 'Laptops', 'products/lap-4.jpg', 'Lenovo ThinkPad X1 Carbon (9th Gen)', 'The Lenovo ThinkPad X1 Carbon (9th Gen) is a premium business laptop known for its robustness, portability, and top-notch performance. Featuring a 14-inch UHD display with Dolby Vision for sharp and vibrant visuals, it is ideal for professionals.', 500.3),
(30, 'microphones', 'products/mic-4.jpg', 'Razer Seiren: Elevating Your Streaming and Recording Experience', 'Discover the Razer Seiren microphone with this comprehensive guide designed for gamers, streamers, and content creators.', 113);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
