-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2021 at 03:10 AM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `positionName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `positionName`) VALUES
(1, 'เจ้าหน้าที่ทั่วไป'),
(2, 'ผู้ดูแลระบบ');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(5) NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `name_th` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `geography_id` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
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
-- Table structure for table `questionadmins`
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

-- --------------------------------------------------------

--
-- Table structure for table `questions`
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
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `no`, `question`, `answer1`, `section_id`, `answer2`, `answer3`, `answer4`) VALUES
(35, '1', 'ระบบเครือข่ายอินเตอร์เน็ตในองค์กรกำหนดให้ท่านต้อง Login ด้วย User name Password ทุกครั้งที่มีการเชื่อมต่อหรือไม่', 'กำหนดให้ต้องทำการ Login ก่อนทุกครั้ง||1', '1', 'Log in ครั้งเดียวก็สามารถเข้าใช้งานได้ตลอด||2', 'Log in บ้างเป็นบางครั้ง||3', 'สามารถเข้าใช้ได้ทันทีที่มีการเชื่อมต่อ โดยไม่ต้องทำการ logi||4'),
(36, '2', 'องค์กรอนุญาตให้ท่านสามารถนำอุปกรณ์อิเล็กทรอนิกส์ ที่สามารถเชื่อมต่อกับระบบเครือข่ายอินเตอร์เน็ตภายในองค์กร ใช้งานได้หรือไม่', '	ไม่อนุญาตให้นำมาใช้ในงานองค์กร||', '1', '	อนุญาตให้นำมาใช้ได้ แต่ต้องทำการแจ้งลงทะเบียนและรับรหัสการใช้งานก่อน||', '	สามารถนำมาใช้งานได้คนละไม่เกิน 2 เครื่อง||', '	ไม่มีข้อห้ามใดๆ ใครจะเอามาใช้ก็ได้และสามารถเชื่อมต่อระบบอินเตอร์เน็ตได้ทันที||'),
(37, '3', 'ทุกครั้งที่มีการเข้าใช้งาน Website ต่าง ๆ ที่มีการ Log in ด้วยชื่อผู้ใช้งานและรหัสผ่านท่านจะจัดเก็บรหัสผ่านด้วยวิธีใด', 'บันทึกไว้ที่เป็นความลับเฉพาะท่านเท่านั้นที่ทราบ||1', '1', 'บันทึกไว้ในกระดาษหรือสมุดโน๊ตที่ที่ทำงานวางอยู่บนโต๊ะนั้นแหละ||2', 'เขียนโน้ตแปะไว้หน้าจอคอมพิวเตอร์กันลืม||3', 'บันทึกไว้ในเครื่องที่ใช้งานในหน้าเว็บนั้นๆ เมื่อเข้าใช้งานก็สามารถ Log in อัตโนมัติ||4'),
(38, '4', 'ท่านได้ปฏิบัติตามข้อกำหนดหรือนโยบายเกี่ยวกับการรับษาความปลอดภัยจากการใช้เทคโนโลยีสารสนเทศในองค์กร', '	ปฏิบัติตามอย่างเคร่งครัด|1', '1', '	ปฏิบัติตามได้ไม่ครบทุกข้อ|2', '	ปฏิบัติตามทุกครั้งที่มีการตรวจสอบ|3', '	ไม่มีการปฏิบัติ เนื่องจากองค์กรไม่มีนโยบาย|4'),
(39, '5', 'ท่านทราบหรือไม่ว่า องค์กรมีการจัดทำแผนพัฒนาระบบสารสนเทศในองค์กรประจำปีหรือไม่', 'ทราบ มีแผนการจัดทำทุกปีงบประมาณ|1', '1', 'ทราบว่ามีแผน แต่ไม่รู้ว่าได้มีการทำมั่ย|2', 'ไม่แน่ใจ|3', 'ไม่มี|4');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
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
-- Table structure for table `sectionadmins`
--

CREATE TABLE `sectionadmins` (
  `id` int(11) NOT NULL,
  `section` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sectionadmins`
--

INSERT INTO `sectionadmins` (`id`, `section`) VALUES
(1, '1.นโยบายความมั่นคงปลอดภัยสารสนเทศ '),
(2, '2.โครงสร้างความมั่นคงปลอดภัยสารสนเทศองค์กร'),
(3, '3.ความมั่นคงปลอดภัยสำหรับบุคลากร'),
(4, '4.การบริหารจัดการทรัพย์สิน'),
(5, '5.การควบคุมการเข้าถึง (Access control)'),
(6, '6.การเข้ารหัสข้อมูล'),
(7, '7.ความมั่นคงปลอดภัยทางกายภาพและสภาพแวดล้อม'),
(8, '8.ความมั่นคงปลอดภัยสำหรับการดําเนินงาน'),
(9, '9.ความมั่นคงปลอดภัยสำหรับการสื่อสารข้อมูล'),
(10, '10.การจัดหา การพัฒนา และการบำรุงรักษาระบบ'),
(11, '11.ความสัมพันธ์กับผู้ขาย ผู้ให้บริการภายนอก'),
(12, '12.การบริหารจัดการเหตุการณ์ความมั่นคงปลอดภัยสารสนเทศ'),
(13, '13.ประเด็นด้านความมั่นคงปลอดภัยสารสนเทศของการบริหารจัดการเพื่อสร้างความต่อเนื่องทางธุรกิจ'),
(14, '14.ความสอดคล้อง');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section`) VALUES
(1, 'Confidential: การปกป้องสารสนเทศให้เข้าถึงได้เฉพาะผู้ที่มีสิทธิ  '),
(2, 'Integrity: ปกป้องความถูกต้องสมบูรณ์ของสารสนเทศไม่ให้ถูกแก้ไขเปลี่ยนแปลงผิดไปจากความเป็นจริง'),
(3, 'Availability : สร้างความเชื่อมั่นว่าระบบสารสนเทศพร้อมใช้งาน');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(250) NOT NULL,
  `prefixName` varchar(50) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `school_id` varchar(10) NOT NULL,
  `province_id` varchar(50) NOT NULL,
  `position_id` varchar(50) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `permit` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `answer` text,
  `answeradmin` text,
  `position` varchar(250) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `sex` varchar(250) DEFAULT NULL,
  `education` varchar(250) DEFAULT NULL,
  `work` varchar(250) DEFAULT NULL,
  `computer` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `prefixName`, `firstName`, `lastName`, `phone`, `school_id`, `province_id`, `position_id`, `email`, `password`, `permit`, `status`, `answer`, `answeradmin`, `position`, `age`, `sex`, `education`, `work`, `computer`) VALUES
('admin@itra.org', 'นางสาว', 'admin', 'ผู้ดูแลระบบ', '9999999999', '7', '3', '3', 'admin@itra.org', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('general@itra.org', 'นาย', 'ผู้ใช้งานทั่วไป', 'นะจ๊ะ', NULL, '1', '19', '1', NULL, '1234', NULL, NULL, NULL, NULL, 'เจ้าหน้าที่ปฏิบัติงานทั่วไปในองค์กร/หรือสำนักงาน', 'ระหว่าง 20-30 ปี', 'ชาย', 'ต่ำกว่าปริญญาตรี', '5-10 ปี', 'มี ของที่ทำงานและส่วนตัว');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sectionadmins`
--
ALTER TABLE `sectionadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
