-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.16-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para project_lojacorr
CREATE DATABASE IF NOT EXISTS `project_lojacorr` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `project_lojacorr`;

-- Copiando estrutura para tabela project_lojacorr.states
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uf` varchar(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela project_lojacorr.states: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` (`id`, `uf`, `name`) VALUES
	(1, 'AC', 'Acre'),
	(2, 'AL', 'Alagoas'),
	(3, 'AP', 'Amapá'),
	(4, 'AM', 'Amazonas'),
	(5, 'BA', 'Bahia'),
	(6, 'CE', 'Ceará'),
	(7, 'DF', 'Distrito Federal'),
	(8, 'ES', 'Espírito Santo'),
	(9, 'GO', 'Goiás'),
	(10, 'MA', 'Maranhão'),
	(11, 'MT', 'Mato Grosso'),
	(12, 'MS', 'Mato Grosso do Sul'),
	(13, 'MG', 'Minas Gerais'),
	(14, 'PA', 'Pará'),
	(15, 'PB', 'Paraíba'),
	(16, 'PR', 'Paraná'),
	(17, 'PE', 'Pernambuco'),
	(18, 'PI', 'Piauí'),
	(19, 'RJ', 'Rio de Janeiro'),
	(20, 'RN', 'Rio Grande do Norte'),
	(21, 'RS', 'Rio Grande do Sul'),
	(22, 'RO', 'Rondônia'),
	(23, 'RR', 'Roraima'),
	(24, 'SC', 'Santa Catarina'),
	(25, 'SP', 'São Paulo'),
	(26, 'SE', 'Sergipe'),
	(27, 'TO', 'Tocantins');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;

-- Copiando estrutura para tabela project_lojacorr.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL COMMENT 'Nome',
  `email` varchar(500) DEFAULT NULL COMMENT 'Email',
  `zip_code` varchar(9) DEFAULT NULL COMMENT 'CEP',
  `public_place` varchar(500) DEFAULT NULL COMMENT 'Logradouro/Rua',
  `district` varchar(500) DEFAULT NULL COMMENT 'Bairro',
  `city` varchar(500) DEFAULT NULL COMMENT 'Cidade',
  `state` varchar(2) DEFAULT NULL COMMENT 'Estado',
  `number` varchar(4) DEFAULT NULL COMMENT 'Número',
  `password` varchar(500) DEFAULT NULL COMMENT 'Senha',
  `remember_token` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela project_lojacorr.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela project_lojacorr.user_columns
CREATE TABLE IF NOT EXISTS `user_columns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `nome` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela project_lojacorr.user_columns: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `user_columns` DISABLE KEYS */;
INSERT INTO `user_columns` (`id`, `name`, `nome`) VALUES
	(1, 'name', 'Nome'),
	(2, 'email', 'Email'),
	(3, 'zip_code', 'CEP'),
	(4, 'public_place', 'Logradouro'),
	(5, 'district', 'Bairro'),
	(6, 'city', 'Cidade'),
	(7, 'state', 'Estado'),
	(8, 'number', 'Número');
/*!40000 ALTER TABLE `user_columns` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
