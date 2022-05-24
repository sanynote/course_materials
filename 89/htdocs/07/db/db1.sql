-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-05-20 02:55
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
-- 데이터베이스: `db1`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `joinmember`
--

CREATE TABLE `joinmember` (
  `no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `joinmember`
--

INSERT INTO `joinmember` (`no`, `name`, `age`, `email`) VALUES
(1, 'greenit', 20, 'greenit@green.com'),
(2, 'red', 10, 'red@naver.com'),
(3, 'blue', 20, 'blue@daum.net'),
(4, 'pink', 15, 'pink@nate.com'),
(5, 'gold', 90, 'gold@naver.com');

-- --------------------------------------------------------

--
-- 테이블 구조 `milk`
--

CREATE TABLE `milk` (
  `no` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `milk`
--

INSERT INTO `milk` (`no`, `mname`, `mprice`) VALUES
(1, '초코우유', 1200),
(2, '바나나우유', 1500),
(3, '딸기우유', 1200),
(4, '초코에몽', 1800),
(5, '네스퀵', 1000);

-- --------------------------------------------------------

--
-- 테이블 구조 `stdscore`
--

CREATE TABLE `stdscore` (
  `no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `kor` int(11) NOT NULL,
  `eng` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `avg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `stdscore`
--

INSERT INTO `stdscore` (`no`, `name`, `kor`, `eng`, `math`, `total`, `avg`) VALUES
(1, 'red', 100, 99, 88, 0, 0),
(2, 'blue', 88, 77, 66, 0, 0),
(3, 'pink', 50, 30, 177, 0, 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `joinmember`
--
ALTER TABLE `joinmember`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `milk`
--
ALTER TABLE `milk`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `stdscore`
--
ALTER TABLE `stdscore`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `joinmember`
--
ALTER TABLE `joinmember`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `milk`
--
ALTER TABLE `milk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `stdscore`
--
ALTER TABLE `stdscore`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
