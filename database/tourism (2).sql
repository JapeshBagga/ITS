-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 03:16 PM
-- Server version: 5.5.28-log
-- PHP Version: 5.4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `persons` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `contact`, `addr`, `city`, `date`, `persons`, `pid`) VALUES
(8, 'sandeep', 'marwahasingh503@gmail.com', '9814656382', '12,stno.1,satnampura', 'Jalandhar', '2018-10-30', '2', 1),
(9, 'Kamal Sunair', 'kamal@gmail.com', '9814656394', 'satnampura,phagwara', 'Jalandhar', '2018-10-30', '2', 7),
(10, 'sandeep', 'jot@gmail.com', '1234567897', 'satnampura,phagwara', 'Patiala', '2018-11-14', '4', 10),
(11, 'sanuuu', 'san2@gmail.com', '1234567891', 'cachowaal,jalandar', 'Jamnagar', '2018-12-21', '4', 9);

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE IF NOT EXISTS `regist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`id`, `pname`, `price`, `file`, `route`, `duration`) VALUES
(1, 'PILGRIMAGE TOUR ', '22,000 Rs', 'upload/06-08-2018-1533573745pilgrim.jpg', 'Delhi - Rishikesh - Barkot - Yamunoti - Uttarkashi - Kedarnath - Badrinath - Srinagar - Haridwar - Delhi', ' 11 Nights - 12 Days '),
(2, 'HILLSTATION TOUR', '10,000', 'upload/04-08-2018-1533366607hillstation tour.jpg', 'Delhi - Shimla - Manali - Dalhausie - Dharamshala - Dalhousie - Chandigarh - Delhi', ' 08 Nights 09 Days'),
(3, 'INDUS VALLEY TREK TOUR', '22,000', 'upload/04-08-2018-1533375145adventure.jpg', ' Delhi - Leh - Shey - Thiksey - Hemis - Yangthang - Hemis Shukpachan - Temisgang - Lamayuru - Leh - Delhi', '2 days 3 nights'),
(4, 'KING OF JUNGLE TOUR  ', '14,000 Rs', 'upload/06-08-2018-1533572227wild.jpg', 'Delhi - Agra - Umaria - Bandhavgarh - Kanha - Corbett - Dhikala - Delhi\r\n\r\n', '08 Nights 09 Days '),
(5, 'GOLDEN TRIANGLE TOUR ', ' 12,000 Rs', 'upload/06-08-2018-1533572992gtriangle.jpg', 'Delhi - Agra - Jaipur - Mississippi - Chhattisgarh -  Delhi', '06 NIGHTS - 07 DAYS'),
(6, 'ANDAMEN ISLAND TOUR', '25,000', 'upload/06-08-2018-1533573369island.jpg', 'Neil Island. Ross Island. Diglipur. Long Island. Cinque Island.', '06 NIGHTS - 07 DAYS'),
(7, 'CULTURAL TOUR', '14,000 Rs', 'upload/06-08-2018-1533573510temple.jpg', ' Delhi - Jaipur - Fatehpur Sikri - Agra - Jhansi - Orchha - Varanasi - Delhi', ' 12 Nights 09 Days '),
(8, 'HERITAGE TOUR', '18,000 Rs', 'upload/06-08-2018-1533573617heritage.jpg', ' Mumbai - Indore - Mandu - Ujjain - Bhopal - Sanchi - Pachmarhi - Jabalpur - Delhi ', '13 Nights - 14 Days'),
(9, 'WILDLIFE TOUR ', ' 22,000 Rs', 'upload/06-08-2018-1533573680wildlife.jpg', ' Delhi - Agra - Umaria - Bandhavgarh - Kanha - Corbett - Dhikala - Delhi', '14 Nights - 13 Days'),
(10, 'The Statues Of India', '22,000', 'upload/11-11-2018-1541963760unity.jpg', 'Amritsar - Haridwar - Dehradun - Shimla - Rewalsar Lake - Vijayawada - Gujarat - Amritsar', '9 Nights - 10 Days');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
