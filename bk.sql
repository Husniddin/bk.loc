-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2015 at 12:42 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bk`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `anons` text NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL,
  `views` int(20) DEFAULT NULL,
  `visible` enum('0','1') NOT NULL,
  `image` varchar(100) NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `home_page` enum('0','1') DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_user1_idx` (`user_id`),
  KEY `fk_article_category1_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `anons`, `text`, `date`, `views`, `visible`, `image`, `file`, `home_page`, `user_id`, `category_id`) VALUES
(6, 'Lorem ipsum dolor sit amet', '<p><em></em></p><p><em><strong>Lorem ipsum dolor sit amet, consectetue</strong>r adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper\r\n</em></p>', '<p><a href="/files/blog/5560aea1c7055.png">5560aea1c7055.png</a><a href="/files/blog/5560aec4304dc.pdf">5560aec4304dc.pdf</a><a href="/files/blog/5560aea1c7055.png"></a></p><p><strong>Lorem ipsum</strong> dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper\r\n</p><p><img alt="" style="width: 674px; height: 337px; display: block; margin: auto;" src="/images/blog/5560afda6bc23.png" height="337" width="674"></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper\r\n</p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorpe\r\n</p>', '2015-05-28 06:17:21', NULL, '0', 'news.jpg', '', '1', 2, 5),
(7, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news2.jpg', '', '0', 2, 5),
(8, 'Bu yerda yangilik sarlavhasi yoziladi Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news3.jpg', '', '0', 2, 5),
(9, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news4.jpg', '', '0', 2, 5),
(10, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news4.jpg', '', '0', 2, 5),
(11, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news2.jpg', '', '0', 2, 5),
(12, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'tadbir.jpg', '', '1', 2, 6),
(13, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news2.jpg', '', '0', 2, 6),
(14, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news3.jpg', '', '0', 2, 6),
(15, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news4.jpg', '', '0', 2, 6),
(16, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news4.jpg', '', '0', 2, 6),
(17, 'Bu yerda yangilik sarlavhasi yoziladi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper \r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper ', '2015-05-28 06:17:21', NULL, '1', 'news2.jpg', '', '0', 2, 6),
(18, 'Rus tili kursi', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', '2015-05-28 06:17:21', NULL, '1', 'c1.jpg', '', '0', 2, 7),
(19, 'Buxgalteriya hisobi kursi', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', '2015-05-28 06:17:21', NULL, '1', 'c2.jpg', '', '0', 2, 7),
(20, 'Buxgalteriya hisobi kursi', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', '2015-05-28 06:17:21', NULL, '1', 'c3.jpg', '', '0', 2, 7),
(21, 'Buxgalteriya hisobi kursi', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', '2015-05-28 06:17:21', NULL, '1', 'c4.jpg', '', '0', 2, 7),
(22, 'Buxgalteriya hisobi kursi', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', '2015-05-28 06:17:21', NULL, '1', 'c5.jpg', '', '0', 2, 7),
(23, 'Buxgalteriya hisobi kursi', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', '2015-05-28 06:17:21', NULL, '1', 'lab.jpg', '', '0', 2, 7),
(24, 'Buxgalteriya hisobi kursi', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', '2015-05-28 06:17:21', NULL, '1', 'c7.jpg', '', '0', 2, 7),
(25, 'Buxgalteriya hisobi kursi', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', 'Kurs muddati 3 oy, Guruhda 10 kishigacha,\r\n<br>\r\nKurs narxi 180 000 sum marhamat keling', '2015-05-28 06:17:21', NULL, '1', 'c8.jpg', '', '0', 2, 7),
(26, 'Qiziqarli masalalar', 'Qiziqarli masalalar', 'Qiziqarli masalalar\r\nQiziqarli masalalar\r\nQiziqarli masalalar\r\nQiziqarli masalalar\r\nvQiziqarli masalalar', '2015-05-28 06:17:21', NULL, '1', '1.jpg', '', '0', 2, 8),
(27, 'Qiziqarli masalalar', 'Qiziqarli masalalar', 'Qiziqarli masalalar\r\nQiziqarli masalalar\r\nQiziqarli masalalar\r\nQiziqarli masalalar\r\nvQiziqarli masalalar', '2015-05-28 06:17:21', NULL, '1', '2.jpg', '', '0', 2, 8),
(28, 'Aqliy o''yinlar, bolalar uchun', 'Qiziqarli masalalar', 'Qiziqarli masalalar\r\nQiziqarli masalalar\r\nQiziqarli masalalar\r\nQiziqarli masalalar\r\nvQiziqarli masalalar', '2015-05-28 06:17:21', NULL, '1', '4.jpg', '', '0', 2, 8),
(29, 'Lorem ipsum dolor sit amet ipsum dolor sit', 'Lorem ipsum dolor sit amet ipsum dolor sit', 'Lorem ipsum dolor sit amet ipsum dolor sit\r\nLorem ipsum dolor sit amet ipsum dolor sit\r\nLorem ipsum dolor sit amet ipsum dolor sit\r\nLorem ipsum dolor sit amet ipsum dolor sit\r\nLorem ipsum dolor sit amet ipsum dolor sit\r\nLorem ipsum dolor sit amet ipsum dolor sit', '2015-05-28 06:17:21', NULL, '1', 'foto2.jpg', '', '0', 2, 8),
(30, ' Bolalar uchun qo''shiqlar', ' Bolalar uchun qo''shiqlar', ' Bolalar uchun qo''shiqlar', '2015-05-28 06:17:21', NULL, '1', '2.jpg', '', '0', 2, 8),
(31, 'Ingliz tili darslari bolalar uchun', ' Bolalar uchun qo''shiqlar', ' Bolalar uchun qo''shiqlar', '2015-05-28 06:17:21', NULL, '1', '3.jpg', '', '0', 2, 8),
(32, 'Lorem ipsum dolor sit amet ipsum dolor sit', ' Bolalar uchun qo''shiqlar', ' Bolalar uchun qo''shiqlar', '2015-05-28 06:17:21', NULL, '1', 'foto1.jpg', '', '0', 2, 8),
(33, 'Lorem ipsum dolor sit amet ipsum dolor sit', ' Bolalar uchun qo''shiqlar', ' Bolalar uchun qo''shiqlar', '2015-05-28 06:17:21', NULL, '1', 'foto3.jpg', '', '0', 2, 8),
(34, 'Maqola sarlavhasi yoziladi', 'Maqola sarlavhasi yoziladi', 'Maqola sarlavhasi yoziladi', '2015-05-28 06:17:21', NULL, '1', 'b1.jpg', '', '0', 2, 9),
(35, 'Maqola sarlavhasi yoziladi', 'Maqola sarlavhasi yoziladi', 'Maqola sarlavhasi yoziladi', '2015-05-28 06:17:21', NULL, '1', 'b2.jpg', '', '0', 2, 9),
(36, 'Hujjat nomi yoziladi', 'Hujjat nomi yoziladi', 'Hujjat nomi yoziladi', '2015-05-28 06:17:21', NULL, '1', 'b3.jpg', '', '0', 2, 9),
(37, 'Heading for Lorem', 'Heading for Lorem', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'b4.jpg', '', '0', 2, 9),
(38, 'Heading for Lorem', 'Heading for Lorem', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'nofoto.jpg', '', '0', 2, 9),
(39, 'Heading for Lorem', 'Heading for Lorem', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'b5.jpg', '', '0', 2, 9),
(40, 'Falonchaev Pistoncha', 'Falonchaev Pistoncha', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'ask2.jpg', '', '0', 2, 10),
(41, 'Falonchaev Pistoncha', 'Toshkent shahar Chilonzor tumani', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'man2.jpg', '', '0', 2, 10),
(42, 'Falonchaev Pistoncha', 'Falon maktab o''quvchisi', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'man3.jpg', '', '0', 2, 10),
(43, 'Falonchaev Pistoncha', 'Surxondaryodan', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'man2.jpg', '', '0', 2, 10),
(44, 'Falonchaev Pistoncha', 'Falonchaev Pistoncha', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'man3.jpg', '', '0', 2, 10),
(45, 'Falonchaev Pistoncha', 'Falonchaev Pistoncha', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'man4.png', '', '0', 2, 10),
(46, 'Falonchaev Pistoncha', 'Falonchaev Pistoncha', 'Heading for Lorem', '2015-05-28 06:17:21', NULL, '1', 'man5.jpg', '', '0', 2, 10),
(47, 'first article8888888', '<p>hello world<br></p>', '<p>WEQWE</p><p>SDGS</p><p>DG</p><p>SDGSD</p><p>FG</p><p>DS<br></p>', '2015-05-28 00:00:00', NULL, '1', 'news.jpg', '', '0', 2, 5),
(48, 'my first article', '<p><em><strong>my first article</strong></em></p>', '<p><strong><img alt="" style="width: 369px; height: 183px; margin: auto; display: block;" src="/images/blog/5561df90014a7.png" height="183" width="369">my first article</strong></p><p><br><strong></strong></p><p><br><strong></strong></p>', '2015-05-25 00:00:00', NULL, '1', 'news.jpg', '', '0', 2, 5),
(49, 'awda', '<p>awd</p>', '<p>awerqw</p>', '2015-05-30 00:00:00', NULL, '1', 'news.jpg', '', '0', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `description`) VALUES
(5, ' So’nggi xabarlar', 'So’nggi xabarlar\r\n'),
(6, 'Respublika tadbirlari', NULL),
(7, 'O’quv kurslarimiz', NULL),
(8, 'Bolalar uchun', NULL),
(9, 'Elektron qo’llanmalar', NULL),
(10, 'IQTIDORLI O''QUVCHILAR', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `position` enum('top','left1','left2','left3') NOT NULL,
  `visible` enum('0','1') NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_menu_category1_idx` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `position`, `visible`, `icon`, `parent_id`, `category_id`) VALUES
(2, 'Bosh sahifa', 'top', '1', NULL, NULL, 5),
(3, 'Markaz haqida', 'top', '1', '', NULL, 6),
(4, 'Hujjatlar', 'top', '1', NULL, NULL, 5),
(5, 'Davat ramzlari', 'top', '1', NULL, 4, 5),
(6, 'Huquqiy hujjatlar', 'top', '1', NULL, 4, 5),
(7, 'Vazirlik hujjatlari', 'top', '1', NULL, 4, 5),
(8, 'Fotogallereya', 'top', '1', NULL, NULL, 5),
(9, 'Maktub yuborish', 'top', '1', NULL, NULL, 5),
(11, 'Yozgi to''garaklar', 'left1', '1', NULL, NULL, 5),
(12, 'Elektron darsliklar', 'left1', '1', NULL, NULL, 5),
(13, 'Video darsliklar', 'left1', '1', NULL, NULL, 5),
(14, 'Test savollari', 'left1', '1', NULL, NULL, 5),
(15, 'ingliz tilini o''rganish', 'left1', '1', NULL, NULL, 5),
(16, 'Markaz tarixi', 'left2', '1', NULL, NULL, 5),
(17, 'So’nggi xabarlar', 'left2', '1', NULL, NULL, 5),
(18, 'Elektron qo’llanmalar', 'left2', '1', NULL, NULL, 5),
(19, 'Vazirlik elonlari', 'left2', '1', NULL, NULL, 5),
(20, 'Metodik qo''llanmalar', 'left2', '1', NULL, NULL, 5),
(21, 'To''garaklar', 'left2', '1', NULL, NULL, 5),
(22, 'Tadbir va bayramlar', 'left2', '1', NULL, NULL, 5),
(23, 'Rahbariyat haqida', 'left2', '1', NULL, NULL, 5),
(24, 'Xodimlar haqida', 'left2', '1', NULL, NULL, 5),
(25, 'Uslubiy ishlanmalar', 'left2', '1', NULL, NULL, 5),
(26, 'Normativ hujjatlar', 'left2', '1', NULL, NULL, 5),
(27, 'Yangi loyihalar', 'left2', '1', NULL, NULL, 5),
(28, 'Dono so''zlar', 'left3', '1', NULL, NULL, 5),
(29, 'Iqtidorli yoshlar', 'left3', '1', NULL, NULL, 5),
(30, 'Ustozlar uchun', 'left3', '1', NULL, NULL, 5),
(31, 'Ota onalar uchun', 'left3', '1', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'husniddin', 'jdb9ngkc1nU6uiIlUAlgg7N56ZCpyo8H', '$2y$13$36tVuYfp/kH9UtnE5Sm7RO1KDsqjgv8dWBgK1C6/f8lOWLR7hrNIO', NULL, 'husniddinkamolov@gmail.com', 10, 1431882859, 1431882859);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_article_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
