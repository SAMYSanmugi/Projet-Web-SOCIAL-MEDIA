-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 17 déc. 2023 à 16:00
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecein`
--

-- --------------------------------------------------------

--
-- Structure de la table `emplois`
--

DROP TABLE IF EXISTS `emplois`;
CREATE TABLE IF NOT EXISTS `emplois` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `nomentreprise` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `descriptionE` text NOT NULL,
  `descriptionP` text NOT NULL,
  `descriptionC` text NOT NULL,
  `categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `emplois`
--

INSERT INTO `emplois` (`id`, `image`, `titre`, `nomentreprise`, `adresse`, `descriptionE`, `descriptionP`, `descriptionC`, `categorie`) VALUES
(1, 'emplois/Orange_logo.svg.png', 'Consultant.e Système et Cloud F/H', 'Orange', 'Châtillon, Île-de-France, France', '<dd>Spécialiste du développement et de la transformation des opérateurs Télécoms et acteurs institutionnels, de la réflexion stratégique à la mise en oeuvre opérationnelle, le groupe Sofrecom est un puissant réseau d\'expertises au service de ses clients (Groupe Orange et opérateurs non concurrents, régulateurs et gouvernements en Europe, Afrique, Asie et Moyen Orient).\r\n\r\n					<dd>Riche de plus de 1 800 consultant-e-s issus de plus de 30 nationalités, le Groupe Sofrecom est implanté dans 10 pays.</dd>\r\n\r\n					<dd>Au sein de Sofrecom, l\'unité d\'affaires « ITN » (Information Technology and Networks) se positionne pour assister et conseiller des opérateurs ou de grandes entreprises en France ou à l\'étranger au développement de leurs infrastructures ITN.</dd>', '<dd>De formation BAC+3 en informatique, vous êtes à la recherche d\'un stage ?</dd>\r\n\r\n					<dd>De formation ingénieur, vous êtes passionné par votre métier</dd>\r\n\r\n					<dd>Vous communiquez et coopérez avec les équipes de Build, de Run, les experts chez le client, les collègues Sofrecom ou Groupe Orange et avec la hiérarchie du projet</dd>', '<li>Vous avez une expertise sur une ou plusieurs technologies système, virtualisation et Cloud</li>\r\n						<li>Vous connaissez les fonctionnalités des infrastructures IT et/ou Cloud</li>\r\n						<li>Vous maîtrisez les outils DevOps / SRE</li>\r\n						<li>Des connaissances, expériences ou certifications dans les domaines suivants : Réseau ; Sécurité ; Déploiement/exploitation ; Approches agiles</li>', 'apprentissage'),
(2, 'emplois/THALES.png', 'Stage support informatique (1 mois)', 'THALES', 'Gennevilliers,île-de-france,France', '<dd>Thales propose des systèmes d’information et de communication sécurisés et interopérables pour les forces armées, les forces de sécurité et les opérateurs d’importance vitale. Ces activités, qui regroupent radiocommunications, réseaux, systèmes de protection, systèmes d’information critiques et cybersécurité, répondent aux besoins de marchés où l’utilisation des nouvelles technologies numériques est déterminante. Thales intervient tout au long de la chaîne de valeur, des équipements aux systèmes en passant par le soutien logistique et les services associés.</dd>\r\n\r\n					<dd>Le site de Gennevilliers est le cœur des activités de conception, et de développement et de soutien des produits et solutions de radiocommunications des Armées, des systèmes de réseaux d’infrastructures résilients et de communications par satellite, et ainsi que des solutions de cybersécurité.</dd>', '<dd>De formation BAC+3 en informatique, vous êtes à la recherche d\'un stage ?</dd>\r\n\r\n					<dd>Vous êtes autonome , créatif, force de proposition ?</dd>\r\n\r\n					<dd>Vous avez un bon esprit d\'analyse ?</dd>', '<li>Python</li>\r\n						<li>Langage de base de données (SQL)</li>', 'stage'),
(3, 'emplois/airbus.png', 'Stage en Organisation Design et Management (f/h)', 'Airbus', 'Toulouse, Occitanie, France', '<dd>Et si votre aventure professionnelle commençait avec Airbus !</dd>\r\n\r\n					<dd>Vous recherchez un stage de fin d’année ou intégré dans une année de césure vous permettant de valider votre diplôme? Nous vous proposons de travailler dans une entreprise leader mondial dans son domaine, tournée vers le digital, à la pointe de la recherche et de l’innovation!</dd>\r\n\r\n					<dd>Nous avons une opportunité passionnante à vous proposer.</dd>\r\n\r\n					<dd>Vous aurez la chance de travailler au sein d\'une entreprise leader mondiale dans son domaine, résolument tournée vers le digital et à la pointe de la recherche et de l\'innovation.</dd>\r\n\r\n					<dd>Une offre de stage intitulée « Stage en Organisation Design et Management (f/h) » vient de s\'ouvrir au sein de Airbus Commercial sur son site de Blagnac - Wing Campus. Vous rejoindrez une équipe Multi Fonctionnelle en charge d\'Organisation Design et Organisation Management au sein de la fonction Human Resources.</dd>\r\n\r\n					<dd>Organisation Design est une discipline qui consiste à structurer une organisation pour qu\'elle devienne plus efficace et adaptable dans la réalisation des objectifs de l\'entreprise en renforçant la coopération et la simplification.</dd>\r\n\r\n					<dd>Votre stage consistera à définir et implémenter des mesures de l’efficacité d’une organisation ainsi que la qualité de son déploiement.</dd>\r\n\r\n					<dd>Idéalement, ce stage d’une durée de 6 mois commencera en Fevrier 2024.</dd>\r\n\r\n					<dd>(la période est communiquée à titre indicatif, et pourra être revue).</dd>', '<dd>Vous préparez actuellement un diplôme de niveau Bac +5 (ou équivalent) dans le domaine de l’informatique et Gestion ou une discipline apparentée?</dd>', '<li>Anglais: Niveau Courant,</li>\r\n						<li>Français: Niveau Courant.</li>', 'CDI'),
(4, 'emplois/EDF-Logo.png', 'Stage déploiement d\'un outil d\'automatisation du traitement des incidents de sécurité (SOAR) F/H', 'EDF', 'Nanterre, Île-de-France, France', '<dd>Le monde de l’IT et des nouvelles technologies vous intéresse ?</dd>\r\n\r\n					<dd>Contribuer à la réussite de la transformation digitale et numérique du Groupe EDF vous plairait ?</dd>\r\n\r\n					<dd>Et travailler en mode collaboratif dans des espaces de travail innovants, inspirants et épanouissants ?</dd>\r\n\r\n					<dd>C’est ce que nous vous proposons en rejoignant une équipe dynamique, agile et passionnée !</dd>\r\n\r\n					<dd>La Direction IT-O exploite, maintient en bon état de fonctionnement, et fait évoluer de manière agile et innovante les infrastructures communes du système d\'information du Groupe EDF, et les applications de ses clients (directions d\'EDF SA et filiales).</dd>\r\n\r\n					<dd>Au sein de IT-O, le Département CyberDefense (CD) a en charge les infrastructures et services liés à l\'interconnexion des réseaux et à la cybersécurité de l\'entreprise.</dd>\r\n\r\n					<dd>Vous rejoindrez, dans le département CyberDefense, le groupe SOC D&R.</dd>', '<dd>Spécialité et options souhaitées : Ingénieur généraliste, spécialisation informatique / sécurité</dd>', '<li>Compétences techniques / métiers</li>\r\n						<li>Bonnes connaissances en infrastructures et sécurités des systèmes et des réseaux</li>\r\n						<li>Bonne connaissance des systèmes Windows et Linux</li>\r\n						<li>Bonne connaissance d’au moins un langage de Scripting (Python, PowerShell…)</li>\r\n						<li>Programmation orientée objet</li>\r\n						<li>Culture Cybersécurité</li>', 'CDD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
