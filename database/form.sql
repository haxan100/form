-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 10:26 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_survey_eyelash`
--

CREATE TABLE `tbl_data_survey_eyelash` (
  `id_survey_eyelash` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `alergi_lem` varchar(255) NOT NULL,
  `pengobatan_teriod` varchar(255) NOT NULL,
  `ops_lastik` varchar(255) NOT NULL,
  `pakai_softlens` varchar(255) NOT NULL,
  `kulit_berminyak` varchar(255) NOT NULL,
  `foto_art` varchar(255) NOT NULL,
  `nama_art` varchar(255) NOT NULL,
  `nama_store` varchar(255) NOT NULL,
  `Nomor_Service` varchar(255) NOT NULL,
  `kemoterapi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_survey_eyelash`
--

INSERT INTO `tbl_data_survey_eyelash` (`id_survey_eyelash`, `name`, `date_of_birth`, `no_phone`, `alergi_lem`, `pengobatan_teriod`, `ops_lastik`, `pakai_softlens`, `kulit_berminyak`, `foto_art`, `nama_art`, `nama_store`, `Nomor_Service`, `kemoterapi`) VALUES
(2, 'abdul hasan', '1998-12-12', '8787', 'TIDAK', 'YA', 'YA', 'YA', 'YA', 'Eyelash-20210203-1310.jpg', 'wd', 'wd', '2021-pTLNS', 'YA'),
(3, 'wado', '1998-10-10', '233232', 'YA', 'YA', 'YA', 'YA', 'YA', 'Eyelash-20210204-1457.jpg', 'hasan art', 'strore', '2021-FRVPL', 'YA'),
(4, 'wdwdw', '2020-02-19', '87878', 'YA', 'YA', 'YA', 'YA', 'YA', 'tidakADAFoto', 'hasan art', 'strore', '2021-o9HdL', 'YA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_survey_sulam_alis`
--

CREATE TABLE `tbl_data_survey_sulam_alis` (
  `id_survey_sulam` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_born` varchar(11) NOT NULL,
  `IDService` int(15) NOT NULL,
  `Nomor_Service` varchar(255) NOT NULL,
  `client_name` int(15) NOT NULL,
  `addres` varchar(15) NOT NULL,
  `no_phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `client_botox` varchar(11) NOT NULL,
  `diabetes` varchar(11) NOT NULL COMMENT '1ya, 0 tidak',
  `hepatitis` varchar(11) NOT NULL,
  `easy_bleeds` varchar(11) NOT NULL,
  `sensitif_skin` varchar(11) NOT NULL,
  `oily_skin` varchar(11) NOT NULL,
  `do_chemical_peels` varchar(11) NOT NULL,
  `pregnant` varchar(11) NOT NULL,
  `drinking_alcohol_in_the_last_24_hours` varchar(11) NOT NULL,
  `took_aspirin_or_ibuprofen_in_the_last_24_hours` varchar(11) NOT NULL,
  `metal_alergic` varchar(11) NOT NULL,
  `name_our_art` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL,
  `foto_art_rainbow` varchar(255) NOT NULL,
  `retouch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_survey_sulam_alis`
--

INSERT INTO `tbl_data_survey_sulam_alis` (`id_survey_sulam`, `name`, `date_of_born`, `IDService`, `Nomor_Service`, `client_name`, `addres`, `no_phone`, `email`, `client_botox`, `diabetes`, `hepatitis`, `easy_bleeds`, `sensitif_skin`, `oily_skin`, `do_chemical_peels`, `pregnant`, `drinking_alcohol_in_the_last_24_hours`, `took_aspirin_or_ibuprofen_in_the_last_24_hours`, `metal_alergic`, `name_our_art`, `store`, `foto_art_rainbow`, `retouch`) VALUES
(4, 'wadodw', '2021-02-05', 2, '2021-TC6HE', 0, 'kjkajk', '89878787', '87878ajahhja', 'tidak', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'hasan art', 'strore', 'Profile-20210202-1720.jpg', ''),
(6, 'wdwdwdqdw', '2021-02-04', 6, '2021-KJ2Vp', 0, 'lkj', '232323', 'lkj', 'lkjlkjlk', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'YA', 'hasan artwd', 'dw', 'Profile-20210202-1731.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_sulam`
--

CREATE TABLE `tbl_service_sulam` (
  `IDService` int(15) NOT NULL,
  `ServiceName` varchar(255) NOT NULL,
  `Price` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service_sulam`
--

INSERT INTO `tbl_service_sulam` (`IDService`, `ServiceName`, `Price`) VALUES
(1, 'ulam bulu', 10000),
(2, 'ulam alis', 20000),
(4, 'wewe', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_survey_eyelash`
--
ALTER TABLE `tbl_data_survey_eyelash`
  ADD PRIMARY KEY (`id_survey_eyelash`);

--
-- Indexes for table `tbl_data_survey_sulam_alis`
--
ALTER TABLE `tbl_data_survey_sulam_alis`
  ADD PRIMARY KEY (`id_survey_sulam`);

--
-- Indexes for table `tbl_service_sulam`
--
ALTER TABLE `tbl_service_sulam`
  ADD PRIMARY KEY (`IDService`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_survey_eyelash`
--
ALTER TABLE `tbl_data_survey_eyelash`
  MODIFY `id_survey_eyelash` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_data_survey_sulam_alis`
--
ALTER TABLE `tbl_data_survey_sulam_alis`
  MODIFY `id_survey_sulam` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_service_sulam`
--
ALTER TABLE `tbl_service_sulam`
  MODIFY `IDService` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
