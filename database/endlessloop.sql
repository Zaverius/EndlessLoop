-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2019 a las 19:19:10
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `endlessloop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `estado` int(11) NOT NULL,
  `persona` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros_medios` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `historico` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `estado`, `persona`, `email`, `empresa`, `pais`, `telefono`, `web`, `otros_medios`, `historico`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rafel Perez', 'rafel.perez@oxiab.com', 'OXiAB', 'España', '55252142', 'http://oxiab.com', NULL, NULL, '2019-04-02 15:55:02', '2019-04-02 15:56:42'),
(2, 3, 'Daniel Navarro', 'dnavarro@doloresentertainment.com', 'Dolores Entertainment', 'España', '680 185 732', 'http://www.doloresentertainment.com', NULL, NULL, '2019-04-02 16:00:36', '2019-04-02 16:00:36'),
(3, 2, 'Carles Bonet', 'carles.bonet@viodgames.cat', 'ViOD Games Studio', 'España', '934 88 11 66', 'https://viodgames.cat/es/', NULL, NULL, '2019-04-02 16:17:20', '2019-04-02 16:17:53'),
(4, 1, 'Alejandro Santiago Varela', 'alejandro@2awesomestudio.com', '2Awesome Studio', 'España', '667 897 446', 'http://www.2awesomestudio.com', NULL, NULL, '2019-04-09 14:47:52', '2019-04-09 14:47:52'),
(5, 1, 'Daniel Gálvez', 'info@3d2entertainment.com', '3D2 Entertaintment', 'España', '617413628', 'http://www.3d2entertainment.com', NULL, NULL, '2019-04-09 14:49:15', '2019-04-09 14:49:15'),
(6, 1, 'Carles Triviño', 'contact@alteredmatter.com', 'Altered Matter', 'España', '625 935 792', 'http://www.alteredmatter.com/etherborn', NULL, NULL, '2019-04-09 14:51:30', '2019-04-09 14:51:30'),
(7, 1, 'Alex Roca', 'finalboss@anarka.de', 'Anarkade', 'España', '658 783 121', 'http://www.anarka.de', NULL, NULL, '2019-04-09 14:54:55', '2019-04-09 14:54:55'),
(8, 1, 'Clàudia Raventós Albà', 'ancla.blackmap@gmail.com', 'Ancla', 'España', '606 981 989', 'http://www.nohayweb.web', NULL, NULL, '2019-04-09 14:57:58', '2019-04-09 14:57:58'),
(9, 1, 'Anna Saumell Almirall', 'ancla.blackmap@gmail.com', 'Ancla', 'España', '606 981 989', 'http://www.nohayweb.web', NULL, NULL, '2019-04-09 14:58:58', '2019-04-09 14:58:58'),
(10, 1, 'Jordi Rovira', 'jordi@anticto.com', 'Anticto', 'España', '647 739 779', 'http://www.anticto.com', NULL, NULL, '2019-04-09 15:01:04', '2019-04-09 15:01:04'),
(11, 1, 'Luis Castro', 'lcastro@bmxthegame.com', 'Barspin Studios', 'España', '633 790 304', 'http://www.Barspinstudios.com', NULL, NULL, '2019-04-09 15:02:06', '2019-04-09 15:02:06'),
(12, 1, 'Ian Dorado', 'idorado@blackalligatorgames.com', 'Black Alligator', 'España', '687 446 344', 'https://www.blackalligatorgames.com', NULL, NULL, '2019-04-09 15:03:14', '2019-04-09 15:03:14'),
(13, 1, 'Pau Elias Soriano', 'pauelias@chloroplastgames.com', 'Chloroplast Games', 'España', '619 455 269', 'http://www.chloroplastgames.com', NULL, NULL, '2019-04-09 15:04:05', '2019-04-09 15:04:05'),
(14, 1, 'Daniel Solís', 'dani@darkcurry.com', 'Dark Curry', 'España', '629 777 757', 'http://www.darkcurry.com', NULL, NULL, '2019-04-09 15:06:38', '2019-04-09 15:06:38'),
(15, 1, 'Iván Vidrier Santiago', 'ivanvidrier@dstgames.es', 'Distorsion Games', 'España', '673 780 009', 'http://www.distorsiongames.com', NULL, NULL, '2019-04-09 15:07:57', '2019-04-09 15:07:57'),
(16, 1, 'Néstor Alfaro Yagüe', 'dnavarro@doloresentertainment.com', 'Drop of Pixel', 'España', '639 646 680', 'http://www.dropofpixel.com', NULL, NULL, '2019-04-09 15:10:34', '2019-04-09 15:10:34'),
(17, 1, 'Dani Sintas', 'dani@garage51.es', 'Garage51', 'España', '622 255 090', 'http://www.garage51.es', NULL, NULL, '2019-04-09 15:13:06', '2019-04-09 15:13:06'),
(18, 1, 'Víctor Pedreño', 'vpedreno@grimorioofgames.com', 'Grimorio of Games', 'España', '644 430 306', 'http://www.grimorioofgames.com', NULL, NULL, '2019-04-09 15:14:34', '2019-04-09 15:14:34'),
(19, 1, 'Javier Ramello', 'jramello@herobeatstudios.com', 'Herobeat Studios', 'España', '686 928 465', 'http://www.herobeatstudios.com', NULL, NULL, '2019-04-09 15:15:32', '2019-04-09 15:15:32'),
(20, 1, 'Iván Cascales del Olmo', 'ivan@ivanovichgames.com', 'Ivanovich Games', 'España', '689 471 316', 'http://www.ivanovichgames.com', NULL, NULL, '2019-04-09 15:18:50', '2019-04-09 15:18:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_tag`
--

CREATE TABLE `contacto_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `contacto_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto_tag`
--

INSERT INTO `contacto_tag` (`id`, `contacto_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2),
(4, 4, 3),
(5, 5, 2),
(6, 6, 4),
(7, 7, 2),
(8, 8, 5),
(9, 9, 5),
(10, 10, 6),
(11, 11, 7),
(12, 12, 8),
(13, 13, 9),
(14, 14, 10),
(15, 15, 2),
(16, 16, 5),
(17, 17, 2),
(18, 18, 11),
(19, 19, 2),
(20, 20, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `codigo_pais` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_contactos`
--

CREATE TABLE `estado_contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `estado` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estado_contactos`
--

INSERT INTO `estado_contactos` (`id`, `estado`, `color`) VALUES
(1, 'Por contactar', '#ffff00'),
(2, 'Contactado', '#00ff00'),
(3, 'No contactar', '#ff0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_02_192552_create_noticias_table', 1),
(4, '2018_12_18_185510_create_contactos_table', 1),
(5, '2019_01_08_185406_create_contactos_estado_table', 1),
(6, '2019_01_29_183130_create_tags', 1),
(7, '2019_01_29_183948_create_countries', 1),
(8, '2019_02_26_184953_create_contacto_tag_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_tag` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `nombre_tag`) VALUES
(1, 'PROGRAMACIóN'),
(2, 'CEO'),
(3, 'GAMEDEVELOPER'),
(4, 'CO-FOUNDER'),
(5, 'DEVELOPER'),
(6, 'GENERALMANAGER'),
(7, 'CMO'),
(8, 'PROGRAMMER'),
(9, 'DIRECTOR'),
(10, 'DEVELOPMENTDIRECTOR'),
(11, 'GAMEDESIGNER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Laura', 'laura.gonzalezl@epiagranollers.cat', NULL, '$2y$10$5n7T3IfGYWBezE4/LnoiPeGYIdHVGlYyRfes6j1cxLl8rfgNkxpge', 'AecRJ5iFVP', '2019-04-02 15:53:37', '2019-04-02 15:53:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_tag`
--
ALTER TABLE `contacto_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_contactos`
--
ALTER TABLE `estado_contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `contacto_tag`
--
ALTER TABLE `contacto_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `estado_contactos`
--
ALTER TABLE `estado_contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
