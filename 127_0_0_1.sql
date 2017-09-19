

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;





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
