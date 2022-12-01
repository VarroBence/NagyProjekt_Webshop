-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Dec 01. 22:03
-- Kiszolgáló verziója: 10.4.25-MariaDB
-- PHP verzió: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `myapp`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `listings`
--

INSERT INTO `listings` (`id`, `title`, `tags`, `price`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Official Skyrim Metallic Logo - Unisex', 'Unisex, Gaming, Skyrim', 4990, 'logo/9dbYnGTxmORJkvaBBI2GirZlWW8eGwrsC9B4jUFR.jpg', 'Stake your claim as Skyrim’s supreme champion with this incredible t-shirt which features a sleek metallic screen-printed anniversary graphic on the front, making it the perfect addition to any Dragonborn\'s wardrobe!', '2022-12-01 19:19:57', '2022-12-01 19:19:57'),
(4, 'Official Skyrim Metallic Logo - Unisex', 'Unisex, Gaming, Skyrim', 4990, 'logo/zOxoimOER7bj3MdEnLT0jpZS7K8SXcU4PRZqp7qm.jpg', 'Stake your claim as Skyrim’s supreme champion with this incredible t-shirt which features a sleek metallic screen-printed anniversary graphic on the front, making it the perfect addition to any Dragonborn\'s wardrobe!', '2022-12-01 19:21:17', '2022-12-01 19:21:17'),
(5, 'Official Space Invaders Game Over - Women', 'Women, Gaming, SpaceInvaders', 5990, 'logo/AUrTpzTqW5sabPXDlMjg3QOGL20I3QCJQCbBeIi0.png', 'Official Taito product. Grey t-shirt with \'Space Invaders: Game Over\' motif on front. Made from 100% premium quality cotton. Perfect present for any retro gamer!', '2022-12-01 19:27:17', '2022-12-01 19:27:31'),
(6, 'Slayer of Demons - Unisex', 'Unisex, Gaming, Demon\'s Souls', 7990, 'logo/V0BnsXDIKG8DUHlmNzEyXQDLoe4HqhpvlMX7wyZy.png', 'Venture through the foggy gates of Boletaria and become the slayer of demons.\r\nThis official Demon\'s Souls shirt was designed by Ian Wilding and printed by Forward on soft 100% cotton shirts from Next Level and District.', '2022-12-01 19:29:56', '2022-12-01 19:29:56'),
(7, 'Ori - Kuro\'s Wrath - Women', 'Women, Gaming, Ori', 7990, 'logo/RoFN8UR7pnUMVoW7cu6KyfIqPCG6PY2WfIcQADtq.png', 'The Spirit Tree\'s near...\r\n\r\nThis official Ori and the Blind Forest shirt was designed by Ian Wilding. It\'s printed by Forward on soft, 100% cotton shirts from Canvas and District. Each one comes with a bonus sticker.', '2022-12-01 19:31:22', '2022-12-01 19:31:22'),
(8, 'Hollow Knight - Wandering Knight - Women', 'Women, Gamin, Hollow Knight', 7990, 'logo/GZaMinOl4xW6ARY2slpbUbMLYtacdW8pbtMKZXLF.png', 'Wealth, glory, enlightenment, that darkness seems to promise all things.\r\n\r\nThis official Hollow Knight shirt was designed by Ilustrata and printed by Forward on soft t-shirts from Canvas and District. (Unisex is a poly-cotton blend, while women\'s shirts are 100% cotton.) Each one comes with a big bonus sticker.', '2022-12-01 19:34:31', '2022-12-01 19:34:31'),
(9, 'DARK SOULS - Trial By Fire - Man', 'Man, Gaming, Dark Souls', 6990, 'logo/RtccnZOuzyIbC0UMzkmK9KcJsjiZy4ajg2gUma5W.png', 'Ahh, hello. Was it you who rang the Bell of Awakening?\r\n\r\nThis official DARK SOULS shirt was designed by Ian Wilding and printed on soft, 100% cotton t-shirts by Forward Printing.', '2022-12-01 19:36:48', '2022-12-01 19:36:48'),
(10, 'Iron Maiden Fear of The Dark - Unisex', 'Unisex, Band, Iron Maiden', 8990, 'logo/ATv6WL2ql58eLxEDT14qX8tEQV80WLPDYNPrnEas.jpg', 'T-Shirt Iron Maiden Fear Of The Dark, \r\n100% cotton, \r\nKurzarm, \r\nClosure: Pull-On, \r\n100% cotton, \r\nNormal cut', '2022-12-01 19:40:55', '2022-12-01 19:40:55'),
(11, 'Iron Maiden TheTrooper Männer - Man', 'Man, Band, Iron Maiden', 8990, 'logo/KEP95rMr1XtXUDRcY9lqir6Y4LdLIa0o6TaMPHLI.jpg', 'T-Shirt Iron Maiden The Trooper,\r\n 100% cotton, Kurzarm, Closure: Pull-On, 100% cotton, Normal cut', '2022-12-01 19:43:33', '2022-12-01 19:43:33'),
(12, 'Viking Vegvisir Icelandic - Unisex', 'Unisex, Viking, Norden', 4990, 'logo/sCEXeNbJ4lhtOIHpkJF8kEPyo37Z873o5C9NK9r7.jpg', 'Vegvisir is Icelandic for signpost or path finder. According to Huld Manuscript, \"When this sign is worn, you will never get lost in storms or bad weather, even if the way is not known.\" For fans of Nordic mythology.', '2022-12-01 19:46:08', '2022-12-01 19:46:19'),
(13, 'Retro Dachshund Silhouette - Unisex', 'Unisex, Dachshund, Retro, Dog', 5490, 'logo/BphdVxagk86vH3msKiuP8sOfBdVWcyCYDpVj10ku.jpg', 'Retro Dachshund silhouette design for Dachshund owners - great gift idea for anyone who loves their dog                            Plain colours: 100% cotton; mottled grey: 90% cotton, 10% polyester; all other mottled colours: 50% cotton, 50% polyester.', '2022-12-01 19:49:49', '2022-12-01 19:49:49'),
(14, 'Dachshund Dog Silhouette Retro - Man', 'Man, Dachshund, Retro, Dog', 5490, 'logo/AeyCMh1HR4fo2ilLnmCjwZIaKDunRtx20UJtkCKt.jpg', 'Do you love Dachshund, Dachshund dog, Teckel? Do you have a Dachshund breeding or a Dachshund puppy? Then the funny vintage retro 60s sixties 70s 70s 80s 80s 90s sausage dog motif is just right. An original classic Dachshund design.', '2022-12-01 19:51:45', '2022-12-01 19:51:45'),
(15, 'Powerwolf Call of the Wild Men\'s - Women', 'Women, Band, Powerwolf', 3990, 'logo/YV0x1heX5Q28fUqvsXKA85s29qQ7UQoEfav8sqwa.jpg', 'Powerwolf fans get their fanshirt here. Whether they\'re fresh out of kindergarten or new to school, this Call of the Wild motif is anything but boring bar stock. And it\'s top quality and sustainably produced.', '2022-12-01 19:56:32', '2022-12-01 19:56:32'),
(16, 'KLIEGOU Mens Hip Hop - Man', 'Man, Hip Hop', 7990, 'logo/VMve4stgpYkYyexNHRYwKjaUOaJVuN7m1FYuVZ30.jpg', 'The fabric is a tie dyeing process. Therefore, there is no guarantee that each piece of clothing will be 100% identical. May have slight deviations\r\nUrban inspired T-Shirts instantly takes your style from bland to bold. With several styles and colors to match your closet for a modern and effortless fashion.', '2022-12-01 20:02:16', '2022-12-01 20:02:16');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(126, '2014_10_12_000000_create_users_table', 1),
(127, '2014_10_12_100000_create_password_resets_table', 1),
(128, '2019_08_19_000000_create_failed_jobs_table', 1),
(129, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(130, '2022_11_09_184315_create_listings_table', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- A tábla indexei `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- A tábla indexei `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT a táblához `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
