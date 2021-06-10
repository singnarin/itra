-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 มิ.ย. 2021 เมื่อ 11:20 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itra`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `positionName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `positions`
--

INSERT INTO `positions` (`id`, `positionName`) VALUES
(1, 'เจ้าหน้าที่ทั่วไป'),
(2, 'ผู้ดูแลระบบ');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `provinces`
--

CREATE TABLE `provinces` (
  `id` int(5) NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `name_th` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `geography_id` int(5) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- dump ตาราง `provinces`
--

INSERT INTO `provinces` (`id`, `code`, `name_th`, `name_en`, `geography_id`) VALUES
(1, '10', 'กรุงเทพมหานคร', 'Bangkok', 2),
(2, '11', 'สมุทรปราการ', 'Samut Prakan', 2),
(3, '12', 'นนทบุรี', 'Nonthaburi', 2),
(4, '13', 'ปทุมธานี', 'Pathum Thani', 2),
(5, '14', 'พระนครศรีอยุธยา', 'Phra Nakhon Si Ayutthaya', 2),
(6, '15', 'อ่างทอง', 'Ang Thong', 2),
(7, '16', 'ลพบุรี', 'Loburi', 2),
(8, '17', 'สิงห์บุรี', 'Sing Buri', 2),
(9, '18', 'ชัยนาท', 'Chai Nat', 2),
(10, '19', 'สระบุรี', 'Saraburi', 2),
(11, '20', 'ชลบุรี', 'Chon Buri', 5),
(12, '21', 'ระยอง', 'Rayong', 5),
(13, '22', 'จันทบุรี', 'Chanthaburi', 5),
(14, '23', 'ตราด', 'Trat', 5),
(15, '24', 'ฉะเชิงเทรา', 'Chachoengsao', 5),
(16, '25', 'ปราจีนบุรี', 'Prachin Buri', 5),
(17, '26', 'นครนายก', 'Nakhon Nayok', 2),
(18, '27', 'สระแก้ว', 'Sa Kaeo', 5),
(19, '30', 'นครราชสีมา', 'Nakhon Ratchasima', 3),
(20, '31', 'บุรีรัมย์', 'Buri Ram', 3),
(21, '32', 'สุรินทร์', 'Surin', 3),
(22, '33', 'ศรีสะเกษ', 'Si Sa Ket', 3),
(23, '34', 'อุบลราชธานี', 'Ubon Ratchathani', 3),
(24, '35', 'ยโสธร', 'Yasothon', 3),
(25, '36', 'ชัยภูมิ', 'Chaiyaphum', 3),
(26, '37', 'อำนาจเจริญ', 'Amnat Charoen', 3),
(27, '39', 'หนองบัวลำภู', 'Nong Bua Lam Phu', 3),
(28, '40', 'ขอนแก่น', 'Khon Kaen', 3),
(29, '41', 'อุดรธานี', 'Udon Thani', 3),
(30, '42', 'เลย', 'Loei', 3),
(31, '43', 'หนองคาย', 'Nong Khai', 3),
(32, '44', 'มหาสารคาม', 'Maha Sarakham', 3),
(33, '45', 'ร้อยเอ็ด', 'Roi Et', 3),
(34, '46', 'กาฬสินธุ์', 'Kalasin', 3),
(35, '47', 'สกลนคร', 'Sakon Nakhon', 3),
(36, '48', 'นครพนม', 'Nakhon Phanom', 3),
(37, '49', 'มุกดาหาร', 'Mukdahan', 3),
(38, '50', 'เชียงใหม่', 'Chiang Mai', 1),
(39, '51', 'ลำพูน', 'Lamphun', 1),
(40, '52', 'ลำปาง', 'Lampang', 1),
(41, '53', 'อุตรดิตถ์', 'Uttaradit', 1),
(42, '54', 'แพร่', 'Phrae', 1),
(43, '55', 'น่าน', 'Nan', 1),
(44, '56', 'พะเยา', 'Phayao', 1),
(45, '57', 'เชียงราย', 'Chiang Rai', 1),
(46, '58', 'แม่ฮ่องสอน', 'Mae Hong Son', 1),
(47, '60', 'นครสวรรค์', 'Nakhon Sawan', 2),
(48, '61', 'อุทัยธานี', 'Uthai Thani', 2),
(49, '62', 'กำแพงเพชร', 'Kamphaeng Phet', 2),
(50, '63', 'ตาก', 'Tak', 4),
(51, '64', 'สุโขทัย', 'Sukhothai', 2),
(52, '65', 'พิษณุโลก', 'Phitsanulok', 2),
(53, '66', 'พิจิตร', 'Phichit', 2),
(54, '67', 'เพชรบูรณ์', 'Phetchabun', 2),
(55, '70', 'ราชบุรี', 'Ratchaburi', 4),
(56, '71', 'กาญจนบุรี', 'Kanchanaburi', 4),
(57, '72', 'สุพรรณบุรี', 'Suphan Buri', 2),
(58, '73', 'นครปฐม', 'Nakhon Pathom', 2),
(59, '74', 'สมุทรสาคร', 'Samut Sakhon', 2),
(60, '75', 'สมุทรสงคราม', 'Samut Songkhram', 2),
(61, '76', 'เพชรบุรี', 'Phetchaburi', 4),
(62, '77', 'ประจวบคีรีขันธ์', 'Prachuap Khiri Khan', 4),
(63, '80', 'นครศรีธรรมราช', 'Nakhon Si Thammarat', 6),
(64, '81', 'กระบี่', 'Krabi', 6),
(65, '82', 'พังงา', 'Phangnga', 6),
(66, '83', 'ภูเก็ต', 'Phuket', 6),
(67, '84', 'สุราษฎร์ธานี', 'Surat Thani', 6),
(68, '85', 'ระนอง', 'Ranong', 6),
(69, '86', 'ชุมพร', 'Chumphon', 6),
(70, '90', 'สงขลา', 'Songkhla', 6),
(71, '91', 'สตูล', 'Satun', 6),
(72, '92', 'ตรัง', 'Trang', 6),
(73, '93', 'พัทลุง', 'Phatthalung', 6),
(74, '94', 'ปัตตานี', 'Pattani', 6),
(75, '95', 'ยะลา', 'Yala', 6),
(76, '96', 'นราธิวาส', 'Narathiwat', 6),
(77, '97', 'บึงกาฬ', 'buogkan', 3);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `questionadmins`
--

CREATE TABLE `questionadmins` (
  `id` int(11) NOT NULL,
  `no` varchar(10) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer1` varchar(250) NOT NULL,
  `section_id` varchar(10) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `questionadmins`
--

INSERT INTO `questionadmins` (`id`, `no`, `question`, `answer1`, `section_id`, `answer2`, `answer3`, `answer4`) VALUES
(1, '1', 'admin ระบบเครือข่ายอินเตอร์เน็ตในองค์กรกำหนดให้ท่านต้อง Login ด้วย User name Password ทุกครั้งที่มีการเชื่อมต่อหรือไม่', 'ใช่ ต้องทำการ Login ก่อนทุกครั้ง และต้อง Login ใหม่เมื่อ Session หมดอายุ|1', '1', 'ใช่ ต้องทำการ Login ก่อนทุกครั้ง และใช้งานได้ตลอด|2', 'ใช้ Username และ Password ของเพื่อนร่วมงานในการ Login|3', 'ไม่ต้องทำการ login ก็สามารถเข้าใช้ได้ทันที|4'),
(2, '2', 'admin องค์กรอนุญาตให้ท่านสามารถนำอุปกรณ์อิเล็กทรอนิกส์ ที่สามารถเชื่อมต่อกับระบบเครือข่ายอินเตอร์เน็ตภายในองค์กร ใช้งานได้หรือไม่', 'ได้ ไม่เกินคนละ 1 อุปกรณ์ แต่ต้องลงทะเบียนกับองค์กรก่อนใช้งาน|1', '1', 'ได้ ไม่จำกัดจำนวน แต่ต้องนำมาลงทะเบียนกับองค์กรก่อนใช้งาน|2', 'ได้ไม่เกินคนละ 2 อุปกรณ์ ใช้ได้ทันที|3', 'ไม่มีข้อห้ามใดๆนำมาก็ใช้ได้เลย|4'),
(3, '3', 'admin ทุกครั้งที่มีการเข้าใช้งาน Website ต่าง ๆ ที่มีการ Login ด้วยชื่อผู้ใช้งานและรหัสผ่านท่านจะจัดเก็บรหัสผ่านด้วยวิธีใด', 'บันทึกด้วยความทรงจำ|1', '1', 'บันทึกไว้ที่เป็นความลับเฉพาะท่านที่ทราบ|2', 'บันทึกไว้ในสมุดโน๊ตที่ท่านและเพื่อนร่วมงานคนสนิทเท่านั้นที่ทราบ|3', 'เขียนโน้ตแปะไว้หน้าจอคอมพิวเตอร์|4'),
(5, '4', 'admin ท่านได้ปฏิบัติตามข้อกำหนดหรือนโยบายเกี่ยวกับการรักษาความปลอดภัยจากการใช้เทคโนโลยีสารสนเทศในองค์กร', 'ปฏิบัติตามอย่างเคร่งครัด|1', '1', 'ปฏิบัติตามไม่ครบทุกข้อ|2', 'ปฏิบัติตามทุกครั้งที่มีการตรวจสอบ|3', 'เฉยๆ เพราะไม่มีใครตรวจสอบ|4'),
(15, '5', 'admin ท่านทราบหรือไม่ว่า องค์กรมีการจัดทำแผนพัฒนาระบบสารสนเทศในองค์กรประจำปีหรือไม่', 'ทราบ มีแผนการจัดทำทุกปีงบประมาณ|1', '1', 'ทราบว่ามีแผน แต่ไม่รู้ว่าหรือไม่|2', 'ไม่ทราบ ไม่แน่ใจ|3', 'ไม่มี|4');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `no` varchar(10) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer1` varchar(250) NOT NULL,
  `section_id` varchar(10) NOT NULL,
  `answer2` varchar(250) NOT NULL,
  `answer3` varchar(250) NOT NULL,
  `answer4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `questions`
--

INSERT INTO `questions` (`id`, `no`, `question`, `answer1`, `section_id`, `answer2`, `answer3`, `answer4`) VALUES
(1, '1', 'ระบบเครือข่ายอินเตอร์เน็ตในองค์กรกำหนดให้ท่านต้อง Login ด้วย User name Password ทุกครั้งที่มีการเชื่อมต่อหรือไม่', 'ใช่ ต้องทำการ Login ก่อนทุกครั้ง และต้อง Login ใหม่เมื่อ Session หมดอายุ|1', '1', 'ใช่ ต้องทำการ Login ก่อนทุกครั้ง และใช้งานได้ตลอด|2', 'ใช้ Username และ Password ของเพื่อนร่วมงานในการ Login|3', 'ไม่ต้องทำการ login ก็สามารถเข้าใช้ได้ทันที|4'),
(2, '2', 'องค์กรอนุญาตให้ท่านสามารถนำอุปกรณ์อิเล็กทรอนิกส์ ที่สามารถเชื่อมต่อกับระบบเครือข่ายอินเตอร์เน็ตภายในองค์กร ใช้งานได้หรือไม่', 'ได้ ไม่เกินคนละ 1 อุปกรณ์ แต่ต้องลงทะเบียนกับองค์กรก่อนใช้งาน|1', '1', 'ได้ ไม่จำกัดจำนวน แต่ต้องนำมาลงทะเบียนกับองค์กรก่อนใช้งาน|2', 'ได้ไม่เกินคนละ 2 อุปกรณ์ ใช้ได้ทันที|3', 'ไม่มีข้อห้ามใดๆนำมาก็ใช้ได้เลย|4'),
(3, '3', 'ทุกครั้งที่มีการเข้าใช้งาน Website ต่าง ๆ ที่มีการ Login ด้วยชื่อผู้ใช้งานและรหัสผ่านท่านจะจัดเก็บรหัสผ่านด้วยวิธีใด', 'บันทึกด้วยความทรงจำ|1', '1', 'บันทึกไว้ที่เป็นความลับเฉพาะท่านที่ทราบ|2', 'บันทึกไว้ในสมุดโน๊ตที่ท่านและเพื่อนร่วมงานคนสนิทเท่านั้นที่ทราบ|3', 'เขียนโน้ตแปะไว้หน้าจอคอมพิวเตอร์|4'),
(5, '4', 'ท่านได้ปฏิบัติตามข้อกำหนดหรือนโยบายเกี่ยวกับการรักษาความปลอดภัยจากการใช้เทคโนโลยีสารสนเทศในองค์กร', 'ปฏิบัติตามอย่างเคร่งครัด|1', '1', 'ปฏิบัติตามไม่ครบทุกข้อ|2', 'ปฏิบัติตามทุกครั้งที่มีการตรวจสอบ|3', 'เฉยๆ เพราะไม่มีใครตรวจสอบ|4'),
(15, '5', 'ท่านทราบหรือไม่ว่า องค์กรมีการจัดทำแผนพัฒนาระบบสารสนเทศในองค์กรประจำปีหรือไม่', 'ทราบ มีแผนการจัดทำทุกปีงบประมาณ|1', '1', 'ทราบว่ามีแผน แต่ไม่รู้ว่าหรือไม่|2', 'ไม่ทราบ ไม่แน่ใจ|3', 'ไม่มี|4');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `schools`
--

INSERT INTO `schools` (`id`, `school`) VALUES
(1, 'วิทยาลัยเทคนิคแพร่'),
(2, 'วิทยาลัยอาชีวศึกษาแพร่'),
(3, 'วิทยาลัยเกษตรและเทคโนโลยีแพร่'),
(4, 'วิทยาลัยเทคนิคน่าน'),
(5, 'วิทยาลัยเทคนิคพะเยา'),
(6, 'วิทยาลัยเกษตรและเทคโนโลยีพะเยา'),
(7, 'วิทยาลัยเทคนิคเชียงราย'),
(8, 'วิทยาลัยอาชีวศึกษาเชียงราย'),
(9, 'วิทยาลัยเทคนิคกาญจนาภิเษกเชียงราย');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `sectionadmins`
--

CREATE TABLE `sectionadmins` (
  `id` int(11) NOT NULL,
  `section` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `sections`
--

INSERT INTO `sections` (`id`, `section`) VALUES
(1, 'Confidential: การปกป้องสารสนเทศให้เข้าถึงได้เฉพาะผู้ที่มีสิทธิ  '),
(2, 'Integrity: ปกป้องความถูกต้องสมบูรณ์ของสารสนเทศไม่ให้ถูกแก้ไขเปลี่ยนแปลงผิดไปจากความเป็นจริง'),
(3, 'Availability : สร้างความเชื่อมั่นว่าระบบสารสนเทศพร้อมใช้งาน');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `users`
--

CREATE TABLE `users` (
  `id` varchar(13) NOT NULL,
  `prefixName` varchar(50) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `school_id` varchar(10) NOT NULL,
  `province_id` varchar(50) NOT NULL,
  `position_id` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `permit` varchar(20) DEFAULT NULL,
  `question_id` varchar(10) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `answeradmin` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `users`
--

INSERT INTO `users` (`id`, `prefixName`, `firstName`, `lastName`, `phone`, `school_id`, `province_id`, `position_id`, `email`, `password`, `permit`, `question_id`, `answer`, `answeradmin`) VALUES
('1560100096259', 'xxxx', 'xxxxx', 'xxxxx', '0819507293', '1', '15', '1', 'singnarin@pyo1.go.th', '1111', 'admin', NULL, NULL, ''),
('8332221857944', 'นาย', 'รูปหล่อ', 'ใจดี', '9999999999', '1', '1', '1', 'singnarin@gmail.com', '1111', NULL, NULL, 'YTo1OntpOjE7czoxOiIxIjtpOjI7czoxOiIyIjtpOjM7czoxOiIzIjtpOjU7czoxOiI0IjtpOjE1O3M6MToiNCI7fQ==', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionadmins`
--
ALTER TABLE `questionadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectionadmins`
--
ALTER TABLE `sectionadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `questionadmins`
--
ALTER TABLE `questionadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sectionadmins`
--
ALTER TABLE `sectionadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
