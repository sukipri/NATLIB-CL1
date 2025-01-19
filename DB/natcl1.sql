-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 05:27 PM
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
('ODk4Njc5241206024858', '7209061211900001', '10009880728', 'dr. Alexander'),
('OTE2NzU1241207015035', '6408130207800005', '10018180913', 'dr. Dito Arifin, Sp.M.'),
('OTM4ODkw241207015058', '3207192310600004', '10010910332', 'dr. Nicholas Evan, Sp.B.'),
('OTQ3MTY4241212103914', '5271002009700008', '10018452434', 'dr. Nathalie Tan, Sp.PK.');

-- --------------------------------------------------------

--
-- Table structure for table `nat_rjkj1`
--

CREATE TABLE `nat_rjkj1` (
  `idmain_rjkj1` varchar(50) NOT NULL,
  `rjkj1_nikpasien_01` varchar(50) NOT NULL,
  `rjkj1_namapasien_01` varchar(100) NOT NULL,
  `rjkj1_nikdokter_01` varchar(50) NOT NULL,
  `rjkj1_lokid_01` varchar(50) NOT NULL,
  `rjkj1_tglmasuk_01` date NOT NULL,
  `rjkj1_status_01` varchar(10) NOT NULL,
  `rjkj1_idssen_01` varchar(100) NOT NULL,
  `rjkj1_icd_01` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nat_rjkj1`
--

INSERT INTO `nat_rjkj1` (`idmain_rjkj1`, `rjkj1_nikpasien_01`, `rjkj1_namapasien_01`, `rjkj1_nikdokter_01`, `rjkj1_lokid_01`, `rjkj1_tglmasuk_01`, `rjkj1_status_01`, `rjkj1_idssen_01`, `rjkj1_icd_01`) VALUES
('2501191008561', '9271060312000001', 'Ardianto Putra', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-11', '21', '9e5d666b-5cf1-44ae-b8ab-ed6615b041b7', 'L70. 0'),
('25011910085610', '9104223107000004', 'Dr. Alan Bagus Prasetya', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-12', '2', '7a4db007-11a5-4ed1-8ac1-c57118433aae', 'L70. 0'),
('25011910085611', '9104224606000005', 'Ghina Assyifa', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-12', '2', '50b6b9f7-7fca-403a-a9db-cc1446f57b8f', 'L70. 0'),
('25011910085612', '9104025209000006', 'Salsabilla Anjani Rizki', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-12', '21', '16410886-be06-4a18-93c5-1292cacbbc09', 'L70. 0'),
('25011910085613', '9271060312000001', 'Ardianto Putra', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-13', '21', 'f681b661-b945-4661-8334-bbb57b9b048d', 'L70. 0'),
('25011910085614', '9204014804000002', 'Claudia Sintia', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-13', '21', 'c0262c58-c4f0-4582-8eb4-187f5b847fe2', 'L70. 0'),
('25011910085615', '9104224509000003', 'Elizabeth Dior', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-13', '2', '12ea4be8-dcfa-448f-84ca-a5b3dbd012da', 'L70. 0'),
('25011910085616', '9104223107000004', 'Dr. Alan Bagus Prasetya', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-13', '2', 'f7f9b98c-b99a-4565-9b93-500707f165c9', 'L70. 0'),
('25011910085617', '9104224606000005', 'Ghina Assyifa', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-13', '2', '4bc0ff7b-7047-4782-9b32-18efd64da7d7', 'L70. 0'),
('25011910085618', '9104025209000006', 'Salsabilla Anjani Rizki', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-13', '2', 'c41a060c-c941-4eb4-a46d-237dc94f1fc0', 'L70. 0'),
('2501191008562', '9204014804000002', 'Claudia Sintia', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-11', '21', 'c166873a-2f76-443f-a360-bd61aa594287', 'L70. 0'),
('2501191008563', '9104224509000003', 'Elizabeth Dior', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-11', '21', 'd3abbdb9-7f92-4c6b-8a06-95a8601db052', 'L70. 0'),
('2501191008564', '9104223107000004', 'Dr. Alan Bagus Prasetya', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-11', '21', 'b87a67b0-3a3f-4088-91eb-48f9426eb171', 'L70. 0'),
('2501191008565', '9104224606000005', 'Ghina Assyifa', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-11', '21', '27e7f2bd-419a-4174-a451-78aae5fcb3a8', 'L70. 0'),
('2501191008566', '9104025209000006', 'Salsabilla Anjani Rizki', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-11', '21', '0463b7d7-7a26-489d-b05c-04aba929f572', 'L70. 0'),
('2501191008567', '9271060312000001', 'Ardianto Putra', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-12', '2', 'b1704993-3fee-4a85-b01f-9d1609f9efde', 'L70. 0'),
('2501191008568', '9204014804000002', 'Claudia Sintia', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-12', '2', 'b50d349d-4d01-4a06-b688-e4a79d7e2ee4', 'L70. 0'),
('2501191008569', '9104224509000003', 'Elizabeth Dior', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-12', '2', '853ae5bb-63ff-45c1-a535-1e81f3cbf5ad', 'L70. 0');

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
('ulgQ8tcgElkV6xPNwZLFKnrtciMc', '2', 'SS10001');

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
