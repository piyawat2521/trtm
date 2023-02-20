-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2023 at 05:52 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trtm`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `an_id` int(11) NOT NULL,
  `an1` varchar(10) NOT NULL,
  `an2` varchar(10) NOT NULL,
  `an3` varchar(10) NOT NULL,
  `an4` varchar(10) NOT NULL,
  `an_re_code` varchar(20) NOT NULL,
  `an_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qt_1`
--

CREATE TABLE `qt_1` (
  `qt_id` int(11) NOT NULL,
  `qt_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qt_1`
--

INSERT INTO `qt_1` (`qt_id`, `qt_title`) VALUES
(1, '1. เหนื่อยใจ เบื่อหน่าย รำคาญ'),
(2, '2. กระตือรือร้น คล่องแคล่ว '),
(3, '3. ใช้แรงจนหลับ '),
(4, '4. ปราดเปรียว มีพลัง'),
(5, '5. สดชื่นแจ่มใส ร่าเริง'),
(6, '6. ทำอะไรไม่ถูก ไร้ค่า ไร้อำนาจ'),
(7, '7. ทำงานหนักได้ สู้งานหนักไหว'),
(8, '8. อ่อนแอ อ่อนด้อย'),
(9, '9.  มีชีวิตชีวา กระฉับกระเฉง'),
(10, '10.  อ่อนเพลีย ไม่แข็งแรง'),
(11, '11.  ไม่สนใจสิ่งใด เมินเฉย'),
(12, '12.  เหน็ดเหนื่อย เมื่อยล้าอิดโรย'),
(13, '13.  อยากริเริ่ม สร้างสรรค์'),
(14, '14.  ผ่อนคลาย หายกังวลปล่อยวาง'),
(15, '15.  ไม่ปลอดภัย ไม่มั่นคง'),
(16, '16.  ชอบสังคม ชอบวิสาสะ ชอบเป็นหมู่'),
(17, '17.  ปลื้มปิติยินดี ดีอกดีใจ'),
(18, '18.  เหนื่อยกายจากงานหนัก'),
(19, '19.  ถูกทำให้อ่อนแอ'),
(20, '20.  เชื่อมั่นในตัวเอง');

-- --------------------------------------------------------

--
-- Table structure for table `qt_2`
--

CREATE TABLE `qt_2` (
  `qt2_id` int(11) NOT NULL,
  `qt2_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qt_2`
--

INSERT INTO `qt_2` (`qt2_id`, `qt2_title`) VALUES
(1, '1. มีปัญหาการนอน นอนไม่หลับหรือนอนมาก'),
(2, '2. มีสมาธิน้อยลง'),
(3, '3. หงุดหงิด / กระวนกระวาย / ว้าวุ้นใจ'),
(4, '4. รู้สึกเบื่อ เซ็ง'),
(5, '5. ไม่อยากพบปะผู้คน');

-- --------------------------------------------------------

--
-- Table structure for table `qt_3`
--

CREATE TABLE `qt_3` (
  `qt3_id` int(11) NOT NULL,
  `qt3_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qt_3`
--

INSERT INTO `qt_3` (`qt3_id`, `qt3_title`) VALUES
(1, '1.    เบื่อ ไม่สนใจอยากทำอะไร(*)'),
(2, '2.    ไม่สบายใจ ซึมเศร้า ท้อแท้(*)'),
(3, '3.    หลับยาก หรือหลับๆ ตื่นๆ หรือหลับมากไป(*)'),
(4, '4.    เหนื่อยง่าย หรือ ไม่ค่อยมีแรง(*)'),
(5, '5.    เบื่ออาหาร หรือกินมากเกินไป(*)'),
(6, '6.    รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลว หรือทำให้ตนเองหรือครอบครัวผิดหวัง(*)'),
(7, '7.    สมาธิไม่ดีเวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ(*)'),
(8, '8.    พูดช้า ทำอะไรช้าลง จนคนอื่นสังเกตเห็นได้ หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น(*)'),
(9, '9.    คิดทำร้ายตนเอง หรือคิดว่าถ้าตายไปคงจะดี(*)');

-- --------------------------------------------------------

--
-- Table structure for table `qt_4`
--

CREATE TABLE `qt_4` (
  `qt4_id` int(11) NOT NULL,
  `qt4_title` text NOT NULL,
  `qt4_num` varchar(10) NOT NULL,
  `qt4_data` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qt_4`
--

INSERT INTO `qt_4` (`qt4_id`, `qt4_title`, `qt4_num`, `qt4_data`) VALUES
(1, '1. ช่วง 1 เดือนที่ผ่านมา คิดอยากตาย หรือคิดว่าตายไปจะดีกว่า', '1', 1),
(2, '2. ช่วง 1 เดือนที่ผ่านมา อยากทำร้ายตัวเอง หรือทำให้ตัวเองบาดเจ็บ', '2', 2),
(3, '3. ช่วง 1 เดือนที่ผ่านมา คิดเกี่ยวกับการฆ่าตัวตาย', '3', 6),
(4, '3.1 ถ้าตอบว่าคิดเกี่ยวกับการฆ่าตัวตาย ให้ถามต่อ) ท่านสามารถควบคุม ความอยากฆ่าตัวตายที่ท่านคิดอยู่นั้นได้หรือไม่ หรือบอกได้ไหมว่าคงจะ\nไม่ทำตามความคิดนั้นในขณะนี้', '3-1', 8),
(5, '4. ช่วง 1 เดือนที่ผ่านมา มีแผนการที่จะฆ่าตัวตาย', '4', 8),
(6, '5. ช่วง 1 เดือนที่ผ่านมา ได้เตรียมการที่จะทำร้ายตนเอง หรือเตรียมการจะฆ่าตัวตาย โดยตั้งใจว่า\nจะให้ตายจริงๆ', '5', 9),
(7, '6. ช่วง 1 เดือนที่ผ่านมา ได้ทำให้ตนเองบาดเจ็บ แต่ไม่ตั้งใจที่จะทำให้เสียชีวิต', '6', 4),
(8, '7. ช่วง 1 เดือนที่ผ่านมา ได้พยายามฆ่าตัวตาย โดยคาดหวัง/ตั้งใจที่จะให้ตาย', '7', 10),
(9, '8. ตลอดชีวิตที่ผ่านมา	ท่านเคยพยายามฆ่าตัวตาย', '8', 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `re_id` int(11) NOT NULL,
  `re_name` varchar(200) NOT NULL,
  `re_email` varchar(110) NOT NULL,
  `re_line` varchar(250) NOT NULL,
  `re_code` varchar(100) NOT NULL,
  `re_date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`re_id`, `re_name`, `re_email`, `re_line`, `re_code`, `re_date`) VALUES
(1, 'กาญจนา ตั้งชลทิพย์', 'sawaddiju@gmail.com', 'koo21', 'deb7d1be3b3a9592881f8385469d3433', '01/14/2566:05:59:37'),
(2, 'ปิยะวัฒน์ สวัสดิ์จู', 'sawaddiju@gmail.com', 'koo21', 'deb7d1be3b3a9592881f8385469d3433', '01/14/2566:06:00:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`an_id`);

--
-- Indexes for table `qt_1`
--
ALTER TABLE `qt_1`
  ADD PRIMARY KEY (`qt_id`);

--
-- Indexes for table `qt_2`
--
ALTER TABLE `qt_2`
  ADD PRIMARY KEY (`qt2_id`);

--
-- Indexes for table `qt_3`
--
ALTER TABLE `qt_3`
  ADD PRIMARY KEY (`qt3_id`);

--
-- Indexes for table `qt_4`
--
ALTER TABLE `qt_4`
  ADD PRIMARY KEY (`qt4_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`re_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `an_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qt_1`
--
ALTER TABLE `qt_1`
  MODIFY `qt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `qt_2`
--
ALTER TABLE `qt_2`
  MODIFY `qt2_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `qt_3`
--
ALTER TABLE `qt_3`
  MODIFY `qt3_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `qt_4`
--
ALTER TABLE `qt_4`
  MODIFY `qt4_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
