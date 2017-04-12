-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Apr 2017 pada 09.21
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register-login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id_log` int(11) NOT NULL,
  `id_user` char(11) NOT NULL,
  `ip_address` tinytext NOT NULL,
  `browser` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `id_user`, `ip_address`, `browser`, `timestamp`) VALUES
(1, '', '', '', '2017-04-10 17:30:25'),
(2, '', '', '', '2017-04-10 17:31:10'),
(3, '', '', '', '2017-04-10 17:32:39'),
(4, '1', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 11:27:30'),
(5, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-10 17:37:06'),
(6, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-10 17:38:46'),
(7, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-10 17:42:23'),
(8, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-10 17:43:37'),
(9, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-10 23:26:38'),
(10, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 00:01:50'),
(11, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 00:17:45'),
(12, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 01:38:21'),
(13, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 01:47:51'),
(14, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 05:56:46'),
(15, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 06:00:23'),
(16, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 06:13:46'),
(17, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 11:23:19'),
(18, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 15:10:24'),
(19, '', '::1', 'Mozilla/5.0 (Linux; U; Android 4.4.4; Nexus 5 Build/KTU84P) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30', '2017-04-11 15:14:39'),
(20, 'Array', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 15:28:28'),
(21, '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', '2017-04-11 15:30:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE IF NOT EXISTS `profils` (
`id_user` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_panggilan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(5) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id_user`, `nama`, `nama_panggilan`, `jenis_kelamin`, `tanggal_lahir`, `no_hp`) VALUES
(1, '', '', '', '0000-00-00', ''),
(2, '', '', '', '2017-02-14', '085587'),
(3, '', '', '', '2017-02-09', '085555555'),
(4, 'Fernandes', '', '2', '2015-11-30', '084544'),
(5, '', '', '1', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `password` tinytext NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` char(1) NOT NULL,
  `ip` tinytext NOT NULL,
  `browser` tinytext NOT NULL,
  `token` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `password`, `userPass`, `status`, `ip`, `browser`, `token`) VALUES
(1, '', 'fikri@gmail.com', '', '90ba8e42f0820b22e76e477624fb2aaa16b125caa144d94beca223324da54733', '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36', '588e7975-ed5c-11e6-abce-1c9596323880'),
(2, '', 'sri@gmilas.com', '', '9d5105a5f4cd1839745c0072ee44502b5d62316cae4d7580ab304d10a0ff4d1f', '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36', '1e3394a2-ed5d-11e6-abce-1c9596323880'),
(3, '3', 'pok', '', '5e968ce47ce4a17e3823c29332a39d049a8d0afb08d157eb6224625f92671a51', '', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36', '3af68e36-ed5f-11e6-abce-1c9596323880'),
(4, 'fernandes', 'fernandes@gmail.com', '', '08614c84a3bbb4b05eeea6030fee50ab3baa8475450a5aba9873c04b7cd96feb', '1', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', 'd86b7561-1dda-11e7-a3be-080027009805'),
(5, '', 'andes@gmail.com', '', '754eb57a10ffe2148f31f48e7badb4e7744c153a610b767376c46ee6c27530b0', '1', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36', 'f26bd4e5-1ec8-11e7-bf76-34689559d7e0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userId`), ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
