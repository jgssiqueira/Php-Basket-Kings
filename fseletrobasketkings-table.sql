SELECT * FROM fseletrobasketkings.produto;

CREATE TABLE `fseletrobasketkings`.`produto` (
  `idproduto` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(150) NOT NULL,
  `preço` DECIMAL(8,2) NULL,
  `preçofinal` DECIMAL(8,2) NULL,
  `imagem` VARCHAR(250) NULL,
  PRIMARY KEY (`idproduto`));


INSERT INTO `fseletrobasketkings`.`produto` (`idproduto`, `categoria`, `descricao`, `preço`, `preçofinal`, `imagem`) VALUES ('1', 'Jerseys', 'Golden State Warrios (Personalize)', '300.00', '200.00', 'Imagens/gsw.jpg');
INSERT INTO `fseletrobasketkings`.`produto` (`idproduto`, `categoria`, `descricao`, `preço`, `preçofinal`, `imagem`) VALUES ('2', 'Jerseys', 'Miami Heat (Personalize)', '300.00', '200.00', 'Imagens/miamiheat.jpg');
INSERT INTO `fseletrobasketkings`.`produto` (`idproduto`, `categoria`, `descricao`, `preço`, `preçofinal`, `imagem`) VALUES ('3', 'Jerseys', 'Los Angeles Lakers (Personalize)', '300.00', '200.00', 'Imagens/lalakers.jpg');
INSERT INTO `fseletrobasketkings`.`produto` (`idproduto`, `categoria`, `descricao`, `preço`, `preçofinal`, `imagem`) VALUES ('4', 'Jerseys', 'Boston Celtics (Personalize)', '300.00', '200.00', 'Imagens/bostonceltics.jpg');
INSERT INTO `fseletrobasketkings`.`produto` (`idproduto`, `categoria`, `descricao`, `preço`, `preçofinal`, `imagem`) VALUES ('5', 'Jerseys', 'Los Angeles Clippers (Personalize)', '300.00', '200.00', 'Imagens/laclippers.jpg');
INSERT INTO `fseletrobasketkings`.`produto` (`idproduto`, `categoria`, `descricao`, `preço`, `preçofinal`, `imagem`) VALUES ('6', 'Jerseys', 'Chicago Bulls (Personalize)', '300.00', '200.00', 'Imagens/chicagobulls.jpg');
INSERT INTO `fseletrobasketkings`.`produto` (`idproduto`, `categoria`, `descricao`, `preço`, `preçofinal`, `imagem`) VALUES ('7', 'Jerseys', 'Milwaukee Bucks (Personalize)', '300.00', '200.00', 'Imagens/bucks.jpg');
INSERT INTO `fseletrobasketkings`.`produto` (`idproduto`, `categoria`, `descricao`, `preço`, `preçofinal`, `imagem`) VALUES ('8', 'Jerseys', 'Orlando Magic (Personalize)', '300.00', '200.00', 'Imagens/orlandomagic.jpg');


CREATE TABLE `fseletrobasketkings`.`pedidos` (
  `idPedidos` INT NOT NULL AUTO_INCREMENT,
  `cliente` VARCHAR(45) NOT NULL,
  `endereço` VARCHAR(150) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `nome do produto` VARCHAR(45) NOT NULL,
  `valor unitário` DECIMAL(8,2) NULL,
  `quantidade` DECIMAL(8,2) NULL,
  `valor total` DECIMAL(8,2) NULL,
  PRIMARY KEY (`idPedidos`));

INSERT INTO `fseletrobasketkings`.`pedidos` (`idPedidos`, `cliente`, `endereço`, `telefone`, `nome do produto`, `valor unitário`, `quantidade`, `valor total`) VALUES ('1', 'Jonathan', 'Rua \"A\"', '(21) 1111-1111', 'Golden State Warrios (Personalize)', '200.00', '2', '400.00');
INSERT INTO `fseletrobasketkings`.`pedidos` (`idPedidos`, `cliente`, `endereço`, `telefone`, `nome do produto`, `valor unitário`, `quantidade`, `valor total`) VALUES ('2', 'Jonas', 'Rua \"B\"', '(21) 2222-2222', 'Miami Heat (Personalize)', '200.00', '3', '600.00');
INSERT INTO `fseletrobasketkings`.`pedidos` (`idPedidos`, `cliente`, `endereço`, `telefone`, `nome do produto`, `valor unitário`, `quantidade`, `valor total`) VALUES ('3', 'Leonardo', 'Rua \"C\"', '(11) 3333-3333', 'Los Angeles Lakers (Personalize)', '200.00', '4', '800.00');
INSERT INTO `fseletrobasketkings`.`pedidos` (`idPedidos`, `cliente`, `endereço`, `telefone`, `nome do produto`, `valor unitário`, `quantidade`, `valor total`) VALUES ('4', 'Arthur', 'Rua \"D\"', '(21) 4444-4444', 'Boston Celtics (Personalize)', '200.00', '2', '400.00');
INSERT INTO `fseletrobasketkings`.`pedidos` (`idPedidos`, `cliente`, `endereço`, `telefone`, `nome do produto`, `valor unitário`, `quantidade`, `valor total`) VALUES ('5', 'Igor', 'Rua \"E\'', '(11) 5555-5555', 'Los Angeles Clippers (Personalize)', '200.00', '1', '200.00');
INSERT INTO `fseletrobasketkings`.`pedidos` (`idPedidos`, `cliente`, `endereço`, `telefone`, `nome do produto`, `valor unitário`, `quantidade`, `valor total`) VALUES ('6', 'Rafael', 'Rua \"F\"', '(11) 6666-6666', 'Chicago Bulls (Personalize)', '200.00', '3', '600.00');
INSERT INTO `fseletrobasketkings`.`pedidos` (`idPedidos`, `cliente`, `endereço`, `telefone`, `nome do produto`, `valor unitário`, `quantidade`, `valor total`) VALUES ('7', 'Leandro', 'Rua \"G\"', '(21) 7777-7777', 'Milwaukee Bucks (Personalize)', '200.00', '1', '200.00');
INSERT INTO `fseletrobasketkings`.`pedidos` (`idPedidos`, `cliente`, `endereço`, `telefone`, `nome do produto`, `valor unitário`, `quantidade`, `valor total`) VALUES ('8', 'Wesley', 'Rua \"H\"', '(21) 8888-8888', 'Orlando Magic (Personalize)', '200.00', '4', '800.00');



