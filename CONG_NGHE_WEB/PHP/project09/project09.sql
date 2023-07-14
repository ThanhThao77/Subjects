-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.11.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project09
CREATE DATABASE IF NOT EXISTS `project09` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `project09`;

-- Dumping structure for table project09.students
CREATE TABLE IF NOT EXISTS `students` (
  `std_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `std_fullname` varchar(30) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table project09.students: ~0 rows (approximately)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` (`std_id`, `std_fullname`) VALUES
	(1, 'Neely Anney'),
	(2, 'Jaquith Spurdon'),
	(3, 'Shaine Pea'),
	(4, 'Carlotta Claus'),
	(5, 'Hector Collier'),
	(6, 'Trudy Morville'),
	(7, 'Freemon Burch'),
	(8, 'Nani Tuddall'),
	(9, 'Whit Genese'),
	(10, 'Harp MacNeice'),
	(11, 'Callida Marusik'),
	(12, 'Silvana Radborn'),
	(13, 'Gretchen Gowman'),
	(14, 'Opalina Tixall'),
	(15, 'Deloris Goretti'),
	(16, 'Selena Dannatt'),
	(17, 'Randolph Moffett'),
	(18, 'Oby Wakes'),
	(19, 'Haleigh Anselm'),
	(20, 'Korie Million'),
	(21, 'Natalya Diggin'),
	(22, 'Jonathan De Hooge'),
	(23, 'Karoly Cod'),
	(24, 'Gordie Kroll'),
	(25, 'Rachelle Jobbing'),
	(26, 'Ardra Kowalik'),
	(27, 'Dorian Pedrick'),
	(28, 'Nerti Mothersole'),
	(29, 'Nell Sharples'),
	(30, 'Marion De Launde'),
	(31, 'Siobhan Westoll'),
	(32, 'Bobinette Reichardt'),
	(33, 'Jolene Arnaud'),
	(34, 'Madge Jepps'),
	(35, 'Rubi Bingham'),
	(36, 'Vernor Leroy'),
	(37, 'Izak Skowcraft'),
	(38, 'Cam Addicote'),
	(39, 'Mark Mathes'),
	(40, 'Titos Philippart'),
	(41, 'Sacha Fawckner'),
	(42, 'Louise McKim'),
	(43, 'Sybila Manchett'),
	(44, 'Gillan Kenny'),
	(45, 'Rubia Demetr'),
	(46, 'Whitney Booton'),
	(47, 'Keefe O\'Lochan'),
	(48, 'Brandy Delgadillo'),
	(49, 'Stanwood Soppit'),
	(50, 'Emmie Jancik'),
	(51, 'Shea Gerrelt'),
	(52, 'Sibilla Bracegirdle'),
	(53, 'Arney Rao'),
	(54, 'Corrianne Goble'),
	(55, 'Trisha Jagielski'),
	(56, 'Mack Levane'),
	(57, 'Abigale Goom'),
	(58, 'Carly Shutle'),
	(59, 'Deonne Dagwell'),
	(60, 'Celie Runham'),
	(61, 'Richie Hrynczyk'),
	(62, 'Felicio Tudball'),
	(63, 'Elnar Gorvin'),
	(64, 'Alidia Brozek'),
	(65, 'Peterus Leil'),
	(66, 'Prince Leming'),
	(67, 'Darin Janosevic'),
	(68, 'Sonia Polgreen'),
	(69, 'Leupold Trencher'),
	(70, 'Lorain McLelland'),
	(71, 'Sharyl Madelin'),
	(72, 'Paule Calcott'),
	(73, 'Linda Gravestone'),
	(74, 'Parnell Stummeyer'),
	(75, 'Roxanne Carnilian'),
	(76, 'Yolanda Craigmile'),
	(77, 'Maxie Krolle'),
	(78, 'Merl Lindeberg'),
	(79, 'Kalinda Treslove'),
	(80, 'Ivette Waplinton'),
	(81, 'Ives Finders'),
	(82, 'Yves Aylmer'),
	(83, 'Neila Skip'),
	(84, 'Melisande Pablos'),
	(85, 'Luke Georges'),
	(86, 'Onfroi Stollen'),
	(87, 'Ari Skentelbury'),
	(88, 'Dolores Giercke'),
	(89, 'Ernestus Laverick'),
	(90, 'Ariel Laflin'),
	(91, 'Banky Stainland'),
	(92, 'Jacquetta Leathe'),
	(93, 'Sloan Vooght'),
	(94, 'Charissa Turner'),
	(95, 'Dionis Rockhill'),
	(96, 'Cobbie Kemery'),
	(97, 'Winston Frackiewicz'),
	(98, 'Sinclare Pitone'),
	(99, 'Trumann Vasyaev'),
	(100, 'Waylin Seleway');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
