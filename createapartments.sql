
--
-- Table structure for table `apartments`
--
CREATE TABLE `apartments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `picture` varchar(255) NOT NULL,
  `archive` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`id`, `title`, `description`, `date`, `picture`, `archive`) VALUES
(1, '&quot;Apartmani Anna***&quot;', 'Apartmani Anna nalaze se na 500 metara od plaže i 600 metara od centra Novalje, a u sklopu objekta gostima su na raspolaganju besplatni WiFi i klimatizirane sobe i apartmani. Popularna plaza Zrće, na kojoj je smješteno nekoliko nocnih klubova, udaljena je 2 km. Sve smještajne jedinice imaju namješten balkon, TV sa satelitskim programima i vlastitu kupaonicu. Apartmani uključuju i opremljenu kuhinju s blagovaonicom. Gostima su takoder dostupni skladište prtljage i usluge pranja rublja i glacanja. Najbliži restoran nalazi se na svega 10 metara, a do bara i trgovine prehrambenih proizvoda ima 300 metara.\r\n \r\n Stajalište lokalnih autobusa koje uključuje učestale linije do plaze Zrce smješteno je svega 100 metara od apartmana Ana&Ita. Glavni autobusni kolodvor udaljen je 1 km. Gosti mogu besplatno koristiti privatno parkiraliste. Najbliža trajektna luka nalazi se u mjestu Žigljen, na 8 km. Most koji povezuje otok Pag s kopnom udaljen je 45 km. Povijesni grad Zadar smješten je 70 km od objekta. Ovo je omiljeni dio odredista Novalja za nase goste, na temelju nepristranih recenzija.', '2020-05-25 12:22:35', 'apartmens-Anna-3.jpg', 'N'),
(2, '&quot;Apartmani Dino**** &quot;', 'Moderni i luksuzni Apartmani Dino nude gostima na raspolaganje besplatni WiFi i parking. Nalaze se 400 metara od plaze, a u sklopu objekta je bazen. Popularna plaza Zrce, na kojoj je smjesteno nekoliko nocnih klubova, udaljena je 2 km. Sve smjestajne jedinice imaju namjesten balkon, TV sa satelitskim programima i vlastitu kupaonicu. Apartmani ukljucuju i opremljenu kuhinju s blagovaonicom. Najbliza trajektna luka nalazi se u mjestu Zigljen, na 8 km. Most koji povezuje otok Pag s kopnom udaljen je 45 km. Povijesni grad Zadar smjesten je 70 km od objekta. Parovima se posebno svidjela lokacija - ocijenili su je s 10 za svoj boravak.\r\n \r\nNajblizi restoran nalazi se na svega 5 metara, a do bara i trgovine prehrambenih proizvoda ima 100 metara. Stajaliste lokalnih autobusa koje ukljucuje ucestale linije do plaze Zrce smjesteno je svega 100 metara od apartmana. Glavni autobusni kolodvor udaljen je 1 km. Gosti mogu besplatno koristiti privatno parkiraliste.', '2020-06-26 12:25:40', 'apartmens-Dino-1.jpg', 'N'),
(4, ' &quot;Apartmani Lofiel**** &quot;', 'Apartmani Lofiel uključuju jedinice za samostalan boravak s balkonom i pogledom na more, a nalaze se na 50 metara od plaže. Popularna plaza Zrće, na kojoj je smješteno nekoliko noćnih klubova, udaljena je 2 km. Sve jedinice imaju klima-uredaj, prostor za sjedenje i TV ravnog ekrana sa satelitskim programima. Dostupna je potpuno opremljena kuhinja s hladnjakom i blagovaonicom. Vlastite kupaonice sadrze tus. Restoran koji posluzuje jela meksicke kuhinje nalazi se pokraj objekta, a do trgovine prehrambenih proizvoda ima 20 metara. Najblizi bar smjesten je 300 metara od apartmana Lofiel.\r\n \r\nObjekt se nalazi na 20 metara od stajališta autobusne linije koja prometuje do plaže Zrće sa nocnim klubovima, udaljene 2,5 km. Najbliza trajektna luka nalazi se u mjestu Zigljen, na 8 km. Most koji povezuje otok Pag s kopnom udaljen je 45 km. Povijesni grad Zadar i zracna luka smjesteni su 70 km od objekta.', '2020-07-27 11:21:13', 'apartmens-Lofiel-1.jpg', 'N');
