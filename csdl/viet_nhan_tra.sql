-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 08:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viet_nhan_tra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `name`, `pass`, `email`) VALUES
(1, 'hung', 'd138768d3b5eca407f0dd579c5ca3767', 'lamthien2020@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id_bv` int(11) NOT NULL,
  `tieu_de` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `phan_loai` tinyint(11) NOT NULL,
  `trang_thai` tinyint(11) NOT NULL,
  `hinh_anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bai_viet`
--

INSERT INTO `bai_viet` (`id_bv`, `tieu_de`, `noi_dung`, `phan_loai`, `trang_thai`, `hinh_anh`) VALUES
(3, 'Viá»‡t NhÃ¢n TrÃ  Má»«ng tuá»•i Ä‘áº§u nÄƒm 2017', '<p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&aacute;ch mua c&aacute;c sáº£n pháº©m ch&egrave; Th&aacute;i Nguy&ecirc;n.</p><p>Nh&acirc;n dá»‹p nÄƒm má»›i, Viá»‡t Nh&acirc;n Tr&agrave; má»«ng tuá»•i Ä‘áº§u nÄƒm 2017 vá»›i c&aacute;c phong bao l&igrave; x&igrave; tá»« 20.000 Ä‘á»“ng Ä‘áº¿n 500.000 Ä‘á»“ng cho kh&a', 1, 1, 'anh_km1.png'),
(4, 'Viá»‡t NhÃ¢n TrÃ  biáº¿u chÃ¨ táº¿t - trao yÃªu thÆ°Æ¡ng', '<p>Ch&egrave; Th&aacute;i Nguy&ecirc;n chá»n l&agrave;m qu&agrave; biáº¿u táº¿t nhiá»u nháº¥t táº¡i H&agrave; Ná»™i báº¡n c&oacute; biáº¿t. C&ugrave;ng lá»±a chá»n Ch&egrave; biáº¿u táº¿t - Trao y&ecirc;u thÆ°Æ¡ng báº¡n nh&eacute;.</p>', 1, 1, 'anh_km2.png'),
(5, 'ChÃ¨ ThÃ¡i NguyÃªn biáº¿u táº·ng Táº¿t Äinh Dáº­u 2017', '<p>Loa loa loa loa, ch&uacute;ng t&ocirc;i chuy&ecirc;n cung cáº¥p c&aacute;c loáº¡i Ch&egrave; Th&aacute;i Nguy&ecirc;n biáº¿u táº·ng Táº¿t Äinh Dáº­u 2017 ngon nháº¥t, nÆ°á»›c xanh Ä‘áº­m vá»‹, máº«u m&atilde; Ä‘a dáº¡ng vá»›i nhiá»u kiá»ƒu há»™p má»›i láº¡, in logo nháº­n diá»‡n thÆ°Æ¡ng hiá»‡u cho c&aacute;c doanh nghiá»‡p hoáº·c c&aacute; nh&acirc;n biáº¿u táº·ng.</p>', 1, 1, 'anh_km3.png'),
(6, 'GiÃ¡ chÃ¨ ThÃ¡i NguyÃªn dÃ nh cho doanh nghiá»‡p táº¿t Äinh Dáº­u', '<p>C&ocirc;ng ty ch&egrave; Viá»‡t Nh&acirc;n xin gá»­i tá»›i qu&yacute; kh&aacute;ch báº£ng Gi&aacute; ch&egrave; Th&aacute;i Nguy&ecirc;n d&agrave;nh cho doanh nghiá»‡p táº¿t Äinh Dáº­u vá»›i nhiá»u Æ°u Ä‘&atilde;i. V&agrave; C&ocirc;ng ty ch&uacute;ng t&ocirc;i Ä‘áº¡i khuyáº¿n m&atilde;i giáº£m gi&aacute; c&aacute;c máº·t h&agrave;ng cho doanh nghiá»‡p tá»« 5% -&gt; 15% t&ugrave;y v&agrave;o sá»‘ lÆ°á»£ng .</p>', 1, 1, 'anh_km4.png'),
(7, 'ChÆ°Æ¡ng TrÃ¬nh TÃ­ch Äiá»ƒm Nháº­n Chiáº¿t Kháº¥u ThÆ°Æ¡ng Máº¡i', '<p>ChÆ°Æ¡ng tr&igrave;nh d&agrave;nh cho kh&aacute;ch h&agrave;ng th&acirc;n thiáº¿t cá»§a tr&agrave; Lá»™c T&acirc;n CÆ°Æ¡ng khi tham gia mua sáº¯m, há»‡ thá»‘ng sáº½ tá»± Ä‘á»™ng t&iacute;ch Ä‘iá»ƒm thÆ°á»Ÿng cho kh&aacute;ch</p>', 1, 1, 'anh_km5.png'),
(8, 'Mua chÃ¨ thÃ¡i nguyÃªn ngon vÃ  sáº¡ch giÃ¡ ráº» á»Ÿ Ä‘Ã¢u', '<p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;uMua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;uMua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>&nbsp;</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;uMua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>Mua ch&egrave; th&aacute;i nguy&ecirc;n ngon v&agrave; sáº¡ch gi&aacute; ráº» á»Ÿ Ä‘&acirc;u</p><p>&nbsp;</p>', 2, 1, 'anh.jpg'),
(9, 'CÃ¡c bÆ°á»›c Ä‘á»ƒ pha má»™t áº¥m chÃ¨ ThÃ¡i NguyÃªn ngon', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', 2, 1, 'anh_km3.png'),
(10, 'Uá»‘ng nÆ°á»›c chÃ¨ thÃ¡i nguyÃªn má»—i ngÃ y báº¡n cÃ³ thá»ƒ cÃ³ dÃ¡ng Ä‘áº¹p', '<p>aaaaaaaaaaa</p>', 3, 1, 'anh_tra3.png'),
(11, 'Mua chÃ¨ thÃ¡i nguyÃªn ngon vÃ  sáº¡ch táº¡i HÃ  Ná»™i', '<p>asddsaddad</p>', 2, 1, 'anh_km4.png'),
(12, 'Ká»¹ thuáº­t trá»“ng vÃ  cháº¿ biáº¿n chÃ¨ ThÃ¡i NguyÃªn thÆ¡m ngon', '<p>adddasdsd</p>', 2, 1, 'slider2.jpg'),
(13, 'CÃ¡ch thÆ°á»Ÿng thá»©c trÃ  ThÃ¡i NguyÃªn', '<p>daddasdasda</p>', 2, 1, 'Ã£nh.jpg'),
(14, 'CÃ´ng dá»¥ng khÃ´ng ngá» cá»§a trÃ  trong Ä‘á»i sá»‘ng háº±ng ngÃ y', '<p>asadsdsd</p>', 2, 1, 'Ã£nh.jpg'),
(15, 'Lá»£i Ã­ch cá»§a Ä‘áº¡i lÃ½ chÃ¨ ThÃ¡i NguyÃªn Ä‘em láº¡i ngÆ°á»i dÃ¹ng', '<p>sdasdadd</p>', 3, 1, ''),
(16, 'CÃ¡c bÆ°á»›c cháº¿ biáº¿n chÃ¨ thÃ¡i nguyÃªn thÆ¡m ngon', '<p>adadasdaaa</p>', 3, 1, ''),
(17, 'ThÆ°á»Ÿng thá»©c ChÃ¨ thÃ¡i nguyÃªn káº¿t há»£p vá»›i Sen Há»“ TÃ¢y', '<p>sdsadasdad</p>', 3, 1, ''),
(18, 'LÃ m Ä‘áº¹p da vá»›i chÃ¨ xanh vÃ  cÃ´ng dá»¥ng báº¥t ngá»', '<p>asdsdd</p>', 3, 1, ''),
(19, 'CÃ¡ch báº£o quáº£n chÃ¨ thÃ¡i nguyÃªn Ä‘Ãºng cÃ¡ch', '<p>addsadddda</p>', 3, 1, ''),
(20, 'PhÃ²ng chÃ³ng tiá»ƒu Ä‘Æ°á»ng báº±ng cÃ¡ch uá»‘ng trÃ ', '<p>sdsadadasdasd</p>', 3, 1, ''),
(21, 'TÃ¡c dá»¥ng cá»§a trÃ  xanh(tÆ°Æ¡i) Ä‘á»‘i vá»›i phá»¥ ná»¯ mang thai', '<p>dadasdasdad</p>', 2, 1, 'anh.jpg'),
(22, 'Video khÃ¡m phÃ¡ vÃ¹ng chÃ¨ thÃ¡i nguyÃªn', '<p>dasdadsdas</p>', 3, 1, ''),
(23, 'TÃ¡c dá»¥ng cá»§a chÃ¨ ThÃ¡i NguyÃªn vá»›i lÃ n da', '<p>T&aacute;c dá»¥ng cá»§a ch&egrave; Th&aacute;i Nguy&ecirc;n vá»›i l&agrave;n da</p>', 2, 1, 'tra_sk1.png'),
(24, 'TÃ¡c dá»¥ng cá»§a chÃ¨ TÃ¢n CÆ°Æ¡ng Nháº¥t pháº©m', '<p>T&aacute;c dá»¥ng cá»§a ch&egrave; T&acirc;n CÆ°Æ¡ng Nháº¥t pháº©m</p>', 2, 1, 'tra_sk2.png'),
(25, 'ChÃ¨ ThÃ¡i NguyÃªn lÃ m giáº£m stress oxy hÃ³a', '<p>Ch&egrave; Th&aacute;i Nguy&ecirc;n l&agrave;m giáº£m stress oxy h&oacute;a</p>', 2, 1, 'tra_sk3.png'),
(26, 'Khá»e máº¡nh nhá» uá»‘ng trÃ ', '<p>Khá»e máº¡nh nhá» uá»‘ng tr&agrave;</p>', 2, 1, 'tra_sk4.png'),
(27, 'NÃªn uá»‘ng chÃ¨ ThÃ¡i NguyÃªn vá»›i máº­t ong', '<p>N&ecirc;n uá»‘ng ch&egrave; Th&aacute;i Nguy&ecirc;n vá»›i máº­t ong</p>', 2, 1, 'tra_sk5.png'),
(28, 'PhÃ²ng chá»‘ng viÃªm khá»›p dáº¡ng tháº¥p báº±ng trÃ  xanh', '<p>Ph&ograve;ng chá»‘ng vi&ecirc;m khá»›p dáº¡ng tháº¥p báº±ng tr&agrave; xanh</p>', 2, 1, 'tra_sk6.png'),
(29, 'TÃ¡c dá»¥ng cá»§a TrÃ  ThÃ¡i NguyÃªn trong mÃ¹a Ä‘Ã´ng', '<p>T&aacute;c dá»¥ng cá»§a Tr&agrave; Th&aacute;i Nguy&ecirc;n trong m&ugrave;a Ä‘&ocirc;ng</p>', 2, 1, 'tra_sk6.png'),
(30, 'PhÃ²ng bá»‡nh loáº£ng xÆ°Æ¡ng báº±ng trÃ  xanh', '<p>Ph&ograve;ng bá»‡nh loáº£ng xÆ°Æ¡ng báº±ng tr&agrave; xanh</p>', 2, 1, 'tra_sk7.png');

-- --------------------------------------------------------

--
-- Table structure for table `ct_dh`
--

CREATE TABLE `ct_dh` (
  `id_dh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_dh` int(11) NOT NULL,
  `ten_kh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `ngay_dh` date NOT NULL,
  `tong_gia` int(11) DEFAULT NULL,
  `dia_chi` varchar(4000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foo_ter1`
--

CREATE TABLE `foo_ter1` (
  `id_ft1` int(11) NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hot_line` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `showroom` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `foo_ter1`
--

INSERT INTO `foo_ter1` (`id_ft1`, `dia_chi`, `mail`, `dien_thoai`, `hot_line`, `website`, `showroom`) VALUES
(3, '43 kim Ä‘á»“ng hoÃ ng mai hÃ  ná»™i', 'lamthien@gmail.com', '0949889598', '0909090909', 'vietnhantra.com', '43 kim Ä‘á»“ng hoÃ ng mai hÃ  ná»™i');

-- --------------------------------------------------------

--
-- Table structure for table `foo_ter2`
--

CREATE TABLE `foo_ter2` (
  `id_ft2` int(11) NOT NULL,
  `dong1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dong2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dong3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dong4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dong5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dong6` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dong7` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dong8` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `foo_ter2`
--

INSERT INTO `foo_ter2` (`id_ft2`, `dong1`, `dong2`, `dong3`, `dong4`, `dong5`, `dong6`, `dong7`, `dong8`) VALUES
(2, 'helo', 'hrllo', 'hello', 'hrllo', 'hello', 'hello', 'trÃ  tÆ°Æ¡i', 'trÃ  khÃ´');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `id_lh` int(11) NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ten_ht` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`id_lh`, `dia_chi`, `mail`, `dien_thoai`, `ten_ht`) VALUES
(27, '43 kim Ä‘á»“ng hoÃ ng mai hÃ  ná»™i', '123@gmail.com', '0123456789', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE `phanhoi` (
  `idph` int(11) NOT NULL,
  `ten_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tieu_de` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phan_loai`
--

CREATE TABLE `phan_loai` (
  `id_pl` int(11) NOT NULL,
  `ten_pl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phan_loai`
--

INSERT INTO `phan_loai` (`id_pl`, `ten_pl`, `trang_thai`) VALUES
(2, 'TrÃ  TÆ°Æ¡i(ChÃ¨ Xanh)', 1),
(3, 'TrÃ  KhÃ´', 1),
(4, 'Há»™p QuÃ  Biáº¿u', 1),
(5, 'TrÃ  Biáº¿u Cao Cáº¥p', 1);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_pl` int(11) NOT NULL,
  `khoi_luong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL,
  `mo_ta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chi_tiet` varchar(4000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `id_pl`, `khoi_luong`, `gia`, `trang_thai`, `mo_ta`, `hinh_anh`, `chi_tiet`) VALUES
(15, 'TrÃ  KhÃ´ Truá»“i ThÆ°á»£ng Háº¡ng', 3, 500, 250000, 1, 'TrÃ  KhÃ´ Truá»“i ThÆ°á»£ng Háº¡ng', 'anh2.jpg', '<p>Tr&agrave; Kh&ocirc; Truá»“i ThÆ°á»£ng Háº¡ng</p>'),
(16, 'TrÃ  KhÃ´ Truá»“i Äáº·c Biá»‡t', 3, 200, 50000, 1, 'TrÃ  KhÃ´ Truá»“i Äáº·c Biá»‡t', 'anh_tra4.png', '<p>Tr&agrave; Kh&ocirc; Truá»“i&nbsp;Äáº·c Biá»‡t</p>'),
(17, 'TrÃ  KhÃ´ Truá»“i Loáº¡i Ngon', 3, 200, 50000, 1, 'TrÃ  KhÃ´ Truá»“in Loáº¡i Ngon', 'sp_qua1.png', '<p>Tr&agrave; Kh&ocirc; Truá»“i&nbsp;Loáº¡i Ngon</p>'),
(18, 'TrÃ  KhÃ´ Truá»“i Äáº­m ÄÃ ', 3, 200, 50000, 1, 'TrÃ  KhÃ´ Truá»“i Äáº­m ÄÃ ', 'sp_anh2.png', '<p>Tr&agrave; Kh&ocirc; Truá»“i Äáº­m Ä&agrave;</p>'),
(19, 'TrÃ  KhÃ´ Truá»“i Loáº¡i ThÆ°á»ng', 3, 200, 50000, 1, 'TrÃ  KhÃ´ Truá»“iLoáº¡i ThÆ°á»ng', 'anh_tra5.png', '<p>Tr&agrave; Kh&ocirc; Truá»“i Loáº¡i ThÆ°á»ng</p>'),
(20, 'TrÃ  TÆ°Æ¡i Truá»“i Loáº¡i Ngon', 2, 200, 50000, 1, 'TrÃ  TÆ°Æ¡i Truá»“i Loáº¡i Ngon', 'anh_tra3.png', '<p>Tr&agrave; TÆ°Æ¡i Truá»“i Loáº¡i Ngon&nbsp;</p>'),
(21, 'TrÃ  TÆ°Æ¡i Truá»“i Äáº­m ÄÃ ', 2, 200, 50000, 1, 'TrÃ  TÆ°Æ¡i Truá»“i Äáº­m ÄÃ ', 'slider1.jpg', '<p>Tr&agrave; TÆ°Æ¡i Truá»“i Äáº­m Ä&agrave;&nbsp;</p>'),
(22, 'TrÃ  Thiáº¿t Quan Ã‚m', 5, 200, 50000, 1, 'TrÃ  Thiáº¿t Quan Ã‚m', 'anh_tra4.png', '<p>Tr&agrave; Thiáº¿t Quan &Acirc;m&nbsp;</p>'),
(23, 'TrÃ  Cao Cáº¥p Ã” Long', 5, 1000, 50000, 1, 'TrÃ  Cao Cáº¥p Ã” Long', 'anh_tra5.png', '<p>Tr&agrave; Cao Cáº¥p &Ocirc; Long&nbsp;</p>'),
(24, 'TrÃ  TrÃ¹i ThÆ°á»£ng', 5, 1000, 50000, 1, 'TrÃ  TrÃ¹i ThÆ°á»£ng', 'tra_sk3.png', '<p>Tr&agrave; Tr&ugrave;i ThÆ°á»£ng&nbsp;</p>'),
(25, 'Há»™p QuÃ  Táº·ng TrÃ  ( Há»™p Giáº¥y) 2 LÃµi', 4, 0, 0, 1, 'QuÃ  Táº·ng TrÃ  Trá»‘ng Äá»“ng Há»™p Giáº¥y', 'sp_qua1.png', '<p>adasdsdasasd</p>'),
(26, 'Há»™p QuÃ  Táº·ng TrÃ  ( Há»™p Giáº¥y) 3 LÃµi', 4, 0, 0, 1, 'QuÃ  Táº·ng TrÃ  Trá»‘ng Äá»“ng Há»™p Giáº¥y', 'sp_anh2.png', '<p>asdasdas</p>'),
(27, 'Há»™p QuÃ  Táº·ng TrÃ  ( Há»™p Giáº¥y) 2 LÃµi', 4, 0, 0, 1, 'QuÃ  Táº·ng TrÃ  Trá»‘ng Äá»“ng Há»™p Gá»—', 'sp_anh3.png', '<p>dsssad</p>'),
(28, 'Há»™p QuÃ  Táº·ng TrÃ  (Há»™p Gá»— ) 3 LÃµi', 4, 0, 0, 1, 'QuÃ  Táº·ng TrÃ  Trá»‘ng Äá»“ng Há»™p Gá»—', 'sp_anh4.png', '<p>sdadsadasds</p>'),
(29, 'Há»™p QuÃ  Táº·ng Combo TrÃ  VÃ  áº¤m', 4, 0, 0, 1, 'QuÃ  Táº·ng TrÃ  vÃ  áº¤m Sá»©', 'sp_anh5.png', '<p>asdadasdasasdad</p>');

-- --------------------------------------------------------

--
-- Table structure for table `trang_chu`
--

CREATE TABLE `trang_chu` (
  `id_tc` int(11) NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `banner1` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trang_chu`
--

INSERT INTO `trang_chu` (`id_tc`, `logo`, `banner`, `banner1`) VALUES
(2, 'favicon.ico', 'Má»™t láº§n thÆ°á»Ÿnng thá»©c ,', 'Má»™t láº§n mong nhá»›');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bv`);

--
-- Indexes for table `ct_dh`
--
ALTER TABLE `ct_dh`
  ADD PRIMARY KEY (`id_dh`,`id_sp`),
  ADD KEY `id_dh` (`id_dh`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_dh_2` (`id_dh`),
  ADD KEY `id_sp_2` (`id_sp`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_dh`);

--
-- Indexes for table `foo_ter1`
--
ALTER TABLE `foo_ter1`
  ADD PRIMARY KEY (`id_ft1`);

--
-- Indexes for table `foo_ter2`
--
ALTER TABLE `foo_ter2`
  ADD PRIMARY KEY (`id_ft2`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lh`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`idph`);

--
-- Indexes for table `phan_loai`
--
ALTER TABLE `phan_loai`
  ADD PRIMARY KEY (`id_pl`),
  ADD KEY `id_pl` (`id_pl`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_pl` (`id_pl`);

--
-- Indexes for table `trang_chu`
--
ALTER TABLE `trang_chu`
  ADD PRIMARY KEY (`id_tc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `foo_ter1`
--
ALTER TABLE `foo_ter1`
  MODIFY `id_ft1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `foo_ter2`
--
ALTER TABLE `foo_ter2`
  MODIFY `id_ft2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `idph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `phan_loai`
--
ALTER TABLE `phan_loai`
  MODIFY `id_pl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `trang_chu`
--
ALTER TABLE `trang_chu`
  MODIFY `id_tc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_dh`
--
ALTER TABLE `ct_dh`
  ADD CONSTRAINT `ct_dh_ibfk_1` FOREIGN KEY (`id_dh`) REFERENCES `don_hang` (`id_dh`),
  ADD CONSTRAINT `ct_dh_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
