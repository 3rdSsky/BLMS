-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 03:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adstbl`
--

CREATE TABLE `adstbl` (
  `id` int(11) NOT NULL,
  `adstitle` varchar(250) NOT NULL,
  `adsdescription` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `cost` int(11) NOT NULL,
  `discount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adstbl`
--

INSERT INTO `adstbl` (`id`, `adstitle`, `adsdescription`, `category`, `Image`, `cost`, `discount`) VALUES
(3, 'RF Face', '4 SESSIONS', 'Solo', '3465be498dcc1be17132beb8f6c8fcdc1675144134.jpg', 999, ''),
(4, 'Brazilian Laser Hair Removal', '								 	', 'Solo', '7da7a96b54aac423b2dd7cdd625648961675144266.jpg', 150, ''),
(5, 'Glowing Gluta IV Push', '10 SESSIONS', 'Solo', '9602232f1e7543fcd101d2ed52afb4541675144304.jpg', 2500, ''),
(6, 'Crystal Hair Laser', 'Lightening + Hair Removal(5+1 Available)', 'Solo', 'ed477d8e5cfdbbd2b58fdec7ee37c9071675144417.jpg', 600, ''),
(7, 'Potion Drip', '								 	', 'Solo', 'c34d9b9ae86a152503874b24d3a5e6691675144442.jpg', 1100, ''),
(8, 'Beauty Infusion Drip', '								 	', 'Solo', '3f10e80e901b5e3fe260f72017e858d81675144500.jpg', 150, ''),
(9, 'Microneedling', '								 	', 'Solo', '54c34034b69313b4dd14615ab07347441675144524.jpg', 300, ''),
(10, 'Barbie Legs', '100 units							 	', 'New', 'b150626386a0db81e655d741660d2f711675144620.jpg', 8000, ''),
(11, 'Barbie Arms', '100 units', 'New', 'fccbcfc005d48740d4ca81d31e57a1791675144644.jpg', 8000, ''),
(12, 'Botox', 'Forehead(4000)\r\nCrow Feet(4000)\r\nJawtox(4000)', 'New', 'fee7b51076066679e172186afb9750321675144768.jpg', 4000, ''),
(13, 'Lip Filler', '								 	', 'New', '7f3822b66f9a056df2a9b5f550d4b2ff1675144791.jpg', 7500, ''),
(14, 'Self Love Promo', 'Potion Drip 988 only\r\nExilis Vlift FACE 1000 only\r\nHIFU 500 \r\nRF Tummy 450\r\nLesser Hair Removal UA - 5 Sessions 1199', 'Promo', 'ba45259585d5392cd874e7b2a97209031675145028.jpg', 0, ''),
(15, 'Brazilian Hair Removal + RF Face', '						 	', 'Combo', '6f6fc0a970863d7fdb6708844112f1dd1675145191.jpg', 800, ''),
(16, 'RF Face + Cock Tail Drip', '								 	', 'Combo', '41807c82cf7330382169f4dc3902f6381675145219.jpg', 1150, ''),
(17, 'Carbon Laser + Beauty Drip', '								 	', 'Combo', 'c407089229b34f5f5f3af44d39c7e0fc1675145245.jpg', 2400, ''),
(18, 'Korean Glow Drip + Rejuvenating Facial', '								 	', 'Combo', '5baadd737c30dbe46f9520f57656006b1675145289.jpg', 1750, ''),
(19, 'Potion Drip + Carbon Laser + RF Face', '3 Sessions each						 	', 'Combo', '4f116d74fe03f003ff428eb20ffb9a101675145333.jpg', 6650, ''),
(20, 'Pico Laser + RF Face', '								 	', 'Combo', '121c96200316d9ff6de64a85c75aba0c1675145365.jpg', 1650, ''),
(21, 'Mesolipo + LCAR + RF Face', '3 Sessions Each', 'Combo', 'fdaa8a21d1273a5542dc3ae5e10cea0b1675145404.jpg', 6350, ''),
(22, 'Bundle Package', 'GLOWING IV PUSH (10 SESSIONS)\r\nIPL UNDERARM (5 SESSIONS)\r\nCARBON LASER FACE (5 SESSIONS)\r\nCARBON LASER UNDERARM (1 SESSION)					 	', 'Package', 'c983585a5713f5c5ca9dd452affe2fea1675145556.jpg', 8888, ''),
(23, 'Mesolipo + L-Carnite', '								 	', 'Package', '0b43ade6e0c1f2f07671e624aa37366c1675145600.jpg', 1799, ''),
(24, 'Carbon Laser + Potion Drip', '								 	', 'Package', '09d62a42ef09ff8ba153dd9def12a3761675145635.jpg', 1800, ''),
(25, 'hihi', '	ygyyg							 	', 'New', '553030fc4c8c802f14c01fb6bc3d88201684906868.jpg', 40000, '');

-- --------------------------------------------------------

--
-- Table structure for table `bkgservice`
--

CREATE TABLE `bkgservice` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `servicename` varchar(250) NOT NULL,
  `cost` int(11) NOT NULL,
  `bkgtime` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkgservice`
--

INSERT INTO `bkgservice` (`id`, `userid`, `servicename`, `cost`, `bkgtime`) VALUES
(1, 14, 'Armpit Lightening Service', 399, '20 - 45 Minutes'),
(2, 14, 'Rejuvelite LED Mask', 199, '2 Hours'),
(3, 14, 'Armpit Lightening Service', 399, '20 - 45 Minutes'),
(4, 14, 'Rejuvelite LED Mask', 199, '2 Hours'),
(5, 14, 'Eyelash Natural Look', 350, '60 Minutes');

-- --------------------------------------------------------

--
-- Table structure for table `bkgtbl`
--

CREATE TABLE `bkgtbl` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `aptnumber` int(250) NOT NULL,
  `aptdate` date NOT NULL,
  `apttime` time NOT NULL,
  `servicename` varchar(250) NOT NULL,
  `cost` varchar(250) NOT NULL,
  `payment` varchar(250) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `bookingdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bkgtbl`
--

INSERT INTO `bkgtbl` (`id`, `userid`, `aptnumber`, `aptdate`, `apttime`, `servicename`, `cost`, `payment`, `Image`, `bookingdate`, `Status`) VALUES
(208, 14, 327523147, '2023-05-23', '21:07:00', 'Armpit Lightening Service', '399', 'Online', '', '2023-05-24 05:41:34', 'Accepted'),
(209, 14, 504212733, '0000-00-00', '00:00:00', 'Armpit Lightening Service', '399', 'Online', '736ad921e2275991c5c80a2485c57dc21684900871.jpg', '2023-05-24 04:01:11', NULL),
(210, 14, 416873967, '0000-00-00', '00:00:00', 'Eyelash Full Glam', '450', 'Online', '3f667046cd01ae23cffbc1f2d6f089b91684901093.jpg', '2023-05-24 04:04:53', NULL),
(211, 14, 933511402, '0000-00-00', '00:00:00', 'Armpit Lightening Service', '399', 'Online', '736ad921e2275991c5c80a2485c57dc21684901122.jpg', '2023-05-24 04:05:22', NULL),
(212, 14, 714742205, '0000-00-00', '00:00:00', 'Armpit Lightening Service', '399', 'Online', '736ad921e2275991c5c80a2485c57dc21684901612.jpg', '2023-05-24 04:13:32', NULL),
(213, 14, 415895010, '2023-05-24', '12:20:00', 'Armpit Lightening Service', '399', 'Online', '736ad921e2275991c5c80a2485c57dc21684902060.jpg', '2023-05-24 04:21:00', NULL),
(214, 14, 952847342, '2023-05-24', '12:27:00', 'Armpit Lightening Service', '399', 'Online', '553030fc4c8c802f14c01fb6bc3d88201684902480.jpg', '2023-05-24 04:28:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicetry`
--

CREATE TABLE `servicetry` (
  `id` int(11) NOT NULL,
  `ServiceName` varchar(255) NOT NULL,
  `ServiceDescription` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `Cost` int(11) NOT NULL,
  `bookingtime` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicetry`
--

INSERT INTO `servicetry` (`id`, `ServiceName`, `ServiceDescription`, `category`, `Cost`, `bookingtime`, `Image`) VALUES
(7, 'Armpit Lightening Service', 'A Q-switched or Picosecond laser is used in armpit whitening laser treatment to improve the appearance of dark underarms caused by pigmentation.								 									 	', 'Beauty Services', 399, '20 - 45 Minutes', '131727161e84ccf40c0fb81ec5e06bff1674454347.jpg'),
(8, 'Rejuvelite LED Mask', 'Boosts skin rejuvenation and collagen production for total beauty.	 	', 'Beauty Services', 199, '2 Hours', '60a2cf7057b0aaccb073480afe6e57b61674479153.jpg'),
(9, 'Eyelash Natural Look', 'This usually translates to less volume, longer lashes, and a gentle, natural curl. A natural look application will typically necessitate fewer extensions than a glam look.							 	', 'Beauty Services', 350, '60 Minutes', 'c42015bf1996c16431fe3296172dca151674479222.jpg'),
(10, 'Eyelash Full Glam', 'Glamour lashes are the thickest set of classic lashes we offer, with an emphasis on density and darkness.						 	', 'Beauty Services', 450, '90 Minutes', '5c1e6af23ebfa4903f5dac4ea0f0c2bd1674479267.jpg'),
(11, 'Lash Lift', 'A lash lift is a non-invasive, semi-permanent procedure that gives the appearance of fuller, thicker lashes without the use of any leave-on chemicals or extensions.		 	', 'Beauty Services', 850, '45 - 60 Minutes', 'b2b661a90dd7e434d97079f125ecf2791674479358.jpg'),
(12, 'Butt/Groin Whitening', 'The procedure performed to lighten the unwanted pigmentation in the skin around the groin and butt area using fractional CO2 laser.', 'Beauty Services', 550, '20 Minutes', '9f9953fd6f35ffdd8cb6c550d8d82db21674479402.jpg'),
(13, 'IPL Laser Hair Removal', 'IPL hair removal devices deliver very gentle light pulses to the hair root. This causes the hair to enter a resting phase, in which the hair you have falls out and your body gradually grows less hair in that area.						 	', 'Beauty Services', 399, '15 - 60 Minutes', '6f6fc0a970863d7fdb6708844112f1dd1674479450.jpg'),
(14, 'Eyebag Lifting Treatment', 'Eye bag surgery, also known as blepharoplasty of the lower eyelid, is a cosmetic procedure used to treat loose skin, excess fat, and wrinkles around the eyes.						 	', 'Beauty Services', 199, '15 - 45 Minutes', '51b0e530792eff5aeeae1bc7573688921674479512.jpg'),
(15, 'Microneedling', 'It is thought to be effective in treating minor acne scarring, scars, stretch marks, and maturing skin. Microneedling is a minimally invasive cosmetic procedure that stimulates collagen production to treat skin issues.', 'Beauty Services', 399, '20 - 45 Minutes', '0df26b2e0b6692e37b79ab4c9a6fb8761674479573.jpg'),
(16, 'Rejuvenating Facial w/ Microdermabrasion', 'It can aid in the treatment of fine lines, uneven skin texture, and enlarged pores, as well as stimulating blood flow to the face.', 'Beauty Services', 399, '20 - 45 Minutes', '0c05cbd6f3c659035cfbd4acb31f29661674479741.jpg'),
(17, 'Gluta Cocktail Drip', 'A cocktail of different ingredients is mixed and injected directly onto you, hastening the glow of your skin.			 	', 'Gluta Drip', 899, '15 - 20 Minutes', 'd81779e58cdb56872956a39b02a1e3a31674542659.jpg'),
(18, 'Potion', 'Potion drip has pure reduced glutathione the best form of glutathione for skin brightening, collagen and placenta to keep your skin look radiant and youthful & multivitamins to boost you immune system.', 'Gluta Drip', 1000, '15 - 20 Minutes', 'a4a604afadc0a491e83140f8e3feb8271674542846.jpg'),
(19, 'Snow Miracle Drip', 'Helps slow the aging process, increase energy, improve skin, reduce stress, support joint and muscle discomfort, detoxify liver and cells, improve mental clarity and focus, and aid in weight loss.', 'Gluta Drip', 1350, '30 - 90 Minutes', '338f64e3499a6a85caa94ba7722b5a791674542899.jpg'),
(20, 'Korean Glow Drip \"The Belo Drip\"', 'It\'s cocktailed to perfection with a high-dosage of Glutathione, Vitamin C, and Collagen. A perfect concoction for your health and beauty needs.', 'Gluta Drip', 1500, '15 - 20 Minutes', '782be1b913e76c95b34385640388e3011667914253.jpg'),
(21, 'Standard IV', 'Gluta pushes are a 10 cc syringe of high-dose vitamins and glutathione with minimal fluid, allowing for quick delivery. Gluta push delivers glutathione and vitamins intravenously into your bloodstream, allowing for 100% absorption.', 'Gluta Services', 350, '15 - 30 Minutes', '9dee52226f1c6e341ec4ba36d3043c0d1674570465.jpg'),
(22, 'Tad IV PUSH', 'Tad IV push is a vitamins, antioxidants, and minerals that enter the bloodstream quickly with IV push injections.', 'Gluta Services', 450, '15 Minutes', '52220b34a074d392b89f4707e81fbbc11674570515.jpg'),
(23, 'Lcarnitine Slimming', 'L-carnitine is a naturally occurring amino acid derivative that is frequently consumed as a supplement.', 'Gluta Services', 500, '30 days', '3f667046cd01ae23cffbc1f2d6f089b91674570565.jpg'),
(24, 'Sexy White IV', 'Is premium grade vitamin from USA contains with Vit C extracted from natural to make your skin whitening.', 'Gluta Services', 899, '15 - 20 Minutes', '553030fc4c8c802f14c01fb6bc3d88201674570619.jpg'),
(25, 'Collagen and Vitamin C', 'Collagen is the most abundant protein in the human body, and it can be found in bones, muscles, skin, and tendons.\r\nVitamin C aids in the control of infections and the healing of wounds, and it is a potent antioxidant capable of neutralizing harmful free ', 'Gluta Services', 400, 'none', '736ad921e2275991c5c80a2485c57dc21674570699.jpg'),
(26, 'Crystal Hair Laser UA', 'When gently rubbed on the skin, the hairs clump and break away from the surface. It does not need to be refilled or recharged and can be used for up to three years.', 'Elite Services', 600, '30 Minutes', '4d82283c62fa5b6fa6c9c7ebe44228991674570892.jpg'),
(27, 'Crystal White Brazilian', 'Invest in a laser hair removal that gives permanent results. Choose Crystal White Brazilian for your intimate hair removal needs down there with the latest OPT technology, it permanently removes hair from the roots and lightens skin at the same time.', 'Elite Services', 1100, '15 - 60 Minutes', '3fc0b0cba26f7b1e6970cccb984b4c921674570955.jpg'),
(28, 'Pico Laser UA', 'PICO Laser UA focuses on pigmentation. The pigmentations beneath your skin absorb laser energy and shatter into tiny fragments that are naturally metabolized by your body.', 'Elite Services', 1000, '15 - 30 Minutes', '121c96200316d9ff6de64a85c75aba0c1674570997.jpg'),
(29, 'Carbon Laser', 'Carbon lasers are a revolutionary, non-invasive, painless procedure with little to no downtime that helps rejuvenate the appearance of aging and damaged skin.', 'Elite Services', 1000, '30 Minutes', '571cd5ace33842ba3d9c6e40a6fd4e7a1674571037.jpg'),
(30, 'Oxygeneo w/ Diamon Peel', 'This treatment allows you to get the exfoliation benefits of microdermabrasion plus deep facial rejuvenation with the infusion of essential revitalizing nutrients and healing skin oxygenation from within.', 'Elite Services', 700, '30 - 45 Minutes', 'bcc7ff1331c9ef4f7a72d4f4721659561674571640.jpg'),
(31, 'RF Face Slim', 'Radio frequency is used in slimming treatments to reduce subcutaneous fat.', 'Slimming Services', 450, '30 - 45 Minutes', '0d739e5922e4b62a84df0accbbc4e02f1674571938.jpg'),
(32, 'RF Arms/Back or Thighs', 'Radio-frequency treatment is a non-invasive procedure that uses electrical heat energy to improve fine lines, wrinkles, and loose skin. It also works well on both active acne and acne scars.', 'Slimming Services', 550, '30 - 45 Minutes', '0682e39ec84346298239a06a344e6f721674571981.jpg'),
(33, 'RF Tummy with Cavitation', 'RF energy affects the deeper dermal layers, the result is a lifted contour, a reduction in deep wrinkles, and thicker and firmer skin. It stimulates the production of new collagen protein, causing the original collagen protein to strengthen the skin.', 'Slimming Services', 600, '2 Hours', 'e4445089b9452f5ab108f93cc255625b1674572030.jpg'),
(34, 'Double Chin Reduction', 'Liposuction is one of these procedures. It removes fat from beneath the skin and sculpts the chin and neck contour. A chin tuck, neck lift, or chin liposuction may help you look younger or thinner.								 	', 'Slimming Services', 2900, '45 Minutes', '43174697ce002d5c185df6d0b1b9496b1674572077.jpg'),
(35, 'Mesotherapy', 'Is a technique that rejuvenates and tightens skin while also removing excess fat through injections of vitamins, enzymes, hormones, and plant extracts.							 	', 'Slimming Services', 1300, '30 - 60 Minutes', 'ad012e4397b99b8427185d2e357f79e51674572126.jpg'),
(40, 'test', 'hey', 'Beauty Services', 200, '30-40 minutes', '736ad921e2275991c5c80a2485c57dc21684900285.jpg'),
(41, 'test', '	hhh						 	', 'Beauty Services', 213, '30-40 minutes', '9dee52226f1c6e341ec4ba36d3043c0d1684906835.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 7898799798, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-05-25 06:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `tblbook`
--

CREATE TABLE `tblbook` (
  `ID` int(10) NOT NULL,
  `UserID` int(10) DEFAULT NULL,
  `AptNumber` int(10) DEFAULT NULL,
  `AptDate` date DEFAULT NULL,
  `AptTime` time DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `RemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblbook`
--

INSERT INTO `tblbook` (`ID`, `UserID`, `AptNumber`, `AptDate`, `AptTime`, `Message`, `BookingDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(1, 7, 729411824, '2022-05-12', '19:03:00', 'Test msg', '2022-05-12 18:30:00', 'Your appointment has been book.', 'Selected', '2022-05-13 06:11:41'),
(2, 7, 767068476, '2022-05-14', '09:00:00', 'fghfshdgfahgrfgh', '2022-05-12 18:30:00', 'Sorry your appointment has been cancelled', 'Rejected', '2022-05-13 06:14:39'),
(4, 10, 931783426, '2022-05-18', '15:40:00', 'N/A', '2022-05-15 05:04:13', NULL, 'Selected', '2023-01-24 03:45:07'),
(5, 10, 284544154, '2022-05-18', '15:40:00', 'NA', '2022-05-15 05:04:13', NULL, NULL, NULL),
(6, 10, 494039785, '2022-05-31', '14:47:00', 'NA', '2022-05-15 05:13:24', NULL, NULL, NULL),
(8, 10, 891247645, '2022-05-28', '20:14:00', 'nA', '2022-05-28 08:43:55', 'Your booking is confirmed.', 'Selected', '2022-05-28 08:51:22'),
(9, 11, 985654240, '2022-05-29', '13:10:00', 'NA', '2022-05-29 07:34:47', 'Your appointment is confirmed', 'Selected', '2022-05-29 07:35:36'),
(10, 11, 906294024, '2022-11-09', '10:07:00', 'hello', '2022-11-08 02:07:42', 'sorry theres no time', 'Rejected', '2022-11-08 02:09:37'),
(11, 11, 193921644, '2022-11-16', '04:43:00', 'i want to book', '2022-11-08 05:42:20', 'ok', 'Selected', '2022-11-08 05:43:14'),
(12, 11, 904710170, '2022-11-08', '04:22:00', 'i want to book', '2022-11-08 07:21:55', NULL, NULL, NULL),
(13, 11, 479396115, '2022-11-08', '20:39:00', 'hey', '2022-11-08 12:39:52', NULL, NULL, NULL),
(14, 14, 789918650, '2022-11-10', '20:31:00', 'booking pls', '2022-11-09 12:31:49', 'ok', 'Selected', '2022-11-09 12:33:28'),
(15, 14, 853258545, '2022-11-10', '11:09:00', 'i want ', '2022-11-10 03:11:15', NULL, NULL, NULL),
(16, 14, 167376980, '2022-11-10', '13:19:00', 'i need booking', '2022-11-10 05:21:13', 'ok', 'Selected', '2022-11-10 05:23:21'),
(17, 14, 452425097, '2022-11-10', '14:01:00', NULL, '2022-11-10 06:01:11', NULL, NULL, NULL),
(18, 14, 973814706, '2023-01-09', '13:32:00', NULL, '2023-01-09 05:32:25', NULL, 'Selected', '2023-01-18 04:29:34'),
(23, 14, 562207867, '2023-01-18', '14:33:00', NULL, '2023-01-18 06:33:22', NULL, 'Selected', '2023-01-18 06:33:51'),
(24, 14, 985618347, '2023-01-19', '15:57:00', NULL, '2023-01-19 07:57:52', NULL, NULL, NULL),
(25, 14, 510155003, '2023-01-20', '04:00:00', NULL, '2023-01-19 08:00:51', NULL, NULL, NULL),
(26, 14, 688984007, '2023-01-24', '11:48:00', NULL, '2023-01-24 03:48:27', NULL, NULL, NULL),
(27, 14, 756400931, '2023-01-24', '11:49:00', NULL, '2023-01-24 03:49:59', NULL, NULL, NULL),
(28, 14, 620707732, '2023-01-24', '11:53:00', NULL, '2023-01-24 03:53:52', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `Phone` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `FirstName`, `LastName`, `Phone`, `Email`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(5, 'Kajal', 'Sharma', 9879878798, 'kajal@gmail.com', 'guhgjhg', '2022-05-10 08:43:18', 1),
(6, 'Anuj', 'Kumar', 1234567890, 'ak@gmail.com', 'Need booking for marriage', '2022-06-01 01:05:47', 1),
(7, 'rienz', 'den', 123145, '1234@yaggg.com', 'i want to book', '2022-11-10 02:24:23', 1),
(8, 'rienz john', 'dinero', 944, 'eqwe@yahoo.com', 'i want to book', '2022-11-10 05:25:49', 1),
(9, 'waht', 'das', 123456, 'raasd@gmai.com', 'hahaha', '2023-02-09 05:53:41', 1),
(10, 'rienz', 'dinero', 90909, 'ffdddddd@yahoo.com', 'vggfg', '2023-05-24 05:35:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AssignServ` varchar(250) NOT NULL,
  `Payment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`, `AssignServ`, `Payment`) VALUES
(4, 7, 4, 138889283, '2022-05-13 11:42:21', '', ''),
(5, 7, 9, 138889283, '2022-05-13 11:42:21', '', ''),
(6, 7, 16, 138889283, '2022-05-13 11:42:21', '', ''),
(7, 8, 3, 555850701, '2022-05-13 11:42:51', '', ''),
(8, 8, 6, 555850701, '2022-05-13 11:42:51', '', ''),
(9, 8, 9, 555850701, '2022-05-13 11:42:51', '', ''),
(10, 8, 11, 555850701, '2022-05-13 11:42:51', '', ''),
(13, 10, 1, 330026346, '2022-05-28 08:51:42', '', ''),
(14, 10, 2, 330026346, '2022-05-28 08:51:42', '', ''),
(15, 11, 2, 379060040, '2022-05-29 07:36:17', '', ''),
(16, 11, 5, 379060040, '2022-05-29 07:36:18', '', ''),
(17, 11, 6, 379060040, '2022-05-29 07:36:18', '', ''),
(18, 11, 12, 379060040, '2022-05-29 07:36:18', '', ''),
(19, 11, 3, 460087279, '2022-06-01 01:03:58', '', ''),
(20, 11, 1, 550151345, '2022-11-08 05:48:19', '', ''),
(21, 1, 2, 325013326, '2022-11-08 07:19:09', '', ''),
(22, 13, 6, 496510368, '2022-11-09 06:59:51', '', ''),
(23, 14, 19, 949141049, '2022-11-10 03:19:53', '', ''),
(24, 14, 30, 288956503, '2022-11-10 05:24:42', '', ''),
(25, 14, 31, 288956503, '2022-11-10 05:24:42', '', ''),
(26, 1, 7, 910961540, '2023-01-26 06:20:36', '', ''),
(27, 1, 8, 910961540, '2023-01-26 06:20:36', '', ''),
(28, 14, 7, 117589928, '2023-01-26 06:22:07', '', ''),
(29, 14, 8, 117589928, '2023-01-26 06:22:07', '', ''),
(30, 15, 7, 872292464, '2023-02-03 07:11:24', '', ''),
(31, 15, 8, 872292464, '2023-02-03 07:11:24', '', ''),
(32, 1, 7, 160094806, '2023-02-03 07:12:11', '', ''),
(33, 1, 7, 955441597, '2023-02-03 07:12:29', '', ''),
(34, 1, 7, 605424349, '2023-02-09 06:29:24', '', ''),
(35, 1, 8, 605424349, '2023-02-09 06:29:25', '', ''),
(36, 14, 7, 194314024, '2023-05-11 06:20:20', 'Joely Acutillar', ''),
(37, 14, 8, 194314024, '2023-05-11 06:20:20', 'Joely Acutillar', ''),
(38, 14, 7, 868900277, '2023-05-11 06:21:24', 'Joely Acutillar', ''),
(39, 14, 8, 868900277, '2023-05-11 06:21:24', 'Joely Acutillar', ''),
(40, 14, 11, 964008130, '2023-05-11 13:57:18', 'Fe Durens', ''),
(41, 14, 12, 964008130, '2023-05-11 13:57:18', 'Fe Durens', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice2`
--

CREATE TABLE `tblinvoice2` (
  `id` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AssignServ` varchar(250) DEFAULT NULL,
  `Payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblinvoice2`
--

INSERT INTO `tblinvoice2` (`id`, `UserId`, `ServiceId`, `BillingId`, `PostingDate`, `AssignServ`, `Payment`) VALUES
(23, 14, 14, 12321456, '2023-05-22 08:42:47', 'Joely Acutillar', 5999),
(24, 14, 7, 875953329, '2023-05-22 08:45:17', 'Joely Acutillar', 0),
(25, 14, 8, 875953329, '2023-05-22 08:45:17', 'Joely Acutillar', 0),
(26, 14, 7, 346481488, '2023-05-22 08:49:11', 'Joely Acutillar', 0),
(27, 14, 8, 346481488, '2023-05-22 08:49:11', 'Joely Acutillar', 0),
(36, 14, 7, 949092862, '2023-05-22 09:38:56', 'Joely Acutillar', 4000),
(37, 14, 8, 949092862, '2023-05-22 09:38:56', 'Joely Acutillar', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '<font color=\"#ffffff\">Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials &amp; fashion hair colourings.</font>', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '                        2nd floor V%J AM bldg. infront of Filamer Christian University<br>', ' princesstab10101@gmail.com', 9702046167, NULL, 'Monday to Saturday 10:00 AM to 6:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `ServiceDescription` mediumtext DEFAULT NULL,
  `category` varchar(250) NOT NULL,
  `Cost` int(10) DEFAULT NULL,
  `bookingtime` varchar(250) NOT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `ServiceDescription`, `category`, `Cost`, `bookingtime`, `Image`, `CreationDate`) VALUES
(1, 'Standard IV', 'Gluta pushes are a 10 cc syringe of high-dose vitamins and glutathione with minimal fluid, allowing for quick delivery. Gluta push delivers glutathione and vitamins intravenously into your bloodstream, allowing for 100% absorption. IV pushes typically take 10-15 minutes to fully enter the bloodstream.								 									 	', 'Gluta Drip', 350, '15 - 30 Minutes', '7f129f60ed6d84a2a8216cca7625645b1667912385.jpg', '2022-05-24 22:37:38'),
(2, 'Tad IV PUSH', 'Tad IV push is a vitamins, antioxidants, and minerals that enter the bloodstream quickly with IV push injections.', 'Gluta Services', 450, '15 Minutes', '52220b34a074d392b89f4707e81fbbc11667912829.jpg', '2022-05-24 22:37:53'),
(3, 'Lcarnitine Slimming', 'L-carnitine is a naturally occurring amino acid derivative that is frequently consumed as a supplement. It is used to lose weight and may have an effect on brain function.', 'Gluta Services', 500, '30 Minutes', '13909c83157b5641a354daafc730a3851667913452.jpg', '2022-05-24 22:37:10'),
(4, 'Sexy White IV', 'is premium grade vitamin from USA contains with Vit C extracted from natural to make your skin whitening', 'Gluta Services', 899, '15 - 20 Minutes', '7d19251f926d097ec98af186f999f0d51667913846.jpg', '2022-05-24 22:37:34'),
(5, 'Collagen and Vitamin C', 'Collagen is the most abundant protein in the human body, and it can be found in bones, muscles, skin, and tendons. It claim to increase skin elasticity, reduce visible wrinkles, and improve blood flow to the skin, While Vitamin C aids in the control of infections and the healing of wounds, and it is a potent antioxidant capable of neutralizing harmful free radicals. It is a powerful antioxidant that can strengthen your body’s natural defenses.', 'Gluta Services', 400, '', 'a657f4c9c962c6fe391e7e821a1808861667913898.jpg', '2022-05-24 22:37:47'),
(6, 'Gluta Cocktail Drip', 'A cocktail of different ingredients is mixed and injected directly onto you, hastening the glow of your skin.', 'Gluta Drip', 899, '15 - 20 Minutes', 'd81779e58cdb56872956a39b02a1e3a31667914062.jpg', '2022-05-24 22:37:01'),
(7, 'Potion Drip ', 'Potion drip has pure reduced glutathione the best form of glutathione for skin brightening, collagen and placenta to keep your skin look radiant and youthful & multivitamins to boost you immune system.', 'Gluta Drip', 1100, '15 - 20 Minutes', 'a4a604afadc0a491e83140f8e3feb8271667914112.jpg', '2022-05-24 22:37:19'),
(8, 'Snow Miracle Drip', 'Helps slow the aging process, increase energy, improve skin, reduce stress, support joint and muscle discomfort, detoxify liver and cells, improve mental clarity and focus, and aid in weight loss.								 									 									 	', 'Gluta Drip', 1350, '30 - 90 Minutes', '338f64e3499a6a85caa94ba7722b5a791667914162.jpg', '2022-05-24 22:37:38'),
(9, 'Korean Glow Drip ', 'Its cocktailed to perfection with a high-dosage of Glutathione, Vitamin C, and Collagen. A perfect concoction for your health and beauty needs.								 	', 'Gluta Drip', 1500, '15 - 20 Minutes', '782be1b913e76c95b34385640388e3011667914253.jpg', '2022-05-24 22:37:53'),
(11, 'RF Face Slim', 'Radio frequency is used in slimming treatments to reduce subcutaneous fat.', 'Slimming Services', 1200, '30 - 45 Minutes', '3515b4697bf4911a30abe3f704ab38901667915080.png', '2022-05-24 22:37:35'),
(12, 'Double Chin Reduction', 'Liposuction is one of these procedures. It removes fat from beneath the skin and sculpts the chin and neck contour. A chin tuck, neck lift, or chin liposuction may help you look younger or thinner. The procedures have the ability to shape the area, remove excess fat, and smooth the skin. However, the surgeries are not without risk.', 'Slimming Services', 299, '45 Minutes', '43174697ce002d5c185df6d0b1b9496b1667915160.jpg', '2022-05-19 01:38:27'),
(16, 'RF Arms/Back or Thighs', 'Radio-frequency treatment is a non-invasive procedure that uses electrical heat energy to improve fine lines, wrinkles, and loose skin. It also works well on both active acne and acne scars. Multiple sessions are required to see noticeable results.Increases collagen production, reduces cellulite, smoothens stretch marks tightens loose skin, boost blood circulation.', 'Slimming Services', 550, '30 - 45 Minutes', '0682e39ec84346298239a06a344e6f721667915231.jpg', '2022-05-09 20:35:13'),
(18, 'RF Tummy with Cavitation', 'RF energy affects the deeper dermal layers, the result is a lifted contour, a reduction in deep wrinkles, and thicker and firmer skin. It stimulates the production of new collagen protein, causing the original collagen protein to strengthen the skin.', 'Slimming Services', 600, '2 Hours', 'e4445089b9452f5ab108f93cc255625b1667915281.jpg', '2022-11-08 13:48:01'),
(19, 'Mesotherapy', 'Is a technique that rejuvenates and tightens skin while also removing excess fat through injections of vitamins, enzymes, hormones, and plant extracts.', 'Slimming Services', 1300, '30 - 60 Minutes', 'ad012e4397b99b8427185d2e357f79e51667915381.jpg', '2022-11-08 13:49:41'),
(20, 'Armpit Lightening Service', 'A Q-switched or Picosecond laser is used in armpit whitening laser treatment to improve the appearance of dark underarms caused by pigmentation.', 'Beauty Services', 399, '20 - 45 Minutes', '131727161e84ccf40c0fb81ec5e06bff1667915458.jpg', '2022-11-08 13:50:58'),
(21, 'Butt/Groin Whitening', 'The procedure performed to lighten the unwanted pigmentation in the skin around the groin and butt area using fractional CO2 laser.', 'Beauty Services', 550, '20 Minutes', '7e2f13a6a479eb5c18e0fe753e6995281667915503.jpg', '2022-11-08 13:51:43'),
(22, 'Rejuvelite LED Mask', 'Boosts skin rejuvenation and collagen production for total beauty.', 'Beauty Services', 199, '2 Hours', '60a2cf7057b0aaccb073480afe6e57b61667915621.jpg', '2022-11-08 13:53:41'),
(23, 'Eyelash Natural Look', 'This usually translates to less volume, longer lashes, and a gentle, natural curl.', 'Beauty Services', 350, '60 Minutes', 'c42015bf1996c16431fe3296172dca151667915753.jpg', '2022-11-08 13:55:53'),
(24, 'Eyelash Full Glam', 'Glamour lashes are the thickest set of classic lashes we offer, with an emphasis on density and darkness.', 'Beauty Services', 450, '90 Minutes', '5c1e6af23ebfa4903f5dac4ea0f0c2bd1667915844.jpg', '2022-11-08 13:57:24'),
(25, 'Lash Lift', 'A lash lift is a non-invasive, semi-permanent procedure that gives the appearance of fuller, thicker lashes without the use of any leave-on chemicals or extensions. The natural lashes are lifted and lengthened by boosting them from the root.', 'Beauty Services', 850, '45 - 60 Minutes', '036ef8112d32d9a1737fee224d74392e1667915973.jpg', '2022-11-08 13:59:33'),
(26, 'IPL Laser Hair Removal', 'IPL hair removal devices deliver very gentle light pulses to the hair root. This causes the hair to enter a resting phase, in which the hair you have falls out and your body gradually grows less hair in that area. That smoothness also lasts a long time.', 'Beauty Services', 399, '15 - 60 Minutes', '6f6fc0a970863d7fdb6708844112f1dd1667916068.jpg', '2022-11-08 14:01:08'),
(27, 'Eyebag Lifting Treatment', 'Eye bag surgery, also known as blepharoplasty of the lower eyelid, is a cosmetic procedure used to treat loose skin, excess fat, and wrinkles around the eyes. Your skin naturally loses elasticity and fat padding as you age. As a result, the lower eyelid may appear puffy, wrinkled, and baggy.', 'Beauty Services', 199, '15 - 45 Minutes', '51b0e530792eff5aeeae1bc7573688921667916135.jpg', '2022-11-08 14:02:15'),
(28, 'Rejuvenating Facial w/ Microdermabrasion', 'It can aid in the treatment of fine lines, uneven skin texture, and enlarged pores, as well as stimulating blood flow to the face.', 'Beauty Services', 450, '30 - 45 Minutes', '60a2cf7057b0aaccb073480afe6e57b61667916282.jpg', '2022-11-08 14:04:42'),
(29, 'Microneedling', 'It is thought to be effective in treating minor acne scarring, scars, stretch marks, and maturing skin.', 'Beauty Services', 1500, '20 - 30 Minutes', '6187d9f6f6b04434a8cc74f5729b3b961667916337.jpg', '2022-11-08 14:05:37'),
(30, 'Crystal Hair Laser UA', 'When gently rubbed on the skin, the hairs clump and break away from the surface. It does not need to be refilled or recharged and can be used for up to three years.', 'Elite Services', 600, '30 Minutes', '23d4ee6e13703a79d030d70b0bb088891667916461.jpg', '2022-11-08 14:07:41'),
(31, 'Crystal White Brazilian', 'Invest in a laser hair removal that gives permanent results. Choose Crystal White Brazilian for your intimate hair removal needs down there with the latest OPT technology, it permanently removes hair from the roots and lightens skin at the same time.', 'Elite Services', 1100, '15 - 60 Minutes', 'c7c27772d270ea8cbd4b71ce60aa12e41667916523.jpg', '2022-11-08 14:08:43'),
(32, 'Carbon Laser', 'Carbon lasers are a revolutionary, non-invasive, painless procedure with little to no downtime that helps rejuvenate the appearance of aging and damaged skin. It gently exfoliates the top layer of skin, revealing an incredible glow and a vibrant, youthful complexion.', 'Elite Services', 1000, '30 Minutes', '09d62a42ef09ff8ba153dd9def12a3761667916572.jpg', '2022-11-08 14:09:32'),
(33, 'Oxygeneo with Diamon Peel', 'This treatment allows you to get the exfoliation benefits of microdermabrasion plus deep facial rejuvenation with the infusion of essential revitalizing nutrients and healing skin oxygenation from within.', 'Elite Services', 700, '30 - 45 Minutes', 'a4dfaf1225cd98da1ed68ddfbdd504831667916627.jpg', '2022-11-08 14:10:27'),
(34, 'Pico Laser UA', 'Pico Laser UA focuses on pigmentation. The pigmentations beneath your skin absorb laser energy and shatter into tiny fragments that are naturally metabolized by your body. It allows for better treatment outcomes with fewer complications and treatments.', 'Elite Services', 1000, '15 - 30 Minutes', '121c96200316d9ff6de64a85c75aba0c1667916676.jpg', '2022-11-08 14:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(120) DEFAULT NULL,
  `LastName` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(13, 'rienz', 'dinero', 945475243, 'rienz_john@hotmail.com', '123', '2022-11-09 05:54:18'),
(14, 'rienz', 'dinero', 945475242, 'xyz@yahoo.com', '202cb962ac59075b964b07152d234b70', '2022-11-09 07:33:40'),
(16, 'riennnz', 'ddddd', 912321421, 'sss@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-02-09 05:55:42'),
(26, 'rienz', 'dinero', 123456, '123456@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-02-09 15:55:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adstbl`
--
ALTER TABLE `adstbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkgservice`
--
ALTER TABLE `bkgservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bkgtbl`
--
ALTER TABLE `bkgtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicetry`
--
ALTER TABLE `servicetry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbook`
--
ALTER TABLE `tblbook`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblinvoice2`
--
ALTER TABLE `tblinvoice2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adstbl`
--
ALTER TABLE `adstbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bkgservice`
--
ALTER TABLE `bkgservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bkgtbl`
--
ALTER TABLE `bkgtbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `servicetry`
--
ALTER TABLE `servicetry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbook`
--
ALTER TABLE `tblbook`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tblinvoice2`
--
ALTER TABLE `tblinvoice2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
