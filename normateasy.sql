SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `normateasy` DEFAULT CHARACTER SET utf8 ;
USE `normateasy` ;

-- -----------------------------------------------------
-- Table `normateasy`.`Estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Estado` (
  `codEstado` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(20) NOT NULL,
  `uf` VARCHAR(10) NULL,
  PRIMARY KEY (`codEstado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Cidade` (
  `codCidade` INT NOT NULL AUTO_INCREMENT,
  `Estado_codEstado` INT NOT NULL,
  `uf` VARCHAR(4) NULL,
  `nome` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`codCidade`),
  INDEX `fk_Cidade_Estado1_idx` (`Estado_codEstado` ASC),
  CONSTRAINT `fk_Cidade_Estado1`
    FOREIGN KEY (`Estado_codEstado`)
    REFERENCES `normateasy`.`Estado` (`codEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Usuario` (
  `codUsuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(30) NOT NULL,
  `email` CHAR(45) NOT NULL,
  `senha` CHAR(42) NOT NULL,
  PRIMARY KEY (`codUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Cliente` (
  `codCliente` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(20) NULL,
  `endRua` CHAR(200) NULL,
  `endNum` CHAR(10) NULL,
  `endCep` CHAR(10) NULL,
  `endBairro` CHAR(20) NULL,
  `endComp` CHAR(10) NULL,
  `habilitado` TINYINT(1) NULL,
  `Cidade_codCidade` INT NULL,
  `Usuario_codUsuario` INT NULL,
  PRIMARY KEY (`codCliente`),
  INDEX `fk_Unidade_Cidade1_idx` (`Cidade_codCidade` ASC),
  INDEX `fk_Unidade_Usuario1_idx` (`Usuario_codUsuario` ASC),
  CONSTRAINT `fk_Unidade_Cidade1`
    FOREIGN KEY (`Cidade_codCidade`)
    REFERENCES `normateasy`.`Cidade` (`codCidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Unidade_Usuario1`
    FOREIGN KEY (`Usuario_codUsuario`)
    REFERENCES `normateasy`.`Usuario` (`codUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Fornecedor` (
  `codFornecedor` INT NOT NULL AUTO_INCREMENT,
  `nome` CHAR(45) NOT NULL,
  `razaosocial` CHAR(45) NULL,
  `email` CHAR(45) NULL,
  `cnpj` VARCHAR(20) NULL,
  `inscricaoestadual` VARCHAR(15) NULL,
  `endRua` CHAR(200) NULL,
  `endNum` INT NULL,
  `endCep` CHAR(10) NULL,
  `endBairro` CHAR(20) NULL,
  `endComp` CHAR(10) NULL,
  `Cidade_codCidade` INT NULL,
  PRIMARY KEY (`codFornecedor`),
  INDEX `fk_Fornecedor_Cidade1_idx` (`Cidade_codCidade` ASC),
  CONSTRAINT `fk_Fornecedor_Cidade1`
    FOREIGN KEY (`Cidade_codCidade`)
    REFERENCES `normateasy`.`Cidade` (`codCidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Norma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Norma` (
  `codNorma` INT NOT NULL AUTO_INCREMENT,
  `nome` CHAR(45) NOT NULL,
  `descricao` TEXT NULL,
  `imagem` CHAR(250) NULL,
  `tags` TEXT NOT NULL,
  `Fornecedor_codFornecedor` INT NOT NULL,
  PRIMARY KEY (`codNorma`),
  INDEX `fk_Produto_Fornecedor1_idx` (`Fornecedor_codFornecedor` ASC),
  CONSTRAINT `fk_Produto_Fornecedor1`
    FOREIGN KEY (`Fornecedor_codFornecedor`)
    REFERENCES `normateasy`.`Fornecedor` (`codFornecedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Administrador` (
  `codAdministrador` INT NOT NULL AUTO_INCREMENT,
  `Usuario_codUsuario` INT NOT NULL,
  PRIMARY KEY (`codAdministrador`),
  INDEX `fk_Administrador_Usuario1_idx` (`Usuario_codUsuario` ASC),
  CONSTRAINT `fk_Administrador_Usuario1`
    FOREIGN KEY (`Usuario_codUsuario`)
    REFERENCES `normateasy`.`Usuario` (`codUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`telefone_un`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`telefone_un` (
  `codtelefone` INT NOT NULL AUTO_INCREMENT,
  `ddd` VARCHAR(5) NULL,
  `telefone` VARCHAR(11) NULL,
  `Cliente_codUnidade` INT NOT NULL,
  PRIMARY KEY (`codtelefone`),
  INDEX `fk_telefone_un_Cliente1_idx` (`Cliente_codUnidade` ASC),
  CONSTRAINT `fk_telefone_un_Cliente1`
    FOREIGN KEY (`Cliente_codUnidade`)
    REFERENCES `normateasy`.`Cliente` (`codCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`email`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`email` (
  `codemail` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) NULL,
  `Cliente_codUnidade` INT NOT NULL,
  PRIMARY KEY (`codemail`),
  INDEX `fk_email_Cliente1_idx` (`Cliente_codUnidade` ASC),
  CONSTRAINT `fk_email_Cliente1`
    FOREIGN KEY (`Cliente_codUnidade`)
    REFERENCES `normateasy`.`Cliente` (`codCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Categoria` (
  `codCategoria` INT NOT NULL AUTO_INCREMENT,
  `nome` CHAR(55) NOT NULL,
  PRIMARY KEY (`codCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Subcategoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Subcategoria` (
  `codSubcategoria` INT NOT NULL AUTO_INCREMENT,
  `nome` CHAR(55) NOT NULL,
  `Categoria_codCategoria` INT NOT NULL,
  `Subcategoria_codSubcategoria` INT NULL,
  `Subcategoria_Categoria_codCategoria` INT NULL,
  PRIMARY KEY (`codSubcategoria`, `Categoria_codCategoria`),
  INDEX `fk_Subcategoria_Categoria1_idx` (`Categoria_codCategoria` ASC),
  INDEX `fk_Subcategoria_Subcategoria1_idx` (`Subcategoria_codSubcategoria` ASC, `Subcategoria_Categoria_codCategoria` ASC),
  CONSTRAINT `fk_Subcategoria_Categoria1`
    FOREIGN KEY (`Categoria_codCategoria`)
    REFERENCES `normateasy`.`Categoria` (`codCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Subcategoria_Subcategoria1`
    FOREIGN KEY (`Subcategoria_codSubcategoria` , `Subcategoria_Categoria_codCategoria`)
    REFERENCES `normateasy`.`Subcategoria` (`codSubcategoria` , `Categoria_codCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `normateasy`.`Comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Comentario` (
  `codComentario` INT NOT NULL AUTO_INCREMENT,
  `datainsercao` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `Comentario` TEXT NOT NULL,
  `up` CHAR(2) NULL,
  `down` CHAR(2) NULL,
  `Norma_codNorma` INT NOT NULL,
  `Cliente_codUnidade` INT NOT NULL,
  PRIMARY KEY (`codComentario`),
  INDEX `fk_Comentario_Cliente1_idx` (`Cliente_codUnidade` ASC),
  INDEX `fk_Comentario_Norma1_idx` (`Norma_codNorma` ASC),
  CONSTRAINT `fk_Comentario_Cliente1`
    FOREIGN KEY (`Cliente_codUnidade`)
    REFERENCES `normateasy`.`Cliente` (`codCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comentario_Norma1`
    FOREIGN KEY (`Norma_codNorma`)
    REFERENCES `normateasy`.`Norma` (`codNorma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`like`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`like` (
  `codlike` INT NOT NULL AUTO_INCREMENT,
  `up` CHAR(2) NULL,
  `down` CHAR(2) NULL,
  `Cliente_codUnidade` INT NOT NULL,
  `Norma_codNorma` INT NOT NULL,
  PRIMARY KEY (`codlike`),
  INDEX `fk_like_Cliente1_idx` (`Cliente_codUnidade` ASC),
  INDEX `fk_like_Norma1_idx` (`Norma_codNorma` ASC),
  CONSTRAINT `fk_like_Cliente1`
    FOREIGN KEY (`Cliente_codUnidade`)
    REFERENCES `normateasy`.`Cliente` (`codCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_like_Norma1`
    FOREIGN KEY (`Norma_codNorma`)
    REFERENCES `normateasy`.`Norma` (`codNorma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Norma_Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Norma_Categoria` (
  `Norma_codNorma` INT NOT NULL,
  `Categoria_codCategoria` INT NOT NULL,
  PRIMARY KEY (`Norma_codNorma`, `Categoria_codCategoria`),
  INDEX `fk_Norma_has_Categoria_Categoria1_idx` (`Categoria_codCategoria` ASC),
  INDEX `fk_Norma_has_Categoria_Norma1_idx` (`Norma_codNorma` ASC),
  CONSTRAINT `fk_Norma_has_Categoria_Norma1`
    FOREIGN KEY (`Norma_codNorma`)
    REFERENCES `normateasy`.`Norma` (`codNorma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Norma_has_Categoria_Categoria1`
    FOREIGN KEY (`Categoria_codCategoria`)
    REFERENCES `normateasy`.`Categoria` (`codCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Norma_Subcategoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Norma_Subcategoria` (
  `Norma_codNorma` INT NOT NULL,
  `Subcategoria_codSubcategoria` INT NOT NULL,
  PRIMARY KEY (`Norma_codNorma`, `Subcategoria_codSubcategoria`),
  INDEX `fk_Norma_has_Subcategoria_Subcategoria1_idx` (`Subcategoria_codSubcategoria` ASC),
  INDEX `fk_Norma_has_Subcategoria_Norma1_idx` (`Norma_codNorma` ASC),
  CONSTRAINT `fk_Norma_has_Subcategoria_Norma1`
    FOREIGN KEY (`Norma_codNorma`)
    REFERENCES `normateasy`.`Norma` (`codNorma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Norma_has_Subcategoria_Subcategoria1`
    FOREIGN KEY (`Subcategoria_codSubcategoria`)
    REFERENCES `normateasy`.`Subcategoria` (`codSubcategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Email_captado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Email_captado` (
  `codEmail` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`codEmail`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `normateasy`.`Email_captado_mes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `normateasy`.`Email_captado_mes` (
  `codEmail` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`codEmail`))
ENGINE = InnoDB;

USE `normateasy` ;

-- -----------------------------------------------------
-- procedure ValidarEmail
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarEmail` (IN email VARCHAR(50), IN seletor INT, OUT resultado INT)
BEGIN
SET resultado = 1;

	IF seletor = 1 THEN
	IF (SELECT COUNT(*) FROM Usuario o WHERE o.email = AUX) THEN
		SET resultado = -1;
	END IF;
	END IF;

IF seletor = 2 THEN
	IF (SELECT COUNT(*) FROM Fornecedor o WHERE o.email = AUX) THEN
		SET resultado = -1;
	END IF;
	END IF;


 IF email NOT LIKE '%_@%_.__%' THEN
  SET resultado = -1;
 END IF;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarSenha
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarSenha` (IN senha VARCHAR(50), OUT resultado INT)
BEGIN
  SET resultado = 1;
IF CHAR_LENGTH(senha) <= 4  THEN
  SET resultado = -1;
	END IF;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarCNPJ
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarCNPJ` (IN icnpj VARCHAR(20), OUT resposta INT)
BEGIN

	DECLARE cnpj VARCHAR(20);
    DECLARE RESULTADO TINYINT(4);
    DECLARE indice, soma, dig1, dig2 INT;
    SET resposta = 1;
    SET cnpj = icnpj;

	IF (SELECT COUNT(*) FROM Unidade o WHERE o.cnpj = AUX) THEN
		SET resultado = -1;
	END IF;


    /* Calculo do digito 1 */
    SET indice = 1;
    SET soma = 0;
    WHILE (indice <= 12) do
		IF (indice <= 4) THEN
			SET soma = soma + cast(substring(cnpj, indice, 1) AS unsigned) * (6 - indice);SET indice = indice + 1;
		ELSE
            SET soma = soma	+ cast(substring(cnpj, indice, 1) AS unsigned) * (14 - indice);SET indice = indice + 1;
		END IF;
	END WHILE;
    SET dig1 = 11 - (soma % 11);
    IF dig1 > 9 then
		SET dig1 = 0;
	END IF;

	/* Calculo do digito 2 */
    SET indice = 1;
    SET soma = 0;
    WHILE (indice <= 13) do
		IF (indice <= 5) THEN
			SET soma = soma     + cast(substring(cnpj, indice, 1) AS unsigned) * (7 - indice);
			SET indice = indice + 1;
		ELSE
			SET soma = soma     + cast(substring(cnpj, indice, 1) AS unsigned) * (15 - indice);
            SET indice = indice + 1;
		END IF;
    END WHILE;
    SET dig2 = 11 - (soma % 11);
    IF dig2 > 9 then
		SET dig2 = 0;
	END IF;

	/* Validando */
    IF ((dig1 = Substring(cnpj, Length(cnpj)-1, 1))
		AND ( dig2 = Substring(cnpj, Length(cnpj), 1))) then
		SET RESULTADO = true;
	else
		SET RESULTADO = false;

	END IF;

	IF (RESULTADO = FALSE) THEN
		Set resposta = -1;
	END IF;


END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarPeriodo
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarPeriodo` (IN datainicio TIMESTAMP,IN datafinal TIMESTAMP,OUT resultado INT)
BEGIN
  SET resultado = 1;
IF datainicio>datafinal  THEN
  SET resultado = -1;
	END IF;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarData
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarData` (IN dataa TIMESTAMP, OUT resultado INT)
BEGIN
DECLARE agora  TIMESTAMP;
SET agora = CURRENT_TIMESTAMP;
  SET resultado = 1;
IF agora>dataa  THEN
  SET resultado = -1;
	END IF;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarCEP
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarCEP` (IN AUX VARCHAR(9), OUT resultado INT)
BEGIN

	DECLARE CEP VARCHAR(9);

    SET  RESULTADO = 1;

    SET CEP = AUX;

    SET CEP = REPLACE(CEP,'-','');
    SET CEP = REPLACE(CEP,' ','');
    SET CEP = TRIM(CEP);

    IF CHAR_LENGTH(CEP) <= 7 THEN
    	SET RESULTADO = -1;
    END IF;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarDDD
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarDDD` (IN AUX VARCHAR(5), OUT resultado INT)
BEGIN

	DECLARE DDD VARCHAR(5);

    SET  RESULTADO = 1;

    SET DDD = AUX;

    SET DDD = REPLACE(DDD,'-','');
    SET DDD = REPLACE(DDD,'(','');
    SET DDD = REPLACE(DDD,' ','');
    SET DDD = REPLACE(DDD,')','');
    SET DDD = TRIM(DDD);

    IF CHAR_LENGTH(DDD) <= 1 THEN
    	SET RESULTADO = -1;
    END IF;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarTel
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarTel` (IN AUX VARCHAR(15), OUT resultado INT)
BEGIN

	DECLARE Tel VARCHAR(15);

    SET  RESULTADO = 1;

    SET Tel = AUX;

    SET Tel = REPLACE(Tel,'-','');
    SET Tel = REPLACE(Tel,' ','');
    SET Tel = TRIM(Tel);

    IF CHAR_LENGTH(Tel) <= 6 THEN
    	SET RESULTADO = -1;
    END IF;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarCor
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarCor` (IN AUX VARCHAR(6), OUT resultado INT)
BEGIN

	DECLARE Cor VARCHAR(6);

    SET  RESULTADO = 1;

    SET Cor = AUX;

    SET Cor = REPLACE(Cor,'#','');
    SET Cor = REPLACE(Cor,' ','');
    SET Cor = TRIM(Cor);

    IF CHAR_LENGTH(Cor) <= 5 THEN
    	SET RESULTADO = -1;
    END IF;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidarIE
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidarIE` (IN AUX VARCHAR(15), OUT resultado INT)
BEGIN

	DECLARE IE VARCHAR(15);

    SET  RESULTADO = 1;

    SET IE = AUX;
	IF (SELECT COUNT(*) FROM Unidade o WHERE o.inscricaoEstadual = AUX) THEN
		SET resultado = -1;
	END IF;


    SET IE = REPLACE(IE,'.','');
    SET IE = REPLACE(IE,'-','');
    SET IE = REPLACE(IE,'/','');
    SET IE = REPLACE(IE,' ','');
    SET IE = TRIM(IE);

    IF CHAR_LENGTH(IE) <= 5 THEN
    	SET RESULTADO = -1;
    END IF;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure ValidaDesconto
-- -----------------------------------------------------

DELIMITER $$
USE `normateasy`$$
CREATE PROCEDURE `ValidaDesconto`(IN AUX INT,IN AUXi INT, OUT resultado INT, OUT desconto FLOAT)
BEGIN
DECLARE vpp FLOAT;
DECLARE v  FLOAT;
DECLARE des FLOAT;

SET resultado = 1;
SET vpp = (SELECT `valorpromocional` FROM ProdutoPromocional o WHERE o.codProdutoPromocional = AUX);
SET v = (SELECT `preço` FROM produto o WHERE o.codProduto = AUXi);

SET des=v-vpp;

IF des <= 0 THEN
SET resultado = -1;
END IF;

SET desconto = des;
SET resultado = 1;
END$$

DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
