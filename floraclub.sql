-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 09 2015 г., 11:38
-- Версия сервера: 5.5.43-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `floraclub`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
`id` int(10) unsigned NOT NULL,
  `bidtype` int(10) unsigned NOT NULL,
  `variant` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descr` text COLLATE utf8_unicode_ci NOT NULL,
  `messagedate` datetime NOT NULL,
  `mailed` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `blocks`
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `blocks`
--

INSERT INTO `blocks` (`name`, `title`) VALUES
('remember_day', 'Ты ведь помнишь, какой сегодня день?'),
('flora_club', 'Цветочный клуб Флора Экспресс1'),
('without_emb', 'Без конфуза в праздник'),
('ten_bouquets', '10 букетов — бесплатно'),
('bouquets_perfect', 'Букеты — идеальные'),
('useful_letters', 'Полезные письма'),
('quality_service', 'Удобный и качественный сервис'),
('happy_customers', 'Более 200 000 счастливых клиентов'),
('join_the_club', 'Вступить в клуб');

-- --------------------------------------------------------

--
-- Структура таблицы `bools`
--

CREATE TABLE IF NOT EXISTS `bools` (
`id` int(10) unsigned NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) unsigned NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sorter` int(11) NOT NULL,
  `show` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `block_name`, `title`, `sorter`, `show`, `created_at`, `updated_at`) VALUES
(22, 'flora_club', '', 1, 1, '2015-07-08 12:06:09', '2015-07-08 12:06:47'),
(23, 'flora_club', '', 2, 1, '2015-07-08 12:06:11', '2015-07-08 12:06:48'),
(24, 'flora_club', '', 4, 1, '2015-07-08 12:06:12', '2015-07-08 12:11:57');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondary_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preview_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `block_name`, `group_id`, `alt`, `primary_link`, `secondary_link`, `icon_link`, `preview_link`) VALUES
(1, 'coco', 'remember_day', 0, '', 'remember_day_coco_0.jpg', '', '', 'remember_day_coco_0_preview.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_06_27_131534_create_blocks_table', 1),
('2015_06_27_131553_create_groups_table', 1),
('2015_06_27_131608_create_images_table', 1),
('2015_06_27_162911_create_stringfields_table', 1),
('2015_06_27_162920_create_textfields_table', 1),
('2015_06_27_170718_create_bids_table', 1),
('2015_07_01_133347_create_numbs_table', 1),
('2015_07_01_134525_create_bools_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `numbs`
--

CREATE TABLE IF NOT EXISTS `numbs` (
`id` int(10) unsigned NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `stringfields`
--

CREATE TABLE IF NOT EXISTS `stringfields` (
`id` int(10) unsigned NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `stringfields`
--

INSERT INTO `stringfields` (`id`, `block_name`, `group_id`, `name`, `value`) VALUES
(1, 'remember_day', 0, 'phrase_answer', 'Трудный понедельник'),
(2, 'remember_day', 0, 'citsign_coco', 'Коко Шинель1'),
(3, 'flora_club', 0, 'subtitle_1', 'dsfsfdfdsfdsf'),
(4, 'flora_club', 0, 'subtitle_2', 'sdf hlklkjl'),
(5, 'flora_club', 0, 'echophrase', 'dfcz'),
(6, 'without_emb', 0, 'slogan', ''),
(7, 'without_emb', 0, 'subtitle', ''),
(8, 'ten_bouquets', 0, 'slogan', ''),
(9, 'useful_letters', 0, 'link_1', ''),
(10, 'useful_letters', 0, 'link_2', ''),
(11, 'useful_letters', 0, 'link_3', ''),
(12, 'quality_service', 0, 'slogan', ''),
(13, 'quality_service', 0, 'subtitle', ''),
(14, 'join_the_club', 0, 'slogan', ''),
(21, 'flora_club', 22, 'title', 'fgdfgfgdf'),
(22, 'flora_club', 22, 'remark', 'uiluiluil'),
(23, 'flora_club', 23, 'title', 'dvasya'),
(24, 'flora_club', 23, 'remark', 'rgrege'),
(25, 'flora_club', 24, 'title', 'fggg'),
(26, 'flora_club', 24, 'remark', 'asfdsfsf');

-- --------------------------------------------------------

--
-- Структура таблицы `textfields`
--

CREATE TABLE IF NOT EXISTS `textfields` (
`id` int(10) unsigned NOT NULL,
  `block_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `textfields`
--

INSERT INTO `textfields` (`id`, `block_name`, `group_id`, `name`, `value`) VALUES
(1, 'remember_day', 0, 'remark', 'Британские ученые вы/снили что 67 % женщин чего-то там бла бла.\n            \n            \n            \n            \n            \n            \n            \n            \n            '),
(2, 'remember_day', 0, 'citation_coco', 'Мужчины должны и так далее...\n            \n            \n            \n            \n            \n            \n            \n            \n            '),
(3, 'flora_club', 0, 'descr_1', 'asdsd   \n            \n            \n            \n            \n            \n            \n            '),
(4, 'flora_club', 0, 'descr_2', 'adlasdla;dkad;lakd;las                \n            \n            \n            \n            \n            \n            \n            '),
(5, 'without_emb', 0, 'descr', ''),
(6, 'without_emb', 0, 'remark', ''),
(7, 'ten_bouquets', 0, 'descr', ''),
(8, 'ten_bouquets', 0, 'remark', ''),
(9, 'bouquets_perfect', 0, 'descr', ''),
(10, 'bouquets_perfect', 0, 'remark_1', ''),
(11, 'bouquets_perfect', 0, 'remark_2', ''),
(12, 'bouquets_perfect', 0, 'remark_3', ''),
(13, 'bouquets_perfect', 0, 'remark_4', ''),
(14, 'useful_letters', 0, 'descr', ''),
(15, 'quality_service', 0, 'descr_1', ''),
(16, 'quality_service', 0, 'descr_2', ''),
(17, 'quality_service', 0, 'descr_3', ''),
(18, 'happy_customers', 0, 'descr', ''),
(19, 'join_the_club', 0, 'descr', ''),
(20, 'join_the_club', 0, 'remark', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Boris', 'wsad@ok.kz', '$2y$10$V0sZzdw7uH69FGchu3ybrehVzHgmKQQjm1GeMi5.aH/CjqZ6v98Pm', NULL, '2015-07-07 07:33:02', '2015-07-07 07:33:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
 ADD KEY `blocks_name_index` (`name`);

--
-- Indexes for table `bools`
--
ALTER TABLE `bools`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD KEY `groups_block_name_index` (`block_name`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbs`
--
ALTER TABLE `numbs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `stringfields`
--
ALTER TABLE `stringfields`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textfields`
--
ALTER TABLE `textfields`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bools`
--
ALTER TABLE `bools`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `numbs`
--
ALTER TABLE `numbs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stringfields`
--
ALTER TABLE `stringfields`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `textfields`
--
ALTER TABLE `textfields`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
