-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2020 at 08:20 PM
-- Server version: 10.3.24-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperas1_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Kasubagrumahtangga', '1', 1602590833);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/debug/default/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/debug/default/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/gii/default/action', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/gii/default/diff', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/gii/default/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/gii/default/preview', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/gii/default/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/kendaraan/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/kendaraan/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/kendaraan/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/kendaraan/preview', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/kendaraan/preview-bpkb', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/kendaraan/preview-stnk', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/kendaraan/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/kendaraan/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/merk/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/merk/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/merk/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/merk/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/merk/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/peminjam/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/peminjam/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/peminjam/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/peminjam/pdf', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/peminjam/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/peminjam/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/site/api-pegawai', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/site/captcha', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/site/error', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/site/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/site/login', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/site/logout', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/ttd/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/ttd/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/ttd/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/ttd/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/ttd/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/unit/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/unit/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/unit/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/unit/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/unit/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/default/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/menu/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/menu/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/menu/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/menu/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/menu/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/role/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/role/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/role/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/role/permission', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/role/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/role/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/route/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/route/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/route/generate', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/route/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/route/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/route/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/user/create', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/user/delete', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/user/index', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/user/update', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('/utilitas/user/view', 2, NULL, NULL, NULL, 1602590833, 1602590833),
('Kasubagperlengkapan', 1, NULL, NULL, NULL, 1602590833, 1602590833),
('Kasubagrumahtangga', 1, NULL, NULL, NULL, 1602590833, 1602590833),
('Kasubagtatausaha', 1, NULL, NULL, NULL, 1602590833, 1602590833);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Kasubagrumahtangga', '/debug/default/db-explain'),
('Kasubagrumahtangga', '/debug/default/download-mail'),
('Kasubagrumahtangga', '/debug/default/index'),
('Kasubagrumahtangga', '/debug/default/toolbar'),
('Kasubagrumahtangga', '/debug/default/view'),
('Kasubagrumahtangga', '/debug/user/reset-identity'),
('Kasubagrumahtangga', '/debug/user/set-identity'),
('Kasubagrumahtangga', '/gii/default/action'),
('Kasubagrumahtangga', '/gii/default/diff'),
('Kasubagrumahtangga', '/gii/default/index'),
('Kasubagrumahtangga', '/gii/default/preview'),
('Kasubagrumahtangga', '/gii/default/view'),
('Kasubagrumahtangga', '/kendaraan/create'),
('Kasubagrumahtangga', '/kendaraan/delete'),
('Kasubagrumahtangga', '/kendaraan/index'),
('Kasubagrumahtangga', '/kendaraan/preview'),
('Kasubagrumahtangga', '/kendaraan/preview-bpkb'),
('Kasubagrumahtangga', '/kendaraan/preview-stnk'),
('Kasubagrumahtangga', '/kendaraan/update'),
('Kasubagrumahtangga', '/kendaraan/view'),
('Kasubagrumahtangga', '/merk/create'),
('Kasubagrumahtangga', '/merk/delete'),
('Kasubagrumahtangga', '/merk/index'),
('Kasubagrumahtangga', '/merk/update'),
('Kasubagrumahtangga', '/merk/view'),
('Kasubagrumahtangga', '/peminjam/create'),
('Kasubagrumahtangga', '/peminjam/delete'),
('Kasubagrumahtangga', '/peminjam/index'),
('Kasubagrumahtangga', '/peminjam/pdf'),
('Kasubagrumahtangga', '/peminjam/update'),
('Kasubagrumahtangga', '/peminjam/view'),
('Kasubagrumahtangga', '/site/api-pegawai'),
('Kasubagrumahtangga', '/site/captcha'),
('Kasubagrumahtangga', '/site/error'),
('Kasubagrumahtangga', '/site/index'),
('Kasubagrumahtangga', '/site/login'),
('Kasubagrumahtangga', '/site/logout'),
('Kasubagrumahtangga', '/ttd/create'),
('Kasubagrumahtangga', '/ttd/delete'),
('Kasubagrumahtangga', '/ttd/index'),
('Kasubagrumahtangga', '/ttd/update'),
('Kasubagrumahtangga', '/ttd/view'),
('Kasubagrumahtangga', '/unit/create'),
('Kasubagrumahtangga', '/unit/delete'),
('Kasubagrumahtangga', '/unit/index'),
('Kasubagrumahtangga', '/unit/update'),
('Kasubagrumahtangga', '/unit/view'),
('Kasubagrumahtangga', '/utilitas/default/index'),
('Kasubagrumahtangga', '/utilitas/menu/create'),
('Kasubagrumahtangga', '/utilitas/menu/delete'),
('Kasubagrumahtangga', '/utilitas/menu/index'),
('Kasubagrumahtangga', '/utilitas/menu/update'),
('Kasubagrumahtangga', '/utilitas/menu/view'),
('Kasubagrumahtangga', '/utilitas/role/create'),
('Kasubagrumahtangga', '/utilitas/role/delete'),
('Kasubagrumahtangga', '/utilitas/role/index'),
('Kasubagrumahtangga', '/utilitas/role/permission'),
('Kasubagrumahtangga', '/utilitas/role/update'),
('Kasubagrumahtangga', '/utilitas/role/view'),
('Kasubagrumahtangga', '/utilitas/route/create'),
('Kasubagrumahtangga', '/utilitas/route/delete'),
('Kasubagrumahtangga', '/utilitas/route/generate'),
('Kasubagrumahtangga', '/utilitas/route/index'),
('Kasubagrumahtangga', '/utilitas/route/update'),
('Kasubagrumahtangga', '/utilitas/route/view'),
('Kasubagrumahtangga', '/utilitas/user/create'),
('Kasubagrumahtangga', '/utilitas/user/delete'),
('Kasubagrumahtangga', '/utilitas/user/index'),
('Kasubagrumahtangga', '/utilitas/user/update'),
('Kasubagrumahtangga', '/utilitas/user/view');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `merk_id` int(11) NOT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `tahun_perolehan` date DEFAULT NULL,
  `tgl_pembuatan` date DEFAULT NULL,
  `bpkb` varchar(255) DEFAULT NULL,
  `file_bpkb` varchar(255) DEFAULT NULL,
  `no_stnk` varchar(255) DEFAULT NULL,
  `file_stnk` varchar(255) DEFAULT NULL,
  `nomor_mesin` varchar(255) DEFAULT NULL,
  `nomor_rangka` varchar(255) DEFAULT NULL,
  `no_plat_hitam` varchar(255) DEFAULT NULL,
  `no_plat_merah` varchar(255) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `jenis_id`, `merk_id`, `tipe`, `tahun_perolehan`, `tgl_pembuatan`, `bpkb`, `file_bpkb`, `no_stnk`, `file_stnk`, `nomor_mesin`, `nomor_rangka`, `no_plat_hitam`, `no_plat_merah`, `unit_id`, `gambar`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, 'INNOVA', '2019-01-01', '2019-10-29', 'P-06322839', NULL, '5MX023569', 'c406668e-30ca-4dfe-93eb-6b0b7e7e6f58_B_1112_PQF.jpeg', '5MX023569', 'MH35MX0012K023977', 'B 1297 RFV', 'B 1112 PQF', 6, NULL, 1, NULL, '2020-10-13 19:07:14', 1, '2020-11-03 15:15:00'),
(2, 1, 1, 'KIJANG INNOVA', '2019-01-01', '2019-10-30', 'P-06323961', NULL, '5MX023636', '6f005d41-46ae-4841-8840-2fa7899020bc_B_1114_PQF.jpeg', '5MX023636', 'MH35MX0012K023556', '', 'B 1114 PQF', 8, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:45:52'),
(7, 1, 3, 'CITY', '2010-02-01', '2019-01-01', 'H-10376786', NULL, '5MX023636', '61db2412-159f-43be-9b3c-e0ab509c4f48_B_1002_UQA.jpeg', '5MX023636', 'MH35MX0012K023556', '', 'B 1002 UQA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-02 07:53:16'),
(8, 1, 3, 'CITY', '2010-01-01', '0000-00-00', 'H-03308337', NULL, '5MX023687', '4275f0bd-c8f1-4833-a7a6-121bf0e78780_B_1211_PQA.jpeg', '5MX023687', 'MH35MX0012K023587', 'B 1394 IR', 'B 1211 PQA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:47:31'),
(9, 1, 3, 'CITY', '2011-01-01', '0000-00-00', 'H-10395616', NULL, '5MX023970', 'eb4bd075-81d0-491b-b04d-959a7011fb7a_B_1377_PQA.pdf', '5MX023970', 'MH35MX0012K023739', '', 'B 1377 PQA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:47:57'),
(12, 1, 3, 'ACCORD VTI-L', '2013-04-24', '2013-04-24', 'K-10763000', NULL, '5BP002556', '7e2ae59e-6577-4a28-9c53-a843203670ce_B_1819_PQA.jpeg', '5BP002556', 'MH35BP0012K002515', 'B 1195 RFK', 'B 1819 PQA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-02 20:52:30'),
(16, 1, 3, 'CIVIC', '2019-01-01', '2013-04-24', 'K-10762998', NULL, 'L2393335K', '6ddb6dc4-a786-4d1b-9e8f-cd7438e765ba_B_1816_PQA.jpeg', 'L2393335K', 'L2139749', '', 'B 1816 PQA', 8, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:51:26'),
(19, 1, 3, 'HRV 115 ECVT', '2015-10-03', '2015-10-03', 'M-02077712', NULL, '5MX023687', '7d217356-9d7a-4821-a68c-4f4091a33043_B_1055_PQS.jpeg', '5MX023687', 'MH35MX0012K023587', '', 'B 1055 PQS', 10, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:50:36'),
(20, 1, 3, 'HRV ', '2015-01-01', '2015-01-01', 'M-02081330', NULL, '5MX023970', 'd42622ba-2d7d-4af4-8c71-4f1500c2811c_B_1056_PQS.jpeg', '5MX023970', 'MH35MX0012K023739', '', 'B 1056 PQS', 11, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:10:42'),
(21, 1, 3, 'HRV ', '2015-10-30', '2015-10-30', 'K-02645907', NULL, '5BP001793', 'beaed07c-6708-4a13-bb55-d62b2f3f025d_B_1100_PQS.jpeg', '5BP001793', 'MH35BP0012K001790', '', 'B 1100 PQS', 7, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:10:25'),
(22, 1, 3, 'HRV ', '2019-01-01', '0000-00-00', 'M-02081331', NULL, '5BP002338', '905feca1-09c1-4359-bdd8-0bf14ea313a2_B_1057_PQS.jpeg', '5BP002338', 'MH35BP0012K002310', '', 'B 1057 PQS', 7, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:50:05'),
(28, 1, 3, 'ACCORD VTI-L', '2019-01-01', '2018-12-05', 'O-06071915', NULL, 'L2392947K', '97b54c3b-596a-409f-b5fa-d38024b50257_B_1319_PQB.jpeg', 'L2392947K', 'L2135714', 'B 1686 RFO', 'B 1319 PQB', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-10-20 13:16:53'),
(32, 1, 5, 'APV', '2019-01-01', '2014-09-09', 'L-04638828', NULL, '46350605K', 'c2e3c6ac-96cf-414a-8d09-3fec3e9e5886_B_9665_PTA.jpeg', '46350605K', 'RS10060467', '', 'B 9665 PTA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:08:30'),
(33, 1, 12, 'MICROBUS', '2019-01-01', '2015-06-22', 'L-13977548', NULL, '46350115K', '6bff8c76-8ac3-42ce-ad99-42254168503d_B_7391_PPA.jpeg', '46350115K', 'RS10060533', '', 'B 7391 PPA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:08:17'),
(39, 1, 1, 'KIJANG INNOVA ', '2019-01-01', '0000-00-00', 'N-04775885', NULL, '5BP001793', 'b114e302-921c-4f7e-94cf-67361971665a_B_1969_PQS.jpeg', '5BP001793', 'MH35BP0012K001790', '', 'B 1969 PQS', 9, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:06:29'),
(46, 1, 1, 'KIJANG INNOVA ', '2019-01-01', '2017-07-26', 'N-04775964', NULL, 'L2392947K', '646c436b-9a9f-4980-8efd-566c56e05466_B_1978_PQS.jpeg', 'L2392947K', 'L2135714', 'B 1045 RFK', 'B 1978 PQS', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:04:04'),
(47, 1, 1, 'KIJANG INNOVA ', '2019-01-01', '0000-00-00', 'N-04776280', NULL, 'L2393436K', '6b008519-d231-4090-89c4-03713b31a51a_B_1979_PQS.jpeg', 'L2393436K', 'L2140400', '', 'B 1979 PQS', 8, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:03:46'),
(51, 1, 1, 'KIJANG LGX', '2019-01-01', '0000-00-00', 'E 5547133', NULL, '5MX023970', '4cbd9240-d91a-4852-adaa-220c520573db_B_1269_GQ.jpeg', '5MX023970', 'MH35MX0012K023739', '', 'B 1269 GQ', 7, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:01:52'),
(52, 1, 1, 'KIJANG', '2019-01-01', NULL, 'E 9970744', NULL, '5BP001793', '0b6faf05-4df2-4987-b912-3792a8eeef6d_B_1277_GQ.jpeg', '5BP001793', 'MH35BP0012K001790', NULL, 'B 1277 GQ', 9, NULL, 1, NULL, '2020-10-13 19:07:15', NULL, '2020-10-13 19:07:15'),
(54, 1, 1, 'KIJANG', '2019-01-01', '0000-00-00', 'E 5547316', NULL, '5BP002556', '0276a054-2056-4e29-a57a-965c39003faf_B_1270_GQ.jpeg', '5BP002556', 'MH35BP0012K002515', '', 'B 1270 GQ', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 15:00:59'),
(59, 1, 1, 'KIJANG INNOVA ', '2019-01-01', '0000-00-00', 'D 7554863', NULL, 'L2392947K', '1ae31103-189b-4441-80fa-7216987032fc_B_8917_WU.jpeg', 'L2392947K', 'L2135714', '', 'B 8917 WU', 7, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:37:15'),
(62, 1, 7, 'H1', '2019-01-01', '0000-00-00', 'H-05461632', NULL, 'SE242128K', 'e7ce60f4-2ee0-4180-969d-b83574233207_B_1171_PQO.jpeg', 'SE242128K', 'L25041236K', '', 'B 1171 PQO', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:36:50'),
(72, 1, 11, 'MICROBUS', '2019-01-01', '0000-00-00', 'D 9616272', NULL, '5BP002338', '4195e0cb-5cb2-4ca7-a09f-965774140a91_B_1727_VQ.jpeg', '5BP002338', 'MH35BP0012K002310', '', 'B 1727 VQ', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:30:43'),
(73, 1, 11, 'MICROBUS', '2019-01-01', '2006-05-01', 'D 9616270', NULL, '5BP002556', 'b8f3b435-8829-483e-b9d7-6185086e5818_B_1722_VQ.jpeg', '5BP002556', 'MH35BP0012K002515', '', 'B 1722 VQ', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 12:13:10'),
(74, 1, 12, 'MICROBUS', '2019-01-01', '2013-12-18', 'K-06329208', NULL, '5BP002543', '59573bb9-dbd6-4812-88e7-38dafb7f22f2_B_7292_PPA.jpeg', '5BP002543', 'MH35BP0012K002534', '', 'B 7292 PPA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 12:13:00'),
(75, 1, 11, 'MICROBUS', '2019-01-01', '2012-12-26', 'J-04992038', NULL, '3KA459391', '5aa8eead-755a-4414-a7ca-09702e007ccf_B_7062_PPA.jpeg', '3KA459391', 'MH33KA0081K485099', '', 'B 7062 PPA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 12:12:51'),
(76, 1, 12, 'MICROBUS', '2014-09-26', '0000-00-00', 'L-04663828', NULL, 'L2393794K', '34469ce6-6353-40b8-8a0b-ef4184b5ae8b_B_7312_PPA.jpeg', 'L2393794K', 'L2139194', '', 'B 7312 PPA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 12:12:06'),
(78, 1, 1, 'HIACE', '2016-06-11', '0000-00-00', 'M-07823724', NULL, 'L2393335K', '1264dd2e-5d06-4d6d-aa84-3a7dcb87ce92__B_7514_PPA.jpeg', 'L2393335K', 'L2139749', '', ' B 7514 PPA', 6, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 12:01:43'),
(79, 1, 1, 'KIJANG INNOVA ', '2019-01-01', '2013-06-29', 'K-02645907', NULL, 'ITR7588679', '434e1719-69c7-4193-a475-31aa415d3616_B_1455_PQQ.jpeg', 'ITR7588679', 'MHFXW43GID4079503', '', 'B 1455 PQQ', 7, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 14:59:53'),
(80, 1, 13, 'XENIA', '2006-06-28', '0000-00-00', '', NULL, 'DN32939', 'dee4e604-bd5f-45d5-92d7-4c48525fec68_B_2144_UQ.jpeg', 'DN32939', 'MHKFMRCEJ6K004212', '', 'B 2144 UQ', 7, NULL, 1, NULL, '2020-10-13 19:07:15', 1, '2020-11-03 10:58:10'),
(84, 1, 2, 'COLT DIESEL', '2017-11-29', '0000-00-00', 'N-05405959', NULL, '-', NULL, '4034TR98183', 'MHMFE84PBHJ009086', '', '', 6, NULL, 1, 1, '2020-11-03 15:23:18', 1, '2020-11-03 15:23:18'),
(85, 1, 2, 'COLT DIESEL', '2017-11-29', '0000-00-00', '-', NULL, '-', NULL, '-', '-', '', '', 6, NULL, 1, 1, '2020-11-03 15:33:04', 1, '2020-11-03 15:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `nama`) VALUES
(1, 'TOYOTA'),
(2, 'MITSHUBISHI'),
(3, 'HONDA'),
(4, 'FORD'),
(5, 'SUZUKI'),
(6, 'KIJANG'),
(7, 'HYUNDAI'),
(8, 'DATSUN'),
(9, 'ISUZU'),
(10, 'MERCY'),
(11, 'MITSUBISHI'),
(12, 'HINO'),
(13, 'DAIHATSU');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1602590828),
('m130524_201442_init', 1602590829),
('m140506_102106_rbac_init', 1602590829),
('m151024_072453_create_route_table', 1602590829),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1602590829),
('m180523_151638_rbac_updates_indexes_without_prefix', 1602590829),
('m190124_110200_add_verification_token_column_to_user_table', 1602590830),
('m200322_073653_seed', 1602590833),
('m200405_021003_create_menu_table', 1602590833),
('m200409_110543_rbac_update_mssql_trigger', 1602590833),
('m200927_105255_create_kendaraan_table', 1602590833),
('m200927_105313_create_peminjam_table', 1602590834),
('m200927_135849_create_merk_table', 1602590834),
('m200927_135931_create_unit_table', 1602590834),
('m200928_030421_create_seeder2', 1602590835),
('m201012_100348_create_pajak_table', 1602590835),
('m201012_111726_create_ttd_table', 1602590835);

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_menu`
--

INSERT INTO `mst_menu` (`id`, `name`, `parent`, `order`, `icon`, `route`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
('0b42c6f3-2e6d-49d1-a3a2-d2bba1883b7f', 'Tambah Menu', '20ef6022-13ef-4807-b255-586299587b2f', 7, 'fa fa-circle-thin', '/utilitas/menu/create', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('0f793f72-602f-499f-819c-546aeecc657d', 'Tambah Akun', '20ef6022-13ef-4807-b255-586299587b2f', 5, 'fa fa-circle-thin', '/utilitas/user/create', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('1140db48-2f32-49f3-9db0-31605591eaaa', 'TTD', '1333b818-85f2-4149-b81c-f871a0dc84f1', 3, 'fa fa-circle-thin', '/ttd/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('1333b818-85f2-4149-b81c-f871a0dc84f1', 'Master', NULL, 4, 'fa fa-book', '#', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('20ef6022-13ef-4807-b255-586299587b2f', 'Utilitas', NULL, 5, 'fa fa-wrench', '#', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('5674e50a-6429-412f-a273-6a0de1c089d9', 'Daftar Akun', '20ef6022-13ef-4807-b255-586299587b2f', 6, 'fa fa-circle-thin', '/utilitas/user/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('725777aa-bc39-4f5b-87a8-4f682f8e36a7', 'Merk', '1333b818-85f2-4149-b81c-f871a0dc84f1', 2, 'fa fa-circle-thin', '/merk/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('7997f623-fd31-426c-bf2f-fa9636f8c1ef', 'SPPKD', NULL, 3, 'fa fa-share', '/peminjam/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('8898d226-c0f5-4012-a7e4-b52c0e8a01d1', 'Daftar Hak Akses', '20ef6022-13ef-4807-b255-586299587b2f', 2, 'fa fa-circle-thin', '/utilitas/role/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('8cba70e7-6576-4dc0-9b1c-263f888b70ee', 'Kendaraan', NULL, 2, 'fa fa-taxi', '/kendaraan/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('978a276e-e291-475b-9005-43e7e40e13fc', 'Tambah Hak Akses', '20ef6022-13ef-4807-b255-586299587b2f', 1, 'fa fa-circle-thin', '/utilitas/role/create', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('9ab1074a-84f2-4071-9ea4-f33f01d53724', 'Daftar Menu', '20ef6022-13ef-4807-b255-586299587b2f', 8, 'fa fa-circle-thin', '/utilitas/menu/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('9d746256-e05b-455b-9bde-3aaa814070af', 'Tambah Hak Izin', '20ef6022-13ef-4807-b255-586299587b2f', 3, 'fa fa-circle-thin', '/utilitas/route/create', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('ae9bc9b9-4f3d-4ef9-8b56-04da5d439c8b', 'Daftar Hak Izin', '20ef6022-13ef-4807-b255-586299587b2f', 4, 'fa fa-circle-thin', '/utilitas/route/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('b40850a9-6432-4813-9b07-aabf28ea03e3', 'Dashboard', NULL, 1, 'fa fa-cog', '/site/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1),
('fc7b0b3d-ba2c-4ee1-90cf-939ba742f5b7', 'Unit', '1333b818-85f2-4149-b81c-f871a0dc84f1', 1, 'fa fa-circle-thin', '/unit/index', '2020-10-13 19:07:13', 1, '2020-10-13 19:07:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pajak`
--

CREATE TABLE `pajak` (
  `id` int(11) NOT NULL,
  `kendaraan_id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `is_notif` int(11) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pajak`
--

INSERT INTO `pajak` (`id`, `kendaraan_id`, `tanggal`, `jenis`, `status`, `is_notif`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 81, '2021-10-20', 1, 0, 0, 1, '2020-10-14 17:59:22', 1, '2020-10-14 17:59:22'),
(2, 81, '2025-10-20', 2, 0, 0, 1, '2020-10-14 17:59:22', 1, '2020-10-14 17:59:22'),
(3, 81, '2027-10-20', 3, 0, 0, 1, '2020-10-14 17:59:22', 1, '2020-10-14 17:59:22'),
(4, 82, '2021-10-20', 1, 0, 0, 1, '2020-10-14 18:12:23', 1, '2020-10-14 18:12:23'),
(5, 82, '2025-10-20', 2, 0, 0, 1, '2020-10-14 18:12:23', 1, '2020-10-14 18:12:23'),
(6, 82, '2027-10-20', 3, 0, 0, 1, '2020-10-14 18:12:23', 1, '2020-10-14 18:12:23'),
(7, 83, '2021-10-01', 1, 0, 0, 1, '2020-10-14 18:15:58', 1, '2020-10-14 18:15:58'),
(8, 83, '2025-10-01', 2, 0, 0, 1, '2020-10-14 18:15:58', 1, '2020-10-14 18:15:58'),
(9, 83, '2027-10-01', 3, 0, 0, 1, '2020-10-14 18:15:58', 1, '2020-10-14 18:15:58'),
(10, 28, '2020-01-01', 1, 0, 0, 1, '2020-10-20 13:16:53', 1, '2020-10-20 13:16:53'),
(11, 28, '2024-01-01', 2, 0, 0, 1, '2020-10-20 13:16:53', 1, '2020-10-20 13:16:53'),
(12, 28, '2026-01-01', 3, 0, 0, 1, '2020-10-20 13:16:53', 1, '2020-10-20 13:16:53'),
(13, 12, '2020-01-01', 1, 0, 0, 1, '2020-10-20 13:33:03', 1, '2020-10-20 13:33:03'),
(14, 12, '2024-01-01', 2, 0, 0, 1, '2020-10-20 13:33:03', 1, '2020-10-20 13:33:03'),
(15, 12, '2026-01-01', 3, 0, 0, 1, '2020-10-20 13:33:03', 1, '2020-10-20 13:33:03'),
(16, 10, '2020-01-01', 1, 0, 0, 1, '2020-10-20 13:41:17', 1, '2020-10-20 13:41:17'),
(17, 10, '2024-01-01', 2, 0, 0, 1, '2020-10-20 13:41:17', 1, '2020-10-20 13:41:17'),
(18, 10, '2026-01-01', 3, 0, 0, 1, '2020-10-20 13:41:17', 1, '2020-10-20 13:41:17'),
(19, 11, '2020-01-01', 1, 0, 0, 1, '2020-10-20 14:08:45', 1, '2020-10-20 14:08:45'),
(20, 11, '2024-01-01', 2, 0, 0, 1, '2020-10-20 14:08:45', 1, '2020-10-20 14:08:45'),
(21, 11, '2026-01-01', 3, 0, 0, 1, '2020-10-20 14:08:45', 1, '2020-10-20 14:08:45'),
(22, 13, '2020-01-01', 1, 0, 0, 1, '2020-10-20 14:15:22', 1, '2020-10-20 14:15:22'),
(23, 13, '2024-01-01', 2, 0, 0, 1, '2020-10-20 14:15:22', 1, '2020-10-20 14:15:22'),
(24, 13, '2026-01-01', 3, 0, 0, 1, '2020-10-20 14:15:22', 1, '2020-10-20 14:15:22'),
(25, 14, '2020-01-01', 1, 0, 0, 1, '2020-10-20 14:19:28', 1, '2020-10-20 14:19:28'),
(26, 14, '2024-01-01', 2, 0, 0, 1, '2020-10-20 14:19:28', 1, '2020-10-20 14:19:28'),
(27, 14, '2026-01-01', 3, 0, 0, 1, '2020-10-20 14:19:28', 1, '2020-10-20 14:19:28'),
(28, 15, '2020-01-01', 1, 0, 0, 1, '2020-10-20 14:42:06', 1, '2020-10-20 14:42:06'),
(29, 15, '2024-01-01', 2, 0, 0, 1, '2020-10-20 14:42:06', 1, '2020-10-20 14:42:06'),
(30, 15, '2026-01-01', 3, 0, 0, 1, '2020-10-20 14:42:06', 1, '2020-10-20 14:42:06'),
(31, 51, '2020-01-01', 1, 0, 0, 1, '2020-10-20 16:34:37', 1, '2020-10-20 16:34:37'),
(32, 51, '2024-01-01', 2, 0, 0, 1, '2020-10-20 16:34:37', 1, '2020-10-20 16:34:37'),
(33, 51, '2026-01-01', 3, 0, 0, 1, '2020-10-20 16:34:37', 1, '2020-10-20 16:34:37'),
(34, 2, '2020-01-01', 1, 0, 0, 1, '2020-10-20 21:55:24', 1, '2020-10-20 21:55:24'),
(35, 2, '2024-01-01', 2, 0, 0, 1, '2020-10-20 21:55:24', 1, '2020-10-20 21:55:24'),
(36, 2, '2026-01-01', 3, 0, 0, 1, '2020-10-20 21:55:24', 1, '2020-10-20 21:55:24'),
(37, 5, '2020-01-01', 1, 0, 0, 1, '2020-10-20 22:38:05', 1, '2020-10-20 22:38:05'),
(38, 5, '2024-01-01', 2, 0, 0, 1, '2020-10-20 22:38:05', 1, '2020-10-20 22:38:05'),
(39, 5, '2026-01-01', 3, 0, 0, 1, '2020-10-20 22:38:05', 1, '2020-10-20 22:38:05'),
(40, 45, '2020-01-01', 1, 0, 0, 1, '2020-10-20 23:11:45', 1, '2020-10-20 23:11:45'),
(41, 45, '2024-01-01', 2, 0, 0, 1, '2020-10-20 23:11:45', 1, '2020-10-20 23:11:45'),
(42, 45, '2026-01-01', 3, 0, 0, 1, '2020-10-20 23:11:45', 1, '2020-10-20 23:11:45'),
(43, 33, '2020-01-01', 1, 0, 0, 1, '2020-10-21 09:19:02', 1, '2020-10-21 09:19:02'),
(44, 33, '2024-01-01', 2, 0, 0, 1, '2020-10-21 09:19:02', 1, '2020-10-21 09:19:02'),
(45, 33, '2026-01-01', 3, 0, 0, 1, '2020-10-21 09:19:02', 1, '2020-10-21 09:19:02'),
(46, 59, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:11:51', 1, '2020-10-22 19:11:51'),
(47, 59, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:11:51', 1, '2020-10-22 19:11:51'),
(48, 59, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:11:51', 1, '2020-10-22 19:11:51'),
(49, 79, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:13:40', 1, '2020-10-22 19:13:40'),
(50, 79, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:13:40', 1, '2020-10-22 19:13:40'),
(51, 79, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:13:40', 1, '2020-10-22 19:13:40'),
(52, 47, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:14:27', 1, '2020-10-22 19:14:27'),
(53, 47, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:14:27', 1, '2020-10-22 19:14:27'),
(54, 47, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:14:27', 1, '2020-10-22 19:14:27'),
(55, 39, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:15:24', 1, '2020-10-22 19:15:24'),
(56, 39, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:15:24', 1, '2020-10-22 19:15:24'),
(57, 39, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:15:24', 1, '2020-10-22 19:15:24'),
(58, 19, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:17:04', 1, '2020-10-22 19:17:04'),
(59, 19, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:17:04', 1, '2020-10-22 19:17:04'),
(60, 19, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:17:04', 1, '2020-10-22 19:17:04'),
(61, 46, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:27:04', 1, '2020-10-22 19:27:04'),
(62, 46, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:27:04', 1, '2020-10-22 19:27:04'),
(63, 46, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:27:04', 1, '2020-10-22 19:27:04'),
(64, 37, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:32:48', 1, '2020-10-22 19:32:48'),
(65, 37, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:32:48', 1, '2020-10-22 19:32:48'),
(66, 37, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:32:48', 1, '2020-10-22 19:32:48'),
(67, 40, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:33:26', 1, '2020-10-22 19:33:26'),
(68, 40, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:33:26', 1, '2020-10-22 19:33:26'),
(69, 40, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:33:26', 1, '2020-10-22 19:33:26'),
(70, 35, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:34:09', 1, '2020-10-22 19:34:09'),
(71, 35, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:34:09', 1, '2020-10-22 19:34:09'),
(72, 35, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:34:09', 1, '2020-10-22 19:34:09'),
(73, 36, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:35:20', 1, '2020-10-22 19:35:20'),
(74, 36, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:35:20', 1, '2020-10-22 19:35:20'),
(75, 36, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:35:20', 1, '2020-10-22 19:35:20'),
(76, 38, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:35:44', 1, '2020-10-22 19:35:44'),
(77, 38, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:35:44', 1, '2020-10-22 19:35:44'),
(78, 38, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:35:44', 1, '2020-10-22 19:35:44'),
(79, 42, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:36:23', 1, '2020-10-22 19:36:23'),
(80, 42, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:36:23', 1, '2020-10-22 19:36:23'),
(81, 42, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:36:23', 1, '2020-10-22 19:36:23'),
(82, 43, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:36:45', 1, '2020-10-22 19:36:45'),
(83, 43, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:36:45', 1, '2020-10-22 19:36:45'),
(84, 43, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:36:45', 1, '2020-10-22 19:36:45'),
(85, 41, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:41:10', 1, '2020-10-22 19:41:10'),
(86, 41, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:41:10', 1, '2020-10-22 19:41:10'),
(87, 41, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:41:10', 1, '2020-10-22 19:41:10'),
(88, 58, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:42:23', 1, '2020-10-22 19:42:23'),
(89, 58, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:42:23', 1, '2020-10-22 19:42:23'),
(90, 58, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:42:23', 1, '2020-10-22 19:42:23'),
(91, 44, '2020-01-01', 1, 0, 0, 1, '2020-10-22 19:43:24', 1, '2020-10-22 19:43:24'),
(92, 44, '2024-01-01', 2, 0, 0, 1, '2020-10-22 19:43:24', 1, '2020-10-22 19:43:24'),
(93, 44, '2026-01-01', 3, 0, 0, 1, '2020-10-22 19:43:24', 1, '2020-10-22 19:43:24'),
(94, 75, '2020-01-01', 1, 0, 0, 1, '2020-10-23 11:17:31', 1, '2020-10-23 11:17:31'),
(95, 75, '2024-01-01', 2, 0, 0, 1, '2020-10-23 11:17:31', 1, '2020-10-23 11:17:31'),
(96, 75, '2026-01-01', 3, 0, 0, 1, '2020-10-23 11:17:31', 1, '2020-10-23 11:17:31'),
(97, 73, '2020-01-01', 1, 0, 0, 1, '2020-10-23 11:18:58', 1, '2020-10-23 11:18:58'),
(98, 73, '2024-01-01', 2, 0, 0, 1, '2020-10-23 11:18:58', 1, '2020-10-23 11:18:58'),
(99, 73, '2026-01-01', 3, 0, 0, 1, '2020-10-23 11:18:58', 1, '2020-10-23 11:18:58'),
(100, 76, '2020-01-01', 1, 0, 0, 1, '2020-10-23 11:19:31', 1, '2020-10-23 11:19:31'),
(101, 76, '2024-01-01', 2, 0, 0, 1, '2020-10-23 11:19:31', 1, '2020-10-23 11:19:31'),
(102, 76, '2026-01-01', 3, 0, 0, 1, '2020-10-23 11:19:31', 1, '2020-10-23 11:19:31'),
(103, 72, '2020-01-01', 1, 0, 0, 1, '2020-10-23 11:19:54', 1, '2020-10-23 11:19:54'),
(104, 72, '2024-01-01', 2, 0, 0, 1, '2020-10-23 11:19:54', 1, '2020-10-23 11:19:54'),
(105, 72, '2026-01-01', 3, 0, 0, 1, '2020-10-23 11:19:54', 1, '2020-10-23 11:19:54'),
(106, 74, '2020-01-01', 1, 0, 0, 1, '2020-10-23 11:20:17', 1, '2020-10-23 11:20:17'),
(107, 74, '2024-01-01', 2, 0, 0, 1, '2020-10-23 11:20:17', 1, '2020-10-23 11:20:17'),
(108, 74, '2026-01-01', 3, 0, 0, 1, '2020-10-23 11:20:17', 1, '2020-10-23 11:20:17'),
(109, 6, '2020-01-01', 1, 0, 0, 1, '2020-10-23 11:21:07', 1, '2020-10-23 11:21:07'),
(110, 6, '2024-01-01', 2, 0, 0, 1, '2020-10-23 11:21:07', 1, '2020-10-23 11:21:07'),
(111, 6, '2026-01-01', 3, 0, 0, 1, '2020-10-23 11:21:07', 1, '2020-10-23 11:21:07'),
(112, 1, '2020-01-01', 1, 0, 0, 1, '2020-11-01 22:37:19', 1, '2020-11-01 22:37:19'),
(113, 1, '2024-01-01', 2, 0, 0, 1, '2020-11-01 22:37:19', 1, '2020-11-01 22:37:19'),
(114, 1, '2026-01-01', 3, 0, 0, 1, '2020-11-01 22:37:19', 1, '2020-11-01 22:37:19'),
(115, 3, '2020-01-01', 1, 0, 0, 1, '2020-11-01 23:37:56', 1, '2020-11-01 23:37:56'),
(116, 3, '2024-01-01', 2, 0, 0, 1, '2020-11-01 23:37:56', 1, '2020-11-01 23:37:56'),
(117, 3, '2026-01-01', 3, 0, 0, 1, '2020-11-01 23:37:56', 1, '2020-11-01 23:37:56'),
(118, 4, '2020-01-01', 1, 0, 0, 1, '2020-11-01 23:44:50', 1, '2020-11-01 23:44:50'),
(119, 4, '2024-01-01', 2, 0, 0, 1, '2020-11-01 23:44:50', 1, '2020-11-01 23:44:50'),
(120, 4, '2026-01-01', 3, 0, 0, 1, '2020-11-01 23:44:50', 1, '2020-11-01 23:44:50'),
(121, 8, '2020-01-01', 1, 0, 0, 1, '2020-11-02 00:00:32', 1, '2020-11-02 00:00:32'),
(122, 8, '2024-01-01', 2, 0, 0, 1, '2020-11-02 00:00:32', 1, '2020-11-02 00:00:32'),
(123, 8, '2026-01-01', 3, 0, 0, 1, '2020-11-02 00:00:32', 1, '2020-11-02 00:00:32'),
(124, 9, '2020-01-01', 1, 0, 0, 1, '2020-11-02 00:06:17', 1, '2020-11-02 00:06:17'),
(125, 9, '2024-01-01', 2, 0, 0, 1, '2020-11-02 00:06:17', 1, '2020-11-02 00:06:17'),
(126, 9, '2026-01-01', 3, 0, 0, 1, '2020-11-02 00:06:17', 1, '2020-11-02 00:06:17'),
(127, 7, '2011-02-01', 1, 0, 0, 1, '2020-11-02 07:53:16', 1, '2020-11-02 07:53:16'),
(128, 7, '2015-02-01', 2, 0, 0, 1, '2020-11-02 07:53:16', 1, '2020-11-02 07:53:16'),
(129, 7, '2017-02-01', 3, 0, 0, 1, '2020-11-02 07:53:16', 1, '2020-11-02 07:53:16'),
(130, 17, '2016-06-25', 1, 0, 0, 1, '2020-11-02 20:59:39', 1, '2020-11-02 20:59:39'),
(131, 17, '2020-06-25', 2, 0, 0, 1, '2020-11-02 20:59:39', 1, '2020-11-02 20:59:39'),
(132, 17, '2022-06-25', 3, 0, 0, 1, '2020-11-02 20:59:39', 1, '2020-11-02 20:59:39'),
(133, 18, '2017-09-27', 1, 0, 0, 1, '2020-11-02 21:01:22', 1, '2020-11-02 21:01:22'),
(134, 18, '2021-09-27', 2, 0, 0, 1, '2020-11-02 21:01:22', 1, '2020-11-02 21:01:22'),
(135, 18, '2023-09-27', 3, 0, 0, 1, '2020-11-02 21:01:22', 1, '2020-11-02 21:01:22'),
(136, 20, '2016-01-01', 1, 0, 0, 1, '2020-11-02 21:04:44', 1, '2020-11-02 21:04:44'),
(137, 20, '2020-01-01', 2, 0, 0, 1, '2020-11-02 21:04:44', 1, '2020-11-02 21:04:44'),
(138, 20, '2022-01-01', 3, 0, 0, 1, '2020-11-02 21:04:44', 1, '2020-11-02 21:04:44'),
(139, 21, '2016-10-30', 1, 0, 0, 1, '2020-11-02 21:08:00', 1, '2020-11-02 21:08:00'),
(140, 21, '2020-10-30', 2, 0, 0, 1, '2020-11-02 21:08:00', 1, '2020-11-02 21:08:00'),
(141, 21, '2022-10-30', 3, 0, 0, 1, '2020-11-02 21:08:00', 1, '2020-11-02 21:08:00'),
(142, 80, '2007-06-28', 1, 0, 0, 1, '2020-11-03 10:58:04', 1, '2020-11-03 10:58:04'),
(143, 80, '2011-06-28', 2, 0, 0, 1, '2020-11-03 10:58:04', 1, '2020-11-03 10:58:04'),
(144, 80, '2013-06-28', 3, 0, 0, 1, '2020-11-03 10:58:04', 1, '2020-11-03 10:58:04'),
(145, 78, '2017-06-11', 1, 0, 0, 1, '2020-11-03 12:01:43', 1, '2020-11-03 12:01:43'),
(146, 78, '2021-06-11', 2, 0, 0, 1, '2020-11-03 12:01:43', 1, '2020-11-03 12:01:43'),
(147, 78, '2023-06-11', 3, 0, 0, 1, '2020-11-03 12:01:43', 1, '2020-11-03 12:01:43'),
(148, 77, '1997-04-21', 1, 0, 0, 1, '2020-11-03 12:06:46', 1, '2020-11-03 12:06:46'),
(149, 77, '2001-04-21', 2, 0, 0, 1, '2020-11-03 12:06:46', 1, '2020-11-03 12:06:46'),
(150, 77, '2003-04-21', 3, 0, 0, 1, '2020-11-03 12:06:46', 1, '2020-11-03 12:06:46'),
(151, 62, '2020-01-01', 1, 0, 0, 1, '2020-11-03 14:36:50', 1, '2020-11-03 14:36:50'),
(152, 62, '2024-01-01', 2, 0, 0, 1, '2020-11-03 14:36:50', 1, '2020-11-03 14:36:50'),
(153, 62, '2026-01-01', 3, 0, 0, 1, '2020-11-03 14:36:50', 1, '2020-11-03 14:36:50'),
(154, 25, '2020-01-01', 1, 0, 0, 1, '2020-11-03 14:48:53', 1, '2020-11-03 14:48:53'),
(155, 25, '2024-01-01', 2, 0, 0, 1, '2020-11-03 14:48:53', 1, '2020-11-03 14:48:53'),
(156, 25, '2026-01-01', 3, 0, 0, 1, '2020-11-03 14:48:53', 1, '2020-11-03 14:48:53'),
(157, 24, '2020-01-01', 1, 0, 0, 1, '2020-11-03 14:49:10', 1, '2020-11-03 14:49:10'),
(158, 24, '2024-01-01', 2, 0, 0, 1, '2020-11-03 14:49:10', 1, '2020-11-03 14:49:10'),
(159, 24, '2026-01-01', 3, 0, 0, 1, '2020-11-03 14:49:10', 1, '2020-11-03 14:49:10'),
(160, 23, '2020-01-01', 1, 0, 0, 1, '2020-11-03 14:49:25', 1, '2020-11-03 14:49:25'),
(161, 23, '2024-01-01', 2, 0, 0, 1, '2020-11-03 14:49:25', 1, '2020-11-03 14:49:25'),
(162, 23, '2026-01-01', 3, 0, 0, 1, '2020-11-03 14:49:25', 1, '2020-11-03 14:49:25'),
(163, 22, '2020-01-01', 1, 0, 0, 1, '2020-11-03 14:50:05', 1, '2020-11-03 14:50:05'),
(164, 22, '2024-01-01', 2, 0, 0, 1, '2020-11-03 14:50:05', 1, '2020-11-03 14:50:05'),
(165, 22, '2026-01-01', 3, 0, 0, 1, '2020-11-03 14:50:05', 1, '2020-11-03 14:50:05'),
(166, 16, '2020-01-01', 1, 0, 0, 1, '2020-11-03 14:51:26', 1, '2020-11-03 14:51:26'),
(167, 16, '2024-01-01', 2, 0, 0, 1, '2020-11-03 14:51:26', 1, '2020-11-03 14:51:26'),
(168, 16, '2026-01-01', 3, 0, 0, 1, '2020-11-03 14:51:26', 1, '2020-11-03 14:51:26'),
(169, 54, '2020-01-01', 1, 0, 0, 1, '2020-11-03 15:00:59', 1, '2020-11-03 15:00:59'),
(170, 54, '2024-01-01', 2, 0, 0, 1, '2020-11-03 15:00:59', 1, '2020-11-03 15:00:59'),
(171, 54, '2026-01-01', 3, 0, 0, 1, '2020-11-03 15:00:59', 1, '2020-11-03 15:00:59'),
(172, 32, '2020-01-01', 1, 0, 0, 1, '2020-11-03 15:08:30', 1, '2020-11-03 15:08:30'),
(173, 32, '2024-01-01', 2, 0, 0, 1, '2020-11-03 15:08:30', 1, '2020-11-03 15:08:30'),
(174, 32, '2026-01-01', 3, 0, 0, 1, '2020-11-03 15:08:30', 1, '2020-11-03 15:08:30'),
(175, 84, '2018-11-29', 1, 0, 0, 1, '2020-11-03 15:23:18', 1, '2020-11-03 15:23:18'),
(176, 84, '2022-11-29', 2, 0, 0, 1, '2020-11-03 15:23:18', 1, '2020-11-03 15:23:18'),
(177, 84, '2024-11-29', 3, 0, 0, 1, '2020-11-03 15:23:18', 1, '2020-11-03 15:23:18'),
(178, 85, '2018-11-29', 1, 0, 0, 1, '2020-11-03 15:33:04', 1, '2020-11-03 15:33:04'),
(179, 85, '2022-11-29', 2, 0, 0, 1, '2020-11-03 15:33:04', 1, '2020-11-03 15:33:04'),
(180, 85, '2024-11-29', 3, 0, 0, 1, '2020-11-03 15:33:04', 1, '2020-11-03 15:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id` int(11) NOT NULL,
  `kendaraan_id` int(11) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama_peminjam` varchar(255) DEFAULT NULL,
  `alamat_peminjam` varchar(255) DEFAULT NULL,
  `email_peminjam` varchar(255) DEFAULT NULL,
  `pangkat_peminjam` varchar(255) DEFAULT NULL,
  `golongan_peminjam` varchar(255) DEFAULT NULL,
  `jabatan_peminjam` varchar(255) DEFAULT NULL,
  `nip_ttd` varchar(255) DEFAULT NULL,
  `nama_ttd` varchar(255) DEFAULT NULL,
  `pangkat_ttd` varchar(255) DEFAULT NULL,
  `golongan_ttd` varchar(255) DEFAULT NULL,
  `jabatan_ttd` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `peruntukan` varchar(255) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id`, `kendaraan_id`, `nip`, `nama_peminjam`, `alamat_peminjam`, `email_peminjam`, `pangkat_peminjam`, `golongan_peminjam`, `jabatan_peminjam`, `nip_ttd`, `nama_ttd`, `pangkat_ttd`, `golongan_ttd`, `jabatan_ttd`, `email`, `no_telp`, `peruntukan`, `unit_id`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(5, 28, '357803240861000', 'Ir. R. AGUS H. PURNOMO, MM.', 'Jl. Paus Dalam Rawamangun\r\nPulogadung, Jakarta Timur\r\n\r\n', 'ragushp@dephub.go.id', 'Pembina Utama Madya (IV/d)', 'IV/d', 'Direktur Jenderal Perhubungan Laut', '196705211997031001', 'ANDI HARTONO, ST', 'Pembina Utama Muda', 'IV/c', '196705211997031001', NULL, '08123217616', 'KENDARAAN DINAS JABATAN', 6, 2, 1, '2020-10-20 13:20:55', 1, '2020-11-01 20:18:58'),
(6, 12, '196705211997031001', 'ANDI HARTONO, ST', 'Griya Citayam Asri J-4 Rt.6/05, Bogor, Jawa Barat\r\n\r\n', 'andi_hartono@dephub.go.id', 'Pembina Utama Muda', 'IV/c', 'Sekretaris Direktorat Jenderal Perhubungan Laut', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '081310397647', 'Kendaraan Dinas Jabatan', 6, 2, 1, '2020-10-20 13:37:24', 1, '2020-10-20 13:37:24'),
(12, 46, '197304171993031001', 'WIDI SUPRIYANTO, SE., M.MTR', 'Komp. Narogong Indah F.25 No. 3, Rawa Lumbu, Bekasi, Jawa Barat', 'widi_supriyanto@dephub.go.id', 'Pembina', 'IV/a', 'Kepala Bagian Umum dan Perlengkapan, Setditjen Hubla', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '-', 'KENDARAAN DINAS OPERASIONAL \r\n', 6, 1, 1, '2020-10-20 14:51:57', 1, '2020-10-23 11:32:15'),
(13, 9, '197602151997031002', 'NANA RODIANA, SH, M.SI', 'Komp. Maritim Jl. Cempaka Putih Tengah III No. 4B Cempaka Putih, Jakarta Pusat\r\n\r\n\r\n', 'nana_rodiana@dephub.go.id', 'Penata Tingkat I', 'III/d', 'KEPALA SUBBAGIAN KERUMAHTANGGAN BAGIAN UMUM DAN PERLENGKAPAN SETDITJEN HUBLA', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:04:50', 1, '2020-10-23 11:32:41'),
(14, 8, '197704192003121003', 'KURNIAWAN, SE., M.SI', 'Jl. S Mahakam Blok I No. 6 RT/RW,  012/001 Semper Barat, Jakarta Utara, DKI Jakarta\r\n\r\n\r\n', 'kurniawan1904@dephub.go.id', 'Penata Tk. I', 'III/d', 'Kepala Subbagian Tata Usaha', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:14:28', 1, '2020-10-20 15:14:28'),
(15, 54, '198011272005021001', 'RUSMAYADI EFFENDI, S.KOM, M.AK', 'Kebon pala Rt 007/008 No.5, Jakarta Timur, DKI Jakarta\r\n', 'rusmayadi_effendi@dephub.go.id', 'Penata Tingkat I', 'III/d', 'Kepala Subbagian Perlengkapan', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '0218190600', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:19:04', 1, '2020-10-20 15:19:04'),
(16, 7, '197905102003121001', 'KHUMEDI', 'KP. JEMBATAN RT 009 RW 014, Cakung Jakarta Timur, DKI Jakarta', 'khumedi@dephub.go.id', 'Penata Muda', 'III/a', 'PENYUSUN RENCANA PEMELIHARAAN DAN PERBAIKAN SARANA DAN PRASARANA', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '085710306079', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:22:46', 1, '2020-10-23 11:29:39'),
(17, 1, '197801022005021001', 'WINARSO', 'Wahana Pondok Gede Blok N1 No. 17, Jatirangon, Bekasi, Jawa Barat\r\n', 'winarso0201@dephub.go.id', 'Pengatur Tingkat I', 'II/d', 'PENGELOLA URUSAN TATA USAHA', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:26:20', 1, '2020-10-20 15:26:20'),
(18, 32, '198506212010121004', 'DWI HARYANTO', '', 'dwi_haryanto2106@dephub.go.id', 'Pengatur', 'II/c', 'PENGELOLA URUSAN KERUMAHTANGGAAN BAG.UMUM & PERLENGKAPAN', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:34:05', 1, '2020-10-20 15:34:05'),
(19, 78, '197501012008121003', 'IMAN ROHIMAN', '', 'iman_rohiman@dephub.go.id', 'Pengatur', 'II/c', 'Petugas Operasional Kendaraan Dinas', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '081211858080', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:38:39', 1, '2020-10-20 15:38:39'),
(20, 62, '197807252010121001', 'DENI JAELANI', 'Komp. Ditlantas Polri Kampung Dua, Jaka Sampurna, Bekasi, Jawa Barat\r\n\r\n', 'deni_jaelani@dephub.go.id', 'Pengatur', 'II/c', 'PENGELOLA URUSAN KERUMAHTANGGAN', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '082124991380', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:43:10', 1, '2020-10-20 15:43:10'),
(21, 17, '197601132006041001', 'MAMIT, S.AP', 'Duren Baru No. 96, Susukan, Citayam, Bogor, Jawa Barat\r\n', 'mamit@dephub.go.id', 'Penata Muda Tingkat I', 'III/b', 'PENGELOLA URUSAN KERUMAHTANGGAN', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '085691769907', 'KENDARAAN DINAS OPERASIONAL', 6, 1, 1, '2020-10-20 15:49:01', 1, '2020-10-20 15:49:01'),
(22, 21, '196712061994032002', 'RETNO WIJAYANTI, SE., MSI', 'Pulo Sirih Tengah 16 Blok EB, Bekasi, Jawa Barat\r\n', 'retno_wijayanti@dephub.go.id', 'Pembina Tingkat I', 'IV/b', 'Kepala Bagian Keuangan, Setditjen Hubla', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '218192107', 'KENDARAAN DINAS OPERASIONAL', 7, 1, 1, '2020-10-20 15:57:34', 1, '2020-10-20 15:57:34'),
(23, 59, '197909082002121001', 'RIDHA ROSALMI, SE, M.SI', 'Taman Meruya 1/15 Blok 16, Jakarta Barat, DKI Jakarta\r\n', 'ridha_rosalmi@dephub.go.id', 'Pembina', 'IV/a', 'Kepala Subbagian Perbendaharaan', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL', 7, 1, 1, '2020-10-20 16:10:05', 1, '2020-10-20 16:11:12'),
(24, 22, '196807201996031001', 'ACHMAD SOMANTRI', 'Budi Utomo 11/13, Pasar Baru, Jakarta Pusat, DKI Jakarta\r\n', 'achmad_somantri@dephub.go.id', 'Penata Tingkat I', 'III/d', 'KEPALA SUB BAGIAN AKUNTANSI BAGIAN KEUANGAN-SETDITJEN HUBLA', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '218002003', 'KENDARAAN DINAS OPERASIONAL', 7, 1, 1, '2020-10-20 16:14:41', 1, '2020-10-20 16:14:41'),
(25, 51, '197908312006041001', 'GUSWAN RAHIM ERWIN, SE', 'Villa Indah Permai Blok H 29 No. 12, Teluk Pucung, Bekasi, Jawa Barat\r\n', 'guswan_rahim@dephub.go.id', 'Penata Tingkat I', 'III/d', 'Kepala Subbagian Pelaksanaan Anggaran', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL', 7, 1, 1, '2020-10-20 16:38:29', 1, '2020-10-20 16:38:29'),
(26, 79, '197901112002121002', 'GUSTI MICHAEL ADRIANSYAH, SE.', 'PINUS III,  Cilincing, Jakarta Utara, DKI Jakarta\r\n', 'gusti_michael@dephub.go.id', 'Penata Tingkat I', 'III/d', 'Bendahara Pengeluaran', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL', 7, 1, 1, '2020-10-20 16:49:47', 1, '2020-10-20 16:49:47'),
(27, 16, '197012181998031002', 'CIPTADI DIAH PRIHANDOYONO, ST,MT', 'CIPINANG KEBEMBEM, Pulo Gadung, Jakarta Timur, DKI Jakarta', 'ciptadi_diah@dephub.go.id', 'Pembina Tingkat I', 'IV/b', 'Kepala Bagian Perencanaan, Setditjen Hubla', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '4706151', 'KENDARAAN DINAS OPERASIONAL', 8, 1, 1, '2020-10-20 16:58:22', 1, '2020-10-20 16:58:22'),
(28, 47, '198409232009121001', 'PARIPURNA SANDI NUGRAHA, S.T', 'Flamboyan Indah Blok MB-8, Pejuang, Bekasi, Jawa Barat', 'paripurna_sandi@dephub.go.id', 'Penata', 'III/c', 'Kepala Subbagian Program', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '081218389519', 'KENDARAAN DINAS OPERASIONAL', 8, 1, 1, '2020-10-20 21:50:49', 1, '2020-10-20 21:50:49'),
(29, 2, '198107282007121002', 'WAHYU WIBOWO, SE', 'Nganjuk, Jawa Timur\r\n', 'wahyu_wibowo@dephub.go.id', 'Penata Tingkat I', 'III/d', 'Kepala Subbagian Analisa, Evaluasi dan Tarif', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL', 8, 1, 1, '2020-10-20 21:59:01', 1, '2020-10-20 21:59:01'),
(30, 20, '198107092005021001', 'REZA HERTANTYO, SH., M.MTr', 'Jl. Teluk Langsa Raya Blok C.8 No. 11, Duren Sawit,\r\nJakarta Timur\r\n', 'reza_hertantyo@dephub.go.id', 'Penata Tingkat I', 'III/d', 'Kepala Bagian Kepegawaian, Setditjen Hubla', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '0811141754', 'KENDARAAN DINAS OPERASIONAL', 11, 1, 1, '2020-10-20 22:09:09', 1, '2020-10-20 22:09:09'),
(31, 39, '197702102006041002', 'WISNU WARDANA, S.SOS, M.SI', 'Jl. Mahoni D15, Depok, Jawa Barat\r\n\r\n', 'wisnu_wardana@dephub.go.id', 'Penata Tingkat I', 'III/d', 'Kepala Bagian Organisasi dan Hubungan Masyarakat, Setditjen Hubla', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '081808241977', 'KENDARAAN DINAS OPERASIONAL', 9, 1, 1, '2020-10-20 22:13:01', 1, '2020-10-20 22:13:01'),
(32, 19, '196409271984011001', 'TOTO SUKARNO, SH.MH', 'Ngarbingan No. 41, Jakarta Timur, DKI Jakarta\r\n', 'toto_sukarno@dephub.go.id', 'Pembina Tingkat I', 'IV/b', 'Kepala Bagian Hukum dan Kerjasama Luar Negeri, Setditjen Hubla', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '081296939766', 'KENDARAAN DINAS OPERASIONAL', 10, 1, 1, '2020-10-20 22:17:04', 1, '2020-10-20 22:17:04'),
(53, 33, '196808171989031001', 'ACEP SYARIF USMAR', 'Kp. Palsi Gunung RT 001/ RW 003, Tugu, Cimanggis, Jawa Barat\r\n', 'acep_syarif@dephub.go.id', 'Penata Muda', 'III/a', 'PETUGAS OPERASIONAL KENDARAAN DINAS', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '-', 'KENDARAAN DINAS OPERASIONAL JEMPUTAN', 6, 1, 1, '2020-10-21 09:17:44', 1, '2020-10-21 09:17:44'),
(54, 75, '197209051993031001', 'MOEHAMAD HIDUP', 'Taman Alamanda B-25 RT 001/ RW 012, Karang Satria, Tambun Utara, Jawa Barat\r\n\r\n', 'moehamad_hidup@dephub.go.id', 'Pengatur', 'II/c', 'PETUGAS OPERASIONAL KENDARAAN DINAS', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '-', 'KENDARAAN DINAS OPERASIONAL JEMPUTAN ', 6, 1, 1, '2020-10-21 09:26:51', 1, '2020-10-23 11:55:37'),
(55, 73, '198003212008121001', 'RAMDANIH', 'Kp. Kelapa RT 002/ RW 003, Rawa Panjang, Bojong Gede, Jawa Barat, \r\n', 'ramdanih@dephub.go.id', 'Pengatur', 'II/c', 'PETUGAS OPERASIONAL KENDARAAN DINAS', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL JEMPUTAN', 6, 1, 1, '2020-10-22 18:38:14', 1, '2020-10-23 11:58:17'),
(56, 76, '197608231997031002', 'SUGENG', 'Kp. Sidamukti RT 001/ RW 001, Sukmajaya, Depok, Jawa Barat\r\n', 'sugeng2308@dephub.go.id', 'Pengatur', 'II/c', 'PETUGAS OPERASIONAL KENDARAAN DINAS', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '-', 'KENDARAAN DINAS OPERASIONAL JEMPUTAN', 6, 1, 1, '2020-10-22 18:40:19', 1, '2020-10-22 18:46:40'),
(57, 72, '196912061991031005', 'MARYONO', 'Jl. Hidup Baru RT.01/ RW.03, Pademangan Barat, Jakarta Utara\r\n\r\n', 'maryono0612@dephub.go.id', 'Pengatur', 'II/c', 'PETUGAS OPERASIONAL KENDARAAN DINAS', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '-', 'KENDARAAN DINAS OPERASIONAL JEMPUTAN', 6, 1, 1, '2020-10-22 18:42:37', 1, '2020-10-22 18:42:37'),
(58, 74, '', 'DENI WIJAYA', '', '', '', '', 'Pramubakti', '196703201992031003', 'Ir. ARIF TOHA TJAHJAGAMA, DEA.', 'Pembina Utama Muda', 'IV/c', '196703201992031003', NULL, '', 'KENDARAAN DINAS OPERASIONAL JEMPUTAN', 6, 1, 1, '2020-10-22 18:50:54', 1, '2020-10-22 18:50:54'),
(59, 6, '', 'SUYONO', '', '', '', '', 'Pramubhakti', '196705211997031001', 'ANDI HARTONO, ST', 'Pembina Utama Muda', 'IV/c', '196705211997031001', NULL, '', 'KENDARAAN DINAS OPERASIONAL JEMPUTAN', 6, 1, 1, '2020-10-22 18:52:19', 1, '2020-11-02 06:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`name`, `alias`, `type`, `status`) VALUES
('/*', '*', '', 1),
('/debug/*', '*', 'debug', 1),
('/debug/default/*', '*', 'debug/default', 1),
('/debug/default/db-explain', 'db-explain', 'debug/default', 1),
('/debug/default/download-mail', 'download-mail', 'debug/default', 1),
('/debug/default/index', 'index', 'debug/default', 1),
('/debug/default/toolbar', 'toolbar', 'debug/default', 1),
('/debug/default/view', 'view', 'debug/default', 1),
('/debug/user/*', '*', 'debug/user', 1),
('/debug/user/reset-identity', 'reset-identity', 'debug/user', 1),
('/debug/user/set-identity', 'set-identity', 'debug/user', 1),
('/gii/*', '*', 'gii', 1),
('/gii/default/*', '*', 'gii/default', 1),
('/gii/default/action', 'action', 'gii/default', 1),
('/gii/default/diff', 'diff', 'gii/default', 1),
('/gii/default/index', 'index', 'gii/default', 1),
('/gii/default/preview', 'preview', 'gii/default', 1),
('/gii/default/view', 'view', 'gii/default', 1),
('/kendaraan/*', '*', 'kendaraan', 1),
('/kendaraan/create', 'create', 'kendaraan', 1),
('/kendaraan/delete', 'delete', 'kendaraan', 1),
('/kendaraan/index', 'index', 'kendaraan', 1),
('/kendaraan/preview', 'preview', 'kendaraan', 1),
('/kendaraan/preview-bpkb', 'preview-bpkb', 'kendaraan', 1),
('/kendaraan/preview-stnk', 'preview-stnk', 'kendaraan', 1),
('/kendaraan/update', 'update', 'kendaraan', 1),
('/kendaraan/view', 'view', 'kendaraan', 1),
('/merk/*', '*', 'merk', 1),
('/merk/create', 'create', 'merk', 1),
('/merk/delete', 'delete', 'merk', 1),
('/merk/index', 'index', 'merk', 1),
('/merk/update', 'update', 'merk', 1),
('/merk/view', 'view', 'merk', 1),
('/peminjam/*', '*', 'peminjam', 1),
('/peminjam/create', 'create', 'peminjam', 1),
('/peminjam/delete', 'delete', 'peminjam', 1),
('/peminjam/index', 'index', 'peminjam', 1),
('/peminjam/pdf', 'pdf', 'peminjam', 1),
('/peminjam/update', 'update', 'peminjam', 1),
('/peminjam/view', 'view', 'peminjam', 1),
('/site/*', '*', 'site', 1),
('/site/api-pegawai', 'api-pegawai', 'site', 1),
('/site/captcha', 'captcha', 'site', 1),
('/site/error', 'error', 'site', 1),
('/site/index', 'index', 'site', 1),
('/site/login', 'login', 'site', 1),
('/site/logout', 'logout', 'site', 1),
('/ttd/*', '*', 'ttd', 1),
('/ttd/create', 'create', 'ttd', 1),
('/ttd/delete', 'delete', 'ttd', 1),
('/ttd/index', 'index', 'ttd', 1),
('/ttd/update', 'update', 'ttd', 1),
('/ttd/view', 'view', 'ttd', 1),
('/unit/*', '*', 'unit', 1),
('/unit/create', 'create', 'unit', 1),
('/unit/delete', 'delete', 'unit', 1),
('/unit/index', 'index', 'unit', 1),
('/unit/update', 'update', 'unit', 1),
('/unit/view', 'view', 'unit', 1),
('/utilitas/*', '*', 'utilitas', 1),
('/utilitas/default/*', '*', 'utilitas/default', 1),
('/utilitas/default/index', 'index', 'utilitas/default', 1),
('/utilitas/menu/*', '*', 'utilitas/menu', 1),
('/utilitas/menu/create', 'create', 'utilitas/menu', 1),
('/utilitas/menu/delete', 'delete', 'utilitas/menu', 1),
('/utilitas/menu/index', 'index', 'utilitas/menu', 1),
('/utilitas/menu/update', 'update', 'utilitas/menu', 1),
('/utilitas/menu/view', 'view', 'utilitas/menu', 1),
('/utilitas/role/*', '*', 'utilitas/role', 1),
('/utilitas/role/create', 'create', 'utilitas/role', 1),
('/utilitas/role/delete', 'delete', 'utilitas/role', 1),
('/utilitas/role/index', 'index', 'utilitas/role', 1),
('/utilitas/role/permission', 'permission', 'utilitas/role', 1),
('/utilitas/role/update', 'update', 'utilitas/role', 1),
('/utilitas/role/view', 'view', 'utilitas/role', 1),
('/utilitas/route/*', '*', 'utilitas/route', 1),
('/utilitas/route/create', 'create', 'utilitas/route', 1),
('/utilitas/route/delete', 'delete', 'utilitas/route', 1),
('/utilitas/route/generate', 'generate', 'utilitas/route', 1),
('/utilitas/route/index', 'index', 'utilitas/route', 1),
('/utilitas/route/update', 'update', 'utilitas/route', 1),
('/utilitas/route/view', 'view', 'utilitas/route', 1),
('/utilitas/user/*', '*', 'utilitas/user', 1),
('/utilitas/user/create', 'create', 'utilitas/user', 1),
('/utilitas/user/delete', 'delete', 'utilitas/user', 1),
('/utilitas/user/index', 'index', 'utilitas/user', 1),
('/utilitas/user/update', 'update', 'utilitas/user', 1),
('/utilitas/user/view', 'view', 'utilitas/user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ttd`
--

CREATE TABLE `ttd` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ttd`
--

INSERT INTO `ttd` (`id`, `nip`, `nama`, `pangkat`, `golongan`, `jabatan`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, '196705211997031001', 'ANDI HARTONO, ST', 'Pembina Utama Muda', 'IV/c', 'Sekretaris Direktorat Jenderal Perhubungan Laut', 1, NULL, NULL, 1, '2020-10-26 13:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `nama`, `status`) VALUES
(1, 'Direktorat Lalu Lintas Dan Angkutan Laut', 0),
(2, 'Direktorat Kepelabuhanan', 0),
(3, 'Direktorat Perkapalan Dan Kepelautan', 0),
(4, 'Direktorat Kenavigasian', 0),
(5, 'Direktorat Kesatuan Penjagaan Laut Dan Pantai', 0),
(6, 'Bag. Umum & Perlengkapan', 1),
(7, 'Bag. Keuangan', 1),
(8, 'Bag. Perencanaan', 1),
(9, 'Bag. Organisasi & Humas', 1),
(10, 'Bag. Hukum', 1),
(11, 'Bag. Kepegawaian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pangkat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `nama`, `jabatan`, `pangkat`, `golongan`, `unit_id`) VALUES
(1, 'rumahtangga', 'vMQ6RlXiKJM8vG7E0UFIAIwTElPXJdxN', '$2y$13$HShy6kR5A1AjCUeOyD/b8uzND6VopfQ1jM.2n979.d9QXUVbcRwaK', NULL, 'rumahtangga@localhost.com', 10, 1602590833, 1602590833, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pajak`
--
ALTER TABLE `pajak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `ttd`
--
ALTER TABLE `ttd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pajak`
--
ALTER TABLE `pajak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `ttd`
--
ALTER TABLE `ttd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
