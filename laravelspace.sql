-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Вер 11 2017 р., 03:22
-- Версія сервера: 5.7.16
-- Версія PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `laravelspace`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`, `alias`, `created_at`, `updated_at`) VALUES
(1, 0, 'Солнечная система', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Солнечная система', '2017-07-26 04:30:28', '2017-07-26 04:30:30'),
(2, 0, 'Галактики', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Галактики', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(3, 0, 'Черные дыры', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Черные дыры', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(4, 0, 'Экзопланеты', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Экзопланеты', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(5, 0, 'Звезды', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Звезды', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(6, 0, 'Туманности', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Туманности', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(7, 0, 'Квазары', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Квазары', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(8, 0, 'Пульсары', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Пульсары', '2017-07-26 04:59:28', '2017-07-29 01:09:15'),
(9, 0, 'Звездные скопления', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Звездные скопления', '2017-07-22 04:30:28', '2017-07-29 01:09:15'),
(10, 0, 'Астероиды и кометы', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Астероиды и кометы', '2017-04-26 04:30:28', '2017-07-29 01:09:15'),
(11, 0, 'Темная материя и темная энергия', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Темная материя и темная энергия', '2017-07-26 04:30:18', '2017-07-29 01:09:15'),
(12, 0, 'Интересные факты', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Интересные факты', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(13, 0, 'Изучение космоса', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Изучение космоса', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(14, 0, 'Вселенная и жизнь', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Вселенная и жизнь', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(15, 0, 'Немного истории', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Немного истории', '2017-07-26 04:30:28', '2017-07-29 01:09:15'),
(16, 0, 'Мифы и легенды', 'ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ключові слова ', 'опис опис опис опис опис опис опис опис опис ', 'Мифы и легенды', '2017-07-26 04:30:28', '2017-07-29 01:09:15');

-- --------------------------------------------------------

--
-- Структура таблиці `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `text` text CHARACTER SET utf8 NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `deslikes` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `comment`
--

INSERT INTO `comment` (`id`, `login`, `parent_id`, `text`, `likes`, `deslikes`, `created_at`, `updated_at`, `post_id`, `user_id`) VALUES
(4, NULL, 0, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 3, 1, '2017-07-10 00:10:30', NULL, 3, 15),
(5, NULL, 0, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 6, 0, '2017-07-03 01:19:00', NULL, 3, 2),
(6, NULL, 4, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 0, 0, '2017-07-13 11:33:00', NULL, 3, 15),
(7, NULL, 0, 'dasdasdasd ad a', 0, 0, '2017-07-20 11:29:44', '2017-07-20 11:29:44', 3, 15),
(8, NULL, 6, 'fsdfsdf', 0, 0, '2017-07-20 11:38:17', '2017-07-20 11:38:17', 3, 2),
(9, NULL, 8, 'dsfsdfsdfsdf', 0, 0, '2017-07-21 07:32:58', '2017-07-21 07:32:58', 3, 2),
(10, NULL, 0, 'dytry r yrt g gfh fhg', 0, 0, '2017-07-21 08:15:33', '2017-07-21 08:15:33', 3, 15),
(11, NULL, 7, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod', 0, 0, '2017-07-21 10:10:23', '2017-07-21 10:10:23', 3, 15),
(13, 'Sasha', 0, 'Hello World', 0, 0, '2017-07-21 11:05:26', '2017-07-21 11:05:26', 3, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `text`, `created_at`, `updated_at`) VALUES
(1, 'dadada', 'dadada@gmail.com', 'temaaa', 'text message dfgdfg dfg', NULL, NULL),
(2, 'dadadasa', 'dadadasa@gmail.com', 'temaaa2', 'text message dfgdfg dfg fdg fg d', NULL, NULL),
(3, 'sasaseasaasa@gmail.com', 'sasaseasaasa@gmail.com', 'ewrwer', 'rwerwerwrvr ew fd ds fds fsd', '2017-07-26 21:31:48', '2017-07-26 21:31:48'),
(4, 'Saniko@gmail.com', 'Saniko@gmail.com', 'Тест', 'Привіт адмін', '2017-08-10 20:10:15', '2017-08-10 20:10:15');

-- --------------------------------------------------------

--
-- Структура таблиці `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_it` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `whom_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `last_message` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `message`
--

INSERT INTO `message` (`id`, `text`, `read_it`, `created_at`, `updated_at`, `user_id`, `whom_id`, `last_message`) VALUES
(2, 'gjhgjhgjhgjg gjghj kg gh', 0, '2017-07-18 01:12:13', NULL, 1, 2, 0),
(3, 'gjhgjhgj kkj 778 jhgjg gjghj kg gh', 0, '2017-07-18 01:12:15', NULL, 1, 2, 0),
(4, ' xfxd  .kjkjk hj kg gh', 0, '2017-07-18 01:12:18', NULL, 2, 1, 0),
(5, 'oi uio un,nm jg gjghj kg gh', 0, '2017-07-18 01:12:23', NULL, 1, 2, 1),
(6, 'oi uio un,nm jg gjghj kg gh', 0, '2017-07-18 01:12:23', NULL, 19, 2, 0),
(7, 'oi uio un,nm jg gjghj kg gh', 0, '2017-07-18 01:12:12', '2017-08-07 21:33:28', 19, 15, 0),
(8, 'oi uio un,nm jg gjghj kg gh', 0, '2017-07-18 01:12:23', NULL, 19, 25, 0),
(9, 'oi uio un,nm jg dsadsaf sdf sgjghj kg gh', 0, '2017-07-18 01:12:23', NULL, 19, 25, 1),
(10, 'oi uio un,nm jg dsadsaf sdf sgjghj kg gh', 0, '2017-07-18 01:12:27', NULL, 2, 19, 1),
(12, 'hello', 0, '2017-08-07 21:10:31', '2017-08-17 11:51:01', 19, 1, 0),
(13, 'hello men', 0, '2017-08-07 21:33:28', '2017-08-07 21:33:28', 19, 15, 0),
(14, 'hi', 0, '2017-08-07 21:33:31', '2017-08-07 21:33:31', 15, 19, 0),
(15, 'Як справи?', 0, '2017-08-08 21:43:32', '2017-08-08 21:43:32', 19, 15, 0),
(16, 'Аууууууууууууууу', 0, '2017-08-08 21:43:45', '2017-08-08 21:47:08', 19, 15, 0),
(17, 'Алеееееееее', 0, '2017-08-08 21:47:08', '2017-08-08 21:47:08', 19, 15, 0),
(18, 'Привіт', 0, '2017-08-08 21:47:13', '2017-08-08 21:47:13', 15, 19, 1),
(19, 'hi', 0, '2017-08-17 11:51:01', '2017-08-17 11:51:01', 19, 1, 1),
(20, 'helllo', 0, '2017-08-17 15:13:20', '2017-08-17 15:13:20', 19, 18, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_06_26_133924_create_category_table', 1),
(3, '2017_06_26_133947_create_comment_table', 1),
(4, '2017_06_26_134240_create_message_table', 1),
(5, '2017_06_26_134315_create_online_camera_table', 1),
(6, '2017_06_26_134341_create_photo_table', 1),
(7, '2017_06_26_134406_create_planet_table', 1),
(8, '2017_06_26_134502_create_solar_system_table', 1),
(9, '2017_06_26_134805_create_feedback_table', 1),
(10, '2017_06_26_135738_create_rols_table', 1),
(11, '2017_06_27_152347_create_post_table', 1),
(12, '2017_06_27_160408_create_user_table', 1),
(13, '2017_06_27_200718_change_user_table', 1),
(14, '2017_06_27_205227_change_post_table', 1),
(15, '2017_06_27_205308_change_rols_table', 1),
(16, '2017_06_27_205541_change_solar_system_table', 1),
(17, '2017_06_27_205640_change_message_table', 1),
(18, '2017_06_27_205723_change_comment_table', 1),
(19, '2017_06_27_205812_change_category_table', 1),
(20, '2017_07_02_231034_change_message_table2', 2),
(21, '2017_07_03_000152_change_post_table2', 3),
(22, '2017_07_07_130020_change_post_table3', 4),
(23, '2017_07_09_141338_change_user_add_avatar', 5),
(24, '2017_08_07_221731_add_column_table_message', 6),
(25, '2017_08_11_143454_create_video_table', 7);

-- --------------------------------------------------------

--
-- Структура таблиці `online_camera`
--

CREATE TABLE `online_camera` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `online_camera`
--

INSERT INTO `online_camera` (`id`, `name`, `link`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'Камера 1', 'www.myspace.com', 'fsdfsdfsdfsdf fd g dfg df fdg fd gdf g gdf g dfg df  gfd g', 'sfsdfsdf df gdf', '2017-07-17 21:11:21', NULL),
(2, 'Камера 2', 'www.myspace.com', 'fsdfsdfsdfsdf fd g dfg df fdg fd gdf g gdf g dfg df  gfd g', 'sfsdfsdf df gdf', '2017-07-17 21:11:21', NULL),
(3, 'Камера 3', 'www.myspace.com', 'fsdfsdfsdfsdf fd g dfg df fdg fd gdf g gdf g dfg df  gfd g', 'sfsdfsdf df gdf', '2017-07-17 21:11:21', NULL),
(4, 'Камера 4', 'www.myspace.com', 'fsdfsdfsdfsdf fd g dfg df fdg fd gdf g gdf g dfg df  gfd g', 'sfsdfsdf df gdf', '2017-07-17 21:11:21', NULL),
(5, 'Камера 5', 'www.myspace.com', 'fsdfsdfsdfsdf fd g dfg df fdg fd gdf g gdf g dfg df  gfd g', 'sfsdfsdf df gdf', '2017-07-17 21:11:21', NULL),
(6, 'Камера 6', 'www.myspace.com', 'fsdfsdfsdfsdf fd g dfg df fdg fd gdf g gdf g dfg df  gfd g', 'sfsdfsdf df gdf', '2017-07-17 21:11:21', NULL),
(7, 'Камера 7', 'www.myspace.com', 'fsdfsdfsdfsdf fd g dfg df fdg fd gdf g gdf g dfg df  gfd g', 'sfsdfsdf df gdf', '2017-07-17 21:11:21', NULL),
(8, 'Камера 8', 'www.myspace.com', 'fsdfsdfsdfsdf fd g dfg df fdg fd gdf g gdf g dfg df  gfd gfffffffffff', 'sfsdfsdf df gdfffffffffff', '2017-07-17 21:11:21', '2017-08-04 14:51:40');

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `photo`
--

CREATE TABLE `photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `photo`
--

INSERT INTO `photo` (`id`, `title`, `img`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'photo1', '6546456456.jpg', 'ertre te te', 'ewre wr wer wer ew', NULL, NULL),
(2, 'photo2', '6546456456.jpg', 'ertre te te', 'ewre wr wer wer ew', NULL, NULL),
(3, 'photo3', '5435345345435.jpg', 'ertre te te', 'ewre wr wer wer ew', NULL, NULL),
(4, 'photo4', '5435345345435.jpg', 'ertre te te', 'ewre wr wer wer ew', NULL, NULL),
(5, 'photo5', '5435345345435.jpg', 'ertre te te', 'ewre wr wer wer ew', NULL, NULL),
(6, 'photo6', '5435345345435.jpg', 'ertre te te', 'ewre wr wer wer ew', NULL, NULL),
(7, 'photo7', '5435345345435.jpg', 'ertre te te', 'ewre wr wer wer ew', NULL, NULL),
(8, 'photo8', '6546456456.jpg', 'ertre te tedddddddddf', 'ewre wr wer wer ew', NULL, '2017-08-04 17:49:22'),
(10, 'ssafdsfdsf', '1yd.jpg', 'dsfdsfsd', 'dasd', '2017-08-04 18:23:14', '2017-08-04 18:23:14'),
(11, 'vxcvcxv', 'image2_117579.jpg', 'vdgfvdgf', 'sfdsdc', '2017-08-04 19:43:33', '2017-08-04 19:43:33');

-- --------------------------------------------------------

--
-- Структура таблиці `planet`
--

CREATE TABLE `planet` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `planet`
--

INSERT INTO `planet` (`id`, `parent_id`, `name`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 0, 'Меркурий', '', '', NULL, NULL),
(2, 0, 'Венера', '', '', NULL, NULL),
(3, 0, 'Земля', '', '', NULL, NULL),
(4, 0, 'Марс', '', '', NULL, NULL),
(5, 0, 'Юпитер', '', '', NULL, NULL),
(6, 0, 'Сатурн', '', '', NULL, NULL),
(7, 0, 'Уран', '', '', NULL, NULL),
(8, 0, 'Нептун', '', '', NULL, NULL),
(9, 0, 'Карликовые планеты', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` float NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `deslikes` int(11) NOT NULL DEFAULT '0',
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `planets_id` int(10) UNSIGNED DEFAULT '0',
  `solar_system_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED DEFAULT '0',
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `rank_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `news` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп даних таблиці `post`
--

INSERT INTO `post` (`id`, `title`, `text`, `img`, `rank`, `views`, `likes`, `deslikes`, `keywords`, `description`, `public`, `created_at`, `updated_at`, `planets_id`, `solar_system_id`, `user_id`, `category_id`, `rank_count`, `news`) VALUES
(3, 'Стаття 1', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '6546456456.jpg', 3, 43, 3, 0, '', '', 1, '2017-07-05 01:19:24', '2017-07-12 10:42:33', 3, 1, 1, 1, 1, 0),
(4, 'Стаття 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '6546456456.jpg', 3, 46, 324, 2, '', '', 1, '2017-07-05 01:19:24', '2017-07-12 10:42:33', 1, 2, 2, 1, 1, 1),
(7, 'Стаття 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '6546456456.jpg', 3, 12, 5, 1, '', '', 1, '2017-07-05 01:19:24', '2017-07-12 10:42:33', 1, 1, 1, 1, 1, 0),
(8, 'Стаття 4', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '6546456456.jpg', 3, 2, 0, 1, '', '', 1, '2017-07-05 01:19:24', '2017-07-12 10:42:33', 1, 1, 2, 2, 1, 0),
(9, 'Стаття 5', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '6546456456.jpg', 3, 43, 3, 0, '', '', 1, '2017-07-05 01:19:24', '2017-07-12 10:42:33', 3, 1, 1, 1, 1, 1),
(10, 'Стаття 6', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '6546456456.jpg', 3, 46, 324, 2, '', '', 1, '2017-07-05 01:19:24', '2017-07-12 10:42:33', 1, 2, 2, 1, 1, 0),
(11, 'Стаття 7', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '6546456456.jpg', 3, 12, 5, 1, '', '', 1, '2017-07-05 01:19:24', '2017-07-12 10:42:33', 1, 1, 1, 1, 1, 0),
(12, 'Стаття 8', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', '6546456456.jpg', 3, 2, 0, 1, '', '', 1, '2017-07-05 01:19:24', '2017-07-12 10:42:33', 1, 1, 2, 2, 1, 0),
(13, 'fsdfsdfsfsdf', 'gdf gd g dfg dfg df', 'south_africa_night.jpg', 0, 0, 0, 0, 'wef sfdf sdgfgfg', 'fds fsd f sdf sd1111111', 1, '2017-08-03 16:43:58', '2017-08-03 18:30:51', NULL, 5, 19, 16, 0, 0),
(18, 'sdfsdf', 'gdf gfd gd fg', 'default.jpg', 0, 0, 0, 0, 'sdfsdf', 'dsfdsf sdf sdf sd', 0, '2017-08-04 18:02:00', '2017-08-04 18:02:00', 1, 3, 19, 13, 0, 0),
(19, 'werwer', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'default.jpg', 0, 0, 0, 0, 'werwe', 'werdewrdwewr', 0, '2017-08-04 18:12:23', '2017-08-04 18:12:23', 1, 1, 19, 7, 0, 0),
(20, 'erdret', 'erdtertder', 'default.jpg', 0, 0, 0, 0, 'werwerefrfref', 'dfg dfg dfg df', 1, '2017-08-04 18:24:18', '2017-08-04 18:28:43', NULL, 2, 19, 7, 0, 1),
(21, 'fsdfsdfsfsdf', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'default.jpg', 0, 0, 0, 0, 'dasda', 'fdsf s d fs', 0, '2017-08-04 19:20:27', '2017-08-04 19:20:27', 3, 3, 19, 9, 0, 0),
(22, 'etert', 'df gdf gdf', '590x300.jpg', 0, 0, 0, 0, 'sdf', 'sdf', 0, '2017-08-04 19:34:57', '2017-08-04 19:34:57', 1, 1, 19, 15, 0, 0),
(23, 'ddfsf', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'gonkong_vid_iz_okna_vecher_neboskreby_1920x1200.jpg', 0, 0, 0, 0, 'fsdf', 'dfg df gdf g', 0, '2017-08-04 19:40:21', '2017-08-04 19:40:21', 1, 1, 19, 13, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблиці `rols`
--

CREATE TABLE `rols` (
  `id` int(10) UNSIGNED NOT NULL,
  `rols` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `rols`
--

INSERT INTO `rols` (`id`, `rols`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Простий користувач', 'Перегляд', NULL, NULL),
(2, 2, 'Модератор', 'Редагує', NULL, NULL),
(3, 3, 'Адміністратор', 'Всемогучій', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `solar_system`
--

CREATE TABLE `solar_system` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `solar_system`
--

INSERT INTO `solar_system` (`id`, `parent_id`, `name`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 'Солнце', '', '', NULL, NULL),
(2, 0, 'Планеты', '', '', NULL, NULL),
(3, 0, 'Астероиды', '', '', NULL, NULL),
(4, 0, 'Пояс астероидов', '', '', NULL, NULL),
(5, 0, 'Кометы', '', '', NULL, NULL),
(6, 0, 'Метеоры и метеориты', '', '', NULL, NULL),
(7, 0, 'Пояс Койпера и Облако Оорта', '', '', NULL, NULL),
(8, 0, 'За пределами Солнечной системы', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `public` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rols_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `status`, `public`, `remember_token`, `created_at`, `updated_at`, `rols_id`, `avatar`) VALUES
(1, 'Test', 'Test@gmail.com', '$2y$10$d2zdfSX0c08M9uoMhpNImeLdbsJ4CTmUQP0mMsGDjMrhP3fw7B9Jq', 1, 1, NULL, '2017-07-15 06:27:43', '2017-07-15 06:27:43', 3, '1yd.jpg'),
(2, 'Saniii', 'Saniii@gmail.com', '$2y$10$d2zdfSX0c08M9uoMhpNImeLdbsJ4CTmUQP0mMsGDjMrhP3fw7B9Jq', 1, 1, NULL, '2017-07-15 06:27:43', '2017-07-15 06:27:43', 3, 'south_africa_night.jpg'),
(15, 'sasasa', 'sasasasaasa@gmail.com', '$2y$10$ENy62dpV0NdIF4SRsKk35epjEgkTGXYaDCM5WTAxb44rrNPr0duNO', 1, 1, '6dZieBy58B6F8kHSqHxk73nicWMmuENMU0tK70m95fRrhLFrbZHNxdWZER5N', '2017-07-15 06:27:43', '2017-07-15 06:27:43', 1, 'World___United_Arab_Emirates_View_on_Dubai_from_the_window_of_a_skyscraper_085889_.jpg'),
(16, 'sasasasasa', 'sasasasasa@gmail.com', '$2y$10$uJ8U4DQAon5AQ.nU25pujunsRx25iolZTknj7LBN0GSQKYAjjdGGG', 1, 1, 'cWjsP6j7K6PFqLL1CcO4t53oKukUI7e2SfLKMMTEkKDnCEHlNWKIrVtBP8k6', '2017-07-15 06:29:29', '2017-07-15 06:29:29', 1, 'south_africa_night.jpg'),
(18, 'dfsdjg', 'dfsdjg@gmail.com', '$2y$10$NLWLDejAI5O0clyvGYg2Bu4/dDctJyxa4XaGjQu2wGlUOyoUWAZrO', 1, 1, NULL, '2017-07-15 09:14:59', '2017-07-15 09:14:59', 1, 'south_africa_night.jpg'),
(19, 'Saniko', 'Saniko@gmail.com', '$2y$10$TQJpGtxXKPU9QIUFKRd6AuYQuGqn1WGoekVloFM2kHxT.uaJd8KIW', 1, 1, 'u6avj8z6b7fIpalhoK6uMy1ZAKJHkRXXlkm2aihnLy3vxbE0shwaz42VUCsK', '2017-07-17 10:46:43', '2017-08-07 10:16:02', 3, '1yd.jpg'),
(20, 'Sakiko', 'Sakiko@gmail.com', '$2y$10$aBXiIRaiydiSx4M8n1Uud.x1AAnkUIn3w6Dhml6s8rswCl9kKYgJe', 1, 1, 'yXcGAQgoLN9B9qDvIM9yYNqSQMhQJu3TzT4bJTjyyjTMq1PpKDksf2eVRJm1', '2017-07-21 19:47:18', '2017-07-21 19:47:18', 1, 'south_africa_night.jpg'),
(21, 'sasalo', 'sasalo@gmail.com', '$2y$10$g8TtchKHMjx/c0aTL23t7O5PjyPLQnOakLVjK.8KytQJuCPoQifjm', 1, 1, 'DHC3Dn6adMemDOjCV1OgmnC7aMOGFm58Sv7EL2Vv4J8YgtoyG464v5Q087ZL', '2017-07-21 19:52:25', '2017-07-21 19:52:25', 1, 'gonkong_vid_iz_okna_vecher_neboskreby_1920x1200.jpg'),
(22, 'Marico', 'Marico@gmail.com', '$2y$10$A/lDm5AZMyJrqQSD74rylOkWEpOZmsRI/fMg9czBwXGe./.3Kzl.i', 1, 1, 'BDvjmCoRm2lVINmTEEvOcLkkCNDDC8qAiEeNXAlAXr76Z3NUZc5TrKde6aCx', '2017-07-21 19:53:33', '2017-07-21 19:53:33', 1, 'vid_s_neboskreba_1920x1200.jpg'),
(23, 'samarasa', 'samarasa@gmail.com', '$2y$10$7vw41si.iBvI0ptABVhgceb.DV6Q8tOn7R5aI7pBlBBpfeuEgyMXO', 1, 1, NULL, '2017-07-21 19:56:11', '2017-07-21 19:56:11', 1, 'image2_117579.jpg'),
(25, 'dagfgf', 'sasddsasasaasa@gmail.com', '$2y$10$zevbwl39FvF94B2idTGrKOMtfWJFx546DqB7lHim1a6Ah0z5gQGxG', 1, 1, NULL, '2017-08-02 21:07:50', '2017-08-02 21:07:50', 1, 'south_africa_night.jpg'),
(26, 'retyttt', 'retyttt@gmail.com', '$2y$10$uAnuf6A8Mi6E9LR43n8Vve424Mo1x2bIAvHYQuVyprxhhnH6Ot0TK', 1, 1, NULL, '2017-08-02 21:25:27', '2017-08-02 21:25:27', 2, 'south_africa_night.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` double(8,2) NOT NULL,
  `rank_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `deslikes` int(11) NOT NULL DEFAULT '0',
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `public` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_alias_unique` (`alias`);

--
-- Індекси таблиці `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_post_id_foreign` (`post_id`),
  ADD KEY `comment_user_id_foreign` (`user_id`);

--
-- Індекси таблиці `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_user_id_foreign` (`user_id`),
  ADD KEY `message_whom_id_foreign` (`whom_id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `online_camera`
--
ALTER TABLE `online_camera`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `planet`
--
ALTER TABLE `planet`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_planets_id_foreign` (`planets_id`),
  ADD KEY `post_solar_system_id_foreign` (`solar_system_id`),
  ADD KEY `post_user_id_foreign` (`user_id`),
  ADD KEY `post_category_id_foreign` (`category_id`);

--
-- Індекси таблиці `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `solar_system`
--
ALTER TABLE `solar_system`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_unique` (`name`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_rols_id_foreign` (`rols_id`);

--
-- Індекси таблиці `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблиці `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблиці `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблиці `online_camera`
--
ALTER TABLE `online_camera`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблиці `planet`
--
ALTER TABLE `planet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблиці `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблиці `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `solar_system`
--
ALTER TABLE `solar_system`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблиці `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `message_whom_id_foreign` FOREIGN KEY (`whom_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `post_planets_id_foreign` FOREIGN KEY (`planets_id`) REFERENCES `planet` (`id`),
  ADD CONSTRAINT `post_solar_system_id_foreign` FOREIGN KEY (`solar_system_id`) REFERENCES `solar_system` (`id`),
  ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_rols_id_foreign` FOREIGN KEY (`rols_id`) REFERENCES `rols` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
