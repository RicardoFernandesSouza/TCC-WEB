-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: 22-Set-2017 às 23:02
=======
-- Generation Time: 17-Ago-2017 às 01:32
>>>>>>> origin/master
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tohomecrud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `name`, `cpf_cnpj`, `mobile`, `email`, `username`, `password`) VALUES
(13, 'Ivan', '111.111.111-11', '11 11111-11111', 'ivan@professor', 'ivan', 'ivan'),
(14, 'Ricardo Fernandes de Souza', '222.222.222-22', '22 22222-22222', 'ricardo_fernandes.souza@hotmail.com', 'adm', 'adm'),
(16, 'LetÃ­cia Carolina', '333.333.333-33', '11 11111-11111', 'leticia.carolina@yahoo.com', 'carol', '123'),
(19, 'Teste', '444.444.444-44', '44 44444-44444', 'teste.com', 'tcc', 'qqq');

-- --------------------------------------------------------

--
-- Estrutura da tabela `etapa_cliente`
--

CREATE TABLE `etapa_cliente` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(14) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `etapa_resp`
--

CREATE TABLE `etapa_resp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `residencia`
--

CREATE TABLE `residencia` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `ie` int(11) NOT NULL,
  `begindate` date NOT NULL,
  `enddate` date NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idresp` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `residencia`
--

INSERT INTO `residencia` (`id`, `address`, `hood`, `zip_code`, `city`, `state`, `ie`, `begindate`, `enddate`, `idcliente`, `idresp`, `created`, `modified`) VALUES
<<<<<<< HEAD
(28, 'Rua Teste 2', 'Centro', 13320040, 'Salto', 'Sao Paulo', 0, '2017-06-05', '2017-06-15', 13, 2, '2017-06-05 19:17:50', '2017-09-19 20:13:17'),
(30, 'Teste android', 'centro', 123, 'fafaffa', 'tst', 0, '2017-09-20', '2017-09-22', 13, 1, '2017-09-01 18:20:18', '2017-09-01 18:20:18'),
(31, 'teste', 'ee', 0, 'e', 'e', 0, '2017-09-13', '2017-09-07', 13, 1, '2017-09-03 09:53:33', '2017-09-03 09:53:33'),
(32, 'aaaaa', 'ffffff323425365', 3243243, 'gffjf', '54', 5454, '2017-09-21', '2017-09-29', 19, 2, '2017-09-04 19:13:49', '2017-09-04 19:13:49'),
(34, '7 de Setembro', 'Centro', 13320, 'Salto', 'SÃ£o Paulo', 0, '2017-09-03', '2017-09-07', 19, 1, '2017-09-19 19:02:59', '2017-09-19 19:02:59'),
(39, 'combo', 'aa', 0, 'aa', 'a', 0, '2017-09-22', '2017-09-28', 16, 1, '2017-09-19 19:45:10', '2017-09-19 19:45:10'),
(40, 'COMBO COMPLETA', 'COMBO', 12345677, 'COMBO', 'SP', 0, '2017-09-29', '2017-09-30', 19, 2, '2017-09-19 19:47:48', '2017-09-19 19:47:48'),
(41, 'teste adriano combo', 'fafafa', 11111111, 'jajajaj', 'a', 0, '2017-09-28', '2017-09-30', 14, 2, '2017-09-19 19:56:15', '2017-09-19 19:56:15'),
(42, 'TESTE NOME MENU', 'AAA', 0, 'AAA', 'A', 0, '2017-09-29', '2017-09-30', 19, 2, '2017-09-20 17:19:48', '2017-09-20 17:19:48');
=======
(28, 'Rua Teste', 'Teste', 13320040, 'Salto', 'Sao Paulo', 0, '2017-06-05', '2017-06-15', 13, 1, '2017-06-05 19:17:50', '2017-08-15 17:05:06');
>>>>>>> origin/master

-- --------------------------------------------------------

--
-- Estrutura da tabela `resp`
--

CREATE TABLE `resp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resp`
--

INSERT INTO `resp` (`id`, `name`, `cpf_cnpj`, `email`, `mobile`, `username`, `password`) VALUES
(1, 'Ricardo Fernandes de Souza', '111.777.888-99', 'ricardo_fernandes.souza@hotmail.com', '90 00001-01010', 'ricardo', 'rica'),
(2, 'ADRIANO FIORE BORELLA', '12345678123', 'ADRIANO@TOHOME.COM.BR', '2147483647', 'adriano', 'lolo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_name`
--

CREATE TABLE `tbl_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_name`
--

<<<<<<< HEAD
INSERT INTO `tbl_name` (`id`, `name`, `details`, `id_residencia`, `status`) VALUES
(47, 'Etapa 1', 'ETAPA DO CLIENTE', 30, 'N'),
(48, 'Etapa 1', 'teste', 31, 'N'),
(49, 'Etapa 2', 'teste tcc', 31, 'N'),
(50, 'Etapa 1', 'descriÃ§Ã£o', 32, 'N'),
(52, 'Etapa 1', 'Consultar Banco', 28, 'N'),
(53, 'Etapa 2', 'Fazer cadastro', 28, 'N'),
(54, 'Etapa 3', 'Terminar o TCC', 28, 'S'),
(55, 'Etapa 4', 'Teste', 28, 'S');
=======
INSERT INTO `tbl_name` (`id`, `name`, `details`, `id_residencia`) VALUES
(47, 'Etapa 1', 'aeaweaw', 30),
(48, 'Etapa 1', 'teste', 31),
(49, 'Etapa 2', 'teste tcc', 31),
(50, 'Etapa 1', 'descriÃ§Ã£o', 32),
(51, 'Etapa 1', 'MudanÃ§a', 28),
(52, 'Etapa 2', '76767676767', 28),
(53, 'Etapa 1', 'Fazer cadastro', 28),
(54, 'Etapa 2', 'Terminar o TCC', 28);
>>>>>>> origin/master

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_name1`
--

CREATE TABLE `tbl_name1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_name1`
--

<<<<<<< HEAD
INSERT INTO `tbl_name1` (`id`, `name`, `details`, `id_residencia`, `status`) VALUES
(1, 'Etapa x', 'ETAPA DO RESPONSÃVEL', 30, 'S'),
(2, 'Etapa x', 'Teste', 31, 'N'),
(3, 'etapa x', 'aaaaa', 32, 'N'),
(4, 'etapa y', 'bbbbb', 32, 'N'),
(5, 'Etapa 1 CERTO', 'Rest API', 28, 'S'),
(6, 'Etapa 2', 'Terminar APP', 28, 'S'),
(7, 'Etapa 1', 'Teste do banco \"N\" no status', 28, 'N'),
(8, 'Etapa 1', '12345', 28, 'N'),
(9, 'Etapa 2', 'fafafaf', 28, 'S');
=======
INSERT INTO `tbl_name1` (`id`, `name`, `details`, `id_residencia`) VALUES
(1, 'Etapa x', 'xxcffddeed', 30),
(2, 'Etapa x', 'Teste', 31),
(3, 'etapa x', 'aaaaa', 32),
(4, 'etapa y', 'bbbbb', 32),
(5, 'Etapa 1', 'Rest API', 28),
(6, 'Etapa 2', 'Terminar APP', 28);
>>>>>>> origin/master

-- --------------------------------------------------------

--
-- Estrutura da tabela `useradmr`
--

CREATE TABLE `useradmr` (
  `id` int(11) NOT NULL,
  `first` varchar(128) NOT NULL,
  `last` varchar(128) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `useradmr`
--

INSERT INTO `useradmr` (`id`, `first`, `last`, `uid`, `pwd`) VALUES
(1, 'Ricardo', 'Fernandes de Souza', 'admin', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visita`
--

CREATE TABLE `visita` (
  `pid` int(11) NOT NULL,
  `datav` varchar(100) NOT NULL,
  `idresi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `visita`
--

INSERT INTO `visita` (`pid`, `datav`, `idresi`) VALUES
(9, 'Visita na Obra: 5/9/2017\nHorario: 0:00', 28),
(10, 'Visita na Obra: 21/9/2017\nHorario: 9:16', 28),
(11, 'Visita na Obra: 6/9/2017\nHorario: 0:00', 28),
(12, 'Visita na Obra: 17/4/2017\nHorario: 21:29', 30),
(13, 'Visita na Obra: 20/9/2017\nHorario: 5:00', 28),
(14, 'Visita na Obra: 29/9/2017\nHorario: 4:34', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etapa_cliente`
--
ALTER TABLE `etapa_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_etapa_cliente_residencia` (`id_residencia`);

--
-- Indexes for table `etapa_resp`
--
ALTER TABLE `etapa_resp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_etapa_resp_residencia` (`id_residencia`);

--
-- Indexes for table `residencia`
--
ALTER TABLE `residencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`idcliente`),
  ADD KEY `resp` (`idresp`);

--
-- Indexes for table `resp`
--
ALTER TABLE `resp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_name`
--
ALTER TABLE `tbl_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_name1`
--
ALTER TABLE `tbl_name1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useradmr`
--
ALTER TABLE `useradmr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `etapa_cliente`
--
ALTER TABLE `etapa_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `etapa_resp`
--
ALTER TABLE `etapa_resp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `residencia`
--
ALTER TABLE `residencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `resp`
--
ALTER TABLE `resp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_name`
--
ALTER TABLE `tbl_name`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
>>>>>>> origin/master
--
-- AUTO_INCREMENT for table `tbl_name1`
--
ALTER TABLE `tbl_name1`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `visita`
--
ALTER TABLE `visita`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
>>>>>>> origin/master
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `etapa_cliente`
--
ALTER TABLE `etapa_cliente`
  ADD CONSTRAINT `fk_etapa_cliente_residencia` FOREIGN KEY (`id_residencia`) REFERENCES `residencia` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `etapa_resp`
--
ALTER TABLE `etapa_resp`
  ADD CONSTRAINT `fk_etapa_resp_residencia` FOREIGN KEY (`id_residencia`) REFERENCES `residencia` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `residencia`
--
ALTER TABLE `residencia`
  ADD CONSTRAINT `cliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `resp` FOREIGN KEY (`idresp`) REFERENCES `resp` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
