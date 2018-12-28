-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Лис 02 2018 р., 15:50
-- Версія сервера: 5.7.11
-- Версія PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `smp_communication_survey`
--

-- --------------------------------------------------------

--
-- Структура таблиці `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `typ` text NOT NULL,
  `wiek` text NOT NULL,
  `stanowisko` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `employee`
--

INSERT INTO `employee` (`id`, `session_id`, `typ`, `wiek`, `stanowisko`, `date`) VALUES
(173, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-09-27 10:46:58'),
(172, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-09-27 10:45:05'),
(171, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-09-27 10:42:40'),
(201, 'i5ottfm33vof91cts0le12k467', 'Direct', '> 30', 'Pracownik', '2018-11-02 13:47:16'),
(189, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-10-03 10:13:23'),
(188, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-10-02 09:54:35'),
(187, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-10-02 06:44:17'),
(185, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '> 30', 'Pracownik', '2018-10-01 11:57:09'),
(186, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-10-02 06:43:30'),
(184, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '> 30', 'Pracownik', '2018-09-28 13:59:09'),
(157, 'nrrg8u2pfk2pa723lcvtmtal93', 'Direct', '< 30', 'Pracownik', '2018-09-26 06:36:42'),
(156, 'cg696prin7m6ippmcgqlpi9670', 'Indirect', '< 30', 'Pracownik', '2018-09-26 05:53:26'),
(155, 'cg696prin7m6ippmcgqlpi9670', 'Direct', '> 40', 'Pracownik', '2018-09-26 05:53:11'),
(154, 'nr8jnfod1apunhdvaqhfkgd3o0', 'Indirect', '< 30', 'Pracownik', '2018-09-25 13:53:35'),
(153, 'jna4e652g5kto69eosu4tq8tt7', 'Direct', '< 30', 'Pracownik', '2018-09-25 13:48:43'),
(152, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-09-25 13:42:47'),
(151, 'e8nnr9rsun7snqjesrfko9jj13', 'Indirect', '< 30', 'Pracownik', '2018-09-25 13:36:45'),
(150, 'njv1qlcg90826rj715phostr77', 'Indirect', '> 40', 'Supervisor', '2018-09-25 13:22:53'),
(149, 'mfver2gv5qqnnte1g1aet642m4', 'Direct', '< 30', 'Pracownik', '2018-09-25 13:11:48'),
(148, 'mvdvp8fkf67ooh06v4bcsvp0n6', 'Direct', '< 30', 'Pracownik', '2018-09-25 13:07:57'),
(147, 'e8nnr9rsun7snqjesrfko9jj13', 'Indirect', '< 30', 'Pracownik', '2018-09-25 12:57:17'),
(146, 'njv1qlcg90826rj715phostr77', 'Direct', '< 30', 'Pracownik', '2018-09-25 12:47:37'),
(145, 'njv1qlcg90826rj715phostr77', 'Direct', '< 30', 'Pracownik', '2018-09-25 12:31:07'),
(144, 'njv1qlcg90826rj715phostr77', 'Direct', '< 30', 'Pracownik', '2018-09-25 12:20:40'),
(143, '631se96bqc54g44bn7th61s180', 'Direct', '< 30', 'Pracownik', '2018-09-25 12:14:11'),
(142, '631se96bqc54g44bn7th61s180', 'Indirect', '< 30', 'Pracownik', '2018-09-25 12:04:34'),
(141, '631se96bqc54g44bn7th61s180', 'Direct', '> 30', 'Pracownik', '2018-09-25 12:02:50'),
(200, 'i5ottfm33vof91cts0le12k467', 'Direct', '> 40', 'Supervisor', '2018-11-02 13:46:40'),
(140, 'nrrg8u2pfk2pa723lcvtmtal93', 'Direct', '> 30', 'Pracownik', '2018-09-21 09:09:19'),
(138, 'kj5scj4ipbpfva0so6tqblaov4', 'Direct', '> 30', 'Pracownik', '2018-09-19 13:45:56'),
(137, 'kj5scj4ipbpfva0so6tqblaov4', 'Indirect', '> 40', 'Supervisor', '2018-09-19 13:10:18'),
(136, 'ifn2npgemlg1v7btt77a6fpjb2', 'Direct', '> 30', 'Pracownik', '2018-09-19 12:47:46'),
(134, 'ifn2npgemlg1v7btt77a6fpjb2', 'Direct', '> 30', 'Pracownik', '2018-09-19 12:14:43'),
(132, 'nrrg8u2pfk2pa723lcvtmtal93', 'Direct', '< 30', 'Pracownik', '2018-09-19 10:02:57'),
(199, 'i5ottfm33vof91cts0le12k467', 'Direct', '> 30', 'Pracownik', '2018-11-02 13:44:56'),
(198, 'i5ottfm33vof91cts0le12k467', 'Indirect', '> 40', 'Supervisor', '2018-11-02 09:28:26'),
(197, 'i5ottfm33vof91cts0le12k467', 'Direct', '< 30', 'Pracownik', '2018-11-02 07:47:19'),
(174, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-09-27 10:56:52'),
(196, 'ifn2npgemlg1v7btt77a6fpjb2', 'Indirect', '> 30', 'Pracownik', '2018-10-29 09:25:53'),
(195, '9f6gcsvha0932h9l9ngr4o9o85', 'Indirect', '> 30', 'Pracownik', '2018-10-23 11:12:16'),
(177, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-09-28 07:47:14'),
(194, 'tojtiauorn3l2rp9vliluu4b47', 'Indirect', '> 30', 'Pracownik', '2018-10-23 11:04:02'),
(193, 'nr8jnfod1apunhdvaqhfkgd3o0', 'Indirect', '> 30', 'Pracownik', '2018-10-23 10:58:48'),
(180, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-09-28 09:54:49'),
(192, 'nr8jnfod1apunhdvaqhfkgd3o0', 'Indirect', '< 30', 'Pracownik', '2018-10-10 13:22:17'),
(191, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '> 30', 'Pracownik', '2018-10-09 05:59:03'),
(190, '1v1o899a0s6lceu0uf8lvcdlp1', 'Indirect', '< 30', 'Pracownik', '2018-10-03 10:13:59');

-- --------------------------------------------------------

--
-- Структура таблиці `main_apps`
--

CREATE TABLE `main_apps` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `intranet` int(3) DEFAULT NULL,
  `comarch` int(3) DEFAULT NULL,
  `bpcs` int(3) DEFAULT NULL,
  `qms` int(3) DEFAULT NULL,
  `sap` int(3) DEFAULT NULL,
  `asseco` int(3) DEFAULT NULL,
  `sanden_vision` text,
  `facebook` int(3) DEFAULT NULL,
  `smp_web_page` int(3) DEFAULT NULL,
  `baza_sugestii` int(3) DEFAULT NULL,
  `sanden_month_news` int(3) DEFAULT NULL,
  `zmt` int(3) DEFAULT NULL,
  `parcel_warehouse` int(3) DEFAULT NULL,
  `lessons_learned` int(3) DEFAULT NULL,
  `own_title` text,
  `own` int(3) DEFAULT NULL,
  `total` int(3) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `main_apps`
--

INSERT INTO `main_apps` (`id`, `session_id`, `intranet`, `comarch`, `bpcs`, `qms`, `sap`, `asseco`, `sanden_vision`, `facebook`, `smp_web_page`, `baza_sugestii`, `sanden_month_news`, `zmt`, `parcel_warehouse`, `lessons_learned`, `own_title`, `own`, `total`, `date`) VALUES
(11, 'nrrg8u2pfk2pa723lcvtmtal93', 9, 11, 8, 8, 6, 7, '7', 7, 9, 10, 5, 6, 5, 5, 'Visualisacja', 7, 110, '2018-09-14 09:15:10'),
(65, 'i5ottfm33vof91cts0le12k467', 45, 55, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 100, '2018-11-02 13:57:27'),
(64, 'i5ottfm33vof91cts0le12k467', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-11-02 10:18:30'),
(63, 'ai09brtjlq9e31tnlv9kaqo4k4', 14, 11, 18, 17, 18, 16, '14', 16, 16, 12, 15, 13, 17, 15, '', 13, 225, '2018-09-28 12:36:15'),
(62, 'kj5scj4ipbpfva0so6tqblaov4', 34, 41, 0, 6, 0, 0, '0', 4, 11, 0, 4, 0, 0, 0, '', 0, 100, '2018-09-26 10:09:21'),
(61, 'nr8jnfod1apunhdvaqhfkgd3o0', 34, 19, 8, 39, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 100, '2018-09-26 09:54:46'),
(59, 'njv1qlcg90826rj715phostr77', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-09-26 06:54:55'),
(60, 'njv1qlcg90826rj715phostr77', 52, 42, 6, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 100, '2018-09-26 07:00:46'),
(58, 'njv1qlcg90826rj715phostr77', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 'sadsad', 30, 30, '2018-09-26 06:12:34'),
(57, 'njv1qlcg90826rj715phostr77', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 'sadsad', 0, 0, '2018-09-26 06:12:26'),
(56, 'njv1qlcg90826rj715phostr77', 100, 100, 100, 100, 100, 100, '100', 100, 0, 0, 0, 0, 0, 0, 'TEST', 0, 800, '2018-09-26 06:08:47'),
(55, '1v1o899a0s6lceu0uf8lvcdlp1', 10, 48, 24, 33, 0, 0, '0', 0, 0, 29, 0, 0, 0, 36, '', 0, 180, '2018-09-25 13:52:09'),
(54, 'njv1qlcg90826rj715phostr77', 34, 23, 28, 29, 40, 26, '36', 32, 0, 0, 0, 0, 0, 0, '', 0, 248, '2018-09-25 12:52:06'),
(53, 'kj5scj4ipbpfva0so6tqblaov4', 22, 10, 0, 7, 0, 12, '0', 0, 20, 5, 0, 0, 3, 0, '', 21, 100, '2018-09-19 13:17:06'),
(52, 'ifn2npgemlg1v7btt77a6fpjb2', 6, 0, 14, 32, 0, 0, '0', 0, 0, 0, 0, 0, 11, 0, 'test', 37, 100, '2018-09-19 12:16:29'),
(51, 'ai09brtjlq9e31tnlv9kaqo4k4', 27, 21, 17, 20, 21, 19, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 125, '2018-09-19 09:37:27');

-- --------------------------------------------------------

--
-- Структура таблиці `main_apps_rate`
--

CREATE TABLE `main_apps_rate` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `source` text NOT NULL,
  `opcja_1` text NOT NULL,
  `opcja_2` text NOT NULL,
  `opcja_3` text NOT NULL,
  `opcja_4` text NOT NULL,
  `opcja_5` text NOT NULL,
  `opcja_1_title` text NOT NULL,
  `opcja_2_title` text NOT NULL,
  `opcja_3_title` text NOT NULL,
  `opcja_4_title` text NOT NULL,
  `opcja_5_title` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `main_apps_rate`
--

INSERT INTO `main_apps_rate` (`id`, `session_id`, `source`, `opcja_1`, `opcja_2`, `opcja_3`, `opcja_4`, `opcja_5`, `opcja_1_title`, `opcja_2_title`, `opcja_3_title`, `opcja_4_title`, `opcja_5_title`, `date`) VALUES
(1, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bazÄ… danych', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'intranet', 'comarch', 'sap', 'qms', 'asseco', '2018-09-19 09:50:53'),
(2, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bazÄ… danych', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'intranet', 'comarch', 'sap', 'qms', 'asseco', '2018-09-19 09:51:38'),
(3, 'ifn2npgemlg1v7btt77a6fpjb2', 'bazÄ… danych', 'raczej_dobrze', 'raczej_zle', 'raczej_zle', 'ani_ani', 'ani_ani', 'own', 'qms', 'bpcs', 'parcel_warehouse', 'intranet', '2018-09-19 12:16:57'),
(4, 'kj5scj4ipbpfva0so6tqblaov4', 'bazÄ… danych', 'ani_ani', 'raczej_zle', 'ani_ani', 'raczej_zle', 'zle', 'intranet', 'own', 'smp_web_page', 'asseco', 'comarch', '2018-09-19 13:18:02'),
(5, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bazÄ… danych', '', '', '', '', '', 'intranet', 'comarch', 'sap', 'qms', 'asseco', '2018-09-20 09:16:37'),
(6, 'njv1qlcg90826rj715phostr77', 'bazÄ… danych', '', '', '', '', '', 'sap', 'sanden_vision', 'intranet', 'facebook', 'qms', '2018-09-25 12:57:15'),
(7, '1v1o899a0s6lceu0uf8lvcdlp1', 'bazÄ… danych', '3', '3', '3', '3', '3', 'comarch', 'lessons_learned', 'qms', 'baza_sugestii', 'bpcs', '2018-09-25 13:52:50'),
(8, 'njv1qlcg90826rj715phostr77', 'bazÄ… danych', '', '', '', '', '', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', '2018-09-26 06:08:53'),
(9, 'njv1qlcg90826rj715phostr77', 'bazÄ… danych', '', '', '', '', '', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', '2018-09-26 06:54:57'),
(10, 'njv1qlcg90826rj715phostr77', 'bazÄ… danych', '', '', '', '', '', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', '2018-09-26 07:00:51'),
(11, 'kj5scj4ipbpfva0so6tqblaov4', 'bazÄ… danych', '', '', '', '', '', 'comarch', 'intranet', 'smp_web_page', 'qms', 'facebook', '2018-09-26 10:10:27'),
(12, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bazÄ… danych', '', '', '', '', '', 'bpcs', 'sap', 'qms', 'parcel_warehouse', 'asseco', '2018-09-28 12:36:28'),
(13, 'i5ottfm33vof91cts0le12k467', 'bazÄ… danych', '', '', '', '', '', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', '2018-11-02 10:18:35'),
(14, 'i5ottfm33vof91cts0le12k467', 'bazÄ… danych', '', '', '', '', '', 'comarch', 'intranet', 'bpcs', 'qms', 'sap', '2018-11-02 13:57:31');

-- --------------------------------------------------------

--
-- Структура таблиці `main_expectation`
--

CREATE TABLE `main_expectation` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `source_rate` int(1) DEFAULT NULL,
  `opcja_1` text NOT NULL,
  `opcja_2` text NOT NULL,
  `opcja_3` text NOT NULL,
  `opcja_4` text NOT NULL,
  `opcja_5` text NOT NULL,
  `opcja_1_title` text NOT NULL,
  `opcja_2_title` text NOT NULL,
  `opcja_3_title` text NOT NULL,
  `opcja_4_title` text NOT NULL,
  `opcja_5_title` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `main_expectation`
--

INSERT INTO `main_expectation` (`id`, `session_id`, `source_rate`, `opcja_1`, `opcja_2`, `opcja_3`, `opcja_4`, `opcja_5`, `opcja_1_title`, `opcja_2_title`, `opcja_3_title`, `opcja_4_title`, `opcja_5_title`, `date`) VALUES
(4, 'k1dmepc9sp39antr00u4034805', 0, 'sadsad', 'sadsada', 'asdsad', '', '', 'sdfsdfsd', 'sdfsdfsd', 'sdfsdf', 'sdfsdf', 'sdfsdfsd', '2018-09-18 09:25:49'),
(5, 'nrrg8u2pfk2pa723lcvtmtal93', 0, '', '', '', '', '', 'comarch', 'baza_sugestii', 'intranet', 'smp_web_page', 'bpcs', '2018-09-18 09:25:49'),
(9, 'ai09brtjlq9e31tnlv9kaqo4k4', NULL, 'adsa', 'dsad', 'asdsada', 'sdsad', 'asdasd', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-19 10:17:59'),
(10, 'ai09brtjlq9e31tnlv9kaqo4k4', NULL, 'asdasd', 'sada', 'sdasd', 'asdas', 'dasda', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-19 10:18:18'),
(11, 'ai09brtjlq9e31tnlv9kaqo4k4', 2, 'adsas', 'dsadas', 'dasd', 'asdasd', 'sadasd', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-19 10:21:08'),
(12, 'ai09brtjlq9e31tnlv9kaqo4k4', 1, 'adsad', 'sadsadas', 'dasda', 'sdsad', 'asdasd', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-19 10:21:24'),
(13, 'ai09brtjlq9e31tnlv9kaqo4k4', 1, 'asdsad', 'sadsa', 'dsadsa', 'dsadsa', 'dsad', 'write', 'face_to_face', 'phone', 'dept_meet', 'prod_meet', '2018-09-19 10:42:05'),
(14, 'ai09brtjlq9e31tnlv9kaqo4k4', 2, 'adsad', 'asdsa', 'dsadsa', 'dasdsad', 'sadsad', 'face_to_face', 'phone', 'write', 'dept_meet', 'prod_meet', '2018-09-19 10:42:22'),
(15, 'ifn2npgemlg1v7btt77a6fpjb2', 1, 'lalala', 'blablabla', 'aaaaaaa', 'wwwwww', 'nonononon', 'own', 'qms', 'bpcs', 'parcel_warehouse', 'intranet', '2018-09-19 12:17:20'),
(16, 'ifn2npgemlg1v7btt77a6fpjb2', 2, 'aaaaaa', 'bbbbbb', 'ccccccc', 'ddddddd', 'eeeeeee', 'own_title', 'prod_meet', 'own', 'phone', 'write', '2018-09-19 12:19:37'),
(17, 'ifn2npgemlg1v7btt77a6fpjb2', 1, 'aaaaa', 'bbbbb', 'ccccc', 'ddddd', 'eeeee', 'dept_meet', 'write', 'prod_meet', 'phone', 'face_to_face', '2018-09-19 12:49:05'),
(18, 'ifn2npgemlg1v7btt77a6fpjb2', 2, 'aaa', 'bbb', 'cccc', 'dddd', 'eeee', 'write', 'dept_meet', 'smp_d', 'phone', 'face_to_face', '2018-09-19 12:50:43'),
(19, 'kj5scj4ipbpfva0so6tqblaov4', 1, '', '', '', '', '', 'intranet', 'own', 'smp_web_page', 'asseco', 'comarch', '2018-09-19 13:20:01'),
(20, 'kj5scj4ipbpfva0so6tqblaov4', 2, '', '', '', '', '', 'face_to_face', 'write', 'unformal_meet', 'dept_meet', 'phone', '2018-09-19 13:23:38');

-- --------------------------------------------------------

--
-- Структура таблиці `main_tools`
--

CREATE TABLE `main_tools` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `main_source` text NOT NULL,
  `phone` text,
  `write` int(3) DEFAULT NULL,
  `face_to_face` int(3) DEFAULT NULL,
  `dept_meet` int(3) DEFAULT NULL,
  `prod_meet` int(3) DEFAULT NULL,
  `proj_meet` int(3) DEFAULT NULL,
  `budget_meet` int(3) DEFAULT NULL,
  `smp_d` int(3) DEFAULT NULL,
  `smp_w` int(3) DEFAULT NULL,
  `cs` int(3) DEFAULT NULL,
  `unformal_meet` int(3) DEFAULT NULL,
  `own_title` text NOT NULL,
  `own` int(3) DEFAULT NULL,
  `total` int(3) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `main_tools`
--

INSERT INTO `main_tools` (`id`, `session_id`, `main_source`, `phone`, `write`, `face_to_face`, `dept_meet`, `prod_meet`, `proj_meet`, `budget_meet`, `smp_d`, `smp_w`, `cs`, `unformal_meet`, `own_title`, `own`, `total`, `date`) VALUES
(189, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, '', 0, 38, '2018-09-28 12:32:17'),
(20, 'nr8jnfod1apunhdvaqhfkgd3o0', '', '14', 10, 22, 27, 30, NULL, 0, 61, 0, NULL, 0, '', 0, 255, '2018-09-11 11:23:34'),
(19, 'c4m0777sa9e3i16sjqdetpl9m4', '', '34', 47, 35, 31, 40, NULL, 32, 27, 35, NULL, 49, 'Mozzila', 45, 465, '2018-09-10 13:34:33'),
(18, 'nb4m9oudr2k6km1fpkrgiu7ds5', '', '38', 62, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-10 13:05:29'),
(188, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, '', 0, 38, '2018-09-28 12:29:18'),
(187, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, '', 0, 36, '2018-09-28 12:28:09'),
(14, 'g14dopd52hqk8jlihvhe9fg1c6', '', '0', 0, 0, 0, 33, NULL, 53, 23, 0, NULL, 0, 'asdasdadsa', 0, 146, '2018-09-10 10:48:52'),
(186, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, 0, 43, '', 0, 43, '2018-09-28 12:25:00'),
(185, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, '', 0, 0, '2018-09-28 12:24:44'),
(184, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, '', 0, 0, '2018-09-28 12:11:32'),
(25, 'nrrg8u2pfk2pa723lcvtmtal93', 'zarzÄ…dem SMP', '18', 32, 26, 14, 17, NULL, 15, 16, 20, NULL, 11, '', 10, 210, '2018-09-14 09:13:47'),
(26, 'utmp8909a6865e5j42451un0i3', 'zarzÄ…dem SMP', '6', 20, 29, 20, 0, NULL, 8, 0, 0, NULL, 10, '', 0, 100, '2018-09-14 10:37:01'),
(183, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, 63, 0, '', 0, 63, '2018-09-28 12:10:54'),
(182, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-28 12:02:56'),
(181, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '41', 41, 41, 41, 41, NULL, 41, 41, 41, NULL, 45, '', 43, 498, '2018-09-28 12:02:48'),
(180, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 36, 0, 0, 34, NULL, 0, 33, 31, NULL, 0, '', 0, 178, '2018-09-28 12:01:03'),
(179, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '44', 42, 59, 0, 0, NULL, 0, 0, 0, NULL, 35, '', 0, 222, '2018-09-28 11:56:02'),
(178, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-28 11:55:44'),
(177, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '28', 28, 24, 0, 0, NULL, 25, 0, 0, NULL, 0, '', 0, 129, '2018-09-28 11:52:28'),
(176, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '39', 33, 33, 0, 0, NULL, 30, 0, 0, NULL, 0, '', 0, 169, '2018-09-28 11:52:08'),
(175, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '21', 21, 22, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 89, '2018-09-28 11:51:50'),
(174, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '50', 49, 49, 48, 48, NULL, 0, 0, 0, NULL, 0, '', 0, 244, '2018-09-28 10:02:03'),
(173, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '30', 33, 0, 34, 0, NULL, 0, 0, 43, NULL, 0, '', 0, 164, '2018-09-28 10:01:44'),
(172, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '22', 22, 45, 20, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 129, '2018-09-28 10:00:14'),
(171, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '10', 10, 49, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 74, '2018-09-28 09:58:18'),
(170, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '30', 10, 50, 0, 0, NULL, 0, 66, 24, NULL, 0, '', 0, 214, '2018-09-28 09:57:04'),
(169, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '20', 10, 50, 8, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-27 10:44:29'),
(168, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:21:23'),
(167, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:21:19'),
(166, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:21:16'),
(165, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:21:12'),
(164, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:20:37'),
(163, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:18:48'),
(162, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:17:01'),
(161, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:16:58'),
(160, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-27 07:16:55'),
(159, 'kj5scj4ipbpfva0so6tqblaov4', 'swoim dziaÅ‚em', '0', 26, 35, 0, 0, NULL, 0, 0, 0, NULL, 13, '', 0, 100, '2018-09-26 10:13:36'),
(158, 'kj5scj4ipbpfva0so6tqblaov4', 'swoim dziaÅ‚em', '0', 23, 39, 0, 0, NULL, 0, 0, 0, NULL, 17, '', 0, 100, '2018-09-26 10:12:09'),
(157, 'nr8jnfod1apunhdvaqhfkgd3o0', 'swoim dziaÅ‚em', '20', 20, 50, 10, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-26 08:21:27'),
(156, 'nr8jnfod1apunhdvaqhfkgd3o0', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '20', 20, 50, 10, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-26 08:19:46'),
(155, 'njv1qlcg90826rj715phostr77', 'innym dziaÅ‚em SMP', '0', 47, 0, 0, 0, NULL, 0, 0, 0, NULL, 44, '', 0, 91, '2018-09-26 07:00:57'),
(154, 'njv1qlcg90826rj715phostr77', 'innym dziaÅ‚em SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, 'sadsadsadsa', 46, 46, '2018-09-26 06:55:32'),
(153, 'njv1qlcg90826rj715phostr77', 'innym dziaÅ‚em SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-26 06:55:16'),
(152, 'njv1qlcg90826rj715phostr77', 'innym dziaÅ‚em SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, 'test', 56, 56, '2018-09-26 06:55:05'),
(151, '631se96bqc54g44bn7th61s180', 'zarzÄ…dem SMP', '24', 23, 24, 28, 1, NULL, 0, 0, 0, NULL, 0, 'test', 0, 100, '2018-09-26 06:35:44'),
(150, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '20', 20, 50, 10, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-25 13:47:32'),
(149, 'njv1qlcg90826rj715phostr77', 'innym dziaÅ‚em SMP', '34', 34, 51, 42, 48, NULL, 52, 44, 38, NULL, 0, '', 0, 460, '2018-09-25 12:57:28'),
(148, 'njv1qlcg90826rj715phostr77', 'zarzÄ…dem SMP', '35', 16, 36, 36, 36, NULL, 36, 36, 36, NULL, 29, '', 29, 399, '2018-09-25 12:28:51'),
(147, 'njv1qlcg90826rj715phostr77', 'zarzÄ…dem SMP', '45', 35, 0, 39, 0, NULL, 0, 23, 42, NULL, 0, '', 0, 184, '2018-09-25 12:21:02'),
(146, '631se96bqc54g44bn7th61s180', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-25 12:14:36'),
(145, '631se96bqc54g44bn7th61s180', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-25 12:13:56'),
(144, '631se96bqc54g44bn7th61s180', 'zarzÄ…dem SMP', '0', 40, 0, 0, 37, NULL, 43, 0, 39, NULL, 35, '', 0, 194, '2018-09-25 12:13:17'),
(143, 'nrrg8u2pfk2pa723lcvtmtal93', 'zarzÄ…dem SMP', '50', 28, 65, 78, 93, NULL, 10, 0, 0, NULL, 0, '', 0, 324, '2018-09-21 09:09:44'),
(142, 'kj5scj4ipbpfva0so6tqblaov4', 'zarzÄ…dem SMP', '34', 0, 0, 22, 0, NULL, 0, 16, 0, NULL, 0, '', 0, 100, '2018-09-19 13:48:44'),
(141, 'kj5scj4ipbpfva0so6tqblaov4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '6', 20, 25, 15, 0, NULL, 6, 0, 0, NULL, 19, '', 0, 100, '2018-09-19 13:22:52'),
(140, 'ifn2npgemlg1v7btt77a6fpjb2', 'swoim dziaÅ‚em', '0', 29, 0, 24, 0, NULL, 0, 22, 0, NULL, 0, '', 0, 100, '2018-09-19 12:50:16'),
(139, 'ifn2npgemlg1v7btt77a6fpjb2', 'swoim dziaÅ‚em', '0', 44, 44, 0, 12, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-19 12:49:31'),
(138, 'ifn2npgemlg1v7btt77a6fpjb2', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 32, 0, 34, 5, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-19 12:48:42'),
(137, 'ifn2npgemlg1v7btt77a6fpjb2', 'zarzÄ…dem SMP', '6', 26, 9, 0, 12, NULL, 0, 0, 0, NULL, 0, 'test1', 47, 100, '2018-09-19 12:26:06'),
(136, 'ifn2npgemlg1v7btt77a6fpjb2', 'zarzÄ…dem SMP', '40', 22, 11, 24, 0, NULL, 3, 0, 0, NULL, 0, '', 0, 100, '2018-09-19 12:25:34'),
(135, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 15, 29, NULL, 29, 'TEST', 49, 144, '2018-09-19 12:22:24'),
(134, 'ifn2npgemlg1v7btt77a6fpjb2', 'zarzÄ…dem SMP', '13', 11, 5, 0, 44, NULL, 0, 0, 0, NULL, 0, 'tak to jest', 27, 100, '2018-09-19 12:17:55'),
(133, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '38', 32, 42, 27, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 139, '2018-09-19 10:42:12'),
(132, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '31', 52, 32, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 115, '2018-09-19 10:41:54'),
(131, 'nrrg8u2pfk2pa723lcvtmtal93', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '32', 30, 28, 31, 33, NULL, 0, 0, 0, NULL, 0, 'TEST', 0, 154, '2018-09-19 10:06:45'),
(130, 'nrrg8u2pfk2pa723lcvtmtal93', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-19 10:06:16'),
(129, 'nrrg8u2pfk2pa723lcvtmtal93', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-19 10:05:53'),
(128, 'nrrg8u2pfk2pa723lcvtmtal93', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-19 10:04:53'),
(127, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-19 10:04:11'),
(126, 'nrrg8u2pfk2pa723lcvtmtal93', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-19 10:03:53'),
(125, 'nrrg8u2pfk2pa723lcvtmtal93', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '16', 10, 26, 23, 26, NULL, 0, 0, 0, NULL, 0, '', 0, 125, '2018-09-19 10:03:39'),
(124, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '18', 23, 22, 26, 35, NULL, 22, 21, 21, NULL, 29, 'TEST', 28, 304, '2018-09-19 09:59:48'),
(123, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '37', 27, 36, 37, 42, NULL, 0, 0, 0, NULL, 0, '', 0, 179, '2018-09-19 09:57:00'),
(122, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-19 09:56:31'),
(121, 'ai09brtjlq9e31tnlv9kaqo4k4', 'innym dziaÅ‚em SMP', '21', 42, 24, 32, 35, NULL, 0, 0, 0, NULL, 0, 'TEST', 42, 196, '2018-09-19 09:38:00'),
(190, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, '', 0, 41, '2018-09-28 12:32:54'),
(191, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, 45, 0, 0, 0, 0, 0, '', 0, 45, '2018-09-28 12:34:16'),
(192, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, 51, 0, 37, 28, 35, 0, '', 0, 151, '2018-09-28 12:34:47'),
(193, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '43', 48, 32, 28, 41, 0, 0, 0, 0, 0, 0, '', 0, 192, '2018-09-28 12:35:09'),
(194, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '31', 37, 29, 28, 29, 51, 0, 0, 0, 0, 0, '', 0, 205, '2018-09-28 12:36:38'),
(195, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '29', 21, 50, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 100, '2018-09-28 13:59:33'),
(196, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'sadasdasd', 0, 100, '2018-10-01 11:57:29'),
(197, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '28', 20, 16, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 64, '2018-10-09 06:00:04'),
(198, 'nr8jnfod1apunhdvaqhfkgd3o0', 'innym dziaÅ‚em SMP', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'dfgdfgdfg', 53, 53, '2018-10-10 13:38:00'),
(199, '9f6gcsvha0932h9l9ngr4o9o85', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '63', 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 100, '2018-10-23 11:14:30'),
(200, '9f6gcsvha0932h9l9ngr4o9o85', 'zarzÄ…dem SMP', '71', 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 100, '2018-10-23 11:18:22'),
(201, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '47', 55, 53, 37, 30, 36, 34, 38, 33, 27, 42, '', 40, 472, '2018-10-29 09:29:41'),
(202, 'ai09brtjlq9e31tnlv9kaqo4k4', 'innym dziaÅ‚em SMP', '40', 44, 30, 22, 35, 21, 36, 0, 0, 0, 36, '', 0, 264, '2018-10-29 09:29:55'),
(203, 'i5ottfm33vof91cts0le12k467', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-11-02 10:17:46'),
(204, 'i5ottfm33vof91cts0le12k467', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-11-02 10:18:39');

-- --------------------------------------------------------

--
-- Структура таблиці `main_tools_rate`
--

CREATE TABLE `main_tools_rate` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `source` text NOT NULL,
  `opcja_1` text NOT NULL,
  `opcja_2` text NOT NULL,
  `opcja_3` text NOT NULL,
  `opcja_4` text NOT NULL,
  `opcja_5` text NOT NULL,
  `opcja_1_title` text NOT NULL,
  `opcja_2_title` text NOT NULL,
  `opcja_3_title` text NOT NULL,
  `opcja_4_title` text NOT NULL,
  `opcja_5_title` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `main_tools_rate`
--

INSERT INTO `main_tools_rate` (`id`, `session_id`, `source`, `opcja_1`, `opcja_2`, `opcja_3`, `opcja_4`, `opcja_5`, `opcja_1_title`, `opcja_2_title`, `opcja_3_title`, `opcja_4_title`, `opcja_5_title`, `date`) VALUES
(86, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '', '', '', '', '', 'face_to_face', 'phone', 'write', 'dept_meet', 'prod_meet', '2018-10-01 06:16:39'),
(85, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '3', '3', '3', '3', '3', 'proj_meet', 'write', 'phone', 'face_to_face', 'prod_meet', '2018-09-28 12:36:45'),
(83, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '', '', '', '', '', 'proj_meet', 'smp_d', 'cs', 'smp_w', 'phone', '2018-09-28 12:35:00'),
(84, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '3', '3', '3', '3', '3', 'write', 'phone', 'prod_meet', 'face_to_face', 'dept_meet', '2018-09-28 12:35:14'),
(82, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '', '', '', '', '', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-28 10:02:23'),
(6, 'k1dmepc9sp39antr00u4034805', '', '', '', '', '', 'Raczej_dobrze', '', '', '', '', '', NULL),
(7, 'nrrg8u2pfk2pa723lcvtmtal93', '', 'zle', 'raczej_zle', 'ani_ani', 'raczej_zle', 'Raczej_dobrze', 'comarch', 'baza_sugestii', 'intranet', 'smp_web_page', 'bpcs', NULL),
(81, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '', '', '', '', '', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-27 07:18:40'),
(80, 'kj5scj4ipbpfva0so6tqblaov4', 'swoim dziaÅ‚em', '2', '3', '2', '4', '4', 'face_to_face', 'write', 'unformal_meet', 'phone', 'dept_meet', '2018-09-26 10:14:06'),
(79, 'nr8jnfod1apunhdvaqhfkgd3o0', 'swoim dziaÅ‚em', '1', '1', '1', '1', '1', 'face_to_face', 'phone', 'write', 'dept_meet', 'prod_meet', '2018-09-26 08:21:40'),
(78, 'nr8jnfod1apunhdvaqhfkgd3o0', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '', '', '', '', '', 'face_to_face', 'phone', 'write', 'dept_meet', 'prod_meet', '2018-09-26 08:20:57'),
(77, 'njv1qlcg90826rj715phostr77', 'innym dziaÅ‚em SMP', '3', '3', '3', '3', '3', 'write', 'unformal_meet', 'phone', 'face_to_face', 'dept_meet', '2018-09-26 07:01:04'),
(76, 'njv1qlcg90826rj715phostr77', 'innym dziaÅ‚em SMP', '3', '3', '3', '3', '3', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-26 06:55:22'),
(75, '631se96bqc54g44bn7th61s180', 'zarzÄ…dem SMP', '5', '4', '5', '3', '2', 'dept_meet', 'phone', 'face_to_face', 'write', 'prod_meet', '2018-09-26 06:36:22'),
(74, '631se96bqc54g44bn7th61s180', 'zarzÄ…dem SMP', '3', '3', '3', '3', '3', 'dept_meet', 'phone', 'face_to_face', 'write', 'prod_meet', '2018-09-26 06:35:49'),
(73, '1v1o899a0s6lceu0uf8lvcdlp1', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '', '', '', '', '', 'face_to_face', 'phone', 'write', 'dept_meet', 'prod_meet', '2018-09-25 13:47:53'),
(72, 'njv1qlcg90826rj715phostr77', 'innym dziaÅ‚em SMP', '3', '3', '3', '3', '3', 'budget_meet', 'face_to_face', 'prod_meet', 'smp_d', 'dept_meet', '2018-09-25 12:57:33'),
(71, 'njv1qlcg90826rj715phostr77', 'zarzÄ…dem SMP', '', '', '', '', '', 'face_to_face', 'dept_meet', 'prod_meet', 'budget_meet', 'smp_d', '2018-09-25 12:28:57'),
(70, 'njv1qlcg90826rj715phostr77', 'zarzÄ…dem SMP', '', '', '', '', '', 'phone', 'smp_w', 'dept_meet', 'write', 'smp_d', '2018-09-25 12:21:06'),
(69, '631se96bqc54g44bn7th61s180', 'zarzÄ…dem SMP', '', '', '', '', '', 'budget_meet', 'write', 'smp_w', 'prod_meet', 'unformal_meet', '2018-09-25 12:13:49'),
(68, '631se96bqc54g44bn7th61s180', 'zarzÄ…dem SMP', '', '', '', '', '', 'budget_meet', 'write', 'smp_w', 'prod_meet', 'unformal_meet', '2018-09-25 12:13:32'),
(66, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '', '', '', '', '', 'own', 'unformal_meet', 'smp_w', 'smp_d', 'phone', '2018-09-20 09:26:18'),
(67, 'nrrg8u2pfk2pa723lcvtmtal93', 'zarzÄ…dem SMP', '', '', '', '', '', 'prod_meet', 'dept_meet', 'face_to_face', 'phone', 'write', '2018-09-21 09:09:50'),
(65, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '', '', '', '', '', 'own', 'unformal_meet', 'smp_w', 'smp_d', 'phone', '2018-09-20 09:19:45'),
(64, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '', '', '', '', '', 'own', 'unformal_meet', 'smp_w', 'smp_d', 'phone', '2018-09-20 09:16:42'),
(63, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '', '', '', '', '', 'own', 'unformal_meet', 'smp_w', 'smp_d', 'phone', '2018-09-20 08:27:10'),
(62, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '4', '3', '3', '1', '3', 'own', 'unformal_meet', 'smp_w', 'smp_d', 'phone', '2018-09-20 08:22:06'),
(61, 'kj5scj4ipbpfva0so6tqblaov4', 'zarzÄ…dem SMP', 'raczej_zle', 'raczej_dobrze', 'raczej_zle', 'ani_ani', 'Raczej_dobrze', 'phone', 'dept_meet', 'smp_d', 'write', 'face_to_face', '2018-09-19 13:49:32'),
(60, 'kj5scj4ipbpfva0so6tqblaov4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', 'raczej_dobrze', 'ani_ani', 'dobrze', 'raczej_zle', 'ani_ani', 'face_to_face', 'write', 'unformal_meet', 'dept_meet', 'phone', '2018-09-19 13:23:27'),
(59, 'ifn2npgemlg1v7btt77a6fpjb2', 'swoim dziaÅ‚em', 'zle', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'write', 'dept_meet', 'smp_d', 'phone', 'face_to_face', '2018-09-19 12:50:31'),
(58, 'ifn2npgemlg1v7btt77a6fpjb2', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', 'zle', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'dept_meet', 'write', 'prod_meet', 'phone', 'face_to_face', '2018-09-19 12:48:53'),
(57, 'ifn2npgemlg1v7btt77a6fpjb2', 'zarzÄ…dem SMP', 'raczej_zle', 'raczej_zle', 'ani_ani', 'ani_ani', 'ani_ani', 'own', 'write', 'prod_meet', 'face_to_face', 'phone', '2018-09-19 12:26:21'),
(56, 'ifn2npgemlg1v7btt77a6fpjb2', 'zarzÄ…dem SMP', 'raczej_zle', 'ani_ani', 'ani_ani', 'raczej_zle', 'raczej_zle', 'own_title', 'prod_meet', 'own', 'phone', 'write', '2018-09-19 12:18:21'),
(55, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', 'zle', 'zle', 'zle', 'zle', 'zle', 'face_to_face', 'phone', 'write', 'dept_meet', 'prod_meet', '2018-09-19 10:47:04'),
(54, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'face_to_face', 'phone', 'write', 'dept_meet', 'prod_meet', '2018-09-19 10:42:17'),
(53, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'write', 'face_to_face', 'phone', 'dept_meet', 'prod_meet', '2018-09-19 10:41:59'),
(52, 'nrrg8u2pfk2pa723lcvtmtal93', 'swoim dziaÅ‚em', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'own_title', 'prod_meet', 'phone', 'dept_meet', 'write', '2018-09-19 10:06:51'),
(51, 'nrrg8u2pfk2pa723lcvtmtal93', 'swoim dziaÅ‚em', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-19 10:06:22'),
(50, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'own_title', 'prod_meet', 'unformal_meet', 'own', 'dept_meet', '2018-09-19 09:59:54'),
(49, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'prod_meet', 'phone', 'dept_meet', 'face_to_face', 'write', '2018-09-19 09:57:07'),
(48, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'ani_ani', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-09-19 09:56:39'),
(87, '9f6gcsvha0932h9l9ngr4o9o85', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '', '', '', '', '', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-10-23 11:17:32'),
(88, '9f6gcsvha0932h9l9ngr4o9o85', 'zarzÄ…dem SMP', '5', '5', '3', '3', '3', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-10-23 11:20:41'),
(89, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '', '', '', '', '', 'write', 'face_to_face', 'phone', 'unformal_meet', 'own', '2018-10-29 09:29:45'),
(90, 'ai09brtjlq9e31tnlv9kaqo4k4', 'innym dziaÅ‚em SMP', '3', '3', '3', '3', '3', 'write', 'phone', 'budget_meet', 'unformal_meet', 'prod_meet', '2018-10-29 09:29:59'),
(91, 'i5ottfm33vof91cts0le12k467', 'zarzÄ…dem SMP', '3', '3', '3', '3', '3', 'phone', 'write', 'face_to_face', 'dept_meet', 'prod_meet', '2018-11-02 10:18:42');

-- --------------------------------------------------------

--
-- Структура таблиці `source`
--

CREATE TABLE `source` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `zarzad` int(3) DEFAULT NULL,
  `przylozony` int(3) DEFAULT NULL,
  `dzial` int(3) DEFAULT NULL,
  `inny_dzial` int(3) DEFAULT NULL,
  `baza_danych` int(3) DEFAULT NULL,
  `total` int(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `source`
--

INSERT INTO `source` (`id`, `session_id`, `zarzad`, `przylozony`, `dzial`, `inny_dzial`, `baza_danych`, `total`, `date`) VALUES
(137, 'ai09brtjlq9e31tnlv9kaqo4k4', 20, 18, 18, 20, 24, 100, '2018-09-27 07:10:18'),
(136, 'ai09brtjlq9e31tnlv9kaqo4k4', 33, 35, 24, 8, 0, 100, '2018-09-26 10:22:14'),
(135, 'ai09brtjlq9e31tnlv9kaqo4k4', 35, 19, 23, 23, 0, 100, '2018-09-26 10:08:38'),
(134, 'kj5scj4ipbpfva0so6tqblaov4', 0, 18, 22, 9, 51, 100, '2018-09-26 10:06:16'),
(133, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 0, 30, 18, 52, 100, '2018-09-26 09:59:21'),
(132, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 50, 20, 20, 10, 100, '2018-09-26 09:58:46'),
(131, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 0, 0, 0, 100, 100, '2018-09-26 09:54:32'),
(130, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 50, 20, 20, 10, 100, '2018-09-26 08:18:53'),
(129, 'ai09brtjlq9e31tnlv9kaqo4k4', 27, 26, 0, 0, 47, 100, '2018-09-26 07:07:19'),
(127, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 0, 100, 100, '2018-09-26 07:04:15'),
(128, 'ai09brtjlq9e31tnlv9kaqo4k4', 27, 26, 0, 0, 47, 100, '2018-09-26 07:07:09'),
(176, 'i5ottfm33vof91cts0le12k467', 14, 0, 0, 0, 86, 100, '2018-11-02 10:18:24'),
(175, 'i5ottfm33vof91cts0le12k467', 100, 0, 0, 0, 0, 100, '2018-11-02 08:35:33'),
(123, 'nrrg8u2pfk2pa723lcvtmtal93', 30, 0, 70, 0, 0, 100, '2018-09-26 06:36:52'),
(174, 'i5ottfm33vof91cts0le12k467', 33, 30, 37, 0, 0, 100, '2018-11-02 08:26:17'),
(122, 'cg696prin7m6ippmcgqlpi9670', 17, 0, 49, 6, 25, 97, '2018-09-26 05:57:53'),
(121, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 50, 20, 20, 10, 100, '2018-09-25 13:53:58'),
(120, '1v1o899a0s6lceu0uf8lvcdlp1', 10, 45, 5, 15, 25, 100, '2018-09-25 13:45:07'),
(119, 'njv1qlcg90826rj715phostr77', 0, 0, 0, 40, 60, 100, '2018-09-25 12:47:55'),
(118, 'njv1qlcg90826rj715phostr77', 15, 32, 18, 12, 23, 100, '2018-09-25 12:31:19'),
(117, 'njv1qlcg90826rj715phostr77', 52, 0, 0, 0, 48, 100, '2018-09-25 12:20:46'),
(116, '631se96bqc54g44bn7th61s180', 37, 0, 0, 0, 63, 100, '2018-09-25 12:14:23'),
(115, '631se96bqc54g44bn7th61s180', 17, 24, 18, 20, 21, 100, '2018-09-25 12:04:51'),
(114, 'nrrg8u2pfk2pa723lcvtmtal93', 100, 0, 0, 0, 0, 100, '2018-09-21 09:09:25'),
(113, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 0, 100, 100, '2018-09-20 08:36:38'),
(112, 'kj5scj4ipbpfva0so6tqblaov4', 25, 14, 26, 21, 14, 100, '2018-09-19 13:47:03'),
(111, 'kj5scj4ipbpfva0so6tqblaov4', 8, 36, 11, 12, 33, 100, '2018-09-19 13:11:44'),
(110, 'ifn2npgemlg1v7btt77a6fpjb2', 14, 28, 28, 9, 21, 100, '2018-09-19 12:48:18'),
(109, 'ifn2npgemlg1v7btt77a6fpjb2', 50, 10, 0, 10, 30, 100, '2018-09-19 12:24:15'),
(108, 'ifn2npgemlg1v7btt77a6fpjb2', 25, 10, 5, 17, 43, 100, '2018-09-19 12:23:17'),
(107, 'ifn2npgemlg1v7btt77a6fpjb2', 23, 8, 7, 7, 55, 100, '2018-09-19 12:15:05'),
(106, 'ai09brtjlq9e31tnlv9kaqo4k4', 36, 32, 27, 0, 5, 100, '2018-09-19 10:41:44'),
(105, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 49, 51, 100, '2018-09-19 10:23:09'),
(104, 'ai09brtjlq9e31tnlv9kaqo4k4', 37, 0, 34, 29, 0, 100, '2018-09-19 10:22:42'),
(103, 'nrrg8u2pfk2pa723lcvtmtal93', 26, 31, 34, 9, 0, 100, '2018-09-19 10:03:09'),
(102, 'ai09brtjlq9e31tnlv9kaqo4k4', 49, 51, 0, 0, 0, 100, '2018-09-19 09:53:15'),
(101, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 29, 71, 100, '2018-09-19 09:37:08'),
(100, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 3, 54, 43, 100, '2018-09-19 09:23:13'),
(138, 'ai09brtjlq9e31tnlv9kaqo4k4', 28, 29, 22, 20, 1, 100, '2018-09-27 07:14:47'),
(139, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-09-27 10:43:11'),
(140, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-09-27 10:45:35'),
(141, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-09-27 10:46:27'),
(142, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-09-27 10:47:32'),
(143, '1v1o899a0s6lceu0uf8lvcdlp1', 23, 11, 33, 17, 16, 100, '2018-09-27 10:57:13'),
(144, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 50, 20, 20, 10, 100, '2018-09-28 07:15:18'),
(145, 'ai09brtjlq9e31tnlv9kaqo4k4', 41, 49, 10, 0, 0, 100, '2018-09-28 07:22:06'),
(146, 'ai09brtjlq9e31tnlv9kaqo4k4', 22, 20, 20, 20, 18, 100, '2018-09-28 07:24:15'),
(147, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-09-28 07:47:31'),
(148, 'ai09brtjlq9e31tnlv9kaqo4k4', 26, 23, 20, 17, 14, 100, '2018-09-28 08:15:38'),
(149, 'ai09brtjlq9e31tnlv9kaqo4k4', 7, 44, 44, 0, 5, 100, '2018-09-28 08:19:06'),
(150, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 58, 21, 21, 0, 100, '2018-09-28 08:20:16'),
(151, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 50, 20, 20, 10, 100, '2018-09-28 08:21:48'),
(152, 'ai09brtjlq9e31tnlv9kaqo4k4', 31, 34, 28, 7, 0, 100, '2018-09-28 08:37:01'),
(153, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-09-28 09:55:08'),
(154, 'ai09brtjlq9e31tnlv9kaqo4k4', 43, 30, 10, 17, 0, 100, '2018-09-28 11:55:35'),
(155, 'ai09brtjlq9e31tnlv9kaqo4k4', 21, 18, 9, 4, 48, 100, '2018-09-28 12:35:46'),
(156, 'ai09brtjlq9e31tnlv9kaqo4k4', 29, 44, 22, 5, 0, 100, '2018-09-28 13:59:22'),
(157, 'ai09brtjlq9e31tnlv9kaqo4k4', 35, 30, 16, 15, 4, 100, '2018-10-01 11:57:18'),
(158, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-10-02 06:43:50'),
(159, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-10-02 06:44:46'),
(160, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-10-02 09:54:56'),
(161, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-10-03 10:13:40'),
(162, '1v1o899a0s6lceu0uf8lvcdlp1', 0, 50, 20, 20, 10, 100, '2018-10-03 10:14:24'),
(163, 'ai09brtjlq9e31tnlv9kaqo4k4', 50, 0, 0, 40, 10, 100, '2018-10-09 05:59:21'),
(164, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 49, 20, 20, 11, 100, '2018-10-10 13:23:07'),
(165, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 38, 33, 0, 29, 100, '2018-10-10 13:24:47'),
(166, 'nr8jnfod1apunhdvaqhfkgd3o0', 10, 15, 28, 19, 28, 100, '2018-10-10 13:28:10'),
(167, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 50, 20, 20, 10, 100, '2018-10-10 13:32:39'),
(168, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 50, 20, 20, 10, 100, '2018-10-17 10:54:07'),
(169, 'nr8jnfod1apunhdvaqhfkgd3o0', 0, 50, 25, 25, 0, 100, '2018-10-23 10:59:31'),
(170, 'tojtiauorn3l2rp9vliluu4b47', 0, 50, 0, 25, 25, 100, '2018-10-23 11:04:34'),
(171, '9f6gcsvha0932h9l9ngr4o9o85', 32, 68, 0, 0, 0, 100, '2018-10-23 11:12:31'),
(172, 'ifn2npgemlg1v7btt77a6fpjb2', 12, 8, 28, 19, 33, 100, '2018-10-29 09:26:03'),
(173, 'ai09brtjlq9e31tnlv9kaqo4k4', 61, 39, 0, 0, 0, 100, '2018-10-30 13:25:29'),
(177, 'i5ottfm33vof91cts0le12k467', 23, 15, 22, 26, 14, 100, '2018-11-02 13:45:13'),
(178, 'i5ottfm33vof91cts0le12k467', 20, 9, 13, 12, 46, 100, '2018-11-02 13:45:50'),
(179, 'i5ottfm33vof91cts0le12k467', 19, 16, 4, 21, 40, 100, '2018-11-02 13:46:22'),
(180, 'i5ottfm33vof91cts0le12k467', 12, 9, 39, 22, 18, 100, '2018-11-02 13:47:07'),
(181, 'i5ottfm33vof91cts0le12k467', 15, 19, 17, 20, 29, 100, '2018-11-02 13:56:25');

-- --------------------------------------------------------

--
-- Структура таблиці `source_expectation`
--

CREATE TABLE `source_expectation` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `zarzad` text,
  `przylozony` text,
  `dzial` text,
  `inny_dzial` text,
  `baza_danych` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `source_expectation`
--

INSERT INTO `source_expectation` (`id`, `session_id`, `zarzad`, `przylozony`, `dzial`, `inny_dzial`, `baza_danych`, `date`) VALUES
(1, 'ai09brtjlq9e31tnlv9kaqo4k4', 'sadas', 'dsadas', 'sadasd', 'asdasda', '', '2018-09-20 09:34:48'),
(2, 'ai09brtjlq9e31tnlv9kaqo4k4', 'sadas', 'dsadas', 'sadasd', 'asdasda', '', '2018-09-20 09:36:23'),
(3, 'ai09brtjlq9e31tnlv9kaqo4k4', 'dasda', 'asdas', 'dasd', 'sadas', '', '2018-09-20 09:36:32'),
(4, 'ai09brtjlq9e31tnlv9kaqo4k4', 'sadasd', 'sadasd', 'sdasd', 'sada', '', '2018-09-20 09:37:35'),
(5, 'ai09brtjlq9e31tnlv9kaqo4k4', 'asdasd', 'sadas', 'dsadas', 'dasdasd', '', '2018-09-20 09:37:51'),
(6, 'njv1qlcg90826rj715phostr77', 'sadasd', 'asdas', 'dsadasd', 'dasdsad', '', '2018-09-25 12:57:41'),
(7, '1v1o899a0s6lceu0uf8lvcdlp1', 'DEHER', 'ERGHYAERH', 'EARHAERH', 'EARHAEH', '', '2018-09-25 13:53:07'),
(8, '631se96bqc54g44bn7th61s180', 'test', 'test', 'test', 'test', '', '2018-09-26 06:36:06'),
(9, '631se96bqc54g44bn7th61s180', 'test', 'test', 'test', 'test', '', '2018-09-26 06:36:31'),
(10, 'njv1qlcg90826rj715phostr77', 'asdas', 'dsadas', 'dasd', 'asdasd', '', '2018-09-26 07:01:09'),
(11, 'nr8jnfod1apunhdvaqhfkgd3o0', 'fthrdth', 'rhrthdrt', 'ethrtsj', 'srrtu', '', '2018-09-26 08:21:48'),
(12, 'kj5scj4ipbpfva0so6tqblaov4', 'danych dot. wynikÃ³w finansowych ', 'info dot/ EP - gÅ‚Ã³wnych priorytetÃ³w ', 'informacji o zatrudnianiu nowych pracownikÃ³w z wyprzedzeniem min. 2 tygodnie', 'ioppo[]po', '', '2018-09-26 10:16:46'),
(15, 'ai09brtjlq9e31tnlv9kaqo4k4', 'TEst', 'ksajhdk', 'kasjhdkjha', 'ksajhdkahs', '', '2018-09-28 12:36:55'),
(18, 'i5ottfm33vof91cts0le12k467', 'test', 'test', 'test', 'test', '', '2018-11-02 10:18:51');

-- --------------------------------------------------------

--
-- Структура таблиці `source_rate`
--

CREATE TABLE `source_rate` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `zarzad` text,
  `przylozony` text,
  `dzial` text,
  `inny_dzial` text,
  `baza_danych` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `source_rate`
--

INSERT INTO `source_rate` (`id`, `session_id`, `zarzad`, `przylozony`, `dzial`, `inny_dzial`, `baza_danych`, `date`) VALUES
(178, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '5', '2018-09-28 11:55:39'),
(177, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '1', '3', '2018-09-28 09:55:16'),
(176, 'ai09brtjlq9e31tnlv9kaqo4k4', '2', '2', '3', '2', '2', '2018-09-28 08:37:24'),
(28, 'nr8jnfod1apunhdvaqhfkgd3o0', '4', '4', '3', '2', '5', '2018-09-11 11:23:26'),
(175, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '1', '1', '3', '3', '2018-09-28 08:21:57'),
(27, 'c4m0777sa9e3i16sjqdetpl9m4', '5', '4', '4', '2', '1', '2018-09-10 13:34:16'),
(174, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '1', '1', '3', '1', '2018-09-28 08:20:29'),
(172, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-28 08:15:44'),
(35, 'ro3m599c80g36jpkon9gljkdq1', '5', '3', '2', '2', '1', '2018-09-12 10:59:31'),
(25, 'nb4m9oudr2k6km1fpkrgiu7ds5', '5', '4', '4', '2', '1', '2018-09-10 13:05:18'),
(173, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '2', '2', '3', '3', '2018-09-28 08:19:13'),
(171, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '1', '3', '2018-09-28 07:47:41'),
(170, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-28 07:24:20'),
(169, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-28 07:22:16'),
(21, 'g14dopd52hqk8jlihvhe9fg1c6', '5', '4', '4', '3', '1', '2018-09-10 10:48:45'),
(168, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '2', '2', '5', '5', '2018-09-28 07:22:10'),
(43, 'k1dmepc9sp39antr00u4034805', '5', '4', '3', '2', '1', '2018-09-14 09:07:06'),
(44, 'nrrg8u2pfk2pa723lcvtmtal93', '5', '4', '3', '2', '1', '2018-09-14 09:12:08'),
(167, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '1', '1', '3', '3', '2018-09-28 07:16:37'),
(166, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '3', '1', '3', '3', '2018-09-27 10:57:21'),
(165, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '3', '3', '2018-09-27 10:47:52'),
(164, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '3', '3', '2018-09-27 10:46:42'),
(163, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '3', '3', '2018-09-27 10:45:56'),
(162, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '2', '2', '3', '2018-09-27 10:43:25'),
(161, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-27 07:14:50'),
(160, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-27 07:11:53'),
(159, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-27 07:11:39'),
(158, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-27 07:11:28'),
(145, 'nrrg8u2pfk2pa723lcvtmtal93', '3', '3', '3', '3', '3', '2018-09-26 06:36:57'),
(144, '1v1o899a0s6lceu0uf8lvcdlp1', '4', '2', '2', '2', '3', '2018-09-25 13:46:00'),
(143, 'mfver2gv5qqnnte1g1aet642m4', '3', '3', '3', '3', '3', '2018-09-25 13:12:16'),
(142, 'mfver2gv5qqnnte1g1aet642m4', '3', '3', '3', '3', '3', '2018-09-25 13:11:23'),
(141, 'njv1qlcg90826rj715phostr77', '3', '3', '3', '3', '3', '2018-09-25 12:47:59'),
(140, 'njv1qlcg90826rj715phostr77', '', '', '', '', '', '2018-09-25 12:39:50'),
(139, 'njv1qlcg90826rj715phostr77', '', '', '', '', '', '2018-09-25 12:39:23'),
(138, 'njv1qlcg90826rj715phostr77', '', '', '', '', '', '2018-09-25 12:38:47'),
(137, 'njv1qlcg90826rj715phostr77', '', '', '', '', '', '2018-09-25 12:31:36'),
(136, 'njv1qlcg90826rj715phostr77', '', '', '', '', '', '2018-09-25 12:31:23'),
(135, 'njv1qlcg90826rj715phostr77', '', '', '', '', '', '2018-09-25 12:20:50'),
(134, '631se96bqc54g44bn7th61s180', '', '', '', '', '', '2018-09-25 12:14:28'),
(133, '631se96bqc54g44bn7th61s180', '', '', '', '', '', '2018-09-25 12:05:01'),
(132, 'nrrg8u2pfk2pa723lcvtmtal93', '', '', '', '', '', '2018-09-21 09:09:32'),
(131, 'kj5scj4ipbpfva0so6tqblaov4', '5', '4', '4', '2', '2', '2018-09-19 13:47:33'),
(130, 'kj5scj4ipbpfva0so6tqblaov4', '3', '1', '3', '3', '5', '2018-09-19 13:12:30'),
(129, 'ifn2npgemlg1v7btt77a6fpjb2', '5', '3', '3', '3', '3', '2018-09-19 12:48:24'),
(128, 'ifn2npgemlg1v7btt77a6fpjb2', '5', '4', '4', '4', '4', '2018-09-19 12:24:22'),
(127, 'ifn2npgemlg1v7btt77a6fpjb2', '5', '4', '4', '4', '4', '2018-09-19 12:23:34'),
(126, 'ifn2npgemlg1v7btt77a6fpjb2', '4', '3', '3', '3', '4', '2018-09-19 12:15:29'),
(125, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-19 10:41:48'),
(124, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-19 10:23:14'),
(123, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-19 10:22:49'),
(122, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-19 10:22:27'),
(121, 'nrrg8u2pfk2pa723lcvtmtal93', '3', '3', '3', '3', '3', '2018-09-19 10:03:20'),
(120, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-19 09:53:19'),
(119, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-19 09:37:16'),
(118, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '4', '3', '5', '2018-09-19 09:36:39'),
(117, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '4', '5', '5', '2018-09-19 09:35:46'),
(116, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-19 09:34:36'),
(115, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-19 09:34:10'),
(114, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '4', '3', '4', '2018-09-19 09:33:58'),
(113, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '4', '3', '4', '2018-09-19 09:32:45'),
(112, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '4', '3', '4', '2018-09-19 09:30:54'),
(111, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-19 09:27:47'),
(110, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-19 09:23:54'),
(179, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-28 12:35:52'),
(180, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-28 13:59:26'),
(181, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-10-01 11:57:22'),
(182, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '3', '3', '2018-10-02 06:43:59'),
(183, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '3', '3', '2018-10-02 06:45:04'),
(184, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '3', '3', '2018-10-02 09:55:01'),
(185, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '3', '3', '2018-10-03 10:13:47'),
(186, '1v1o899a0s6lceu0uf8lvcdlp1', '3', '1', '1', '3', '3', '2018-10-03 10:14:41'),
(187, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '4', '3', '2', '1', '2018-10-09 05:59:33'),
(188, 'nr8jnfod1apunhdvaqhfkgd3o0', '3', '1', '1', '3', '5', '2018-10-10 13:23:29'),
(189, 'nr8jnfod1apunhdvaqhfkgd3o0', '1', '1', '3', '1', '5', '2018-10-10 13:25:03'),
(190, 'nr8jnfod1apunhdvaqhfkgd3o0', '3', '3', '3', '3', '3', '2018-10-10 13:25:57'),
(191, 'nr8jnfod1apunhdvaqhfkgd3o0', '1', '1', '5', '1', '4', '2018-10-10 13:26:48'),
(192, 'nr8jnfod1apunhdvaqhfkgd3o0', '3', '1', '4', '2', '3', '2018-10-10 13:29:10'),
(193, 'nr8jnfod1apunhdvaqhfkgd3o0', '3', '1', '1', '3', '3', '2018-10-10 13:33:13'),
(194, 'nr8jnfod1apunhdvaqhfkgd3o0', '3', '5', '3', '3', '4', '2018-10-17 10:54:37'),
(195, 'nr8jnfod1apunhdvaqhfkgd3o0', '3', '1', '1', '3', '3', '2018-10-23 11:01:37'),
(196, 'tojtiauorn3l2rp9vliluu4b47', '3', '1', '3', '3', '4', '2018-10-23 11:05:00'),
(197, '9f6gcsvha0932h9l9ngr4o9o85', '3', '4', '', '', '', '2018-10-23 11:12:46'),
(198, 'ifn2npgemlg1v7btt77a6fpjb2', '3', '4', '4', '3', '3', '2018-10-29 09:26:08'),
(199, 'ai09brtjlq9e31tnlv9kaqo4k4', '4', '4', '3', '2', '2', '2018-10-30 13:25:34'),
(202, 'i5ottfm33vof91cts0le12k467', '5', '4', '3', '2', '1', '2018-11-02 08:38:37'),
(203, 'i5ottfm33vof91cts0le12k467', '1', '1', '1', '1', '1', '2018-11-02 08:41:37'),
(204, 'i5ottfm33vof91cts0le12k467', '3', '3', '3', '3', '3', '2018-11-02 10:18:11'),
(205, 'i5ottfm33vof91cts0le12k467', '3', '3', '3', '3', '3', '2018-11-02 10:18:28'),
(206, 'i5ottfm33vof91cts0le12k467', '5', '5', '5', '5', '5', '2018-11-02 13:45:26'),
(207, 'i5ottfm33vof91cts0le12k467', '3', '3', '3', '3', '3', '2018-11-02 13:46:06'),
(208, 'i5ottfm33vof91cts0le12k467', '2', '2', '2', '2', '2', '2018-11-02 13:56:31');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `main_apps`
--
ALTER TABLE `main_apps`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `main_apps_rate`
--
ALTER TABLE `main_apps_rate`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `main_expectation`
--
ALTER TABLE `main_expectation`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `main_tools`
--
ALTER TABLE `main_tools`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `main_tools_rate`
--
ALTER TABLE `main_tools_rate`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `source_expectation`
--
ALTER TABLE `source_expectation`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `source_rate`
--
ALTER TABLE `source_rate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT для таблиці `main_apps`
--
ALTER TABLE `main_apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT для таблиці `main_apps_rate`
--
ALTER TABLE `main_apps_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблиці `main_expectation`
--
ALTER TABLE `main_expectation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблиці `main_tools`
--
ALTER TABLE `main_tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;
--
-- AUTO_INCREMENT для таблиці `main_tools_rate`
--
ALTER TABLE `main_tools_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT для таблиці `source`
--
ALTER TABLE `source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT для таблиці `source_expectation`
--
ALTER TABLE `source_expectation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблиці `source_rate`
--
ALTER TABLE `source_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
