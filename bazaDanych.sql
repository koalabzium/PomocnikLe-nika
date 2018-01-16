-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Sty 2018, 23:16
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `registration`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `info`
--

INSERT INTO `info` (`id`, `name`, `address`, `img`) VALUES
(1, 'koala', 'Nie ma nei ma wody na pustyni', 'images/kolorowe_liscie.jpg'),
(6, 'koala', 'A wielbÅ‚ady nie chcÄ… dalej iÅ›Ä‡', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Grosser_Panda.JPG/240px-Grosser_Panda.JPG'),
(10, 'koala', 'Pozdrawiam Damiana WarzechÄ™ serdecznie', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Grosser_Panda.JPG/240px-Grosser_Panda.JPG'),
(14, 'koala', 'Nananana jaki piÄ™kny komentarz', 'images/lipa.jpg'),
(15, 'koala', 'komentarz', 'images/kolorowe_liscie.jpg'),
(16, 'koala', 'Komentarz', 'images/lipa.jpg'),
(17, 'koala', 'Super strona :)', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `listki`
--

CREATE TABLE `listki` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) DEFAULT NULL,
  `opis` text,
  `zrodlo` varchar(255) DEFAULT NULL,
  `jaki` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `listki`
--

INSERT INTO `listki` (`id`, `nazwa`, `opis`, `zrodlo`, `jaki`) VALUES
(3, 'Klon', 'LiÅ›Ä‡ klonu ma bardzo geometrycznÄ… budowÄ™ â€“ z daleka wydaje siÄ™ zÅ‚oÅ¼ony z rombÃ³w, prostokÄ…tÃ³w i kwadratÃ³w. Z bliÅ¼szej odlegÅ‚oÅ›ci dostrzegamy, iÅ¼ poszczegÃ³lne â€žrozgaÅ‚Ä™zieniaâ€ liÅ›cia zakoÅ„czone sÄ… spiczastymi wypustkami, przypominajÄ…cymi pazurki.\r\n\r\nLiÅ›Ä‡ rozgaÅ‚Ä™zia siÄ™ na kilka â€žodnÃ³gâ€, budzÄ…c skojarzenie z modlÄ…cym siÄ™ czÅ‚owiekiem, wznoszÄ…cym rÄ™ce ku niebu. Inni mogÄ… uznaÄ‡ jego ksztaÅ‚t za podobny do statku kosmicznego z filmÃ³w science-fiction lub do znanego kaÅ¼demu dziecku latawca.', 'images/klon.jpg', ''),
(4, 'Lipa drobnolistna', 'Lipa posiada liÅ›cie niewielkie, w ksztaÅ‚cie serc, ktÃ³re z wierzchu sÄ… Å¼ywo zielone a pod spodem w kÄ…tach nerwÃ³w majÄ… pÄ™czki rudych wÅ‚osÃ³w. JesieniÄ… przyjmujÄ… piÄ™kny Å¼Ã³Å‚ty kolor.', 'images/lipa.jpg', ''),
(5, 'Kasztanowiec pospolity', 'LiÅ›cie kasztanowca sÄ… bardzo duÅ¼e (nawet 50 cm) i dÅ‚oniasto rozÅ‚oÅ¼one, czÄ™sto z rudawobrÄ…zowymi plamami. Kasztanowiec jest okazaÅ‚ym drzewem parkowym. RoÅ›nie bardzo szybko, ale Å¼yje tylko 150-200 lat. ', 'images/kasztanowiec.jpg', ''),
(6, 'Jesion wyniosÅ‚y', 'LiÅ›Ä‡ nieparzysto pierzastozÅ‚oÅ¼ony. Jesion zachwyca swÄ… eleganckÄ… budowÄ…. Jeden z przedstawicieli tego gatunku jest najwyÅ¼szym drzewem w Polsce! PrzeciÄ™tnie dorasta do 30-40 m.', 'images/jesion.png', ''),
(7, 'Bez czarny', 'LiÅ›cie sÄ… zÅ‚oÅ¼one, nieparzystopierzaste. Jest to duÅ¼y malowniczy krzew - zwÅ‚aszcza w okresie kwietnienia. Wszystkie czÄ™Å›ci tej roÅ›liny sÄ… trujÄ…ce i wydzielajÄ… nieprzyjemny zapach, ktÃ³ry odstrasza owady i szkodniki.', 'images/bez.jpg', ''),
(8, 'WiÄ…z szypuÅ‚kowy', 'LiÅ›Ä‡ wyrÃ³Å¼nia typowa dla wiÄ…zÃ³w asymetryczna budowa. WyglÄ…dajÄ… jakby u nasady ktoÅ› obciÄ…Å‚ kawaÅ‚ek. DÅ‚ugoÅ›Ä‡ Å¼ycia wiÄ…zÃ³w nie przekracza 400 lat. Nie jest zbyt populary jako materiaÅ‚ budowlany.', 'images/wiaz.jpg', ''),
(9, 'Grab pospolity', 'Grab spokrewniony jest z brzoza i olchÄ…, ale ze wzglÄ™du na ksztaÅ‚t liÅ›ci moÅ¼na go pomyliÄ‡ z bukiem. LiÅ›cie ma eliptyczne i intensywnie zielone. PieÅ„ grabu czÄ™sto jest powykrzywiany.', 'images/grab.jpg', ''),
(10, 'Olsza Czarna', 'Najbardziej zwiÄ…zany z wodÄ… rodzimy gatunek drzewa. SpotkaÄ‡ ja moÅ¼na gÅ‚Ã³wnie na terenach podmokÅ‚ych. LiÅ›cie sÄ… owalne, i nasady klinowate, wierzchoÅ‚ek wciÄ™ty. ', 'images/olcz.jpg', ''),
(11, 'Olsza Szara', 'Olsza Szara jest gatunkiem wyjÄ…tkowo maÅ‚o wymagajÄ…cym. Potrafi dostosowaÄ‡ siÄ™ do kaÅ¼dych warunkÃ³w. Szybko roÅ›nie, ale doÅ¼ywa jedynie 40-60 lat. LiÅ›cie ma jaÅ‚owate i szerokie, ostro zakoÅ„czone, co odrÃ³Å¼nia jÄ… od olszy czarnej. Z wierzchu nagie, ciemnozielone, od doÅ‚u szare (stÄ…d nazwa).', 'images/olsz.jpg', ''),
(12, 'DÄ…b BezszypuÅ‚kowy', 'Drzewo dorasta 20-30 m i Å¼yje nieco krÃ³cej niÅ¼ jego szypuÅ‚kowy krewniak czyli okoÅ‚o 300 lat. Najgrubszy w Polsce dÄ…b bezszypuÅ‚kowy ma 6,5 m obwody. LiÅ›cie sÄ… regularnie klapowane o dÅ‚ugoÅ›ci ok 10 cm. Blaszka z gÃ³ry ciemnozielona, naga, bÅ‚yszczÄ…ca, od spodu jaÅ›niejsza, lekko owÅ‚osiona. ', 'images/dabb.jpg', ''),
(13, 'Robinia Akacjowa', 'Potocznie zwana \"akacjÄ…\".WyrÃ³Å¼nia siÄ™ charakterystycznÄ… parasolowatÄ… koronÄ… i fantazyjnie powyginanymi gaÅ‚Ä™ziami. LiÅ›cie ma zÅ‚oÅ¼one i nieparzystopierzaste. Uzyskiwany z robinii jasno zabarwiony miÃ³d jest jednym z najbardziej cenionych, poniewaÅ¼ nie uczula i jest wykorzystywany w zioÅ‚olecznictwie.', 'images/robinia.jpg', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`id`, `name2`, `message`) VALUES
(1, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'YO'),
(2, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'a'),
(3, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(4, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(5, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'z'),
(6, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'xsa'),
(7, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'sc'),
(8, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'a'),
(9, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(10, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(11, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(12, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(13, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(14, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(15, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(16, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(17, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(18, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(19, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(20, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(21, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(22, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(23, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(24, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(25, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(26, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(27, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(28, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(29, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(30, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(31, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(32, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(33, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(34, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'ss'),
(35, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(36, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 's'),
(37, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'sxxxsxs'),
(38, '\nNotice:  Undefined variable: user in C:xampphtdocschatindex.php on line 17', 'sx'),
(39, 'NIEOBCHODZIMNIETO', 'YO'),
(40, 'NIEOBCHODZIMNIETO', 'NIE'),
(41, 'NIEOBCHODZIMNIETO', 'YO'),
(42, 'NIEOBCHODZIMNIETO', 'iugaiuga');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'koala', 'ko@ko', '09bb63bf7635f9cfd50f022e7a3b0dba'),
(2, 'Ania', 'anial1@op.pl', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'aa', 'a@a', '0cc175b9c0f1b6a831c399e269772661'),
(4, 'paula', 'a@aaa', '4921c0e2d1f6005abe1f9ec2e2041909'),
(5, 'k', 'k@k', '8ce4b16b22b58894aa86c421e8759df3'),
(6, 'Mama', 'mama@olewa.mnie', '518d5f3401534f5c6c21977f12f60989'),
(7, 'a', 'aaa@a', '0cc175b9c0f1b6a831c399e269772661'),
(8, 'paweÅ‚', 'pawel@pawel', 'a741cdf4d61e1083064d813a5a1ec8aa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listki`
--
ALTER TABLE `listki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `listki`
--
ALTER TABLE `listki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
