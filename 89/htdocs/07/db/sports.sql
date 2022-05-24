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
-- 데이터베이스: `sports`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `todaygame`
--

CREATE TABLE `todaygame` (
  `no` int(11) NOT NULL,
  `종목` varchar(50) NOT NULL,
  `대회` varchar(50) NOT NULL,
  `중계` varchar(50) NOT NULL,
  `장소` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `todaygame`
--

INSERT INTO `todaygame` (`no`, `종목`, `대회`, `중계`, `장소`) VALUES
(1, '골프', 'KLPGA2022', 'sporttv', '군산'),
(2, '농구', 'NBA', 'sbs', '메디슨 스퀘어 가든'),
(3, '양궁', '국가대표 선발전', 'sporttv', 'at센터'),
(4, '테니스', '2022년 전국대회', 'kbs', '양구테니스 파크');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `todaygame`
--
ALTER TABLE `todaygame`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `todaygame`
--
ALTER TABLE `todaygame`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
