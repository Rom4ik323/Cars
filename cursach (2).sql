-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 16 2023 г., 14:56
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cursach`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `cost` varchar(40) NOT NULL,
  `img` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `hs` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `liters` varchar(10) DEFAULT NULL,
  `fuel` varchar(10) DEFAULT NULL,
  `drive` varchar(10) DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `name`, `cost`, `img`, `img1`, `img2`, `hs`, `liters`, `fuel`, `drive`, `updated_at`) VALUES
(1, 'Bentley Continental Convertible', '66.666 ₽/сут.', 'https://dubai.carloson.ru/uploads/images/cars/312/100001.jpg', 'https://dubai.carloson.ru/uploads/images/cars/312/100002.jpg', 'https://dubai.carloson.ru/uploads/images/cars/312/100003.jpg', '550 л.с.', '4.0 л.', 'Бензин', 'Полный', '2023-04-03 15:07:38.000000'),
(2, 'Ferrari Portofino', '51.000 ₽/сут.', 'https://drive.google.com/drive/u/0/folders/1xUoifPy_FriGlwFJ-U8ra2t-hnYD1J11', NULL, NULL, '', NULL, NULL, NULL, NULL),
(3, 'CADILLAC ESCALADE ESV', '40.000 ₽/сут.', 'https://dubai.carloson.ru/uploads/images/cars/317/100009.jpg', 'https://dubai.carloson.ru/uploads/images/cars/317/100010.jpg', 'https://dubai.carloson.ru/uploads/images/cars/317/100003.jpg', '416 л.с.', '6.2 л.', 'Бензин', 'Полный', NULL),
(4, 'AUDI Q3', '12.500 ₽/сут.', 'https://dubai.carloson.ru/uploads/images/cars/314/100002.jpg', 'https://dubai.carloson.ru/uploads/images/cars/314/100003.jpg', 'https://dubai.carloson.ru/uploads/images/cars/314/100005.jpg', '150 л.с.', '1.5 л.', 'Бензин', 'Задний', NULL),
(5, 'Porsche Boxster GTS', '22.000 ₽/сут.', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Ford Convertible GT', '13.500 ₽/сут.', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Ferrari F8 Spider', '69.000 ₽/сут.', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'BMW 530D M-SPORT', '14.500 ₽', 'data:image/gif;base64,R0lGODlhEgIBAIAAAP///wAAACH5BAEAAAEALAAAAAASAgEAAAIVjI+py+0Po5y02ouz3rz7D4biSBoFADs=', NULL, NULL, '249 л.с.', '3.0 л.', 'Дизель', 'Полный', NULL),
(10, 'BMW 530D M-SPORT', '14.500 ₽', 'data:image/gif;base64,R0lGODlhEgIBAIAAAP///wAAACH5BAEAAAEALAAAAAASAgEAAAIVjI+py+0Po5y02ouz3rz7D4biSBoFADs=', NULL, NULL, '249 л.с.', '3.0 л.', 'Дизель', 'Полный', NULL),
(11, 'BMW 530D M-SPORT', '14.500 ₽', 'data:image/gif;base64,R0lGODlhEgIBAIAAAP///wAAACH5BAEAAAEALAAAAAASAgEAAAIVjI+py+0Po5y02ouz3rz7D4biSBoFADs=', NULL, NULL, '249 л.с.', '3.0 л.', 'Дизель', 'Полный', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'TagHizmkcaVFjFUPJvGSSyXquPUGqcoNwgmU2K3B', NULL, 'http://localhost', 1, 0, 0, '2023-03-10 13:50:30', '2023-03-10 13:50:30'),
(2, NULL, 'Laravel Password Grant Client', 'cETZS5taM6oGD7BO05lkgbvvvLiyYmreNVIgfbRa', 'users', 'http://localhost', 0, 1, 0, '2023-03-10 13:50:30', '2023-03-10 13:50:30');

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-03-10 13:50:30', '2023-03-10 13:50:30');

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(40) NOT NULL,
  `days` varchar(40) NOT NULL,
  `number` varchar(40) NOT NULL,
  `car` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `days`, `number`, `car`) VALUES
(1, 'Евгений ', '2', '8-933-234-33-22', 'Ferrari Portofino'),
(2, 'Иосиф', '2', '8-956-354-23-32', 'Bentley Continental Convertible'),
(12, 'test', '2', '8-888-888-88-99', 'Chevrolet Corvette C8'),
(13, 'test', '2', '8-888-888-88-99', 'Chevrolet Corvette C8'),
(14, 'test', '2', '8-888-888-88-99', 'Chevrolet Corvette C8'),
(15, 'test', '2', '8-888-888-88-99', 'Chevrolet Corvette C8'),
(16, 'test', '2', '8-888-888-88-99', 'Chevrolet Corvette C8'),
(17, 'test', '2', '8-888-888-88-99', 'Chevrolet Corvette C8'),
(18, 'test', '2', '8-888-888-88-99', 'Chevrolet Corvette C8');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'qwe', 'qwe@aqq', NULL, '$2y$10$OjkUglGqOf/ywavbfwCWwem3FCU2/Qi4GDVNlL7Oey.vQH24z3/P6', NULL, '2023-03-10 13:54:47', '2023-03-10 13:54:47', NULL),
(2, 'qweqwe', 'qweqwe@qqq', NULL, '$2y$10$Bi0h5kBd1605GBedqkg0l.06gG7EblspyWdoxGm1cCYZ84TPVcKCy', NULL, '2023-03-10 14:01:21', '2023-03-10 14:01:21', NULL),
(3, 'qweqwe', 'qweqweqwe@qwe', NULL, '$2y$10$JuvU9KmkSv5YDYxpMqYYcO0knRy50XCVzUfh63dURXvvrO6B1whAS', NULL, '2023-03-12 10:36:39', '2023-03-12 10:36:39', NULL),
(4, 'fff', 'fff@fff', NULL, '$2y$10$6Ul7xUl5EG74SAd0gX3fkOOdZNWQtu4e9VWKVx5dfUt/XjY8woLsa', NULL, '2023-03-17 17:11:16', '2023-03-17 17:11:16', NULL),
(5, 'admin@admin', 'admin@admin', NULL, '$2y$10$/mdSow2E5Nf9GDFULIvA6OR8RXEB3k3tbl2QOXrcnRbqVT9tTSyNa', NULL, '2023-03-19 05:44:37', '2023-03-19 05:44:37', 1),
(6, '123', '123@123', NULL, '$2y$10$fudWGUMKBwBGkcgUi2MoS.6t06PiHrX9jbcNhAJTYc2czYm1nGcC2', NULL, '2023-03-19 08:02:18', '2023-03-19 08:02:18', NULL),
(7, 'sabininanunahmama', 'idetdomoi@nedelu', NULL, '$2y$10$yKKWtGNrWzCkdQMzLvRQKe4H0mpDxe87w3Ia4I0SY2m7JriifXQ3u', NULL, '2023-03-22 17:15:41', '2023-03-22 17:15:41', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Индексы таблицы `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Индексы таблицы `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Индексы таблицы `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
