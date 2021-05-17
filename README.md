<h1 align="center">
  Desafio Titan
</h1>

<hr />


<div align="center">
  <sub> Criado por 
    <a href="https://github.com/TiagoSilva-Dev">Tiago Silva
  </sub>
</div>

# 📌 Conteudo

* [Screenshots](#camera-screenshots)


# :camera: Screenshots
<div align="center" display="flex">
   <img src="/public/d1.png" width="400px">
   <img src="/public/d2.png" width="400px">
    <img src="/public/d3.png" width="400px">
   <img src="/public/d4.png" width="400px">
</div>

# :rocket: Technologies
This project was made using the follow technologies:

- [PHP](https://www.php.net/)

* Script para criação do banco 
```bash

-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21


--
-- Banco de dados: `desafio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `precos`
--

DROP TABLE IF EXISTS `precos`;
CREATE TABLE IF NOT EXISTS `precos` (
  `IDPRECO` int NOT NULL AUTO_INCREMENT,
  `PRECO` decimal(6,2) NOT NULL,
  PRIMARY KEY (`IDPRECO`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `IDPROD` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) DEFAULT NULL,
  `COR` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDPROD`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;


```
