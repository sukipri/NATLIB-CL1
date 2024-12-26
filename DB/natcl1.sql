-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2024 at 06:21 PM
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
  `rjkj1_idssen_01` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nat_rjkj1`
--

INSERT INTO `nat_rjkj1` (`idmain_rjkj1`, `rjkj1_nikpasien_01`, `rjkj1_namapasien_01`, `rjkj1_nikdokter_01`, `rjkj1_lokid_01`, `rjkj1_tglmasuk_01`, `rjkj1_status_01`, `rjkj1_idssen_01`) VALUES
('2412250703151', '9271060312000001', 'Ardianto Putra', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-04', '2', '9f16aaf1-58f8-4959-ace2-bbcd73006dba'),
('24122507031510', '9104223107000004', 'Dr. Alan Bagus Prasetya', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-05', '2', 'b90d6c3e-61cb-4b22-980f-e6c5940f38e1'),
('24122507031511', '9104224606000005', 'Ghina Assyifa', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-05', '2', '4dcd8243-9a3a-48a1-a5f8-c9750debed05'),
('24122507031512', '9104025209000006', 'Salsabilla Anjani Rizki', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-05', '2', 'e2b7e5a5-d62c-4eff-9bb7-a47a13e32cac'),
('24122507031513', '9271060312000001', 'Ardianto Putra', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-06', '2', 'ca5587e5-7f3a-4113-9506-5bb2c884809c'),
('24122507031514', '9204014804000002', 'Claudia Sintia', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-06', '2', '4d663a09-c325-4075-8566-6251778de8f7'),
('24122507031515', '9104224509000003', 'Elizabeth Dior', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-06', '3', 'e7deec99-7fda-48ab-9fba-0e640b835fd4'),
('24122507031516', '9104223107000004', 'Dr. Alan Bagus Prasetya', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-06', '2', 'd868c188-91eb-4d69-91d8-fcb293aff205'),
('24122507031517', '9104224606000005', 'Ghina Assyifa', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-06', '2', 'b46fceb2-4aa1-400f-a3ec-5230c5de892e'),
('24122507031518', '9104025209000006', 'Salsabilla Anjani Rizki', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-06', '2', 'cbf74ca1-8c19-44ca-91d6-72c7a1770763'),
('2412250703152', '9204014804000002', 'Claudia Sintia', '7209061211900001', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-04', '3', ''),
('2412250703153', '9104224509000003', 'Elizabeth Dior', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-04', '2', 'f5d9e864-1fd6-438f-936a-85741d1f7d23'),
('2412250703154', '9104223107000004', 'Dr. Alan Bagus Prasetya', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-04', '2', '1795f0bc-6bdd-4e71-80f7-fb84480074c6'),
('2412250703155', '9104224606000005', 'Ghina Assyifa', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-04', '2', '48a21fe1-7735-4c37-b8a4-bc8226fc237b'),
('2412250703156', '9104025209000006', 'Salsabilla Anjani Rizki', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-04', '2', '0780cddb-1e7e-4e50-b9de-611309ffe307'),
('2412250703157', '9271060312000001', 'Ardianto Putra', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-05', '2', '949195b8-79cf-405f-9525-a7d6a354bb6b'),
('2412250703158', '9204014804000002', 'Claudia Sintia', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-05', '2', '6864457b-026a-494d-a5f3-4929cbb3d58b'),
('2412250703159', '9104224509000003', 'Elizabeth Dior', '6408130207800005', '61becd6f-a241-4d69-bb11-c49e73f2be15', '2024-09-05', '2', '4b28e0da-02f3-4920-9ce6-6ab979b243a8');

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
('KkEZwA5LGAXkeyw8c3EJwpbGfhX4', '2', 'SS10001');

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
