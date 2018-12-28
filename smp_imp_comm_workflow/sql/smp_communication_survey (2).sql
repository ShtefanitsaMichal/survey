-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Вер 17 2018 р., 15:57
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
-- Структура таблиці `apps`
--

CREATE TABLE `apps` (
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
-- Дамп даних таблиці `apps`
--

INSERT INTO `apps` (`id`, `session_id`, `intranet`, `comarch`, `bpcs`, `qms`, `sap`, `asseco`, `sanden_vision`, `facebook`, `smp_web_page`, `baza_sugestii`, `sanden_month_news`, `zmt`, `parcel_warehouse`, `lessons_learned`, `own_title`, `own`, `total`, `date`) VALUES
(5, 'ai09brtjlq9e31tnlv9kaqo4k4', 9, 8, 9, 13, 12, 8, '11', 16, 13, 12, 13, 16, 5, 17, 'TESOTOWANIE', 13, 175, '2018-09-13 08:29:12'),
(6, 'ai09brtjlq9e31tnlv9kaqo4k4', 5, 10, 43, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 58, '2018-09-13 09:09:24'),
(7, 'ai09brtjlq9e31tnlv9kaqo4k4', 42, 47, 41, 40, 41, 44, '37', 31, 37, 39, 40, 34, 34, 33, 'TEST', 37, 577, '2018-09-14 07:24:55'),
(8, 'ai09brtjlq9e31tnlv9kaqo4k4', 15, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 15, '2018-09-14 07:27:08'),
(9, 'ai09brtjlq9e31tnlv9kaqo4k4', 7, 6, 3, 4, 4, 3, '4', 6, 5, 12, 7, 8, 12, 9, '', 10, 100, '2018-09-14 08:08:13'),
(10, 'ai09brtjlq9e31tnlv9kaqo4k4', 13, 11, 13, 10, 9, 8, '2', 9, 9, 8, 8, 7, 9, 14, 'TESTOWANIE', 41, 171, '2018-09-14 08:56:00'),
(11, 'nrrg8u2pfk2pa723lcvtmtal93', 9, 11, 8, 8, 6, 7, '7', 7, 9, 10, 5, 6, 5, 5, 'Visualisacja', 7, 110, '2018-09-14 09:15:10'),
(12, 'ai09brtjlq9e31tnlv9kaqo4k4', 27, 41, 16, 41, 28, 15, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 168, '2018-09-14 12:14:03'),
(13, 'ai09brtjlq9e31tnlv9kaqo4k4', 28, 23, 20, 25, 21, 13, '26', 47, 21, 17, 21, 32, 37, 33, '', 0, 364, '2018-09-14 12:27:33'),
(14, 'ai09brtjlq9e31tnlv9kaqo4k4', 39, 43, 37, 34, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 153, '2018-09-17 06:57:43'),
(15, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-09-17 06:58:20'),
(16, 'ai09brtjlq9e31tnlv9kaqo4k4', 15, 18, 12, 18, 18, 21, '30', 22, 20, 30, 24, 21, 26, 14, '', 27, 316, '2018-09-17 09:14:28'),
(17, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, 'TEST', 45, 45, '2018-09-17 09:54:10'),
(18, 'ai09brtjlq9e31tnlv9kaqo4k4', 37, 34, 30, 32, 32, 22, '19', 0, 0, 0, 0, 0, 0, 0, '', 0, 206, '2018-09-17 10:58:10'),
(19, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-09-17 12:06:57'),
(20, 'ai09brtjlq9e31tnlv9kaqo4k4', 36, 30, 30, 25, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 121, '2018-09-17 12:07:11'),
(21, 'ai09brtjlq9e31tnlv9kaqo4k4', 100, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 100, '2018-09-17 13:36:15'),
(22, 'ai09brtjlq9e31tnlv9kaqo4k4', 16, 0, 13, 13, 0, 0, '0', 0, 22, 15, 0, 0, 0, 0, '', 0, 79, '2018-09-17 13:45:59'),
(23, 'ai09brtjlq9e31tnlv9kaqo4k4', 17, 17, 18, 17, 18, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 87, '2018-09-17 13:46:29'),
(24, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-09-17 13:55:26'),
(25, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-09-17 13:56:04'),
(26, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '2018-09-17 13:56:55');

-- --------------------------------------------------------

--
-- Структура таблиці `pyt_1`
--

CREATE TABLE `pyt_1` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `typ` text NOT NULL,
  `wiek` text NOT NULL,
  `stanowisko` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `pyt_1`
--

INSERT INTO `pyt_1` (`id`, `session_id`, `typ`, `wiek`, `stanowisko`, `date`) VALUES
(100, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-17 12:04:46'),
(99, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-17 10:52:42'),
(98, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-17 10:32:25'),
(97, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-17 10:03:56'),
(96, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '2018-09-17 10:02:54'),
(95, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '2018-09-17 10:02:50'),
(94, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '2018-09-17 10:02:47'),
(93, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-17 10:02:29'),
(92, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-17 10:01:16'),
(91, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-17 09:59:58'),
(90, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-17 06:18:44'),
(89, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-14 12:25:18'),
(88, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-14 12:22:04'),
(87, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Indirect', '> 30', 'Pracownik', '2018-09-14 12:15:31'),
(86, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Direct', '< 30', 'Pracownik', '2018-09-14 11:56:26');

-- --------------------------------------------------------

--
-- Структура таблиці `pyt_2`
--

CREATE TABLE `pyt_2` (
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
-- Дамп даних таблиці `pyt_2`
--

INSERT INTO `pyt_2` (`id`, `session_id`, `zarzad`, `przylozony`, `dzial`, `inny_dzial`, `baza_danych`, `total`, `date`) VALUES
(62, 'ai09brtjlq9e31tnlv9kaqo4k4', 20, 22, 21, 19, 18, 100, '2018-09-17 10:08:32'),
(63, 'ai09brtjlq9e31tnlv9kaqo4k4', 15, 15, 32, 30, 8, 100, '2018-09-17 10:32:32'),
(64, 'ai09brtjlq9e31tnlv9kaqo4k4', 20, 16, 0, 0, 64, 100, '2018-09-17 10:52:54'),
(65, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 41, 59, 100, '2018-09-17 12:05:05'),
(61, 'ai09brtjlq9e31tnlv9kaqo4k4', 0, 0, 0, 30, 70, 100, '2018-09-17 06:35:53'),
(60, 'ai09brtjlq9e31tnlv9kaqo4k4', 50, 25, 25, 0, 0, 100, '2018-09-14 12:26:23'),
(59, 'ai09brtjlq9e31tnlv9kaqo4k4', 50, 50, 0, 0, 0, 100, '2018-09-14 12:25:36'),
(58, 'ai09brtjlq9e31tnlv9kaqo4k4', 42, 58, 0, 0, 0, 100, '2018-09-14 12:24:16'),
(57, 'ai09brtjlq9e31tnlv9kaqo4k4', 46, 43, 4, 7, 0, 100, '2018-09-14 12:22:38'),
(56, 'ai09brtjlq9e31tnlv9kaqo4k4', 50, 50, 0, 0, 0, 100, '2018-09-14 12:16:02'),
(55, 'ai09brtjlq9e31tnlv9kaqo4k4', 44, 48, 8, 0, 0, 100, '2018-09-14 12:15:38'),
(54, 'ai09brtjlq9e31tnlv9kaqo4k4', 43, 57, 0, 0, 0, 100, '2018-09-14 12:12:23'),
(53, 'ai09brtjlq9e31tnlv9kaqo4k4', 26, 25, 22, 21, 6, 100, '2018-09-14 11:56:37');

-- --------------------------------------------------------

--
-- Структура таблиці `pyt_3`
--

CREATE TABLE `pyt_3` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `zarzad` text COMMENT '4,0',
  `przylozony` text COMMENT '3,3',
  `dzial` text COMMENT '3,87',
  `inny_dzial` text COMMENT '3,9',
  `baza_danych` text COMMENT '3,45',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `pyt_3`
--

INSERT INTO `pyt_3` (`id`, `session_id`, `zarzad`, `przylozony`, `dzial`, `inny_dzial`, `baza_danych`, `date`) VALUES
(39, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-14 07:22:57'),
(37, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '3', '4', '4', '1', '2018-09-13 12:22:44'),
(38, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-13 12:23:48'),
(28, 'nr8jnfod1apunhdvaqhfkgd3o0', '4', '4', '3', '2', '5', '2018-09-11 11:23:26'),
(40, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-14 07:40:05'),
(41, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '2', '1', '1', '2018-09-14 08:06:39'),
(27, 'c4m0777sa9e3i16sjqdetpl9m4', '5', '4', '4', '2', '1', '2018-09-10 13:34:16'),
(35, 'ro3m599c80g36jpkon9gljkdq1', '5', '3', '2', '2', '1', '2018-09-12 10:59:31'),
(25, 'nb4m9oudr2k6km1fpkrgiu7ds5', '5', '4', '4', '2', '1', '2018-09-10 13:05:18'),
(42, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '4', '5', '4', '2', '2018-09-14 08:54:01'),
(36, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '4', '3', '2', '1', '2018-09-13 06:09:43'),
(33, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '4', '3', '2', '1', '2018-09-12 10:55:12'),
(34, 'ai09brtjlq9e31tnlv9kaqo4k4', '4', '3', '2', '3', '1', '2018-09-12 10:56:08'),
(32, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '4', '3', '2', '1', '2018-09-12 10:50:49'),
(21, 'g14dopd52hqk8jlihvhe9fg1c6', '5', '4', '4', '3', '1', '2018-09-10 10:48:45'),
(31, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '5', '5', '1', '2018-09-12 10:25:39'),
(43, 'k1dmepc9sp39antr00u4034805', '5', '4', '3', '2', '1', '2018-09-14 09:07:06'),
(44, 'nrrg8u2pfk2pa723lcvtmtal93', '5', '4', '3', '2', '1', '2018-09-14 09:12:08'),
(45, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-14 10:08:35'),
(46, 'utmp8909a6865e5j42451un0i3', '', '', '', '', '', '2018-09-14 10:35:15'),
(47, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-14 10:48:58'),
(48, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-14 10:49:40'),
(49, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-14 10:50:07'),
(50, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-14 10:50:47'),
(51, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '', '', '', '', '2018-09-14 10:53:23'),
(52, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '1', '2', '4', '2018-09-14 12:11:23'),
(53, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '1', '2', '4', '2018-09-14 12:11:48'),
(54, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '1', '2', '4', '2018-09-14 12:11:57'),
(55, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '', '4', '5', '2018-09-14 12:12:36'),
(56, 'ai09brtjlq9e31tnlv9kaqo4k4', '4', '4', '4', '4', '4', '2018-09-14 12:15:45'),
(57, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '5', '', '', '', '2018-09-14 12:16:09'),
(58, 'ai09brtjlq9e31tnlv9kaqo4k4', '4', '', '1', '2', '2', '2018-09-14 12:23:02'),
(59, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '', '', '', '2018-09-14 12:24:35'),
(60, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-14 12:25:41'),
(61, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-14 12:26:29'),
(62, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-17 06:35:58'),
(63, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-17 10:10:01'),
(64, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-17 10:10:19'),
(65, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '5', '5', '5', '2018-09-17 10:32:40'),
(66, 'ai09brtjlq9e31tnlv9kaqo4k4', '5', '5', '5', '5', '5', '2018-09-17 10:38:33'),
(67, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-17 10:53:02'),
(68, 'ai09brtjlq9e31tnlv9kaqo4k4', '3', '3', '3', '3', '3', '2018-09-17 12:05:09');

-- --------------------------------------------------------

--
-- Структура таблиці `pyt_4_1`
--

CREATE TABLE `pyt_4_1` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `main_source` text NOT NULL,
  `phone` text,
  `write` int(3) DEFAULT NULL,
  `face_to_face` int(3) DEFAULT NULL,
  `dept_meet` int(3) DEFAULT NULL,
  `prod_meet` int(3) DEFAULT NULL,
  `project_meet` int(3) DEFAULT NULL COMMENT AS `3,45`,
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
-- Дамп даних таблиці `pyt_4_1`
--

INSERT INTO `pyt_4_1` (`id`, `session_id`, `main_source`, `phone`, `write`, `face_to_face`, `dept_meet`, `prod_meet`, `project_meet`, `budget_meet`, `smp_d`, `smp_w`, `cs`, `unformal_meet`, `own_title`, `own`, `total`, `date`) VALUES
(21, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '7', 22, 6, 7, 6, NULL, 25, 25, 26, NULL, 28, '', 16, 221, '2018-09-12 06:14:30'),
(20, 'nr8jnfod1apunhdvaqhfkgd3o0', '', '14', 10, 22, 27, 30, NULL, 0, 61, 0, NULL, 0, '', 0, 255, '2018-09-11 11:23:34'),
(19, 'c4m0777sa9e3i16sjqdetpl9m4', '', '34', 47, 35, 31, 40, NULL, 32, 27, 35, NULL, 49, 'Mozzila', 45, 465, '2018-09-10 13:34:33'),
(18, 'nb4m9oudr2k6km1fpkrgiu7ds5', '', '38', 62, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-10 13:05:29'),
(17, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '29', 19, 0, 25, 0, NULL, 0, 0, 0, NULL, 0, 'test', 0, 107, '2018-09-10 12:43:54'),
(16, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '0', 16, 0, 20, 0, NULL, 19, 0, 14, NULL, 7, '', 13, 100, '2018-09-10 12:24:14'),
(15, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '8', 11, 12, 11, 9, NULL, 10, 7, 12, NULL, 2, '100', 3, 100, '2018-09-10 10:53:24'),
(14, 'g14dopd52hqk8jlihvhe9fg1c6', '', '0', 0, 0, 0, 33, NULL, 53, 23, 0, NULL, 0, 'asdasdadsa', 0, 146, '2018-09-10 10:48:52'),
(22, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-12 13:42:38'),
(23, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, 'test', 0, 0, '2018-09-13 06:09:51'),
(24, 'ai09brtjlq9e31tnlv9kaqo4k4', 'innym dziaÅ‚em SMP', '26', 28, 0, 23, 15, NULL, 27, 0, 0, NULL, 0, '', 0, 139, '2018-09-14 08:54:20'),
(25, 'nrrg8u2pfk2pa723lcvtmtal93', 'zarzÄ…dem SMP', '18', 32, 26, 14, 17, NULL, 15, 16, 20, NULL, 11, '', 10, 210, '2018-09-14 09:13:47'),
(26, 'utmp8909a6865e5j42451un0i3', 'zarzÄ…dem SMP', '6', 20, 29, 20, 0, NULL, 8, 0, 0, NULL, 10, '', 0, 100, '2018-09-14 10:37:01'),
(27, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-14 12:12:50'),
(28, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-14 12:13:14'),
(29, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-14 12:25:58'),
(30, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-14 12:26:38'),
(31, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '55', 11, 59, 70, 68, NULL, 53, 45, 53, NULL, 43, '', 52, 615, '2018-09-17 06:30:37'),
(32, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '70', 48, 58, 57, 79, NULL, 73, 68, 75, NULL, 83, '', 60, 813, '2018-09-17 06:35:13'),
(33, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bazÄ… danych', '28', 25, 25, 63, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 141, '2018-09-17 06:52:25'),
(34, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '18', 20, 0, 0, 0, NULL, 0, 36, 19, NULL, 0, '', 0, 115, '2018-09-17 10:35:51'),
(35, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-17 10:36:24'),
(36, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-17 10:36:34'),
(37, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '23', 24, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 47, '2018-09-17 10:38:40'),
(38, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-17 10:39:51'),
(39, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-17 10:40:18'),
(40, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-17 10:40:41'),
(41, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-17 10:42:13');

-- --------------------------------------------------------

--
-- Структура таблиці `pyt_4_2`
--

CREATE TABLE `pyt_4_2` (
  `id` int(11) NOT NULL,
  `session_id` text,
  `main_source` text NOT NULL,
  `phone` text,
  `write` int(3) DEFAULT NULL,
  `face_to_face` int(3) DEFAULT NULL,
  `dept_meet` int(3) DEFAULT NULL,
  `prod_meet` int(3) DEFAULT NULL,
  `project_meet` int(3) DEFAULT NULL,
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
-- Дамп даних таблиці `pyt_4_2`
--

INSERT INTO `pyt_4_2` (`id`, `session_id`, `main_source`, `phone`, `write`, `face_to_face`, `dept_meet`, `prod_meet`, `project_meet`, `budget_meet`, `smp_d`, `smp_w`, `cs`, `unformal_meet`, `own_title`, `own`, `total`, `date`) VALUES
(13, 'nb4m9oudr2k6km1fpkrgiu7ds5', '', '29', 25, 32, 14, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-10 13:05:39'),
(12, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '17', 0, 17, 19, 15, NULL, 0, 13, 0, NULL, 16, 'tets', 6, 103, '2018-09-10 12:44:05'),
(11, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '31', 22, 24, 23, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 100, '2018-09-10 12:24:23'),
(10, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '1', 5, 4, 8, 13, NULL, 9, 7, 10, NULL, 12, 'TEST', 11, 100, '2018-09-10 10:53:43'),
(9, 'g14dopd52hqk8jlihvhe9fg1c6', '', '0', 0, 0, 0, 0, NULL, 0, 27, 20, NULL, 25, 'sadasdad', 27, 121, '2018-09-10 10:48:59'),
(14, 'c4m0777sa9e3i16sjqdetpl9m4', '', '33', 32, 31, 26, 25, NULL, 21, 23, 21, NULL, 23, 'Mozilla', 36, 320, '2018-09-10 13:34:47'),
(15, 'nr8jnfod1apunhdvaqhfkgd3o0', '', '0', 0, 78, 0, 38, NULL, 47, 0, 0, NULL, 0, '', 0, 198, '2018-09-11 11:23:40'),
(16, 'ai09brtjlq9e31tnlv9kaqo4k4', '', '0', 0, 0, 0, 0, NULL, 22, 23, 19, NULL, 20, '', 0, 135, '2018-09-12 06:14:37'),
(17, 'ai09brtjlq9e31tnlv9kaqo4k4', 'swoim dziaÅ‚em', '24', 17, 22, 14, 25, NULL, 15, 10, 12, NULL, 11, '', 14, 187, '2018-09-12 13:45:00'),
(18, 'ai09brtjlq9e31tnlv9kaqo4k4', 'innym dziaÅ‚em SMP', '6', 7, 8, 12, 14, NULL, 8, 7, 7, NULL, 6, '', 5, 101, '2018-09-12 13:45:50'),
(19, 'ai09brtjlq9e31tnlv9kaqo4k4', 'innym dziaÅ‚em SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '13.09', 66, 66, '2018-09-13 06:11:35'),
(20, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '24', 31, 16, 14, 26, NULL, 40, 22, 24, NULL, 22, '', 35, 309, '2018-09-14 08:54:34'),
(21, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 0, '', 0, 0, '2018-09-14 08:55:27'),
(22, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '0', 0, 0, 0, 0, NULL, 0, 0, 0, NULL, 7, '', 0, 7, '2018-09-14 08:55:35'),
(23, 'nrrg8u2pfk2pa723lcvtmtal93', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '17', 28, 16, 13, 9, NULL, 10, 8, 13, NULL, 12, 'Spotkania ', 12, 160, '2018-09-14 09:14:31'),
(24, 'utmp8909a6865e5j42451un0i3', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '0', 24, 24, 0, 0, NULL, 21, 5, 0, NULL, 4, '', 0, 100, '2018-09-14 10:41:49'),
(25, 'ai09brtjlq9e31tnlv9kaqo4k4', 'bezpoÅ›rednim przyÅ‚oÅ¼onym', '6', 9, 3, 10, 0, NULL, 27, 14, 0, NULL, 0, '', 0, 86, '2018-09-14 10:46:53'),
(26, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zarzÄ…dem SMP', '26', 10, 22, 33, 28, NULL, 35, 25, 27, NULL, 27, '', 31, 310, '2018-09-14 12:13:52');

-- --------------------------------------------------------

--
-- Структура таблиці `pyt_5_1`
--

CREATE TABLE `pyt_5_1` (
  `id` int(11) NOT NULL,
  `session_id` text,
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
  `date` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `pyt_5_1`
--

INSERT INTO `pyt_5_1` (`id`, `session_id`, `opcja_1`, `opcja_2`, `opcja_3`, `opcja_4`, `opcja_5`, `opcja_1_title`, `opcja_2_title`, `opcja_3_title`, `opcja_4_title`, `opcja_5_title`, `date`) VALUES
(1, 'ai09brtjlq9e31tnlv9kaqo4k4', 'ani_ani', 'raczej_zle', 'raczej_zle', 'raczej_zle', 'raczej_zle', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', NULL),
(2, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zle', 'raczej_zle', 'ani_ani', 'raczej_dobrze', 'dobrze', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', NULL),
(3, 'ai09brtjlq9e31tnlv9kaqo4k4', 'ani_ani', 'ani_ani', 'raczej_zle', 'raczej_zle', 'raczej_zle', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', NULL),
(4, 'ai09brtjlq9e31tnlv9kaqo4k4', 'niewiem', 'Niewiem', 'Niewiem', 'Niewiem', 'Niewiem', 'parcel_warehouse', 'baza_sugestii', 'own', 'lessons_learned', 'zmt', NULL),
(5, 'ai09brtjlq9e31tnlv9kaqo4k4', 'sasdad', 'dadasd', 'dadsad', 'dadsadsad', 'test', 'parcel_warehouse', 'baza_sugestii', 'own', 'lessons_learned', 'zmt', NULL),
(6, 'k1dmepc9sp39antr00u4034805', '', '', '', '', 'Raczej_dobrze', '', '', '', '', '', NULL),
(7, 'nrrg8u2pfk2pa723lcvtmtal93', 'zle', 'raczej_zle', 'ani_ani', 'raczej_zle', 'Raczej_dobrze', 'comarch', 'baza_sugestii', 'intranet', 'smp_web_page', 'bpcs', NULL),
(8, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zle', 'raczej_zle', 'ani_ani', 'raczej_dobrze', 'dobrze', 'comarch', 'qms', 'sap', 'intranet', 'bpcs', NULL),
(9, 'ai09brtjlq9e31tnlv9kaqo4k4', 'dobrze', 'dobrze', 'dobrze', 'dobrze', 'dobrze', 'facebook', 'parcel_warehouse', 'lessons_learned', 'zmt', 'intranet', NULL),
(10, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zle', 'raczej_zle', 'ani_ani', 'raczej_dobrze', 'dobrze', 'facebook', 'parcel_warehouse', 'lessons_learned', 'zmt', 'intranet', NULL),
(11, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zle', 'zle', 'zle', 'zle', 'zle', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', NULL),
(12, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zle', 'zle', 'zle', 'zle', 'zle', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', NULL),
(13, 'ai09brtjlq9e31tnlv9kaqo4k4', 'zle', 'raczej_zle', 'ani_ani', 'raczej_dobrze', 'dobrze', 'bpcs', 'sap', 'intranet', 'comarch', 'qms', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `pyt_6_1`
--

CREATE TABLE `pyt_6_1` (
  `id` int(11) NOT NULL,
  `session_id` text,
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
  `date` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп даних таблиці `pyt_6_1`
--

INSERT INTO `pyt_6_1` (`id`, `session_id`, `opcja_1`, `opcja_2`, `opcja_3`, `opcja_4`, `opcja_5`, `opcja_1_title`, `opcja_2_title`, `opcja_3_title`, `opcja_4_title`, `opcja_5_title`, `date`) VALUES
(1, 'ai09brtjlq9e31tnlv9kaqo4k4', 'niewiem', 'Niewiem', 'Niewiem', 'Niewiem', 'test', 'parcel_warehouse', 'baza_sugestii', 'own', 'lessons_learned', 'zmt', NULL),
(2, 'ai09brtjlq9e31tnlv9kaqo4k4', 'niewiem', 'Niewiem', 'Niewiem', 'Niewiem', 'test', 'parcel_warehouse', 'baza_sugestii', 'own', 'lessons_learned', 'zmt', NULL),
(3, 'ai09brtjlq9e31tnlv9kaqo4k4', 'sasdad', 'Niewiem', 'Niewiem', 'dadsadsad', 'test', 'parcel_warehouse', 'baza_sugestii', 'own', 'lessons_learned', 'zmt', NULL),
(4, 'k1dmepc9sp39antr00u4034805', '', '', '', '', '', 'sdfsdfsd', 'sdfsdfsd', 'sdfsdf', 'sdfsdf', 'sdfsdfsd', NULL),
(5, 'nrrg8u2pfk2pa723lcvtmtal93', '', '', '', '', '', 'comarch', 'baza_sugestii', 'intranet', 'smp_web_page', 'bpcs', NULL),
(6, 'ai09brtjlq9e31tnlv9kaqo4k4', 'sasdad', 'Niewiem', 'Niewiem', 'Niewiem', 'test', 'facebook', 'parcel_warehouse', 'lessons_learned', 'zmt', 'intranet', NULL),
(7, 'ai09brtjlq9e31tnlv9kaqo4k4', 'test', 'test', 'test', 'test', 'test', 'intranet', 'comarch', 'bpcs', 'qms', 'sap', NULL),
(8, 'ai09brtjlq9e31tnlv9kaqo4k4', 'Test', 'Test', 'TEst', 'ETSAE', 'ADStas', 'bpcs', 'sap', 'intranet', 'comarch', 'qms', NULL);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pyt_1`
--
ALTER TABLE `pyt_1`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pyt_2`
--
ALTER TABLE `pyt_2`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pyt_3`
--
ALTER TABLE `pyt_3`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pyt_4_1`
--
ALTER TABLE `pyt_4_1`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pyt_4_2`
--
ALTER TABLE `pyt_4_2`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pyt_5_1`
--
ALTER TABLE `pyt_5_1`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `pyt_6_1`
--
ALTER TABLE `pyt_6_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблиці `pyt_1`
--
ALTER TABLE `pyt_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT для таблиці `pyt_2`
--
ALTER TABLE `pyt_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT для таблиці `pyt_3`
--
ALTER TABLE `pyt_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT для таблиці `pyt_4_1`
--
ALTER TABLE `pyt_4_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT для таблиці `pyt_4_2`
--
ALTER TABLE `pyt_4_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблиці `pyt_5_1`
--
ALTER TABLE `pyt_5_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблиці `pyt_6_1`
--
ALTER TABLE `pyt_6_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
