-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 06:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `clien`
--

CREATE TABLE `clien` (
  `Id_clien` int(255) NOT NULL,
  `Nam_clien` varchar(10) NOT NULL,
  `Pre_clien` varchar(10) NOT NULL,
  `Tele_clien` varchar(15) NOT NULL,
  `Emai_clien` varchar(25) NOT NULL,
  `clien_Pass_word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clien`
--

INSERT INTO `clien` (`Id_clien`, `Nam_clien`, `Pre_clien`, `Tele_clien`, `Emai_clien`, `clien_Pass_word`) VALUES
(4, 'benchalh', 'benchalh', '0612453214', 'benchalh@gmail.com', '123'),
(5, 'ayman', 'benchalh', '0762553929', 'ouidadb4561@gmail.com', '123'),
(6, 'ayman', 'benchalh', '0762553929', 'ouidadb4561@gmail.com', '123'),
(7, 'marouan', 'marouan', '0762553929', 'marouan125@gmail.com', '123'),
(8, 'khaoula', 'khaoula', '0762553929', 'khaoula0200@gmail.com', '123'),
(9, 'khalid', 'khalid', '0762553929', 'khalid2002@gmail.com', '123'),
(10, 'marouan', 'benchalh', '0762553929', 'benchalhmarouan@gmail.com', '123'),
(11, 'khaoula', 'khalid', '0762553929', 'khaoula11202@gmail.com', '123'),
(12, 'hakima', 'khouida', '0762553929', 'hakimakhouida@gmail.com', '123'),
(13, 'nouhaila', 'nouhaila', '0762553929', 'nouhaila@gmail.com', '123'),
(15, 'abasse', 'abasse', '0762553929', 'abasse@gmail.com', '123'),
(16, 'hakima', 'khaoula', '0762553929', 'khaoula@gmail.com', '123'),
(17, 'nouhaila', 'oumari', '0762553929', 'oumari@gmail.com', '123'),
(19, 'ayman', 'benchalh', '', 'aymanbenchalh@gmail.com', '123'),
(20, 'khaoula', 'khaoula', '0762553929', 'khaoula52245@gmail.com', '123'),
(21, 'ayman', 'benchalh', '+212608908288', 'aymanbenchalh53@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `comend`
--

CREATE TABLE `comend` (
  `id_comend` int(11) NOT NULL,
  `id_clien` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `contute` int(11) NOT NULL,
  `total_prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comend`
--

INSERT INTO `comend` (`id_comend`, `id_clien`, `id_produit`, `contute`, `total_prix`) VALUES
(61, 19, 46, 2, 10800),
(62, 19, 50, 1, 22000),
(63, 19, 53, 3, 42000),
(66, 19, 47, 1, 1500),
(72, 20, 46, 1, 5400),
(73, 20, 53, 1, 14000),
(74, 20, 47, 2, 3000),
(75, 21, 47, 2, 3000),
(77, 21, 46, 1, 5400),
(78, 21, 49, 1, 1450);

-- --------------------------------------------------------

--
-- Table structure for table `commenter`
--

CREATE TABLE `commenter` (
  `Id_clien` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `commenter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forniser`
--

CREATE TABLE `forniser` (
  `Id_produit` int(11) NOT NULL,
  `Nome_forni` varchar(255) NOT NULL,
  `Prenom_forni` varchar(255) NOT NULL,
  `Tele_forni` int(12) NOT NULL,
  `ville_forni` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `livreure`
--

CREATE TABLE `livreure` (
  `ID_livreur` int(10) NOT NULL,
  `Cin_livreur` varchar(15) NOT NULL,
  `Nam_livreur` varchar(15) NOT NULL,
  `Pre_livreur` varchar(15) NOT NULL,
  `Tele_livreur` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_clien`
--

CREATE TABLE `message_clien` (
  `messa_name` varchar(255) NOT NULL,
  `mess_email` varchar(35) NOT NULL,
  `content_mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_clien`
--

INSERT INTO `message_clien` (`messa_name`, `mess_email`, `content_mess`) VALUES
('2001110300440@ofppt-edu.ma', '2001110300440@ofppt-edu.ma', 'your message123455'),
('aymanbenchalh53@gmail.com', 'aymanbenchalh53@gmail.com', 'your message hhhhh'),
('ayman', 'aymanbenchalh@gmail.com', 'aaaaaa'),
('hhheeda', 'hhheeda@gmail.com', 'hola amego'),
('aymanbe', 'ouidadb774@gmail.com', 'your message hhrrfdt'),
('ayman2022', 'ouidadben2023@gmail.com', 'aadwxss56664440@ofppt-edu.ma'),
('aymanbenchalh53@gmail.com', 'ouidadben361@gmail.com', 'your message heeyebzfsfc');

-- --------------------------------------------------------

--
-- Table structure for table `payement`
--

CREATE TABLE `payement` (
  `id_payemen` int(11) NOT NULL,
  `total_prix` int(11) NOT NULL,
  `contute` int(11) NOT NULL,
  `id_livere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `ID_produit` int(20) NOT NULL,
  `imag_prod` varchar(255) NOT NULL,
  `Nam_Produit` varchar(15) NOT NULL,
  `desin_pro` varchar(255) NOT NULL,
  `contite_prod` int(10) NOT NULL,
  `Prix_prod` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`ID_produit`, `imag_prod`, `Nam_Produit`, `desin_pro`, `contite_prod`, `Prix_prod`) VALUES
(43, 'pro2 (2).png', 'Mac book pro m1', 'gold', 20, 7580),
(46, 'pro3.png', 'Tablet Air', 'black', 5, 5400),
(47, 'pro4.png', 'AirPods', 'whait', 25, 1500),
(48, 'pro6.png', 'Audio music', 'black', 3, 780),
(49, 'pro5.png', 'Camera canon', 'black', 10, 1450),
(50, 'phone1.png', 'Iphone 14 Pro', 'whait', 10, 22000),
(51, 'pro2.png', 'Mac book Air', 'black', 10, 18000),
(52, 'pro3.png', 'Tablet Air Pro', 'gold', 20, 5070),
(53, 'pro1.png', 'Iphone 14 Pro', 'bleau', 15, 14000);

-- --------------------------------------------------------

--
-- Table structure for table `stroe_admn`
--

CREATE TABLE `stroe_admn` (
  `Useradmn` varchar(255) NOT NULL,
  `Pas-admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clien`
--
ALTER TABLE `clien`
  ADD PRIMARY KEY (`Id_clien`);

--
-- Indexes for table `comend`
--
ALTER TABLE `comend`
  ADD PRIMARY KEY (`id_comend`),
  ADD KEY `id_clien` (`id_clien`),
  ADD KEY `id_prod` (`id_produit`),
  ADD KEY `total_prix` (`total_prix`);

--
-- Indexes for table `commenter`
--
ALTER TABLE `commenter`
  ADD KEY `id_clien2` (`Id_clien`),
  ADD KEY `id_prod2` (`id_produit`);

--
-- Indexes for table `forniser`
--
ALTER TABLE `forniser`
  ADD PRIMARY KEY (`Nome_forni`),
  ADD KEY `id-pro` (`Id_produit`);

--
-- Indexes for table `livreure`
--
ALTER TABLE `livreure`
  ADD PRIMARY KEY (`ID_livreur`),
  ADD UNIQUE KEY `Cin_livreur` (`Cin_livreur`);

--
-- Indexes for table `message_clien`
--
ALTER TABLE `message_clien`
  ADD PRIMARY KEY (`mess_email`);

--
-- Indexes for table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`id_payemen`),
  ADD KEY `id_livreur` (`id_livere`),
  ADD KEY `totel_prix` (`total_prix`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ID_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clien`
--
ALTER TABLE `clien`
  MODIFY `Id_clien` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comend`
--
ALTER TABLE `comend`
  MODIFY `id_comend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `payement`
--
ALTER TABLE `payement`
  MODIFY `id_payemen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `ID_produit` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comend`
--
ALTER TABLE `comend`
  ADD CONSTRAINT `id_clien` FOREIGN KEY (`id_clien`) REFERENCES `clien` (`Id_clien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_prod` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`ID_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commenter`
--
ALTER TABLE `commenter`
  ADD CONSTRAINT `id_clien2` FOREIGN KEY (`Id_clien`) REFERENCES `clien` (`Id_clien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_prod2` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`ID_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forniser`
--
ALTER TABLE `forniser`
  ADD CONSTRAINT `id-pro` FOREIGN KEY (`Id_produit`) REFERENCES `produit` (`ID_produit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payement`
--
ALTER TABLE `payement`
  ADD CONSTRAINT `id_livreur` FOREIGN KEY (`id_livere`) REFERENCES `livreure` (`ID_livreur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `totel_prix` FOREIGN KEY (`total_prix`) REFERENCES `comend` (`total_prix`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
