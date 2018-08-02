-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 07:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskopmalam`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `poster` text NOT NULL,
  `judul` text NOT NULL,
  `categori` varchar(255) NOT NULL,
  `categori2` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `poster`, `judul`, `categori`, `categori2`, `rating`, `desk`) VALUES
(1, 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTE5NzYyNjM0Ml5BMl5BanBnXkFtZTgwNjk4MDIwMjI@._V1_SY264_CR0,0,178,264_AL_.jpg', 'Star Wars: The Last Jedi', '', '', 0, ''),
(2, 'https://images-na.ssl-images-amazon.com/images/M/MV5BZTA3NWU4MzQtNTBlMC00NGMxLWFjYjItZjRhYjZiOWEwNTBlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMjA0MTk5NTQ@._V1_SY264_CR4,0,178,264_AL_.jpg', 'Winter War', '', '', 0, ''),
(3, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjM3NzI1NDMyNl5BMl5BanBnXkFtZTgwNzUyMDgzNDM@._V1_SY264_CR0,0,178,264_AL_.jpg', 'Acts of Violence', '', '', 0, ''),
(4, 'https://images-na.ssl-images-amazon.com/images/M/MV5BYjQ5NjM0Y2YtNjZkNC00ZDhkLWJjMWItN2QyNzFkMDE3ZjAxXkEyXkFqcGdeQXVyODIxMzk5NjA@._V1_SY264_CR3,0,178,264_AL_.jpg', 'Coco', '', '', 0, ''),
(5, 'https://images-na.ssl-images-amazon.com/images/M/MV5BYWVhZjZkYTItOGIwYS00NmRkLWJlYjctMWM0ZjFmMDU4ZjEzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SY264_CR0,0,178,264_AL_.jpg', 'Justice League', '', '', 0, ''),
(6, 'https://images-na.ssl-images-amazon.com/images/M/MV5BNmRiZDM4ZmMtOTVjMi00YTNlLTkyNjMtMjI2OTAxNjgwMWM1XkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_SX178_AL_.jpg', 'Jigsaw', '', '', 0, ''),
(7, 'https://images-na.ssl-images-amazon.com/images/M/MV5BZjczZjljMzctM2UyZi00NTA0LWE5ZjMtYWVhMjdhOGUxMmQ3XkEyXkFqcGdeQXVyNzY4ODc3OTA@._V1_SX178_AL_.jpg', 'Web Cam Girls', '', '', 0, ''),
(8, 'https://image.tmdb.org/t/p/w185/kXHTyYMrJwuFGEXg5RXtJOboIpD.jpg', 'The Greatest Showman', '', '', 0, ''),
(9, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTUyODA0Njc4Nl5BMl5BanBnXkFtZTgwMTU5MDU5MzI@._V1_SY264_CR2,0,178,264_AL_.jpg', 'Hangman', '', '', 0, ''),
(10, 'https://images-na.ssl-images-amazon.com/images/M/MV5BYmQ2ZjNjZTAtODNkNi00N2EzLWFlOWItMmZhNzk2ZTEwMGRiXkEyXkFqcGdeQXVyMjQ1MDE0NzU@._V1_SY264_CR5,0,178,264_AL_.jpg', 'Bleeding Steel', '', '', 0, ''),
(11, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTkyNDQ1MDc5OV5BMl5BanBnXkFtZTgwOTcyNzI2MzI@._V1_SY264_CR0,0,178,264_AL_.jpg', 'Welcome to The Jungle', '', '', 0, ''),
(12, 'https://images-na.ssl-images-amazon.com/images/M/MV5BNjEyMjk4NTE1NV5BMl5BanBnXkFtZTgwOTgzNzA3MjI@._V1_SX178_AL_.jpg', 'Pitch Perfect 3', '', '', 0, ''),
(13, 'https://images-na.ssl-images-amazon.com/images/M/MV5BZGEwYjIxMDAtZTUyNi00YTgxLWE5NGMtN2M0ODhiYzExOTZiXkEyXkFqcGdeQXVyOTg4MDYyNw@@._V1_SY264_CR10,0,178,264_AL_.jpg', 'Cops and Robbers', '', '', 0, ''),
(14, 'https://image.tmdb.org/t/p/w185/zmpnEfPrtCrVXYsMbJ1XpHExMQV.jpg', 'Hollow in the Land', '', '', 0, ''),
(15, 'https://image.tmdb.org/t/p/w185/uCH6FOFsDW6pfvbbmIIswuvuNtM.jpg', 'The Disaster Artist', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `no_telp`, `jenis_kelamin`, `country`, `province`, `city`) VALUES
(1, 'admin', 'admin', 'arya', 'just1arya@gmail.com', 'asdasdasd', 'Male', 'USA', 'DKI Jakartaa', 'Jakarta Barat'),
(2, 'titah', 'titah', 'titah', 'titah', '081231231312', 'Male', 'Indonesia', 'Banten', 'Tanggerang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
