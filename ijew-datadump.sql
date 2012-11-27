-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 28. November 2012 um 00:29
-- Server Version: 5.0.51
-- PHP-Version: 5.2.6-1+lenny13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `ijew`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dates`
--

CREATE TABLE IF NOT EXISTS `dates` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `holiday` int(11) unsigned NOT NULL,
  `start` double unsigned NOT NULL,
  `end` double unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=201 ;

--
-- Daten für Tabelle `dates`
--

INSERT INTO `dates` (`id`, `holiday`, `start`, `end`) VALUES
(1, 1, 735129, 735131),
(2, 38, 734967, 734969),
(3, 38, 735324, 735326),
(83, 44, 736269, 736270),
(82, 44, 735904, 735905),
(81, 44, 735539, 735540),
(7, 38, 735709, 735711),
(8, 38, 736059, 736061),
(9, 13, 734974, 734976),
(10, 13, 735359, 735361),
(11, 13, 735709, 735711),
(12, 13, 736066, 736068),
(13, 25, 735205, 735206),
(14, 26, 735212, 735213),
(15, 27, 735219, 735220),
(16, 28, 735226, 735227),
(86, 43, 735538, 735539),
(85, 44, 737000, 737001),
(19, 9, 735704, 735711),
(20, 16, 734999, 735000),
(21, 16, 735352, 735353),
(22, 11, 734978, 734979),
(23, 10, 735016, 735018),
(46, 17, 735079, 735080),
(26, 3, 735138, 735139),
(27, 4, 735143, 735150),
(28, 14, 735150, 735151),
(30, 5, 735151, 735152),
(31, 6, 735212, 735220),
(32, 8, 735289, 735290),
(33, 9, 735319, 735326),
(34, 11, 735332, 735333),
(36, 10, 735369, 735370),
(37, 17, 735431, 735432),
(38, 1, 735482, 735484),
(39, 1, 735867, 735869),
(40, 1, 736221, 736223),
(41, 39, 735006, 735007),
(42, 40, 735016, 735018),
(43, 41, 735027, 735028),
(44, 21, 735037, 735038),
(45, 18, 735072, 735100),
(47, 42, 735096, 735097),
(48, 20, 735100, 735103),
(49, 22, 735168, 735172),
(50, 43, 735173, 735174),
(51, 29, 735227, 735228),
(52, 30, 735228, 735230),
(53, 44, 735174, 735175),
(63, 29, 735592, 735593),
(64, 29, 735957, 735958),
(87, 43, 735903, 735904),
(84, 44, 736635, 736636),
(67, 17, 735816, 735817),
(68, 17, 736171, 736172),
(69, 17, 736556, 736557),
(70, 17, 736908, 736909),
(71, 1, 736606, 736608),
(72, 1, 736959, 736961),
(73, 3, 735491, 735492),
(74, 3, 735876, 735877),
(75, 3, 736230, 736231),
(76, 3, 736615, 736616),
(77, 4, 735496, 735504),
(78, 4, 735881, 735888),
(79, 4, 736235, 736242),
(80, 4, 736620, 736627),
(88, 43, 736268, 736269),
(89, 43, 736634, 736635),
(90, 43, 736999, 737000),
(91, 42, 735461, 735462),
(92, 42, 735826, 735827),
(93, 42, 736191, 736192),
(94, 42, 736557, 736558),
(95, 42, 736922, 736923),
(96, 40, 735373, 735374),
(97, 40, 735758, 735759),
(98, 40, 736108, 736109),
(99, 40, 736465, 736466),
(100, 40, 736850, 736851),
(101, 39, 735363, 735364),
(102, 39, 735748, 735749),
(103, 39, 736098, 736099),
(104, 39, 736455, 736456),
(105, 39, 736840, 736841),
(106, 38, 736416, 736417),
(107, 38, 736801, 736802),
(108, 37, 735322, 735323),
(109, 37, 735707, 735708),
(110, 37, 736057, 736058),
(111, 37, 736414, 736415),
(112, 37, 736799, 736800),
(113, 36, 735321, 735322),
(114, 36, 735706, 735707),
(115, 36, 736056, 736057),
(116, 36, 736413, 736414),
(117, 36, 736798, 736799),
(118, 25, 735569, 735570),
(119, 25, 735933, 735934),
(120, 25, 736297, 736298),
(121, 25, 736661, 736662),
(122, 25, 737032, 737033),
(123, 26, 735576, 735577),
(124, 26, 735940, 735941),
(125, 26, 736304, 736305),
(126, 26, 736668, 736669),
(127, 26, 737039, 737040),
(128, 27, 735583, 735584),
(129, 27, 735947, 735948),
(130, 27, 736311, 736312),
(131, 27, 736675, 736676),
(132, 27, 737046, 737047),
(133, 28, 735590, 735591),
(134, 28, 735954, 735955),
(135, 28, 736318, 736319),
(136, 28, 736682, 736683),
(137, 28, 737053, 737054),
(138, 41, 735384, 735385),
(139, 41, 735769, 735770),
(140, 41, 736119, 736120),
(141, 41, 736475, 736476),
(142, 41, 736861, 736862),
(143, 29, 736322, 736323),
(144, 29, 736688, 736689),
(145, 29, 737053, 737054),
(146, 30, 735593, 735595),
(147, 30, 735958, 735960),
(148, 30, 736323, 736325),
(149, 30, 736689, 736691),
(150, 30, 737054, 737056),
(151, 31, 735240, 735242),
(152, 31, 735605, 735607),
(153, 31, 735970, 735972),
(154, 31, 736335, 736337),
(155, 31, 736701, 736703),
(156, 5, 735504, 735505),
(157, 5, 735889, 735890),
(158, 5, 736243, 736244),
(159, 6, 735566, 735574),
(160, 6, 735950, 735958),
(161, 6, 736305, 736313),
(162, 8, 735644, 735645),
(163, 7, 734907, 734908),
(164, 7, 735260, 735261),
(165, 7, 735615, 735616),
(166, 7, 735999, 736000),
(167, 8, 736028, 736029),
(168, 9, 736058, 736065),
(169, 10, 735754, 735755),
(170, 10, 736108, 736109),
(171, 15, 734873, 734874),
(172, 15, 735286, 735287),
(173, 15, 735671, 735672),
(174, 15, 735965, 735966),
(175, 33, 735235, 735236),
(176, 33, 735600, 735601),
(177, 33, 735965, 735966),
(178, 33, 736330, 736331),
(179, 33, 736696, 736697),
(180, 34, 735278, 735279),
(181, 34, 735663, 735664),
(182, 34, 736013, 736014),
(183, 34, 736370, 736371),
(184, 35, 734960, 734961),
(185, 35, 735317, 735318),
(186, 35, 735702, 735703),
(187, 35, 736052, 736053),
(188, 35, 736409, 736410),
(189, 35, 736794, 736795),
(190, 46, 735194, 735195),
(191, 46, 735558, 735559),
(192, 46, 735922, 735923),
(193, 46, 736286, 736287),
(194, 46, 736650, 736651),
(195, 47, 735184, 735194),
(197, 47, 735548, 735558),
(198, 47, 735912, 735922),
(199, 47, 736276, 736286),
(200, 47, 736640, 736650);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `denominations`
--

CREATE TABLE IF NOT EXISTS `denominations` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `switch` varchar(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Daten für Tabelle `denominations`
--

INSERT INTO `denominations` (`id`, `switch`, `name`) VALUES
(1, 'i', 'Islam'),
(2, 'j', 'Judentum'),
(3, 'e', 'Ostkirche'),
(4, 'w', 'Westkirche');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `holidays`
--

CREATE TABLE IF NOT EXISTS `holidays` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `denomination` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Daten für Tabelle `holidays`
--

INSERT INTO `holidays` (`id`, `denomination`, `name`) VALUES
(1, 2, 'ראש השנה'),
(41, 4, 'Fronleichnamsfest'),
(3, 2, 'יום כיפור‎'),
(4, 2, 'סוכות'),
(5, 2, 'שמחת תורה (außerhalb Israels)'),
(6, 2, 'חנוכה‎'),
(7, 2, 'חג האילנות - ט"ו בשבט‎'),
(8, 2, 'פורים‎'),
(9, 2, 'פסח'),
(10, 2, 'שבועות‎'),
(11, 2, 'יום השואה'),
(12, 2, 'יום הזכרון לשואה ולגבורה‎'),
(13, 3, 'Ostern'),
(14, 2, 'שמיני עצרת'),
(15, 2, 'עשרה בטבת‎'),
(16, 2, 'ל"ג בעומר'),
(17, 2, 'תשעה באב‎'),
(18, 1, 'رمضان‎'),
(19, 1, 'رأس السنة الهجرية‎ (muslimisches Neujahr)'),
(20, 1, 'عيد الفطر‎ (Fastenbrechen nach Ramadan)'),
(21, 1, 'الإسراء والمعراج‎ (Himmelfahrt Mohammeds)'),
(22, 1, 'عيد الأضحى‎ (Opferfest)'),
(23, 1, 'مولد النبي‎ (Mohammeds Geburtstage)'),
(24, 1, 'عاشوراء‎ (10. Muharrem)'),
(25, 4, '1. Advent'),
(26, 4, '2. Advent'),
(27, 4, '3. Advent'),
(28, 4, '4. Advent'),
(29, 4, 'Heilig Abend'),
(30, 4, 'Weihnachten'),
(31, 4, 'Epiphanias'),
(33, 4, 'Beschneidungsfest'),
(34, 4, 'Aschermittwoch'),
(35, 4, 'Palmsonntag'),
(36, 4, 'Gründonnerstag'),
(37, 4, 'Karfreitag'),
(38, 4, 'Ostern'),
(39, 4, 'Christi Himmelfahrt'),
(40, 4, 'Pfingsten'),
(42, 4, 'Mariä Himmelfahrt'),
(43, 4, 'Reformationstag'),
(44, 4, 'Allerheiligen'),
(46, 4, 'Herbstbußtag'),
(47, 4, 'FriedensDekade');
