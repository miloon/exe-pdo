-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 22 Avril 2016 à 14:48
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `recette`
--

-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE IF NOT EXISTS `continent` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lintitule` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lintitule_UNIQUE` (`lintitule`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `continent`
--

INSERT INTO `continent` (`id`, `lintitule`) VALUES
(4, 'Afrique'),
(5, 'Amérique'),
(2, 'Asie'),
(3, 'Europe'),
(1, 'Océanie');

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE IF NOT EXISTS `droit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lintitule` varchar(80) NOT NULL,
  `ecrit` tinyint(1) NOT NULL,
  `modif` tinyint(1) NOT NULL,
  `sup` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `droit`
--

INSERT INTO `droit` (`id`, `lintitule`, `ecrit`, `modif`, `sup`) VALUES
(1, 'admin', 1, 1, 1),
(2, 'modo', 1, 1, 0),
(3, 'redac', 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lintitule` varchar(100) NOT NULL,
  `ladesc` text NOT NULL,
  `continent_id` int(10) unsigned NOT NULL,
  `img` text,
  PRIMARY KEY (`id`),
  KEY `fk_sous-cat-pays_continent_idx` (`continent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `lintitule`, `ladesc`, `continent_id`, `img`) VALUES
(1, 'Australie', 'Coucou', 1, NULL),
(2, 'Nouvelle Zélande', 'n importe', 1, NULL),
(3, 'Japon', 'ok', 2, NULL),
(4, 'Chine', 'Chien', 2, NULL),
(5, 'Belgique', 'pou', 3, NULL),
(6, 'Espagne', 'olé', 3, NULL),
(7, 'Maroc', 'bella', 4, NULL),
(8, 'Côte d''Ivoire', 'lunette', 4, NULL),
(9, 'Mexique', 'ld', 5, NULL),
(10, 'USA', 'ds', 5, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `ladesc` text NOT NULL,
  `ladate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pays_id` int(10) unsigned NOT NULL,
  `util_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_recette_pays1_idx` (`pays_id`),
  KEY `fk_recette_util1_idx` (`util_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `recette`
--

INSERT INTO `recette` (`id`, `titre`, `ladesc`, `ladate`, `pays_id`, `util_id`) VALUES
(1, 'Brochettes japonaises ', '- 500 g de poulet haché\r\n- 2 jaunes d''œuf\r\n- 2 cuillères à café de sucre\r\n- 6 cuillères à soupe de chapelure\r\n- 20 cuillères à soupe de sauce soja\r\n- 8 piques à brochettes en bois\r\n\r\nMélanger ensemble le poulet haché, les jaunes d''oeuf, 6 cuillères à soupe de sauce soja, le sucre et la chapelure. Avec les doigts, mouler 24 boulettes. Préchauffer le four à 200ºC (thermostat 7). Disposer la grille et la lèche-frite juste en dessous, dans le four.\r\n\r\nPiquer 3 boulettes sur chaque pique et bien badigeonner de sauce soja. Poser les brochettes sur la grille du four et cuire pendant 15 minutes. Retourner les brochettes et cuire encore pendant 10 minutes. Badigeonner de temps en temps avec de la sauce soja.\r\nPour finir\r\nServir avec la sauce soja récupérée dans la lèche-frite. ', '2016-04-22 12:30:36', 3, 1),
(2, 'Tortilla', 'Ingrédients (pour 6 personnes) : \r\n- 1 kg de pommes de terre\r\n- 8 oeufs\r\n- un gros oignon (pour une grande poële)\r\n- sel et poivre\r\n\r\nTemps de préparation : 15 minutes\r\nTemps de cuisson : 30 minutes\r\n\r\nEplucher et découper les pommes de terre en rondelle de 1/2 cm d''épaisseur environ.\r\n\r\nEplucher l''oignon et le couper en petits morceaux.\r\n\r\nMettre tous ces ingrédients dans la poêle. Celle-ci doit être remplie juqu''à mi-hauteur.\r\n\r\nCouvrir d''huile d''olive (il faut que toutes les pommes de terre baignent dans l''huile). Couvrir la poêle d''un couvert (important : il faut que les pommes de terre cuisent à la fois dans l''huile et à la vapeur).\r\n\r\nUne fois les pommes de terre bien cuites (il faut que le pointe d''un couteur puisse s''y enfoncer sans peine), vider l''huile d''olive dans un récipient.\r\n\r\nVerser les pommes de terre et oignon dans un saladier. Ajouter les oeufs battus, salés et poivrés. Il faut qu''il y ait suffisamment d''oeufs pour que la tortilla soit bien liée.\r\n\r\nMélanger doucement (ne pas faire de la purée de pommes de terre !)\r\n\r\nRemettre dans la poële 2 - 3 mm d''huile d''olive et y verser le mélange. Faire cuire à feu doux un côté de la tortilla.\r\nUne fois le fond bien doré, retourner la tortilla sur une assiette. Cette opération est délicate car les oeufs sur le dessus ne sont pas cuits et l''huile dans le fond est très chaude.\r\nRemettre un peu d''huile dans la poêle si nécessaire et y faire glisser la tortilla, afin de faire dorer l''autre côté.\r\n\r\nUne fois les deux côtés dorés, glisser la tortilla dans une assiette.', '2016-04-22 12:32:10', 6, 2),
(3, 'Cookies américains aux pépites de chocolat noir et aux noix de pécan', '- 250 g de farine\r\n- 1/2 sachet de levure\r\n- 125 g de sucre blanc, en poudre\r\n- 125 g de cassonade\r\n- 125 g de beurre\r\n- 1 oeuf\r\n- 1 sachet de sucre vanillé\r\n- 1 pincée de sel\r\n- 1 sachet de pépites au chocolat noir\r\n- 1 sachet de noix de pécan\r\n\r\n\r\nPesez les ingrédients.\r\n\r\nDans un saladier, mélangez la farine, la levure, les sucres, le sel et le sucre vanillé.\r\n\r\nFaites fondre le beurre.\r\n\r\nDans un bol, battez l’œuf et ajoutez y le beurre fondu.\r\n\r\nMettez la préparation beurre + œuf, dans la préparation de farine et de sucres, d''un seul coup.\r\n\r\nConcassez les noix de pécan.\r\n\r\nAjoutez les pépites et les noix de pécan, concassées.\r\n\r\nMélangez avec une cuillère en bois.\r\n\r\nLaissez reposer au réfrigérateur, environ, 1 heure.\r\n\r\nPendant ce temps, préchauffez le four à 210°C.\r\n\r\nFaçonnez les cookies et disposez les sur une plaque recouverte de papier sulfurisé.\r\n\r\nEnfournez 10 minutes (par fournée).\r\n\r\nLaissez refroidir avant de les décoller et placez les sur un plateau.', '2016-04-22 12:40:33', 10, 3),
(4, 'Nouilles chinoises et crevettes au paprika au wok', '- 250 g de pâtes chinoises\r\n- 500 g de crevettes décortiquées, sans queues (congelé)\r\n- 300 g de poêlées asiatiques (congelé, pesé congelé)\r\n- 2 c. à soupe de sauce soja\r\n- 2 bonnes pincées de paprika en poudre\r\n- 3 c. à soupe d''huile d''olive\r\n- sel\r\n\r\n\r\nPour commencer, faites revenir les légumes asiatiques dans le wok.\r\n\r\nUne fois qu''ils sont fondus, ajoutez les crevettes.\r\n\r\nPendant ce temps, faites bouillir de l''eau non salée dans une grande casserole. Éteignez le feu et ajoutez les nouilles\r\n\r\nLaissez reposer 5 minutes. Détachez les pâtes avec une fourchette et égouttez.\r\n\r\nRéservez.\r\n\r\nUne fois que tout est bien revenu dans le wok (c''est à dire les légumes et les crevettes) ajoutez le paprika et salez, mélangez bien.\r\n\r\nAjoutez les nouilles et mélangez à nouveau de sorte que les crevettes-légumes se mêlent bien aux pâtes.\r\n\r\nTerminez par la sauce soja et remuez.\r\n\r\nLaissez cuire encore pendant 5 minutes et servez...\r\n', '2016-04-22 12:33:29', 4, 2),
(5, 'Tajine de kefta', 'Pour 4 personnes \r\n\r\nPour les boulettes\r\n- Sel et poivre\r\n- 4 œufs\r\n- 1/2 c à c de gingembre en poudre\r\n- 1 c à c de paprika\r\n- 1 c à s de persil haché\r\n- 1 c à c de cumin\r\n- 500g de viande hachée\r\n\r\nPour la sauce \r\n- 1/2 c à c de gingembre en poudre\r\n- 6 c à s d''huile d''olive\r\n- Sel et poivre\r\n- 1 c à c de paprika\r\n- 1 c à c de cumin\r\n- 1 oignon haché\r\n- 1 c à s de persil haché\r\n- 1 gousse d''ail hachée\r\n- 3 tomates concassées\r\n\r\nPréparation de la sauce : \r\nCommencez par hacher l''oignon et l''ail.\r\nEnsuite, dans une poêle chaude, faites fondre un peu de beurre.\r\nAjoutez l''oignon et l''ail haché, ainsi que la pulpe de tomate et le persil haché.\r\nLaissez mijoter sur feu doux.\r\n\r\nPréparation des boulettes :\r\nDans un deuxième saladier, mélangez la viande hachée, le reste du persil haché, le sel, le gingembre, le cumin et le paprika (même épices dans la viande hachée que dans la sauce).\r\n\r\nUne fois, la farce prête, formez les boulettes de la taille de votre choix. \r\n\r\nDéposez les boulettes dans la sauce, qui est en train de mijoter.\r\n\r\nAprès 5 minutes de cuisson, ajoutez les oeufs entiers, en les cassant délicatement pour ne pas les percer.\r\nPoursuivez la cuisson quelques minutes, en faisant attention que les oeufs ne cuisent pas trop (le jaune doit rester coulant).\r\n\r\nServez directement sur table, dans le plat à tajine, avec du pain marocain.\r\n', '2016-04-22 12:35:12', 7, 2),
(6, 'Faijitas mexicaines', '- 4 tortillas\r\n- 500 g de boeuf haché\r\n- 1 oignon\r\n- 2 tomates\r\n- 1 petite boîte de haricots rouges cuits\r\n- 1 petite boîte de concentré de tomate\r\n- feuilles de salade\r\n- sauce au cheddar\r\n- huile d''olive\r\n- sel, poivre\r\n\r\nPelez et hachez l''oignon.\r\n\r\nNettoyez et coupez une tomate en petits dés.\r\n\r\nFaites chauffer 1 c. à soupe d''huile d''olive dans une poêle.\r\n\r\nFaites suer l''oignon jusqu''à ce qu''il soit translucide.\r\n\r\nAjoutez le boeuf haché et la tomate en cubes et laissez cuire 5 minutes.\r\n\r\nAjoutez le concentré de tomate, du sel et du poivre puis laissez mijoter pendant 15 minutes environ, en mélangeant bien.\r\n\r\nPendant ce temps, lavez et essorez les feuilles de salade.\r\n\r\nÉgouttez les haricots rouges.\r\n\r\nNettoyez et coupez la dernière tomate en quartiers.\r\n\r\nFaites chauffer la sauce au cheddar au micro-ondes.\r\n\r\nGarnissez les tortillas avec les feuilles de salade, la préparation au boeuf, les haricots rouges, les quartiers de tomate et la sauce au cheddar.\r\n\r\nRepliez les bords des tortillas et dégustez sans attendre les fajitas.', '2016-04-22 12:39:10', 9, 1),
(7, 'Salade de poulet aux kiwis et au melon', '- 500 g de blanc de poulet\r\n- 3 kiwis\r\n- 2 melons\r\n- 1 laitue\r\n- 1 botte de cébettes (petits oignons blancs)\r\n- 12 brins de ciboulette\r\n- 2 c. à soupe de graines de sésame\r\n- 2 c. à soupe de vinaigre de cidre\r\n- 6 c. à soupe de huile d''arachide\r\n- sel, poivre\r\n\r\n\r\nÉTAPE 1 Faites cuire les blancs de poulet pendant 10 min à la vapeur.\r\n\r\nÉTAPE 2 Egouttez-les, laissez-les refroidir et découpez-les en lamelles.\r\n\r\nÉTAPE 3 Découpez les melons en 2, retirez les graines et la peau puis découpez la chair en cubes.\r\n\r\nÉTAPE 4 Pelez les kiwis et découpez-les en rondelles.\r\n\r\nÉTAPE 5 Lavez les cébettes et découpez-les en rondelles.\r\n\r\nÉTAPE 6 Nettoyez et lavez la laitue.\r\n\r\nÉTAPE 7 Dressez les assiettes avec quelques feuilles de laitue, les lamelles de poulet, les cubes de melon, les tranches de kiwis et les rondelles de cébettes.\r\n\r\nÉTAPE 8 Émulsionnez la vinaigrette avec l''huile, le vinaigre, le sel et le poivre.\r\n\r\nÉTAPE 9 Répartissez cette vinaigrette sur les assiettes, décorez avec les brins de ciboulette et saupoudrez de graines de sésame.\r\n\r\nÉTAPE 10 Servez frais.\r\n', '2016-04-22 12:29:05', 2, 3),
(8, 'Salade de riz sauvage et de grains de blé', '- 250 ml de grains de blé naturels   \r\n- 180 ml de riz sauvage   \r\n- 250 ml d’orge mondé     \r\n- 1/4 t (60 ml) d’huile de canola   \r\n- 1/4 t (60 ml) de sauce soja   \r\n- 1/4 t (60 ml) de jus de citron   \r\n- 1 c. à tab de moutarde de Dijon   \r\n- 2 gousses d’ail hachées finement\r\n- 1/4 c. à thé de sel   \r\n- 1/4 c. à thé  de poivre noir du moulin   \r\n- 4 oignons verts coupés en tranches fines\r\n- 1 poivron rouge coupé en dés\r\n- 1/3 t (80 ml) de raisins secs   \r\n- 1/2 t (125 ml) de noix de cajou non salées, grillées et hachées\r\n- 1/2 t (125 ml) de graines de tournesol non salées, écalées et grillées\r\n\r\nPréparation\r\nPorter à ébullition une casserole d’eau bouillante salée. Ajouter les grains de blé, couvrir et laisser mijoter pendant environ 1 1/4 heure ou jusqu’à ce qu’ils soient tendres, mais encore fermes. Égoutter. Entre-temps, porter à ébullition une autre casserole d’eau bouillante salée. Ajouter le riz sauvage, couvrir et laisser mijoter pendant environ 45 minutes ou jusqu’à ce qu’il soit tendre et que les grains ouvrent. Égoutter. Entre-temps, porter à ébullition une troisième casserole d’eau bouillante salée. Ajouter l’orge, couvrir et laisser mijoter, en brassant de temps à autre, pendant environ 20 minutes ou jusqu’à ce qu’il soit tendre. Égoutter.\r\n \r\nDans un grand bol, à l’aide d’un fouet, mélanger l’huile, la sauce soja, le jus de citron, la moutarde de Dijon, l’ail, le sel et le poivre. Ajouter les grains de blé, le riz sauvage, l’orge, les oignons verts, le poivron et les raisins secs et mélanger pour bien enrober tous les ingrédients. (Vous pouvez préparer la salade jusqu’à cette étape et la couvrir. Elle se conservera jusqu’à 3 jours au réfrigérateur.) Au moment de servir, ajouter les noix de cajou et les graines de tournesol et mélanger.\r\n', '2016-04-22 12:37:02', 1, 2),
(9, 'Gaspacho express', 'Temps de préparation : 15 minutes\r\n\r\nTemps de cuisson : 0 minutes\r\n\r\nIngrédients (pour 4 personnes) : \r\n- 1 grosse boîte de tomates\r\n- 1/2 poivron vert\r\n- 1/2 concombre\r\n- 1 échalote grise ou 1 très petit oignon coupé en 2\r\n- 1 gousse d''ail entière\r\n- 2 cuillères à soupe d''huile d''olive\r\n- 1/2 cuillère à café de vinaigre balsamique\r\n- tabasco ou cayenne (au goût)\r\n- 1/2 cuillère à café de sucre\r\n- sel et poivre\r\n- 15 cl d''eau\r\n\r\n\r\nMettre tous les ingrédients coupés grossièrement dans un mixer.\r\nDémarrer l''appareil à petite vitesse et terminer à grande vitesse. Si vous êtes pressés, mettre au congélateur 30 minutes. Sinon, le plus longtemps possible au réfrigérateur.\r\nAjouter des glaçons au moment de servir.', '2016-04-22 12:46:19', 6, 2),
(10, 'Okonomiyaki ou ''crêpe'' japonaise ', 'Temps de préparation : 15 minutes\r\n\r\nTemps de cuisson : 10 minutes\r\n\r\nIngrédients (pour 1 personne) : \r\n- 100 g de farine tamisée\r\n- 10 cl d''eau ou de bouillon de poisson\r\n- 2 grandes feuilles de chou blanc\r\n- 1 oeuf\r\n\r\nPour la garniture au choix :\r\n- 4 fines tranches de lard\r\n- 1 poignée de grosses crevettes\r\n- 1 carré de cabillaud surgelé (ou autre poisson)\r\n- sauce worcestershire japonaise ("Bulldog sauce") Attention, elle est sucrée et différente de la Worcester sauce anglaise\r\n- Nori émietté (de préférence), ou autres algues (facultatif)\r\n- mayonnaise (facultatif)\r\n\r\nPréparation de la recette :\r\n\r\n\r\nMultipliez les ingrédients par le nombre de personnes.\r\n\r\nSortez à l''avance le poisson ou les crevettes s''ils sont surgelés, pour qu''ils décongèlent à température ambiante.\r\n\r\nDans un grand bol, mettez la farine, l''eau salée ou le bouillon de poisson, les oeufs. Battez jusqu''à l''obtention d''une pâte lisse.\r\n\r\nEmincez le chou très finement. Mélangez-le à la pâte.\r\n\r\nCoupez le poisson en morceaux ou décortiquez les crevettes.\r\n\r\nSi vous avez choisi le poisson, mélanger le délicatement à la pâte, pour ne pas en faire de la bouillie.\r\n\r\nFaite chauffer la poêle à feu moyen avec un peu d''huile. Si vous avez choisi le lard, ne mettez pas d''huile mais faites-le revenir seul au début dans la pôele. Répartissez les crevettes et / ou les morceaux de sèche dans la poêle. Versez la pâte par dessus. Couvrez.\r\n\r\nLaissez cuire 5 mn minimum, le temps que la pâte soit bien saisie et commence à dorer.\r\n\r\nRetournez la "crêpe", en la découpant en parts si nécessaire. Couvrez et laissez cuire encore quelques minutes. Avec un pinceau ou une cuiller à soupe, recouvrez la "crêpe" de Bulldog sauce. Retournez encore la crêpe, afin de faire caraméliser la sauce. Recouvrez la seconde face de sauce, puis lorsque la 1ère face est caramélisée, retournez de nouveau la "crêpe" pour faire caraméliser l''autre face. Enfin, mettez à nouveau une fine couche de sauce, et parsemez légèrement de nori en miettes (pas trop, c''est très salé !).\r\n\r\nServez, en mettant à table la bulldog sauce et le nori pour les amateurs. Essayez aussi de l''accompagner de mayonnaise, c''est une façon "moderne" de déguster ce plat délicieux au Japon.', '2016-04-22 12:47:56', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `util`
--

CREATE TABLE IF NOT EXISTS `util` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `mdp` varchar(45) NOT NULL,
  `ladesc` text NOT NULL,
  `droit_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  KEY `fk_user_droit1_idx` (`droit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `util`
--

INSERT INTO `util` (`id`, `login`, `mdp`, `ladesc`, `droit_id`) VALUES
(1, 'admin', 'admin', 'Super Kevin le gros, aime le chocolat', 1),
(2, 'modo', 'modo', 'petit modo ', 2),
(3, 'redac', 'redac', 'je sais rien faire', 3);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `fk_sous-cat-pays_continent` FOREIGN KEY (`continent_id`) REFERENCES `continent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `recette`
--
ALTER TABLE `recette`
  ADD CONSTRAINT `fk_recette_pays1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_recette_util1` FOREIGN KEY (`util_id`) REFERENCES `util` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `util`
--
ALTER TABLE `util`
  ADD CONSTRAINT `fk_user_droit1` FOREIGN KEY (`droit_id`) REFERENCES `droit` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
