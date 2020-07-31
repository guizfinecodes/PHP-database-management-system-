-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 07:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prof`
--

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `county_id` int(11) NOT NULL AUTO_INCREMENT,
  `county` varchar(100) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`county_id`, `county`) VALUES
(1, 'mombasa'),
(2, 'kwale'),
(3, 'kilifi'),
(4, 'tana river'),
(5, 'lamu'),
(6, 'taita taveta'),
(7, 'Garissa'),
(8, 'wajir'),
(9, 'mandera'),
(10, 'marsabit'),
(11, 'isiolo'),
(12, 'meru'),
(13, 'tharaka nithi'),
(14, 'embu'),
(15, 'kitui'),
(16, 'machakos'),
(17, 'makueni'),
(18, 'nyandarua'),
(19, 'nyeri'),
(20, 'kirinyaga'),
(21, 'murang''a'),
(22, 'kiambu'),
(23, 'turkana'),
(24, 'west pokot'),
(25, 'samburu'),
(26, 'uasin gishu'),
(27, 'trans-nzoia'),
(28, 'elgeyo-marakwet'),
(29, 'nandi'),
(30, 'baringo'),
(31, 'laikipia'),
(32, 'nakuru'),
(33, 'narok'),
(34, 'kajiado'),
(35, 'kericho'),
(36, 'bomet'),
(37, 'kakamega'),
(38, 'vihiga'),
(39, 'bungoma'),
(40, 'busia'),
(41, 'siaya'),
(42, 'kisumu'),
(43, 'homa bay'),
(44, 'migori'),
(45, 'kisii'),
(46, 'nyamira'),
(47, 'nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `level_id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(100) NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`level_id`, `level`) VALUES
(1, 'PRIMARY'),
(2, 'SECONDARY'),
(3, 'COLLEGE'),
(4, 'UNIVERSITY'),
(5, 'MASTERS'),
(6, 'PHD'),
(7, 'DOCTORATE'),
(8, 'OTHER'),
(9, 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `size` int(20) NOT NULL,
  `type` varchar(1000) NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `user_id`, `file`, `size`, `type`) VALUES
(30, 1, '97375-WIN.jpg', 187394, 'image/jpeg'),
(40, 7, '60706-localhost.txt', 68, 'text/plain'),
(51, 1, '4477-conn.txt', 414, 'text/plain'),
(54, 1, '17907-dark-registration.txt', 2866, 'text/plain'),
(56, 7, '19447-dark-registration-css.txt', 1632, 'text/plain'),
(61, 1, '12154-cascading-login-register.txt', 4568, 'text/plain'),
(63, 1, '61960-login.txt', 1479, 'text/plain'),
(66, 20, '21608-th57OPLSXU.jpg', 8006, 'image/jpeg'),
(67, 20, '61697-speech-bubble-conversation-talk-message-600w-583848496.jpg', 66586, 'image/jpeg'),
(68, 20, '55271-job-interview-156130__340.png', 50972, 'image/png'),
(69, 22, '49388-LE ANTONIO CV.docx', 15744, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `notification` varchar(1000) NOT NULL,
  `senttime` time NOT NULL,
  `sentdate` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `locations` varchar(1000) NOT NULL,
  `emails` varchar(50) NOT NULL,
  `phones` int(15) NOT NULL,
  `addressee` varchar(1000) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `user_id`, `sender`, `companyname`, `notification`, `senttime`, `sentdate`, `subject`, `locations`, `emails`, `phones`, `addressee`) VALUES
(1, 13, 0, 'maishamart', '                  swertyui            ', '01:40:00', '2019-10-17', 'greeeting', 'yako enterprises, kakamega town, along mumias road', 'guiz@guiz.com', 73871823, ''),
(2, 1, 0, 'maishamart', 'you are welcome for an interview for supermarket attendant needed by Monday 9 am 14th. thank you.                   ', '02:30:00', '2019-10-08', 'hi there', 'yako enterprises, kakamega town, along mumias road', 'guiz@guiz.com', 73871823, ''),
(3, 1, 0, 'maishamart', 'we waiting to hear from you soon', '00:00:00', '2019-10-20', 'hello there', 'yako enterprises, kakamega town, along mumias road', 'guiz@tina.com', 73871823, ''),
(4, 12, 0, 'maishamart', 'see you there please                           ', '00:00:00', '2019-10-10', 'internship', 'yako enterprises, kakamega town, along mumias road', 'hello@guiz.com', 73871823, ''),
(5, 12, 0, 'maishamart', '            helllo                  ', '00:00:00', '2019-10-18', 'job offer', 'yako enterprises, kakamega town, along mumias road', '', 73871823, ''),
(6, 1, 0, 'maishamart', '                       you still coming?       ', '00:00:00', '2019-10-13', 'hello guiz', 'yako enterprises, kakamega town, along mumias road', '', 73871823, ''),
(7, 17, 0, 'maishamart', '                hi there              ', '00:00:00', '2019-10-02', 'yoh', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(8, 17, 0, 'maishamart', '                 qwerty             ', '00:00:00', '2019-10-01', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(9, 17, 0, 'maishamart', '               qwertyu               ', '00:00:00', '2019-10-20', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(10, 14, 0, 'maishamart', '                qwerty              ', '00:00:00', '2019-10-04', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(11, 14, 0, 'maishamart', '               qwerty               ', '00:00:00', '2019-10-19', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(12, 1, 0, 'maishamart', 'confirm date', '00:00:00', '2019-10-07', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(13, 1, 0, 'maishamart', '                confirm date again            ', '00:00:00', '2019-10-03', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(14, 1, 0, 'maishamart', '            stewerty                  ', '00:00:00', '2019-10-10', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(15, 1, 0, 'maishamart', '         qwerty                     ', '00:00:00', '2019-10-15', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(16, 1, 0, 'maishamart', '                  qwerty            ', '00:00:00', '2019-10-03', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(17, 1, 0, 'maishamart', '               qwerty               ', '00:00:00', '2019-10-14', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(18, 1, 0, 'maishamart', '           qwerty                   ', '00:00:00', '2019-10-09', 'greeeting', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(19, 1, 0, 'MAISHAMART', 'DATE FINALLY          ', '00:00:00', '2019-10-22', 'GREEETING', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(20, 1, 0, 'MAISHAMART', 'TIME SAVED SUCCESSFULLY', '04:00:00', '2019-10-22', 'HELLO GUIZ', 'yako enterprises, kakamega town, along mumias road', '', 0, ''),
(21, 1, 0, 'maishamart', '                 update see contacts             ', '06:15:00', '2019-10-22', 'CONTACT DETAILS', 'yako enterprises, kakamega town, along mumias road', 'tina@tina.com', 712345674, ''),
(22, 1, 0, 'sole propriatorship', '           offer of attachment                   ', '08:48:00', '2019-10-22', 'ATTACHMENT', 'webuye', 'brian@brian.er', 742234567, ''),
(23, 1, 0, 'sole propriatorship', '                      we are pleased.        ', '07:12:00', '2019-10-23', 'GREEETING', 'webuye', 'brianguis@gmail.com', 745322226, ''),
(24, 11, 0, 'maishamart', 'testing one two', '12:45:00', '2019-10-28', 'HELLO GUIZ---YO', 'yako enterprises, kakamega town, along mumias road', 'guiz@guiz.com', 712345674, '9482-4832-kakamega'),
(25, 7, 3, 'maishamart', 'check sender', '12:52:00', '2019-10-28', 'CONTACT DETAILS-SENDER', 'yako enterprises, kakamega town, along mumias road', 'guiz@guiz.com', 712345674, '9482-4832-kakamega'),
(26, 1, 3, 'maishamart', 'sender included and address', '12:53:00', '2019-10-28', 'HELLO GUIZ---YO-CONFIRM SENDER', 'yako enterprises, kakamega town, along mumias road', 'guiz@guiz.com', 712345674, '9482-4832-kakamega'),
(27, 22, 3, 'maishamart', '                  swxgbnykuiu yhgtfdcefvgbthymuk,ilf            ', '01:10:00', '2019-10-30', 'QWERTYQWETY', 'yako enterprises, kakamega town, along mumias road', 'guiz@guiz.com', 712345674, '9482-4832-kakamega');

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE IF NOT EXISTS `profession` (
  `profession_id` int(11) NOT NULL AUTO_INCREMENT,
  `profession` varchar(100) NOT NULL,
  PRIMARY KEY (`profession_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`profession_id`, `profession`) VALUES
(1, 'ICT'),
(2, 'BUSINESS MANAGEMENT'),
(3, 'ACCOUNTS'),
(4, 'PROCUREMENT'),
(5, 'OFFICE MANAGEMENT'),
(6, 'ENGINEERING'),
(7, 'DISASTER MANAGEMENT'),
(8, 'EDUCATION'),
(9, 'CEO'),
(10, 'SECRETARIAT'),
(11, 'CARPENTRY'),
(12, 'HANDY WORK'),
(13, 'MASONRY'),
(14, 'RESOURCE MANAGEMENT'),
(15, 'SHAMBA BOY'),
(16, 'MESSAGER'),
(17, 'FREELANCER'),
(18, 'CRIMINOLOGY'),
(19, 'WILDLIFE CONSERVATION'),
(20, 'OTHER'),
(21, 'RECEPTIONIST'),
(22, 'ROOM/HOUSE ATTENDANT'),
(23, 'HOUSE-MAID'),
(24, 'DRIVER'),
(25, 'CYCLIST'),
(26, 'SECURITY GUARD'),
(27, 'TOUR GUIDE'),
(28, 'DOCTOR'),
(29, 'NURSE'),
(30, 'CONDUCTOR');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'EMPLOYED'),
(2, 'UNEMPLOYED'),
(3, 'UNDERGRADUATE'),
(4, 'GRADUATE'),
(5, 'GRADUATE-UNEMPLOYED'),
(6, 'GRADUATE-EMPLOYED'),
(7, 'INTERN'),
(8, 'SELF-EMPLOYED'),
(9, 'OTHER');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` varchar(30) NOT NULL,
  `avatar` longtext NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `education` varchar(1000) NOT NULL,
  `profession` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `website` varchar(1000) NOT NULL,
  `phone` int(15) NOT NULL,
  `textarea` varchar(5000) NOT NULL,
  `location` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `company_type` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_phone` int(28) NOT NULL,
  `specialisation` varchar(1000) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `information` varchar(1000) NOT NULL,
  `vacancy` varchar(1000) NOT NULL,
  `active` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `role`, `avatar`, `nationality`, `county`, `education`, `profession`, `status`, `gender`, `age`, `file`, `type`, `size`, `birthdate`, `website`, `phone`, `textarea`, `location`, `address`, `company_type`, `company_name`, `company_email`, `company_phone`, `specialisation`, `company_website`, `information`, `vacancy`, `active`) VALUES
(1, 'BRIAN', 'MUNYAO', 'GUIZ', 'brianguis@gmail.com', 'qwerty', 'PROFESSIONAL', '', 'KENYAN', 'makueni', 'UNIVERSITY', 'ICT', 'UNDERGRADUATE', 'Male', 25, '', '', 0, '1994-10-10', 'http://guizxx.com', 745322226, 'WENT TO PRIMARY SCHOOL, HIGH SCHOOL, MADE IT TO CAMPUS THEN HERE I AM. GOD KNOWS HOWNAND WHY. THANK YOU.\r\nBUT I STILL NEED TIME TO ESTABLISH MY INNER SELF AND KNOW WHAT I NEED TO DO TO BE SAFE. IF I CAN SECURE A JOB RIGHT NOW, I WOULD BE THE HAPPIEST MAN ALIVE. GOD HELP ME.            	\r\n                                ', '', '', '', '', '', 0, '', '', '', '', '1'),
(2, 'MIRRIAM', 'MWIKALI', 'MIRRIE', 'MIR@MIR', 'mirrie', 'EMPLOYER', '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', '', 0, '', 'nairobi, moi avenue, nairobi cinema', '12344521-nairobi cinema', 'ministry of housing', 'sole propriatorship', 'brian@brian.er', 742234567, 'national housing corporation', 'http://guiz.com', '													  	 we offering 3 internship opportunities', 'internship', '1'),
(3, 'LUCY', 'KAMENE', 'LUCIA', 'guiz@guiz.com', 'LUCY', 'EMPLOYER', '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', 'http://guiz.com', 756434456, '', 'yako enterprises, kakamega town, along mumias road', '9482-4832-kakamega', 'sole propriatorship', 'maishamart', 'guiz@guiz.com', 712345674, 'mall', 'http://guiz.com', '													  	 													  	 we are hiring two attendants', 'attendants', '1'),
(7, 'QWERTY', 'QWERTY', 'QWERTY', 'qwerty@qwerty.com', 'QWERTY', 'PROFESSIONAL', '', 'KENYAN', 'west pokot', 'DOCTORATE', 'RESOURCE MANAGEMENT', 'SELF-EMPLOYED', 'Female', 50, '', '', 0, '1980-01-25', 'http://qwerty.com', 714345375, 'im a committed person', '', '', '', '', '', 0, '', '', '', '', '1'),
(8, 'LOLO', 'LOLO', 'LOLO', 'LOLO@LOLO.com', 'LOLO', 'PROFESSIONAL', '', 'KENYAN', 'kakamega', 'UNIVERSITY', 'ceo', 'employed', 'Female', 40, '', '', 0, '1989-02-22', 'http://lolo.com', 756434456, 'idling tu						  	 ', '', '', '', '', '', 0, '', '', '', '', '1'),
(9, 'CARO', 'CARO', 'CARO', 'CARO@CARO', 'CARO', 'EMPLOYER', '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(10, 'AIRTEL', 'TELKOM', 'SAFCOM', 'YU@ORANGE', 'SAFCOM', 'EMPLOYER', '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', '', 0, '', 'cbd', 'safaricom builing', 'ministry of communication', '', 'brian@brian.er', 742234567, 'networking', 'http://hello.com', '													  	 two programmers php pros						  	 ', 'programmers', '1'),
(11, 'ASDFG', 'ASDFG', 'QWERTY', 'Q@Q', 'QWERTY', 'PROFESSIONAL', '', '', 'machakos', 'university', 'teacher', 'employed', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(12, 'YTREWQ', 'HGSW', 'QWERTY', 'Q@Q', 'QWERTY', 'PROFESSIONAL', '', '', 'nandi', 'primary', 'other', 'self-employed', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(13, 'QWERTY', 'QWERTY', 'QWERTY', 'Q@Q', 'QWERTY', 'PROFESSIONAL', '', '', 'taita taveta', 'secondary', 'carpentry', 'technical', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(14, 'QWERTYTD', 'YTREW', 'QWERTY', 'YT@GFD', 'QWERTY', 'PROFESSIONAL', '', '', 'nairobi', 'none', 'driver', 'unemployed', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(15, 'POIUY', 'POIU', 'POIUY', 'P@F', 'POIUY', 'PROFESSIONAL', '', '', 'kitui', 'doctor', 'doctor', 'internship', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(16, 'ASOIUFG', 'XPOIV', 'POIU', 'E@DFG', 'QWERT', 'PROFESSIONAL', '', '', 'narok', 'phd', 'chemical engineering', 'employed', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(17, 'XCVBN', 'VBNM', 'JOB', 'ZXCV@G', 'QWERTY', 'PROFESSIONAL', '', '', 'embu', 'secondary', 'house maid', 'employed', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(18, 'XCVBNH', 'CVBN', 'CVBHNK', 'CVBN@FG', 'CVBN', 'PROFESSIONAL', '', '', 'mombasa', 'primary', 'other', 'unemployed', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(19, 'SDFGH', 'SDFGHJ', 'DFGHJK', 'SGH@XVBN', 'QWERTY', 'PROFESSIONAL', '', '', 'wajir', 'college', 'nursing', 'undergraduate', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(20, 'NDUKU', 'NDOKO', 'NDUKU', 'D@D', 'NDUKU', 'PROFESSIONAL', '', 'KENYAN', 'tharaka nithi', 'SECONDARY', 'SECRETARIAT', 'UNEMPLOYED', 'Female', 30, '', '', 0, '2004-09-23', '', 743921219, ' i need a job, any kind', '', '', '', '', '', 0, '', '', '', '', '1'),
(21, 'QWERTY', 'ASDGH', 'QWERTY', 'QW@SDF', 'QWERTY', 'PROFESSIONAL', '', '', '', '', '', '', '', 0, '', '', 0, '0000-00-00', '', 0, '', '', '', '', '', '', 0, '', '', '', '', '1'),
(22, 'ROLLING', 'MULONGO', 'ROLLY', 'ROLLY@ROLLY', 'ROLLY', 'PROFESSIONAL', '', 'KENYAN', 'samburu', 'DOCTORATE', 'ICT', 'OTHER', 'Male', 40, '', '', 0, '1998-10-30', '', 2147483647, 'qwertyqwerty									  	 ', '', '', '', '', '', 0, '', '', '', '', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
