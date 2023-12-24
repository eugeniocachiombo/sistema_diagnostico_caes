-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Dez-2023 às 06:56
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_diagnostico_caes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `combinacao_sintoma`
--

create database sistema_diagnostico_caes;

use sistema_diagnostico_caes;

CREATE TABLE `combinacao_sintoma` (
  `id_combinacao_sintoma` int(11) NOT NULL,
  `sintomaA` int(11) DEFAULT NULL,
  `sintomaB` int(11) DEFAULT NULL,
  `sintomaC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `combinacao_sintoma`
--

INSERT INTO `combinacao_sintoma` (`id_combinacao_sintoma`, `sintomaA`, `sintomaB`, `sintomaC`) VALUES
(1, 1, 2, 3),
(2, 4, 1, 5),
(3, 7, 8, 9),
(4, 10, 4, 3),
(5, 11, 12, 13),
(6, 14, 15, 16),
(7, 4, 3, 17),
(8, 19, 18, 3),
(9, 9, 19, 20),
(10, 5, 1, 24),
(11, 21, 22, 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca`
--

CREATE TABLE `doenca` (
  `id_doenca` int(11) NOT NULL,
  `nome_doenca` varchar(50) DEFAULT NULL,
  `consequencia_doenca` text DEFAULT NULL,
  `causa_doenca` text DEFAULT NULL,
  `id_combinacao_sintoma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `doenca`
--

INSERT INTO `doenca` (`id_doenca`, `nome_doenca`, `consequencia_doenca`, `causa_doenca`, `id_combinacao_sintoma`) VALUES
(1, 'Parvovirose Canina', 'Afeta o sistema gastrointestinal', 'Vírus parvovírus canino', 1),
(2, 'Leptospirose', 'Bacteriana, ataca rins e fígado', 'Bactéria do gênero Leptospira, geralmente transmitida pela urina de animais infectados', 2),
(3, 'Tosse dos Canis (Traqueobronquite Infecciosa)', 'Inflamação das vias respiratórias', 'Complexo de vírus e bactérias, como o vírus da parainfluenza e a bactéria Bordetella bronchiseptica', 3),
(4, 'Doença de Lyme', 'Transmitida por carrapatos, afeta articulações', 'Bactéria Borrelia burgdorferi, transmitida por carrapatos', 4),
(5, 'Rabdovirose Canina (Raiva)', 'Viral, afeta o sistema nervoso', 'Vírus da raiva, geralmente transmitido por mordida de animais infectados', 5),
(6, 'Dermatite Alérgica à Picada de Pulgas (DAPP)', 'Reação alérgica à saliva de pulgas', 'Reação alérgica à saliva de pulgas', 6),
(7, 'Ehrlichiose Canina', 'Transmitida por carrapatos, afeta células sanguíneas', 'Bactéria Ehrlichia canis, transmitida por carrapatos', 7),
(8, 'Insuficiência Cardíaca Congestiva (ICC)', 'Problemas no coração resultando em acúmulo de fluido', 'Geralmente resulta de doenças cardíacas pré-existentes', 8),
(9, 'Cinomose', 'Viral, afeta sistema respiratório e nervoso.', 'Vírus da cinomose canina', 9),
(10, 'Pancreatite Canina', 'Inflamação do pâncreas', 'Causas variadas, incluindo dieta rica em gordura, trauma ou predisposição genética', 10),
(11, 'Hemangiossarcoma', 'Câncer nos vasos sanguíneos', 'Desenvolvimento anormal de células sanguíneas, muitas vezes associado ao envelhecimento', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sintoma`
--

CREATE TABLE `sintoma` (
  `id_sintoma` int(11) NOT NULL,
  `nome_sintoma` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sintoma`
--

INSERT INTO `sintoma` (`id_sintoma`, `nome_sintoma`) VALUES
(1, 'Vômito'),
(2, 'Diarreia sanguinolenta'),
(3, 'Letargia'),
(4, 'Febre'),
(5, 'Dor abdominal'),
(6, 'Icterícia'),
(7, 'Tosse persistente'),
(8, 'Espirros'),
(9, 'Secreção nasal'),
(10, 'Claudicação'),
(11, 'Mudanças de comportamento'),
(12, 'Agressividade'),
(13, 'Paralisia'),
(14, 'Coceira intensa'),
(15, 'Lambidas excessivas'),
(16, 'Perda de pelo'),
(17, 'Perda de apetite'),
(18, 'Dificuldade respiratória'),
(19, 'Tosse'),
(20, 'Convulsões'),
(21, 'Fraqueza'),
(22, 'Distensão abdominal'),
(23, 'Colapso'),
(24, 'Falta de apetite');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `combinacao_sintoma`
--
ALTER TABLE `combinacao_sintoma`
  ADD PRIMARY KEY (`id_combinacao_sintoma`),
  ADD KEY `sintomaA` (`sintomaA`),
  ADD KEY `sintomaB` (`sintomaB`),
  ADD KEY `sintomaC` (`sintomaC`);

--
-- Índices para tabela `doenca`
--
ALTER TABLE `doenca`
  ADD PRIMARY KEY (`id_doenca`),
  ADD KEY `id_combinacao_sintoma` (`id_combinacao_sintoma`);

--
-- Índices para tabela `sintoma`
--
ALTER TABLE `sintoma`
  ADD PRIMARY KEY (`id_sintoma`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `combinacao_sintoma`
--
ALTER TABLE `combinacao_sintoma`
  MODIFY `id_combinacao_sintoma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `doenca`
--
ALTER TABLE `doenca`
  MODIFY `id_doenca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `sintoma`
--
ALTER TABLE `sintoma`
  MODIFY `id_sintoma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `combinacao_sintoma`
--
ALTER TABLE `combinacao_sintoma`
  ADD CONSTRAINT `combinacao_sintoma_ibfk_1` FOREIGN KEY (`sintomaA`) REFERENCES `sintoma` (`id_sintoma`) ON DELETE CASCADE,
  ADD CONSTRAINT `combinacao_sintoma_ibfk_2` FOREIGN KEY (`sintomaB`) REFERENCES `sintoma` (`id_sintoma`) ON DELETE CASCADE,
  ADD CONSTRAINT `combinacao_sintoma_ibfk_3` FOREIGN KEY (`sintomaC`) REFERENCES `sintoma` (`id_sintoma`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `doenca`
--
ALTER TABLE `doenca`
  ADD CONSTRAINT `doenca_ibfk_1` FOREIGN KEY (`id_combinacao_sintoma`) REFERENCES `combinacao_sintoma` (`id_combinacao_sintoma`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
