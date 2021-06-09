-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 มิ.ย. 2021 เมื่อ 11:07 AM
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
-- โครงสร้างตาราง `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `no` varchar(10) NOT NULL,
  `question` varchar(250) NOT NULL,
  `section_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- dump ตาราง `questions`
--

INSERT INTO `questions` (`id`, `no`, `question`, `section_id`) VALUES
(1, '1', 'ระบบเครือข่ายอินเตอร์เน็ตในองค์กรกำหนดให้ท่านต้อง Login ด้วย User name Password ทุกครั้งที่มีการเชื่อมต่อหรือไม่', '1'),
(2, '2', 'องค์กรอนุญาตให้ท่านสามารถนำอุปกรณ์อิเล็กทรอนิกส์ ที่สามารถเชื่อมต่อกับระบบเครือข่ายอินเตอร์เน็ตภายในองค์กร ใช้งานได้หรือไม่', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
