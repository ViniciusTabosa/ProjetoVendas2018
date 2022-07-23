-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para dbvendas
CREATE DATABASE IF NOT EXISTS `dbvendas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbvendas`;

-- Copiando estrutura para tabela dbvendas.tbcliente
CREATE TABLE IF NOT EXISTS `tbcliente` (
  `codCli` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `fone` varchar(20) NOT NULL,
  `rg` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `endereco` varchar(120) NOT NULL,
  PRIMARY KEY (`codCli`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbvendas.tbcliente: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tbcliente` DISABLE KEYS */;
INSERT INTO `tbcliente` (`codCli`, `nome`, `nascimento`, `fone`, `rg`, `cpf`, `endereco`) VALUES
	(2, 'William', '2018-04-25', '88992995201', '123456743.12', '476.323-12', 'Avenida de Paulo Pessoa');
/*!40000 ALTER TABLE `tbcliente` ENABLE KEYS */;

-- Copiando estrutura para tabela dbvendas.tbcompras
CREATE TABLE IF NOT EXISTS `tbcompras` (
  `codCompra` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `codFornercedor` int(3) unsigned DEFAULT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `codUsu` int(3) unsigned DEFAULT NULL,
  `total` double(9,2) NOT NULL,
  PRIMARY KEY (`codCompra`),
  KEY `codFornercedor` (`codFornercedor`),
  KEY `codUsu` (`codUsu`),
  CONSTRAINT `codFornercedor` FOREIGN KEY (`codFornercedor`) REFERENCES `tbfornecedores` (`codfor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `codUsu` FOREIGN KEY (`codUsu`) REFERENCES `tbusuario` (`codUsu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbvendas.tbcompras: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbcompras` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbcompras` ENABLE KEYS */;

-- Copiando estrutura para tabela dbvendas.tbfornecedores
CREATE TABLE IF NOT EXISTS `tbfornecedores` (
  `codfor` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `fone` varchar(20) NOT NULL,
  PRIMARY KEY (`codfor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbvendas.tbfornecedores: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tbfornecedores` DISABLE KEYS */;
INSERT INTO `tbfornecedores` (`codfor`, `nome`, `cnpj`, `endereco`, `fone`) VALUES
	(2, 'Zenir', '123445', 'Cohab 2', '88923456578');
/*!40000 ALTER TABLE `tbfornecedores` ENABLE KEYS */;

-- Copiando estrutura para tabela dbvendas.tbitemcompra
CREATE TABLE IF NOT EXISTS `tbitemcompra` (
  `coditemCompra` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `codCompra` int(3) unsigned DEFAULT NULL,
  `codPro` int(3) unsigned DEFAULT NULL,
  `qtd` int(3) NOT NULL,
  PRIMARY KEY (`coditemCompra`),
  KEY `codCompra` (`codCompra`),
  KEY `codPro` (`codPro`),
  CONSTRAINT `codCompra` FOREIGN KEY (`codCompra`) REFERENCES `tbcompras` (`codCompra`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `codPro` FOREIGN KEY (`codPro`) REFERENCES `tbproduto` (`codPro`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbvendas.tbitemcompra: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbitemcompra` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbitemcompra` ENABLE KEYS */;

-- Copiando estrutura para tabela dbvendas.tbitemvenda
CREATE TABLE IF NOT EXISTS `tbitemvenda` (
  `coditemVenda` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `codVen` int(3) unsigned DEFAULT NULL,
  `codPro` int(3) unsigned DEFAULT NULL,
  `qtd` int(4) DEFAULT NULL,
  PRIMARY KEY (`coditemVenda`),
  KEY `codPro1` (`codPro`),
  KEY `codVen` (`codVen`),
  CONSTRAINT `codPro1` FOREIGN KEY (`codPro`) REFERENCES `tbproduto` (`codPro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `codVen` FOREIGN KEY (`codVen`) REFERENCES `tbvenda` (`codVen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbvendas.tbitemvenda: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbitemvenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbitemvenda` ENABLE KEYS */;

-- Copiando estrutura para tabela dbvendas.tbproduto
CREATE TABLE IF NOT EXISTS `tbproduto` (
  `codPro` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `codFor` int(3) unsigned DEFAULT NULL,
  `descricao` varchar(30) NOT NULL,
  `unidade` varchar(15) DEFAULT NULL,
  `precoCusto` double(9,2) NOT NULL,
  `precoVenda` double(9,2) NOT NULL,
  `estoque` int(5) NOT NULL,
  PRIMARY KEY (`codPro`),
  KEY `codFornecedor` (`codFor`),
  CONSTRAINT `codFornecedor` FOREIGN KEY (`codFor`) REFERENCES `tbfornecedores` (`codfor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbvendas.tbproduto: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tbproduto` DISABLE KEYS */;
INSERT INTO `tbproduto` (`codPro`, `codFor`, `descricao`, `unidade`, `precoCusto`, `precoVenda`, `estoque`) VALUES
	(2, 2, 'TV-Smart', 'Unid', 1800.00, 2200.00, 100);
/*!40000 ALTER TABLE `tbproduto` ENABLE KEYS */;

-- Copiando estrutura para tabela dbvendas.tbusuario
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `codUsu` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`codUsu`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbvendas.tbusuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tbusuario` DISABLE KEYS */;
INSERT INTO `tbusuario` (`codUsu`, `nome`, `senha`, `email`) VALUES
	(1, 'admin', 'admin', 'asasas@a.com');
/*!40000 ALTER TABLE `tbusuario` ENABLE KEYS */;

-- Copiando estrutura para tabela dbvendas.tbvenda
CREATE TABLE IF NOT EXISTS `tbvenda` (
  `codVen` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `codCli` int(3) unsigned DEFAULT NULL,
  `codUsu` int(3) unsigned DEFAULT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `total` double(9,2) NOT NULL,
  PRIMARY KEY (`codVen`),
  KEY `codcli` (`codCli`),
  KEY `codusu1` (`codUsu`),
  CONSTRAINT `codcli` FOREIGN KEY (`codCli`) REFERENCES `tbcliente` (`codCli`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `codusu1` FOREIGN KEY (`codUsu`) REFERENCES `tbusuario` (`codUsu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela dbvendas.tbvenda: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbvenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbvenda` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
