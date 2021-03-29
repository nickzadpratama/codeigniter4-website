-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 10:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-02-23-071136', 'App\\Database\\Migrations\\Pin', 'default', 'App', 1614161878, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pin`
--

CREATE TABLE `pin` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `panggilan` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pin`
--

INSERT INTO `pin` (`id`, `nama`, `panggilan`, `tanggalLahir`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Titin Padmasari', 'Titin', '1992-07-01', 'Jln. Babakan No. 459, Palu 51768, Lampung', '2017-08-28', '2021-03-24 04:04:11'),
(2, 'Damu Pangestu S.E.', 'Damu', '1996-04-02', 'Dk. Juanda No. 833, Kendari 74463, Kaltara, Indonesia', '2018-09-30', '2021-02-26 02:06:47'),
(3, 'Simon Prasasta', 'Simon', '1986-12-21', 'Ki. Rajawali No. 743, Tidore Kepulauan 23682, Gorontalo', '2012-10-04', '2021-02-25 01:43:07'),
(4, 'Asirwada Galih Prasetya M.M.', 'Asirwada', '1995-05-22', 'Jln. Bacang No. 390, Pekalongan 48740, Kalteng', '2018-07-30', '2021-02-25 01:43:07'),
(5, 'Lili Oktaviani', 'Lili', '1978-07-19', 'Jr. Abdul Muis No. 246, Cirebon 27132, Pabar', '2010-11-30', '2021-02-25 01:43:07'),
(6, 'Mumpuni Artawan Widodo M.M.', 'Mumpuni', '2006-04-29', 'Dk. Baladewa No. 603, Administrasi Jakarta Barat 11213, Sumbar', '2015-04-11', '2021-02-25 01:43:07'),
(7, 'Murti Wibisono', 'Murti', '2008-04-28', 'Ki. Baik No. 423, Semarang 18135, Kalsel', '2018-01-04', '2021-02-25 01:43:07'),
(8, 'Sabri Dabukke S.Psi', 'Sabri', '1982-12-31', 'Jln. Ki Hajar Dewantara No. 792, Bogor 87752, Riau, Indonesia', '2013-08-15', '2021-02-26 02:30:07'),
(9, 'Putu Xanana Pradana', 'Putu', '1990-02-18', 'Ds. Gambang No. 183, Semarang 43180, Kaltim', '2016-04-28', '2021-02-25 01:43:07'),
(10, 'Ghani Santoso', 'Ghani', '1979-11-06', 'Dk. Jend. Sudirman No. 241, Mojokerto 30888, Sulbar', '2011-07-08', '2021-02-25 01:43:07'),
(11, 'Kajen Kuswoyo', 'Kajen', '1984-03-20', 'Ki. Bazuka Raya No. 333, Padangsidempuan 61965, Jabar', '2016-10-28', '2021-02-25 01:43:07'),
(12, 'Lala Kusmawati', 'Lala', '2005-10-25', 'Kpg. Sudirman No. 186, Dumai 29513, Kalsel', '2020-01-19', '2021-02-25 01:43:07'),
(13, 'Ika Ratih Hastuti', 'Ika', '2001-07-04', 'Jr. Rajawali Timur No. 516, Administrasi Jakarta Selatan 29830, Malut', '2012-09-07', '2021-02-25 01:43:07'),
(14, 'Zulfa Palastri', 'Zulfa', '1991-01-02', 'Jln. Hasanuddin No. 579, Bima 69223, Kalsel', '2014-05-19', '2021-02-25 01:43:07'),
(15, 'Baktiadi Lantar Prasetyo S.H.', 'Baktiadi', '2001-09-11', 'Kpg. Sadang Serang No. 714, Bau-Bau 50078, Maluku', '2014-01-03', '2021-02-25 01:43:07'),
(16, 'Hana Usamah S.IP', 'Hana', '1983-01-14', 'Psr. R.E. Martadinata No. 189, Ternate 66143, Sumbar,Indonesia', '2015-04-23', '2021-02-26 01:50:43'),
(17, 'Victoria Vera Yolanda M.Ak', 'Victoria', '1997-06-29', 'Jr. Flora No. 714, Tomohon 99672, Kaltim', '2016-09-01', '2021-02-25 01:43:07'),
(18, 'Bakiadi Latupono', 'Bakiadi', '1998-05-07', 'Jr. Adisumarmo No. 931, Bukittinggi 84578, Kepri', '2014-05-27', '2021-02-25 01:43:07'),
(19, 'Putri Wijayanti', 'Putri', '1985-01-27', 'Ki. Gatot Subroto No. 475, Sibolga 90609, Riau', '2016-11-25', '2021-02-25 01:43:08'),
(20, 'Najib Widodo', 'Najib', '1996-01-09', 'Gg. Moch. Ramdan No. 817, Sabang 11278, Sultra', '2019-08-16', '2021-02-25 01:43:08'),
(21, 'Mila Haryanti', 'Mila', '2003-05-19', 'Gg. Teuku Umar No. 299, Bengkulu 54361, Pabar', '2016-07-07', '2021-02-25 01:43:08'),
(22, 'Danuja Sinaga', 'Danuja', '2007-10-28', 'Kpg. Laswi No. 417, Kendari 72542, Sulsel', '2013-03-17', '2021-02-25 01:43:08'),
(23, 'Sari Prastuti', 'Sari', '1983-12-19', 'Gg. Gegerkalong Hilir No. 655, Tegal 98980, Sumsel', '2013-08-26', '2021-02-25 01:43:08'),
(24, 'Tantri Jessica Nurdiyanti S.IP', 'Tantri', '1996-03-12', 'Psr. Ikan No. 763, Batam 66348, Aceh', '2014-07-19', '2021-02-25 01:43:08'),
(25, 'Lega Uwais', 'Lega', '2007-05-11', 'Gg. Pasir Koja No. 715, Gunungsitoli 75365, Kaltim', '2015-06-18', '2021-02-25 01:43:08'),
(26, 'Ella Hasanah', 'Ella', '2009-02-03', 'Gg. Sutan Syahrir No. 119, Prabumulih 47974, Lampung', '2013-08-27', '2021-02-25 01:43:08'),
(27, 'Bahuraksa Lulut Hakim', 'Bahuraksa', '2004-08-14', 'Kpg. Bagonwoto  No. 142, Langsa 97062, Malut', '2011-06-08', '2021-02-25 01:43:08'),
(28, 'Dewi Maryati', 'Dewi', '1987-09-17', 'Ki. Padma No. 925, Pagar Alam 35008, Aceh', '2014-07-13', '2021-02-25 01:43:08'),
(29, 'Darsirah Tamba S.Psi', 'Darsirah', '1991-02-24', 'Ki. Sudiarto No. 526, Binjai 57376, Riau', '2016-01-14', '2021-02-25 01:43:08'),
(30, 'Titin Mandasari M.M.', 'Titin', '1982-06-27', 'Kpg. Camar No. 984, Palu 27765, Bengkulu', '2018-07-15', '2021-02-25 01:43:08'),
(31, 'Ikhsan Marpaung', 'Ikhsan', '2001-01-10', 'Jr. Baiduri No. 411, Depok 42343, Riau', '2014-01-09', '2021-02-25 01:43:08'),
(32, 'Sidiq Waskita', 'Sidiq', '1978-06-26', 'Gg. Banal No. 289, Kediri 12097, Sumsel', '2011-08-12', '2021-02-25 01:43:08'),
(33, 'Septi Hassanah', 'Septi', '2001-03-27', 'Psr. Bagas Pati No. 619, Lhokseumawe 74243, Jateng', '2020-02-25', '2021-02-25 01:43:08'),
(34, 'Hairyanto Saptono', 'Hairyanto', '2002-10-20', 'Jln. Kebangkitan Nasional No. 496, Sawahlunto 42691, Riau', '2018-05-05', '2021-02-25 01:43:08'),
(35, 'Uli Wahyuni', 'Uli', '1994-02-22', 'Psr. Jamika No. 864, Bima 20524, Maluku', '2017-02-22', '2021-02-25 01:43:08'),
(36, 'Lidya Pertiwi', 'Lidya', '1977-08-30', 'Gg. Raya Ujungberung No. 350, Pekalongan 66921, Riau', '2012-09-28', '2021-02-25 01:43:08'),
(37, 'Keisha Ajeng Uyainah S.T.', 'Keisha', '2008-04-25', 'Ki. Bata Putih No. 792, Batu 45099, Kalteng', '2014-06-06', '2021-02-25 01:43:08'),
(38, 'Ganep Sirait', 'Ganep', '1997-11-12', 'Jln. Tambun No. 907, Gunungsitoli 53100, Jabar', '2012-04-08', '2021-02-25 01:43:08'),
(39, 'Edi Pranata Mustofa S.Gz', 'Edi', '1980-04-20', 'Gg. Rajiman No. 72, Semarang 44578, Jabar', '2015-01-29', '2021-02-25 01:43:08'),
(40, 'Jelita Mandasari', 'Jelita', '1987-06-10', 'Gg. Bawal No. 764, Sibolga 40574, DKI', '2016-11-16', '2021-02-25 01:43:08'),
(41, 'Bakianto Ardianto S.Ked', 'Bakianto', '1990-07-05', 'Jln. Madiun No. 328, Dumai 13332, Jabar', '2015-01-15', '2021-02-25 01:43:08'),
(42, 'Gara Capa Putra M.Pd', 'Gara', '1979-03-08', 'Jln. K.H. Wahid Hasyim (Kopo) No. 242, Lhokseumawe 99433, Kalsel', '2013-08-07', '2021-02-25 01:43:08'),
(43, 'Victoria Najwa Pertiwi', 'Victoria', '1988-11-29', 'Psr. Warga No. 364, Bogor 38900, Sumut', '2012-08-06', '2021-02-25 01:43:08'),
(44, 'Aditya Prasetya S.Pd', 'Aditya', '1977-08-17', 'Kpg. Abdul Rahmat No. 100, Jambi 42706, Bali', '2012-11-05', '2021-02-25 01:43:08'),
(45, 'Pranata Rajata', 'Pranata', '1994-07-06', 'Psr. Ketandan No. 835, Dumai 91192, Sulbar', '2013-12-16', '2021-02-25 01:43:08'),
(46, 'Teguh Rajasa', 'Teguh', '2002-03-01', 'Ds. Salak No. 2, Banjarbaru 67436, Kepri', '2020-01-19', '2021-02-25 01:43:08'),
(47, 'Maida Salsabila Yuniar S.Ked', 'Maida', '1997-06-21', 'Ki. Honggowongso No. 980, Mataram 11376, Malut', '2014-09-05', '2021-02-25 01:43:08'),
(48, 'Indra Hendri Pangestu S.Psi', 'Indra', '1979-04-10', 'Jln. Abang No. 131, Semarang 19579, Sumsel', '2013-02-18', '2021-02-25 01:43:08'),
(49, 'Zulfa Dinda Pertiwi', 'Zulfa', '2009-07-17', 'Jln. Baik No. 960, Probolinggo 47099, Sumsel', '2011-03-10', '2021-02-25 01:43:08'),
(50, 'Baktiono Opan Marbun S.E.I', 'Baktiono', '1985-02-07', 'Jr. Haji No. 128, Gorontalo 38981, Kaltara', '2011-09-16', '2021-02-25 01:43:09'),
(51, 'Novi Natalia Usada S.E.', 'Novi', '1979-04-24', 'Dk. Abdul Rahmat No. 481, Tanjung Pinang 84310, Kepri', '2012-02-17', '2021-02-25 01:43:09'),
(52, 'Bahuraksa Among Megantara S.Psi', 'Bahuraksa', '2006-10-12', 'Gg. Jaksa No. 34, Bandung 84925, Jabar', '2015-11-19', '2021-02-25 01:43:09'),
(53, 'Ega Wahyudin M.TI.', 'Ega', '1981-01-23', 'Dk. Kebangkitan Nasional No. 482, Tangerang 26663, Kalbar', '2013-08-15', '2021-02-25 01:43:09'),
(54, 'Alambana Iswahyudi', 'Alambana', '1982-02-16', 'Psr. Suniaraja No. 674, Pontianak 92848, Bengkulu', '2016-01-19', '2021-02-25 01:43:09'),
(55, 'Puspa Farida', 'Puspa', '2010-01-17', 'Gg. Otto No. 899, Mataram 30882, Jabar', '2013-07-09', '2021-02-25 01:43:09'),
(56, 'Edi Hakim', 'Edi', '2008-09-11', 'Dk. Batako No. 262, Makassar 22946, Bengkulu', '2016-05-27', '2021-02-25 01:43:09'),
(57, 'Tari Cinthia Palastri S.Kom', 'Tari', '2002-10-06', 'Jln. Sukajadi No. 147, Gorontalo 24059, Jabar', '2012-02-10', '2021-02-25 01:43:09'),
(58, 'Lidya Syahrini Fujiati M.Kom.', 'Lidya', '1985-12-15', 'Kpg. S. Parman No. 86, Sorong 34053, Lampung', '2019-11-05', '2021-02-25 01:43:09'),
(59, 'Liman Kasusra Zulkarnain', 'Liman', '2010-06-04', 'Jln. Mulyadi No. 527, Tebing Tinggi 25639, Riau', '2015-06-28', '2021-02-25 01:43:09'),
(60, 'Jane Rahimah', 'Jane', '2004-04-26', 'Ki. Sutarto No. 509, Padangpanjang 53836, Banten', '2017-10-07', '2021-02-25 01:43:09'),
(61, 'Marwata Prabowo', 'Marwata', '1992-02-12', 'Jr. Cemara No. 882, Banda Aceh 56972, Jateng', '2014-01-20', '2021-02-25 01:43:09'),
(62, 'Gaduh Prasasta S.Ked', 'Gaduh', '1994-12-04', 'Kpg. Gajah Mada No. 742, Ambon 50494, Sumbar', '2014-02-21', '2021-02-25 01:43:09'),
(63, 'Daru Suryono', 'Daru', '1986-03-07', 'Psr. Aceh No. 438, Cirebon 62585, Banten', '2012-04-14', '2021-02-25 01:43:09'),
(64, 'Icha Rahimah', 'Icha', '1989-06-06', 'Kpg. Otista No. 758, Tangerang Selatan 92357, DIY', '2015-02-06', '2021-02-25 01:43:09'),
(65, 'Victoria Rahmawati', 'Victoria', '2003-11-27', 'Jln. Cikapayang No. 447, Pagar Alam 88674, Kalsel', '2020-02-08', '2021-02-25 01:43:09'),
(66, 'Laila Lailasari', 'Laila', '1983-03-25', 'Dk. Yos No. 538, Administrasi Jakarta Selatan 14803, Sulteng', '2013-05-03', '2021-02-25 01:43:09'),
(67, 'Raisa Palastri', 'Raisa', '2010-01-15', 'Psr. Kali No. 472, Administrasi Jakarta Barat 76206, NTT', '2012-09-23', '2021-02-25 01:43:09'),
(68, 'Laila Hastuti', 'Laila', '1988-12-03', 'Jln. Ahmad Dahlan No. 861, Parepare 16766, Kaltim', '2014-06-28', '2021-02-25 01:43:09'),
(69, 'Aurora Hassanah', 'Aurora', '1999-10-22', 'Ki. Abdul No. 870, Sorong 61278, Sulsel', '2015-06-15', '2021-02-25 01:43:09'),
(70, 'Daniswara Suwarno', 'Daniswara', '1981-04-15', 'Dk. Casablanca No. 881, Jambi 98262, Kalbar', '2013-09-09', '2021-02-25 01:43:09'),
(71, 'Dariati Mursinin Mangunsong S.E.I', 'Dariati', '2010-06-01', 'Gg. Madiun No. 38, Kotamobagu 51913, Sulteng', '2020-08-18', '2021-02-25 01:43:09'),
(72, 'Mahesa Prasetyo', 'Mahesa', '1979-02-25', 'Kpg. Gegerkalong Hilir No. 364, Tangerang Selatan 52686, NTT', '2020-08-05', '2021-02-25 01:43:09'),
(73, 'Cecep Bahuwirya Prabowo', 'Cecep', '1986-05-18', 'Psr. Sutarto No. 78, Madiun 87353, NTT', '2012-12-21', '2021-02-25 01:43:09'),
(74, 'Karja Bakiono Mansur S.I.Kom', 'Karja', '1997-07-24', 'Dk. Bak Mandi No. 231, Pariaman 71078, Riau', '2012-06-04', '2021-02-25 01:43:09'),
(75, 'Endah Mardhiyah', 'Endah', '1998-03-20', 'Gg. Jakarta No. 820, Gunungsitoli 18616, Sultra', '2016-01-03', '2021-02-25 01:43:09'),
(76, 'Siska Maryati M.Kom.', 'Siska', '1982-07-15', 'Ds. K.H. Wahid Hasyim (Kopo) No. 917, Tarakan 48443, Riau', '2019-05-22', '2021-02-25 01:43:09'),
(77, 'Tasnim Dongoran', 'Tasnim', '1997-09-09', 'Ds. Jaksa No. 960, Tomohon 13484, NTT', '2014-09-25', '2021-02-25 01:43:09'),
(78, 'Victoria Nurdiyanti', 'Victoria', '1989-09-25', 'Kpg. Zamrud No. 765, Kupang 51689, Kalbar', '2017-07-21', '2021-02-25 01:43:09'),
(79, 'Galiono Oman Jailani', 'Galiono', '1996-01-31', 'Psr. Bakit  No. 612, Ternate 95541, Papua', '2012-09-29', '2021-02-25 01:43:09'),
(80, 'Azalea Mardhiyah', 'Azalea', '1990-09-23', 'Ki. Industri No. 744, Payakumbuh 87778, Maluku', '2011-06-14', '2021-02-25 01:43:09'),
(81, 'Cahyadi Firgantoro', 'Cahyadi', '2008-12-25', 'Jln. Astana Anyar No. 530, Kediri 35083, Kalsel', '2014-01-29', '2021-02-25 01:43:09'),
(82, 'Edi Prayoga', 'Edi', '1999-02-21', 'Kpg. Dahlia No. 556, Tanjungbalai 63387, DIY', '2015-09-12', '2021-02-25 01:43:09'),
(83, 'Padmi Dina Rahmawati S.Gz', 'Padmi', '2005-06-07', 'Jr. Achmad Yani No. 160, Ternate 15610, Aceh', '2019-08-29', '2021-02-25 01:43:09'),
(84, 'Pia Pertiwi', 'Pia', '1999-01-19', 'Ds. Suryo Pranoto No. 131, Palopo 58154, Papua', '2014-06-28', '2021-02-25 01:43:09'),
(85, 'Mujur Najmudin M.TI.', 'Mujur', '1990-05-19', 'Jr. Sadang Serang No. 33, Padangpanjang 86230, Sumsel', '2019-06-27', '2021-02-25 01:43:09'),
(86, 'Dina Pratiwi', 'Dina', '1988-10-20', 'Jr. Bass No. 60, Prabumulih 66833, Jateng', '2012-06-10', '2021-02-25 01:43:09'),
(87, 'Kani Lailasari S.Ked', 'Kani', '1991-06-04', 'Psr. Gajah Mada No. 466, Tangerang 62433, Sulbar', '2020-01-17', '2021-02-25 01:43:09'),
(88, 'Gaduh Ardianto', 'Gaduh', '2006-12-24', 'Ds. Kalimalang No. 600, Balikpapan 27684, Aceh', '2020-03-04', '2021-02-25 01:43:09'),
(89, 'Wage Situmorang', 'Wage', '2005-08-08', 'Psr. Padang No. 291, Padangsidempuan 99396, Sumbar', '2014-08-30', '2021-02-25 01:43:09'),
(90, 'Darmaji Najam Gunarto M.Pd', 'Darmaji', '1989-09-15', 'Jln. Mulyadi No. 467, Sukabumi 37723, Gorontalo', '2017-11-16', '2021-02-25 01:43:10'),
(91, 'Galar Utama', 'Galar', '2000-10-23', 'Ki. Bank Dagang Negara No. 275, Tangerang 87559, Aceh', '2019-08-10', '2021-02-25 01:43:10'),
(92, 'Ira Carla Novitasari S.Pd', 'Ira', '2005-03-05', 'Ki. Basudewo No. 914, Makassar 84482, Malut', '2018-03-07', '2021-02-25 01:43:10'),
(93, 'Ira Rahmawati', 'Ira', '1987-06-21', 'Dk. K.H. Wahid Hasyim (Kopo) No. 708, Dumai 78188, Sultra', '2016-12-11', '2021-02-25 01:43:10'),
(94, 'Ozy Edison Habibi S.Farm', 'Ozy', '1980-03-13', 'Ds. Raden Saleh No. 858, Sawahlunto 68771, Gorontalo', '2017-06-04', '2021-02-25 01:43:10'),
(95, 'Ayu Rina Pertiwi S.Psi', 'Ayu', '2009-02-12', 'Jln. Bahagia No. 216, Surabaya 82598, Sumsel', '2011-02-18', '2021-02-25 01:43:10'),
(96, 'Amelia Aryani', 'Amelia', '1993-06-29', 'Gg. Bambu No. 691, Medan 21572, Kalteng', '2013-04-24', '2021-02-25 01:43:10'),
(97, 'Erik Wijaya', 'Erik', '1982-12-07', 'Dk. Bah Jaya No. 971, Makassar 27517, NTT', '2015-07-06', '2021-02-25 01:43:10'),
(98, 'Sarah Novitasari', 'Sarah', '1983-07-29', 'Ds. Bakau Griya Utama No. 121, Sukabumi 44328, Sumbar', '2013-07-03', '2021-02-25 01:43:10'),
(99, 'Kasiyah Almira Wulandari S.Kom', 'Kasiyah', '1995-05-01', 'Psr. Bakit  No. 467, Samarinda 23128, Bali, Indonesia', '2013-02-08', '2021-02-26 02:16:20'),
(100, 'Harto Ganjaran Mandala', 'Harto', '2009-08-04', 'Ki. Basuki No. 416, Malang 87811, Kepri, Indonesia', '2016-11-05', '2021-02-26 03:20:06'),
(101, 'Nickzad Partama', 'Nickzad', '1996-10-04', 'Jl. Tanah Koja II, RT.002/RW.005, Kel. Jatinegara Kaum, Jakarta Timur', '2021-02-25', '2021-02-25 04:29:55'),
(107, 'Nickzad', 'nickzaf', '0000-00-00', 'jln abcd', '2021-03-14', '2021-03-14 05:39:44'),
(112, 'Amira', 'Nickzad', '2021-03-21', 'Jl. Raya Bekasi Km.18 ', '2021-03-21', '2021-03-21 03:59:42'),
(113, 'Amira', 'Nickzad', '2021-03-21', 'Jl. Raya Bekasi Km.18 ', '2021-03-22', '2021-03-22 00:03:22'),
(114, 'Amira', 'Nickzad', '2021-03-21', 'Jl. Raya Bekasi Km.18 ', '2021-03-22', '2021-03-22 00:06:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
