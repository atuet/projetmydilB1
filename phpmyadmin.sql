-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 13 jan. 2018 à 17:33
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
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
-- Structure de la table `pma__column_info`
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
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Déchargement des données de la table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'phpmyadmin', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"pma__bookmark\",\"pma__central_columns\",\"pma__column_info\",\"pma__designer_settings\",\"pma__export_templates\",\"pma__favorite\",\"pma__history\",\"pma__navigationhiding\",\"pma__pdf_pages\",\"pma__recent\",\"pma__relation\",\"pma__savedsearches\",\"pma__table_coords\",\"pma__table_info\",\"pma__table_uiprefs\",\"pma__tracking\",\"pma__userconfig\",\"pma__usergroups\",\"pma__users\",\"produit\",\"requete\",\"utilisateur\"],\"table_structure[]\":[\"pma__bookmark\",\"pma__central_columns\",\"pma__column_info\",\"pma__designer_settings\",\"pma__export_templates\",\"pma__favorite\",\"pma__history\",\"pma__navigationhiding\",\"pma__pdf_pages\",\"pma__recent\",\"pma__relation\",\"pma__savedsearches\",\"pma__table_coords\",\"pma__table_info\",\"pma__table_uiprefs\",\"pma__tracking\",\"pma__userconfig\",\"pma__usergroups\",\"pma__users\",\"produit\",\"requete\",\"utilisateur\"],\"table_data[]\":[\"pma__bookmark\",\"pma__central_columns\",\"pma__column_info\",\"pma__designer_settings\",\"pma__export_templates\",\"pma__favorite\",\"pma__history\",\"pma__navigationhiding\",\"pma__pdf_pages\",\"pma__recent\",\"pma__relation\",\"pma__savedsearches\",\"pma__table_coords\",\"pma__table_info\",\"pma__table_uiprefs\",\"pma__tracking\",\"pma__userconfig\",\"pma__usergroups\",\"pma__users\",\"produit\",\"requete\",\"utilisateur\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"json_structure_or_data\":\"data\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure de la table @TABLE@\",\"latex_structure_continued_caption\":\"Structure de la table @TABLE@ (suite)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Contenu de la table @TABLE@\",\"latex_data_continued_caption\":\"Contenu de la table @TABLE@ (suite)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"htmlword_columns\":null,\"json_pretty_print\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
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
-- Structure de la table `pma__navigationhiding`
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
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Déchargement des données de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"phpmyadmin\",\"table\":\"requete\"},{\"db\":\"phpmyadmin\",\"table\":\"utilisateur\"},{\"db\":\"phpmyadmin\",\"table\":\"produit\"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
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
-- Structure de la table `pma__savedsearches`
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
-- Structure de la table `pma__table_coords`
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
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Déchargement des données de la table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'phpmyadmin', 'produit', '{\"sorted_col\":\"`produit`.`id_pdt`  ASC\"}', '2017-12-31 16:37:13'),
('root', 'phpmyadmin', 'requete', '{\"sorted_col\":\"`id_requete` ASC\"}', '2018-01-13 16:32:20'),
('root', 'phpmyadmin', 'utilisateur', '{\"sorted_col\":\"`id`  ASC\"}', '2018-01-13 15:51:17');

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
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
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2017-11-06 12:43:04', '{\"lang\":\"fr\",\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_pdt` int(3) NOT NULL,
  `nom_pdt` varchar(20) NOT NULL,
  `date_emprunt` date DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `dispo_pdt` varchar(7) NOT NULL,
  `categorie_pdt` varchar(20) NOT NULL,
  `souscategorie_pdt` varchar(20) NOT NULL,
  `quantite_pdt` int(11) NOT NULL,
  `image_pdt` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_pdt`, `nom_pdt`, `date_emprunt`, `date_retour`, `dispo_pdt`, `categorie_pdt`, `souscategorie_pdt`, `quantite_pdt`, `image_pdt`, `description`) VALUES
(1, 'Leap Motion', NULL, NULL, 'Dispo', 'Device', 'Autre', 1, 'https://2.bp.blogspot.com/-DsbtpiUR15s/V1QJuKKzviI/AAAAAAAABxo/Zp0pil3_Xpk1SbDc0t8Ly1LO9Q7qkxONgCLcB/s1600/leap-motion1.jpg', 'Le Leap Motion est un dispositif de reconnaissance de mouvement des mains, pour la réalité virtuelle, créé par Leap Motion, Inc. Le dispositif existe sous différentes formes, directement intégré au casque VR ou sous forme d\'un dispositif que l\'on peut fixer.'),
(2, 'Wacom Intuos S', NULL, NULL, 'Dispo', 'Device', 'Tablette graphique ', 1, 'https://s1.qwant.com/thumbr/0x0/8/c/0c570d104eb5bc6bb857ff306931ff/b_1_q_0_p_0.jpg?u=https%3A%2F%2Fus-store.wacom.com%2FUserFiles%2FDocuments%2FProduct%2Fintuos-draw-small-blue-2-g.jpg&q=0&b=1&p=0&a=1', 'Libérez votre créativité avec la nouvelle Intuos. Elle comprend la technologie de pointe du stylet Wacom et la technologie tactile, un logiciel de création téléchargeable et la formation en ligne Wacom. Par conséquent, peu importe si vous rêvez d\'améliorer vos habiletés, d\'accumuler quelques « aimes », ou de repousser les limites de la créativité, l\'Intuos possède tout ce dont vous avez besoin pour faire de votre rêve une réalité.'),
(3, 'Kinect PC', NULL, NULL, 'Dispo', 'Device', 'Autre', 1, 'https://i0.wp.com/thatsitguys.com/wp-content/uploads/2012/01/kinect-pc.jpg?ssl=1', 'Le Kinect PC est un système de reconaissance des mouvements adapté pour les PC Windows.'),
(4, 'Kinect Xbox', NULL, NULL, 'Dispo', 'Device', 'Autre', 1, 'https://compass-ssl.xbox.com/assets/89/a6/89a6cdd2-28f5-4b62-a4cd-88d910954d7e.jpg?n=X1-Kinect-Sensor_Feature-1400_Voice-Commands_800x450.jpg', 'Bénéficiez d\'un confort et d\'une maîtrise décuplés avec Kinect pour Xbox One. Contrôlez votre Xbox et votre télé grâce à Cortana, passez des appels sur Skype en HD et jouez à des jeux dans lesquels vous êtes la manette. Kinect pour Xbox One est compatible avec la Xbox One ; un adaptateur Kinect Xbox est requis pour utiliser Kinect avec les consoles Xbox One S et les PC. Consultez l\'assistance Xbox pour en savoir plus.'),
(5, 'Projecteur Epson', NULL, NULL, 'Dispo', 'Device', 'Videoprojecteur', 2, 'https://s2.qwant.com/thumbr/0x0/d/e/1cc4cf3fe8c69b6506404434dd95a5/b_1_q_0_p_0.jpg?u=http%3A%2F%2Fwww.videoprojecteur-interactif.fr%2Fwp-content%2Fuploads%2F2015%2F05%2FVPI-EPSON-EDUC.png&q=0&b=1&p=0&a=1', 'Avec les projecteurs à domicile d’Epson, faites de votre salon une véritable scène d’action. Transformez vos activités quotidiennes, que vous assistiez à votre rencontre sportive préférée, que vous regardiez un classique du cinéma, que vous projetiez de somptueux décors ou que vous jouiez au tout dernier jeu vidéo. Faites en une expérience véritablement inoubliable avec une image projetée plus grande que nature. Captez l’attention de chacun et rassemblez famille et amis pour vivre des moments inoubliables.'),
(6, 'Hololens', NULL, NULL, 'Dispo', 'Device', 'VR', 1, 'https://www.windowscentral.com/sites/wpcentral.com/files/styles/large/public/topic_images/2016/hololens-topic.png?itok=oPubtLY8', 'Microsoft HoloLens est une paire de lunettes de réalité augmentée permettant de simuler des hologrammes qui s’intègrent dans le champ de vision de l’utilisateur. '),
(7, 'Oculus Rift', NULL, NULL, 'Dispo', 'Device', 'VR', 1, 'https://upload.wikimedia.org/wikipedia/commons/1/1e/Oculus_Rift_development_kit_2.jpg', 'L\'Oculus Rift est un périphérique informatique de réalité virtuelle conçu par l\'entreprise Oculus VR.'),
(8, 'Webcam Creative', NULL, NULL, 'Dispo', 'Device', 'Webcam', 1, 'https://touchit.sk/wp-content/uploads/2017/06/creative_sb_senz3d-3_vyd2016_7_nowat.jpg', ' Webcam à détection de profondeur avec diffusion vidéo à fréquence d\'images élevée'),
(9, 'Philips Hue', NULL, NULL, 'Dispo', 'Iot', 'Ampoule', 1, 'https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/H/JC/HJCC2/HJCC2?wid=1000&hei=1000&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=IrBkX2', 'Grâce à ces ampoules, réglez l\'intensité de vos ampoules et choisissez la couleur de la lumière parmi 16 millions de couleurs.\r\nCréez des ambiances lumineuses et programmez les en fonction de la journée.'),
(10, 'AR Drone Parrot', NULL, NULL, 'Dispo', 'Iot', 'Drone', 1, 'https://www.parrot.com/fr/sites/default/files/styles/product_teaser_display/public/ps/3043-large-parrot-3043jpg.jpg?itok=f-ize2ZG', 'L\'AR.Drone est un hélicoptère quadrirotor qui peut se piloter avec un appareil sous iOS, Android ou Symbian (téléphones Nokia) via une liaison Wi-Fi.\r\nIl est principalement dédié au divertissement mais dispose d\'équipements sophistiqués tels qu\'une caméra frontale pour le pilotage, une seconde verticale pour la stabilisation, un accéléromètre trois axes, deux gyroscopes, un émetteur et un récepteur à ultrasons permettant de calculer l\'altitude, de nombreux capteurs ainsi qu\'un ordinateur embarqué fonctionnant sur noyau Linux.\r\nRéalité augmentée.\r\n'),
(11, 'Fitbit', NULL, NULL, 'Dispo', 'Mobilité', 'Bracelet', 2, 'https://dyw7ncnq1en5l.cloudfront.net/optim/produits/653/31171/fitbit-alta_7239f3d953641aeb__450_400.png', 'Bracelet de suivis sportif, découvrez et suivez chaque jour, au poignet et sur l\'application Fitbit, votre nombre de pas, de minutes et d\'heures actives, d\'étages gravis, ainsi que votre distance parcourue et votre dépense calorique.'),
(12, 'Samsung Gear', NULL, NULL, 'Dispo', 'Mobilité', 'Montre', 2, 'https://s1.qwant.com/thumbr/0x0/9/b/109d0d1ffc95dbb3818278e7688240/b_1_q_0_p_0.jpg?u=http%3A%2F%2Fcdn1.tnwcdn.com%2Fwp-content%2Fblogs.dir%2F1%2Ffiles%2F2014%2F02%2F08-Gear-2-orange-2.jpg&q=0&b=1&p=0&a=1', 'La Samsung Galaxy Gear est une smartwatch (montre connectée) développée par Samsung Electronics et dévoilée lors de l\'événement Unpacked 2013, au Tempodrom de Berlin. Elle est prévue pour être utilisée avec un appareil compatible, essentiellement les appareils de la gamme Samsung Galaxy tournant au minimum sous Android 4.3.'),
(13, 'Iphone 4S', NULL, NULL, 'Dispo', 'Mobilité', 'Smartphone', 2, 'http://www.izcomputer.fr/wp-content/uploads/2016/11/topic_iphone_4s.png', 'L\'iPhone 4S, est un modèle de la 5e génération d\'iPhone, de la société Apple. L\'iPhone 4s est le premier modèle à intégrer Siri, l\'assistant vocal d\'Apple. Il intègre une puce Apple A5. Il existe en version noire et blanche.'),
(14, 'HTC Surround', NULL, NULL, 'Dispo', 'Mobilité', 'Smartphone', 2, 'https://images.anandtech.com/doci/4015/Surround--9057.jpg', 'Le HTC Surround est un smartphone Monocoeur sous Windows MS Phone 7 sortis en 2010.'),
(15, 'Lumia 435', NULL, NULL, 'Dispo', 'Mobilité', 'Smartphone', 2, 'https://dyw7ncnq1en5l.cloudfront.net/optim/produits/43/23569/microsoft-lumia-435_81f202eef43209bf__450_400.png', 'C\'est avec le Lumia 435 que Microsoft a décidé de répondre aux prix toujours plus bas pratiqués par les fabricants de smartphones Android. Ce modèle d\'entrée de gamme qui tourne sous Windows Phone 8.1 (Lumia Denim) propose logiquement des caractéristiques en rapport avec son positionnement.'),
(16, 'Asus Vivo Tab', NULL, NULL, 'Dispo', 'Mobilité', 'Tablette Hybride', 1, 'https://media.ldlc.com/ld/products/00/01/16/93/LD0001169394_2.jpg', 'La tablette ASUS Vivo Tab RT arbore un profil ultrafin, avec une épaisseur de 8,3 millimètres et un poids de 525 grammes. Elle intègre un processeur NVIDIA Tegra 3 à quatre cœurs, un GPU à 12 cœurs pour des graphismes de qualité ainsi qu\'une mémoire vive de 2 Go et un espace de stockage eMMC (mémoire flash) de 32 Go. Fournie avec le système d\'exploitation Windows RT (version ARM de Windows 8), la tablette Vivo Tab RT est un compagnon parfait pour le divertissement des utilisateurs.\r\n'),
(17, 'Intel Nuc', NULL, NULL, 'Dispo', 'PC', 'Barebone', 2, 'https://s2.qwant.com/thumbr/0x0/5/7/2d5dd311f2f00a7216107cee72570a/b_1_q_0_p_0.jpg?u=https%3A%2F%2Fwww.thurrott.com%2Fwp-content%2Fuploads%2F2016%2F03%2Fnuc-hero-2-1024x576.jpg&q=0&b=1&p=0&a=1', 'L\'Intel® NUC est un mini PC puissant de seulement 10 cm2, offrant des fonctions conçues pour le divertissement, les jeux vidéo et le travail. Il intègre une carte mère personnalisable pouvant accueillir les modules de mémoire, les unités de stockage et le système d\'exploitation de votre choix.'),
(18, 'Rasberry Camera 2', NULL, NULL, 'Dispo', 'Système embarqué', 'Capteur ', 2, 'http://farm2.staticflickr.com/1492/26626980356_d66a63e0ae_o.jpg', 'Passage de 5 à 8 mégapixels, la nouvelle Camera V2.1 Raspberry Pi a gagné un mégapixel par an depuis sa sortie il y a trois ans.  Il est possible de filmer en 1080p à 30 ips, en 720p à 60 ips et en 480p à 90 ips.');

-- --------------------------------------------------------

--
-- Structure de la table `requete`
--

CREATE TABLE `requete` (
  `statut_requete` varchar(30) NOT NULL,
  `id_emetteur` varchar(30) NOT NULL,
  `id_requete` int(4) NOT NULL,
  `id_pdt` int(11) NOT NULL,
  `nom_pdt` varchar(50) NOT NULL,
  `commentaires` longtext NOT NULL,
  `date_retour` varchar(20) NOT NULL,
  `nom_emetteur` varchar(30) NOT NULL,
  `prenom_emetteur` varchar(30) NOT NULL,
  `classe_emetteur` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(4) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `classe`, `mail`, `type`, `password`) VALUES
(1, 'Tuet', 'Alexandre', 'b1', 'alexandre.tuet@epsi.fr', 'admin', 'testmdp');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_pdt`);

--
-- Index pour la table `requete`
--
ALTER TABLE `requete`
  ADD PRIMARY KEY (`id_requete`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_pdt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `requete`
--
ALTER TABLE `requete`
  MODIFY `id_requete` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
