
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 13/06/2016 às 19:08:47
-- Versão do Servidor: 10.0.20-MariaDB
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `u478662225_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `cod_pes` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pes` varchar(40) NOT NULL,
  `email_pes` varchar(40) NOT NULL,
  `tel_pes` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`cod_pes`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`cod_pes`, `nome_pes`, `email_pes`, `tel_pes`) VALUES
(30, 'Mota Machado', 'motamachado@hotmail.com', '(85) 98447-4455'),
(8, 'Jylson Luiz', 'jyh@gmail.com', '(82) 99887-7446'),
(28, 'Juca Medeiros', 'jucamed99@yahoo.com', '(88) 98995-9595'),
(26, 'Joaquim Rabelo', 'joaquim@gmail.com', '(85) 98989-8989'),
(31, 'Juliana Garcia', 'jugarcia@yahoo.com', '(88) 99998-4200'),
(22, 'Henrique Sales', 'herique@outlook.com', '(85) 98989-8989'),
(29, 'Marcos César Moreira', 'mcm@gmail.com', '(85) 97979-7474'),
(19, 'Ronaldo Vainfas', 'ronaldo@yahoo.com.br', '(88) 97777-7777'),
(27, 'Maria Alice dos Santos', 'maralice@outlook.com', '(85) 98884-7444'),
(24, 'Ulisses Costa', 'ulisses@gmail.com', '(85) 99898-5121'),
(32, 'Armando Sales Nogueira', 'armando@hotmail.com', '(85) 98856-5845'),
(33, 'Estevam Rodrigues', 'estrodrig@outlook.com', '(82) 99999-9991'),
(34, 'Mateus Neves', 'mateusnev123@gmail.com', '(88) 98989-8989'),
(35, 'Yuri Sales Lemos', 'yurisales@hotmail.com', '(85) 98999-9494'),
(36, 'Ricardo Wagner Sousa', 'wsousa@gmail.com', '(21) 99889-9944'),
(37, 'Marcia Ribeiro Nunes', 'marcia@gmail.com', '(85) 98888-7710'),
(38, 'Samanta Marques', 'samarques@outlook.com', '(85) 97789-9158'),
(39, 'Mônica Abelardo', 'monica@gmail.com', '(85) 99201-4566'),
(40, 'Rodrigo Maia', 'rodmaia58@hotmail.com', '(85) 98999-9999'),
(41, 'Bianca Nogueira', 'bnogueira@yahoo.com', '(85) 98885-8812');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
