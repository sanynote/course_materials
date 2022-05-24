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
-- 데이터베이스: `db3`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `color`
--

CREATE TABLE `color` (
  `no` int(11) NOT NULL,
  `ccno` int(11) NOT NULL,
  `ccname` varchar(30) NOT NULL,
  `ccnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `color`
--

INSERT INTO `color` (`no`, `ccno`, `ccname`, `ccnum`) VALUES
(1, 0, '레드', 10),
(2, 0, '옐로우', 2),
(3, 0, '핑크', 7),
(4, 0, '그린', 5);

-- --------------------------------------------------------

--
-- 테이블 구조 `foods`
--

CREATE TABLE `foods` (
  `no` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `fprice` int(11) NOT NULL,
  `fnum` int(11) NOT NULL,
  `fyear` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `foods`
--

INSERT INTO `foods` (`no`, `fname`, `fprice`, `fnum`, `fyear`) VALUES
(1, '콩국수', 8000, 1, '2022년'),
(2, '라면', 3000, 3, '2020년'),
(3, '떡볶이', 2500, 2, '2019년'),
(4, '짬뽕', 4000, 1, '2021년');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `color`
--
ALTER TABLE `color`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `foods`
--
ALTER TABLE `foods`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
