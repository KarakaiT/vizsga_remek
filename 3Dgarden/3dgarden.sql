-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Jan 18. 20:00
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `3dgarden`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ajanlat`
--

CREATE TABLE `ajanlat` (
  `id` int(10) NOT NULL,
  `veznev` varchar(100) NOT NULL,
  `kernev` varchar(100) NOT NULL,
  `munkahely` varchar(100) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `leir` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `ajanlat`
--

INSERT INTO `ajanlat` (`id`, `veznev`, `kernev`, `munkahely`, `tel`, `leir`) VALUES
(1, 'Próba ', 'Mihály', 'Pusztaszentlászló', '2147483647', 'Tisztelt 3D Garden!\r\n\r\nEz egy próba árajánlat kérés!\r\n\r\nÜdv.: Próba Mihály'),
(2, 'Teszt ', 'Elek', 'Bugyi', '2147483647', 'asfsadgfasdg'),
(3, 'Teszt ', 'Elek', 'Bugyi', '2147483647', 'safdaestgfasd'),
(4, 'Kovács', 'Zalán', 'Zalaegerszeg', '06309688085', 'Kedves 3D Garden! lenne 80nm fű nyirás a bartók béla utón'),
(5, 'Teszt ', 'Elek', 'Pusztaszentlászló', '06301234567', 'asdfvcsadgvsadgv'),
(6, 'Karakai', 'Tamás', 'Zalaegerszeg', '06308555024', 'Ez egy próba árajánlat kérés!'),
(7, 'Karakai', 'Tamás', 'Pusztaszentlászló', '06301111111', 'Ez egy próba árajánlat kérés!'),
(8, 'Próba ', 'Elek', 'Zalaegerszeg', '06301233025', 'Ez egy árajánlat kérés!');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `arak`
--

CREATE TABLE `arak` (
  `id` int(10) NOT NULL,
  `fu1` varchar(50) NOT NULL,
  `fu2` varchar(50) NOT NULL,
  `fu3` varchar(50) NOT NULL,
  `soveny1` varchar(50) NOT NULL,
  `soveny2` varchar(50) NOT NULL,
  `soveny3` varchar(50) NOT NULL,
  `fa1` varchar(50) NOT NULL,
  `fa2` varchar(50) NOT NULL,
  `fa3` varchar(50) NOT NULL,
  `fakugli` varchar(50) NOT NULL,
  `tuja1` varchar(50) NOT NULL,
  `tuja2` varchar(50) NOT NULL,
  `tuja3` varchar(50) NOT NULL,
  `tujakugli` varchar(50) NOT NULL,
  `tusko1` varchar(50) NOT NULL,
  `tusko2` varchar(50) NOT NULL,
  `tusko3` varchar(50) NOT NULL,
  `tusko4` varchar(50) NOT NULL,
  `zoldhull` varchar(50) NOT NULL,
  `fold` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `arak`
--

INSERT INTO `arak` (`id`, `fu1`, `fu2`, `fu3`, `soveny1`, `soveny2`, `soveny3`, `fa1`, `fa2`, `fa3`, `fakugli`, `tuja1`, `tuja2`, `tuja3`, `tujakugli`, `tusko1`, `tusko2`, `tusko3`, `tusko4`, `zoldhull`, `fold`) VALUES
(1, '1250', '2500', '3000', '2000', '3500', '3500', '3500', '5600', '25000', '6500', '2000', '2800', '3500', '5000', '2580', '3000', '3500', '6800', '3000', '5000');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL,
  `munnev` varchar(100) NOT NULL,
  `munhely` varchar(100) NOT NULL,
  `munleir` mediumtext NOT NULL,
  `kep` varchar(100) NOT NULL,
  `kep2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `jobs`
--

INSERT INTO `jobs` (`id`, `munnev`, `munhely`, `munleir`, `kep`, `kep2`) VALUES
(11, 'Tuja kivágás', 'Zalaegerszeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fugit consectetur fugiat quas sequi impedit odit, voluptates repellendus, veniam et architecto nam sint quod eius.', '316308595_469250605362379_8835778261923985423_n.jpg', '316575533_1100469883986087_3213955578567974559_n.jpg'),
(12, 'Gyomlálás', 'Zalaegerszeg', 'Ez egy magánút padka melleti gyomlálás tíszttítás!\r\n', '316623009_1630994083986094_6128749195184193439_n.jpg', '316620867_538682964465857_7462918791152346692_n.jpg'),
(13, 'Kertrendezés', 'Bugyi', 'A telephely hátsó felében lévő szedres kitisztása rendbetétele befűzése és formázása', '316530182_3141909129289114_6014318841549388497_n.jpg', '317154907_501574951928820_637714488572718549_n.jpg'),
(14, 'Tuja kivágás', 'Zalaeegerszeg, Andráshida', '25 méter tujasor kivágása darabolása és a zöldhulladék elszálítása!', '318522680_863488038186321_2665072740626088535_n.jpg', '319405553_631588545408267_8805918474362356335_n.jpg'),
(15, 'Fűnyírás', 'Bagod', 'proba feltöltés!', '316502558_850501626093920_9179790347884918702_n.jpg', '316540699_1324796924999782_1165356196486222596_n.jpg'),
(16, 'Dísznövény formázása', 'Zalaegerszeg', 'Ez egy dísznövény fazonra nyírása, formázása!', '317061687_911178320267607_7507065988182649461_n.jpg', '316591787_651546696662154_7776719161206393594_n.jpg'),
(17, 'Fa kivágás, és kuglizás', 'Zalaegerszeg', 'A fa kivágása után, a fa törzsét 30cm-es kuglikra vágtuk a megrendelő kérésére!', '310242973_435528402114101_8900892233341919393_n.jpg', '310446688_1768053976927867_1151304026948270195_n.jpg'),
(18, 'Füvesítés', 'Zalaegerszeg', 'Ez egy udvar füvesítése!', '316573770_1179231472983825_3218039845784255473_n.jpg', '316489497_677883677072400_2130284488312739204_n.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `uzenet`
--

CREATE TABLE `uzenet` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `uzenet`
--

INSERT INTO `uzenet` (`id`, `name`, `email`, `message`) VALUES
(1, 'Próba Mátyás', 'probamaty@gmail.com', 'Kedves 3D Garden!\r\n\r\nEz egy próba üzenet volt!\r\n\r\nÜdvözlettel: Próba Mátyás'),
(2, 'Dorina', 'dorina@gmail.com', 'sbv ksjhfbvsékjvnásaljkbnvnv '),
(3, 'Karakai Tamás', 'karakaitamas72@gmail.com', 'Ez egy próba üzenet!'),
(4, 'Teszt Elek', 'karakaitamas72@gmail.com', 'Ez egy próba üzenet!');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `ajanlat`
--
ALTER TABLE `ajanlat`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `arak`
--
ALTER TABLE `arak`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `uzenet`
--
ALTER TABLE `uzenet`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `ajanlat`
--
ALTER TABLE `ajanlat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT a táblához `arak`
--
ALTER TABLE `arak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT a táblához `uzenet`
--
ALTER TABLE `uzenet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
