-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Dez-2019 às 12:02
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benmax`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(86) NOT NULL,
  `comentario` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visivel` varchar(10) NOT NULL,
  `titulo_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `foto`, `nome`, `email`, `comentario`, `created`, `visivel`, `titulo_img`) VALUES
(4, '26_img', 'Jorge', 'client@test', 'uau legal', '2019-12-08 02:01:46', '0', ''),
(5, '30_img', 'Benmaximiliano', 'ben@cli', 'zafeagerhyerygeryg', '2019-12-10 02:17:36', '0', ''),
(6, '30_img', 'Benmaximiliano', 'ben@cli', 'agaegaegaeg', '2019-12-10 02:19:37', '0', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzz'),
(7, '30_img', 'Benmaximiliano', 'ben@cli', 'rrgewrger', '2019-12-10 02:21:04', '0', 'zxzxzxxzzxzxzxxzzxzx'),
(8, '30_img', 'Benmaximiliano', 'ben@cli', 'thjrtjurtuj', '2019-12-10 02:22:21', '0', 'zaaazazzazaz'),
(9, '30_img', 'Benmaximiliano', 'ben@cli', 'rhwhetyweryt', '2019-12-10 02:23:22', '0', 'zxzxzxzxzxzxzxzxzxzxzxzx'),
(10, '30_img', 'Benmaximiliano', 'ben@cli', 'dsgshwh', '2019-12-10 02:24:51', '1', 'zxzzxzxzxxzxzzxxz'),
(11, '30_img', 'Benmaximiliano', 'ben@cli', 'asfrwgrwehre', '2019-12-10 02:29:39', '0', 'zxxzzxzxzxzxxz'),
(12, '30_img', 'Benmaximiliano', 'ben@cli', 'ahgstjurweut4tu', '2019-12-10 02:40:28', '1', 'zarapitongas'),
(13, '30_img', 'Benmaximiliano', 'ben@cli', 'aegrwhrh', '2019-12-10 02:58:41', '1', 'ZARABATANAMALUCA'),
(14, '30_img', 'Benmaximiliano', 'ben@cli', 'nossa que bacana', '2019-12-10 03:25:07', '1', '10122019_042231');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` int(11) NOT NULL,
  `titulo_aviso` varchar(80) NOT NULL,
  `aviso` varchar(120) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usu` varchar(300) NOT NULL,
  `nome` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `titulo_aviso`, `aviso`, `created`, `id_usu`, `nome`) VALUES
(3, 'shfwrsyh', 'ywrwreywry', '2019-12-07 21:28:22', '24', 'benmax');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `link` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `link`) VALUES
(1, 'Todos serviços prestados com qualidade e excelência !', '#galeria'),
(2, 'Venha conferir os preços de nossos Serviços e Corra pra cá !', '#serviço');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fazemos`
--

CREATE TABLE `fazemos` (
  `id` int(11) NOT NULL,
  `icone` varchar(85) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `detalhes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fazemos`
--

INSERT INTO `fazemos` (`id`, `icone`, `titulo`, `detalhes`) VALUES
(1, '<i class=\"fas fa-cut amber-text fa-3x animated pulse infinite\">', 'Cortes de Cabelo Estilo', 'Nada melhor que dar um trato no cabelo, cortar o excesso ou fazer um novo penteado.'),
(2, '<i class=\"fab fa-jenkins amber-text fa-3x animated pulse infinite\">', 'Desenho e Modelagem da Barba', 'Aparamos, cortamos, desenhamos e modelamos a barba do cliente seguindo seus gostos.'),
(3, '<i class=\"fas fa-mortar-pestle amber-text fa-3x animated pulse infinite\">', 'Luzes no Cabelo', 'Aplicamos luzes para clarear e iluminar os cabelos, dando um toque de estilo.'),
(4, '<i class=\"fas fa-spray-can amber-text fa-3x animated pulse infinite\">', 'Tintura e Pigmentação da Barba', 'Aplicamos tintura e pigmentação na barba para deixa-la mais viva e bonita.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `feitos`
--

CREATE TABLE `feitos` (
  `id` int(11) NOT NULL,
  `fnome` varchar(400) NOT NULL,
  `fpreco` varchar(400) NOT NULL,
  `ffeitos` varchar(400) NOT NULL,
  `fdata` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `feitos`
--

INSERT INTO `feitos` (`id`, `fnome`, `fpreco`, `ffeitos`, `fdata`) VALUES
(34, 'Luzes', '150', '5', '12-12-2019'),
(35, 'Relaxamento', '180', '6', '13-12-2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `titulo_img` varchar(50) NOT NULL,
  `id_usu` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `nome`, `titulo_img`, `id_usu`) VALUES
(4, 'benmax', '05122019_134421_galeria', ''),
(5, 'benmax', '05122019_134441_galeria', ''),
(6, 'benmax', '05122019_134456_galeria', ''),
(7, 'benmax', '05122019_134541_galeria', ''),
(9, 'benmax', '05122019_134654_galeria', ''),
(12, 'benmax', '05122019_135512_galeria', ''),
(15, 'benmax', '05122019_135755_galeria', ''),
(16, 'benmax', '05122019_135920_galeria', ''),
(18, 'benmax', '05122019_140142_galeria', ''),
(19, 'benmax', '05122019_140203_galeria', ''),
(20, 'benmax', '05122019_140230_galeria', ''),
(21, 'benmax', '05122019_140243_galeria', ''),
(22, 'benmax', '05122019_140426_galeria', ''),
(26, 'benmax', '05122019_140902_galeria', ''),
(32, 'benmax', '05122019_142010_galeria', ''),
(33, 'Ribamar ribeiro', '07122019_210631_galeria', ''),
(34, 'benmax', '07122019_211451_galeria', '24'),
(35, 'benmax', '09122019_233829_galeria', '24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `detalhes` varchar(80) NOT NULL,
  `icone` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `titulo`, `detalhes`, `icone`) VALUES
(1, '+55 (11) 98023-9587', 'Entre em contato pelo Whatsapp', '<i class=\"fas fa-phone amber-text\">'),
(2, 'Jardim Palmira, Guarulhos', 'R. Glauco Antônio Galli, 620.', '<i class=\"fas fa-map-marked-alt amber-text\">'),
(3, 'Abrimos de Segunda a Sexta', '8:00am - 9:00pm', '<i class=\"far fa-calendar-alt amber-text\">');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_contatos`
--

CREATE TABLE `mensagens_contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `assunto` varchar(220) NOT NULL,
  `mensagem` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens_contatos`
--

INSERT INTO `mensagens_contatos` (`id`, `nome`, `email`, `assunto`, `mensagem`, `created`, `modified`) VALUES
(5, 'ahfsth', 'srthujrtuhf@rhrejtytj', 'ghjyjtdy', 'jurtutruy', '2019-12-07 14:53:02', NULL),
(6, 'yryhdfhyerthb', 'auiygf@eajgn', 'grsrtyyr', 'rgknwrhniurjfghyn', '2019-12-10 21:52:20', NULL),
(7, 'hr', 'hr@g', 'esger', 'yery', '2019-12-10 21:52:51', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `titulo_img` varchar(50) NOT NULL,
  `texto` varchar(800) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `titulo_postagem` varchar(50) NOT NULL,
  `id_usu` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `nome`, `titulo_img`, `texto`, `created`, `titulo_postagem`, `id_usu`) VALUES
(2, 'benmax', '05122019_160944', 'O método de Pigmentação da Barba consiste em aplicar uma tinta na camada mais superficial da pele para obter uma sombra, que irá se misturar aos pelos da barba deixando a barba falhada e rala passar despercebida podendo ser feita nas costeletas e cavanhaque e em qualquer tamanho de falha.', '2019-12-05 15:16:34', 'Como é a Pigmentação da barba?', ''),
(3, 'Ribamar ribeiro', '07122019_214154', 'tyiujetuhrwtutewuhg', '2019-12-07 21:37:02', 'Lectospiros', '42'),
(4, 'benmax', '09122019_235916', 'kuhvbhkygtv', '2019-12-09 22:59:40', 'tgfcdtdr', '24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `titulo_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `titulo_img`) VALUES
(1, 'Pomada Capilar', '15,00', 'Pomada até para os cabelos mais rebeldes.', '04122019_235442'),
(2, 'Gel cola', '10,00', 'Gel fixador para modelação dos cabelos.', '05122019_000719'),
(3, 'Loção pós-barba', '15,00', 'Para homens com pele sensível, que procuram proteção contra a irritação da pele ', '05122019_000720');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `detalhe` varchar(200) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `titulo_img` varchar(300) NOT NULL,
  `feito` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `detalhe`, `preco`, `titulo_img`, `feito`) VALUES
(1, 'Corte De Cabelo Masculino', 'Corte de cabelo de qualidade e seguindo as especificações do cliente', '15.00', '', '5'),
(2, 'Luzes', 'Aplicação de luzes no cabelo', '30.00', '', '5'),
(3, 'Relaxamento', 'Alisamento químico dos cabelos', '30.00', '', '0'),
(4, 'Modelação e desenho da barba', 'Modelação e desenho da barba apartir do gosto do cliente.', '15.00', '', '5'),
(5, 'Pigmentação da Barba', 'Aplicação de pigmento para dar vida a barba', '20.00', '', '30'),
(6, 'Tintura na barba', 'Pintura da barba para tornar a barba mais bonita', '30.00', '12122019_195602', '25'),
(7, 'tjur', 'urewutwr', '52.00', '12122019_194739', '0'),
(8, 'rhfsarh', 'reherh', '40.00', '12122019_212523', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `titulo_img` varchar(120) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `titulo_img`, `nome`, `email`, `telefone`, `senha`, `nivel`) VALUES
(20, '20_img', 'yohan henrique', 'yohan899@gmail.com', '11967669675', '202cb962ac59075b964b07152d234b70', 1),
(24, '24_img', 'benmax', 'benmax@adm', '1140028922', '202cb962ac59075b964b07152d234b70', 1),
(25, '25_img', 'pablo', 'pablo777@gmail.com', '1140028922', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(26, '26_img', 'Jorge', 'client@test', '55 4003-8934', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(28, '28_img', 'Marcio', 'testador@testante', '400289877', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(30, '30_img', 'Benmaximiliano', 'ben@cli', '84894894', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(31, '31_img', 'Claudio Silva', 'claudinho@client', '55 4006-8499', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(32, '32_img', 'Claudinei', 'claudinei@client', '55 4006-8779', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(33, '33_img', 'MARCINHO', 'viva@ben', '84685494', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(34, '34_img', 'meridiano', 'gren@bem', '654851684', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(35, '35_img', 'fausto silva', 'faust@oloko', '6848946894', '202cb962ac59075b964b07152d234b70', 3),
(38, 'primeira_img', 'Pablo da Silva -BenMax', 'pablo98961@gmail.com', '11 96780-5427', '202cb962ac59075b964b07152d234b70', 0),
(39, 'primeira_img', 'Reginaldo', 'prado@din', '73158763', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(40, 'primeira_img', 'reginaldo pereira', 'ovo@uau', '5456846548', '202cb962ac59075b964b07152d234b70', 2),
(41, 'primeira_img', 'Reginaldin marcolino', 'marco@lino', '35236443', '202cb962ac59075b964b07152d234b70', 2),
(42, 'primeira_img', 'Ribamar ribeiro', 'rib@rob', '7784789485', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fazemos`
--
ALTER TABLE `fazemos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feitos`
--
ALTER TABLE `feitos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens_contatos`
--
ALTER TABLE `mensagens_contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fazemos`
--
ALTER TABLE `fazemos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feitos`
--
ALTER TABLE `feitos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mensagens_contatos`
--
ALTER TABLE `mensagens_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
