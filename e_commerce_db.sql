-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 okt 2024 om 15:02
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small_description` varchar(255) NOT NULL,
  `long_description` longtext NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `flavour` varchar(255) DEFAULT NULL,
  `diet_type` varchar(255) DEFAULT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `items` int(11) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `discount` tinyint(1) NOT NULL,
  `discounted_price` float DEFAULT NULL,
  `ratings` int(11) NOT NULL DEFAULT 0,
  `img_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `items`
--

INSERT INTO `items` (`id`, `name`, `small_description`, `long_description`, `brand`, `flavour`, `diet_type`, `speciality`, `info`, `items`, `weight`, `category`, `price`, `discount`, `discounted_price`, `ratings`, `img_path`) VALUES
(1, 'Fresh organic villa farm lemon 500gm pack', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Citrus Nation', NULL, NULL, NULL, NULL, 1, NULL, 'Fruit', 123.25, 1, 120.25, 48, 'upload/img/items/lemon.jpg'),
(2, 'Best snakes with hazel nut pack 200gm', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Nut Factory', NULL, NULL, NULL, NULL, 1, NULL, 'Snacks', 150, 1, 145, 20, 'upload/img/items/coffee.jpg'),
(3, 'Fresh organic apple 1kg simla marming', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Fruits & Stuff', NULL, NULL, NULL, NULL, 1, NULL, 'Fruits', 123.25, 1, 120.25, 20, 'upload/img/items/fruitjuice.jpg'),
(4, 'Organic fresh venila farm watermelon 5kg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Fruits & Stuff', NULL, NULL, NULL, NULL, 1, NULL, 'Fruits', 72.6, 1, 50.3, 22, 'upload/img/items/watermelon.jpg'),
(5, 'Sweet crunchy nut mix 250gm pack', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Nuts & Co', NULL, NULL, NULL, NULL, 1, NULL, 'snacks', 123.25, 1, 120.25, 22, 'upload/img/items/nutmix.jpg'),
(6, 'Delicious white baked fresh bread and toast', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat veniam alias vel dicta.', 'The Bread Company', NULL, NULL, NULL, NULL, 1, NULL, 'Bakery', 22.1, 1, 20, 22, 'upload/img/items/bread.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
