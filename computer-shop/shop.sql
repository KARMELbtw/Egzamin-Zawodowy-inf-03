-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Wrz 25, 2024 at 10:29 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(777) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Laptopy'),
(2, 'Komputery'),
(5, 'Podzespoły komputerowe'),
(7, 'Gaming'),
(8, 'Smartphony i smartwatche'),
(9, 'Telewizory i audio');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `discounts`
--

CREATE TABLE `discounts` (
  `product_id` int(11) NOT NULL,
  `discount_in_percent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`product_id`, `discount_in_percent`) VALUES
(1, 25);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `topic` varchar(777) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(777) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `topic`, `message`, `email`, `user_id`, `creation_date`) VALUES
(1, 'Temat testowy', 'dasd', 'test@test.test', NULL, '2024-09-13'),
(2, 'Temat testowy', 'dasd', 'test@test.test', 0, '2024-09-13'),
(3, 'Temat testowy', 'affzx', 'test@test.test', 1, '2024-09-13'),
(4, 'Temat testowy', 'affzx', 'test@test.test', 1, '2024-09-13'),
(5, 'test', 'test', 'test@test.test', 1, '2024-09-19'),
(6, 'test', 'test', 'test@test.test', 1, '2024-09-19'),
(7, 'Temat testowy', 'd', 'test@test.test', 1, '2024-09-24');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(777) NOT NULL,
  `description` text NOT NULL,
  `image_link` varchar(777) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `on_discount` tinyint(1) DEFAULT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image_link`, `category_id`, `subcategory_id`, `price`, `on_discount`, `seller_id`) VALUES
(1, 'Płyta główna MSI MAG Z790 TOMAHAWK MAX WIFI', 'Płyta główna MSI MAG Z790 TOMAHAWK MAX WIFI został zaprojektowany dla graczy, zapewniając stabilną, solidną i trwałą podstawę dla ich komputerów PC. Wyposażony w rozwiązanie Wi-Fi 7, 2.5G LAN, rozwiązania DDR5, PCIe 5.0 i ekskluzywny M.2 Shield Frozr, jest gotowy na procesory Intel® Core 14. i 13. generacji. Seria MAG walczy u boku graczy w pogoni za honorem. Dzięki dodaniu elementów inspirowanych militariami, te produkty do gier odrodziły się jako symbol solidności i trwałości.', 'https://images.morele.net/i1064/13129641_4_i1064.jpg|https://images.morele.net/i1064/13129641_0_i1064.jpg|https://images.morele.net/i1064/13129641_1_i1064.jpg|https://images.morele.net/i1064/13129641_2_i1064.jpg|https://images.morele.net/i1064/13129641_3_i1064.jpg', 5, 1, 1209, NULL, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `name` varchar(777) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`) VALUES
(1, 'Oficjalny sprzedwaca PC Master');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(777) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`) VALUES
(1, 'Płyty Główne', 5),
(3, 'Dyski', 5),
(4, 'Karty graficzne', 5),
(7, 'Procesory', 5),
(8, 'Pamięci RAM', 5),
(9, 'Laptopy', 1),
(10, 'Akcesoria do laptopów', 1),
(11, 'Komputery stacjonarne', 2),
(12, 'Komputery All-in-one', 2),
(13, 'Serwery', 2),
(14, 'Konsole', 7),
(15, 'Gry', 7),
(16, 'Gogle VR', 7),
(17, 'Smartfony', 8),
(18, 'Akcesoria do smartfonów', 8),
(19, 'Smartwatche', 8),
(20, 'Smartbandy', 8),
(21, 'Telewizory', 9),
(22, 'Projektory', 9),
(23, 'Audio', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(777) NOT NULL,
  `password` varchar(777) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `is_admin`) VALUES
(1, 'user', 'user', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
