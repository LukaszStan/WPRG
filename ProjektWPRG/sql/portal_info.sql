-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 18, 2023 at 08:25 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_info`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykuly`
--

CREATE TABLE `artykuly` (
  `artykulyID` int(11) NOT NULL,
  `tytul` varchar(200) DEFAULT NULL,
  `uzytkownicy_uzytkownikID` int(11) NOT NULL,
  `tresc` text DEFAULT NULL,
  `data` date DEFAULT NULL,
  `obrazek` varchar(200) NOT NULL,
  `dzial` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artykuly`
--

INSERT INTO `artykuly` (`artykulyID`, `tytul`, `uzytkownicy_uzytkownikID`, `tresc`, `data`, `obrazek`, `dzial`) VALUES
(1, 'Niemieckie media zareagowały na porażkę z Polską. Powtarza się jedno słowo', 3, 'Reprezentacja Niemiec w meczu towarzyskim przegrała na PGE Narodowym z Polską 0:1. Niemieckie media piszą o kryzysie tamtejszej reprezentacji. Takiego rezultatu meczu towarzyskiego Niemcy się nie spodziewali. Po raz drugi w historii reprezentacja Polski pokonała zachodnich sąsiadów. Gola na wagę wygranej strzelił Jakub Kiwior. Dla naszych zachodnich sąsiadów porażka z Biało-Czerwonymi to duże rozczarowanie. \r\n\r\n\"Kryzys Flicka się pogłębia. To kolejna porcja frustracji. Trener kadry narodowej kontynuuje eksperymenty po remisie z Ukrainą. Nie ma dalszych śladów kręgosłupa zespołu. W ostatnich 15 meczach międzynarodowych Niemcy odnieśli cztery zwycięstwa, z których tylko dwa z czystym kontem. W pierwszej połowie prawie nic nie pasowało\" - relacjonuje \"Bild\". ', '2023-06-18', 'obrazki/polskaniemcy.jpg', 'Sport'),
(2, 'OnePlus Nord CE 3 Lite - TEST: Ładny, niedrogi i całkiem niezły', 4, 'Ale któryś z projektantów OnePlus Nord CE 3 Lite miał chyba problemy z liczeniem do trzech. Testując sprzęt elektroniczny często marudzę na temat wad urządzeń kosztujących kilkakrotnie więcej, niż zarabiam miesięcznie. Tymczasem codzienność wygląda tak, że do sklepu idzie się po sprzęty dobre i tanie. A przynajmniej, niedrogie. Czy drogie, czy przystępne, telefony kupujemy oczami, więc czy będzie dobry, czy zły, po pierwsze nie może być brzydki. Z przyjemnością da się stwierdzić, że OnePlus Nord CE 3 Lite (wow, dobrze, że nie dodali czegoś jeszcze do tej nazwy!) spełnia to kryterium. A nawet więcej - nie tylko nie jest brzydki, ale jest naprawdę ładny! Obudowa jest smukła i zgrabna, sprawiająca wrażenie monolitycznej, a jej kolor rzuca się w oczy nie wypalając ich jednak. Trudno go przegapić, ale zarazem, co ciekawe, pasuje niemal do wszystkiego. Zdecydowanie dobra rzecz.', '2023-06-15', 'obrazki/oneplusnord.jpg', 'Technologia'),
(3, 'Rurki z kremem – jak to zrobić?', 5, 'Od lat cieszą się niesłabnącym powodzeniem, dlatego chętnie oferują je zarówno duże, sieciowe cukiernie, jak i niepozorne budki czy food trucki stojące na deptakach wielu polskich miejscowości, zwłaszcza atrakcyjnych turystycznie. Rurki z kremem bez problemu przygotujemy także w domowym zaciszu. Choć apogeum popularności osiągnęły w latach 80. XX wieku, rurki z kremem mają znacznie dłuższą historię. Jako \"ulipki z pianą\" (czyli bitą śmietaną) pojawiły się już na kartach najstarszej rodzimej książki kucharskiej, czyli \"Compendium ferculorum albo zebranie potraw\" z 1682 roku. Jej autor, Stanisław Czerniecki, radził, by z mąki pszennej, mleka i cukru wyrobić ciasto, \"jako na opłatki\", a następnie nawinąć na \"okrągłe drewienka albo wałeczki i wypiec \"na żelazach\".\r\n\r\nTak wykonane rurki początkowo obkładano bitą śmietaną, choć z czasem ciastka zaczęto nią wypełniać. Popularnym nadzieniem były też owocowe powidła, a następnie również rozmaite kremy. Na początku XX wieku dużym powodzeniem cieszyły się rurki z ciasta francuskiego, do przygotowania których zachęcała choćby Maria Ochorowicz-Monatowa, słynna ówczesna autorka poradników kulinarnych, w tym kultowej \"Uniwersalnej książki kucharskiej\" z 1913 roku.\r\n\r\nRurki z kremem nie są tylko polską specjalnością. Na Sycylii już w X wieku wypiekano cannoli, czyli chrupiące ciastka skrywające wewnątrz pyszny krem na bazie serka ricotta, z dodatkiem kandyzowanych owoców. Czesi od 200 lat zajadają się hořickimi trubičkami – skręconymi, cienkimi waflami wypełnionymi kremem śmietankowym o różnych smakach, najczęściej czekoladowym i orzechowym.', '2023-01-05', 'obrazki/rurki.jpg', 'Kuchnia'),
(4, 'Pałac Marianny Orańskiej. Jego budowa pochłonęła równowartość trzech ton złota', 6, 'Mówi się, że Marianna Orańska była jedną z pierwszych bizneswoman XIX-wiecznej Europy. Ta niderlandzka królewna wybudowała pałac w Kamieńcu Ząbkowickim, nazywany perłą europejskiego neogotyku. Niestety, los nie był dla Marianny łaskawy, a w 1849 r. mury tego pałacu były świadkami wielkiego skandalu. Pałac Marianny Orańskiej to obiekt, który odzyskuje świetność od 2012 r. Przez 24 lata, od 1986 do 2010 r. był dzierżawiony przez prywatnego przedsiębiorcę, Włodzimierza Sobiecha i dopiero po jego śmierci został przejęty przez gminę Kamieniec Ząbkowicki. Od tego czasu odbywały się tam prace, mające na celu zabezpieczenie obiektu, oczyszczenie terenu przy pałacu i przygotowanie go do otwarcia dla ruchu turystycznego.\r\n\r\n- Od 1946 do 1986 r. pałac stał sam sobie. Był dostępny dzień i noc dla każdego, ale ludzie nie przychodzili tutaj na piknik ani na randki. Tutaj najczęściej przychodziło się coś zabrać albo coś zniszczyć. Takie praktyki odbywały się w pałacu przez 40 lat - mówi WP Sławomir Radzik, administrator pałacu Marianny Orańskiej w Kamieńcu Ząbkowickim. - Wszelkie zniszczenia pałacu są wynikiem pobytu Armii Czerwonej oraz działań powojennych. Apogeum grabieży tego obiektu to druga połowa lat 50. XX w - tłumaczy nam.', '2023-06-13', 'obrazki/palac.jpg', 'Turystyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `komentarzID` int(11) NOT NULL,
  `nick` varchar(25) DEFAULT NULL,
  `tresc` text DEFAULT NULL,
  `data` date DEFAULT NULL,
  `artykuly_artykulyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentarze`
--

INSERT INTO `komentarze` (`komentarzID`, `nick`, `tresc`, `data`, `artykuly_artykulyID`) VALUES
(1, 'Maciek08', 'POLSKA GÓRĄ', '2023-06-17', 1),
(2, 'JanuszIwanPL', 'DOOOOBRZEEEE POLAAAAACY JAZDA Z NIMI', '2023-06-17', 1),
(5, 'Jonatan2115', 'RL9 najlepszy piłkarz', '2023-06-17', 1),
(6, 'JurekKaczka99', 'Apple lepsze moim zdaniem', '2023-06-17', 2),
(9, 'TelefonyRecenzje111', 'Dobry telefon sam mam i polecam każdemu :D', '2023-06-17', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `rolaID` int(11) NOT NULL,
  `rola` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rola`
--

INSERT INTO `rola` (`rolaID`, `rola`) VALUES
(1, 'admin'),
(2, 'autor'),
(3, 'wlasciciel_sport'),
(4, 'wlasciciel_tech'),
(5, 'wlasciciel_kuchnia'),
(6, 'wlasciciel_turystyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `uzytkownikID` int(11) NOT NULL,
  `login` varchar(25) DEFAULT NULL,
  `haslo` varchar(16) DEFAULT NULL,
  `rola_rolaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`uzytkownikID`, `login`, `haslo`, `rola_rolaID`) VALUES
(1, 'admin', 'zaq123@WSX', 1),
(2, 'MarekM', '1q2w3e4r', 2),
(3, 'JurekKowal', 'Jk123', 3),
(4, 'DominikMar', 'qwer1234', 4),
(5, 'PawelTryb', 'PpTtq1w2e3', 5),
(6, 'JuliaAdam', 'test123', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomosci`
--

CREATE TABLE `wiadomosci` (
  `wiadomoscID` int(11) NOT NULL,
  `uzytkownicy_uzytkownikID` int(11) NOT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `tresc` text DEFAULT NULL,
  `data` date DEFAULT NULL,
  `przeczytany` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wiadomosci`
--

INSERT INTO `wiadomosci` (`wiadomoscID`, `uzytkownicy_uzytkownikID`, `mail`, `tresc`, `data`, `przeczytany`) VALUES
(3, 3, 'zuzelfan123@wp.pl', 'Witam panie Jurku, może napisze pan coś o żużlu\r\nPozdrawiam ', '2023-06-17', 1),
(4, 5, 'kochamgotowac@hotmail.com', 'Witam panie Pawle\r\nNapisz pan może artykuł na temat najlepszych polskich przepisów\r\nPozdrawiam', '2023-06-18', 0),
(5, 1, 'test123@test.pl', 'test test test', '2023-06-18', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  ADD PRIMARY KEY (`artykulyID`),
  ADD KEY `artykuly_uzytkownicy` (`uzytkownicy_uzytkownikID`);

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`komentarzID`),
  ADD KEY `komentarze_artykuly` (`artykuly_artykulyID`);

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`rolaID`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`uzytkownikID`),
  ADD KEY `uzytkownicy_rola` (`rola_rolaID`);

--
-- Indeksy dla tabeli `wiadomosci`
--
ALTER TABLE `wiadomosci`
  ADD PRIMARY KEY (`wiadomoscID`),
  ADD KEY `wiadomosci_uzytkownicy` (`uzytkownicy_uzytkownikID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artykuly`
--
ALTER TABLE `artykuly`
  MODIFY `artykulyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `komentarzID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rola`
--
ALTER TABLE `rola`
  MODIFY `rolaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `uzytkownikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wiadomosci`
--
ALTER TABLE `wiadomosci`
  MODIFY `wiadomoscID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artykuly`
--
ALTER TABLE `artykuly`
  ADD CONSTRAINT `artykuly_uzytkownicy` FOREIGN KEY (`uzytkownicy_uzytkownikID`) REFERENCES `uzytkownicy` (`uzytkownikID`);

--
-- Constraints for table `komentarze`
--
ALTER TABLE `komentarze`
  ADD CONSTRAINT `komentarze_artykuly` FOREIGN KEY (`artykuly_artykulyID`) REFERENCES `artykuly` (`artykulyID`);

--
-- Constraints for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD CONSTRAINT `uzytkownicy_rola` FOREIGN KEY (`rola_rolaID`) REFERENCES `rola` (`rolaID`);

--
-- Constraints for table `wiadomosci`
--
ALTER TABLE `wiadomosci`
  ADD CONSTRAINT `wiadomosci_uzytkownicy` FOREIGN KEY (`uzytkownicy_uzytkownikID`) REFERENCES `uzytkownicy` (`uzytkownikID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
