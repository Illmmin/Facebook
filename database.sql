CREATE OR REPLACE DATABASE  `facebook`;
USE facebook;

CREATE TABLE IF NOT EXISTS `User` (
  `idCandidat` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mail_numero` varchar(100) NOT NULL,
  `mail` int(1) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `dateNaissance` date NOT NULL,
  `genre` text NOT NULL
  )


