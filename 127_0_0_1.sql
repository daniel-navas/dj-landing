-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2017 a las 16:42:39
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"willy\",\"table\":\"variables\"},{\"db\":\"willy\",\"table\":\"servicios\"},{\"db\":\"willy\",\"table\":\"calendario\"},{\"db\":\"willy\",\"table\":\"canciones\"},{\"db\":\"willy\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2017-09-17 03:39:02', '{\"lang\":\"es\",\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Base de datos: `willy`
--
CREATE DATABASE IF NOT EXISTS `willy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `willy`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id`, `fecha`, `nombre`, `ubicacion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, '2017-10-30', 'UNO', 'uno', '/images/willy/09192017024406.jpg', '0000-00-00 00:00:00', '2017-09-19 11:50:43'),
(2, '2017-10-30', 'DOS', 'dos', '/images/willy/09192017071055.png', '2017-09-17 07:04:45', '2017-09-19 12:10:55'),
(3, '2017-10-29', 'TRES', 'tres', '/images/willy/09172017074828.jpg', '2017-09-17 07:05:30', '2017-09-19 11:51:13'),
(4, '2017-10-28', 'CUATRO', 'cuatro', '/images/willy/09192017024220.jpg', '2017-09-17 07:05:43', '2017-09-19 11:51:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `enlace` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id`, `nombre`, `imagen`, `enlace`, `created_at`, `updated_at`) VALUES
(1, 'uno', '/images/willy/09182017070248.jpg', 'dos', '2017-09-18 12:02:49', '2017-09-18 12:02:49'),
(2, 'Dos', '/images/willy/09192017054022.png', 'nuevolink', '2017-09-18 12:27:05', '2017-09-19 10:40:22'),
(3, 'tres', '/images/willy/09192017063601.png', 'tres', '2017-09-19 11:36:01', '2017-09-19 11:36:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `valor` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `referencia`, `valor`, `created_at`, `updated_at`) VALUES
(1, 'clase1', 'event', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(2, 'Title1', 'Williflechas tit1', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(3, 'Subtitle1', 'subtitkulo foto 1', '2017-04-27 21:49:09', '2017-05-03 19:22:41'),
(4, 'FotoGrande1', '/images/willy/DJI_0111.jpg', '2017-04-27 21:49:09', '2017-08-10 11:10:30'),
(5, 'Title2', 'Williflechas tit2', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(6, 'Subtitle2', 'subtitkulo foto 2', '2017-04-27 21:49:09', '2017-05-03 19:22:41'),
(7, 'FotoGrande2', '/images/willy/DJI_0024.jpg', '2017-04-27 21:49:09', '2017-08-10 11:10:30'),
(8, 'clase2', 'event', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(9, 'Title3', 'Williflechas tit3', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(11, 'Title4', 'Williflechas tit4', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(12, 'Title5', 'Williflechas tit5', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(13, 'Title6', 'Williflechas tit6', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(14, 'Subtitle3', 'subtitkulo foto 3', '2017-04-27 21:49:09', '2017-05-03 19:22:41'),
(15, 'Subtitle4', 'subtitkulo foto 4', '2017-04-27 21:49:09', '2017-05-03 19:22:41'),
(16, 'Subtitle5', 'subtitkulo foto 5', '2017-04-27 21:49:09', '2017-05-03 19:22:41'),
(17, 'Subtitle6', 'subtitkulo foto 6', '2017-04-27 21:49:09', '2017-05-03 19:22:41'),
(18, 'FotoGrande3', '/images/willy/p1030695.jpg', '2017-04-27 21:49:09', '2017-08-10 11:10:30'),
(19, 'FotoGrande4', '/images/willy/IMG_4474 fondo3.jpg', '2017-04-27 21:49:09', '2017-08-10 11:10:30'),
(20, 'FotoGrande5', '/images/willy/IMG_4522 fondo.jpg', '2017-04-27 21:49:09', '2017-08-10 11:10:30'),
(21, 'FotoGrande6', '/images/willy/IMG_4474 fondo2.jpg', '2017-04-27 21:49:09', '2017-08-10 11:10:30'),
(22, 'clase3', 'event musician', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(23, 'clase4', 'event mediam', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(24, 'clase5', 'musician mediam', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(25, 'clase6', 'event musician', '2017-04-27 21:48:17', '2017-05-03 19:22:41'),
(26, 'foto1', '/images/willy/DJI_0111.jpg', '2017-04-27 21:58:10', '2017-08-10 11:10:30'),
(27, 'foto2', '/images/willy/DJI_0024.jpg', '2017-04-27 21:58:39', '2017-08-10 11:10:30'),
(28, 'foto3', '/images/willy/p1030695.jpg', '2017-04-27 21:58:39', '2017-08-10 11:10:30'),
(29, 'foto4', '/images/willy/IMG_4474 fondo3.jpg', '2017-04-27 21:58:39', '2017-08-10 11:10:30'),
(30, 'foto5', '/images/willy/IMG_4522 fondo.jpg', '2017-04-27 21:58:39', '2017-08-10 11:10:30'),
(31, 'foto6', '/images/willy/IMG_4474 fondo2.jpg', '2017-04-27 21:58:39', '2017-08-10 11:10:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `enlace` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `imagen`, `enlace`, `created_at`, `updated_at`) VALUES
(1, 'BODAS & 15 AÑOS', '/images/willy/09192017073232.png', 'uno', '2017-09-19 03:39:48', '2017-09-19 12:32:32'),
(2, 'EVENTOS CORPORATIVOS', '/images/willy/serv2.jpg', 'enlace', '2017-09-19 03:41:59', '2017-09-19 03:41:59'),
(3, 'chikiteka', '/images/willy/serv3.jpg', 'url', '2017-09-19 03:42:26', '2017-09-19 12:34:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'francisco', 'franciscorojas92@gmail.com', '$2y$10$Ta1E13ZxfWz59OGhO8DkjOY4uhuJkqTuGw6aADXdkwDDGW/0AHTJW', NULL, '2017-04-25 08:04:17', '2017-04-25 08:04:17'),
(2, 'soporte', 'soporte@soporte.com', '$2y$10$MPTqgOoD55kEfvTHZgcc6e5QR8pWsl.mH5C/feYjkdGV9jQ4.evRi', NULL, '2017-05-20 22:42:13', '2017-05-20 22:42:13'),
(3, 'Willy', 'administrador@willyflechas.net', '$2y$10$0X7zGVwPM..uDF.I7spP6.znkJ9rwp0TPUqX9wRIOvnKVELsFVxfy', 'R0PUetrlZIzVOnwE8TEFYYIeukS2LQMQr7D37Yk2XylUNWREBrdPXqeqUy2i', '2017-07-21 07:15:48', '2017-07-21 07:15:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variables`
--

CREATE TABLE `variables` (
  `id` int(11) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `valor` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `variables`
--

INSERT INTO `variables` (`id`, `referencia`, `valor`, `created_at`, `updated_at`) VALUES
(2, 'banner1', '/images/willy/09192017101136.jpg', '2017-04-27 20:35:10', '2017-09-19 15:11:36'),
(3, 'banner2', '/images/willy/shutterstock-programming.jpg', '2017-04-27 20:35:10', '2017-09-19 14:54:58'),
(4, 'TitBanner1', 'uno', '2017-04-27 20:49:39', '2017-09-19 15:12:13'),
(5, 'SubTitBanner1', 'dos', '2017-04-27 20:50:12', '2017-09-19 15:12:14'),
(6, 'TitBanner2', 'qqqq', '2017-04-27 20:50:44', '2017-09-19 15:19:52'),
(7, 'SubTitBanner2', 'wwww', '2017-04-27 20:50:44', '2017-09-19 15:19:52'),
(8, 'TitNoticia1', 'LED DANCE FLOOR', '2017-04-27 21:01:04', '2017-08-10 10:44:08'),
(9, 'SubTitNoticia1', 'LO MEJOR EN NUESTRAS FIESTAS', '2017-04-27 21:01:04', '2017-08-10 10:43:12'),
(10, 'textNoticia1', '¡Ahora nuestros clientes podrán disfrutar en nuestros montajes de una espectacular pista de baile LED, la cual contagiara de mucho color y vida tu noche mágica! Pide a nuestros asesores una cotización personalizada, estaremos felices de tenerla en tu evento.', '2017-04-27 21:06:20', '2017-08-10 10:43:12'),
(11, 'textNoticia2', 'Entra ya mismo en nuestro canal de Vimeo https://vimeo.com/user2512212 y disfruta de nuestro nuevo Visual Mix con música de J Balvin, Shakira, Jason Derulo, Willy William y muchos más! ¡Y por supuesto no olvides compartirlo en tus redes sociales!', '2017-04-27 21:07:43', '2017-08-10 10:49:14'),
(12, 'TitNoticia2', '¿YA VISTE 1,2,3 LEGOOO?', '2017-04-27 21:07:43', '2017-08-10 10:49:14'),
(13, 'SubTitNoticia2', 'NUESTRO NUEVO VISUAL MIX', '2017-04-27 21:07:44', '2017-08-10 10:49:14'),
(14, 'TitNoticia3', 'UN NUEVO VISUAL MIX CADA 15 DIAS', '2017-04-27 21:09:18', '2017-08-10 10:53:47'),
(15, 'SubTitNoticia3', 'TODOS LOS 1 Y 15 DE CADA MES', '2017-04-27 21:09:18', '2017-08-10 10:53:47'),
(16, 'textNoticia3', 'Sabemos que te encanta nuestras mezclas, y la buena música; ¡ahora podrás disfrutar cada 15 días de un nuevo Visual Mix en nuestro canal de Vimeo y descargar el audio de nuestra página web, para que lo lleves en todos tus dispositivos digitales!', '2017-04-27 21:09:57', '2017-08-10 10:53:47'),
(17, 'FondoEvento', '/images/willy/fondoevento.jpg', '2017-04-27 21:10:34', '2017-05-03 19:22:09'),
(18, 'FondoContacto', '/images/willy/fondo2.jpg', '2017-04-27 22:00:26', '2017-05-03 19:22:09'),
(19, 'imgServ1', '/images/willy/DJI_0021.jpg', '2017-05-03 20:02:21', '2017-08-10 10:39:06'),
(20, 'imgServ2', '/images/willy/serv2.jpg', '2017-05-03 20:02:21', '2017-05-04 01:25:05'),
(21, 'imgServ3', '/images/willy/serv3.jpg', '2017-05-03 20:02:33', '2017-05-04 01:25:05'),
(22, 'titServ1', 'BODAS & 15 CULOS', '2017-05-03 20:04:31', '2017-08-10 10:33:55'),
(23, 'titServ2', 'EVENTOS CORPORATIVOS', '2017-05-03 20:04:31', '2017-08-10 10:36:59'),
(24, 'titServ3', 'SHOW DJ', '2017-05-03 20:04:43', '2017-08-10 10:37:24'),
(25, 'textServicios', 'Tenemos todo lo que necesitas para tu evento!', '2017-05-03 20:07:56', '2017-08-10 11:33:56'),
(26, 'Cancion1', '/images/willy/09182017034055.jpg', '2017-05-04 15:05:17', '2017-09-18 08:40:55'),
(27, 'Cancion2', '/images/willy/can2.jpg', '2017-05-04 15:05:17', '2017-05-04 20:11:03'),
(28, 'Cancion3', '/images/willy/can3.jpg', '2017-05-04 15:05:22', '2017-05-04 20:11:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `variables`
--
ALTER TABLE `variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
