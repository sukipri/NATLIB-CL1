-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 04:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natcl1`
--

-- --------------------------------------------------------

--
-- Table structure for table `nat_dokter`
--

CREATE TABLE `nat_dokter` (
  `idmain_dokter` varchar(60) NOT NULL,
  `dokter_nik_01` varchar(60) NOT NULL,
  `dokter_idss_01` varchar(60) NOT NULL,
  `dokter_nama_01` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nat_dokter`
--

INSERT INTO `nat_dokter` (`idmain_dokter`, `dokter_nik_01`, `dokter_idss_01`, `dokter_nama_01`) VALUES
('ODk4Njc5241206024858', '7209061211900001', '-', 'dr. Alexander');

-- --------------------------------------------------------

--
-- Table structure for table `nat_rjkj1`
--

CREATE TABLE `nat_rjkj1` (
  `idmain_rjkj1` varchar(50) NOT NULL,
  `rjkj1_nikpasien_01` varchar(50) NOT NULL,
  `rjkj1_nikdokter_01` varchar(50) NOT NULL,
  `rjkj1_lokid_01` varchar(50) NOT NULL,
  `rjkj1_tglmasuk_01` date NOT NULL,
  `rjkj1_status_01` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nat_rjkj1`
--

INSERT INTO `nat_rjkj1` (`idmain_rjkj1`, `rjkj1_nikpasien_01`, `rjkj1_nikdokter_01`, `rjkj1_lokid_01`, `rjkj1_tglmasuk_01`, `rjkj1_status_01`) VALUES
('1001', '9201076001000007', '3207192310600004', 'e287edb4-f2d6-4528-ba35-774bf22e55b4', '2024-12-04', '1'),
('1002', '9201394901000008', '6408130207800005', 'e287edb4-f2d6-4528-ba35-774bf22e55b4', '2024-12-05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `srv_user_01`
--

CREATE TABLE `srv_user_01` (
  `idmain_user_01` varchar(100) NOT NULL,
  `user_kode_01` varchar(100) NOT NULL,
  `user_nama_01` varchar(100) NOT NULL,
  `user_pass_01` varchar(100) NOT NULL,
  `user_hak_01` varchar(10) NOT NULL,
  `user_status_01` varchar(10) NOT NULL,
  `user_relasi_01` varchar(100) NOT NULL,
  `user_ketnama_01` varchar(100) NOT NULL,
  `user_passtext_01` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `srv_user_01`
--

INSERT INTO `srv_user_01` (`idmain_user_01`, `user_kode_01`, `user_nama_01`, `user_pass_01`, `user_hak_01`, `user_status_01`, `user_relasi_01`, `user_ketnama_01`, `user_passtext_01`) VALUES
('034r03ju0jer0wjerw', 'ADM1001', 'ADMIN', '0cc175b9c0f1b6a831c399e269772661', '1', '2', '', '', 'a'),
('454h6h4hrth45645645645', 'APT1001', 'APOTEK', 'd31905d7583fa56246a77c1180880d65', '3', '2', '-', '-', 'cornelia12345'),
('OTM2NjUy230915074105', '04171088', 'ibet', '9d25ee5d1ffa0e01133c45260ab25a52', '2', '2', '0', 'Ibet Silatunga', 'ibet'),
('OTU0MTAy231007055114', '231007055114', 'HARIO', '9d82b664e2e0c055dbb2c476e59052dd', '2', '2', '0', 'Hario Prabu Penangsang', 'hario');

-- --------------------------------------------------------

--
-- Table structure for table `sstoken`
--

CREATE TABLE `sstoken` (
  `token_isi_01` varchar(200) DEFAULT NULL,
  `token_status_01` varchar(10) DEFAULT NULL,
  `idmain_token_01` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sstoken`
--

INSERT INTO `sstoken` (`token_isi_01`, `token_status_01`, `idmain_token_01`) VALUES
('tormMaZkPPNL5A72eYxeCc74dBO3', '2', 'SS10001');

-- --------------------------------------------------------

--
-- Table structure for table `tqa`
--

CREATE TABLE `tqa` (
  `idmain_qa_01` varchar(100) NOT NULL,
  `qa_kode_01` varchar(100) NOT NULL,
  `qa_01` varchar(100) NOT NULL,
  `qa_02` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `uploader` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tqa`
--

INSERT INTO `tqa` (`idmain_qa_01`, `qa_kode_01`, `qa_01`, `qa_02`, `ket`, `status`, `uploader`) VALUES
('09dvj045834-53j405j34', 'QA1001', '1 x 1', '1', '-', '2', 'TEST'),
('9c9c9s0cis0ci0sci0', 'QA1003', '2 x 2', '4', '-', '2', 'TEST'),
('ds980dfnn23j4n2j34n', 'QA1002', 'X = ?', 'Y', '-', '2', 'TEST');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nat_dokter`
--
ALTER TABLE `nat_dokter`
  ADD PRIMARY KEY (`idmain_dokter`);

--
-- Indexes for table `nat_rjkj1`
--
ALTER TABLE `nat_rjkj1`
  ADD PRIMARY KEY (`idmain_rjkj1`);

--
-- Indexes for table `srv_user_01`
--
ALTER TABLE `srv_user_01`
  ADD PRIMARY KEY (`idmain_user_01`);

--
-- Indexes for table `tqa`
--
ALTER TABLE `tqa`
  ADD PRIMARY KEY (`idmain_qa_01`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
