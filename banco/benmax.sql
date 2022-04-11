-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11-Abr-2022 às 12:01
-- Versão do servidor: 8.0.28-0ubuntu0.20.04.3
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `benmax`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int NOT NULL,
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
(15, 'primeira_img', 'Heitor Carvalho', 'heitor@gmail.com', 'Fui recentemente a JR Barbearia e me surpreendi, o Barbeiro Junior é um excelente profissional, com toda a certeza voltarei mais vezes!!! ', '2022-04-11 02:32:26', '1', '10042022_233114'),
(16, 'primeira_img', 'Vitto Campanella', 'vitto@gmail.com', 'Já conhecia a JR Barbearia, não tenho do que reclamar, só tenho elogios a fazer, sempre quando preciso o Junior me atende com a maior prontidão!! ', '2022-04-11 02:36:19', '0', '10042022_233425');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` int NOT NULL,
  `titulo_aviso` varchar(80) NOT NULL,
  `aviso` varchar(120) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usu` varchar(300) NOT NULL,
  `nome` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
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
  `id` int NOT NULL,
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
  `id` int NOT NULL,
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
  `id` int NOT NULL,
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
  `id` int NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `assunto` varchar(220) NOT NULL,
  `mensagem` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
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

INSERT INTO `posts` (`id`, `nome`, `titulo_img`, `texto`, `titulo_postagem`, `id_usu`) VALUES
(2, 'benmax', '05122019_160944', 'O método de Pigmentação da Barba consiste em aplicar uma tinta na camada mais superficial da pele para obter uma sombra, que irá se misturar aos pelos da barba deixando a barba falhada e rala passar despercebida podendo ser feita nas costeletas e cavanhaque e em qualquer tamanho de falha.', 'Como é a Pigmentação da barba?', ''),
(3, 'benmax', '07122019_214154', 'O que você precisa nem sempre está em um corte do passado, experimente um corte novo, um corte casual moderno, ao chegar na barbearia pergunte ao Barbeiro quais os cortes tendências e o que ele recomenda para o seu cabelo', 'Dê sempre preferência por um corte da moda!', '42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
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
  `id` int NOT NULL,
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
(1, 'Corte De Cabelo Masculino', 'Corte de cabelo de qualidade e seguindo as especificações do cliente', '15.00', '10042022_232104', '5'),
(2, 'Luzes', 'Aplicação de luzes no cabelo', '30.00', '10042022_232148', '5'),
(3, 'Relaxamento', 'Alisamento químico dos cabelos', '30.00', '', '0'),
(4, 'Modelação e desenho da barba', 'Modelação e desenho da barba a partir do gosto do cliente.', '15.00', '10042022_231551', '5'),
(5, 'Pigmentação da Barba', 'Aplicação de pigmento para dar vida a barba', '20.00', '', '30'),
(6, 'Tintura na barba', 'Pintura da barba para tornar a barba mais bonita', '30.00', '12122019_195602', '25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `titulo_img` varchar(120) NOT NULL,
  `nome` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `titulo_img`, `nome`, `email`, `telefone`, `senha`, `nivel`) VALUES
(20, '20_img', 'yohan henrique', 'yohan899@gmail.com', '11967669675', '202cb962ac59075b964b07152d234b70', 1),
(24, '24_img', 'benmax', 'benmax@adm', '1140028922', '202cb962ac59075b964b07152d234b70', 1),
(43, 'primeira_img', 'Heitor Carvalho', 'heitor@gmail.com', '11950112345', 'dbc4d84bfcfe2284ba11beffb853a8c4', 2),
(44, '44_img', 'Vitto Campanella', 'vitto@gmail.com', '11911256700', 'd41d8cd98f00b204e9800998ecf8427e', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fazemos`
--
ALTER TABLE `fazemos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `feitos`
--
ALTER TABLE `feitos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mensagens_contatos`
--
ALTER TABLE `mensagens_contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `fazemos`
--
ALTER TABLE `fazemos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `feitos`
--
ALTER TABLE `feitos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `mensagens_contatos`
--
ALTER TABLE `mensagens_contatos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
