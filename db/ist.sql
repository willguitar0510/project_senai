/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS ist;
USE ist;

# Dump of table pessoas
# ------------------------------------------------------------

DROP TABLE IF EXISTS pessoas;

CREATE TABLE pessoas (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(200) NOT NULL DEFAULT '',
  cpf varchar(11) NOT NULL DEFAULT '',
  endereco text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES pessoas WRITE;
/*!40000 ALTER TABLE pessoas DISABLE KEYS */;

INSERT INTO pessoas (id, nome, cpf, endereco)
VALUES
 (1, 'Marcelo Ramos', '48349778032', 'Rua Luiz Demo, n 120, Bairro Passagem, Tubarão/SC'),
 (2, 'Renato Silva', '76537136024', 'Rua Alexandre de Sá, n 98, Bairro Dehon, Tubarão/SC'),
 (3, 'Maria Cordeiro', '01054804010', 'Rua Júlio Pozza, n 450, Bairro São João, Tubarão/SC');

/*!40000 ALTER TABLE pessoas ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS login;

CREATE TABLE login (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  email varchar(100) NOT NULL DEFAULT '',
  senha varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS racas;

CREATE TABLE racas (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES racas WRITE;
/*!40000 ALTER TABLE racas DISABLE KEYS */;

INSERT INTO racas (id, nome)
VALUES
 (1, 'Pequena'),
 (2, 'Média'),
 (3, 'Grande');

/*!40000 ALTER TABLE racas ENABLE KEYS */;
UNLOCK TABLES;

DROP TABLE IF EXISTS servicos;

CREATE TABLE servicos (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(200) NOT NULL DEFAULT '',
  descricao varchar(200) NOT NULL DEFAULT '',
  preco DECIMAL(10,2) NOT NULL DEFAULT 0,
  tempo int(11) NOT NULL DEFAULT 0,
  fk_raca INT NULL ,
  PRIMARY KEY (id) ,
  CONSTRAINT fk_raca
    FOREIGN KEY (fk_raca )
    REFERENCES raca (Id )
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES servicos WRITE;
/*!40000 ALTER TABLE servicos DISABLE KEYS */;

INSERT INTO servicos (id, nome, descricao, preco, tempo, fk_raca)
VALUES
 (1, 'Lavar e secar', 'Contamos com máquina duo force de secagem rápida', 30, 60, 1),
 (2, 'Tosa completa', 'Tosa feito por profissionais altamente treinados', 60, 120, 1),
 (3, 'Corte de unhas', 'O corte das unhas são feitas com ferramentas apropriadas para pets', 25, 15, 1);

/*!40000 ALTER TABLE servicos ENABLE KEYS */;
UNLOCK TABLES;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
