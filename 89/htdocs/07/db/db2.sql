-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-05-20 02:57
-- 서버 버전: 10.4.24-MariaDB
-- PHP 버전: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `db2`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `cardesc`
--

CREATE TABLE `cardesc` (
  `no` int(11) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `carprice` int(11) NOT NULL,
  `caryear` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `cardesc`
--

INSERT INTO `cardesc` (`no`, `carname`, `carprice`, `caryear`) VALUES
(1, '아우디', 8000, '2019'),
(2, '그렌져', 5000, '2020'),
(3, '아반떼', 3500, '2017'),
(4, '소나타', 4500, '2021'),
(5, '캐스퍼', 2000, '2020');

-- --------------------------------------------------------

--
-- 테이블 구조 `comp`
--

CREATE TABLE `comp` (
  `no` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `cpu` varchar(40) NOT NULL,
  `ram` varchar(40) NOT NULL,
  `mainboard` varchar(40) NOT NULL,
  `year` varchar(40) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `comp`
--

INSERT INTO `comp` (`no`, `name`, `cpu`, `ram`, `mainboard`, `year`, `price`) VALUES
(1, 'gram', 'intel', '8gb', 'intel', '2021', 120),
(2, 'macpro', 'arm', '8gb', 'apl', '2020', 150),
(3, 'macair', 'arm', '4gb', 'apl', '2019', 120),
(4, 'asus', 'amd', '16gb', 'intel', '2021', 95);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `cardesc`
--
ALTER TABLE `cardesc`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `cardesc`
--
ALTER TABLE `cardesc`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `comp`
--
ALTER TABLE `comp`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
