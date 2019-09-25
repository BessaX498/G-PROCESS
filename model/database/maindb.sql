-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.3.15-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para maindb
CREATE DATABASE IF NOT EXISTS `maindb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `maindb`;

-- Copiando estrutura para tabela maindb.functionality
CREATE TABLE IF NOT EXISTS `functionality` (
  `id` int(11) NOT NULL,
  `idsprint` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `priority` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `functionalitycol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idsprint_idx` (`idsprint`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela maindb.functionality: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `functionality` DISABLE KEYS */;
/*!40000 ALTER TABLE `functionality` ENABLE KEYS */;

-- Copiando estrutura para tabela maindb.mission
CREATE TABLE IF NOT EXISTS `mission` (
  `id` int(11) NOT NULL,
  `idphase` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `partners` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idphase_idx` (`idphase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela maindb.mission: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mission` DISABLE KEYS */;
/*!40000 ALTER TABLE `mission` ENABLE KEYS */;

-- Copiando estrutura para tabela maindb.phase
CREATE TABLE IF NOT EXISTS `phase` (
  `id` int(11) NOT NULL,
  `idproject` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `attachment` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idproject_idx` (`idproject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela maindb.phase: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `phase` DISABLE KEYS */;
/*!40000 ALTER TABLE `phase` ENABLE KEYS */;

-- Copiando estrutura para tabela maindb.project
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `partners` varchar(60) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `method_type` varchar(45) DEFAULT NULL,
  `method` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_iduser_idx` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela maindb.project: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
/*!40000 ALTER TABLE `project` ENABLE KEYS */;

-- Copiando estrutura para tabela maindb.scrum
CREATE TABLE IF NOT EXISTS `scrum` (
  `id` int(11) NOT NULL,
  `idproject` int(11) DEFAULT NULL,
  `product_owner` varchar(45) DEFAULT NULL,
  `scrum_master` varchar(45) DEFAULT NULL,
  `sprint_amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ìdproject_idx` (`idproject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela maindb.scrum: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `scrum` DISABLE KEYS */;
/*!40000 ALTER TABLE `scrum` ENABLE KEYS */;

-- Copiando estrutura para tabela maindb.sprint
CREATE TABLE IF NOT EXISTS `sprint` (
  `id` int(11) NOT NULL,
  `idscrum` int(11) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idscrum_idx` (`idscrum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela maindb.sprint: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sprint` DISABLE KEYS */;
/*!40000 ALTER TABLE `sprint` ENABLE KEYS */;

-- Copiando estrutura para tabela maindb.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `number_phone` int(11) DEFAULT 0,
  `email` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela maindb.user: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `name`, `login`, `password`, `number_phone`, `email`) VALUES
	(1, 'HENRICK DE SOUSA NOGUEIRA', 'henrick@123', '8ce4b9070698b32a73a3d82413497359', 980877929, 'ricknogueira1231@gmail.com'),
	(2, 'Igor de Sousa Nogueira', 'igor@123', 'bd487cf43f6af956a6e9842ac8deeac5', 111111111, 'igor.nogueira@gmail.com'),
	(3, 'Wanessa Pinto Campos', 'wanessa@123', 'f22a5be545ff0aa9de0169b08f9d3ae4', 222222222, 'wanessacampos1997@gmail.com'),
	(4, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 333333333, 'admin@admin.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
