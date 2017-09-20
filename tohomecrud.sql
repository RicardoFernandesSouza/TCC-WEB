-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2017 às 01:32
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
  `cpf_cnpj` varchar(14) NOT NULL,
  `mobile` int(13) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `name`, `cpf_cnpj`, `mobile`, `email`, `username`, `password`) VALUES
(13, 'Ivan', '56776534556', 90908888, 'ivan@professor', 'ivan', 'ivan'),
(14, 'Ricardo Fernandes de Souza', '39672792876', 995420037, 'ricardo_fernandes.souza@hotmail.com', 'adm', 'adm'),
(16, 'LetÃ­cia Carolina', '33322211112', 949664886, 'leticia.carolina@yahoo.com', 'carol', '123'),
(19, 'Teste', '11122233312', 12123434, 'teste.com', 'tcc', 'qqq');

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
(28, 'Rua Teste', 'Teste', 13320040, 'Salto', 'Sao Paulo', 0, '2017-06-05', '2017-06-15', 13, 1, '2017-06-05 19:17:50', '2017-08-15 17:05:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resp`
--

CREATE TABLE `resp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` int(13) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resp`
--

INSERT INTO `resp` (`id`, `name`, `cpf_cnpj`, `email`, `mobile`, `username`, `password`) VALUES
(1, 'Ricardo Fernandes de Souza e ADRIANO', '111.111.111-67', 'ricardo_fernandes.souza@hotmail.com', 2147483647, 'RespRicardo', '123456'),
(3, 'Adriano Fiore Borella', '67887667890', 'adriano.borella@hotmail.com', 9877890, 'afafa', 'adada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_name`
--

CREATE TABLE `tbl_name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `id_residencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_name`
--

INSERT INTO `tbl_name` (`id`, `name`, `details`, `id_residencia`) VALUES
(47, 'Etapa 1', 'aeaweaw', 30),
(48, 'Etapa 1', 'teste', 31),
(49, 'Etapa 2', 'teste tcc', 31),
(50, 'Etapa 1', 'descriÃ§Ã£o', 32),
(51, 'Etapa 1', 'MudanÃ§a', 28),
(52, 'Etapa 2', '76767676767', 28),
(53, 'Etapa 1', 'Fazer cadastro', 28),
(54, 'Etapa 2', 'Terminar o TCC', 28);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_name1`
--

CREATE TABLE `tbl_name1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `id_residencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_name1`
--

INSERT INTO `tbl_name1` (`id`, `name`, `details`, `id_residencia`) VALUES
(1, 'Etapa x', 'xxcffddeed', 30),
(2, 'Etapa x', 'Teste', 31),
(3, 'etapa x', 'aaaaa', 32),
(4, 'etapa y', 'bbbbb', 32),
(5, 'Etapa 1', 'Rest API', 28),
(6, 'Etapa 2', 'Terminar APP', 28);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `resp`
--
ALTER TABLE `resp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_name`
--
ALTER TABLE `tbl_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tbl_name1`
--
ALTER TABLE `tbl_name1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
