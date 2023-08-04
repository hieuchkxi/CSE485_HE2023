-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.0.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for xproject
CREATE DATABASE IF NOT EXISTS `xproject` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `xproject`;

-- Dumping structure for table xproject.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table xproject.employees: ~50 rows (approximately)
INSERT INTO `employees` (`id`, `Name`, `Address`, `Salary`) VALUES
	(1, 'Erin Pidgeley', '9605 Dennis Park', 9075),
	(2, 'Elvin Dommerque', '0569 Farwell Alley', 9670),
	(3, 'Miles Loiterton', '42701 Rieder Park', 1088),
	(4, 'Reagen Abrahamian', '85 Kedzie Hill', 4824),
	(5, 'Paolina Mochar', '128 Truax Point', 7858),
	(6, 'Farra Place', '2812 Shoshone Road', 8936),
	(7, 'Brion Von Helmholtz', '7 Erie Point', 2864),
	(8, 'Lenka Duxbarry', '9 Tony Park', 8552),
	(9, 'Max Sprague', '4 Bobwhite Point', 2376),
	(10, 'Booth Wink', '5051 Barnett Point', 5032),
	(11, 'Skipton Basire', '026 Mcbride Point', 3714),
	(12, 'Julietta Wardley', '183 Knutson Street', 7251),
	(13, 'Brad Birkenhead', '33 Schiller Center', 9774),
	(14, 'Janna Devigne', '055 Havey Road', 4049),
	(15, 'Myron Foulser', '4461 Linden Road', 9854),
	(16, 'Eldin Derby', '4 Welch Street', 9132),
	(17, 'Perry Gillani', '0 Mifflin Center', 2122),
	(18, 'Josy Durbyn', '8 Kenwood Point', 8989),
	(19, 'Meredithe Kreber', '1441 Springs Plaza', 7072),
	(20, 'Pooh Stallworthy', '88 Redwing Terrace', 3572),
	(21, 'Leonid Keesman', '503 Alpine Trail', 4064),
	(22, 'Lionello Fulger', '37344 Glacier Hill Junction', 8354),
	(23, 'Marj Garfield', '20 Lake View Parkway', 6261),
	(24, 'Editha Dobney', '29 Red Cloud Point', 1862),
	(25, 'Hy Backs', '3367 Monica Junction', 2066),
	(26, 'Logan Ney', '29023 Forest Dale Center', 6703),
	(27, 'Emlyn Stanesby', '90239 Bowman Crossing', 5494),
	(28, 'Ryun Lumbley', '441 David Court', 1067),
	(29, 'Lorrie Townsend', '4 Iowa Avenue', 2144),
	(30, 'Elana Crotty', '2977 Petterle Center', 6046),
	(31, 'Rollie Tofful', '033 Morrow Crossing', 8645),
	(32, 'Quintilla Halt', '50214 Anderson Plaza', 3881),
	(33, 'Alameda Rizziello', '47302 Clemons Park', 9580),
	(34, 'Blithe Crosher', '2 Westerfield Alley', 3395),
	(35, 'Olga Milbourn', '4 Barnett Hill', 8140),
	(36, 'Wilmar Galbreath', '3333 5th Drive', 3544),
	(37, 'Verge Lawman', '51751 Bunker Hill Alley', 3493),
	(38, 'Garv Schuster', '9755 North Point', 7416),
	(39, 'Crista Fesby', '95 Anhalt Road', 7442),
	(40, 'Michale Knotton', '3 Melby Pass', 1403),
	(41, 'Siana Myring', '82220 Kedzie Junction', 2565),
	(42, 'Sam Qusklay', '90 Dapin Crossing', 3512),
	(43, 'Reynard Canto', '5 Coolidge Street', 6502),
	(44, 'Georgeanna Grimsdyke', '88479 Chive Road', 2437),
	(45, 'Yolanda Chopping', '72 Nevada Road', 8737),
	(46, 'Ives Malimoe', '5948 Susan Avenue', 8688),
	(47, 'Julienne Harvey', '10 Texas Road', 4929),
	(48, 'Randall Aldcorne', '77 Buena Vista Parkway', 2435),
	(49, 'Pauly Jepp', '4600 Jay Hill', 7566),
	(50, 'Chevalier Kinkead', '00431 Maple Wood Park', 7150);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
